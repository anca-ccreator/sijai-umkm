<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Kerja Verifikasi Lapangan - {{ $kecamatan ?: 'Kabupaten Sinjai' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @page {
            size: A4 landscape;
            margin: 1.2cm 1cm 1cm 1cm;
        }
        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background: white !important;
                color: black !important;
                font-size: 11px !important;
            }
            table {
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
            thead {
                display: table-header-group;
            }
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900 font-sans p-4 sm:p-6">

    <!-- FLOATING ACTION BAR (Hanya Tampil di Layar, Hilang Saat Dicetak) -->
    <div class="no-print max-w-6xl mx-auto mb-6 p-4 bg-white rounded-xl shadow-md border border-slate-200 flex items-center justify-between flex-wrap gap-3">
        <div class="flex items-center space-x-2">
            <span class="text-2xl">📋</span>
            <div>
                <h2 class="text-sm font-extrabold text-slate-800">Pratinjau Lembar Kerja Lapangan (A4 Landscape)</h2>
                <p class="text-xs text-slate-500">Gunakan format ini untuk pencetakan fisik atau penyimpanan PDF resmi verifikasi.</p>
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <a href="{{ route('rekonsiliasi.index', ['kecamatan' => $kecamatan, 'status' => $status]) }}" 
               class="px-3.5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                &larr; Kembali ke Meja Rekonsiliasi
            </a>
            <button onclick="window.print()" 
                    class="px-5 py-2 bg-slate-900 hover:bg-black text-white font-bold rounded-lg text-xs shadow transition flex items-center space-x-1.5">
                <span>🖨️</span>
                <span>Cetak / Simpan PDF</span>
            </button>
        </div>
    </div>

    <!-- HALAMAN CETAK RESMI (LEMBAR KERJA PEMERINTAH DAERAH) -->
    <div class="max-w-[297mm] mx-auto bg-white p-6 sm:p-8 rounded-xl sm:shadow border border-slate-300 print:border-none print:shadow-none print:p-0">

        <!-- KOP SURAT PEMERINTAH DAERAH KABUPATEN SINJAI -->
        <div class="border-b-2 border-double border-slate-900 pb-3 mb-4 text-center">
            <h1 class="text-base font-extrabold tracking-wider uppercase text-slate-900">
                PEMERINTAH KABUPATEN SINJAI
            </h1>
            <h2 class="text-sm font-bold tracking-wide uppercase text-slate-800 mt-0.5">
                Dinas Koperasi, UKM dan Tenaga Kerja &bull; Dinas Penanaman Modal dan PTSP
            </h2>
            <p class="text-[11px] text-slate-600 mt-0.5">
                Sekretariat Bersama SIJAI UMKM — Jl. Persatuan Raya No. 1, Kabupaten Sinjai, Sulawesi Selatan 92612
            </p>
            <div class="mt-2 py-1 bg-slate-100 print:bg-slate-50 rounded border border-slate-300 inline-block px-4">
                <span class="text-xs font-extrabold tracking-widest uppercase text-slate-900">
                    Lembar Kerja Verifikasi Faktual Lapangan Rekonsiliasi Irisan Data NIB vs UMKM
                </span>
            </div>
        </div>

        <!-- METADATA LEMBAR KERJA -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs border border-slate-300 p-2.5 rounded mb-4 bg-slate-50/50 print:bg-transparent">
            <div>
                <span class="text-slate-500 font-medium">Wilayah Kecamatan:</span>
                <div class="font-bold text-slate-900">{{ $kecamatan ?: 'Seluruh Kabupaten Sinjai' }}</div>
            </div>
            <div>
                <span class="text-slate-500 font-medium">Kategori Sasaran:</span>
                <div class="font-bold text-slate-900">
                    @if($status === 'CONFLICTING_INFO')
                        🔴 Konflik Identitas Fisik
                    @elseif($status === 'POTENTIAL_MATCH')
                        🟢 Kandidat Klop Siap Taut
                    @elseif($status === 'NO_MATCH')
                        ⚪ NIB Mandiri (OSS Baru)
                    @else
                        Semua Status
                    @endif
                </div>
            </div>
            <div>
                <span class="text-slate-500 font-medium">Total Berkas Sasaran:</span>
                <div class="font-bold text-slate-900">{{ $total }} Unit Usaha / NIB</div>
            </div>
            <div>
                <span class="text-slate-500 font-medium">Tanggal Dokumen:</span>
                <div class="font-bold text-slate-900">{{ $tanggalCetak }}</div>
            </div>
        </div>

        <!-- TABEL LEMBAR KERJA VERIFIKASI FAGTUAL -->
        <table class="w-full text-[10px] border-collapse border border-slate-400">
            <thead>
                <tr class="bg-slate-200 text-slate-900 uppercase font-bold text-center border-b border-slate-400">
                    <th class="border border-slate-400 py-1.5 px-1 w-6">No</th>
                    <th class="border border-slate-400 py-1.5 px-2 w-1/4">1. Profil Izin DPMPTSP OSS</th>
                    <th class="border border-slate-400 py-1.5 px-2 w-1/4">2. Profil Usaha Dinas Koperasi</th>
                    <th class="border border-slate-400 py-1.5 px-2 w-1/5">3. Catatan Anomali Sistem</th>
                    <th class="border border-slate-400 py-1.5 px-2">4. Hasil Verifikasi Lapangan & Tanda Tangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($records as $idx => $row)
                @php
                    $koperasiNama = $row->matchedUmkm?->owner?->nama_lengkap ?? '-';
                    $koperasiUsaha = $row->matchedUmkm?->nama_usaha ?? '-';
                    $isConflict = $row->reconciliation_status === 'CONFLICTING_INFO';
                @endphp
                <tr class="align-top border-b border-slate-300 {{ $isConflict ? 'bg-rose-50/20' : '' }}">
                    <!-- NO -->
                    <td class="border border-slate-300 p-1.5 text-center font-bold">
                        {{ $idx + 1 }}
                    </td>

                    <!-- SISI 1: DPMPTSP -->
                    <td class="border border-slate-300 p-1.5 space-y-0.5 leading-snug">
                        <div class="font-bold text-slate-900 text-[11px]">{{ $row->nama_lengkap }} ({{ $row->jenis_kelamin ?? '-' }})</div>
                        <div>NIK: <span class="font-mono font-bold">{{ $row->masked_nik }}</span></div>
                        <div>NIB: <span class="font-mono font-bold text-blue-900">{{ $row->nib }}</span></div>
                        <div class="text-slate-600 text-[9px]">📍 {{ $row->alamat ?: 'Kec. ' . $row->kecamatan }}</div>
                    </td>

                    <!-- SISI 2: DINAS KOPERASI -->
                    <td class="border border-slate-300 p-1.5 space-y-0.5 leading-snug">
                        @if($row->matchedUmkm)
                            <div class="font-bold text-emerald-950 text-[11px]">🏪 {{ $koperasiUsaha }}</div>
                            <div>Pemilik: <span class="font-bold">{{ $koperasiNama }}</span></div>
                            <div>Sektor: {{ $row->matchedUmkm->sektor ?: '-' }}</div>
                            <div class="text-slate-600 text-[9px]">📍 {{ $row->matchedUmkm->alamat_usaha ?: 'Kec. ' . $row->matchedUmkm->kecamatan }}</div>
                        @else
                            <div class="italic text-slate-400 text-center py-2">
                                (Belum tercatat dalam data UMKM Koperasi)
                            </div>
                        @endif
                    </td>

                    <!-- SISI 3: ANOMALI SISTEM -->
                    <td class="border border-slate-300 p-1.5 space-y-1">
                        <div class="font-bold {{ $isConflict ? 'text-red-700' : 'text-emerald-800' }}">
                            {{ $row->reconciliation_status === 'CONFLICTING_INFO' ? '🔴 Konflik Nama' : ($row->reconciliation_status === 'POTENTIAL_MATCH' ? '🟢 Klop' : '⚪ NIB Mandiri') }}
                            @if($row->similarity_score > 0)
                                (Kecocokan: {{ $row->similarity_score }}%)
                            @endif
                        </div>
                        <div class="text-[9px] text-slate-600 leading-tight">
                            {{ $row->match_notes }}
                        </div>
                    </td>

                    <!-- SISI 4: HASIL VERIFIKASI LAPANGAN -->
                    <td class="border border-slate-300 p-1.5 text-[9px] space-y-1">
                        <div class="font-semibold text-slate-800">Ceklis Kesimpulan Faktual:</div>
                        <div class="grid grid-cols-2 gap-1 text-[8.5px]">
                            <label class="flex items-center space-x-1">
                                <span class="inline-block w-3 h-3 border border-slate-700 rounded-sm"></span>
                                <span>1. Pemilik Sama (Koreksi Nama)</span>
                            </label>
                            <label class="flex items-center space-x-1">
                                <span class="inline-block w-3 h-3 border border-slate-700 rounded-sm"></span>
                                <span>2. Dua Orang Berbeda (Pisahkan)</span>
                            </label>
                            <label class="flex items-center space-x-1">
                                <span class="inline-block w-3 h-3 border border-slate-700 rounded-sm"></span>
                                <span>3. NIB Tidak Valid / Batal</span>
                            </label>
                            <label class="flex items-center space-x-1">
                                <span class="inline-block w-3 h-3 border border-slate-700 rounded-sm"></span>
                                <span>4. Usaha Sudah Tutup</span>
                            </label>
                        </div>
                        <div class="pt-1 flex items-center justify-between text-[8px] text-slate-500 border-t border-slate-200 mt-1">
                            <span>Catatan: ....................................................</span>
                            <span>Paraf Petugas: [ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ]</span>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-6 text-center text-slate-500 border border-slate-400">
                        Tidak ada berkas yang perlu diverifikasi pada kriteria ini.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- BLOK PENGESAHAN LAPANGAN (TANDA TANGAN RESMI TIGA PIHAK) -->
        <div class="mt-6 pt-4 border-t border-slate-300 grid grid-cols-3 gap-4 text-center text-xs break-inside-avoid">
            <div>
                <p class="text-slate-600 font-medium">Petugas Surveyor / Verifikator<br><strong>Dinas Koperasi, UKM & Naker</strong></p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 underline">( ................................................... )</p>
                <p class="text-[10px] text-slate-500 font-mono">NIP. ..........................................</p>
            </div>

            <div>
                <p class="text-slate-600 font-medium">Petugas Verifikator Perizinan<br><strong>Dinas Penanaman Modal & PTSP</strong></p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 underline">( ................................................... )</p>
                <p class="text-[10px] text-slate-500 font-mono">NIP. ..........................................</p>
            </div>

            <div>
                <p class="text-slate-600 font-medium">Mengetahui,<br><strong>Kepala Bidang Pemberdayaan UKM</strong></p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 underline">( ................................................... )</p>
                <p class="text-[10px] text-slate-500 font-mono">NIP. ..........................................</p>
            </div>
        </div>

    </div>

</body>
</html>
