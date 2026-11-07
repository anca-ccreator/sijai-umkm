# Baseline konsolidasi KB-01–KB-18 dan implementasi MVP SIJAI UMKM

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Status terkini setelah mandat G1-A — 6 November 2026:** izin DT-028/G1 hanya untuk fondasi lokal G1-A, hasil pada [laporan 17](17-laporan-hasil-g1a.md). G1-B/data nyata/produksi belum diizinkan. Pernyataan “coding belum diizinkan/Laravel belum dibuat” pada snapshot konsolidasi sebelumnya adalah riwayat sebelum persetujuan terbaru. Model KB/DT dan gerbang lingkup lebih luas tidak otomatis lulus dari fondasi.

Tanggal penyusunan: **5 November 2026**. Pembaruan DT-003, DT-005, DT-009 dan DT-011: **6 November 2026**. Mandat: pemilik produk meminta audit konsolidasi akhir dokumentasi, bukan memilih model ulang atau mulai membangun.

**Status baseline: TERDOKUMENTASI. G0: SIAP DIAJUKAN UNTUK PENINJAUAN. Belum disetujui pemilik proyek.** G1–G7 belum lulus/belum dinilai sesuai matriks. Tidak ada izin coding/instalasi, data nyata, akses server, pengujian teknis atau produksi dari dokumen ini.

## Ringkasan eksekutif

Seluruh **18 model KB-01–KB-18 DISEPAKATI** pada tingkat yang dinyatakan masing-masing. Rincian organisasi, SOP/bukti, akses, sumber faktual, platform aktual, target dan persetujuan tindakan tetap terpisah. Hosting serta kapasitas akhir **BELUM DAPAT DINILAI**.

Baseline mengunci batas MVP yang ditegaskan pengguna: Registri Induk + Profil Umum + Industri Pengolahan Pangan, akun petugas, penugasan/hak, registrasi/pengesahan, koreksi/konflik, deteksi/pencegahan duplikasi aman, audit/privasi serta pencarian/laporan dasar berizin. Fase program, impor/integrasi yang belum diizinkan dan merge historis berisiko tidak menjadi kewajiban membangun semuanya sekarang.

Audit sebelum DT-011 tidak menemukan kontradiksi substantif. **Kini DT-011 memilih C+D1+M1+E1 dan E1 literal berbenturan dengan KB-11 RB-11.07/21/T11-14: KONFLIK KEBIJAKAN TERBUKA.** Unduh/ekspor terdampak BLOKIR sampai keputusan pemilik produk; tidak mengubah E1 atau KB-11 untuk menyatakan selesai. **DT-007 Model C — Verifikasi Bertingkat Berbasis Cakupan kini DISEPAKATI oleh pemilik produk, final pada tingkat model.** Registrasi induk, field, profil sektoral dan agregasi objek/lingkup/tahap dipisah; agregasi bukan pengesahan baru. Register tetap **36 DT**: DT-003 B A3+B1+C2, DT-005 C+F+H2 dan DT-009 C+B2+V2+K2 ditetapkan 6 November 2026, DT-007 C tetap; DT-011 **MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA**. Lima model dipilih, **31 DT lain belum final**, DT-011 sendiri belum tuntas konsistensi/operasional. Standar bukti/rincian operasional DT-003, rincian OPD/mandat aktual DT-005, petugas DT-006, standar bukti/risiko/prosedur operasional DT-009, katalog D1/validasi M1/konflik E1 dan akses operasional DT-011, sumber impor DT-019 dan referensi DT-033 tetap memerlukan penetapan/otorisasi sesuai statusnya. [Rumusan DT-003](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2), [DT-005](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2) dan [DT-009](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2) masing-masing memuat 30 RB/30 T resmi, seluruh T belum dijalankan. [Rumusan lengkap DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) memuat 28 aturan dan 28 kasus mendatang.

## Tujuan dan status baseline

Dokumen ini pintu masuk pembaca, bukan salinan penuh seluruh aturan. [Register keputusan](06-keputusan-bisnis.md) tetap sumber rumusan KB/RB/T, kamus/matriks sumber rincian rancangan, [checklist hosting](07-checklist-hosting-cpanel.md) sumber bukti fasilitas yang belum ada, dan [model kapasitas](09-perencanaan-kapasitas.md) pusat angka/asumsi/rumus. [Audit historis](08-audit-konsistensi-dokumentasi.md) tetap disimpan dan merujuk baseline terbaru.

Mandat konsolidasi/penegasan batas MVP berasal dari pemilik produk pada chat proyek 5 November 2026. Tanggal ini **tanggal penyusunan**, bukan tanggal penetapan OPD/SOP/izin implementasi. Tidak ada riwayat Git lokal; pemeriksaan tidak menginisialisasi Git.

| Istilah status | Pemakaian konsisten |
| --- | --- |
| DISEPAKATI | Pilihan model/batas yang ditetapkan pengguna, bukan semua rincian teknis/organisasi |
| TERDOKUMENTASI | Persyaratan/hasil telaah tertulis, bukan bukti implementasi lulus |
| DIUSULKAN | Rancangan/alternatif yang belum disetujui |
| MENUNGGU PENETAPAN | Memerlukan keputusan/mandat kelembagaan atau persetujuan terkait |
| MENUNGGU BUKTI | Memerlukan fakta/pengujian yang belum tersedia |
| DITUNDA | Berada pada fase/lingkup lain; modelnya tidak dibatalkan |
| LULUS | Kriteria dipenuhi dengan bukti cukup; tidak diberikan pada kode/server melalui pekerjaan ini |
| TIDAK LULUS | Bukti menunjukkan kriteria tidak terpenuhi; bukan label semua hal yang belum diuji |
| BELUM DAPAT DINILAI | Bukti belum cukup, khususnya kelayakan hosting/kapasitas |
| BELUM LULUS / BELUM DINILAI | Status gerbang yang diminta pengguna: otorisasi/syarat belum ada atau belum ada hasil penilaian |
| SIAP DIAJUKAN UNTUK PENINJAUAN | Khusus G0 setelah pemeriksaan dokumen; belum DISETUJUI pemilik proyek |

Status bukan satu kolom universal: model dapat DISEPAKATI, rincian MENUNGGU PENETAPAN, persyaratan TERDOKUMENTASI dan kemampuan BELUM DAPAT DINILAI pada saat yang sama. Label lama TERBUKA/USULAN/BELUM FINAL pada sumber dibaca dalam konteks rincian/historis, bukan membatalkan model terbaru. Pernyataan “lulus apabila” pada kriteria adalah syarat mendatang, bukan hasil uji.

## Matriks KB-01–KB-18

Prioritas berasal dari register, **tidak diubah**. P0 menyangkut aturan minimum pekerjaan terkait, bukan alasan mengarang rincian atau mewajibkan semua modul dibangun pada MVP. Kolom rincian final hanya yang sudah dipilih; DT merujuk keputusan turunan terbuka. Tahap/epic merupakan rancangan mendatang, bukan izin.

