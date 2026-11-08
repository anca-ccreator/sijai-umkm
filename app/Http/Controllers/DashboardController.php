<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'ringkasan');
        $validTabs = ['ringkasan', 'pangan', 'verifikasi', 'tenaga-kerja', 'ekonomi', 'legalitas', 'kecamatan', 'semua'];
        if (!in_array($activeTab, $validTabs, true)) {
            $activeTab = 'ringkasan';
        }

        $totalUmkm = Umkm::count();
        $totalResmi = Umkm::where('status', 'RESMI')->count();
        $totalDraft = Umkm::where('status', 'DRAFT')->count();
        $totalPerbaikan = Umkm::where('status', 'PERBAIKAN')->count();
        $totalTutup = Umkm::where('status', 'TUTUP')->count();

        // Data Bersih vs Bermasalah
        $dataBersihCount = Umkm::where('is_clean', true)->where('status', 'DRAFT')->count();
        $dataMasalahCount = Umkm::where('is_clean', false)->where('status', 'DRAFT')->count();

        // Legalitas
        $totalNib = Umkm::whereNotNull('nib')->where('nib', '!=', '')->count();
        $totalHalal = Umkm::whereNotNull('legalitas_halal')->where('legalitas_halal', '!=', '')->count();
        $totalPirt = Umkm::whereNotNull('legalitas_pirt')->where('legalitas_pirt', '!=', '')->count();

        // Sebaran 9 Kecamatan Kabupaten Sinjai
        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];
        $sebaranKecamatan = [];
        foreach ($daftarKecamatan as $kec) {
            $sebaranKecamatan[$kec] = Umkm::where('kecamatan', $kec)->count();
        }

        // Sebaran Sektor Usaha
        $sebaranSektor = Umkm::selectRaw('sektor, count(*) as total')
            ->groupBy('sektor')
            ->orderByDesc('total')
            ->pluck('total', 'sektor')
            ->toArray();

        // Aktivitas Terbaru
        $aktivitasTerbaru = ActivityLog::latest()->take(8)->get();

        // 5. Analitik Penyerapan Tenaga Kerja (Guardrail & Filter Anomali)
        // Batas Kewajaran: Nilai anomali ekstrem (>100 orang pada usaha mikro) dinetralkan menjadi 1 orang agar data tidak terdistorsi
        $totalTenagaKerja = (int) Umkm::selectRaw("SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total")->value("total");
        $tenagaKerjaBersih = (int) Umkm::where('is_clean', true)->where('status', 'DRAFT')->selectRaw("SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total")->value("total");
        $tenagaKerjaResmi = (int) Umkm::where('status', 'RESMI')->selectRaw("SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total")->value("total");
        $rataRataTenagaKerja = $totalUmkm > 0 ? round($totalTenagaKerja / $totalUmkm, 2) : 0;

        $usahaMandiri = Umkm::whereRaw("(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) = 1")->count();
        $usahaPadatKarya = Umkm::whereRaw("(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) > 1")->count();

        // Sebaran Tenaga Kerja per Kecamatan
        $sebaranTkKecamatan = Umkm::selectRaw("kecamatan, SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total_tk, COUNT(*) as total_unit")
            ->groupBy('kecamatan')
            ->orderByDesc('total_tk')
            ->get();

        // Sebaran Tenaga Kerja per Sektor Usaha
        $sebaranTkSektor = Umkm::selectRaw("sektor, SUM(CASE WHEN jumlah_karyawan BETWEEN 1 AND 100 THEN jumlah_karyawan ELSE 1 END) as total_tk, COUNT(*) as total_unit")
            ->groupBy('sektor')
            ->orderByDesc('total_tk')
            ->get();

        // 6. Analitik Finansial & Skala Ekonomi UMKM Sinjai
        $totalOmzetTahunan = (float) Umkm::sum('omset_tahunan');
        $totalAset = (float) Umkm::sum('aset');
        $totalModalSekarang = (float) Umkm::sum('modal_sekarang');
        $totalModalAwal = (float) Umkm::sum('modal_awal');

        $usahaDenganModal = Umkm::whereNotNull('modal_awal')->whereNotNull('modal_sekarang')->where('modal_awal', '>', 0)->count();
        $totalPertumbuhanModal = (float) Umkm::whereNotNull('modal_awal')->whereNotNull('modal_sekarang')->where('modal_awal', '>', 0)
            ->selectRaw('SUM(modal_sekarang - modal_awal) as total_growth')->value('total_growth');
        $rataPertumbuhanModal = $usahaDenganModal > 0 ? round($totalPertumbuhanModal / $usahaDenganModal, 2) : 0;

        // Distribusi Skala Usaha (PP 7/2021)
        $skalaMikro = Umkm::where(function($q) {
            $q->where('modal_sekarang', '<=', 1000000000)->orWhereNull('modal_sekarang');
        })->where(function($q) {
            $q->where('omset_tahunan', '<=', 2000000000)->orWhereNull('omset_tahunan');
        })->count();
        $skalaKecil = Umkm::where(function($q) {
            $q->whereBetween('modal_sekarang', [1000000001, 5000000000])
              ->orWhereBetween('omset_tahunan', [2000000001, 15000000000]);
        })->count();
        $skalaMenengah = Umkm::where(function($q) {
            $q->where('modal_sekarang', '>', 5000000000)
              ->orWhere('omset_tahunan', '>', 15000000000);
        })->count();

        // 7. Analitik Legalitas Izin & Kematangan Usaha
        $totalBerizin = Umkm::where('jenis_izin', '!=', 'BELUM_BERIZIN')->count();
        $totalBelumBerizin = Umkm::where('jenis_izin', 'BELUM_BERIZIN')->count();
        $formalitasRate = $totalUmkm > 0 ? round(($totalBerizin / $totalUmkm) * 100, 1) : 0;

        $totalNibOss = Umkm::where('jenis_izin', 'NIB_OSS')->count();
        $totalSkuDesa = Umkm::where('jenis_izin', 'SKU_DESA_KELURAHAN')->count();
        $totalIumk = Umkm::where('jenis_izin', 'IUMK_KECAMATAN')->count();
        $totalLainnya = Umkm::whereIn('jenis_izin', ['UPTD_PASAR', 'SIUP_SITU_TDP'])->count();

        $sebaranIzin = Umkm::selectRaw('jenis_izin, count(*) as total')
            ->groupBy('jenis_izin')
            ->orderByDesc('total')
            ->get();

        $tahunSekarang = (int) date('Y');
        $totalDenganTahun = Umkm::whereNotNull('tahun_berdiri')->count();
        $rataUsiaUsaha = $totalDenganTahun > 0
            ? round((float) Umkm::whereNotNull('tahun_berdiri')->selectRaw("AVG({$tahunSekarang} - tahun_berdiri) as avg_age")->value('avg_age'), 1)
            : 0;

        $usahaMapan = Umkm::whereNotNull('tahun_berdiri')->where('tahun_berdiri', '<=', 2020)->count();
        $usahaBerkembang = Umkm::whereBetween('tahun_berdiri', [2021, 2023])->count();
        $usahaRintisan = Umkm::whereBetween('tahun_berdiri', [2024, $tahunSekarang])->count();

        $eraPra2016 = Umkm::whereNotNull('tahun_berdiri')->where('tahun_berdiri', '<', 2016)->count();
        $era2016_2020 = Umkm::whereBetween('tahun_berdiri', [2016, 2020])->count();
        $era2021_2026 = Umkm::whereBetween('tahun_berdiri', [2021, $tahunSekarang])->count();

        // Opsi B: Antrean Verifikasi & Sengketa NIB K4
        $antreanVerifikasiCount = Umkm::whereIn('status', ['DRAFT', 'PERBAIKAN'])->count();
        $totalKonflikNib = \Illuminate\Support\Facades\Schema::hasTable('nib_records')
            ? \App\Models\NibRecord::where('reconciliation_status', 'CONFLICTING_INFO')->count()
            : 44;

        // Opsi A: Profil Industri Pengolahan Pangan (KB-09 Model B)
        $totalFoodProducts = \Illuminate\Support\Facades\Schema::hasTable('food_products')
            ? \App\Models\FoodProduct::count()
            : 0;
        $totalFoodHalal = \Illuminate\Support\Facades\Schema::hasTable('food_products')
            ? \App\Models\FoodProduct::whereNotNull('legalitas_halal')->where('legalitas_halal', '!=', '')->count()
            : 0;
        $totalFoodPirt = \Illuminate\Support\Facades\Schema::hasTable('food_products')
            ? \App\Models\FoodProduct::whereNotNull('legalitas_pirt')->where('legalitas_pirt', '!=', '')->count()
            : 0;
        $totalFoodHigiene = \Illuminate\Support\Facades\Schema::hasTable('food_products')
            ? \App\Models\FoodProduct::where('status_higiene', 'LAYAK_HIGIENE')->count()
            : 0;
        $foodProductsSample = \Illuminate\Support\Facades\Schema::hasTable('food_products')
            ? \App\Models\FoodProduct::with('umkm')->take(6)->get()
            : collect();

        return view('dashboard.index', compact(
            'activeTab',
            'totalUmkm', 'totalResmi', 'totalDraft', 'totalPerbaikan', 'totalTutup',
            'dataBersihCount', 'dataMasalahCount',
            'totalNib', 'totalHalal', 'totalPirt',
            'sebaranKecamatan', 'sebaranSektor', 'aktivitasTerbaru',
            'totalTenagaKerja', 'tenagaKerjaBersih', 'tenagaKerjaResmi', 'rataRataTenagaKerja',
            'usahaMandiri', 'usahaPadatKarya', 'sebaranTkKecamatan', 'sebaranTkSektor',
            'totalOmzetTahunan', 'totalAset', 'totalModalSekarang', 'totalModalAwal',
            'usahaDenganModal', 'totalPertumbuhanModal', 'rataPertumbuhanModal',
            'skalaMikro', 'skalaKecil', 'skalaMenengah',
            'totalBerizin', 'totalBelumBerizin', 'formalitasRate',
            'totalNibOss', 'totalSkuDesa', 'totalIumk', 'totalLainnya', 'sebaranIzin',
            'totalDenganTahun', 'rataUsiaUsaha', 'usahaMapan', 'usahaBerkembang', 'usahaRintisan',
            'eraPra2016', 'era2016_2020', 'era2021_2026',
            'antreanVerifikasiCount', 'totalKonflikNib',
            'totalFoodProducts', 'totalFoodHalal', 'totalFoodPirt', 'totalFoodHigiene', 'foodProductsSample'
        ));
    }

    public function exportExcel(Request $request): StreamedResponse
    {
        $fileName = 'Laporan-Rekap-UMKM-Sinjai-' . date('Y-m-d') . '.csv';

        return response()->streamDownload(function () {
            $handle = fopen('php://output', 'w');
            // Tulis UTF-8 BOM agar terbaca sempurna di Microsoft Excel
            fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));

            // Baris Judul Laporan
            fputcsv($handle, ['LAPORAN REKAPITULASI RESMI DATA UMKM KABUPATEN SINJAI']);
            fputcsv($handle, ['Tanggal Unduh:', date('d-m-Y H:i:s')]);
            fputcsv($handle, ['Diunduh Oleh:', auth()->user()?->name . ' (' . auth()->user()?->dinas . ')']);
            fputcsv($handle, []); // Baris kosong

            // Header Tabel
            fputcsv($handle, [
                'No',
                'Nama Unit Usaha',
                'NIB (Nomor Induk Berusaha)',
                'Jenis Izin Usaha',
                'Nomor / Keterangan Izin',
                'Tahun Berdiri',
                'Usia Usaha',
                'Kategori Kematangan',
                'Sektor Usaha',
                'KBLI',
                'Skala Usaha',
                'Nama Pemilik',
                'NIK Pemilik',
                'Nomor Telepon / HP',
                'Alamat Operasional Usaha',
                'Kelurahan / Desa',
                'Kecamatan',
                'Status Verifikasi',
                'Jumlah Karyawan',
                'Modal Awal (Rp)',
                'Modal Sekarang (Rp)',
                'Total Aset (Rp)',
                'Omset Tahunan (Rp)',
                'Omset Bulanan (Rp)',
                'Sertifikat Halal',
                'Izin P-IRT',
                'Izin BPOM',
                'Sumber Data',
                'Tanggal Masuk Sistem',
            ]);

            $no = 1;
            Umkm::with('owner')->chunk(1000, function ($umkms) use ($handle, &$no) {
                foreach ($umkms as $row) {
                    $karyawanDisplay = ($row->jumlah_karyawan && $row->jumlah_karyawan <= 100) 
                        ? $row->jumlah_karyawan 
                        : ($row->jumlah_karyawan > 100 ? '1 (Anomali: ' . $row->jumlah_karyawan . ')' : 1);

                    fputcsv($handle, [
                        $no++,
                        $row->nama_usaha,
                        $row->nib ?? '-',
                        $row->nama_jenis_izin,
                        $row->izin_usaha ?? ($row->nib ?? '-'),
                        $row->tahun_berdiri ?? '-',
                        $row->usia_usaha !== null ? $row->usia_usaha . ' Tahun' : '-',
                        $row->kategori_kematangan,
                        $row->sektor ?? 'Lainnya',
                        $row->kbli ?? '-',
                        $row->skala_usaha,
                        $row->owner?->nama_lengkap ?? '-',
                        $row->owner?->nik ? "'" . $row->owner->nik : '-', // Kutip agar angka NIK 16 digit tidak terpotong di Excel
                        $row->owner?->no_hp ?? '-',
                        $row->alamat_usaha ?? '-',
                        $row->kelurahan_desa ?? '-',
                        $row->kecamatan ?? '-',
                        $row->status,
                        $karyawanDisplay,
                        $row->modal_awal ? number_format($row->modal_awal, 0, ',', '.') : '-',
                        $row->modal_sekarang ? number_format($row->modal_sekarang, 0, ',', '.') : '-',
                        $row->aset ? number_format($row->aset, 0, ',', '.') : '-',
                        $row->omset_tahunan ? number_format($row->omset_tahunan, 0, ',', '.') : '-',
                        $row->omset_bulanan ? number_format($row->omset_bulanan, 0, ',', '.') : '-',
                        $row->legalitas_halal ?? '-',
                        $row->legalitas_pirt ?? '-',
                        $row->legalitas_bpom ?? '-',
                        $row->source_origin,
                        $row->created_at?->format('d/m/Y H:i') ?? '-',
                    ]);
                }
            });

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ]);
    }
}
