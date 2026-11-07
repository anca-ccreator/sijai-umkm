@extends('layouts.app')

@section('title', 'Meja Rekonsiliasi Irisan NIB & UMKM')

@section('content')
<div class="space-y-6">

    <!-- Header & Alert Notifikasi -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <div class="flex items-center space-x-2">
                <span class="px-2.5 py-0.5 text-xs font-bold bg-amber-100 text-amber-800 rounded-full border border-amber-300">
                    TAHAP 1: AUDIT SILANG DUA DATASET
                </span>
                <span class="text-xs text-slate-500 font-medium">OSS DPMPTSP vs Dinas Koperasi</span>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight mt-1">Meja Rekonsiliasi & Deteksi Irisan NIB</h1>
            <p class="text-sm text-slate-500 mt-0.5">
                Penyelarasan otomatis 5.213 data NIB DPMPTSP dengan 42.730 data UMKM Dinas Koperasi untuk mencegah duplikasi dan salah sasaran bantuan.
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-2">
            <!-- Tombol Buka Modal Lembar Kerja Khusus Kecamatan -->
            <button type="button" onclick="document.getElementById('modal-lembar-kerja').classList.remove('hidden')"
                    class="px-3.5 py-2 bg-slate-800 hover:bg-slate-900 text-white rounded-lg text-xs font-semibold shadow transition whitespace-nowrap flex items-center space-x-1.5">
                <span>📋</span>
                <span>Lembar Kerja Lapangan per Kecamatan...</span>
            </button>

            <!-- Tombol Cetak Cepat A4 Landscape Sesuai Filter Halaman -->
            <a href="{{ route('rekonsiliasi.cetakLembarKerja', ['kecamatan' => $filterKecamatan, 'status' => $statusTab]) }}" target="_blank"
               class="px-3 py-2 bg-blue-700 hover:bg-blue-800 text-white rounded-lg text-xs font-semibold shadow transition whitespace-nowrap flex items-center space-x-1.5"
               title="Buka format cetak fisik siap cetak / simpan PDF">
                <span>🖨️</span>
                <span>Cetak Lembar Kerja {{ $filterKecamatan ? '(' . $filterKecamatan . ')' : '' }}</span>
            </a>

            @if($statusTab === 'POTENTIAL_MATCH' && $potentialCount > 0)
                <form action="{{ route('rekonsiliasi.tautkanMasal') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menautkan secara masal seluruh NIB berkategori keyakinan tinggi (>= 85%){{ $filterKecamatan ? ' di Kecamatan ' . $filterKecamatan : '' }}?')">
                    @csrf
                    @if($filterKecamatan)
                        <input type="hidden" name="kecamatan" value="{{ $filterKecamatan }}">
                    @endif
                    <button type="submit" class="px-3.5 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-xs font-semibold shadow transition whitespace-nowrap flex items-center space-x-1.5">
                        <span>⚡</span>
                        <span>Tautkan Masal Klop Tinggi</span>
                    </button>
                </form>
            @endif
        </div>
    </div>

    <!-- Alert Sukses / Info -->
    @if(session('success'))
        <div class="p-4 bg-emerald-50 border border-emerald-300 text-emerald-900 rounded-xl text-sm flex items-start space-x-3 shadow-sm">
            <span class="text-xl">✅</span>
            <div class="flex-1 font-medium">{{ session('success') }}</div>
        </div>
    @endif
    @if(session('info'))
        <div class="p-4 bg-blue-50 border border-blue-300 text-blue-900 rounded-xl text-sm flex items-start space-x-3 shadow-sm">
            <span class="text-xl">ℹ️</span>
            <div class="flex-1 font-medium">{{ session('info') }}</div>
        </div>
    @endif
    @if(session('error'))
        <div class="p-4 bg-rose-50 border border-rose-300 text-rose-900 rounded-xl text-sm flex items-start space-x-3 shadow-sm">
            <span class="text-xl">⚠️</span>
            <div class="flex-1 font-medium">{{ session('error') }}</div>
        </div>
    @endif

    <!-- 4 KARTU METRIK UTAMA IRISAN DATA -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- 1. KANDIDAT KLOP -->
        <a href="{{ route('rekonsiliasi.index', ['status' => 'POTENTIAL_MATCH', 'kecamatan' => $filterKecamatan]) }}" 
           class="p-4 rounded-xl border-2 transition flex flex-col justify-between {{ $statusTab === 'POTENTIAL_MATCH' ? 'bg-emerald-50 border-emerald-500 shadow-md ring-2 ring-emerald-200' : 'bg-white border-slate-200 hover:border-emerald-300 shadow-sm' }}">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">1. Kandidat Klop</span>
                <span class="px-2 py-0.5 text-[11px] font-bold rounded-full bg-emerald-100 text-emerald-800 border border-emerald-300">Siap Ditautkan</span>
            </div>
            <div class="mt-3">
                <div class="text-3xl font-extrabold text-emerald-950">{{ number_format($potentialCount, 0, ',', '.') }}</div>
                <p class="text-xs text-slate-500 mt-1">NIK identik & nama pemilik cocok (>= 70%). Cukup 1-klik untuk memperkaya NIB.</p>
            </div>
        </a>

        <!-- 2. KONFLIK IDENTITAS -->
        <a href="{{ route('rekonsiliasi.index', ['status' => 'CONFLICTING_INFO', 'kecamatan' => $filterKecamatan]) }}" 
           class="p-4 rounded-xl border-2 transition flex flex-col justify-between {{ $statusTab === 'CONFLICTING_INFO' ? 'bg-rose-50 border-rose-500 shadow-md ring-2 ring-rose-200' : 'bg-white border-slate-200 hover:border-rose-300 shadow-sm' }}">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-rose-800">2. Konflik Identitas</span>
                <span class="px-2 py-0.5 text-[11px] font-bold rounded-full bg-rose-100 text-rose-800 border border-rose-300">Wajib Lapangan</span>
            </div>
            <div class="mt-3">
                <div class="text-3xl font-extrabold text-rose-950">{{ number_format($conflictCount, 0, ',', '.') }}</div>
                <p class="text-xs text-slate-500 mt-1">NIK sama tetapi nama pemilik berbeda drastis. Dilarang auto-merge sebelum survei fisik.</p>
            </div>
        </a>

        <!-- 3. NIB MANDIRI -->
        <a href="{{ route('rekonsiliasi.index', ['status' => 'NO_MATCH', 'kecamatan' => $filterKecamatan]) }}" 
           class="p-4 rounded-xl border-2 transition flex flex-col justify-between {{ $statusTab === 'NO_MATCH' ? 'bg-slate-100 border-slate-600 shadow-md ring-2 ring-slate-300' : 'bg-white border-slate-200 hover:border-slate-400 shadow-sm' }}">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">3. NIB Mandiri</span>
                <span class="px-2 py-0.5 text-[11px] font-bold rounded-full bg-slate-200 text-slate-800">Usaha Baru OSS</span>
            </div>
            <div class="mt-3">
                <div class="text-3xl font-extrabold text-slate-900">{{ number_format($noMatchCount, 0, ',', '.') }}</div>
                <p class="text-xs text-slate-500 mt-1">Terdaftar resmi di OSS DPMPTSP tetapi belum terdata dalam sensus Dinas Koperasi.</p>
            </div>
        </a>

        <!-- 4. SUDAH DITAUTKAN / SELESAI -->
        <a href="{{ route('rekonsiliasi.index', ['status' => 'LINKED', 'kecamatan' => $filterKecamatan]) }}" 
           class="p-4 rounded-xl border-2 transition flex flex-col justify-between {{ $statusTab === 'LINKED' ? 'bg-blue-50 border-blue-500 shadow-md ring-2 ring-blue-200' : 'bg-white border-slate-200 hover:border-blue-300 shadow-sm' }}">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-800">4. Sudah Ditautkan</span>
                <span class="px-2 py-0.5 text-[11px] font-bold rounded-full bg-blue-100 text-blue-800 border border-blue-300">Legalitas Sinkron</span>
            </div>
            <div class="mt-3">
                <div class="text-3xl font-extrabold text-blue-950">{{ number_format($linkedCount, 0, ',', '.') }}</div>
                <p class="text-xs text-slate-500 mt-1">NIB DPMPTSP telah terintegrasi aman ke profil UMKM Dinas Koperasi tanpa membuat duplikat.</p>
            </div>
        </a>

    </div>

    <!-- FILTER BAR & PENCARIAN -->
    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm space-y-3">
        <form action="{{ route('rekonsiliasi.index') }}" method="GET" class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
            <input type="hidden" name="status" value="{{ $statusTab }}">

            <!-- Tab Cepat Filter Status -->
            <div class="flex flex-wrap items-center gap-1.5 text-xs">
                <a href="{{ route('rekonsiliasi.index', array_filter(['status' => 'POTENTIAL_MATCH', 'kecamatan' => $filterKecamatan, 'q' => $search])) }}"
                   class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === 'POTENTIAL_MATCH' ? 'bg-emerald-700 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    🟢 Kandidat Klop ({{ $potentialCount }})
                </a>
                <a href="{{ route('rekonsiliasi.index', array_filter(['status' => 'CONFLICTING_INFO', 'kecamatan' => $filterKecamatan, 'q' => $search])) }}"
                   class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === 'CONFLICTING_INFO' ? 'bg-rose-700 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    🔴 Konflik Identitas ({{ $conflictCount }})
                </a>
                <a href="{{ route('rekonsiliasi.index', array_filter(['status' => 'NO_MATCH', 'kecamatan' => $filterKecamatan, 'q' => $search])) }}"
                   class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === 'NO_MATCH' ? 'bg-slate-800 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    ⚪ NIB Mandiri ({{ $noMatchCount }})
                </a>
                <a href="{{ route('rekonsiliasi.index', array_filter(['status' => 'LINKED', 'kecamatan' => $filterKecamatan, 'q' => $search])) }}"
                   class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === 'LINKED' ? 'bg-blue-700 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    🔗 Sudah Ditautkan ({{ $linkedCount }})
                </a>
                <a href="{{ route('rekonsiliasi.index', array_filter(['status' => 'SEMUA', 'kecamatan' => $filterKecamatan, 'q' => $search])) }}"
                   class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === 'SEMUA' ? 'bg-slate-800 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    Semua Data ({{ $totalCount }})
                </a>
            </div>

            <!-- Filter Lokasi Kecamatan & Kotak Pencarian -->
            <div class="flex flex-wrap items-center gap-2">
                <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                    <span class="pl-2.5 text-slate-400 text-xs">📍</span>
                    <select name="kecamatan" class="px-2 py-1.5 bg-transparent text-xs font-semibold text-slate-700 border-0 focus:outline-none cursor-pointer">
                        <option value="">Semua Kecamatan</option>
                        @foreach($daftarKecamatan as $kec)
                            <option value="{{ $kec }}" {{ $filterKecamatan === $kec ? 'selected' : '' }}>{{ $kec }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                    <span class="pl-2.5 text-slate-400 text-xs">🔍</span>
                    <input type="text" name="q" value="{{ $search }}" placeholder="Cari NIK, NIB, Nama..." 
                           class="px-2 py-1.5 bg-transparent text-xs text-slate-700 border-0 focus:outline-none w-36 sm:w-48">
                </div>

                <button type="submit" class="px-3 py-1.5 bg-slate-700 hover:bg-slate-800 text-white rounded-lg text-xs font-bold transition shadow-sm">
                    Terapkan
                </button>

                @if($filterKecamatan || $search)
                    <a href="{{ route('rekonsiliasi.index', ['status' => $statusTab]) }}" class="px-2 py-1.5 text-rose-600 hover:bg-rose-50 border border-rose-200 rounded-lg text-xs font-bold transition">
                        ✕ Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <!-- TABEL UTAMA PEMBANDING DUA SISI (SIDE-BY-SIDE AUDIT) -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-4 bg-slate-50/80 border-b border-slate-200 flex items-center justify-between flex-wrap gap-2">
            <div>
                <h3 class="text-sm font-extrabold text-slate-800">
                    Tabel Kerja Penyelarasan: {{ $records->total() }} Data Ditemukan
                </h3>
                <p class="text-xs text-slate-500 mt-0.5">
                    Bandingkan data dari DPMPTSP (sisi kiri) dengan data Dinas Koperasi (sisi kanan) sebelum mengambil tindakan.
                </p>
            </div>
            @if($statusTab === 'CONFLICTING_INFO')
                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-rose-100 text-rose-900 border border-rose-300">
                    ⚠️ Mode Karantina Ketat: Verifikasi fisik KTP diwajibkan sebelum penggabungan.
                </span>
            @endif
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="bg-slate-100 text-slate-700 uppercase font-bold tracking-wider text-[11px] border-b border-slate-200">
                        <th class="py-3 px-4 w-12 text-center">No</th>
                        <th class="py-3 px-4 w-1/3">1. Data DPMPTSP OSS (NIB)</th>
                        <th class="py-3 px-4 w-1/4">2. Analisis & Kesesuaian</th>
                        <th class="py-3 px-4 w-1/3">3. Data Dinas Koperasi & UKM</th>
                        <th class="py-3 px-4 text-center">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-150">
                    @forelse($records as $index => $row)
                    @php
                        $badge = $row->status_badge;
                        $hasUmkm = $row->matchedUmkm !== null;
                        $isConflict = $row->reconciliation_status === 'CONFLICTING_INFO';
                        $isLinked = $row->reconciliation_status === 'LINKED';
                    @endphp
                    <tr class="hover:bg-slate-50/80 transition {{ $isConflict ? 'bg-rose-50/30' : '' }}">
                        
                        <!-- NO URUT -->
                        <td class="py-3 px-4 text-center font-mono text-slate-500 font-semibold align-top">
                            {{ $records->firstItem() + $index }}
                        </td>

                        <!-- SISI KIRI: DATA DPMPTSP OSS -->
                        <td class="py-3 px-4 align-top space-y-1">
                            <div class="flex items-center space-x-1.5">
                                <span class="font-extrabold text-slate-900 text-sm">{{ $row->nama_lengkap }}</span>
                                <span class="px-1.5 py-0.2 bg-slate-200 text-slate-700 font-mono text-[10px] rounded">
                                    {{ $row->jenis_kelamin ?? '-' }}
                                </span>
                            </div>
                            <div class="font-mono text-slate-600 flex items-center space-x-1">
                                <span class="text-slate-400">NIK:</span>
                                <span class="font-bold text-slate-800 bg-slate-100 px-1 py-0.5 rounded">{{ $row->masked_nik }}</span>
                            </div>
                            <div class="font-mono text-blue-700 font-bold flex items-center space-x-1">
                                <span class="text-slate-400 font-normal">NIB:</span>
                                <span class="bg-blue-50 px-1.5 py-0.5 rounded border border-blue-200">{{ $row->nib }}</span>
                            </div>
                            <div class="text-slate-500 text-[11px] leading-relaxed">
                                📍 {{ $row->alamat ?: 'Kec. ' . $row->kecamatan }}
                            </div>
                            <div class="text-[10px] text-slate-400 flex items-center gap-2 pt-0.5">
                                <span>Skala: <strong class="text-slate-600">{{ $row->skala_usaha ?: 'Mikro' }}</strong></span>
                                <span>•</span>
                                <span>Modal: <strong class="text-slate-600">Rp {{ number_format($row->modal_usaha, 0, ',', '.') }}</strong></span>
                            </div>
                        </td>

                        <!-- TENGAH: ANALISIS KESESUAIAN SISTEM -->
                        <td class="py-3 px-4 align-top space-y-2">
                            <div>
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-bold border {{ $badge['bg'] }}">
                                    <span class="mr-1">{{ $badge['icon'] }}</span> {{ $badge['label'] }}
                                </span>
                            </div>

                            @if($hasUmkm)
                                <div>
                                    <div class="flex items-center justify-between text-[11px] font-semibold text-slate-700 mb-0.5">
                                        <span>Kemiripan Nama:</span>
                                        <span class="{{ $row->similarity_score >= 70 ? 'text-emerald-700' : 'text-rose-700' }} font-bold">
                                            {{ $row->similarity_score }}%
                                        </span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-2 rounded-full overflow-hidden">
                                        <div class="h-full rounded-full transition-all duration-300 {{ $row->similarity_score >= 70 ? 'bg-emerald-500' : 'bg-rose-500' }}" 
                                             style="width: {{ min(100, max(5, $row->similarity_score)) }}%"></div>
                                    </div>
                                </div>
                            @endif

                            <div class="p-2 rounded-lg text-[11px] leading-relaxed {{ $isConflict ? 'bg-rose-100/70 text-rose-900 border border-rose-200' : 'bg-slate-100 text-slate-700' }}">
                                {{ $row->match_notes }}
                            </div>

                            @if($row->reconciled_at)
                                <div class="text-[10px] text-slate-400 italic">
                                    Diselesaikan: {{ $row->reconciled_at->translatedFormat('d M Y H:i') }}
                                </div>
                            @endif
                        </td>

                        <!-- SISI KANAN: DATA DINAS KOPERASI & UKM -->
                        <td class="py-3 px-4 align-top space-y-1">
                            @if($hasUmkm)
                                <div class="font-extrabold text-emerald-950 text-sm flex items-center space-x-1.5">
                                    <span>🏪</span>
                                    <span>{{ $row->matchedUmkm->nama_usaha }}</span>
                                </div>
                                <div class="text-slate-700 font-semibold flex items-center space-x-1">
                                    <span class="text-slate-400 font-normal">Pemilik:</span>
                                    <span>{{ $row->matchedUmkm->owner?->nama_lengkap ?? '-' }}</span>
                                </div>
                                <div class="font-mono text-slate-500 text-[11px]">
                                    NIK Koperasi: {{ $row->matchedUmkm->owner?->nik ? substr($row->matchedUmkm->owner->nik, 0, 6) . '******' . substr($row->matchedUmkm->owner->nik, -4) : '-' }}
                                </div>
                                <div class="text-slate-500 text-[11px]">
                                    📍 {{ $row->matchedUmkm->alamat_usaha ?: 'Kec. ' . $row->matchedUmkm->kecamatan }}
                                </div>
                                <div class="text-[10px] text-slate-400 flex items-center gap-2 pt-0.5">
                                    <span>Sektor: <strong class="text-slate-600">{{ $row->matchedUmkm->sektor ?: '-' }}</strong></span>
                                    <span>•</span>
                                    <span>Omzet: <strong class="text-slate-600">Rp {{ number_format($row->matchedUmkm->omset_tahunan, 0, ',', '.') }}</strong></span>
                                </div>
                                @if($row->matchedUmkm->nib && $row->matchedUmkm->nib !== $row->nib)
                                    <div class="text-[10px] text-amber-700 font-mono bg-amber-50 px-1 py-0.5 rounded border border-amber-200">
                                        Sudah ada NIB lain: {{ $row->matchedUmkm->nib }}
                                    </div>
                                @endif
                            @else
                                <div class="p-3 bg-slate-50 border border-dashed border-slate-300 rounded-lg text-slate-500 text-center">
                                    <div class="text-lg">📭</div>
                                    <div class="font-semibold text-slate-700 text-xs mt-1">Belum Ada Rekaman UMKM Koperasi</div>
                                    <p class="text-[11px] text-slate-400 mt-0.5">
                                        NIK warga ini belum pernah tercatat mengajukan atau disurvei oleh Dinas Koperasi.
                                    </p>
                                </div>
                            @endif
                        </td>

                        <!-- AKSI TINDAKAN PETUGAS -->
                        <td class="py-3 px-4 align-middle text-center space-y-2">
                            @if($row->reconciliation_status === 'POTENTIAL_MATCH')
                                <form action="{{ route('rekonsiliasi.tautkan', $row->id) }}" method="POST" onsubmit="return confirm('Tautkan NIB {{ $row->nib }} ke badan usaha {{ $row->matchedUmkm?->nama_usaha }}?')">
                                    @csrf
                                    <button type="submit" class="w-full py-1.5 px-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg text-xs shadow-sm transition flex items-center justify-center space-x-1">
                                        <span>🔗</span>
                                        <span>Tautkan NIB</span>
                                    </button>
                                </form>
                                <form action="{{ route('rekonsiliasi.pisah', $row->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Tetapkan NIB ini sebagai cabang/unit usaha mandiri kedua?')" class="w-full py-1 px-2 bg-slate-100 hover:bg-purple-100 text-slate-700 hover:text-purple-800 font-semibold rounded-lg text-[11px] border border-slate-200 transition">
                                        🔀 Pisah Usaha
                                    </button>
                                </form>
                            @elseif($row->reconciliation_status === 'CONFLICTING_INFO')
                                <div class="space-y-1">
                                    <button type="button" 
                                            onclick="alert('PENTING: NIK identik tetapi nama berbeda (DPMPTSP: {{ $row->nama_lengkap }} vs Koperasi: {{ $row->matchedUmkm?->owner?->nama_lengkap }}). Penggabungan langsung DILARANG sistem untuk mencegah pelanggaran UU PDP No. 27/2022. Silakan unduh Lembar Kerja Lapangan untuk verifikasi fisik KTP.')"
                                            class="w-full py-1.5 px-2 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs shadow-sm transition">
                                        ⚠️ Karantina
                                    </button>
                                    <form action="{{ route('rekonsiliasi.pisah', $row->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="catatan" value="Diverifikasi sebagai 2 subjek hukum berbeda setelah pemeriksaan bukti identitas.">
                                        <button type="submit" onclick="return confirm('Tetapkan secara resmi bahwa ini adalah 2 entitas berbeda (bukan satu pemilik)?')" class="w-full py-1 px-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded text-[10px] border border-slate-300 transition">
                                            Tetapkan 2 Usaha
                                        </button>
                                    </form>
                                </div>
                            @elseif($row->reconciliation_status === 'LINKED')
                                <div class="px-2 py-1 bg-blue-100 text-blue-900 font-bold rounded-lg text-xs flex items-center justify-center space-x-1">
                                    <span>✓</span>
                                    <span>Tersinkron</span>
                                </div>
                            @elseif($row->reconciliation_status === 'SEPARATED')
                                <div class="px-2 py-1 bg-purple-100 text-purple-900 font-bold rounded-lg text-xs flex items-center justify-center space-x-1">
                                    <span>🔀</span>
                                    <span>Unit Mandiri</span>
                                </div>
                            @else
                                <div class="text-slate-400 text-xs italic">
                                    NIB Mandiri
                                </div>
                            @endif
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-12 text-center">
                            <div class="text-3xl">🔍</div>
                            <div class="font-bold text-slate-700 text-sm mt-2">Tidak Ada Data Rekonsiliasi yang Sesuai</div>
                            <p class="text-xs text-slate-400 mt-1">Coba ubah filter status atau kata kunci pencarian Anda.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($records->hasPages())
            <div class="p-4 bg-slate-50 border-t border-slate-200">
                {{ $records->links() }}
            </div>
        @endif
    </div>

</div>

<!-- MODAL UNDUH & CETAK LEMBAR KERJA LAPANGAN PER KECAMATAN -->
<div id="modal-lembar-kerja" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl border border-slate-200 space-y-5 animate-in fade-in zoom-in duration-200">
        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center space-x-2.5">
                <span class="text-2xl">📋</span>
                <div>
                    <h3 class="text-base font-extrabold text-slate-800">Lembar Kerja Verifikasi Lapangan</h3>
                    <p class="text-xs text-slate-500">Pilih wilayah kecamatan dan target data untuk tim surveyor daerah.</p>
                </div>
            </div>
            <button type="button" onclick="document.getElementById('modal-lembar-kerja').classList.add('hidden')"
                    class="text-slate-400 hover:text-slate-700 text-lg font-bold p-1">
                ✕
            </button>
        </div>

        <form id="form-lembar-kerja" method="GET" class="space-y-4">
            <!-- 1. Pilihan Wilayah Kecamatan -->
            <div>
                <label for="modal-kecamatan" class="block text-xs font-bold text-slate-700 mb-1">
                    1. Cakupan Wilayah Kecamatan:
                </label>
                <select id="modal-kecamatan" name="kecamatan" 
                        class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-semibold text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="">-- Seluruh Kabupaten Sinjai (44 Konflik / 5.213 Total NIB) --</option>
                    @if(isset($rekapKecamatan))
                        @foreach($rekapKecamatan as $rk)
                            <option value="{{ $rk->kecamatan }}" {{ $filterKecamatan === $rk->kecamatan ? 'selected' : '' }}>
                                Kec. {{ $rk->kecamatan }} ({{ $rk->conflicts }} Konflik / {{ $rk->potential }} Klop / {{ $rk->total }} NIB)
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>

            <!-- 2. Pilihan Target Rekonsiliasi -->
            <div>
                <label for="modal-status" class="block text-xs font-bold text-slate-700 mb-1">
                    2. Kategori Sasaran Data:
                </label>
                <select id="modal-status" name="status" 
                        class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-semibold text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="CONFLICTING_INFO" selected>
                        🔴 Khusus Kasus Konflik Identitas (Prioritas Karantina & Survei Fisik)
                    </option>
                    <option value="POTENTIAL_MATCH">
                        🟢 Kandidat Klop Siap Ditautkan (Ceklis Kesesuaian Nama & NIK)
                    </option>
                    <option value="NO_MATCH">
                        ⚪ NIB Mandiri (Belum Tercatat di Dinas Koperasi / Usaha Baru OSS)
                    </option>
                    <option value="SEMUA">
                        📋 Seluruh Rekaman Data NIB Wilayah Ini
                    </option>
                </select>
            </div>

            <!-- Info Catatan Regulasi & Kerahasiaan -->
            <div class="p-3 bg-amber-50 border border-amber-200 rounded-lg text-[11px] text-amber-900 leading-relaxed">
                <strong>Catatan Integritas UU PDP:</strong> Nomor NIK pada lembar kerja lapangan secara otomatis disamarkan (*masked*) untuk menjaga kerahasiaan data pribadi pemilik usaha. Lembar kerja memuat kolom paraf verifikator Koperasi, DPMPTSP, dan pelaku usaha.
            </div>

            <!-- Tombol Aksi Eksekusi -->
            <div class="pt-3 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-end gap-2">
                <button type="button" onclick="document.getElementById('modal-lembar-kerja').classList.add('hidden')"
                        class="w-full sm:w-auto px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                    Tutup
                </button>
                <button type="button" onclick="submitLembarKerja('csv')"
                        class="w-full sm:w-auto px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-xs shadow transition flex items-center justify-center space-x-1.5">
                    <span>📊</span>
                    <span>Unduh CSV (Excel)</span>
                </button>
                <button type="button" onclick="submitLembarKerja('cetak')"
                        class="w-full sm:w-auto px-4 py-2 bg-slate-900 hover:bg-black text-white font-bold rounded-lg text-xs shadow transition flex items-center justify-center space-x-1.5">
                    <span>🖨️</span>
                    <span>Cetak / Pratinjau (PDF)</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function submitLembarKerja(format) {
        const kec = document.getElementById('modal-kecamatan').value;
        const status = document.getElementById('modal-status').value;

        if (format === 'csv') {
            const url = `{{ route('rekonsiliasi.eksporKonflik') }}?kecamatan=${encodeURIComponent(kec)}&status=${encodeURIComponent(status)}`;
            window.location.href = url;
            document.getElementById('modal-lembar-kerja').classList.add('hidden');
        } else if (format === 'cetak') {
            const url = `{{ route('rekonsiliasi.cetakLembarKerja') }}?kecamatan=${encodeURIComponent(kec)}&status=${encodeURIComponent(status)}`;
            window.open(url, '_blank');
            document.getElementById('modal-lembar-kerja').classList.add('hidden');
        }
    }
</script>
@endsection
