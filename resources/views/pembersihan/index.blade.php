@extends('layouts.app')

@section('title', 'Pembersihan & Diagnosis Data Lama')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pb-4 border-b border-slate-200 gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Diagnosis & Pembersihan Data Lama</h1>
            <p class="text-sm text-slate-500 mt-0.5 flex flex-wrap items-center gap-1.5">
                <span>Sortir otomatis data historis dari berkas Excel untuk memisahkan data bersih dari data yang bermasalah.</span>
                @if($filterKecamatan)
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
                        📍 Filter Wilayah: Kec. {{ $filterKecamatan }}
                    </span>
                @else
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-slate-100 text-slate-600">
                        📍 Seluruh Kabupaten Sinjai
                    </span>
                @endif
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-2">
            <!-- Form Filter Lokasi Dropdown (Otomatis Memfilter Tampilan Halaman Saat Dipilih atau Diklik) -->
            <form action="{{ route('pembersihan.index') }}" method="GET" class="flex items-center space-x-1.5" id="formFilterKecamatan">
                @if($filterIssue)
                    <input type="hidden" name="issue" value="{{ $filterIssue }}">
                @endif
                <div class="flex items-center bg-white border border-slate-300 rounded-lg shadow-sm focus-within:ring-2 focus-within:ring-emerald-500 focus-within:border-emerald-500 overflow-hidden">
                    <span class="pl-2.5 text-slate-400 text-xs">📍</span>
                    <select name="kecamatan" onchange="this.form.submit()" 
                            class="px-2 py-2 bg-transparent text-xs font-semibold text-slate-700 border-0 focus:outline-none cursor-pointer">
                        <option value="">Semua Kecamatan (Sinjai)</option>
                        @foreach($daftarKecamatan as $k)
                            <option value="{{ $k }}" {{ $filterKecamatan === $k ? 'selected' : '' }}>{{ $k }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="px-3 py-2 bg-slate-700 hover:bg-slate-800 text-white rounded-lg text-xs font-bold transition shadow-sm">
                    Filter
                </button>
                @if($filterKecamatan)
                    <a href="{{ route('pembersihan.index', array_filter(['issue' => $filterIssue])) }}" 
                       class="px-2 py-2 bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-700 rounded-lg text-xs font-bold transition border border-slate-200"
                       title="Hapus filter lokasi">
                        ✕ Reset
                    </a>
                @endif
            </form>

            <!-- Tombol Unduh Lembar Kerja Lapangan (Menyesuaikan dengan Kecamatan Terpilih) -->
            <a href="{{ route('pembersihan.unduhMasalahKecamatan', array_filter(['kecamatan' => $filterKecamatan])) }}" 
               class="px-3.5 py-2 bg-slate-800 hover:bg-slate-900 text-white rounded-lg text-xs font-semibold shadow transition whitespace-nowrap flex items-center space-x-1.5"
               title="{{ $filterKecamatan ? 'Unduh lembar verifikasi lapangan khusus Kecamatan ' . $filterKecamatan : 'Unduh lembar verifikasi lapangan seluruh Kabupaten Sinjai' }}">
                <span>📥</span>
                <span>Unduh Lembar Kerja Lapangan {{ $filterKecamatan ? '(' . $filterKecamatan . ')' : '' }}</span>
            </a>
        </div>
    </div>

    <!-- 3 KARTU DIAGNOSIS UTAMA -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <!-- KARTU 1: 🟢 DATA BERSIH & LENGKAP -->
        <div class="bg-gradient-to-br from-emerald-50 to-teal-50 border-2 border-emerald-500 rounded-2xl p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between">
                    <span class="px-2.5 py-1 bg-emerald-200 text-emerald-900 font-bold text-xs rounded-full">
                        🟢 SIAP DISAHKAN MASAL
                    </span>
                    <span class="text-2xl">✨</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-extrabold text-emerald-950">{{ $dataBersihCount }}</div>
                    <div class="text-xs font-semibold text-emerald-800 mt-1">Unit Usaha Bersih & Lengkap</div>
                    <p class="text-[11px] text-emerald-700 mt-1 leading-relaxed">
                        Data ini memiliki NIK valid, nama usaha jelas, lokasi kecamatan tercatat, dan tidak ada duplikasi.
                    </p>
                </div>
            </div>

            <div class="mt-5 pt-4 border-t border-emerald-200">
                <form action="{{ route('pembersihan.sahkanMasal') }}" method="POST">
                    @csrf
                    @if($filterKecamatan)
                        <input type="hidden" name="kecamatan" value="{{ $filterKecamatan }}">
                    @endif
                    <button type="submit" 
                            onclick="return confirm('Apakah Anda yakin ingin mengesahkan SEKALIGUS seluruh {{ $dataBersihCount }} data UMKM bersih{{ $filterKecamatan ? ' di Kecamatan ' . $filterKecamatan : '' }} ini?')"
                            {{ $dataBersihCount == 0 ? 'disabled' : '' }}
                            class="w-full py-2.5 px-4 bg-emerald-700 hover:bg-emerald-800 disabled:bg-slate-300 text-white font-bold rounded-xl text-xs shadow-md transition transform active:scale-95 flex items-center justify-center space-x-2">
                        <span>✓</span>
                        <span>Sahkan Sekaligus {{ $filterKecamatan ? '(' . $filterKecamatan . ')' : '(Masal)' }}</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- KARTU 2: 🔴 MASALAH KRITIS (WAJIB DITINJAU) -->
        <div class="bg-gradient-to-br from-red-50 to-rose-50 border-2 border-red-400 rounded-2xl p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between">
                    <span class="px-2.5 py-1 bg-red-200 text-red-900 font-bold text-xs rounded-full">
                        🔴 MASALAH KRITIS
                    </span>
                    <span class="text-2xl">⚠️</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-extrabold text-red-950">{{ $masalahKritisCount }}</div>
                    <div class="text-xs font-semibold text-red-800 mt-1">Perlu Peninjauan Petugas</div>
                    <p class="text-[11px] text-red-700 mt-1 leading-relaxed">
                        Data ini memiliki catatan yang membuat pengesahan otomatis ditahan demi integritas.
                    </p>
                </div>

                <!-- Ringkasan Jenis Isu -->
                <div class="mt-3 grid grid-cols-2 gap-2 text-[11px]">
                    <div class="p-1.5 bg-white/70 rounded border border-red-200">
                        <span class="text-slate-500">Duplikat:</span> <strong>{{ $duplikatCount }}</strong>
                    </div>
                    <div class="p-1.5 bg-white/70 rounded border border-red-200">
                        <span class="text-slate-500">NIK Salah:</span> <strong>{{ $nikSalahCount }}</strong>
                    </div>
                    <div class="p-1.5 bg-white/70 rounded border border-red-200">
                        <span class="text-slate-500">Alamat Kosong:</span> <strong>{{ $alamatKosongCount }}</strong>
                    </div>
                    <div class="p-1.5 bg-white/70 rounded border border-red-200">
                        <span class="text-slate-500">Nama Kosong:</span> <strong>{{ $namaKosongCount }}</strong>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-4 border-t border-red-200">
                <a href="#tabel-masalah" 
                   class="w-full py-2.5 px-4 bg-red-700 hover:bg-red-800 text-white font-bold rounded-xl text-xs shadow-md transition flex items-center justify-center space-x-1">
                    <span>Lihat Daftar Masalah &darr;</span>
                </a>
            </div>
        </div>

        <!-- KARTU 3: 🟡 MASALAH RINGAN (BISA DILENGKAPI MENYUSUL) -->
        <div class="bg-gradient-to-br from-amber-50 to-orange-50 border-2 border-amber-300 rounded-2xl p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between">
                    <span class="px-2.5 py-1 bg-amber-200 text-amber-900 font-bold text-xs rounded-full">
                        🟡 MASALAH RINGAN
                    </span>
                    <span class="text-2xl">📋</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-extrabold text-amber-950">{{ $masalahRinganCount }}</div>
                    <div class="text-xs font-semibold text-amber-800 mt-1">Legalitas Belum Lengkap</div>
                    <p class="text-[11px] text-amber-700 mt-1 leading-relaxed">
                        Data pokok lengkap, tetapi belum memiliki nomor kontak aktif atau sertifikat Halal/PIRT. Dapat dilengkapi saat pembinaan.
                    </p>
                </div>
            </div>

            <div class="mt-5 pt-4 border-t border-amber-200 text-center">
                <span class="text-xs text-amber-800 font-medium italic">
                    Bukan penghalang legalitas awal usaha.
                </span>
            </div>
        </div>

    </div>

    <!-- TAB FILTER SUB-MASALAH -->
    <div id="tabel-masalah" class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between flex-wrap gap-2 pb-3 border-b border-slate-100">
            <span class="text-xs font-bold text-slate-700">Filter Tampilan Data Berdasarkan Catatan:</span>
            <div class="flex flex-wrap gap-1 text-xs">
                <a href="{{ route('pembersihan.index', array_filter(['kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ empty($filterIssue) ? 'bg-red-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    Semua Masalah Kritis ({{ $masalahKritisCount }})
                </a>
                <a href="{{ route('pembersihan.index', array_filter(['issue' => 'INDIKASI_DUPLIKAT', 'kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ $filterIssue === 'INDIKASI_DUPLIKAT' ? 'bg-red-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    Indikasi Duplikat ({{ $duplikatCount }})
                </a>
                <a href="{{ route('pembersihan.index', array_filter(['issue' => 'NIK_TIDAK_VALID', 'kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ $filterIssue === 'NIK_TIDAK_VALID' ? 'bg-red-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    NIK Tidak Valid ({{ $nikSalahCount }})
                </a>
                <a href="{{ route('pembersihan.index', array_filter(['issue' => 'ALAMAT_OPERASIONAL_KOSONG', 'kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ $filterIssue === 'ALAMAT_OPERASIONAL_KOSONG' ? 'bg-red-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    Alamat Lapak Kosong ({{ $alamatKosongCount }})
                </a>
                <a href="{{ route('pembersihan.index', array_filter(['issue' => 'NAMA_USAHA_KOSONG', 'kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ $filterIssue === 'NAMA_USAHA_KOSONG' ? 'bg-red-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    Nama Usaha Kosong ({{ $namaKosongCount }})
                </a>
                <a href="{{ route('pembersihan.index', array_filter(['issue' => 'BERSIH', 'kecamatan' => $filterKecamatan])) }}" 
                   class="px-2.5 py-1 rounded-lg font-semibold transition {{ $filterIssue === 'BERSIH' ? 'bg-emerald-700 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    🟢 Data Bersih ({{ $dataBersihCount }})
                </a>
            </div>
        </div>

        <!-- Tabel Baris Bermasalah -->
        <div class="overflow-x-auto mt-4">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 uppercase font-semibold">
                        <th class="py-2.5 px-3">Nama Usaha</th>
                        <th class="py-2.5 px-3">Pemilik & NIK</th>
                        <th class="py-2.5 px-3">Alamat Lapak</th>
                        <th class="py-2.5 px-3">Kategori Catatan / Masalah</th>
                        <th class="py-2.5 px-3 text-right">Tindakan Perbaikan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($records as $row)
                    <tr class="hover:bg-slate-50/70 transition">
                        <td class="py-3 px-3">
                            <div class="font-bold text-slate-900">{{ $row->nama_usaha }}</div>
                            <span class="text-[10px] text-slate-500 font-mono">Sumber: {{ $row->source_origin }}</span>
                        </td>
                        <td class="py-3 px-3">
                            <div class="font-semibold text-slate-800">{{ $row->owner?->nama_lengkap ?? '-' }}</div>
                            <div class="text-[11px] text-slate-500 font-mono">NIK: {{ $row->owner?->nik ?: '(Kosong / Tidak Ada)' }}</div>
                        </td>
                        <td class="py-3 px-3">
                            <div class="text-slate-700">{{ $row->alamat_usaha ?: '(Alamat lapak belum diisi)' }}</div>
                            <div class="text-[11px] text-slate-400">Kec. {{ $row->kecamatan }}</div>
                        </td>
                        <td class="py-3 px-3">
                            @if($row->is_clean)
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
                                ✓ LENGKAP & BERSIH
                            </span>
                            @else
                                <div class="flex flex-wrap gap-1">
                                    @foreach($row->issue_flags ?? [] as $flag)
                                    <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-800 border border-red-200">
                                        {{ str_replace('_', ' ', $flag) }}
                                    </span>
                                    @endforeach
                                </div>
                            @endif
                        </td>
                        <td class="py-3 px-3 text-right whitespace-nowrap">
                            <a href="{{ route('umkm.edit', $row->id) }}" 
                               class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded text-xs transition shadow-sm">
                                Perbaiki Data &rarr;
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-slate-400">
                            Tidak ada data dalam kategori ini.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($records->hasPages())
        <div class="p-3 border-t border-slate-200 mt-4">
            {{ $records->links() }}
        </div>
        @endif
    </div>

</div>
@endsection
