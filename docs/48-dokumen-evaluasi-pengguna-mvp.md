# Panduan Pelaksanaan UAT Lokal & Format Pencatatan Hasil Evaluasi Pengguna — SIJAI UMKM MVP

- **Nama Sistem**: Sistem Informasi Jejaring dan Agregasi Informasi UMKM (**SIJAI UMKM**)
- **Nomor Versi Internal Baseline**: **`v1.0.0-mvp-demo-rc1`**
- **Arsip Baseline**: `sijai-umkm-mvp-lengkap-2026-11-07.zip`
- **Lingkungan Evaluasi**: Komputer Lokal (`http://127.0.0.1:8000`) — **Hanya Akun dan Data Sintetis (`SYNTHETIC`)**
- **Profil Unit Usaha Bersama yang Diuji**: **`Usaha Pengolahan Pangan Sintetis MVP`**
  - ID Unit Usaha (`unit_id`): `01M6V276Q19PMQB4ZDD7X8TCGF`
  - ID Registrasi Induk (`registration_id`): `01M6V276QYD00ZAMNAJ85E07FK`
  - ID Aliran Field Kapasitas (`stream_id`): `01M6V276R870MKDS4B72JR8C5Z`

> **Aturan Keselamatan Selama UAT Lokal**:
> 1. Gunakan **hanya** 4 akun petugas sintetis yang dibuat melalui `php artisan sijai:mvp-demo`.
> 2. **Jangan** mencatat kata sandi di dalam dokumen ini dan **jangan** memasukkan NIK, NIB nyata, nama pelaku usaha nyata, atau file Excel historis ke dalam aplikasi.
> 3. Jangan mengubah kode atau struktur aplikasi selama sesi UAT berlangsung; catat seluruh temuan pada **Bagian D (Tiga Kelompok Hasil Evaluasi)** di bagian akhir dokumen ini.

---

## A. Daftar 4 Akun Sintetis UAT dan Pembatasan Mandatnya

Sebelum memulai skenario 14 langkah, pastikan keempat akun sintetis berikut tersedia dan dipahami batas kewenangannya oleh peserta UAT:

| No. | Akun Login (`login_handle`) | Peran Petugas UAT | Apa yang Boleh Dilakukan | Pembatasan Mandat (Apa yang Pasti Ditolak oleh Sistem) |
| :---: | :--- | :--- | :--- | :--- |
| **1** | **`synthetic_mvp_pencatat`** | **Petugas Pencatat** | Mencatat & mengubah draf usaha A3, mengajukan registrasi, mengusulkan angka kapasitas field, mengajukan permohonan koreksi `K1–K4`, dan mengisi profil Industri Pengolahan Pangan. | **Ditolak (`403`)** jika mencoba menilai bukti, mengesahkan Registri Induk C2 (tidak boleh mengesahkan buatan sendiri), mengesahkan nilai field/pangan, atau membuka menu mutasi Administrasi. |
| **2** | **`synthetic_mvp_pengesah_awal`** | **Petugas Pengesah Awal (`C2`)** | Memeriksa kelengkapan pengajuan, menilai bukti awal B1 (`ADEQUATE`), dan menetapkan keputusan **Pengesahan Awal C2 (`APPROVE_INITIAL`)**. | **Ditolak (`403`)** jika mencoba membuat draf usaha, menilai bukti teknis B2, mengesahkan nilai field kapasitas, memutus koreksi `K1–K4`, memverifikasi sektor pangan, atau mengubah Administrasi. |
| **3** | **`synthetic_mvp_pengesah_field`** | **Petugas Pengesah Field & Sektor** | Menilai bukti teknis B2, mengesahkan nilai field kapasitas (sebagai OPD pemilik field), mengatur pembatasan V2, memutus koreksi `K1–K3`, menahan sengketa `K4` (`RESTRICTED`), dan memverifikasi profil Industri Pangan. | **Ditolak (`403`)** jika mencoba mengesahkan Registri Induk C2 (`APPROVE_INITIAL`) atau mengubah pengaturan di menu Administrasi. |
| **4** | **`synthetic_mvp_koordinator`** | **Koordinator & Tata Kelola** | Memantau seluruh Unit Usaha pada **Dashboard & Monitoring (`DT-007`)** serta mengelola organisasi, akun petugas, peran, katalog field, penetapan pemilik `H2`, dan mandat `M1/D1` di menu **Administrasi**. | **Ditolak (`403`)** jika mencoba membuat draf usaha, mengesahkan Registri Induk C2, maupun mengesahkan nilai field/koreksi/profil pangan (*Koordinator bukan superuser pengesah*). |

