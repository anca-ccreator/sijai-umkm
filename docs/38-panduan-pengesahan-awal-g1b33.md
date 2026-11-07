# Panduan C2 lokal sintetis G1-B3.3

Tanggal **7 November 2026**. Gunakan lingkungan Laravel/MySQL khusus SIJAI UMKM yang sudah disiapkan, dengan data sepenuhnya fiktif. [Kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md) dan [hasil 39](39-laporan-hasil-g1b33.md) menjelaskan batasnya. Tidak ada paket baru.

## Migrasi lokal

Tahap ini menambah satu migrasi 010 untuk katalog/keputusan/bukti C2, tanpa mengubah sembilan migrasi lama. Migrasi maju telah dijalankan pada dev/test lokal yang diizinkan. Jangan menjalankan fresh/rollback pada dev. Pada komputer lokal lain yang belum memiliki tambahan ini, gunakan migrator khusus dan prinsip [panduan MySQL 20](20-operasi-mysql-lokal-g1b1.md); jangan menyalin kredensial atau memberi hak DDL kepada akun aplikasi.

Hak tambahan runtime hanya SELECT/INSERT pada `registration_initial_catalogs`, `registration_initial_decisions` dan `registration_initial_evidence` di masing-masing database SIJAI dev/test. Akun migrator lokal menyiapkan tabel/trigger. Paket tidak membawa akun, kata sandi, .env atau dump. Ini bukan panduan operasi PDN/cPanel/produksi.

## Membuat contoh secara eksplisit

Jalankan `php artisan sijai:initial-demo` pada terminal lokal. Perintah meminta tiga kata sandi tersembunyi beserta konfirmasi, masing-masing minimal 16 karakter. Tidak ada kata sandi bawaan, argumen rahasia atau cetak kata sandi. Ia menyiapkan:

- `synthetic_pencatat_a3`: catat/revisi/ajukan dalam cakupan demo.
- `synthetic_pemeriksa_a3`: periksa pengajuan dan nilai metadata klaim uji.
- `synthetic_pengesah_awal`: periksa dan putuskan paket minimum C2; tidak dapat mengedit draf atau mengesahkan field.

Demo C2 menggunakan kembali pabrik contoh B3.2 di dalam transaksi dan menambah akun/katalog C2 secara eksplisit. Bila demo registrasi atau akun terkait sudah ada, perintah menolak menimpa atau meningkatkan haknya. Jangan menghapus data demo dev otomatis untuk memaksakan pembuatan; tinjau kondisi lokal dan gunakan lingkungan test khusus pada pekerjaan uji yang diizinkan.

Masa 24 jam adalah parameter uji, bukan SOP resmi. Data contoh dimulai **Draf**, metadata bukti belum dinilai, dan belum ada keputusan C2. Kegagalan audit membatalkan pembuatan seluruh contoh. Data QA sementara pada penyerahan dibersihkan dari test, bukan ditinggalkan sebagai akun siap pakai.

## Mencoba alur

1. Build `npm.cmd run build`, lalu `php artisan serve --host=127.0.0.1 --port=8000`. Buka http://127.0.0.1:8000/login; jangan membuka server pengembangan ke publik.
2. Pemeriksa masuk, buka Registri Induk dan tinjau contoh. Nilai metadata klaim sintetis yang disiapkan server; hanya pilih Memadai bila sesuai skenario uji. Tidak ada unggah/unduh atau bukti nyata.
3. Pencatat masuk dan ajukan setelah prasyarat uji terpenuhi. NIB boleh tetap kosong.
4. Pengesah awal masuk, buka tinjau registrasi lalu **Periksa pengesahan awal**. Tinjau versi/katalog, ringkasan klaim serta paket A3 melalui tautan profil yang diizinkan. Layar tidak mengirim isi/ID/checksum dokumen atau ID mandat.
5. Pilih **Sahkan paket minimum induk**, **Kembalikan pengajuan**, atau **Tolak pengajuan** sesuai skenario. APPROVED hanya tersedia bila paket READY dan tetap diperiksa ulang pada server. Katalog belum sah/tersedia memberi Belum dapat dinilai; jangan mengartikan sebagai lulus.
6. Hasil disahkan hanya mengubah status induk. Field tetap belum terverifikasi dan sektor belum dimulai. Hasil ditolak menutup alur lokal ini; tidak ada pembukaan ulang/koreksi final. Hasil dikembalikan memungkinkan pencatat revisi, penilaian bukti versi baru dan pengajuan ulang melalui B2/B3.2; riwayat keputusan lama tetap terlihat.

Pembuat yang mencoba C2 tetap ditolak walaupun diberi beberapa peran. Perubahan mandat/kelas akses/masa sesi berlaku pada permintaan berikutnya; konfirmasi kata sandi jika diminta. Jika versi data/katalog berubah, baca ulang sebelum membuat keputusan baru. Tombol terkirim ulang dengan ID yang sama tidak mencatat keputusan sukses ganda.

Keluar melalui logout dan hentikan server dengan Ctrl+C setelah mencoba. Jangan menyimpan cookie/kata sandi ke repository, laporan atau ZIP.

## Tes

`composer test` tetap tanpa database. `composer test:mysql` menjalankan seluruh regresi dan tes C2 pada database test khusus; suite dapat membangun ulang skema test. **Jalankan satu suite/QA saja pada database test pada satu waktu.** Dua proses yang sengaja bersamaan hanya dibuat oleh kasus konkurensi di dalam suite yang mengaturnya.

G5/G7, data nyata, field operasional, koreksi penuh, sektor pangan lengkap, ekspor, integrasi, audit eksternal dan deployment tidak diberikan oleh izin ini. Pengujian Codex bukan verifikasi independen atau bukti produksi siap.
