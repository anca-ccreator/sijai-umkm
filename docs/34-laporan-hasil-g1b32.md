# Laporan hasil G1-B3.2 — antarmuka A3 dan pengajuan sintetis

Tanggal **7 November 2026**. **SELESAI PADA BATAS LOKAL G1-B3.2** berdasarkan mandat pemilik produk. Ini hasil pekerjaan dan pengujian Codex, bukan persetujuan produksi atau verifikasi independen. Catatan penerimaan baseline B3.1 bahwa MySQL/HTTP belum diverifikasi ulang independen tetap berlaku.

## Hasil yang dapat digunakan

Registri Induk lokal menyediakan daftar berizin, formulir A3 berulang, tinjau kelengkapan/kandidat, pengajuan, mulai pemeriksaan, pengembalian, revisi dan pengajuan ulang. Akun pencatat/pemeriksa sepenuhnya fiktif. Semua tindakan web melalui autentikasi Laravel, SessionActor/SessionRegistryGateway dan layanan B2. Identitas dan konteks kewenangan ditentukan server.

Pihak Orang/Badan dan hubungan banyak-ke-banyak, lokasi/cabang serta kegiatan memakai model B2 yang sama. NIB boleh kosong, domisili tidak menjadi lokasi otomatis, kandidat nama tidak digabung otomatis. Pengajuan tidak mengesahkan induk/field/sektor. Draf tanpa bukti tetap tertahan; UI hanya menilai metadata bukti sintetis yang sudah disiapkan server dan diizinkan per klaim/versi.

