<?php

namespace App\Console\Commands;

use App\Services\SourceManagerService;
use Illuminate\Console\Command;

class SourceBackupCommand extends Command
{
    protected $signature = 'sijai:backup-source';
    protected $description = 'Membuat cadangan arsip source code SIJAI UMKM lengkap dengan manifest (KB-17 / KB-18)';

    public function handle(SourceManagerService $sourceManager): int
    {
        $this->info("======================================================================");
        $this->info("SIJAI UMKM — ARSIP CADANGAN SOURCE CODE (ADOPTI SAMAKI)");
        $this->info("======================================================================");
        $this->line("Mengumpulkan berkas aplikasi, konfigurasi, dan aset...");

        try {
            $startTime = microtime(true);
            $result = $sourceManager->createSourceBackup('Artisan CLI');
            $duration = round(microtime(true) - $startTime, 2);

            $this->info("✓ Arsip source code berhasil dibuat dalam {$duration} detik!");
            $this->table(['Parameter', 'Keterangan'], [
                ['Nama Berkas', $result['file_name']],
                ['Lokasi Berkas', $result['file_path']],
                ['Jumlah Berkas', number_format($result['file_count']) . ' file'],
                ['Ukuran Berkas', round($result['file_size'] / (1024 * 1024), 2) . ' MB'],
                ['Integritas SHA-256', $result['package_sha256']],
                ['Versi Terpasang', SourceManagerService::CURRENT_VERSION . ' (' . SourceManagerService::CURRENT_RELEASE_NAME . ')'],
            ]);

            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $this->error("Pencadangan source code gagal: " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
