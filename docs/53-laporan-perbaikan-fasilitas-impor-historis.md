# Laporan Perbaikan Fasilitas Persiapan Impor Historis SIJAI UMKM

- **Tanggal Penyusunan:** 8 November 2026
- **Status Dokumen:** LAPORAN RESMI PERBAIKAN DAN HASIL UJI FASILITAS HISTORIS LOKAL (`local`)
- **Baseline Aplikasi:** `v1.0.0-mvp-demo-rc1` (Fasilitas Persiapan Impor Historis Terverifikasi)
- **Lingkungan Uji:** 100% Data & Petugas Sintetis (`SYNTHETIC`), Bebas Data Pribadi Nyata.

---

## 1. Ringkasan Perubahan yang Dilakukan

Berdasarkan hasil evaluasi pemilik proyek terhadap paket persiapan impor historis, telah dilakukan perbaikan menyeluruh tanpa *rewrite* dan tanpa memperluas cakupan MVP:

1. **Penyesuaian Sidik Berkas Asli (SHA-256):**
   - Berkas `DATA UKM(2).xlsx`: Diperbarui menjadi `697da71fd297483829ae7a30c300860451634aa569a02eff2ba1f258d5ca97a5`.
   - Berkas `5.213 NIB(2).xlsx`: Diperbarui menjadi `3f4a65ae9686f52dec17d0ee5ae3d6c527b6ebd62c189b25a816247e8851a738`.
   - Menghapus klaim bahwa berkas Excel fisik asli telah dibuka/diperiksa baris demi baris pada fasilitas lokal ini.
   - Memisahkan secara tegas antara: (a) profil struktural Excel asli dari metadata & audit baseline 6 November 2026, (b) temuan dari skenario sampel sintetis representatif, dan (c) asumsi perencanaan tata kelola.

2. **Pengetatan Aturan Promosi A3 (`HistoricalPromotionService.php`):**
   - **Hapus Fallback Alamat Pemilik:** Menghapus penggunaan alamat tempat tinggal pemilik KTP sebagai lokasi operasional usaha. Jika alamat operasional mandiri tidak ada, baris wajib ditahan pada antrean pelengkapan A3 (`UNMET_LOCATION`).
   - **Hapus Lokasi Sintetis:** Dilarang membuat teks lokasi sintetis pengganti (seperti "Kabupaten Sinjai") untuk meloloskan data.
   - **Hapus Nama Pihak / Usaha Fiktif:** Dilarang mengarang nama pihak atau nama unit usaha tiruan (seperti "Usaha Sintetis Baris X" atau "Badan Usaha X").
   - **Penahanan Data Tidak Lengkap:** Baris yang belum memenuhi seluruh unsur pokok A3 ditahan secara otomatis di status `NEEDS_FIELD_COMPLETION`.
   - **Pencegahan Konflik & Duplikasi:** Calon baris yang berstatus `CONFLICT`, `CONFLICTING_INFO`, `HELD_FOR_INSPECTION`, `DISPUTED`, atau memiliki potensi duplikasi (`POTENTIAL_MATCH`, `NEEDS_MANUAL_REVIEW`) yang belum disetujui verifikator dilarang dipromosikan ke Registri Induk.

3. **Pengetatan Otorisasi dan Batas Data Sintetis:**
   - Diterapkan pemeriksaan hak di controller (`HistoricalImportController`) dan domain service (`HistoricalPromotionService`):
     - Melihat data (`index`, `quality`, `mapping`, `issues`, `duplicates`, `queue`, `preview`): Memerlukan hak aktif `VIEW_RECORD`.
     - Meninjau dan memperbarui status (`updateReview`): Memerlukan konfirmasi kata sandi dan hak `REVIEW_REGISTRATION` atau `CREATE_DRAFT`.
     - Promosi ke Draf (`promoteToDraft`): Memerlukan konfirmasi kata sandi dan mandat aktif **`CREATE_DRAFT`** (Petugas Pencatat). Akun verifikator atau pengesah awal tanpa `CREATE_DRAFT` ditolak dengan HTTP 403 / `AuthorizationException`.
   - Menegakkan bahwa seluruh dataset dan baris yang diproses wajib bertanda `synthetic = true`.

