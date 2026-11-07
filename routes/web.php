<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembersihanDataController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

// Halaman Pembuka Publik (Landing Page)
Route::get('/', [\App\Http\Controllers\LandingController::class, 'index'])->name('home');

// Penggantian Tema Warna Khas Sinjai (Diadopsi dari SAMAKI)
Route::get('/theme/switch/{theme}', [\App\Http\Controllers\ThemeController::class, 'switch'])->name('theme.switch');

// Otentikasi
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Area Kerja Utama SIJAI UMKM (Wajib Login)
Route::middleware('auth')->group(function () {
    // 1. Dashboard & Laporan
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/ekspor-excel', [DashboardController::class, 'exportExcel'])->name('dashboard.export');

    // 2. Data UMKM Harian
    Route::prefix('umkm')->name('umkm.')->group(function () {
        Route::get('/', [UmkmController::class, 'index'])->name('index');
        Route::get('/tambah', [UmkmController::class, 'create'])->name('create');
        Route::post('/', [UmkmController::class, 'store'])->name('store');
        Route::get('/{id}', [UmkmController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [UmkmController::class, 'edit'])->name('edit');
        Route::put('/{id}', [UmkmController::class, 'update'])->name('update');
        Route::post('/{id}/verifikasi', [UmkmController::class, 'verify'])->name('verify');
    });

    // API Deteksi Dini Duplikasi (Live saat input)
    Route::get('/api/umkm/check-duplicate', [UmkmController::class, 'checkDuplicate'])->name('api.umkm.checkDuplicate');

    // 3. Pembersihan Data Lama & Diagnosis Masalah
    Route::prefix('pembersihan')->name('pembersihan.')->group(function () {
        Route::get('/', [PembersihanDataController::class, 'index'])->name('index');
        Route::post('/sahkan-masal', [PembersihanDataController::class, 'sahkanMasal'])->name('sahkanMasal');
        Route::get('/unduh-masalah-kecamatan', [PembersihanDataController::class, 'unduhMasalahKecamatan'])->name('unduhMasalahKecamatan');
    });

    // 4. Pengaturan Pengguna (Admin)
    Route::prefix('pengguna')->name('pengguna.')->group(function () {
        Route::get('/', [PenggunaController::class, 'index'])->name('index');
        Route::post('/', [PenggunaController::class, 'store'])->name('store');
        Route::post('/{id}/toggle', [PenggunaController::class, 'toggleActive'])->name('toggle');
    });

    // 5. Cadangan Basis Data (Database Backup & Disaster Recovery - KB-17/KB-18)
    Route::prefix('database')->name('database.')->group(function () {
        Route::get('/backup', [\App\Http\Controllers\DatabaseController::class, 'index'])->name('backup');
        Route::post('/backup', [\App\Http\Controllers\DatabaseController::class, 'create'])->name('backup.create');
        Route::get('/backup/download/{fileName}', [\App\Http\Controllers\DatabaseController::class, 'download'])->name('backup.download');
        Route::delete('/backup/{fileName}', [\App\Http\Controllers\DatabaseController::class, 'delete'])->name('backup.delete');
    });

    // 6. Manajemen Source Code (Diadopsi dari Source Manager SAMAKI)
    Route::prefix('source-manager')->name('source-manager.')->group(function () {
        Route::get('/', [\App\Http\Controllers\SourceManagerController::class, 'index'])->name('index');
        Route::get('/download-zip', [\App\Http\Controllers\SourceManagerController::class, 'downloadZip'])->name('download');
        Route::post('/upload-zip', [\App\Http\Controllers\SourceManagerController::class, 'uploadZip'])->name('upload');
    });

    // 7. Meja Rekonsiliasi & Audit Irisan Data (NIB DPMPTSP vs DATA UKM Dinas Koperasi)
    Route::prefix('rekonsiliasi')->name('rekonsiliasi.')->group(function () {
        Route::get('/', [\App\Http\Controllers\RekonsiliasiController::class, 'index'])->name('index');
        Route::post('/{id}/tautkan', [\App\Http\Controllers\RekonsiliasiController::class, 'tautkan'])->name('tautkan');
        Route::post('/{id}/pisah', [\App\Http\Controllers\RekonsiliasiController::class, 'pisah'])->name('pisah');
        Route::post('/tautkan-masal', [\App\Http\Controllers\RekonsiliasiController::class, 'tautkanMasal'])->name('tautkanMasal');
        Route::get('/ekspor-konflik', [\App\Http\Controllers\RekonsiliasiController::class, 'eksporKonflik'])->name('eksporKonflik');
        Route::get('/cetak-lembar-kerja', [\App\Http\Controllers\RekonsiliasiController::class, 'cetakLembarKerja'])->name('cetakLembarKerja');
    });
});
