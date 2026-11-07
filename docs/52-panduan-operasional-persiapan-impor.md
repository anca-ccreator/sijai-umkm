# Panduan Operasional Persiapan Impor Data Historis SIJAI UMKM

- **Kode Dokumen:** `SIJAI-SOP-52`  
- **Versi:** 1.1.0 (Pembaruan Baseline Final)  
- **Tanggal Efektif:** 8 November 2026  
- **Status:** PANDUAN RESMI OPERASIONAL FASILITAS STAGING DAN PERSIAPAN IMPOR  
- **Audiens:** Petugas Pencatat Sintetis, Petugas Pengesah Awal C2, Verifikator Lapangan, Koordinator Monitoring Registri, dan Administrator TI.

---

## 1. Pendahuluan dan Tujuan Dokumen

Fasilitas Persiapan Impor Data Historis SIJAI UMKM dirancang untuk menjembatani data historis yang ada pada instansi pembina (Dinas Koperasi dan UKM Kabupaten Sinjai serta Dinas PMPTSP Kabupaten Sinjai) agar dapat diintegrasikan secara aman dan tertib ke dalam **Registri Induk Resmi UMKM**.

Panduan ini mengatur tata cara penggunaan sistem, pembagian tugas antar-petugas berbasis kewenangan peran (RBAC & ABAC), langkah verifikasi kualitas data, penanganan duplikasi tanpa auto-merge, penegakan ambang batas A3, serta prosedur promosi data yang terkendali tanpa merusak integritas *Single Source of Truth* (SSOT).

---

## 2. Prinsip Keamanan, Hak Akses, dan Batasan Sistem

Sebelum menjalankan prosedur, seluruh personil wajib mematuhi batasan mutlak berikut:

1. **Pemisahan Logis Staging dan Registri Induk:**
   Area penampungan sementara (*staging*) adalah area kerja privat yang terisolasi dari Registri Induk. Data di staging **belum berstatus Unit Usaha resmi** dan **tidak boleh dihitung dalam statistik resmi daerah**.
2. **Pemeriksaan Otorisasi Berlapis (Server & Service):**
   - Hak akses tidak ditentukan hanya dengan menyembunyikan tombol antarmuka, melainkan ditegakkan di lapisan controller dan domain service.
   - **Tindakan Promosi (`promoteToDraft`):** Hanya dapat dilakukan oleh petugas yang memiliki mandat aktif **`CREATE_DRAFT`** (Petugas Pencatat). Petugas pengesah awal atau pembaca murni ditolak oleh sistem (HTTP 403).
   - **Pembaruan Status Peninjauan:** Hanya dapat dilakukan oleh petugas dengan mandat **`REVIEW_REGISTRATION`** atau **`CREATE_DRAFT`**.
   - **Pemisahan Tugas (*Separation of Duties*):** Petugas yang mempromosikan baris menjadi draf dilarang mengesahkan draf buatannya sendiri pada pengesahan awal C2 di Registri Induk.
3. **Perlindungan Data Pribadi (KB-11):**
   Seluruh antarmuka web, laporan, dan log audit secara otomatis menyamarkan NIK (menjadi format `730701******0001`) dan nomor kontak telepon.
4. **Larangan Penggabungan Otomatis (*Anti Auto-Merge*):**
   Sistem tidak akan pernah menggabungkan dua baris secara otomatis hanya karena memiliki NIK, NIB, atau nama usaha yang sama. Rekonsiliasi wajib melalui investigasi petugas.
5. **Keamanan Riwayat Audit Append-Only:**
   Tabel `historical_staging_history` dilindungi oleh database trigger `BEFORE UPDATE` dan `BEFORE DELETE`. Perintah `--fresh` dilarang menghapus riwayat audit staging.

---

## 3. Peta Navigasi Antarmuka Web Persiapan Historis

Aplikasi menyediakan 7 layar operasional yang dapat diakses melalui menu navigasi utama **Persiapan Historis**:

| Layar Menu | Rute URL | Mandat Minimum | Fungsi Utama |
| :--- | :--- | :---: | :--- |
| **1. Daftar Dataset** | `/persiapan-historis` | `VIEW_RECORD` | Melihat katalog sumber dataset historis, jumlah baris, sidik SHA-256 berkas, dan status profiling. |
| **2. Ringkasan Kualitas** | `/persiapan-historis/{id}/kualitas` | `VIEW_RECORD` | Memantau metrik agregat kesehatan data (valid, tidak lengkap, konflik, kesiapan A3) per dataset. |
| **3. Pemetaan Kolom** | `/persiapan-historis/{id}/pemetaan` | `VIEW_RECORD` | Meninjau kamus pemetaan kolom sumber terhadap entitas data SIJAI UMKM (Pihak, Unit, Lokasi, Kegiatan). |
| **4. Daftar Masalah** | `/persiapan-historis/{id}/masalah` | `VIEW_RECORD` (Lihat) / `REVIEW_REGISTRATION` (Ubah Status) | Meneliti rincian kesalahan per baris (NIK tidak lengkap, anomali finansial, anomali tenaga kerja) dengan NIK tersamar. |
| **5. Kandidat Duplikasi** | `/persiapan-historis/{id}/duplikasi` | `VIEW_RECORD` (Lihat) / `REVIEW_REGISTRATION` (Keputusan) | Memeriksa kemiripan data antarsheet, lintas dataset, atau terhadap Registri Induk tanpa auto-merge. |
| **6. Antrean Pelengkapan** | `/persiapan-historis/{id}/antrean-a3` | `VIEW_RECORD` (Lihat) / `REVIEW_REGISTRATION` (Tugas Lapangan) | Mengelola calon unit usaha yang tertahan karena belum memenuhi syarat minimum A3 (terutama kekurangan lokasi fisik). |
| **7. Pratinjau & Promosi** | `/persiapan-historis/{id}/pratinjau` | `VIEW_RECORD` (Lihat) / `CREATE_DRAFT` (Eksekusi Promosi) | Meninjau baris yang memenuhi A3 dan mengeksekusi promosi menjadi Draf Registri Induk resmi. |

---

## 4. Prosedur Operasional Standar (SOP) Tahap demi Tahap

### SOP-01: Verifikasi Metadata Sumber Dataset
1. Administrator memastikan kedua berkas historis memiliki sidik digital SHA-256 yang valid:
   - `DATA UKM(2).xlsx`: `697da71fd297483829ae7a30c300860451634aa569a02eff2ba1f258d5ca97a5`
   - `5.213 NIB(2).xlsx`: `3f4a65ae9686f52dec17d0ee5ae3d6c527b6ebd62c189b25a816247e8851a738`
2. Metadata dicatat pada katalog `historical_datasets` secara transparan tanpa mengklaim telah menginspeksi seluruh berkas fisik asli pada lingkungan lokal jika belum dilakukan.

### SOP-02: Menjalankan Pembersihan dan Normalisasi Staging
1. Jalankan perintah konsol untuk mengisi dataset sintetis historis:
   ```powershell
   php artisan sijai:seed-historical
   ```
2. Mesin mengeksekusi aturan `CLN-01` s/d `CLN-09`:
   - Penyeragaman teks, pembersihan spasi ganda dan karakter tak terlihat.
   - Normalisasi angka finansial dan deteksi nilai negatif.
   - Validasi format NIK 16 digit (tersensor) dan klasifikasi NIB 12/13 digit.
   - Penangkapan tahun anomali 2109.
   - **Pemisahan Alamat Pemilik:** Alamat tempat tinggal pemilik KTP **tidak boleh dijadikan lokasi operasional usaha**.
   - Penandaan sektor Kuliner yang mewajibkan verifikasi jenis pengolahan makanan vs penyajian warung.

