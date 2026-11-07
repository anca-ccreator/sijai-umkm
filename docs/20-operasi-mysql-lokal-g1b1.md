# Panduan MySQL lokal khusus G1-B1, G1-B2 dan G1-B3.1

Pembaruan 7 November 2026. Hanya instance/database pengembangan sintetis SIJAI UMKM. G1-B3.1 disetujui terbatas untuk autentikasi/profil baca-saja/audit lokal; G1-B3.2, data nyata dan produksi belum diizinkan. Instance, nama database, sembilan migrasi dan akun B1/B2 dipertahankan tanpa privilege baru. Tambahan tabel/hak B2 ada pada [model 24](24-model-dan-alur-registrasi-g1b2.md#migrasi-dan-hak-lokal); penggunaan autentikasi/demo pada [panduan 29](29-operasi-autentikasi-lokal-g1b31.md).

## Yang telah disiapkan

MySQL Community **8.4.13 LTS**, distribusi ZIP Windows resmi. Unduhan awal terputus; dilanjutkan dan checksum cocok sebelum diekstrak/dijalankan. Binary mysqld.exe memiliki tanda tangan digital valid. [Halaman unduh resmi MySQL](https://dev.mysql.com/downloads/mysql/8.4.html?os=3) menjadi sumber paket; [panduan ZIP Windows](https://dev.mysql.com/doc/refman/8.4/en/windows-install-archive.html) menjadi rujukan pemasangan manual. Tidak memasang service Windows/global PATH atau mengganti Laragon/XAMPP.

| Komponen | Lokasi/batas |
| --- | --- |
| Akar instance | %LOCALAPPDATA%\SIJAI-UMKM |
| Binary | mysql-8.4.13-winx64/bin pada akar instance |
| Konfigurasi | my-sijai.ini |
| Data | data-g1b1, di luar repository |
| Log/PID | runtime, privat |
| Kredensial administrasi | secrets/root.cnf dan credentials.json, privat; tidak disalin ke chat/ZIP |
| Listener | 127.0.0.1:33070 saja |
| Database pengembangan | sijai_umkm_g1b1_dev |
| Database pengujian | sijai_umkm_g1b1_test |

Folder instance dan file .env/.env.testing dibatasi ke akun Windows pengguna saat ini. Kata sandi acak dibuat lokal, tidak dicetak/dimasukkan kode. Akun runtime berbeda dari migrator dan root. Kredensial dev/test juga berbeda. Root hanya untuk menyiapkan instance/hak lokal, bukan digunakan aplikasi.

Pemeriksaan aktual: skip-name-resolve aktif, local_infile=0, secure_file_priv=NULL, event_scheduler=OFF, plugin MySQL X tidak aktif. Konfigurasi ini membatasi kebutuhan lokal, bukan sertifikasi keamanan produksi.

## Menjalankan dan menghentikan

Pada PowerShell, di folder proyek:

```powershell
.\tools\start-local-mysql.ps1
.\tools\stop-local-mysql.ps1
```

Kedua skrip hanya menyasar instance pada lokasi khusus di atas. Skrip memeriksa port/alamat/binary/konfigurasi; tidak mengambil alih atau menghentikan database aplikasi lain. Start berjalan tersembunyi, tanpa service otomatis. Stop memakai mysqladmin lokal dengan file kredensial privat; kata sandi tidak berada di argumen proses.

Saat penyerahan MySQL khusus tersedia dan berjalan; server HTTP preview telah dihentikan. Jangan menjalankan XAMPP/MariaDB sebagai pengganti. Jika port ditempati proses lain atau identitas instance berubah, periksa penyebabnya; jangan melewati pengaman.

## Konfigurasi aplikasi

.env pengembangan dan .env.testing sudah disiapkan lokal. Contoh aman ada pada .env.example, dengan MySQL mati secara bawaan dan kredensial kosong. Jangan menampilkan isi file privat, mengganti kata sandi dengan contoh, atau memasukkannya ke repository.

Aktivasi memerlukan SIJAI_MYSQL_ENABLED=true, lingkungan local/testing, nama database yang tepat, akun runtime/migrator sesuai lingkungan, host loopback/port khusus dan UUID instance yang cocok. Laravel hanya mempunyai koneksi mysql dan mysql_migrations ketika diaktifkan. MariaDB/SQLite, host lain dan lingkungan produksi ditolak; DB_URL tidak digunakan sebagai jalur pengganti konfigurasi yang telah dibatasi.

UUID diperiksa bersama VERSION() dan DATABASE() sebelum layanan fondasi mengakses objek. Akun MySQL runtime hanya diberi hak per tabel pada satu database. Tidak mempunyai hak CREATE/DROP/GRANT. Audit dan keputusan tidak mendapat hak UPDATE/DELETE; trigger append-only menjadi lapisan tambahan. Akun migrator mempunyai hak DDL hanya pada database dev atau test miliknya.

Tidak menyalakan database dari request web. Saat flag mati, koneksi dikosongkan sebelum boot. Sesi/cache tetap berkas atau array, queue sync; halaman sintetis tetap dapat berfungsi tanpa database.

## Migrasi dan pengujian

Perintah pada instance yang telah disiapkan:

```powershell
php artisan migrate --database=mysql_migrations --force
php artisan migrate --env=testing --database=mysql_migrations --force
composer test
composer test:mysql
```

Perintah migrate ulang menjadi no-op bila sembilan migrasi sudah diterapkan. composer test menjalankan regresi tanpa database. composer test:mysql memakai PHPUnit khusus dan .env.testing; ia menguji sembilan migrasi, rollback/rebuild serta proses penetapan pemilik dan pengajuan serentak pada **database uji khusus**. Hasil B3.1: 131 kasus/783 assertions MySQL dan 10 kasus/56 assertions tanpa DB; laporan 30 mencatat batas dan status verifikasi independen.

Suite MySQL menggunakan migrate:fresh/rollback pada database test yang diizinkan dan membersihkan fixtures setelah selesai. Jangan menjalankannya paralel pada schema yang sama atau terhadap database dev. Guard menolak reset/fresh/rollback untuk dev maupun koneksi selain migrator. Semua pengujian harus lulus tanpa menurunkan pengaman.

Untuk pemulihan sumber pada komputer lain, perlu penyiapan instance/UUID/akun/hak dan file privat setara sesuai izin lingkungan. ZIP sumber tidak membawa binari, datadir, kredensial atau dump, dan tidak melakukan pemasangan database otomatis. Panduan G1-A tetap rujukan pemasangan dependensi; larangan DB di sana adalah riwayat scope G1-A.

## Batas yang tetap

Tidak ada akun petugas/OPD nyata, koneksi eksternal, impor, seeder bisnis atau data historis. Metadata dokumen hanya penanda sintetis tanpa isi berkas. Tidak ada ekspor/unduh bisnis; E1 tetap konflik KB-11. Audit operasional/outbox lokal belum menjadi salinan independen atau operasi produksi. Jangan mengubah daftar database/UUID/host untuk menggunakan aplikasi lain.

## Tambahan lokal C2 G1-B3.3 — 7 November 2026

Satu migrasi maju 010 menambah tiga tabel C2 dan enam trigger append-only pada dev/test khusus SIJAI. Akun runtime masing-masing hanya mendapat SELECT/INSERT pada registration_initial_catalogs, registration_initial_decisions dan registration_initial_evidence; tidak UPDATE/DELETE/DDL/GRANT. Sembilan migrasi lama serta konfigurasi instance/akun/kredensial/batas koneksi dipertahankan. Total 10 migrasi/42 tabel/35 trigger. Dev hanya migrasi maju, fresh/rollback tetap test saja.

[Panduan 38](38-panduan-pengesahan-awal-g1b33.md) menjelaskan demo C2 eksplisit tanpa hak nyata/penimpaan akun lama. Jalankan satu suite/QA pada schema test pada satu waktu. Tidak menghubungkan layanan audit eksternal, server produksi atau database lain.

## Perbaikan verifikasi G1-B3.4 — 7 November 2026

Migrasi 011 menambah tujuh tabel field sintetis. Hak akun runtime ditambah **hanya per tabel dan hanya pada database SIJAI masing-masing**: `field_streams` SELECT/INSERT/UPDATE (untuk versi optimistis), serta enam tabel riwayat SELECT/INSERT. Tidak ada DELETE, DDL, GRANT, hak schema lain, atau akun produksi. Hak test diperbaiki oleh admin lokal privat setelah ditemukan bahwa tabel baru belum dapat ditulis akun runtime; tidak ada kredensial atau perintah GRANT dalam paket penyerahan.

Regresi MySQL harus berjalan eksklusif: pastikan tidak ada proses PHP/Composer lain memakai `sijai_umkm_g1b1_test`, lalu `migrate:fresh` hanya pada koneksi `mysql_migrations` test dan jalankan satu `composer test:mysql`. Pada verifikasi ulang G1-B3.4, suite berurutan lulus 225 tes/1.533 assertion. Database development tidak di-fresh atau di-rollback.
