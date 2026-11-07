@extends('layouts.app')

@section('title', 'Tambah UMKM Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Header -->
    <div class="flex items-center justify-between pb-4 border-b border-slate-200">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Formulir Pendaftaran UMKM Baru</h1>
            <p class="text-sm text-slate-500 mt-0.5">Input data pelaku usaha dan unit usaha mikro/kecil di wilayah Kabupaten Sinjai.</p>
        </div>
        <div>
            <a href="{{ route('umkm.index') }}" class="text-xs font-semibold text-slate-600 hover:text-slate-900 px-3 py-2 bg-slate-100 rounded-lg transition">
                &larr; Kembali ke Daftar
            </a>
        </div>
    </div>

    <!-- Server-side Error Alert -->
    @if($errors->any())
        <div class="p-4 bg-rose-50 border-2 border-rose-400 text-rose-900 rounded-xl text-xs space-y-1.5 shadow-sm">
            <div class="font-bold flex items-center space-x-1.5 text-sm text-rose-950">
                <span class="text-base">⛔</span>
                <span>Penyimpanan Ditolak Sistem: Mohon Periksa Isian Formulir</span>
            </div>
            <ul class="list-disc list-inside space-y-1 text-rose-800">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Alert Live Duplicate Guardrail Container -->
    <div id="guardrail-alerts" class="space-y-3 hidden">
        <!-- 1. NIB Duplicate Alert (Kritis - Red) -->
        <div id="nib-alert-duplicate" class="hidden p-4 rounded-xl border-2 border-rose-400 bg-rose-50 text-rose-900 shadow-sm transition-all duration-300">
            <div class="flex items-start space-x-3">
                <span class="text-2xl">⛔</span>
                <div class="text-xs space-y-1 flex-1">
                    <div class="font-extrabold text-sm text-rose-950">Pencegahan Duplikasi NIB: Nomor NIB Sudah Digunakan</div>
                    <p id="nib-duplicate-desc" class="text-rose-800 leading-relaxed"></p>
                    <p class="text-[11px] font-bold text-rose-700 italic">
                        Penguncian Aktif: Tombol simpan dinonaktifkan sampai nomor NIB diperbaiki atau dikosongkan.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. NIB Verified in OSS DPMPTSP Alert (Green) -->
        <div id="nib-alert-verified" class="hidden p-3.5 rounded-xl border border-emerald-300 bg-emerald-50 text-emerald-900 shadow-sm transition-all duration-300">
            <div class="flex items-start justify-between flex-wrap gap-2">
                <div class="flex items-start space-x-2.5">
                    <span class="text-xl">✅</span>
                    <div class="text-xs">
                        <div class="font-bold text-emerald-950">NIB Terverifikasi di OSS DPMPTSP</div>
                        <p id="nib-verified-desc" class="text-emerald-800 mt-0.5"></p>
                    </div>
                </div>
                <button type="button" id="btn-copy-oss" class="px-2.5 py-1.5 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-lg text-[11px] shadow-sm transition flex items-center space-x-1">
                    <span>⚡</span>
                    <span>Salin Modal & Omzet OSS</span>
                </button>
            </div>
        </div>

        <!-- 3. NIK Conflict Alert (Amber/Rose) -->
        <div id="nik-alert-conflict" class="hidden p-4 rounded-xl border-2 border-amber-400 bg-amber-50 text-amber-950 shadow-sm transition-all duration-300">
            <div class="flex items-start space-x-3">
                <span class="text-2xl">⚠️</span>
                <div class="text-xs space-y-1 flex-1">
                    <div class="font-extrabold text-sm text-amber-900">Peringatan Konflik Identitas: NIK & Nama Pemilik Berbeda</div>
                    <p id="nik-conflict-desc" class="text-amber-800 leading-relaxed"></p>
                    <p class="text-[11px] font-medium text-amber-700 italic">
                        Periksa kembali kesesuaian fisik KTP asli warga untuk mencegah pelanggaran integritas data.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4. NIK Multiusaha Alert (Blue) -->
        <div id="nik-alert-multiusaha" class="hidden p-3.5 rounded-xl border border-blue-300 bg-blue-50 text-blue-950 shadow-sm transition-all duration-300">
            <div class="flex items-start justify-between flex-wrap gap-2">
                <div class="flex items-start space-x-2.5">
                    <span class="text-xl">ℹ️</span>
                    <div class="text-xs">
                        <div class="font-bold text-blue-950">Pelaku Usaha Terdaftar (Deteksi Multiusaha)</div>
                        <p id="nik-multiusaha-desc" class="text-blue-800 mt-0.5"></p>
                    </div>
                </div>
                <button type="button" id="btn-copy-owner" class="px-2.5 py-1.5 bg-blue-700 hover:bg-blue-800 text-white font-bold rounded-lg text-[11px] shadow-sm transition flex items-center space-x-1">
                    <span>📋</span>
                    <span>Salin Alamat & HP Pemilik</span>
                </button>
            </div>
        </div>

        <!-- 5. Nama Usaha Kemiripan Alert (Amber) -->
        <div id="name-alert-similar" class="hidden p-3.5 rounded-xl border border-amber-200 bg-amber-50/70 text-slate-800 shadow-sm transition-all duration-300">
            <div class="flex items-start space-x-2.5">
                <span class="text-xl">🔍</span>
                <div class="text-xs">
                    <div class="font-bold text-slate-900">Pengecekan Nama Usaha di Wilayah yang Sama</div>
                    <p id="name-similar-desc" class="text-slate-600 mt-0.5"></p>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('umkm.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- BAGIAN 1: DATA PEMILIK / PENGELOLA -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center space-x-2 pb-2 border-b border-slate-100">
                    <span class="text-lg">👤</span>
                    <h2 class="font-bold text-slate-800 text-sm">Bagian 1: Identitas Pemilik / Pengelola</h2>
                </div>

                <div>
                    <label for="nama_pemilik" class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap Pemilik (Sesuai KTP) <span class="text-red-500">*</span></label>
                    <input type="text" id="nama_pemilik" name="nama_pemilik" value="{{ old('nama_pemilik') }}" required
                           placeholder="Contoh: Andi Muhammad Yusuf"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="nik" class="block text-xs font-semibold text-slate-700 mb-1">Nomor Induk Kependudukan (NIK 16 Digit)</label>
                    <input type="text" id="nik" name="nik" value="{{ old('nik') }}" maxlength="16"
                           placeholder="730701xxxxxxxxxx (16 digit)"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 font-mono focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <div id="nik-inline-hint" class="hidden mt-1 text-[11px] font-medium p-2 rounded-lg"></div>
                    <p class="text-[11px] text-slate-400 mt-1">1 NIK boleh memiliki lebih dari 1 unit usaha yang berbeda.</p>
                </div>

                <div>
                    <label for="no_hp" class="block text-xs font-semibold text-slate-700 mb-1">Nomor Telepon / WhatsApp</label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                           placeholder="Contoh: 081234567890"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="alamat_ktp" class="block text-xs font-semibold text-slate-700 mb-1">Alamat Tempat Tinggal (KTP)</label>
                    <textarea id="alamat_ktp" name="alamat_ktp" rows="3"
                              placeholder="Alamat rumah sesuai KTP..."
                              class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('alamat_ktp') }}</textarea>
                </div>
            </div>

            <!-- BAGIAN 2: DATA UNIT USAHA & LOKASI -->
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center space-x-2 pb-2 border-b border-slate-100">
                    <span class="text-lg">🏪</span>
                    <h2 class="font-bold text-slate-800 text-sm">Bagian 2: Profil Tempat Usaha</h2>
                </div>

                <div>
                    <label for="nama_usaha" class="block text-xs font-semibold text-slate-700 mb-1">Nama Tempat Usaha / Merek <span class="text-red-500">*</span></label>
                    <input type="text" id="nama_usaha" name="nama_usaha" value="{{ old('nama_usaha') }}" required
                           placeholder="Contoh: Warung Kopi Manipi Borong"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="sektor" class="block text-xs font-semibold text-slate-700 mb-1">Sektor / Bidang Usaha <span class="text-red-500">*</span></label>
                    <select id="sektor" name="sektor" required
                            class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        @foreach($daftarSektor as $s)
                            <option value="{{ $s }}" {{ old('sektor') == $s ? 'selected' : '' }}>{{ $s }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div>
                        <label for="tahun_berdiri" class="block text-xs font-semibold text-slate-700 mb-1">Tahun Mulai Berdiri</label>
                        <input type="number" id="tahun_berdiri" name="tahun_berdiri" value="{{ old('tahun_berdiri') }}"
                               placeholder="Contoh: 2019" min="1950" max="{{ date('Y') }}"
                               class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    </div>
                    <div>
                        <label for="jenis_izin" class="block text-xs font-semibold text-slate-700 mb-1">Jenis Izin Usaha</label>
                        <select id="jenis_izin" name="jenis_izin"
                                class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="BELUM_BERIZIN" {{ old('jenis_izin') == 'BELUM_BERIZIN' ? 'selected' : '' }}>Belum Berizin (Informal)</option>
                            <option value="NIB_OSS" {{ old('jenis_izin') == 'NIB_OSS' ? 'selected' : '' }}>NIB OSS RBA (Pusat)</option>
                            <option value="SKU_DESA_KELURAHAN" {{ old('jenis_izin') == 'SKU_DESA_KELURAHAN' ? 'selected' : '' }}>SKU (Desa / Kelurahan)</option>
                            <option value="IUMK_KECAMATAN" {{ old('jenis_izin') == 'IUMK_KECAMATAN' ? 'selected' : '' }}>IUMK (Kecamatan)</option>
                            <option value="UPTD_PASAR" {{ old('jenis_izin') == 'UPTD_PASAR' ? 'selected' : '' }}>Izin UPTD Pasar Sentral</option>
                            <option value="SIUP_SITU_TDP" {{ old('jenis_izin') == 'SIUP_SITU_TDP' ? 'selected' : '' }}>SIUP / SITU Klasik</option>
                        </select>
                    </div>
                    <div>
                        <label for="izin_usaha" class="block text-xs font-semibold text-slate-700 mb-1">Nomor / Surat Izin Usaha</label>
                        <input type="text" id="izin_usaha" name="izin_usaha" value="{{ old('izin_usaha') }}"
                               placeholder="Nomor SKU/IUMK/Izin pasar..."
                               class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    </div>
                </div>

                <div>
                    <label for="nib" class="block text-xs font-semibold text-slate-700 mb-1">Nomor Induk Berusaha (NIB OSS RBA)</label>
                    <input type="text" id="nib" name="nib" value="{{ old('nib') }}"
                           placeholder="13 digit nomor NIB jika sudah ada..."
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 font-mono focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <div id="nib-inline-hint" class="hidden mt-1 text-[11px] font-medium p-2 rounded-lg"></div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="kecamatan" class="block text-xs font-semibold text-slate-700 mb-1">Kecamatan Lokasi Usaha <span class="text-red-500">*</span></label>
                        <select id="kecamatan" name="kecamatan" required
                                class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="">-- Pilih Kecamatan --</option>
                            @foreach($daftarKecamatan as $kec)
                                <option value="{{ $kec }}" {{ old('kecamatan') == $kec ? 'selected' : '' }}>{{ $kec }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="kelurahan_desa" class="block text-xs font-semibold text-slate-700 mb-1">Desa / Kelurahan</label>
                        <input type="text" id="kelurahan_desa" name="kelurahan_desa" value="{{ old('kelurahan_desa') }}"
                               placeholder="Nama desa/kelurahan..."
                               class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    </div>
                </div>

                <div>
                    <label for="alamat_usaha" class="block text-xs font-semibold text-slate-700 mb-1">Alamat Fisik Tempat Usaha / Kios / Lapak <span class="text-red-500">*</span></label>
                    <textarea id="alamat_usaha" name="alamat_usaha" rows="2" required
                              placeholder="Lokasi tempat usaha beroperasi (misal: Pasar Sentral Sinjai Blok C)..."
                              class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('alamat_usaha') }}</textarea>
                </div>
            </div>
        </div>

        <!-- BAGIAN 3: INFORMASI OPERASIONAL & LEGALITAS TAMBAHAN (OPSIONAL) -->
        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm space-y-4">
            <h2 class="font-bold text-slate-800 text-sm pb-2 border-b border-slate-100 flex items-center space-x-2">
                <span>📑</span>
                <span>Bagian 3: Data Tambahan & Izin (Bisa Dilengkapi Menyusul)</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label for="legalitas_halal" class="block text-xs font-semibold text-slate-700 mb-1">Nomor Sertifikat Halal</label>
                    <input type="text" id="legalitas_halal" name="legalitas_halal" value="{{ old('legalitas_halal') }}"
                           placeholder="ID73..."
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="legalitas_pirt" class="block text-xs font-semibold text-slate-700 mb-1">Nomor Izin P-IRT (Dinkes)</label>
                    <input type="text" id="legalitas_pirt" name="legalitas_pirt" value="{{ old('legalitas_pirt') }}"
                           placeholder="P-IRT..."
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="jumlah_karyawan" class="block text-xs font-semibold text-slate-700 mb-1">Jumlah Tenaga Kerja (Orang)</label>
                    <input type="number" id="jumlah_karyawan" name="jumlah_karyawan" value="{{ old('jumlah_karyawan', 1) }}" min="1"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
            </div>

            <!-- Data Finansial & Permodalan -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2 border-t border-slate-100">
                <div>
                    <label for="modal_awal" class="block text-xs font-semibold text-slate-700 mb-1">Modal Awal Saat Pendirian (Rp)</label>
                    <input type="number" id="modal_awal" name="modal_awal" value="{{ old('modal_awal') }}"
                           placeholder="Contoh: 5000000"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="modal_sekarang" class="block text-xs font-semibold text-slate-700 mb-1">Modal Usaha Sekarang (Rp)</label>
                    <input type="number" id="modal_sekarang" name="modal_sekarang" value="{{ old('modal_sekarang') }}"
                           placeholder="Contoh: 15000000"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="aset" class="block text-xs font-semibold text-slate-700 mb-1">Total Aset Fisik / Produktif (Rp)</label>
                    <input type="number" id="aset" name="aset" value="{{ old('aset') }}"
                           placeholder="Contoh: 25000000"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label for="omset_tahunan" class="block text-xs font-semibold text-slate-700 mb-1">Omzet Penjualan per Tahun (Rp)</label>
                    <input type="number" id="omset_tahunan" name="omset_tahunan" value="{{ old('omset_tahunan') }}"
                           placeholder="Contoh: 120000000"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="omset_bulanan" class="block text-xs font-semibold text-slate-700 mb-1">Estimasi Omset Bulanan (Rp)</label>
                    <input type="number" id="omset_bulanan" name="omset_bulanan" value="{{ old('omset_bulanan') }}"
                           placeholder="Contoh: 10000000"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label for="deskripsi_produk" class="block text-xs font-semibold text-slate-700 mb-1">Deskripsi Produk Utama</label>
                    <input type="text" id="deskripsi_produk" name="deskripsi_produk" value="{{ old('deskripsi_produk') }}"
                           placeholder="Contoh: Kopi bubuk olahan, abon ikan, keripik"
                           class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
            </div>
        </div>

        <!-- Tombol Aksi Simpan -->
        <div class="flex items-center justify-end space-x-3 pt-4 border-t border-slate-200">
            <a href="{{ route('umkm.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-lg text-xs font-semibold transition">
                Batal
            </a>
            <button type="submit" id="btn-submit"
                    class="px-6 py-2.5 bg-emerald-700 hover:bg-emerald-800 disabled:bg-rose-400 disabled:cursor-not-allowed text-white rounded-lg text-xs font-bold shadow-md transition transform active:scale-95 flex items-center space-x-2">
                <span id="btn-submit-icon">💾</span>
                <span id="btn-submit-text">Simpan Sebagai Draf UMKM &rarr;</span>
            </button>
        </div>
    </form>

