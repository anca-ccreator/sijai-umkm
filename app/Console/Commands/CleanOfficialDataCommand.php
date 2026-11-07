<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanOfficialDataCommand extends Command
{
    protected $signature = 'sijai:bersihkan-resmi';
    protected $description = 'Jalankan Tahap 1: Pembersihan dan Diagnosis Teknis Otomatis pada berkas resmi DATA UKM.xlsx dan 5.213 NIB.xlsx';

    public function handle(): int
    {
        $this->info('Memulai eksekusi Tahap 1: Pembersihan Data Resmi...');

        $scriptPath = base_path('tools/proses-pembersihan-historis.py');
        if (!file_exists($scriptPath)) {
            $this->error("Skrip pembersihan tidak ditemukan di: {$scriptPath}");
            return 1;
        }

        $cmd = 'python ' . escapeshellarg($scriptPath);
        passthru($cmd, $returnVar);

        if ($returnVar === 0) {
            $this->info('Eksekusi Tahap 1 berhasil diselesaikan!');
            return 0;
        }

        $this->error("Terjadi kesalahan saat mengeksekusi skrip (Kode keluar: {$returnVar}).");
        return $returnVar;
    }
}
