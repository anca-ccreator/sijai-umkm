# Laporan hasil G1-B3.3 — C2 lokal sintetis

Tanggal **7 November 2026**. **SELESAI PADA BATAS G1-B3.3 LOKAL/SINTETIS**. Baseline sampai B3.2 diterima pemilik dengan catatan MySQL/HTTP/browser belum diverifikasi independen. Pengujian Codex ini tidak menggantikan verifikasi independen, audit keamanan formal atau kesiapan produksi.

## Hasil

C2 memakai kembali RegistrationService B2, autentikasi Laravel dan SessionRegistryGateway. Pengesah bermandat berbeda dari pembuat dapat memutus APPROVED/REJECTED/RETURNED atas paket minimum induk. Katalog C2 sintetis sah/berversi terpisah dari persetujuan pengajuan. Kosong/tidak sah/ambigu menghasilkan UNKNOWN, bukan lulus. NIB opsional. Field DRAFT_UNVERIFIED dan sektor NOT_STARTED tetap setelah pengesahan induk.

[Kontrak status/katalog/transaksi 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks kewenangan/kesiapan field 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md) adalah penyerahan lengkap. Manifest mencantumkan seluruh file baru/berubah; tidak ada sumber dihapus/dipindah.

Satu migrasi baru **2026_11_07_000010_add_initial_registration_decisions.php** menambah tiga tabel dan enam trigger append-only. Sembilan migrasi lama tidak berubah. Dev hanya migrasi maju; fresh/rollback hanya test. Runtime tambahan hanya SELECT/INSERT pada tiga tabel C2, tanpa UPDATE/DELETE/DDL/GRANT. Tidak ada paket, seeder, database baru atau rewrite.

## Bukti pengujian

Sebelum coding, **188 sumber** cocok dengan baseline/arsip sebelumnya, tanpa perubahan belum tercatat. ZIP B3.2 CRC/hash cocok; SHA-256 arsip: 584B90D837E2CB8FB37EF4BA63CB37CD2A1B4E5EB1D8640226A5F14C53EABCE8. Regresi awal **164 MySQL/1.162 assertions + 10 tanpa DB/56 assertions** lulus sebelum perubahan.

| Pemeriksaan final | Hasil |
| --- | --- |
| composer test:mysql | **217 tes, 1.512 assertions LULUS**, 4 menit 10,069 detik |
| composer test | **10 tes, 56 assertions LULUS**, tanpa DB |
| Total | **227 tes, 1.568 assertions LULUS** |
| Tambahan C2 | 53 tes/350 assertions: 36 domain, 12 HTTP, dua konkurensi, tiga demo |
| Regresi lama | Seluruh 164 MySQL dan 10 tanpa DB dipertahankan; tes jumlah migrasi disesuaikan dari 9 menjadi 10, tidak mengurangi kasus |
| PHP | 105 file lulus pemeriksaan sintaks |
| Frontend | Build Vite berhasil; dependensi/lock tetap |
| Keamanan dependensi | Composer audit terkunci: 0 advisory/0 abandoned setelah retry gangguan jaringan; npm audit: 0 kerentanan yang dilaporkan |
| Browser aktual | Login tiga akun, penilaian metadata formal, pengajuan tanpa NIB, tinjau C2, pengesahan, riwayat dan logout berhasil; konsol yang diperiksa tanpa error/warning |

Assertions adalah pemeriksaan otomatis terhadap hasil yang diharapkan. HTTP diuji melalui kernel Laravel dengan CSRF aktif. Dua kasus konkurensi memakai dua proses PHP dengan sesi sintetis tepercaya sisi server yang memanggil gateway; bukan dua browser jaringan atau uji beban produksi. Tes ini subset kontrak lokal, bukan seluruh T sumber KB/DT atau seluruh MVP lulus.

## Pemetaan 16 kriteria penerimaan

| Butir | Bukti |
| --- | --- |
| 1. Pengajuan memenuhi katalog dapat diperiksa | Positif domain/HTTP dan browser C2 berizin |
| 2. Pembuat tidak boleh mengesahkan sendiri | Domain dua peran dan HTTP pembuat ditolak |
| 3. Tanpa APPROVE_INITIAL ditolak | GET/POST ditolak setelah mandat dinonaktifkan |
| 4. Masa/pencabutan/cakupan | Sembilan kasus mandat, serta cek ulang setelah evaluasi paket dan M1 tanpa silang izin |
| 5. Bukti objek/klaim/versi/tujuan | Bukti salah objek/tujuan/jenis/masa, klaim lain, konflik terbaru dan revisi memerlukan evaluasi baru |
| 6. Katalog belum terdefinisi | Delapan kasus minimum tak tersedia/tidak sah/kosong dan dua katalog aktif: UNKNOWN, APPROVED ditolak |
| 7. NIB kosong | Positif domain dan browser tanpa NIB, dengan bukti formal alternatif sintetis sesuai katalog |
| 8. Induk bukan seluruh field/sektor | Status field/sektor diperiksa tetap, termasuk setelah keputusan browser |
| 9. Versi usang | Versi registrasi/sidik katalog lama ditolak tanpa keputusan |
| 10. Konkurensi | Dua proses, request sama/berbeda: tepat satu keputusan/transisi/audit sukses bisnis |
| 11. Replay | Request sama/isi sama tidak menambah keputusan/audit sukses; isi berbeda ditolak |
| 12. Audit gagal | Kegagalan AuditWriter dan SQL outbox FK membatalkan keputusan/bukti/status/riwayat |
| 13. Tolak/kembalikan berjejak | REJECTED/RETURNED domain/HTTP; return → revisi → nilai ulang → ajukan ulang → C2 menjaga riwayat |
| 14. Kerahasiaan | Tanpa baca/sensitivitas/metadata bukti ditolak; ID/checksum dokumen, ID mandat/aktor dan field tersembunyi tidak diproyeksikan |
| 15. Regresi | Semua tahap sebelumnya lulus pada suite final |
| 16. Pembatasan | Sintetis/local-only; tidak ada E1/impor/integrasi/field operasional/data nyata/produksi/deployment |

