# Kontrak MVP dan batas izin coding lokal SIJAI UMKM

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Pembaruan setelah persetujuan G1-A — 6 November 2026:** pemilik produk telah menyetujui fondasi lokal secara terbatas; hasilnya tercatat pada [laporan G1-A](17-laporan-hasil-g1a.md) dan [panduan pemasangan](16-pemasangan-fondasi-lokal-g1a.md). Bagian persiapan di bawah yang menyebut belum diizinkan/Laravel belum dibuat adalah snapshot sebelum persetujuan, bukan status aplikasi saat ini. G1-B/data nyata/produksi tetap belum diizinkan, E1 tetap konflik terbuka.

Tanggal **6 November 2026**. Status **USULAN KONSOLIDASI UNTUK PENINJAUAN**, bukan persetujuan G1 atau penetapan organisasi. Dokumen ini merekonsiliasi docs/12 dalam paket `SIJAI-UMKM-Konsolidasi-MVP-Dan-Prototipe-Coding-2026-11-06.zip` dengan baseline proyek. Paket sumber tetap di Downloads, tidak ditimpa ke aplikasi.

## Ringkasan untuk pemilik produk

Tahap tetap **perencanaan**. Target berikutnya fondasi aplikasi MVP lokal yang teruji, bertahap. Laravel 13/Livewire 4/MySQL/Tailwind dan modular monolith satu repository tetap pilihan teknologi. PHP/Composer/Node/npm tersedia; **MySQL proyek belum terbukti siap**. MariaDB XAMPP bukan pengganti otomatis.

Prototipe PHP merupakan coding awal terpisah. Dua file lolos pemeriksaan sintaks dan **15/15 pemeriksaan bawaan lulus**, tetapi ditemukan delapan kekurangan penting. [Review prototipe](15-review-paket-prototipe-dan-kesiapan-g1.md) membatasi arti hasil itu. **Aplikasi Laravel belum dibuat atau diuji.**

[Kontrak teknis](14-kontrak-teknis-fondasi-lokal.md) cukup konkret untuk mengajukan **G1-A terbatas**, belum memberi izin. A hanya fondasi/dependensi/build/tes tanpa database; B untuk MySQL/domain/persistensi memerlukan izin dan prasyarat tersendiri. Tidak ada instalasi, migrasi atau deployment dilakukan pada persiapan ini.

## Ruang lingkup MVP yang dipertahankan

- Registri PIHAK, ORANG, BADAN_USAHA, UNIT_USAHA, hubungan banyak-ke-banyak/peran/masa, LOKASI_USAHA/cabang dan KEGIATAN_USAHA.
- Profil Umum minimum dan status/referensi NIB; NIB tidak wajib pada draf, pengajuan maupun pengesahan induk. Identitas internal stabil terpisah pengenal eksternal.
- Registrasi petugas A3/B1/C2; pembuat ditunjuk, pengesah awal berbeda pembuat, identitas/mandat/bukti diperiksa dari konteks server terpercaya.
- Akun internal petugas, pemilik field DT-005, hak menurut tindakan/cakupan, privasi dan audit sejak awal, satu pengesah biasa KB-07.
- Status induk/field/sektor terpisah dan agregasi DT-007 per objek/lingkup/tahap, bukan pengesahan baru.
- Bukti per klaim, koreksi K1–K4/V2, konflik nilai oleh OPD pemilik field, sengketa kewenangan melalui mekanisme organisasi/H2.
- Profil Industri Pengolahan Pangan, produk/bahan/peralatan/pengukuran berulang sebagai record terkait. Produksi memiliki produk, nilai numerik, satuan, periode, sumber dan verifikasi; riwayat tidak ditimpa.
- Deteksi/pencegahan kandidat duplikasi aman, pencarian dan laporan dasar berizin; unduh/ekspor E1 tetap tertahan.

Di luar MVP awal/tahap lokal pertama: akun pelaku/masyarakat, marketplace, pembayaran/penyaluran bantuan, program KB-16, impor massal historis, integrasi OSS/Dukcapil, merge historis berisiko dan produksi. Mesin skala KB-10 tetap bergantung DT-031, impor DT-019/032. Tidak membuka Excel historis mentah.

