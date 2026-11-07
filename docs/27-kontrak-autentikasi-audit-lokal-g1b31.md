# Kontrak autentikasi, otorisasi dan audit lokal G1-B3.1

Disusun **6 November 2026**, difinalisasi **7 November 2026**. Dasar: persetujuan terbatas pemilik **G1-B3.1 — Autentikasi, Otorisasi dan Penguatan Audit Lokal**. Pemilik menerima G1-B2 sebagai baseline, dengan catatan pengujian MySQL belum diverifikasi ulang secara independen. Pengulangan tes oleh Codex bukan pemeriksaan independen.

## Batas pekerjaan

G1-A/B1/B2 dipertahankan. Implementasi menambah login/logout/konfirmasi ulang petugas sintetis, pengendalian sesi, pengikatan aktor server, tampilan profil baca-saja berizin, pengujian audit/rollback/outbox dan rancangan salinan audit independen. Tidak memasang paket, membangun ulang aplikasi atau mengubah keputusan bisnis.

KB-01–KB-18, DT-003 A3+B1+C2, DT-005 C+F+H2, DT-007 C, DT-009 C+B2+V2+K2 dan DT-011 C+D1+M1+E1 tetap. Konflik E1 dengan KB-11 masih terbuka; hak baca tidak digunakan untuk membuka endpoint unduh/ekspor sementara konflik belum diselesaikan.

Tidak membuka C2/pengesahan field operasional, koreksi penuh K1–K4, impor historis, program/bantuan/marketplace/pembayaran atau integrasi. Tidak mengakses PDN/cPanel/OSS/Dukcapil/produksi, mengubah kewenangan nyata atau melakukan deployment. G1-B3.2/G5/G7 dan data nyata belum diizinkan.

## Pilihan teknis

Autentikasi memakai session guard, provider, pemeriksaan hash kata sandi, cookie terenkripsi, perlindungan CSRF dan middleware sesi Laravel yang sudah tersedia. Provider lokal memeriksa batas MySQL/UUID sebelum membaca akun dan hanya menerima akun aktif/sintetis. Guard/provider/model dipastikan dari konfigurasi server, bukan input browser. Tidak memakai layanan eksternal, starter kit baru, token API, remember-me, registrasi publik atau reset kata sandi melalui email.

Sesi adalah catatan status masuk di server; cookie menghubungkan browser ke sesi itu. Guard menjaga status autentikasi, sedangkan provider mengambil akun yang sah. Hash kata sandi adalah bentuk pemeriksaan satu arah, bukan penyimpanan kata sandi asli. CSRF melindungi formulir dari permintaan palsu yang memanfaatkan sesi pengguna.

