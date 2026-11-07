# Laporan Profiling Struktur dan Kualitas Data Historis SIJAI UMKM

- **Tanggal Penyusunan:** 8 November 2026 (Pembaruan Baseline Final)
- **Status Dokumen:** DOKUMENTASI RESMI FASILITAS PERSIAPAN IMPOR HISTORIS LOKAL (`local`)
- **Baseline Aplikasi Acuan:** `v1.0.0-mvp-demo-rc1` (Fasilitas Persiapan Historis Terverifikasi)
- **Lingkungan Uji:** Murni Akun & Data Sintetis (`SYNTHETIC` / `synthetic = true`), tanpa data pribadi nyata.

---

## 1. Latar Belakang, Kedudukan Sumber, dan Batasan Etika Data

Pemerintah Kabupaten Sinjai memiliki dua berkas data historis yang direncanakan menjadi bahan awal penyusunan Registri Induk UMKM:
1. `DATA UKM(2).xlsx` (berasal dari Dinas Koperasi dan UKM Kabupaten Sinjai).
2. `5.213 NIB(2).xlsx` (berasal dari Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu / DPMPTSP Kabupaten Sinjai).

Sesuai mandat pemilik proyek per 8 November 2026 dan ketetapan **KB-11 (Perlindungan Data Pribadi)**, **KB-13 (Rekonsiliasi Identitas Tanpa Auto-Merge)**, **KB-15 (Impor Bertahap dan Terverifikasi)**, serta **DT-003 (Registrasi Model B: A3 + B1 + C2)**:
- **Status Pemeriksaan Berkas Fisik:** Berkas Excel fisik asli **TIDAK dibuka, diurai, atau diproses baris demi baris** pada lingkungan aplikasi lokal ini. Identifikasi profil struktural bersumber dari metadata berkas dan laporan audit baseline tertanggal 6 November 2026. Tidak ada klaim bahwa pemeriksaan berkas asli telah selesai dilakukan sebelum adanya prosedur dan izin penanganan data riil resmi.
- **Batas Integritas Lingkungan Lokal:** Seluruh pengujian dan fasilitas persiapan impor pada sistem ini berjalan 100% menggunakan **dataset dan baris sintetis**. Tidak ada data pribadi nyata (NIK riil, nama warga riil, kontak riil) yang dimasukkan ke basis data SIJAI UMKM.
- **Kedudukan Staging:** Area penampungan (*staging*) dipisahkan secara logis dari Registri Induk resmi (*Single Source of Truth* / SSOT). Data di staging tidak berstatus sebagai Unit Usaha resmi dan bukan sumber kebenaran kedua.
- **Penyensoran Sensitivitas:** Seluruh tampilan antarmuka dan laporan menerapkan sensor (*masking*) penuh pada NIK dan nomor kontak.

---

## 2. Profiling Sumber Dataset Historis (Berdasarkan Metadata & Audit Baseline)

### A. Dataset 1: `DATA UKM(2).xlsx`

| Parameter Profil | Metadata & Laporan Sumber | Penjelasan & Batasan Tata Kelola |
| :--- | :--- | :--- |
| **Instansi Asal** | Dinas Koperasi dan UKM Kab. Sinjai | Sumber historis pendataan pembinaan UMKM daerah. |
| **Sidik Berkas Asli (SHA-256)** | `697da71fd297483829ae7a30c300860451634aa569a02eff2ba1f258d5ca97a5` | Integritas sidik digital berkas sumber asli. |
| **Jumlah Lembar (*Sheet*)** | 1 Lembar (`DATA UKM`) | Tercatat dalam satu lembar kerja utama. |
| **Jumlah Baris Pembukuan** | 42.730 baris data | Merupakan baris pencatatan historis, **BUKAN jumlah Unit Usaha unik resmi**. |
| **Struktur Judul Bertingkat** | Baris 1 dan 2 | Baris 1 memuat kelompok induk (`PEMILIK`, `USAHA`, `KEUANGAN`), Baris 2 memuat sub-kolom. |
| **Baris Ringkasan (*Summary*)** | 3 baris terdeteksi | Memuat teks ringkasan (*Total*, *Jumlah*, atau *Rekapitulasi* per kecamatan) yang wajib disaring dari data unit usaha. |
| **Baris Kosong Pemisah** | 105 baris | Baris jeda antar-kelompok tanpa nomor urut dan identitas. |
| **Keterisian 4 Proksi Utama** | 42.625 baris | Baris dengan nama pemilik, nama usaha, sektor, dan alamat terisi bersamaan menurut laporan audit awal. |