## Rekonsiliasi KB-01–KB-18

| Keputusan | Kontrak yang dipertahankan | Dampak pada backlog |
| --- | --- | --- |
| KB-01 | Kesatuan operasional; cabang tidak otomatis Unit baru | S1-01/02; bukti keterkaitan/pemilik bersama masih perlu rincian |
| KB-02 | Verifikasi terdistribusi; koordinator bukan pengesah global | S2-02/S3-01/02; mandat nyata belum ditetapkan |
| KB-03 | Registrasi bertahap, ID internal bukan NIK/NIB, NIB tidak wajib | S1/S2; tidak menambah nomor eksternal wajib |
| KB-04 | Tepat satu pemilik aktif per kode field/cakupan/waktu | S3-01/02; periksa irisan cakupan |
| KB-05 | Pembuat ditunjuk, pengesah awal berbeda | S2-02; verifier tidak boleh kosong |
| KB-06 | Pelaku dilayani petugas tanpa akun | S0-03/S3-02; tanpa registrasi publik |
| KB-07 | Satu pengesah field biasa berwenang cukup | S3/S4; tidak menambah dua pengesah universal |
| KB-08 | Konflik nilai oleh pemilik, kewenangan melalui organisasi sah | S3-01/S4-03; K4 berbeda H2 |
| KB-09 | Registri Induk/Profil Umum + Industri Pengolahan Pangan | S1–S5 beserta akses/audit/koreksi/laporan |
| KB-10 | KBLI berversi; usulan skala berbeda pengesahan | S1-02; mesin skala belum otomatis aktif, DT-031 |
| KB-11 | Privasi dan akses server menurut kebutuhan/sensitivitas | S3-02/S4-02/S5-03; data nyata menunggu G5 |
| KB-12 | Audit kritis atomik, salinan terpisah kendali | S4-04 menjadi prasyarat sebelum mutasi, bukan fitur terakhir |
| KB-13 | Deteksi/pencegahan duplikat diprioritaskan | Tidak menjadikan nama/skor sama sebagai izin merge |
| KB-14 | Kelayakan hosting berdasarkan bukti | PDN/cPanel BELUM DAPAT DINILAI |
| KB-15 | Impor bertahap/privat/terverifikasi, bukan master OPD | DT-019/032 tetap; tidak membangun modul impor sekarang |
| KB-16 | Program/riwayat layanan sesudah MVP | Di luar tahap fondasi/registri/pangan pertama |
| KB-17 | Operasional berbasis risiko | Target/jadwal/RPO/RTO dan izin operasi belum final |
| KB-18 | Satu SSOT cakupan kabupaten, kapasitas berdasarkan bukti | Tidak menganggap asumsi sebagai statistik/kuota atau hasil load test |

## Keputusan turunan dan konflik terbuka

| Keputusan | Kontrak tetap | Batas rincian |
| --- | --- | --- |
| DT-003 B A3+B1+C2 | A3 lengkap sebelum draf; B1 formal relevan; C2 verifier berbeda | Katalog/bukti/mandat teknis relevan harus cukup; NIB tidak wajib sampai C2 |
| DT-005 C+F+H2 | Fungsi/mandat, kode/cakupan/waktu tunggal, alih sah dan riwayat | OPD/mandat nyata belum ditetapkan; fixture fiktif bukan keputusan organisasi |
| DT-007 C | Status induk/field/sektor terpisah, agregasi berbasis katalog sah/versi/efektif | Katalog tidak cukup → BELUM DAPAT DINILAI, bukan lulus dari daftar kosong |
| DT-009 C+B2+V2+K2 | Bukti per klaim, K1–K4, nilai efektif/periode/versi berbeda | Standar dokumen/kecukupan/masa/risiko/K4/retensi belum final |
| DT-011 C+D1+M1+E1 | D1 katalog hak dasar sah; M1 semua mandat aktif dengan scope asal; E1 otomatis baca→unduh/ekspor | **KONFLIK KEBIJAKAN TERBUKA** terhadap RB-11.07/21/T11-14; unduh/ekspor tidak dibangun/diaktifkan |

