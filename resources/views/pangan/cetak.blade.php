<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembar Kurasi Industri Pangan - Kabupaten Sinjai</title>
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

    <!-- FLOATING ACTION BAR -->
    <div class="no-print max-w-6xl mx-auto mb-6 p-4 bg-white rounded-xl shadow-md border border-slate-200 flex items-center justify-between flex-wrap gap-3">
        <div class="flex items-center space-x-2">
            <span class="text-2xl">🍲</span>
            <div>
                <h2 class="text-sm font-extrabold text-slate-800">Pratinjau Lembar Kurasi Pangan Sinjai (A4 Landscape)</h2>
                <p class="text-xs text-slate-500">Katalog komoditas terkurasi untuk pameran, sertifikasi, dan fasilitasi ekspor.</p>
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <a href="{{ route('pangan.index') }}" 
               class="px-3.5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-lg text-xs transition">
                &larr; Kembali ke Meja Pangan
            </a>
            <button onclick="window.print()" 
                    class="px-5 py-2 bg-slate-900 hover:bg-black text-white font-bold rounded-lg text-xs shadow transition flex items-center space-x-1.5">
                <span>🖨️</span>
                <span>Cetak / Simpan PDF</span>
            </button>
        </div>
    </div>

    <!-- HALAMAN CETAK RESMI -->
    <div class="max-w-[297mm] mx-auto bg-white p-6 sm:p-8 rounded-xl sm:shadow border border-slate-300 print:border-none print:shadow-none print:p-0">

        <!-- KOP SURAT PEMKAB SINJAI -->
        <div class="border-b-2 border-double border-slate-900 pb-3 mb-4 text-center">
            <h1 class="text-base font-extrabold tracking-wider uppercase text-slate-900">
                PEMERINTAH KABUPATEN SINJAI
            </h1>
            <h2 class="text-sm font-bold tracking-wide uppercase text-slate-800 mt-0.5">
                Dinas Perindustrian & Perdagangan &bull; Dinas Kesehatan &bull; Dinas Koperasi & UKM
            </h2>
            <p class="text-[11px] text-slate-600 mt-0.5">
                Pusat Kurasi Produk Unggulan & Industri Pengolahan Pangan Kabupaten Sinjai (Mandat KB-09 Model B)
            </p>
        </div>

        <!-- JUDUL & PARAMETER LEMBAR KERJA -->
        <div class="flex items-center justify-between mb-4 text-xs">
            <div>
                <h3 class="font-extrabold text-sm text-slate-900 uppercase">
                    DAFTAR KURASI KOMODITAS PANGAN OLAHAN DAERAH
                </h3>
                <p class="text-slate-600 mt-0.5">
                    Kategori: <strong>{{ $kategori ?: 'Seluruh Kategori Pangan' }}</strong> | 
                    Wilayah: <strong>{{ $kecamatan ?: 'Seluruh 9 Kecamatan' }}</strong>
                </p>
            </div>
            <div class="text-right text-[11px] text-slate-500">
                <div>Tanggal Cetak: <strong>{{ $tanggalCetak }}</strong></div>
                <div>Jumlah Produk: <strong>{{ $total }} Komoditas</strong></div>
                <div>Petugas: <strong>{{ $petugasCetak }}</strong></div>
            </div>
        </div>

        <!-- TABEL DATA PRODUK PANGAN -->
        <table class="w-full text-left text-[11px] border-collapse border border-slate-300 mb-6">
            <thead class="bg-slate-100 text-slate-800 font-bold uppercase text-[10px]">
                <tr>
                    <th class="border border-slate-300 p-2 text-center w-8">No</th>
                    <th class="border border-slate-300 p-2">Nama Produk & Merek</th>
                    <th class="border border-slate-300 p-2">Kategori Pangan</th>
                    <th class="border border-slate-300 p-2">Unit Usaha Produsen</th>
                    <th class="border border-slate-300 p-2">Kecamatan</th>
                    <th class="border border-slate-300 p-2">Bahan Baku Asal</th>
                    <th class="border border-slate-300 p-2 text-center">Kapasitas / Bln</th>
                    <th class="border border-slate-300 p-2 text-center">Izin P-IRT</th>
                    <th class="border border-slate-300 p-2 text-center">Sertifikat Halal</th>
                    <th class="border border-slate-300 p-2 text-center">Status Higiene</th>
                    <th class="border border-slate-300 p-2 text-center">Status Verifikasi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($records as $index => $p)
                <tr class="align-top">
                    <td class="border border-slate-300 p-2 text-center font-bold">{{ $index + 1 }}</td>
                    <td class="border border-slate-300 p-2">
                        <div class="font-bold text-slate-900">{{ $p->nama_produk }}</div>
                        @if($p->merek_produk)
                            <div class="text-[10px] text-emerald-800 font-semibold">Merek: {{ $p->merek_produk }}</div>
                        @endif
                        <div class="text-[10px] text-slate-500">Kemasan: {{ $p->satuan_produk }}</div>
                    </td>
                    <td class="border border-slate-300 p-2 font-medium">{{ $p->kategori_produk }}</td>
                    <td class="border border-slate-300 p-2">
                        <div class="font-bold text-slate-800">{{ $p->umkm?->nama_usaha ?? '-' }}</div>
                        <div class="text-[10px] text-slate-500">Pemilik: {{ $p->umkm?->owner?->nama_lengkap ?? '-' }}</div>
                    </td>
                    <td class="border border-slate-300 p-2 font-semibold text-slate-800">{{ $p->umkm?->kecamatan ?? '-' }}</td>
                    <td class="border border-slate-300 p-2">
                        <div>{{ $p->bahan_baku_utama ?? '-' }}</div>
                        <div class="text-[10px] text-slate-500">Asal: {{ $p->sumber_bahan_baku ?? 'Sinjai' }}</div>
                    </td>
                    <td class="border border-slate-300 p-2 text-center font-mono font-bold">
                        {{ number_format($p->kapasitas_produksi_bulanan, 0, ',', '.') }}
                        <span class="text-[9px] font-normal text-slate-500">{{ $p->satuan_produksi }}</span>
                    </td>
                    <td class="border border-slate-300 p-2 text-center font-mono text-[10px]">
                        {{ $p->legalitas_pirt ?: 'BELUM' }}
                    </td>
                    <td class="border border-slate-300 p-2 text-center font-mono text-[10px]">
                        {{ $p->legalitas_halal ?: 'BELUM' }}
                    </td>
                    <td class="border border-slate-300 p-2 text-center font-semibold text-[10px]">
                        {{ $p->status_higiene === 'LAYAK_HIGIENE' ? '✓ LAYAK' : ($p->status_higiene === 'PERLU_PEMBINAAN' ? 'PEMBINAAN' : 'BELUM') }}
                    </td>
                    <td class="border border-slate-300 p-2 text-center font-bold text-[10px]">
                        {{ $p->status_verifikasi }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="border border-slate-300 p-6 text-center text-slate-400">
                        Tidak ada komoditas pangan yang sesuai dengan kriteria cetak.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- LEMBAR TANDA TANGAN TIM KURASI & PENGAWASAN PANGAN -->
        <div class="grid grid-cols-3 gap-6 pt-4 text-xs text-center border-t border-slate-300">
            <div>
                <p class="text-slate-500 text-[11px]">Pengawas Higiene Sanitasi,</p>
                <p class="font-bold text-slate-800 mt-0.5">Dinas Kesehatan Kabupaten Sinjai</p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 border-b border-slate-400 inline-block px-8 pb-0.5">(.................................................)</p>
                <p class="text-[10px] text-slate-500 mt-0.5">NIP. .................................................</p>
            </div>

            <div>
                <p class="text-slate-500 text-[11px]">Tim Kurasi Industri & Pangan,</p>
                <p class="font-bold text-slate-800 mt-0.5">Dinas Perindustrian & Perdagangan</p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 border-b border-slate-400 inline-block px-8 pb-0.5">(.................................................)</p>
                <p class="text-[10px] text-slate-500 mt-0.5">NIP. .................................................</p>
            </div>

            <div>
                <p class="text-slate-500 text-[11px]">Koordinator Satu Data UMKM Sinjai,</p>
                <p class="font-bold text-slate-800 mt-0.5">Dinas Koperasi & UKM Sinjai</p>
                <div class="h-16"></div>
                <p class="font-bold text-slate-900 border-b border-slate-400 inline-block px-8 pb-0.5">( {{ $petugasCetak }} )</p>
                <p class="text-[10px] text-slate-500 mt-0.5">NIP. .................................................</p>
            </div>
        </div>

    </div>

</body>
</html>
