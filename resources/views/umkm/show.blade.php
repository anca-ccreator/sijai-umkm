@extends('layouts.app')

@section('title', 'Detail UMKM: ' . $umkm->nama_usaha)

@section('content')
<div class="space-y-6 max-w-5xl mx-auto">

    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <div class="flex items-center space-x-2">
                <a href="{{ route('umkm.index') }}" class="text-xs font-semibold text-emerald-700 hover:text-emerald-900">
                    &larr; Data UMKM
                </a>
                <span class="text-slate-300">/</span>
                <span class="text-xs text-slate-500">{{ $umkm->kecamatan }}</span>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight mt-1">{{ $umkm->nama_usaha }}</h1>
        </div>
        <div class="flex items-center space-x-2">
            <a href="{{ route('umkm.edit', $umkm->id) }}" 
               class="px-3.5 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-xs font-semibold shadow transition space-x-1">
                <span>✏️ Edit Data</span>
            </a>
            <a href="{{ route('umkm.index') }}" class="px-3 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-semibold transition">
                Kembali
            </a>
        </div>
    </div>

    <!-- Status Banner -->
    <div class="p-4 rounded-xl border shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-3
        @if($umkm->status === 'RESMI') bg-emerald-50 border-emerald-200 text-emerald-900
        @elseif($umkm->status === 'DRAFT') bg-amber-50 border-amber-200 text-amber-900
        @elseif($umkm->status === 'PERBAIKAN') bg-orange-50 border-orange-200 text-orange-900
        @elseif($umkm->status === 'DITOLAK') bg-red-50 border-red-200 text-red-900
        @else bg-slate-100 border-slate-300 text-slate-700 @endif">
        
        <div class="flex items-center space-x-3">
            <span class="text-2xl">
                @if($umkm->status === 'RESMI') 🟢
                @elseif($umkm->status === 'DRAFT') 🟡
                @elseif($umkm->status === 'PERBAIKAN') 🟠
                @elseif($umkm->status === 'DITOLAK') 🔴
                @else ⚪ @endif
            </span>
            <div>
                <div class="font-bold text-sm">
                    Status: 
                    @if($umkm->status === 'RESMI') RESMI TERVERIFIKASI
                    @elseif($umkm->status === 'DRAFT') DRAF (MENUNGGU KLARIFIKASI / PERSETUJUAN)
                    @elseif($umkm->status === 'PERBAIKAN') DIKEMBALIKAN (PERLU PERBAIKAN)
                    @elseif($umkm->status === 'DITOLAK') DITOLAK
                    @else TUTUP / NONAKTIF @endif
                </div>
                <div class="text-xs opacity-80 mt-0.5">
                    @if($umkm->verified_at)
                        Disahkan pada {{ $umkm->verified_at->format('d F Y H:i') }} oleh {{ $umkm->verifier?->name ?? 'Verifikator Dinas' }}
                    @else
                        Sumber: {{ $umkm->source_origin }} · Masuk sistem {{ $umkm->created_at->format('d M Y') }}
                    @endif
                </div>
                @if($umkm->catatan_verifikasi)
                <div class="mt-1.5 p-2 bg-white/70 rounded text-xs font-medium border border-current/20">
                    <strong>Catatan Petugas:</strong> {{ $umkm->catatan_verifikasi }}
                </div>
                @endif
            </div>
        </div>

        @if($umkm->is_clean)
        <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-semibold border border-emerald-300 self-start sm:self-auto">
            ✓ Data Bersih & Lengkap
        </span>
        @else
        <div class="self-start sm:self-auto">
            <span class="px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full text-xs font-semibold border border-amber-300">
                ⚠️ Catatan Data: {{ implode(', ', $umkm->issue_flags ?? ['Perlu Klarifikasi']) }}
            </span>
        </div>
        @endif
    </div>

    <!-- Grid: Data Pemilik & Data Usaha -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- KARTU PEMILIK -->
        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-3">
            <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
                <span>👤</span>
                <span>Data Pemilik / Pengelola</span>
            </h2>

            <div class="space-y-2 text-xs">
                <div>
                    <span class="text-slate-500 block">Nama Lengkap:</span>
                    <span class="font-semibold text-slate-800 text-sm">{{ $umkm->owner?->nama_lengkap ?? '-' }}</span>
                </div>
                <div>
                    <span class="text-slate-500 block">Nomor Induk Kependudukan (NIK):</span>
                    <span class="font-mono font-semibold text-slate-800 bg-slate-50 px-2 py-0.5 rounded border border-slate-200 inline-block">
                        {{ $umkm->owner?->nik ?? '(Belum ada NIK tercatat)' }}
                    </span>
                </div>
                <div>
                    <span class="text-slate-500 block">Nomor Kontak / WhatsApp:</span>
                    <span class="font-semibold text-slate-800">{{ $umkm->owner?->no_hp ?? '-' }}</span>
                </div>
                <div>
                    <span class="text-slate-500 block">Alamat Rumah Tinggal (KTP):</span>
                    <span class="text-slate-700">{{ $umkm->owner?->alamat_ktp ?? '-' }}</span>
                </div>
            </div>
        </div>

        <!-- KARTU UNIT USAHA -->
        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-3">
            <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
                <span>🏪</span>
                <span>Profil Tempat Usaha & Operasional</span>
            </h2>

            <div class="space-y-2 text-xs">
                <div>
                    <span class="text-slate-500 block">Nama Tempat Usaha:</span>
                    <span class="font-semibold text-slate-800 text-sm">{{ $umkm->nama_usaha }}</span>
                </div>
                <div>
                    <span class="text-slate-500 block">Bidang / Sektor Usaha:</span>
                    <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-700 font-semibold inline-block">
                        {{ $umkm->sektor }}
                    </span>
                </div>
                <div>
                    <span class="text-slate-500 block">Alamat Lokasi Fisik Lapak / Kios:</span>
                    <span class="font-semibold text-slate-800">{{ $umkm->alamat_usaha ?: '(Alamat lapak belum dicatat)' }}</span>
                    <div class="text-[11px] text-slate-500 mt-0.5">
                        {{ $umkm->kelurahan_desa ? 'Desa/Kel. ' . $umkm->kelurahan_desa . ', ' : '' }}Kec. {{ $umkm->kecamatan }}
                    </div>
                </div>
                <div>
                    <span class="text-slate-500 block">Tahun Mulai Berdiri:</span>
                    @if($umkm->tahun_berdiri)
                        <div class="flex items-center space-x-2 mt-0.5">
                            <span class="font-bold text-slate-800 text-sm">Tahun {{ $umkm->tahun_berdiri }}</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-semibold
                                @if($umkm->usia_usaha > 5) bg-emerald-100 text-emerald-800
                                @elseif($umkm->usia_usaha >= 3) bg-indigo-100 text-indigo-800
                                @else bg-purple-100 text-purple-800 @endif">
                                {{ $umkm->usia_usaha }} Tahun ({{ $umkm->kategori_kematangan }})
                            </span>
                        </div>
                    @else
                        <span class="text-slate-400 italic">Belum tercatat</span>
                    @endif
                </div>
                <div>
                    <span class="text-slate-500 block">Produk / Layanan:</span>
                    <span class="text-slate-700">{{ $umkm->deskripsi_produk ?: '-' }}</span>
                </div>
                <div class="grid grid-cols-2 gap-2 pt-1">
                    <div>
                        <span class="text-slate-500 block">Tenaga Kerja:</span>
                        <span class="font-semibold text-slate-800">{{ $umkm->jumlah_karyawan }} Orang</span>
                    </div>
                    <div>
                        <span class="text-slate-500 block">Omset Bulanan:</span>
                        <span class="font-semibold text-slate-800">{{ $umkm->omset_bulanan ? 'Rp ' . number_format($umkm->omset_bulanan, 0, ',', '.') : '-' }}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- KARTU PROFIL KEUANGAN & PERTUMBUHAN MODAL -->
    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h2 class="font-bold text-slate-800 text-sm flex items-center space-x-2">
                <span>💰</span>
                <span>Karakteristik Finansial & Skala Usaha</span>
            </h2>
            <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-indigo-50 text-indigo-700 border border-indigo-200">
                {{ $umkm->skala_usaha }}
            </span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs">
            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Modal Awal:</span>
                <span class="font-bold text-slate-800 text-sm mt-0.5 block">
                    {{ $umkm->modal_awal ? 'Rp ' . number_format($umkm->modal_awal, 0, ',', '.') : '-' }}
                </span>
                <span class="text-[10px] text-slate-400">Saat pendirian</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Modal Usaha Sekarang:</span>
                <span class="font-bold text-emerald-800 text-sm mt-0.5 block">
                    {{ $umkm->modal_sekarang ? 'Rp ' . number_format($umkm->modal_sekarang, 0, ',', '.') : ($umkm->modal_usaha ? 'Rp ' . number_format($umkm->modal_usaha, 0, ',', '.') : '-') }}
                </span>
                @if($umkm->pertumbuhan_modal !== null)
                    <span class="text-[10px] font-semibold {{ $umkm->pertumbuhan_modal >= 0 ? 'text-emerald-600' : 'text-red-600' }}">
                        {{ $umkm->pertumbuhan_modal >= 0 ? '▲ +Rp ' . number_format($umkm->pertumbuhan_modal, 0, ',', '.') : '▼ -Rp ' . number_format(abs($umkm->pertumbuhan_modal), 0, ',', '.') }}
                    </span>
                @else
                    <span class="text-[10px] text-slate-400">Modal berjalan</span>
                @endif
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Total Aset:</span>
                <span class="font-bold text-slate-800 text-sm mt-0.5 block">
                    {{ $umkm->aset ? 'Rp ' . number_format($umkm->aset, 0, ',', '.') : '-' }}
                </span>
                <span class="text-[10px] text-slate-400">Aktiva produktif</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Omzet per Tahun:</span>
                <span class="font-bold text-amber-700 text-sm mt-0.5 block">
                    {{ $umkm->omset_tahunan ? 'Rp ' . number_format($umkm->omset_tahunan, 0, ',', '.') : ($umkm->omset_bulanan ? 'Rp ' . number_format($umkm->omset_bulanan * 12, 0, ',', '.') : '-') }}
                </span>
                <span class="text-[10px] text-slate-500">
                    Est. Bulanan: {{ $umkm->omset_bulanan ? 'Rp ' . number_format($umkm->omset_bulanan, 0, ',', '.') : '-' }}
                </span>
            </div>
        </div>
    </div>

    <!-- KARTU LEGALITAS & IZIN -->
    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-3">
        <div class="flex items-center justify-between pb-2 border-b border-slate-100">
            <h2 class="font-bold text-slate-800 text-sm flex items-center space-x-2">
                <span>📜</span>
                <span>Legalitas, Izin, & Sertifikasi Usaha</span>
            </h2>
            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold
                @if($umkm->jenis_izin === 'NIB_OSS') bg-emerald-100 text-emerald-800 border border-emerald-300
                @elseif($umkm->jenis_izin === 'BELUM_BERIZIN') bg-rose-100 text-rose-800 border border-rose-300
                @else bg-amber-100 text-amber-800 border border-amber-300 @endif">
                {{ $umkm->nama_jenis_izin }}
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-xs">
            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Izin Usaha Terdaftar:</span>
                <span class="font-semibold text-slate-800 text-sm mt-0.5 block break-words">
                    {{ $umkm->izin_usaha ?: ($umkm->nib ?: '-') }}
                </span>
                <span class="text-[10px] text-slate-400">{{ $umkm->nama_jenis_izin }}</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Nomor Induk Berusaha (NIB):</span>
                <span class="font-mono font-bold text-slate-800 text-sm mt-0.5 block">
                    {{ $umkm->nib ?: '-' }}
                </span>
                <span class="text-[10px] text-slate-400">OSS RBA Kementerian Investasi</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Sertifikat Halal:</span>
                <span class="font-bold text-emerald-800 text-sm mt-0.5 block">
                    {{ $umkm->legalitas_halal ?: '-' }}
                </span>
                <span class="text-[10px] text-slate-400">BPJPH Kementerian Agama</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200">
                <span class="text-slate-500 block text-[11px]">Izin Edar P-IRT:</span>
                <span class="font-bold text-blue-800 text-sm mt-0.5 block">
                    {{ $umkm->legalitas_pirt ?: '-' }}
                </span>
                <span class="text-[10px] text-slate-400">Dinas Kesehatan Kab. Sinjai</span>
            </div>
        </div>
    </div>

    <!-- PANEL AKSI VERIFIKASI SATU PINTU (Hanya untuk Verifikator / Admin) -->
    @if(auth()->user()?->isVerifikator())
    <div class="bg-white p-5 rounded-xl border border-emerald-300 shadow-sm space-y-4">
        <div class="flex items-center space-x-2 pb-2 border-b border-emerald-100">
            <span class="text-lg">⚖️</span>
            <h2 class="font-bold text-slate-800 text-sm">Panel Verifikasi Satu Pintu (Dinas Terkait)</h2>
        </div>

        <form action="{{ route('umkm.verify', $umkm->id) }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="catatan" class="block text-xs font-semibold text-slate-700 mb-1">Catatan Pemeriksaan / Alasan Keputusan (Opsional)</label>
                <input type="text" id="catatan" name="catatan" 
                       placeholder="Misal: Berkas dokumen lengkap dan tempat usaha aktif beroperasi..."
                       class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>

            <div class="flex flex-wrap gap-2 pt-2">
                <!-- 1. Tombol Setujui & Sahkan -->
                <button type="submit" name="decision" value="RESMI" 
                        onclick="return confirm('Apakah Anda yakin ingin MENGESAHKAN data UMKM ini menjadi RESMI?')"
                        class="px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white rounded-lg text-xs font-bold shadow transition flex items-center space-x-1">
                    <span>🟢</span>
                    <span>Setujui & Sahkan Resmi</span>
                </button>

                <!-- 2. Tombol Minta Perbaikan -->
                <button type="submit" name="decision" value="PERBAIKAN"
                        onclick="return confirm('Kembalikan pengajuan ini ke operator untuk diperbaiki?')"
                        class="px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg text-xs font-bold shadow transition flex items-center space-x-1">
                    <span>🟠</span>
                    <span>Minta Perbaikan Lapangan</span>
                </button>

                <!-- 3. Tombol Tolak -->
                <button type="submit" name="decision" value="DITOLAK"
                        onclick="return confirm('Tolak pendaftaran ini?')"
                        class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-xs font-bold shadow transition flex items-center space-x-1">
                    <span>🔴</span>
                    <span>Tolak Pengajuan</span>
                </button>

                <!-- 4. Tombol Tandai Tutup -->
                <button type="submit" name="decision" value="TUTUP"
                        onclick="return confirm('Tandai usaha ini sudah TUTUP / Tidak Aktif?')"
                        class="px-3 py-2 bg-slate-200 hover:bg-slate-300 text-slate-700 rounded-lg text-xs font-semibold transition flex items-center space-x-1">
                    <span>⚪</span>
                    <span>Tandai Usaha Tutup</span>
                </button>
            </div>
        </form>
    </div>
    @endif

    <!-- RIWAYAT PERUBAHAN & AKTIVITAS (AUDIT TRAIL OTOMATIS) -->
    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
        <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
            <span>📝</span>
            <span>Jejak Riwayat Perubahan Data (Audit Log)</span>
        </h2>

        <div class="space-y-3">
            @forelse($umkm->activityLogs as $log)
            <div class="p-3 bg-slate-50 rounded-lg border border-slate-200 text-xs flex items-start justify-between">
                <div>
                    <div class="flex items-center space-x-2">
                        <span class="font-bold text-slate-800">{{ $log->action }}</span>
                        <span class="text-slate-400">·</span>
                        <span class="text-slate-600 font-semibold">{{ $log->user_name }}</span>
                        <span class="px-1.5 py-0.2 rounded text-[10px] bg-slate-200 text-slate-700">{{ $log->user_role }}</span>
                    </div>
                    <div class="text-slate-600 mt-1">{{ $log->deskripsi }}</div>
                    @if($log->data_lama && $log->data_baru)
                    <div class="mt-2 text-[11px] bg-white p-2 rounded border border-slate-200 text-slate-500 font-mono">
                        Perubahan tercatat di sistem.
                    </div>
                    @endif
                </div>
                <div class="text-[11px] text-slate-400 whitespace-nowrap pl-2">
                    {{ $log->created_at->format('d/m/Y H:i') }}
                </div>
            </div>
            @empty
            <p class="text-xs text-slate-400">Belum ada catatan aktivitas untuk data ini.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection
