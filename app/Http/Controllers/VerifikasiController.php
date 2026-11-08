<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\NibRecord;
use App\Models\Umkm;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    /**
     * Meja Kerja Antrean Verifikasi Multi-OPD
     * Sesuai Asas Satu Data & Mandat KB-02, KB-05, KB-07, DT-007
     */
    public function index(Request $request)
    {
        $statusTab = $request->input('status', 'DRAFT');
        $filterKecamatan = $request->input('kecamatan');
        $filterSektor = $request->input('sektor');
        $filterOpd = $request->input('opd', 'SEMUA');
        $search = $request->input('q');

        // Statistik Antrean Verifikasi Real-Time
        $antreanDraftCount = Umkm::where('status', 'DRAFT')->count();
        $perbaikanCount = Umkm::where('status', 'PERBAIKAN')->count();
        $resmiCount = Umkm::where('status', 'RESMI')->count();
        $ditolakCount = Umkm::where('status', 'DITOLAK')->count();
        $konflikNibCount = NibRecord::where('reconciliation_status', 'CONFLICTING_INFO')->count();

        // Query Antrean Kerja
        $query = Umkm::with(['owner', 'verifier']);

        if (!empty($statusTab) && $statusTab !== 'SEMUA') {
            $query->where('status', $statusTab);
        }

        if (!empty($filterKecamatan) && $filterKecamatan !== 'SEMUA') {
            $query->where('kecamatan', $filterKecamatan);
        }

        if (!empty($filterSektor) && $filterSektor !== 'SEMUA') {
            $query->where('sektor', $filterSektor);
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_usaha', 'like', "%{$search}%")
                  ->orWhere('nib', 'like', "%{$search}%")
                  ->orWhereHas('owner', function ($qo) use ($search) {
                      $qo->where('nama_lengkap', 'like', "%{$search}%")
                         ->orWhere('nik', 'like', "%{$search}%");
                  });
            });
        }

        // Filter Fokus OPD
        if ($filterOpd === 'PTSP') {
            // Fokus PTSP: Verifikasi Legalitas & NIB
            $query->whereNotNull('nib');
        } elseif ($filterOpd === 'DINKES_PERINDAG') {
            // Fokus Dinkes/Perindag: Olahan Pangan & Sertifikat Edar
            $query->where(function ($q) {
                $q->where('sektor', 'like', '%Pangan%')
                  ->orWhere('sektor', 'like', '%Kuliner%')
                  ->orWhereNotNull('pirt')
                  ->orWhereNotNull('halal')
                  ->orWhereNotNull('bpom');
            });
        } elseif ($filterOpd === 'KOPERASI') {
            // Fokus Koperasi: Data Skala, Omzet & Modal
            $query->where('omset_tahunan', '>', 0);
        }

        // Urutan prioritas antrean: data bersih diverifikasi lebih dulu
        $records = $query->orderBy('is_clean', 'desc')
            ->orderBy('updated_at', 'desc')
            ->paginate(15)
            ->withQueryString();

        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        $daftarSektor = Umkm::select('sektor')
            ->distinct()
            ->whereNotNull('sektor')
            ->orderBy('sektor')
            ->pluck('sektor');

        return view('verifikasi.index', compact(
            'records',
            'statusTab',
            'filterKecamatan',
            'filterSektor',
            'filterOpd',
            'search',
            'antreanDraftCount',
            'perbaikanCount',
            'resmiCount',
            'ditolakCount',
            'konflikNibCount',
            'daftarKecamatan',
            'daftarSektor'
        ));
    }

    /**
     * Keputusan Verifikasi Resmi Berjenjang
     * Menerapkan Larangan Petugas Sahkan Data Sendiri (KB-05 / DT-003 C2)
     */
    public function putuskan(Request $request, $id)
    {
        $umkm = Umkm::with('owner')->findOrFail($id);

        $request->validate([
            'decision' => 'required|in:RESMI,PERBAIKAN,DITOLAK,TUTUP',
            'catatan' => 'nullable|string|max:500',
            'opd_pemeriksa' => 'nullable|string|max:100',
        ]);

        $decision = $request->input('decision');
        $catatan = $request->input('catatan');
        $opdPemeriksa = $request->input('opd_pemeriksa') ?: (auth()->user()?->dinas ?: 'Tim Verifikasi Terpadu');

        // ASAS INTEGRITAS & PEMISAHAN KEWENANGAN (KB-05 / DT-003 C2):
        // Petugas yang menginput / mencatat dilarang mengesahkan profil usahanya sendiri
        $pencatatLog = ActivityLog::where('umkm_id', $umkm->id)
            ->where('action', 'TAMBAH_UMKM')
            ->first();
        $pencatatId = $pencatatLog?->user_id;

        if ($pencatatId && $pencatatId === auth()->id() && !auth()->user()?->isAdmin()) {
            return back()->with('error', 'Pelanggaran Integritas Sistem: Sesuai aturan KB-05 / DT-003 C2, petugas pencatat DILARANG mengesahkan berkas buatannya sendiri. Berkas wajib diverifikasi oleh verifikator lain.');
        }

        $oldStatus = $umkm->status;
        $statusLabels = [
            'RESMI' => 'DISAHKAN RESMI',
            'PERBAIKAN' => 'DIKEMBALIKAN UNTUK PERBAIKAN',
            'DITOLAK' => 'DITOLAK DENGAN ALASAN RESMI',
            'TUTUP' => 'DITANDAI TIDAK AKTIF / TUTUP',
        ];

        $umkm->update([
            'status' => $decision,
            'catatan_verifikasi' => $catatan ? "[$opdPemeriksa] $catatan" : "Disahkan oleh $opdPemeriksa",
            'verified_at' => now(),
            'verified_by' => auth()->id(),
        ]);

        // Rekam Audit Trail Terperinci (KB-12)
        ActivityLog::record(
            'VERIFIKASI_' . $decision,
            "Keputusan Verifikasi [{$statusLabels[$decision]}] atas usaha '{$umkm->nama_usaha}' oleh " . (auth()->user()?->name ?? 'Verifikator') . " ($opdPemeriksa). Catatan: " . ($catatan ?: '-'),
            $umkm,
            ['status' => $oldStatus],
            ['status' => $decision, 'opd' => $opdPemeriksa, 'catatan' => $catatan]
        );

        return back()->with('success', "Keputusan berhasil disimpan! Status unit usaha '{$umkm->nama_usaha}' kini: {$statusLabels[$decision]}.");
    }

    /**
     * Pengesahan Masal untuk Antrean Data Bersih (Confidence & Clean Record Validated)
     */
    public function putuskanMasal(Request $request)
    {
        $kecamatan = $request->input('kecamatan');
        $limit = (int) $request->input('limit', 100);

        $query = Umkm::where('status', 'DRAFT')
            ->where('is_clean', true)
            ->whereNotNull('nama_usaha')
            ->whereNotNull('kecamatan');

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->where('kecamatan', $kecamatan);
        }

        // Hindari mengesahkan data yang dibuat oleh petugas saat ini (kecuali admin)
        if (!auth()->user()?->isAdmin()) {
            $myRegisteredIds = ActivityLog::where('action', 'TAMBAH_UMKM')
                ->where('user_id', auth()->id())
                ->pluck('umkm_id')
                ->filter();
            if ($myRegisteredIds->isNotEmpty()) {
                $query->whereNotIn('id', $myRegisteredIds);
            }
        }

        $targets = $query->take($limit)->get();
        $total = $targets->count();

        if ($total === 0) {
            return back()->with('info', 'Tidak ada antrean data bersih yang siap disahkan secara masal untuk kriteria ini.');
        }

        $verifikatorName = auth()->user()?->name ?? 'Verifikator Sistem';
        $dinas = auth()->user()?->dinas ?? 'Dinas Terkait';

        $updatedIds = [];
        foreach ($targets as $item) {
            $item->update([
                'status' => 'RESMI',
                'catatan_verifikasi' => "Pengesahan masal data teruji bersih oleh $verifikatorName ($dinas) pada " . now()->translatedFormat('d F Y H:i'),
                'verified_at' => now(),
                'verified_by' => auth()->id(),
            ]);
            $updatedIds[] = $item->id;
        }

        ActivityLog::record(
            'VERIFIKASI_MASAL_RESMI',
            "Pengesahan resmi secara masal sebanyak $total unit usaha berstatus bersih oleh $verifikatorName ($dinas).",
            null,
            ['total_diajukan' => $total],
            ['total_disahkan' => $total, 'sample_ids' => array_slice($updatedIds, 0, 5)]
        );

        return back()->with('success', "Berhasil mengesahkan secara resmi $total unit usaha berkategori data bersih.");
    }
}
