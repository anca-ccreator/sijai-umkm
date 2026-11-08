@extends('layouts.app')

@section('title', 'Meja Kerja Verifikasi Multi-OPD')

@section('content')
<div class="space-y-6">

    <!-- HERO BANNER VERIFIKASI MULTI-OPD (KHAS SAMAKI) -->
    <div style="background: linear-gradient(135deg, #071525 0%, #0c233c 50%, #071525 100%) !important; color: #ffffff !important;" class="samaki-dashboard-hero p-6 sm:p-8 text-white relative">
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div class="space-y-2 max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">
                    <span>⚖️</span>
                    <span>Satu Data Terpadu — Mandat KB-02, KB-05, KB-07 & DT-007</span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">
                    Meja Verifikasi Multi-OPD Kabupaten Sinjai
                </h1>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                    Pusat kendali pengesahan legalitas dan mutu data UMKM secara terdistribusi. Menyelaraskan verifikasi kelembagaan (Dinas Koperasi), legalitas NIB (DPMPTSP), serta standar izin edar dan keamanan pangan (Dinkes/Disperindag).
                </p>
            </div>

            <!-- Petugas & Integritas info -->
            <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl border border-white/15 space-y-2 text-xs min-w-[240px]">
                <div class="flex justify-between items-center pb-2 border-b border-white/10">
                    <span class="text-slate-300">Petugas Aktif:</span>
                    <strong class="text-white">{{ auth()->user()?->name }}</strong>
                </div>
                <div class="flex justify-between items-center pb-2 border-b border-white/10">
                    <span class="text-slate-300">Instansi / Unit:</span>
                    <strong class="text-emerald-300">{{ auth()->user()?->dinas ?: 'Pemerintah Kab. Sinjai' }}</strong>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-slate-300">Prinsip Asas:</span>
                    <span class="text-amber-300 font-semibold">Pemisahan Pengesah (KB-05)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- KPI STATS CARDS -->
    <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
        <!-- 1. Antrean Draft -->
        <a href="{{ route('verifikasi.index', ['status' => 'DRAFT']) }}" 
           class="p-4 rounded-xl border transition shadow-sm {{ $statusTab === 'DRAFT' ? 'bg-amber-50 border-amber-300 ring-2 ring-amber-400' : 'bg-white border-slate-200 hover:border-slate-300' }}">
            <div class="flex items-center justify-between text-xs font-semibold text-amber-800">
                <span>Antrean Masuk</span>
                <span class="text-lg">⏳</span>
            </div>
            <div class="text-2xl font-black text-slate-900 mt-2">{{ number_format($antreanDraftCount, 0, ',', '.') }}</div>
            <div class="text-[11px] text-slate-500 mt-0.5">Menunggu pemeriksaan</div>
        </a>

        <!-- 2. Perlu Perbaikan -->
        <a href="{{ route('verifikasi.index', ['status' => 'PERBAIKAN']) }}" 
           class="p-4 rounded-xl border transition shadow-sm {{ $statusTab === 'PERBAIKAN' ? 'bg-blue-50 border-blue-300 ring-2 ring-blue-400' : 'bg-white border-slate-200 hover:border-slate-300' }}">
            <div class="flex items-center justify-between text-xs font-semibold text-blue-800">
                <span>Perlu Perbaikan</span>
                <span class="text-lg">🛠️</span>
            </div>
            <div class="text-2xl font-black text-slate-900 mt-2">{{ number_format($perbaikanCount, 0, ',', '.') }}</div>
            <div class="text-[11px] text-slate-500 mt-0.5">Dikembalikan ke pencatat</div>
        </a>

        <!-- 3. Disahkan Resmi -->
        <a href="{{ route('verifikasi.index', ['status' => 'RESMI']) }}" 
           class="p-4 rounded-xl border transition shadow-sm {{ $statusTab === 'RESMI' ? 'bg-emerald-50 border-emerald-300 ring-2 ring-emerald-400' : 'bg-white border-slate-200 hover:border-slate-300' }}">
            <div class="flex items-center justify-between text-xs font-semibold text-emerald-800">
                <span>Disahkan Resmi</span>
                <span class="text-lg">✅</span>
            </div>
            <div class="text-2xl font-black text-slate-900 mt-2">{{ number_format($resmiCount, 0, ',', '.') }}</div>
            <div class="text-[11px] text-slate-500 mt-0.5">Profil tervalidasi SSOT</div>
        </a>

        <!-- 4. Ditolak -->
        <a href="{{ route('verifikasi.index', ['status' => 'DITOLAK']) }}" 
           class="p-4 rounded-xl border transition shadow-sm {{ $statusTab === 'DITOLAK' ? 'bg-rose-50 border-rose-300 ring-2 ring-rose-400' : 'bg-white border-slate-200 hover:border-slate-300' }}">
            <div class="flex items-center justify-between text-xs font-semibold text-rose-800">
                <span>Ditolak</span>
                <span class="text-lg">⛔</span>
            </div>
            <div class="text-2xl font-black text-slate-900 mt-2">{{ number_format($ditolakCount, 0, ',', '.') }}</div>
            <div class="text-[11px] text-slate-500 mt-0.5">Tidak memenuhi syarat</div>
        </a>

        <!-- 5. Konflik Sengketa NIB -->
        <a href="{{ route('rekonsiliasi.index', ['status' => 'CONFLICTING_INFO']) }}" 
           class="p-4 rounded-xl border transition shadow-sm bg-gradient-to-br from-purple-50 to-rose-50 border-purple-200 hover:border-purple-300 col-span-2 lg:col-span-1">
            <div class="flex items-center justify-between text-xs font-semibold text-purple-900">
                <span>Konflik NIB (K4)</span>
                <span class="text-lg">⚖️</span>
            </div>
            <div class="text-2xl font-black text-rose-700 mt-2">{{ number_format($konflikNibCount, 0, ',', '.') }}</div>
            <div class="text-[11px] text-purple-700 mt-0.5 font-medium">Buka Meja Sengketa &rarr;</div>
        </a>
    </div>

    <!-- FILTER & PENCARIAN TOOLBAR -->
    <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
        <!-- Tab Status & Pengesahan Masal -->
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-100 pb-4">
            <div class="flex flex-wrap items-center gap-1.5">
                @php
                    $tabs = [
                        'DRAFT' => '⏳ Antrean Masuk (' . number_format($antreanDraftCount, 0, ',', '.') . ')',
                        'PERBAIKAN' => '🛠️ Perlu Perbaikan (' . number_format($perbaikanCount, 0, ',', '.') . ')',
                        'RESMI' => '✅ Disahkan Resmi (' . number_format($resmiCount, 0, ',', '.') . ')',
                        'DITOLAK' => '⛔ Ditolak (' . number_format($ditolakCount, 0, ',', '.') . ')',
                        'SEMUA' => 'Semua Data',
                    ];
                @endphp
                @foreach($tabs as $key => $lbl)
                    <a href="{{ route('verifikasi.index', array_merge(request()->query(), ['status' => $key, 'page' => 1])) }}"
                       class="px-3.5 py-1.5 rounded-xl text-xs font-bold transition {{ $statusTab === $key ? 'bg-slate-900 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                        {{ $lbl }}
                    </a>
                @endforeach
            </div>

            <!-- Tombol Pengesahan Masal Data Bersih -->
            @if(in_array($statusTab, ['DRAFT', 'SEMUA']))
                <button type="button" 
                        onclick="document.getElementById('modalSahkanMasal').classList.remove('hidden')"
                        class="px-3.5 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl text-xs font-bold shadow-sm transition flex items-center gap-1.5">
                    <span>⚡</span>
                    <span>Sahkan Masal Data Bersih</span>
                </button>
            @endif
        </div>

        <!-- Filter Form -->
        <form action="{{ route('verifikasi.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">
            <input type="hidden" name="status" value="{{ $statusTab }}">

            <!-- Filter Fokus OPD -->
            <div>
                <label class="block text-[11px] font-bold text-slate-500 mb-1">Fokus Bidang OPD</label>
                <select name="opd" onchange="this.form.submit()" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="SEMUA" {{ $filterOpd === 'SEMUA' ? 'selected' : '' }}>🏛️ Seluruh Bidang OPD</option>
                    <option value="PTSP" {{ $filterOpd === 'PTSP' ? 'selected' : '' }}>📄 DPMPTSP (Legalitas & NIB)</option>
                    <option value="DINKES_PERINDAG" {{ $filterOpd === 'DINKES_PERINDAG' ? 'selected' : '' }}>🍲 Dinkes/Perindag (Pangan, P-IRT, Halal)</option>
                    <option value="KOPERASI" {{ $filterOpd === 'KOPERASI' ? 'selected' : '' }}>💼 Dinas Koperasi (Modal & Skala Usaha)</option>
                </select>
            </div>

            <!-- Filter Kecamatan -->
            <div>
                <label class="block text-[11px] font-bold text-slate-500 mb-1">Wilayah Kecamatan</label>
                <select name="kecamatan" onchange="this.form.submit()" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="SEMUA">Semua Kecamatan (9 Kecamatan)</option>
                    @foreach($daftarKecamatan as $kec)
                        <option value="{{ $kec }}" {{ $filterKecamatan === $kec ? 'selected' : '' }}>{{ $kec }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Filter Sektor -->
            <div>
                <label class="block text-[11px] font-bold text-slate-500 mb-1">Sektor Usaha</label>
                <select name="sektor" onchange="this.form.submit()" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="SEMUA">Semua Sektor</option>
                    @foreach($daftarSektor as $sek)
                        <option value="{{ $sek }}" {{ $filterSektor === $sek ? 'selected' : '' }}>{{ $sek }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Kata Kunci Pencarian -->
            <div class="lg:col-span-2">
                <label class="block text-[11px] font-bold text-slate-500 mb-1">Cari Usaha / NIK / NIB</label>
                <div class="flex gap-2">
                    <input type="text" name="q" value="{{ $search }}" placeholder="Ketik nama usaha, pemilik, NIK, atau NIB..." 
                           class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <button type="submit" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white rounded-xl text-xs font-bold transition">
                        Cari
                    </button>
                    @if($search || $filterKecamatan || $filterSektor || $filterOpd !== 'SEMUA')
                        <a href="{{ route('verifikasi.index', ['status' => $statusTab]) }}" class="px-3 py-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-xl text-xs font-semibold flex items-center justify-center transition">
                            Reset
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <!-- TABEL ANTREAN VERIFIKASI -->
    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-4 border-b border-slate-100 flex items-center justify-between">
            <div class="text-xs font-bold text-slate-700">
                Menampilkan {{ $records->firstItem() ?? 0 }} - {{ $records->lastItem() ?? 0 }} dari total {{ number_format($records->total(), 0, ',', '.') }} antrean
            </div>
            <div class="text-[11px] text-slate-400">
                Prioritas: Data tervalidasi bersih &amp; dokumen lengkap ditampilkan di atas
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 font-bold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-12 text-center">No</th>
                        <th class="py-3 px-4">Identitas Usaha &amp; Pelaku</th>
                        <th class="py-3 px-4">Legalitas &amp; Sertifikasi</th>
                        <th class="py-3 px-4">Kondisi Finansial &amp; Mutu</th>
                        <th class="py-3 px-4">Status &amp; Verifikator</th>
                        <th class="py-3 px-4 text-center w-36">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-800">
                    @forelse($records as $index => $item)
                        @php
                            $isClean = $item->is_clean;
                            $hasIssues = !empty($item->issue_flags);
                            $isCreator = $item->created_by === auth()->id() && !auth()->user()?->isAdmin();
                        @endphp
                        <tr class="hover:bg-slate-50/80 transition">
                            <!-- Nomor Urut -->
                            <td class="py-3.5 px-4 text-center font-mono text-slate-400 align-top">
                                {{ $records->firstItem() + $index }}
                            </td>

                            <!-- Identitas Usaha & Pemilik -->
                            <td class="py-3.5 px-4 align-top space-y-1">
                                <div class="font-extrabold text-slate-900 text-sm flex items-center gap-1.5">
                                    <span>🏪</span>
                                    <span>{{ $item->nama_usaha }}</span>
                                </div>
                                <div class="text-slate-600 font-medium">
                                    Pemilik: <strong class="text-slate-800">{{ $item->owner?->nama_lengkap ?? '-' }}</strong>
                                </div>
                                <div class="text-[11px] font-mono text-slate-500">
                                    NIK: {{ $item->owner?->nik ? substr($item->owner->nik, 0, 6) . '******' . substr($item->owner->nik, -4) : '-' }}
                                </div>
                                <div class="text-[11px] text-slate-500">
                                    📍 {{ $item->alamat_usaha ?: 'Kec. ' . $item->kecamatan }} ({{ $item->kecamatan }})
                                </div>
                                <div class="inline-block px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-700 mt-1">
                                    {{ $item->sektor ?: 'Sektor Umum' }}
                                </div>
                            </td>

                            <!-- Legalitas & Sertifikasi -->
                            <td class="py-3.5 px-4 align-top space-y-1.5">
                                <div>
                                    @if($item->nib)
                                        <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded font-mono text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                            <span>✓ NIB:</span>
                                            <span>{{ $item->nib }}</span>
                                        </div>
                                    @else
                                        <span class="inline-block px-2 py-0.5 rounded text-[10px] font-semibold bg-slate-100 text-slate-500">
                                            Belum Ber-NIB
                                        </span>
                                    @endif
                                </div>

                                <!-- Sertifikasi Khusus Pangan / Edar -->
                                <div class="space-y-0.5 text-[10px]">
                                    @if($item->halal)
                                        <div class="text-emerald-700 font-semibold">🕌 Halal: {{ $item->halal }}</div>
                                    @endif
                                    @if($item->pirt)
                                        <div class="text-blue-700 font-semibold">🥣 P-IRT: {{ $item->pirt }}</div>
                                    @endif
                                    @if($item->bpom)
                                        <div class="text-purple-700 font-semibold">💊 BPOM: {{ $item->bpom }}</div>
                                    @endif
                                    @if(!$item->halal && !$item->pirt && !$item->bpom)
                                        <div class="text-slate-400 italic">Belum ada izin edar khusus</div>
                                    @endif
                                </div>
                            </td>

                            <!-- Kondisi Finansial & Mutu -->
                            <td class="py-3.5 px-4 align-top space-y-1.5">
                                <div class="text-[11px]">
                                    <div class="text-slate-500">Omzet Tahunan:</div>
                                    <div class="font-bold text-slate-800">Rp {{ number_format($item->omset_tahunan, 0, ',', '.') }}</div>
                                </div>
                                <div class="text-[11px]">
                                    <div class="text-slate-500">Modal &amp; Tenaga Kerja:</div>
                                    <div class="font-semibold text-slate-700">Rp {{ number_format($item->modal_usaha, 0, ',', '.') }} • {{ $item->jumlah_karyawan ?: 1 }} orang</div>
                                </div>

                                <!-- Badge Status Mutu Data -->
                                <div>
                                    @if($isClean)
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                            <span>✓</span>
                                            <span>Teruji Bersih</span>
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-800 border border-amber-200" title="{{ json_encode($item->issue_flags) }}">
                                            <span>⚠️</span>
                                            <span>Ada Catatan Isu</span>
                                        </span>
                                    @endif
                                </div>
                            </td>

                            <!-- Status Saat Ini & Verifikator -->
                            <td class="py-3.5 px-4 align-top space-y-1">
                                <div>
                                    @if($item->status === 'RESMI')
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-emerald-100 text-emerald-800 border border-emerald-300">
                                            ✅ RESMI
                                        </span>
                                    @elseif($item->status === 'PERBAIKAN')
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-blue-100 text-blue-800 border border-blue-300">
                                            🛠️ PERLU PERBAIKAN
                                        </span>
                                    @elseif($item->status === 'DITOLAK')
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-rose-100 text-rose-800 border border-rose-300">
                                            ⛔ DITOLAK
                                        </span>
                                    @else
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-amber-100 text-amber-800 border border-amber-300">
                                            ⏳ MENUNGGU VERIFIKASI
                                        </span>
                                    @endif
                                </div>

                                @if($item->catatan_verifikasi)
                                    <div class="text-[10px] text-slate-600 bg-slate-50 p-1.5 rounded border border-slate-200 leading-snug">
                                        {{ $item->catatan_verifikasi }}
                                    </div>
                                @endif

                                @if($item->verifier)
                                    <div class="text-[10px] text-slate-400">
                                        Oleh: {{ $item->verifier->name }}
                                    </div>
                                @endif
                            </td>

                            <!-- Tombol Tindakan Keputusan -->
                            <td class="py-3.5 px-4 align-middle text-center space-y-1.5">
                                @if($isCreator)
                                    <div class="p-2 bg-amber-50 text-amber-800 rounded-lg text-[10px] border border-amber-200 leading-tight">
                                        🔒 Anda adalah pencatat data ini. Pengesahan wajib oleh petugas lain.
                                    </div>
                                @else
                                    <button type="button" 
                                            onclick="openModalVerifikasi({{ $item->id }}, '{{ addslashes($item->nama_usaha) }}', '{{ addslashes($item->owner?->nama_lengkap ?? '-') }}', '{{ $item->status }}')"
                                            class="w-full py-1.5 px-3 bg-slate-900 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs shadow-sm transition flex items-center justify-center gap-1.5">
                                        <span>⚖️</span>
                                        <span>Putuskan</span>
                                    </button>
                                @endif

                                <a href="{{ route('umkm.show', $item->id) }}" target="_blank"
                                   class="inline-block text-[11px] text-slate-500 hover:text-slate-800 underline font-medium">
                                    Lihat Detail &rarr;
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-slate-400">
                                <div class="text-3xl mb-2">🎉</div>
                                <div class="text-sm font-bold text-slate-700">Tidak ada antrean verifikasi untuk kriteria ini</div>
                                <p class="text-xs text-slate-400 mt-1">Semua data pada filter ini telah diproses atau tidak ditemukan kecocokan.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($records->hasPages())
            <div class="p-4 border-t border-slate-100">
                {{ $records->links() }}
            </div>
        @endif
    </div>
</div>

<!-- MODAL EVALUASI & PUTUSAN VERIFIKASI RESMI -->
<div id="modalVerifikasi" class="fixed inset-0 bg-black/60 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl border border-slate-200 space-y-5 animate-in fade-in zoom-in-95 duration-200">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <div class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold text-base">
                    ⚖️
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-sm">Formulir Keputusan Verifikasi Multi-OPD</h3>
                    <p class="text-[11px] text-slate-500">Pemerintah Kabupaten Sinjai — Satu Data UMKM</p>
                </div>
            </div>
            <button type="button" onclick="closeModalVerifikasi()" class="text-slate-400 hover:text-slate-600 text-xl font-bold">✕</button>
        </div>

        <form id="formPutusan" action="" method="POST" class="space-y-4">
            @csrf
            
            <!-- Ringkasan Subjek Usaha -->
            <div class="bg-slate-50 p-3 rounded-xl border border-slate-200 text-xs space-y-1">
                <div>Badan Usaha: <strong id="modalNamaUsaha" class="text-slate-900"></strong></div>
                <div>Pemilik: <strong id="modalNamaPemilik" class="text-slate-700"></strong></div>
            </div>

            <!-- Pilihan Keputusan -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-2">Pilih Keputusan Resmi:</label>
                <div class="grid grid-cols-3 gap-2 text-xs">
                    <label class="p-3 border rounded-xl cursor-pointer hover:bg-emerald-50 text-center font-bold flex flex-col items-center gap-1 border-emerald-200 text-emerald-800">
                        <input type="radio" name="decision" value="RESMI" checked class="text-emerald-600 focus:ring-emerald-500">
                        <span>✅ Sahkan Resmi</span>
                    </label>
                    <label class="p-3 border rounded-xl cursor-pointer hover:bg-blue-50 text-center font-bold flex flex-col items-center gap-1 border-blue-200 text-blue-800">
                        <input type="radio" name="decision" value="PERBAIKAN" class="text-blue-600 focus:ring-blue-500">
                        <span>🛠️ Minta Perbaikan</span>
                    </label>
                    <label class="p-3 border rounded-xl cursor-pointer hover:bg-rose-50 text-center font-bold flex flex-col items-center gap-1 border-rose-200 text-rose-800">
                        <input type="radio" name="decision" value="DITOLAK" class="text-rose-600 focus:ring-rose-500">
                        <span>⛔ Tolak Berkas</span>
                    </label>
                </div>
            </div>

            <!-- OPD Pemeriksa -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Unsur OPD Verifikator:</label>
                <select name="opd_pemeriksa" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="Dinas Koperasi, UKM dan Tenaga Kerja">Dinas Koperasi, UKM dan Tenaga Kerja Kab. Sinjai</option>
                    <option value="Dinas Penanaman Modal &amp; Pelayanan Terpadu Satu Pintu (DPMPTSP)">Dinas PMPTSP Kab. Sinjai (Bidang Perizinan NIB)</option>
                    <option value="Dinas Kesehatan (Pengawasan P-IRT &amp; Sanitasi)">Dinas Kesehatan Kab. Sinjai (Izin Edar P-IRT)</option>
                    <option value="Dinas Perindustrian dan Perdagangan">Dinas Perindustrian &amp; Perdagangan Kab. Sinjai</option>
                    <option value="Tim Verifikasi Lapangan Terpadu">Tim Verifikasi Lapangan Terpadu Sinjai</option>
                </select>
            </div>

            <!-- Catatan Putusan -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Catatan Verifikasi / Alasan Keputusan:</label>
                <textarea name="catatan" rows="3" placeholder="Contoh: Berkas fisik dan lokasi usaha di Sinjai Utara telah terkonfirmasi sah. Dokumen NIB OSS sesuai." 
                          class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 p-2.5"></textarea>
                <p class="text-[10px] text-slate-400 mt-1">Catatan ini akan tersimpan permanen pada Audit Trail dan terbaca oleh operator pencatat.</p>
            </div>

            <div class="flex gap-2.5 pt-2">
                <button type="button" onclick="closeModalVerifikasi()" class="flex-1 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl text-xs transition">
                    Batal
                </button>
                <button type="submit" class="flex-1 py-2.5 bg-slate-900 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs transition shadow-lg">
                    Simpan Keputusan Resmi
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL PENGESAHAN MASAL DATA BERSIH -->
<div id="modalSahkanMasal" class="fixed inset-0 bg-black/60 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl border border-slate-200 space-y-4">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 class="font-bold text-slate-900 text-sm flex items-center gap-2">
                <span>⚡</span>
                <span>Pengesahan Masal Data Teruji Bersih</span>
            </h3>
            <button type="button" onclick="document.getElementById('modalSahkanMasal').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 text-xl font-bold">✕</button>
        </div>

        <p class="text-xs text-slate-600 leading-relaxed">
            Sistem akan secara otomatis mengesahkan berkas UMKM yang berstatus <strong>DRAFT</strong> dan telah lolos uji mutu data (tidak memiliki anomali modal, nama, atau NIK).
        </p>

        <form action="{{ route('verifikasi.putuskanMasal') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Batasi per Kecamatan (Opsional):</label>
                <select name="kecamatan" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="SEMUA">Seluruh Kecamatan di Sinjai</option>
                    @foreach($daftarKecamatan as $kec)
                        <option value="{{ $kec }}">{{ $kec }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Jumlah Maksimum per Batch:</label>
                <select name="limit" class="w-full text-xs rounded-xl border-slate-200 focus:ring-emerald-500 focus:border-emerald-500 py-2">
                    <option value="50">50 unit usaha</option>
                    <option value="100" selected>100 unit usaha</option>
                    <option value="250">250 unit usaha</option>
                    <option value="500">500 unit usaha</option>
                </select>
            </div>

            <div class="flex gap-2.5 pt-2">
                <button type="button" onclick="document.getElementById('modalSahkanMasal').classList.add('hidden')" class="flex-1 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl text-xs transition">
                    Batal
                </button>
                <button type="submit" onclick="return confirm('Mulai proses pengesahan masal data teruji bersih?')" class="flex-1 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs transition shadow-lg">
                    Mulai Sahkan Masal
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModalVerifikasi(id, namaUsaha, namaPemilik, currentStatus) {
        document.getElementById('modalNamaUsaha').textContent = namaUsaha;
        document.getElementById('modalNamaPemilik').textContent = namaPemilik;
        document.getElementById('formPutusan').action = '/verifikasi/' + id + '/putuskan';
        document.getElementById('modalVerifikasi').classList.remove('hidden');
    }

    function closeModalVerifikasi() {
        document.getElementById('modalVerifikasi').classList.add('hidden');
    }
</script>
@endsection
