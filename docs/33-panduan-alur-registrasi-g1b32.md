# Panduan alur registrasi sintetis G1-B3.2

Tanggal **7 November 2026**. Gunakan hanya lingkungan lokal yang sudah disiapkan sesuai [operasi MySQL](20-operasi-mysql-lokal-g1b1.md) dan [autentikasi](29-operasi-autentikasi-lokal-g1b31.md). Tidak memasang paket atau membuat koneksi baru dari panduan ini. Kontrak dan batas ada pada [dokumen 32](32-kontrak-antarmuka-registrasi-g1b32.md).

## Menyiapkan contoh lokal

Di folder proyek, jalankan `php artisan sijai:registry-demo`. Perintah terminal ini meminta dua kata sandi tersembunyi beserta konfirmasi, masing-masing minimal 16 karakter, tanpa kata sandi bawaan. Jangan memasukkan kata sandi ke argumen perintah, dokumen atau chat. Perintah hanya mencetak nama akun sintetis dan ID contoh registrasi.

Contoh ini terpisah dari demo baca-saja `sijai:local-demo` B3.1. Jika contoh registrasi sudah ada, perintah menolak menimpa akun/data/mandat. Ia menyiapkan:

- `synthetic_pencatat_a3`: baca, catat/revisi A3 dan ajukan dalam cakupan uji.
- `synthetic_pemeriksa_a3`: baca, periksa/kembalikan dan nilai klaim metadata uji yang diizinkan.
- Satu draf, satu katalog dan metadata bukti sintetis yang **belum dinilai**. Tidak ada hak C2 atau pengesahan field.

Masa 24 jam hanya parameter demo lokal; bukan kebijakan kelembagaan. Tidak menggunakan OPD/petugas asli. Semua pembuatan contoh dan audit/outbox berada dalam transaksi yang sama. Data QA otomatis tidak ditinggalkan pada dev/test saat penyerahan; jika ingin mencoba sendiri, buat contoh secara eksplisit.

Build dengan `npm.cmd run build`, lalu jalankan `php artisan serve --host=127.0.0.1 --port=8000`. Buka http://127.0.0.1:8000/login. Server hanya localhost; hentikan dengan Ctrl+C setelah selesai. Jangan memakai server pengembangan untuk publik/produksi.

## Mencatat A3

1. Masuk sebagai pencatat. Buka **Registri Induk** lalu **Catat draf A3** pada lingkup sintetis yang ditawarkan.
2. Isi nama Unit dan sumber berawalan `SYNTHETIC-`. NIB boleh kosong; bila diisi, gunakan referensi uji berawalan tersebut.
3. Pilih Orang/Badan Usaha. Catat nama fiktif dan peran hubungan, atau pilih pihak yang sudah diizinkan. **Tambah pihak** untuk kepemilikan/pengelolaan bersama. Nama yang sama bukan bukti orang yang sama; pilihan referensi harus disengaja.
4. Isi lokasi operasional secara terpisah dari domisili pihak. Cabang membutuhkan referensi keterkaitan sintetis dan tetap lokasi Unit tersebut. Isi kegiatan yang dapat dikenali.
5. Klik **Simpan draf A3**. Kekurangan pihak/lokasi/kegiatan/sumber menahan seluruh penyimpanan; tidak menghasilkan draf parsial. Draf yang berhasil menuju halaman tinjau, bukan pengesahan.

## Tinjau, ajukan dan perbaiki

Halaman **Tinjau kelengkapan pengajuan** menunjukkan status registrasi, kelengkapan yang dihitung, status field/sektor, kandidat kemiripan dan riwayat. **Prasyarat uji terpenuhi** bukan status resmi yang disahkan. Draf baru tanpa bukti tetap **Perlu pelengkapan**, sehingga tombol pengajuan belum aktif.

Untuk mencoba alur lengkap, gunakan contoh draf yang dibuat perintah demo: pencatat keluar, pemeriksa masuk, buka contoh pada Registri Induk. Nilai metadata bukti sintetis untuk klaimnya melalui **Catat penilaian klaim uji**. Memadai hanya berlaku untuk klaim/versi uji itu, bukan seluruh profil. Jika ada kandidat, catat pemeriksaannya sesuai kondisi; kemiripan tidak menggabungkan Unit.

Pencatat masuk kembali dan mengajukan setelah prasyarat terpenuhi. Pemeriksa kemudian dapat **Mulai pemeriksaan**, memilih alasan uji dan **Kembalikan untuk perbaikan**. Pencatat membuka **Revisi draf**, memperbaiki, lalu menyimpan versi baru. Pemeriksa menilai ulang klaim pada versi baru sebelum pencatat **Ajukan ulang**. Riwayat sebelumnya tetap tersimpan. Tidak ada tombol sahkan C2/field atau ekspor.

Jangan membuka profil yang sama pada dua tab untuk sengaja menimpa data: jika muncul konflik versi, muat versi terbaru dan periksa perubahan sebelum menyimpan lagi. Konfirmasi kata sandi bila diminta; mandat/sesi kedaluwarsa tetap ditolak. Keluar melalui tombol logout.

## Pemeriksaan pengembang berikutnya

`composer test` menjalankan tes tanpa database. `composer test:mysql` memakai database **test khusus SIJAI UMKM** dan dapat membangun ulang skemanya; jangan jalankan bersamaan dengan demo/QA yang memakai database test. Tidak pernah menjalankan fresh/rollback pada database dev. Tidak perlu migrasi baru untuk B3.2. Pengujian browser sementara pada tahap ini menggunakan test, lalu dibersihkan melalui migrator test yang sudah dibatasi.

Jangan menyalin .env/.env.testing, cookie, kata sandi atau isi log ke laporan/ZIP. ZIP perubahan bukan pemasang mandiri: terapkan pada baseline yang diterima dan gunakan dependensi terkunci yang sudah tersedia. Hasil dan bukti pemeriksaan ada pada [laporan 34](34-laporan-hasil-g1b32.md).
