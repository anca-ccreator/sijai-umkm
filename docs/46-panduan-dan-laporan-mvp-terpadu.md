# Panduan Demonstrasi 14 Langkah, Pembatasan Mandat 4 Peran Petugas, dan Laporan Baseline MVP SIJAI UMKM

- **Nomor Versi Internal Baseline**: **`v1.0.0-mvp-demo-rc1`**
- **Nama Paket Kandidat Baseline**: `sijai-umkm-mvp-lengkap-2026-11-07.zip`
- **Tanggal Penetapan**: **7 November 2026**
- **Status Lingkungan**: **Lokal (`local`) — murni akun dan data sintetis (`SYNTHETIC` / `synthetic = true`)**

---

## 1. Penetapan Kandidat Baseline & Pemisahan Mandat 4 Akun Sintetis UAT

Paket **`v1.0.0-mvp-demo-rc1`** ditetapkan sebagai kandidat baseline versi demonstrasi dan evaluasi pengguna (UAT) lokal. Perintah `php artisan sijai:mvp-demo` menyiapkan **4 akun petugas sintetis** pada 2 organisasi sintetis (`SYNTHETIC_MVP_DEMO` sebagai OPD Koordinator/Registri dan `SYNTHETIC_MVP_OPD_PEMILIK_FIELD` sebagai OPD Pemilik Field Teknis & Sektor Pangan) dengan pembatasan mandat yang ketat:

| No. | Akun Sintetis (`login_handle`) | Peran dalam Evaluasi (UAT) | Organisasi Sintetis | Kewenangan yang Diizinkan | Pembatasan Mandat (Tindakan yang Ditolak `403`) |
| :---: | :--- | :--- | :--- | :--- | :--- |
| **1** | **`synthetic_mvp_pencatat`** | **Petugas Pencatat** | `SYNTHETIC_MVP_DEMO` | Membuat & memperbarui draf A3 (`CREATE_DRAFT`, `EDIT_DRAFT`), mengajukan registrasi (`SUBMIT_REGISTRATION`), mengusulkan nilai kandidat field, mengajukan koreksi `K1–K4`, dan mengisi/mengajukan profil Industri Pangan (`PROPOSE_CHANGE`). | **Tidak dapat** menilai bukti B1/B2, **tidak dapat** mengesahkan Registri Induk C2 (larangan *self-approval* + tanpa mandat), **tidak dapat** mengesahkan field/koreksi/pangan, dan **tidak dapat** mengubah tata kelola Administrasi. |
| **2** | **`synthetic_mvp_pengesah_awal`** | **Petugas Pengesah Awal (`C2`)** | `SYNTHETIC_MVP_DEMO` | Meninjau pengajuan (`REVIEW_REGISTRATION`), menilai bukti pengajuan B1 (`REVIEW_EVIDENCE` pada `SYNTHETIC_REGISTRY_UI`), dan menetapkan keputusan **Pengesahan Awal C2 (`APPROVE_INITIAL`)**. | **Tidak dapat** membuat/mengubah draf A3, **tidak dapat** menilai bukti B2 field teknis, **tidak dapat** mengesahkan field operasional atau memutus koreksi/sektor pangan (`APPROVE_FIELD` ditolak karena bukan OPD pemilik field & tanpa mandat), serta **tidak dapat** mengelola Administrasi. |
| **3** | **`synthetic_mvp_pengesah_field`** | **Petugas Pengesah Field & Sektor** | `SYNTHETIC_MVP_OPD_PEMILIK_FIELD` | Menilai bukti B2 (`REVIEW_EVIDENCE`), mengesahkan nilai field operasional sebagai OPD pemilik field (`APPROVE_FIELD`), mengatur pembatasan V2, memutus koreksi `K1–K3` / menahan `K4` (`RESTRICTED`), serta memverifikasi profil sektor pangan (`SYNTHETIC_FOOD`). | **Tidak dapat** mengesahkan Registri Induk C2 (`APPROVE_INITIAL` tidak diberikan), **tidak dapat** membuat draf registrasi baru, dan **tidak dapat** mengelola Administrasi (`MANAGE_ASSIGNMENT` / `APPLY_AUTHORITY_CHANGE` tidak diberikan). |
| **4** | **`synthetic_mvp_koordinator`** | **Koordinator Monitoring & Tata Kelola** | `SYNTHETIC_MVP_DEMO` | Memantau seluruh Unit Usaha, aliran field, koreksi, dan profil pangan pada Dashboard & Monitoring `DT-007` (`VIEW_RECORD` lintas cakupan), serta mengelola organisasi, akun, peran, katalog field, mandat `M1/D1`, dan pemilik `H2` di `/administrasi`. | **Bukan superuser bisnis (`DT-005` / `DT-007`)**: **tidak dapat** membuat/mengedit draf usaha, **tidak dapat** mengesahkan Registri Induk C2 (`APPROVE_INITIAL`), dan **tidak dapat** mengesahkan nilai field, koreksi, maupun sektor pangan (`APPROVE_FIELD`). |