---

## B. Identitas Sesi Evaluasi (Diisi oleh Evaluator)

| Keterangan Sesi UAT | Isian Evaluator |
| :--- | :--- |
| **Tanggal & Waktu Pelaksanaan UAT** | `____ / ____ / 2026   Pukul: ____ : ____ WITA` |
| **Peran yang Diperagakan Evaluator** | `[ ] 1. Petugas Pencatat` &nbsp; `[ ] 2. Pengesah Awal C2` &nbsp; `[ ] 3. Pengesah Field & Sektor` &nbsp; `[ ] 4. Koordinator` |
| **Tampilan Layar yang Diuji** | `[ ] Layar Komputer / Laptop` &nbsp; `[ ] Layar Ponsel / Sempit` |
| **Versi Internal yang Tampil di Header Atas** | `[ ] Sesuai: v1.0.0-mvp-demo-rc1` |

---

## C. Skenario Evaluasi 14 Langkah pada Satu Unit Usaha Bersama (Panduan Langkah demi Langkah untuk Pengguna Nonprogrammer)

**Petunjuk Penilaian**:
- Centang **`[ ] Sesuai`** bila hasil di layar sama dengan kolom *Hasil yang Diharapkan*, atau **`[ ] Belum`** bila berbeda/gagal.
- Lingkari atau tulis **Skor Kemudahan Penggunaan (`1–5`)**:
  - `5` = Sangat Mudah &nbsp; | &nbsp; `4` = Mudah &nbsp; | &nbsp; `3` = Cukup Jelas &nbsp; | &nbsp; `2` = Membingungkan &nbsp; | &nbsp; `1` = Gagal Dijalankan

