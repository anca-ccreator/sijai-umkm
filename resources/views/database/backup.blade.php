@extends('layouts.app')

@section('title', 'Cadangan Basis Data (Backup & Disaster Recovery)')

@section('content')
<div class="space-y-6">

    <!-- Header & Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <div class="flex items-center space-x-2">
                <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-slate-800 text-amber-300">
                    🛡️ TATA KELOLA KB-17 / KB-18
                </span>
                <span class="text-xs text-slate-400">Penyimpanan Terproteksi</span>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight mt-1">Cadangan Basis Data (Database Backup)</h1>
            <p class="text-sm text-slate-500 mt-0.5">Pencadangan konsisten atomik basis data SIJAI UMKM dengan kebijakan retensi otomatis 7 berkas terakhir.</p>
        </div>
        <div>
            <form action="{{ route('database.backup.create') }}" method="POST">
                @csrf
                <button type="submit" 
                        onclick="return confirm('Mulai proses pencadangan (backup) basis data SIJAI UMKM sekarang?')"
                        class="px-4 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl text-xs font-bold shadow-md transition transform active:scale-95 flex items-center space-x-2">
                    <span>💾</span>
                    <span>Buat Cadangan Baru Sekarang</span>
                </button>
            </form>
        </div>
    </div>

    <!-- 4 KPI Metrics Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- 1. Total Berkas -->
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <span class="text-slate-500 text-xs font-semibold uppercase block">Total Berkas Cadangan</span>
            <div class="text-3xl font-extrabold text-slate-800 mt-1">
                {{ count($backups) }} <span class="text-xs font-normal text-slate-500">/ 7 berkas</span>
            </div>
            <div class="text-[11px] text-slate-400 mt-1">Sesuai batas retensi aman</div>
        </div>

        <!-- 2. Total Ukuran Penyimpanan -->
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <span class="text-slate-500 text-xs font-semibold uppercase block">Kapasitas Disk Terpakai</span>
            <div class="text-3xl font-extrabold text-emerald-800 mt-1">
                {{ $totalSizeFormatted }}
            </div>
            <div class="text-[11px] text-slate-400 mt-1">Penyimpanan lokal terproteksi</div>
        </div>

        <!-- 3. Kebijakan Retensi -->
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <span class="text-slate-500 text-xs font-semibold uppercase block">Kebijakan Retensi</span>
            <div class="text-xl font-extrabold text-slate-800 mt-2">
                Maks. 7 Berkas
            </div>
            <div class="text-[11px] text-slate-400 mt-1">Berkas ke-8 otomatis dibersihkan</div>
        </div>

        <!-- 4. Integritas Data -->
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <span class="text-slate-500 text-xs font-semibold uppercase block">Metode Snapshot</span>
            <div class="text-xl font-extrabold text-teal-700 mt-2">
                Konsisten & Atomik
            </div>
            <div class="text-[11px] text-slate-400 mt-1">Tanda <code class="text-[10px] bg-slate-100 px-1 py-0.5 rounded">SIJAI_BACKUP_COMPLETE</code></div>
        </div>
    </div>

    <!-- Tabel Daftar Cadangan Basis Data -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-4 border-b border-slate-100 flex items-center justify-between">
            <div>
                <h2 class="font-bold text-slate-800 text-sm flex items-center space-x-2">
                    <span>📦</span>
                    <span>Daftar Cadangan Basis Data Tersimpan</span>
                </h2>
                <p class="text-xs text-slate-400 mt-0.5">Berkas disimpan di direktori terisolasi <code class="text-[11px] text-slate-600 bg-slate-100 px-1 rounded">storage/app/backups/</code>.</p>
            </div>
            <span class="text-xs font-semibold text-slate-500">
                Terurut: Terbaru &rarr; Terlama
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 uppercase font-semibold">
                        <th class="py-3 px-4 text-center w-12">No</th>
                        <th class="py-3 px-4">Nama Berkas SQL</th>
                        <th class="py-3 px-4">Ukuran</th>
                        <th class="py-3 px-4">Waktu Pembuatan</th>
                        <th class="py-3 px-4">Sidik Integritas (SHA-256)</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($backups as $index => $item)
                    <tr class="hover:bg-slate-50/70 transition">
                        <td class="py-3 px-4 text-center font-bold text-slate-400">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">
                            <div class="font-mono font-bold text-slate-800 flex items-center space-x-1.5">
                                <span class="text-base text-emerald-600">🗄️</span>
                                <span>{{ $item['file_name'] }}</span>
                            </div>
                            <span class="text-[10px] text-slate-400">Format: SQL Dump Standar MySQL</span>
                        </td>
                        <td class="py-3 px-4 font-bold text-slate-700">
                            {{ $item['file_size_formatted'] }}
                        </td>
                        <td class="py-3 px-4">
                            <div class="text-slate-800 font-medium">{{ $item['created_at_human'] }}</div>
                            <div class="text-[10px] text-slate-400">{{ $item['created_at'] }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="font-mono text-[11px] bg-slate-100 text-slate-700 px-2 py-0.5 rounded border border-slate-200 select-all" title="{{ $item['sha256'] }}">
                                {{ substr($item['sha256'], 0, 16) }}...{{ substr($item['sha256'], -8) }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <div class="inline-flex items-center space-x-1.5">
                                <!-- Tombol Unduh -->
                                <a href="{{ route('database.backup.download', $item['file_name']) }}" 
                                   class="px-3 py-1.5 bg-slate-800 hover:bg-slate-900 text-white rounded-lg text-xs font-semibold shadow-sm transition flex items-center space-x-1">
                                    <span>📥</span>
                                    <span>Unduh</span>
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('database.backup.delete', $item['file_name']) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('Hapus permanen berkas cadangan {{ $item['file_name'] }}? Tindakan ini tidak dapat dibatalkan.')"
                                            class="px-2.5 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-700 rounded-lg text-xs font-semibold border border-rose-200 transition" 
                                            title="Hapus berkas cadangan ini">
                                        🗑️
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400">
                            <div class="text-3xl mb-2">📦</div>
                            <div class="font-bold text-sm text-slate-600">Belum Ada Berkas Cadangan Tersimpan</div>
                            <p class="text-xs text-slate-400 mt-1">Tekan tombol <strong>"Buat Cadangan Baru Sekarang"</strong> di atas untuk membuat cadangan basis data pertama.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Kotak Pedoman Standar Tata Kelola (KB-17 / KB-18) -->
    <div class="bg-gradient-to-r from-slate-900 to-indigo-950 text-white p-5 rounded-2xl shadow-sm border border-slate-800">
        <div class="flex items-start space-x-3">
            <span class="text-2xl">💡</span>
            <div class="space-y-1.5 text-xs">
                <h3 class="font-bold text-amber-300 text-sm">Pedoman Operasional Pencadangan & Kepatuhan Tata Kelola (KB-17 & KB-18)</h3>
                <p class="text-slate-300 leading-relaxed">
                    1. <strong>Waktu Ideal Pencadangan:</strong> Disarankan membuat cadangan baru sebelum melakukan operasi massal seperti pembersihan data, pengesahan masal ratusan UMKM, atau perbaikan skema database.
                </p>
                <p class="text-slate-300 leading-relaxed">
                    2. <strong>Retensi 7 Berkas:</strong> Sistem secara otomatis mengelola rotasi berkas. Saat berkas ke-8 dibuat, berkas cadangan paling lama akan dimusnahkan secara otomatis agar kapasitas hosting/server tetap stabil.
                </p>
                <p class="text-slate-300 leading-relaxed">
                    3. <strong>Pencadangan Otomatis via Penjadwal (Cron / Scheduler):</strong> Perintah CLI resmi dapat dipasang pada task scheduler server melalui perintah: <code class="bg-white/10 px-1.5 py-0.5 rounded text-amber-300">php artisan sijai:backup-db</code>.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection
