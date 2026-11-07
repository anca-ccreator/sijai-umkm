# SIJAI UMKM — Aplikasi MVP Lokal Sintetis (Baseline Demonstrasi & UAT Pengguna)

- **Nomor Versi Internal Baseline**: **`v1.0.0-mvp-demo-rc1`**
- **Tanggal Penetapan Kandidat Baseline**: **7 November 2026**
- **Nama Arsip Paket**: `sijai-umkm-mvp-lengkap-2026-11-07.zip`
- **Lingkungan Operasi**: **Lokal Terisolasi (`local`) — Murni Akun & Data Sintetis (`SYNTHETIC` / `synthetic = true`)**

Fondasi **Laravel 13 (`v13.40.0`)** / **Livewire 4 (`v4.4.8`)** / **Tailwind CSS 4 (`v4.3.4`)** / **Vite 7 (`v7.3.7`)** / **PHP 8.3** / **MySQL 8.4 LTS** (`G1-A` sampai `G1-B3.4`) dipertahankan utuh tanpa *rewrite* dan tanpa mengubah versi *framework*. Paket ini merupakan **kandidat baseline versi demonstrasi dan evaluasi pengguna (UAT)** yang menghubungkan seluruh proses lintas peran/OPD menggunakan **satu profil Unit Usaha bersama**:

1. **Registri Induk UMKM (`DT-003` Model B — `A3 + B1 + C2`)**: Pencatatan draf minimum A3 (pihak/pemilik, lokasi, kegiatan), pemeriksaan klaim bukti B1 & kandidat kemiripan nama (tanpa *merge* otomatis, NIB opsional), pengajuan registrasi, dan pengesahan awal paket minimum induk C2 oleh petugas pengesah awal yang berbeda dari pembuat.
2. **Verifikasi Field Operasional (`DT-005` `C+F+H2` & `DT-009` `B2+V2`)**: Usulan nilai kandidat, penilaian bukti formal B2, pengesahan/penolakan nilai resmi oleh satu OPD pemilik field aktif (`KB-07`), serta pembatasan/pemulihan penggunaan nilai V2 (`BLOCKED`, `MATERIAL_RISK`, `REVOKED`, `CLEAR`).
3. **Koreksi Berjejak `K1–K4` (`DT-009` Komponen `K2` & `V2`)**: Pengajuan kasus koreksi administratif (`K1`), pembaruan fakta berperiode efektif (`K2`), pembetulan historis berjejak (`K3`), dan sengketa/konflik berisiko tinggi (`K4`). Sesuai ketentuan konsistensi kewenangan `DT-008` / `DT-009`, penyelesaian substantif akhir (`APPROVED` / `REJECTED`) pada jalur `K4` **ditahan** dan ditandai **MENUNGGU PENETAPAN** selama otoritas dan prosedur konflik risiko tinggi belum ditetapkan; petugas hanya dapat mencatat pemeriksaan `DISPUTED` atau pembatasan protektif `RESTRICTED` (V2).
4. **Profil Sektor Percontohan Industri Pengolahan Pangan (`KB-09` Model B)**: Pencatatan profil pengolahan pangan, produk olahan, bahan baku, peralatan produksi, pengukuran produksi berperiode (tanpa penjumlahan lintas satuan berbeda), serta riwayat keputusan sektoral (`SUBMITTED`, `VERIFIED`, `RETURNED`, `REJECTED`).
5. **Dashboard & Monitoring Agregasi Cakupan (`DT-007` Model C)**: Ringkasan metrik aktual sesuai cakupan mandat sesi (`M1 + D1`), penghitungan entitas unik anti-hitung-ganda (`KB-09`), panduan tindak lanjut kerja petugas, dan tabel evaluasi agregasi cakupan `Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L)` untuk `L = INDUK_AWAL` dan `L = PANGAN`.
6. **Administrasi & Tata Kelola (`DT-005` & `DT-011`)**: Pengelolaan akun petugas sintetis, organisasi internal sintetis, peran, mandat `M1` & hak dasar `D1`, katalog field & bukti berversi, penetapan pemilik field `H2` tanpa tumpang tindih, dan pembukaan aliran verifikasi field baru.
7. **Fasilitas Persiapan Impor Data Historis & Staging Privat (`KB-15`, `DT-003`, `DT-009`, `DT-011`)**: Penyiapan data historis (`DATA UKM(2).xlsx` dan `5.213 NIB(2).xlsx`) melalui area penampungan sementara (*staging*) terisolasi secara logis dari Registri Induk. Dilengkapi mesin pembersihan 9 aturan (`CLN-01` s.d. `CLN-09`), mesin pencocokan kandidat anti-auto-merge (`MCH-01` s.d. `MCH-06`), penegakan ambang batas minimum draf A3, antarmuka 7 layar operasional, penyamaran data pribadi NIK (KB-11), perlindungan riwayat pemicu basis data *append-only* (KB-12), dan mekanisme promosi terkendali ke Registri Induk sebagai `DRAFT_UNVERIFIED`.

