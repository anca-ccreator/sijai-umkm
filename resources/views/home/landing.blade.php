<!DOCTYPE html>
<html lang="id" data-samaki-color-theme="{{ $currentTheme }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIJAI UMKM — Portal Resmi Registri Terpadu UMKM Kabupaten Sinjai</title>
    <meta name="description" content="Sistem Informasi Jaringan Informasi Terpadu UMKM Pemerintah Kabupaten Sinjai">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/samaki-theme.css') }}">
    <style>
        body { font-family: 'DM Sans', 'Inter', sans-serif; }
        .hero-title { font-size: clamp(38px, 4.8vw, 64px); line-height: 1.05; letter-spacing: -0.04em; }
        .orb { position: absolute; border-radius: 50%; pointer-events: none; }
        .orb-one { width: 520px; height: 520px; right: -180px; top: 40px; background: radial-gradient(circle, rgba(var(--samaki-accent-rgb), 0.22), transparent 70%); }
        .orb-two { width: 400px; height: 400px; left: -160px; top: 320px; background: radial-gradient(circle, rgba(var(--samaki-primary-rgb), 0.18), transparent 70%); }
        .hero-banner { background: linear-gradient(180deg, rgba(var(--samaki-primary-rgb), 0.12) 0%, rgba(var(--samaki-accent-rgb), 0.04) 75%, #ffffff 100%); }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased min-h-screen flex flex-col selection:bg-emerald-500 selection:text-white">

    <!-- Top Site Header Navbar -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 transition shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand -->
            <a href="#beranda" class="flex items-center space-x-3 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-700 to-teal-800 flex items-center justify-center text-white font-extrabold text-2xl shadow-md border border-emerald-500/30 group-hover:scale-105 transition">
                    S
                </div>
                <div class="border-l border-slate-300 pl-3">
                    <div class="font-extrabold text-base tracking-wider text-slate-900 group-hover:text-emerald-800 transition">
                        SIJAI <span class="text-emerald-700">UMKM</span>
                    </div>
                    <div class="text-[10px] text-slate-500 uppercase tracking-widest font-semibold">
                        Kabupaten Sinjai
                    </div>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-7 text-xs font-bold text-slate-600">
                <a href="#beranda" class="hover:text-emerald-700 transition">Beranda</a>
                <a href="#alur" class="hover:text-emerald-700 transition">Siklus Kerja</a>
                <a href="#capaian" class="hover:text-emerald-700 transition">Dashboard Daerah</a>
                <a href="#katalog" class="hover:text-emerald-700 transition">Jelajah UMKM</a>
                <a href="#panduan" class="hover:text-emerald-700 transition">Panduan</a>
            </nav>

            <!-- Theme Switcher & Login CTA -->
            <div class="flex items-center space-x-3">
                <!-- Theme Selector Dropdown -->
                <div class="relative hidden sm:inline-block">
                    <select onchange="window.location.href='/theme/switch/' + this.value" 
                            class="px-2.5 py-1.5 bg-slate-100 hover:bg-slate-200 border border-slate-300 rounded-lg text-xs font-semibold text-slate-700 focus:outline-none cursor-pointer">
                        @foreach($themeOptions as $key => $opt)
                            <option value="{{ $key }}" {{ $currentTheme === $key ? 'selected' : '' }}>
                                🎨 {{ $opt['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @auth
                <a href="{{ route('dashboard') }}" 
                   class="px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl text-xs font-bold shadow-md transition flex items-center space-x-1.5 transform active:scale-95">
                    <span>Ruang Kerja Dashboard</span>
                    <span>&rarr;</span>
                </a>
                @else
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 bg-slate-900 hover:bg-emerald-800 text-white rounded-xl text-xs font-bold shadow-md transition flex items-center space-x-1.5 transform active:scale-95">
                    <span>Masuk Ruang Kerja</span>
                    <span>&rarr;</span>
                </a>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow">

        <!-- HERO SECTION (Gaya SAMAKI) -->
        <section id="beranda" class="hero-banner relative overflow-hidden pt-12 pb-16 border-b border-slate-200">
            <div class="orb orb-one"></div>
            <div class="orb orb-two"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-emerald-100 border border-emerald-300/60 text-emerald-900 text-xs font-bold mb-4 tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span>Ekosistem Registri Resmi Pemerintah Kabupaten Sinjai</span>
                </div>

                <!-- Main Headline -->
                <h1 class="hero-title font-extrabold text-slate-900 mb-4 max-w-4xl">
                    Portal Registri & Pemberdayaan<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-800 to-teal-700">UMKM Kabupaten Sinjai</span>
                </h1>

                <!-- Hero Copy -->
                <p class="text-base sm:text-lg text-slate-600 max-w-3xl leading-relaxed mb-8 font-normal">
                    Menghubungkan pelaku usaha mikro, pendata kelurahan/desa, verifikator lintas dinas, pimpinan daerah, serta mitra perbankan—dari pendataan lapangan berstandar A3 hingga fasilitasi legalitas dan pembinaan usaha.
                </p>

                <!-- DUAL ACCESS GRID (Khas SAMAKI: Ruang Kerja vs Informasi Publik) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-4xl mb-12">
                    <!-- Kartu 1: Ruang Kerja Pemerintah Daerah -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-800 to-teal-900 text-white shadow-xl border border-emerald-600/40 relative overflow-hidden flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs font-bold text-emerald-200 mb-2">
                                <span>● &nbsp; AKSES TERAUTENTIKASI</span>
                                <span class="text-lg">🏛️</span>
                            </div>
                            <h2 class="text-xl font-extrabold text-white mb-1">Ruang Kerja Pemerintah Daerah</h2>
                            <p class="text-xs text-emerald-100 mb-4">Operator Desa/Kelurahan · Camat · Verifikator Dinas · Admin Sistem · Pimpinan</p>
                            <ul class="text-xs text-emerald-100 space-y-1.5 mb-6">
                                <li class="flex items-center space-x-2">
                                    <span class="text-amber-400">✓</span>
                                    <span>Pendaftaran & validasi UMKM berstandar A3</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-amber-400">✓</span>
                                    <span>Verifikasi satu pintu & audit trail aktivitas</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-amber-400">✓</span>
                                    <span>Pembersihan data otomatis & mitigasi bencana</span>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('login') }}" 
                           class="w-full py-2.5 px-4 bg-white hover:bg-emerald-50 text-emerald-950 font-bold rounded-xl text-xs text-center shadow transition flex items-center justify-center space-x-1.5">
                            <span>Masuk Ruang Kerja Dinas</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                    <!-- Kartu 2: Portal Informasi Publik -->
                    <div class="p-6 rounded-2xl bg-white text-slate-800 shadow-lg border border-slate-300 relative flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs font-bold text-slate-500 mb-2">
                                <span>○ &nbsp; AKSES TERBUKA PUBLIK</span>
                                <span class="text-lg">🏪</span>
                            </div>
                            <h2 class="text-xl font-extrabold text-slate-900 mb-1">Portal Informasi & Pelaku Usaha</h2>
                            <p class="text-xs text-slate-500 mb-4">Masyarakat · Pelaku Usaha Sinjai · Perbankan KUR · Peneliti · Media</p>
                            <ul class="text-xs text-slate-600 space-y-1.5 mb-6">
                                <li class="flex items-center space-x-2">
                                    <span class="text-emerald-600">✓</span>
                                    <span>Jelajahi sebaran UMKM di 9 Kecamatan Sinjai</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-emerald-600">✓</span>
                                    <span>Statistik penyerapan tenaga kerja & perputaran omzet</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-emerald-600">✓</span>
                                    <span>Katalog produk unggulan lokal terverifikasi</span>
                                </li>
                            </ul>
                        </div>
                        <a href="#katalog" 
                           class="w-full py-2.5 px-4 bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold rounded-xl text-xs text-center border border-slate-300 transition flex items-center justify-center space-x-1.5">
                            <span>Jelajahi Produk & Data Publik</span>
                            <span>&darr;</span>
                        </a>
                    </div>
                </div>

                <!-- HERO STATS BAR (DATA RIIL KABUPATEN SINJAI) -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 p-5 rounded-2xl bg-white border border-slate-200 shadow-md">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-slate-900">{{ number_format($totalUmkm) }}</div>
                        <div class="text-xs font-bold text-emerald-800 mt-0.5">Total UMKM Terdata</div>
                        <div class="text-[11px] text-slate-400">Terdaftar di 9 Kecamatan</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-indigo-900">{{ number_format($totalTenagaKerja) }}</div>
                        <div class="text-xs font-bold text-indigo-800 mt-0.5">Tenaga Kerja Terserap</div>
                        <div class="text-[11px] text-slate-400">Rata-rata 2,71 orang/usaha</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-amber-700">Rp {{ number_format($totalOmzet / 1000000000000, 2, ',', '.') }} T</div>
                        <div class="text-xs font-bold text-amber-800 mt-0.5">Akumulasi Omzet / Thn</div>
                        <div class="text-[11px] text-slate-400">Perputaran ekonomi riil</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-teal-800">{{ number_format($totalBerizin) }}</div>
                        <div class="text-xs font-bold text-teal-900 mt-0.5">Usaha Berizin Resmi</div>
                        <div class="text-[11px] text-slate-400">48,2% tingkat formalitas</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PITA INTEGRASI (INTEGRATION RIBBON) -->
        <div class="samaki-ribbon py-3 px-4 shadow-inner">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-center gap-3 sm:gap-6 text-center text-xs">
                <span>📍 Pendataan Lapangan Desa (A3)</span>
                <span>&rarr;</span>
                <span>🛡️ Verifikasi Wilayah Kecamatan</span>
                <span>&rarr;</span>
                <span>⚖️ Kurasi Sektoral & Legalitas Dinas</span>
                <span>&rarr;</span>
                <span>📊 Dashboard Monitoring Eksekutif</span>
                <span>&rarr;</span>
                <span>🏪 Katalog Resmi Produk Unggulan Daerah</span>
            </div>
        </div>

        <!-- SIKLUS KERJA UTUH (GAYA WORKFLOW SAMAKI) -->
        <section id="alur" class="py-16 bg-slate-50 border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-xs font-bold text-emerald-800 uppercase tracking-widest">Siklus Kerja Terpadu</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mt-1">SIJAI Mengawal UMKM, Bukan Sekadar Mencatatnya</h2>
                    <p class="text-sm text-slate-500 mt-2">
                        Setiap tahapan registrasi memiliki petugas berwenang, instrumen bukti sah, dan pelacakan audit berjejak sesuai pedoman tata kelola KB-01 s/d KB-18.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <!-- Tahap 1 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-emerald-700">01</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Pencatatan Berstandar A3</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                Petugas desa mencatat NIK pemilik, lokasi fisik yang dapat dibedakan, jenis kegiatan usaha, penanda usaha, dan data tenaga kerja.
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-emerald-800">
                            Pelaksana: Petugas Pendata Desa / Kelurahan
                        </span>
                    </div>

                    <!-- Tahap 2 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-teal-700">02</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Uji Kelayakan Wilayah</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                Verifikator kecamatan memeriksa keaktifan tempat usaha dan mencocokkan izin lokal (SKU / IUMK Kecamatan) dengan fakta fisik.
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-teal-800">
                            Pelaksana: Verifikator Kantor Camat
                        </span>
                    </div>

                    <!-- Tahap 3 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-indigo-700">03</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Kurasi Legalitas & Izin</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                Verifikasi kepemilikan NIB OSS RBA, pemetaan KBLI 5-digit, serta kelayakan sertifikasi Halal (BPJPH) dan P-IRT (Dinas Kesehatan).
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-indigo-800">
                            Pelaksana: OPD Teknis Terkait & Pengesah Izin
                        </span>
                    </div>

                    <!-- Tahap 4 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-amber-700">04</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Pengesahan Registri Induk</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                Unit verifikator sah mengesahkan data menjadi RESMI. Tidak ada pengesahan oleh pembuat sendiri (*segregation of duties*).
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-800">
                            Pelaksana: Koordinator Registri Diskopnakertrans
                        </span>
                    </div>

                    <!-- Tahap 5 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-purple-700">05</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Akselerasi Binaan & KUR</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                Data yang sah menjadi rujukan resmi penyaluran program bantuan pemerintah, subsidi bunga KUR perbankan, dan fasilitasi legalitas gratis.
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-purple-800">
                            Pelaksana: Perbankan Mitra & Tim Pembina
                        </span>
                    </div>

                    <!-- Tahap 6 -->
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <span class="text-2xl font-extrabold text-rose-700">06</span>
                            <h3 class="text-base font-bold text-slate-900 mt-2">Publikasi & Katalog Daerah</h3>
                            <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                                UMKM yang telah sah ditampilkan pada katalog produk resmi daerah agar dikenal oleh pasar nasional, wisatawan, dan mitra investor.
                            </p>
                        </div>
                        <span class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-rose-800">
                            Pelaksana: Pimpinan Daerah & Etalase Publik
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CAPAIAN DAERAH & MODUL STRATEGIS -->
        <section id="capaian" class="py-16 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-xs font-bold text-emerald-800 uppercase tracking-widest">Dashboard Strategis</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mt-1">Modul Pemantauan & Analitik Daerah</h2>
                    <p class="text-sm text-slate-500 mt-2">
                        Memberikan gambaran utuh situasi ekonomi kerakyatan Kabupaten Sinjai secara objektif, terukur, dan transparan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <!-- Modul 1 -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-slate-900 to-indigo-950 text-white shadow-md flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold text-amber-300 uppercase">MODUL 01</span>
                            <h3 class="text-lg font-bold mt-1">Penyerapan Tenaga Kerja</h3>
                            <p class="text-xs text-slate-300 mt-2 leading-relaxed">
                                Memetakan 129.937 pekerja UMKM di 9 kecamatan dengan filter pelindung anomali. Sinjai Utara, Sinjai Timur, dan Tellu Limpoe menjadi pusat serapan kerja tertinggi.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800 flex justify-between items-center text-xs">
                            <span class="text-slate-400">Total Unit:</span>
                            <strong class="text-amber-300">47.948 UMKM</strong>
                        </div>
                    </div>

                    <!-- Modul 2 -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-slate-900 to-emerald-950 text-white shadow-md flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold text-emerald-400 uppercase">MODUL 02</span>
                            <h3 class="text-lg font-bold mt-1">Analisis Finansial & Skala Usaha</h3>
                            <p class="text-xs text-slate-300 mt-2 leading-relaxed">
                                Memantau akumulasi omzet Rp 4,33 Triliun per tahun, total aset produktif Rp 426,6 Miliar, serta pertumbuhan modal usaha riil (+Rp 95,4 Juta/UMKM).
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800 flex justify-between items-center text-xs">
                            <span class="text-slate-400">Klasifikasi:</span>
                            <strong class="text-emerald-300">PP No. 7 / 2021</strong>
                        </div>
                    </div>

                    <!-- Modul 3 -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-slate-900 to-teal-950 text-white shadow-md flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold text-teal-300 uppercase">MODUL 03</span>
                            <h3 class="text-lg font-bold mt-1">Legalitas Izin & Kematangan Usaha</h3>
                            <p class="text-xs text-slate-300 mt-2 leading-relaxed">
                                Menganalisis sebaran izin (6.522 NIB OSS, 14.911 SKU Desa, 1.555 IUMK) dan kedewasaan usaha dengan rata-rata usia 6 tahun (rata-rata berdiri 2020).
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800 flex justify-between items-center text-xs">
                            <span class="text-slate-400">Tingkat Izin:</span>
                            <strong class="text-teal-300">48,2% Berizin</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KATALOG PUBLIK PRODUK UNGGULAN SINJAI -->
        <section id="katalog" class="py-16 bg-slate-50 border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
                    <div>
                        <span class="text-xs font-bold text-emerald-800 uppercase tracking-widest">Etalase Publik Daerah</span>
                        <h2 class="text-3xl font-extrabold text-slate-900 mt-1">Jelajah Produk & UMKM Kabupaten Sinjai</h2>
                        <p class="text-sm text-slate-500 mt-1">Contoh data unit usaha terdata yang telah memenuhi standar kelengkapan administrasi.</p>
                    </div>
                    <span class="px-3 py-1 bg-emerald-100 text-emerald-900 font-bold text-xs rounded-full border border-emerald-300 self-start sm:self-auto">
                        ◉ Data Resmi Terverifikasi A3
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @forelse($produkUnggulan as $umkm)
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between text-xs mb-3">
                                <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-slate-100 text-slate-700">
                                    {{ $umkm->sektor }}
                                </span>
                                @if($umkm->tahun_berdiri)
                                <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">
                                    Est. {{ $umkm->tahun_berdiri }} ({{ $umkm->usia_usaha }} Thn)
                                </span>
                                @endif
                            </div>

                            <h3 class="text-base font-bold text-slate-900 mb-1">
                                {{ $umkm->nama_usaha }}
                            </h3>
                            <div class="text-xs font-semibold text-slate-600 mb-2">
                                Pemilik: {{ $umkm->owner?->nama_lengkap ?? '-' }}
                            </div>
                            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-4">
                                {{ $umkm->deskripsi_produk ?: 'Usaha aktif yang beroperasi di wilayah Kabupaten Sinjai.' }}
                            </p>
                        </div>

                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-slate-500">📍 Kec. {{ $umkm->kecamatan }}</span>
                            <span class="font-bold text-emerald-800">
                                {{ $umkm->nama_jenis_izin }}
                            </span>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 p-8 text-center text-slate-400">
                        Belum ada contoh produk yang ditampilkan.
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- PANDUAN PERAN (PANDUAN SOP MENURUT SAMAKI) -->
        <section id="panduan" class="py-16 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-xs font-bold text-emerald-800 uppercase tracking-widest">Petunjuk Penggunaan</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mt-1">Panduan Sesuai Peran Anda</h2>
                    <p class="text-sm text-slate-500 mt-2">
                        Pahami kewenangan dan tahapan kerja agar proses pendataan dan pengesahan berjalan cepat, akuntabel, dan terlindungi UU PDP.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Peran 1: Pelaku Usaha / Masyarakat -->
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                        <span class="text-2xl mb-2 block">👤</span>
                        <h3 class="text-base font-bold text-slate-900">Pelaku UMKM / Masyarakat</h3>
                        <p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">
                            Mendaftarkan usaha melalui petugas kantor desa/kelurahan setempat dengan membawa KTP dan bukti izin yang dimiliki.
                        </p>
                        <ul class="text-xs text-slate-600 space-y-2">
                            <li>1. Siapkan NIK & Alamat Fisik Usaha</li>
                            <li>2. Catat jumlah tenaga kerja riil</li>
                            <li>3. Dapatkan Surat Tanda Registri Resmi</li>
                        </ul>
                    </div>

                    <!-- Peran 2: Operator Pendata Desa -->
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                        <span class="text-2xl mb-2 block">📝</span>
                        <h3 class="text-base font-bold text-slate-900">Operator Pendata Desa/Kelurahan</h3>
                        <p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">
                            Memasukkan data baru berstandar A3 ke dalam aplikasi dan memeriksa nomor NIK serta lokasi agar tidak terjadi duplikasi.
                        </p>
                        <ul class="text-xs text-slate-600 space-y-2">
                            <li>1. Input data formulir A3 secara cermat</li>
                            <li>2. Manfaatkan fitur deteksi dini duplikasi NIK</li>
                            <li>3. Kirim pengajuan ke Verifikator Kecamatan</li>
                        </ul>
                    </div>

                    <!-- Peran 3: Verifikator Dinas / Pimpinan -->
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 shadow-sm">
                        <span class="text-2xl mb-2 block">⚖️</span>
                        <h3 class="text-base font-bold text-slate-900">Verifikator Dinas & Pimpinan</h3>
                        <p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">
                            Menelaah kelengkapan dokumen, mengesahkan registri induk, serta memantau peta analitik dan cadangan data daerah.
                        </p>
                        <ul class="text-xs text-slate-600 space-y-2">
                            <li>1. Verifikasi satu pintu perizinan</li>
                            <li>2. Sahkan data bersih secara bertahap</li>
                            <li>3. Unduh lembar kerja verifikasi lapangan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER RESMI PEMKAB SINJAI -->
    <footer class="bg-slate-950 text-white py-12 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8 pb-8 border-b border-slate-800">
                <div class="md:col-span-2 space-y-3">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-lg bg-emerald-600 flex items-center justify-center font-bold text-white text-lg">
                            S
                        </div>
                        <span class="font-extrabold text-base tracking-wider">SIJAI UMKM KABUPATEN SINJAI</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed max-w-md">
                        Sistem Informasi Jaringan Informasi Terpadu Usaha Mikro, Kecil, dan Menengah (SIJAI UMKM) di bawah naungan Dinas Koperasi, Usaha Kecil Menengah, dan Tenaga Kerja Pemerintah Kabupaten Sinjai, Sulawesi Selatan.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white text-sm mb-3">Wilayah Layanan</h4>
                    <ul class="text-slate-400 space-y-1.5">
                        <li>Sinjai Utara · Sinjai Timur</li>
                        <li>Sinjai Selatan · Sinjai Barat</li>
                        <li>Sinjai Tengah · Bulupoddo</li>
                        <li>Sinjai Borong · Tellu Limpoe</li>
                        <li>Pulau Sembilan</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white text-sm mb-3">Kepatuhan Hukum</h4>
                    <ul class="text-slate-400 space-y-1.5">
                        <li>UU PDP No. 27 Tahun 2022</li>
                        <li>PP No. 7 Tahun 2021 (Kriteria UMKM)</li>
                        <li>Standar Data Registri A3</li>
                        <li>Audit Log & Mitigasi KB-17/18</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between text-slate-500 gap-3">
                <div>
                    &copy; 2026 Pemerintah Kabupaten Sinjai. Hak Cipta Dilindungi Undang-Undang.
                </div>
                <div class="flex items-center space-x-4">
                    <span>Tema Khas Sinjai Diadopsi dari Portal SAMAKI</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
