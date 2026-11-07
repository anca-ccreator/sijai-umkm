# Laporan hasil fondasi database dan domain G1-B1

Tanggal **6 November 2026**. Pemilik menerima G1-A sebagai baseline pengembangan dan menyetujui G1-B1 secara terbatas. **G1-B1 selesai pada batas fondasi lokal/sintetis. G1-B2/B3, G5/G7 dan produksi belum diizinkan.** Model KB-01–18 serta DT-003/005/007/009/011 dipertahankan.

## Ringkasan hasil

- Baseline awal bersih: 73 file sumber dalam ZIP G1-A cocok hash; tidak ada tambahan sumber aplikasi yang belum terdokumentasi.
- MySQL asli **8.4.13** tersedia pada instance khusus di 127.0.0.1:33070, bukan MariaDB/SQLite. Database dev/test, akun runtime/migrator dan kredensial masing-masing terpisah.
- Enam migrasi membentuk **22 tabel fondasi + satu tabel riwayat migrasi**, dengan ID internal ULID, relasi pihak–unit M:N, katalog field berversi, pemilik, mandat/cakupan, metadata sintetis dan audit/outbox.
- **43 tes MySQL lulus, 168 assertions**, termasuk migrasi ulang/rollback/rebuild dan dua proses penetapan pemilik serentak. **10 tes regresi tanpa DB lulus, 56 assertions**. Total 53 kasus/224 pemeriksaan, bukan seluruh tes KB/DT/MVP.
- Build dan sintaks PHP lulus; HTTP halaman/health/aksi Livewire 200. Tampilan G1-A dipertahankan. Preview HTTP sudah dihentikan; MySQL khusus tetap tersedia untuk pengembangan.

Assertions berarti pemeriksaan hasil dalam tes. Hasil fondasi ini tidak mengesahkan profil/field UMKM nyata, katalog organisasi atau kesiapan produksi.

## Instance lokal dan keamanan

