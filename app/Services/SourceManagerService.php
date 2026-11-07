<?php

namespace App\Services;

use App\Models\ActivityLog;
use App\Models\SourceRelease;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;
use ZipArchive;

class SourceManagerService
{
    public const CURRENT_VERSION = '1.1.0';
    public const CURRENT_RELEASE_NAME = 'Fondasi Adaptif SIJAI UMKM';

    /**
     * Direktori penyimpanan arsip source code
     */
    public static function getBackupDirectory(): string
    {
        $dir = storage_path('app/source_backups');
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        return $dir;
    }

    /**
     * Membuat berkas backup source code (.zip) lengkap dengan manifest
     */
    public function createSourceBackup(?string $performedBy = null): array
    {
        ini_set('max_execution_time', '300');
        ini_set('memory_limit', '512M');

        $rootPath = base_path();
        $timestamp = date('Y_m_d_His');
        $zipFileName = 'backup_source_' . $timestamp . '.zip';
        $backupDir = self::getBackupDirectory();
        $zipFilePath = $backupDir . DIRECTORY_SEPARATOR . $zipFileName;

        $zip = new ZipArchive();
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            throw new RuntimeException("Gagal menginisialisasi berkas arsip zip: {$zipFilePath}");
        }

        // Direktori dan pola yang secara ketat dikecualikan demi keamanan & efisiensi
        $excludePrefixes = [
            str_replace('\\', '/', base_path('storage')),
            str_replace('\\', '/', base_path('vendor')),
            str_replace('\\', '/', base_path('node_modules')),
            str_replace('\\', '/', base_path('.git')),
            str_replace('\\', '/', base_path('public/uploads')),
            str_replace('\\', '/', base_path('public/backups')),
        ];

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::LEAVES_ONLY,
            RecursiveIteratorIterator::CATCH_GET_CHILD
        );

        $includedFiles = [];
        $manifestEntries = [];

        foreach ($files as $file) {
            if ($file->isDir()) {
                continue;
            }

            $realPath = $file->getRealPath();
            if (!$realPath) {
                continue;
            }

            $normalizedPath = str_replace('\\', '/', $realPath);

            // Cek pengecualian
            $isExcluded = false;
            foreach ($excludePrefixes as $prefix) {
                if (str_starts_with($normalizedPath, $prefix)) {
                    $isExcluded = true;
                    break;
                }
            }

            if ($isExcluded) {
                continue;
            }

            // Dapatkan path relatif terhadap root aplikasi
            $relativePath = ltrim(substr($normalizedPath, strlen(str_replace('\\', '/', $rootPath))), '/');

            // Abaikan file lingkungan atau file rahasia
            $baseName = strtolower(basename($relativePath));
            if ($baseName === '.env' || str_starts_with($baseName, '.env.') || str_ends_with($baseName, '.sql') || str_ends_with($baseName, '.sqlite')) {
                continue;
            }

            // Abaikan arsip zip sementara
            if (str_ends_with($baseName, '.zip') || str_ends_with($baseName, '.part')) {
                continue;
            }

            // Tambahkan berkas ke dalam ZIP
            $zip->addFile($realPath, $relativePath);
            $sha256 = hash_file('sha256', $realPath);
            $includedFiles[] = $relativePath;
            $manifestEntries[] = [
                'path' => $relativePath,
                'sha256' => $sha256,
                'size' => filesize($realPath),
            ];
        }

        // Buat manifest paket rilis khas SAMAKI (sijai-release.json)
        $manifestData = [
            'app' => 'SIJAI UMKM — Kabupaten Sinjai',
            'version' => self::CURRENT_VERSION,
            'name' => self::CURRENT_RELEASE_NAME,
            'generated_at' => date('Y-m-d H:i:s') . ' WITA',
            'generator' => 'SourceManagerService v1.0',
            'file_count' => count($includedFiles),
            'files' => $manifestEntries,
        ];
        $manifestJson = json_encode($manifestData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $manifestSha256 = hash('sha256', $manifestJson);
        $zip->addFromString('sijai-release.json', $manifestJson);

        $zip->close();

        $packageSha256 = hash_file('sha256', $zipFilePath);
        $fileSize = filesize($zipFilePath);

        // Catat ke dalam riwayat rilis
        $release = SourceRelease::create([
            'version' => self::CURRENT_VERSION,
            'release_name' => self::CURRENT_RELEASE_NAME,
            'manifest_sha256' => $manifestSha256,
            'package_sha256' => $packageSha256,
            'file_count' => count($includedFiles),
            'status' => 'success',
            'summary' => "Pencadangan source code berhasil: {$zipFileName} (" . count($includedFiles) . " file, " . round($fileSize / (1024 * 1024), 2) . " MB).",
            'deployed_by' => $performedBy ?? auth()->user()?->name ?? 'Admin Sistem',
            'deployed_at' => now(),
        ]);

        ActivityLog::record(
            'BACKUP_SOURCE',
            "Membuat arsip source code {$zipFileName} (" . count($includedFiles) . " berkas, SHA-256: " . substr($packageSha256, 0, 16) . "...)"
        );

        return [
            'file_name' => $zipFileName,
            'file_path' => $zipFilePath,
            'file_size' => $fileSize,
            'file_count' => count($includedFiles),
            'package_sha256' => $packageSha256,
            'manifest_sha256' => $manifestSha256,
            'release' => $release,
        ];
    }

    /**
     * Deploy / Update Source Code dari berkas ZIP yang diunggah
     * Dilengkapi validasi keamanan (preflight, syntax check, atomik & rollback snapshot)
     */
    public function deploySourceZip(string $uploadedZipPath, ?string $deployedBy = null): array
    {
        ini_set('max_execution_time', '600');
        ini_set('memory_limit', '512M');

        $rootPath = rtrim(base_path(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        $stagingId = uniqid('staging_', true);
        $rollbackId = uniqid('rollback_', true);
        $backupDir = self::getBackupDirectory();
        $stagingPath = $backupDir . DIRECTORY_SEPARATOR . $stagingId;
        $rollbackPath = $backupDir . DIRECTORY_SEPARATOR . $rollbackId;

        $zip = new ZipArchive();
        if ($zip->open($uploadedZipPath) !== true) {
            throw new RuntimeException("Berkas tidak dapat dibuka sebagai arsip ZIP yang sah.");
        }

        $packageSha256 = hash_file('sha256', $uploadedZipPath);
        $deployedBy = $deployedBy ?? auth()->user()?->name ?? 'Admin Sistem';

        // 1. PRE-FLIGHT VALIDATION: Cek keamanan seluruh path dalam ZIP
        $entryCount = $zip->numFiles;
        $safeEntries = [];
        $hasManifest = false;
        $manifestContent = null;

        for ($i = 0; $i < $entryCount; $i++) {
            $entryName = $zip->getNameIndex($i);
            if ($entryName === false) {
                continue;
            }

            // Normalisasi path
            $entryPath = str_replace('\\', '/', $entryName);

            // Cek path traversal
            if (str_contains($entryPath, '../') || str_contains($entryPath, '..\\') || str_starts_with($entryPath, '/')) {
                $zip->close();
                throw new RuntimeException("Keamanan: ZIP mengandung path traversal berbahaya [{$entryName}]. Deploy dibatalkan.");
            }

            // Cek larangan akses ke file rahasia
            $baseName = strtolower(basename($entryPath));
            if ($baseName === '.env' || str_starts_with($baseName, '.env.') || str_starts_with($entryPath, 'storage/')) {
                $zip->close();
                throw new RuntimeException("Keamanan: ZIP mencoba menimpa berkas konfigurasi/rahasia sistem [{$entryName}]. Tindakan ditolak.");
            }

            if ($baseName === 'sijai-release.json') {
                $hasManifest = true;
                $manifestContent = $zip->getFromIndex($i);
            }

            $safeEntries[] = $entryPath;
        }

        // 2. EKSTRAKSI KE FOLDER STAGING
        if (!mkdir($stagingPath, 0755, true)) {
            $zip->close();
            throw new RuntimeException("Gagal membuat direktori staging sementara untuk verifikasi.");
        }

        $zip->extractTo($stagingPath);
        $zip->close();

        // Baca manifest bila ada
        $releaseVersion = self::CURRENT_VERSION;
        $releaseName = self::CURRENT_RELEASE_NAME;
        $manifestSha256 = null;

        if ($hasManifest && $manifestContent) {
            $manifestJson = json_decode($manifestContent, true);
            if (is_array($manifestJson)) {
                $releaseVersion = $manifestJson['version'] ?? $releaseVersion;
                $releaseName = $manifestJson['name'] ?? $releaseName;
                $manifestSha256 = hash('sha256', $manifestContent);
            }
        }

        // Catat status awal rilis (pending)
        $release = SourceRelease::create([
            'version' => $releaseVersion,
            'release_name' => $releaseName,
            'manifest_sha256' => $manifestSha256,
            'package_sha256' => $packageSha256,
            'file_count' => count($safeEntries),
            'status' => 'pending',
            'summary' => 'Memulai proses preflight linting & snapshot...',
            'deployed_by' => $deployedBy,
            'deployed_at' => now(),
        ]);

        // 3. SYNTAX CHECK (LINTING PHP) PADA BERKAS STAGING
        $stagingFiles = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($stagingPath, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($stagingFiles as $file) {
            if ($file->isDir()) {
                continue;
            }
            if ($file->getExtension() === 'php') {
                $lintError = $this->lintPhpFile($file->getRealPath());
                if ($lintError !== null) {
                    $this->removeDirectory($stagingPath);
                    $release->update([
                        'status' => 'failed',
                        'summary' => "Gagal linting PHP: {$lintError}",
                    ]);
                    throw new RuntimeException("Validasi Gagal: {$lintError}. Tidak ada berkas yang diubah pada aplikasi aktif.");
                }
            }
        }

        // 4. MEMBUAT ROLLBACK SNAPSHOT DARI BERKAS ASLI
        if (!mkdir($rollbackPath, 0755, true)) {
            $this->removeDirectory($stagingPath);
            $release->update(['status' => 'failed', 'summary' => 'Gagal membuat direktori rollback snapshot']);
            throw new RuntimeException("Gagal menyiapkan direktori rollback snapshot.");
        }

        $appliedFiles = [];
        try {
            foreach ($safeEntries as $relPath) {
                $stagedFile = $stagingPath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relPath);
                if (!is_file($stagedFile)) {
                    continue; // Direktori dilewati
                }

                $targetFile = $rootPath . str_replace('/', DIRECTORY_SEPARATOR, $relPath);
                $rollbackFile = $rollbackPath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relPath);

                // Buat snapshot file lama bila ada
                $hadOriginal = is_file($targetFile);
                if ($hadOriginal) {
                    $rollbackParent = dirname($rollbackFile);
                    if (!is_dir($rollbackParent)) {
                        mkdir($rollbackParent, 0755, true);
                    }
                    copy($targetFile, $rollbackFile);
                }

                // Salin berkas baru dari staging ke target
                $targetParent = dirname($targetFile);
                if (!is_dir($targetParent)) {
                    mkdir($targetParent, 0755, true);
                }

                if (!copy($stagedFile, $targetFile)) {
                    throw new RuntimeException("Gagal menyalin berkas [{$relPath}] ke direktori sistem.");
                }

                $appliedFiles[] = [
                    'path' => $relPath,
                    'had_original' => $hadOriginal,
                ];
            }

            // SUKSES DEPLOY: Bersihkan staging & rollback
            $this->removeDirectory($stagingPath);
            $this->removeDirectory($rollbackPath);

            $release->update([
                'status' => 'success',
                'summary' => "Deploy rilis {$releaseVersion} berhasil (" . count($appliedFiles) . " berkas dipasang).",
            ]);

            ActivityLog::record(
                'DEPLOY_SOURCE',
                "Deploy pembaruan source code rilis {$releaseVersion} ({$releaseName}) berhasil diterapkan oleh {$deployedBy} (" . count($appliedFiles) . " berkas)."
            );

            return [
                'status' => 'success',
                'version' => $releaseVersion,
                'release_name' => $releaseName,
                'files_updated' => count($appliedFiles),
                'package_sha256' => $packageSha256,
            ];
        } catch (\Throwable $e) {
            // ROLLBACK SEMUA PERUBAHAN
            foreach (array_reverse($appliedFiles) as $item) {
                $targetFile = $rootPath . str_replace('/', DIRECTORY_SEPARATOR, $item['path']);
                $rollbackFile = $rollbackPath . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $item['path']);
                if ($item['had_original'] && is_file($rollbackFile)) {
                    @copy($rollbackFile, $targetFile);
                } elseif (!$item['had_original'] && is_file($targetFile)) {
                    @unlink($targetFile);
                }
            }

            $this->removeDirectory($stagingPath);
            $this->removeDirectory($rollbackPath);

            $release->update([
                'status' => 'failed',
                'summary' => "Deploy dibatalkan dan berhasil di-rollback: " . $e->getMessage(),
            ]);

            ActivityLog::record(
                'DEPLOY_FAILED',
                "Deploy pembaruan source code gagal dan berhasil di-rollback secara utuh: " . $e->getMessage()
            );

            throw new RuntimeException("Proses deploy dibatalkan dan sistem dikembalikan ke kondisi semula: " . $e->getMessage());
        }
    }

    /**
     * Menjalankan linting sintaks PHP menggunakan CLI
     */
    private function lintPhpFile(string $filePath): ?string
    {
        $phpBinary = 'C:\xampp\php\php.exe';
        if (!is_file($phpBinary)) {
            $phpBinary = PHP_BINARY;
        }

        if (!is_file($phpBinary)) {
            return null; // Linting dilewati bila PHP binary tidak ditemukan
        }

        $output = [];
        $exitCode = 0;
        @exec(escapeshellarg($phpBinary) . ' -l ' . escapeshellarg($filePath) . ' 2>&1', $output, $exitCode);
        $resultText = trim(implode(' ', $output));

        if ($exitCode === 0 && str_contains(strtolower($resultText), 'no syntax errors detected')) {
            return null;
        }

        return "Sintaks PHP tidak valid pada berkas (" . basename($filePath) . "): " . $resultText;
    }

    /**
     * Menghapus direktori rekursif secara aman
     */
    private function removeDirectory(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }

        $items = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($items as $item) {
            if ($item->isDir()) {
                @rmdir($item->getPathname());
            } else {
                @unlink($item->getPathname());
            }
        }

        @rmdir($dir);
    }
}
