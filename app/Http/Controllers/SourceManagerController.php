<?php

namespace App\Http\Controllers;

use App\Models\SourceRelease;
use App\Services\SourceManagerService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SourceManagerController extends Controller
{
    protected SourceManagerService $sourceManager;

    public function __construct(SourceManagerService $sourceManager)
    {
        $this->sourceManager = $sourceManager;
    }

    /**
     * Tampilan utama Manajemen Source Code khas SAMAKI
     */
    public function index()
    {
        if (!auth()->user()?->isAdmin()) {
            abort(403, 'Akses terbatas khusus Administrator Sistem.');
        }

        $releaseHistory = SourceRelease::orderByDesc('release_id')->take(15)->get();

        // Hitung berkas cadangan lokal
        $backupDir = SourceManagerService::getBackupDirectory();
        $localBackups = glob($backupDir . '/*.zip') ?: [];
        $totalLocalBackups = count($localBackups);

        return view('source_manager.index', [
            'currentVersion' => SourceManagerService::CURRENT_VERSION,
            'currentReleaseName' => SourceManagerService::CURRENT_RELEASE_NAME,
            'releaseHistory' => $releaseHistory,
            'totalLocalBackups' => $totalLocalBackups,
        ]);
    }

    /**
     * Membuat dan mengunduh berkas arsip Source Code (.zip)
     */
    public function downloadZip(): BinaryFileResponse
    {
        if (!auth()->user()?->isAdmin()) {
            abort(403, 'Akses terbatas khusus Administrator Sistem.');
        }

        try {
            $result = $this->sourceManager->createSourceBackup(auth()->user()->name);

            return response()->download($result['file_path'], $result['file_name'], [
                'Content-Type' => 'application/zip',
            ]);
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal membuat arsip source code: ' . $e->getMessage());
        }
    }

    /**
     * Menerima berkas ZIP rilis baru dan menjalankan deploy terverifikasi
     */
    public function uploadZip(Request $request)
    {
        if (!auth()->user()?->isAdmin()) {
            abort(403, 'Akses terbatas khusus Administrator Sistem.');
        }

        $request->validate([
            'zip_file' => 'required|file|mimes:zip|max:102400', // Max 100MB
        ], [
            'zip_file.required' => 'Pilih berkas ZIP source code terlebih dahulu.',
            'zip_file.mimes' => 'Berkas yang diunggah harus berformat arsip .zip yang sah.',
            'zip_file.max' => 'Ukuran berkas ZIP melebihi batas maksimum (100 MB).',
        ]);

        $uploadedFile = $request->file('zip_file');
        $tempPath = $uploadedFile->getRealPath();

        try {
            $result = $this->sourceManager->deploySourceZip($tempPath, auth()->user()->name);

            return redirect()->route('source-manager.index')->with(
                'success',
                "Pembaruan source code berhasil dipasang! Rilis {$result['version']} ({$result['release_name']}) telah aktif dengan " . $result['files_updated'] . " berkas terverifikasi."
            );
        } catch (\Throwable $e) {
            return redirect()->route('source-manager.index')->with(
                'error',
                $e->getMessage()
            );
        }
    }
}