Rujukan utama: [autentikasi Laravel 13](https://laravel.com/framework/docs/13.x/authentication) dan [CSRF Laravel 13](https://laravel.com/framework/docs/13.x/csrf), disandingkan kode framework yang benar-benar terpasang. Login tidak memberikan peran atau mandat bisnis secara otomatis.

Parameter teknis lokal: idle 15 menit, batas sesi delapan jam, konfirmasi kata sandi 10 menit dan lima percobaan per 60 detik untuk login/konfirmasi. Nilai ini **batas pengujian lokal, bukan SOP OPD atau kebijakan operasional final**. Cookie sesi HttpOnly, SameSite Strict, host-only, berakhir saat browser ditutup; penyimpanan sesi file terenkripsi/JSON. ID sesi dan token CSRF diganti saat login/konfirmasi, dan sesi lama dimusnahkan. Logout menghapus sesi dan mengganti token. HTTP hanya loopback; kebijakan TLS/cookie/infrastruktur produksi belum ditetapkan atau diuji.

## Batas browser dan layanan domain

LocalAccessOnly membatasi rute ke lingkungan local/testing, MySQL khusus yang diaktifkan, alamat asal loopback serta host localhost/127.0.0.1/loopback IPv6. Pemeriksaan ini diletakkan sebelum middleware cookie/sesi pada rute terkait. Guard database B1 tetap memeriksa akun/schema/instance yang diizinkan.

SessionActor mengambil identitas dari guard web dan konteks sesi server; tidak menerima ID aktor/OPD/mandat/tujuan/waktu dari permintaan. RejectClientAuthority menolak parameter kewenangan, termasuk bentuk bertingkat/variasi ejaan dan header terkait. Tujuan akses dan katalog field diambil dari registrasi tersimpan; waktu dari clock server. Pemeriksaan ulang status akun, keanggotaan, field, definisi/sensitivitas, wilayah, sektor, tujuan, waktu, larangan dan mandat tetap berlaku pada permintaan berikutnya.

SessionRegistryGateway menjadi batas pemanggilan web ke domain. Profil hanya menerima ID objek, kemudian membentuk proyeksi data yang diizinkan. Nama dan status alur merupakan minimum akses profil ini. Kelompok lain disembunyikan jika tidak diizinkan; nilai aslinya tidak dikirim ke template, HTML, atribut tersembunyi atau JSON. Data sensitif memerlukan izin VIEW_SENSITIVE yang cocok selain baca. Katalog yang cacat/berulang/tidak berlaku tidak memperluas hak.

Adaptor edit sesi tersedia untuk pengujian pengikatan aktor, **tanpa rute atau formulir mutasi bisnis di aplikasi**. Rute adaptor yang dipakai tes hanya didaftarkan oleh kelas tes pada proses PHPUnit, bukan routes/web.php. Layanan internal B2 tetap untuk pemanggil server tepercaya/tes; controller web menggunakan gateway sesi. C2/field operasional tidak ditambahkan ke gateway atau rute.

D1 tetap katalog organisasi sah untuk subset baca INTERNAL; bukan grant per orang atau hak pengesahan/sensitif otomatis. M1 memeriksa seluruh penugasan yang sah dengan batas asal, tanpa menyilangkan field/wilayah/sektor/tujuan antarizin. Peran admin teknis dan gabungan peran tidak membuat superuser, tidak melewati larangan pembuat mengesahkan induknya sendiri dan tidak membuka pengesahan di UI.

## Audit wajib dan keamanan keluaran

Login, penolakan kredensial, pembatasan percobaan, konfirmasi, logout, sesi tidak sah, pemalsuan kewenangan dan akses profil dicatat sebagai metadata. Handle/kata sandi, token, cookie, isi bukti dan nilai bisnis mentah tidak dicatat. Flash input tidak menyimpan kata sandi/handle. Penguncian akun dan hashing memakai fasilitas Laravel; rehash beserta auditnya menjadi bagian transaksi SQL login, sehingga audit login yang gagal membatalkan rehash terkait juga.

Mutasi domain yang diuji melalui sesi tetap atomik dengan riwayat/event/outbox. Audit atau INSERT outbox yang gagal menggagalkan transaksi; antarmuka tidak mengumumkan keberhasilan atau mengirim profil bila audit baca wajib gagal. Penolakan domain dipertahankan setelah rollback bisnis. Pembacaan bukan perubahan versi atau pengesahan. Respons halaman lokal memakai no-store, kebijakan referer, CSP dan pencegah content sniffing.

Sesi file dan database bukan satu media transaksi. Aplikasi tidak mengklaim transaksi terdistribusi antara keduanya. Bila audit login gagal, sesi dibersihkan; bila audit logout gagal, sesi tetap dimusnahkan dan respons melaporkan gangguan. Membatalkan logout agar sesi tetap hidup bukan perilaku yang dipilih untuk kontrol lokal ini. Kehilangan layanan audit tidak dianggap audit berhasil.

Outbox masih pending dalam database sumber. [Rancangan 28](28-rancangan-salinan-audit-independen.md) belum berupa worker/sink/koneksi baru dan tidak membuktikan salinan audit independen tersedia.

## Demo dan penerimaan

[Panduan 29](29-operasi-autentikasi-lokal-g1b31.md) menjelaskan perintah interaktif pembuatan satu demo baca-saja. Seluruh organisasi/akun/field/katalog/izin/profilnya sintetis, masa uji 24 jam dan bukan penetapan OPD atau hak nyata. Tidak ada kata sandi bawaan atau pencetakan kata sandi. Demo tidak dibuat otomatis saat aplikasi dibuka dan tidak menimpa akun/data lama.

[Laporan 30](30-laporan-hasil-g1b31.md) memetakan 10 kriteria persetujuan ke tes dan batas bukti. [Manifest 31](31-manifest-perubahan-g1b31.md) menyertai ZIP sumber/dokumen baru/berubah. Tidak ada migrasi baru pada tahap ini; sembilan migrasi B1/B2 tetap utuh.