Baca dokumen pendamping utama di dalam paket ini:
- [Laporan Profiling dan Kualitas Data Historis](docs/49-laporan-profiling-dan-kualitas-data-historis.md)
- [Katalog Aturan Pembersihan dan Pencocokan Data Historis](docs/50-katalog-aturan-pembersihan-dan-pencocokan.md)
- [Daftar Masalah dan Pelengkapan Lapangan Data Historis](docs/51-daftar-masalah-dan-pelengkapan-lapangan.md)
- [Panduan Operasional Persiapan Impor Data Historis](docs/52-panduan-operasional-persiapan-impor.md)
- [Panduan Pelaksanaan UAT Lokal & Format Pencatatan Hasil Evaluasi (3 Kelompok)](docs/48-dokumen-evaluasi-pengguna-mvp.md)
- [Panduan Demonstrasi 14 Langkah, Pembatasan 4 Akun Peran, & Laporan Baseline MVP](docs/46-panduan-dan-laporan-mvp-terpadu.md)
- [Manifest Penyerahan Paket MVP SHA-256 (`v1.0.0-mvp-demo-rc1`)](docs/47-manifest-penyerahan-mvp-terpadu.md)
- [Baseline Konsolidasi KB-01 s.d. KB-18](docs/10-baseline-konsolidasi-kb01-kb18.md)
- [Register Keputusan Bisnis dan DT](docs/06-keputusan-bisnis.md)

---

## Acuan Versi Dependensi (`composer.lock` & `package-lock.json`)

| Komponen / Paket | Spesifikasi (`composer.json` / `package.json`) | Versi Terkunci (`composer.lock` / `package-lock.json`) | Peran dalam Aplikasi |
| :--- | :--- | :--- | :--- |
| **Versi Internal Aplikasi** | `config('app.version')` | **`v1.0.0-mvp-demo-rc1`** | Penanda kandidat baseline versi demonstrasi & UAT lokal. |
| **PHP Runtime** | `^8.3` | **PHP `8.3.31` CLI** | Mesin eksekusi utama aplikasi dan CLI Artisan (`pdo_mysql`, `mysqli`, `mbstring`, `openssl`, `fileinfo`, `zip`). |
| **MySQL Server** | MySQL 8.4 LTS | **MySQL Community Server `8.4.13`** | Basis data relasional transaksional lokal pada `127.0.0.1:33070` (`sijai_umkm_g1b1_dev` & `sijai_umkm_g1b1_test`). |
| **`laravel/framework`** | `^13.17` | **`v13.40.0`** | Kerangka kerja (*framework*) aplikasi web, routing, middleware keamanan, migrasi, dan kontainer layanan. |
| **`livewire/livewire`** | `^4.0` | **`v4.4.8`** | Komponen antarmuka reaktif sisi server di atas Blade Laravel. |
| **`laravel/tinker`** | `^3.0` | **`v3.0.2`** | Konsol REPL interaktif untuk pemeriksaan objek lokal. |
| **`phpunit/phpunit`** | `^12.5.12` | **`12.5.43`** | Mesin pengujian otomatis (`FoundationTest`, `LocalAccessTest`, `InitialApprovalHttpTest`, `FieldVerificationTest`). |
| **`tailwindcss` & `@tailwindcss/vite`** | `^4.0.0` | **`4.3.4`** | Kerangka kerja gaya antarmuka (*utility-first CSS*) untuk tampilan desktop dan ponsel. |
| **`vite`** | `^7.0.7` | **`7.3.7`** | Pemaket aset statis antarmuka (`public/build`). |
| **`laravel-vite-plugin`** | `^2.0.0` | **`2.1.0`** | Integrasi aset Vite dengan template Blade Laravel. |

---

## Panduan Instalasi & Menjalankan UAT di Komputer Lokal (Windows / PowerShell)