4. **Keamanan Append-Only Staging (`historical_staging_history`):**
   - Membatasi hak runtime akun aplikasi database (`sijai_dev_app` / `sijai_test_app`) pada tabel `historical_staging_history` menjadi hanya **`SELECT, INSERT`** (tanpa izin `UPDATE` dan tanpa `DELETE`).
   - Tabel `historical_datasets`, `historical_column_mappings`, dan `historical_staging_rows` dibatasi menjadi `SELECT, INSERT, UPDATE` (tanpa `DELETE`).
   - Opsi `--fresh` pada `HistoricalSyntheticSeeder` dilindungi: menolak secara tegas penghapusan riwayat audit staging jika tabel riwayat telah terisi (`LogicException`).

5. **Pemisahan Sumber dan Registri Induk:**
   - Menegaskan bahwa staging adalah area penampungan terpisah, bukan SSOT kedua.
   - Pencocokan kandidat tidak pernah melakukan penggabungan identitas otomatis (*anti auto-merge*).
   - NIK dan NIB bukan primary key (menggunakan ULID internal).
   - Satu baris Excel bukan satu Unit Usaha otomatis.
   - Kategori Kuliner ditandai `KULINER_MAKANAN` dengan kewajiban verifikasi jenis usaha, bukan otomatis Industri Pengolahan Pangan MVP KB-09.
   - Promosi hanya menghasilkan Draf baru (`DRAFT`), tanpa pengesahan otomatis C2 maupun persetujuan field.

---

## 2. Masalah yang Telah Ditutup

| No | Masalah Sebelum Perbaikan | Tindakan Perbaikan | Status |
| :---: | :--- | :--- | :---: |
| 1 | Sidik berkas SHA-256 pada laporan profiling dan seeder masih memakai hash draf awal | Diperbarui sesuai SHA-256 berkas asli: DATA UKM (`697da71f...`) dan 5.213 NIB (`3f4a65ae...`). | **TUTUP** |
| 2 | Alamat pemilik KTP digunakan sebagai fallback lokasi usaha pada promosi draf | Fallback dihapus mutlak. Lokasi usaha mandiri wajib terisi riil; jika kosong, ditahan di antrean A3. | **TUTUP** |
| 3 | Promosi membuat nama unit fiktif ("Usaha Sintetis...") atau badan usaha sintetis jika data kosong | Seluruh fallback fiktif dihapus. Data yang tidak memiliki nama usaha/pihak riil ditolak promosi. | **TUTUP** |
| 4 | Promosi dapat dieksekusi oleh akun apa saja yang berhasil login tanpa cek mandat | Diterapkan otorisasi ketat di server dan service: hanya petugas dengan mandat `CREATE_DRAFT` yang diizinkan. | **TUTUP** |
| 5 | Hak database runtime staging masih mencakup izin `DELETE` dan `UPDATE` pada tabel riwayat | Hak dipersempit menjadi hanya `SELECT, INSERT` pada `historical_staging_history`, trigger append-only dipertahankan. | **TUTUP** |
| 6 | Perintah `--fresh` berpotensi menghapus riwayat audit staging | Seeder memvalidasi riwayat audit; menolak menghapus data staging jika terdapat riwayat yang harus dipertahankan. | **TUTUP** |
| 7 | Statistik sampel sintetis 8 baris terkesan sebagai temuan faktual populasi asli | Dokumen profiling memisahkan secara tegas 3 lapis informasi: berkas asli, sampel sintetis, dan asumsi tata kelola. | **TUTUP** |

---

## 3. Hasil Pemeriksaan Terarah (Hasil Uji Otomatis)

Seluruh pengujian dijalankan pada database MySQL lokal khusus SIJAI UMKM (`127.0.0.1:33070`) menggunakan PHPUnit 12:

