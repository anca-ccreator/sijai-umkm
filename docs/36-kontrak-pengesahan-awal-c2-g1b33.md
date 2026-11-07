# Kontrak pengesahan awal C2 lokal G1-B3.3

Tanggal **7 November 2026**. Dasar: persetujuan terbatas pemilik produk pada lampiran chat G1-B3.3. Baseline G1-A/B1/B2/B3.1/B3.2 diterima dengan catatan hasil MySQL, HTTP dan browser belum diverifikasi secara independen. Kontrak ini menerjemahkan izin C2 **lokal/sintetis**, bukan mengubah keputusan bisnis atau memberi izin produksi.

## Prinsip yang tetap

KB-01–KB-18 dan DT-003 A3+B1+C2, DT-005 C+F+H2, DT-007 C, DT-009 C+B2+V2+K2 dan DT-011 C+D1+M1+E1 tetap. Satu SSOT, ID internal, M:N, lokasi/cabang sesuai induk, pelayanan melalui petugas, NIB opsional dan pembuat berbeda dari pengesah awal dipertahankan. Konflik E1–KB-11 tetap terbuka; tidak ada unduh/ekspor bisnis.

C2 memutus paket minimum induk pada revisi/versi yang diperiksa. C2 tidak mengesahkan NIB, semua field, produk/pengukuran, sektor atau seluruh agregasi DT-007. Tidak membangun pengesahan field operasional, koreksi penuh K1–K4, pangan lengkap, impor/merge, integrasi, audit eksternal, data nyata, server PDN/cPanel atau deployment.

## Katalog B1 dan minimum C2 sintetis

`registration_catalogs` B2 tetap menjadi standar A3/pengajuan yang berversi dan tidak ditimpa. `registration_initial_catalogs` baru secara eksplisit menetapkan paket minimum **uji C2** untuk satu versi katalog B2. Persetujuan katalog pengajuan tidak otomatis menjadi persetujuan katalog C2.

Katalog C2 menyimpan identitas internal, versi, rujukan katalog B2, kelompok minimum, kode klaim wajib, tujuan, sumber sintetis, persetujuan uji dan masa efektif. Harus ada tepat satu katalog C2 sah/efektif yang sesuai. Tidak memilih versi terbaru secara otomatis saat dua aturan bertumpang tindih.

Minimum teknis lokal mengikuti lima kelompok A3: penanda/nama, sumber, pihak dan relasi, lokasi, kegiatan. Pembuat/waktu tetap dari server. Semua klaim formal wajib pada katalog B1 yang dirujuk harus tercakup, tanpa mengurangi daftar B1. NIB tidak masuk kewajiban minimum dan tidak menjadi bukti tunggal. Daftar kosong, belum disetujui, tidak sesuai, kedaluwarsa atau ambigu menghasilkan **UNKNOWN — Belum dapat dinilai**, bukan lulus dari daftar kosong/persentase.

Contoh hanya memakai klaim `SYNTHETIC_IDENTITY_RELATION` dan metadata berjenis `SYNTHETIC_FORMAL`. Ini simulasi paket klaim/relasi, bukan ketetapan jenis dokumen pemerintah atau anggapan bahwa dokumen identitas Orang membuktikan kepemilikan usaha. Dokumen formal alternatif sintetis dapat memadai tanpa NIB bila dinilai sesuai katalog uji. Tidak ada unggah/isi dokumen nyata. Checksum hanya format/rujukan metadata sintetis; bukan pemeriksaan berkas dokumen asli.

Penilaian klaim harus merujuk revisi data berjalan, katalog dan kode klaim yang tepat. Bukti diperiksa ulang untuk objek Unit, tujuan, jenis, flag sintetis, referensi/checksum, tanggal penerimaan dan masa berlaku. Penilaian revisi lama tidak mengesahkan revisi baru. Penilaian terakhir yang konflik/tidak memadai menahan kesimpulan positif. Kandidat relevan harus selesai; cakupan baca kandidat yang tidak cukup menghasilkan belum dapat dinilai tanpa membocorkan fieldnya.

