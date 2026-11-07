<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use PDO;
use RuntimeException;

class BackupService
{
    protected string $backupDir;

    public function __construct()
    {
        $this->backupDir = storage_path('app/backups/');
    }

    /**
     * Menjalankan pencadangan (backup) basis data secara konsisten dan atomik
     * dengan penerapan retensi otomatis 7 berkas terakhir.
     *
     * @return string Nama berkas hasil pencadangan
     */
    public function performBackup(?string $actor = null): string
    {
        if (!is_dir($this->backupDir)) {
            if (!mkdir($this->backupDir, 0755, true) && !is_dir($this->backupDir)) {
                throw new RuntimeException("Gagal membuat direktori backup: {$this->backupDir}");
            }
            // Buat file .gitignore di direktori backups agar berkas SQL tidak ikut ter-commit
            file_put_contents($this->backupDir . '.gitignore', "*\n!.gitignore\n");
        }

        $fileName = 'backup_' . date('Ymd_His') . '.sql';
        $filePath = $this->backupDir . $fileName;
        $partialPath = $filePath . '.part';

        $handle = @fopen($partialPath, 'xb');
        if ($handle === false) {
            throw new RuntimeException('Gagal membuat berkas sementara pencadangan SQL (.part).');
        }

        try {
            $pdo = DB::connection()->getPdo();

            // 1. Ambil seluruh objek tabel dan views
            $tables = [];
            $views = [];
            $stmt = $pdo->query('SHOW FULL TABLES');
            if (!$stmt) {
                throw new RuntimeException('Gagal membaca daftar tabel basis data.');
            }
            while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                $type = $row[1] ?? 'BASE TABLE';
                if ($type === 'VIEW') {
                    $views[] = $row[0];
                } else {
                    $tables[] = $row[0];
                }
            }

            // 2. Mulai consistent snapshot
            $pdo->exec('SET SESSION TRANSACTION ISOLATION LEVEL REPEATABLE READ');
            $pdo->exec('START TRANSACTION WITH CONSISTENT SNAPSHOT');

            // 3. Tulis Header File SQL
            $dbName = DB::connection()->getDatabaseName();
            $now = date('Y-m-d H:i:s');
            $actorInfo = $actor ?: 'Sistem SIJAI UMKM';

            $this->write($handle, "-- ======================================================================\n");
            $this->write($handle, "-- SIJAI UMKM — CADANGAN BASIS DATA RESMI KABUPATEN SINJAI\n");
            $this->write($handle, "-- Basis Data : {$dbName}\n");
            $this->write($handle, "-- Dibuat Pada: {$now}\n");
            $this->write($handle, "-- Dipicu Oleh: {$actorInfo}\n");
            $this->write($handle, "-- Integritas : Berkas valid hanya jika diakhiri 'SIJAI_BACKUP_COMPLETE'\n");
            $this->write($handle, "-- ======================================================================\n\n");
            $this->write($handle, "SET NAMES utf8mb4;\n");
            $this->write($handle, "SET FOREIGN_KEY_CHECKS=0;\n");
            $this->write($handle, "SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';\n\n");

            // 4. Dump Setiap Tabel
            foreach ($tables as $table) {
                $quotedTable = $this->quoteIdentifier($table);

                // Dapatkan DDL Create Table
                $createStmt = $pdo->query('SHOW CREATE TABLE ' . $quotedTable);
                if (!$createStmt) {
                    throw new RuntimeException("Gagal membaca struktur skema tabel {$table}.");
                }
                $createRow = $createStmt->fetch(PDO::FETCH_NUM);
                if (!isset($createRow[1])) {
                    throw new RuntimeException("Struktur DDL tidak valid untuk tabel {$table}.");
                }

                $this->write($handle, "-- ----------------------------------------------------------------------\n");
                $this->write($handle, "-- Struktur dan Data untuk Tabel: {$quotedTable}\n");
                $this->write($handle, "-- ----------------------------------------------------------------------\n");
                $this->write($handle, 'DROP TABLE IF EXISTS ' . $quotedTable . ";\n");
                $this->write($handle, $createRow[1] . ";\n\n");

                // Stream Data Baris Menggunakan Unbuffered Query
                $selectStmt = $pdo->prepare('SELECT * FROM ' . $quotedTable, [
                    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false
                ]);
                $selectStmt->execute();

                $colCount = $selectStmt->columnCount();
                $columns = [];
                for ($i = 0; $i < $colCount; $i++) {
                    $meta = $selectStmt->getColumnMeta($i);
                    $columns[] = $this->quoteIdentifier($meta['name'] ?? "col_{$i}");
                }

                $rows = [];
                while ($row = $selectStmt->fetch(PDO::FETCH_NUM)) {
                    $values = array_map(function ($val) use ($pdo) {
                        if ($val === null) {
                            return 'NULL';
                        }
                        $quoted = $pdo->quote((string) $val);
                        return $quoted !== false ? $quoted : "'" . addslashes((string) $val) . "'";
                    }, $row);

                    $rows[] = '(' . implode(', ', $values) . ')';
                    if (count($rows) >= 250) {
                        $this->writeInsertBatch($handle, $quotedTable, $columns, $rows);
                        $rows = [];
                    }
                }

                if (!empty($rows)) {
                    $this->writeInsertBatch($handle, $quotedTable, $columns, $rows);
                }

                $this->write($handle, "\n");
            }

            // Selesaikan transaksi konsisten
            $pdo->commit();

            // 5. Dump Views jika ada
            foreach ($views as $view) {
                $quotedView = $this->quoteIdentifier($view);
                $createStmt = $pdo->query('SHOW CREATE VIEW ' . $quotedView);
                if ($createStmt) {
                    $createRow = $createStmt->fetch(PDO::FETCH_NUM);
                    if (isset($createRow[1])) {
                        $this->write($handle, 'DROP VIEW IF EXISTS ' . $quotedView . ";\n");
                        $this->write($handle, $createRow[1] . ";\n\n");
                    }
                }
            }

            // 6. Tulis Tanda Akhir Integritas
            $this->write($handle, "SET FOREIGN_KEY_CHECKS=1;\n\n");
            $this->write($handle, "-- SIJAI_BACKUP_COMPLETE\n");

            fflush($handle);
            fclose($handle);
            $handle = null;

            // 7. Atomic Rename (.part -> .sql)
            if (!rename($partialPath, $filePath)) {
                throw new RuntimeException("Gagal memfinalisasi berkas backup dari {$partialPath} ke {$filePath}");
            }

            // 8. Terapkan Batas Retensi Otomatis (7 Berkas Terakhir)
            $this->enforceRetention(7);

            return $fileName;
        } catch (\Throwable $e) {
            if (is_resource($handle)) {
                fclose($handle);
            }
            if (file_exists($partialPath)) {
                @unlink($partialPath);
            }
            throw $e;
        }
    }

    protected function write($handle, string $content): void
    {
        $length = strlen($content);
        $written = 0;
        while ($written < $length) {
            $bytes = fwrite($handle, substr($content, $written));
            if ($bytes === false || $bytes === 0) {
                throw new RuntimeException('Gagal menulis data ke berkas cadangan SQL.');
            }
            $written += $bytes;
        }
    }

    protected function writeInsertBatch($handle, string $table, array $columns, array $rows): void
    {
        $sql = 'INSERT INTO ' . $table . ' (' . implode(', ', $columns) . ') VALUES' . "\n"
            . implode(",\n", $rows) . ";\n";
        $this->write($handle, $sql);
    }

    protected function quoteIdentifier(string $identifier): string
    {
        return '`' . str_replace('`', '``', $identifier) . '`';
    }

    /**
     * Mendapatkan daftar berkas backup yang tersedia secara kronologis (terbaru di atas)
     */
    public function getBackupFiles(): array
    {
        if (!is_dir($this->backupDir)) {
            return [];
        }

        $files = scandir($this->backupDir, SCANDIR_SORT_DESCENDING);
        if ($files === false) {
            return [];
        }

        $backups = [];
        foreach ($files as $file) {
            if ($file === '.' || $file === '..' || !str_ends_with($file, '.sql') || !$this->isSafeFileName($file)) {
                continue;
            }

            $path = $this->backupDir . $file;
            if (!is_file($path)) {
                continue;
            }

            $size = filesize($path) ?: 0;
            $mtime = filemtime($path) ?: time();

            $backups[] = [
                'file_name' => $file,
                'file_size' => $size,
                'file_size_formatted' => $this->formatBytes($size),
                'created_at' => date('Y-m-d H:i:s', $mtime),
                'created_at_human' => date('d F Y, H:i', $mtime) . ' WITA',
                'sha256' => hash_file('sha256', $path),
            ];
        }

        return $backups;
    }

    /**
     * Mendapatkan path absolut berkas backup dengan validasi keamanan ketat
     */
    public function getBackupPath(string $fileName): ?string
    {
        if (!$this->isSafeFileName($fileName)) {
            return null;
        }

        $path = $this->backupDir . $fileName;
        return is_file($path) ? $path : null;
    }

    /**
     * Menghapus berkas backup tertentu
     */
    public function deleteBackup(string $fileName): bool
    {
        $path = $this->getBackupPath($fileName);
        if ($path && file_exists($path)) {
            return @unlink($path);
        }
        return false;
    }

    /**
     * Validasi nama berkas untuk mencegah Directory Traversal / LFI
     */
    public function isSafeFileName(string $fileName): bool
    {
        return (bool) preg_match('/^backup_\d{8}_\d{6}\.sql$/', $fileName);
    }

    /**
     * Terapkan batas retensi berkas cadangan (Hapus yang melebihi $limit berkas terbaru)
     */
    public function enforceRetention(int $limit = 7): int
    {
        $files = $this->getBackupFiles();
        if (count($files) <= $limit) {
            return 0;
        }

        $toDelete = array_slice($files, $limit);
        $deleted = 0;
        foreach ($toDelete as $item) {
            if ($this->deleteBackup($item['file_name'])) {
                $deleted++;
            }
        }

        return $deleted;
    }

    public function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
