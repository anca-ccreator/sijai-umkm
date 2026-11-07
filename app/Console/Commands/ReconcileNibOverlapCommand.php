<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Models\NibRecord;
use App\Models\Umkm;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ReconcileNibOverlapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sijai:reconcile-nib';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jalankan analisis irisan & rekonsiliasi data antara 5.213 NIB.xlsx dan DATA UKM.xlsx';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Memulai rekonsiliasi data irisan NIB DPMPTSP vs UMKM Dinas Koperasi...');

        $scriptPath = base_path('tools/reconcile-nib-records.py');
        if (!file_exists($scriptPath)) {
            $this->error("Script $scriptPath tidak ditemukan!");
            return Command::FAILURE;
        }

        $process = new Process(['python', $scriptPath], base_path());
        $process->setTimeout(300);
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        if (!$process->isSuccessful()) {
            $this->error('Gagal menjalankan proses rekonsiliasi Python.');
            return Command::FAILURE;
        }

        $total = NibRecord::count();
        $potential = NibRecord::where('reconciliation_status', 'POTENTIAL_MATCH')->count();
        $conflict = NibRecord::where('reconciliation_status', 'CONFLICTING_INFO')->count();
        $noMatch = NibRecord::where('reconciliation_status', 'NO_MATCH')->count();

        ActivityLog::record(
            'REKONSILIASI_IRISAN_NIB',
            "Sinkronisasi & rekonsiliasi 5.213 data NIB: $potential klop, $conflict konflik nama, $noMatch mandiri.",
            null,
            null,
            [
                'total' => $total,
                'potential_match' => $potential,
                'conflicting_info' => $conflict,
                'no_match' => $noMatch,
            ]
        );

        $this->info('Sinkronisasi rekonsiliasi berhasil dicatat ke Activity Log.');
        return Command::SUCCESS;
    }
}