## Kontrak status dan keputusan lokal

| Kondisi/tindakan | Hasil registrasi | Konsekuensi dan jejak |
| --- | --- | --- |
| A3 lengkap disimpan | DRAFT | Tetap alur B2; belum induk disahkan |
| Pengajuan memenuhi B1 | SUBMITTED | Boleh diperiksa pengesah awal yang berwenang |
| Pemeriksa B2 memulai | IN_REVIEW | Pemeriksaan berlangsung, bukan pengesahan |
| C2 APPROVED, paket READY | INITIAL_APPROVED | Paket minimum induk disahkan sintetis; keputusan, bukti rujukan, izin, riwayat, audit/outbox dicatat |
| C2 REJECTED | INITIAL_REJECTED | Alasan dan versi tersimpan; tidak ada pembukaan ulang lewat fitur tahap ini |
| C2 RETURNED | NEEDS_CORRECTION | Pencatat dapat revisi dan ajukan ulang melalui B2; keputusan pengembalian tetap tersimpan |
| Paket kurang/konflik/kandidat belum selesai | INCOMPLETE (hasil hitung) | APPROVED ditolak; pengembalian/penolakan beralasan tetap dimungkinkan |
| Katalog/prasyarat tidak cukup | UNKNOWN (hasil hitung) | APPROVED ditolak; tidak dianggap sah karena aturan belum tersedia |

READY/INCOMPLETE/UNKNOWN adalah hasil evaluasi saat ini, bukan pengesahan baru. Keputusan C2 hanya dari SUBMITTED atau IN_REVIEW. Pengesah C2 dapat memeriksa pengajuan langsung tanpa diwajibkan menjadi pemeriksa B2. Draf tidak dapat langsung disahkan. Status field tetap **DRAFT_UNVERIFIED** dan sektor **NOT_STARTED** setelah C2.

INITIAL_APPROVED/INITIAL_REJECTED ditutup dari edit/pengajuan ulang B2 pada tahap ini. Ini batas implementasi lokal, bukan aturan penolakan selamanya, SOP arsip atau finalisasi seluruh enum/transisi DT-033. Pembukaan ulang/koreksi keputusan final perlu kontrak/izin berikutnya. Penilaian prasyarat yang berubah belakangan ditampilkan terpisah dari riwayat keputusan; tidak menulis ulang keputusan sah terdahulu atau menyatakan semua agregasi tetap memenuhi.

Pengembalian oleh pemeriksa B2 tetap memakai REVIEW_REGISTRATION dan riwayat B2. Keputusan RETURNED oleh pengesah C2 memakai APPROVE_INITIAL dan menyimpan record keputusan C2 tersendiri. Keduanya berjejak, tidak memberikan mandat lintas fungsi secara otomatis.

## Kewenangan dan batas browser

Auth Laravel/SessionActor menjadi sumber aktor dan sesi. Katalog/tujuan, organisasi/sumber mandat, lingkup dan waktu diambil server. APPROVE_INITIAL harus mencakup field alur, objek Unit, wilayah, sektor, sensitivitas, tujuan dan waktu yang sesuai. D1 tidak memberi pengesahan. M1 mempertahankan batas asal setiap izin. Pembuat pada registrasi maupun Unit tidak boleh mengesahkan profilnya sendiri, termasuk melalui gabungan peran/admin.

Halaman C2 membutuhkan baca semua kelompok paket, izin sensitif tambahan jika relevan dan VIEW_EVIDENCE atas field klaim. Halaman hanya memproyeksikan ringkasan klaim yang diizinkan; isi/ID/checksum dokumen, ID mandat dan identitas aktor internal tidak dikirim ke HTML. Lihat [matriks 37](37-matriks-kewenangan-c2-g1b33.md).

