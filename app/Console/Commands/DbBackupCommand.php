<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Services\BackupService;
use Illuminate\Console\Command;

class DbBackupCommand extends Command
{
    protected $signature = 'sijai:backup-db {--retention=7 : Batas maksimal berkas backup yang disimpan (kebijakan retensi)}';
    protected $description = 'Menjalankan pencadangan (backup) basis data SIJAI UMKM secara atomik dan konsisten dengan retensi 7 hari.';

    public function handle(BackupService $backupService): int
    {
        $this->info('======================================================================');
        $this->info('SIJAI UMKM — PENCADANGAN BASIS DATA ATOMIK (KB-17 / KB-18)');
        $this->info('======================================================================');
        $this->line('Memulai proses consistent snapshot database...');

        $tStart = microtime(true);

        try {
            $retentionLimit = (int) $this->option('retention') ?: 7;
            $fileName = $backupService->performBackup('Artisan Console CLI (sijai:backup-db)');
            $filePath = $backupService->getBackupPath($fileName);

            $fileSize = $filePath ? filesize($filePath) : 0;
            $sha256 = $filePath ? hash_file('sha256', $filePath) : null;
            $duration = round(microtime(true) - $tStart, 2);

            // Audit Trail
            ActivityLog::record(
                'BACKUP_DATABASE_CLI',
                "Pencadangan basis data via CLI: {$fileName} ({$backupService->formatBytes($fileSize)})",
                null,
                null,
                [
                    'file_name' => $fileName,
                    'file_size' => $fileSize,
                    'duration_seconds' => $duration,
                    'sha256' => $sha256,
                    'retention_limit' => $retentionLimit,
                ]
            );

            $this->info("✓ Pencadangan berhasil dibuat dalam {$duration} detik!");
            $this->table(
                ['Parameter', 'Keterangan'],
                [
                    ['Nama Berkas', $fileName],
                    ['Lokasi Berkas', $filePath],
                    ['Ukuran Berkas', $backupService->formatBytes($fileSize)],
                    ['Integritas SHA-256', $sha256],
                    ['Batas Retensi', "{$retentionLimit} berkas terakhir (berkas lama dibersihkan otomatis)"],
                ]
            );

            // Tampilkan daftar backup yang ada
            $allFiles = $backupService->getBackupFiles();
            $this->line('');
            $this->info("Total Cadangan Tersimpan di Server: " . count($allFiles) . " berkas");
            $tableData = [];
            foreach ($allFiles as $idx => $f) {
                $tableData[] = [
                    $idx + 1,
                    $f['file_name'],
                    $f['file_size_formatted'],
                    $f['created_at_human'],
                    substr($f['sha256'], 0, 16) . '...',
                ];
            }
            $this->table(['No', 'Nama Berkas', 'Ukuran', 'Waktu Dibuat', 'SHA-256'], $tableData);

            $this->info('======================================================================');
            return 0;
        } catch (\Throwable $e) {
            $this->error('Gagal melakukan pencadangan basis data: ' . $e->getMessage());

            ActivityLog::record(
                'BACKUP_DATABASE_FAILED',
                "Pencadangan basis data via CLI gagal: " . $e->getMessage(),
                null,
                null,
                ['error' => $e->getMessage()]
            );

            return 1;
        }
    }
}
