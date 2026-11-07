<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\NibRecord;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RekonsiliasiController extends Controller
{
    /**
     * Tampilan Utama Meja Rekonsiliasi & Audit Irisan Data NIB vs UMKM
     */
    public function index(Request $request)
    {
        $statusTab = $request->input('status', 'POTENTIAL_MATCH');
        $filterKecamatan = $request->input('kecamatan');
        $search = $request->input('q');

        // Ringkasan KPI Statistik Rekonsiliasi
        $totalCount = NibRecord::count();
        $potentialCount = NibRecord::where('reconciliation_status', 'POTENTIAL_MATCH')->count();
        $conflictCount = NibRecord::where('reconciliation_status', 'CONFLICTING_INFO')->count();
        $noMatchCount = NibRecord::where('reconciliation_status', 'NO_MATCH')->count();
        $linkedCount = NibRecord::where('reconciliation_status', 'LINKED')->count();
        $separatedCount = NibRecord::where('reconciliation_status', 'SEPARATED')->count();

        // Query tabel kerja
        $query = NibRecord::with(['matchedUmkm.owner', 'reconciler']);

        if (!empty($statusTab) && $statusTab !== 'SEMUA') {
            $query->where('reconciliation_status', $statusTab);
        }

        if (!empty($filterKecamatan) && $filterKecamatan !== 'SEMUA') {
            $query->where('kecamatan', $filterKecamatan);
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('nik', 'like', "%{$search}%")
                  ->orWhere('nib', 'like', "%{$search}%")
                  ->orWhereHas('matchedUmkm', function ($qu) use ($search) {
                      $qu->where('nama_usaha', 'like', "%{$search}%");
                  });
            });
        }

        // Urutkan prioritas: konflik nama tertinggi, atau skor kemiripan tertinggi
        if ($statusTab === 'CONFLICTING_INFO') {
            $query->orderBy('similarity_score', 'asc')->orderBy('id', 'asc');
        } elseif ($statusTab === 'POTENTIAL_MATCH') {
            $query->orderBy('similarity_score', 'desc')->orderBy('id', 'asc');
        } else {
            $query->orderBy('id', 'asc');
        }

        $records = $query->paginate(15)->withQueryString();

        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        // Rekapitulasi per Kecamatan untuk Modal Unduh Lembar Kerja
        $rekapKecamatan = NibRecord::select(
            'kecamatan',
            \DB::raw('COUNT(*) as total'),
            \DB::raw("SUM(CASE WHEN reconciliation_status = 'CONFLICTING_INFO' THEN 1 ELSE 0 END) as conflicts"),
            \DB::raw("SUM(CASE WHEN reconciliation_status = 'POTENTIAL_MATCH' THEN 1 ELSE 0 END) as potential"),
            \DB::raw("SUM(CASE WHEN reconciliation_status = 'NO_MATCH' THEN 1 ELSE 0 END) as no_match")
        )
        ->whereNotNull('kecamatan')
        ->groupBy('kecamatan')
        ->orderByRaw("SUM(CASE WHEN reconciliation_status = 'CONFLICTING_INFO' THEN 1 ELSE 0 END) DESC")
        ->get();

        return view('rekonsiliasi.index', compact(
            'records',
            'statusTab',
            'filterKecamatan',
            'search',
            'totalCount',
            'potentialCount',
            'conflictCount',
            'noMatchCount',
            'linkedCount',
            'separatedCount',
            'daftarKecamatan',
            'rekapKecamatan'
        ));
    }

    /**
     * Tautkan NIB DPMPTSP ke profil UMKM Dinas Koperasi (1-Klik)
     */
    public function tautkan(Request $request, $id)
    {
        $nibRecord = NibRecord::with('matchedUmkm')->findOrFail($id);

        if (!$nibRecord->matched_umkm_id || !$nibRecord->matchedUmkm) {
            return back()->with('error', 'Rekaman NIB ini tidak memiliki referensi UMKM kandidat yang valid.');
        }

        $umkm = $nibRecord->matchedUmkm;

        // Perkaya profil UMKM dengan legalitas NIB resmi OSS
        $umkm->nib = $nibRecord->nib;
        $umkm->jenis_izin = 'NIB_OSS';

        // Perbarui modal dan omzet jika sebelumnya kosong
        if ($nibRecord->modal_usaha > 0 && ($umkm->modal_usaha == 0 || $umkm->modal_usaha === null)) {
            $umkm->modal_usaha = $nibRecord->modal_usaha;
        }
        if ($nibRecord->omset_tahunan > 0 && ($umkm->omset_tahunan == 0 || $umkm->omset_tahunan === null)) {
            $umkm->omset_tahunan = $nibRecord->omset_tahunan;
        }

        $umkm->save();

        // Update status record rekonsiliasi
        $petugas = auth()->user()?->name ?? 'Petugas Verifikator';
        $nibRecord->update([
            'reconciliation_status' => 'LINKED',
            'reconciled_by' => auth()->id(),
            'reconciled_at' => now(),
            'match_notes' => "Berhasil ditautkan ke profil UMKM '{$umkm->nama_usaha}' oleh {$petugas} pada " . now()->translatedFormat('d F Y H:i'),
        ]);

        ActivityLog::record(
            'TAUTKAN_NIB',
            "Penautan NIB {$nibRecord->nib} (DPMPTSP) ke badan usaha '{$umkm->nama_usaha}' (Dinas Koperasi)",
            $umkm,
            ['nib' => null, 'reconciliation_status' => 'POTENTIAL_MATCH'],
            ['nib' => $nibRecord->nib, 'reconciliation_status' => 'LINKED']
        );

        return back()->with('success', "NIB {$nibRecord->nib} berhasil ditautkan ke unit usaha '{$umkm->nama_usaha}'. Profil usaha kini resmi berizin NIB OSS.");
    }

    /**
     * Tetapkan sebagai Usaha Mandiri / Cabang Terpisah (Deteksi Multiusaha)
     */
    public function pisah(Request $request, $id)
    {
        $nibRecord = NibRecord::with('matchedUmkm')->findOrFail($id);
        $alasan = $request->input('catatan', 'Unit usaha terpisah/cabang mandiri milik pelaku usaha yang sama.');

        $petugas = auth()->user()?->name ?? 'Petugas Verifikator';
        $nibRecord->update([
            'reconciliation_status' => 'SEPARATED',
            'reconciled_by' => auth()->id(),
            'reconciled_at' => now(),
            'match_notes' => "Ditetapkan sebagai usaha mandiri terpisah oleh {$petugas}. Catatan: {$alasan}",
        ]);

        ActivityLog::record(
            'PISAHKAN_MULTIUSHA',
            "Pemisahan unit usaha NIB {$nibRecord->nib} ({$nibRecord->nama_lengkap}) dari profil UMKM terdahulu: {$alasan}",
            $nibRecord->matchedUmkm,
            ['reconciliation_status' => $nibRecord->reconciliation_status],
            ['reconciliation_status' => 'SEPARATED', 'alasan' => $alasan]
        );

        return back()->with('success', "NIB {$nibRecord->nib} berhasil ditetapkan sebagai unit usaha mandiri/cabang terpisah.");
    }

    /**
     * Tautkan NIB Masal yang Terbukti Klop Tinggi (Confidence Score >= 85%)
     */
    public function tautkanMasal(Request $request)
    {
        $kecamatan = $request->input('kecamatan');

        $query = NibRecord::where('reconciliation_status', 'POTENTIAL_MATCH')
            ->where('similarity_score', '>=', 85.00)
            ->whereNotNull('matched_umkm_id');

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->where('kecamatan', $kecamatan);
        }

        $candidates = $query->with('matchedUmkm')->get();
        $total = $candidates->count();

        if ($total === 0) {
            return back()->with('info', 'Tidak ada data kandidat klop berkategori keyakinan tinggi (>= 85%) yang siap ditautkan untuk kriteria ini.');
        }

        $petugasId = auth()->id();
        $petugasName = auth()->user()?->name ?? 'Administrator';

        $berhasil = 0;
        foreach ($candidates as $cand) {
            if ($cand->matchedUmkm) {
                $cand->matchedUmkm->update([
                    'nib' => $cand->nib,
                    'jenis_izin' => 'NIB_OSS',
                ]);

                $cand->update([
                    'reconciliation_status' => 'LINKED',
                    'reconciled_by' => $petugasId,
                    'reconciled_at' => now(),
                    'match_notes' => "Disahkan lewat Penautan Masal Aman (Kemiripan {$cand->similarity_score}%) oleh {$petugasName} pada " . now()->format('d/m/Y H:i'),
                ]);
                $berhasil++;
            }
        }

        $cakupan = (!empty($kecamatan) && $kecamatan !== 'SEMUA') ? "di Kecamatan {$kecamatan}" : "seluruh Kabupaten Sinjai";

        ActivityLog::record(
            'TAUTKAN_MASAL_NIB',
            "Penautan masal aman {$berhasil} data NIB OSS berkeyakinan tinggi (>= 85%) {$cakupan}",
            null,
            ['kecamatan' => $kecamatan ?? 'SEMUA'],
            ['total_ditautkan' => $berhasil]
        );

        return back()->with('success', "Berhasil menautkan {$berhasil} NIB OSS secara masal {$cakupan}. Seluruh perubahan tercatat dalam log audit.");
    }

    /**
     * Unduh Lembar Kerja Lapangan untuk Data Konflik / Penyelidikan Fisik (CSV)
     */
    public function eksporKonflik(Request $request): StreamedResponse
    {
        $kecamatan = $request->input('kecamatan');
        $status = $request->input('status', 'CONFLICTING_INFO');

        $query = NibRecord::with('matchedUmkm.owner');

        if (!empty($status) && $status !== 'SEMUA') {
            $query->where('reconciliation_status', $status);
        }

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->where('kecamatan', $kecamatan);
        }

        if ($status === 'CONFLICTING_INFO') {
            $query->orderBy('similarity_score', 'asc')->orderBy('id', 'asc');
        } else {
            $query->orderBy('kecamatan')->orderBy('id', 'asc');
        }

        $filename = 'lembar-kerja-rekonsiliasi-nib-' . ($kecamatan ? strtolower(str_replace(' ', '-', $kecamatan)) : 'sinjai') . '-' . date('Ymd_His') . '.csv';

        return response()->stream(function () use ($query, $kecamatan, $status) {
            $handle = fopen('php://output', 'w');
            
            // UTF-8 BOM untuk Microsoft Excel (Memastikan huruf dan karakter terbaca rapi di Excel)
            fputs($handle, "\xEF\xBB\xBF");

            // Header Tabel Lembar Kerja Verifikasi Lapangan (Baris 1)
            fputcsv($handle, [
                'NO',
                'STATUS_SISTEM',
                'KECAMATAN',
                'ALAMAT_USAHA',
                'NIK_TERLINDUNGI_UU_PDP',
                'NAMA_PEMILIK_DPMPTSP_OSS',
                'NOMOR_NIB_OSS',
                'NAMA_PEMILIK_DINAS_KOPERASI',
                'NAMA_USAHA_DINAS_KOPERASI',
                'SKOR_KEMIRIPAN_NAMA',
                'CATATAN_ANOMALI_SISTEM',
                'VERIFIKASI_FAKTUAL_KTP_ASLI',
                'STATUS_REKOMENDASI_LAPANGAN',
                'CATATAN_TEMUAN_SURVEYOR',
                'NAMA_TERANG_SURVEYOR',
                'PARAF_SURVEYOR_LAPANGAN',
                'PARAF_PELAKU_USAHA'
            ], ';');

            $counter = 1;
            $query->chunk(200, function ($rows) use ($handle, &$counter) {
                foreach ($rows as $r) {
                    $koperasiNama = $r->matchedUmkm?->owner?->nama_lengkap ?? '-';
                    $koperasiUsaha = $r->matchedUmkm?->nama_usaha ?? '-';

                    fputcsv($handle, [
                        $counter++,
                        $r->reconciliation_status,
                        $r->kecamatan,
                        $r->alamat ?: 'Kec. ' . $r->kecamatan,
                        $r->masked_nik,
                        $r->nama_lengkap,
                        $r->nib,
                        $koperasiNama,
                        $koperasiUsaha,
                        $r->similarity_score . '%',
                        $r->match_notes,
                        '[ ] Sesuai DPMPTSP  [ ] Sesuai Koperasi  [ ] 2 Orang Berbeda',
                        '[ ] Tautkan NIB  [ ] Tetapkan 2 Usaha  [ ] Usaha Tutup',
                        '', // Catatan temuan tangan
                        '', // Nama surveyor
                        '', // Paraf surveyor
                        ''  // Paraf pelaku usaha
                    ], ';');
                }
            });

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    /**
     * Tampilan Siap Cetak Lembar Kerja Verifikasi Faktual Lapangan (A4 Landscape)
     */
    public function cetakLembarKerja(Request $request)
    {
        $kecamatan = $request->input('kecamatan');
        $status = $request->input('status', 'CONFLICTING_INFO');

        $query = NibRecord::with('matchedUmkm.owner');

        if (!empty($status) && $status !== 'SEMUA') {
            $query->where('reconciliation_status', $status);
        }

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->where('kecamatan', $kecamatan);
        }

        if ($status === 'CONFLICTING_INFO') {
            $query->orderBy('similarity_score', 'asc')->orderBy('id', 'asc');
        } else {
            $query->orderBy('kecamatan')->orderBy('id', 'asc');
        }

        $records = $query->get();
        $total = $records->count();
        $tanggalCetak = now()->translatedFormat('d F Y');
        $petugasCetak = auth()->user()?->name ?? 'Petugas Verifikator';

        return view('rekonsiliasi.cetak', compact(
            'records',
            'kecamatan',
            'status',
            'total',
            'tanggalCetak',
            'petugasCetak'
        ));
    }
}