### B. Dataset 2: `5.213 NIB(2).xlsx`

| Parameter Profil | Metadata & Laporan Sumber | Penjelasan & Batasan Tata Kelola |
| :--- | :--- | :--- |
| **Instansi Asal** | Dinas PMPTSP Kab. Sinjai | Data penerbitan Nomor Induk Berusaha (NIB) sistem OSS. |
| **Sidik Berkas Asli (SHA-256)** | `3f4a65ae9686f52dec17d0ee5ae3d6c527b6ebd62c189b25a816247e8851a738` | Integritas sidik digital berkas sumber asli. |
| **Jumlah Lembar (*Sheet*)** | 3 Lembar (`5.213`, `perubahan`, `Sheet3`) | Terdapat lembar utama, lembar pembanding, dan lampiran tambahan. |
| **Lembar Utama (`5.213`)** | 5.213 baris bernomor | Daftar NIB terbitan OSS RBA. |
| **Lembar `perubahan`** | 5.213 nomor urut | 3.747 baris identik dengan lembar utama; 1.466 baris memiliki variasi nomor telepon/KBLI. |
| **Lembar `Sheet3`** | 1.725 baris terisi | Lembar lampiran tambahan OSS tanpa atribut alamat lengkap; tidak dijumlahkan ke populasi. |
| **Catatan Penyebut (AH-01)** | Selisih 5 baris pada hitungan format | Total hitungan format NIK (3.293 + 1.850 + 75 = 5.218) selisih 5 terhadap 5.213 baris bernomor. Nilai dipertahankan sebagai catatan klarifikasi sumber. |

---

## 3. Pemisahan Tiga Lapis Temuan: Berkas Asli, Sampel Sintetis, dan Asumsi Perencanaan

Guna menghindari kerancuan antara karakteristik teknis dataset aktual dengan pengujian lokal, seluruh temuan dipisahkan secara tegas ke dalam tiga kategori:

### Lapis 1: Karakteristik Struktural Berkas Asli (Laporan Audit Baseline 6 Nov 2026)
1. **Bukan SSOT Unit Usaha:** Angka 42.730 baris pada `DATA UKM` dan 5.213 baris pada lembar `NIB` adalah unit pencatatan administratif instansi masing-masing, bukan jumlah entitas usaha unik.
2. **Ketiadaan Kolom Lokasi Usaha Mandiri pada DATA UKM:** Kolom alamat pada `DATA UKM` berada di bawah hierarki *PEMILIK*, sehingga secara hukum data tersebut merupakan domisili orang pribadi (*domicile of owner*), bukan lokasi fisik tempat usaha beroperasi.
3. **Ketiadaan Nama Usaha Spesifik pada Lembar NIB:** Lembar `5.213` OSS mencantumkan *Nama Pelaku Usaha* dan *Uraian KBLI*, tetapi tidak menyediakan kolom khusus penanda nama komersial unit usaha.