| Langkah | Skenario Kerja & Cara Menjalankannya | Akun yang Dipakai | Hasil yang Diharapkan di Layar | Hasil Uji (`Sesuai` / `Belum`) | Skor Kemudahan (`1–5`) | Catatan Singkat Evaluator |
| :---: | :--- | :--- | :--- | :---: | :---: | :--- |
| **1** | **Masuk sebagai Petugas Pencatat & Membaca Panduan Peran**<br>Buka `http://127.0.0.1:8000/login`, masuk dengan akun pencatat, lalu amati halaman **Ruang Kerja** (`/kerja`). | `synthetic_mvp_pencatat` | Tampil penanda versi `v1.0.0-mvp-demo-rc1`, 5 kartu modul bernomor urut, dan 4 kotak penjelasan tugas untuk masing-masing peran petugas. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **2** | **Membuka / Membuat Draf Registri Induk (`A3`)**<br>Klik menu **Registri Induk** (`/registri`). Pastikan Unit Usaha **`Usaha Pengolahan Pangan Sintetis MVP`** tampil dalam daftar. | `synthetic_mvp_pencatat` | Unit Usaha sintetis tampil dengan status **Draf (sintetis)**. Nomor NIB terlihat jelas bersifat opsional (tidak wajib diisi). | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **3** | **Memeriksa & Memperbarui Pemilik, Lokasi, dan Kegiatan Usaha**<br>Klik tombol **Edit A3** pada baris `Usaha Pengolahan Pangan Sintetis MVP`, perbarui keterangan pihak pemilik, lokasi usaha, dan kegiatan pengolahan pangan, lalu klik **Simpan Revisi A3**. | `synthetic_mvp_pencatat` | Data tersimpan sebagai revisi baru pada Unit Usaha yang sama (tidak membuat Unit Usaha ganda). | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **4** | **Melengkapi & Menilai Bukti Pengajuan (`B1`)**<br>Pada halaman **Tinjau & Bukti** (`/registri/.../tinjau`), catat referensi bukti dengan akun Pencatat. Lalu keluar dan masuk dengan akun **Pengesah Awal** untuk menilai bukti tersebut **Memadai (`ADEQUATE`)**. | `synthetic_mvp_pencatat` lalu `synthetic_mvp_pengesah_awal` | Klaim bukti tercatat, daftar kemiripan nama tampil sebagai informasi (tanpa menggabungkan data secara otomatis), dan status kelengkapan menjadi **Siap diajukan**. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **5** | **Mengajukan Registrasi Induk**<br>Masuk kembali sebagai **Petugas Pencatat**, buka halaman **Tinjau & Bukti** pada Unit Usaha yang sama, lalu klik tombol **Ajukan Registrasi**. | `synthetic_mvp_pencatat` | Status Unit Usaha berubah jelas dari **Draf (`DRAFT`)** menjadi **Diajukan (`SUBMITTED`)**. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **6** | **Pengesahan Awal (`C2`) oleh Petugas Berbeda**<br>1) Coba buka halaman **Pengesahan Awal C2** dengan akun Pencatat (pastikan ditolak).<br>2) Masuk dengan akun **Pengesah Awal**, buka `/registri/.../pengesahan-awal`, tinjau tabel syarat minimum, lalu pilih **Sahkan Induk Awal (`APPROVE_INITIAL`)**. | `synthetic_mvp_pengesah_awal` | Pembuat draf ditolak mengesahkan buatannya sendiri. Pengesah Awal berhasil mengubah status induk menjadi **Induk disahkan (`INITIAL_APPROVED`)**, sedangkan status field teknis dan sektor pangan belum ikut disahkan otomatis. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **7** | **Mengusulkan & Mengesahkan Nilai Field Kapasitas**<br>1) Dengan akun Pencatat, klik pintasan **Verifikasi Field** (`/field/...`) dan usulkan kapasitas `SYNTHETIC-KAPASITAS-1200-KG-BULAN`.<br>2) Coba sahkan dengan akun Pengesah Awal (pastikan ditolak `403`).<br>3) Masuk dengan akun **Pengesah Field**, nilai bukti B2 (`ADEQUATE`), lalu sahkan (`APPROVE`). | `synthetic_mvp_pencatat` lalu `synthetic_mvp_pengesah_field` | Terbukti Pengesah Awal tidak bisa mengesahkan field milik OPD lain. Setelah disahkan oleh **Pengesah Field**, status kapasitas menjadi **Berlaku Efektif (`EFFECTIVE`)**. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **8** | **Mencatat Profil Industri Pengolahan Pangan**<br>Masuk sebagai **Petugas Pencatat**, klik tombol pintas **Profil Pangan** (`/pangan/...`) dari Unit Usaha yang sama, lalu isi jenis pengolahan pangan utama dan klik simpan. | `synthetic_mvp_pencatat` | Profil sektor percontohan **Industri Pengolahan Pangan** tersimpan pada Unit Usaha `Usaha Pengolahan Pangan Sintetis MVP` dengan status **Draf (sintetis)**. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **9** | **Mengisi Produk, Bahan Baku, Peralatan, & Produksi per Periode/Satuan**<br>Masih di halaman **Profil Pangan**, tambahkan: 1 Produk Olahan, 1 Bahan Baku, 1 Peralatan, dan 1 Catatan Produksi (pilih periode kuartal/bulan dan satuan yang jelas), klik **Ajukan untuk Verifikasi**, lalu verifikasi menggunakan akun **Pengesah Field & Sektor**. | `synthetic_mvp_pencatat` lalu `synthetic_mvp_pengesah_field` | Keempat rincian tersimpan rapi (sistem menjaga agar satuan berbeda tidak dijumlahkan sembarangan), dan setelah diverifikasi statusnya menjadi **Terverifikasi (`VERIFIED`)**. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **10** | **Melakukan Koreksi Data `K1`, `K2`, dan `K3` yang Diizinkan**<br>Buka halaman **Koreksi K1–K4** (`/koreksi/...`) pada Unit Usaha yang sama. Ajukan koreksi administratif (`K1`), perubahan kapasitas periode baru (`K2`), dan pembetulan catatan lama (`K3`) dengan akun Pencatat. Periksa bahwa nilai resmi belum berubah sebelum disetujui, lalu setujui ketiganya dengan akun **Pengesah Field**. | `synthetic_mvp_pencatat` lalu `synthetic_mvp_pengesah_field` | Saat baru diajukan (`Diajukan`), nilai resmi lama tetap bertahan. Setelah **Pengesah Field** memilih `Disetujui & Diterapkan (APPROVED)`, nilai resmi kapasitas diperbarui sesuai urutan versi. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **11** | **Memperlihatkan Penahanan Keputusan Akhir Sengketa `K4`**<br>Ajukan kasus sengketa berisiko tinggi (**`K4`**) dengan akun Pencatat. Lalu masuk sebagai **Pengesah Field**, coba pilih keputusan akhir `APPROVED` (amati pesan penahanan), kemudian pilih keputusan **Dibatasi Protektif V2 (`RESTRICTED`)**. | `synthetic_mvp_pencatat` lalu `synthetic_mvp_pengesah_field` | Sistem menolak keputusan akhir `APPROVED`/`REJECTED` pada kasus `K4` dan menampilkan keterangan **MENUNGGU PENETAPAN (`DT-008` / `DT-009`)**, namun mengizinkan pembatasan protektif **`RESTRICTED`** agar data yang disengketakan tidak dipakai sembarangan. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **12** | **Memeriksa Riwayat Verifikasi & Navigasi Kembali ke Unit Usaha**<br>Periksa tabel riwayat pada halaman **Verifikasi Field**, **Koreksi K1–K4**, dan **Profil Pangan**, lalu gunakan tombol pintas di bagian atas untuk kembali ke **Profil Induk / Tinjau Registri**. | Semua Peran | Seluruh riwayat keputusan tampil lengkap dari versi awal hingga terakhir, dan petugas dapat kembali ke profil Unit Usaha yang sama tanpa kehilangan konteks. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **13** | **Memperlihatkan Dashboard & Monitoring Cakupan (`DT-007`)**<br>Masuk dengan akun **Koordinator**, buka menu **Dashboard** (`/dashboard`), baca kotak panduan tindak lanjut kerja, kartu ringkasan angka unik, dan tabel **Evaluasi Agregasi Cakupan (`DT-007` Model C)**. | `synthetic_mvp_koordinator` | Dashboard menampilkan 1 Unit Usaha unik (`Usaha Pengolahan Pangan Sintetis MVP`), rincian koreksi `K1–K4`, dan status evaluasi **`DITAHAN_KONFLIK_V2`** karena adanya sengketa `K4` yang masih aktif. | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |
| **14** | **Memperlihatkan Administrasi Sesuai Kewenangan & Pembatasan Ekspor `E1`**<br>1) Buka menu **Administrasi** (`/administrasi`) dengan akun **Koordinator** dan tambahkan 1 peran uji sintetis.<br>2) Coba kosongkan kolom wajib untuk melihat pesan validasi Bahasa Indonesia.<br>3) Pastikan tidak ada tombol unduh/ekspor `E1` di seluruh aplikasi. | `synthetic_mvp_koordinator` | Koordinator berhasil mengelola data tata kelola; pesan validasi muncul dalam Bahasa Indonesia yang mudah dipahami; serta fitur ekspor/unduh `E1` tetap terkunci (`E1_FROZEN`). | `[ ] Sesuai`<br>`[ ] Belum` | `1  2  3  4  5` | |

