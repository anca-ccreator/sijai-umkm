@extends('layouts.app')

@section('title', 'Manajemen Pengguna Sistem')

@section('content')
<div class="space-y-6 max-w-5xl mx-auto">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Manajemen Pengguna SIJAI UMKM</h1>
            <p class="text-sm text-slate-500 mt-0.5">Kelola akun staf dinas, operator pendata lapangan, verifikator, dan pimpinan daerah.</p>
        </div>
    </div>

    <!-- Grid: Form Tambah & Tabel Akun -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Form Tambah Akun Baru -->
        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
            <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
                <span>➕</span>
                <span>Tambah Akun Pegawai Baru</span>
            </h2>

            <form action="{{ route('pengguna.store') }}" method="POST" class="space-y-3 text-xs">
                @csrf
                <div>
                    <label for="name" class="block font-semibold text-slate-700 mb-1">Nama Lengkap & Gelar</label>
                    <input type="text" id="name" name="name" required placeholder="Contoh: Muh. Ridwan, S.STP"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="username" class="block font-semibold text-slate-700 mb-1">Nama Pengguna (Username Login)</label>
                    <input type="text" id="username" name="username" required placeholder="Contoh: ridwan_sinjai"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="password" class="block font-semibold text-slate-700 mb-1">Kata Sandi Awal</label>
                    <input type="password" id="password" name="password" required placeholder="Minimal 6 karakter..."
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="role" class="block font-semibold text-slate-700 mb-1">Peran / Hak Akses</label>
                    <select id="role" name="role" required class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                        <option value="operator">Operator Pendata (Input data)</option>
                        <option value="verifikator">Verifikator Dinas (Persetujuan berkas)</option>
                        <option value="pimpinan">Pimpinan / Kadis (Pantau & Laporan)</option>
                        <option value="admin">Administrator Sistem</option>
                    </select>
                </div>

                <div>
                    <label for="dinas" class="block font-semibold text-slate-700 mb-1">Instansi / Dinas Terkait</label>
                    <input type="text" id="dinas" name="dinas" required placeholder="Contoh: Dinas Koperasi & UKM"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="email" class="block font-semibold text-slate-700 mb-1">Alamat Email (Opsional)</label>
                    <input type="email" id="email" name="email" placeholder="nama@sinjaikab.go.id"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:ring-2 focus:ring-emerald-500">
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-2 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg shadow transition">
                        Daftarkan Akun Pegawai
                    </button>
                </div>
            </form>
        </div>

        <!-- Tabel Daftar Akun -->
        <div class="lg:col-span-2 bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
            <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
                <span>👥</span>
                <span>Daftar Akun Pengguna Terdaftar</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 uppercase font-semibold">
                            <th class="py-2.5 px-3">Pegawai</th>
                            <th class="py-2.5 px-3">Peran & Dinas</th>
                            <th class="py-2.5 px-3 text-center">Status</th>
                            <th class="py-2.5 px-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($users as $u)
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="py-2.5 px-3">
                                <div class="font-bold text-slate-800">{{ $u->name }}</div>
                                <div class="text-[11px] text-slate-500 font-mono">{{ $u->username }}</div>
                            </td>
                            <td class="py-2.5 px-3">
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold 
                                    @if($u->role === 'admin') bg-purple-100 text-purple-800
                                    @elseif($u->role === 'verifikator') bg-emerald-100 text-emerald-800
                                    @elseif($u->role === 'pimpinan') bg-blue-100 text-blue-800
                                    @else bg-slate-100 text-slate-700 @endif">
                                    {{ strtoupper($u->role) }}
                                </span>
                                <div class="text-[11px] text-slate-500 mt-0.5">{{ $u->dinas }}</div>
                            </td>
                            <td class="py-2.5 px-3 text-center">
                                @if($u->active)
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">Aktif</span>
                                @else
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-800">Nonaktif</span>
                                @endif
                            </td>
                            <td class="py-2.5 px-3 text-right">
                                @if($u->id !== auth()->id())
                                <form action="{{ route('pengguna.toggle', $u->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" 
                                            class="px-2 py-1 rounded text-[11px] font-medium border {{ $u->active ? 'text-red-700 border-red-200 hover:bg-red-50' : 'text-emerald-700 border-emerald-200 hover:bg-emerald-50' }}">
                                        {{ $u->active ? 'Nonaktifkan' : 'Aktifkan' }}
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($users->hasPages())
            <div class="pt-3 border-t border-slate-100">
                {{ $users->links() }}
            </div>
            @endif
        </div>

    </div>

</div>
@endsection