| ID | Prioritas | Model final | Ringkasan mengikat | Dokumen sumber | Aturan dan penerimaan terkait | Rincian sudah final | Rincian terbuka | Ketergantungan | Tahap implementasi | Gerbang terdampak | Risiko salah penerapan |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| KB-01 | P0 | C — DISEPAKATI | Unit kesatuan operasional; cabang sah bagian induk, satu pemilik bisa beberapa Unit | [register](06-keputusan-bisnis.md#register-keputusan) | T09-01–03/15; T13-01–11 | Definisi operasional dan larangan gabung hanya pemilik sama | DT-001/002; rincian belum final | KB-03/KB-13 | EPIC-02/06 | G1/G2/G3 | Salah jumlah Unit/pemilik |
| KB-02 | P0 | B — DISEPAKATI | Verifikasi terdistribusi; pengelola utama koordinator, mandat tambahan harus sah | [register](06-keputusan-bisnis.md#register-keputusan) | T08-07/08/14; T09-06–08 | Koordinasi bukan hak semua field | DT-004/005/007/008; rincian belum final | KB-04/KB-05/KB-08 | EPIC-03/04/06 | G1/G2/G3/G5 | Koordinator menjadi pengesah superuser |
| KB-03 | P0 | B — DISEPAKATI | Registrasi bertahap, ID internal terpisah NIK/NIB, NIB tidak wajib awal | [register](06-keputusan-bisnis.md#register-keputusan) | T09-01–04; T10-10–14 | Tanpa NIB boleh pendataan awal; objek berbeda | DT-003/010/033; rincian belum final | KB-01/KB-05/KB-10 | EPIC-02/04 | G1/G2/G3 | NIB dijadikan primary key atau salah cakupan |
| KB-04 | P0 | Satu pemilik field — DISEPAKATI | Tepat satu OPD pemilik aktif per field, nonpemilik usul sesuai akses | [register](06-keputusan-bisnis.md#register-keputusan) | T08-01/02/07/08; T09-07/08/23/24 | Nilai resmi bukan hak edit semua OPD | DT-005/008/011; rincian belum final | KB-02/KB-07/KB-08/KB-11 | EPIC-03/04/06 | G1/G2/G3/G5 | Field tanpa pemilik/tumpang tindih |
| KB-05 | P0 | Pembuat/verifikator berbeda — DISEPAKATI | Profil awal dibuat petugas ditunjuk, disahkan verifikator berbeda | [register](06-keputusan-bisnis.md#register-keputusan) | T09-05/06; T11-09/17 | Larangan pembuat mengesahkan profilnya sendiri | DT-003/006/007; rincian belum final | KB-02/KB-04/KB-07 | EPIC-03/04 | G1/G2/G3/G5 | Status profil dianggap seluruh field sah |
| KB-06 | P0 | A — DISEPAKATI | Pelaku tanpa akun, layanan melalui petugas dengan hak subjek tetap dihormati | [register](06-keputusan-bisnis.md#register-keputusan) | T09-01/14/16; T11-10–13 | Akun individual petugas internal | DT-006/011/014; rincian belum final | KB-05/KB-11 | EPIC-03/04/07 | G1/G2/G3/G5 | Portal masyarakat/hak layanan terabaikan |
| KB-07 | P0 | C — DISEPAKATI | Satu pengesah field biasa berwenang cukup, validasi/audit tetap, KB-05 tidak dihapus | [register](06-keputusan-bisnis.md#register-keputusan) | T08-05/09–11; T09-11–13/23/24 | Tidak ada pengesah kedua wajib untuk semua field | DT-005/006/009; rincian belum final | KB-04/KB-05/KB-08/KB-12 | EPIC-03/04/06/07 | G1/G2/G3 | Satu pengesah dianggap bebas validasi |
| KB-08 | P0 | A — DISEPAKATI | Konflik nilai oleh pemilik field, sengketa kewenangan via organisasi sah | [KB-08](06-keputusan-bisnis.md#kb-08--penyelesaian-konflik-dan-koreksi-data) | RB-08.01–23; 18 kriteria; T08-01–14 | Kasus/subkasus, koreksi berjejak, model/sumber RB berlaku | DT-005/008/009; rincian belum final | KB-04/KB-07/KB-11/KB-12/KB-13 | EPIC-06/07 | G1/G2/G3/G5 | Sejarah dihapus atau sengketa diputus admin |
| KB-09 | P0 | B — DISEPAKATI | MVP registri + Industri Pengolahan Pangan dan kendali terkait | [KB-09](06-keputusan-bisnis.md#kb-09--finalisasi-ruang-lingkup-mvp) | RB-09.01–24; T09-01–26 | Sektor dan batas MVP dipilih; tanpa akun pelaku | DT-003/005/006/007/011/033; rincian belum final | KB-01–08/KB-11/KB-12/KB-13 | EPIC-01–08 dan kesiapan 09 | G1/G2/G3/G7 | Fitur lanjut masuk MVP atau produk dianggap Unit |
| KB-10 | P1 | B — DISEPAKATI | Usulan skala menurut dasar/cakupan/periode/aturan, pengesahan petugas; KBLI berversi | [KB-10](06-keputusan-bisnis.md#kb-10--usulan-klasifikasi-umkm-pengesahan-dan-kbli-berversi) | RB-10.01–24; T10-01–26 | Model usulan/pengesahan dan rujukan versi terpisah, bukan legalitas otomatis | DT-010/031/033; rincian belum final | KB-03/KB-04/KB-07/KB-11/KB-12 | KBLI EPIC-02; mesin skala sesuai DT-031 | G1/G2/G3/G5 sesuai scope | Salah cakupan dan usulan menjadi resmi |
| KB-11 | P0 | B — DISEPAKATI | Pelindungan bertingkat menurut sensitivitas/tugas/tujuan/tindakan/kewenangan | [KB-11](06-keputusan-bisnis.md#kb-11--perlindungan-data-bertingkat-dan-kebutuhan-tugas) | RB-11.01–30; T11-01–26 | Hak minimum/privat/ekspor terpisah, hak subjek tanpa akun | DT-011–015/029; rincian belum final | KB-04/KB-06/KB-12/KB-17 | EPIC-03/07 lintas semua epic | G2/G3/G5/G6/G7 | Bocor NIK/bukti atau JRA/tenggat direka |
| KB-12 | P0 | B — DISEPAKATI | Audit aplikasi dan salinan terlindungi berkontrol terpisah; integritas/pulih harus dibuktikan | [KB-12](06-keputusan-bisnis.md#kb-12--audit-operasional-dan-salinan-audit-terlindungi) | RB-12.01–30; T12-01–28 | Audit kritis atomik, retry pascacommit, ID stabil/riwayat | DT-013/016/017/022/034; rincian belum final | KB-11/KB-14/KB-17/KB-18 | EPIC-07 sejak fondasi, bukti operasi EPIC-09 | G2/G3/G4/G6/G7 | Dua folder dianggap independen atau sukses palsu |
| KB-13 | P1 | C — DISEPAKATI | Rekonsiliasi terkendali, deteksi/pencegahan prioritas; historis berisiko ditahan | [KB-13](06-keputusan-bisnis.md#kb-13--rekonsiliasi-otomatis-identitas-merge-split-dan-arsip) | RB-13.01–30; T13-01–30, bagian lanjut tidak wajib MVP | Sepuluh prasyarat/mandat, kanonik/alias/jejak dan koreksi | DT-001/002/009/018; rincian belum final | KB-01/KB-04/KB-08/KB-12/KB-15 | Deteksi EPIC-02/06; merge historis jalur terpisah | G1/G2/G3; gerbang merge tersendiri | Salah gabung/peristiwa atau referensi hilang |
| KB-14 | P0 | B — DISEPAKATI | Audit hosting sebelum keputusan teknis; aktual BELUM DAPAT DINILAI | [KB-14](06-keputusan-bisnis.md#kb-14--audit-kesiapan-hosting-pdncpanel) | RB-14.01–26; T14-01–24 | Baseline kandidat/formulir 55 item, bukan fasilitas nyata | DT-017/021–027/035; rincian belum final | KB-11/KB-12/KB-17/KB-18 | Verifikasi rancangan EPIC-01; bukti EPIC-09 | G2/G4/G6/G7 | Label cPanel dianggap layak |
| KB-15 | P2 | B — DISEPAKATI | Impor staging privat/pemetaan/validasi/rekonsiliasi/pengesahan per field; integrasi langsung bukan MVP | [KB-15](06-keputusan-bisnis.md#kb-15--impor-data-bertahap-dan-terverifikasi) | RB-15.01–30; T15-01–30, bukan semua tes MVP | Staging bukan SSOT/angka resmi dan replay/koreksi menjaga perubahan sah | DT-018/019/020/032; rincian belum final | KB-04/KB-08/KB-11/KB-12/KB-13 | Jalur lingkup terpisah, tidak epic wajib MVP | Gerbang impor/integrasi dan G1/G4/G5 terkait | File OPD menimpa master/efek ganda |
| KB-16 | P2 | B — DISEPAKATI | Registri program/riwayat layanan lintas OPD sesudah MVP, tanpa keuangan/transaksi bantuan | [KB-16](06-keputusan-bisnis.md#kb-16--registri-program-dan-riwayat-layanan-pembinaan-umkm) | RB-16.01–30; T16-01–30 | Hierarki, status/metrik/indikator terpisah; fase lanjut | DT-036 dan rincian privasi/operasi terkait; rincian belum final | KB-09/KB-11–15/KB-17/KB-18 | DITUNDA setelah MVP, tidak epic wajib | Gerbang fase program tersendiri | Program/pembayaran masuk MVP atau hitung ganda |
| KB-17 | P1 | B — DISEPAKATI | Operasi berbasis risiko: backup/restore/monitoring/insiden/perubahan; RPO/RTO belum final | [KB-17](06-keputusan-bisnis.md#kb-17--operasional-terkelola-berbasis-risiko) | RB-17.01–30; T17-01–30 | Backup/salinan audit/koreksi bisnis berbeda; target tidak ditebak | DT-021–024/034/035; rincian belum final | KB-11/KB-12/KB-14/KB-18 | EPIC-09 dan desain sejak fondasi | G4/G5/G6/G7 | Backup job dianggap pulih, transaksi sah hilang |
| KB-18 | P0 | C — DISEPAKATI | Arsitektur kabupaten sejak awal, sumber daya fisik berdasar bukti, contoh bukan statistik | [KB-18](06-keputusan-bisnis.md#kb-18--perencanaan-kapasitas-skala-kabupaten-sejak-awal) | RB-18.01–30; T18-01–30 | Enam cakupan/lima kategori/model pertumbuhan terpisah, kapasitas belum dinilai | DT-025–027/035; rincian belum final | KB-09/KB-11/KB-12/KB-14/KB-17 | Desain semua epic, bukti awal/ekspansi EPIC-09 | G2/G4/G6/G7 | Asumsi menjadi kuota/fakta atau belanja tanpa bukti |

### Kendali aturan dan skenario yang sudah tersedia

KB-01–KB-07 memiliki ringkasan model pada register dan prinsip pada panduan/rancangan. **Tidak ada paket RB-01–RB-07 atau T01–T07 mandiri dalam sumber lokal**; jangan menciptakan/menomori seolah sudah disepakati. Prinsipnya ditelusuri ke kriteria sumber KB-08/KB-09/KB-11/KB-13 dan kriteria epic yang masih rancangan. Kekosongan kode mandiri bukan izin menghapus kebutuhan uji.

| KB | Aturan sumber | Skenario sumber | Bukti/keterbatasan |
| --- | --- | --- | --- |
| KB-08 | 23 RB, RB-08.01 sampai RB-08.23 | 14 T, T08-01 sampai T08-14 | TERDOKUMENTASI; belum dijalankan; juga 18 kriteria penerimaan sumber |
| KB-09 | 24 RB, RB-09.01 sampai RB-09.24 | 26 T, T09-01 sampai T09-26 | TERDOKUMENTASI; belum dijalankan |
| KB-10 | 24 RB, RB-10.01 sampai RB-10.24 | 26 T, T10-01 sampai T10-26 | TERDOKUMENTASI; belum dijalankan |
| KB-11 | 30 RB, RB-11.01 sampai RB-11.30 | 26 T, T11-01 sampai T11-26 | TERDOKUMENTASI; belum dijalankan |
| KB-12 | 30 RB, RB-12.01 sampai RB-12.30 | 28 T, T12-01 sampai T12-28 | TERDOKUMENTASI; belum dijalankan |
| KB-13 | 30 RB, RB-13.01 sampai RB-13.30 | 30 T, T13-01 sampai T13-30 | TERDOKUMENTASI; belum dijalankan |
| KB-14 | 26 RB, RB-14.01 sampai RB-14.26 | 24 T, T14-01 sampai T14-24 | TERDOKUMENTASI; belum dijalankan |
| KB-15 | 30 RB, RB-15.01 sampai RB-15.30 | 30 T, T15-01 sampai T15-30 | TERDOKUMENTASI; belum dijalankan |
| KB-16 | 30 RB, RB-16.01 sampai RB-16.30 | 30 T, T16-01 sampai T16-30 | TERDOKUMENTASI; belum dijalankan |
| KB-17 | 30 RB, RB-17.01 sampai RB-17.30 | 30 T, T17-01 sampai T17-30 | TERDOKUMENTASI; belum dijalankan |
| KB-18 | 30 RB, RB-18.01 sampai RB-18.30 | 30 T, T18-01 sampai T18-30 | TERDOKUMENTASI; belum dijalankan |

Inventaris unik sumber: **307 RB dan 294 T pada KB-08–KB-18**, seluruhnya persyaratan/rencana. Isi/judul/urutan sumber dipertahankan. Ini **bukan 294 tes wajib seluruhnya MVP**: T16 adalah fase program, sebagian T13 merge historis, T15 impor dan T10 aktivasi mesin mengikuti lingkup/DT terkait. T14/T17/T18 memerlukan izin teknis dan bukti masing-masing. Kriteria penolakan/hak/integritas yang relevan tetap wajib untuk fitur yang kelak dibangun.

## Definisi yang tidak boleh berubah

| Istilah | Makna dan batas yang dipertahankan |
| --- | --- |
| SSOT / Registri Induk | Satu sumber data resmi bersama, bukan master per OPD. Dokumen/staging/salinan audit/backup bukan master bisnis baru |
| PIHAK / ORANG / BADAN_USAHA | Pihak pengenal bersama sesuai jenis, rincian Orang/Badan berbeda. Akun petugas juga berbeda. Record Badan tidak menetapkan sendiri cakupan/subjek hukum penilaian |
| UNIT_USAHA | Kesatuan operasional KB-01, bukan otomatis sama dengan pemilik/subjek hukum/NIB |
| Hubungan pihak-usaha | M:N dengan peran/masa berlaku. Satu Orang banyak Unit dan satu Unit beberapa pihak; tidak satu owner_id sebagai batas pemilik |
| Cabang / LOKASI_USAHA | Pemilik sama dan keterkaitan cabang-induk teridentifikasi tetap bagian induk; lokasi berbeda/pemilik sama saja belum membuktikan Unit sama/baru |
| KEGIATAN_USAHA | Aktivitas ekonomi dalam Unit, KBLI berversi. Berbeda dari KEGIATAN_PROGRAM/layanan pemerintah KB-16 |
| NIK/NIB/identitas eksternal | Rujukan bersubjek/penerbit/sumber/verifikasi, bukan kunci internal; NIB tidak wajib awal dan tidak otomatis unik per cabang/Unit |
| Subjek/cakupan penilaian | Dasar/tujuan/aturan/bukti menentukan cakupan modal/penjualan, tidak otomatis seluruh Unit pemilik sama atau tiap lokasi; DT-010 |
| Produk/merek/bahan/peralatan/pengukuran | Record terkait Unit/kegiatan/profil yang sama; produk/merek bukan Unit baru. Produksi memuat produk/nilai/satuan/periode/sumber/verifikasi, koreksi menjaga riwayat |
| Pemilik field / pengesah | Satu OPD aktif penanggung jawab, satu petugas berwenang dapat mengesahkan field biasa; nonpemilik hanya usul jika berhak. Koordinator/admin bukan otomatis pemilik |
| Verifikator profil awal | Berbeda dari pembuat pada profil terkait, mandat khusus tidak memberi hak semua field/sektor |
| Kanonik / alias | ID rujukan bagi identitas terbukti sama dan penelusuran ID asal; bukan daur ulang ID atau menulis ulang target audit. Merge historis berisiko belum aktif |
| Audit / backup / koreksi | Audit menjaga jejak/integritas, salinan berkontrol terpisah; backup memulihkan komponen; koreksi bisnis keputusan/versi baru. Ketiganya berbeda |
| Kategori angka kapasitas | FAKTUAL TERVERIFIKASI/ASUMSI PERENCANAAN/PROYEKSI/HASIL PENGUJIAN/BELUM DIKETAHUI, terpisah dari status verifikasi profil |
| Hak operasional / peran hukum | Admin aplikasi/infrastruktur, pengelola utama/salinan audit, field owner, Pengendali/Prosesor, pengawas dan kearsipan tidak otomatis satu kewenangan |

### Status terpisah dan ringkasan berbasis cakupan

| Lapis | Apa yang dinyatakan | Apa yang tidak otomatis disahkan |
| --- | --- | --- |
| Profil/registrasi induk awal | Proses/status objek induk dan keputusan verifikator berbeda dari pembuat menurut mandat | Semua nilai field lintas OPD, legalitas/NIB, seluruh sektor atau hasil klasifikasi |
| Field/record resmi | Nilai tertentu disahkan petugas pemilik field sesuai bukti/versi/cakupan; riwayat ada | Seluruh profil atau field OPD lain |
| Profil sektoral/pengukuran | Penilaian sektor/lingkup dan status pengukuran sesuai proses/kewenangannya | Tidak otomatis sah dari induk atau sektor lain; draf tetap bukan nilai resmi |
| Ringkasan agregasi | Hasil objek/lingkup/tahap dan versi aturan: memenuhi, belum memenuhi atau belum dapat dinilai | Tidak menciptakan pengesahan, mengubah keputusan field atau memberi hak seluruh nilai/alasan sensitif |

**DT-007 Model C tetap final pada pemilihan model. DT-003 Model B A3+B1+C2 kini DISEPAKATI; minimum konseptual A3 dipilih, rincian katalog/standar bukti/enum/transisi DT-003/009/033 serta pemilik/mandat DT-005 belum final.** Label konseptual induk/field/sektor dan logika agregasi ada pada [keputusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan), bukan enum database final. Rumus: **Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L)**. Katalog minimum wajib sah/berversi; belum sah/tidak cukup menilai menghasilkan BELUM DAPAT DINILAI, bukan lulus dari daftar kosong/persentase. Registrasi tetap membutuhkan keputusan verifikator awal yang sah dan berbeda dari pembuat.

Gunakan nilai efektif beserta versi/keputusannya. Draf/usulan baru tidak otomatis membatalkan nilai resmi lama; konflik aktif relevan menahan kesimpulan positif tanpa menghapus nilai resmi. Perubahan versi/katalog memerlukan penilaian ulang lingkup terkait; pengesahan lama bukan pengesahan versi baru dan riwayat evaluasi tidak ditulis ulang. Hasil/alasan dibatasi KB-11 dan audit KB-12. Implementasi menunggu katalog/mandat/hak yang cukup jelas dan izin G1.

**Riwayat sebelum DT-007 dipilih:** baseline konsolidasi pernah mencatat alternatif agregat setelah minimum field sah atau agregat bertahap bercakupan sebagai terbuka. Pemilik produk kini menetapkan Model C di atas; alternatif lama tidak berlaku sebagai pilihan model yang masih menunggu, sedangkan rincian katalog operasional/enum/transisi/pemilik tetap perlu penetapan. Model minimum registrasi kini mengikuti DT-003 B A3+B1+C2; bukan penetapan seluruh minimum sektoral.

## Audit konflik substantif

Kategori temuan: **kontradiksi nyata** (dua ketentuan berlaku tak bisa dipenuhi bersama), **potensi salah tafsir**, **kekosongan keputusan turunan**, **ketergantungan bukti/penetapan**, dan **redaksi historis**. Temuan dapat memuat lebih dari satu kategori; potensi bukan kesalahan sistem yang telah terjadi. Tidak ada sistem berjalan yang diuji dalam audit ini.

| Kode temuan | KB terdampak | Dokumen/bagian | Bentuk konflik/ketidakjelasan dan kategori | Dampak bisnis | Risiko | Keputusan berlaku | Rekomendasi dokumentasi | Perlu keputusan baru? | Calon penanggung jawab keputusan | Gerbang | Status |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| KA-01 | KB-01/KB-08/KB-13 | 03: katalog/rekonsiliasi; 06: KB-08.H dan KB-13; AGENTS | Potensi salah tafsir + redaksi historis: larangan merge umum lama vs konsolidasi teknis bersyarat; pemilik/nama/alamat mirip bukan bukti | Salah gabung, sejarah/pemilik hilang | Tinggi | Kesatuan operasional; prasyarat kumulatif/mandat KB-13; historis berisiko belum aktif | Baca KB-13 bersama KB-08, tahan konflik, kanonik/alias/ID lama tetap; rujuk DT-001/002/018 | Tidak untuk model; ya untuk SOP/bukti/mandat turunan | Otoritas data/pemilik field yang sah, usulan | G1/G2/G3 dan jalur merge tersendiri | Penyelarasan TERDOKUMENTASI; DT-001/002/018 terbuka |
| KA-02 | KB-02/KB-04/KB-05/KB-07/KB-09/KB-11/KB-12 | 04: registrasi/agregasi; 06: DT-007; kamus/matriks | Pemilihan model selesai: DT-007 C tetap dan DT-003 B A3+B1+C2 dipilih; rincian katalog/enum/transisi/bukti/mandat tetap terbuka | Field tanpa pemilik dianggap sah atau sektor naik dari induk | Tinggi | Status induk/field/sektor terpisah, agregasi per lingkup bukan pengesahan; pembuat/verifikator awal berbeda | Gunakan DT-007 tetap serta DT-009 B2/V2: katalog sah, nilai efektif/pembatasan beralasan, konflik relevan menahan positif; tidak mengarang bukti wajib/OPD | Tidak untuk model DT-003/007; ya rincian DT-003/005/006/009/011/033 | Pemilik produk menetapkan model; otoritas sah untuk rincian terkait | G1/G2/G3/G5 sesuai lingkup | DISEPAKATI pada model; rincian DIUSULKAN/MENUNGGU PENETAPAN |
| KA-03 | KB-02/KB-04/KB-08 | 04: Pemilik field/konflik; matriks: perubahan pemilik | Model DT-005 C+F+H2 dipilih; rincian penetapan/sengketa tetap: koordinator/admin bukan pemindah sepihak atau pemutus organisasi | Sengketa organisasi diputus lewat setting teknis | Tinggi | Pemilik field tunggal, sengketa melalui mekanisme organisasi sah | Pisahkan dua katalog; H2 berpenetapan/efektif/transisi hak-antrean/audit, tanpa tumpang tindih; DT-004/008 dan rincian aktual DT-005 tetap | Model C+F+H2 sudah dipilih; ya untuk OPD/mandat nyata dan jalur sengketa | Otoritas organisasi yang sah, usulan | G1/G2/G3/G5 | MENUNGGU PENETAPAN |
| KA-04 | KB-03/KB-10 | 03: objek/ekonomi; kamus: ekonomi/NIB; 06: KB-10 | Kekosongan turunan: subjek/cakupan legal modal/penjualan multiunit dan aktivasi mesin skala pada MVP belum final | Agregasi salah atau usulan dianggap resmi | Tinggi | Unit operasional bukan subjek legal otomatis, NIB rujukan bersubjek, usulan berbeda pengesahan | Perjelas istilah/cakupan; DT-010/031. Jangan mewajibkan mesin skala dari daftar model | Ya untuk cakupan/aktivasi, bukan pemilihan ulang Model B | Pemilik produk/fungsi penilaian sah, usulan | G1/G2/G3/G5 sesuai lingkup | DIUSULKAN; cakupan legal MENUNGGU PENETAPAN |
| KA-05 | KB-04/KB-11/KB-12/KB-17 | DT-011; 06/04/matriks/kamus; sumber RB-11.07/21 dan T11-14 | KONFLIK KEBIJAKAN E1 literal baca otomatis unduh/ekspor vs izin terpisah KB-11; pemisahan peran/PDP tetap | Ekspor/unduh tanpa keputusan konsisten, data sensitif/massal terungkap | Tinggi, menghalangi implementasi terkait | KB-11/12 tetap; D1/M1 dibatasi mandat/scope, E1 tidak diubah diam-diam | Catat konflik terbuka dan kebutuhan keputusan; blokir unduh/ekspor terdampak, tanpa memilih E2 atau melemahkan KB-11 | Ya, keputusan pemilik produk; OPD/mandat/PDP operasional juga belum ditetapkan | Pemilik produk untuk konflik; otoritas sah untuk penetapan operasional | G1/G2/G3/G5/G7 terkait | KONFLIK KEBIJAKAN TERBUKA — bagian implementasi terkait BLOKIR |
| KA-06 | KB-12/KB-14/KB-17 | 02: audit; 07: H14-42–53; 04: backup/pemulihan | Ketergantungan bukti: belum ada bukti kontrol audit independen/kemampuan hosting; bukan temuan server telah gagal | Jejak dapat hilang/manipulasi, klaim pulih palsu | Kritis bila syarat gagal; bukti kini belum ada | Salinan dengan kontrol keamanan/administratif terpisah, bukan dua tabel/folder satu penguasaan | Rujuk DT-016/017/022/025 dan G4/G6; jangan klaim fasilitas/hasil uji | Ya untuk opsi/penetapan setelah bukti, tidak memilih produk sekarang | Pengelola layanan/infrastruktur/audit sah, usulan | G2/G4/G6/G7 | MENUNGGU BUKTI; hosting BELUM DAPAT DINILAI |
| KA-07 | KB-13/KB-15 | 06: KB-13 dan KB-15; 03: asal/kanonik; 04: impor | Potensi salah tafsir + SOP turunan: staging/file/similaritas bukan SSOT atau pengesahan; replay/pembalikan jangan menimpa perubahan sah terbaru | Master ganda, efek impor dua kali, kehilangan koreksi sah | Tinggi | Staging privat, ID asal/kanonik terlacak, pemilik field/versi/penerapan sekali/audit dan koreksi baru | Pertahankan aturan dan tautkan DT-018/019/032; fitur impor tidak wajib backlog inti | Ya untuk SOP/sumber/lingkup; model tetap | Otoritas data/sumber/pemilik field sah, usulan | Gerbang impor tersendiri dan G2/G3/G5 terkait | TERDOKUMENTASI; SOP/lingkup belum final |
| KA-08 | KB-09/KB-10/KB-13/KB-15/KB-16/KB-18 | 05: urutan 6A/6B/6C; 09: enam cakupan; baseline: MVP/epic | Potensi salah tafsir struktural: baris rancangan merge/impor sebelum peluncuran bisa dibaca kewajiban MVP; skala kabupaten bukan semua modul | Scope melebar tanpa persetujuan, MVP tertunda | Tinggi | MVP terkunci sesuai mandat kini; program setelah MVP; merge berisiko/impor/integrasi butuh scope/izin | Tandai jalur lanjutan/bersyarat roadmap, DT-031/032/036, tanpa menambah fitur ke epic wajib | Tidak untuk batas MVP yang ditegaskan; ya untuk aktivasi fitur turunan yang belum jelas | Pemilik produk untuk cakupan, usulan | G1/G3/G4/G7; gerbang fase lanjut | Penyelarasan dokumen selesai; DT aktivasi tetap terbuka |
| KA-09 | KB-14/KB-17/KB-18 | 07: formulir; 09: model; 04: RPO/RTO; 02: kandidat | Ketergantungan bukti: kompatibilitas kandidat/kuota/queue/audit/backup/restore/target belum terbukti; contoh bukan fakta | Infrastruktur dinyatakan layak atau kapasitas palsu | Kritis bila syarat gagal; bukti kini belum ada | Kandidat bersyarat, 55 aktual belum diketahui, asumsi/proyeksi terpisah, target kosong | Tautkan DT-022–027/034/035; pertahankan perhitungan/satuan dan opsi belum dipilih | Ya untuk target/opsi/penetapan, sesudah bukti; bukan ganti teknologi diam-diam | Pemilik layanan/infrastruktur/produk sah, usulan | G2/G4/G6/G7 | MENUNGGU BUKTI; kapasitas/hosting BELUM DAPAT DINILAI |

**Tidak ditemukan kontradiksi nyata yang memerlukan perubahan model sepihak.** Pemilihan model KA-02 telah dijawab DT-007 Model C; rincian katalog/mandat tetap terbuka bersama KA-04 dan DT terkait. KA-08 adalah risiko pembacaan urutan roadmap, diperbaiki dengan penanda jalur tersendiri. Klaim fasilitas independen/layak tidak diberikan; bila bukti kelak menunjukkan gagal, keputusan opsi/mitigasi tetap perlu pihak sah.

## Batas MVP

Batas berikut berasal dari mandat konsolidasi terbaru dan KB-09. Pengaktifan fungsi yang memerlukan aturan/fasilitas tetap menunggu gerbang terkait. Tabel ini mengunci scope dokumen untuk ditinjau, **bukan persetujuan backlog/coding atau fitur yang sudah tersedia**.

| Kelompok | Masuk MVP pertama | Tidak termasuk/ketentuan |
| --- | --- | --- |
| Akun dan tugas | Akun petugas pemerintah individual, autentikasi dan penugasan | Tidak ada akun pelaku UMKM/portal masyarakat |
| Kewenangan | Hak OPD/wilayah/entitas/field/tindakan, klasifikasi akses dan pemeriksaan server | Hak baca/usul/sah/unduh/ekspor/administrasi tidak disamakan |
| Registri | PIHAK/Orang/Badan/Unit, hubungan pemilik/pengelola, kegiatan, lokasi/cabang | Tidak membentuk master per OPD, NIB bukan ID dan cabang tidak otomatis Unit baru |
| Profil Umum/NIB | Minimum sesuai tahap, sumber/status dan referensi NIB bila tersedia | Tanpa NIB tetap boleh awal; tidak menerbitkan/mengubah legalitas eksternal |
| Sektor pangan | Profil Industri Pengolahan Pangan, produk/merek/bahan/peralatan relevan | Tidak menambah sektor aktif lain hanya karena desain kabupaten |
| Produksi | Kapasitas/realisasi numerik, produk, satuan/periode/sumber/bukti/verifikasi | Tidak stok/kasir/akuntansi; satuan berbeda tak dijumlah tanpa konversi baku |
| Registrasi/verifikasi | Pembuat ditunjuk, pengesah awal berbeda, status induk/field/sektor terpisah | DT-003 B A3+B1+C2 dan DT-007 C dipilih; A3 sebelum draf, NIB tidak wajib sampai pengesahan induk; rincian bukti/enum/transisi/pemilik DT-003/005/009/033 terbuka |
| Koreksi/mutu | Usulan/pengesahan field/koreksi/konflik, deteksi kandidat dan pencegahan duplikat aman | Auto-merge historis berisiko tidak aktif atau diwajibkan MVP |
| Audit/privasi | Audit operasional kritis, riwayat/akses sensitif dan rancangan pemenuhan salinan KB-12 | Rancangan bukan bukti salinan independen telah tersedia; fasilitas/operasi harus lulus sebelum klaim/produksi |
| Pencarian/laporan | Cari/filter/daftar/rekap dasar berizin, Unit unik, status/satuan/periode benar | Tanpa analitik lanjutan/publikasi/ekspor universal; keluaran sesuai hak |

| Fase/kebutuhan lain | Posisi pada baseline |
| --- | --- |
| Marketplace/transaksi penjualan, stok/kasir/akuntansi, pembayaran/penyaluran bantuan | Di luar MVP; tidak ada keputusan tugas ini untuk membangunnya |
| Program pelatihan/fasilitasi/pendampingan KB-16 | DITUNDA setelah MVP, bukan sembilan epic wajib |
| Impor historis massal langsung ke produksi | Di luar MVP; juga tidak boleh melewati staging/pengesahan KB-15 |
| Impor manual staging | Rancangan bersyarat, bukan epic wajib MVP atau otomatis diizinkan karena larangan hanya menyebut “langsung”; aktivasi DT-032/019 |
| Integrasi OSS/Dukcapil real-time dan layanan eksternal lain | Di luar MVP, DT-020 memerlukan mandat/kanal sah; tidak ada panggilan/percobaan |
| Auto-merge historis berisiko | Di luar MVP; deteksi/pencegahan aman tetap di dalam, konsolidasi teknis mengikuti seluruh prasyarat/mandat KB-13 |
| Aplikasi mobile terpisah/analitik lanjut belum disepakati | Di luar MVP |
| Mesin usulan/pengesahan skala usaha KB-10 | Model B tetap mengikat; penegasan **aktivasi sebagai fitur wajib MVP** belum rinci pada daftar scope terbaru, DT-031. Tidak dipilih ulang/dibangun otomatis; KBLI berversi tetap bagian kegiatan yang relevan |
| Kapasitas desain kabupaten KB-18 | Fondasi desain dan model pertumbuhan; bukan perintah semua fitur/OPD aktif atau sumber daya fisik dibeli sekaligus |

## Ketergantungan antarmodul

Nomor epic mengelompokkan pekerjaan; **bukan urutan mengaktifkan fitur tanpa pengaman**. Urutan rancangan: fondasi → desain identitas ↔ rancangan kewenangan/audit/privasi → registrasi/verifikasi dan koreksi → sektor → laporan → pembuktian operasional. Rancangan objek EPIC-02 dapat disiapkan sebelum seluruh komponen akses selesai, tetapi jalur bisnis yang digunakan harus sudah memenuhi EPIC-03/07 dan koreksi yang relevan. Tidak ada fase “semua orang boleh edit dahulu”.

| Prioritas dependensi | Pekerjaan yang ditahan bila belum jelas | Rujukan DT/gerbang |
| --- | --- | --- |
| Definisi objek/cabang/relasi dan kelengkapan tahap | Pembangunan aturan identitas/registrasi ambigu | DT-001/002/003; G1/G2/G3 untuk scope terkait |
| Kepemilikan field, penugasan dan agregasi status | Pengesahan awal/field lintas OPD tanpa SOP minimum | DT-004/005/006/008/009/011/033; model DT-003 B A3+B1+C2 dan DT-007 C dipilih, rincian tetap; G1/G2/G3/G5 terkait |
| Audit/privasi sebagai fondasi | Jalur mutasi/pencarian sensitif/ekspor tanpa akses dan audit | DT-011–017, G2/G3 dan G4/G6 sesuai fasilitas |
| Lingkup KB-10/impor/merge/program | Penambahan mesin skala/impor/merge historis/program diam-diam | DT-010/018/019/020/031/032/036; gerbang lingkup tersendiri |
| Fasilitas/operasi/kapasitas | Klaim lingkungan aman, salinan independen, pulih atau produksi | DT-021–027/034/035; G4/G6/G7 |
| Izin tindakan | Coding/data nyata/deployment dari roadmap saja | DT-028/029/030; G1/G5/G7 terpisah |

Keputusan turunan yang belum relevan untuk epic lokal sintetis boleh tetap terbuka bila tidak memengaruhi hasilnya dan scope disetujui; **P0 minimum yang memengaruhi pekerjaan terkait tidak boleh digantikan asumsi**. Ini membedakan gerbang coding lokal dari kelayakan produksi, tanpa memberi izin sekarang.

## Backlog implementasi konseptual

Sembilan epic berikut **DIUSULKAN, belum diizinkan**. Kriteria adalah rencana penerimaan merujuk sumber, tanpa menulis test otomatis. Tidak ada estimasi durasi/biaya/kapasitas atau penugasan personal. Fondasi akses/privasi/audit dimulai bersama desain, meski EPIC-07 bernomor kemudian. Deployment dalam EPIC-09 hanya dapat dijalankan pada tugas yang memperoleh G7 dan izin tindakan spesifik.

### EPIC-01 — Fondasi proyek

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Menyiapkan tempat pengembangan yang terkontrol dan dapat dipulihkan |
| KB dasar | KB-09/KB-11/KB-12/KB-14/KB-17/KB-18 |
| Lingkup dan yang tidak termasuk | Kelak repository/lingkungan lokal, standar kode/uji, verifikasi kompatibilitas dan perlindungan rahasia; tidak menginisialisasi apa pun sekarang atau mengakses produksi |
| Prasyarat | G1, scope teknologi/instalasi relevan dan P0 pekerjaan ini cukup jelas |
| Dependensi | DT-028; kandidat/desain G2. Seluruh kontrol identitas/hak/audit dirancang sejak fondasi |
| Kriteria penerimaan mendatang | Lingkungan lokal terpisah/sintetis, teknologi disetujui/kompatibel, rahasia dikecualikan dan rancangan uji jelas; hasil hanya dinilai setelah dikerjakan berizin |
| Risiko | Dokumen dianggap izin instalasi atau kandidat dipaksa cocok |
| Data uji sintetis yang dibutuhkan | Nama proyek/akun dummy dan konfigurasi contoh aman, tanpa rahasia |
| Gerbang sebelum pekerjaan | G1 sebelum kode; G2 untuk penerimaan fondasi; instalasi sesuai izin eksplisit |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-02 — Identitas dan model data induk

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Mewujudkan satu identitas bersama dan relasi usaha yang benar |
| KB dasar | KB-01/KB-03/KB-09/KB-10/KB-13 |
| Lingkup dan yang tidak termasuk | Orang/Badan/Unit, hubungan M:N/peran/masa berlaku, kegiatan/KBLI berversi/lokasi/cabang/ID/NIB rujukan; tanpa mesin skala wajib atau merge historis berisiko |
| Prasyarat | EPIC-01 dan rincian objek minimum DT-001/002/003/033; rancangan identitas G2 |
| Dependensi | Desain dapat disusun awal; jalur penggunaan/penulisan aktif bergantung EPIC-03 dan fondasi EPIC-07, bukan semua orang boleh edit |
| Kriteria penerimaan mendatang | T09-01–16 relevan, T10-13–20 untuk rujukan kegiatan/cakupan, T13 deteksi relevan: dua usaha satu Orang tetap berbeda, cabang sah tidak menggandakan, NIB tidak wajib awal |
| Risiko | Salah subjek NIB, owner tunggal atau lokasi dianggap Unit |
| Data uji sintetis yang dibutuhkan | Orang fiktif terkait dua Unit, Badan berbeda, pemilik bersama/periode, lokasi cabang dan unit mandiri |
| Gerbang sebelum pekerjaan | G1/G2; G3 untuk penerimaan; G4 sesuai cakupan lingkungan uji yang dipakai. Izin lokal bukan izin PDN |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-03 — Akun, penugasan dan kewenangan

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Membatasi setiap tindakan sesuai tugas aktif |
| KB dasar | KB-02/KB-04/KB-05/KB-06/KB-07/KB-11 |
| Lingkup dan yang tidak termasuk | Akun petugas individual, autentikasi/OPD/peran/wilayah/entitas/field/tindakan/klasifikasi akses; tanpa akun pelaku atau admin superuser |
| Prasyarat | EPIC-01/rancangan identitas; DT-005 dan DT-011 C+D1+M1+E1 dipilih, rincian OPD/mandat/katalog D1/validasi M1 cukup jelas; konflik E1 menghalangi unduh/ekspor terkait, tanpa izin G1 |
| Dependensi | EPIC-07 privasi/audit sejak fondasi; EPIC-02 belum digunakan tanpa kendali ini |
| Kriteria penerimaan mendatang | T-DT005.01–30, T11/T09/T08 relevan: akses server menolak lintas mandat/manipulasi ID/izin dicabut, pemilik tunggal menurut waktu/cakupan, transisi H2 dan audit; T belum dijalankan |
| Risiko | UI tersembunyi dianggap izin, hak teknis/hubungan bisnis dianggap semua akses |
| Data uji sintetis yang dibutuhkan | Petugas sintetis pembuat/verifikator/nonpemilik/admin, wilayah berbeda dan masa tugas berakhir |
| Gerbang sebelum pekerjaan | G1/G2, G3; penetapan organisasi nyata/data nyata G5 tersendiri |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-04 — Registrasi dan verifikasi

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Mendata bertahap tanpa pengesahan palsu |
| KB dasar | KB-02/KB-03/KB-04/KB-05/KB-07/KB-09 |
| Lingkup dan yang tidak termasuk | A3 sebelum draf baru, B1 dokumen formal relevan dan C2 paket minimum/verifikator berbeda; NIB tidak wajib sampai pengesahan, induk/field/sektor terpisah |
| Prasyarat | EPIC-02/03, audit kritis EPIC-07; DT-003 B A3+B1+C2 dan DT-007 C dipilih, rincian katalog/bukti/mandat/hak DT-003/005/006/009/011/033 cukup jelas untuk scope berizin |
| Dependensi | OPD pemilik field, validasi/bukti/versi dan konflik EPIC-06 dirancang bersama |
| Kriteria penerimaan mendatang | T-DT003.01–30 dan T-DT007 relevan serta T09/T08/T11: A3 sebelum draf, tanpa NIB boleh sampai C2 dengan bukti/paket sah, pembuat ditolak mengesahkan sendiri, status bagian bukan seluruh profil |
| Risiko | Satu persetujuan dianggap semua field/sektor sah |
| Data uji sintetis yang dibutuhkan | Profil dummy baru multi-OPD, bidang menunggu/disahkan/konflik sesuai SOP yang kelak disetujui |
| Gerbang sebelum pekerjaan | G1/G2; G3 setelah SOP status relevan disahkan; tanpa data nyata sebelum G5 |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-05 — Profil Industri Pengolahan Pangan

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Mencatat produk dan produksi secara dapat ditelusuri |
| KB dasar | KB-09/KB-10/KB-11/KB-12 |
| Lingkup dan yang tidak termasuk | Profil-kegiatan, produk/merek, bahan/peralatan relevan, kapasitas/realisasi produksi bersatuan/periode/sumber/verifikasi; tanpa stok/kasir/penjualan/akuntansi |
| Prasyarat | EPIC-02/03/04 dan fondasi 06/07, DT-005/009/011/033 |
| Dependensi | Master sama, satuan/referensi/bukti, keputusan/status field dan audit |
| Kriteria penerimaan mendatang | T09-17–26: tiga produk satu Unit, bahan berulang, Januari tetap setelah Februari, satuan berbeda tak dijumlah tanpa konversi, draf tidak dihitung terverifikasi |
| Risiko | Kolom daftar, menimpa periode atau merek dianggap usaha |
| Data uji sintetis yang dibutuhkan | Satu Unit dummy tiga produk, banyak bahan/peralatan dan dua periode produksi bersatuan berbeda |
| Gerbang sebelum pekerjaan | G1/G2/G3; G4 untuk scope lingkungan terkait |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-06 — Koreksi, konflik dan mutu data

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Memperbaiki data tanpa menghapus sejarah atau salah identitas |
| KB dasar | KB-01/KB-04/KB-07/KB-08/KB-13 |
| Lingkup dan yang tidak termasuk | Usulan/revisi/kasus/subkasus/konflik, deteksi kandidat dan pencegahan duplikat aman; tanpa auto-merge historis berisiko atau impor massal |
| Prasyarat | EPIC-02/03, audit EPIC-07; DT-009 C+B2+V2+K2 dipilih, standar bukti/risiko/versi/efektif dan kewenangan cukup jelas; rincian DT-001/002/008/018 tetap |
| Dependensi | EPIC-04/05 tidak dibuka untuk pemakaian sebelum koreksi/hak/integritas yang relevan siap |
| Kriteria penerimaan mendatang | T-DT009.01–30, 18 kriteria KB-08/T08 dan T13 relevan: B2 katalog sah, V2 nilai sah, K1–K4 berbeda H2, nonpemilik ditolak, versi usang diperiksa ulang, riwayat/audit tetap |
| Risiko | Sengketa kepemilikan diputus mesin, konflik dilewati edit biasa |
| Data uji sintetis yang dibutuhkan | Dua nama mirip berbeda, kandidat identik sesuai bukti sintetis, konflik dua field/OPD, pemilik bersama, versi usang |
| Gerbang sebelum pekerjaan | G1/G2/G3; merge historis di luar scope dan perlu gerbang tersendiri |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-07 — Audit dan privasi

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Menjaga nilai resmi dan jejak aman sejak tindakan pertama |
| KB dasar | KB-04/KB-11/KB-12/KB-14/KB-17 |
| Lingkup dan yang tidak termasuk | Audit kritis atomik/akses sensitif/minimisasi/log/privat, rancangan dan pemenuhan salinan independen sesuai gerbang; tanpa klaim dua folder cukup atau semua data boleh dicatat |
| Prasyarat | Rancangan sejak EPIC-01; DT-011/013/016/017 minimum relevan, desain G2 |
| Dependensi | Pondasi wajib lintas EPIC-02–06/08/09; fasilitas salinan diverifikasi G4/G6 sebelum klaim pemenuhan/produksi |
| Kriteria penerimaan mendatang | T11/T12 relevan: gagal audit kritis membatalkan bisnis, gagal kirim pascacommit tertunda/retry, ID stabil, integritas/kelengkapan, tanpa NIK/rahasia di log, ekspor berizin |
| Risiko | Audit ditunda hingga akhir atau mock lokal dianggap kontrol independen produksi |
| Data uji sintetis yang dibutuhkan | Mutasi sintetis, penolakan hak, gagal simpan/gagal kirim/duplikasi event, dokumen dummy tanpa data pribadi |
| Gerbang sebelum pekerjaan | G1/G2/G3; G4/G6 untuk fasilitas/operasi audit; G5 untuk data nyata; G7 produksi |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-08 — Pencarian dan pelaporan dasar

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Memberi rekap yang benar sesuai kewenangan |
| KB dasar | KB-01/KB-04/KB-09/KB-10/KB-11/KB-12/KB-18 |
| Lingkup dan yang tidak termasuk | Cari/filter/daftar dan rekap Unit unik/produk/produksi relevan, status/periode/satuan, laporan berizin; tanpa analitik lanjut/portal publik/integrasi/ekspor universal |
| Prasyarat | EPIC-02–07 sesuai scope, DT-007 Model C dan rincian katalog/mandat/hak DT-003/005/006/011/033; laporan pisahkan induk/field/sektor/agregasi |
| Dependensi | Sumber resmi terverifikasi yang relevan, bukan staging atau draf sektor; izin unduh/ekspor terpisah bila fungsi disetujui |
| Kriteria penerimaan mendatang | T09-15/26 dan ringkasan produksi T09-20–22; T10-25 bila klasifikasi masuk scope, T11-03/14/15/18/26: tanpa duplikasi dan tanpa bocor NIK |
| Risiko | Join produk/pemilik menggandakan jumlah, asumsi kapasitas dianggap statistik |
| Data uji sintetis yang dibutuhkan | Unit dummy banyak pemilik/lokasi/produk, data draf/sah, periode/satuan berbeda dan petugas scope sempit |
| Gerbang sebelum pekerjaan | G1/G2/G3; G5 sebelum data nyata; fungsi ekspor menurut izin khusus |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

### EPIC-09 — Kesiapan operasional

| Unsur | Rancangan untuk pekerjaan mendatang |
| --- | --- |
| Tujuan bisnis | Membuktikan layanan dapat dipelihara dan dipulihkan sebelum produksi |
| KB dasar | KB-11/KB-12/KB-14/KB-17/KB-18 |
| Lingkup dan yang tidak termasuk | Kebutuhan backup/restore/monitoring/insiden/perubahan, rencana-uji berizin dan persiapan deployment; tidak menjalankan server/backup/restore/deploy sekarang |
| Prasyarat | MVP terkait siap diuji, DT-016/017/021–027/034/035 dan izin lingkungan/uji/operasi |
| Dependensi | 55 item hosting, kapasitas aktual/target, salinan audit, data sintetis dan mandat; program tetap fase lanjut |
| Kriteria penerimaan mendatang | T14/T17/T18 relevan kelak: privat/kontrol independen/scheduler/queue/restore terverifikasi, selisih sah ditangani, target sah dibandingkan hasil; tidak klaim layak dari asumsi |
| Risiko | Backup job dianggap pulih, angka RPO/RTO/kuota dikarang atau deployment dari roadmap |
| Data uji sintetis yang dibutuhkan | Himpunan dummy database/dokumen/artefak/audit dan skenario gangguan/selisih tanpa menyentuh produksi |
| Gerbang sebelum pekerjaan | G4/G6; G5 untuk data nyata; deployment hanya setelah G7/DT-030 dan izin tindakan spesifik |
| Status izin | BELUM DIIZINKAN; DIUSULKAN |

## Register keputusan turunan

**36 ID stabil DT-001–DT-036**, tidak mengubah nomor KB. **DT-003 B A3+B1+C2, DT-005 C+F+H2, DT-007 C dan DT-009 C+B2+V2+K2 tetap DISEPAKATI; DT-011 C+D1+M1+E1 MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA.** Lima model dipilih, 31 DT lain tetap status sebelumnya; DT-011 bukan konsistensi/operasional selesai. Model DT-007 tidak menetapkan minimum/OPD/enum/mandat/izin. Usulan penanggung jawab rincian tetap fungsi, bukan nama OPD/pejabat/pengelola PDN. Alternatif pada baris lain belum dipilih.

Tanggal/sumber DT-007 tetap mandat pemilik produk 5 November 2026; DT-003/005/009 mencatat mandat 6 November 2026 serta masing-masing sumber 30+30. Ketiganya bukan penetapan organisasi/SOP teknis. DT-011 mencatat mandat model 6 November 2026 dan 30 RB/30 T; konflik E1 tetap terbuka. Tanggal/status/sumber 31 baris lain tetap. Model KB atau DT-003/005/007/009 yang DISEPAKATI tidak otomatis menutup rincian terkait. DT-019/020/032/036 berada di lingkup lain; jangan dijadikan perintah membangun semua fitur sekarang. DT-031 menyangkut rincian aktivasi, bukan pemilihan ulang KB-10.

| ID | Pertanyaan harus diputuskan | KB terkait | Risiko bila belum diputuskan | Alternatif jika ada | Calon penanggung jawab | Bukti diperlukan | Gerbang terdampak | Status | Tanggal penetapan | Dokumen resmi |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| DT-001 | Bukti apa yang cukup untuk menyatakan lokasi sebagai cabang induk? | KB-01/KB-13 | Unit terpecah/tergabung keliru | Bukti administratif/operasional yang disahkan; belum memilih standar | Pemilik produk dan fungsi pengampu berwenang | Contoh kasus sintetis, daftar bukti dan SOP sah | G1/G2/G3 | DIUSULKAN |  | Belum tersedia |
| DT-002 | Bagaimana pemilik bersama dan perubahan pemilik memengaruhi keterkaitan cabang/relasi? | KB-01/KB-03/KB-08/KB-13 | Riwayat/pemilik terhapus atau semua usaha digabung | Tetapkan kasus batas/masa berlaku; tahan sengketa, bukan ganti pemilik otomatis | Fungsi pengampu/otoritas terkait yang sah | Mandat, standar bukti, aturan relasi dan kasus batas | G1/G2/G3 | DIUSULKAN |  | Belum tersedia |
| DT-003 | Apa kelengkapan minimum dan transisi tiap tahap registrasi? | KB-03/KB-05/KB-09 | A3 dilonggarkan untuk historis, NIB dipaksa wajib atau induk mengesahkan semua field | MODEL B — A3 minimum sebelum draf; B1 dokumen formal relevan; C2 paket minimum induk dengan verifikator berbeda; NIB tidak wajib draf/pengajuan/pengesahan | Pemilik produk menetapkan model; fungsi berwenang untuk rincian bukti/operasional | Mandat model dan 30 RB/30 T tersedia; katalog rinci/standar bukti/mandat masih perlu penetapan | G1/G2/G3 | DISEPAKATI — Model B A3+B1+C2, final tingkat model saja | 6 November 2026 | Mandat pengguna dan sumber DT-003_Rumusan_Resmi_30_RB_30_T.md, [rumusan DT-003](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2); bukan penetapan OPD resmi |
| DT-004 | OPD/fungsi mana ditetapkan sebagai pengelola utama dan apa mandat koordinasinya? | KB-02/KB-04 | Koordinator mengambil alih nilai | Mandat koordinasi saja atau tambahan sah yang dibatasi, tanpa otomatis semua hak | Otoritas organisasi yang sah | Dokumen penetapan/mandat/masa berlaku | G1/G2/G5/G6 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-005 | Siapa tepat satu OPD pemilik aktif setiap field MVP dan bagaimana perubahan kewenangan? | KB-04/KB-08 | Pemasok dianggap pemilik, cakupan tumpang tindih, alih sepihak atau riwayat hilang | MODEL C+F+H2 — fungsi/mandat sah, satu pemilik per kode field/cakupan/waktu efektif, alih melalui penetapan resmi/transisi/audit | Pemilik produk menetapkan model; otoritas organisasi sah untuk OPD/mandat aktual | Mandat model dan 30 RB/30 T tersedia; nama OPD, dokumen penetapan, cakupan/efektif dan penugasan nyata MENUNGGU PENETAPAN | G1/G2/G3/G5 | DISEPAKATI — Model C+F+H2, final model bisnis; rincian aktual MENUNGGU PENETAPAN | 6 November 2026 | Mandat pemilik produk pada lampiran chat DT-005, [rumusan DT-005](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2); bukan penetapan OPD resmi |
| DT-006 | Siapa pembuat profil awal dan verifikator berbeda beserta cakupannya? | KB-05/KB-07 | Pembuat mengesahkan sendiri atau superuser lintas OPD | Penugasan terpisah pada objek terkait, hak field tetap | Pemberi mandat petugas yang sah | Penunjukan/masa tugas/cakupan dan SOP | G1/G2/G3/G5 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-007 | Bagaimana verifikasi dan agregasi profil lintas OPD dipisah menurut cakupan? | KB-02/KB-04/KB-05/KB-07/KB-09/KB-11/KB-12 | Satu field/induk dianggap mengesahkan semua sektor atau agregasi menjadi superuser | MODEL C — Verifikasi Bertingkat Berbasis Cakupan: status induk/field/sektor terpisah, agregasi objek/lingkup/tahap memakai minimum sah berversi dan bukan pengesahan baru | Pemilik produk telah menetapkan model; otoritas berwenang untuk rincian DT-003/005/006/011/033 | Mandat pemilik produk DT-007; rincian katalog/mandat/bukti masih perlu penetapan | G1/G2/G3/G5 | DISEPAKATI — Model C, final tingkat model saja | 5 November 2026 | Keputusan pemilik produk pada chat/lampiran, [rumusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan); bukan penetapan OPD resmi |
| DT-008 | Apa jalur dan pejabat/fungsi sah pemutus sengketa kewenangan? | KB-02/KB-04/KB-08 | Koordinator/admin memindahkan pemilik sepihak | Eskalasi organisasi sesuai mandat; nilai tidak diputus lewat konfigurasi teknis | Otoritas organisasi yang sah | Dasar mandat/SOP eskalasi/perubahan katalog | G1/G2/G3/G5 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-009 | Apa standar bukti, transisi, peninjauan kembali dan SOP koreksi per jenis? | KB-07/KB-08 | Bukti tak relevan, nilai tidak sah dipulihkan, riwayat hilang atau K1–K4 disamakan H2 | MODEL C+B2+V2+K2 — bukti proporsional per klaim berversi, nilai lama hanya jika sah/tidak dibatasi, empat jalur koreksi berjejak | Pemilik produk menetapkan model; pemilik field/otoritas sah untuk standar/risiko/mandat nyata | Mandat dan 30 RB/30 T tersedia; dokumen resmi/kecukupan/masa berlaku/risiko/K4/retensi/OPD/petugas menunggu penetapan | G1/G2/G3/G5 | DISEPAKATI — Model C+B2+V2+K2 final model bisnis; standar operasional MENUNGGU PENETAPAN | 6 November 2026 | Mandat pemilik produk pada lampiran DT-009, [rumusan DT-009](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2); bukan penetapan dokumen wajib/OPD |
| DT-010 | Apa subjek/cakupan legal modal/penjualan, tujuan dan standar periode penilaian? | KB-03/KB-10 | Unit operasional salah dijadikan subjek legal/agregat multiunit | Periksa cakupan sah per tujuan; tidak menjumlah/pisah hanya dari pemilik/cabang | Fungsi berwenang penilaian/kelembagaan | Rujukan aturan, cakupan, bukti/periode dan mandat | G1/G2/G3/G5 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-011 | Apa matriks akses final per field/objek/wilayah/tindakan/tujuan? | KB-04/KB-11 | E1 literal berbenturan izin terpisah KB-11, scope M1 melebar atau D1 dikarang | MODEL C+D1+M1+E1 dipilih apa adanya; paket D1/validasi M1/kebijakan E1 belum tuntas, bukan D2/M2/E2 | Pemilik produk untuk konflik pilihan; pemberi mandat/fungsi PDP sah untuk operasional | Mandat model/30 RB/30 T tersedia; keputusan konflik E1 dan katalog/hak/OPD/petugas aktual belum ada | G1/G2/G3/G5; bagian unduh/ekspor terkait BLOKIR | MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA | 6 November 2026 | Mandat pemilik produk pada lampiran DT-011, [rumusan](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1); bukan matriks operasional disahkan |
| DT-012 | Siapa Pengendali/Prosesor serta fungsi PDP menurut hukum dan hubungan tugasnya? | KB-11/KB-17 | Pemilik field dianggap Pengendali hukum otomatis | Penetapan sesuai struktur/dasar pemrosesan, bukan inferensi dari admin | Otoritas hukum/organisasi yang sah | Dasar pemrosesan dan dokumen penetapan/perjanjian | G5/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-013 | JRA Sinjai/seri arsip dan retensi/penahanan/penyusutan apa yang berlaku? | KB-11/KB-12/KB-17 | Simpan selamanya atau hapus bukti wajib/backup sembarang | Pemetaan seri/komponen berdasarkan JRA sah, bukan angka daerah lain | Fungsi kearsipan/PDP yang sah | JRA yang berlaku dan pemetaan seri/tindakan resmi | G2/G5/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-014 | Apa SOP hak subjek tanpa akun, verifikasi pemohon dan hasil aman? | KB-06/KB-11 | Hak terabaikan atau data pihak ketiga bocor | Pelayanan petugas/saluran sah; tenggat dan redaksi data sesuai konteks | Fungsi layanan/PDP yang sah | SOP identifikasi, tenggat, eskalasi/penyerahan aman | G3/G5/G6 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-015 | Apa penilaian risiko/DPIA yang diperlukan dan siapa menyetujuinya? | KB-11/KB-13/KB-15 | Data nyata dipakai sebelum risiko dinilai | Penilaian sesuai cakupan/risiko tinggi; bukan klaim selesai dari model | Pengendali/fungsi PDP berwenang | Penilaian risiko dan DPIA bila diperlukan beserta keputusan | G5/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-016 | Siapa penanggung jawab/pengelola salinan audit dengan kendali terpisah? | KB-12/KB-14/KB-17 | Admin produksi menguasai/hapus seluruh jejak | Mandat/pemisahan eksekusi dan pengawasan menurut risiko | Otoritas layanan/infrastruktur yang sah | Penetapan/konfigurasi hak/pemisahan kontrol | G2/G4/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-017 | Teknologi/lokasi/transfer/kunci/salinan audit apa yang memenuhi kontrol independen? | KB-12/KB-14/KB-17 | Dua tabel/folder dianggap independen atau event hilang | Opsi teknis setelah bukti fasilitas/risiko, belum memilih produk | Pengelola layanan/infrastruktur dan audit berwenang | Desain rinci/bukti kontrol/pengujian integritas-pemulihan | G2/G4/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-018 | Apa SOP rekonsiliasi, pembalikan merge/split, aturan/bukti/ambang dan mandat? | KB-01/KB-08/KB-13 | Salah gabung dan perubahan sah sesudahnya tertimpa | Deteksi/pencegahan aman dahulu; merge historis tetap ditahan sampai syarat lengkap | Otoritas data/pemilik field yang sah | Katalog aturan berversi, prasyarat, SOP, rencana pulih/uji | G1/G2/G3; gerbang fase merge tersendiri | DIUSULKAN |  | Belum tersedia |
| DT-019 | Sumber/dataset impor mana boleh dipakai dan dengan tujuan/dasar apa? | KB-11/KB-15 | Berkas OPD dianggap resmi/hak akses tanpa izin | Daftar sumber/lingkup/format/SOP staging dan pengesahan sah | Pemilik layanan/sumber data berwenang | Otorisasi/perjanjian/dataset/pemetaan/retensi | G5 dan gerbang lingkup impor tersendiri | DITUNDA |  | Belum tersedia |
| DT-020 | Apa persyaratan, kanal resmi dan izin integrasi eksternal? | KB-11/KB-15 | Hak OSS/Dukcapil diasumsikan tersedia | Keputusan/otorisasi tersendiri; tidak mengaktifkan API/real-time MVP | Otoritas layanan dan instansi sumber yang sah | Mandat/perjanjian/hak/kanal/keamanan resmi | Gerbang integrasi tersendiri/G5/G7 | DITUNDA |  | Belum tersedia |
| DT-021 | Siapa pengelola operasi aplikasi dan PDN, pengganti dan pembagian tanggung jawabnya? | KB-14/KB-17 | Gangguan tanpa pemilik, hak teknis melampaui bisnis | Sahkan fungsi RACI/hak/pengganti, bukan menunjuk orang di dokumen ini | Otoritas layanan/infrastruktur yang sah | Penetapan formal/SOP/dukungan/matriks hak | G4/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-022 | Fasilitas backup/isolasi/enkripsi/kunci/pemisahan apa yang terbukti tersedia? | KB-14/KB-17/KB-18 | Backup tak lengkap/terkompromi/kunci hilang | Verifikasi himpunan database-dokumen-artefak/status/audit dan kontrol menurut mandat | Pengelola operasi/infrastruktur berwenang | Bukti fasilitas dan uji restore berizin, bukan hanya job sukses | G4/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-023 | Berapa RPO/RTO per kelompok layanan berdasarkan dampak dan kemampuan? | KB-17/KB-18 | Target palsu atau kehilangan sah diabaikan | Tetapkan setelah analisis dampak/ketergantungan/SLA/bukti, nilai sekarang kosong | Pemilik layanan/pengelola berwenang | Analisis dampak, target disahkan, bukti ukur/uji | G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-024 | Apa SOP restore/insiden/perubahan darurat dan persetujuan pembukaan? | KB-11/KB-12/KB-17 | Restore menghapus transaksi sah/audit atau tenggat insiden terlambat | 16 langkah/formulir sebagai rancangan, koreksi bisnis tetap field owner | Fungsi operasi/insiden/PDP dan layanan yang sah | SOP/mandat/kanal/SLA/bukti latihan-uji berizin | G4/G5/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-025 | Apa bukti kemampuan PDN/cPanel untuk lingkup yang disetujui? | KB-14/KB-17/KB-18 | Label cPanel dianggap layak | Isi/verifikasi 55 item lewat tugas berizin; opsi bila kritis tidak terpenuhi | Pengelola infrastruktur/layanan berwenang | Bukti aktual/ruang lingkup/tanggal/pemeriksa/mitigasi | G4/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-026 | Berapa volume faktual dan pola penggunaan per objek/aktivitas/periode? | KB-18 | Asumsi menjadi statistik/kuota resmi | Kumpulkan sumber sah; skenario contoh tetap ASUMSI/PROYEKSI | Fungsi penyedia data/pengelola yang sah | Sumber/tanggal/definisi/cakupan/metode/verifikator | G4/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-027 | Apa hasil uji kapasitas berizin pada target/profil/lingkungan yang relevan? | KB-14/KB-18 | RPS contoh dianggap benchmark atau kapasitas maksimum universal | Uji sah setelah izin; sekarang tidak ada load test/hasil ukur | Pengelola teknis/pemeriksa berwenang | Otorisasi, konfigurasi/profil/data sintetis/metode/hasil | G4/G6/G7 | MENUNGGU BUKTI |  | Belum tersedia |
| DT-028 | Apakah mulai coding lokal untuk lingkup/backlog tertentu telah diizinkan? | KB-09 dan seluruh batas tugas | Izin fondasi dianggap izin seluruh domain/data nyata/produksi | Baseline G1-A/B1/B2/B3.1/B3.2 diterima; G1-B3.3 C2 paket minimum lokal sintetis disetujui | Pemilik proyek/produk | Mandat B3.3 dan kontrak/hasil 36–39; MySQL/HTTP/browser belum diverifikasi independen | G1 tahap terkait | DISETUJUI TERBATAS sampai G1-B3.3; bukan seluruh MVP | 7 November 2026 | [Hasil G1-B3.3](39-laporan-hasil-g1b33.md); field/data nyata/produksi tetap tertutup |
| DT-029 | Apakah penggunaan data pribadi nyata pada tujuan/lingkungan tertentu telah diizinkan? | KB-11/KB-17 | Data nyata dipakai dari izin coding saja | Persetujuan terpisah setelah dasar/akses/retensi/risiko/keamanan sah | Pengendali/otoritas layanan yang sah | Mandat/tujuan/dasar, kebijakan/SOP/bukti dan izin eksplisit | G5 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-030 | Apakah deployment produksi untuk versi/lingkup tertentu telah disetujui? | KB-14/KB-17/KB-18 | Dokumen/uji lokal dianggap izin produksi | Persetujuan spesifik setelah kewajiban kritis/hasil uji/bukti terpenuhi | Pemilik layanan/otoritas produksi yang sah | Keputusan rilis, hasil uji, audit kesiapan, rencana pemulihan | G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-031 | Apakah mesin usulan/pengesahan skala KB-10 wajib diaktifkan pada MVP pertama atau lingkup berikutnya? | KB-09/KB-10 | Seluruh model dipilih dianggap semua fiturnya wajib MVP | Penegasan lingkup aktivasi; referensi KBLI/versi tetap untuk kegiatan, Model B skala tidak dipilih ulang | Pemilik produk dengan fungsi penilaian sah | Pernyataan lingkup dan kriteria penerimaan fitur, DT-010 | G1/G2/G3 sesuai lingkup | DIUSULKAN |  | Belum tersedia |
| DT-032 | Kapan dan lingkup apa impor manual staging boleh dibangun/diaktifkan? | KB-09/KB-15 | Larangan impor langsung dibaca izin semua impor manual di MVP | Rancangan bersyarat/keputusan lingkup terpisah; tidak memasukkan modul impor ke epic wajib | Pemilik produk/otoritas sumber sah | Cakupan/mandat/DT-019/pemetaan/ukuran/retensi/izin | Gerbang lingkup impor/G1/G4/G5 terkait | DITUNDA |  | Belum tersedia |
| DT-033 | Apa referensi status/satuan/konversi/periode dan bukti sektoral final? | KB-03/KB-09/KB-10 | Draf dianggap lengkap, satuan tercampur atau frekuensi bulanan dipaksakan | Rincian referensi disahkan; bidang W/K/O/B tetap, data periodik tanpa menimpa | Pemilik field/otoritas referensi yang sah | Kamus/referensi berversi/aturan konversi/bukti | G1/G2/G3/G5 | DIUSULKAN |  | Belum tersedia |
| DT-034 | Apa zona waktu layanan/acuan waktu dan penyelarasan jam untuk audit/pemulihan? | KB-12/KB-17 | Waktu audit/target pemulihan salah dibandingkan | Tentukan konvensi sumber/tampil/ukur yang sah; zona waktu komputer bukan keputusan layanan | Pengelola layanan/infrastruktur berwenang | Kebijakan waktu dan bukti konsistensi saat uji berizin | G2/G4/G6 | DIUSULKAN |  | Belum tersedia |
| DT-035 | Apa target kinerja/ambang peningkatan, biaya dan persetujuan sumber daya awal? | KB-14/KB-17/KB-18 | Belanja kuota dari asumsi atau pemicu otomatis tanpa mandat | Tetapkan sesudah DT-025/026/027 sesuai tahapan, cadangan/opsi tidak dipilih sepihak | Pemilik layanan/infrastruktur/fungsi anggaran yang sah | Target/ambang/bukti/analisis opsi/keputusan biaya | G4/G6/G7 | MENUNGGU PENETAPAN |  | Belum tersedia |
| DT-036 | Program pertama, OPD/kode/sasaran/indikator/bukti/retensi fase KB-16 apa yang sah? | KB-16/KB-11 | Modul lanjut masuk MVP atau catatan nominal menjadi pembayaran | Penetapan lingkup fase program sesudah MVP; pembayaran tetap di luar | Pemilik produk/otoritas program yang sah | Cakupan/mandat/nomenklatur/SOP/indikator/JRA/izin | Gerbang fase program tersendiri | DITUNDA |  | Belum tersedia |

### Penerimaan model DT-007 dan dependensi yang belum selesai

[Rumusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) menambah **28 RB-DT007.01–RB-DT007.28 dan 28 T-DT007.01–T-DT007.28** pada ruang penomoran terpisah, tanpa mengubah 307 RB/294 T KB-08–KB-18. Seluruh T tetap rencana, tidak ada pengujian aplikasi. KA-02 diselaraskan pada tingkat model. DT-003 kini DISEPAKATI B A3+B1+C2, **30 RB/30 T resmi tersedia terpisah dari 28+28 DT-007**, seluruh T rencana. DT-005 C+F+H2 DISEPAKATI pada model, rincian OPD/mandat nyata MENUNGGU PENETAPAN; DT-006 MENUNGGU PENETAPAN; DT-011 C+D1+M1+E1 MODEL DIPILIH dengan konsistensi/implementasi TERBUKA, DT-009 C+B2+V2+K2 DISEPAKATI pada model dengan standar bukti/operasional MENUNGGU PENETAPAN; DT-033 DIUSULKAN dan DT-019 DITUNDA tetap, standar bukti/rincian operasional belum final.

G0 tetap siap ditinjau setelah pemeriksaan dokumentasi DT-003/007 dan lampiran historis; bukan persetujuan pengguna atau hasil uji. G1 coding belum diberikan, G2 perlu katalog/mandat/hak cukup jelas, G3 belum mempunyai hasil 28 kasus, G5 data nyata memerlukan dasar/mandat/izin. Baris status seluruh G0–G7 berikut **tidak diubah** tanpa bukti.

## Quality gate G0–G7

Quality gate adalah titik pemeriksaan/persetujuan berbasis bukti. **Angka gerbang bukan izin otomatis atau urutan kaku semua kegiatan**: bukti fasilitas G4 harus sesuai cakupan lingkungan uji yang dipakai dan dapat disiapkan sebelum uji terkait, termasuk lokal bila relevan; bukti/izin lokal tidak meluluskan lingkup PDN atau memberi akses ke sana; G5 terpisah dari coding dan wajib sebelum data nyata. G6 dapat dibuktikan dengan sintetis pada lingkungan berizin tanpa mengklaim G5 lulus. Produksi tetap memerlukan G7 dan seluruh kewajiban kritis yang relevan.

| Gerbang | Tujuan | Syarat masuk | Artefak bukti | Kriteria lulus | Kriteria gagal/tertahan | Pemberi persetujuan yang perlu ditetapkan | Status aktual | Tindakan jika belum lulus |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| G0 | Konsolidasi dokumentasi | Mandat audit dan sumber dokumentasi tersedia | Baseline, matriks 18 KB, KA/DT, batas MVP, pemeriksaan tautan/rumus/arsip | 18 model terlacak, konflik/rincian tercatat, lingkup konsisten dan dokumen diperiksa | Kekosongan sumber/ketidakselarasan substansial tidak dicatat | Pemilik proyek/produk untuk peninjauan; belum menyetujui baseline | SIAP DIAJUKAN UNTUK PENINJAUAN | Tinjau DT/temuan dan baseline; catat keputusan pengguna terpisah |
| G1 | Persetujuan mulai coding lokal | Mandat eksplisit sampai G1-B3.3, lokal/sintetis | Baseline diterima dan kontrak/tes/HTTP/visual/manifest B3.3; bukan verifikasi independen | C2 paket minimum induk pada scope, bukan semua field/sektor/MVP | Memperluas ke field operasional/K1–K4 penuh/E1/data nyata/produksi tanpa izin | Pemilik proyek/produk; pihak bisnis berwenang untuk rincian terkait | DISETUJUI TERBATAS sampai G1-B3.3; bukan G1 seluruh MVP lulus | Hentikan pada B3.3; izin berikutnya terpisah |
| G2 | Kesiapan fondasi teknis | G1 untuk pekerjaan kode; kompatibilitas kandidat dan desain fondasi ditinjau | Bukti teknologi/versi/lock kelak, desain identitas/hak/audit/keamanan/uji disetujui | Kandidat cocok pada target berizin dan desain/integritas/akses/strategi uji diterima | Bukti platform belum tersedia atau desain/aturan kritis belum jelas | Pemilik teknis/produk dan pemilik kewenangan terkait, harus ditetapkan | BELUM DINILAI | Verifikasi baca-saja bila diizinkan; pembangunan/instalasi hanya setelah izin relevan |
| G3 | Pengujian fungsi MVP | Fondasi G2, lingkup uji/AC/aturan dan lingkungan sintetis diizinkan | Hasil uji identitas/relasi/registrasi/sektor/konflik/privasi/audit/duplikat dan perbaikan | Uji penerimaan lingkup MVP lulus; penolakan server/integritas terbukti | Belum ada aplikasi/hasil uji atau kegagalan kritis belum ditutup | Pemilik produk/fungsi penerima bisnis dan pemeriksa teknis sah | BELUM DINILAI | Siapkan rencana saja; tidak mengubah 294 skenario terdahulu menjadi klaim hasil |
| G4 | Kesiapan lingkungan nonproduksi | Lingkup infrastruktur uji dan aksesnya disetujui | Bukti fasilitas privat/isolasi/scheduler/queue/audit menurut scope, konfigurasi dan izin | Lingkungan dan proses dapat memenuhi pengujian terkait secara aman | Tidak ada fasilitas/izin/bukti atau kendali kritis scope uji tak dapat dipenuhi | Pengelola layanan/infrastruktur berwenang, harus ditetapkan | BELUM DINILAI | Minta/verifikasi bukti pada tugas berizin; tidak mengakses PDN sekarang |
| G5 | Kesiapan penggunaan data nyata | Mandat/tujuan/dasar, akses, SOP, retensi/keamanan dan penilaian risiko diperlukan tersedia | DT-011–015/029, dasar pemrosesan/mandat/JRA/SOP/risiko-DPIA bila perlu/izin eksplisit | Seluruh syarat relevan dan izin penggunaan data nyata untuk tujuan/lingkungan sah | Izin/dasar/penetapan/bukti belum tersedia; sintesis bukan alasan melompati gerbang saat beralih nyata | Pengendali/otoritas layanan/PDP yang sah, harus ditetapkan | BELUM LULUS | Tetap data sintetis; izin coding/uji tidak memberi izin data nyata |
| G6 | Kesiapan operasional | Lingkup operasi/infrastruktur sah, bukti fasilitas/target/kapasitas tersedia | Pemilik operasi, backup/restore teruji, monitoring/insiden/perubahan, RPO/RTO/kapasitas, audit independen | Fasilitas/operasi/target teruji dan kritis ditutup; transaksi sah/audit/privasi terjaga | Template/backup job saja, RPO/RTO kosong atau audit/restore/kapasitas belum terbukti | Pemilik layanan/operasi/infrastruktur dan pengawas sah | BELUM DINILAI | Lengkapi DT-016/017/021–027/034/035 dan pengujian berizin; belum operasi |
| G7 | Persetujuan produksi | Gerbang/kewajiban kritis relevan, hasil uji dan otorisasi rilis lengkap; G5 untuk data nyata | Hasil G2–G6 relevan, penerimaan MVP, keputusan DT-030, rencana rilis/pemulihan dan dukungan | Versi/scope produksi diterima dan disetujui pihak sah; bukti kritis lengkap | Persetujuan belum diberikan atau ada gap kritis/izin/hasil uji yang belum tersedia | Pemilik layanan/otoritas produksi yang sah, harus ditetapkan | BELUM LULUS | Tahan deployment, tutup gap dan ajukan keputusan produksi tersendiri |

G0 “siap diajukan” menyatakan dokumen tersedia/diperiksa, bukan penerimaan pengguna. Status BELUM LULUS menyatakan izin/syarat belum terpenuhi, **bukan hasil uji aplikasi gagal**. G2/G3/G4/G6 belum dinilai karena bukti yang diperlukan belum tersedia. Tidak ada tanggal lulus/persetujuan fiktif.

## Risiko utama

| Risiko | Kendali baseline dan keterbatasan |
| --- | --- |
| Model DISEPAKATI dibaca semua rincian/izin final | Pisahkan status model/DT/gerbang/hasil faktual, G1/G5/G7 belum lulus |
| Pengesahan profil lintas OPD menjadi superuser | DT-003 B A3+B1+C2 dan DT-007 C dipilih; induk/field/sektor terpisah, rincian katalog/bukti/mandat DT-003/005/009/033 belum final |
| Identitas/cabang/merge salah | Definisi tetap, kanonik/alias/riwayat, DT-001/002/018 dan deteksi aman |
| Salah subjek/tujuan/periode ekonomi | DT-010/031; hasil hitung usulan dan cakupan tidak diagregasi hanya dari pemilik |
| Bocor NIK/bukti/ekspor/backup atau retensi tidak sah | KB-11, matriks akses dan peran hukum/JRA/risiko/data nyata belum final |
| Audit kontrol sama dianggap terpisah | KB-12/KA-06; desain lokal/simulasi bukan bukti produksi, verifikasi G4/G6 |
| Scope impor/merge/program membengkak | Matriks batas dan jalur tersendiri, bukan seluruh RB/T wajib MVP |
| Kapasitas/hosting palsu | 55 aktual belum diketahui, asumsi/proyeksi bukan statistik/benchmark; G4/G6 belum dinilai |
| Restore/ulang proses menimpa transaksi sah | Backup berbeda dari audit/koreksi, versi/penerapan sekali/selisih menurut KB-12/KB-17 |
| Dokumen sumber lama dianggap terkini tanpa konteks | Catatan historis dipertahankan, baseline merujuk keputusan terbaru tanpa menghapus RB/T lama |

## Persyaratan sebelum penggunaan data nyata

G5/DT-029 memerlukan dasar/tujuan/cakupan pemrosesan sah, mandat/pemisahan peran Pengendali/Prosesor/fungsi PDP yang perlu ditetapkan, akses/penugasan/klasifikasi field, prosedur layanan hak tanpa akun dan penanganan insiden, retensi/JRA/penahanan/penyusutan, keamanan dokumen/ekspor/audit/backup serta penilaian risiko dan DPIA bila diperlukan. Bukti/penetapan dan izin eksplisit harus sesuai lingkungan/tujuan yang dipakai.

Izin coding lokal atau uji sintetis bukan izin memperoleh/memakai data UMKM nyata, salinan produksi tersamarkan sebagian atau berkas OPD. Seluruh data uji mendatang tetap sintetis sampai dasar/izin/gerbang terkait benar-benar dipenuhi; saat ini tidak ada pengujian/data contoh yang dibuat.

## Persyaratan sebelum produksi

G7/DT-030 menunggu hasil uji fungsi/integritas/privasi/hak/audit/duplikat yang relevan, lingkungan/fasilitas terverifikasi KB-14, kontrol salinan independen, tanggung jawab dan bukti backup/restore/monitoring/insiden/perubahan, target RPO/RTO/kapasitas/kinerja yang sah dan bukti memenuhi, serta persetujuan versi/lingkup/risiko/rilis/pemulihan/dukungan. Untuk data nyata, G5 juga wajib; dokumen ini tidak memberi pengecualian dari kendali kritis.

Hosting/kapasitas sekarang tetap **BELUM DAPAT DINILAI**, target RPO/RTO/ambang dan hasil uji belum ada. Tidak menganggap login terbuka, job backup sukses, dua folder audit, model simulasi atau dokumen lengkap sebagai bukti produksi layak.

## Daftar dokumen sumber

| Dokumen | Peran dan kedudukan |
| --- | --- |
| [AGENTS.md](../AGENTS.md) | Panduan tetap/batas tindakan, selalu dibaca bersama mandat terbaru dan baseline ini |
| [Indeks](README.md) | Pintu navigasi menuju baseline dan sumber rinci |
| [01 — Kondisi awal](01-kondisi-awal.md) | Pemeriksaan lokal historis, bukan bukti hosting/kompatibilitas kini |
| [02 — Arsitektur](02-arsitektur-awal.md) | Modular monolith, SSOT, batas modul/keamanan/audit/operasi |
| [03 — Entitas/relasi](03-entitas-dan-relasi.md) | Arti objek, hubungan M:N, profil/produk/histori dan identitas |
| [04 — Tata kelola](04-tata-kelola-data.md) | Kewenangan, registrasi, konflik, privasi/audit dan pemulihan |
| [05 — Roadmap](05-roadmap.md) | Tahap/jalur/gerbang pekerjaan kelak, bukan perintah eksekusi |
| [06 — Keputusan bisnis](06-keputusan-bisnis.md) | Register/model dan rumusan rinci KB-08–KB-18/RB/kriteria/T, histori tetap |
| [07 — Hosting](07-checklist-hosting-cpanel.md) | 55 item/sepuluh kelompok/13 kolom seluruh aktual belum diketahui; tidak diubah oleh audit ini |
| [08 — Audit](08-audit-konsistensi-dokumentasi.md) | Jejak temuan/penyelarasan terdahulu dan addendum konsolidasi |
| [09 — Kapasitas](09-perencanaan-kapasitas.md) | Parameter/rumus/desimal/skenario ASUMSI/PROYEKSI tetap; catatan sumber historis bukan angka Unit unik |
| [11 — Audit baseline historis](11-audit-baseline-data-historis.md) | Agregat laporan, pemetaan belum pasti, dua jalur A3/B1/C2 dan klarifikasi penyebut; bukan inspeksi Excel/izin impor |
| [Kamus data](kamus-data-mvp-kb09.md) | Field W/K/O/B dan metadata/profil/status konseptual, bukan skema final |
| [Matriks kewenangan](matriks-kewenangan-mvp-kb09.md) | Usulan hak/peran/RACI, bukan penetapan OPD/akun/petugas |

Sumber mandat/penegasan model utama: permintaan pemilik produk yang tersimpan pada rumusan proyek dan instruksi konsolidasi terbaru. Audit tidak mengakses chat privat/sistem OPD/server/OSS/Dukcapil, tidak meminta kredensial atau mencari statistik untuk mengisi asumsi menjadi fakta.

### Hasil pemeriksaan dokumentasi

Pemeriksaan meliputi register 18 KB, inventaris unik 307 RB/294 T, 18 kriteria KB-08, isi lintas sembilan isu KA, prioritas/identitas/kewenangan/status, scope/epic/DT/gerbang dan jalur lanjutan. Pemeriksaan tautan lokal/anchor, tabel/blok Markdown, ID/rujukan, kategori/satuan/rumus kapasitas dan pemindaian pola rahasia/NIK dilakukan tanpa menampilkan nilai sensitif. Tidak ada pernyataan pemindaian saja menjamin seluruh rahasia mustahil ada.

Aritmetika kapasitas diverifikasi sebagai perhitungan dokumen, bukan benchmark/uji teknis. Source RB/T/register dan catatan historis tetap. Tidak ada metadata Git di proyek dan Git tidak diinisialisasi. Penyerahan mengikuti ZIP Markdown baru/berubah, daftar/jumlah entri dan SHA-256 dibandingkan sumber final, tanpa ZIP lama/rahasia/data pribadi.

## Hal yang secara eksplisit belum disetujui

Baseline belum mendapat persetujuan pemilik proyek; G0 hanya siap ditinjau. Belum ada izin coding lokal/instalasi/paket, pembuatan database/skema/migrasi/seeder/test otomatis, penggunaan data nyata, akses server/PDN/cPanel/OPD/OSS/Dukcapil/layanan akses khusus, load test/backup/restore/deployment, konfigurasi/kuota/cron/DNS atau pengadaan.

OPD/petugas/mandat/hak integrasi, rincian SOP/minimum/transisi/bukti agregasi DT-007, peran hukum/JRA/risiko, strategi/lokasi/teknologi audit/backup, volume faktual/kuota/target/ambang/biaya/hasil uji dan aktivasi fitur turunan belum diputuskan melalui audit ini. Jika ditemukan kontradiksi substantif baru, catat sebagai DT dengan alternatif/dampak untuk pihak sah, jangan memilih sepihak.

Tahap ini berakhir pada **dokumentasi dan konsolidasi**. Rekomendasi berikutnya: tinjau G0/DT prioritas → sahkan lingkup/backlog/aturan minimum relevan → persetujuan coding lokal G1 pada tahap terpisah → fondasi/tes sintetis dan bukti lingkungan sesuai izin → tata kelola data nyata/operasi/produksi melalui gerbang masing-masing.

## Penyelarasan DT-003 dan sumber historis — 6 November 2026

DT-003 Model B menetapkan A3 sebelum menyimpan draf baru: minimal satu pihak berjenis jelas/peran tercatat, satu lokasi usaha, satu kegiatan yang dikenali, penanda usaha, sumber, petugas/waktu. B1 memerlukan dokumen formal relevan sesuai objek/klaim dan standar sah yang rinciannya masih terbuka. C2 mengesahkan paket minimum induk oleh verifikator berbeda/mandat aktif. **NIB tidak wajib pada draf, pengajuan maupun pengesahan induk.** A3 bukan bukti isi sah; pengesahan induk bukan pengesahan seluruh field/sektor.

Registrasi baru: petugas → A3 → draf → pengajuan/B1 → verifikator berbeda → C2. Historis: sumber → staging privat → pemetaan/validasi → kandidat rekonsiliasi → pelengkapan A3 → B1 → C2. **Staging bukan draf resmi atau SSOT**, dan yang belum A3 hanya ditampung sesuai dasar/izin/retensi sah pada fase berizin. Lingkup impor tetap DT-019/032, bukan kewajiban seluruh epic MVP. Koreksi/penolakan menjaga alasan/keputusan/riwayat; pengarsipan memerlukan dasar sah, tanpa penghapusan otomatis.

[Lampiran 11](11-audit-baseline-data-historis.md) mengutip laporan 6 November: 5.213 baris bernomor daftar NIB, 42.730 baris DATA UKM, **HASIL INSPEKSI FILE, BUKAN JUMLAH UMKM UNIK RESMI**. Tidak membuka Excel. Dua kelompok hitungan format berjumlah 5.218, berbeda dari penyebut 5.213 (AH-01); nilai sumber dipertahankan dan perlu klarifikasi. Alamat pemilik bukan lokasi usaha, Kuliner bukan otomatis pangan, nomor izin bukan bukti formal tervalidasi, pengenal sama bukan satu Unit.

18 model KB, 307 RB/294 T KB dan 18 kriteria KB-08 tetap; DT-007 tetap 28 RB/28 T. DT-003 menambah **30 RB/30 T dari sumber resmi** pada ruang penomorannya sendiri. Kelengkapan sumber kini **30/30 aturan dan 30/30 skenario**, bukan kelulusan pengujian. Register tetap 36 DT, lima model DT-003/005/007/009/011 dipilih, 31 DT lain belum final; DT-011 sendiri terbuka konsistensi/operasional; rincian penetapan DT-005/009 serta DT-006/011/019/033 tidak ditutup.

Status delapan baris G0–G7 tetap. G1 coding **BELUM DIIZINKAN** (status gerbang BELUM LULUS); G0 siap diajukan peninjauan dan belum disetujui. Hosting/kapasitas BELUM DAPAT DINILAI. Seluruh pekerjaan hanya Markdown/ZIP, tanpa kode/database/server/Excel/data per orang/impor/merge/deployment.

## Konsolidasi DT-005 C+F+H2 — 6 November 2026

Model final: **C fungsi/mandat resmi + F kode field + H2 penetapan perubahan resmi**. Tepat satu OPD aktif untuk kode field/cakupan/waktu efektif. Cakupan berbeda yang beririsan tetap harus dicegah; ini memperinci satu pemilik KB-04, bukan memberi dua pemilik untuk nilai sama. Nama OPD, pejabat penetap, mandat, cakupan nyata, versi/efektif dan penugasan masih MENUNGGU PENETAPAN.

[Keputusan DT-005](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2) memuat lengkap **30 RB/30 T** dari mandat, enam peran dan koordinator, dua lapisan katalog, sepuluh tahap H2 dan 15 kasus batas. T belum dijalankan. [Matriks](matriks-kewenangan-mvp-kb09.md#katalog-usulan-per-kode-field--dt-005) menurunkan lima fungsi usulan menjadi 96 kode acuan; [kamus](kamus-data-mvp-kb09.md#dua-lapisan-katalog-kewenangan--dt-005) memisahkan definisi field dari penetapan pemilik. Kode konseptual bukan tabel/konfigurasi nyata, kelas sensitivitas final tidak ditetapkan.

H2 memerlukan mandat sah/tanggal efektif, transisi petugas/hak dan pengajuan tertunda, tanpa tumpang tindih, konfigurasi atas keputusan serta audit/pengawasan. Pengesahan/mandat historis tidak ditulis ulang; pemilik baru tidak mengesahkan antrean otomatis. Pemasok/pencatat pertama bukan pemilik. Admin/koordinator tidak mendapatkan hak bisnis global, C2 tetap berbeda dari pembuat dan hanya paket minimum induk. KB-11 membatasi tindakan/tujuan/akses sensitif; perubahan kritis dan audit operasional KB-12 atomik.

DT-004/006/008/009/011/012/019/033 tetap status sumber, rincian aktual DT-005 belum ditutup. Model DT-003 B A3+B1+C2 dan DT-007 C, seluruh KB serta sembilan epic/MVP tetap. DT-031/032 tidak diaktifkan melalui matriks ekonomi atau jalur historis. Lampiran 11 hanya agregat laporan; pemasok Excel tidak memiliki field otomatis, angka sumber/AH-01 tidak diubah.

Register 36 DT kini lima model DT-003/005/007/009/011 dipilih/31 DT lain belum final; DT-011 tetap konflik/konsistensi terbuka. Sumber 307 RB/294 T KB + 18 kriteria KB-08 tetap, DT-007 tetap 28+28 dan DT-003 tetap 30+30; DT-005 menambah 30+30 terpisah. Tidak menyamakan jumlah skenario dengan tes wajib semua fitur MVP atau hasil uji.

Delapan baris G0–G7 tetap. G0 siap diajukan peninjauan, belum disetujui. G1 coding BELUM DIBERIKAN/BELUM LULUS, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting/kapasitas BELUM DAPAT DINILAI; hasil hanya Markdown/ZIP tanpa kode/database/server/Excel/data pribadi/konfigurasi hak nyata atau deployment.

## Konsolidasi DT-009 C+B2+V2+K2 — 6 November 2026

[Keputusan DT-009](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2) **DISEPAKATI final MODEL BISNIS**, memuat lengkap 30 RB/30 T sumber mandat dan 22 kasus batas. B2 memakai katalog sah berversi per objek/klaim/field/risiko/sensitivitas; [16 kelompok bukti](kamus-data-mvp-kb09.md#katalog-bukti-per-kelompok-klaim--dt-009) adalah USULAN/MENUNGGU PENETAPAN kategori dokumen/standar. Penilaian MEMADAI bukan pengesahan nilai, katalog belum sah → BELUM DAPAT DINILAI. B1 tidak dilonggarkan, NIB tetap tidak wajib.

Komponen K2 berarti empat jalur: K1 administratif, K2 fakta/efektif, K3 historis/periode dan K4 konflik/risiko tinggi. K1–K3 bukan dua pengesah wajib, K4 bukan otomatis dua tanda tangan; KB-07 satu pengesah biasa berwenang tetap. H2 alih pemilik organisasi DT-005 tetap terpisah. [Tata kelola](04-tata-kelola-data.md#transisi-usulan-koreksi--dt-009) merancang 14 transisi delapan status usulan, terpisah induk/field/sektor/kasus konflik; enum/hak operasional belum final.

V2 menjaga nilai lama hanya selama sah/tidak dibatasi. Usulan tidak menimpa otomatis, penolakan tidak menghidupkan nilai kedaluwarsa/dicabut dan efektif mendatang tidak dimajukan. Keputusan pembatasan memiliki alasan/otoritas/lingkup/audit; konflik relevan tetap menahan kesimpulan positif DT-007 meski nilai lama tersimpan. Versi usang diperiksa ulang; koreksi/keputusan/metadata pembatasan kritis dan audit KB-12 atomik. KB-11 melindungi bukti dan salinannya, tanpa retensi/ambang angka tebakan.

Dokumen formal yang diterima, kecukupan/masa berlaku, klasifikasi/ambang risiko, otoritas/prosedur K4, retensi/akses bukti, OPD/petugas nyata belum ditetapkan. DT-006/008/011/012/019/033 tidak ditutup, DT-004/013 serta rincian DT-005 tetap. KB-01–18, DT-003 B A3+B1+C2, DT-005 C+F+H2, DT-007 C dan MVP tetap. Data historis hanya bahan/usulan, tidak lulus bukti dari angka Excel; angka audit/AH-01 tetap.

Register 36 DT kini lima model DT-003/005/007/009/011 dipilih, 31 DT lain belum final; DT-011 sendiri belum tuntas. Sumber 307 RB/294 T KB, 18 kriteria KB-08, 28+28 DT-007, 30+30 DT-003 dan 30+30 DT-005 tetap; DT-009 menambah 30+30 terpisah, **semua T rencana belum dijalankan**. Tidak memperluas epic dengan mesin skala/impor/program atau mengklaim semua skenario wajib semua fitur MVP.

G0 tetap siap diajukan peninjauan, belum persetujuan baseline. G1 coding BELUM DIBERIKAN/BELUM LULUS, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Delapan baris gerbang tetap; hosting/kapasitas BELUM DAPAT DINILAI. Tidak ada kode/tes aplikasi/database/server/layanan eksternal/data pribadi/impor/merge/deploy/backup/restore.

## Konflik dan Prasyarat DT-011 untuk G1

**C+D1+M1+E1 dipilih**, 6 November 2026. Status **MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA**. [Sumber DT-011](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1) memuat tepat 30 RB/30 T dan 24 kasus batas; seluruh T belum dijalankan.

D1 paket dasar OPD belum ditetapkan; keterkaitan harus sah/diaudit, tanpa hak sensitif/pengesahan otomatis. M1 gabungan seluruh penugasan aktif/sah dengan cakupan asal, bukan satu mandat eksklusif sesi atau silang field/wilayah. Larangan tugas/pembuat mengesahkan sendiri tetap; validasi/detail operasional masih diperlukan.

**E1 literal hak baca otomatis unduh/ekspor bertentangan dengan RB-11.07/21/T11-14. KONFLIK KEBIJAKAN TERBUKA** pada KA-05, bukan sekadar penetapan yang dianggap selesai. Implementasi unduh/ekspor terdampak BLOKIR sampai keputusan pemilik produk. Kebutuhan batas tambahan yang mengubah E1 tidak dianggap disetujui sebagai E2. KB-11 tetap, E1 tetap, Codex tidak memilih pengganti.

[Matriks 19 tindakan](matriks-kewenangan-mvp-kb09.md#model-hak-cd1m1e1--dt-011) dan [dampak 8 konteks/10 dimensi](04-tata-kelola-data.md#dampak-e1--dt-011) memisahkan baris/field/sensitivitas/tujuan/penerima/masa/pencabutan/audit/pengungkapan/massal. Paket D1, validasi M1, kebijakan E1, OPD/petugas nyata serta izin data pribadi belum tersedia. Tidak menutup keputusan lain atau membuat nomor KB/DT baru.

Register tetap 36 DT: lima model dipilih, 31 DT lain belum final, DT-011 sendiri belum tuntas konsistensi/operasional. Seluruh 18 KB/307 RB/294 T/18 kriteria KB-08, 28+28 DT-007 dan paket 30+30 DT-003/005/009 tetap; 30+30 DT-011 terpisah. Semua skenario rencana, bukan tes aplikasi atau semua fitur wajib MVP.

G0 siap ditinjau **dengan konflik terlihat**, belum persetujuan baseline; seluruh delapan baris G0–G7 tetap. G1 coding BELUM DIBERIKAN/BELUM LULUS, rincian/konflik menahan bagian terdampak. G2 kontrak otorisasi belum disetujui/BELUM DINILAI, G3/G4/G6 BELUM DINILAI, G5/G7 BELUM LULUS, data nyata/produksi belum diizinkan. Hosting BELUM DAPAT DINILAI. MVP/epic/aktivasi tahap lanjut tetap; tidak ada kode/tes/database/akun/hak nyata/ekspor/server/data pribadi.

## Addendum persiapan fondasi lokal dan usulan G1 — 6 November 2026

Mandat terbaru meminta review paket/prototipe dan kontrak sebelum inisialisasi. [Kontrak MVP](12-kontrak-mvp-pra-coding.md) memetakan 18 KB/DT terkait; [backlog](13-backlog-mvp-terprioritas.md) mempertahankan 19 ID sumber; [kontrak teknis](14-kontrak-teknis-fondasi-lokal.md) merinci lingkungan/file/dependensi/tujuh modul/sepuluh kelompok migrasi konseptual/44 AC; [review](15-review-paket-prototipe-dan-kesiapan-g1.md) menelusuri sumber/hasil/temuan.

PHP CLI 8.3.31/Composer 2.10.2/Node 24.13.1/npm 11.8.0 tersedia. MySQL proyek belum terbukti siap. XAMPP adalah MariaDB 10.4.32, tidak mengganti MySQL. Nama folder Laragon bukan bukti bin/layanan. Tidak ada koneksi DB/akses hosting.

Prototipe PHP sumber direview pada salinan temp tanpa perubahan isi, 15 pemeriksaan bawaan lulus, delapan temuan belum diperbaiki. Ini coding awal terpisah, **Laravel belum dibuat/diuji**; hasil bukan G2/G3 lulus atau seluruh 148 T-DT lulus.

G1-A/B usulan batas tahap di dalam G1, bukan gerbang baru. **G1-A siap diajukan tetapi BELUM DIIZINKAN** untuk fondasi/dependensi/build/tes tanpa DB; B perlu MySQL/desain/scope/izin terpisah. DT-028 dan seluruh 36 baris DT tetap status sumber, tidak disetujui dari paket/dokumen.

Seluruh model KB/DT-003/005/007/009/011, sembilan epic/MVP dan konflik E1 tetap. Tidak menetapkan OPD/petugas/dokumen wajib/hak nyata, tidak mengaktifkan impor/skala/program/unduh-ekspor. G0 siap ditinjau dengan konflik terlihat, belum disetujui baseline. Delapan baris gerbang tetap: G1/G5/G7 belum lulus; G2/G3/G4/G6 belum dinilai. Hosting BELUM DAPAT DINILAI. Tahap tetap perencanaan, tanpa instalasi/Git/framework/DB/migrasi/data nyata/server/deployment.
