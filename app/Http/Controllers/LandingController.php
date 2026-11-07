<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Services\ColorThemeService;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        try {
            $totalUmkm = Umkm::count();
        } catch (\Illuminate\Database\QueryException $e) {
            if (str_contains($e->getMessage(), "doesn't exist") || str_contains($e->getMessage(), '42S02')) {
                \Illuminate\Support\Facades\Artisan::call('sijai:init-db', ['--force' => true]);
                $totalUmkm = Umkm::count();
            } else {
                throw $e;
            }
        }
        $totalTenagaKerja = (int) Umkm::selectRaw("SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total")->value("total");
        $totalOmzet = (float) Umkm::sum('omset_tahunan');
        $totalBerizin = Umkm::where('jenis_izin', '!=', 'BELUM_BERIZIN')->count();

        // 6 Contoh Produk & UMKM Bersih untuk Showcase Publik
        $produkUnggulan = Umkm::with('owner')
            ->where('is_clean', true)
            ->whereNotNull('tahun_berdiri')
            ->where('sektor', '!=', 'Perdagangan & Jasa (NIB OSS)')
            ->orderBy('id', 'asc')
            ->take(6)
            ->get();

        $sebaranKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        $currentTheme = ColorThemeService::current();
        $themeOptions = ColorThemeService::options();

        return view('home.landing', compact(
            'totalUmkm',
            'totalTenagaKerja',
            'totalOmzet',
            'totalBerizin',
            'produkUnggulan',
            'sebaranKecamatan',
            'currentTheme',
            'themeOptions'
        ));
    }
}
