<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PDO;
use Throwable;

class InitDatabaseCommand extends Command
{
    protected $signature = 'sijai:init-db {--force : Paksa inisialisasi ulang basis data meskipun sudah terisi}';
    protected $description = 'Inisialisasi skema dan data SIJAI UMKM secara otomatis jika basis data masih kosong';

    public function handle(): int
    {
        $this->info('Memeriksa status basis data SIJAI UMKM...');

        $force = (bool) $this->option('force');

        // Cek apakah tabel umkm sudah ada dan memiliki data
        $isPopulated = false;
        try {
            if (Schema::hasTable('umkm')) {
                $count = DB::table('umkm')->count();
                if ($count > 0) {
                    $isPopulated = true;
                }
            }
        } catch (Throwable $e) {
            $isPopulated = false;
        }

        if ($isPopulated && !$force) {
            $totalUmkm = DB::table('umkm')->count();
            $this->info("✓ Basis data SIJAI UMKM sudah terisi ($totalUmkm UMKM). Inisialisasi otomatis dilewati.");
            return Command::SUCCESS;
        }

        $this->warn('Basis data kosong atau belum memiliki skema. Memulai inisialisasi...');

        $gzPath = database_path('seeders/initial_database.sql.gz');

        if (!file_exists($gzPath)) {
            $this->warn("Berkas $gzPath tidak ditemukan. Menjalankan migrasi standar...");
            $this->call('migrate', ['--force' => true]);
            $this->call('db:seed', ['--force' => true]);
            return Command::SUCCESS;
        }

        $this->info("Membaca arsip basis data terkompresi: $gzPath (" . round(filesize($gzPath) / 1024 / 1024, 2) . " MB)...");

        $startTime = microtime(true);
        $gz = gzopen($gzPath, 'rb');
        if (!$gz) {
            $this->error('Gagal membuka berkas arsip database.');
            return Command::FAILURE;
        }

        try {
            $pdo = DB::connection()->getPdo();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET FOREIGN_KEY_CHECKS=0;");
            $pdo->exec("SET NAMES utf8mb4;");
            $pdo->exec("SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';");

            $stmtCount = 0;
            $currentQuery = '';

            while (!gzeof($gz)) {
                $line = gzgets($gz, 1048576);
                if ($line === false) {
                    break;
                }

                $trimmed = trim($line);
                if ($trimmed === '' || str_starts_with($trimmed, '--') || str_starts_with($trimmed, '/*')) {
                    continue;
                }

                $currentQuery .= $line;

                if (str_ends_with($trimmed, ';')) {
                    $pdo->exec($currentQuery);
                    $stmtCount++;
                    $currentQuery = '';
                }
            }

            gzclose($gz);
            $pdo->exec("SET FOREIGN_KEY_CHECKS=1;");

            $duration = round(microtime(true) - $startTime, 2);
            $this->info("✓ Inisialisasi basis data selesai dalam {$duration} detik! ($stmtCount batch SQL dieksekusi)");

            // Tampilkan verifikasi jumlah data
            if (Schema::hasTable('umkm')) {
                $totalUmkm = DB::table('umkm')->count();
                $totalOwners = Schema::hasTable('owners') ? DB::table('owners')->count() : 0;
                $totalNib = Schema::hasTable('nib_records') ? DB::table('nib_records')->count() : 0;
                $totalUsers = Schema::hasTable('users') ? DB::table('users')->count() : 0;

                $this->info("  - Total UMKM    : " . number_format($totalUmkm, 0, ',', '.') . " unit usaha");
                $this->info("  - Pemilik Usaha : " . number_format($totalOwners, 0, ',', '.') . " orang");
                $this->info("  - Rekod NIB OSS : " . number_format($totalNib, 0, ',', '.') . " rekod");
                $this->info("  - Akun Pengguna : " . number_format($totalUsers, 0, ',', '.') . " akun");
            }

            return Command::SUCCESS;
        } catch (Throwable $e) {
            if (is_resource($gz)) {
                gzclose($gz);
            }
            $this->error('Terjadi kesalahan saat memulihkan basis data: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
