@extends('layouts.app')

@section('title', 'Data Registri UMKM')

@section('content')
<div class="space-y-6">

    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Data Registri UMKM Sinjai</h1>
            <p class="text-sm text-slate-500 mt-0.5">Daftar seluruh unit usaha mikro, kecil, dan menengah terdaftar di Kabupaten Sinjai.</p>
        </div>
        <div>
            <a href="{{ route('umkm.create') }}" 
               class="inline-flex items-center px-4 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white rounded-lg text-sm font-semibold shadow transition transform active:scale-95 space-x-2">
                <span>➕</span>
                <span>Tambah UMKM Baru</span>
            </a>
        </div>
    </div>

    <!-- Search & Filter Card -->
    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
        <form action="{{ route('umkm.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            <!-- Search Text -->
            <div class="sm:col-span-2">
                <label for="search" class="block text-xs font-semibold text-slate-600 mb-1">Cari Usaha / Pemilik / NIK / NIB</label>
                <div class="relative">
                    <input type="text" id="search" name="search" value="{{ request('search') }}"
                           placeholder="Ketik nama usaha, nama orang, NIK, atau NIB..."
                           class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <span class="absolute left-3 top-2.5 text-slate-400 text-xs">🔍</span>
                </div>
            </div>

            <!-- Filter Kecamatan -->
            <div>
                <label for="kecamatan" class="block text-xs font-semibold text-slate-600 mb-1">Kecamatan</label>
                <select id="kecamatan" name="kecamatan" onchange="this.form.submit()"
                        class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="">-- Semua Kecamatan --</option>
                    @foreach($daftarKecamatan as $kec)
                        <option value="{{ $kec }}" {{ request('kecamatan') == $kec ? 'selected' : '' }}>{{ $kec }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Filter Status -->
            <div>
                <label for="status" class="block text-xs font-semibold text-slate-600 mb-1">Status Verifikasi</label>
                <select id="status" name="status" onchange="this.form.submit()"
                        class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="">-- Semua Status --</option>
                    <option value="RESMI" {{ request('status') == 'RESMI' ? 'selected' : '' }}>🟢 Resmi Terverifikasi</option>
                    <option value="DRAFT" {{ request('status') == 'DRAFT' ? 'selected' : '' }}>🟡 Draf (Perlu Klarifikasi)</option>
                    <option value="PERBAIKAN" {{ request('status') == 'PERBAIKAN' ? 'selected' : '' }}>🟠 Minta Perbaikan</option>
                    <option value="DITOLAK" {{ request('status') == 'DITOLAK' ? 'selected' : '' }}>🔴 Ditolak</option>
                    <option value="TUTUP" {{ request('status') == 'TUTUP' ? 'selected' : '' }}>⚪ Tutup / Nonaktif</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 uppercase font-semibold">
                        <th class="py-3 px-4">Nama Usaha & Bidang</th>
                        <th class="py-3 px-4">Pemilik & Kontak</th>
                        <th class="py-3 px-4">Lokasi Lapak / Kios</th>
                        <th class="py-3 px-4">Legalitas (NIB / Halal)</th>
                        <th class="py-3 px-4 text-center">Status</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($umkms as $item)
                    <tr class="hover:bg-slate-50/70 transition">
                        <!-- Usaha -->
                        <td class="py-3 px-4">
                            <a href="{{ route('umkm.show', $item->id) }}" class="font-bold text-slate-900 hover:text-emerald-700 text-sm block">
                                {{ $item->nama_usaha }}
                            </a>
                            <div class="flex items-center space-x-1.5 mt-0.5">
                                <span class="inline-block px-1.5 py-0.5 rounded text-[10px] bg-slate-100 text-slate-600 font-medium">
                                    {{ $item->sektor }}
                                </span>
                                @if($item->tahun_berdiri)
                                <span class="inline-block px-1.5 py-0.5 rounded text-[10px] bg-indigo-50 text-indigo-700 font-medium" title="{{ $item->usia_usaha }} tahun ({{ $item->kategori_kematangan }})">
                                    Est. {{ $item->tahun_berdiri }}
                                </span>
                                @endif
                            </div>
                        </td>

                        <!-- Pemilik -->
                        <td class="py-3 px-4">
                            <div class="font-semibold text-slate-800">{{ $item->owner?->nama_lengkap ?? '-' }}</div>
                            <div class="text-[11px] text-slate-500 font-mono">NIK: {{ $item->owner?->nik ?? '(Belum ada NIK)' }}</div>
                            @if($item->owner?->no_hp)
                            <div class="text-[11px] text-slate-500">📞 {{ $item->owner->no_hp }}</div>
                            @endif
                        </td>

                        <!-- Lokasi -->
                        <td class="py-3 px-4">
                            <div class="font-medium text-slate-700">{{ $item->alamat_usaha ?: '(Alamat lapak belum diisi)' }}</div>
                            <div class="text-[11px] text-slate-500">{{ $item->kelurahan_desa ? $item->kelurahan_desa . ', ' : '' }}{{ $item->kecamatan }}</div>
                        </td>

                        <!-- Legalitas -->
                        <td class="py-3 px-4">
                            <div class="flex flex-col space-y-1">
                                @if($item->nib)
                                <span class="text-[10px] bg-emerald-50 text-emerald-800 font-mono font-semibold px-1.5 py-0.5 rounded border border-emerald-200">
                                    NIB: {{ $item->nib }}
                                </span>
                                @elseif($item->izin_usaha)
                                <span class="text-[10px] bg-amber-50 text-amber-800 font-semibold px-1.5 py-0.5 rounded border border-amber-200 truncate max-w-[160px]" title="{{ $item->izin_usaha }} ({{ $item->nama_jenis_izin }})">
                                    📜 {{ \Illuminate\Support\Str::limit($item->izin_usaha, 22) }}
                                </span>
                                @else
                                <span class="text-[10px] text-slate-400">Belum Berizin</span>
                                @endif
                                @if($item->legalitas_halal)
                                <span class="text-[10px] bg-teal-50 text-teal-800 font-semibold px-1.5 py-0.5 rounded border border-teal-200">
                                    ✓ Halal: {{ $item->legalitas_halal }}
                                </span>
                                @endif
                            </div>
                        </td>

                        <!-- Status Badge -->
                        <td class="py-3 px-4 text-center">
                            @if($item->status === 'RESMI')
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800">
                                🟢 Resmi
                            </span>
                            @elseif($item->status === 'DRAFT')
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-100 text-amber-800" title="Data lama atau draf baru yang perlu diklarifikasi">
                                🟡 Draf Klarifikasi
                            </span>
                            @elseif($item->status === 'PERBAIKAN')
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-orange-100 text-orange-800">
                                🟠 Perlu Perbaikan
                            </span>
                            @elseif($item->status === 'DITOLAK')
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-red-100 text-red-800">
                                🔴 Ditolak
                            </span>
                            @else
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 text-slate-600">
                                ⚪ Tutup
                            </span>
                            @endif
                        </td>

                        <!-- Aksi -->
                        <td class="py-3 px-4 text-right whitespace-nowrap">
                            <div class="inline-flex items-center space-x-1">
                                <a href="{{ route('umkm.show', $item->id) }}" 
                                   class="px-2.5 py-1 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold rounded text-xs transition">
                                    Detail
                                </a>
                                <a href="{{ route('umkm.edit', $item->id) }}" 
                                   class="px-2.5 py-1 bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-semibold rounded text-xs transition border border-emerald-200">
                                    Edit
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400">
                            <div class="text-3xl mb-2">🔍</div>
                            <div class="text-sm font-semibold text-slate-600">Tidak ada data UMKM yang cocok dengan filter pencarian.</div>
                            <div class="text-xs text-slate-400 mt-1">Coba atur ulang kata kunci atau filter kecamatan di atas.</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($umkms->hasPages())
        <div class="p-4 border-t border-slate-200 bg-slate-50">
            {{ $umkms->links() }}
        </div>
        @endif
    </div>

</div>
@endsection