Sumber ZIP resmi MySQL: [halaman 8.4 LTS](https://dev.mysql.com/downloads/mysql/8.4.html?os=3). MD5 unduhan **7B94489D5524DEA9B27097068BEA25A8** cocok sumber; SHA-256 **E9CD98B1D23F122987B1AFCA26AD942EFEC5891481103D48AE3CDE237FA3EA54**. Tanda tangan binary valid. Unduhan terputus sempat dilanjutkan; hanya paket akhir yang telah diverifikasi digunakan.

Tidak mengubah XAMPP/Laragon, PATH, service global atau hosting. Listener hanya loopback/port khusus; MySQL X, local_infile, file impor/ekspor server dan event scheduler tidak diaktifkan. Binari/data/log/kredensial berada di direktori privat di luar repository. .env/.env.testing diabaikan dan hak bacanya dibatasi. Nilai password/key tidak dicetak.

Akun migrator hanya mengelola schema khusus miliknya; runtime tidak memakai root, tidak mempunyai DDL/GRANT, dan tidak bisa mengubah/menghapus audit atau keputusan. Config guard memeriksa lingkungan/host/port/nama database/akun, kemudian identitas MySQL/UUID sebelum operasi. [Panduan lokal](20-operasi-mysql-lokal-g1b1.md) mencatat cara start/stop/migrasi/test dan batas penyiapan ulang.

Pembuatan akun awal dilakukan melalui bootstrap privat setelah akun root lokal menolak akses TCP dengan resolusi nama dimatikan. Instance yang baru dibuat direstart secara khusus; akun hanya loopback, file bootstrap berisi rahasia dibuang sesudah verifikasi. Shutdown/start normal kemudian berhasil diuji tanpa file bootstrap. Tidak memulihkan/reset database aplikasi lain.

## Skema dan batas domain

| Kelompok | Isi |
| --- | --- |
| Identitas internal | users, organizations, organization_memberships, roles, role_actions |
| Cakupan | scope_nodes dan scope_paths; hierarki terkonfigurasi fiktif, bukan nama/prefix atau wilayah resmi |
| Identitas pihak/usaha | parties, people, legal_entities, business_units, party_unit_links; akun tetap berbeda dari Orang/Unit |
| Katalog | field_catalogs sebagai kunci stabil, field_definitions berversi dan field_ownerships berscope/masa/mandat/transisi |
| Sumber izin | mandates, base_permissions D1 dan access_blocks |
| Uji keputusan | documents metadata fiktif dan foundation_decisions; tidak ada isi dokumen atau nilai bisnis resmi |
| Audit | audit_events immutable dan audit_outbox pending, satu transaksi dengan keputusan |

Keempat model relasi dan akun disesuaikan dengan ULID/schema. Tidak ada NIK/NIB/email wajib atau kunci eksternal. Objek Unit pada fixture adalah penanda uji fondasi, **bukan draf Registri Induk di bawah A3 yang dianggap sah**. Lokasi/kegiatan, A3/B1/C2 operasional, pengukuran pangan, koreksi V2/K1–K4 dan agregasi DT-007 belum dibangun.

Mandat pembuat/pengesah/field dibedakan. Layanan internal pengujian tidak mempunyai rute login, administrasi, pengesahan bisnis atau API baru. Identitas aktor harus diberikan pemanggil server terpercaya; pengikatan ke sesi terautentikasi adalah prasyarat antarmuka berikutnya, bukan menerima actor_id dari browser. Standar bukti nyata belum ditetapkan; pemeriksaan dokumen sintetis hanya mencocokkan referensi objek/tujuan, bukan mengganti B1 dengan boolean atau mengesahkan bukti formal nyata.

## Kewenangan dan integritas

Server mengambil aktor aktif, keterkaitan organisasi, field/definisi/sensitivitas, objek, peran, tindakan, tujuan, cakupan dan masa sumber dari database. M1 memeriksa seluruh mandat aktif tanpa menyilangkan batas asal. D1 berasal dari katalog organisasi, berlaku bagi akun yang mempunyai keterkaitan organisasi sah, dan pada subset ini hanya katalog baca INTERNAL yang disetujui secara sintetis pada subset B1; tidak membuat hak dasar OPD nyata atau hak pengesahan/sensitif otomatis.

APPROVE_INITIAL menolak pembuat yang sama meski mempunyai beberapa peran. APPROVE_FIELD memerlukan tepat satu pemilik aktif dan mandat dari organisasi pemilik; satu petugas sah cukup. Tidak ada superuser koordinator/admin/pemasok. Tindakan di luar subset fondasi ditolak; tidak mengklaim seluruh 19 tindakan DT-011 telah diimplementasikan.

Penetapan pemilik memakai kunci field stabil dan penguncian transaksi, termasuk irisan umum–anak dan batas waktu [awal, akhir). Trigger MySQL juga mengunci katalog dan menolak INSERT pemilik beririsan, serta melindungi riwayat pemilik/keputusan/audit dari UPDATE/DELETE. Waktu teknis uji memakai UTC/mikrodetik, bukan penetapan waktu layanan DT-034. Katalog/H2 operasional, pembatalan/peralihan resmi dan SOP tetap menunggu penetapan/fase lanjutan.

Kontrol ini bukan jaminan kebal administrator infrastruktur yang dapat mengubah schema/trigger/hak. Tidak ada hak organisasi nyata yang ditetapkan dari fixtures.

## Audit transaksi dan hasil uji

Keputusan sintetis, event operasional dan outbox harus commit/rollback bersama. Event mempertahankan ID stabil, referensi aktor/organisasi/peran/mandat/versi, target/field/dokumen, waktu/hasil/alasan terstruktur dan versi. Tidak memuat nilai NIK/password/token atau isi dokumen.

Replay dengan konteks sama tidak menggandakan keputusan/event, tetapi tetap memeriksa hak terkini; ID sama dengan konteks berbeda ditolak. Penolakan otorisasi tercatat sebagai DENIED, tanpa versi sesudah palsu atau keputusan berhasil.

Outbox masih pending: **tidak ada pengiriman, retry worker atau salinan independen KB-12 yang diklaim selesai**. Tidak ada koneksi layanan audit eksternal. Riwayat bukan backup dan tidak menetapkan retensi/JRA.

| Pemeriksaan | Hasil aktual |
| --- | --- |
| composer test | 10 lulus / 56 assertions, tanpa DB; satu pemeriksaan lama tentang ketiadaan folder migrasi disesuaikan karena migrasi kini diizinkan |
| composer test:mysql | 43 lulus / 168 assertions, sekitar 31,86 detik termasuk DDL dan proses serentak |
| Migrasi | Enam migrasi dev/test berhasil; ulang no-op, rollback enam langkah dan rebuild test lulus |
| Irisan pemilik | Cakupan umum/anak ditolak; cakupan terpisah boleh; batas waktu berurutan dan peralihan mendatang benar |
| Konkurensi nyata | Dua proses PHP/MySQL terpisah, satu hasil created dan satu rejected; satu owner/event/outbox |
| Otorisasi negatif | Tanpa mandat, salah role/field/objek/wilayah/sektor/tujuan/sensitivitas, akun/membership tak aktif, masa habis/belum mulai/pencabutan/nonpemilik ditolak |
| D1/M1/larangan | Katalog D1 wajib, tidak memberi sahkan; dua mandat tidak silang scope, larangan eksplisit mengalahkan grant |
| Pemisahan tugas | Pembuat awal sendiri ditolak; verifier berbeda tidak memperoleh hak field; pembuat dengan mandat field biasa boleh sesuai KB-07 |
| Audit wajib gagal | Injeksi gagal setelah INSERT audit dan kegagalan INSERT MySQL sungguhan menggagalkan keputusan; penetapan pemilik juga rollback bila audit gagal |
| Hak database | Runtime ditolak UPDATE/DELETE audit dan CREATE TABLE; schema lain/host lain/SQLite/root/produksi ditolak pengaman |
| Regresi tampilan | HTTP halaman, health dan POST Livewire 200; penghitung sintetis 1. Tes halaman saat MySQL dikonfigurasi tidak menghasilkan query |
| Sintaks PHP | 51 file tanpa kesalahan |
| composer validate --strict | Lulus; tidak memasang paket baru atau mengubah versi lock |
| Build | Berhasil; Vite 7.3.7, CSS 18,04 kB/gzip 4,44 kB |
| Data akhir | Dev dan test masing-masing nol user/keputusan/event setelah fixtures dibersihkan; tidak ada data nyata |

Uji awal menemukan pembacaan FOR UPDATE terhadap keputusan immutable memerlukan hak SQL yang sengaja tidak diberikan; diganti pembacaan shared lock tanpa melonggarkan hak. Koneksi uji kini ditutup setelah tiap kasus agar tidak menumpuk. Penambahan snapshot tujuan/versi definisi audit disertai migrasi baru; perintah test:mysql kini menyiapkan migrasi database uji terlebih dahulu agar schema tidak tertinggal. D1 diselaraskan dari grant per akun menjadi katalog organisasi; migrasinya menolak katalog lama yang terisi agar tidak memperluas hak secara otomatis tanpa peninjauan. Kasus-kasus terkait kemudian lulus. Sumber Tailwind dibatasi ke template sumber, sehingga cache hasil tes tidak ikut mengubah build; desain halaman tidak ditulis ulang.

Tidak melakukan pemeriksaan visual browser baru; bukti antarmuka tetap HTTP/tes Livewire. Hasil audit dependensi G1-A tidak dipakai sebagai klaim audit keamanan server/produksi. Ketiadaan perubahan paket dibuktikan hash lock tetap.

## Perubahan dan penyerahan

Kode baru meliputi enam migrasi, pembatas koneksi, clock/rentang waktu, mesin izin/cakupan, layanan pemilik/keputusan sintetis, audit/outbox, model relasi, suite MySQL/fixtures/worker konkurensi dan skrip start/stop instance khusus. G1-A dipertahankan; tidak ada rewrite, rute bisnis atau ekspor.

Dokumentasi baru: kontrak G1-B1 (19), panduan lokal (20), laporan ini (21), [manifest perubahan](22-manifest-perubahan-g1b1.md). Panduan/status arsitektur, baseline, backlog dan modul diselaraskan; sumber rinci KB/RB/T tetap. Status izin DT-028/G1 diperbarui hanya ke persetujuan G1-A dan G1-B1, bukan memilih ulang model.

ZIP memuat sumber baru/berubah dan manifest saja; tanpa .env/key/kredensial, binari/datadir/dump MySQL, dependensi/runtime, metadata Git atau ZIP lama. Hash tiap entri harus cocok sumber final sebelum penyerahan.

## Batas setelah selesai

Hentikan pada G1-B1. Usulan G1-B2 harus merinci katalog/status/standar bukti uji dan jalur registrasi A3/B1/C2 setelah kewenangan/audit terkait diterima. G1-B3/pangan/koreksi/agregasi atau fitur lanjut memerlukan izin scope masing-masing.

E1 tetap **C+D1+M1+E1**, konflik KB-11 tetap terbuka dan unduh/ekspor diblokir. OPD/petugas/wilayah/katalog nyata, bukti/SOP/risiko/retensi/JRA/PDP/hosting/operasi belum ditetapkan. Tidak menganggap penerimaan G1-A sebagai persetujuan seluruh G0/G2/G3/MVP. G5/G7 belum lulus dan tidak ada deployment, PDN/cPanel, OSS/Dukcapil, impor, program bantuan, marketplace atau pembayaran.