---

## D. Format Pencatatan Hasil Evaluasi (Dikelompokkan dalam 3 Kategori Wajib)

Catat seluruh temuan, masukan, dan usulan dari sesi UAT ke dalam **tiga kelompok** di bawah ini:

### Kelompok 1 — Masalah Kritis yang Menghambat Pekerjaan (*Critical / Blocker*)
*(Diisi hanya apabila ditemukan tombol rusak/error, alur utama Langkah 1–14 tidak dapat diselesaikan, kebocoran kewenangan antarperan, atau ketidaksesuaian data antarmodul pada Unit Usaha yang sama).*

| No. | Langkah / Halaman Terkait | Peran Akun Saat Kejadian | Uraian Masalah Kritis yang Menghambat Pekerjaan | Bukti / Pesan di Layar | Status Tindak Lanjut |
| :---: | :--- | :--- | :--- | :--- | :--- |
| 1.1 | | | | | `[ ] Perlu Perbaikan Segera` |
| 1.2 | | | | | `[ ] Perlu Perbaikan Segera` |
| 1.3 | | | | | `[ ] Perlu Perbaikan Segera` |

*(Jika tidak ditemukan masalah kritis selama UAT, beri tanda centang: `[ ] Tidak ditemukan masalah kritis pada baseline v1.0.0-mvp-demo-rc1`).*

