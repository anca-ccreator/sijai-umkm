<!DOCTYPE html>
<html lang="id" data-samaki-color-theme="{{ \App\Services\ColorThemeService::current() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIJAI UMKM') - Pemerintah Kabupaten Sinjai</title>
    <!-- Tailwind CSS CDN untuk kepastian tampilan instan tanpa build -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/samaki-theme.css') }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sinjai: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'DM Sans', 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen">

    <!-- Mobile Backdrop Overlay -->
    <div id="sidebarBackdrop" 
         onclick="toggleSidebar()"
         class="fixed inset-0 bg-black/60 backdrop-blur-xs z-40 hidden lg:hidden transition-opacity duration-300">
    </div>

    <!-- SIDEBAR SAMAKI: Posisi Tetap (Fixed), Fit Layar & Bebas Efek Scroll Konten -->
    <aside id="samakiSidebar" 
           class="samaki-sidebar w-64 fixed inset-y-0 left-0 h-screen z-50 flex flex-col transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0">
            
            <!-- Brand / Header Sidebar -->
            <div class="h-16 flex items-center justify-between px-4 border-b border-white/10 flex-shrink-0" style="background-color: var(--samaki-header-end);">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-2.5 group">
                    <div class="w-9 h-9 rounded-lg bg-emerald-600 flex items-center justify-center font-bold text-lg shadow text-white border border-emerald-400 group-hover:scale-105 transition">
                        S
                    </div>
                    <div>
                        <div class="font-bold text-sm tracking-tight text-white group-hover:text-emerald-200 transition">
                            SIJAI <span style="color: var(--samaki-accent);">UMKM</span>
                        </div>
                        <div class="text-[10px] text-slate-300">Kabupaten Sinjai</div>
                    </div>
                </a>
                <button onclick="toggleSidebar()" class="lg:hidden text-white/70 hover:text-white p-1 rounded-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Scrollable Navigation Groups -->
            <div class="flex-1 overflow-y-auto px-3 py-4 space-y-4 custom-scrollbar">

                <!-- 1. GROUP: UTAMA -->
                <div>
                    <div class="samaki-nav-heading">Utama</div>
                    <div class="space-y-1">
                        <a href="{{ route('dashboard', ['tab' => 'ringkasan']) }}" 
                           class="samaki-nav-link {{ request()->routeIs('dashboard*') && in_array(request('tab', 'ringkasan'), ['ringkasan'], true) && !request()->routeIs('dashboard.export') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">📊</span>
                                <span>Dashboard Ringkasan</span>
                            </div>
                        </a>
                        <a href="{{ route('umkm.index') }}" 
                           class="samaki-nav-link {{ request()->routeIs('umkm.index') || request()->routeIs('umkm.show') || request()->routeIs('umkm.edit') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">📋</span>
                                <span>Registri Data UMKM</span>
                            </div>
                        </a>
                        <a href="{{ route('umkm.create') }}" 
                           class="samaki-nav-link {{ request()->routeIs('umkm.create') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">➕</span>
                                <span>Input UMKM Baru</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 2. GROUP: PEMBERSIHAN & MUTU DATA -->
                <div>
                    <div class="samaki-nav-heading">Pembersihan & Mutu</div>
                    <div class="space-y-1">
                        <a href="{{ route('pembersihan.index') }}" 
                           class="samaki-nav-link {{ request()->routeIs('pembersihan*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">🧹</span>
                                <span>Pembersihan Data Lama</span>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-400/30">
                                Excel
                            </span>
                        </a>
                        <a href="{{ route('rekonsiliasi.index') }}" 
                           class="samaki-nav-link {{ request()->routeIs('rekonsiliasi*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">⚖️</span>
                                <span>Rekonsiliasi NIB</span>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-rose-500/20 text-rose-300 border border-rose-400/30" title="44 Konflik Identitas Terdeteksi">
                                44 Konflik
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 3. GROUP: ANALITIK & MONITORING DAERAH -->
                <div>
                    <div class="samaki-nav-heading">Analitik & Monitoring</div>
                    <div class="space-y-1">
                        <a href="{{ route('dashboard', ['tab' => 'tenaga-kerja']) }}" 
                           class="samaki-nav-link {{ request()->routeIs('dashboard*') && request('tab') === 'tenaga-kerja' ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">👥</span>
                                <span>Serapan Tenaga Kerja</span>
                            </div>
                        </a>
                        <a href="{{ route('dashboard', ['tab' => 'ekonomi']) }}" 
                           class="samaki-nav-link {{ request()->routeIs('dashboard*') && request('tab') === 'ekonomi' ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">💰</span>
                                <span>Skala Ekonomi & Aset</span>
                            </div>
                        </a>
                        <a href="{{ route('dashboard', ['tab' => 'legalitas']) }}" 
                           class="samaki-nav-link {{ request()->routeIs('dashboard*') && request('tab') === 'legalitas' ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">📜</span>
                                <span>Legalitas & Perizinan</span>
                            </div>
                        </a>
                        <a href="{{ route('dashboard', ['tab' => 'kecamatan']) }}" 
                           class="samaki-nav-link {{ request()->routeIs('dashboard*') && request('tab') === 'kecamatan' ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">🗺️</span>
                                <span>Sebaran 9 Kecamatan</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 4. GROUP: SISTEM & KEAMANAN (KHUSUS ADMIN) -->
                @if(auth()->user()?->isAdmin())
                <div>
                    <div class="samaki-nav-heading" style="color: var(--samaki-accent);">Sistem & Keamanan</div>
                    <div class="space-y-1">
                        <a href="{{ route('database.backup') }}" 
                           class="samaki-nav-link {{ request()->routeIs('database*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">💾</span>
                                <span>Backup Database</span>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-cyan-500/20 text-cyan-300 border border-cyan-400/30">
                                KB-17
                            </span>
                        </a>
                        <a href="{{ route('source-manager.index') }}" 
                           class="samaki-nav-link {{ request()->routeIs('source-manager*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">📦</span>
                                <span>Source Manager</span>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">
                                SAMAKI
                            </span>
                        </a>
                        <a href="{{ route('pengguna.index') }}" 
                           class="samaki-nav-link {{ request()->routeIs('pengguna*') ? 'active' : '' }}">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">⚙️</span>
                                <span>Kelola Pengguna</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif

                <!-- 5. GROUP: BANTUAN & AKUN -->
                <div>
                    <div class="samaki-nav-heading">Bantuan & Sesi</div>
                    <div class="space-y-1">
                        <a href="{{ route('home') }}" 
                           target="_blank" 
                           class="samaki-nav-link">
                            <div class="flex items-center space-x-2.5">
                                <span class="text-base">🌐</span>
                                <span>Portal Depan Publik</span>
                            </div>
                            <span class="text-[10px] text-slate-400">↗</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Sidebar Footer: Petugas & Logout -->
            <div class="p-3 border-t border-white/10 bg-black/25 flex-shrink-0">
                @auth
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2 overflow-hidden">
                        <div class="w-8 h-8 rounded-full bg-white/15 flex items-center justify-center font-bold text-xs text-white border border-white/20 flex-shrink-0">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <div class="truncate">
                            <div class="text-xs font-semibold text-white truncate">{{ auth()->user()->name }}</div>
                            <div class="text-[10px] text-emerald-300 truncate">{{ auth()->user()->dinas }}</div>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" 
                                onclick="return confirm('Apakah Anda yakin ingin keluar dari sistem?')"
                                title="Keluar dari sesi"
                                class="p-1.5 rounded-lg text-slate-400 hover:text-red-400 hover:bg-white/10 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </button>
                    </form>
                </div>
                @endauth
            </div>

        </aside>

        <!-- MAIN LAYOUT WRAPPER (Diberi padding-left lg:pl-64 agar pas di samping sidebar tetap) -->
        <div id="mainWrapper" class="min-h-screen flex flex-col transition-all duration-300 ease-in-out lg:pl-64">

            <!-- Topbar Sticky Header -->
            <header class="sticky top-0 z-30 text-white shadow-sm transition flex-shrink-0" style="background-color: var(--samaki-primary);">
                <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                    
                    <!-- Sisi Kiri: Tombol Hamburger & Breadcrumb Title -->
                    <div class="flex items-center space-x-3">
                        <button onclick="toggleSidebar()" 
                                title="Buka/Tutup Sidebar Menu SAMAKI"
                                class="p-2 rounded-lg bg-black/20 hover:bg-black/35 text-white focus:outline-none transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                        <div class="flex items-center space-x-2">
                            <span class="font-extrabold text-sm sm:text-base tracking-tight text-white">@yield('title', 'SIJAI UMKM')</span>
                            <span class="hidden sm:inline text-xs text-white/60">•</span>
                            <span class="hidden sm:inline text-xs text-white/80">Sistem Satu Data Registri UMKM Sinjai</span>
                        </div>
                    </div>

                    <!-- Sisi Kanan: Theme Switcher & Aksi Cepat -->
                    <div class="flex items-center space-x-2 sm:space-x-3">
                        <!-- Theme Selector Dropdown -->
                        <div class="flex items-center">
                            <select onchange="window.location.href='/theme/switch/' + this.value" 
                                    title="Pilih Tema Warna Khas Sinjai"
                                    class="px-2.5 py-1.5 bg-black/25 hover:bg-black/40 border border-white/20 rounded-lg text-xs font-semibold text-white focus:outline-none cursor-pointer transition">
                                @foreach(\App\Services\ColorThemeService::options() as $key => $opt)
                                    <option value="{{ $key }}" class="text-slate-800" {{ \App\Services\ColorThemeService::current() === $key ? 'selected' : '' }}>
                                        🎨 {{ $opt['label'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tautan Publik Cepat -->
                        <a href="{{ route('home') }}" 
                           target="_blank" 
                           title="Buka Portal Halaman Depan Publik"
                           class="hidden sm:inline-flex items-center px-2.5 py-1.5 bg-white/10 hover:bg-white/20 text-white rounded-lg text-xs font-medium border border-white/20 transition">
                            <span>🌐 Publik</span>
                        </a>

                        @auth
                        <div class="hidden md:block text-right border-l border-white/20 pl-3">
                            <div class="text-xs font-bold leading-tight">{{ auth()->user()->name }}</div>
                            <div class="text-[10px] text-emerald-200 uppercase font-semibold">{{ auth()->user()->role }}</div>
                        </div>
                        @endauth
                    </div>
                </div>
            </header>

            <!-- Flash Notifications -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 w-full">
                @if(session('success'))
                <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 rounded-xl shadow-sm flex items-start justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-emerald-600 text-xl">✅</span>
                        <span class="text-emerald-800 text-sm font-medium">{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 font-bold text-sm">&times;</button>
                </div>
                @endif

                @if(session('info'))
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-xl shadow-sm flex items-start justify-between mb-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-blue-600 text-xl">ℹ️</span>
                        <span class="text-blue-800 text-sm font-medium">{{ session('info') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-blue-500 hover:text-blue-800 font-bold text-sm">&times;</button>
                </div>
                @endif

                @if(session('error') || $errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl shadow-sm flex items-start justify-between mb-4">
                    <div>
                        <div class="flex items-center space-x-2">
                            <span class="text-red-600 text-xl">⚠️</span>
                            <span class="text-red-800 text-sm font-medium">{{ session('error') ?? 'Terjadi kesalahan pada input data:' }}</span>
                        </div>
                        @if($errors->any())
                        <ul class="mt-2 list-disc list-inside text-xs text-red-700 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-800 font-bold text-sm">&times;</button>
                </div>
                @endif
            </div>

            <!-- Main Page Content -->
            <main class="flex-1 px-4 sm:px-6 lg:px-8 py-6 w-full max-w-7xl mx-auto">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-slate-200 mt-auto py-4 text-center text-xs text-slate-500">
                <div class="max-w-7xl mx-auto px-4">
                    <strong>SIJAI UMKM</strong> &copy; {{ date('Y') }} Pemerintah Kabupaten Sinjai. Portal Sistem Informasi Jaringan Terpadu UMKM.
                </div>
            </footer>

        </div>

    <!-- Script Toggle Sidebar Responsif Khas SAMAKI -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('samakiSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            const mainWrapper = document.getElementById('mainWrapper');
            if (!sidebar) return;

            if (window.innerWidth < 1024) {
                // Mobile behavior: drawer slide
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.remove('-translate-x-full');
                    if (backdrop) backdrop.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    if (backdrop) backdrop.classList.add('hidden');
                }
            } else {
                // Desktop behavior: toggle collapse
                const isCollapsed = sidebar.classList.contains('lg:-translate-x-full');
                if (isCollapsed) {
                    sidebar.classList.remove('lg:-translate-x-full');
                    if (mainWrapper) {
                        mainWrapper.classList.add('lg:pl-64');
                        mainWrapper.classList.remove('lg:pl-0');
                    }
                } else {
                    sidebar.classList.add('lg:-translate-x-full');
                    if (mainWrapper) {
                        mainWrapper.classList.remove('lg:pl-64');
                        mainWrapper.classList.add('lg:pl-0');
                    }
                }
            }
        }
    </script>

    @yield('scripts')
</body>
</html>