### Lapis 2: Temuan Pengujian pada Sampel Sintetis Terkendali
*(Catatan: Statistik berikut merupakan hasil evaluasi skenario uji pada 13 baris tiruan sintetis, BUKAN persentase faktual dari seluruh 42.730 data asli).*
1. **Validasi Aturan CLN-01 s/d CLN-09:** Seluruh 9 aturan normalisasi berhasil mengidentifikasi anomali finansial negatif (CLN-09), tahun masa depan `2109` (CLN-05), NIK 15 digit (CLN-03), dan NIB 12 digit format legacy tanpa penambahan nol otomatis (CLN-04).
2. **Pengujian Pemisahan Domisili vs Lokasi:** Pada sampel sintetis yang tidak memiliki alamat usaha mandiri, sistem secara konsisten menolak promosi otomatis dan menahannya pada antrean pelengkapan A3 (`UNMET_LOCATION`).
3. **Pencocokan Tanpa Auto-Merge:** Skenario NIK identik dengan nama berbeda tertangkap sebagai `CONFLICTING_INFO`, dan dua usaha berbeda dengan pemilik NIK yang sama tertangkap sebagai `NEEDS_MANUAL_REVIEW`, tanpa pernah menggabungkan kedua baris secara sepihak.

### Lapis 3: Asumsi Perencanaan dan Tata Kelola (DT-003, DT-005, DT-007)
1. **Persyaratan Minimum A3:** Draf registrasi baru hanya boleh disimpan apabila memenuhi 4 unsur nyata: satu pihak beridentitas jelas, satu penanda usaha (nama usaha), satu lokasi operasional yang dapat dibedakan, dan satu kegiatan usaha yang dikenali.
2. **Larangan Pabrikasi Nilai Pengganti:** Sistem dilarang membuat lokasi fiktif (misal: "Kabupaten Sinjai"), dilarang memakai alamat pemilik sebagai pengganti lokasi usaha, dan dilarang membuat nama pihak/unit usaha tiruan untuk meluluskan syarat A3.
3. **Sektor Kuliner Bukan Otomatis Pengolahan Pangan:** Kategori Kuliner pada data historis ditandai `KULINER_MAKANAN` dengan status `BELUM_DIVERIFIKASI`. Verifikator wajib memastikan di lapangan apakah usaha tersebut melakukan pengolahan makanan kemasan (lingkup MVP KB-09) atau jasa penyajian warung/restoran.

---

## 4. Pemisahan Enam Entitas Domain SIJAI UMKM

Sesuai prinsip **KB-01 (Kesatuan Operasional)** dan **DT-003**, satu baris Excel dipecah menjadi 6 entitas konseptual:

1. **Orang (*Person*):**
   - Identitas subjek manusia: nama lengkap, NIK (divalidasi & disensor), domisili, dan kontak.
2. **Badan Usaha (*Legal Entity*):**
   - Identitas badan hukum (PT, CV, Koperasi, UD) jika berstatus badan usaha formal terpisah dari pengurusnya.
3. **Unit Usaha (*Business Unit*):**
   - Kesatuan operasional usaha: nama usaha (*label*), nama ternormalisasi (*normalized_name*), tahun mulai, dan status operasional.
4. **Hubungan Kepemilikan (*Party-Unit Link*):**
   - Relasi banyak-ke-banyak (*many-to-many*) antara Orang/Badan Usaha dengan Unit Usaha beserta perannya.
5. **Lokasi Operasional (*Business Location*):**
   - Alamat fisik tempat operasional usaha berjalan mandiri. Wajib terverifikasi sebelum promosi draf A3.
6. **Kegiatan Usaha (*Business Activity*):**
   - Deskripsi kegiatan produksi/jasa, kode KBLI (bila ada), dan status verifikasi sektoral.

---

## 5. Pemetaan Kolom Sumber ke Struktur Basis Data

### Pemetaan Kolom `DATA UKM(2).xlsx`