Rute GET `/registri/{registration}/pengesahan-awal` menampilkan pemeriksaan. Tiga POST dengan akhiran `/sahkan`, `/tolak`, `/kembalikan` menentukan jenis keputusan pada controller server. Browser tidak mengirim status resmi/aktor/mandat/waktu. Isian teknis hanya request ID, versi registrasi, sidik katalog, alasan terstruktur dan token CSRF. Sidik katalog adalah hash untuk mendeteksi perubahan aturan setelah halaman dibuka, bukan izin memilih aturan bebas. Semua nilai tetap diverifikasi server.

## Transaksi dan penyimpanan

RegistrationService menggunakan ulang command/otorisasi/versi/idempotensi B2, ditambah evaluasi C2. Mandat APPROVE_INITIAL diperiksa ulang setelah evaluasi paket dan sumber izin terakhir itu dicatat. RegistrationService tidak diganti. Gateway sesi, CSRF, batas loopback, konfirmasi kata sandi dan audit B3.1/B3.2 dipertahankan. Halaman C2 tidak membutuhkan JavaScript.

Versi registrasi dan sidik katalog usang ditolak. ID permintaan yang sama dengan isi sama memberi hasil yang sama tanpa menambah keputusan/audit sukses bisnis. Pemakaian ID sama untuk isi berbeda ditolak. Penguncian registrasi/Unit dan keunikan pasangan registrasi–versi yang diperiksa mencegah dua keputusan untuk versi yang sama. Setelah final, perubahan draf biasa tidak membuka kembali statusnya.

Satu transaksi menyimpan keputusan C2, rujukan bukti, status/versi, sejarah, sumber otorisasi, command idempotensi, audit dan outbox. Audit/outbox wajib gagal berarti seluruh perubahan terkait dibatalkan. Upaya ditolak dicatat setelah rollback tanpa menyimpan keputusan parsial. Salinan audit independen tetap [rancangan 28](28-rancangan-salinan-audit-independen.md); tidak ada pengiriman/worker eksternal.

| Tambahan fisik | Isi |
| --- | --- |
| registration_initial_catalogs | Konfigurasi minimum C2 sintetis berversi/efektif |
| registration_initial_decisions | Hasil/alasan, revisi/versi diperiksa dan hasil, katalog/sidik, aktor/waktu keputusan |
| registration_initial_evidence | Rujukan penilaian klaim/dokumen/checksum yang menjadi jejak keputusan; bukan isi dokumen |

Satu migrasi maju `2026_11_07_000010_add_initial_registration_decisions.php` menambah tiga tabel dan enam trigger larangan UPDATE/DELETE. Sembilan migrasi lama tidak diubah. Total menjadi 10 migrasi, 42 tabel termasuk migrations dan 35 trigger per database lokal khusus. Akun runtime mendapat SELECT/INSERT pada tiga tabel baru, tanpa UPDATE/DELETE/DDL/GRANT. Pemasangan hanya maju pada dev; fresh/rollback hanya pada test melalui migrator yang sudah dibatasi. Tidak ada paket/seeder/database baru.

## Batas penerimaan

Tes mencakup 16 butir mandat, termasuk positif tanpa NIB, self-approval/multi-peran, mandat/cakupan, bukti/versi/katalog, pemisahan status, replay/konkurensi, audit/rollback dan kerahasiaan. Hasil aktual pada [laporan 39](39-laporan-hasil-g1b33.md); rencana tes bukan otomatis hasil lulus.

Nama OPD, petugas/hak nyata, standar dokumen/risiko/SOP, pilot, hukum/JRA, referensi sektoral dan hosting tetap menunggu penetapan/bukti. Katalog C2 belum mempunyai editor/lifecycle operasional; katalog uji dibatasi masa efektif, aturan ambigu ditahan. Daftar lokal/pencarian dan editor field sebagian masih mengikuti keterbatasan B3.2. Izin hanya G1-B3.3 lokal/sintetis; G5/G7, produksi dan fase berikutnya tidak diberikan.
