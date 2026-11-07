@extends('layouts.app')

@section('title', 'Manajemen Source Code')

@section('content')
<div class="space-y-6">

    <!-- Header Section (Khas SAMAKI Source Manager) -->
    <div class="samaki-dashboard-hero p-6 sm:p-7 text-white relative shadow-xl">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            <div>
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 text-xs font-bold tracking-wider border border-white/15" style="color: var(--samaki-accent);">
                    <span>🛡️ TATA KELOLA IT & KEAMANAN SISTEM</span>
                    <span>•</span>
                    <span>PEMERINTAH KABUPATEN SINJAI</span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white mt-2">
                    Manajemen Source Code
                </h1>
                <p class="text-xs sm:text-sm text-slate-300 mt-1 max-w-2xl leading-relaxed">
                    Pencadangan terpadu seluruh kode program aplikasi, pengemasan paket rilis ber-manifest, dan pembaruan (*deploy*) aman berfitur <em>automatic rollback</em>.
                </p>
                <div class="mt-4 flex flex-wrap items-center gap-2">
                    <span class="px-3 py-1 rounded-lg bg-white/15 text-xs font-bold text-white border border-white/20">
                        🏷️ Versi Aktif: {{ $currentVersion }}
                    </span>
                    <span class="px-3 py-1 rounded-lg bg-white/10 text-xs font-semibold text-emerald-300 border border-emerald-400/30">
                        ✨ {{ $currentReleaseName }}
                    </span>
                    <span class="px-3 py-1 rounded-lg bg-white/10 text-xs text-slate-300 border border-white/15">
                        📦 {{ $totalLocalBackups }} Berkas Arsip Tersimpan
                    </span>
                </div>
            </div>

            <!-- Kartu Info Cepat Sesi Administrator -->
            <div class="samaki-hero-copy p-4 text-xs space-y-2 min-w-[260px] flex-shrink-0">
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <span class="text-slate-400">Otoritas Deploy:</span>
                    <span class="font-bold text-amber-300">{{ auth()->user()->name ?? 'Administrator' }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <span class="text-slate-400">Status Integritas:</span>
                    <span class="font-bold text-emerald-300">✓ SHA-256 Verified</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-slate-400">Perlindungan:</span>
                    <span class="font-bold text-cyan-200">Strict Sandboxing</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 2 Kolom: Peringatan Keamanan vs Aksi Download & Deploy -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        <!-- Kolom Kiri: Peringatan Keamanan & SOP (4 Kolom) -->
        <div class="lg:col-span-4 space-y-4">
            <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
                <div class="flex items-center space-x-2 pb-3 border-b border-slate-100">
                    <span class="text-red-600 text-lg">🛡️</span>
                    <h2 class="text-sm font-bold text-slate-800">Protokol Keamanan & Integritas</h2>
                </div>

                <div class="mt-4 p-3.5 bg-red-50 border border-red-200 rounded-xl text-xs text-red-800 leading-relaxed">
                    <div class="font-bold flex items-center space-x-1.5 mb-1 text-red-900">
                        <span>⚠️</span>
                        <span>PERHATIAN KHUSUS</span>
                    </div>
                    Fitur ini memodifikasi berkas aplikasi secara langsung. Pastikan Anda telah membuat <strong>Backup Database</strong> di menu Cadangan Basis Data sebelum melakukan deploy rilis baru.
                </div>

                <div class="mt-4 space-y-2.5 text-xs text-slate-600">
                    <div class="flex items-start space-x-2">
                        <span class="text-emerald-600 font-bold">✓</span>
                        <span><strong>Proteksi Data Rahasia:</strong> Pencadangan secara otomatis mengecualikan berkas <code class="bg-slate-100 px-1 py-0.5 rounded text-slate-800">.env</code>, database credentials, dump SQL, direktori <code class="bg-slate-100 px-1 py-0.5 rounded text-slate-800">storage/</code>, dan <code class="bg-slate-100 px-1 py-0.5 rounded text-slate-800">vendor/</code>.</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <span class="text-emerald-600 font-bold">✓</span>
                        <span><strong>Pre-Flight & Linting:</strong> Paket ZIP diperiksa terhadap ancaman <em>path traversal</em> dan setiap berkas PHP diuji sintaksnya sebelum diterapkan.</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <span class="text-emerald-600 font-bold">✓</span>
                        <span><strong>Snapshot & Rollback:</strong> Jika terjadi galat saat penulisan berkas, sistem seketika mengembalikan seluruh berkas asli dari snapshot tanpa sisa status rusak (*zero partial deploy*).</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <span class="text-emerald-600 font-bold">✓</span>
                        <span><strong>Manifest Rilis:</strong> Paket rilis memuat manifest resmi <code class="bg-slate-100 px-1 py-0.5 rounded text-slate-800">sijai-release.json</code> dengan ringkasan SHA-256 setiap berkas.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Aksi Download & Deploy ZIP (8 Kolom) -->
        <div class="lg:col-span-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <!-- 1. Download Backup Source Code -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                            <h3 class="text-sm font-bold text-slate-800">Download Source Code</h3>
                            <span class="text-xl">📥</span>
                        </div>
                        <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                            Unduh seluruh berkas source code aplikasi (Controllers, Models, Views, Migrasi, Konfigurasi, dan Aset) ke dalam satu arsip ZIP siap simpan.
                        </p>
                        <div class="mt-4 p-3 bg-slate-50 rounded-xl text-[11px] text-slate-600 border border-slate-200/60">
                            <div class="font-semibold text-slate-700">Format Nama Berkas:</div>
                            <code class="text-emerald-700 font-mono text-[10px] break-all">backup_source_YYYY_MM_DD_His.zip</code>
                        </div>
                    </div>

                    <div class="mt-6 pt-3 border-t border-slate-100">
                        <a href="{{ route('source-manager.download') }}" 
                           onclick="return confirm('Proses pengemasan ZIP membutuhkan beberapa detik. Mulai pengunduhan source code?')"
                           class="w-full py-2.5 px-4 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl text-xs text-center shadow-md transition flex items-center justify-center space-x-2 transform active:scale-95">
                            <span>📦 Download Backup (.zip)</span>
                        </a>
                    </div>
                </div>

                <!-- 2. Update / Deploy ZIP -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between">
                    <form action="{{ route('source-manager.upload') }}" method="POST" enctype="multipart/form-data" class="flex flex-col h-full justify-between">
                        @csrf
                        <div>
                            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                <h3 class="text-sm font-bold text-slate-800">Update / Deploy ZIP</h3>
                                <span class="text-xl">🚀</span>
                            </div>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed">
                                Unggah paket rilis ZIP. Sistem mengekstrak ke folder staging, memvalidasi integritas manifest, linting sintaks, dan menerapkan secara atomik.
                            </p>
                            <div class="mt-4">
                                <label class="block text-[11px] font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pilih Berkas Rilis (.zip):</label>
                                <input type="file" 
                                       name="zip_file" 
                                       accept=".zip" 
                                       required 
                                       class="block w-full text-xs text-slate-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 border border-slate-300 rounded-xl cursor-pointer bg-slate-50">
                            </div>
                        </div>

                        <div class="mt-6 pt-3 border-t border-slate-100">
                            <button type="submit" 
                                    onclick="return confirm('PERINGATAN: Source code aktif akan diperbarui setelah ZIP lolos pre-flight dan linting. Pastikan Anda telah membuat backup database. Lanjutkan deploy?')"
                                    class="w-full py-2.5 px-4 bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl text-xs text-center shadow-md transition flex items-center justify-center space-x-2 transform active:scale-95">
                                <span>🚀 Validasi & Deploy Rilis</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Banner Dokumentasi & Tata Kelola -->
            <div class="bg-slate-900 text-white rounded-2xl p-5 border border-slate-800 shadow-md">
                <div class="flex items-start space-x-3">
                    <span class="text-amber-400 text-xl flex-shrink-0">💡</span>
                    <div class="space-y-1 text-xs">
                        <div class="font-bold text-slate-200">Panduan Operasional Pembaruan Kode Sistem</div>
                        <p class="text-slate-400 leading-relaxed">
                            Setiap rilis source code yang diunduh dari modul ini merupakan paket mandiri (*self-contained package*) yang dapat langsung diunggah kembali ke server hosting, staging, maupun repositori cadangan tanpa perlu instalasi pihak ketiga secara manual.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Riwayat Rilis & Audit Trail Source Code -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h2 class="text-base font-bold text-slate-800 flex items-center space-x-2">
                    <span>🕒</span>
                    <span>Riwayat Rilis & Paket Source Code</span>
                </h2>
                <p class="text-xs text-slate-500 mt-0.5">Daftar paket rilis yang pernah diproses oleh Source Manager SIJAI UMKM.</p>
            </div>
            <div>
                <span class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded-lg text-xs font-semibold border border-slate-200">
                    Menampilkan {{ $releaseHistory->count() }} Riwayat Terakhir
                </span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-600 border-b border-slate-200 font-bold uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Versi & Nama Rilis</th>
                        <th class="py-3 px-3">Status</th>
                        <th class="py-3 px-3">Jumlah Berkas</th>
                        <th class="py-3 px-3">Waktu Eksekusi</th>
                        <th class="py-3 px-3">Petugas</th>
                        <th class="py-3 px-4">Ringkasan & Integritas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($releaseHistory as $rel)
                    <tr class="hover:bg-slate-50/80 transition">
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-slate-800 text-sm">v{{ $rel->version }}</div>
                            <div class="text-[11px] text-slate-500 mt-0.5">{{ $rel->release_name }}</div>
                        </td>
                        <td class="py-3.5 px-3">
                            @if($rel->status === 'success')
                            <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 rounded-full font-bold text-[10px] border border-emerald-300">
                                ✓ SUCCESS
                            </span>
                            @elseif($rel->status === 'failed')
                            <span class="px-2.5 py-1 bg-red-100 text-red-800 rounded-full font-bold text-[10px] border border-red-300">
                                ✕ FAILED
                            </span>
                            @else
                            <span class="px-2.5 py-1 bg-amber-100 text-amber-800 rounded-full font-bold text-[10px] border border-amber-300">
                                ⏱ PENDING
                            </span>
                            @endif
                        </td>
                        <td class="py-3.5 px-3 font-semibold text-slate-700">
                            {{ number_format($rel->file_count) }} file
                        </td>
                        <td class="py-3.5 px-3 text-slate-500 whitespace-nowrap">
                            {{ $rel->deployed_at ? $rel->deployed_at->format('d M Y, H:i') . ' WITA' : '-' }}
                        </td>
                        <td class="py-3.5 px-3 font-medium text-slate-700">
                            {{ $rel->deployed_by ?? 'Sistem' }}
                        </td>
                        <td class="py-3.5 px-4 text-slate-600 max-w-xs">
                            <div class="truncate font-mono text-[11px]" title="{{ $rel->summary }}">{{ $rel->summary ?? '-' }}</div>
                            @if($rel->package_sha256)
                            <div class="text-[10px] text-slate-400 font-mono mt-0.5 truncate" title="SHA-256: {{ $rel->package_sha256 }}">
                                SHA: {{ substr($rel->package_sha256, 0, 16) }}...
                            </div>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-8 text-slate-400">
                            <div class="text-2xl mb-1">📦</div>
                            <div class="font-semibold text-sm">Belum Ada Riwayat Rilis</div>
                            <div class="text-xs text-slate-500 mt-1">Unduh berkas source code untuk menginisialisasi rilis pertama.</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