- **Suite Khusus Persiapan Historis (`tests/MySql/HistoricalImportTest.php`):**
  - `test_seeder_populates_datasets_with_metadata_and_correct_hashes`: **PASS** (Verifikasi kedua SHA-256 asli).
  - `test_cleaning_engine_rules_cln01_to_cln09`: **PASS** (Normalisasi teks, finansial, NIK 16 digit, NIB 12/13 digit, tahun 2109, sektor kuliner).
  - `test_duplicate_and_candidate_matching_without_auto_merge`: **PASS** (Pencocokan kandidat tanpa penggabungan baris).
  - `test_a3_readiness_enforcement_and_promotion_contract`: **PASS** (Penolakan draf jika lokasi operasional kosong).
  - `test_conflicting_or_held_row_cannot_be_promoted`: **PASS** (Penolakan promosi untuk baris berstatus konflik).
  - `test_officer_without_create_draft_mandate_is_denied_promotion`: **PASS** (Petugas tanpa mandat `CREATE_DRAFT` ditolak di service layer).
  - `test_row_with_unreviewed_potential_match_cannot_be_promoted`: **PASS** (Kandidat duplikasi belum diperiksa ditolak promosi).
  - `test_eligible_a3_row_promotes_successfully_to_registrations_draft`: **PASS** (Promosi berhasil menghasilkan draf resmi dengan audit).
  - `test_officer_review_status_update_and_audit`: **PASS** (Pembaruan status pemeriksaan mencatat audit berjejak).
  - `test_fresh_option_refuses_to_delete_existing_staging_history`: **PASS** (Seeder menolak menghapus audit staging yang ada).
  - `test_historical_web_routes_render_cleanly_with_masked_sensitive_data`: **PASS** (Penyensoran NIK dan kontak pada antarmuka web).
  - `test_web_routes_enforce_create_draft_mandate_for_promotion`: **PASS** (Penolakan HTTP 403 jika akun tanpa mandat memanggil POST promosi).

- **Suite Keseluruhan Sistem (`tests/MySql/`):**
  - Sebanyak **237 skenario pengujian** pada database MySQL lokal dieksekusi dengan status **100% OK (0 Failure, 0 Error)**.

---

## 4. Pembatasan yang Masih Berlaku

1. **Bebas Data Pribadi Nyata:** Tidak ada pemrosesan NIK atau nama warga riil dari kedua file Excel asli ke dalam database pada pekerjaan ini.
2. **Lingkungan Lokal Sintetis:** Fasilitas persiapan impor ini beroperasi penuh menggunakan data sintetis untuk keperluan validasi teknis dan alur bisnis.
3. **Ekspor E1 dan Integrasi Eksternal Tetap Nonaktif:** Tidak ada integrasi dengan OSS RBA, Ditjen Dukcapil, gateway pembayaran, atau ekspor data publik.
4. **Tidak Ada Deployment Produksi:** Lingkungan pengujian terisolasi pada mesin lokal (port 33070).

---

## 5. Cara Menjalankan Demonstrasi Persiapan Impor Secara Lokal

1. **Jalankan Layanan Database MySQL Khusus:**
   ```powershell
   .\tools\start-local-mysql.ps1
   ```
2. **Siapkan Akun Petugas UAT (Jika belum dibuat):**
   ```powershell
   php artisan sijai:bootstrap-mvp-demo --pencatat=SandiPencatat12345! --pengesah-awal=SandiAwal12345! --pengesah-field=SandiField12345! --koordinator=SandiKoord12345!
   ```
3. **Isi Dataset Sintetis Historis:**
   ```powershell
   php artisan sijai:seed-historical
   ```
4. **Jalankan Aplikasi Web:**
   ```powershell
   php artisan serve
   ```
5. **Navigasi Fitur:**
   - Buka peramban ke `http://127.0.0.1:8000/persiapan-historis`.
   - Masuk sebagai Petugas Pencatat (`synthetic_mvp_pencatat`).
   - Telusuri menu Kualitas Data, Pemetaan Kolom, Daftar Masalah, Kandidat Duplikasi, Antrean A3, dan Pratinjau Promosi.