### SOP-03: Penanganan Antrean Pelengkapan A3 (Lokasi & Pihak)
1. Petugas membuka menu **Antrean Pelengkapan A3** (`/persiapan-historis/{id}/antrean-a3`).
2. Baris dengan status `UNMET_LOCATION` atau `UNMET_PARTY` tidak dapat dipromosikan.
3. Petugas survei lapangan melakukan verifikasi:
   - Memastikan alamat fisik tempat usaha beroperasi secara mandiri.
   - Memastikan identitas pemilik dan penanda nama usaha yang sah.
4. Sistem menolak secara tegas penggunaan alamat pemilik atau pembuatan nilai fiktif ("Kabupaten Sinjai", "Usaha Sintetis Baris X", dsb.) untuk meluluskan ambang A3.

### SOP-04: Penelaahan Kandidat Duplikasi dan Rekonsiliasi
1. Petugas membuka menu **Kandidat Duplikasi** (`/persiapan-historis/{id}/duplikasi`).
2. Baris dengan `CONFLICTING_INFO` (misal NIK sama tapi nama orang berbeda) ditandai `HELD_FOR_INSPECTION` dan dilarang dipromosikan.
3. Baris dengan `POTENTIAL_MATCH` atau `NEEDS_MANUAL_REVIEW` wajib diperiksa dan disetujui statusnya (`VERIFIED_READY`) sebelum tombol promosi aktif.

### SOP-05: Eksekusi Promosi ke Draf Registri Induk
1. Petugas Pencatat (mandat `CREATE_DRAFT`) membuka menu **Pratinjau Promosi** (`/persiapan-historis/{id}/pratinjau`).
2. Sistem memvalidasi prasyarat:
   - `a3_readiness == 'MET'` (lokasi operasional riil, pihak riil, kegiatan riil, penanda usaha riil).
   - Tidak ada konflik yang belum terselesaikan.
   - Pemeriksaan duplikasi telah berstatus terverifikasi.
   - Dataset dan baris bertanda `synthetic = true`.
3. Petugas menekan **"Promosikan ke Draf Registri Induk"**.
4. Sistem memanggil `RegistrationService::create()`:
   - Menghasilkan Draf Baru dengan state `DRAFT` dan `sector_state` `NOT_STARTED`.
   - Mengaitkan ID draf ke `promoted_to_draft_id` di baris staging.
   - Menulis catatan audit *append-only* di tabel `historical_staging_history`.
5. Draf selanjutnya diteruskan ke **Petugas Pengesah Awal C2** (aktor berbeda) untuk verifikasi formal B1 di Registri Induk.

---

## 5. Cara Menjalankan Demonstrasi Fasilitas Persiapan Impor Secara Lokal

Untuk menguji dan mendemonstrasikan fasilitas ini di lingkungan lokal:

1. **Jalankan Database MySQL Lokal:**
   ```powershell
   .\tools\start-local-mysql.ps1
   ```
2. **Siapkan Akun UAT Terpisah (Jika Belum Diinisialisasi):**
   ```powershell
   php artisan sijai:bootstrap-mvp-demo --pencatat=SandiPencatat12345! --pengesah-awal=SandiAwal12345! --pengesah-field=SandiField12345! --koordinator=SandiKoord12345!
   ```
3. **Isi Data Staging Sintetis:**
   ```powershell
   php artisan sijai:seed-historical
   ```
4. **Jalankan Server Web:**
   ```powershell
   php artisan serve
   ```
5. **Akses Antarmuka di Peramban:**
   - Login menggunakan akun Petugas Pencatat (`synthetic_mvp_pencatat`).
   - Buka URL: `http://127.0.0.1:8000/persiapan-historis`.
   - Jelajahi 7 menu: Daftar Dataset, Kualitas Data, Pemetaan Kolom, Daftar Masalah, Kandidat Duplikasi, Antrean A3, dan Pratinjau Promosi.