---

## 2. Panduan Demonstrasi 14 Langkah pada Satu Unit Usaha Sintetis Bersama

Seluruh alur menggunakan **satu Unit Usaha sintetis yang sama** dari awal hingga akhir agar evaluator melihat bagaimana berbagai petugas bekerja pada profil usaha tunggal tanpa duplikasi:
- **Nama Usaha**: `Usaha Pengolahan Pangan Sintetis MVP`
- **ID Unit Usaha (`unit_id`)**: `01M6V276Q19PMQB4ZDD7X8TCGF`
- **ID Registrasi Induk (`registration_id`)**: `01M6V276QYD00ZAMNAJ85E07FK`
- **ID Aliran Field Kapasitas (`stream_id`)**: `01M6V276R870MKDS4B72JR8C5Z` (`SYNTHETIC.MVP.FIELD.KAPASITAS`)

| Langkah | Akun Petugas yang Digunakan | Menu / Halaman | Apa yang Dilakukan (Bahasa Nonprogrammer) | Hasil pada Unit Usaha yang Sama |
| :---: | :--- | :--- | :--- | :--- |
| **1** | **Petugas Pencatat** (`synthetic_mvp_pencatat`) | `/login` → `/kerja` | Masuk ke aplikasi sebagai Petugas Pencatat dan membaca kartu panduan 4 peran petugas di halaman **Ruang Kerja**. | Petugas melihat tugas perannya dan 5 tautan modul utama ([`00-ruang-kerja-dan-panduan-peran.png`](file:///d:/UMKM/docs/screenshots/00-ruang-kerja-dan-panduan-peran.png)). |
| **2** | **Petugas Pencatat** | `/registri` & `/registri/baru` | Membuka menu **Registri Induk** untuk melihat atau membuat draf minimum **A3** bagi `Usaha Pengolahan Pangan Sintetis MVP`. | Profil awal usaha tercatat dengan status **Draf (sintetis)**; nomor NIB tidak wajib diisi ([`01-registri-draf-a3.png`](file:///d:/UMKM/docs/screenshots/01-registri-draf-a3.png)). |
| **3** | **Petugas Pencatat** | `/registri/.../edit` | Melengkapi data **Pihak/Pemilik Usaha**, **Lokasi Usaha**, dan **Kegiatan Usaha** pada Unit Usaha tersebut lalu menyimpan perubahan. | Sistem menyimpan versi revisi terbaru tanpa menghapus catatan revisi lama dan tanpa membuat Unit Usaha baru. |
| **4** | **Petugas Pencatat** lalu **Pengesah Awal** (`synthetic_mvp_pengesah_awal`) | `/registri/.../tinjau` | Pencatat mencatat referensi bukti **B1**; kemudian Pengesah Awal memeriksa kandidat kemiripan nama (tanpa penggabungan otomatis) dan menilai bukti sudah **Memadai (`ADEQUATE`)**. | Seluruh syarat pengajuan terpenuhi (**Siap diajukan**) ([`02-tinjau-bukti-b1-dan-ajukan.png`](file:///d:/UMKM/docs/screenshots/02-tinjau-bukti-b1-dan-ajukan.png)). |
| **5** | **Petugas Pencatat** | `/registri/.../tinjau` | Petugas Pencatat menekan tombol **Ajukan Registrasi** setelah bukti dinilai memadai. | Status Registri Induk berubah dari **Draf** menjadi **Diajukan (`SUBMITTED`)**. |
| **6** | **Pengesah Awal** (`synthetic_mvp_pengesah_awal`) | `/registri/.../pengesahan-awal` | Masuk sebagai **Pengesah Awal** (petugas berbeda dari pembuat draf), memeriksa tabel evaluasi `INDUK_AWAL`, lalu menekan **Sahkan Induk Awal (`APPROVE_INITIAL`)**. | Status Registri Induk resmi menjadi **Induk disahkan (`INITIAL_APPROVED`)**, sedangkan data field teknis dan profil pangan masih menunggu verifikasi masing-masing ([`03-pengesahan-awal-c2.png`](file:///d:/UMKM/docs/screenshots/03-pengesahan-awal-c2.png)). |
| **7** | **Petugas Pencatat** lalu **Pengesah Field** (`synthetic_mvp_pengesah_field`) | `/field/...` | Pencatat mengusulkan angka kapasitas produksi (`SYNTHETIC-KAPASITAS-1200-KG-BULAN`); kemudian **Pengesah Field** (dari OPD pemilik field) menilai bukti B2 dan mengesahkan nilai tersebut. | Status field kapasitas berubah menjadi **Berlaku Efektif (`EFFECTIVE`)** ([`04-verifikasi-field-efektif.png`](file:///d:/UMKM/docs/screenshots/04-verifikasi-field-efektif.png)). |
| **8** | **Petugas Pencatat** | `/pangan/...` | Dari halaman Unit Usaha yang sama, Pencatat menekan tombol pintas **Profil Pangan** dan menyimpan jenis pengolahan pangan utama. | Profil sektor percontohan **Industri Pengolahan Pangan** terbentuk pada Unit Usaha yang sama. |
| **9** | **Petugas Pencatat** lalu **Pengesah Field & Sektor** (`synthetic_mvp_pengesah_field`) | `/pangan/...` | Pencatat mengisi **Produk Olahan** (Kripik Singkong), **Bahan Baku** (Singkong Segar), **Peralatan** (Mesin Pengering), dan **Jumlah Produksi per Periode/Satuan** (`1500 SYNTHETIC-KG` pada `2026-Q1`) lalu mengajukannya; Pengesah Sektor memverifikasi profil tersebut. | Rincian produksi tersimpan rapi tanpa menjumlahkan satuan yang berbeda, dan status profil pangan menjadi **Terverifikasi (`VERIFIED`)** ([`06-profil-industri-pangan-terverifikasi.png`](file:///d:/UMKM/docs/screenshots/06-profil-industri-pangan-terverifikasi.png)). |
| **10** | **Petugas Pencatat** lalu **Pengesah Field** (`synthetic_mvp_pengesah_field`) | `/koreksi/...` | Pencatat mengajukan koreksi yang diizinkan pada data kapasitas Unit Usaha yang sama: **K1** (perapihan penulisan), **K2** (perubahan kapasitas periode baru menjadi `1500-KG-BULAN`), dan **K3** (pembetulan catatan historis menjadi `1600-KG-BULAN`). Pengesah Field memeriksa dan menyetujui ketiganya. | Saat baru diajukan, nilai resmi lama tidak langsung berubah. Setelah disetujui Pengesah Field, nilai resmi efektif diperbarui dengan riwayat yang lengkap. |
| **11** | **Petugas Pencatat** lalu **Pengesah Field** (`synthetic_mvp_pengesah_field`) | `/koreksi/...` | Pencatat melaporkan sengketa data berisiko tinggi (**K4**). Saat Pengesah Field mencoba memilih keputusan akhir *Setujui (`APPROVED`)*, sistem **menahan tindakan tersebut** (**MENUNGGU PENETAPAN**). Pengesah Field kemudian memilih **Dibatasi Protektif V2 (`RESTRICTED`)**. | Terbukti bahwa sengketa berat `K4` tidak bisa diputus sepihak hanya dengan mandat field biasa; nilai resmi dilindungi dengan status `RESTRICTED` ([`05-koreksi-k2-dan-penahanan-k4.png`](file:///d:/UMKM/docs/screenshots/05-koreksi-k2-dan-penahanan-k4.png)). |
| **12** | **Semua Peran Petugas** | `/field/...` & `/koreksi/...` | Memeriksa tabel riwayat versi registrasi, riwayat keputusan nilai field, riwayat kontrol V2, dan riwayat koreksi `K1–K4`, lalu kembali ke profil Unit Usaha menggunakan tombol navigasi di bagian atas halaman. | Seluruh jejak perubahan tersimpan utuh (*tidak ada data lama yang terhapus*) dan perpindahan antarmodul tetap berada pada Unit Usaha yang sama. |
| **13** | **Koordinator** (`synthetic_mvp_koordinator`) | `/dashboard` | Membuka menu **Dashboard**, membaca kotak *Panduan Tindak Lanjut Kerja*, kartu jumlah Unit Usaha unik, dan tabel **Evaluasi Agregasi Cakupan (`DT-007` Model C)**. | Dashboard menampilkan 1 Unit Usaha unik (`Usaha Pengolahan Pangan Sintetis MVP`) dan secara otomatis memberi tanda **`DITAHAN_KONFLIK_V2`** karena masih ada sengketa `K4` yang aktif ([`07-dashboard-dan-monitoring-dt007.png`](file:///d:/UMKM/docs/screenshots/07-dashboard-dan-monitoring-dt007.png)). |
| **14** | **Koordinator** (`synthetic_mvp_koordinator`) | `/administrasi` | Membuka menu **Administrasi** untuk melihat daftar organisasi, akun petugas, peran, katalog field, penetapan pemilik `H2`, mandat `M1/D1`, dan log audit, serta mencoba bahwa Koordinator tetap ditolak bila mencoba mengesahkan C2 atau field. | Fungsi tata kelola berjalan sesuai kewenangan; Koordinator tidak menjadi superuser pengesah bisnis ([`08-administrasi-tata-kelola.png`](file:///d:/UMKM/docs/screenshots/08-administrasi-tata-kelola.png)). |

---

## 3. Daftar Fitur Tersedia vs Fitur yang Dibatasi Keputusan Bisnis

### A. Fitur MVP yang Tersedia untuk Evaluasi Pengguna
1. Autentikasi sesi lokal terenkripsi (`HttpOnly`, `SameSite=Strict`), konfirmasi kata sandi berkala (`local.recent`), dan jejak audit atomik (`KB-11` / `KB-12`).
2. Pencatatan draf Registri Induk `A3` (identitas, pihak, lokasi utama/cabang, kegiatan; NIB opsional) dan revisi berjejak (`DT-003`).
3. Pencatatan klaim bukti `B1`, deteksi kandidat kemiripan nama tanpa *merge* otomatis, penilaian bukti pengajuan, dan pengajuan registrasi (`DT-003`).
4. Evaluasi paket minimum induk `INDUK_AWAL` dan keputusan Pengesahan Awal `C2` oleh petugas berbeda dari pembuat (`DT-003` & `DT-007`).
5. Pengusulan nilai field operasional, penilaian bukti `B2`, pengesahan nilai oleh satu OPD pemilik field aktif (`KB-07` & `DT-005`), serta kontrol penggunaan `V2` (`BLOCKED`, `MATERIAL_RISK`, `REVOKED`, `CLEAR`).
6. Pengajuan, pemeriksaan, dan keputusan koreksi berjejak `K1`, `K2`, `K3`, serta pembatasan protektif `RESTRICTED` (V2) pada sengketa `K4` (`DT-009`).
7. Pencatatan dan verifikasi Profil Industri Pengolahan Pangan beserta produk olahan, bahan baku, peralatan, dan produksi berperiode/bersatuan (`KB-09`).
8. Dashboard & Monitoring evaluasi agregasi cakupan `DT-007` Model C sesuai cakupan mandat sesi (`M1 + D1`).
9. Administrasi organisasi internal sintetis, akun petugas, peran, katalog definisi field, penetapan pemilik `H2` anti-tumpang-tindih, dan mandat `M1/D1` (`DT-005` & `DT-011`).

### B. Fitur yang Tetap Dibatasi / Menunggu Penetapan Kebijakan
1. **Keputusan Akhir (`APPROVED` / `REJECTED`) pada Sengketa Risiko Tinggi `K4` (`DT-008` / `DT-009` / `KB-08`)**: Ditahan secara sistem (**MENUNGGU PENETAPAN**) sampai otoritas khusus dan SOP penyelesaian sengketa ditetapkan pemilik proyek.
2. **Unduh Bukti & Ekspor Data `E1` (`DT-011` Komponen `E1` vs `KB-11`)**: Tetap tidak aktif (`E1_FROZEN` / `404`) sampai aturan perlindungan data ekspor diselesaikan.
3. **Nama OPD Nyata, Pejabat/Petugas Nyata, Katalog Bukti Formal Resmi, dan Data UMKM Nyata**: Tetap tertutup; aplikasi hanya menggunakan entitas berlabel `SYNTHETIC`.
4. **Mesin Skala Usaha Otomatis (`KB-10`), Impor Historis Excel (`KB-15`), Program Pembinaan (`KB-16`), dan Deployment Produksi (`KB-14`/`KB-17`/`KB-18`)**: Berada pada fase lanjutan di luar MVP pertama.