Tidak ada rewrite, paket, migrasi, seeder, database atau akun database baru. Sembilan migrasi dan batas MySQL B1/B2 dipertahankan. Daftar seluruh sumber/tes/dokumen/evidensi baru atau diperbarui beserta SHA-256 ada pada [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada file sumber dihapus atau dipindahkan. Panduan mencoba tersedia pada [dokumen 33](33-panduan-alur-registrasi-g1b32.md), rincian teknis pada [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md).

## Verifikasi baseline dan hasil akhir

Sebelum coding, 162 sumber dibandingkan dengan paket baseline sebelumnya dan tidak ditemukan perubahan yang belum terdokumentasi; integritas ZIP baseline diperiksa. Regresi awal **131 tes MySQL/783 assertions + 10 tes tanpa DB/56 assertions** lulus sebelum perubahan. Assertions berarti pemeriksaan otomatis atas hasil yang diharapkan.

| Pemeriksaan final | Hasil yang diamati |
| --- | --- |
| composer test:mysql | **164 tes, 1.162 assertions LULUS**, 2 menit 52,259 detik |
| composer test | **10 tes, 56 assertions LULUS**, tanpa database |
| Total final | **174 tes, 1.218 assertions LULUS** |
| Tes lama MySQL | Seluruh 131 kasus B1/B2/B3.1 tetap lulus dalam suite final |
| Tes tambahan | 31 kasus UI/HTTP/Livewire (361 assertions), dua kasus konkurensi gateway (18 assertions) |
| Sintaks PHP | 94 file app/bootstrap/config/database/routes/tests/public lulus php -l |
| Build frontend | npm run build LULUS; Vite 7.3.7, CSS 21,40 kB (gzip 4,93 kB) |
| Composer | validate --strict LULUS; audit --locked: 0 advisory, 0 abandoned |
| npm audit | 0 kerentanan yang dilaporkan saat pemeriksaan; bukan jaminan keamanan menyeluruh |
| Rute aplikasi | 18 rute non-vendor; tidak ditemukan rute pengesahan/ekspor/unduh/impor bisnis |
| Browser aktual | Login, A3/validasi, dua pihak Orang+Badan, profil, pengajuan/pengembalian/revisi/penilaian ulang/pengajuan ulang dan logout berhasil |
| Konsol browser | Tidak ada error/warning pada sesi QA yang diperiksa |

Tes HTTP/Livewire memakai kernel Laravel dan muatan JSON permintaan Livewire sebenarnya, bukan sekadar render template. CSRF tetap diaktifkan secara eksplisit pada tes HTTP meskipun Laravel biasanya melewatinya dalam unit test. Uji konkurensi memakai dua proses PHP terpisah dengan sesi aktor sintetis yang disiapkan **server uji**, lalu memanggil gateway; ini bukan dua klien jaringan produksi atau uji beban. Browser aktual terpisah membuktikan interaksi HTTP/cookie/JavaScript lokal. Jumlah tes aplikasi ini tidak menyatakan seluruh T sumber KB/DT atau MVP telah lulus.

## Penerimaan 16 butir mandat

| Butir | Bukti pada suite final/QA |
| --- | --- |
| 1. Petugas berwenang masuk registri | Login sintetis dan halaman konteks sesuai katalog; browser aktual |
| 2. Tamu/tanpa mandat ditolak | Redirect login untuk tamu, 403 bagi akun tanpa mandat; tidak ada draf |
| 3. A3 lengkap menyimpan | Permintaan Livewire dan browser menghasilkan satu draf/revisi beserta audit |
| 4. Pihak/lokasi/kegiatan/sumber wajib | Empat kasus kelompok kosong serta nama pihak/referensi cabang kondisional ditolak tanpa draf/record parsial |
| 5. Kepemilikan bersama | Orang+Badan dan beberapa hubungan tersimpan dengan satu Unit; browser menunjukkan dua pihak |
| 6. Pihak pada beberapa Unit | Referensi pihak yang berizin dipakai kembali tanpa menimpa identitas atau menggandakan pihak |
| 7. NIB kosong | Null tersimpan dan profil menampilkan Belum dicatat |
| 8. Domisili terpisah | Lokasi operasional tidak diisi otomatis dari domisili; diverifikasi data dan profil |
| 9. Kandidat bukan merge | Nama sama menampilkan kandidat, Unit tetap berbeda; penilaian DISTINCT berjejak |
| 10. Pengajuan bukan sah | Status Diajukan; field tetap belum terverifikasi, sektor belum dimulai, tidak ada keputusan C2 |
| 11. Riwayat perbaikan | Submit → review → return → revise → penilaian ulang → resubmit; delapan versi terlihat pada QA contoh |
| 12. Identitas/mandat palsu | Input kewenangan, snapshot diubah dan properti terkunci ditolak; audit integritas, tanpa pemantulan muatan identitas |
| 13. Versi/idempotensi | Versi lama ditolak; replay dan dua proses request sama/berbeda menghasilkan satu transisi/audit sukses |
| 14. Audit gagal rollback | Kegagalan AuditWriter dan kegagalan SQL outbox membatalkan draf/record/riwayat; demo CLI juga rollback bila audit gagal |
| 15. Regresi lama | 131 MySQL dan 10 tanpa DB baseline lulus kembali |
| 16. Batas data/produksi/ekspor | Hanya sintetis, local-only; tidak ada jalur ekspor/unduh/impor/pengesahan, server produksi atau integrasi |

Pengujian juga memeriksa mandat kedaluwarsa/dicabut, lingkup keliru, konfirmasi kata sandi kedaluwarsa, akses sensitif hilang saat formulir terbuka, referensi bukti Unit lain, kehilangan izin melihat bukti, dan token konteks yang dipakai setelah ganti akun. Izin yang berkurang tidak mengirim field tersembunyi kembali melalui respons/snapshot.

## Pemeriksaan antarmuka yang benar-benar dijalankan

Menggunakan skill [computer-use](C:/Users/Pongo/.codex/plugins/cache/openai-bundled/computer-use/26.1103.31037/skills/computer-use/SKILL.md), browser in-app di **127.0.0.1:8312**, database test sintetis. Tampilan desktop/default dan viewport ponsel 390 × 844 diperiksa. Formulir terlihat tersusun ulang, teks/aksi dapat dibaca dan baris pihak dapat ditambah serta diganti menjadi Badan Usaha. Ini pemeriksaan satu browser/dua ukuran, bukan seluruh perangkat atau audit aksesibilitas formal.

| Bukti JPEG | Yang dapat diperiksa |
| --- | --- |
| [01 — Daftar](bukti-g1b32/01-daftar-registri.jpg) | Konteks pencatatan dan registrasi berizin |
| [02 — Formulir desktop](bukti-g1b32/02-formulir-desktop.jpg) | Dua pihak, NIB kosong, domisili/lokasi berbeda; pesan validasi dari percobaan kosong masih tampil sampai simpan berikutnya |
| [03 — Formulir ponsel](bukti-g1b32/03-formulir-mobile.jpg) | Susunan satu kolom pada viewport ponsel |
| [04 — Draf tersimpan](bukti-g1b32/04-draf-tersimpan.jpg) | Draf baru tanpa bukti tertahan, tombol pengajuan nonaktif |
| [05 — Pengajuan ulang](bukti-g1b32/05-pengajuan-ulang.jpg) | Diajukan, delapan versi riwayat, tanpa pengesahan otomatis |
| [06 — Validasi pihak](bukti-g1b32/06-validasi-pihak.jpg) | Nama pihak baru kosong ditandai tanpa menyimpan draf |

Alur QA lengkap memakai contoh yang metadata buktinya disiapkan demo, lalu dinilai pemeriksa. Revisi sumber menahan pengajuan ulang sampai klaim versi baru dinilai. Kata sandi acak hanya berada sementara di tempat privat di luar repository; tidak dicetak/dimasukkan ZIP. Logout dilakukan, tab QA ditutup, ukuran browser direset dan server sementara dihentikan. Perubahan visual kecil: keterangan ruang kerja kini menunjuk Registri Induk agar tidak mengatakan pengajuan seluruh UI belum tersedia.

## Temuan keamanan dan perbaikan

- Permintaan AJAX Livewire memakai JSON dan header framework yang benar; pengamanan header/CSRF tidak dilonggarkan untuk membuat tes lulus.
- Livewire memberi respons sendiri untuk snapshot/properti terkunci yang tidak sah. Audit penolakan ditempatkan pada penanganan respons agar tetap tercatat; respons umum 419/503 tidak memuat data input mentah.
- Penguatan transaksi proyeksi baca semula membuat dua pengajuan bersamaan gagal. Penguncian satu registrasi kini dimulai sebelum Unit, mengikuti urutan domain dan menghindari peningkatan kunci baca bersamaan; dua kasus konkurensi serta seluruh suite final lulus setelah perbaikan.
- Validasi nama pihak baru dan referensi cabang yang kondisional diberi penanda lokal pada formulir. Batas domain B2 tetap memeriksa kembali, tanpa mengubah aturan A3.
- Skrip halaman interaktif memakai CSP safe/nonce; tidak memakai unsafe-eval. Halaman baca/login/tinjau tetap tanpa skrip. Field tidak berizin ditahan sebelum render/hydrate; metadata bukti membutuhkan izin lihat dan nilai.

## Kondisi lokal setelah pengujian

MySQL Community **8.4.13** tetap hanya **127.0.0.1:33070**. Dev `sijai_umkm_g1b1_dev` dan test `sijai_umkm_g1b1_test` masing-masing **39 tabel, 9 migrasi, 29 trigger dan 0 baris data selain catatan migrasi** setelah pembersihan QA/regresi. Fresh/rollback hanya pada database test melalui akun migrator khusus, bukan dev atau database lain. `local_infile=0`, `secure_file_priv=NULL`, `event_scheduler=OFF`; tidak mengubah konfigurasi instance atau hak database. Port QA 8312 sudah tidak mendengar koneksi.

Laravel 13.40.0, Livewire 4.4.8, PHP 8.3.31, Composer 2.10.2, Node 24.13.1/npm 11.8.0 dan lock dependensi dipertahankan. Register 06, sembilan migrasi, layanan RegistrationService/AuthorizationService serta file dependensi/lock/.env.example tidak berubah. Manifest/arsip diperiksa terhadap sumber final; konfigurasi privat, runtime/log/build, vendor/node_modules, binari/datadir/dump dan ZIP lama dikecualikan.

## Konsistensi dan hal terbuka

Model KB/DT tetap; hanya izin DT-028/G1 pada baseline 10 disesuaikan. Nomor 36 DT, delapan gerbang dan 19 backlog dipertahankan. Catatan izin lama diberi konteks riwayat, bukan dihapus. Tidak ditemukan kebutuhan mengubah keputusan bisnis. **Konflik E1–KB-11 tetap terbuka**, tanpa ekspor/unduh. Penilaian klaim sintetis bukan C2 atau pengesahan field; revisi draf bukan K1–K4 atas nilai resmi.

Keterbatasan: daftar lokal 100 kandidat awal, referensi dari 200 relasi awal, 50 baris isian per kelompok; belum pencarian/paginasi lengkap atau bukti kapasitas kabupaten. Formulir penuh membutuhkan izin semua kelompok, belum editor field terpisah untuk izin sebagian. Tidak ada unggah bukti baru; katalog/metadata hanya uji. Salinan audit independen belum diimplementasikan. Tes bukan verifikasi independen, pentest atau uji beban. OPD/petugas/hak nyata, dokumen/SOP/bukti, dasar hukum/JRA, pilot dan hosting/kapasitas produksi belum final.

Rekomendasi setelah B3.2: lakukan peninjauan independen MySQL/HTTP/otorisasi dan hasil paket, kemudian tetapkan mandat lokal berikutnya dengan acceptance test serta prasyaratnya. C2/field operasional, koreksi penuh, sektor pangan lanjutan, sink audit, data nyata, G5/G7 dan deployment memerlukan izin scope tersendiri. **Pekerjaan dihentikan pada batas G1-B3.2; tidak memulai tahap tersebut.**
