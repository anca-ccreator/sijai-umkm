<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Owner;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $query = Umkm::with('owner')->latest();

        // Pencarian Kata Kunci
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_usaha', 'like', "%{$search}%")
                  ->orWhere('nib', 'like', "%{$search}%")
                  ->orWhereHas('owner', function ($oq) use ($search) {
                      $oq->where('nama_lengkap', 'like', "%{$search}%")
                         ->orWhere('nik', 'like', "%{$search}%");
                  });
            });
        }

        // Filter Kecamatan
        if ($kecamatan = $request->input('kecamatan')) {
            $query->where('kecamatan', $kecamatan);
        }

        // Filter Status
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        // Filter Sektor
        if ($sektor = $request->input('sektor')) {
            $query->where('sektor', $sektor);
        }

        $umkms = $query->paginate(12)->withQueryString();

        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        return view('umkm.index', compact('umkms', 'daftarKecamatan'));
    }

    public function create()
    {
        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        $daftarSektor = [
            'Kuliner / Pengolahan Pangan',
            'Perdagangan / Toko Kelontong',
            'Jasa & Perbengkelan',
            'Pertanian & Peternakan',
            'Perikanan & Kelautan',
            'Kerajinan / Industri Kreatif',
            'Lainnya',
        ];

        return view('umkm.create', compact('daftarKecamatan', 'daftarSektor'));
    }

    public function checkDuplicate(Request $request)
    {
        $nik = trim($request->input('nik', ''));
        $namaPemilik = trim($request->input('nama_pemilik', ''));
        $namaUsaha = trim($request->input('nama_usaha', ''));
        $kecamatan = trim($request->input('kecamatan', ''));
        $nib = trim($request->input('nib', ''));
        $excludeId = $request->input('exclude_id');

        // 1. Pengecekan NIB (Penguncian Unik & Referensi OSS)
        $nibCheck = [
            'is_duplicate' => false,
            'is_oss_verified' => false,
            'message' => '',
            'existing_umkm' => null,
            'oss_data' => null,
        ];

        if (!empty($nib) && strlen($nib) >= 6) {
            $umkmQuery = Umkm::with('owner')->where('nib', $nib);
            if (!empty($excludeId)) {
                $umkmQuery->where('id', '!=', $excludeId);
            }
            $existingUmkm = $umkmQuery->first();

            if ($existingUmkm) {
                $nibCheck['is_duplicate'] = true;
                $nibCheck['message'] = "Nomor NIB {$nib} SUDAH DIGUNAKAN oleh unit usaha '{$existingUmkm->nama_usaha}' (Pemilik: " . ($existingUmkm->owner?->nama_lengkap ?? '-') . ") di Kec. {$existingUmkm->kecamatan}. Nomor NIB nasional bersifat unik, dilarang mendaftarkan kembali.";
                $nibCheck['existing_umkm'] = [
                    'id' => $existingUmkm->id,
                    'nama_usaha' => $existingUmkm->nama_usaha,
                    'pemilik' => $existingUmkm->owner?->nama_lengkap ?? '-',
                    'kecamatan' => $existingUmkm->kecamatan,
                ];
            } else {
                // Cek apakah NIB ini terdaftar resmi di OSS DPMPTSP
                $nibRecord = \App\Models\NibRecord::where('nib', $nib)->first();
                if ($nibRecord) {
                    $nibCheck['is_oss_verified'] = true;
                    $nibCheck['message'] = "Nomor NIB {$nib} terverifikasi resmi pada database OSS DPMPTSP atas nama '{$nibRecord->nama_lengkap}' (Kec. {$nibRecord->kecamatan}).";
                    $nibCheck['oss_data'] = [
                        'nama_lengkap' => $nibRecord->nama_lengkap,
                        'kecamatan' => $nibRecord->kecamatan,
                        'alamat' => $nibRecord->alamat,
                        'modal' => $nibRecord->modal_usaha,
                        'omset' => $nibRecord->omset_tahunan,
                        'skala' => $nibRecord->skala_usaha,
                    ];
                }
            }
        }

        // 2. Pengecekan NIK (Deteksi Multiusaha & Konflik Nama)
        $nikCheck = [
            'has_match' => false,
            'is_conflict' => false,
            'is_multiusaha' => false,
            'oss_hint' => false,
            'message' => '',
            'owner_data' => null,
            'existing_businesses' => [],
        ];

        if (!empty($nik) && strlen($nik) >= 12) {
            $owner = Owner::with('businesses')->where('nik', $nik)->first();
            if ($owner) {
                $nikCheck['has_match'] = true;
                $nikCheck['existing_businesses'] = $owner->businesses->pluck('nama_usaha')->toArray();

                // Cek konflik nama jika nama_pemilik diisi
                if (!empty($namaPemilik)) {
                    similar_text(strtoupper($namaPemilik), strtoupper($owner->nama_lengkap), $similarity);
                    if ($similarity < 60) {
                        $nikCheck['is_conflict'] = true;
                        $nikCheck['message'] = "Peringatan Konflik Identitas: NIK {$nik} di sistem terdaftar atas nama '{$owner->nama_lengkap}', namun Anda memasukkan nama '{$namaPemilik}' (Kesesuaian: " . round($similarity) . "%). Pastikan kebenaran KTP fisik.";
                    } else {
                        $nikCheck['is_multiusaha'] = true;
                        $businessCount = count($nikCheck['existing_businesses']);
                        $nikCheck['message'] = "Warga ini ('{$owner->nama_lengkap}') sudah terdaftar memiliki {$businessCount} usaha aktif: " . implode(', ', $nikCheck['existing_businesses']) . ". Pendaftaran ini akan otomatis tercatat sebagai cabang/usaha kedua miliknya.";
                    }
                } else {
                    $nikCheck['is_multiusaha'] = true;
                    $businessCount = count($nikCheck['existing_businesses']);
                    $nikCheck['message'] = "NIK ini milik '{$owner->nama_lengkap}' yang telah memiliki {$businessCount} unit usaha aktif: " . implode(', ', $nikCheck['existing_businesses']) . ".";
                }

                $nikCheck['owner_data'] = [
                    'nama_lengkap' => $owner->nama_lengkap,
                    'no_hp' => $owner->no_hp,
                    'alamat_ktp' => $owner->alamat_ktp,
                    'kecamatan' => $owner->kecamatan,
                    'kelurahan_desa' => $owner->kelurahan_desa,
                ];
            } else {
                // Cek apakah NIK terdaftar di OSS DPMPTSP
                $nibRecord = \App\Models\NibRecord::where('nik', $nik)->first();
                if ($nibRecord) {
                    $nikCheck['oss_hint'] = true;
                    $nikCheck['message'] = "Catatan OSS DPMPTSP: NIK ini terdaftar memiliki NIB OSS ({$nibRecord->nib}) atas nama '{$nibRecord->nama_lengkap}'.";
                    $nikCheck['oss_nib'] = $nibRecord->nib;
                    $nikCheck['oss_nama'] = $nibRecord->nama_lengkap;
                }
            }
        }

        // 3. Pengecekan Kemiripan Nama Usaha di Kecamatan yang Sama
        $similarBusinesses = [];
        if (!empty($namaUsaha) && strlen($namaUsaha) >= 3) {
            $similarQuery = Umkm::where('nama_usaha', 'like', "%{$namaUsaha}%");
            if (!empty($excludeId)) {
                $similarQuery->where('id', '!=', $excludeId);
            }
            if (!empty($kecamatan)) {
                $similarQuery->where('kecamatan', $kecamatan);
            }
            $similarBusinesses = $similarQuery->take(4)->get(['id', 'nama_usaha', 'kecamatan'])->toArray();
        }

        return response()->json([
            'has_nik_match' => !empty($owner),
            'nib_check' => $nibCheck,
            'nik_check' => $nikCheck,
            'has_name_match' => !empty($similarBusinesses),
            'name_matches' => $similarBusinesses,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'nik' => 'nullable|string|max:16',
            'no_hp' => 'nullable|string|max:25',
            'alamat_ktp' => 'nullable|string',
            'nama_usaha' => 'required|string|max:255',
            'nib' => 'nullable|string|max:30',
            'izin_usaha' => 'nullable|string|max:255',
            'jenis_izin' => 'nullable|string|in:NIB_OSS,IUMK_KECAMATAN,SKU_DESA_KELURAHAN,UPTD_PASAR,SIUP_SITU_TDP,BELUM_BERIZIN',
            'tahun_berdiri' => 'nullable|integer|between:1950,' . date('Y'),
            'alamat_usaha' => 'required|string',
            'kelurahan_desa' => 'nullable|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'sektor' => 'required|string|max:100',
            'kbli' => 'nullable|string|max:10',
            'deskripsi_produk' => 'nullable|string',
            'omset_bulanan' => 'nullable|numeric',
            'omset_tahunan' => 'nullable|numeric',
            'modal_usaha' => 'nullable|numeric',
            'modal_awal' => 'nullable|numeric',
            'modal_sekarang' => 'nullable|numeric',
            'aset' => 'nullable|numeric',
            'jumlah_karyawan' => 'nullable|integer|min:1',
            'legalitas_halal' => 'nullable|string|max:50',
            'legalitas_pirt' => 'nullable|string|max:50',
            'legalitas_bpom' => 'nullable|string|max:50',
        ]);

        // Guardrail Integritas: Penguncian Keunikan NIB Nasional
        if (!empty($validated['nib'])) {
            $existingNib = Umkm::with('owner')->where('nib', $validated['nib'])->first();
            if ($existingNib) {
                return back()->withInput()->withErrors([
                    'nib' => "Nomor NIB {$validated['nib']} sudah digunakan oleh unit usaha '{$existingNib->nama_usaha}' (Pemilik: " . ($existingNib->owner?->nama_lengkap ?? '-') . ", Kec. {$existingNib->kecamatan}). Nomor NIB bersifat tunggal/unik nasional dan tidak boleh didaftarkan ganda."
                ]);
            }
        }

        DB::transaction(function () use ($validated, &$umkm) {
            // 1. Pemilik (Bisa pemilik lama atau pemilik baru)
            $owner = null;
            $ownerData = [
                'nama_lengkap' => $validated['nama_pemilik'],
                'no_hp' => $validated['no_hp'] ?? null,
                'alamat_ktp' => $validated['alamat_ktp'] ?? null,
                'kelurahan_desa' => $validated['kelurahan_desa'] ?? null,
                'kecamatan' => $validated['kecamatan'],
                'kabupaten' => 'Sinjai',
            ];

            if (!empty($validated['nik'])) {
                $owner = Owner::firstOrCreate(['nik' => $validated['nik']], $ownerData);
            } else {
                $owner = Owner::create($ownerData);
            }

            // 2. Unit Usaha Baru
            $omsetTahunan = $validated['omset_tahunan'] ?? null;
            $omsetBulanan = $validated['omset_bulanan'] ?? ($omsetTahunan ? round($omsetTahunan / 12, 2) : null);
            $modalSekarang = $validated['modal_sekarang'] ?? $validated['modal_usaha'] ?? $validated['modal_awal'] ?? null;

            $jenisIzin = $validated['jenis_izin'] ?? null;
            if (!$jenisIzin) {
                if (!empty($validated['nib'])) {
                    $jenisIzin = 'NIB_OSS';
                } elseif (!empty($validated['izin_usaha'])) {
                    $jenisIzin = 'SKU_DESA_KELURAHAN';
                } else {
                    $jenisIzin = 'BELUM_BERIZIN';
                }
            }

            $umkm = Umkm::create([
                'owner_id' => $owner->id,
                'nama_usaha' => $validated['nama_usaha'],
                'nib' => $validated['nib'] ?? null,
                'izin_usaha' => $validated['izin_usaha'] ?? null,
                'jenis_izin' => $jenisIzin,
                'alamat_usaha' => $validated['alamat_usaha'],
                'kelurahan_desa' => $validated['kelurahan_desa'] ?? null,
                'kecamatan' => $validated['kecamatan'],
                'kabupaten' => 'Sinjai',
                'sektor' => $validated['sektor'],
                'kbli' => $validated['kbli'] ?? null,
                'tahun_berdiri' => $validated['tahun_berdiri'] ?? null,
                'deskripsi_produk' => $validated['deskripsi_produk'] ?? null,
                'omset_bulanan' => $omsetBulanan,
                'omset_tahunan' => $omsetTahunan,
                'modal_usaha' => $modalSekarang,
                'modal_awal' => $validated['modal_awal'] ?? null,
                'modal_sekarang' => $modalSekarang,
                'aset' => $validated['aset'] ?? null,
                'jumlah_karyawan' => $validated['jumlah_karyawan'] ?? 1,
                'legalitas_halal' => $validated['legalitas_halal'] ?? null,
                'legalitas_pirt' => $validated['legalitas_pirt'] ?? null,
                'legalitas_bpom' => $validated['legalitas_bpom'] ?? null,
                'status' => 'DRAFT', // Draf siap verifikasi
                'is_clean' => true,
                'source_origin' => 'PENDAFTARAN_BARU',
            ]);

            ActivityLog::record(
                'TAMBAH_UMKM',
                "Pendaftaran baru UMKM: {$umkm->nama_usaha} oleh pemilik {$owner->nama_lengkap}",
                $umkm,
                null,
                $umkm->toArray()
            );
        });

        return redirect()->route('umkm.show', $umkm->id)
            ->with('success', 'Data UMKM baru berhasil disimpan sebagai Draf dan siap diperiksa verifikator.');
    }

    public function show($id)
    {
        $umkm = Umkm::with(['owner', 'verifier', 'activityLogs'])->findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }

    public function edit($id)
    {
        $umkm = Umkm::with('owner')->findOrFail($id);
        $daftarKecamatan = [
            'Sinjai Utara', 'Sinjai Timur', 'Sinjai Selatan', 'Sinjai Barat',
            'Sinjai Tengah', 'Bulupoddo', 'Sinjai Borong', 'Tellu Limpoe', 'Pulau Sembilan'
        ];

        $daftarSektor = [
            'Kuliner / Pengolahan Pangan',
            'Perdagangan / Toko Kelontong',
            'Jasa & Perbengkelan',
            'Pertanian & Peternakan',
            'Perikanan & Kelautan',
            'Kerajinan / Industri Kreatif',
            'Lainnya',
        ];

        return view('umkm.edit', compact('umkm', 'daftarKecamatan', 'daftarSektor'));
    }

    public function update(Request $request, $id)
    {
        $umkm = Umkm::with('owner')->findOrFail($id);

        $validated = $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'nik' => 'nullable|string|max:16',
            'no_hp' => 'nullable|string|max:25',
            'alamat_ktp' => 'nullable|string',
            'nama_usaha' => 'required|string|max:255',
            'nib' => 'nullable|string|max:30',
            'izin_usaha' => 'nullable|string|max:255',
            'jenis_izin' => 'nullable|string|in:NIB_OSS,IUMK_KECAMATAN,SKU_DESA_KELURAHAN,UPTD_PASAR,SIUP_SITU_TDP,BELUM_BERIZIN',
            'tahun_berdiri' => 'nullable|integer|between:1950,' . date('Y'),
            'alamat_usaha' => 'required|string',
            'kelurahan_desa' => 'nullable|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'sektor' => 'required|string|max:100',
            'kbli' => 'nullable|string|max:10',
            'deskripsi_produk' => 'nullable|string',
            'omset_bulanan' => 'nullable|numeric',
            'omset_tahunan' => 'nullable|numeric',
            'modal_usaha' => 'nullable|numeric',
            'modal_awal' => 'nullable|numeric',
            'modal_sekarang' => 'nullable|numeric',
            'aset' => 'nullable|numeric',
            'jumlah_karyawan' => 'nullable|integer|min:1',
            'legalitas_halal' => 'nullable|string|max:50',
            'legalitas_pirt' => 'nullable|string|max:50',
            'legalitas_bpom' => 'nullable|string|max:50',
            'catatan_perubahan' => 'nullable|string',
        ]);

        // Guardrail Integritas: Penguncian Keunikan NIB Nasional
        if (!empty($validated['nib'])) {
            $existingNib = Umkm::with('owner')->where('nib', $validated['nib'])->where('id', '!=', $id)->first();
            if ($existingNib) {
                return back()->withInput()->withErrors([
                    'nib' => "Nomor NIB {$validated['nib']} sudah digunakan oleh unit usaha '{$existingNib->nama_usaha}' (Pemilik: " . ($existingNib->owner?->nama_lengkap ?? '-') . ", Kec. {$existingNib->kecamatan}). Nomor NIB bersifat tunggal/unik nasional dan tidak boleh didaftarkan ganda."
                ]);
            }
        }

        $oldData = $umkm->toArray();
        $oldOwner = $umkm->owner ? $umkm->owner->toArray() : [];

        DB::transaction(function () use ($validated, $umkm, $oldData, $oldOwner) {
            // Update Owner
            if ($umkm->owner) {
                $umkm->owner->update([
                    'nama_lengkap' => $validated['nama_pemilik'],
                    'nik' => $validated['nik'] ?? $umkm->owner->nik,
                    'no_hp' => $validated['no_hp'] ?? $umkm->owner->no_hp,
                    'alamat_ktp' => $validated['alamat_ktp'] ?? $umkm->owner->alamat_ktp,
                ]);
            }

            // Update UMKM
            $omsetTahunan = $validated['omset_tahunan'] ?? $umkm->omset_tahunan;
            $omsetBulanan = $validated['omset_bulanan'] ?? ($omsetTahunan ? round($omsetTahunan / 12, 2) : $umkm->omset_bulanan);
            $modalSekarang = $validated['modal_sekarang'] ?? $validated['modal_usaha'] ?? $umkm->modal_sekarang;

            $jenisIzin = $validated['jenis_izin'] ?? $umkm->jenis_izin;
            if (!$jenisIzin || $jenisIzin === 'BELUM_BERIZIN') {
                if (!empty($validated['nib'])) {
                    $jenisIzin = 'NIB_OSS';
                } elseif (!empty($validated['izin_usaha'])) {
                    $jenisIzin = 'SKU_DESA_KELURAHAN';
                }
            }

            $umkm->update([
                'nama_usaha' => $validated['nama_usaha'],
                'nib' => $validated['nib'] ?? $umkm->nib,
                'izin_usaha' => $validated['izin_usaha'] ?? $umkm->izin_usaha,
                'jenis_izin' => $jenisIzin,
                'alamat_usaha' => $validated['alamat_usaha'],
                'kelurahan_desa' => $validated['kelurahan_desa'] ?? $umkm->kelurahan_desa,
                'kecamatan' => $validated['kecamatan'],
                'sektor' => $validated['sektor'],
                'kbli' => $validated['kbli'] ?? $umkm->kbli,
                'tahun_berdiri' => $validated['tahun_berdiri'] ?? $umkm->tahun_berdiri,
                'deskripsi_produk' => $validated['deskripsi_produk'] ?? $umkm->deskripsi_produk,
                'omset_bulanan' => $omsetBulanan,
                'omset_tahunan' => $omsetTahunan,
                'modal_usaha' => $modalSekarang,
                'modal_awal' => $validated['modal_awal'] ?? $umkm->modal_awal,
                'modal_sekarang' => $modalSekarang,
                'aset' => $validated['aset'] ?? $umkm->aset,
                'jumlah_karyawan' => $validated['jumlah_karyawan'] ?? $umkm->jumlah_karyawan ?? 1,
                'legalitas_halal' => $validated['legalitas_halal'] ?? $umkm->legalitas_halal,
                'legalitas_pirt' => $validated['legalitas_pirt'] ?? $umkm->legalitas_pirt,
                'legalitas_bpom' => $validated['legalitas_bpom'] ?? $umkm->legalitas_bpom,
            ]);

            $catatan = $validated['catatan_perubahan'] ?? 'Pembaruan data UMKM';
            ActivityLog::record(
                'EDIT_DATA',
                $catatan,
                $umkm,
                $oldData,
                $umkm->fresh()->toArray()
            );
        });

        return redirect()->route('umkm.show', $umkm->id)
            ->with('success', 'Perubahan data berhasil disimpan dan tercatat di riwayat aktivitas.');
    }

    public function verify(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);

        $request->validate([
            'decision' => 'required|in:RESMI,PERBAIKAN,DITOLAK,TUTUP',
            'catatan' => 'nullable|string',
        ]);

        $decision = $request->input('decision');
        $catatan = $request->input('catatan');

        $statusLabels = [
            'RESMI' => 'Disahkan Resmi',
            'PERBAIKAN' => 'Dikembalikan untuk Perbaikan',
            'DITOLAK' => 'Ditolak',
            'TUTUP' => 'Ditandai Tutup/Tidak Aktif',
        ];

        $oldStatus = $umkm->status;
        $umkm->update([
            'status' => $decision,
            'catatan_verifikasi' => $catatan,
            'verified_at' => in_array($decision, ['RESMI', 'DITOLAK']) ? now() : null,
            'verified_by' => in_array($decision, ['RESMI', 'DITOLAK']) ? auth()->id() : null,
        ]);

        ActivityLog::record(
            'VERIFIKASI_' . $decision,
            "Keputusan Verifikasi: {$statusLabels[$decision]}. Catatan: " . ($catatan ?: '-'),
            $umkm,
            ['status' => $oldStatus],
            ['status' => $decision, 'catatan' => $catatan]
        );

        return redirect()->route('umkm.show', $umkm->id)
            ->with('success', "Status UMKM berhasil diubah menjadi: {$statusLabels[$decision]}.");
    }
}