</div>
@endsection

@section('scripts')
<script>
    const nikInput = document.getElementById('nik');
    const namaPemilikInput = document.getElementById('nama_pemilik');
    const nibInput = document.getElementById('nib');
    const namaUsahaInput = document.getElementById('nama_usaha');
    const kecamatanInput = document.getElementById('kecamatan');
    const kelurahanDesaInput = document.getElementById('kelurahan_desa');
    const noHpInput = document.getElementById('no_hp');
    const alamatKtpInput = document.getElementById('alamat_ktp');
    const modalSekarangInput = document.getElementById('modal_sekarang');
    const omsetTahunanInput = document.getElementById('omset_tahunan');
    const jenisIzinInput = document.getElementById('jenis_izin');

    const btnSubmit = document.getElementById('btn-submit');
    const btnSubmitIcon = document.getElementById('btn-submit-icon');
    const btnSubmitText = document.getElementById('btn-submit-text');

    const guardrailAlerts = document.getElementById('guardrail-alerts');
    const nibAlertDuplicate = document.getElementById('nib-alert-duplicate');
    const nibDuplicateDesc = document.getElementById('nib-duplicate-desc');
    const nibAlertVerified = document.getElementById('nib-alert-verified');
    const nibVerifiedDesc = document.getElementById('nib-verified-desc');
    const btnCopyOss = document.getElementById('btn-copy-oss');

    const nikAlertConflict = document.getElementById('nik-alert-conflict');
    const nikConflictDesc = document.getElementById('nik-conflict-desc');
    const nikAlertMultiusaha = document.getElementById('nik-alert-multiusaha');
    const nikMultiusahaDesc = document.getElementById('nik-multiusaha-desc');
    const btnCopyOwner = document.getElementById('btn-copy-owner');

    const nameAlertSimilar = document.getElementById('name-alert-similar');
    const nameSimilarDesc = document.getElementById('name-similar-desc');

    const nibInlineHint = document.getElementById('nib-inline-hint');
    const nikInlineHint = document.getElementById('nik-inline-hint');

    let cachedOwnerData = null;
    let cachedOssData = null;
    let isNibBlocked = false;
    let debounceTimer;

    function runGuardrailCheck() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const nik = nikInput.value.trim();
            const namaPemilik = namaPemilikInput.value.trim();
            const nib = nibInput.value.trim();
            const namaUsaha = namaUsahaInput.value.trim();
            const kecamatan = kecamatanInput.value;

            // Jika semua input relevan pendek/kosong, sembunyikan semua alert
            if (nik.length < 10 && nib.length < 6 && namaUsaha.length < 3) {
                guardrailAlerts.classList.add('hidden');
                resetNibState();
                resetNikState();
                return;
            }

            const url = `{{ route('api.umkm.checkDuplicate') }}?` + new URLSearchParams({
                nik: nik,
                nama_pemilik: namaPemilik,
                nib: nib,
                nama_usaha: namaUsaha,
                kecamatan: kecamatan
            });

            fetch(url)
                .then(res => res.json())
                .then(data => {
                    let hasAnyAlert = false;

                    // 1. EVALUASI NIB (PENCEGAHAN GANDA & VERIFIKASI OSS)
                    if (data.nib_check && data.nib_check.is_duplicate) {
                        hasAnyAlert = true;
                        isNibBlocked = true;
                        nibAlertDuplicate.classList.remove('hidden');
                        nibDuplicateDesc.textContent = data.nib_check.message;
                        nibAlertVerified.classList.add('hidden');

                        // Ubah gaya input NIB menjadi merah
                        nibInput.classList.add('border-rose-500', 'bg-rose-50', 'text-rose-900', 'ring-2', 'ring-rose-400');
                        nibInlineHint.classList.remove('hidden');
                        nibInlineHint.className = 'mt-1 text-[11px] font-bold text-rose-700 bg-rose-50 p-2 rounded-lg border border-rose-200';
                        nibInlineHint.textContent = `⛔ NIB Ganda: Sudah dipakai "${data.nib_check.existing_umkm.nama_usaha}" (${data.nib_check.existing_umkm.pemilik}).`;

                        // Kunci tombol simpan
                        btnSubmit.disabled = true;
                        btnSubmitIcon.textContent = '⛔';
                        btnSubmitText.textContent = 'Simpan Dicegah: NIB Sudah Digunakan';
                    } else if (data.nib_check && data.nib_check.is_oss_verified) {
                        hasAnyAlert = true;
                        cachedOssData = data.nib_check.oss_data;
                        isNibBlocked = false;
                        nibAlertDuplicate.classList.add('hidden');
                        nibAlertVerified.classList.remove('hidden');
                        nibVerifiedDesc.textContent = `${data.nib_check.message} Skala: ${cachedOssData.skala || 'Mikro'}. Modal: Rp ${Number(cachedOssData.modal).toLocaleString('id-ID')}, Omzet: Rp ${Number(cachedOssData.omset).toLocaleString('id-ID')}.`;

                        nibInput.classList.remove('border-rose-500', 'bg-rose-50', 'text-rose-900', 'ring-2', 'ring-rose-400');
                        nibInput.classList.add('border-emerald-500', 'bg-emerald-50/50');
                        nibInlineHint.classList.remove('hidden');
                        nibInlineHint.className = 'mt-1 text-[11px] font-bold text-emerald-800 bg-emerald-50 p-2 rounded-lg border border-emerald-300';
                        nibInlineHint.textContent = `✅ NIB Resmi OSS Terverifikasi atas nama ${cachedOssData.nama_lengkap}.`;

                        restoreSubmitButton();
                    } else {
                        resetNibState();
                    }

                    // 2. EVALUASI NIK (KONFLIK IDENTITAS & MULTIUSHA)
                    if (data.nik_check && data.nik_check.is_conflict) {
                        hasAnyAlert = true;
                        nikAlertConflict.classList.remove('hidden');
                        nikConflictDesc.textContent = data.nik_check.message;
                        nikAlertMultiusaha.classList.add('hidden');

                        nikInlineHint.classList.remove('hidden');
                        nikInlineHint.className = 'mt-1 text-[11px] font-bold text-amber-900 bg-amber-50 p-2 rounded-lg border border-amber-300';
                        nikInlineHint.textContent = `⚠️ Peringatan: NIK di sistem milik "${data.nik_check.owner_data.nama_lengkap}". Periksa KTP fisik.`;
                    } else if (data.nik_check && data.nik_check.is_multiusaha) {
                        hasAnyAlert = true;
                        cachedOwnerData = data.nik_check.owner_data;
                        nikAlertConflict.classList.add('hidden');
                        nikAlertMultiusaha.classList.remove('hidden');
                        nikMultiusahaDesc.textContent = data.nik_check.message;

                        nikInlineHint.classList.remove('hidden');
                        nikInlineHint.className = 'mt-1 text-[11px] font-semibold text-blue-900 bg-blue-50 p-2 rounded-lg border border-blue-200';
                        nikInlineHint.textContent = `ℹ️ Pelaku usaha terdaftar: ${data.nik_check.existing_businesses.length} usaha aktif (${data.nik_check.existing_businesses.join(', ')}).`;
                    } else {
                        resetNikState();
                    }

                    // 3. EVALUASI KEMIRIPAN NAMA USAHA
                    if (data.has_name_match) {
                        hasAnyAlert = true;
                        nameAlertSimilar.classList.remove('hidden');
                        const names = data.name_matches.map(m => `"${m.nama_usaha}" (Kec. ${m.kecamatan})`).join(', ');
                        nameSimilarDesc.textContent = `Ditemukan usaha dengan nama serupa di wilayah ini: ${names}. Pastikan data yang didaftarkan bukan duplikasi tempat usaha.`;
                    } else {
                        nameAlertSimilar.classList.add('hidden');
                    }

                    if (hasAnyAlert) {
                        guardrailAlerts.classList.remove('hidden');
                    } else {
                        guardrailAlerts.classList.add('hidden');
                    }
                })
                .catch(() => {
                    // Fail silently on network error
                });
        }, 350);
    }

    function resetNibState() {
        isNibBlocked = false;
        nibAlertDuplicate.classList.add('hidden');
        nibAlertVerified.classList.add('hidden');
        nibInput.classList.remove('border-rose-500', 'bg-rose-50', 'text-rose-900', 'ring-2', 'ring-rose-400', 'border-emerald-500', 'bg-emerald-50/50');
        nibInlineHint.classList.add('hidden');
        restoreSubmitButton();
    }

    function resetNikState() {
        nikAlertConflict.classList.add('hidden');
        nikAlertMultiusaha.classList.add('hidden');
        nikInlineHint.classList.add('hidden');
    }

    function restoreSubmitButton() {
        if (!isNibBlocked) {
            btnSubmit.disabled = false;
            btnSubmitIcon.textContent = '💾';
            btnSubmitText.textContent = 'Simpan Sebagai Draf UMKM \u2192';
        }
    }

    // Tombol Cepat: Salin Data Pemilik & Kontak
    btnCopyOwner.addEventListener('click', () => {
        if (cachedOwnerData) {
            if (cachedOwnerData.no_hp && !noHpInput.value) noHpInput.value = cachedOwnerData.no_hp;
            if (cachedOwnerData.alamat_ktp && !alamatKtpInput.value) alamatKtpInput.value = cachedOwnerData.alamat_ktp;
            if (cachedOwnerData.kelurahan_desa && !kelurahanDesaInput.value) kelurahanDesaInput.value = cachedOwnerData.kelurahan_desa;
            btnCopyOwner.textContent = '✓ Data Berhasil Disalin';
            btnCopyOwner.classList.replace('bg-blue-700', 'bg-emerald-700');
            setTimeout(() => {
                btnCopyOwner.innerHTML = '<span>📋</span> <span>Salin Alamat & HP Pemilik</span>';
                btnCopyOwner.classList.replace('bg-emerald-700', 'bg-blue-700');
            }, 2500);
        }
    });

    // Tombol Cepat: Salin Data OSS DPMPTSP
    btnCopyOss.addEventListener('click', () => {
        if (cachedOssData) {
            if (cachedOssData.modal && (!modalSekarangInput.value || modalSekarangInput.value == 0)) {
                modalSekarangInput.value = Math.round(cachedOssData.modal);
            }
            if (cachedOssData.omset && (!omsetTahunanInput.value || omsetTahunanInput.value == 0)) {
                omsetTahunanInput.value = Math.round(cachedOssData.omset);
            }
            if (jenisIzinInput) {
                jenisIzinInput.value = 'NIB_OSS';
            }
            btnCopyOss.textContent = '✓ Modal & Omzet Terisi';
            btnCopyOss.classList.replace('bg-emerald-700', 'bg-teal-700');
            setTimeout(() => {
                btnCopyOss.innerHTML = '<span>⚡</span> <span>Salin Modal & Omzet OSS</span>';
                btnCopyOss.classList.replace('bg-teal-700', 'bg-emerald-700');
            }, 2500);
        }
    });

    // Event Listener Real-Time Input
    nikInput.addEventListener('input', runGuardrailCheck);
    namaPemilikInput.addEventListener('input', runGuardrailCheck);
    nibInput.addEventListener('input', runGuardrailCheck);
    namaUsahaInput.addEventListener('input', runGuardrailCheck);
    kecamatanInput.addEventListener('change', runGuardrailCheck);

    // Initial check on load jika form terisi dari old()
    if (nikInput.value || nibInput.value || namaUsahaInput.value) {
        runGuardrailCheck();
    }
</script>
@endsection
