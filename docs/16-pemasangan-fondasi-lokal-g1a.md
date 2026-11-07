# Pemasangan dan penggunaan fondasi lokal G1-A

Tanggal **6 November 2026**. Pemilik produk menyetujui G1-A secara eksplisit di percakapan proyek, terbatas fondasi lokal/sintetis/tanpa DB. Panduan ini tidak memberi izin G1-B atau produksi. [Kontrak teknis](14-kontrak-teknis-fondasi-lokal.md) tetap dasar; status “belum diizinkan” di dokumen persiapan adalah riwayat sebelum persetujuan terbaru.

## Lingkungan dan batas

PHP CLI 8.3.31 dengan ekstensi Laravel, Composer 2.10.2, Node 24.13.1/npm 11.8.0 telah diperiksa. Versi paket aktual tercatat di composer.lock/package-lock.json dan [laporan G1-A](17-laporan-hasil-g1a.md). Paket dipasang lokal proyek; tidak memperbarui alat global.

Tidak diperlukan MySQL/MariaDB/SQLite/Redis atau database lain. Jangan menginstal/menyalakan/menghubungkannya pada tahap ini. Laragon/XAMPP tidak diperlukan. Tidak membuat akun pemerintah, OPD, hak nyata atau data historis.

Konfigurasi database aplikasi berisi default disabled dan connections kosong. Permintaan koneksi ditolak sebelum factory/PDO (penghubung database). Provider juga memeriksa driver sesi/cache/queue agar tidak memakai layanan eksternal. Ini pengaman tahap lokal, bukan implementasi kewenangan bisnis atau audit KB-12.

## Memasang salinan sumber baru

Gunakan folder lokal baru; jangan menimpa proyek/dokumen pengguna. Perintah berikut dipakai setelah .gitignore tersedia dan dengan izin fondasi yang sama. Pada proyek yang sudah disiapkan tidak perlu mengulang pemasangan.

```powershell
composer install --no-scripts --no-plugins --prefer-dist --no-interaction
npm.cmd ci --ignore-scripts --no-fund
```

Versi berasal dari lock file. Composer plugin/skrip paket dan npm lifecycle script tidak dijalankan otomatis. Manifest aplikasi hanya memiliki hook package discovery yang sudah ditinjau dan perintah test; tidak ada setup/create-project hook SQLite/migrasi. Instalasi awal dilakukan di scaffold sementara, lalu daftar file aman dipromosi; database/migrasi/factory/seeder bawaan tidak dipromosi.

Salin contoh konfigurasi hanya bila .env belum ada:

```powershell
if (-not (Test-Path -LiteralPath '.env')) {
    Copy-Item -LiteralPath '.env.example' -Destination '.env'
}
php artisan key:generate
php artisan package:discover --ansi
npm.cmd run build
```

Jangan memakai opsi --show atau menampilkan APP_KEY. .env/key hanya lokal, diabaikan dari kontrol versi/ZIP. Contoh tidak memiliki kredensial atau konfigurasi koneksi database. Jangan mengganti key milik instalasi yang sudah digunakan tanpa kebutuhan; pada G1-A ini belum ada data bisnis.

## Menjalankan lokal

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

Buka http://127.0.0.1:8000. Tombol **Periksa interaksi** menaikkan penghitung sintetis Livewire. Halaman baru memulai penghitung dari nol; bukan catatan usaha atau pelayanan. Ctrl+C menghentikan server. Jika port sedang dipakai, pilih port lokal lain dan sesuaikan APP_URL; jangan membuka listener ke jaringan umum.

Aset sudah dibangun lokal, tanpa font/CDN eksternal. Jika mengubah CSS/Blade, ulangi npm.cmd run build. Mode pengembangan Vite opsional memakai npm.cmd run dev, terikat 127.0.0.1. Tidak diperlukan queue worker/scheduler atau daemon baru.

## Pemeriksaan yang boleh dijalankan

```powershell
composer validate --strict
composer check-platform-reqs
composer audit
npm.cmd audit
composer test
php artisan route:list
```

Tes fondasi tidak memakai RefreshDatabase/migrasi/SQLite in-memory. PHPUnit memaksa driver array/sync untuk uji; .env lokal memakai sesi/cache berkas, queue sync dan pencatatan gagal non-DB. APP_DEBUG=false secara bawaan. Zona waktu layanan DT-034 tetap belum final; nilai framework bukan penetapan organisasi.

## Hal yang belum dibangun

Tujuh folder modul hanya batas tanggung jawab. Model User bawaan kerangka tidak menjadi akun operasional; tidak ada tabel/login/pengguna dibuat. Registri, katalog kewenangan, pengesahan, audit bisnis, bukti, koreksi, sektor pangan dan laporan bisnis menunggu G1-B/scope terkait. Prototipe PHP terpisah tidak disalin.

Tidak ada endpoint bisnis unduh/ekspor. Rute aset/interaksi bawaan Livewire bukan fitur ekspor; transport upload/preview berkas diblokir middleware fondasi dan local storage serve dimatikan. Livewire tetap membundel Alpine satu kali.

Jangan menjalankan migrate, db:*, seed, queue worker, storage:link, impor/merge, akses PDN/cPanel/OSS/Dukcapil atau deployment. Perintah bawaan framework yang tercantum di artisan bukan izin menjalankannya. Server pengujian yang dibuat selama pekerjaan dihentikan setelah pemeriksaan.

G1-A tidak membuktikan hosting siap, keamanan produksi, kewenangan organisasi atau kepatuhan data nyata. G1-B memerlukan pilihan MySQL lokal/desain/izin terpisah; ekspor E1 tetap konflik KB-11.
