@extends('layouts.app')

@section('title', 'Profil Industri Pengolahan Pangan')

@section('content')
<div class="space-y-6">

    <!-- HERO BANNER PROFIL INDUSTRI PANGAN (KHAS SAMAKI) -->
    <div style="background: linear-gradient(135deg, #071525 0%, #0c233c 50%, #071525 100%) !important; color: #ffffff !important;" 
         class="samaki-dashboard-hero p-6 sm:p-8 text-white relative shadow-xl rounded-2xl overflow-hidden">
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div class="space-y-3 max-w-3xl">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 text-xs font-bold tracking-wider border border-white/15" style="color: var(--samaki-accent);">
                    <span>🏛️ PEMERINTAH KABUPATEN SINJAI</span>
                    <span>•</span>
                    <span>SEKTOR PERCONTOHAN KB-09 MODEL B</span>
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    Pusat Kurasi Produk Unggulan & Industri Pengolahan Pangan
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-2xl">
                    Sistem pemantauan terpadu komoditas pangan olahan Kabupaten Sinjai: pelacakan kapasitas produksi, serapan bahan baku lokal, sertifikasi halal BPJPH, perizinan P-IRT Dinkes, izin edar BPOM MD, serta kelaikan standar higiene sanitasi tempat produksi.
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-2.5 text-xs font-semibold">
                    <button type="button" onclick="openModalTambahProduk()"
                            class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white rounded-xl shadow-md transition transform active:scale-95 space-x-1.5 border border-emerald-400/40">
                        <span>➕ Daftarkan Produk Pangan Baru</span>
                    </button>
                    <a href="{{ route('pangan.ekspor', request()->query()) }}"
                       class="inline-flex items-center px-4 py-2 bg-white/15 hover:bg-white/25 text-white rounded-xl shadow transition space-x-1.5 border border-white/25">
                        <span>📥 Unduh Rekap Excel (CSV)</span>
                    </a>
                    <button type="button" onclick="openModalCetakKurasi()"
                            class="inline-flex items-center px-4 py-2 bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-200 rounded-xl transition space-x-1.5 border border-cyan-400/30">
                        <span>🖨️ Cetak Lembar Kurasi Daerah</span>
                    </button>
                </div>
            </div>

            <!-- Petugas & Verifikasi Lintas OPD Info Box -->
            <div class="bg-white/10 backdrop-blur-md p-4 sm:p-5 rounded-xl border border-white/15 space-y-2.5 text-xs min-w-[260px] lg:w-80 flex-shrink-0">
                <div class="flex justify-between items-center pb-2 border-b border-white/10">
                    <span class="text-slate-300 font-medium">Petugas Aktif:</span>
                    <strong class="text-white">{{ auth()->user()?->name ?? 'Verifikator' }}</strong>
                </div>
                <div class="flex justify-between items-center pb-2 border-b border-white/10">
                    <span class="text-slate-300 font-medium">Instansi Pembina:</span>
                    <span class="text-emerald-300 font-semibold">{{ auth()->user()?->dinas ?? 'Dinas Kesehatan & Disperindag' }}</span>
                </div>
                <div class="flex justify-between items-center pb-2 border-b border-white/10">
                    <span class="text-slate-300 font-medium">Sektor Mandat:</span>
                    <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-amber-500/20 text-amber-300 border border-amber-400/30">
                        Industri Pengolahan Pangan
                    </span>
                </div>
                <div class="flex justify-between items-center pt-1 text-[11px] text-slate-400">
                    <span>Dasar Kebijakan:</span>
                    <span class="text-cyan-200 font-mono">KB-09 Model B Sinjai</span>
                </div>
            </div>
        </div>

        <!-- KPI Ticker Metrik Pengolahan Pangan Sinjai -->
        <div class="mt-6 pt-5 border-t border-white/10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Total Produk</div>
                <div class="text-xl sm:text-2xl font-black text-white mt-1">{{ number_format($totalProduk) }}</div>
                <div class="text-[10px] text-slate-300 mt-0.5">Komoditas pangan</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Sertifikat Halal</div>
                <div class="text-xl sm:text-2xl font-black text-emerald-300 mt-1">{{ number_format($totalHalal) }}</div>
                <div class="text-[10px] text-emerald-400 mt-0.5">BPJPH / Kemenag</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Izin P-IRT Dinkes</div>
                <div class="text-xl sm:text-2xl font-black text-cyan-300 mt-1">{{ number_format($totalPirt) }}</div>
                <div class="text-[10px] text-cyan-400 mt-0.5">Pangan Rumah Tangga</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Izin BPOM MD</div>
                <div class="text-xl sm:text-2xl font-black text-purple-300 mt-1">{{ number_format($totalBpom) }}</div>
                <div class="text-[10px] text-purple-300 mt-0.5">Skala Menengah/Nasional</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Layak Higiene</div>
                <div class="text-xl sm:text-2xl font-black text-amber-300 mt-1">{{ number_format($totalHigiene) }}</div>
                <div class="text-[10px] text-amber-300 mt-0.5">Tempat Pengolahan</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Kapasitas Produksi</div>
                <div class="text-xl sm:text-2xl font-black text-white mt-1">{{ number_format($totalKapasitasBulanan, 0, ',', '.') }}</div>
                <div class="text-[10px] text-slate-300 mt-0.5">Satuan Kemasan/Bulan</div>
            </div>
        </div>
    </div>

    <!-- FILTER BAR, PENCARIAN & TAB SEKTORAL -->
    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm space-y-3">
        <form action="{{ route('pangan.index') }}" method="GET" class="space-y-3">
            <input type="hidden" name="status" id="filterStatusInput" value="{{ $statusTab }}">

            <!-- Tab Cepat Filter Status Legalitas & Verifikasi -->
            <div class="flex flex-wrap items-center gap-1.5 text-xs">
                @php
                    $tabs = [
                        'SEMUA' => '📋 Semua Produk (' . $totalProduk . ')',
                        'TERVERIFIKASI' => '🟢 Terverifikasi Sektoral',
                        'DRAFT' => '🟡 Draf / Baru',
                        'HALAL' => '🕌 Bersertifikat Halal (' . $totalHalal . ')',
                        'PIRT' => '📑 Izin P-IRT Dinkes (' . $totalPirt . ')',
                        'BPOM' => '🛡️ Izin BPOM MD (' . $totalBpom . ')',
                        'LAYAK_HIGIENE' => '✨ Layak Higiene Sanitasi (' . $totalHigiene . ')',
                    ];
                @endphp
                @foreach($tabs as $tabKey => $tabLabel)
                    <button type="button" 
                            onclick="selectStatusTab('{{ $tabKey }}')"
                            class="px-3 py-1.5 rounded-lg font-semibold transition {{ $statusTab === $tabKey ? 'bg-emerald-700 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                        {{ $tabLabel }}
                    </button>
                @endforeach
            </div>

            <!-- Filter Lokasi, Kategori Pangan, & Kotak Pencarian -->
            <div class="flex flex-wrap items-center justify-between gap-3 pt-2 border-t border-slate-100">
                <div class="flex flex-wrap items-center gap-2">
                    <!-- Dropdown Kategori Pangan -->
                    <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                        <span class="pl-2.5 text-slate-400 text-xs">🍲</span>
                        <select name="kategori" class="px-2 py-1.5 bg-transparent text-xs font-semibold text-slate-700 border-0 focus:outline-none cursor-pointer">
                            <option value="">Semua Kategori Pangan</option>
                            @foreach(\App\Http\Controllers\PanganController::KATEGORI_PANGAN as $kat => $desc)
                                <option value="{{ $kat }}" {{ $filterKategori === $kat ? 'selected' : '' }}>{{ $kat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Dropdown Kecamatan -->
                    <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                        <span class="pl-2.5 text-slate-400 text-xs">📍</span>
                        <select name="kecamatan" class="px-2 py-1.5 bg-transparent text-xs font-semibold text-slate-700 border-0 focus:outline-none cursor-pointer">
                            <option value="">Semua Kecamatan</option>
                            @foreach($daftarKecamatan as $kec)
                                <option value="{{ $kec }}" {{ $filterKecamatan === $kec ? 'selected' : '' }}>{{ $kec }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Filter Status Higiene -->
                    <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                        <span class="pl-2.5 text-slate-400 text-xs">🔬</span>
                        <select name="higiene" class="px-2 py-1.5 bg-transparent text-xs font-semibold text-slate-700 border-0 focus:outline-none cursor-pointer">
                            <option value="">Status Higiene</option>
                            <option value="LAYAK_HIGIENE" {{ $filterHigiene === 'LAYAK_HIGIENE' ? 'selected' : '' }}>Layak Higiene</option>
                            <option value="PERLU_PEMBINAAN" {{ $filterHigiene === 'PERLU_PEMBINAAN' ? 'selected' : '' }}>Perlu Pembinaan</option>
                            <option value="BELUM_INSPEKSI" {{ $filterHigiene === 'BELUM_INSPEKSI' ? 'selected' : '' }}>Belum Diinspeksi</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 overflow-hidden">
                        <span class="pl-2.5 text-slate-400 text-xs">🔍</span>
                        <input type="text" name="q" value="{{ $search }}" placeholder="Cari produk, merek, P-IRT, halal..." 
                               class="px-2 py-1.5 bg-transparent text-xs text-slate-700 border-0 focus:outline-none w-44 sm:w-60">
                    </div>
                    <button type="submit" class="px-3.5 py-1.5 bg-slate-800 hover:bg-slate-900 text-white rounded-lg text-xs font-bold transition shadow-sm">
                        Terapkan
                    </button>
                    @if($filterKecamatan || $filterKategori || $filterHigiene || $search || ($statusTab !== 'SEMUA'))
                        <a href="{{ route('pangan.index') }}" class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg text-xs font-semibold transition" title="Reset Filter">
                            ✕ Reset
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <!-- TABEL UTAMA PRODUK INDUSTRI PENGOLAHAN PANGAN -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 bg-slate-50">
            <div>
                <h2 class="text-base font-extrabold text-slate-800">Katalog Produk Pangan Olahan Sinjai</h2>
                <p class="text-xs text-slate-500 mt-0.5">
                    Menampilkan {{ $records->firstItem() ?? 0 }} - {{ $records->lastItem() ?? 0 }} dari total {{ number_format($records->total(), 0, ',', '.') }} komoditas terkurasi
                </p>
            </div>
            <div class="flex items-center space-x-2">
                <span class="px-2.5 py-1 text-xs font-bold rounded-full bg-emerald-100 text-emerald-800 border border-emerald-300">
                    ✓ Standar Pangan Dinkes & BPOM
                </span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-700 border-collapse">
                <thead class="bg-slate-100/80 text-slate-600 font-bold uppercase text-[11px] tracking-wider border-b border-slate-200">
                    <tr>
                        <th class="py-3.5 px-4">Produk & Merek Dagang</th>
                        <th class="py-3.5 px-4">Badan Usaha & Wilayah</th>
                        <th class="py-3.5 px-4">Bahan Baku & Asal Daerah</th>
                        <th class="py-3.5 px-4 text-center">Kapasitas / Bulan</th>
                        <th class="py-3.5 px-4 text-center">Izin Edar & Higiene</th>
                        <th class="py-3.5 px-4 text-center">Aksi Verifikator</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($records as $row)
                    <tr class="hover:bg-slate-50/80 transition">
                        
                        <!-- 1. SPESIFIKASI PRODUK & MEREK -->
                        <td class="py-3.5 px-4 align-top">
                            <div class="font-extrabold text-sm text-slate-900">{{ $row->nama_produk }}</div>
                            @if($row->merek_produk)
                                <div class="text-[11px] font-semibold text-emerald-700 mt-0.5 flex items-center space-x-1">
                                    <span>🏷️</span> <span>Merek: {{ $row->merek_produk }}</span>
                                </div>
                            @endif
                            <div class="inline-flex items-center gap-1 mt-1 px-2 py-0.5 rounded text-[10px] font-bold bg-amber-50 text-amber-800 border border-amber-200">
                                <span>🍲</span> <span>{{ $row->kategori_produk }}</span>
                            </div>
                            <div class="text-[11px] text-slate-400 mt-1">
                                Satuan: <strong class="text-slate-600">{{ $row->satuan_produk }}</strong>
                            </div>
                        </td>

                        <!-- 2. BADAN USAHA & KECAMATAN -->
                        <td class="py-3.5 px-4 align-top">
                            @if($row->umkm)
                                <a href="{{ route('umkm.show', $row->umkm->id) }}" class="font-bold text-slate-800 hover:text-emerald-700 transition flex items-center space-x-1">
                                    <span>🏢</span>
                                    <span>{{ $row->umkm->nama_usaha }}</span>
                                </a>
                                <div class="text-[11px] text-slate-500 mt-0.5">
                                    Pemilik: <span class="font-semibold text-slate-700">{{ $row->umkm->owner?->nama_lengkap ?? '-' }}</span>
                                </div>
                                <div class="text-[11px] text-slate-500 mt-0.5 flex items-center space-x-1">
                                    <span>📍</span>
                                    <span class="font-medium text-emerald-800">Kec. {{ $row->umkm->kecamatan }}</span>
                                </div>
                                @if($row->umkm->nib)
                                    <div class="text-[10px] text-blue-700 font-mono mt-0.5">
                                        NIB: {{ $row->umkm->nib }}
                                    </div>
                                @endif
                            @else
                                <span class="text-slate-400 italic">Belum terhubung unit UMKM</span>
                            @endif
                        </td>

                        <!-- 3. BAHAN BAKU & SUMBER ASAL -->
                        <td class="py-3.5 px-4 align-top">
                            <div class="font-semibold text-slate-800">{{ $row->bahan_baku_utama ?? 'Bahan baku lokal' }}</div>
                            <div class="text-[11px] text-slate-500 mt-0.5 flex items-center space-x-1">
                                <span>🌱</span>
                                <span>Asal: {{ $row->sumber_bahan_baku ?? 'Kabupaten Sinjai' }}</span>
                            </div>
                        </td>

                        <!-- 4. KAPASITAS & REALISASI PRODUKSI -->
                        <td class="py-3.5 px-4 align-top text-center">
                            <div class="font-extrabold text-sm text-slate-900">
                                {{ number_format($row->kapasitas_produksi_bulanan, 0, ',', '.') }}
                                <span class="text-[10px] font-normal text-slate-500">{{ $row->satuan_produksi }}</span>
                            </div>
                            <div class="text-[11px] text-slate-500 mt-0.5">
                                Realisasi: <strong class="text-emerald-700">{{ number_format($row->realisasi_produksi_bulanan, 0, ',', '.') }}</strong>
                            </div>
                            @if($row->kapasitas_produksi_bulanan > 0)
                                @php
                                    $rasio = round(($row->realisasi_produksi_bulanan / $row->kapasitas_produksi_bulanan) * 100);
                                @endphp
                                <div class="w-full bg-slate-100 rounded-full h-1.5 mt-1.5 overflow-hidden">
                                    <div class="bg-emerald-600 h-1.5 rounded-full" style="width: {{ min($rasio, 100) }}%"></div>
                                </div>
                                <div class="text-[10px] text-slate-400 mt-0.5">Kapasitas: {{ $rasio }}%</div>
                            @endif
                        </td>

                        <!-- 5. LEGALITAS & HIGIENE -->
                        <td class="py-3.5 px-4 align-top space-y-1 text-center">
                            <!-- Halal Badge -->
                            <div>
                                @if($row->isHalal())
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300" title="Nomor Halal: {{ $row->legalitas_halal }}">
                                        <span>🕌</span> <span>Halal: {{ Str::limit($row->legalitas_halal, 14) }}</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-400">
                                        Belum Halal
                                    </span>
                                @endif
                            </div>

                            <!-- P-IRT Badge -->
                            <div>
                                @if($row->isPirt())
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-[10px] font-bold bg-cyan-100 text-cyan-800 border border-cyan-300" title="P-IRT: {{ $row->legalitas_pirt }}">
                                        <span>📑</span> <span>{{ Str::limit($row->legalitas_pirt, 16) }}</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-400">
                                        Belum P-IRT
                                    </span>
                                @endif
                            </div>

                            <!-- BPOM MD Badge -->
                            @if($row->isBpom())
                            <div>
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-[10px] font-bold bg-purple-100 text-purple-800 border border-purple-300" title="BPOM: {{ $row->legalitas_bpom }}">
                                    <span>🛡️</span> <span>{{ $row->legalitas_bpom }}</span>
                                </span>
                            </div>
                            @endif

                            <!-- Higiene Sanitasi -->
                            <div class="pt-1">
                                @if($row->status_higiene === 'LAYAK_HIGIENE')
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        ✨ Higiene Layak
                                    </span>
                                @elseif($row->status_higiene === 'PERLU_PEMBINAAN')
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                        ⚠️ Perlu Pembinaan
                                    </span>
                                @else
                                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-500">
                                        Belum Inspeksi
                                    </span>
                                @endif
                            </div>
                        </td>

                        <!-- 6. AKSI PETUGAS & VERIFIKASI -->
                        <td class="py-3.5 px-4 align-top text-center space-y-1.5">
                            @if($row->status_verifikasi === 'TERVERIFIKASI')
                                <div class="px-2.5 py-1 bg-emerald-100 text-emerald-900 font-bold rounded-lg text-xs flex items-center justify-center space-x-1">
                                    <span>✓</span>
                                    <span>Terverifikasi</span>
                                </div>
                            @elseif($row->status_verifikasi === 'PERLU_PERBAIKAN')
                                <div class="px-2.5 py-1 bg-amber-100 text-amber-900 font-bold rounded-lg text-xs flex items-center justify-center space-x-1">
                                    <span>⚠️</span>
                                    <span>Perbaikan</span>
                                </div>
                            @else
                                <div class="px-2.5 py-1 bg-slate-100 text-slate-700 font-bold rounded-lg text-xs flex items-center justify-center space-x-1">
                                    <span>⏳</span>
                                    <span>Draf Baru</span>
                                </div>
                            @endif

                            <button type="button" 
                                    onclick="openModalVerifikasiPangan({{ json_encode([
                                        'id' => $row->id,
                                        'nama_produk' => $row->nama_produk,
                                        'umkm' => $row->umkm?->nama_usaha ?? '-',
                                        'kategori' => $row->kategori_produk,
                                        'status_verifikasi' => $row->status_verifikasi,
                                        'status_higiene' => $row->status_higiene,
                                        'catatan_sanitasi' => $row->catatan_sanitasi,
                                    ]) }})"
                                    class="w-full py-1 px-2.5 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-[11px] shadow-sm transition flex items-center justify-center space-x-1">
                                <span>⚖️</span>
                                <span>Verifikasi Mutu</span>
                            </button>

                            <button type="button" 
                                    onclick="openModalEditProduk({{ json_encode($row) }})"
                                    class="w-full py-1 px-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded text-[10px] border border-slate-300 transition">
                                ✏️ Edit Data
                            </button>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center">
                            <div class="text-3xl">🍲</div>
                            <div class="font-bold text-slate-700 text-sm mt-2">Tidak Ada Data Produk Pangan yang Sesuai</div>
                            <p class="text-xs text-slate-400 mt-1">Coba ubah filter kategori, wilayah kecamatan, atau kata kunci pencarian Anda.</p>
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

