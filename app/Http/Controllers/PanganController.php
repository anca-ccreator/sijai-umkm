<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\FoodProduct;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PanganController extends Controller
{
    /**
     * Daftar Kategori Pangan Khas Kabupaten Sinjai (KB-09 Model B)
     */
    public const KATEGORI_PANGAN = [
        'Kopi & Minuman Olahan' => 'Kopi Robusta/Arabika Manipi, Teh Herbal, dsb.',
        'Olahan Ikan & Hasil Laut' => 'Abon Tongkol, Cakalang Asap, Terasi, dsb.',
        'Makanan Ringan & Keripik' => 'Keripik Pisang Tanduk, Keripik Ubi, Stik Keju, dsb.',
        'Manisan & Sirup Buah' => 'Sirup Markisa Manipi, Selai Markisa, Dodol Buah, dsb.',
        'Gula Semut & Olahan Aren' => 'Gula Semut Aren Organik, Gula Merah Cetak, dsb.',
        'Kue Tradisional & Roti' => 'Kue Baruasa, Baje, Bolu Peca, Roti Rumahan, dsb.',
        'Bumbu Masak & Sambal' => 'Sambal Ikan Roa/Cakalang, Bumbu Pasta, Terasi Rebon, dsb.',
        'Lainnya' => 'Olahan pangan lokal lainnya khas Sinjai',
    ];

    /**
     * Tampilan Utama Meja Profil Industri Pengolahan Pangan
     */
    public function index(Request $request)
    {
        $statusTab = $request->input('status', 'SEMUA');
        $filterKecamatan = $request->input('kecamatan');
        $filterKategori = $request->input('kategori');
        $filterHigiene = $request->input('higiene');
        $search = $request->input('q');

        // Metrik KPI Sektoral Pengolahan Pangan
        $totalProduk = FoodProduct::count();
        $totalHalal = FoodProduct::whereNotNull('legalitas_halal')->where('legalitas_halal', '!=', '')->count();
        $totalPirt = FoodProduct::whereNotNull('legalitas_pirt')->where('legalitas_pirt', '!=', '')->count();
        $totalBpom = FoodProduct::whereNotNull('legalitas_bpom')->where('legalitas_bpom', '!=', '')->count();
        $totalHigiene = FoodProduct::where('status_higiene', 'LAYAK_HIGIENE')->count();
        $totalKapasitasBulanan = FoodProduct::sum('kapasitas_produksi_bulanan');
        $totalRealisasiBulanan = FoodProduct::sum('realisasi_produksi_bulanan');

        // Query Tabel Kerja Produk Pangan
        $query = FoodProduct::with(['umkm.owner', 'verifier']);

        if (!empty($statusTab) && $statusTab !== 'SEMUA') {
            if ($statusTab === 'HALAL') {
                $query->whereNotNull('legalitas_halal')->where('legalitas_halal', '!=', '');
            } elseif ($statusTab === 'PIRT') {
                $query->whereNotNull('legalitas_pirt')->where('legalitas_pirt', '!=', '');
            } elseif ($statusTab === 'BPOM') {
                $query->whereNotNull('legalitas_bpom')->where('legalitas_bpom', '!=', '');
            } elseif ($statusTab === 'LAYAK_HIGIENE') {
                $query->where('status_higiene', 'LAYAK_HIGIENE');
            } else {
                $query->where('status_verifikasi', $statusTab);
            }
        }

        if (!empty($filterKecamatan) && $filterKecamatan !== 'SEMUA') {
            $query->whereHas('umkm', function ($q) use ($filterKecamatan) {
                $q->where('kecamatan', $filterKecamatan);
            });
        }

        if (!empty($filterKategori) && $filterKategori !== 'SEMUA') {
            $query->where('kategori_produk', $filterKategori);
        }

        if (!empty($filterHigiene) && $filterHigiene !== 'SEMUA') {
            $query->where('status_higiene', $filterHigiene);
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_produk', 'like', "%{$search}%")
                  ->orWhere('merek_produk', 'like', "%{$search}%")
                  ->orWhere('bahan_baku_utama', 'like', "%{$search}%")
                  ->orWhere('legalitas_pirt', 'like', "%{$search}%")
                  ->orWhere('legalitas_halal', 'like', "%{$search}%")
                  ->orWhereHas('umkm', function ($qu) use ($search) {
                      $qu->where('nama_usaha', 'like', "%{$search}%")
                         ->orWhereHas('owner', function ($qo) use ($search) {
                             $qo->where('nama_lengkap', 'like', "%{$search}%");
                         });
                  });
            });
        }

        $records = $query->orderBy('status_verifikasi', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(15)
            ->withQueryString();

        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        // Daftar UMKM Kategori Kuliner/Pangan untuk pilihan Modal Tambah Produk
        $umkmPanganList = Umkm::where('sektor', 'like', '%Pangan%')
            ->orWhere('sektor', 'like', '%Kuliner%')
            ->orderBy('nama_usaha')
            ->take(50)
            ->get(['id', 'nama_usaha', 'kecamatan']);

        return view('pangan.index', compact(
            'records',
            'statusTab',
            'filterKecamatan',
            'filterKategori',
            'filterHigiene',
            'search',
            'totalProduk',
            'totalHalal',
            'totalPirt',
            'totalBpom',
            'totalHigiene',
            'totalKapasitasBulanan',
            'totalRealisasiBulanan',
            'daftarKecamatan',
            'umkmPanganList'
        ));
    }

    /**
     * Simpan Produk Pangan Olahan Baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'umkm_id' => 'required|exists:umkm,id',
            'nama_produk' => 'required|string|max:255',
            'kategori_produk' => 'required|string|max:100',
            'merek_produk' => 'nullable|string|max:150',
            'satuan_produk' => 'nullable|string|max:50',
            'bahan_baku_utama' => 'nullable|string|max:255',
            'sumber_bahan_baku' => 'nullable|string|max:150',
            'kapasitas_produksi_bulanan' => 'nullable|numeric|min:0',
            'realisasi_produksi_bulanan' => 'nullable|numeric|min:0',
            'satuan_produksi' => 'nullable|string|max:50',
            'legalitas_halal' => 'nullable|string|max:60',
            'tgl_halal_berlaku' => 'nullable|date',
            'legalitas_pirt' => 'nullable|string|max:60',
            'tgl_pirt_berlaku' => 'nullable|date',
            'legalitas_bpom' => 'nullable|string|max:60',
            'status_higiene' => 'nullable|in:LAYAK_HIGIENE,PERLU_PEMBINAAN,BELUM_INSPEKSI',
            'catatan_sanitasi' => 'nullable|string|max:1000',
        ]);

        $product = FoodProduct::create([
            'umkm_id' => $validated['umkm_id'],
            'nama_produk' => $validated['nama_produk'],
            'kategori_produk' => $validated['kategori_produk'],
            'merek_produk' => $validated['merek_produk'] ?? null,
            'satuan_produk' => $validated['satuan_produk'] ?? 'Kemasan',
            'bahan_baku_utama' => $validated['bahan_baku_utama'] ?? null,
            'sumber_bahan_baku' => $validated['sumber_bahan_baku'] ?? 'Lokal Sinjai',
            'kapasitas_produksi_bulanan' => $validated['kapasitas_produksi_bulanan'] ?? 0,
            'realisasi_produksi_bulanan' => $validated['realisasi_produksi_bulanan'] ?? 0,
            'satuan_produksi' => $validated['satuan_produksi'] ?? 'Bungkus',
            'legalitas_halal' => $validated['legalitas_halal'] ?? null,
            'tgl_halal_berlaku' => $validated['tgl_halal_berlaku'] ?? null,
            'legalitas_pirt' => $validated['legalitas_pirt'] ?? null,
            'tgl_pirt_berlaku' => $validated['tgl_pirt_berlaku'] ?? null,
            'legalitas_bpom' => $validated['legalitas_bpom'] ?? null,
            'status_higiene' => $validated['status_higiene'] ?? 'BELUM_INSPEKSI',
            'catatan_sanitasi' => $validated['catatan_sanitasi'] ?? null,
            'status_verifikasi' => 'DRAFT',
        ]);

        // Sinkronisasi legalitas ke induk UMKM jika UMKM belum mencatatnya
        $umkm = Umkm::find($validated['umkm_id']);
        if ($umkm) {
            $needSave = false;
            if (!empty($validated['legalitas_halal']) && empty($umkm->legalitas_halal)) {
                $umkm->legalitas_halal = $validated['legalitas_halal'];
                $needSave = true;
            }
            if (!empty($validated['legalitas_pirt']) && empty($umkm->legalitas_pirt)) {
                $umkm->legalitas_pirt = $validated['legalitas_pirt'];
                $needSave = true;
            }
            if (!empty($validated['legalitas_bpom']) && empty($umkm->legalitas_bpom)) {
                $umkm->legalitas_bpom = $validated['legalitas_bpom'];
                $needSave = true;
            }
            if ($needSave) {
                $umkm->save();
            }
        }

        ActivityLog::record(
            'TAMBAH_PRODUK_PANGAN',
            "Pencatatan produk olahan pangan: '{$product->nama_produk}' ({$product->kategori_produk}) untuk unit usaha '{$umkm?->nama_usaha}'",
            $umkm,
            null,
            $product->toArray()
        );

        return back()->with('success', "Produk olahan pangan '{$product->nama_produk}' berhasil didaftarkan ke profil industri pangan daerah.");
    }

    /**
     * Perbarui Data Produk Pangan
     */
    public function update(Request $request, $id)
    {
        $product = FoodProduct::with('umkm')->findOrFail($id);

        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_produk' => 'required|string|max:100',
            'merek_produk' => 'nullable|string|max:150',
            'satuan_produk' => 'nullable|string|max:50',
            'bahan_baku_utama' => 'nullable|string|max:255',
            'sumber_bahan_baku' => 'nullable|string|max:150',
            'kapasitas_produksi_bulanan' => 'nullable|numeric|min:0',
            'realisasi_produksi_bulanan' => 'nullable|numeric|min:0',
            'satuan_produksi' => 'nullable|string|max:50',
            'legalitas_halal' => 'nullable|string|max:60',
            'tgl_halal_berlaku' => 'nullable|date',
            'legalitas_pirt' => 'nullable|string|max:60',
            'tgl_pirt_berlaku' => 'nullable|date',
            'legalitas_bpom' => 'nullable|string|max:60',
            'status_higiene' => 'nullable|in:LAYAK_HIGIENE,PERLU_PEMBINAAN,BELUM_INSPEKSI',
            'catatan_sanitasi' => 'nullable|string|max:1000',
        ]);

        $old = $product->toArray();
        $product->update($validated);

        ActivityLog::record(
            'EDIT_PRODUK_PANGAN',
            "Pembaruan spesifikasi teknis produk pangan: '{$product->nama_produk}'",
            $product->umkm,
            $old,
            $product->fresh()->toArray()
        );

        return back()->with('success', "Spesifikasi produk pangan '{$product->nama_produk}' berhasil diperbarui.");
    }

    /**
     * Verifikasi Sektoral Mutu & Higiene Pangan (KB-09 Model B)
     */
    public function verifikasi(Request $request, $id)
    {
        $product = FoodProduct::with('umkm')->findOrFail($id);

        $request->validate([
            'status_verifikasi' => 'required|in:TERVERIFIKASI,PERLU_PERBAIKAN,DRAFT',
            'status_higiene' => 'required|in:LAYAK_HIGIENE,PERLU_PEMBINAAN,BELUM_INSPEKSI',
            'catatan_sanitasi' => 'nullable|string|max:1000',
            'petugas_opd' => 'nullable|string|max:100',
        ]);

        $statusVerifikasi = $request->input('status_verifikasi');
        $statusHigiene = $request->input('status_higiene');
        $catatan = $request->input('catatan_sanitasi');
        $opd = $request->input('petugas_opd') ?: (auth()->user()?->dinas ?: 'Dinas Kesehatan & Disperindag Sinjai');

        $oldStatus = $product->status_verifikasi;
        $product->update([
            'status_verifikasi' => $statusVerifikasi,
            'status_higiene' => $statusHigiene,
            'catatan_sanitasi' => $catatan ? "[$opd] $catatan" : $product->catatan_sanitasi,
            'verified_by' => auth()->id(),
            'verified_at' => now(),
        ]);

        ActivityLog::record(
            'VERIFIKASI_SEKTORAL_PANGAN',
            "Verifikasi mutu pangan [{$statusVerifikasi}] atas produk '{$product->nama_produk}' oleh " . (auth()->user()?->name ?? 'Verifikator') . " ($opd). Kelaikan Higiene: {$statusHigiene}",
            $product->umkm,
            ['status_verifikasi' => $oldStatus, 'status_higiene' => $product->getOriginal('status_higiene')],
            ['status_verifikasi' => $statusVerifikasi, 'status_higiene' => $statusHigiene, 'catatan' => $catatan]
        );

        return back()->with('success', "Verifikasi sektoral mutu pangan atas produk '{$product->nama_produk}' berhasil disimpan ({$statusVerifikasi}).");
    }

    /**
     * Unduh Laporan Rekapitulasi Profil Pangan & Kurasi Produk (CSV)
     */
    public function ekspor(Request $request): StreamedResponse
    {
        $kategori = $request->input('kategori');
        $kecamatan = $request->input('kecamatan');

        $query = FoodProduct::with('umkm.owner');

        if (!empty($kategori) && $kategori !== 'SEMUA') {
            $query->where('kategori_produk', $kategori);
        }

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->whereHas('umkm', function ($q) use ($kecamatan) {
                $q->where('kecamatan', $kecamatan);
            });
        }

        $filename = 'rekap_industri_pangan_sinjai_' . date('Ymd_His') . '.csv';

        return response()->stream(function () use ($query) {
            $handle = fopen('php://output', 'w');
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM UTF-8

            // Header Kolom
            fputcsv($handle, [
                'ID_PRODUK',
                'NAMA_PRODUK',
                'KATEGORI_PANGAN',
                'MEREK_DAGANG',
                'NAMA_UNIT_USAHA',
                'NAMA_PEMILIK',
                'KECAMATAN',
                'BAHAN_BAKU_UTAMA',
                'SUMBER_BAHAN_BAKU',
                'KAPASITAS_BULANAN',
                'REALISASI_BULANAN',
                'SATUAN_PRODUKSI',
                'SERTIFIKAT_HALAL',
                'IZIN_PIRT_DINKES',
                'IZIN_BPOM_MD',
                'STATUS_HIGIENE_SANITASI',
                'STATUS_VERIFIKASI_SEKTORAL',
                'TANGGAL_VERIFIKASI',
            ], ';');

            $query->chunk(200, function ($products) use ($handle) {
                foreach ($products as $p) {
                    fputcsv($handle, [
                        $p->id,
                        $p->nama_produk,
                        $p->kategori_produk,
                        $p->merek_produk ?? '-',
                        $p->umkm?->nama_usaha ?? '-',
                        $p->umkm?->owner?->nama_lengkap ?? '-',
                        $p->umkm?->kecamatan ?? '-',
                        $p->bahan_baku_utama ?? '-',
                        $p->sumber_bahan_baku ?? '-',
                        $p->kapasitas_produksi_bulanan,
                        $p->realisasi_produksi_bulanan,
                        $p->satuan_produksi,
                        $p->legalitas_halal ?? 'BELUM',
                        $p->legalitas_pirt ?? 'BELUM',
                        $p->legalitas_bpom ?? 'BELUM',
                        $p->status_higiene,
                        $p->status_verifikasi,
                        $p->verified_at ? $p->verified_at->format('Y-m-d') : '-',
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
     * Lembar Kurasi Produk Pangan Unggulan Siap Cetak (A4 Landscape / PDF)
     */
    public function cetakKurasi(Request $request)
    {
        $kategori = $request->input('kategori');
        $kecamatan = $request->input('kecamatan');

        $query = FoodProduct::with(['umkm.owner', 'verifier']);

        if (!empty($kategori) && $kategori !== 'SEMUA') {
            $query->where('kategori_produk', $kategori);
        }

        if (!empty($kecamatan) && $kecamatan !== 'SEMUA') {
            $query->whereHas('umkm', function ($q) use ($kecamatan) {
                $q->where('kecamatan', $kecamatan);
            });
        }

        $records = $query->orderBy('kategori_produk')->orderBy('nama_produk')->get();
        $total = $records->count();
        $tanggalCetak = now()->translatedFormat('d F Y');
        $petugasCetak = auth()->user()?->name ?? 'Petugas Verifikator Pangan';

        return view('pangan.cetak', compact(
            'records',
            'kategori',
            'kecamatan',
            'total',
            'tanggalCetak',
            'petugasCetak'
        ));
    }
}
