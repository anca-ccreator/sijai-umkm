<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SIJAI UMKM Kabupaten Sinjai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-emerald-900 via-teal-900 to-slate-900 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl overflow-hidden border border-emerald-500/20">
        <!-- Header -->
        <div class="bg-emerald-800 px-8 py-6 text-center text-white relative">
            <div class="w-16 h-16 bg-white rounded-xl mx-auto flex items-center justify-center text-emerald-800 font-extrabold text-3xl shadow-lg border-2 border-emerald-300">
                S
            </div>
            <h1 class="text-2xl font-bold mt-3 tracking-tight">SIJAI UMKM</h1>
            <p class="text-emerald-200 text-xs mt-1">Satu Data UMKM Terpadu · Pemerintah Kabupaten Sinjai</p>
        </div>

        <!-- Form Login -->
        <div class="p-8">
            @if(session('info'))
            <div class="mb-4 bg-blue-50 border-l-4 border-blue-500 p-3 rounded text-xs text-blue-800">
                {{ session('info') }}
            </div>
            @endif

            @if($errors->any())
            <div class="mb-4 bg-red-50 border-l-4 border-red-500 p-3 rounded text-xs text-red-800">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1">Nama Pengguna (Username)</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus
                           placeholder="Masukkan nama pengguna..."
                           class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                </div>

                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1">Kata Sandi</label>
                    <input type="password" id="password" name="password" required
                           placeholder="Masukkan kata sandi..."
                           class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition">
                </div>

                <div class="flex items-center justify-between text-xs text-slate-600">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                        <span class="ml-2">Ingat sesi saya</span>
                    </label>
                </div>

                <button type="submit" 
                        class="w-full py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-semibold rounded-lg text-sm shadow-md transition duration-150 transform active:scale-95 flex items-center justify-center space-x-2">
                    <span>Masuk ke SIJAI UMKM</span>
                    <span>&rarr;</span>
                </button>
            </form>

            <!-- Quick Demo Login Buttons for Non-Programmers -->
            <div class="mt-8 pt-6 border-t border-slate-100">
                <p class="text-xs text-center text-slate-500 mb-3 font-medium">Masuk Cepat Uji Coba (Pilih Peran):</p>
                <div class="grid grid-cols-2 gap-2 text-xs">
                    <button type="button" onclick="fillDemo('operator', 'operator123')"
                            class="p-2 bg-slate-100 hover:bg-emerald-50 hover:text-emerald-800 rounded-lg text-left transition border border-slate-200">
                        <div class="font-bold text-slate-800">1. Operator Pendata</div>
                        <div class="text-[10px] text-slate-500">Input draf baru</div>
                    </button>
                    <button type="button" onclick="fillDemo('verifikator', 'verif123')"
                            class="p-2 bg-slate-100 hover:bg-emerald-50 hover:text-emerald-800 rounded-lg text-left transition border border-slate-200">
                        <div class="font-bold text-slate-800">2. Verifikator Dinas</div>
                        <div class="text-[10px] text-slate-500">Persetujuan berkas</div>
                    </button>
                    <button type="button" onclick="fillDemo('pimpinan', 'pimpinan123')"
                            class="p-2 bg-slate-100 hover:bg-emerald-50 hover:text-emerald-800 rounded-lg text-left transition border border-slate-200">
                        <div class="font-bold text-slate-800">3. Pimpinan / Kadis</div>
                        <div class="text-[10px] text-slate-500">Pantau dashboard</div>
                    </button>
                    <button type="button" onclick="fillDemo('admin', 'admin123')"
                            class="p-2 bg-slate-100 hover:bg-emerald-50 hover:text-emerald-800 rounded-lg text-left transition border border-slate-200">
                        <div class="font-bold text-slate-800">4. Admin Sistem</div>
                        <div class="text-[10px] text-slate-500">Kelola akun</div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fillDemo(username, password) {
            document.getElementById('username').value = username;
            document.getElementById('password').value = password;
        }
    </script>
</body>
</html>