---

### Kelompok 2 — Penyempurnaan Kemudahan Penggunaan (*Usability & Tampilan Antarmuka*)
*(Diisi apabila alur fungsi sudah berjalan benar, namun ada istilah, label status, letak tombol, petunjuk pengisian, atau tampilan layar desktop/ponsel yang perlu diperjelas agar petugas lebih cepat bekerja tanpa mengubah aturan bisnis).*

| No. | Halaman / Formulir | Bagian yang Dinilai Kurang Jelas bagi Petugas | Usulan Perbaikan Tampilan / Kalimat Petunjuk | Prioritas (`Tinggi` / `Sedang` / `Rendah`) |
| :---: | :--- | :--- | :--- | :---: |
| 2.1 | | | | |
| 2.2 | | | | |
| 2.3 | | | | |
| 2.4 | | | | |

---

### Kelompok 3 — Usulan Pengembangan Setelah MVP & Keputusan Bisnis Lanjutan (*Post-MVP & Kebijakan DT*)
*(Diisi untuk menampung kebutuhan pengembangan tahap berikutnya di luar ruang lingkup MVP pertama `KB-09`, atau kebutuhan yang menunggu penetapan resmi pemilik proyek seperti otoritas sengketa `K4`, aturan ekspor `E1` vs `KB-11`, nama OPD nyata, katalog bukti resmi, mesin skala usaha otomatis `KB-10`, impor Excel historis `KB-15`, atau program pembinaan `KB-16`).*

| No. | Topik / Modul Usulan | Rincian Kebutuhan Pengguna / OPD | Keterkaitan dengan Keputusan Bisnis (`DT` / `KB`) | Rekomendasi Tahap (`Pasca-Penetapan DT` / `Fase Lanjutan Pasca-MVP`) |
| :---: | :--- | :--- | :--- | :--- |
| 3.1 | | | | |
| 3.2 | | | | |
| 3.3 | | | | |
| 3.4 | | | | |

---

## E. Berita Acara Singkat Kesimpulan UAT Lokal

- **Status Penerimaan Baseline `v1.0.0-mvp-demo-rc1` oleh Evaluator**:
  - `[ ]` **LULUS EVALUASI PENGGUNA** — Alur 14 langkah pada satu Unit Usaha bersama berjalan stabil dan mudah dipahami petugas (tidak ada temuan pada Kelompok 1).
  - `[ ]` **LULUS DENGAN PENYEMPURNAAN ANTARMUKA** — Alur utama berjalan benar, disertai daftar penyempurnaan kemudahan penggunaan pada Kelompok 2.
  - `[ ]` **PERLU PERBAIKAN FUNGSIONAL** — Terdapat temuan menghambat pekerjaan pada Kelompok 1 yang harus diperbaiki sebelum evaluasi berikutnya.