Isolasi fitur ekspor adalah batas pekerjaan, **bukan mengganti E1 menjadi E2 atau menutup konflik**. D1 bukan hak sensitif/pengesahan otomatis. M1 bukan satu mandat eksklusif sesi atau pencampuran field/wilayah/tujuan antarizin. Baca ringkasan bukan baca semua bukti/registri atau izin publikasi.

DT-006/008/012/019/033 serta rincian katalog/standar/OPD/mandat tetap terbuka sesuai sumber. Register tetap 36 DT: lima model dipilih, 31 lainnya belum final; DT-011 sendiri belum tuntas konsistensi/operasional. Tidak menutup DT-028 dari dokumen ini; DT-029 data nyata dan DT-030 produksi tetap terpisah.

## Batas izin yang diusulkan

| Tahap di dalam G1 | Yang diajukan | Yang tidak diberikan |
| --- | --- | --- |
| G1-A fondasi lokal | Laravel/Livewire/Tailwind, dependensi proyek yang disetujui, lock/build/tes fondasi tanpa DB, Git lokal jika disetujui | Instalasi/start/koneksi DB, SQLite, migrate/seed, migrasi domain, fitur bisnis/ekspor, data nyata/server produksi |
| G1-B persisten/domain lokal | Sesudah rincian/izin cukup: MySQL lokal, skema/domain/fixture dan tes integrasi sesuai scope | Bukan otomatis dari A; tidak OPD/petugas/bukti nyata, impor/produksi atau ekspor E1 |

A/B bukan gerbang baru pengganti G0–G7. Klaim izin prototipe dalam lampiran bukan izin G1 Laravel. Tinjau [file/dependensi/modul/migrasi konseptual/AC](14-kontrak-teknis-fondasi-lokal.md) sebelum persetujuan.

## Data dan pengujian

Semua akun/OPD/mandat/katalog/berkas tes kelak sintetis dan jelas fiktif. Katalog uji dapat membuktikan mekanisme, bukan standar bukti resmi. Prototipe tidak dipindah mentah menjadi aplikasi. Riwayat array bukan audit transaksional KB-12.

Sumber historis bukan Registri Induk: baris bukan Unit unik, alamat pemilik bukan otomatis lokasi usaha, NIB historis bukan legalitas terverifikasi, Kuliner bukan otomatis pengolahan pangan. Catatan angka AH-01 tidak diperbaiki tanpa sumber sah.

## Kesiapan saat penyerahan

**G1-A siap diajukan, BELUM DIIZINKAN; G1 formal belum lulus.** G1-B menunggu MySQL/desain/izin scope terpisah. G0 siap ditinjau dengan konflik/temuan terlihat, belum persetujuan baseline. G2/G3/G4/G6 BELUM DINILAI, G5/G7 BELUM LULUS. Hosting PDN/cPanel BELUM DAPAT DINILAI. Laravel belum dibuat; tidak ada instalasi/migrasi/deployment pada pekerjaan ini.

## Subset antarmuka G1-B3.2

Mandat lokal terbaru melaksanakan sebagian MVP: UI A3 dan pengajuan berjejak di atas B2/B3.1, bukan seluruh kontrak MVP selesai. [Kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md) menetapkan konteks/aktor server, bukti sintetis bersyarat, kandidat tanpa merge dan batas izin. C2/field operasional, koreksi penuh, pangan lanjutan, ekspor dan operasi nyata masih di luar hasil ini. KB/DT tidak berubah; seluruh skenario sumber belum otomatis dinyatakan lulus dari subset tes aplikasi.

## Subset C2 G1-B3.3

C2 paket minimum Registri Induk lokal sintetis kini diizinkan secara terpisah dan menggunakan baseline B2/B3.1/B3.2. [Kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md) menjaga B1/katalog/versi/pemisahan pembuat, status field/sektor serta audit atomik. Hasil ini bukan seluruh MVP, pengesahan field operasional atau agregasi DT-007 selesai. Katalog/hak/SOP nyata dan konflik E1 masih terbuka; data nyata/G5/G7/deployment belum diizinkan.
