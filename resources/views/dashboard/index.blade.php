@extends('layouts.app')

@php
    $tabTitles = [
        'ringkasan' => 'Dashboard & Ringkasan Eksekutif',
        'tenaga-kerja' => 'Analitik Ketenagakerjaan Daerah',
        'ekonomi' => 'Analitik Finansial & Skala Permodalan',
        'legalitas' => 'Analitik Legalitas Perizinan & Kematangan Usaha',
        'kecamatan' => 'Sebaran UMKM 9 Kecamatan & Sektor Usaha',
        'semua' => 'Laporan Komprehensif Satu Data UMKM',
    ];
    $pageTitle = $tabTitles[$activeTab] ?? 'Dashboard & Laporan';
@endphp

@section('title', $pageTitle)

@section('content')
<div class="space-y-6">

    <!-- SAMAKI Dashboard Hero Banner (Diadopsi dari Portal SAMAKI Sinjai) -->
    <div style="background: linear-gradient(135deg, #071525 0%, #0c233c 50%, #071525 100%) !important; color: #ffffff !important;" class="samaki-dashboard-hero p-6 sm:p-8 text-white relative shadow-xl">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
            <!-- Sisi Kiri: Identitas Resmi, Judul & Tombol Cepat -->
            <div class="space-y-3 max-w-3xl">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 text-xs font-bold tracking-wider border border-white/15" style="color: var(--samaki-accent);">
                    <span>🏛️ PEMERINTAH KABUPATEN SINJAI</span>
                    <span>•</span>
                    <span>DINAS KOPERASI, UKM DAN TENAGA KERJA</span>
                </div>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    @if($activeTab === 'tenaga-kerja')
                        Analisis Penyerapan Tenaga Kerja Daerah
                    @elseif($activeTab === 'ekonomi')
                        Analisis Finansial & Potret Skala Ekonomi Daerah
                    @elseif($activeTab === 'legalitas')
                        Tingkat Formalitas & Legalitas Usaha Daerah
                    @elseif($activeTab === 'kecamatan')
                        Peta Sebaran Wilayah 9 Kecamatan & Sektor Usaha
                    @elseif($activeTab === 'semua')
                        Laporan Komprehensif Satu Data UMKM Sinjai
                    @else
                        Dashboard Strategis Eksekutif & Operasional UMKM
                    @endif
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-2xl">
                    @if($activeTab === 'tenaga-kerja')
                        Pantauan serapan ketenagakerjaan riil berbasis batas kewajaran anti-anomali di 9 kecamatan dan sektor usaha.
                    @elseif($activeTab === 'ekonomi')
                        Evaluasi perputaran omzet tahunan, total aset, modal usaha riil, dan klasifikasi skala usaha PP 7/2021.
                    @elseif($activeTab === 'legalitas')
                        Pelacakan kepemilikan izin resmi (NIB OSS, SKU Desa/Kelurahan, IUMK, Pasar) dan kematangan tahun pendirian.
                    @elseif($activeTab === 'kecamatan')
                        Distribusi geografis konsentrasi pelaku usaha dan pemetaan sektor unggulan daerah Kabupaten Sinjai.
                    @elseif($activeTab === 'semua')
                        Tampilan gabungan seluruh analitik strategis, operasional, ketenagakerjaan, keuangan, dan legalitas.
                    @else
                        Pusat kendali satu data terpadu registri induk UMKM Sinjai: pelacakan mutu data lapangan, serapan tenaga kerja, permodalan, dan perizinan.
                    @endif
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-2.5 text-xs font-semibold">
                    <a href="{{ route('dashboard.export') }}" 
                       class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white rounded-xl shadow-md transition transform active:scale-95 space-x-1.5 border border-emerald-400/40">
                        <span>📥 Unduh Laporan Excel (CSV)</span>
                    </a>
                    <a href="{{ route('umkm.create') }}" 
                       class="inline-flex items-center px-4 py-2 bg-white/15 hover:bg-white/25 text-white rounded-xl shadow transition space-x-1.5 border border-white/25">
                        <span>+ Input UMKM Baru</span>
                    </a>
                    <a href="{{ route('pembersihan.index') }}" 
                       class="inline-flex items-center px-4 py-2 bg-amber-500/20 hover:bg-amber-500/30 text-amber-200 rounded-xl transition space-x-1.5 border border-amber-400/30">
                        <span>🧹 Bersihkan Data ({{ number_format($dataBersihCount) }})</span>
                    </a>
                    @if(auth()->user()?->isAdmin())
                    <a href="{{ route('database.backup') }}" 
                       class="inline-flex items-center px-3 py-2 bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-200 rounded-xl transition space-x-1 border border-cyan-400/30">
                        <span>💾 Backup DB</span>
                    </a>
                    <a href="{{ route('source-manager.index') }}" 
                       class="inline-flex items-center px-3 py-2 bg-emerald-500/20 hover:bg-emerald-500/30 text-emerald-200 rounded-xl transition space-x-1 border border-emerald-400/30">
                        <span>📦 Source Manager</span>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Sisi Kanan: Kartu Informasi Sesi Khas SAMAKI (Glassmorphism) -->
            <div class="samaki-hero-copy p-4 sm:p-5 text-xs space-y-2.5 min-w-[280px] lg:w-80 flex-shrink-0">
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <span class="text-slate-400 font-medium">Zona & Waktu:</span>
                    <span class="font-bold text-amber-300 font-mono">{{ date('d M Y') }} · WITA</span>
                </div>
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <span class="text-slate-400 font-medium">Petugas Aktif:</span>
                    <span class="font-bold text-emerald-300">{{ auth()->user()->name ?? 'Operator' }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <span class="text-slate-400 font-medium">Instansi / Unit:</span>
                    <span class="font-bold text-cyan-200 truncate max-w-[150px]">{{ auth()->user()->dinas ?? 'Dinas Koperasi & UKM' }}</span>
                </div>
                <div class="flex items-center justify-between pt-1">
                    <span class="text-slate-400 font-medium">Tema Warna:</span>
                    <span class="px-2 py-0.5 rounded text-[11px] font-bold text-white uppercase tracking-wider" style="background-color: var(--samaki-primary);">
                        {{ \App\Services\ColorThemeService::options()[\App\Services\ColorThemeService::current()]['name'] ?? 'Sinjai' }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Ticker Metrik Ringkas Bagian Bawah Hero Banner -->
        <div class="mt-6 pt-5 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[11px] text-slate-400 uppercase font-bold tracking-wider">Total Rekam Usaha</div>
                <div class="text-xl sm:text-2xl font-black text-white mt-1">{{ number_format($totalUmkm) }} <span class="text-xs font-normal text-slate-300">Unit</span></div>
                <div class="text-[10px] text-emerald-300 mt-0.5">38.996 siap disahkan</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[11px] text-slate-400 uppercase font-bold tracking-wider">Serapan Tenaga Kerja</div>
                <div class="text-xl sm:text-2xl font-black text-amber-300 mt-1">{{ number_format($totalTenagaKerja) }} <span class="text-xs font-normal text-slate-300">Orang</span></div>
                <div class="text-[10px] text-slate-300 mt-0.5">Rerata: {{ $rataRataTenagaKerja }} orang / unit</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[11px] text-slate-400 uppercase font-bold tracking-wider">Total Omzet Daerah</div>
                <div class="text-xl sm:text-2xl font-black text-emerald-300 mt-1">Rp {{ number_format($totalOmzetTahunan / 1000000000, 2, ',', '.') }} <span class="text-xs font-normal text-slate-300">Miliar</span></div>
                <div class="text-[10px] text-slate-300 mt-0.5">Perputaran tahunan</div>
            </div>
            <div class="bg-white/5 rounded-xl p-3 border border-white/10">
                <div class="text-[11px] text-slate-400 uppercase font-bold tracking-wider">Tingkat Legalitas</div>
                <div class="text-xl sm:text-2xl font-black text-cyan-300 mt-1">{{ $formalitasRate }}% <span class="text-xs font-normal text-slate-300">Berizin</span></div>
                <div class="text-[10px] text-slate-300 mt-0.5">{{ number_format($totalBerizin) }} usaha legal</div>
            </div>
        </div>
    </div>

    <!-- BILAH NAVIGASI MODUL / TAB ANALITIK (Sinkron Otomatis dengan Sidebar) -->
    <div class="bg-white p-2 rounded-2xl border border-slate-200 shadow-sm flex flex-wrap items-center justify-between gap-2 text-xs font-bold">
        <div class="flex flex-wrap items-center gap-1.5">
            <a href="{{ route('dashboard', ['tab' => 'ringkasan']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'ringkasan' ? 'bg-emerald-700 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                <span>📊 Ringkasan Eksekutif</span>
            </a>
            <a href="{{ route('dashboard', ['tab' => 'tenaga-kerja']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'tenaga-kerja' ? 'bg-indigo-700 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                <span>👥 Tenaga Kerja</span>
            </a>
            <a href="{{ route('dashboard', ['tab' => 'ekonomi']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'ekonomi' ? 'bg-emerald-800 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                <span>💰 Skala Ekonomi & Modal</span>
            </a>
            <a href="{{ route('dashboard', ['tab' => 'legalitas']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'legalitas' ? 'bg-amber-700 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                <span>📜 Legalitas Izin Usaha</span>
            </a>
            <a href="{{ route('dashboard', ['tab' => 'kecamatan']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'kecamatan' ? 'bg-cyan-800 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                <span>🗺️ Sebaran 9 Kecamatan</span>
            </a>
        </div>
        <div>
            <a href="{{ route('dashboard', ['tab' => 'semua']) }}" 
               class="px-3.5 py-2 rounded-xl transition flex items-center space-x-1.5 {{ $activeTab === 'semua' ? 'bg-slate-800 text-white shadow-sm' : 'text-slate-500 hover:bg-slate-100' }}">
                <span>📑 Tampilkan Semua Modul</span>
            </a>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- 1. TAMPILAN MODUL: RINGKASAN EKSEKUTIF                                  -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['ringkasan', 'semua'], true))
    <div class="space-y-6">

        <!-- 4 Main Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- 1. Total Resmi -->
            <div class="bg-white p-5 rounded-xl border border-emerald-200 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-xs font-semibold text-emerald-700 uppercase tracking-wider">🟢 Usaha Resmi (Aktif)</div>
                        <div class="text-3xl font-extrabold text-slate-800 mt-1">{{ number_format($totalResmi) }}</div>
                        <div class="text-xs text-slate-500 mt-1">Telah diverifikasi sah</div>
                    </div>
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-2xl text-emerald-700">
                        ✓
                    </div>
                </div>
                <div class="h-1 bg-emerald-500 absolute bottom-0 left-0 right-0"></div>
            </div>

            <!-- 2. Perlu Klarifikasi -->
            <div class="bg-white p-5 rounded-xl border border-amber-200 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-xs font-semibold text-amber-700 uppercase tracking-wider">🟡 Perlu Klarifikasi (Draf)</div>
                        <div class="text-3xl font-extrabold text-slate-800 mt-1">{{ number_format($totalDraft) }}</div>
                        <div class="text-xs text-slate-500 mt-1">Data lama / pengajuan baru</div>
                    </div>
                    <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center text-2xl text-amber-700">
                        ⏱
                    </div>
                </div>
                <div class="h-1 bg-amber-500 absolute bottom-0 left-0 right-0"></div>
            </div>

            <!-- 3. Perlu Perbaikan -->
            <div class="bg-white p-5 rounded-xl border border-orange-200 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-xs font-semibold text-orange-700 uppercase tracking-wider">🟠 Minta Perbaikan</div>
                        <div class="text-3xl font-extrabold text-slate-800 mt-1">{{ number_format($totalPerbaikan) }}</div>
                        <div class="text-xs text-slate-500 mt-1">Menunggu respon operator</div>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-2xl text-orange-700">
                        ✍
                    </div>
                </div>
                <div class="h-1 bg-orange-500 absolute bottom-0 left-0 right-0"></div>
            </div>

            <!-- 4. Total Usaha Tutup -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">⚪ Usaha Tutup / Nonaktif</div>
                        <div class="text-3xl font-extrabold text-slate-800 mt-1">{{ number_format($totalTutup) }}</div>
                        <div class="text-xs text-slate-500 mt-1">Tersimpan dalam arsip</div>
                    </div>
                    <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-2xl text-slate-500">
                        ✕
                    </div>
                </div>
                <div class="h-1 bg-slate-400 absolute bottom-0 left-0 right-0"></div>
            </div>
        </div>

        <!-- Banner Diagnosis Cepat -->
        <div class="bg-gradient-to-r from-teal-800 to-emerald-800 rounded-xl p-5 text-white shadow-md flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center text-2xl flex-shrink-0">
                    🧹
                </div>
                <div>
                    <h2 class="text-base font-bold">Kualitas Data Lama: {{ $dataBersihCount }} Data Bersih Siap Disahkan Masal</h2>
                    <p class="text-xs text-emerald-200 mt-0.5">Ditemukan {{ $dataMasalahCount }} data memiliki catatan (NIK tidak lengkap, alamat kosong, atau duplikasi) yang perlu ditinjau.</p>
                </div>
            </div>
            <div class="flex-shrink-0">
                <a href="{{ route('pembersihan.index') }}" 
                   class="px-4 py-2 bg-white text-emerald-900 font-bold rounded-lg text-xs hover:bg-emerald-50 transition shadow">
                    Buka Menu Pembersihan Data &rarr;
                </a>
            </div>
        </div>

        <!-- 3 Pilar Analitik Cepat (Teaser Cards menuju Tampilan Khusus) -->
        @if($activeTab === 'ringkasan')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <!-- 1. Ketenagakerjaan Teaser -->
            <div class="bg-gradient-to-br from-indigo-950 to-slate-900 text-white rounded-2xl p-5 border border-indigo-700/50 shadow flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between text-xs text-indigo-300 font-bold">
                        <span>👥 KETENAGAKERJAAN</span>
                        <span>129.937 Org</span>
                    </div>
                    <h3 class="text-lg font-extrabold text-white mt-2">Serapan Tenaga Kerja</h3>
                    <p class="text-xs text-indigo-200 mt-1 leading-relaxed">
                        {{ number_format($totalTenagaKerja) }} tenaga kerja terserap dengan rerata {{ $rataRataTenagaKerja }} orang / unit UMKM di 9 kecamatan.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-indigo-800/80">
                    <a href="{{ route('dashboard', ['tab' => 'tenaga-kerja']) }}" 
                       class="text-xs font-bold text-amber-300 hover:text-white flex items-center space-x-1">
                        <span>Buka Analitik Tenaga Kerja</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- 2. Finansial Teaser -->
            <div class="bg-gradient-to-br from-emerald-950 to-slate-900 text-white rounded-2xl p-5 border border-emerald-700/50 shadow flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between text-xs text-emerald-300 font-bold">
                        <span>💰 SKALA FINANSIAL</span>
                        <span>Rp 4,33 T</span>
                    </div>
                    <h3 class="text-lg font-extrabold text-white mt-2">Perputaran Omzet Daerah</h3>
                    <p class="text-xs text-emerald-200 mt-1 leading-relaxed">
                        Total omzet Rp {{ number_format($totalOmzetTahunan / 1000000000, 2, ',', '.') }} Miliar dan akumulasi aset usaha mencapai Rp {{ number_format($totalAset / 1000000000, 2, ',', '.') }} Miliar.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-emerald-800/80">
                    <a href="{{ route('dashboard', ['tab' => 'ekonomi']) }}" 
                       class="text-xs font-bold text-emerald-300 hover:text-white flex items-center space-x-1">
                        <span>Buka Analitik Finansial & Permodalan</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- 3. Legalitas Teaser -->
            <div class="bg-gradient-to-br from-amber-950 to-slate-900 text-white rounded-2xl p-5 border border-amber-700/50 shadow flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between text-xs text-amber-300 font-bold">
                        <span>📜 FORMALITAS USAHA</span>
                        <span>{{ $formalitasRate }}% Legal</span>
                    </div>
                    <h3 class="text-lg font-extrabold text-white mt-2">Legalitas & Kematangan</h3>
                    <p class="text-xs text-amber-200 mt-1 leading-relaxed">
                        {{ number_format($totalBerizin) }} usaha berizin resmi (NIB OSS, SKU, IUMK) dengan rata-rata usia usaha berdiri {{ $rataUsiaUsaha }} tahun.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-amber-800/80">
                    <a href="{{ route('dashboard', ['tab' => 'legalitas']) }}" 
                       class="text-xs font-bold text-amber-300 hover:text-white flex items-center space-x-1">
                        <span>Buka Analitik Legalitas & Izin</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
        @endif

    </div>
    @endif

    <!-- ========================================================================= -->
    <!-- 2. TAMPILAN MODUL: ANALISIS PENYERAPAN TENAGA KERJA DAERAH                -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['tenaga-kerja', 'semua'], true))
    <div id="seksi-tenaga-kerja" class="bg-gradient-to-br from-indigo-900 via-slate-900 to-slate-900 text-white rounded-2xl p-6 shadow-lg border border-indigo-700/50 scroll-mt-20">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-5 border-b border-indigo-800/80 gap-3">
            <div>
                <span class="px-2.5 py-1 bg-indigo-500/20 text-indigo-300 font-bold text-xs rounded-full border border-indigo-400/30">
                    👥 ANALISIS KETENAGAKERJAAN DAERAH
                </span>
                <h2 class="text-xl font-extrabold text-white mt-2 tracking-tight">Penyerapan Tenaga Kerja UMKM Kabupaten Sinjai</h2>
                <p class="text-xs text-indigo-200 mt-0.5">Estimasi serapan tenaga kerja riil berbasis data tervalidasi dengan filter batas kewajaran (*guardrail* anti-anomali).</p>
            </div>
            <div class="flex items-center space-x-2 bg-indigo-950/60 p-2.5 rounded-xl border border-indigo-800 text-xs">
                <span class="text-indigo-300 font-semibold">Rata-rata Serapan:</span>
                <span class="font-extrabold text-amber-300 text-sm">{{ $rataRataTenagaKerja }} Orang / UMKM</span>
            </div>
        </div>

        <!-- 4 Kartu Metrik Ketenagakerjaan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            <!-- 1. Total Tenaga Kerja -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-indigo-200 font-semibold uppercase">Total Tenaga Kerja Terserap</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-white mt-1">{{ number_format($totalTenagaKerja) }}</div>
                <div class="text-[11px] text-indigo-300 mt-1">Orang di seluruh Kabupaten Sinjai</div>
            </div>

            <!-- 2. Serapan dari Usaha Bersih -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-emerald-300 font-semibold uppercase">Tenaga Kerja (Data Bersih)</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-emerald-400 mt-1">{{ number_format($tenagaKerjaBersih) }}</div>
                <div class="text-[11px] text-emerald-200/80 mt-1">Dari {{ number_format($dataBersihCount) }} data siap sahkan</div>
            </div>

            <!-- 3. Usaha Mandiri (Self-Employed) -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-sky-200 font-semibold uppercase">Usaha Mandiri (1 Orang)</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-sky-400 mt-1">{{ number_format($usahaMandiri) }}</div>
                <div class="text-[11px] text-sky-200/80 mt-1">{{ $totalUmkm > 0 ? round(($usahaMandiri / $totalUmkm) * 100, 1) : 0 }}% dikelola pemilik langsung</div>
            </div>

            <!-- 4. Usaha Padat Karya -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-amber-200 font-semibold uppercase">Usaha Mempekerjakan Karyawan</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-amber-400 mt-1">{{ number_format($usahaPadatKarya) }}</div>
                <div class="text-[11px] text-amber-200/80 mt-1">&ge; 2 orang tenaga kerja</div>
            </div>
        </div>

        <!-- 2 Tabel Distribusi Tenaga Kerja: per Kecamatan & per Sektor -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6 pt-6 border-t border-indigo-800/80">
            <!-- Kolom Kiri: Tenaga Kerja per Kecamatan -->
            <div class="bg-indigo-950/60 rounded-xl p-4 border border-indigo-800/60">
                <h3 class="text-xs font-bold text-indigo-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>📍 Penyerapan Tenaga Kerja per Kecamatan</span>
                    <span class="text-[10px] text-indigo-400 font-normal">Peringkat Tertinggi</span>
                </h3>
                <div class="space-y-2.5">
                    @php $maxTkKec = $sebaranTkKecamatan->max('total_tk') ?: 1; @endphp
                    @foreach($sebaranTkKecamatan as $kec)
                    <div>
                        <div class="flex justify-between text-xs mb-1">
                            <span class="font-medium text-slate-200">{{ $kec->kecamatan ?? 'Tidak Terdefinisi' }}</span>
                            <div class="space-x-2">
                                <span class="text-indigo-300 text-[11px]">({{ number_format($kec->total_unit) }} unit)</span>
                                <span class="font-bold text-amber-300">{{ number_format($kec->total_tk) }} Orang</span>
                            </div>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-amber-400 h-2 rounded-full transition-all duration-500" 
                                 style="width: {{ ($kec->total_tk / $maxTkKec) * 100 }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Kolom Kanan: Tenaga Kerja per Sektor Usaha -->
            <div class="bg-indigo-950/60 rounded-xl p-4 border border-indigo-800/60">
                <h3 class="text-xs font-bold text-indigo-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>🏷️ Penyerapan Tenaga Kerja per Sektor Usaha</span>
                    <span class="text-[10px] text-indigo-400 font-normal">Sektor Dominan</span>
                </h3>
                <div class="space-y-2.5">
                    @php $maxTkSektor = $sebaranTkSektor->max('total_tk') ?: 1; @endphp
                    @foreach($sebaranTkSektor->take(7) as $sek)
                    <div>
                        <div class="flex justify-between text-xs mb-1">
                            <span class="font-medium text-slate-200 truncate pr-2">{{ $sek->sektor ?? 'Lainnya' }}</span>
                            <div class="space-x-2 flex-shrink-0">
                                <span class="text-indigo-300 text-[11px]">({{ number_format($sek->total_unit) }} unit)</span>
                                <span class="font-bold text-emerald-400">{{ number_format($sek->total_tk) }} Orang</span>
                            </div>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-emerald-400 h-2 rounded-full transition-all duration-500" 
                                 style="width: {{ ($sek->total_tk / $maxTkSektor) * 100 }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- ========================================================================= -->
    <!-- 3. TAMPILAN MODUL: ANALISIS FINANSIAL & SKALA PERMODALAN DAERAH            -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['ekonomi', 'semua'], true))
    <div id="seksi-ekonomi" class="bg-gradient-to-br from-emerald-950 via-slate-900 to-slate-900 text-white rounded-2xl p-6 shadow-lg border border-emerald-700/50 scroll-mt-20">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-5 border-b border-emerald-800/80 gap-3">
            <div>
                <span class="px-2.5 py-1 bg-emerald-500/20 text-emerald-300 font-bold text-xs rounded-full border border-emerald-400/30">
                    💰 ANALISIS KEUANGAN & PERPUTARAN EKONOMI
                </span>
                <h2 class="text-xl font-extrabold text-white mt-2 tracking-tight">Akumulasi Finansial & Skala Usaha UMKM Sinjai</h2>
                <p class="text-xs text-emerald-200 mt-0.5">Potret perputaran omzet tahunan, aset usaha, modal saat ini, serta pertumbuhan modal usaha riil.</p>
            </div>
            <div class="flex items-center space-x-2 bg-emerald-950/60 p-2.5 rounded-xl border border-emerald-800 text-xs">
                <span class="text-emerald-300 font-semibold">Rata-rata Pertumbuhan Modal:</span>
                <span class="font-extrabold text-emerald-300 text-sm">Rp {{ number_format($rataPertumbuhanModal, 0, ',', '.') }}</span>
            </div>
        </div>

        <!-- 4 Kartu Metrik Finansial -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            <!-- 1. Total Omzet Per Tahun -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-emerald-300 font-semibold uppercase">Total Omzet Tahunan</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-white mt-1">Rp {{ number_format($totalOmzetTahunan / 1000000000, 2, ',', '.') }} M</div>
                <div class="text-[11px] text-emerald-200/80 mt-1">Rp {{ number_format($totalOmzetTahunan, 0, ',', '.') }} per tahun</div>
            </div>

            <!-- 2. Total Aset Usaha -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-teal-300 font-semibold uppercase">Total Nilai Aset Usaha</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-teal-300 mt-1">Rp {{ number_format($totalAset / 1000000000, 2, ',', '.') }} M</div>
                <div class="text-[11px] text-teal-200/80 mt-1">Rp {{ number_format($totalAset, 0, ',', '.') }} total aset fisik</div>
            </div>

            <!-- 3. Modal Saat Ini -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-amber-300 font-semibold uppercase">Akumulasi Modal Saat Ini</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-amber-300 mt-1">Rp {{ number_format($totalModalSekarang / 1000000000, 2, ',', '.') }} M</div>
                <div class="text-[11px] text-amber-200/80 mt-1">Modal kerja operasional aktif</div>
            </div>

            <!-- 4. Pertumbuhan Modal Riil -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-cyan-300 font-semibold uppercase">Pertumbuhan Modal Total</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-cyan-300 mt-1">+ Rp {{ number_format($totalPertumbuhanModal / 1000000000, 2, ',', '.') }} M</div>
                <div class="text-[11px] text-cyan-200/80 mt-1">Selisih modal sekarang vs awal</div>
            </div>
        </div>

        <!-- 2 Kolom Analitik Permodalan & Klasifikasi Skala Usaha PP 7/2021 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6 pt-6 border-t border-emerald-800/80">
            <!-- Kolom Kiri: Perbandingan Modal Awal vs Modal Sekarang -->
            <div class="bg-emerald-950/60 rounded-xl p-4 border border-emerald-800/60">
                <h3 class="text-xs font-bold text-emerald-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>📈 Dinamika Pertumbuhan Modal UMKM</span>
                    <span class="text-[10px] text-emerald-400 font-normal">Dari {{ number_format($usahaDenganModal) }} unit terdata modal</span>
                </h3>
                <div class="space-y-4 text-xs">
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Akumulasi Modal Awal Pendirian:</span>
                            <span class="font-bold text-white">Rp {{ number_format($totalModalAwal, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-slate-400 h-2 rounded-full" style="width: {{ $totalModalSekarang > 0 ? ($totalModalAwal / $totalModalSekarang) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Akumulasi Modal Saat Ini:</span>
                            <span class="font-bold text-emerald-300">Rp {{ number_format($totalModalSekarang, 0, ',', '.') }}</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-emerald-400 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="p-3 bg-white/5 rounded-lg border border-white/10 flex items-center justify-between">
                        <span class="text-slate-300">Rasio Pertumbuhan Modal:</span>
                        <span class="font-extrabold text-emerald-400 text-sm">
                            + {{ $totalModalAwal > 0 ? round((($totalModalSekarang - $totalModalAwal) / $totalModalAwal) * 100, 1) : 0 }}%
                        </span>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Distribusi Skala Usaha Sesuai PP No. 7 Tahun 2021 -->
            <div class="bg-emerald-950/60 rounded-xl p-4 border border-emerald-800/60">
                <h3 class="text-xs font-bold text-emerald-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>🏢 Klasifikasi Skala Usaha (PP No. 7 / 2021)</span>
                    <span class="text-[10px] text-emerald-400 font-normal">Berdasarkan Modal & Omzet</span>
                </h3>
                <div class="space-y-3 text-xs">
                    <!-- Usaha Mikro -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Usaha Mikro (Modal &le; 1 M / Omzet &le; 2 M):</span>
                            <span class="font-bold text-amber-300">{{ number_format($skalaMikro) }} UMKM <span class="text-[10px] text-slate-400 font-normal">({{ $totalUmkm > 0 ? round(($skalaMikro / $totalUmkm) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-amber-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($skalaMikro / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- Usaha Kecil -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Usaha Kecil (Modal 1-5 M / Omzet 2-15 M):</span>
                            <span class="font-bold text-teal-300">{{ number_format($skalaKecil) }} UMKM <span class="text-[10px] text-slate-400 font-normal">({{ $totalUmkm > 0 ? round(($skalaKecil / $totalUmkm) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-teal-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($skalaKecil / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- Usaha Menengah -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Usaha Menengah (Modal > 5 M / Omzet > 15 M):</span>
                            <span class="font-bold text-cyan-300">{{ number_format($skalaMenengah) }} UMKM <span class="text-[10px] text-slate-400 font-normal">({{ $totalUmkm > 0 ? round(($skalaMenengah / $totalUmkm) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($skalaMenengah / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- ========================================================================= -->
    <!-- 4. TAMPILAN MODUL: ANALISIS LEGALITAS IZIN & KEMATANGAN USAHA              -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['legalitas', 'semua'], true))
    <div id="seksi-legalitas" class="bg-gradient-to-br from-amber-950 via-slate-900 to-slate-900 text-white rounded-2xl p-6 shadow-lg border border-amber-700/50 scroll-mt-20">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-5 border-b border-amber-800/80 gap-3">
            <div>
                <span class="px-2.5 py-1 bg-amber-500/20 text-amber-300 font-bold text-xs rounded-full border border-amber-400/30">
                    📜 LEGALITAS IZIN & KEMATANGAN USAHA
                </span>
                <h2 class="text-xl font-extrabold text-white mt-2 tracking-tight">Tingkat Formalisasi Usaha & Kematangan Bisnis</h2>
                <p class="text-xs text-amber-200 mt-0.5">Analisis instrumen perizinan usaha (NIB OSS, IUMK, SKU Desa/Lurah, Pasar) dan peta kedewasaan bisnis berdasarkan tahun pendirian.</p>
            </div>
            <div class="flex items-center space-x-2 bg-amber-950/60 p-2.5 rounded-xl border border-amber-800 text-xs">
                <span class="text-amber-300 font-semibold">Rasio Usaha Berizin:</span>
                <span class="font-extrabold text-amber-300 text-sm">{{ $formalitasRate }}% Terformalisasi</span>
            </div>
        </div>

        <!-- 4 Kartu Metrik Legalitas & Kematangan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5">
            <!-- 1. Total Usaha Berizin -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-amber-300 font-semibold uppercase">Memiliki Legalitas / Izin</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-white mt-1">{{ number_format($totalBerizin) }}</div>
                <div class="text-[11px] text-amber-200/80 mt-1">{{ $formalitasRate }}% dari total unit usaha</div>
            </div>

            <!-- 2. Belum Berizin (Potensi Binaan) -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-slate-300 font-semibold uppercase">Belum Memiliki Izin</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-slate-300 mt-1">{{ number_format($totalBelumBerizin) }}</div>
                <div class="text-[11px] text-slate-400 mt-1">Target fasilitasi NIB gratis</div>
            </div>

            <!-- 3. Rata-rata Usia Usaha -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-emerald-300 font-semibold uppercase">Rata-rata Usia Usaha</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-emerald-300 mt-1">{{ $rataUsiaUsaha }} <span class="text-sm font-normal text-slate-300">Tahun</span></div>
                <div class="text-[11px] text-emerald-200/80 mt-1">Dihitung dari tahun berdiri</div>
            </div>

            <!-- 4. Usaha Mapan (≥ 5 Tahun) -->
            <div class="bg-white/5 border border-white/10 rounded-xl p-4 backdrop-blur-sm">
                <div class="text-xs text-cyan-300 font-semibold uppercase">Usaha Mapan (&ge; 5 Thn)</div>
                <div class="text-2xl sm:text-3xl font-extrabold text-cyan-300 mt-1">{{ number_format($usahaMapan) }}</div>
                <div class="text-[11px] text-cyan-200/80 mt-1">Berdiri sebelum / tahun 2020</div>
            </div>
        </div>

        <!-- 2 Kolom Analitik: Peta Instrumen Izin & Peta Era Pendirian Usaha -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6 pt-6 border-t border-amber-800/80">
            <!-- Kolom Kiri: Breakdown Instrumen Perizinan -->
            <div class="bg-amber-950/60 rounded-xl p-4 border border-amber-800/60">
                <h3 class="text-xs font-bold text-amber-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>📄 Instrumen Perizinan yang Dimiliki</span>
                    <span class="text-[10px] text-amber-400 font-normal">Komposisi Legalitas</span>
                </h3>
                <div class="space-y-3 text-xs">
                    <!-- NIB OSS -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span class="font-medium">NIB (OSS RBA Nasional):</span>
                            <span class="font-bold text-emerald-400">{{ number_format($totalNibOss) }} usaha</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-emerald-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($totalNibOss / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- SKU Desa/Kelurahan -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span class="font-medium">SKU (Surat Keterangan Usaha Desa/Lurah):</span>
                            <span class="font-bold text-amber-300">{{ number_format($totalSkuDesa) }} usaha</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-amber-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($totalSkuDesa / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- IUMK Kecamatan -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span class="font-medium">IUMK (Izin Usaha Mikro Kecil Kecamatan):</span>
                            <span class="font-bold text-teal-300">{{ number_format($totalIumk) }} usaha</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-teal-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($totalIumk / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- Izin Lainnya / Pasar -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span class="font-medium">Izin Pasar / Retribusi / SIUP TDP Lama:</span>
                            <span class="font-bold text-cyan-300">{{ number_format($totalLainnya) }} usaha</span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: {{ $totalUmkm > 0 ? ($totalLainnya / $totalUmkm) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Peta Kematangan Usaha (Era Pendirian) -->
            <div class="bg-amber-950/60 rounded-xl p-4 border border-amber-800/60">
                <h3 class="text-xs font-bold text-amber-200 uppercase tracking-wider mb-3 flex items-center justify-between">
                    <span>⏳ Peta Kematangan & Daya Tahan Usaha</span>
                    <span class="text-[10px] text-amber-400 font-normal">Dari {{ number_format($totalDenganTahun) }} unit terdata tahun</span>
                </h3>
                <div class="space-y-3 text-xs">
                    <!-- Era Pra 2016 -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Generasi Mapan (Berdiri &lt; 2016, &gt; 10 Tahun):</span>
                            <span class="font-bold text-emerald-400">{{ number_format($eraPra2016) }} unit <span class="text-[10px] text-slate-400 font-normal">({{ $totalDenganTahun > 0 ? round(($eraPra2016 / $totalDenganTahun) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-emerald-400 h-2 rounded-full" style="width: {{ $totalDenganTahun > 0 ? ($eraPra2016 / $totalDenganTahun) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- Era 2016 - 2020 -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Generasi Bertumbuh (Berdiri 2016 - 2020, 5-10 Thn):</span>
                            <span class="font-bold text-teal-300">{{ number_format($era2016_2020) }} unit <span class="text-[10px] text-slate-400 font-normal">({{ $totalDenganTahun > 0 ? round(($era2016_2020 / $totalDenganTahun) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-teal-400 h-2 rounded-full" style="width: {{ $totalDenganTahun > 0 ? ($era2016_2020 / $totalDenganTahun) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                    <!-- Era 2021 - 2026 -->
                    <div>
                        <div class="flex justify-between text-slate-300 mb-1">
                            <span>Generasi Rintisan / Pemulihan (2021 - 2026):</span>
                            <span class="font-bold text-cyan-300">{{ number_format($era2021_2026) }} unit <span class="text-[10px] text-slate-400 font-normal">({{ $totalDenganTahun > 0 ? round(($era2021_2026 / $totalDenganTahun) * 100, 1) : 0 }}%)</span></span>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-cyan-400 h-2 rounded-full" style="width: {{ $totalDenganTahun > 0 ? ($era2021_2026 / $totalDenganTahun) * 100 : 0 }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- ========================================================================= -->
    <!-- 5. TAMPILAN MODUL: SEBARAN 9 KECAMATAN & SEKTOR USAHA                      -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['ringkasan', 'kecamatan', 'semua'], true))
    <div id="seksi-kecamatan" class="grid grid-cols-1 lg:grid-cols-3 gap-6 scroll-mt-20">
        
        <!-- Kolom 1 & 2: Sebaran 9 Kecamatan -->
        <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-slate-800 text-sm flex items-center space-x-2">
                    <span>📍</span>
                    <span>Sebaran UMKM di 9 Kecamatan Kabupaten Sinjai</span>
                </h3>
                <span class="text-xs text-slate-500 font-medium">Total: {{ number_format($totalUmkm) }} unit usaha</span>
            </div>

            <div class="space-y-3">
                @php
                    $maxKec = max(array_values($sebaranKecamatan) ?: [1]);
                    if ($maxKec == 0) $maxKec = 1;
                @endphp
                @foreach($sebaranKecamatan as $namaKec => $jumlah)
                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span class="text-slate-700">{{ $namaKec }}</span>
                        <div class="space-x-1.5">
                            <span class="text-slate-400 text-[11px]">({{ $totalUmkm > 0 ? round(($jumlah / $totalUmkm) * 100, 1) : 0 }}%)</span>
                            <span class="text-emerald-800 font-bold">{{ number_format($jumlah) }} UMKM</span>
                        </div>
                    </div>
                    <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden">
                        <div class="bg-emerald-600 h-2.5 rounded-full transition-all duration-500" 
                             style="width: {{ ($jumlah / $maxKec) * 100 }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Kolom 3: Statistik Legalitas Cepat & Sektor Usaha Dominan -->
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <h3 class="font-bold text-slate-800 text-sm mb-4 flex items-center space-x-2">
                    <span>📜</span>
                    <span>Kelengkapan Legalitas Terpadu</span>
                </h3>

                <div class="space-y-3.5">
                    <!-- NIB -->
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-700">Nomor Induk Berusaha (NIB)</span>
                            <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 rounded-lg font-bold">{{ number_format($totalNib) }} Usaha</span>
                        </div>
                        <div class="text-[11px] text-slate-500 mt-1">Terdaftar resmi pada OSS RBA Nasional.</div>
                    </div>

                    <!-- Halal -->
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-700">Sertifikasi Halal (BPJPH)</span>
                            <span class="px-2 py-0.5 bg-teal-100 text-teal-800 rounded-lg font-bold">{{ number_format($totalHalal) }} Usaha</span>
                        </div>
                        <div class="text-[11px] text-slate-500 mt-1">Produk olahan pangan dan minuman.</div>
                    </div>

                    <!-- PIRT -->
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-700">Izin Edar P-IRT (Dinkes)</span>
                            <span class="px-2 py-0.5 bg-blue-100 text-blue-800 rounded-lg font-bold">{{ number_format($totalPirt) }} Usaha</span>
                        </div>
                        <div class="text-[11px] text-slate-500 mt-1">Standar higienitas produksi rumah tangga.</div>
                    </div>
                </div>
            </div>

            <!-- Sebaran Sektor Usaha Ringkas -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                <h3 class="font-bold text-slate-800 text-sm mb-3 flex items-center space-x-2">
                    <span>🏷️</span>
                    <span>Sektor Usaha Dominan</span>
                </h3>
                <div class="space-y-2">
                    @forelse($sebaranSektor as $sektorName => $tot)
                    <div class="flex items-center justify-between text-xs py-1 border-b border-slate-100 last:border-0">
                        <span class="text-slate-700 truncate pr-2">{{ $sektorName }}</span>
                        <span class="font-bold text-slate-900 bg-slate-100 px-2 py-0.5 rounded-lg">{{ number_format($tot) }}</span>
                    </div>
                    @empty
                    <p class="text-xs text-slate-400">Belum ada data sektor.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- ========================================================================= -->
    <!-- 6. RIWAYAT AKTIVITAS TERBARU (Hanya tampil di Ringkasan & Semua)          -->
    <!-- ========================================================================= -->
    @if(in_array($activeTab, ['ringkasan', 'semua'], true))
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
        <h3 class="font-bold text-slate-800 text-sm mb-4 flex items-center space-x-2">
            <span>📝</span>
            <span>Jejak Riwayat Aktivitas Terbaru (Audit Log)</span>
        </h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 uppercase font-semibold">
                        <th class="py-2.5 px-3">Waktu</th>
                        <th class="py-2.5 px-3">Petugas</th>
                        <th class="py-2.5 px-3">Tindakan</th>
                        <th class="py-2.5 px-3">Keterangan Aktivitas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($aktivitasTerbaru as $log)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="py-2.5 px-3 text-slate-500 whitespace-nowrap">{{ $log->created_at->format('d/m/Y H:i') }}</td>
                        <td class="py-2.5 px-3 font-semibold text-slate-800 whitespace-nowrap">{{ $log->user_name }} ({{ $log->user_role }})</td>
                        <td class="py-2.5 px-3 whitespace-nowrap">
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-100 text-slate-700">
                                {{ $log->action }}
                            </span>
                        </td>
                        <td class="py-2.5 px-3 text-slate-600">{{ $log->deskripsi }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="py-4 text-center text-slate-400">Belum ada log aktivitas tercatat.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div>
@endsection