| No Kolom | Nama Header Sumber | Entitas Sasaran SIJAI | Field Target | Aturan Pembersihan | Kebutuhan A3 |
| :---: | :--- | :--- | :--- | :--- | :---: |
| 1 | `NO` | Identitas Sumber | `nomor_urut_sumber` | `DIRECT` | Opsional |
| 2 | `NAMA PEMILIK` | Orang (*Person*) | `nama_orang` | `CLN-01` (Title Case & Spasi) | **Wajib A3** |
| 3 | `NIK` | Orang (*Person*) | `nik` | `CLN-03` (Uji 16 Digit, Masking) | Opsional |
| 4 | `NAMA USAHA` | Unit Usaha | `nama_usaha` | `CLN-01` (Title Case & Spasi) | **Wajib A3** |
| 5 | `ALAMAT` (Sub PEMILIK) | Orang (*Person*) | `alamat_pemilik` | `CLN-07` (Hanya Domisili Orang) | Opsional |
| 6 | `DESA` | Lokasi Usaha | `desa` | `CLN-01` (Normalisasi Nama Desa) | Kondisional |
| 7 | `KECAMATAN` | Lokasi Usaha | `kecamatan` | `CLN-01` (Normalisasi Kecamatan) | Kondisional |
| 8 | `BIDANG USAHA` | Kegiatan Usaha | `kategori_sektor` | `CLN-08` (Pemetaan & Penanda Kuliner) | **Wajib A3** |
| 9 | `IZIN USAHA` | Legalitas/NIB | `izin_usaha_raw` | `DIRECT` (Teks asli tanpa modifikasi) | Opsional |
| 10 | `MODAL AWAL` | Indikator Ekonomi | `modal_awal` | `CLN-02` (Normalisasi Rupiah) | Opsional |
| 11 | `MODAL SEKARANG` | Indikator Ekonomi | `modal_sekarang` | `CLN-02` & `CLN-09` (Deteksi Negatif) | Opsional |
| 12 | `ASET` | Indikator Ekonomi | `aset` | `CLN-02` & `CLN-09` (Deteksi Negatif) | Opsional |
| 13 | `OMZET` | Indikator Ekonomi | `omzet` | `CLN-02` (Normalisasi Rupiah) | Opsional |
| 14 | `TK PRIA` | Ketenagakerjaan | `tenaga_kerja_pria` | `CLN-02` (Integer Non-negatif) | Opsional |
| 15 | `TK WANITA` | Ketenagakerjaan | `tenaga_kerja_wanita` | `CLN-02` (Integer Non-negatif) | Opsional |
| 16 | `TAHUN MULAI` | Unit Usaha | `tahun_mulai` | `CLN-05` (Deteksi 2109 & Batas Tahun) | Opsional |

---

## 6. Ringkasan Ketentuan Promosi dan Otorisasi Server

1. **Syarat Ketat Promosi A3:**
   - Baris staging wajib berstatus `a3_readiness = 'MET'`.
   - Wajib memiliki nama usaha riil, nama pihak riil, alamat lokasi operasional mandiri riil, dan kegiatan riil.
   - Tidak ada toleransi fallback alamat pemilik atau pembuatan nilai sintetis di lapisan promosi.
   - Baris dengan status konflik (`CONFLICT`, `CONFLICTING_INFO`), ditahan (`HELD_FOR_INSPECTION`), sengketa (`DISPUTED`), atau memiliki kandidat duplikasi yang belum ditinjau (`POTENTIAL_MATCH`, `NEEDS_MANUAL_REVIEW`) **DITOLAK** untuk promosi.
2. **Otorisasi Petugas:**
   - Tindakan promosi memerlukan mandat aktif `CREATE_DRAFT`. Akun tanpa hak `CREATE_DRAFT` (seperti verifikator murni atau pengesah awal) ditolak di level server dan service (HTTP 403 / `AuthorizationException`).
   - Pembaruan status pemeriksaan manual memerlukan mandat `REVIEW_REGISTRATION` atau `CREATE_DRAFT`.
   - Hak lihat data historis memerlukan hak `VIEW_RECORD`.
3. **Keamanan Append-Only Staging:**
   - Tabel `historical_staging_history` dilindungi oleh pemicu database (*triggers*) `BEFORE UPDATE` dan `BEFORE DELETE` serta pembatasan hak akun runtime database menjadi hanya `SELECT` dan `INSERT`.
   - Opsi seeder `--fresh` dilarang menghapus riwayat audit staging yang sudah ada.
