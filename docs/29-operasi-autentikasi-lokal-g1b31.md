# Menggunakan autentikasi dan demo lokal G1-B3.1

Disusun **6 November 2026**, difinalisasi **7 November 2026**. Hanya komputer lokal dan MySQL khusus SIJAI UMKM yang sudah disiapkan. Bukan panduan deployment atau konfigurasi cPanel. [Kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md) membatasi hak tahap ini.

## Persiapan yang sudah ada

Gunakan instance dari [panduan MySQL 20](20-operasi-mysql-lokal-g1b1.md), .env dev dan .env.testing privat yang terpisah. Database tetap sijai_umkm_g1b1_dev dan sijai_umkm_g1b1_test, loopback 127.0.0.1:33070, akun runtime/migrator khusus dan UUID terverifikasi. Tidak memakai MariaDB/SQLite atau database aplikasi lain. Tidak ada paket/migrasi/privilege database tambahan pada G1-B3.1.

.env/key/kredensial tidak berada dalam ZIP. Jangan mengganti nilai privat dengan contoh atau mencetaknya. ZIP perubahan diterapkan di atas sumber G1-B2 yang diterima; bukan installer mandiri. Sesi/cache tetap file/array, bukan tabel sesi database. Jangan mengaktifkan driver DB melalui konfigurasi sesi/cache/queue.

## Membuat satu demo sintetis secara sadar

Di PowerShell pada folder proyek, dengan MySQL lokal khusus aktif:

```powershell
php artisan sijai:local-demo
```

Perintah meminta kata sandi minimal 16 karakter dan konfirmasinya secara tersembunyi. Jangan memasukkan kata sandi sebagai argumen command, menaruhnya di kode/dokumen atau membagikannya lewat chat. Tidak ada kata sandi bawaan. Command hanya mencetak nama akun **synthetic_petugas_lokal** dan ID registrasi internal; simpan ID itu untuk membuka profil.

Demo membuat satu organisasi fiktif, akun pembaca individual, akun pembangun internal yang kemudian dinonaktifkan/mandatnya dicabut, katalog/izin baca organisasi sintetis dan satu draf A3 pangan. Draf dibuat melalui layanan B2 yang sama; tidak langsung menulis profil di bawah minimum A3. Pembaca memakai D1 yang dikonfigurasi untuk data INTERNAL; tidak mendapat edit, sahkan, unduh atau ekspor. Tidak menetapkan pemilik field atau OPD nyata.

Katalog/baca demo berlaku **24 jam** sebagai masa uji teknis, bukan SOP atau ketetapan OPD. Standar pengajuan demo belum disetujui dan daftar klaim kosong; demo tidak dapat dianggap siap B1/C2. Pembuatan diaudit atomik; gagal audit membatalkan akun/grant/registrasi terkait. Jika demo sudah ada, command menolak menimpa/mengganti kata sandi/hak/data. Perpanjangan atau pengelolaan akun bukan fitur yang ditambahkan diam-diam; perlu pekerjaan terkontrol berikutnya. Command bukan impor/seeder massal atau administrasi akun produksi.

Pada saat penyerahan, akun/data demo **tidak ditinggalkan di dev/test**; uji otomatis memakai transaksi dan uji HTTP sementara dibersihkan di database test. Jalankan command di atas bila ingin mencoba demo pada dev. Jangan menggunakan database test untuk pekerjaan yang ingin dipertahankan karena suite tes membangunnya ulang.

## Membuka aplikasi lokal

```powershell
npm.cmd run build
php artisan serve --host=127.0.0.1 --port=8000
```

Buka http://127.0.0.1:8000/login atau tautan **Masuk petugas sintetis** dari halaman awal. Login dengan nama akun demo dan kata sandi yang Anda masukkan. Masukkan ID registrasi keluaran command di ruang kerja, kemudian buka profil. Nomor itu ID registrasi internal, bukan NIK/NIB dan bukan nilai kewenangan.

Profil hanya menampilkan kelompok field yang boleh dibaca; field lain bertuliskan “Akses dibatasi” tanpa nilai asli pada HTML. Tidak ada tombol pengajuan/perubahan/pengesahan/unggah/unduh/ekspor bisnis. Setelah 10 menit, akses profil meminta konfirmasi kata sandi. Setelah idle 15 menit atau sesi delapan jam, login ulang diperlukan. Semua batas ini teknis lokal, bukan kebijakan resmi. Mandat/katalog yang berakhir tetap ditolak meskipun login atau konfirmasi ulang berhasil.

Klik **Keluar** untuk mengakhiri sesi. Logout melalui POST bertoken CSRF; URL GET bukan jalan logout. Bila audit logout terganggu, sesi tetap dihentikan dan aplikasi memberi pesan gangguan. Bila login/audit profil gagal, aplikasi tidak menyatakan berhasil atau memberikan data profil.

Hentikan server aplikasi dengan Ctrl+C. MySQL dapat dikelola dengan skrip start/stop khusus pada panduan 20; jangan menghentikan proses database aplikasi lain. Tidak mengubah binding ke jaringan publik atau menjadikan konfigurasi loopback HTTP sebagai konfigurasi produksi.

## Rute dan pemeriksaan

| Rute | Batas |
| --- | --- |
| GET/POST /login | Hanya lokal/MySQL aktif, akun aktif sintetis, CSRF dan pembatasan percobaan |
| POST /logout | Sesi terautentikasi, CSRF; sesi dihapus |
| GET/POST /konfirmasi-password | Sesi aktif, kata sandi/CSRF/pembatasan percobaan |
| GET /kerja dan /kerja/buka | Sesi aktif; navigasi dan pemilihan ID, tidak memberi hak baca otomatis |
| GET /kerja/profil/{registration} | Sesi/konfirmasi baru, katalog/field/sensitivitas/cakupan/tujuan/masa dan audit |
| /register, unduh/ekspor, sahkan/mutasi bisnis | Tidak disediakan |

Ketika MySQL tidak diaktifkan, rute lokal tidak dapat digunakan. Halaman sintetis awal dan /up tetap tidak membutuhkan DB. Framework Livewire unggah/preview/storage publik tetap diblokir. Antarmuka baru memakai formulir Blade server Laravel; komponen Livewire G1-A tetap tersedia. Gateway sesi adalah batas yang harus dipakai jika kelak antarmuka Livewire bisnis mendapat izin.

```powershell
composer test
composer test:mysql
```

Perintah pertama tanpa database. Yang kedua menjalankan seluruh suite MySQL, termasuk fresh/rollback/rebuild hanya pada database test khusus. Jangan menjalankannya bersamaan dengan suite atau server lain yang memakai schema test. Tidak memasang dependensi, mengakses server produksi atau membuat salinan audit eksternal dari perintah ini.
