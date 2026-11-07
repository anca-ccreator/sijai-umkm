<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Services\BackupService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DatabaseController extends Controller
{
    protected BackupService $backupService;

    public function __construct(BackupService $backupService)
    {
        $this->backupService = $backupService;
    }

    public function index(Request $request)
    {
        if (!$request->user()->isAdmin()) {
            return redirect()->route('dashboard')
                ->with('error', 'Hanya Administrator Sistem yang memiliki hak akses untuk mengelola cadangan basis data.');
        }

        $backups = $this->backupService->getBackupFiles();
        $totalSize = array_sum(array_column($backups, 'file_size'));
        $totalSizeFormatted = $this->backupService->formatBytes($totalSize);

        return view('database.backup', compact('backups', 'totalSize', 'totalSizeFormatted'));
    }

    public function create(Request $request)
    {
        if (!$request->user()->isAdmin()) {
            abort(403, 'Akses Ditolak');
        }

        try {
            $actor = $request->user()->name . ' (' . ($request->user()->dinas ?? 'Admin') . ')';
            $fileName = $this->backupService->performBackup($actor);
            $filePath = $this->backupService->getBackupPath($fileName);

            $fileSize = $filePath ? filesize($filePath) : 0;
            $sha256 = $filePath ? hash_file('sha256', $filePath) : null;

            ActivityLog::record(
                'BACKUP_DATABASE_WEB',
                "Pencadangan basis data via antarmuka Web Admin: {$fileName}",
                null,
                null,
                [
                    'file_name' => $fileName,
                    'file_size' => $fileSize,
                    'sha256' => $sha256,
                ]
            );

            return redirect()->route('database.backup')
                ->with('success', "Alhamdulillah! Cadangan basis data baru berhasil dibuat: {$fileName} (" . $this->backupService->formatBytes($fileSize) . ")");
        } catch (\Throwable $e) {
            ActivityLog::record(
                'BACKUP_DATABASE_FAILED',
                "Pencadangan basis data via Web Admin gagal: " . $e->getMessage(),
                null,
                null,
                ['error' => $e->getMessage()]
            );

            return redirect()->route('database.backup')
                ->with('error', 'Gagal membuat cadangan basis data: ' . $e->getMessage());
        }
    }

    public function download(Request $request, string $fileName): BinaryFileResponse|\Illuminate\Http\RedirectResponse
    {
        if (!$request->user()->isAdmin()) {
            abort(403, 'Akses Ditolak');
        }

        $filePath = $this->backupService->getBackupPath($fileName);
        if (!$filePath) {
            return redirect()->route('database.backup')
                ->with('error', 'Berkas cadangan tidak ditemukan atau nama berkas tidak sah.');
        }

        ActivityLog::record(
            'DOWNLOAD_DATABASE_BACKUP',
            "Mengunduh berkas cadangan basis data: {$fileName}",
            null,
            null,
            ['file_name' => $fileName]
        );

        return response()->download($filePath, $fileName, [
            'Content-Type' => 'application/sql',
        ]);
    }

    public function delete(Request $request, string $fileName)
    {
        if (!$request->user()->isAdmin()) {
            abort(403, 'Akses Ditolak');
        }

        if ($this->backupService->deleteBackup($fileName)) {
            ActivityLog::record(
                'DELETE_DATABASE_BACKUP',
                "Menghapus berkas cadangan basis data: {$fileName}",
                null,
                null,
                ['file_name' => $fileName]
            );

            return redirect()->route('database.backup')
                ->with('success', "Berkas cadangan {$fileName} berhasil dihapus dari server.");
        }

        return redirect()->route('database.backup')
            ->with('error', 'Gagal menghapus berkas cadangan.');
    }
}