## QA browser yang benar-benar dilakukan

Memakai skill computer-use dan browser in-app pada **127.0.0.1:8313**, database test khusus. Draf demo dimulai tanpa penilaian atau pengesahan otomatis. Pemeriksa menilai metadata klaim; pencatat mengajukan; akun pengesah yang berbeda memeriksa dan memutus. Versi 3 → 4 tercatat sebagai pengesahan induk, field/sektor tetap terpisah. Dua JPEG sumber ada di [pemeriksaan C2](bukti-g1b33/01-pemeriksaan-c2.jpg) dan [induk disahkan](bukti-g1b33/02-induk-disahkan.jpg).

QA ini satu browser/ukuran desktop default. Tidak mengklaim pengujian ponsel C2, seluruh hasil negatif lewat browser, aksesibilitas formal atau verifikasi independen. Hasil negatif/return/reject/rollback diuji otomatis. Kata sandi QA acak hanya sementara di lokasi privat luar repository, tidak dicetak. Logout dilakukan, tab ditutup dan server sementara dihentikan; data QA test dibersihkan melalui migrator test.

## Temuan dan perbaikan

1. Dua suite sempat dijalankan bersamaan pada schema test dan bertabrakan ketika tabel dibentuk ulang. Hasil itu tidak dipakai sebagai bukti lulus; proses dihentikan, hanya schema test dibangun ulang dan tes final diulang berurutan. Dev/produksi tidak direset. Panduan menegaskan satu suite/QA per schema test.
2. Penambahan label C2 semula mengubah keterangan draf lama sehingga satu regresi tampilan gagal. Keterangan draf dipertahankan kembali; status induk yang disahkan memakai keterangan terpisah. Seluruh suite final lulus setelah perbaikan, tanpa melemahkan tes lama.
3. APPROVE_INITIAL diperiksa ulang sesudah evaluasi paket; tes membuktikan mandat yang kedaluwarsa selama evaluasi tidak dipakai. Sumber otorisasi keputusan terakhir disimpan.
4. Pengesahan tidak memakai status/browser sebagai sumber kewenangan. Controller menentukan jenis keputusan, alasan dibatasi, CSRF/sesi/konfirmasi tetap berlaku. Snapshot rujukan bukti hanya di database; HTML tidak membawa isi/ID/checksum dokumen.

## Keamanan, konsistensi dan batas berikutnya

Register rinci **06 tidak berubah**, model KB/DT tetap, baseline 10 hanya memperbarui izin DT-028/G1. Nomor 36 DT, delapan gerbang dan 19 backlog tetap. Katalog/label/parameter uji bukan ketetapan organisasi atau enum/SOP operasional. Tidak ditemukan kebutuhan mengganti keputusan bisnis. **Konflik E1–KB-11 masih terbuka** dan ekspor tetap diblokir.

MySQL khusus tetap Community 8.4.13 di 127.0.0.1:33070. Masing-masing dev/test memakai 10 migrasi, 42 tabel termasuk migrations dan 35 trigger. Konfigurasi instance/kredensial tidak diubah; tidak memakai MariaDB/SQLite atau database aplikasi lain. Arsip mengecualikan .env/kunci/kredensial, cookie, runtime/log/build, dependensi, MySQL binary/data/dump, Git dan ZIP lama.

Keterbatasan B3.2 terkait batas daftar lokal, editor izin sebagian dan unggah bukti tetap. Checksum hanya metadata sintetis, bukan verifikasi berkas nyata. Lifecycle/editor katalog C2 dan pembukaan ulang/koreksi keputusan final belum dibangun; dua aturan aktif ambigu ditahan. Salinan audit independen masih rancangan, tidak ada pengiriman eksternal. Kesiapan pengesahan field DT-005/007 belum selesai: perlu pemilik/mandat/katalog/bukti/transisi resmi, lingkup coding dan tes tersendiri; C2 bukan agregasi seluruh profil.

Rekomendasi: tinjau paket dan lakukan verifikasi independen MySQL/HTTP/browser/otorisasi sebelum menetapkan tahap lokal selanjutnya. OPD/petugas/hak nyata, standar bukti/SOP, pilot, hukum/JRA, hosting/kapasitas serta izin data nyata/produksi masih terbuka. **Pekerjaan berhenti pada G1-B3.3**; field operasional, K1–K4 penuh, pangan lengkap, impor/merge, E1, OSS/Dukcapil, PDN/cPanel, audit eksternal, G5/G7 dan deployment tidak dibangun/diaktifkan.

Pemeriksaan akhir setelah pembersihan: dev dan test masing-masing 0 baris data selain catatan migrasi. Tidak ada akun QA tertinggal.
