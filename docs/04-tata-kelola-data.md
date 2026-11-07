# Tata kelola data, koreksi, akses, dan audit

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Petunjuk DT-011 terkini:** C+D1+M1+E1 dipilih. E1 otomatis baca→unduh/ekspor berbenturan dengan pemisahan tindakan KB-11 yang tetap tercatat di bawah. [Dampak E1](#dampak-e1--dt-011) menandai KONFLIK KEBIJAKAN TERBUKA dan prasyarat; tidak menghapus aturan lama atau menggantinya diam-diam dengan E2. Bagian operasional terkait BLOKIR sampai keputusan sah.

Pembaruan: **5 November 2026**. **KB-01–KB-08 disepakati pada tingkat model dan dipertahankan; KB-09 Model B dengan sektor Industri Pengolahan Pangan disepakati pada tingkat ruang lingkup MVP**. Unit berbasis kesatuan operasional, verifikasi per OPD dengan koordinasi pengelola utama, registrasi bertahap, satu pemilik field, registrasi petugas/verifikator berbeda, layanan tanpa akun pelaku, satu pengesah field serta konflik nilai oleh pemilik tetap menjadi acuan. Nama OPD/petugas resmi, wilayah pilot, bukti/SOP, cakupan akses rinci dan izin implementasi belum final.

Tambahan KB-10: **MODEL B DISEPAKATI — rincian kewenangan kelembagaan masih terbuka**. Sistem menghasilkan usulan skala; satu petugas berwenang memverifikasi/mengesahkan setelah memeriksa input, tujuan, periode, cakupan dan versi aturan. Skala, kode KBLI dan status keputusan terpisah. KB-11 Model B perlindungan data dan KB-12 Model B audit dua lapisan disepakati pada tingkat model/prinsip dokumentasi; rincian KB-17 belum final; angka dan bukti kapasitas KB-18 belum final.

Rumusan lengkap 23 aturan, 18 kriteria penerimaan, 14 skenario pengujian dan laporan konflik keputusan ada pada [dokumen keputusan bisnis](06-keputusan-bisnis.md). Pembagian teknis berikut merupakan rancangan pendukung; rincian transisi yang belum ditetapkan tidak dianggap disepakati.

KB-13 Model C rekonsiliasi otomatis disepakati dengan seluruh prasyarat aman/mandat sah. Deteksi/pencegahan prioritas MVP; keputusan substantif, konflik, split dan arsip tetap melalui kewenangan yang sah, tanpa auto-merge historis produksi sekarang.

KB-15 Model B kini mendokumentasikan impor melalui staging privat dan pengesahan per pemilik field. Berkas sumber tidak langsung resmi dan impor manual masih rancangan setelah gerbang/izin; integrasi langsung bukan implementasi MVP. KB-01–KB-14 tetap, hosting BELUM DAPAT DINILAI.

KB-16 **Model B — Registri Program dan Riwayat Layanan Pembinaan UMKM disepakati sebagai dokumentasi fase lanjutan setelah MVP KB-09**, 5 November 2026. Registri/pangan tetap MVP pertama; program belum boleh dibangun. KB-01–KB-15 dipertahankan; rincian KB-17 dan KB-18, rincian organisasi/SOP dan izin masih terbuka. Hosting KB-14 tetap BELUM DAPAT DINILAI.

KB-17 **Model B — Operasional Terkelola Berbasis Risiko disepakati sebagai kebijakan dan spesifikasi dokumentasi**, 5 November 2026. Frekuensi/retensi backup, angka RPO/RTO, lokasi/teknologi/kunci, SLA dan pengelola belum final; tidak ada izin operasi server. KB-01–KB-16 dipertahankan, angka dan bukti kapasitas KB-18 belum final dan hosting KB-14 BELUM DAPAT DINILAI.

KB-18 **Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal disepakati sebagai dokumentasi**, 5 November 2026. Arsitektur mencakup Kabupaten Sinjai dengan satu SSOT; MVP KB-09 tetap registri/pangan. Infrastruktur awal mengikuti kebutuhan terverifikasi, angka contoh hanya asumsi/proyeksi. Hosting dan kapasitas final **BELUM DAPAT DINILAI**; rincian/izin belum final.

## Kendali baseline dan status berbasis cakupan

[Baseline konsolidasi](10-baseline-konsolidasi-kb01-kb18.md) memuat audit KA-01–KA-09, register DT-001–036 dan gerbang. Semua model dipilih; rincian/mandat/bukti tetap belum final. G0 siap diajukan peninjauan, G1/G5/G7 belum lulus; tidak ada izin coding/data nyata/deployment.

| Lapis status | Kewenangan dan batas |
| --- | --- |
| Registrasi/profil awal induk | Dibuat petugas ditunjuk dan disahkan verifikator berbeda. Verifikator tidak otomatis memiliki field OPD lain |
| Field/record resmi | Disahkan sesuai satu pemilik aktif, penugasan/bukti/versi/konflik; satu pengesah biasa cukup |
| Profil sektoral/pengukuran | Penilaian sektor/lingkup tersendiri; tidak menjadi sah karena induk atau sebagian field disahkan |
| Ringkasan agregasi | Evaluasi objek/lingkup/tahap dan versi aturan, bukan keputusan pengesahan baru atau hak seluruh field |

**DT-007 Model C — Verifikasi Bertingkat Berbasis Cakupan telah DISEPAKATI, final pada tingkat model.** Agregasi adalah hasil evaluasi lingkup/tahap, bukan pengesahan baru, pemindahan kewenangan atau penambahan pengesah. DT-003 B A3+B1+C2 kini dipilih; rincian katalog/transisi/bukti DT-003/009/033, pemilik field/mandat DT-005 dan penunjukan/akses DT-006/011 tetap belum final. Alternatif model lama merupakan riwayat sebelum pemilihan Model C; tidak lagi diminta dipilih ulang. Status legalitas/NIB dan hasil klasifikasi tidak naik otomatis.

Penetapan pemilik field/mandat (DT-004–006/008/011), Pengendali/Prosesor/PDP/kearsipan dan kontrol audit/operasi adalah keputusan berbeda. Admin teknis hanya mengeksekusi konfigurasi bila dimandatkan, tidak memilih pemilik/menyelesaikan sengketa organisasi. Usulan peran/RACI bukan penetapan resmi.

Rencana sembilan epic tidak menunda privasi/audit ke urutan akhir. Lingkup aktivasi mesin skala/impor manual DT-031/032 tetap terbuka; layanan program ditunda sesudah MVP. Rincian bukti/retensi/risiko/kapasitas/izin tidak dinyatakan lulus karena TERDOKUMENTASI.

## Verifikasi terdistribusi dan batas koordinasi

KB-02 Model B menetapkan verifikasi per OPD sesuai kewenangannya. Pengelola utama mengoordinasikan proses dan mutu, bukan menjadi pengesah tunggal seluruh data atau persetujuan tambahan wajib bagi setiap perubahan. Identitas instansi dan mandat rinci koordinator belum ditetapkan.

| Persoalan | Pihak yang menjalankan fungsi menurut model |
| --- | --- |
| Validasi/verifikasi nilai field | Petugas berwenang pada OPD penanggung jawab field sesuai KB-02/KB-04 |
| Koordinasi proses, tindak lanjut dan pengawasan mutu | Pengelola utama sebagai koordinator sesuai KB-02, dengan akses yang ditetapkan |
| Konflik nilai field | OPD pemilik field sesuai KB-08 Model A |
| Sengketa siapa yang berwenang atas field | Mekanisme organisasi yang sah; tidak diputus sepihak oleh OPD atau koordinator |

Fungsi koordinator dan fungsi pengesah berbeda. Jika seseorang memegang keduanya, hak pengesahan tetap harus berasal dari penugasan bisnis yang sah, bukan otomatis dari jabatan pengelola sistem.

## Satu penanggung jawab untuk setiap field

Penanggung jawab adalah OPD yang ditetapkan secara sah untuk mengesahkan nilai resmi suatu field. OPD pelapor, petugas pencatat, admin teknis dan pengelola utama tidak otomatis menjadi pemilik atau pengesah field.

Katalog definisi field dan katalog penetapan pemilik dipisah sesuai [DT-005](kamus-data-mvp-kb09.md#dua-lapisan-katalog-kewenangan--dt-005), dengan rujukan versi/kode/cakupan/waktu efektif. Satu OPD pemilik aktif berlaku pada kombinasi tersebut, bukan mandat seluruh entitas. Penugasan pengguna dan hak tindakan terpisah dari pemilik organisasi. `unit.nama`, `orang.nama` dan `badan_usaha.nama` adalah fakta berbeda.

Field tanpa penanggung jawab yang sah, penugasan tumpang tindih atau kewenangan yang belum terselesaikan tidak dapat dipakai sebagai dasar pengesahan. Penetapan/perubahan pemilik field harus mengikuti mekanisme kelembagaan yang sah; OPD tidak dapat menunjuk dirinya sendiri melalui keputusan konflik nilai.

| Field contoh | Sasaran | OPD pemilik resmi |
| --- | --- | --- |
| `unit.nama` | Unit usaha | Belum ditetapkan |
| `unit.lokasi` | Unit usaha | Belum ditetapkan |
| `orang.nama` | Orang | Belum ditetapkan |
| `badan_usaha.bentuk` | Badan usaha | Belum ditetapkan |
| `hubungan.peran` | Hubungan pihak-unit | Belum ditetapkan |
| `kegiatan.klasifikasi` | Kegiatan usaha | Belum ditetapkan |

Tabel adalah contoh struktur, bukan daftar field final atau pembagian tugas instansi. Pengesahan pembuatan/pengakhiran objek dan hubungan juga memerlukan kewenangan; penghapusan objek tidak boleh menjadi jalur melewati kendali field.

## Calon fungsi dan kewenangan MVP KB-09

[Matriks kewenangan MVP](matriks-kewenangan-mvp-kb09.md) mengusulkan **pengampu UMKM** untuk registri/Profil Umum, **pengampu perindustrian** untuk profil pangan, produk/bahan/peralatan dan pengukuran, serta **pengampu perizinan** untuk pencatatan NIB. Ini pemetaan fungsi yang diusulkan, bukan nama OPD resmi. Penetapan satu OPD aktif per kode field dan penugasan petugas masih diperlukan sebelum pengesahan nilai resmi.

Kewenangan harus dikonfigurasi lewat katalog, bukan ditanam menurut nama instansi atau singkatan fungsi. Fungsi dapat berada pada kantor yang sama sesuai struktur organisasi yang sah, tetapi tidak membentuk pemilik field ganda. Kode field dibedakan menurut objek, termasuk sumber/status verifikasi profil, pengukuran produksi dan NIB; kesamaan label tidak memberi beberapa OPD hak mengubah record yang sama.

[Kamus data MVP](kamus-data-mvp-kb09.md) menetapkan kelas Wajib/Kondisional/Opsional/Berkala. Wajib sektoral berlaku untuk kelengkapan record sektor, bukan syarat NIB/produksi pada registrasi awal. Produk, bahan, peralatan dan pengukuran berulang memakai record terkait. Pengukuran wajib mempunyai produk, angka, satuan, periode, sumber dan status verifikasi; pengesahan setiap record tetap diperiksa pada server dan dicatat dalam audit.

Profil sektoral draf tidak masuk jumlah profil terverifikasi. Status profil induk tidak otomatis mengesahkan sektor atau pengukurannya. Laporan dasar membaca status/versi resmi sesuai izin, tidak menggandakan usaha dan tidak menjumlah satuan produksi berbeda tanpa konversi baku. Konversi, frekuensi pengukuran dan bukti verifikasi yang belum disepakati tetap terbuka.

## Akses internal dan pelayanan pelaku UMKM

KB-06 Model A menetapkan akun operasional individual untuk petugas pemerintah yang ditunjuk. Pelaku UMKM tidak login, tidak mendaftar akun, dan tidak langsung mengubah data. Pelaku tetap dapat menyampaikan informasi, meminta koreksi dan menerima hasil melalui petugas/saluran resmi yang ditetapkan. Saluran, verifikasi pemohon dan pemberitahuan hasil belum ditentukan secara rinci.

| Tindakan | Petugas OPD pemilik field | Petugas OPD lain | Pelaku UMKM tanpa akun | Pengelola utama/koordinator | Admin teknis | Auditor yang ditunjuk |
| --- | --- | --- | --- | --- | --- | --- |
| Melihat data | Sesuai izin baca, objek, field dan cakupan | Sesuai izin baca, objek, field dan cakupan | Informasi melalui petugas sesuai haknya | Sesuai akses koordinasi; isi sensitif tidak otomatis terbuka | Akses operasional secukupnya; isi sensitif tidak otomatis terbuka | Sesuai mandat |
| Mencatat permohonan/laporan konflik | Sesuai penugasan aktif | Sesuai akses dan penugasan aktif | Menyampaikan permintaan melalui petugas | Jika diberi penugasan pencatatan | Tidak otomatis | Tidak otomatis |
| Mengesahkan nilai/koreksi | Satu petugas berwenang setelah prasyarat terpenuhi | Tidak untuk field OPD lain | Tidak | Tidak otomatis dari peran koordinator | Tidak otomatis | Tidak |
| Menetapkan pemilik field | Bukan otomatis hak petugas | Bukan otomatis hak petugas | Tidak | Hanya jika mendapat mandat melalui mekanisme organisasi yang sah | Tidak otomatis | Membaca jika diizinkan |
| Memantau dan mengoordinasikan konflik | Sesuai cakupan | Sesuai cakupan | Hasil layanan melalui petugas | Ringkasan, antrean, tindak lanjut dan mutu sesuai akses, tanpa mengambil alih keputusan nilai | Pemantauan teknis sesuai mandat | Sesuai mandat |
| Membaca audit/bukti | Izin khusus sesuai sensitivitas | Izin khusus sesuai sensitivitas | Informasi hasil melalui pelayanan sah | Ringkasan/isi sesuai mandat dan sensitivitas | Log operasional sesuai mandat | Sesuai mandat dan sensitivitas |

Server memeriksa akun, OPD, penugasan aktif, peran, wilayah/objek, field dan status proses pada setiap aksi. ID dan OPD dari browser bukan bukti izin. Pembatasan berlaku pada daftar, detail, permintaan Livewire, unduhan, dan jalur lain yang nanti disepakati. Hubungan kepemilikan bisnis bukan hak akun aplikasi.

## Registrasi awal dan perubahan biasa

Sesuai penyelarasan KB-05/KB-07, petugas registrasi yang ditunjuk membuat draf profil Orang, Badan Usaha, Unit Usaha dan hubungan pihak-unit. Satu verifikator yang berbeda dari pembuat mengesahkan profil induk baru. Draf dan status identitas/legalitas tidak otomatis menjadi terverifikasi. Penunjukan, bukti minimum, dan prosedur pengecualian tidak diasumsikan.

KB-01 mengharuskan penentuan objek berdasarkan kesatuan operasional sebelum membuat unit baru. Cabang dengan pemilik sama dan teridentifikasi sebagai bagian induk tetap dicatat sebagai bagian usaha induk. Jangan menganggap semua lokasi sebagai unit baru atau menggabungkan semua usaha milik pihak yang sama. Bukti keterkaitan dan penilaian pemilik bersama/pergantian pemilik masih perlu diatur.

KB-03 Model B mengizinkan pendataan awal tanpa NIB memakai ID internal yang terpisah dari NIK/NIB. Registrasi bertahap tidak menghapus pemeriksaan duplikasi, kewenangan petugas atau pengesahan awal; DT-003 B A3+B1+C2 menetapkan minimum konseptual A3 sebelum draf, sedangkan rincian katalog operasional setiap tahap dan standar bukti tetap terbuka. NIB juga tidak wajib pada pengajuan/pengesahan induk. NIB kosong pada pendataan awal bukan alasan otomatis menolak pencatatan, dan pencatatan tidak menerbitkan legalitas eksternal.

Pengesahan awal oleh verifikator berbeda tidak memberi verifikator hak atas semua field lintas OPD. Verifikasi setiap field tetap mengikuti KB-02/KB-04. Model penyatuan ringkasan kini mengikuti DT-007 Model C; katalog minimum, enum/transisi, pemilik/mandat dan bukti penerapannya tetap perlu rincian sah, tanpa memberi verifikator induk hak atas field OPD lain.

Setelah registrasi, KB-07 Model C mengizinkan satu petugas dengan kewenangan aktif mengesahkan perubahan field biasa setelah validasi dan pemeriksaan bukti yang diperlukan. Tidak ada kewajiban umum pengesah kedua untuk perubahan field. Petugas pencatat tetap tidak otomatis berwenang mengesahkan; perubahan di luar kewenangannya diteruskan kepada OPD pemilik.

Data dengan konflik terbuka tidak boleh melewati alur konflik melalui perubahan biasa. Pengesahan salah diperbaiki dengan keputusan korektif baru, bukan menghapus nilai atau jejak lama.

Permohonan layanan dan usulan koreksi tetap terpisah dari nilai resmi. Status permohonan pada rumusan KB-06 adalah Diajukan, Dalam Pemeriksaan, Perlu Kelengkapan, Disetujui, dan Ditolak. Persetujuan yang mengubah nilai harus tersimpan konsisten dengan perubahan dan riwayatnya; jangan mengartikan status disetujui sebagai nilai yang pasti sudah berubah bila penyimpanan gagal.

## Alur konflik nilai — KB-08 Model A

1. **Pelaporan:** petugas dengan akses sah mencatat masalah, objek, field/jenis record, nilai yang dipersoalkan, dasar dan bukti yang diperlukan. Jika berasal dari masyarakat, petugas mencatat permohonannya sesuai KB-06; pemohon tidak dibuatkan akun.
2. **Penentuan tujuan:** sistem mengambil OPD pemilik dari katalog kewenangan yang berlaku. Pelaporan tidak mengubah nilai resmi. Penanda dipersoalkan tidak menghapus status terverifikasi atau hubungan pemilik secara otomatis.
3. **Pemeriksaan:** OPD pemilik menilai sumber, bukti, status verifikasi dan riwayat. Kekurangan bukti dapat ditandai Menunggu Bukti; sengketa tanpa dasar penyelesaian yang sah ditangguhkan.
4. **Keputusan:** satu petugas OPD pemilik dengan penugasan aktif dapat mengesahkan koreksi setelah prasyarat terpenuhi, atau mempertahankan nilai dengan alasan yang tercatat. Hak dan versi diperiksa lagi pada saat tindakan akhir.
5. **Penerapan:** koreksi menulis nilai, versi, tanggal berlaku, referensi keputusan lama bila dikoreksi, keputusan kasus, status dan audit secara konsisten dalam transaksi. Jika satu bagian gagal, tidak boleh ada perubahan parsial.
6. **Hasil dan pengawasan:** hasil disampaikan melalui prosedur layanan yang sesuai. Pengelola utama memantau mutu/antrean/keterlambatan sesuai akses tanpa mengambil alih pengesahan nilai.
7. **Peninjauan kembali:** bukti baru dapat membuka kembali kasus selesai dengan riwayat pemeriksaan/keputusan baru. Riwayat keputusan sebelumnya dipertahankan.

Ketika satu masalah menyentuh beberapa field dengan pemilik berbeda, RB-08.10 menetapkan **satu kasus induk dan subkasus per OPD pemilik**. Usulan/perubahan setiap subkasus tetap mengikuti hak OPD masing-masing. Kasus induk bukan pemberian hak lintas OPD dan bukan persetujuan berjenjang. Aturan ketergantungan, penutupan induk dan urutan antar-subkasus masih perlu dirinci.

## Enam status kasus konflik

Status berikut diwajibkan RB-08.12. Ini **status kasus konflik**, berbeda dari status registrasi atau permohonan layanan.

| Status | Makna dan prasyarat yang harus dijaga |
| --- | --- |
| Dilaporkan | Laporan tercatat dengan objek dan field/jenis record; nilai resmi belum berubah |
| Dalam Pemeriksaan | Petugas yang ditugaskan memeriksa sumber, bukti dan riwayat sesuai kewenangan |
| Menunggu Bukti | Bahan yang diperlukan belum cukup; kebutuhan kelengkapan dicatat |
| Ditangguhkan | Penyelesaian belum mempunyai dasar sah, misalnya sengketa kepemilikan yang belum selesai |
| Selesai Dikoreksi | Koreksi sah berhasil diterapkan bersama versi, keputusan, status dan audit |
| Selesai Nilai Dipertahankan | OPD pemilik memutus mempertahankan nilai, dengan alasan pemeriksaan yang tercatat |

Kasus Ditangguhkan tidak boleh langsung dinyatakan Selesai Dikoreksi tanpa dasar penyelesaian dan pemeriksaan yang tercatat. Peninjauan kembali menambah riwayat; bukan menghapus keputusan sebelumnya. Matriks transisi lengkap, siapa peninjau, batas waktu dan SOP pengalihan menunggu penetapan; tidak ada status tambahan atau SLA yang ditetapkan diam-diam.

## Lima kasus yang wajib diperiksa

| Jenis kasus sintetis | Hasil yang diwajibkan |
| --- | --- |
| Dua profil diduga orang yang sama | Kemiripan tidak memicu penggabungan otomatis. Pemeriksaan oleh pihak berwenang; konsolidasi hanya jika prosedur dan lingkupnya kemudian disepakati, tanpa merusak referensi/riwayat |
| Pihak Contoh A meminta penghapusan Pihak Contoh B sebagai pemilik bersama yang masih disengketakan | Perubahan ditangguhkan sampai ada dasar penyelesaian sah; pemilik terverifikasi tidak dihapus hanya karena klaim pihak lain |
| OPD nonpemilik melaporkan alamat berbeda | Laporan/bukti masuk ke pemilik field dari katalog; hanya petugas pemilik yang berwenang memutus nilai |
| Pengesahan angka 5.000 ternyata seharusnya 500 menurut bukti yang sah | Keputusan korektif baru merujuk pengesahan salah; satuan/periode tetap jelas; nilai dan jejak keputusan lama tidak dihapus |
| Penelusuran audit konflik | Pelapor/petugas, objek, bukti, pemeriksaan, pengesahan, alasan, waktu dan hasil terlacak sesuai hak, tanpa menyalin dokumen sensitif utuh ke log |

Contoh tidak menetapkan instansi nyata. Keputusan nilai SIJAI UMKM bukan putusan hukum kepemilikan atau perubahan dokumen OSS, izin, identitas atau sertifikat penerbit eksternal. Sengketa tentang **siapa OPD pemilik field** mengikuti mekanisme kelembagaan KB-02/RB-08.11; bukan diputus sepihak lewat kasus koreksi nilai.

## Konflik versi, pengulangan, dan kegagalan

| Kejadian | Perilaku yang harus dijaga |
| --- | --- |
| Dua petugas mengesahkan operasi/koreksi yang sama | Hanya satu penerapan; pengiriman ulang membaca hasil tersimpan |
| Versi dasar berubah setelah laporan atau usulan dibuat | Tolak/tahan pembaruan usang, periksa ulang versi terbaru; jangan menimpa diam-diam |
| Pemeriksaan bisnis belum selesai | Tetap terbuka/menunggu/ditangguhkan sesuai keadaan; penolakan versi tidak otomatis menyelesaikan sengketa |
| Izin atau penugasan dicabut saat halaman masih terbuka | Aksi berikutnya ditolak melalui pemeriksaan server terbaru |
| OPD pemilik berpindah ketika kasus masih berjalan | Hak lama tidak berlaku otomatis; pengalihan mengikuti penetapan sah dan SOP, bukan tebakan pengelola |
| Audit atau penyimpanan status gagal | Perubahan nilai, versi, keputusan dan status dibatalkan bersama; log kegagalan operasional tidak memuat rahasia |
| Bukti baru ditemukan setelah kasus selesai | Peninjauan kembali dicatat, keputusan lama tidak dihapus |
| Nilai dipertahankan | Alasan dan keputusan dicatat tanpa menciptakan perubahan nilai fiktif |

Usulan teknis pemeriksaan versi tetap per objek sebagaimana rancangan awal; ini bisa menahan usulan saat field lain pada objek berubah. Penyempurnaan versi per field perlu alasan dan keputusan teknis tersendiri. Untuk beberapa subkasus, transaksi tiap pengesahan harus konsisten; atomisitas seluruh kasus lintas OPD tidak diasumsikan telah disepakati.

## Riwayat, bukti dan audit

Riwayat perubahan resmi memuat objek/field, nilai sebelum/sesudah yang dilindungi, versi, tanggal berlaku, pelaku dan OPD konteks, pemilik field saat keputusan, alasan, sumber/usulan/kasus serta referensi pengesahan yang dikoreksi. Penambahan/pengakhiran hubungan pihak-unit termasuk perubahan resmi.

Riwayat kasus menelusuri laporan, pemeriksaan, bukti, penangguhan, keputusan, pengesah, waktu dan peninjauan kembali. Perubahan hak, penugasan dan pemilik field juga diaudit. Bukti sensitif memakai referensi terlindungi dan pemeriksaan unduhan; log tidak perlu menyalin NIK, isi dokumen, password, token, cookie atau kunci aplikasi.

Audit dibatasi akses dan tidak dapat diubah/dihapus petugas biasa. Perlindungan aplikasi saja belum membuat audit kebal terhadap administrator database. Kerangka perlindungan KB-11 Model B berlaku; model salinan berkontrol terpisah KB-12 sudah dipilih; pemetaan JRA, keputusan penyusutan, teknologi/pengelola dan metode integritas belum final. Perlindungan riwayat tidak berarti menyimpan seluruh data pribadi selamanya.

## Penghitungan usulan dan pengesahan klasifikasi KB-10

1. Petugas yang ditugaskan mencatat pengukuran ekonomi dan sumber/cakupannya; registrasi awal KB-03 tidak diwajibkan memiliki seluruh angka ekonomi ini.
2. Sistem memeriksa prasyarat, termasuk kosong vs nol, modal tanpa tanah/bangunan, kelengkapan penjualan tahunan, mata uang dan versi. Input tidak layak tidak dipaksa menjadi Mikro; tiga bulan tidak dianualisasi otomatis.
3. Tujuan dan dasar/versi aturan dipilih secara jelas. Usulan modal dan penjualan dihitung/disimpan terpisah, terikat periode serta cakupan yang dinyatakan. Hasil belum terverifikasi tidak masuk jumlah hasil disahkan.
4. Petugas dengan penugasan aktif pada OPD pemilik field klasifikasi memverifikasi input/bukti, tujuan/aturan, periode, cakupan hukum yang relevan dan konflik. Relasi banyak usaha/satu pemilik bukan dasar menjumlah atau memisah otomatis secara legal.
5. Satu petugas berwenang dapat mengesahkan, menolak atau meminta koreksi dengan alasan. Sistem mengisi kategori disahkan hanya dari keputusan sah; perubahan hasil/status/versi dan audit konsisten dalam transaksi pada implementasi kelak.
6. Koreksi hasil yang telah disahkan mengikuti KB-07/KB-08. Revisi mengikat versi input/aturan yang baru dan keputusan lama; riwayat, bukti dan hasil lama tidak dihapus. Versi usang ditolak/ditahan.

Status **usulan, menunggu verifikasi, disahkan, ditolak, perlu koreksi** adalah status klasifikasi, bukan status registrasi atau konflik. Kategori **Mikro, Kecil, Menengah, Di Luar Batas UMKM, Belum Dapat Diklasifikasikan** adalah nilai skala menurut dasar/tujuan tertentu. Tidak ada status yang otomatis memberi legalitas atau kelayakan bantuan. Rincian transisi/SOP bukti masih memerlukan penetapan; mesin tidak menggantikan pengesah.

Nama OPD pemilik field klasifikasi, verifikator, pengelola aturan/katalog, tata cara pemeriksaan modal/penjualan, cakupan hukum cabang/multiunit dan standar tahun buku nonkalender tetap terbuka. Pembuat profil awal tetap tidak boleh mengesahkan profilnya sendiri; pengesahan penilaian KB-10 tidak menjadi jalur menyiasati pengesahan profil KB-05.

KBLI mengacu katalog 2025 dengan kode 2020 historis tetap tersimpan. Kegiatan utama/tambahan memiliki dasar dan masa berlaku; tidak ada kegiatan utama aktif ganda tanpa kebijakan sah. Pemetaan ambigu diperiksa petugas; pergantian kode/kegiatan menjaga riwayat dan tidak mengubah OSS/NIB. Sumber kode resmi adalah rujukan, bukan kewenangan OPD yang otomatis ditetapkan oleh sistem.

Rincian field dan hak ada pada tambahan KB-10 di [kamus](kamus-data-mvp-kb09.md) dan [matriks](matriks-kewenangan-mvp-kb09.md); aturan/ambang serta T10 ada pada [dokumen keputusan](06-keputusan-bisnis.md).

## Perlindungan data berdasarkan kebutuhan tugas — KB-11

Model B berlaku pada nilai resmi, usulan/kasus konflik, bukti, audit, pencarian, API bila disetujui kelak, unduhan, ekspor dan hasil turunan. Empat label internal adalah PUBLIK-TERVERIFIKASI, INTERNAL, TERBATAS dan SANGAT TERBATAS; contoh/kategori field masih rancangan, bukan kategori hukum UU PDP atau penetapan OPD resmi.

Hak baca, ubah, usul, sahkan, unduh, ekspor dan administrasi akses diperiksa terpisah di server, berdasarkan peran, OPD, wilayah, objek/field, tindakan, tujuan/dasar dan penugasan aktif. Tidak ada hak yang terbukti berarti ditolak. Akun wajib individual; berakhirnya penugasan berlaku pada aksi berikutnya, juga pada ekspor tertunda dan pengambilan file. Admin teknis, koordinator, pemilik field maupun hubungan kepemilikan usaha tidak memberi hak sensitif menyeluruh.

**OPD pemilik field** memutus nilai operasional menurut KB-04/KB-08. **Pengendali Data Pribadi**, Prosesor dan fungsi PDP memerlukan penetapan hukum kelembagaan tersendiri. Ketiga peran hukum itu belum ditentukan oleh dokumen ini. Pengesah nilai tetap satu petugas berwenang; profil awal tetap memerlukan verifikator berbeda dari pembuat.

### Pelayanan hak subjek tanpa akun

Gunakan PERMOHONAN_LAYANAN dan riwayat yang sama bila fungsinya sesuai: (1) terima dan beri nomor/waktu; (2) identifikasi hak/dasar; (3) verifikasi identitas/kuasa secara aman; (4) catat tenggat hukum; (5) arahkan ke pejabat/unit berwenang; (6) periksa data pihak ketiga/pembatasan/pengecualian sah; (7) proses; (8) sampaikan hasil melalui kanal aman; (9) catat penyelesaian/bukti/audit. Permohonan elektronik maupun nonelektronik tetap dapat dilayani tanpa akun masyarakat.

Tenggat Pasal 30 dan 32 UU PDP adalah **3 x 24 jam sejak permintaan terkait diterima Pengendali**, sesuai konteks masing-masing. Catat waktu penerimaan awal dan penerimaan oleh fungsi berwenang; penerimaan melalui saluran resmi harus dipetakan dalam SOP, bukan dipakai menunda penerimaan hukum. Verifikasi pemohon, pindah OPD dan status menunggu tidak otomatis menghentikan atau mengulang tenggat. Permohonan beberapa hak dapat mempunyai beberapa tenggat. Pembatasan/pengecualian harus berdasar hukum, beralasan dan dicatat, bukan dispensasi umum bagi pemerintah.

Koreksi nilai mengikuti KB-07/KB-08; hak menerima salinan tidak menjadi hak langsung mengubah master. Satu pemilik usaha tidak menerima NIK/kontak/dokumen pemilik lain tanpa dasar dan hak yang sah. Hasil disaring dan disampaikan aman. SOP/pejabat/kanal dan dasar layanan spesifik masih terbuka.

### Ekspor dan agregat

Hak baca bukan izin ekspor. Ekspor massal memerlukan tujuan/persetujuan tersendiri, field, OPD, wilayah, objek serta batas jumlah. Periksa hak sensitif, penugasan dan lingkup persetujuan ketika membuat dan mengambil file; catat audit. Tautan dokumen tidak publik permanen. Label INTERNAL tidak membuat data bebas diekspor.

Statistik ditinjau terhadap risiko identifikasi ulang, termasuk kelompok kecil dan kombinasi sumber. Keluaran berisiko ditahan, bukan otomatis diumumkan karena nama/NIK dihapus. PUBLIK-TERVERIFIKASI hanya untuk keluaran yang telah diperiksa/disetujui; tidak ada portal publik atau publikasi nyata yang diizinkan sekarang.

### Retensi, insiden dan risiko

Pemetaan seri data ke JRA Pemkab Sinjai yang berlaku serta keputusan penyusutan masih terbuka. Bedakan aktif operasional, arsip dengan dasar simpan, penahanan/sengketa sah, layak penyusutan serta keputusan musnah/permanen. Jangan mengarang angka retensi atau memusnahkan otomatis saat tanggal berakhir. Terapkan juga pada bukti, permohonan, log, ekspor dan salinan; audit bukan alasan menyimpan seluruh data pribadi selamanya. Keputusan korektif tetap menjaga keterlacakan selama retensi sah, tanpa menghapus sejarah secara sewenang-wenang.

Respons insiden: terima indikasi → catat waktu → nilai jenis data/dampak → amankan/batasi dampak → eskalasi → tentukan kewajiban pemberitahuan → pemberitahuan sah → pulihkan/evaluasi → dokumentasikan keputusan/bukti. Pasal 46 mengatur pemberitahuan tertulis paling lambat **3 x 24 jam**, sesuai konteks hukumnya, kepada subjek dan lembaga, serta masyarakat pada kondisi tertentu. Jangan menunggu konfirmasi internal untuk mulai pencatatan/penilaian atau memakai konfirmasi untuk mengulang tenggat. Penerima/kanal/pejabat resmi perlu ditetapkan; tidak ada pesan nyata atau kontak pihak luar pada tugas ini.

Sebelum data nyata: tetapkan peran hukum, tujuan/dasar per layanan, akses final, JRA serta risiko dan DPIA (penilaian dampak pelindungan data) bila diperlukan, lalu peroleh izin eksplisit. Pengesah manusia KB-10 tidak menghapus risiko pemrofilan/penggabungan. Belum ada DPIA selesai atau klaim patuh/siap produksi.

Dasar pasal, catatan Putusan MK atas Pasal 53 dan sumber resmi ada pada [bagian KB-11](06-keputusan-bisnis.md#kb-11--perlindungan-data-bertingkat-dan-kebutuhan-tugas). [Kamus](kamus-data-mvp-kb09.md) dan [matriks](matriks-kewenangan-mvp-kb09.md) memuat metadata serta tujuh contoh peran, semuanya belum penetapan organisasi. Model dua lapisan KB-12 kini dipilih; standar keamanan/kunci/backup dan rincian operasi tetap terbuka, bersama rincian KB-17 dan KB-18.

## Penerimaan dan batas pekerjaan

Gunakan seluruh 18 kriteria dan skenario T08-01–T08-14 pada [rumusan KB-08](06-keputusan-bisnis.md), ditambah pemeriksaan konsistensi dengan registrasi awal dan pelayanan melalui petugas. Uji terutama penolakan server lintas OPD/cakupan, manipulasi ID/field, penugasan tidak aktif, konflik kepemilikan, duplikasi, revisi korektif, versi usang, akses bukti, pengiriman ulang dan kegagalan transaksi.

Rencana T09-01–T09-26 dan T10-01–T10-26 dipertahankan; 30 RB-11 dan 26 T11 ada pada [dokumen keputusan](06-keputusan-bisnis.md). KB-01–KB-10 dipertahankan dan KB-11 Model B disepakati pada tingkat dokumentasi. Nama OPD/petugas, SOP/bukti, wilayah, rincian ekonomi/cakupan, dasar pemrosesan, Pengendali/Prosesor/fungsi PDP, kelas field final, JRA, risiko/DPIA, rincian operasi KB-12, rincian KB-17 dan KB-18, hosting dan izin implementasi/data nyata/produksi tetap terbuka. Lihat [audit](08-audit-konsistensi-dokumentasi.md). Seluruh skenario adalah rencana; tidak ada pengujian aplikasi.

## Tata kelola audit dua lapisan — KB-12 Model B

KB-12 mengesahkan prinsip audit database aplikasi dan salinan dengan kontrol keamanan/administratif terpisah. Audit operasional meliputi nilai/relasi, pengesahan/penolakan, kasus/keputusan korektif, akses sensitif/unduh/ekspor, akun/penugasan/katalog OPD, kebijakan dan tindakan retensi. Salinan tidak menjadi master atau hak mengubah data baru. Taksonomi 15 keluarga, 21 atribut, 30 RB dan 28 T12 ada pada [keputusan](06-keputusan-bisnis.md).

### Transaksi bisnis dan pengiriman diperlakukan berbeda

| Keadaan | Perilaku yang direncanakan |
| --- | --- |
| Perubahan kritis siap disahkan | Periksa hak/versi/bukti/konflik; nilai, versi, keputusan, riwayat dan event operasional commit bersama |
| Audit kritis/commit gagal | Perubahan bisnis batal, tidak sah/tidak dilaporkan berhasil; event sukses dalam transaksi ikut batal |
| Catatan gagal perlu ditelusuri | Gunakan korelasi dan jalur operasional aman yang tersedia; tidak mengklaim database menyimpan event jika database tidak tersedia |
| Salinan gagal dikirim setelah commit | Event sah tetap di operasional; niat kirim tahan gangguan, status tertunda, retry, pemantauan dan eskalasi; bisnis tidak dibatalkan diam-diam |
| Kirim/konfirmasi berulang | ID sama tidak menghasilkan event ganda; isi berbeda pada ID sama ditahan sebagai ketidaksesuaian |
| Rekonsiliasi menemukan selisih | Bandingkan daftar ID/rentang/isi, niat/status pengiriman dan salinan, periksa penyusutan sah; catat temuan/peringatan serta insiden KB-11 bila relevan |

Tidak menganggap semua kasus lintas OPD harus disahkan dalam satu transaksi induk. Atomisitas berlaku pada transaksi perubahan terkait sesuai KB-08; pemisahan pengelola salinan tidak menambah pengesah field kedua. Pembuat profil awal tetap tidak mengesahkan sendiri.

Transactional outbox, yaitu niat kirim dalam transaksi yang sama, hanya kandidat untuk menghindari celah sesudah commit. Cara teknis andal lain dapat ditinjau setelah hosting diketahui; tidak mengunci produk, worker atau jadwal.

### Kualitas event, akses dan pengawasan

ID event internal stabil; aktor/peran/OPD pada waktu kejadian, aksi/objek, waktu/hasil dan alasan/bukti/versi relevan terlacak. Event membedakan berhasil, gagal, ditolak dan masih diproses, tanpa menimpa event lama untuk hasil baru. Status kirim dicatat pada record pengiriman, bukan perubahan payload sejarah. Keputusan penolakan yang tercatat berhasil tidak berarti perubahan data disetujui.

NIK lengkap, kata sandi, token, kunci dan dokumen sensitif tidak masuk event/salinan/debug. Gunakan referensi dan sanitasi karakter/ukuran, termasuk teks penolakan/error. Kendalikan percobaan membanjiri log tanpa membuang audit kritis diam-diam; angka ambang/metodenya belum final. Pembacaan/unduh sensitif harus mendapat audit wajib sebelum pelepasan data; kegagalan audit bukan jalur pembocoran. Hak baca/ekspor audit sendiri terpisah dan aktivitas aksesnya dicatat tanpa lingkaran rekursif tak terbatas.

Kontrol mencakup aplikasi, database, server, administrator, transfer, backup dan salinan. Dua tabel/lokasi dengan administrator dan kontrol sama tidak membuktikan pemisahan. Append-only aplikasi atau hash saja tidak membuat audit kebal administrator. Pemeriksaan memerlukan acuan tepercaya dan daftar event yang semestinya, bukan jumlah total/penanda “terkirim” saja.

### Retensi, insiden dan pemulihan

Gunakan kebijakan retensi/insiden KB-11 yang sama. Pemetaan audit/salinan/backup ke JRA Sinjai, durasi, penahanan sah dan keputusan penyusutan belum final; tidak menetapkan angka. Tindakan sah dicatat agar dapat dibedakan dari manipulasi. Keperluan audit tidak membenarkan penyimpanan semua data pribadi selamanya.

Pemulihan oleh pelaksana berwenang menggunakan sumber sah, menjaga bukti, dilakukan/diuji di lingkungan terpisah dan diverifikasi atas ID/isi/kelengkapan/keterkaitan. Operasi pulih menghasilkan event baru; ID event asal tidak diganti. Kekurangan event yang belum tersalin harus dinyatakan. Salinan audit tidak otomatis memulihkan master/lampiran atau membenarkan menghidupkan kembali data yang sah disusutkan.

Tujuh fungsi contoh pada [matriks](matriks-kewenangan-mvp-kb09.md) belum jabatan/OPD/petugas resmi. Lokasi/teknologi/kunci, jadwal/ambang, kapasitas, hak administrator/pengelola, frekuensi integritas, RPO/RTO dan investigasi/eskalasi menunggu bukti KB-14, rincian KB-17 dan kapasitas KB-18 serta penetapan kelembagaan. KB-01–KB-11 dipertahankan, rincian KB-17 dan angka dan bukti kapasitas KB-18 belum final. Tidak ada implementasi, notifikasi insiden nyata, pemulihan nyata atau izin data nyata/produksi.

## Tata kelola rekonsiliasi identitas — KB-13

Model C membedakan otomatisasi teknis yang aman dari keputusan substantif. **Nama/kontak/alamat/pemilik/NIB atau skor sama tidak membuktikan identitas.** Deteksi menghasilkan kandidat; pencegahan duplikat baru hanya memakai identitas yang terbukti sama. Konsolidasi historis memerlukan inventaris seluruh referensi dan dampak serta sepuluh syarat kumulatif pada [keputusan](06-keputusan-bisnis.md). Gagal/belum jelas menahan proses untuk petugas.

Benturan redaksi larangan umum pada panduan lama dan penjelasan historis KB-08 dilaporkan dalam keputusan/audit; KB-13 memperinci konsolidasi teknis aman, tanpa mencabut RB-08.07 tentang larangan merge karena kemiripan. Pemeriksaan berwenang, konflik oleh pemilik field dan satu pengesah substantif tetap berlaku.

### Mandat, keputusan dan referensi

- Petugas ditunjuk tetap membuat profil awal dan verifikator awal berbeda dari pembuat. Menggunakan identitas lama untuk mencegah duplikat tidak mengesahkan profil baru atau memberi akun pelaku.
- Pemilik field memutus konflik nilai menurut KB-08. Satu proses/petugas rekonsiliasi tidak otomatis menguasai semua field/OPD. Kasus lintas pemilik memakai induk/subkasus yang sama; keputusan substantif tiap field harus lengkap sebelum rencana yang bergantung padanya dieksekusi.
- Proses otomatis mencatat identitas proses, aturan/versi, tujuan/mandat/cakupan/masa berlaku dan hasil. Mandat atau aturan berubah/dicabut berarti aksi berikutnya ditahan. Admin/koordinator bukan otoritas aturan atau pengesah otomatis.
- Katalog aturan dan bukti minimum belum disahkan. Tingkat keyakinan bukan ambang angka yang dikarang atau pengganti bukti; keputusan otomatis yang boleh harus eksplisit.
- Hak deteksi, baca bukti, rencana, keputusan, eksekusi, split, arsip, pulih serta unduh/ekspor terpisah menurut penetapan. Resolusi ID historis dan pencocokan NIK tetap KB-11, tanpa hasil/log NIK lengkap atau pengungkapan pihak lain.

### Alur dan pengendalian

**Merge:** deteksi → periksa jenis/identitas → evaluasi aturan → inventaris referensi → nilai dampak → tentukan aman otomatis atau petugas → transaksi sah → catat kanonik/asal/alias/aturan/audit → verifikasi pascaoperasi/pulih. Jangan memilih nilai skala/ekonomi resmi yang berbeda dengan alasan menggabungkan identitas; hasil berperiode/tujuan/versi terjaga dan hitung ulang KB-10 tetap usulan.

**Split:** laporan melalui petugas → tentukan identitas yang berbeda → periksa bukti → tetapkan pembagian setiap referensi → pengesahan KB-07/KB-08 → transaksi/jejak/validasi → pastikan ID tidak didaur ulang. Produk/kegiatan/lokasi/relasi/periode serta kontrak program tidak disalin ke semua tujuan. Mekanisme pengesahan/koordinasi rinci masih terbuka; jika benar-benar membuat profil baru KB-05 tetap berlaku.

**Arsip:** dasar sah → periksa konflik/relasi aktif/retensi → keputusan pihak berwenang → pertahankan jejak/referensi → pelindungan/JRA. Tidak aktif, usia atau tidak diperbarui saja tidak memicu arsip otomatis. Arsip bukan penghapusan permanen, tutup usaha atau selesai konflik.

Peta identitas tidak menghapus ID asal dan tidak mengubah target audit historis. Pemetaan baru harus bebas siklus/ambigu, beralasan dan tetap dibatasi hak. Pemilik bersama/peran/masa berlaku, produksi per periode/satuan/status dan hasil klasifikasi berbeda tidak hilang/ganda. Program/bantuan/pelatihan hanya kontrak masa depan, tanpa modul MVP baru.

Perubahan kritis multi-entitas/peta/relasi/versi/keputusan serta audit operasional atomik. Periksa versi dan penerapan sekali; gagal/versi usang tidak menghasilkan merge parsial atau sukses palsu. Gagal kirim salinan pascacommit mengikuti KB-12. Rencana pulih disiapkan sebelum eksekusi, diuji kelak dan menilai perubahan setelah merge; keputusan/event korektif baru, bukan menghapus sejarah atau restore database buta.

OPD/otoritas aturan/petugas, bukti minimum, batas aman, pemilihan kanonik/tujuan split, SOP sengketa/split/pulih/arsip/JRA, algoritme/ambang, teknologi/jadwal/kapasitas/hosting serta izin implementasi/data nyata/produksi tetap terbuka. 30 RB-13/30 T13 adalah dokumentasi/rencana; tidak ada tes aplikasi dijalankan.

## Penyelarasan status hosting — KB-14

**KB-14 Model B audit kesiapan sebelum konfigurasi teknis/deployment disepakati; kondisi PDN masih BELUM DIKETAHUI dan hasil hosting BELUM DAPAT DINILAI.** Pilihan model bukan bukti bahwa versi, kapasitas atau konfigurasi final tersedia. Kebutuhan pembuktian hosting yang dirujuk bagian sebelumnya tetap terbuka; rincian operasional KB-17 belum final dan angka dan bukti kapasitas KB-18 belum final.

Gunakan [formulir hosting yang sama](07-checklist-hosting-cpanel.md) untuk bukti tersanitasi oleh pengelola/verifikator berwenang. Tidak menambah entitas aplikasi, field bisnis, OPD/petugas atau hak server melalui penyelarasan ini. Model/atribut/kewenangan KB-01–KB-13 tetap; KB-11 privasi, KB-12 kontrol salinan terpisah dan KB-13 otomatisasi aman tidak dilonggarkan karena batas hosting.

Dokumen lengkap/status Layak sekalipun bukan izin implementasi/data nyata/deployment. Target pemulihan/operasi KB-17, volume/kapasitas KB-18, pengelola resmi dan bukti PDN masih diperlukan. Tidak mengakses server, meminta/membaca rahasia, memasang file uji atau mengubah kode/database/paket/hosting/DNS pada tugas ini.

## Tata kelola impor bertahap — KB-15

Data historis satu kali dan pembaruan berkala melalui berkas memakai alur staging yang sama; integrasi API/real-time fase berikutnya. **Sumber berwenang tetap harus diperiksa; file OPD bukan nilai resmi mutlak.** Staging impor adalah penampungan sementara berakses/status terpisah, bukan statistik atau master resmi per OPD.

Rancang enam belas tahap pada [keputusan KB-15](06-keputusan-bisnis.md): sumber/tujuan/dasar → penerimaan berwenang → batch/metadata/integritas → sumber privat → keamanan/struktur → pemetaan berversi → normalisasi aman → validasi → identitas/duplikasi/cabang/relasi → hasil pemeriksaan → pratinjau → usulan ke pemilik field → pengesahan sah → hasil field/record/batch → audit/asal → peninjauan/koreksi. Tidak ada tahap dijalankan dengan berkas/data nyata sekarang.

### Pemilik field, pengesahan dan status sebagian

| Kelompok field | Fungsi calon, belum penetapan resmi |
| --- | --- |
| Identitas/Profil Umum | Pemilik field objek terkait sesuai katalog |
| Pencatatan NIB | Fungsi pemilik pencatatan legalitas, bukan penerbitan/mengubah OSS |
| Produk/bahan/produksi pangan | Fungsi pemilik data industri terkait |
| Modal/penjualan dan klasifikasi | Pemilik input/aturan/hasil menurut KB-10; usulan–pengesahan tetap terpisah |

Satu OPD pengirim/penerima tidak boleh mengesahkan semua kolom. Pisahkan usulan/keputusan per field atau kelompok sesuai katalog. Satu petugas aktif berwenang cukup untuk perubahan biasa; profil baru tetap pembuat–verifikator awal berbeda. Kasus beberapa pemilik mengikuti KB-08 dan dependensi referensi harus lengkap.

Satu record bisa mempunyai field menunggu, ditolak atau diterapkan pada waktu berbeda sesuai keputusan; satu batch bisa hasil campuran. Status batch/record/field berbeda dari verifikasi profil/pengukuran dan legalitas. Pengesahan sebagian tidak menaikkan seluruh profil menjadi terverifikasi. Statistik resmi tidak membaca staging atau menghitung baris sumber sebagai jumlah usaha.

### Kualitas, identitas dan pengamanan

Pemetaan menurut arti/objek, tidak kemiripan judul kolom. Nama Pemilik bukan pemilik tunggal; NIK/NIB bukan ID induk; alamat usaha bukan otomatis alamat pribadi; kapasitas berbeda dari realisasi dan omzet berbeda dari modal/skala. Pemetaan/transformasi berversi serta sumber/versi/ID baris tetap terlacak.

Kolom asing, tipe/format/referensi/wilayah/KBLI salah atau periode/satuan hilang ditahan/perlu perbaikan/karantina dengan alasan aman. Bedakan kosong, nol, belum diketahui, tidak berlaku dan terisi belum diverifikasi. NIK kosong bukan larangan universal registrasi awal, tetapi bukti identitas yang diperlukan belum lulus. Normalisasi/konversi ambigu tidak ditebak.

Pencocokan identitas KB-13 tidak melakukan merge historis berisiko. Konflik nilai/identitas/pemilik ke pemilik field KB-08; file terbaru tidak menang otomatis. Cabang, M:N/pemilik bersama/periode, produk–kegiatan–unit serta ekonomi/produksi berversi tetap terjaga. Riwayat program hanya kontrak masa depan, tanpa modul MVP.

Sumber/staging/bukti/diagnostik privat. Hak menerima, membaca, memetakan, mengusulkan, mengesahkan, unduh dan ekspor dipisah menurut tujuan/cakupan/sensitivitas/penugasan KB-11. Laporan error/audit tidak menyalin NIK lengkap/baris mentah/dokumen. Retensi/JRA dan penanganan sumber yang tak boleh diproses menunggu aturan sah, bukan menyimpan semuanya selamanya.

### Transaksi, pembatalan dan pembalikan

ID operasi/batch/record/versi serta kaitan perubahan resmi mencegah efek ganda; fingerprint file saja tidak cukup. Periksa versi staging/pemetaan/target/dependensi dan hak terbaru. Unit perubahan kritis beserta keputusan/status/audit operasional atomik; tidak memaksakan satu transaksi seluruh batch/lintas OPD atau meninggalkan referensi yatim.

Rollback transaksi gagal membatalkan perubahan sebelum sah. Batch dibatalkan sebelum pengesahan tidak mengubah master; jika sudah ada sebagian hasil sah, pembatalan sisa tidak membaliknya otomatis. Hasil yang sudah commit tetapi salah memakai keputusan korektif baru dengan perubahan/versi asal, bukti, dampak, pengesah dan audit.

Pembalikan menilai perubahan nilai/hubungan sah sesudah impor, produk/kegiatan baru, ekonomi/klasifikasi, referensi ID induk serta peristiwa masa depan. Jangan menimpa versi terbaru, hapus massal atau restore seluruh database tanpa analisis. Gagal kirim salinan audit sesudah commit tetap aturan KB-12, bukan membatalkan bisnis sah diam-diam.

OPD/petugas/dataset/dasar/perjanjian/SOP/template, bukti/pemetaan/konversi, ukuran/frekuensi, retensi dan pembalikan belum final. Tidak ada akses sistem OPD/OSS/Dukcapil; integrasi perlu keputusan/otorisasi resmi tambahan. Hosting tetap BELUM DAPAT DINILAI, rincian KB-17, kapasitas KB-18 serta izin implementasi/data nyata/produksi tetap terbuka.

## Tata kelola program dan riwayat layanan — KB-16

KB-16 Model B merupakan rancangan fase setelah MVP KB-09. Program lintas OPD memakai satu identitas program dan master Orang/Unit/Badan yang sama. Satu OPD penanggung jawab record program menjaga record sesuai penetapan sah, sementara field tetap mempunyai tepat satu pemilik aktif KB-04. Kedua tanggung jawab itu berbeda; tidak otomatis menjadi Pengendali secara hukum atau memperoleh seluruh hak. Tujuh fungsi usulan pada [matriks](matriks-kewenangan-mvp-kb09.md) memerlukan mandat/konfigurasi, bukan penetapan OPD/jabatan di sini.

### Pencatatan peserta, realisasi dan rekap

Petugas mengaitkan peserta Orang dan penerima Unit Usaha secara berbeda, memeriksa hubungan pemilik/pengelola/wakil serta masanya bila perlu. Sasaran sah Orang/Badan/Unit tidak dipaksa menjadi entitas lain. Identitas program bukan NIK; pelaku tanpa akun. Jika perlu profil induk baru, petugas ditunjuk membuat dan verifikator berbeda mengesahkan sesuai KB-05, tanpa jalan pintas program.

Duplikasi teknis orang–sesi–peran–konteks sama dicegah. Pengulangan sah antar-sesi/program tetap dicatat; pembatasan penerima mengikuti dasar administratif program yang disahkan, bukan seleksi otomatis atau larangan global.

Pendaftaran, kehadiran dan realisasi berbeda fakta; verifikasi catatan, status program dan tindak lanjut juga berbeda. Kosakata partisipasi dari pengguna mencakup daftar dan hadir; keduanya disimpan terpisah agar status tidak menimpa riwayat. Tidak tercatat hadir bukan otomatis Tidak Hadir. Program Selesai bukan pengesahan seluruh realisasi; realisasi Selesai bukan otomatis Terverifikasi. Bukti wajib menurut SOP sah yang belum tersedia menahan pengesahan, bukan diisi bukti fiktif.

Rekap menyatakan objek, periode, cakupan, status dan versi data. Bedakan UMKM unik, Orang unik, partisipasi dan kejadian layanan. Satu kejadian dengan banyak asosiasi penerima tidak dihitung berkali-kali; layanan berbeda tetap berbeda. Ahmad/Budi (sintetis) mewakili satu unit pada dua kegiatan berarti UMKM unik 1, Orang unik 2, partisipasi 2. Angka kejadian harus bersumber catatan kejadian, bukan diasumsikan.

### Indikator, pengesahan dan koreksi

Output berbeda dari hasil langsung dan outcome teramati. Tiap indikator memiliki definisi, satuan, objek, periode awal/akhir bila relevan, sumber/bukti, status verifikasi dan penanggung jawab pencatatan. Target/indikator wajib/jadwal tiap program belum ditetapkan. Produksi/ekonomi merujuk record/versi KB-09/KB-10; perbedaan satuan/periode/cakupan tidak dicampur. Sebelum/sesudah bukan bukti kausal, penurunan omzet tidak diubah menjadi keberhasilan, dan belum diukur bukan tercapai/nol. Sertifikasi merujuk instansi penerbit sah.

Satu petugas berwenang mengesahkan fieldnya sesuai KB-07 setelah validasi/bukti/versi/konflik; tidak ada kewajiban pengesahan semua tujuh fungsi. OPD lain mengusulkan bila berhak; konflik nilai KB-08 diputus pemilik field, sengketa kewenangan melalui mekanisme organisasi. Koreksi realisasi/observasi sah dibuat sebagai revisi/keputusan baru yang merujuk versi lama, alasan dan bukti, tanpa menghapus riwayat atau menerapkan dua kali.

### Perlindungan, riwayat dan impor masa depan

KB-11 berlaku pada akses NIK/dokumen/ekonomi/bukti dan rekap yang berisiko identifikasi ulang. Izin ekspor/unduh terpisah, server memeriksa cakupan/penugasan terkini, tidak ada hak universal pengelola/admin atau pemilik bersama. KB-12 mencatat registrasi, kehadiran/status, pengesahan, konflik, koreksi, pembatalan, unduh/ekspor sensitif. Mutasi kritis dan audit operasional berhasil/batal bersama; kegagalan kirim salinan sesudah commit ditangani retry/rekonsiliasi tanpa membatalkan bisnis sah diam-diam.

KB-13 mempertahankan identitas/ID layanan asli dan hubungan kanonik, mengalokasikan riwayat split secara benar, tanpa menulis ulang audit. Pembatalan/arsip menjaga referensi historis yang wajib dipertahankan sesuai JRA sah, bukan menyimpan data pribadi selamanya. Dampak pembatalan pada anak record harus dinilai; status program tidak otomatis mengubah semua layanan.

Impor program historis OPD mengikuti staging/pemetaan/validasi/pengesahan KB-15 pada fase lanjutan; bukan langsung resmi atau impor program MVP. Nominal historis hanya catatan layanan dengan dasar pemrosesan sah, bukan kewenangan membayar. Program tidak mencakup pembayaran/penyaluran dana elektronik/pengadaan/akuntansi/seleksi atau penetapan kelayakan otomatis dan tidak mengganti sistem resmi pemerintah.

Nama OPD/penugasan, program pertama, kode/nomenklatur, sasaran, hak pencatatan/pengesahan, indikator wajib/jadwal/bukti, SOP perubahan penerima, retensi/JRA dan izin nyata belum final. Hosting tetap BELUM DAPAT DINILAI; rincian KB-17 dan angka dan bukti kapasitas KB-18 belum final. 30 RB-16/30 T16 pada [keputusan](06-keputusan-bisnis.md) masih dokumentasi/rencana, bukan implementasi.

## Tata kelola operasional berbasis risiko — KB-17

Model B disepakati pengguna pada 5 November 2026 sebagai kebijakan/spesifikasi dokumentasi saja. Model bukan jadwal backup, angka RPO/RTO, lokasi/media, produk, pengelola atau izin server final. Kebijakan menopang MVP registri/pangan yang tetap, bukan menambah modul program KB-16 ke MVP.

Empat fungsi: pengelolaan aplikasi/akun; hosting/database/storage/jaringan; pengamanan data/backup/audit/pemulihan; pengawasan/insiden/pengendalian perubahan. Sepuluh fungsi peran dan RACI usulan 21 kegiatan ada pada [matriks](matriks-kewenangan-mvp-kb09.md). Pembagian formal aplikasi/OPD/PDN wajib disahkan. Hak teknis bukan hak pengesahan nilai, pemilik field bukan pembaca seluruh backup, pengelola aplikasi bukan penghapus salinan audit. Eksekusi/persetujuan/pemeriksaan dapat dipisahkan sesuai risiko.

### Tiga proses yang harus dibedakan

Backup sistem memulihkan komponen pada titik sah; salinan audit KB-12 menjaga keterlacakan/integritas/rekonsiliasi; koreksi bisnis memperbaiki nilai/keputusan dengan versi/riwayat baru KB-07/KB-08. Salinan audit bukan backup penuh nilai/lampiran. Restore bukan jalan pintas mengganti pengesahan, membatalkan konflik, merge atau hasil impor sah.

Cakupan sepuluh kelompok backup dan kebutuhan konsistensi ada pada [arsitektur](02-arsitektur-awal.md). Job sukses bukan bukti restore berhasil. Kelengkapan, titik, versi dan integritas tiap komponen diperiksa; sumber diduga terkompromi ditahan/diisolasi, bukan langsung dipakai. Enkripsi/kunci/hak minimum, transfer aman, perlindungan hapus/ubah dan pemisahan risiko harus disahkan dan dibuktikan.

Retensi/JRA/penahanan/penyusutan KB-11 berlaku pada database, dokumen, backup, bukti uji dan kedua lapisan audit. Tidak menyimpan semuanya selamanya atau menghapus bukti wajib agar cocok dengan titik lama. Prosedur restore harus menilai data yang sebelumnya sah dihapus/dibatasi, sehingga tidak membuka kembali data/hak yang sudah dicabut. Mekanisme teknis/durasi belum final.

### Enam belas langkah pemulihan konseptual

**Bukan perintah eksekusi. Tidak ada langkah berikut dijalankan sekarang.** Pada tahap pengujian kelak perlu mandat, izin lingkungan, data sintetis dan SOP; penggunaan data pribadi lain memerlukan dasar/izin terpisah serta gerbang KB-11.

1. Identifikasi jenis gangguan: teknis, keamanan, kehilangan dokumen, kegagalan audit atau kesalahan bisnis.
2. Tetapkan tingkat dampak, lingkup dan kewenangan pemulihan sesuai mandat/SOP.
3. Amankan bukti relevan dengan akses/retensi sah bila terdapat dugaan insiden; jangan merusaknya dengan restore langsung.
4. Pilih titik pemulihan yang dinilai sah dan aman; sumber diduga terkompromi ditahan untuk pemeriksaan.
5. Periksa integritas, keterbacaan, kelengkapan, versi dan titik konsistensi himpunan backup.
6. Siapkan lingkungan pemulihan terisolasi yang telah diizinkan; akses terbatas dan tidak mengarah ke pekerjaan/notifikasi produksi.
7. Pulihkan database dan komponen terkait pada rancangan fase berizin, termasuk artefak/konfigurasi yang cocok, tanpa rahasia di dokumen.
8. Pulihkan dokumen privat beserta metadata/versi/referensinya pada titik yang konsisten.
9. Periksa identitas internal/kanonik/alias, relasi kepemilikan M:N/masa berlaku, kegiatan, lokasi, produk dan kaitannya.
10. Periksa histori verifikasi/pengesahan/koreksi/konflik, klasifikasi/aturan dan pengukuran berperiode; draf tidak menjadi resmi.
11. Rekonsiliasi audit operasional dengan salinan terlindungi KB-12, ID/target asli dan kekurangan yang belum tersalin tetap terlacak.
12. Identifikasi selisih transaksi/keputusan/dokumen setelah titik backup, termasuk yang terbukti sah tetapi belum kembali.
13. Tentukan tindakan berwenang atas perubahan sah yang belum kembali; periksa sumber, versi, konflik, hak dan penerapan sekali, bukan replay otomatis semua event.
14. Verifikasi hak terkini dan fungsi penting; cegah izin lama hidup kembali, pekerjaan ganda atau staging menjadi resmi saat layanan dilanjutkan.
15. Catat hasil pengujian/pemulihan, bukti integritas/referensi/audit, waktu, kekurangan/mitigasi dan perbandingan target hanya bila target sah.
16. Dapatkan persetujuan pembukaan layanan sesuai mandat, dengan hasil verifikasi dan kesenjangan yang dinyatakan; jangan klaim pulih sepenuhnya jika audit/integritas gagal.

Pembukaan terbatas, bila kelak diperbolehkan SOP, harus menyebut fungsi yang belum pulih, risiko, pembatasan dan mandat penerima risiko; bukan klaim pulih sepenuhnya atau cara melewati syarat kritis. Saat ini tidak menetapkan kebijakan operasi degradasi atau status hasil uji.

Salinan audit yang lebih baru dari database bukan dihapus supaya terlihat cocok. Rekonsiliasi harus mencatat event/transaksi sah setelah titik pulih, rentang/selisih/sumber dan tindakan berwenang. Event audit tidak selalu memuat nilai lengkap; jika perubahan tidak dapat dipulihkan, nyatakan kehilangan/kekurangan secara jujur. Replay/rekonstruksi memakai bukti/versi/hak/penerapan sekali dan keputusan yang sah, bukan semua event atau seluruh staging otomatis diterapkan.

### Formulir pengujian restore — 14 isian kosong

Formulir dokumentasi berikut belum mencatat pengujian nyata. Kolom nilai **sengaja kosong**; keterangan adalah panduan pengisian kelak, bukan hasil pemeriksaan.

| Isian formulir | Nilai/hasil aktual | Keterangan pengisian kelak |
| --- | --- | --- |
| ID pengujian |  | ID internal rencana/pelaksanaan kelak, bukan ID uji nyata yang dibuat sekarang |
| Tanggal |  | Waktu mulai/selesai dan acuan zona waktu yang ditetapkan kelak |
| Penanggung jawab |  | Rujukan penugasan/mandat sah, tanpa nama/akun nyata sekarang |
| Lingkungan pengujian |  | Isolasi, otorisasi, cakupan dan jenis data sintetis; bukan alamat/kredensial server |
| Sumber dan titik backup |  | Rujukan aman himpunan/komponen/titik konsistensi; bukan URL privat/rahasia |
| Versi sistem |  | Versi rilis/dependensi/konfigurasi/struktur yang relevan |
| Komponen yang dipulihkan |  | Komponen/referensi yang diwajibkan dan yang belum tersedia |
| Hasil uji integritas |  | Bukti pemeriksaan isi/kelengkapan/keterbacaan; tidak diisi Lulus tanpa uji |
| Hasil uji referensial |  | Identitas, kanonik/alias, hubungan M:N, dokumen/kegiatan/produk/periode |
| Hasil pemeriksaan audit |  | Kedua lapisan, ID asli, selisih dan kekurangan yang tidak dapat dipulihkan |
| RPO/RTO target yang telah disahkan, jika ada |  | Kedua nilai dan referensi versi/otorisasi; kosong sampai penetapan |
| RPO/RTO terukur, jika diuji |  | Hasil ukur, titik/durasi dan metode/sumber waktu; sekarang kosong karena belum diuji |
| Temuan dan mitigasi |  | Kesenjangan, dampak, tindak lanjut/pemilik dan bukti penutupan kelak |
| Status persetujuan |  | Mandat penilai/pembukaan, keputusan dan bukti; sekarang belum ada persetujuan |

Bukti uji/hasil disimpan privat sesuai sensitivitas/retensi bila kelak ada. Repository perencanaan hanya memuat template aman, bukan hasil berisi kredensial, data pribadi, tautan backup terbuka, nama kunci/akun sensitif atau rahasia.

### RPO/RTO — delapan kelompok layanan, tanpa angka

RPO ialah batas maksimum kehilangan data yang dapat diterima berdasarkan titik pemulihan; RTO target durasi pemulihan fungsi setelah gangguan. Target disahkan melalui analisis dampak bisnis, ketergantungan, kemampuan aktual hosting KB-14, kapasitas KB-18 dan kesepakatan dukungan/SLA. Angka terukur uji berbeda dari target, dan belum dapat diklaim memenuhi bila target belum disahkan.

Semua dampak di bawah **kandidat untuk penilaian**, bukan hasil analisis dampak yang sudah disetujui. Prioritas masih Belum ditetapkan; sel RPO/RTO usulan sengaja kosong. Kode fungsi mengikuti matriks usulan, bukan penunjukan persetujuan resmi.

| Kelompok layanan kandidat | Dampak jika berhenti | Dampak kehilangan data | Prioritas pemulihan | RPO usulan | RTO usulan | Dasar penetapan yang diperlukan | Calon fungsi persetujuan, belum final | Status verifikasi kemampuan teknis |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Registri Induk dan relasi kepemilikan | Layanan identitas/perwakilan terganggu | Identitas, kanonik/alias, relasi/periode bisa tidak lengkap | Belum ditetapkan |  |  | Dampak bisnis/ketergantungan, bukti KB-14/KB-18 | PLS dengan FOP/PGU/PDN sesuai mandat | BELUM DIVERIFIKASI |
| Pengesahan dan perubahan bisnis | Nilai resmi/koreksi/konflik tidak dapat diproses aman | Keputusan/versi/transaksi sah dapat belum kembali | Belum ditetapkan |  |  | Kritisnya keputusan dan audit/transaksi, kemampuan terukur | PLS dengan FOP/PGU/GAT | BELUM DIVERIFIKASI |
| Dokumen privat | Bukti/layanan dokumen tidak tersedia | Referensi/versi database dapat tidak cocok atau bukti hilang | Belum ditetapkan |  |  | Klasifikasi KB-11, konsistensi dan fasilitas storage | PLS dengan PKA/FOP/ADB | BELUM DIVERIFIKASI |
| Audit kritis | Keterlacakan/pengesahan aman terdampak | Jejak hilang/manipulasi atau selisih sulit dipastikan | Belum ditetapkan |  |  | KB-12, sumber/kelengkapan dan kontrol independen | PLS dengan GAT/PKA/PGU | BELUM DIVERIFIKASI |
| Proses impor dan rekonsiliasi | Pemeriksaan/promosi/perbaikan identitas tertunda | Status staging/operasi/replay/kanonik bisa tidak sesuai | Belum ditetapkan |  |  | KB-13/KB-15 dan lingkup fase yang kelak diizinkan | PLS dengan PGU/FOP/ADB | BELUM DIVERIFIKASI |
| Dashboard/laporan yang dapat dihitung ulang | Informasi ringkasan tertunda | Ringkasan turunan bisa kedaluwarsa; sumber sah tetap harus pulih | Belum ditetapkan |  |  | Definisi laporan/versi sumber; kemampuan hitung ulang perlu dibuktikan | PLS dengan PGU/FOP | BELUM DIVERIFIKASI |
| Proses terjadwal | Backup/kirim audit/pekerjaan penting terlambat | Status pekerjaan bisa hilang, ganda atau belum selesai | Belum ditetapkan |  |  | Ketergantungan proses, batas keterlambatan sah dan kemampuan KB-14 | PLS dengan PGU/ADB/GAT | BELUM DIVERIFIKASI |
| Modul program fase berikutnya | Riwayat layanan/pemantauan program terganggu kelak | Partisipasi/realisasi/observasi bisa tidak sesuai | Belum ditetapkan |  |  | Hanya setelah lingkup KB-16 diizinkan, bukan kebutuhan fitur MVP baru | PLS dengan pengampu program/FOP yang kelak sah | BELUM DIVERIFIKASI |

Tidak menetapkan harian/mingguan/bulanan, angka menit/jam, salinan tertentu atau retensi tahun melalui matriks. Program tetap fase lanjutan KB-16; impor/rekonsiliasi hanya lingkup yang kelak diizinkan, bukan perluasan MVP. Urutan pemulihan memperhitungkan ketergantungan komponen, tanpa menetapkan prioritas final sekarang.

### Monitoring — 13 area yang direncanakan

| Area monitoring | Gejala/risiko yang ditinjau kelak | Calon fungsi tindak lanjut, usulan |
| --- | --- | --- |
| Ketersediaan aplikasi | Akses/fungsi utama gagal atau menurun | AAP/PGU |
| Koneksi database | Koneksi/transaksi gagal atau layanan data terganggu | ADB/PGU |
| Kapasitas penyimpanan dan sumber daya | Storage/inode/CPU/RAM/proses/koneksi mendekati batas terbukti | ADB/PGU |
| Kesehatan scheduler | Jadwal tidak berjalan/terlambat/tumpang tindih | AAP/ADB |
| Status queue/background job | Gagal/tertunda/berulang, status operasi tidak jelas | AAP/ADB |
| Kegagalan login dan akses tidak sah relevan | Pola penolakan/akses mencurigakan sesuai lingkup sah | AAP/TIN |
| Kegagalan pembuatan backup | Tugas/komponen backup gagal atau titik tidak tersedia | OBP/ADB |
| Kegagalan pemeriksaan integritas backup | Isi/kelengkapan/versi/keterbacaan bermasalah | OBP/PGU |
| Keterlambatan replikasi audit | Event/niat kirim belum tersalin sesuai ambang sah kelak | GAT/PGU |
| Ketidaksesuaian audit | ID/isi/rentang/kelengkapan kedua lapisan berbeda | GAT/TIN |
| Gangguan akses dokumen privat | Dokumen/versi/referensi tidak tersedia atau akses keliru | AAP/ADB |
| Kegagalan impor dan rekonsiliasi signifikan | Batch/operasi/replay/konflik bermasalah dalam lingkup diizinkan | PGU/FOP sesuai proses |
| Kesalahan aplikasi yang memengaruhi data | Validasi/transaksi/referensi/versi gagal atau korup | PGU/AAP/FOP |

Setiap peringatan memerlukan **(1) tingkat dampak, (2) pemilik tindak lanjut, (3) mekanisme eskalasi, (4) status penanganan, (5) referensi insiden, (6) audit penyelesaian**. Waktu indikasi/deteksi/tindakan dan bukti aman memungkinkan penelusuran; ambang/interval, alat, kontak, kanal notifikasi dan SLA belum ditetapkan. Tidak semua peringatan berarti kebocoran, tetapi indikasi tidak boleh disembunyikan atau otomatis dianggap selesai.

Tertundanya salinan audit pascacommit ditangani KB-12 tanpa membatalkan transaksi bisnis sah. Kegagalan verifikasi audit ketika pemulihan adalah kesenjangan yang mencegah klaim pulih sepenuhnya. Status pengiriman tidak menulis ulang isi event lama. Monitoring/operasi di hosting atau sarana di luar aplikasi perlu bukti/akses/jejak tersendiri; UI aplikasi saja tidak membatasi hak administrator infrastruktur.

### Insiden keamanan dan data pribadi

Alur konseptual: catat indikasi/waktu → nilai dampak/cakupan/jenis → eskalasi kepada fungsi berwenang → amankan bukti dan batasi gangguan menurut mandat → nilai sumber/titik pemulihan → tangani/validasi → catat keputusan/pembukaan/evaluasi. Tidak menetapkan kontak atau memicu pemberitahuan nyata.

Dugaan kegagalan pelindungan data mengikuti KB-11. Pengendali/fungsi hukum sah menilai kewajiban pemberitahuan Pasal 46, termasuk batas **3 x 24 jam** kepada subjek dan lembaga serta ketentuan terkait; tenggat hukum bukan SLA dukungan yang boleh dinegosiasikan melalui RPO/RTO. Catatan indikasi/kejadian/diketahui tidak menunggu konfirmasi internal atau restore selesai dan tidak mereset tenggat. Rujukan: [UU PDP, JDIH Kemkomdigi](https://jdih.komdigi.go.id/produk_hukum/view/id/832/t/crc32/). Peran hukum, prosedur rinci dan penerima/kanal resmi perlu penetapan sah, bukan ditebak dalam tabel RACI.

### Pengendalian perubahan dan koreksi

| Jenis tindakan | Rancangan pengendalian | Batas |
| --- | --- | --- |
| Perubahan aplikasi/produksi | Permintaan, analisis dampak komponen/versi/data/akses/audit, persetujuan mandat, rencana implementasi/pemulihan, verifikasi, audit | Tidak ada deployment atau perubahan hosting sekarang. Pemulihan kode saja tidak otomatis membalik data |
| Perubahan darurat | Justifikasi mendesak, jalur persetujuan SOP, pencatatan tindakan/waktu/dampak, evaluasi pascaperubahan dan tindak lanjut | Bukan kewenangan bebas admin atau pengecualian dari field owner/audit |
| Koreksi data bisnis | Pemilik field, bukti/versi, satu pengesah biasa KB-07, konflik KB-08, keputusan korektif dan audit | Profil awal tetap pembuat/pengesah berbeda; restore seluruh database bukan cara menghapus pengesahan salah |
| Pemulihan gangguan infrastruktur | Sumber/titik aman, konsistensi lintas komponen, transaksi yang hilang, verifikasi/hak dan persetujuan pembukaan | Transaksi sah setelah titik lama tidak dianggap tidak pernah terjadi; audit/kehilangan harus dinyatakan |

### Rincian dan risiko yang tetap terbuka

Pemilik layanan/pengelola/PDN/petugas dan formalitas tugas; fasilitas backup/isolasi hosting; lokasi/media/jumlah/pemisahan kontrol; enkripsi/kunci/jalur pengganti; frekuensi/retensi/JRA Sinjai; RPO/RTO/prioritas/jadwal uji; SLA/kontak/kanal insiden; SOP perubahan/darurat/restore/pembukaan; zona waktu/acuan waktu; penilaian keamanan dan izin data nyata. Hosting KB-14 tetap BELUM DAPAT DINILAI, angka dan bukti kapasitas KB-18 belum final.

Risiko paling penting ialah hilang bersama seluruh salinan, backup tidak konsisten atau terkompromi, kunci tidak dapat dipulihkan, hak lama aktif kembali, transaksi sah/audit hilang dan pemulihan diklaim berhasil tanpa bukti. Rencana 30 T17 pada [keputusan](06-keputusan-bisnis.md) menilai kendali itu kelak. Saat ini tidak ada uji teknis, backup/restore, data nyata atau akses server.

## Tata kelola angka, kapasitas dan perubahan sumber daya — KB-18

Model C mencakup arsitektur kabupaten dan satu SSOT, bukan seluruh fungsi/OPD aktif atau belanja sumber daya sekaligus. MVP KB-09 registri/pangan tetap, program KB-16 setelahnya. [Model kapasitas](09-perencanaan-kapasitas.md) memisahkan enam cakupan dan menjadi pusat angka/asumsi/rumus agar tidak muncul versi berbeda per OPD/dokumen.

Angka kapasitas wajib kategori FAKTUAL TERVERIFIKASI, ASUMSI PERENCANAAN, PROYEKSI, HASIL PENGUJIAN atau BELUM DIKETAHUI. Fakta memiliki sumber/tanggal/definisi/cakupan/metode/verifikator; asumsi mencatat asal/versi; proyeksi menautkan parameter/rumus/satuan/horizon. Hasil uji hanya setelah pengujian berizin dengan konteks lengkap, yang belum tersedia sekarang. Data tidak ada bukan nol dan proyeksi tidak mengganti nilai resmi.

Volume Orang/Badan/Unit, hubungan/riwayat dan biaya penyimpanan berbeda dari statistik Unit unik. Cabang/merek/produk/OPD tidak menggandakan Unit. Hitung jejak/versi/alias dan perbedaan database/dokumen/audit/staging/backup tanpa menambah komponen yang sudah masuk agregat. Audit GB/tahun bukan stok GB hari pertama; retensi yang sah menentukan kebutuhan stok.

Akses NIK/dokumen/ekonomi/ekspor, satu field owner, verifikator awal berbeda dan satu pengesah biasa tetap KB-04–KB-08/KB-11. Pertumbuhan tidak membenarkan admin teknis mengesahkan data, mematikan audit kritis, menghapus riwayat wajib atau menyimpan data pribadi selamanya. Retensi/JRA dan dua lapisan audit KB-12 tetap, backup/restore/RPO/RTO KB-17 belum numerik final.

Dua belas indikator peningkatan pada model memerlukan sumber/calon penanggung jawab/tindakan/status; sel ambang peringatan dan tindakan kosong sampai pengukuran/persetujuan. Tindak lanjut kelak memvalidasi bukti/tren/dampak, memperbarui proyeksi/opsi/biaya, eskalasi dan persetujuan perubahan, lalu rencana penerapan/pemulihan/verifikasi/audit. Bukan pemicu otomatis kuota/pengadaan atau perintah perubahan server.

Penetapan pengelola/infrastruktur, fakta volume, target kinerja/ambang, kuota/biaya dan persetujuan masih terbuka. RACI usulan KB-17 dan tambahan [matriks](matriks-kewenangan-mvp-kb09.md) tidak menunjuk OPD/pejabat resmi. Kekurangan cPanel memerlukan opsi disahkan, bukan mengganti teknologi/SSOT diam-diam.

Hosting dan kapasitas akhir **BELUM DAPAT DINILAI**. Seluruh target RPO/RTO/formulir restore KB-17 tetap kosong, 55 aktual KB-14 belum diketahui. Tidak ada akses data nyata/server, load test/stress test/benchmark, konfigurasi/kuota/cron, backup/restore/deployment atau pengadaan pada tugas ini.

## Logika, nilai efektif dan perlindungan agregasi — DT-007

**Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L).** L menyebut objek/lingkup/tahap. Katalog minimum harus sah dan berversi/tanggal efektif; detail minimum dan transisi belum ditetapkan oleh pengembang. Jika aturan/kewenangan/bukti prasyarat belum cukup, hasil **Belum dapat dinilai**, bukan lulus otomatis dari daftar kosong atau persentase.

Bila aturan cukup jelas tetapi nilai efektif wajib kosong/belum sah/ditolak atau penghalang relevan diketahui, lingkup belum memenuhi atau kesimpulan positif ditahan. Field pilihan kosong sendiri tidak otomatis menghalangi. Ketika syarat terpenuhi, hasil **Memenuhi persyaratan** tetap bukan keputusan **Disahkan**. Registrasi induk harus diputus verifikator sah yang berbeda dari pembuat; field biasa satu pengesah berwenang sesuai KB-07.

Field dapat memiliki nilai resmi lama yang masih efektif dan draf/usulan baru. Usulan baru sendiri tidak membatalkan nilai lama; nilai efektif dievaluasi menurut aturan/versinya. Konflik aktif relevan menahan hasil positif tanpa menghapus nilai resmi; kasus/subkasus KB-08 tetap pada pemilik field. Pengesahan lama tidak otomatis menyetujui kandidat baru.

Versi field/katalog/periode/bukti yang berubah dievaluasi ulang hanya pada lingkup terdampak; hasil terdahulu mempertahankan aturan/data/konteks lamanya. Alih pemilik field yang sah tidak menghapus sejarah mandat/pengesahan. Penilaian ulang dengan masukan/konteks sama konsisten tanpa pengesahan ganda; mekanisme teknis pencatatan/pemicu belum dipilih.

Ringkasan dan alasan dibatasi menurut objek/lingkup/tujuan/sensitivitas/hak. Pengguna yang boleh membaca ringkasan tidak otomatis boleh membaca semua nilai/bukti/asal atau mengekspor. Tidak membuka NIK utuh atau menyalin data sensitif mentah ke audit. KB-12 mengatur audit pengesahan/koreksi/konflik/katalog/evaluasi relevan dan salinan terlindungi; agregasi tidak membuat event pengesahan palsu.

[Keputusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) memuat 28 RB, 28 kasus penerimaan dan 15 kasus batas hipotetis. DT-003 DISEPAKATI B A3+B1+C2; rincian katalog/bukti tetap perlu penetapan. DT-005 C+F+H2 DISEPAKATI pada model dengan rincian aktual MENUNGGU PENETAPAN; DT-006 MENUNGGU PENETAPAN; DT-011 kini C+D1+M1+E1 MODEL DIPILIH dengan konsistensi/implementasi TERBUKA; matriks operasional masih menunggu penetapan. DT-009 kini DISEPAKATI C+B2+V2+K2 pada model, rincian bukti/risiko/operasional MENUNGGU PENETAPAN; DT-033 DIUSULKAN tetap, DT-019 DITUNDA memerlukan otorisasi sumber/dasar impor. Label status pada kamus konseptual, bukan enum/transisi final atau daftar minimum riil.

G0 siap ditinjau, G1/G5/G7 belum lulus dan G2/G3/G4/G6 belum dinilai seperti baseline. Tidak ada implementasi, pengujian teknis, data nyata atau akses server/layanan eksternal.

## Tata kelola registrasi DT-003 A3+B1+C2 — 6 November 2026

[Rumusan DT-003](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2) memuat **30 RB dan 30 rencana penerimaan resmi**. A3, B1 dan C2 sudah dipilih; belum ada skenario dijalankan. NIB tidak wajib untuk draf, pengajuan maupun pengesahan induk.

| Tahap/tindakan | Persyaratan dan batas kewenangan |
| --- | --- |
| Simpan draf baru | Hanya petugas ditunjuk; minimal satu pihak berjenis jelas/peran, satu lokasi usaha, satu kegiatan dikenali, penanda usaha, sumber, petugas dan waktu. Di bawah A3 tidak boleh disimpan sebagai draf registrasi |
| Pengajuan | Periksa paket minimum induk dan kandidat duplikasi relevan; B1 memakai dokumen formal menurut objek/klaim dan standar sah. Jenis dokumen wajib belum ditentukan sepihak |
| Pengesahan C2 | Verifikator berbeda dari pembuat dengan mandat aktif mengesahkan paket minimum induk. Tidak mengesahkan semua field OPD lain atau profil sektor |
| Kekurangan/konflik/duplikasi ambigu | Tahan/kembalikan untuk koreksi sesuai kewenangan, alasan/bukti/riwayat terjaga; jangan otomatis memilih nilai atau membuat Unit baru |
| Penolakan | Catat keputusan/alasan/aktor/waktu; tidak menghapus pengajuan atau data lama. Prosedur rinci/pengajuan ulang DT-009 belum final |
| Koreksi setelah pengesahan | Keputusan baru menurut pemilik field KB-07/08, nilai lama dan audit tetap dapat ditelusuri; tidak memutihkan field belum sah |
| Pengarsipan | Dasar/mandat/JRA/penahanan sah KB-11/13; bukan hapus permanen atau otomatis karena sumber tua/tidak lengkap |

Kekurangan bukti formal yang memenuhi standar menahan pengesahan, **bukan draf yang memenuhi A3**. Dokumen yang hanya membuktikan identitas pihak tidak otomatis membuktikan kepemilikan Unit. Nomor NIB/izin dalam Excel dan format digit tidak memenuhi B1 secara otomatis. T-DT003.14 tentang dokumen wajib tunduk penetapan standar sah, bukan menjadikan NIB wajib.

Registrasi baru: petugas → A3 → draf → pengajuan/B1 → verifikator berbeda → C2. Data historis: sumber → staging privat → pemetaan/validasi → kandidat → pelengkapan A3 → B1 → C2. Staging bukan draf resmi atau Registri Induk; belum A3 hanya ditampung menurut dasar/izin/retensi sah pada fase historis berizin. A3 tidak dilonggarkan untuk Excel. DT-019/032 tidak ditutup dan modul impor tidak otomatis masuk MVP.

DT-007 Model C tetap memisahkan induk/field/sektor dari agregasi. Katalog sah berversi/efektif wajib untuk penilaian; belum tersedia berarti Belum dapat dinilai, bukan lulus otomatis. C2 bukan hak semua field; satu pemilik aktif/satu pengesah field biasa dan koordinator tanpa hak tambahan tetap.

KB-11 melindungi identitas/bukti/alasan sensitif dan membatasi ekspor. KB-12 mengikat perubahan/pengesahan kritis dengan audit operasional dalam transaksi yang berhasil/batal bersama; gagal salinan audit sesudah commit ditangani retry/rekonsiliasi, tidak membatalkan bisnis sah diam-diam. Tidak menyimpan NIK/dokumen mentah di audit.

DT-005/006/009/011/033 dan standar bukti/katalog operasional masih memerlukan penetapan; nama OPD/petugas tidak ditentukan di sini. [Audit historis](11-audit-baseline-data-historis.md) adalah bahan agregat dengan AH-01 penyebut belum jelas, bukan izin memproses data pribadi atau bukti lulus A3/B1/C2. G1 BELUM DIIZINKAN, hosting BELUM DAPAT DINILAI; dokumentasi saja.

## Peralihan kewenangan H2 — DT-005

**6 November 2026:** [DT-005 C+F+H2](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2) DISEPAKATI pada tingkat model. Fungsi/mandat resmi menentukan pemilik, satu OPD aktif per kode field/cakupan/waktu efektif. Definisi field terpisah dari penetapan pemilik; satu entitas boleh memiliki field dengan pemilik berbeda. OPD/petugas/pejabat penetap/dokumen mandat riil belum ditetapkan.

Pemilik Field, Pemasok Data, Pembuat Profil, Pengesah Awal, Pengesah Field dan Admin Teknis dibedakan; Koordinator Registri Induk fungsi koordinasi tersendiri. [Tabel peran](matriks-kewenangan-mvp-kb09.md#peran-dan-batas-penugasan) memuat batasnya. Pemasok/pembuat tidak memperoleh pengesahan otomatis. Multi-penugasan harus sah dan tidak melewati larangan pembuat mengesahkan profil awal sendiri. Satu pengesah field biasa tetap KB-07, C2 tidak mengesahkan semua field OPD lain.

### Urutan perubahan yang wajib didokumentasikan

1. **Usulan pengalihan:** catat field yang dimaksud, asal/tujuan usulan dan alasan; usulan belum mengubah kewenangan.
2. **Pemeriksaan kode, cakupan dan alasan:** pastikan definisi/versi field serta cakupan wilayah/sektor/entitas yang relevan jelas.
3. **Verifikasi dasar mandat:** periksa dokumen dan fungsi penetap yang berwenang; identitas/mandat riil masih MENUNGGU PENETAPAN.
4. **Penyelesaian sengketa:** jika ada klaim kewenangan bertentangan, ikuti jalur organisasi KB-08/DT-008; admin/koordinator tidak memutus sepihak.
5. **Penetapan resmi dan tanggal efektif:** keputusan sah harus mendahului penerapan; tanggal konfigurasi teknis bukan pengganti tanggal efektif organisasi.
6. **Pemeriksaan tumpang tindih:** satu kombinasi kode field, cakupan dan waktu efektif hanya satu OPD aktif; benturan cakupan umum/subcakupan juga harus diperiksa.
7. **Transisi pengesah/hak pengguna:** cocokkan akhir/awal mandat pemilik dan petugas; setelah mandat berakhir pengesah lama ditolak, pemilik baru memerlukan penugasan sah.
8. **Pengajuan/koreksi tertunda:** inventarisasi versi/objek/keputusan dan terapkan prosedur transisi sah. Perpindahan tidak otomatis mengesahkan atau menolak antrean, serta tidak membawa hak lama tanpa pemeriksaan.
9. **Penerapan konfigurasi sesuai keputusan:** admin hanya mengeksekusi mandat yang disetujui, dengan rujukan keputusan/versi/efektif dan pemeriksaan akses saat tindakan.
10. **Audit dan pengawasan hasil:** perubahan kritis dan audit operasional KB-12 berhasil/batal bersama; periksa pemilik aktif, hak dan antrean. Pengiriman salinan pascacommit mengikuti KB-12.

Pengesahan/kepemilikan lama tetap terlacak dan tidak ditulis ulang oleh pergantian organisasi. Penetapan efektif mendatang tidak mengambil alih hak saat ini; periksa masa berlaku pemilik dan petugas, bukan jam konfigurasi. Setelah mandat lama berakhir, aksi ditolak tanpa mandat aktif lain yang sah. Penetapan pemilik baru sendiri tidak otomatis menunjuk seluruh pegawainya sebagai pengesah.

Bila dua penetapan cakupannya beririsan, pengesahan baru tidak boleh berjalan dengan pemilik ganda; jangan memilih dari urutan input, OPD pemasok atau prioritas “paling khusus” buatan sistem. Katalog/versi/cakupan nyata dan jalur organisasi KB-08/DT-008 harus cukup jelas. Field tanpa pemilik sah tidak memberi peluang admin mengesahkan atas alasan darurat teknis.

Antrean pengajuan/koreksi tidak otomatis sah ketika pemilik pindah. Prosedur transisi sah harus menjaga rujukan keputusan/versi/bukti, menilai kembali mandat dan menyatakan penanggung jawab tindak lanjut sesuai keputusan organisasi. Rincian penyerahan/penahanan/pengajuan ulang dan pejabat belum ditetapkan sepihak. Pergantian hak juga tidak otomatis membuka bukti sensitif, unduhan atau ekspor lama.

### Akses, audit dan kaitan jalur bisnis

Tindakan baca/usul/sahkan/koreksi/unduh/ekspor/administrasi dipisah KB-11, berdasarkan entitas/field/wilayah/sektor/tindakan/tujuan serta penugasan aktif. Koordinator/admin bukan superuser, pemilik field bukan otomatis Pengendali/Prosesor hukum dan pemasok nonpemilik tidak memperoleh akses identitas mentah.

Perubahan kewenangan kritis dan audit operasional KB-12 berhasil/batal bersama. Gagal audit kritis tidak dinyatakan berhasil; gangguan pengiriman salinan pascacommit mengikuti retry/rekonsiliasi, tidak membatalkan bisnis sah diam-diam. Audit tidak memuat rahasia/NIK mentah, retensi/penahanan/penyusutan mengikuti dasar/JRA sah.

DT-003 B A3+B1+C2 dan DT-007 C tetap: A3 sebelum draf, NIB tidak wajib sampai pengesahan, verifikator awal berbeda dan agregasi bukan pengesahan/otoritas baru. Katalog minimum harus sah/berversi/efektif; pergantian pemilik tidak memutihkan nilai belum sah atau menghapus pengesahan historis yang sah.

Sumber historis bukan nilai resmi atau bukti pemasok memiliki field. Pemetaan pihak/lokasi/kegiatan/izin/ekonomi tetap [lampiran 11](11-audit-baseline-data-historis.md), staging/import tetap rancangan berizin terpisah. DT-004/006/008/009/011/012/019/033 serta rincian aktual DT-005 belum final. G0 siap ditinjau, G1 coding BELUM DIBERIKAN, G1/G5/G7 belum lulus, G2/G3/G4/G6 belum dinilai dan hosting BELUM DAPAT DINILAI. Hanya Markdown, tanpa konfigurasi hak nyata.

## Pemeriksaan bukti dan empat jalur koreksi — DT-009

**6 November 2026:** [DT-009 C+B2+V2+K2](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2) DISEPAKATI final tingkat model bisnis. B2 memakai standar proporsional per kelompok klaim/field/objek/risiko/sensitivitas dengan katalog sah berversi. Cakupan risiko, bukti wajib resmi, masa berlaku/retensi dan pejabat/OPD/petugas nyata belum ditetapkan.

Periksa objek/field/versi, sumber/referensi/waktu/periode bukti, katalog yang berlaku dan mandat pemeriksa sebelum menyimpulkan kecukupan. [Katalog 16 kelompok](kamus-data-mvp-kb09.md#katalog-bukti-per-kelompok-klaim--dt-009) masih USULAN/MENUNGGU PENETAPAN. Hasil konseptual **MEMADAI/PERLU PELENGKAPAN/TIDAK SESUAI/KONFLIK/BELUM DAPAT DINILAI** terpisah dari pengesahan nilai. Katalog belum sah berarti belum dapat dinilai; identitas tidak otomatis bukti kepemilikan, nomor Excel bukan bukti formal diperiksa.

| Jalur | Makna dan contoh sintetis | Syarat/batas |
| --- | --- | --- |
| K1 — Administratif | Salah tulis/format yang terbukti tidak mengubah substansi fakta | Periksa objek/klaim/versi dan dampak. Perubahan makna identitas/kepemilikan tidak boleh disamarkan sebagai K1 |
| K2 — Perubahan fakta | Perpindahan lokasi, perubahan hubungan pengelola atau kegiatan | Tanggal/periode efektif, klaim/bukti relevan, rujukan nilai/relasi lama tetap |
| K3 — Koreksi historis | Omzet periode lampau terbukti keliru | Koreksi merujuk periode/versi yang tepat; nilai semula/keputusan/audit tetap terlacak, tanpa menimpa periode lain |
| K4 — Konflik/risiko tinggi | Pertentangan bukti/identitas atau sengketa pemilik/pengelola usaha | Pemeriksaan/penyelesaian sesuai risiko dan kewenangan. Sengketa substansi ke pemilik field, kewenangan organisasi ke jalur KB-08; tidak memberi admin hak putus |

Komponen model bernama K2 berarti paket empat jalur, bukan semua koreksi memakai jalur K2. K1–K3 tidak otomatis dua pengesah, K4 juga bukan otomatis dua tanda tangan. Satu pengesah field biasa berwenang cukup KB-07 dengan seluruh prasyarat; kebijakan detail K4/ambang risiko memerlukan penetapan. Pembuat profil awal tetap tidak mengesahkan profilnya sendiri, B1/C2 DT-003 tidak dilonggarkan dan NIB tetap tidak wajib.

Pergantian OPD pemilik bukan koreksi K1–K4: ikuti H2 DT-005. Sengketa substansi bukti/nilai oleh pemilik field, sengketa siapa berwenang melalui organisasi KB-08/DT-008. Pemasok/nonpemilik mengusul jika berhak, admin/koordinator bukan pengesah bisnis otomatis.

## Nilai efektif dan pembatasan V2 — DT-009

1. Nilai resmi sebelumnya tetap dipakai saat usulan diperiksa **hanya selama masih sah dan tidak ada keputusan pembatasan berlaku**.
2. Nilai/bukti yang kedaluwarsa menurut ketentuan sah tidak disebut masih berlaku. Jangan mengarang durasi berlaku atau memperpanjangnya karena koreksi belum selesai.
3. Konflik material/risiko/pencabutan dapat mendasari pembatasan pada lingkup terdampak melalui keputusan sah yang beralasan; bukan menghapus nilai/jejak lama.
4. Pengajuan kandidat baru tidak otomatis menimpa, membatalkan atau mengesahkan nilai resmi.
5. Persetujuan menghasilkan versi/nilai efektif menurut tanggal/periode sah. Jika berlaku mendatang, jangan dipakai lebih awal; bila nilai lama tidak sah sebelum itu, jangan mengisi jeda dengan nilai lama tidak sah.
6. Penolakan usulan tidak otomatis memulihkan nilai lama yang kedaluwarsa, dicabut, dibatasi atau tidak sah.
7. Semua nilai/versi dan keputusan tetap terlacak, termasuk alasan pembatasan, penolakan dan koreksi historis.
8. Kandidat berbasis versi usang diperiksa ulang terhadap nilai/keputusan/mandat/katalog terkini sebelum diputuskan; jangan menimpa perubahan sah yang lebih baru.
9. Pembatasan penggunaan memerlukan alasan, otoritas, objek/field/versi, lingkup, waktu/periode yang relevan dan audit. Rincian masa/peninjauan/pencabutan pembatasan belum ditetapkan; penolakan atau pembatalan usulan sendiri bukan keputusan pencabutan pembatasan.
10. Perubahan nilai/keputusan pembatasan yang memengaruhi persyaratan memicu evaluasi ulang DT-007 pada lingkup/versi terkait, bukan pengesahan seluruh profil.

Pembatasan tidak menghapus nilai/status/keputusan lama. Konflik aktif relevan tetap menahan kesimpulan positif DT-007 tanpa menunggu nilai ditimpa atau dianggap tidak pernah disahkan. Penghalang agregasi berbeda dari keputusan pembatasan pemakaian V2; tidak menilai semua lingkup lulus hanya karena belum ada pembatasan tertulis.

Bukti yang diterima belakangan dicatat waktu sebenarnya dan dinilai menurut klaim/periode/katalog sah; jangan memundurkan waktu penerimaan atau mengubah keputusan lama. Satu bukti untuk beberapa klaim dinilai kecukupan dan aksesnya masing-masing. Nilai lama tidak sah tidak dihidupkan kembali oleh penolakan atau pembatalan usulan.

## Transisi usulan koreksi — DT-009

Delapan nama status adalah kontrak **konseptual**: DRAF, DIAJUKAN, DALAM PEMERIKSAAN, PERLU PERBAIKAN, DALAM SENGKETA, DISETUJUI, DITOLAK, DIBATALKAN. Bukan enum database final, bukan status induk/field/sektor DT-007 dan bukan pengganti enam status kasus konflik KB-08 atau status permohonan layanan lama.

Tabel berikut **rancangan transisi pendukung model**, bukan matriks hak operasional yang sudah disahkan. “Bukti minimum” menyebut metadata/dasar pemeriksaan, bukan nama dokumen wajib resmi. Aktor generik memerlukan penugasan nyata DT-006/011; kewenangan pembatalan/prosedur K4 dan detail pelaksanaan tetap MENUNGGU PENETAPAN. Tidak ada akses nyata diberikan.

| Status asal | Status tujuan | Aktor/kewenangan | Bukti minimum konseptual | Kondisi pemblokir | Tindakan terhadap nilai efektif | Alasan keputusan | Audit/versi |
| --- | --- | --- | --- | --- | --- | --- | --- |
| DRAF | DIAJUKAN | Pengusul dengan hak usul | Objek/field/versi dasar, alasan, jalur dan rujukan sumber/bukti yang tersedia; kelengkapan mengikuti katalog sah | Hak/tujuan tidak sah, sasaran tidak jelas, syarat pengajuan belum terpenuhi | Tidak menimpa nilai; V2 tetap | Alasan koreksi/pengajuan | Catat pengusul/waktu/versi/rujukan tanpa bukti mentah |
| DIAJUKAN | DALAM PEMERIKSAAN | Petugas pemeriksa dengan mandat aktif sesuai cakupan | Rujukan pengajuan, versi target, katalog yang berlaku dan mandat pemeriksaan | Mandat/hak tidak aktif, cakupan tidak sesuai; katalog belum sah menahan kesimpulan kecukupan | Nilai lama hanya jika sah/tidak dibatasi | Dasar penugasan dan pemeriksaan | Catat penerimaan/pemeriksaan/katalog/versi |
| DIAJUKAN | PERLU PERBAIKAN | Petugas pemeriksa/penerima berhak menurut SOP sah | Daftar kekurangan kelengkapan pengajuan yang dapat ditelusuri | Tidak berhak meminta perbaikan, alasan tidak tercatat | Tidak mengubah nilai resmi atau otomatis mencabutnya | Kekurangan yang harus diperbaiki | Riwayat pengajuan/versi tetap |
| DALAM PEMERIKSAAN | PERLU PERBAIKAN | Pemeriksa atau pengesah berwenang menurut mandat | Penilaian kekurangan bukti/versi/sumber pada klaim | Tidak berhak; kebutuhan bukti tidak berdasar standar sah | V2 tetap; kebutuhan pembatasan diputus terpisah | Kekurangan/referensi standar, tanpa mengarang dokumen wajib | Penilaian dan versi sebelumnya tidak ditimpa |
| PERLU PERBAIKAN | DIAJUKAN | Pengusul/pelengkap dengan hak sesuai SOP sah | Revisi bahan, rujukan kekurangan, sumber/versi dan waktu penerimaan bukti baru | Hak/tujuan tidak sah, revisi belum memenuhi syarat pengajuan | Tidak mengubah nilai efektif | Penjelasan revisi/pelengkapan | Versi pengajuan baru menaut riwayat lama |
| DALAM PEMERIKSAAN | DALAM SENGKETA | Pemeriksa/pemilik field berwenang mengidentifikasi dan merujuk kasus | Pertentangan bukti/klaim atau risiko material yang terdokumentasi | Indikasi/rujukan tidak jelas; jangan menganggap setiap konflik versi sebagai sengketa substansi | Penghalang relevan DT-007 tetap; pembatasan V2 perlu keputusan sah per lingkup | Jenis sengketa/dampak dan rujukan kasus KB-08 | Catat kasus/subkasus/versi; bukan memindah pemilik |
| DALAM SENGKETA | DALAM PEMERIKSAAN | Petugas berwenang sesuai hasil penyelesaian; otoritas organisasi untuk sengketa kewenangan | Keputusan/hasil penyelesaian sah dan mandat/cakupan saat ini | Sengketa relevan belum terselesaikan, H2 belum efektif bila diperlukan | Tidak otomatis memulihkan nilai yang tidak sah atau mencabut pembatasan | Dasar lanjut pemeriksaan dan batas penyelesaian | Rujuk keputusan kasus/H2 tanpa menulis ulang sejarah |
| DALAM PEMERIKSAAN | DISETUJUI | Satu pengesah field dengan mandat aktif; C2 tetap verifikator berbeda bila menyangkut proses induk awal | Penilaian bukti menurut katalog sah, versi dasar terkini, alasan, tanggal/periode efektif dan keputusan | Bukti tidak cukup/katalog belum sah, konflik penghalang, versi usang belum diperiksa ulang, mandat tidak aktif, audit kritis gagal | Versi/keputusan baru menurut efektif/periode sah; efektif mendatang tidak berlaku lebih awal | Dasar persetujuan dan dampak lingkup | Nilai/versi/keputusan/metadata pembatasan yang relevan serta audit kritis atomik |
| DALAM PEMERIKSAAN | DITOLAK | Pengesah/pemilik field berwenang sesuai prosedur sah | Hasil pemeriksaan dan dasar penolakan yang terlacak | Mandat tidak aktif, alasan/rujukan keputusan tidak sah, audit kritis gagal | Tidak menerapkan kandidat; nilai lama hanya jika masih sah, tidak otomatis dipulihkan | Alasan penolakan menurut klaim/standar | Keputusan penolakan tercatat, nilai/bukti/versi lama tetap |
| DRAF | DIBATALKAN | Pihak yang berhak membatalkan menurut prosedur/mandat sah, belum ditetapkan rinci | Rujukan pengajuan/versi dan alasan pembatalan; periksa dampak pada kasus/bukti | Hak/dasar tidak sah; jangan gunakan pembatalan untuk menghilangkan sengketa atau membalik keputusan resmi | Tidak menerapkan kandidat, tidak memulihkan nilai tidak sah, tidak otomatis menutup kasus/pembatasan V2 | Alasan dan kewenangan pembatalan | Catat pembatalan sebagai riwayat; tidak menghapus usulan, bukti/retensi atau audit |
| DIAJUKAN | DIBATALKAN | Pihak yang berhak membatalkan menurut prosedur/mandat sah, belum ditetapkan rinci | Rujukan pengajuan/versi dan alasan pembatalan; periksa dampak pada kasus/bukti | Hak/dasar tidak sah; jangan gunakan pembatalan untuk menghilangkan sengketa atau membalik keputusan resmi | Tidak menerapkan kandidat, tidak memulihkan nilai tidak sah, tidak otomatis menutup kasus/pembatasan V2 | Alasan dan kewenangan pembatalan | Catat pembatalan sebagai riwayat; tidak menghapus usulan, bukti/retensi atau audit |
| PERLU PERBAIKAN | DIBATALKAN | Pihak yang berhak membatalkan menurut prosedur/mandat sah, belum ditetapkan rinci | Rujukan pengajuan/versi dan alasan pembatalan; periksa dampak pada kasus/bukti | Hak/dasar tidak sah; jangan gunakan pembatalan untuk menghilangkan sengketa atau membalik keputusan resmi | Tidak menerapkan kandidat, tidak memulihkan nilai tidak sah, tidak otomatis menutup kasus/pembatasan V2 | Alasan dan kewenangan pembatalan | Catat pembatalan sebagai riwayat; tidak menghapus usulan, bukti/retensi atau audit |
| DALAM PEMERIKSAAN | DIBATALKAN | Pihak yang berhak membatalkan menurut prosedur/mandat sah, belum ditetapkan rinci | Rujukan pengajuan/versi dan alasan pembatalan; periksa dampak pada kasus/bukti | Hak/dasar tidak sah; jangan gunakan pembatalan untuk menghilangkan sengketa atau membalik keputusan resmi | Tidak menerapkan kandidat, tidak memulihkan nilai tidak sah, tidak otomatis menutup kasus/pembatasan V2 | Alasan dan kewenangan pembatalan | Catat pembatalan sebagai riwayat; tidak menghapus usulan, bukti/retensi atau audit |
| DALAM SENGKETA | DIBATALKAN | Pihak yang berhak membatalkan menurut prosedur/mandat sah, belum ditetapkan rinci | Rujukan pengajuan/versi dan alasan pembatalan; periksa dampak pada kasus/bukti | Hak/dasar tidak sah; jangan gunakan pembatalan untuk menghilangkan sengketa atau membalik keputusan resmi | Tidak menerapkan kandidat, tidak memulihkan nilai tidak sah, tidak otomatis menutup kasus/pembatasan V2 | Alasan dan kewenangan pembatalan | Catat pembatalan sebagai riwayat; tidak menghapus usulan, bukti/retensi atau audit |

DRAF koreksi tidak boleh menjadi jalur membuat registrasi induk di bawah A3. DISETUJUI menyatakan keputusan/versi/efektif tersimpan konsisten, bukan memajukan nilai yang berlaku mendatang. Penolakan/pembatalan tidak menghapus usulan/jejak, tidak menutup sengketa/pembatasan lain otomatis dan tidak membalik keputusan yang sudah sah. Koreksi atas keputusan lama memakai keputusan baru sesuai KB-08 dengan rujukan, bukan menulis ulang audit.

Periksa lagi versi dasar, katalog/versi, pemilik field/efektif dan mandat petugas saat keputusan. Dua usulan pada versi sama tidak boleh saling menimpa setelah salah satunya sah; usulan kedua diperiksa ulang, bukan otomatis dipilih yang terakhir atau diberi label K4.

KB-11 membatasi bukti/salinan/alasan sensitif dan memisahkan baca/unduh/ekspor/koreksi/sahkan. Perubahan kritis beserta versi/keputusan/metadata pembatasan relevan dan audit operasional KB-12 harus berhasil/batal bersama. Audit kritis gagal bukan berhasil; gangguan salinan pascacommit tetap retry/rekonsiliasi, bukan membatalkan bisnis sah diam-diam. Retensi/JRA/penahanan sah tetap tanpa angka tebakan.

30 RB/30 T DT-009 adalah persyaratan/rencana belum dijalankan. DT-006/008/011/012/019/033 tetap status sumber; standar bukti/risiko/retensi/petugas aktual belum final. Semua KB/DT-003/005/007, MVP dan G0–G7/hosting tetap. Tidak ada kode/tes aplikasi/migrasi/database/dokumen nyata/server atau operasi.

## Otorisasi C+D1+M1+E1 — DT-011

**6 November 2026 — MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA.** [Keputusan DT-011](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1) tidak mengganti D1/M1/E1. RBAC = hak berdasarkan peran, ABAC = pemeriksaan atribut/konteks, mandat aktif tetap wajib untuk tindakan yang memerlukannya.

Nilai identitas terautentikasi/status akun, peran, OPD asal/keterkaitan/penugasan, mandat, entitas/field/pemilik, scope wilayah/sektor/objek, tindakan, tujuan/dasar, sensitivitas, tanggal/masa, larangan tugas, konflik/pencabutan/pembatasan. Jika syarat wajib tidak diketahui/tidak sah, jangan otomatis mengizinkan. Pemeriksaan di server kelak berlaku pada semua jalur, termasuk pekerjaan tertunda dan saat hasil diberikan, bukan hanya tombol.

D1 memungkinkan hak dasar OPD setelah keterkaitan/katalog sah. Paket belum ditetapkan tidak dikarang, tetapi bukan menyatakan akun selamanya tanpa akses dasar. D1 bukan pengesahan, sensitif atau administrasi bisnis otomatis. M1 menggabungkan seluruh izin penugasan sah/aktif beserta batas asal, tanpa memilih satu penugasan eksklusif sepanjang sesi. Hak field pertama/wilayah pertama ditambah field kedua/wilayah kedua tidak melahirkan hak silang. Beberapa sumber dapat mendukung bagian berbeda dari permintaan yang memang masing-masing dicakup.

Larangan pembuat mengesahkan registrasi awal buatannya tetap walau dua peran. Pengesah awal bukan pengesah semua field; pemasok/admin/koordinator bukan superuser. OPD pemilik dan orang pengesah berbeda. H2 memengaruhi hak sesuai efektif/penugasan sah tanpa menghapus sejarah; K1–K4/otoritas K4 tetap DT-009; alasan status DT-007 tidak membuka bukti sensitif.

## Dampak E1 — DT-011

E1 dicatat apa adanya: **hak baca secara otomatis mencakup hak unduh dan ekspor**, pada objek/proyeksi yang dapat dibaca. Ini tidak berarti semua database atau nilai tersembunyi. **KONFLIK KEBIJAKAN TERBUKA** dengan RB-11.07/21/T11-14: tindakan terpisah dan ekspor massal perlu izin/persetujuan tersendiri. Bagian KB-11 di atas tetap sumber, bukan diam-diam menetapkan E2.

### Delapan konteks

| Konteks | Arti/cakupan E1 | Kontrol/benturan yang tetap | Status |
| --- | --- | --- | --- |
| Membaca satu record | E1 otomatis hanya objek/proyeksi yang boleh dibaca, bukan seluruh registri | RB-11.07 memisahkan tindakan baca/unduh/ekspor | TERBUKA/BLOKIR turunan terkait |
| Membaca field tersamar | Turunan tidak boleh memunculkan nilai tersembunyi | Penyamaran respons/file dan hak sensitif tetap, bukan cukup menyembunyikan UI | Prasyarat proyeksi; konflik E1 belum selesai |
| Membaca dokumen bukti | VIEW_RECORD bukan otomatis VIEW_EVIDENCE | Dokumen/pihak ketiga hanya jika hak bukti sah | TERBUKA/BLOKIR turunan bukti |
| Mengunduh bukti yang terlihat | E1 memilih unduh otomatis dari baca bukti | KB-11 memisahkan unduh; isi campuran/tautan diteruskan perlu kontrol | KONFLIK KEBIJAKAN TERBUKA |
| Mengekspor sejumlah record | Cakupan baca asal tetap, bukan hak massal bebas | Volume/tujuan/penerima/pengambilan berulang dan RB-11.21 belum diputus | TERBUKA/BLOKIR ekspor terkait |
| Mengekspor data sensitif | Hanya objek yang hak baca sensitifnya memang sah | Baca saja belum memenuhi izin tindakan/tujuan/penerima KB-11 | KONFLIK KEBIJAKAN TERBUKA |
| Mengekspor agregat | Baca internal bukan publikasi atau detail sumber | Risiko identifikasi ulang/publikasi/tujuan/penerima RB-11.22/T11-18 | KEBUTUHAN KEPUTUSAN LANJUTAN |
| Memberikan file ke penerima | Hak pembaca tidak otomatis hak penerima file/tautan | Periksa hak/tujuan/masa penerima saat pelepasan; file selesai bukan izin menyerahkan | TERBUKA/BLOKIR pelepasan terkait |

### Sepuluh dimensi dampak

| Dimensi | Arti E1 dan batas asal | Kebutuhan keputusan/kontrol | Audit konseptual | Status |
| --- | --- | --- | --- | --- |
| Cakupan baris | Objek baca membatasi E1; bukan seluruh database | Putuskan batas keluaran/volume massal sesuai KB-11 | Objek/scope/hasil permintaan | Prasyarat scope; E1 operasional tetap TERBUKA/BLOKIR |
| Cakupan field | Hanya field/proyeksi yang boleh dibaca, bukan nilai tersembunyi | Tentukan perlindungan proyeksi turunan tanpa menganggap konflik izin selesai | Kode field/proyeksi/versi izin, bukan nilai mentah | Prasyarat belum ditetapkan |
| Sensitivitas | D1 bukan NIK otomatis, baca sensitif tetap sensitif pada file | Hubungan E1 otomatis dan izin unduh/ekspor terpisah perlu keputusan | Kategori/hak/tujuan/hasil kontrol | KONFLIK KEBIJAKAN TERBUKA |
| Tujuan penggunaan | Tujuan baca tidak menetapkan semua tujuan ekspor | Apakah tujuan ekspor diperiksa terpisah dan dampaknya ke E1 perlu diputus | Tujuan dan sumber keputusan | KEBUTUHAN KEPUTUSAN LANJUTAN |
| Hak penerima | Hak pembaca tidak dapat dianggap dapat dipindahtangankan | Aturan penyerahan/penerima/tautan/dasar sah belum ada | Penerima sah/tujuan/waktu/hasil, sesuai minimisasi | Pelepasan terkait diblokir |
| Masa mandat | Hanya sumber sah/aktif ikut M1; RB-11.16 tetap | Periksa saat permintaan, proses dan pengambilan file | Versi/masa izin dan hasil pemeriksaan tiap tahap | Prasyarat wajib belum operasional |
| Pencabutan akses | Mandat dicabut tidak ikut hak efektif | Tahan hasil berdasarkan hak lama; jangan klaim file telanjur keluar dapat ditarik otomatis | Pencabutan/waktu/hasil blokir | Kontrol lama tetap, belum dibangun |
| Audit | E1 tidak membatalkan KB-12 atau audit akses KB-11 | Tetapkan event/otoritas/kontrol; audit wajib tak terpenuhi bukan berhasil | Permintaan/proses/unduh/ekspor/penyerahan/penolakan | Prasyarat, kemampuan belum dibuktikan |
| Pengungkapan agregat | Ekspor agregat bukan otomatis publikasi | Tinjauan identifikasi ulang/tujuan/penerima dan hubungan E1 belum diputus | Tinjauan/lingkup/versi/otoritas | KEBUTUHAN KEPUTUSAN LANJUTAN |
| Pengambilan massal | Pengulangan baca tidak jadi izin massal | RB-11.21 mensyaratkan hak/persetujuan tersendiri; jangan mengarang ambang | Metadata volume/scope/pola menurut aturan sah | KONFLIK KEBIJAKAN TERBUKA; tidak diaktifkan |

Pembatasan tambahan yang mengubah arti otomatis E1 adalah **KEBUTUHAN KEPUTUSAN LANJUTAN**, bukan kebijakan terpilih pengganti. Jangan menulis izin terpisah sudah disetujui sebagai solusi atau menghapus kontrol KB-11/12. **Unduh/ekspor terdampak tidak diimplementasikan sampai konflik diputus pemilik produk.** Batas scope baca yang sudah diperintahkan tetap dan tidak menyelesaikan pertentangan izin otomatis/terpisah itu sendiri.

Hak baca satu record tidak otomatis seluruh kumpulan bukti, hak pembaca bukan setiap penerima file/tautan. Penyamaran harus bertahan pada respons/turunan, bukan hanya layar. Baca agregat internal bukan publikasi; pengungkapan/tujuan/penerima perlu pemeriksaan sah. Tidak ada ambang massal, kuota, masa simpan atau katalog OPD yang ditetapkan dari dugaan.

Saat permintaan/proses/ambil file kelak, periksa hak/tujuan/masa/pencabutan terkini; hasil tidak diberikan dengan mandat lama yang habis/dicabut. Tidak mengklaim file yang telanjur diterima di luar kendali dapat ditarik otomatis. Penolakan tidak membocorkan isi/keberadaan sensitif.

Audit akses/ekspor/administrasi relevan wajib KB-11/12, tanpa NIK/kredensial/isi bukti mentah. Audit wajib tak terpenuhi tidak menghasilkan tindakan berhasil. Audit transaksi kritis atomik dan salinan audit terlindungi berbeda dari backup; gangguan salinan pascacommit tetap retry/rekonsiliasi KB-12, bukan pembatalan diam-diam transaksi sah.

[Katalog 19 tindakan/matriks peran](matriks-kewenangan-mvp-kb09.md#model-hak-cd1m1e1--dt-011) belum hak operasional disahkan. D1 belum paketnya, M1 perlu validasi penjagaan scope/tugas, E1 punya konflik nyata. [Konflik dan prasyarat G1](06-keputusan-bisnis.md#konflik-dan-prasyarat-dt-011-untuk-g1) tidak boleh dianggap selesai tanpa keputusan.

30 RB/30 T DT-011 lengkap pada register, seluruh T rencana belum dijalankan. OPD/mandat/petugas/hak sensitivitas/paket dasar/batas ekspor belum final. Semua KB/DT-003/005/007/009, MVP, gerbang dan hosting tetap; tidak ada akun, policy, kode, database, server, data pribadi nyata atau ekspor.

## Kontrol registrasi lokal G1-B2

[Kontrak 23](23-kontrak-registrasi-lokal-g1b2.md) dan [hasil 25](25-laporan-hasil-g1b2.md) melaksanakan subset pencatatan sintetis. Pemilik/mandat/OPD nyata tidak ditetapkan. Pemeriksaan field/cakupan/tujuan/masa/larangan tetap server-side. Penilaian klaim sintetis memerlukan mandat pada field klaim dari katalog server; bukan pengesahan nilai. NIB tetap opsional dan tidak menggantikan B1. Katalog pengajuan kosong/tidak sah tidak menghasilkan lulus.

Riwayat draf, penilaian dan transisi tidak ditimpa. Perubahan data serta riwayat/izin/audit/outbox atomik; penolakan otorisasi dicatat setelah rollback bisnis. Kandidat hanya nama dinormalisasi, tidak otomatis merge/menolak sebagai duplikat pasti; kandidat di luar hak baca disamarkan tanpa ID/jumlah. Tidak ada jalur C2 atau koreksi penuh K1–K4 dalam B2. Kewajiban pemisahan pembuat/pengesah awal, satu pemilik aktif dan konflik nilai oleh pemilik tetap berlaku saat tahap terkait mendapat izin.

## Pelaksanaan G1-B3.1 — autentikasi bukan kewenangan bisnis

Login mengikat akun aktif/sintetis ke sesi server; hak tetap diperiksa pada setiap field/objek/tujuan/cakupan/masa. D1 organisasi tidak memberi pengesahan/sensitif otomatis, M1 tidak menyilangkan atribut dan admin/gabungan peran tidak melewati larangan sahkan profil awal sendiri. Field ditolak tidak dikirim melalui HTML/JSON tersembunyi. Pengesahan, mutasi UI, E1 dan K1–K4 penuh tetap ditutup.

Audit autentikasi/penolakan/baca dan mutasi domain terkait diperkuat. SQL kritis, riwayat/audit/outbox tetap atomik, termasuk rehash dan audit login. Audit logout yang terganggu tidak menghidupkan kembali sesi; sesi dimusnahkan dengan respons gangguan. Ini batas keamanan sesi lokal, bukan pengabaian audit atau aturan rollback bisnis. Tidak mencatat kata sandi/token/handle atau isi dokumen. [Rancangan salinan independen](28-rancangan-salinan-audit-independen.md) tidak menetapkan teknologi/pengelola/JRA/retensi dan belum dijalankan.

## Penerapan antarmuka lokal G1-B3.2

Pencatat sintetis dapat membuat/revisi/mengajukan; pemeriksa sintetis dapat mulai memeriksa, mengembalikan dan menilai metadata klaim dalam mandat masing-masing. Peran ini fixture uji, bukan penetapan OPD/petugas/SOP resmi. Pembuat tidak mendapat pengesahan C2 dari peran gabungan. Browser tidak menentukan organisasi, mandat, tujuan, waktu atau status resmi.

Draf tanpa A3 tidak disimpan parsial. Tanpa bukti versi berjalan/katalog sah, pengajuan tertahan. Kandidat nama bukan putusan duplikasi; cakupan baca yang kurang tidak dibocorkan atau dianggap lengkap. Setiap mutasi kritis memakai versi/idempotensi/audit/outbox; audit wajib gagal menahan hasil/rollback. Salinan independen tetap hanya [rancangan 28](28-rancangan-salinan-audit-independen.md). Konflik E1/KB-11 tetap terbuka dan ekspor diblokir.

## Penerapan C2 lokal G1-B3.3

Mandat terbaru membuka C2 paket minimum sintetis saja. Pengesah harus berbeda dari pembuat registrasi/Unit; gabungan peran/admin tidak mengatasi larangan ini. APPROVE_INITIAL, baca, sensitivitas, bukti, scope/tujuan/masa diperiksa di server, dan mandat pengesah diperiksa ulang setelah evaluasi. Satu pengesah bermandat cukup; tiga akun demo hanya pemisahan simulasi.

APPROVED hanya ketika katalog minimum sah dan paket READY. REJECTED/RETURNED mencatat alasan/versi tanpa menghilangkan riwayat; pengembalian memungkinkan perbaikan B2, keputusan final tidak dibuka kembali oleh tahap ini. C2 bukan pengesahan semua field atau sektor. Katalog kosong menghasilkan UNKNOWN, NIB tetap opsional. [Matriks 37](37-matriks-kewenangan-c2-g1b33.md) memisahkan hak C2 dari hak field. OPD/mandat/SOP nyata, audit eksternal dan konflik E1 tetap terbuka.