### 1. Dependensi yang Harus Dipasang Secara Lokal
1. **PHP 8.3 CLI** beserta ekstensi `pdo_mysql`, `mysqli`, `mbstring`, `openssl`, `fileinfo`, dan `zip` (`%LOCALAPPDATA%\SIJAI-UMKM\php\php.exe`).
2. **Composer 2.x** untuk memasang pustaka PHP dari `composer.lock`.
3. **MySQL Community Server 8.4 LTS** khusus SIJAI UMKM pada host `127.0.0.1` port `33070` (`%LOCALAPPDATA%\SIJAI-UMKM\mysql-8.4.13-winx64\bin\mysqld.exe`).
4. **Node.js 22 LTS & NPM** (opsional bila ingin membangun ulang CSS/JS; aset hasil kompilasi sudah disertakan di `public/build`).

### 2. Memasang Dependensi Paket & Menyiapkan File `.env`
```powershell
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
composer install --no-interaction
php artisan key:generate
```

### 3. Menyalakan MySQL Lokal & Menjalankan 14 Migrasi Maju
```powershell
.\tools\start-local-mysql.ps1
php artisan migrate
```

### 4. Menjalankan Bootstrap Akun Peran & Data Demonstrasi
Jalankan perintah bootstrap demo untuk menyiapkan **4 akun petugas sintetis dengan pembatasan mandat masing-masing** beserta **1 Unit Usaha sintetis bersama** (`Usaha Pengolahan Pangan Sintetis MVP`):

```powershell
php artisan sijai:mvp-demo
```

Untuk memuat dataset historis sintetis ke area penampungan sementara (*staging privat*) guna demonstrasi fasilitas persiapan impor:

```powershell
php artisan sijai:seed-historical
```

Perintah akan meminta 4 kata sandi baru (minimal 16 karakter, tidak dicetak ke layar/log, dan menolak menimpa akun yang sudah ada):
1. **`synthetic_mvp_pencatat` (Petugas Pencatat)**: Hanya berwenang membuat/mengedit draf A3, mengajukan registrasi, mengusulkan nilai field, mengajukan koreksi K1–K4, dan mencatat profil Industri Pangan. **Ditolak (`403`)** bila mencoba menilai bukti, mengesahkan C2, mengesahkan field/pangan, atau mengelola Administrasi.
2. **`synthetic_mvp_pengesah_awal` (Petugas Pengesah Awal C2)**: Hanya berwenang menilai bukti pengajuan B1 dan menetapkan keputusan **Pengesahan Awal C2 (`APPROVE_INITIAL`)** sebagai petugas berbeda dari pembuat. **Ditolak (`403`)** bila mencoba membuat draf, mengesahkan field teknis/koreksi/sektor pangan, atau mengelola Administrasi.
3. **`synthetic_mvp_pengesah_field` (Petugas Pengesah Field & Sektor)**: Berwenang menilai bukti B2, mengesahkan nilai field operasional sebagai OPD pemilik field (`SYNTHETIC_MVP_OPD_PEMILIK_FIELD`), mengatur kontrol V2, memutus koreksi K1–K3 / menahan K4 (`RESTRICTED`), serta memverifikasi sektor pangan. **Ditolak (`403`)** bila mencoba mengesahkan Registri Induk C2 atau mengelola Administrasi.
4. **`synthetic_mvp_koordinator` (Koordinator Monitoring & Tata Kelola)**: Berwenang memantau seluruh Unit Usaha pada Dashboard & Monitoring `DT-007` (`VIEW_RECORD`) serta mengelola organisasi, akun, peran, mandat `M1/D1`, dan pemilik `H2` di Administrasi. **Ditolak (`403`)** bila mencoba menjadi superuser pengesah C2 maupun pengesah field/sektor.

### 5. Menjalankan Server Web Lokal
```powershell
php -S 127.0.0.1:8000 -t public
```

Buka **http://127.0.0.1:8000/login** di browser dan ikuti panduan UAT pada [`docs/48-dokumen-evaluasi-pengguna-mvp.md`](docs/48-dokumen-evaluasi-pengguna-mvp.md). Setelah selesai, hentikan server web (`Ctrl+C`) dan matikan MySQL khusus dengan:

```powershell
.\tools\stop-local-mysql.ps1
```
#   s i j a i - u m k m  
 #   s i j a i - u m k m  
 