<!-- MODAL TAMBAH PRODUK PANGAN BARU -->
<div id="modal-tambah-produk" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/70 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full p-6 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in duration-200">
        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center space-x-2.5">
                <span class="text-2xl">🍲</span>
                <div>
                    <h3 class="text-base font-extrabold text-slate-800">Daftarkan Produk Pangan Olahan Baru</h3>
                    <p class="text-xs text-slate-500">Pencatatan spesifikasi produk unggulan, kapasitas produksi, dan izin edar (KB-09 Model B).</p>
                </div>
            </div>
            <button type="button" onclick="closeModalTambahProduk()" class="text-slate-400 hover:text-slate-700 text-lg font-bold p-1">✕</button>
        </div>

        <form action="{{ route('pangan.store') }}" method="POST" class="space-y-4 text-xs">
            @csrf

            <!-- Pilih Unit Usaha Induk UMKM -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Pilih Unit Usaha UMKM Produsen: <span class="text-rose-500">*</span></label>
                <select name="umkm_id" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                    <option value="">-- Pilih Unit UMKM Terdaftar di Sinjai --</option>
                    @foreach($umkmPanganList as $u)
                        <option value="{{ $u->id }}">{{ $u->nama_usaha }} (Kec. {{ $u->kecamatan }})</option>
                    @endforeach
                </select>
            </div>

            <!-- Nama Produk & Kategori -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Nama Produk Pangan: <span class="text-rose-500">*</span></label>
                    <input type="text" name="nama_produk" required placeholder="Contoh: Kopi Robusta Manipi, Abon Cakalang"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Kategori Pangan: <span class="text-rose-500">*</span></label>
                    <select name="kategori_produk" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                        @foreach(\App\Http\Controllers\PanganController::KATEGORI_PANGAN as $kat => $desc)
                            <option value="{{ $kat }}">{{ $kat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Merek & Satuan Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Merek Dagang / Label:</label>
                    <input type="text" name="merek_produk" placeholder="Contoh: Manipi Sari, Abon Lappa"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Satuan Produk Kemasan:</label>
                    <input type="text" name="satuan_produk" value="Kemasan" placeholder="Contoh: Pouch 150gr, Botol 500ml, Toples"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
            </div>

            <!-- Bahan Baku Utama & Asal Sumber -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Bahan Baku Utama:</label>
                    <input type="text" name="bahan_baku_utama" placeholder="Contoh: Biji kopi robusta, Buah markisa kuning"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Sumber Bahan Baku Asal:</label>
                    <input type="text" name="sumber_bahan_baku" value="Lokal Sinjai" placeholder="Contoh: Petani Kec. Sinjai Barat, Nelayan TPI Lappa"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
            </div>

            <!-- Kapasitas & Realisasi Produksi -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Kapasitas Maksimal / Bln:</label>
                    <input type="number" step="1" name="kapasitas_produksi_bulanan" value="1000"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Realisasi Rata-rata / Bln:</label>
                    <input type="number" step="1" name="realisasi_produksi_bulanan" value="800"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Satuan Satuan Produksi:</label>
                    <input type="text" name="satuan_produksi" value="Bungkus" placeholder="Bungkus / Botol / Kg"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
            </div>

            <!-- Perizinan P-IRT & Halal -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Nomor Izin P-IRT (Dinkes):</label>
                    <input type="text" name="legalitas_pirt" placeholder="P-IRT xxxxxxxxxx-xx"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Sertifikat Halal (BPJPH):</label>
                    <input type="text" name="legalitas_halal" placeholder="ID7307000xxxxxx"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Izin BPOM MD (Bila ada):</label>
                    <input type="text" name="legalitas_bpom" placeholder="BPOM MD xxxxxxxxx"
                           class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                </div>
            </div>

            <!-- Standar Higiene Sanitasi -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Status Kelaikan Higiene Sanitasi:</label>
                <select name="status_higiene" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
                    <option value="BELUM_INSPEKSI">Belum Diinspeksi Petugas</option>
                    <option value="LAYAK_HIGIENE">Layak Higiene Sanitasi Standar Dinkes</option>
                    <option value="PERLU_PEMBINAAN">Perlu Pembinaan Sarana Produksi</option>
                </select>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModalTambahProduk()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                    Batalkan
                </button>
                <button type="submit" class="px-5 py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-xs shadow-md transition">
                    Simpan Produk Pangan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL VERIFIKASI MUTU & HIGIENE SEKTORAL -->
<div id="modal-verifikasi-pangan" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/70 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in duration-200">
        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center space-x-2.5">
                <span class="text-2xl">⚖️</span>
                <div>
                    <h3 class="text-base font-extrabold text-slate-800">Verifikasi Sektoral Mutu Pangan</h3>
                    <p class="text-xs text-slate-500">Penetapan keabsahan spesifikasi teknis dan kelaikan sanitasi tempat produksi.</p>
                </div>
            </div>
            <button type="button" onclick="closeModalVerifikasiPangan()" class="text-slate-400 hover:text-slate-700 text-lg font-bold p-1">✕</button>
        </div>

        <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-xs space-y-1">
            <div class="text-slate-500">Nama Produk:</div>
            <div class="font-extrabold text-slate-900 text-sm" id="verif-pangan-nama">-</div>
            <div class="text-slate-600">Unit Usaha: <span class="font-semibold" id="verif-pangan-umkm">-</span></div>
            <div class="text-slate-600">Kategori: <span class="font-semibold text-emerald-800" id="verif-pangan-kategori">-</span></div>
        </div>

        <form id="form-verifikasi-pangan" method="POST" action="" class="space-y-4 text-xs">
            @csrf

            <!-- Status Verifikasi Sektoral -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Keputusan Verifikasi Sektoral:</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center p-2.5 bg-emerald-50 border border-emerald-300 rounded-xl cursor-pointer hover:bg-emerald-100/50 transition">
                        <input type="radio" name="status_verifikasi" value="TERVERIFIKASI" checked class="text-emerald-600 focus:ring-emerald-500">
                        <span class="ml-2 font-bold text-emerald-950">Disahkan Sah (Terverifikasi)</span>
                    </label>
                    <label class="flex items-center p-2.5 bg-amber-50 border border-amber-300 rounded-xl cursor-pointer hover:bg-amber-100/50 transition">
                        <input type="radio" name="status_verifikasi" value="PERLU_PERBAIKAN" class="text-amber-600 focus:ring-amber-500">
                        <span class="ml-2 font-bold text-amber-950">Perlu Perbaikan / Revisi</span>
                    </label>
                </div>
            </div>

            <!-- Status Higiene Sanitasi -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Penilaian Standar Higiene Sanitasi (Dinkes):</label>
                <select name="status_higiene" id="verif-pangan-higiene" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs font-semibold">
                    <option value="LAYAK_HIGIENE">✨ Layak Higiene Sanitasi (Memenuhi Standar Pangan)</option>
                    <option value="PERLU_PEMBINAAN">⚠️ Perlu Pembinaan Sarana Produksi</option>
                    <option value="BELUM_INSPEKSI">Belum Diinspeksi Lapangan</option>
                </select>
            </div>

            <!-- Instansi Pemeriksa -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Instansi Pemeriksa:</label>
                <input type="text" name="petugas_opd" value="Dinas Kesehatan & Disperindag Kabupaten Sinjai"
                       class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs">
            </div>

            <!-- Catatan Sanitasi & Inspeksi -->
            <div>
                <label class="block font-bold text-slate-700 mb-1">Catatan Hasil Pemeriksaan / Rekomendasi:</label>
                <textarea name="catatan_sanitasi" id="verif-pangan-catatan" rows="3" placeholder="Contoh: Tempat pengolahan dan penirisan higienis, kemasan berstandar food grade."
                          class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 text-xs"></textarea>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModalVerifikasiPangan()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                    Batalkan
                </button>
                <button type="submit" class="px-5 py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-xs shadow-md transition">
                    Simpan Putusan Sektoral
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL EDIT DATA PRODUK PANGAN -->
<div id="modal-edit-produk" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/70 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full p-6 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in duration-200">
        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center space-x-2.5">
                <span class="text-2xl">✏️</span>
                <div>
                    <h3 class="text-base font-extrabold text-slate-800">Pembaruan Spesifikasi Produk Pangan</h3>
                    <p class="text-xs text-slate-500">Koreksi teknis komoditas, kapasitas produksi, dan perizinan edar.</p>
                </div>
            </div>
            <button type="button" onclick="closeModalEditProduk()" class="text-slate-400 hover:text-slate-700 text-lg font-bold p-1">✕</button>
        </div>

        <form id="form-edit-produk" method="POST" action="" class="space-y-4 text-xs">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Nama Produk Pangan:</label>
                    <input type="text" name="nama_produk" id="edit-nama-produk" required class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Kategori Pangan:</label>
                    <select name="kategori_produk" id="edit-kategori-produk" required class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                        @foreach(\App\Http\Controllers\PanganController::KATEGORI_PANGAN as $kat => $desc)
                            <option value="{{ $kat }}">{{ $kat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Merek Dagang:</label>
                    <input type="text" name="merek_produk" id="edit-merek-produk" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Satuan Produk Kemasan:</label>
                    <input type="text" name="satuan_produk" id="edit-satuan-produk" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Bahan Baku Utama:</label>
                    <input type="text" name="bahan_baku_utama" id="edit-bahan-baku" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Sumber Bahan Baku:</label>
                    <input type="text" name="sumber_bahan_baku" id="edit-sumber-bahan" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Kapasitas / Bln:</label>
                    <input type="number" step="1" name="kapasitas_produksi_bulanan" id="edit-kapasitas" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Realisasi / Bln:</label>
                    <input type="number" step="1" name="realisasi_produksi_bulanan" id="edit-realisasi" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Satuan Produksi:</label>
                    <input type="text" name="satuan_produksi" id="edit-satuan-produksi" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Nomor P-IRT:</label>
                    <input type="text" name="legalitas_pirt" id="edit-pirt" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Sertifikat Halal:</label>
                    <input type="text" name="legalitas_halal" id="edit-halal" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
                <div>
                    <label class="block font-bold text-slate-700 mb-1">Izin BPOM MD:</label>
                    <input type="text" name="legalitas_bpom" id="edit-bpom" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                </div>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModalEditProduk()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                    Batalkan
                </button>
                <button type="submit" class="px-5 py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-xs shadow-md transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL CETAK LEMBAR KURASI PRODUK UNGGULAN PANGAN -->
<div id="modal-cetak-kurasi" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/70 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in duration-200">
        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
            <div class="flex items-center space-x-2.5">
                <span class="text-2xl">🖨️</span>
                <div>
                    <h3 class="text-base font-extrabold text-slate-800">Cetak Lembar Kurasi Pangan Daerah</h3>
                    <p class="text-xs text-slate-500">Pilih wilayah dan kategori untuk dicetak ke format A4 Landscape.</p>
                </div>
            </div>
            <button type="button" onclick="closeModalCetakKurasi()" class="text-slate-400 hover:text-slate-700 text-lg font-bold p-1">✕</button>
        </div>

        <form action="{{ route('pangan.cetakKurasi') }}" method="GET" target="_blank" class="space-y-4 text-xs">
            <div>
                <label class="block font-bold text-slate-700 mb-1">Filter Kategori Produk:</label>
                <select name="kategori" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                    <option value="">Semua Kategori Pangan</option>
                    @foreach(\App\Http\Controllers\PanganController::KATEGORI_PANGAN as $kat => $desc)
                        <option value="{{ $kat }}">{{ $kat }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1">Filter Wilayah Kecamatan:</label>
                <select name="kecamatan" class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs">
                    <option value="">Seluruh 9 Kecamatan</option>
                    @foreach($daftarKecamatan as $kec)
                        <option value="{{ $kec }}">{{ $kec }}</option>
                    @endforeach
                </select>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-end space-x-2">
                <button type="button" onclick="closeModalCetakKurasi()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                    Batalkan
                </button>
                <button type="submit" onclick="closeModalCetakKurasi()" class="px-5 py-2 bg-slate-900 hover:bg-black text-white font-bold rounded-lg text-xs shadow-md transition flex items-center space-x-1.5">
                    <span>🖨️</span>
                    <span>Buka Tampilan Cetak</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function selectStatusTab(tabKey) {
        document.getElementById('filterStatusInput').value = tabKey;
        document.getElementById('filterStatusInput').form.submit();
    }

    function openModalTambahProduk() {
        document.getElementById('modal-tambah-produk').classList.remove('hidden');
    }
    function closeModalTambahProduk() {
        document.getElementById('modal-tambah-produk').classList.add('hidden');
    }

    function openModalVerifikasiPangan(data) {
        document.getElementById('form-verifikasi-pangan').action = `/pangan/${data.id}/verifikasi`;
        document.getElementById('verif-pangan-nama').textContent = data.nama_produk || '-';
        document.getElementById('verif-pangan-umkm').textContent = data.umkm || '-';
        document.getElementById('verif-pangan-kategori').textContent = data.kategori || '-';
        document.getElementById('verif-pangan-higiene').value = data.status_higiene || 'BELUM_INSPEKSI';
        document.getElementById('verif-pangan-catatan').value = data.catatan_sanitasi || '';
        document.getElementById('modal-verifikasi-pangan').classList.remove('hidden');
    }
    function closeModalVerifikasiPangan() {
        document.getElementById('modal-verifikasi-pangan').classList.add('hidden');
    }

    function openModalEditProduk(data) {
        document.getElementById('form-edit-produk').action = `/pangan/${data.id}`;
        document.getElementById('edit-nama-produk').value = data.nama_produk || '';
        document.getElementById('edit-kategori-produk').value = data.kategori_produk || '';
        document.getElementById('edit-merek-produk').value = data.merek_produk || '';
        document.getElementById('edit-satuan-produk').value = data.satuan_produk || 'Kemasan';
        document.getElementById('edit-bahan-baku').value = data.bahan_baku_utama || '';
        document.getElementById('edit-sumber-bahan').value = data.sumber_bahan_baku || 'Lokal Sinjai';
        document.getElementById('edit-kapasitas').value = data.kapasitas_produksi_bulanan || 0;
        document.getElementById('edit-realisasi').value = data.realisasi_produksi_bulanan || 0;
        document.getElementById('edit-satuan-produksi').value = data.satuan_produksi || 'Bungkus';
        document.getElementById('edit-pirt').value = data.legalitas_pirt || '';
        document.getElementById('edit-halal').value = data.legalitas_halal || '';
        document.getElementById('edit-bpom').value = data.legalitas_bpom || '';
        document.getElementById('modal-edit-produk').classList.remove('hidden');
    }
    function closeModalEditProduk() {
        document.getElementById('modal-edit-produk').classList.add('hidden');
    }

    function openModalCetakKurasi() {
        document.getElementById('modal-cetak-kurasi').classList.remove('hidden');
    }
    function closeModalCetakKurasi() {
        document.getElementById('modal-cetak-kurasi').classList.add('hidden');
    }
</script>
@endsection
