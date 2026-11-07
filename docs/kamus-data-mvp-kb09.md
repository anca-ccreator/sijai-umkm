# Kamus data konseptual MVP — KB-09–KB-18

**Catatan implementasi lokal G1-B3.3 — 7 November 2026:** kamus konseptual/rincian OPD di bawah tetap sumber rancangan, bukan penetapan resmi. C2 sintetis kini memakai katalog minimum terpisah dan keputusan berjejak sesuai [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md). Identitas katalog/versi/efektif, revisi dan versi registrasi diperiksa/hasil, hasil/alasan, aktor/waktu serta rujukan penilaian klaim/dokumen disimpan tanpa isi dokumen. C2 tidak mengesahkan field/sektor, NIB opsional. Pernyataan belum ada database pada snapshot konseptual lama adalah riwayat; tiga tabel tambahan C2 lokal dijelaskan dokumen 36. Katalog nyata/enum/SOP/OPD dan konflik E1 belum final.

Tanggal: **5 November 2026**. KB-09 **Model B — Registri Induk UMKM + Satu Sektor Percontohan** dan sektor **INDUSTRI PENGOLAHAN PANGAN** disepakati pada tingkat ruang lingkup MVP. Dokumen ini menetapkan rancangan field yang diminta pengguna; nama tabel, tipe teknis rinci, referensi pilihan, SOP dan standar bukti belum merupakan skema atau kebijakan final. Tidak ada database yang dibuat.

Tambahan KB-10: **Model B disepakati — rincian kewenangan kelembagaan masih terbuka**. Bagian ekonomi/klasifikasi dan KBLI di akhir dokumen menambah rancangan konseptual pada berkas yang sama. Seluruh field sektor KB-09 dipertahankan; penilaian skala, KBLI dan status keputusan dibedakan. Rujukan hukum, ambang dan T10 ada pada [dokumen keputusan](06-keputusan-bisnis.md).

KB-11 **Model B perlindungan data bertingkat disepakati pada tingkat dokumentasi**. Tambahan pada berkas yang sama memuat delapan atribut metadata dan tujuh fungsi konseptual. Pemetaan kelas/akses field final, dasar layanan, JRA, peran hukum dan SOP masih terbuka. Field/kewajiban sektoral KB-09 serta kelompok KB-10 dipertahankan.

KB-12 **Model B audit operasional dengan salinan berkontrol terpisah disepakati pada tingkat model/prinsip arsitektur**. Tambahan di akhir memperluas audit yang sudah ada, bukan skema database baru. Teknologi/lokasi/jadwal/pengelola dan rincian belum final; rincian KB-17 dan angka dan bukti kapasitas KB-18 belum final.

KB-13 Model C rekonsiliasi otomatis disepakati dengan prasyarat kumulatif, tanpa mengunci algoritme/ambang atau mengaktifkan produksi. Sebelas fungsi/katalog di akhir memakai rancangan lama jika sesuai; bukan migrasi atau tabel baru.

KB-15 Model B impor bertahap terverifikasi disepakati sebagai dokumentasi. Tambahan di akhir memuat sumber/staging/pemetaan/rencana/keputusan/pembalikan pada struktur setara; tidak ada dataset nyata, tabel atau format impor final dibuat. Impor manual tetap rancangan bersyarat, integrasi langsung bukan implementasi MVP.

KB-16 **Model B — Registri Program dan Riwayat Layanan Pembinaan UMKM disepakati sebagai dokumentasi fase lanjutan setelah MVP KB-09**, 5 November 2026. Registri/pangan tetap MVP pertama; program belum boleh dibangun. KB-01–KB-15 dipertahankan; rincian KB-17 dan KB-18, rincian organisasi/SOP dan izin masih terbuka. Hosting KB-14 tetap BELUM DAPAT DINILAI.

KB-17 **Model B — Operasional Terkelola Berbasis Risiko disepakati sebagai kebijakan dan spesifikasi dokumentasi**, 5 November 2026. Frekuensi/retensi backup, angka RPO/RTO, lokasi/teknologi/kunci, SLA dan pengelola belum final; tidak ada izin operasi server. KB-01–KB-16 dipertahankan, angka dan bukti kapasitas KB-18 belum final dan hosting KB-14 BELUM DAPAT DINILAI.

KB-18 **Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal disepakati sebagai dokumentasi**, 5 November 2026. Arsitektur mencakup Kabupaten Sinjai dengan satu SSOT; MVP KB-09 tetap registri/pangan. Infrastruktur awal mengikuti kebutuhan terverifikasi, angka contoh hanya asumsi/proyeksi. Hosting dan kapasitas final **BELUM DAPAT DINILAI**; rincian/izin belum final.

## Cara membaca kamus bersama baseline konsolidasi

[Baseline induk](10-baseline-konsolidasi-kb01-kb18.md) menjadi pintu masuk istilah/status/lingkup dan DT, tanpa mengubah field W/K/O/B atau aturan sumber. PIHAK/ORANG/BADAN/UNIT/kegiatan/lokasi/akun, rujukan NIB bersubjek dan cakupan legal penilaian tetap berbeda; istilah fungsi serupa memakai struktur setara, bukan master/tabel baru.

Status registrasi/profil induk, field/record resmi dan profil sektoral/pengukuran **bukan satu status tunggal**; agregasi adalah ringkasan per objek/lingkup/tahap. DT-007 Model C telah DISEPAKATI pada tingkat model. Verifikator awal berbeda dari pembuat, bukan pengesah semua field. DT-003 B A3+B1+C2 kini dipilih; rincian katalog/enum/transisi/bukti DT-003/009/033 dan pemilik/mandat DT-005 tetap belum final. Draf sektor tidak naik dari induk dan pengesahan sebagian bukan seluruh profil.

Metadata kapasitas FAKTUAL/ASUMSI/PROYEKSI/HASIL PENGUJIAN/BELUM DIKETAHUI berbeda dari status verifikasi bisnis dan status model keputusan. Kategori W sektor tidak mewajibkan semua field saat pendataan awal. Mesin skala KB-10/impor manual mengikuti rincian aktivasi DT-031/032, bukan paket fitur wajib dari nama berkas ini.

## Cara membaca kewajiban field

| Kode | Arti pada rancangan MVP |
| --- | --- |
| W — Wajib | Diperlukan agar record terkait lengkap untuk diajukan/disahkan. ID dan hubungan dasar yang diisi sistem tetap harus sah sejak record dibuat. Draf dapat belum lengkap untuk tahap pengajuan/sektoral, tetapi draf registrasi baru wajib minimum A3 DT-003 sebelum disimpan; draf tidak dihitung terverifikasi |
| K — Kondisional | Wajib ketika kondisi pada baris terpenuhi; kondisi dan kebutuhan bukti operasional harus dirinci sebelum implementasi |
| O — Opsional | Boleh tidak tersedia. Jika suatu record opsional dibuat, identitas dan referensinya tetap wajib sah; jangan membuat baris kosong |
| B — Berkala | Disimpan per catatan pengukuran/periode. Setiap catatan yang dibuat wajib mempunyai seluruh unsur produksi yang disyaratkan; B bukan izin menyimpan pengukuran tanpa nilai/satuan/periode |

W pada profil sektoral tidak membuat seluruh field sektor wajib saat registrasi induk pertama. KB-03 tetap mengizinkan pendataan awal tanpa NIB, dan pelengkapan sektoral dilakukan bertahap. Draf sektoral tidak menjadi profil terverifikasi hanya karena registri induknya sudah disahkan.

Kolom fungsi memakai **calon pengampu yang diusulkan**, bukan nama OPD resmi: **U = pengampu UMKM**, **I = pengampu perindustrian**, **P = pengampu perizinan**. Setiap kode field bisnis akhirnya memerlukan satu OPD penanggung jawab aktif yang ditetapkan secara sah. Rincian ada pada [matriks kewenangan](matriks-kewenangan-mvp-kb09.md).

## Profil Umum minimum dan registri induk

Nama teknis berikut adalah istilah konseptual untuk menjelaskan objek. Identitas orang/badan usaha tidak disalin ulang sebagai atribut unit. Semua identitas internal terpisah dari NIK/NIB; satu ID pihak dapat dipakai pada beberapa hubungan usaha.

| Objek | Field/relasi minimum | Kewajiban dan ketentuan | Calon fungsi |
| --- | --- | --- | --- |
| PIHAK | `pihak_id`, `jenis_pihak` | W; ID sistem, jenis mengarahkan ke ORANG atau BADAN_USAHA | U |
| ORANG | `pihak_id`, `nama_orang` | W ketika jenis pihak ORANG; satu rincian untuk pihak tersebut | U |
| ORANG | Identitas resmi terlindungi, kontak | K jika diperlukan untuk proses terkait dan ada dasar akses; tidak menetapkan NIK/kontak wajib untuk seluruh pendataan awal | U |
| BADAN_USAHA | `pihak_id`, `nama_badan_usaha`, `bentuk_badan_usaha` | K ketika jenis pihak BADAN_USAHA; badan usaha terpisah dari pengurus/orang | U |
| UNIT_USAHA | `unit_usaha_id`, `nama_usaha`, `status_operasional` | W; ID internal stabil, unit mengikuti kesatuan operasional KB-01 | U |
| UNIT_USAHA | Tahun mulai, uraian usaha | O; ketelitian tanggal/tahun dan referensi status belum final | U |
| HUBUNGAN_PIHAK_USAHA | `hubungan_id`, `pihak_id`, `unit_usaha_id`, `peran`, tanggal mulai berlaku | W; relasi banyak-ke-banyak. Daftar peran dan pembuktian masa berlaku perlu dirinci | U |
| HUBUNGAN_PIHAK_USAHA | Tanggal akhir, referensi bukti, status verifikasi hubungan | K sesuai akhir hubungan/proses pengesahan; riwayat pemilik tidak dihapus | U |
| LOKASI_USAHA/cabang | `lokasi_id`, `unit_usaha_id`, jenis lokasi, alamat atau area operasi | W untuk lokasi yang dicatat; lokasi/cabang merujuk unit induk. Pemilik sama dan keterkaitan cabang sesuai KB-01 tidak membuat unit baru otomatis | U |
| LOKASI_USAHA/cabang | Kode wilayah, koordinat, referensi keterkaitan cabang | K sesuai jenis lokasi dan kebutuhan verifikasi; koordinat O jika belum diperlukan. Wilayah pilot dan bukti keterkaitan belum ditetapkan | U |
| KEGIATAN_USAHA | `kegiatan_id`, `unit_usaha_id`, jenis/uraian kegiatan | W; satu unit dapat mempunyai beberapa kegiatan | U |
| KEGIATAN_USAHA | Kode KBLI dan versi, peran utama/tambahan, sumber dan periode berlaku | K sesuai pencatatan kegiatan; KB-10 memakai katalog KBLI 2025 dan mempertahankan 2020 historis. Pemilihan kode/peran dan pemeriksaannya berwenang; konversi ambigu tidak otomatis | U sebagai usulan untuk kegiatan umum; mandat resmi belum ditetapkan, tanpa pemilik aktif ganda |
| PENCATATAN_NIB | `status_nib` | W untuk menyatakan keadaan pencatatan; dapat menyatakan belum diketahui/belum tersedia menurut referensi status yang akan disahkan. NIB bukan syarat registrasi awal | P |
| PENCATATAN_NIB | `nomor_nib`, subjek rujukan, sumber/tanggal pemeriksaan, `status_verifikasi_nib` | K ketika nomor atau hasil pemeriksaan dicatat; sumber penerbit tetap berwenang. Nomor bukan ID internal dan tidak otomatis unik per cabang | P |
| Status profil induk | Status draf/pengajuan/pengesahan dan referensi keputusan | W untuk proses; enum/transisi rinci belum final. Pengesah awal berbeda dari pembuat | U; mandat verifikator induk belum resmi |
| Provenans dan audit | Sumber data umum, petugas pencatat, waktu, versi, keputusan/riwayat | W sesuai objek; metadata teknis dicatat sistem berdasarkan tindakan sah | Fungsi pemilik field objek terkait |

Usulan pemetaan kegiatan umum ke U tidak memberikan pengampu UMKM hak atas field industri. Field `jenis_pengolahan` milik profil sektoral berbeda dari KBLI maupun skala UMKM. KB-10 menambah acuan katalog/versi dan proses usulan skala yang disahkan petugas; SOP, cakupan hukum serta penugasan resmi tetap terbuka. Modal/penjualan dan klasifikasi tidak dijadikan syarat baru seluruh registrasi awal KB-03.

## Struktur data sektoral yang diusulkan

1. **PROFIL_INDUSTRI** adalah rincian Industri Pengolahan Pangan dari profil sektoral pada unit yang sudah ada. Rujukan ke profil sektoral menjaga identitas unit yang sama; status profil sektoral dibaca dari satu tempat.
2. **PROFIL_INDUSTRI_KEGIATAN** mengaitkan profil dengan satu atau beberapa KEGIATAN_USAHA yang relevan. `kegiatan_id` wajib pada setiap hubungan, dan minimal satu kegiatan diperlukan saat profil sektoral dinyatakan lengkap. Semua kegiatan terkait harus milik unit yang sama.
3. **PRODUK** menyimpan satu record per produk dengan ID sendiri, terhubung ke profil industri. Tiga produk atau merek berbeda tidak membuat unit usaha baru. Aturan pencocokan produk sama lintas kegiatan belum final; nama/merek tidak menjadi kunci identitas usaha.
4. **BAHAN_BAKU_PRODUK** menyimpan satu bahan per record terkait produk. Satu produk dapat mempunyai beberapa record bahan, tanpa daftar dipisahkan koma dalam satu isian.
5. **PERALATAN_PROFIL** menyimpan satu peralatan/jenis peralatan utama per record profil; bukan satu kolom daftar mesin.
6. **PENGUKURAN_PRODUKSI** menyimpan satu jenis pengukuran, satu produk, nilai numerik, satuan, periode, sumber, tanggal pengukuran dan status verifikasi per record. Kapasitas dan realisasi adalah jenis pengukuran berbeda.
7. **KENDALA_PROFIL** dan **KEBUTUHAN_PROFIL** menyimpan satu kode/keterangan per record bila ada beberapa kendala/kebutuhan. Kebutuhan pengembangan adalah informasi pendataan, bukan persetujuan bantuan atau transaksi program.

Ini pola relasi yang diusulkan, bukan tabel yang dibuat. Pola pengait kegiatan mempertahankan usulan satu profil sektoral per unit/sektor dari rancangan sebelumnya, tanpa menganggap satu kegiatan atau satu produk sebagai unit baru. Nama tabel, pilihan ID, indeks dan kardinalitas teknis final masih perlu ditinjau sebelum implementasi.

## Field Profil Industri Pengolahan Pangan

Kode field bisnis harus menyertakan objeknya; `PROFIL_INDUSTRI.sumber_data` berbeda dari `PENGUKURAN_PRODUKSI.sumber_data` atau `PENCATATAN_NIB.sumber_data`. Satu label pada layar bukan alasan memberi beberapa OPD hak menulis kode field yang sama.

| Field yang diminta | Lokasi konseptual dan tipe | Kelas | Aturan minimum | Calon fungsi |
| --- | --- | --- | --- | --- |
| `profil_industri_id` | PROFIL_INDUSTRI; ID internal | W | Diisi sistem; merujuk profil sektoral unit/sektor yang sama, bukan identitas usaha baru | I; pengisian otomatis |
| `kegiatan_id` | PROFIL_INDUSTRI_KEGIATAN; referensi | W | Satu per hubungan; minimal satu kegiatan relevan saat profil lengkap; unitnya harus sama dengan unit profil | I untuk hubungan sektoral; master kegiatan mengikuti pemiliknya |
| `jenis_pengolahan` | PROFIL_INDUSTRI; kode referensi | W | Pilih satu nilai sah pada record; daftar referensi belum final, bukan penetapan KBLI resmi | I |
| `status_profil_sektoral` | PROFIL_SEKTORAL; status proses | W | Satu sumber status; draf tidak dihitung terverifikasi; perubahan melalui aksi berwenang dan audit | I |
| `produk_id` | PRODUK; ID internal | W per produk | Diisi sistem; tiap produk terkait profil yang sah. Minimal satu produk untuk profil sektoral lengkap | I; pengisian otomatis |
| `nama_produk` | PRODUK; teks tunggal | W per produk | Nama produk, terpisah dari nama unit usaha | I |
| `kategori_produk` | PRODUK; kode referensi | W per produk | Kategori pangan; daftar kategori perlu disepakati, bukan kategori skala UMKM KB-10 | I |
| `merek_produk` | PRODUK; teks tunggal | O | Boleh berbeda antarproduk; tidak membuat atau mengganti identitas usaha | I |
| `satuan_produk` | PRODUK; referensi satuan | W per produk | Satuan acuan produk; tidak memaksa semua pengukuran memakai satuan itu dan bukan aturan konversi otomatis | I |
| `bahan_baku_utama` | BAHAN_BAKU_PRODUK; referensi/nama satu bahan | K | Wajib ketika penggunaan bahan baku dinyatakan untuk pencatatan terkait; satu bahan per record, dapat banyak per produk. Persyaratan bukti rinci belum final | I |
| `sumber_bahan_baku` | BAHAN_BAKU_PRODUK; kode/keterangan tunggal | O | Mengikuti bahan yang tepat; referensi wilayah/asal belum final | I |
| `jenis_peralatan` | PERALATAN_PROFIL; kode/keterangan tunggal | O | Banyak peralatan memakai banyak record; bila record dibuat jenisnya harus terisi | I |
| `tingkat_teknologi` | PERALATAN_PROFIL; kode referensi | O | Mengikuti record peralatan; kandidat manual/semiotomatis/otomatis belum menjadi daftar resmi | I |
| `kapasitas_produksi` | PENGUKURAN_PRODUKSI; nilai desimal untuk jenis kapasitas | B | Satu catatan kapasitas per produk dan periode/cakupan pengukuran; bukan kolom master yang terus ditimpa | I |
| `realisasi_produksi` | PENGUKURAN_PRODUKSI; nilai desimal untuk jenis realisasi | B | Satu catatan realisasi per produk dan periode/cakupan pengukuran; terpisah dari kapasitas | I |
| `kendala_produksi` | KENDALA_PROFIL; kode/keterangan tunggal | O | Banyak kendala memakai banyak record, terkait profil yang benar | I |
| `kebutuhan_pengembangan` | KEBUTUHAN_PROFIL; kode/keterangan tunggal | O | Banyak kebutuhan memakai banyak record; tidak menciptakan transaksi program | I |
| `sumber_data` | PROFIL_INDUSTRI dan setiap PENGUKURAN_PRODUKSI; referensi/keterangan sumber | W; juga wajib dalam B | Sumber profil dan sumber tiap pengukuran dicatat pada objeknya sendiri; tidak cukup menebak dari nama petugas | I |
| `tanggal_pengukuran` | PENGUKURAN_PRODUKSI; tanggal observasi | B | Wajib pada setiap catatan produksi; berbeda dari waktu input dan periode produksi | I |
| `status_verifikasi` | Objek sektoral yang diverifikasi, khususnya PENGUKURAN_PRODUKSI; status | W; juga wajib dalam B | Dicatat per record; status profil tidak otomatis mengesahkan seluruh pengukuran dan sebaliknya | I |

Untuk produk/bahan/peralatan, kata “banyak” berarti banyak record terkait, bukan nilai daftar dalam satu kolom. Rancangan form dapat menyajikannya sebagai baris yang mudah ditambah petugas.

## Unsur wajib setiap pengukuran produksi

Semua baris berikut wajib **ketika sebuah pengukuran dicatat**, baik kapasitas maupun realisasi. Penetapan bahwa setiap usaha harus melapor tiap bulan, tenggat pengiriman dan bukti minimal belum disepakati.

| Unsur | Rancangan field | Ketentuan |
| --- | --- | --- |
| Identitas pengukuran | `pengukuran_id` | ID internal sistem, bukan ID unit atau produk baru |
| Produk | `produk_id` | Mengacu produk pada profil/unit yang benar |
| Jenis pengukuran | `jenis_pengukuran` | Membedakan kapasitas dan realisasi; keduanya tidak dicampur sebagai satu angka |
| Nilai numerik | `nilai_produksi` | Angka desimal terstruktur; mewakili `kapasitas_produksi` atau `realisasi_produksi` menurut jenis. Data belum diketahui tidak dipalsukan menjadi nol |
| Satuan | `satuan_pengukuran` | Satuan aktual setiap pengukuran; referensi satuan tersendiri dari angka |
| Periode | `periode_mulai`, `periode_akhir` atau representasi periode setara | Periode eksplisit dan valid; tanggal observasi saja tidak cukup. Bentuk teknis disepakati saat desain rinci |
| Sumber | `sumber_data` | Sumber catatan ini, bukan hanya sumber profil induk |
| Tanggal observasi | `tanggal_pengukuran` | Tanggal data diukur/diamati; waktu input dicatat terpisah oleh sistem |
| Verifikasi | `status_verifikasi` | Status pengukuran ini; keputusan pengesahan harus dapat ditelusuri |
| Riwayat dan koreksi | Versi, petugas/waktu, referensi keputusan/versi yang dikoreksi | Perubahan resmi dan audit tersimpan konsisten; koreksi tidak menghapus nilai/keputusan lama |

Januari dan Februari pada skenario T09 adalah contoh dua periode berbeda. Bulan kalender merupakan usulan pengaturan uji dari rumusan awal, **bukan keputusan bahwa seluruh pengukuran wajib bulanan**. Frekuensi, satuan, cakupan lokasi/kegiatan, agregasi dan penanganan periode tumpang tindih perlu dirinci sebelum implementasi.

## Satuan, versi dan laporan dasar

- Satuan berbeda, termasuk kg dan kemasan, tidak boleh dijumlah otomatis tanpa konversi baku yang sah. `satuan_produk` bukan faktor konversi. Tanpa aturan, tampilkan kelompok satuan terpisah; jangan menebak berat satu kemasan.
- Jika konversi diperlukan, aturan, cakupan produk, faktor dan masa berlakunya harus disepakati serta dapat ditelusuri sebelum digunakan. Kamus ini tidak menetapkan faktor konversi apa pun.
- Rekap harus membedakan jenis pengukuran, produk, periode, cakupan dan status verifikasi agar tidak mencampur kapasitas dengan realisasi atau menghitung versi koreksi lama dan baru sekaligus. Rincian agregasi selain larangan satuan campuran masih rancangan yang harus disahkan.
- Profil sektoral draf tidak masuk jumlah profil terverifikasi. Laporan tetap dapat memperlihatkan draf sebagai kelompok terpisah kepada pengguna yang berhak.
- Satu unit dengan tiga produk dihitung satu unit dan tiga produk. Lokasi/cabang yang memenuhi KB-01 tetap bagian unit induk. Identitas orang/pemilik, kegiatan dan produk tidak dipakai sebagai pengali jumlah usaha.
- Laporan dasar MVP mencakup jumlah pihak/unit/lokasi/kegiatan, status NIB/verifikasi, profil industri dan produk; ringkasan produksi dipisah per satuan/periode/status. Tambahan KB-10 memisahkan usulan skala dan hasil disahkan per tujuan/dasar/periode/cakupan; hasil belum disahkan tidak dihitung terverifikasi.

## Yang tetap belum final

Nama OPD resmi dan pengampu setiap kode field, identitas petugas, wilayah pilot, SOP/standar bukti, referensi sektor/satuan yang belum disepakati, rincian periode dan konversi, rincian perlindungan/retensi menurut KB-11/KB-12, rincian KB-17 dan KB-18, versi PHP/MySQL hosting PDN dan izin implementasi tetap terbuka. Model KB-10, rujukan aturan dan KBLI sudah dipilih; cakupan hukum multiunit, pemeriksaan ekonomi dan standar tahun buku nonkalender belum final. Kewenangan tetap dikonfigurasi menurut penetapan sah.

## Tambahan KB-10 — pengukuran ekonomi dan klasifikasi

Nama entitas berikut adalah objek/record konseptual yang dapat memakai rancangan referensi, riwayat dan audit yang sudah ada. Tidak ada perintah membuat tabel atau menggandakan KEGIATAN_USAHA/katalog referensi yang fungsinya sama. Nama berkas tetap dipertahankan agar tautan KB-09 tidak terputus.

### Pengukuran ekonomi

Pengukuran ekonomi memakai mata uang dan berbeda dari PENGUKURAN_PRODUKSI yang memakai satuan fisik. Angka produksi atau harga produk tidak otomatis menjadi penjualan tahunan. W berlaku pada record yang hendak dipakai menilai; record yang belum lengkap dapat tetap draf dan tidak menjadi dasar klasifikasi disahkan.

| Field | Objek/tipe konseptual | Kewajiban dan makna |
| --- | --- | --- |
| `pengukuran_ekonomi_id` | PENGUKURAN_EKONOMI; ID sistem | W; identitas/versi input yang dirujuk hasil |
| `unit_usaha_id` | Referensi master unit | W; jangkar operasional, bukan keputusan bahwa cakupan hukum selalu satu unit |
| `jenis_indikator` | Referensi indikator | W; modal usaha yang sudah mengecualikan tanah/bangunan tempat usaha atau hasil penjualan tahunan, tidak saling dipertukarkan |
| `nilai` | Desimal moneter | W untuk perhitungan layak; kosong tetap kosong, bukan nol. Validasi angka/rentang mengikuti arti indikator; input tidak layak ditahan, tidak diloloskan ke batas Mikro |
| `mata_uang` | Kode mata uang | W; ambang rujukan memakai IDR. Mata uang berbeda memerlukan aturan konversi yang belum ditetapkan, tanpa kurs tebakan |
| `periode_mulai` | Tanggal awal/acuan | W; penjualan memakai awal periode; modal memakai posisi pada tanggal acuan yang dinyatakan |
| `periode_selesai` | Tanggal akhir/acuan | W; akhir periode penjualan atau sama dengan tanggal posisi modal untuk representasi periode titik |
| `cakupan_penilaian` | Rujukan cakupan terstruktur | W; subjek/pihak terkait, unit/cabang yang tercakup dan dasar pemilihan harus dapat ditelusuri. Tidak cukup teks “milik orang yang sama” untuk agregasi legal |
| `sumber_data` | Referensi sumber/bukti terlindungi | W untuk penilaian; sumber angka dan cakupannya, bukan hanya nama petugas input |
| `status_verifikasi` | Status input ekonomi | W; terpisah dari status keputusan klasifikasi. Input tercatat belum otomatis layak untuk pengesahan |
| Konfirmasi pengecualian tanah/bangunan | Metadata indikator modal | K untuk modal; jika belum diketahui/terpenuhi, tahan penilaian untuk koreksi. Tidak mengurangi angka dengan perkiraan tanpa bukti |
| Kelengkapan periode dan jenis tahun buku | Metadata penjualan | K untuk penjualan; membedakan penuh/parsial dan acuan tahun. Standar nonkalender belum final; tiga bulan tidak otomatis dikali empat |
| Versi input, pencatat, waktu dan bukti | Metadata/riwayat yang sudah dirancang | W sesuai tindakan; sumber konsolidasi tidak disalin sebagai nilai tiap cabang lalu dijumlah lagi |

`cakupan_penilaian` dapat merujuk record cakupan dan daftar referensi pihak/unit yang sudah ada. Rincian penyimpanan adalah usulan; cara menentukan cakupan menurut hukum belum ditetapkan. Tidak otomatis menjumlah semua unit satu pemilik dan tidak pula menyatakan setiap unit harus dinilai sendiri secara legal.

### Aturan klasifikasi berversi

Ambang lengkap dan sumber resmi hanya dipelihara pada bagian KB-10 dalam [dokumen keputusan](06-keputusan-bisnis.md). Aturan terstruktur memuat rentang per kategori; bukan tiga nilai bebas yang ditulis ulang di setiap unit. Model berikut tidak menetapkan siapa yang berwenang mengadopsi perubahan aturan.

| Field | Objek/tipe konseptual | Kewajiban dan makna |
| --- | --- | --- |
| `aturan_id` | ATURAN_KLASIFIKASI; ID sistem | W; mengacu versi aturan yang digunakan hasil |
| `dasar_hukum` | Referensi dokumen/pasal resmi | W; PP 7/2021 Pasal 35 untuk profil ambang dasar; indikator tambahan memerlukan dasar sah sesuai Pasal 36 |
| `versi_aturan` | Teks identitas versi/revisi | W; nomor/tahun peraturan dan versi adopsi internal yang dapat ditelusuri, tidak ditimpa ketika berubah |
| `tujuan_klasifikasi` | Referensi tujuan | W; memisahkan konteks pendirian/pendaftaran dari kemudahan/pelindungan/pemberdayaan atau tujuan lain yang memiliki dasar sah |
| `jenis_indikator` | Referensi indikator | W; menentukan apakah rentang ini untuk modal atau penjualan |
| `batas_bawah` | Desimal pada detail rentang kategori | K sesuai rentang; tidak mengarang batas bawah nominal Mikro yang tidak disebut. Penolakan input tidak layak diperiksa sebelum pemakaian ambang |
| `batas_atas` | Desimal pada detail rentang kategori | W untuk kategori ambang Mikro/Kecil/Menengah yang dirujuk; nilai lebih besar dari batas tertinggi menghasilkan label di luar batas pada indikator itu |
| `tanggal_mulai_berlaku` | Tanggal sumber aturan | W; PP rujukan berlaku 2 Februari 2021 menurut metadata resmi; tanggal acuan pemakaian aturan pada penilaian harus dicatat |
| `tanggal_akhir_berlaku` | Tanggal akhir bila ada | K; boleh belum terisi jika tidak ada akhir yang sah. Tidak menebak masa berakhir |
| Kategori rentang dan inklusivitas batas | Detail ATURAN_RENTANG terkait satu aturan/versi | W untuk penerapan ambang; Kecil/Menengah mempunyai batas bawah eksklusif dan batas atas inklusif sesuai tabel. Inklusivitas tidak disimpulkan dari pembulatan |
| Mata uang aturan dan sumber adopsi | Metadata aturan | W untuk aturan moneter; IDR untuk profil rujukan. Pengadopsi/pemeriksa dan dasar perubahan harus diaudit, bukan hak otomatis admin teknis |

Tanggal berlaku hukum berbeda dari tanggal input/adopsi konfigurasi dan tanggal penilaian. Jika periode melintasi perubahan aturan, pemilihan aturan perlu ketentuan yang belum final; jangan diam-diam memakai aturan terbaru untuk seluruh sejarah. Hasil lama tetap mengikat versi yang benar-benar dipakai.

### Hasil klasifikasi dan keputusan

Kategori skala: **Mikro, Kecil, Menengah, Di Luar Batas UMKM, Belum Dapat Diklasifikasikan**. Status keputusan: **usulan, menunggu verifikasi, disahkan, ditolak, perlu koreksi**. Keduanya disimpan terpisah dari kode KBLI dan status legalitas.

| Field | Objek/tipe konseptual | Kewajiban dan makna |
| --- | --- | --- |
| `hasil_klasifikasi_id` | HASIL_KLASIFIKASI; ID sistem | W; record penilaian/versi, bukan kategori permanen pada unit |
| `unit_usaha_id` | Referensi unit jangkar | W; terhubung cakupan/input yang benar dan tidak mengganti identitas pihak/badan |
| `periode_penilaian` | Periode/tanggal posisi yang dinilai | W; terkait periode input dan tujuan, bukan hanya cap waktu perhitungan |
| `dasar_klasifikasi` | Referensi indikator, tujuan, cakupan dan aturan | W; dapat dirinci melalui relasi ke input/aturan yang ada. Hasil modal dan penjualan tetap dua penilaian terpisah |
| `kategori_usulan` | Kategori hasil hitung | W pada keluaran; belum lengkap memakai Belum Dapat Diklasifikasikan, bukan Mikro karena nilai kosong |
| `kategori_disahkan` | Kategori keputusan berwenang | K hanya bila disahkan setelah prasyarat terpenuhi; tetap kosong ketika baru usulan/menunggu/perlu koreksi. Tidak menyalin usulan otomatis |
| `status_keputusan` | Status proses klasifikasi | W; membedakan usulan dari hasil sah dan menahan hasil yang belum memenuhi prasyarat |
| `pengesah` | Referensi pengguna/penugasan aktif | K saat pengesahan; satu petugas OPD berwenang, bukan mesin atau pemilik usaha |
| `waktu_pengesahan` | Waktu kejadian | K saat pengesahan sah; terpisah dari waktu hitung/input |
| `alasan` | Dasar keputusan/koreksi | W pada keputusan penolakan/perlu koreksi/pengesahan yang memerlukan dasar pemeriksaan; tidak menggantikan bukti sumber |
| Rujukan input/versi, aturan/versi, waktu hitung, tanggal acuan, keputusan terdahulu | Relasi/metadata riwayat | W untuk keterlacakan hasil; koreksi dan aturan baru tidak menimpa penilaian lama |

Untuk keluaran **Belum Dapat Diklasifikasikan** karena input belum tersedia, catat prasyarat yang hilang dan rujukan yang memang ada; jangan membuat input fiktif atau nol agar memenuhi relasi. Ikatan input/aturan lengkap wajib sebelum hasil berbasis angka dapat disahkan.

Fungsi usulan pemilik data penilaian adalah pengampu/pengelola klasifikasi UMKM sesuai mandat yang **belum ditetapkan**; sistem menghitung dari input/aturan yang sah tanpa menjadi OPD pengesah. Hak pemilik input ekonomi, katalog/aturan dan hasil dapat berbeda menurut penetapan, tetapi satu kode field tetap satu OPD pemilik aktif.

Laporan memisahkan kategori usulan dan kategori disahkan per indikator/tujuan/periode/cakupan. Jangan menghitung dua hasil modal/penjualan sebagai dua usaha, atau menyamakan kategori internal dengan berhak menerima bantuan. Catatan penilaian konsolidasi yang merujuk beberapa unit juga tidak dihitung berulang sebagai penilaian pelaku yang berbeda.

## Tambahan KB-10 — katalog, relasi dan konversi KBLI

Tiga kelompok berikut menggunakan referensi kegiatan yang sama: katalog kode/versi, hubungan kode dengan kegiatan dan perannya, serta kandidat pemetaan antarkatalog. Penetapan organisasi dan prosedur pemeriksaannya tetap terbuka.

### Katalog KBLI

Katalog referensi klasifikasi kegiatan yang sudah dirancang diperluas dengan identitas versi; tidak membuat katalog kedua untuk kebutuhan yang sama.

| Field | Objek/tipe konseptual | Ketentuan |
| --- | --- | --- |
| `kode_kbli` | KATALOG_KBLI; teks asli | W; disimpan sebagai teks sesuai sumber dan tingkat hierarkinya, bukan bilangan yang menghilangkan format |
| `versi_kbli` | Tahun/identitas versi | W bersama kode; acuan terbaru 2025, versi 2020 historis tetap tersimpan |
| `judul` | Judul asli sumber resmi | W untuk entri yang digunakan; tidak membuat kode/label sektoral pengganti KBLI |
| `deskripsi` | Uraian asli atau rujukan uraian resmi | W untuk pemeriksaan makna; tidak mengarang atau menyimpulkan arti hanya dari nomor |
| `status_berlaku` | Metadata versi/entri menurut sumber | W; membedakan acuan yang berlaku dari referensi historis tanpa menghapusnya |

Dasar katalog adalah Peraturan BPS 7/2025; metadata penerbit/tanggal dokumen dan sumber pengundangan disimpan pada referensi yang sama. Rincian sumber dan catatan tanggal ada di KB-10. Uraian asli diambil dari sumber resmi ketika pengelolaan katalog diizinkan; pekerjaan ini tidak menyalin seluruh katalog ke repository.

### Relasi kegiatan–KBLI dan peran kegiatan

| Field | Objek/tipe konseptual | Ketentuan |
| --- | --- | --- |
| `kegiatan_id` | RELASI_KEGIATAN_KBLI; referensi KEGIATAN_USAHA | W; kegiatan dan unit yang sudah ada, bukan usaha baru untuk tiap kode |
| `kode_kbli` | Referensi kode | W pada relasi yang diajukan untuk verifikasi kode |
| `versi_kbli` | Referensi versi bersama kode | W; kode yang sama pada versi berbeda tidak dianggap fakta yang sama tanpa pemeriksaan |
| `peran_kegiatan` | Rujukan penetapan peran utama/tambahan berperiode | W untuk penetapan peran terkait; sumber peran satu kali pada kegiatan/riwayatnya. Jangan menggandakan nilai peran bebas di setiap versi kode |
| `sumber` | Bukti/dasar pemilihan kode dan peran | W saat diajukan/disahkan; bukan pilihan pertama dari hasil pencarian tanpa alasan |
| `periode_berlaku` | Mulai/akhir relasi atau rujukan rentang yang sama | W untuk mulai; akhir ketika diakhiri. Dibedakan dari masa berlaku versi peraturan |
| `status_verifikasi` | Status relasi yang diperiksa | W; penetapan kode/peran yang belum diperiksa tidak dianggap sah otomatis |

Satu unit dapat mempunyai beberapa kegiatan. Dalam MVP, kegiatan industri pangan dapat disertai perdagangan tambahan tanpa unit atau sektor pilot baru. Pada satu saat, kegiatan utama aktif pada unit tidak ganda tanpa kebijakan khusus yang sah. Pemeriksaan dilakukan antar-kegiatan unit pada rentang berlaku, bukan hanya per versi KBLI; beberapa relasi historis kode untuk kegiatan yang sama tidak menciptakan beberapa kegiatan utama.

Penetapan peran dapat memakai riwayat kegiatan/record terkait yang sudah dirancang. Relasi kode membaca peran yang sama, bukan master peran baru. Pergantian kegiatan utama atau versi kode mengakhiri/mencatat rentang yang relevan dan menambah riwayat; tidak menghapus kegiatan lama. Rincian penugasan/pembuktian peran dan pengecualian masih terbuka.

### Pemetaan versi KBLI

Satu record pemetaan menyimpan satu pasangan asal–tujuan. Kelompok pasangan bersama sumbernya menjelaskan jenis korespondensi, tanpa menumpuk beberapa tujuan dalam satu kolom.

| Field | Objek/tipe konseptual | Ketentuan |
| --- | --- | --- |
| `kode_asal` | PEMETAAN_KBLI; teks/referensi | W; kode resmi asal, tidak dihapus setelah pemetaan |
| `versi_asal` | Identitas versi asal | W; misalnya versi historis 2020 sesuai sumber |
| `kode_tujuan` | Teks/referensi kode resmi | W pada pasangan kandidat; tidak memilih kode tujuan yang tidak ada dalam sumber |
| `versi_tujuan` | Identitas versi tujuan | W; acuan pemetaan yang diminta 2025 |
| `jenis_pemetaan` | Kategori hubungan | W; satu-ke-satu, satu-ke-banyak atau banyak-ke-satu dibedakan; bila belum pasti ditahan untuk pemeriksaan |
| `status_pemeriksaan` | Status kandidat/pemeriksaan yang direncanakan | W; satu-ke-satu pun bukan pengesahan OSS atau penggantian sejarah otomatis |
| `sumber_referensi` | Publikasi/halaman/baris resmi dan tanggal versinya | W; Tabel Konversi BPS rilis 22 April 2026 sebagai sumber, lokasi pasangan harus dapat ditelusuri |

Pemetaan ambigu memerlukan pemeriksaan petugas sesuai cakupan kegiatan. Banyak-ke-satu tidak menggabungkan unit usaha; satu-ke-banyak tidak membuat unit baru. Sumber dan hasil pemeriksaan menjadi riwayat. Konversi internal tidak mengubah OSS/NIB/dokumen perizinan eksternal.

## Batas kewenangan dan rancangan KB-10

SOP bukti modal/penjualan, subjek/cakupan hukum multiunit/cabang, standar tahun buku nonkalender, konversi mata uang, tanggal acuan untuk perubahan aturan, OPD pemilik field klasifikasi dan penugasan verifikator masih terbuka. Model KB-11 dan KB-12 kini dipilih; rincian teknologi/operasi serta rincian KB-17, kapasitas KB-18 serta izin implementasi/data nyata/produksi tetap terbuka.

Rancangan nominal/keuangan mengikuti pembatasan akses dan minimisasi; model privasi KB-11 sudah dipilih, sedangkan rincian kelembagaan/penerapannya serta rincian teknologi/operasi KB-12 belum dianggap selesai. Semua struktur di atas dokumentasi konseptual; tidak ada skema, migrasi, seeder atau data pribadi nyata yang dibuat.

## Tambahan KB-11 — metadata perlindungan dan siklus data

Atribut berikut bersifat **konseptual**, bukan migrasi/kolom fisik yang dibuat sekarang. Gunakan katalog dan relasi yang ada; tidak perlu menambahkan delapan salinan atribut pada setiap tabel atau menyalin nilai master. Wajib tersedia untuk keputusan akses/pemrosesan terkait sebelum data nyata, bukan syarat agar pelaku sudah memiliki NIB pada pendataan awal. Jika kebijakan/izin belum jelas, akses tidak dibuka otomatis.

| Atribut yang diminta | Makna dan penempatan konseptual | Batas / validasi rancangan |
| --- | --- | --- |
| `tingkat_sensitivitas` | Label pada definisi field/kategori dokumen, dengan konteks objek/keluaran | PUBLIK-TERVERIFIKASI, INTERNAL, TERBATAS, SANGAT TERBATAS; pemetaan final belum disahkan, bukan kategori hukum UU PDP |
| `tujuan_pemrosesan` | Referensi tujuan pada aturan pemrosesan, layanan, izin/ekspor atau aktivitas terkait | Tujuan harus spesifik dan cocok dengan tindakan; label “tugas pemerintah” saja bukan izin semua data |
| `dasar_pemrosesan` | Referensi dasar sah pada kebijakan/layanan/aktivitas beserta versi dan keputusan | Ditentukan fungsi hukum berwenang per konteks; tidak otomatis menganggap semua proses berbasis persetujuan |
| `aturan_akses` | Katalog izin terkonfigurasi menurut objek/field, peran, OPD, wilayah, tindakan dan tujuan | Pisahkan baca/ubah/usul/sahkan/unduh/ekspor/administrasi akses; tanpa kecocokan ditolak |
| `status_penugasan` | Status dan masa berlaku pada penugasan akun individual yang sudah ada | Aktif/berakhir/dicabut menurut keputusan; diperiksa saat aksi, pekerjaan tertunda dan pengambilan file |
| `kategori_retensi` | Referensi kategori/seri data/arsip pada kebijakan retensi berversi | Bedakan aktif, arsip berdasar sah, penahanan, layak penyusutan dan tindakan akhir; tidak menetapkan durasi sendiri |
| `referensi_jra` | Rujukan instrumen/versi dan seri JRA yang sah pada kebijakan retensi | JRA Pemkab Sinjai yang berlaku belum terverifikasi; tidak memakai angka JRA instansi lain atau halaman layanan ANRI sebagai keputusan daerah |
| `status_pembatasan_pemrosesan` | Status, lingkup, dasar, waktu serta keputusan pembatasan pada objek/proses terkait | Pembatasan diterapkan pada layanan/aksi relevan, bukan hanya label tampilan; tidak otomatis menjadi alasan menghentikan tenggat hukum |

Metadata akses tidak menggantikan satu OPD pemilik aktif per field bisnis. Penetapan Pengendali/Prosesor/fungsi PDP secara hukum terpisah dari katalog kepemilikan field. Model audit KB-12 kini dipilih; metode rinci penyimpanan/enkripsi/kunci dan backup masih terbuka menurut penetapan terkait.

### Contoh kelas field — usulan untuk pembahasan

| Kelompok / contoh | Label internal contoh | Pembatasan contoh |
| --- | --- | --- |
| Statistik agregat yang diperiksa/disetujui | PUBLIK-TERVERIFIKASI | Tinjau identifikasi ulang sebelum publikasi; tidak menambah portal/izin publikasi sekarang |
| ID unit, nama dagang, kegiatan, status profil | INTERNAL | Sesuai tugas/objek/wilayah; nama/lokasi yang mengungkap identitas atau alamat rumah diperiksa konteksnya |
| Kontak pribadi, hubungan kepemilikan, alamat pribadi | TERBATAS | Tugas, tujuan dan hak khusus yang sesuai; pemilik bersama tidak otomatis melihat informasi orang lain |
| Modal, hasil penjualan tahunan dan rincian ekonomi KB-10 | TERBATAS | Input dan pengesahan klasifikasi tidak otomatis memberi hak semua angka ekonomi atau ekspor |
| NIK lengkap, dokumen identitas, bukti sensitif | SANGAT TERBATAS | Hak khusus, penyimpanan privat/terlindungi, penyamaran biasa dan catatan akses; respons/pencarian/log tidak membocorkan nilai |
| Bukti, usulan, audit dan laporan turunan | Menurut isi/konteks | Tidak otomatis INTERNAL; terapkan pembatasan field sumber dan tinjau risiko kombinasi/identifikasi ulang |

Ini contoh kebijakan internal yang diusulkan. **Kelas final tiap field, aturan penyamaran dan pemetaan per OPD belum diputuskan.** PUBLIK-TERVERIFIKASI tidak berarti seluruh profil usaha publik; INTERNAL tidak berarti bebas ekspor. Label akses tidak sama dengan kategori data pribadi umum/spesifik menurut UU PDP.

### Record konseptual pelayanan dan perlindungan

| Fungsi / pemakaian kembali | Atribut minimum yang direncanakan | Relasi dan batas |
| --- | --- | --- |
| Permohonan hak pada PERMOHONAN_LAYANAN | ID/nomor layanan, jenis hak, waktu terima, petugas/saluran, pemohon minimum/kuasa, objek, dasar, referensi pemeriksaan identitas, status, hasil/kanal aman | Gunakan layanan yang sudah ada; pemohon tidak dibuatkan akun dan bukti pribadi tidak disalin ke catatan terbuka |
| Riwayat pemeriksaan/keputusan layanan | ID kejadian, layanan, petugas berwenang, waktu, jenis pemeriksaan, dasar, keputusan/pengecualian, referensi bukti hasil/penyampaian | 1:N per layanan; koreksi master merujuk usulan/keputusan/riwayat nilai yang sama, bukan jalur koreksi kedua |
| Pemberian/pencabutan kewenangan | Penugasan akun individual, peran/OPD/wilayah, field/objek, hak tindakan, tujuan, masa berlaku, dasar, pemberi/pencabut dan waktu | Gunakan penugasan/grant/revoke beserta audit yang ada; pembaca tidak menjadi pemilik field |
| Persetujuan ekspor | ID, pemohon/pengesah berwenang, tujuan, field, OPD/wilayah/objek, batas jumlah, keputusan, waktu/masa berlaku bila ditetapkan, referensi pelaksanaan/unduh | Ekspor di luar cakupan ditolak; persetujuan tidak otomatis memberi hak sensitivitas yang belum dimiliki |
| Log akses sensitif pada audit_events | ID kejadian/korelasi, waktu, aktor/penugasan, objek/field, tindakan/tujuan, hasil | Gunakan jenis audit yang sama; jangan menyalin NIK lengkap, token, isi dokumen atau data bocor utuh |
| Insiden pelindungan data | ID, waktu indikasi/kejadian/diketahui, jenis/cakupan/dampak, pengamanan, eskalasi, pejabat penilai, kewajiban/tenggat/penerima pemberitahuan, bukti aman, pemulihan | Riwayat penilaian dan keputusan; tidak menganggap waktu konfirmasi memulai ulang tenggat, tidak mengirim pesan nyata sekarang |
| Kebijakan retensi dan tindakan penyusutan | ID/versi, seri/kategori, referensi JRA, pemicu/dasar simpan, penahanan dan peninjauan, kelayakan, keputusan tindakan/pengesah, pelaksana/waktu/bukti | 1 kebijakan:N kategori/tindakan; tidak ada angka retensi atau keputusan musnah/permanen baru pada tugas ini |

Tenggat pada layanan/insiden disimpan sebagai record terkait bila lebih dari satu kewajiban: jenis/pasal, peristiwa mulai, waktu penerimaan yang relevan, batas, status, eskalasi dan penyelesaian. **3 x 24 jam** Pasal 30, 32 dan 46 mengikuti konteks hukum masing-masing; verifikasi identitas, pindah unit atau status menunggu tidak otomatis mereset/memperlonggar tenggat. Bukti pemohon tetap harus diverifikasi sebelum data diungkap; kebutuhan bukti tidak menghilangkan pemantauan tenggat.

Kebijakan retensi berlaku pada master, permohonan, bukti, log, ekspor dan salinan relevan. Tanggal habis memicu pemeriksaan, bukan penghapusan otomatis; penahanan sah diperiksa. Menjaga riwayat koreksi tidak mengizinkan penyimpanan seluruh data pribadi selamanya. Prinsip integritas/retensi KB-12 melengkapi aturan ini; rincian penghapusan pada backup dan metode integritas masih terbuka.

### Batas finalisasi KB-11

30 RB-11 dan 26 rencana T11 serta sumber resmi ada pada [dokumen keputusan](06-keputusan-bisnis.md). Nama OPD/petugas, Pengendali/Prosesor/fungsi PDP, dasar layanan, kelas field final, JRA/penyusutan, SOP hak subjek, penilaian risiko/DPIA, metode teknis KB-12, hosting KB-14, kapasitas KB-18 dan izin implementasi/data nyata/produksi tetap terbuka. Tidak ada struktur database atau data nyata dibuat.

## Tambahan KB-12 — kamus event audit operasional

Perluas audit_events yang sudah ada; 21 atribut minimum berikut adalah rancangan konseptual, bukan 21 kolom fisik yang dibuat sekarang. **W** berarti wajib pada event terkait, **K** kondisional menurut kejadian. Tidak membuat fakta palsu agar semua atribut selalu terisi. Taksonomi **15 keluarga event** ada pada [bagian KB-12 keputusan bisnis](06-keputusan-bisnis.md#kb-12--audit-operasional-dan-salinan-audit-terlindungi).

| Atribut | Arti / lokasi konseptual | Kewajiban dan batas |
| --- | --- | --- |
| `audit_event_id` | ID internal unik dan stabil | W pada setiap event; dibuat sekali, tidak berubah saat retry/pulih; jenis/generator ID belum dipilih |
| `event_type` | Kode jenis pada katalog event | W; 15 keluarga minimum pada taksonomi keputusan, bukan nama bebas dari browser |
| `occurred_at` | Waktu kejadian beserta offset/zona atau rujukan sumber | W; berbeda dari waktu pencatatan, selisih dapat ditelusuri tanpa menimpa waktu asli |
| `recorded_at` | Waktu event dicatat oleh pencatat tepercaya | W; standar waktu konsisten, sumber/sinkronisasi/tampilan resmi belum dipilih |
| `actor_user_id` | Referensi akun individual internal | K bila aksi oleh akun; untuk anonim/proses sistem catat konteks sah tanpa akun/orang fiktif |
| `actor_opd_id` | Referensi OPD konteks penugasan saat kejadian | K sesuai aksi petugas; tidak menebak OPD untuk proses sistem atau mengubah konteks historis ketika penugasan berubah |
| `actor_role_context` | Referensi/konteks peran dan penugasan saat kejadian | W untuk tindakan berotorisasi; konteks proses sistem dicatat aman, bukan pengesah bisnis |
| `action_code` | Kode tindakan yang dapat dibedakan | W; misalnya membuat, mengesahkan, membaca, mengirim, memeriksa atau memulihkan; bukan kode izin dari input browser |
| `target_type` | Jenis sasaran dari katalog yang diizinkan | W sesuai jenis event; bukan nama tabel bebas yang dikirim pengguna |
| `target_id` | ID internal objek/peristiwa sasaran | K bila sasaran teridentifikasi; ID internal, bukan NIK mentah/nama/nomor eksternal sebagai pengganti |
| `field_code` | Referensi definisi field bisnis/metadata | K untuk tindakan per field; aksi satu objek/proses tidak dipaksa mempunyai field fiktif |
| `before_version` | Referensi versi sebelum pada riwayat yang ada | K bila ada versi sebelumnya; bukan menyalin nilai NIK/dokumen sebelum ke event |
| `after_version` | Referensi versi sesudah yang benar-benar tersimpan | K pada perubahan berhasil; gagal/ditolak tidak diberi versi sesudah palsu |
| `decision` | Keputusan berwenang atau rujukan keputusan | K saat ada pengesahan/penolakan/koreksi; keputusan menolak dapat berhasil dicatat tanpa perubahan nilai |
| `result` | Hasil aksi/event | W; berhasil, gagal, ditolak, masih diproses sesuai kenyataan; hasil lanjutan memakai event baru |
| `reason_reference` | Rujukan alasan dan/atau bukti privat yang relevan | K sesuai keputusan/aksi; referensi aman, bukan isi bukti atau teks rahasia; alasan ringkas disanitasi |
| `request_id` | ID internal permintaan/aksi yang diterima | K sesuai konteks; bukan token/sesi atau NIK; permohonan layanan bisnis ditautkan lewat referensi yang sudah ada |
| `correlation_id` | ID penghubung rangkaian event/operasi terkait | W untuk rangkaian lintas tahap; membedakan permintaan tunggal, kasus/usulan dan event, tanpa menduplikasi layanan |
| `sensitivity_level` | Rujukan tingkat_sensitivitas KB-11 | W sesuai kebijakan/konteks event; bukan atribut klasifikasi akses kedua yang bersaing |
| `replication_status` | Status kirim yang diturunkan dari record pengiriman terkait | W sebagai informasi konseptual; belum dikirim/tertunda/terkonfirmasi/gagal sesuai riwayat; bukan mutasi payload event atau bukti integritas otomatis |
| `integrity_reference` | Rujukan bukti/manifest/pemeriksaan yang terkontrol | K menurut tahap/bukti yang tersedia; belum diperiksa tidak dinyatakan sah; algoritme/kunci/lokasi acuan belum final |

Gunakan metadata/relasi yang sama bila nama lama sudah memenuhi makna tersebut. sensitivity_level memetakan tingkat_sensitivitas, alasan/bukti memakai referensi privat, versi memakai field_changes/change_sets dan keputusan yang sama, sedangkan request/correlation menautkan layanan/kasus terkait. Nilai sebelum/sesudah yang masih perlu disimpan tetap pada riwayat terlindungi sesuai KB-11, bukan disalin mentah ke event atau salinan.

Bedakan konteks pelaku saat kejadian dari hak saat ini: audit menyimpan rujukan yang dapat ditelusuri setelah akun/penugasan berakhir, sedangkan izin membaca audit diperiksa dengan penugasan saat akses. Metadata bukan alasan membuka data pribadi pihak lain. Tidak memakai NIK, token atau isi dokumen sebagai target_id/request_id/reason_reference.

### Informasi pengiriman, integritas, kegagalan dan pemulihan

| Fungsi record terkait | Informasi minimum konseptual | Hubungan dan batas |
| --- | --- | --- |
| Niat pengiriman tahan gangguan | ID internal, audit_event_id asli, tujuan terkonfigurasi, status, waktu siap/terakhir, rujukan kendali pengiriman | Konsisten dengan event commit; pola transactional outbox kandidat saja, tidak memilih antrean/produk |
| Percobaan/konfirmasi pengiriman | Referensi niat/event, waktu/hasil percobaan, kode kegagalan aman, rencana/riwayat retry, konfirmasi penerimaan dan rujukan salinan | 1:N percobaan; pengiriman ulang tidak menggandakan event; status terkini tidak mengubah payload audit |
| Pemeriksaan integritas/rekonsiliasi | ID operasi, aktor/proses/mandat, waktu, daftar ID/rentang/checkpoint, acuan terpercaya, hasil/temuan, referensi bukti | Cek isi dan kelengkapan pada operasional, pengiriman dan salinan; jumlah/hash lokal saja tidak cukup |
| Kegagalan/peringatan terkait | ID, event/operasi, kode/konteks aman, waktu, dampak, status penanganan, eskalasi dan rujukan insiden | Gunakan audit/insiden KB-11 yang sesuai; tanpa payload error/rahasia mentah atau duplikasi master insiden |
| Operasi pemulihan | ID, pelaksana/mandat, sumber sah, cakupan/rentang/waktu, bukti verifikasi, hasil dan kekurangan, izin tindak lanjut | Event asli mempertahankan ID; operasi pulih membuat event sendiri, bukan semua event di-ID ulang |
| Retensi/penahanan/penyusutan | Referensi kategori/versi JRA, dasar simpan/penahanan, tinjauan/keputusan, cakupan lapisan/salinan/backup dan bukti | Gunakan kebijakan/tindakan retensi KB-11; penyusutan sah dibedakan dari kehilangan/manipulasi |

Salinan menyimpan event dengan identitas stabil dan perlindungan yang sama sesuai sensitivitas, dengan kontrol administratif/keamanan terpisah dari database aplikasi. Tidak menyalin token, NIK lengkap, isi dokumen atau seluruh permintaan. Akun teknis/kewenangan pengelola belum ditetapkan.

Event stabil tidak diubah dari “masih diproses” menjadi “berhasil”; penyelesaian menambah event berkorelasi. Keputusan, hasil tindakan dan status replikasi merupakan makna berbeda. ID sama dengan isi berbeda tidak boleh menimpa catatan. Standar waktu membedakan occurred_at/recorded_at, offset/zona dan sumber/ketidaksesuaian; sumber dan metode sinkronisasi belum dipilih.

### Batas finalisasi KB-12

Model dua lapisan, 30 RB-12, 28 rencana T12 serta prinsip transaksi/retry/rekonsiliasi disepakati. Lokasi/media, teknologi/kunci/transfer, jadwal/ambang, kapasitas, pengelola/hak admin, kategori/JRA/durasi, frekuensi integritas, RPO/RTO dan SOP investigasi/pemulihan belum final. Rincian operasional KB-17, bukti KB-14 dan angka dan bukti kapasitas KB-18 belum final; tidak ada izin kode/database/data nyata/produksi.

## Tambahan KB-13 — identitas dan rencana rekonsiliasi

Nama/field berikut adalah **rancangan konseptual**, bukan sebelas tabel yang diwajibkan. Gunakan struktur lama jika fungsinya sesuai. Setiap operasi menyimpan jenis entitas, referensi ID asal/kanonik, versi aturan, dasar keputusan, status serta event audit. ID internal tetap terpisah dari NIK/NIB dan ID asal tidak didaur ulang.

| Fungsi konseptual yang diminta | Informasi minimum | Relasi / penggunaan kembali dan batas |
| --- | --- | --- |
| `KANDIDAT_DUPLIKAT` | ID kandidat, jenis, referensi kandidat/versi, pemicu/waktu, aturan/versi, bukti/keyakinan, status pembuktian | Banyak identitas pada kandidat bila perlu; bukan fakta identik atau master baru, hasil sesuai hak tanpa NIK lengkap |
| `ATURAN_PENCOCOKAN` | ID/versi, jenis, atribut sah, sumber/status bukti, tingkat keyakinan, jenis keputusan boleh, batas otomatisasi, tanggal, otoritas, status aktif | Gunakan katalog/referensi berversi yang sesuai; makna berbeda dari ATURAN_KLASIFIKASI ekonomi KB-10 |
| `PEMERIKSAAN_REKONSILIASI` | ID pemeriksaan/kasus, kandidat, pemeriksa/proses/mandat, aturan/versi, bukti/sumber/versi, hasil tiap syarat, status/alasan | Gunakan kasus/layanan/riwayat yang sama bila sesuai; konflik nilai menautkan KB-08, bukan sengketa kedua |
| `RENCANA_MERGE` | ID operasi stabil, jenis, daftar sumber/versi, kanonik/dasar, aturan/versi, mandat/keputusan, rencana verifikasi/pulih, status | Satu rencana:N sumber/dampak; bukan satu kolom daftar ID; seluruh syarat harus benar sebelum eksekusi |
| `DAMPAK_MERGE` | ID item/rencana, jenis/ID referensi, keadaan/versi asal, tujuan yang direncanakan, risiko/bukti/keputusan | Satu item per referensi/relasi; tanpa menyalin data sensitif atau menyembunyikan jenis referensi yang belum dikenal |
| `RIWAYAT_IDENTITAS_KANONIK` | ID riwayat, jenis, ID asal/kanonik, periode/versi, operasi/aturan/keputusan/audit | Banyak asal ke satu kanonik; ID tidak didaur ulang dan audit sejarah tidak ditulis ulang |
| `ALIAS_IDENTITAS` | ID historis/asal, jenis, kanonik, lingkup/masa berlaku/status, keputusan | Fungsi resolusi pada riwayat kanonik yang sama bila cukup; tidak wajib tabel kedua atau alias NIK mentah |
| `RENCANA_SPLIT` | ID operasi, sumber/versi, tujuan sah/bukti, daftar pembagian referensi, petugas/mandat/keputusan, verifikasi/pulih/status | Satu sumber:N tujuan menurut keputusan; tiap referensi dialokasikan eksplisit, bukan otomatis disalin ke semua tujuan |
| `KEPUTUSAN_REKONSILIASI` | ID, jenis operasi, kandidat/rencana, dasar/bukti, aturan/versi, petugas atau proses/mandat, waktu/hasil/versi/audit | Gunakan struktur keputusan/usulan/change_set setara; keputusan otomatis teknis berbeda dari pengesahan substantif petugas |
| `STATUS_ARSIP` | Status/riwayat objek, dasar/keputusan, pelaksana/waktu, konflik/hubungan/penahanan, kategori/JRA | Gunakan status master dan retensi KB-11, bukan master arsip; berbeda dari operasional/tutup dan pemusnahan |
| `RIWAYAT_PEMULIHAN_REKONSILIASI` | ID pulih, operasi asal, dasar/bukti, versi/peta sebelum–sesudah, perubahan setelah merge, pembagian ulang, petugas/mandat/verifikasi/hasil/audit | Gunakan keputusan korektif/operasi pulih setara; bedakan koreksi bisnis KB-13 dari pemulihan salinan audit KB-12 |

Daftar sumber, tujuan dan dampak berulang memakai record terkait, bukan satu kolom kumpulan ID. Bukti/identitas sensitif tidak disalin ke kandidat/rencana/audit; gunakan referensi privat. Event KB-12 mempertahankan target ID sejarah, sedangkan peta asal–kanonik dibaca terpisah sesuai izin.

### Sepuluh unsur katalog ATURAN_PENCOCOKAN

Nama teknis ini usulan, bukan skema final. W wajib sesuai konteks, K kondisional. Tidak menjadikan NIK/NIB wajib seluruh registrasi awal.

| Unsur / field konseptual | Makna | Kewajiban dan batas |
| --- | --- | --- |
| `aturan_id / versi_aturan` | ID internal dan versi | W; versi baru tidak menimpa versi lama |
| `jenis_entitas` | Jenis sasaran yang dibolehkan | W; orang/badan/unit tidak dicampur |
| `atribut_diperbolehkan` | Daftar atribut sah diperiksa | W; terstruktur/record terkait, bukan akses semua field |
| `sumber_bukti / status_verifikasi` | Referensi bukti/sumber dan verifikasinya | W untuk keputusan identik; standar bukti minimum belum disahkan |
| `tingkat_keyakinan` | Keyakinan/ketidakpastian berdasarkan bukti | K sesuai metode; algoritme/skor/ambang belum dipilih, bukan bukti tunggal |
| `jenis_keputusan_diizinkan` | Deteksi, pencegahan, penautan atau tindakan yang boleh | W; aturan tidak otomatis memberi semua hak merge/split/arsip |
| `batas_otomatisasi` | Prasyarat/larangan/lingkup/mandat | W untuk otomatisasi; sepuluh syarat tetap wajib |
| `tanggal_berlaku` | Mulai/akhir sah | W untuk mulai, akhir sesuai keputusan; periksa saat eksekusi |
| `otoritas_penetap` | Referensi otoritas dan dasar keputusan | W untuk aktif; OPD/pejabat resmi belum ditetapkan |
| `status_aktif` | Aktif/nonaktif dan riwayatnya | W; nonaktif/versi berubah menahan rencana untuk pemeriksaan ulang |

**Tidak ada nilai ambang keyakinan, skor, pembobotan atau algoritme yang ditetapkan.** Skor tidak menggantikan bukti identitas, dampak dan mandat. Katalog pencocokan berbeda makna dari aturan klasifikasi ekonomi KB-10, tetapi boleh memakai struktur versi/rujukan yang setara.

### Identitas, status dan referensi yang dibedakan

- Kandidat, identik terverifikasi dan konflik adalah keadaan pembuktian. Berbeda dari status proses rencana yang enum/transisinya belum final; identik belum berarti aman merge.
- Status arsip berbeda dari tidak aktif, verifikasi, konflik, kategori/status skala atau legalitas. Usia profil bukan dasar tunggal arsip; kebijakan/JRA masih terbuka.
- ID operasi rekonsiliasi stabil untuk idempotensi, yaitu penerapan sekali meskipun permintaan diulang. Berbeda dari ID entitas/event; retry tidak menambah keputusan/alias sukses ganda.
- Sumber/target dan referensi terdampak mempunyai versi saat rencana serta pemeriksaan ulang eksekusi. Versi berubah atau aturan/mandat berakhir menahan operasi.
- Riwayat kanonik dan alias boleh satu struktur jika fungsi sejarah/resolusi terpenuhi. Satu ID historis tidak boleh punya pemetaan aktif ambigu/siklus atau dialihkan untuk subjek lain. Pemilihan kanonik/identitas tujuan split belum final.
- Referensi aktif yang sah dapat ditautkan ulang tanpa menulis ulang audit/keputusan sejarah. Pemilik bersama/peran/periode, kegiatan/lokasi, sektor/produk/produksi dan skala berdasarkan tujuan/input/aturan tetap terlacak.
- Split memakai item pembagian per referensi/tujuan/dasar; referensi belum jelas tidak dihapus atau digandakan untuk memaksakan penyelesaian.
- Kontrak program/bantuan/pelatihan masa depan mempertahankan ID peristiwa: peristiwa berbeda tetap berbeda, peristiwa sama tidak digandakan karena merge. Tidak ada modul/tabel program dibuat pada MVP.

### Prasyarat, privasi dan pemulihan

Sepuluh syarat kumulatif pada [keputusan KB-13](06-keputusan-bisnis.md#kb-13--rekonsiliasi-otomatis-identitas-merge-split-dan-arsip) dicatat per pemeriksaan beserta bukti/aturan/versi. Gagal/belum diketahui menahan operasi untuk petugas, bukan otomatis diberi nilai aman. Proses mempunyai identitas, mandat/masa berlaku dan cakupan sah KB-04/KB-11, bukan pengesah substantif.

NIK lengkap tidak tampil pada kandidat/pencarian/audit/salinan. Resolusi ID historis tetap memeriksa hak objek/field tanpa membocorkan subjek lain. Metode pencocokan terlindungi belum dipilih.

Rencana pulih sebelum merge memuat dampak hilir/versi dan perubahan setelahnya. Pulih memakai keputusan/event baru dan pemeriksaan referensi/akses/audit, bukan menghapus sejarah atau restore seluruh database secara buta. Perubahan kritis identitas/relasi/peta/keputusan serta audit KB-12 atomik; pengiriman salinan mengikuti KB-12.

### Hal yang belum final untuk KB-13

OPD/otoritas katalog/petugas, bukti minimum, pemilihan kanonik, batas aman otomatis, aturan/algoritme/ambang, pengesahan split/koordinasi lintas pemilik, SOP sengketa dan pembatalan/pulih, arsip/JRA Sinjai, teknologi/jadwal/kapasitas/hosting serta izin implementasi/data nyata/produksi. Rincian KB-17 dan angka dan bukti kapasitas KB-18 belum final. 30 RB-13 dan 30 T13 adalah dokumentasi/rencana; auto-merge historis produksi belum diaktifkan.

## Penyelarasan status hosting — KB-14

**KB-14 Model B audit kesiapan sebelum konfigurasi teknis/deployment disepakati; kondisi PDN masih BELUM DIKETAHUI dan hasil hosting BELUM DAPAT DINILAI.** Pilihan model bukan bukti bahwa versi, kapasitas atau konfigurasi final tersedia. Kebutuhan pembuktian hosting yang dirujuk bagian sebelumnya tetap terbuka; rincian operasional KB-17 belum final dan angka dan bukti kapasitas KB-18 belum final.

Gunakan [formulir hosting yang sama](07-checklist-hosting-cpanel.md) untuk bukti tersanitasi oleh pengelola/verifikator berwenang. Tidak menambah entitas aplikasi, field bisnis, OPD/petugas atau hak server melalui penyelarasan ini. Model/atribut/kewenangan KB-01–KB-13 tetap; KB-11 privasi, KB-12 kontrol salinan terpisah dan KB-13 otomatisasi aman tidak dilonggarkan karena batas hosting.

Dokumen lengkap/status Layak sekalipun bukan izin implementasi/data nyata/deployment. Target pemulihan/operasi KB-17, volume/kapasitas KB-18, pengelola resmi dan bukti PDN masih diperlukan. Tidak mengakses server, meminta/membaca rahasia, memasang file uji atau mengubah kode/database/paket/hosting/DNS pada tugas ini.

## Tambahan KB-15 — kamus impor bertahap

Seluruh nama/atribut berikut **konseptual**, bukan migrasi atau sebelas tabel wajib. Gunakan sumber/bukti privat, katalog field, kandidat KB-13, usulan/keputusan/riwayat/change_set serta audit KB-12 yang sudah ada bila maknanya sama. Identitas internal tetap terpisah NIK/NIB. Staging impor adalah penampungan sementara, bukan server staging uji aplikasi dan bukan master OPD.

| Fungsi yang diminta | Informasi minimum konseptual | Penggunaan kembali / batas |
| --- | --- | --- |
| `SUMBER_DATA_IMPOR` | ID sumber/dataset, OPD/pihak asal berwenang, tujuan/dasar pemrosesan, lingkup/jenis dataset, versi/snapshot, referensi izin/perjanjian bila diwajibkan, status | Gunakan referensi OPD/sumber/bukti yang sudah ada; pengirim bukan pemilik semua field atau Pengendali hukum otomatis |
| `BATCH_IMPOR` | ID batch unik, sumber/versi, berkas/pemetaan/versi, penerima/pembuat berpenugasan, waktu, tujuan/cakupan, status proses dan ringkasan jumlah | Satu batch:N record/keputusan, bukan satu pengesahan semua OPD. Hitungan hasil diturunkan dari record/field, bukan master jumlah usaha baru |
| `BERKAS_SUMBER` | ID/referensi berkas privat, sumber/batch, metadata aman/versi, referensi fingerprint/integritas, pemeriksaan keamanan, akses/kategori retensi/JRA | Gunakan bukti/storage privat yang setara; tidak menyalin path/URL publik, nama file berdata pribadi atau isi berkas ke log |
| `PEMETAAN_FIELD_IMPOR` | ID/versi pemetaan, kolom asal/arti, jenis objek/kode field tujuan, aturan tipe/normalisasi/konversi, referensi/versi, dasar/pengesah/masa berlaku/status | Katalog field yang sama; kolom asing tidak menciptakan field resmi. Nilai dari sumber tak diperlakukan sebagai nama tabel/kolom berotoritas |
| `RECORD_STAGING` | ID record internal, batch/versi, rujukan ID baris/record sumber terlindungi, nilai yang sah diperlukan, revisi/hasil pemetaan, status pemeriksaan/promosi | Nilai sumber/normalisasi dibedakan dan revisinya terlacak; bukan salinan master resmi atau tempat bebas seluruh data pribadi |
| `HASIL_VALIDASI` | ID hasil, record/versi/field, aturan/versi, kategori/kode kesalahan aman, rekomendasi, status/tindak lanjut | Gunakan hasil pemeriksaan setara; diagnostik rujukan saja tanpa NIK mentah/salinan baris. Kategori konflik/kandidat menautkan kasus yang ada |
| `KANDIDAT_PENCOCOKAN` | Record sumber/versi, kandidat ID induk/alias yang sah, jenis entitas, aturan/versi, alasan/bukti/keyakinan/status pemeriksaan | Fungsi pengait ke KANDIDAT_DUPLIKAT/PEMERIKSAAN_REKONSILIASI KB-13; tidak membuat mesin kandidat kedua atau menganggap nomor sama bukti identik |
| `RENCANA_PROMOSI` | ID operasi stabil/rencana, item record–objek/field, nilai usulan atau referensi privat, versi dasar staging/pemetaan/target, dependensi/dampak, sumber/keputusan/status | Gunakan usulan/correction_items/change_sets yang sesuai; satu record bisa beberapa kelompok pemilik, tanpa menerapkan field nonmilik |
| `KEPUTUSAN_IMPOR` | ID keputusan, batch/record/item/field atau kelompok, pemilik field saat itu, petugas/penugasan, hasil/alasan/bukti/waktu, versi/change_set/audit | Gunakan keputusan/usulan yang ada; satu pengesah field, profil baru verifikator berbeda. Hasil sebagian bukan verifikasi seluruh profil |
| `RIWAYAT_PEMBALIKAN_IMPOR` | ID koreksi, operasi/batch/record/field/change_set/versi asal, alasan/bukti, dampak/perubahan kemudian, keputusan/pelaksana/waktu/hasil/versi baru/audit | Gunakan keputusan korektif/riwayat pulih yang setara; rollback gagal transaksi berbeda dari koreksi pascacommit dan bukan hapus massal |
| `AUDIT_EVENT` | ID event asli, batch/sumber/record/pemetaan/versi/operasi/korelasi, aktor/proses/mandat, tahap/aksi/hasil, keputusan/dampak/perubahan terkait | Dipenuhi audit_events KB-12, tidak tabel log impor kedua. Tanpa NIK/dokumen/raw payload; salinan/retry/retensi mengikuti KB-11/KB-12 |

Daftar field/item, referensi, banyak produk/pihak/periode, hasil validasi dan keputusan berulang memakai record terkait, bukan satu kolom daftar ID/nilai. Representasi nilai staging dibatasi pemetaan sah serta akses/retensi; ini bukan alasan memindahkan seluruh master resmi ke tabel nilai bebas.

### Sepuluh contoh pemetaan — belum template final

| Kolom sumber contoh | Tujuan konseptual | Pemeriksaan arti / batas |
| --- | --- | --- |
| Nama Pemilik | Identitas ORANG dan usulan HUBUNGAN_PIHAK_USAHA | Bukan otomatis pemilik tunggal; bedakan pengurus/pengelola, bukti/peran/masa berlaku dan pemilik bersama |
| NIK | Atribut identitas terlindungi ORANG | Teks terlindungi, bukan primary key; kosong bukan nol dan pencocokan bukan panggilan Dukcapil |
| Nama UMKM | Nama dagang UNIT_USAHA setelah pemeriksaan | Tidak selalu satu unit per baris; nama/pemilik sama tidak cukup menyamakan unit |
| Nama Badan Usaha | BADAN_USAHA jika entitasnya memang berbeda | Tidak menyamakan badan dengan nama dagang atau orang pengurus |
| NIB | Referensi legalitas dengan subjek/cakupan sumber resmi | Bukan ID unit/cabang atau syarat registrasi awal; nilai dalam berkas belum otomatis terverifikasi |
| Alamat Usaha | LOKASI_USAHA/cabang | Bukan otomatis alamat pribadi atau unit baru; periksa keterkaitan induk |
| Jenis Usaha | KEGIATAN_USAHA dan kandidat KBLI berversi | Arti/sumber/kode/versi diperiksa; nama kategori bukan kode KBLI resmi otomatis |
| Produk | PRODUK pada Profil Industri Pengolahan Pangan | Tautan profil–kegiatan–unit sah; nilai berulang menjadi record terkait, bukan satu kolom daftar |
| Kapasitas | PENGUKURAN_PRODUKSI jenis kapasitas | Produk/nilai/satuan/periode/cakupan/sumber/verifikasi wajib sesuai konteks; bukan realisasi atau kolom master tertimpa |
| Omzet | PENGUKURAN_EKONOMI hasil penjualan | Periode/cakupan/mata uang/sumber/verifikasi eksplisit; tidak otomatis modal, penjualan setahun atau kategori skala disahkan |

Pemetaan memuat sumber/arti/versi, bukan kemiripan nama kolom. Transformasi diperbolehkan hanya menurut aturan sah tanpa mengubah makna, dengan versi/jalur asal yang dapat ditelusuri. Kode identitas tidak dijadikan angka yang kehilangan format/nol awal; periode, satuan, kurs, skala dan KBLI ambigu tidak ditebak.

### Kelengkapan, keadaan nilai dan status yang dibedakan

| Kelompok | Unsur yang wajib tersedia sesuai konteks |
| --- | --- |
| Sebelum penggunaan dataset | Sumber/kewenangan, tujuan/dasar/izin, lingkup, metadata/versi dan akses privat |
| Sebelum record diajukan | Batch/ID baris sumber terlindungi, pemetaan/versi, nilai wajib kontekstual, tipe/format, satuan/periode/cakupan dan referensi/bukti yang diperlukan |
| Sebelum promosi | Identitas/referensi serta keputusan sah, versi rencana/staging/pemetaan/target terkini, hak pemilik field/petugas aktif, prasyarat profil baru dan audit kritis |
| Ringkasan hasil | Hasil per field/kelompok, record dan batch diturunkan dari keputusan/eksekusi yang nyata, bukan menaikkan status seluruh profil otomatis |

Bedakan **tidak ada data, nol, belum diketahui, tidak berlaku, terisi belum diverifikasi**. Keadaan itu bukan satu string yang diubah menjadi nol/terverifikasi. NIK kosong ditandai belum lengkap sesuai keadaan, bukan larangan universal pendataan awal; bukti identitas yang diperlukan tetap belum lulus. NIB tidak wajib awal dan bukan ID unit.

Status batch/record/validasi, identitas kandidat, pengesahan field, profil induk/sektor, ekonomi/produksi dan legalitas berbeda. Enum/transisi rinci masih terbuka. Penolakan/karantina menyimpan alasan/referensi aman dan bukti sumber sesuai dasar/retensi, tidak menyalin NIK/baris sensitif ke diagnostik atau mempertahankan seluruh sumber selamanya.

### Versi, penerapan sekali dan pembalikan

ID operasi stabil mengikat batch/record sumber, versi sumber/pemetaan/rencana, persetujuan dan perubahan resmi. Kunci deduplikasi final belum dipilih; fingerprint berkas saja bukan bukti usaha identik atau jaminan idempotensi. Versi pemetaan/sumber baru tidak otomatis mengulang efek yang sudah sah.

Rencana promosi menyimpan item per sasaran/field dan dependensinya. Periksa ulang versi/hak/rujukan sebelum satu unit perubahan kritis diterapkan bersama status/keputusan/audit. Satu batch tidak otomatis satu transaksi lintas OPD; hasil campuran tercatat tanpa referensi yatim atau sukses palsu.

Rollback transaksi gagal membatalkan bagian terkait sebelum sah. Hasil yang sudah commit diperbaiki lewat keputusan baru yang merujuk sumber/change_set/versi awal, memeriksa keadaan terbaru serta dampak relasi/produk/kegiatan/ekonomi/peristiwa. Tidak menimpa perubahan sah setelah impor atau menghapus massal semua objek dari batch.

### Privasi dan hal yang belum final

Staging/sumber/bukti/rencana privat menurut KB-11, hak unduh/ekspor terpisah dan audit minimal KB-12. Rujukan asal tidak boleh menjadi URL publik. Pemeriksa batch tidak otomatis pemilik semua field, data sensitif atau akun masyarakat.

OPD/petugas/otoritas pemetaan, SOP/template/format/dataset berbagi, tujuan/dasar/perjanjian, bukti NIK/NIB, normalisasi/konversi, ukuran file/batch/frekuensi, kunci replay/batas transaksi, retensi/JRA dan prosedur pembalikan belum final. KB-14 hosting tetap BELUM DAPAT DINILAI; rincian KB-17 dan KB-18 serta izin implementasi/data nyata/integrasi/produksi tetap terbuka. 30 RB-15/30 T15 pada [keputusan](06-keputusan-bisnis.md) adalah dokumentasi/rencana; tidak membuat file data nyata/contoh atau menjalankan aplikasi.

## Kamus program dan riwayat layanan — KB-16, fase lanjutan

KB-16 Model B disepakati pengguna pada 5 November 2026. Tambahan ini **tidak memperluas MVP pertama KB-09**. Nama berkas tetap untuk kesinambungan rujukan, bukan pernyataan seluruh isinya masuk MVP. Seluruh field/kewajiban KB-09–KB-15 dipertahankan. Istilah record berarti satu catatan terkait, bukan instruksi membuat tabel fisik.

### Sepuluh fungsi konseptual dan atribut minimum

| Fungsi | Atribut konseptual minimum | Relasi dan batas |
| --- | --- | --- |
| PROGRAM_PEMBINAAN | ID internal, nama, kode/nomenklatur sah jika ada dan referensi/versi, tahun/periode, satu OPD penanggung jawab record aktif, status/riwayat | Program 1:N kegiatan; nama/tahun/kode sumber bukan ID tunggal; penetapan OPD/kode belum final |
| KEGIATAN_PROGRAM | ID, program, jenis layanan, deskripsi/sasaran, sumber/rujukan dan status relevan | Program 1:N kegiatan; berbeda dari KEGIATAN_USAHA/KBLI ekonomi |
| PELAKSANAAN_KEGIATAN | ID sesi, kegiatan program, lokasi, tanggal/periode, OPD pelaksana, sumber/riwayat | Kegiatan 1:N sesi; sesi bisa banyak peserta dan OPD melalui peran sah |
| PERAN_OPD_PROGRAM | ID hubungan, program/kegiatan sesuai lingkup, OPD, jenis peran, mulai/akhir, dasar/mandat/riwayat | Gunakan penugasan/peran setara; banyak OPD tidak membuat banyak program atau pemilik field aktif ganda |
| PARTISIPASI_LAYANAN | ID partisipasi/sesi, pihak peserta Orang, unit penerima bila cakupan perlu, peran/konteks perwakilan, status pendaftaran dan kehadiran terpisah, bukti/versi | ID peserta dari master, bukan NIK; cegah duplikat teknis orang–sesi–peran–konteks, tanpa melarang sesi/program berbeda |
| REALISASI_LAYANAN | ID kejadian, partisipasi atau rujukan penerima yang sah, jenis/uraian realisasi, waktu/periode, pelaksana/sumber/bukti, status realisasi dan verifikasi/keputusan | Partisipasi dapat banyak realisasi; layanan langsung tanpa kelas tidak dipaksa kehadiran fiktif; penerima tetap bertipe Orang/Unit/Badan sesuai program |
| INDIKATOR_PROGRAM | ID/kode internal, definisi/versi, jenis output/hasil langsung/outcome teramati, satuan, objek/cara ukur, sumber/bukti yang diperlukan, penanggung jawab pencatatan | Program/kegiatan terkait indikator yang relevan; target/daftar indikator wajib/frekuensi belum final, bukan kode resmi yang dikarang |
| OBSERVASI_HASIL | ID, indikator/versi, objek bertipe/ID internal, nilai atau referensi pengukuran KB-09/KB-10/versi, periode awal/akhir bila relevan, sumber/bukti, verifikasi/pencatat | Indikator 1:N observasi; awal/akhir berbeda record/periode, sumber sama tidak disalin jadi master angka baru, belum diukur bukan capaian |
| TINDAK_LANJUT_PROGRAM | ID, penerima/layanan asal, jenis/kegiatan tindak lanjut, tanggal/periode, petugas/sumber, status/hasil/bukti relevan | Penerima/realisasi dapat banyak tindak lanjut; jangan menduplikasi master atau mengubah status layanan awal otomatis |
| REFERENSI_BUKTI | ID/referensi dokumen privat, asal/objek/keputusan terkait, pencatat/waktu, sensitivitas/hak/retensi | Gunakan bukti privat KB-08/KB-11 yang setara, bukan tabel salinan isi identitas; URL bukan publik permanen |

Semua enam tingkat PROGRAM → KEGIATAN/LAYANAN → PELAKSANAAN/SESI → PARTISIPASI/PENERIMAAN → REALISASI → TINDAK LANJUT memiliki ID internal sendiri. ID rekaman, sumber, versi, pencatat/waktu, alasan, keputusan dan audit dipakai dari struktur bersama yang sesuai. Nama program/kegiatan/tahun bukan satu-satunya kunci unik. Kode rekening/nomenklatur/OPD resmi tidak dikarang; referensi/versi sumber dicatat bila tersedia sah.

PIHAK/ORANG/BADAN_USAHA/UNIT_USAHA tetap master bersama. Peserta Orang memakai pihak_id berjenis Orang; unit_usaha_id menunjuk penerima Unit, dan hubungan pemilik/pengelola/wakil diperiksa sesuai konteks/waktu. Apabila sasaran sah Orang/Badan/Unit berbeda, rujuk objek bertipe yang tepat dan hubungan penerima yang diperlukan. Tidak menambah NIK lengkap sebagai ID peserta, tidak membuat Unit/Badan fiktif, tidak menganggap satu baris peserta satu UMKM.

Kegiatan program berbeda dari kegiatan ekonomi/KBLI, lokasi sesi berbeda dari cabang. Satu kejadian layanan dapat terkait banyak penerima, dan satu partisipasi dapat banyak realisasi; identitas kejadian dan asosiasinya harus jelas agar rekap tidak berganda. Bentuk penyimpanan hubungan ini masih konseptual, bukan skema SQL final.

### Lima kelompok status yang dipertahankan

| Kelompok | Kosakata yang ditetapkan pengguna | Makna dan pemisahan |
| --- | --- | --- |
| Program | Rencana, Aktif, Selesai, Dibatalkan, Diarsipkan | Status record program, bukan bukti semua sesi/layanan diterima atau seluruh catatan disahkan |
| Partisipasi | Didaftarkan, Dikonfirmasi, Hadir, Tidak Hadir, Mengundurkan Diri | Kosakata alur yang diminta; pendaftaran dan kehadiran dipertahankan sebagai catatan/status berbeda, bukan satu kolom yang saling menimpa |
| Realisasi | Belum Dilaksanakan, Terlaksana, Selesai, Dibatalkan | Keadaan pelayanan nyata, berbeda dari hadir atau verifikasi catatan |
| Verifikasi catatan | Draf, Diajukan, Terverifikasi, Perlu Koreksi | Keputusan mutu/pengesahan record terkait, bukan status program atau realisasi |
| Tindak lanjut | Direncanakan, Dalam Pemantauan, Selesai | Status pemantauan/tindak lanjut sendiri; tidak menghapus layanan atau observasi sebelumnya |

Daftar partisipasi memuat tahapan pendaftaran dan kehadiran. Simpan catatan pendaftaran Didaftarkan/Dikonfirmasi/Mengundurkan Diri terpisah dari kehadiran Hadir/Tidak Hadir; satu ringkasan alur tidak boleh menimpa dua fakta tersebut. Belum ada catatan kehadiran bukan otomatis Tidak Hadir. Jangan menambahkan status final baru berdasarkan dugaan. Definisi transisi, dampak pembatalan dan bukti tiap tahap masih perlu SOP sah.

Program Selesai tidak otomatis membuat realisasi Selesai/Terverifikasi. Peserta Dikonfirmasi belum tentu Hadir; Hadir belum berarti layanan selesai. Realisasi Selesai masih berbeda dari verifikasi Terverifikasi. Pembatalan/arsip tidak menghapus historis yang wajib dipertahankan dan tidak mengesahkan turunannya otomatis.

### Metadata indikator dan observasi

Tiga jenis indikator dipisahkan: **output** (hadir/unit dilayani/sesi/pendampingan), **hasil langsung** (pelatihan selesai/rencana tindakan/dokumen fasilitasi selesai) dan **outcome teramati** (kemasan/kapasitas/omzet/sertifikasi sah/akses pasar tercatat). Kode indikator internal tidak dianggap kode pemerintah resmi.

| Atribut | Keharusan dan arti |
| --- | --- |
| Identitas indikator dan versi | Wajib mengidentifikasi definisi yang dipakai; perubahan definisi tidak menulis ulang observasi lama |
| Definisi dan jenis indikator | Wajib membedakan output, hasil langsung, outcome; jelaskan apa yang dihitung |
| Satuan dan cara pengukuran | Wajib jelas; angka dengan satuan berbeda tidak dijumlah tanpa aturan konversi baku |
| Objek pengukuran | Wajib bertipe Orang/Unit/Badan atau objek layanan yang sah dengan ID internal; bukan nama/NIK tunggal |
| Periode pengukuran | Wajib menyatakan periode yang relevan; awal dan akhir dicatat bila membandingkan sebelum/sesudah |
| Nilai atau rujukan pengukuran | Sesuai indikator; produksi/ekonomi merujuk record/versi KB-09/KB-10, bukan salinan master baru |
| Sumber dan referensi bukti | Wajib dapat ditelusuri; dokumen tetap privat sesuai kebutuhan tugas |
| Status verifikasi | Wajib terpisah dari status program/realisasi; Draf bukan capaian terverifikasi |
| Penanggung jawab pencatatan | Wajib mengacu penugasan aktif; pemilik/pengesah field dan sumber dapat berbeda |
| Jadwal/target/indikator wajib per program | BELUM FINAL; tidak menetapkan frekuensi, angka target atau bobot capaian tanpa persetujuan |

Periode sebelum dan sesudah mempunyai observasi/referensi masing-masing; perubahan nilai bukan bukti sebab-akibat pembinaan. Omzet turun tetap turun, outcome belum diukur bukan tercapai atau angka nol. Sertifikasi merujuk penerbit sah dan dokumen/statusnya; SIJAI mencatat, bukan mengklaim menerbitkan.

### Empat ukuran rekap dan pencegahan duplikasi

- **UMKM unik:** identitas Unit Usaha kanonik yang memenuhi cakupan/status layanan, satu unit dihitung sekali pada cakupan itu.
- **Orang unik:** identitas Orang kanonik yang memenuhi cakupan/status partisipasi, bukan jumlah NIK di tabel program.
- **Partisipasi:** ID partisipasi sah sesuai sesi/peran/konteks, tidak runtuh menjadi jumlah Unit atau Orang.
- **Kejadian layanan:** ID kejadian nyata yang memenuhi status/cakupan, satu kejadian bersama banyak penerima dihitung sekali.

Setiap rekap menyebut periode, cakupan, status, objek dan versi data/resolusi identitas. Deduplikasi orang–sesi–peran–konteks benar-benar sama tidak boleh melarang pengulangan sah pada sesi/program lain. Batas penerima berulang memerlukan aturan administratif sah per program. Kunci teknis detail belum dipilih.

Contoh sintetis Ahmad/Budi mewakili satu unit di dua kegiatan: UMKM unik 1, Orang unik 2, partisipasi 2. Jangan mengisi jumlah kejadian dari perkalian peran OPD/penerima atau menganggap daftar sama dengan hadir/realisasi. Merge/split KB-13 mempertahankan ID kejadian/asal dan alokasi riwayat; audit asli tidak diubah.

### Sensitivitas, sumber historis dan rincian terbuka

Pemilik field memakai katalog kewenangan yang dapat dikonfigurasi, bukan hardcode OPD. Satu penanggung jawab record program bukan pemilik semua field atau Pengendali secara hukum. Tujuh contoh fungsi akses ada pada [matriks](matriks-kewenangan-mvp-kb09.md), seluruhnya usulan. NIK/dokumen/ekonomi dan bukti privat dilindungi KB-11; unduh/ekspor memerlukan izin tersendiri, pencatatan/status/koreksi/pengesahan diaudit KB-12.

Data program historis mengikuti staging/pemetaan/validasi/pengesahan KB-15 pada fase lanjutan, bukan impor program MVP. Bila nominal bantuan historis relevan dan dasar pemrosesan sah, catat hanya sebagai fakta layanan dengan sumber/periode/verifikasi yang diperlukan; bukan saldo, buku kas, instruksi bayar atau kewenangan penyaluran dana. Tidak merancang transaksi pembayaran/akuntansi/pengadaan/seleksi otomatis.

OPD/petugas, program pertama, nomenklatur/kode, sasaran, hak pencatatan/pengesahan, indikator wajib, jadwal/bukti, SOP penerima dan JRA/retensi belum final. Hosting tetap BELUM DAPAT DINILAI; rincian KB-17, kapasitas KB-18 serta izin implementasi/data nyata tetap terbuka. 30 T16 pada [keputusan](06-keputusan-bisnis.md) adalah rencana, bukan tes yang dijalankan.

## Metadata konseptual operasi dan pemulihan — KB-17

Model B kebijakan/spesifikasi dokumentasi disepakati, bukan jadwal, teknologi atau skema final. Nama berkas tetap untuk kesinambungan; tambahan operasi tidak menjadikan modul program atau impor baru bagian MVP. Field/kewajiban terdahulu dipertahankan. Istilah metadata berarti catatan tentang sumber/proses/hasil yang diperlukan agar operasi dapat ditelusuri.

| Fungsi catatan konseptual | Informasi minimum yang direncanakan | Hubungan dan batas |
| --- | --- | --- |
| Himpunan backup dan komponen | ID internal, sumber/lingkup, waktu/titik atau rentang konsistensi, komponen/versi/rujukan manifest, status per komponen, penugasan, sensitivitas/kebijakan retensi | Metadata inventaris, bukan file backup dalam repository atau salinan master UMKM. Daftar komponen berulang memakai record terkait |
| Verifikasi backup | ID/rujukan himpunan-komponen, waktu/metode/kriteria, hasil integritas/keterbacaan/kelengkapan/versi, pemeriksa/mandat, bukti privat, temuan/mitigasi | Job sukses berbeda dari hasil verifikasi dan uji restore; pemeriksaan hash saja bukan bebas kompromi |
| Operasi pemulihan dan pengujian | ID, rujukan gangguan/insiden/izin, sumber/titik aman, lingkungan terisolasi, versi/komponen, pelaksana/pemeriksa, waktu, hasil/selisih/keputusan pembukaan | Pakai operasi pemulihan/audit KB-12 yang setara; form 14 isian di tata kelola, tanpa hasil uji fiktif |
| Sasaran pemulihan berversi | ID/versi kebijakan, kelompok layanan, hasil analisis dampak/ketergantungan, prioritas, RPO/RTO usulan/disahkan, dasar/bukti kemampuan, penanggung jawab persetujuan | Nilai target kosong sampai sah; nilai ukur uji referensi terpisah. Bukan angka SLA atau jadwal yang dikarang |
| Peringatan dan insiden operasional | ID, area/sumber/waktu, dampak, pemilik tindak lanjut, mekanisme eskalasi, status, referensi insiden, audit penyelesaian/bukti aman | Pakai peringatan audit/insiden KB-11/KB-12 yang setara; tidak menggandakan kasus pribadi atau kontak nyata |
| Perubahan aplikasi/darurat | ID, permintaan/alasan/dampak, versi/komponen terkait, mandat/persetujuan, rencana eksekusi/pemulihan, hasil verifikasi, tindakan/waktu, evaluasi/audit | Berbeda dari perubahan nilai bisnis/change_set KB-07/KB-08; darurat tetap catatan/mandat dan evaluasi |
| Penanganan selisih pascapemulihan | ID operasi, objek/ID/versi asal, rentang transaksi hilang/terdampak, sumber/rujukan bukti/audit, status pemeriksaan, keputusan berwenang/versi/hasil | Riwayat/keputusan yang setara dipakai ulang; tidak replay semua audit/staging atau mengarang isi transaksi |

Gunakan kembali penugasan/kewenangan, sumber/bukti privat, versi/keputusan, peringatan/insiden dan operasi pemulihan KB-11/KB-12/KB-13/KB-15 yang setara. Ini bukan kewajiban tujuh tabel baru, pembuatan file teknis atau pencatatan hasil server yang belum ada. Rujukan kunci/konfigurasi hanya metadata kebijakan/versi/mandat aman; **tanpa nilai password/token/kunci/.env/kredensial atau isi backup**.

[Arsitektur](02-arsitektur-awal.md) mencatat sepuluh kelompok komponen: database induk, hubungan pihak-usaha, lokasi/kegiatan/produk/profil, keputusan/koreksi, klasifikasi/sumber/periode/versi, dokumen/metadata, audit operasional, status pekerjaan penting, konfigurasi aman dan artefak rilis/dependensi. Himpunan/titik/versi konsistensinya harus dapat ditelusuri lintas komponen, bukan database saja.

[Tata kelola](04-tata-kelola-data.md) memuat 16 langkah, formulir 14 isian, delapan kelompok RPO/RTO dengan target kosong, serta 13 area monitoring. Hasil uji/hasil ukur/persetujuan **belum diisi**. Status rencana, eksekusi teknis, verifikasi backup, kelengkapan restore, pemeriksaan audit dan keputusan pembukaan dipisahkan; tidak menetapkan daftar status final atau mengisi Lulus/Terpenuhi berdasarkan template.

Dokumen/bukti operasi sensitif mengikuti KB-11/retensi sah. Hak melihat/mengunduh backup berbeda dari menjalankan/verifikasi/menyetujui restore atau mengesahkan field bisnis. Operasi pemulihan memakai event baru, ID audit asli tetap, jejak selisih/keputusan tidak dihapus. Riwayat koreksi bisnis bukan backup dan salinan audit bukan salinan lengkap nilai profil.

Kanonik/alias/relasi/periode/versi KB-13, draf/staging KB-15 dan program fase lanjutan KB-16 tetap konteks aslinya saat pulih. Cegah hak dicabut hidup kembali dan pekerjaan terulang; tindakan atas selisih transaksi sah memerlukan sumber/versi/kewenangan, tanpa rekonstruksi otomatis nilai dari event yang tidak lengkap.

Nomor target/jadwal/retensi/teknologi/kunci/OPD/pengelola/SLA/zona waktu/SOP belum final. JRA Sinjai perlu bukti/penetapan sah, hosting BELUM DAPAT DINILAI, angka dan bukti kapasitas KB-18 belum final dan tidak ada izin server/data nyata. 30 T17 adalah spesifikasi mendatang pada [keputusan](06-keputusan-bisnis.md), bukan pengujian teknis yang sudah dijalankan.

## Metadata nilai kapasitas dan cakupan ukuran — KB-18

Model C tidak mengubah field/profil/entitas bisnis terdahulu. [Model kapasitas terpusat](09-perencanaan-kapasitas.md) menjadi rujukan 18 kelompok volume dan seluruh parameter/rumus/hasil contoh; kamus ini hanya menambahkan arti metadata agar kategori dan asal angka dapat ditelusuri. Ini rancangan catatan dokumentasi, bukan tabel/migrasi atau fitur aplikasi baru.

| Metadata rancangan | Arti/kewajiban konteks |
| --- | --- |
| Identitas/versi model dan parameter | Menautkan perubahan asumsi/rumus/hasil tanpa menulis ulang versi lama |
| Kategori nilai | FAKTUAL TERVERIFIKASI, ASUMSI PERENCANAAN, PROYEKSI, HASIL PENGUJIAN, BELUM DIKETAHUI; kategori bukan status verifikasi profil UMKM |
| Nilai/ketidaktersediaan | Angka atau status belum diketahui; kosong bukan nol dan bukan hasil uji lulus |
| Satuan dan konvensi | Record unik/hubungan/byte/KB/MB/GB/laju/durasi/periode jelas; model penyimpanan desimal |
| Definisi/cakupan objek | Orang, Badan, Unit, relasi, historis, komponen dan lingkungan dibedakan; Unit unik tidak sama jumlah record fisik |
| Sumber dan tanggal | Fakta menautkan sumber/tanggal yang relevan; asumsi menautkan lampiran/keputusan, bukan disebut statistik resmi |
| Metode dan pihak verifikator | Wajib untuk klaim FAKTUAL TERVERIFIKASI; peran sah/bukti perlu ditetapkan, tidak menamai OPD sepihak |
| Parameter/rumus/horizon/ketergantungan | Wajib pada PROYEKSI; pertumbuhan tiap jenis tidak otomatis sama |
| Lingkungan/profil/metode/izin uji | Wajib untuk HASIL PENGUJIAN beserta tanggal/pelaksana/kriteria/konfigurasi; belum tersedia sekarang |
| Cakupan agregat dan pengecualian | Apakah relasi/produk/histori/audit/indeks/overhead/metadata/temporer sudah masuk, sehingga tidak dijumlah ulang |
| Komponen/lingkungan alokasi | Produksi, salinan audit berkontrol independen, backup/restore dan ruang proses dibedakan; bukan master UMKM terpisah |
| Persetujuan/pemeriksa/riwayat | Usulan, keputusan angka/target/alokasi dan bukti dihubungkan sesuai mandat; dokumen bukan izin server |

Gunakan struktur sumber/versi/rujukan bukti/operasi/peringatan yang setara bila kelak relevan dan diizinkan. Tidak menambah NIK, kredensial, rincian server sensitif atau data pribadi untuk menghitung kapasitas.

Agregat data terstruktur contoh sudah mencakup relasi/produk sederhana; rincian menggantikan bagian setara. Dokumen berkas dan metadata tidak dihitung dua kali; audit operasional dikeluarkan dari komponen database bisnis untuk akuntansi walau ada pada database aplikasi yang sama. Audit tahunan aliran, berbeda dari stok tersimpan menurut retensi sah. Histori/versi/kanonik/alias tetap punya biaya yang belum tentu masuk agregat.

Parameter Badan/Kegiatan/hubungan/data sektoral/retensi/overhead dan pertumbuhan tidak otomatis diturunkan dari Unit. Rasio contoh bukan aturan bisnis; jumlah lokasi bukan jumlah cabang yang selalu menjadi Unit. Program KB-16 fase lanjutan, bukan fitur MVP baru.

Semua model keputusan dipilih pada tingkat masing-masing; fakta ukuran/target/kuota/retensi/JRA/kewenangan/izin tetap belum final. Hosting/kapasitas akhir **BELUM DAPAT DINILAI**; 30 T18 pada [keputusan](06-keputusan-bisnis.md) merupakan rencana, bukan load test atau hasil ukur.

## Status dan metadata agregasi berbasis cakupan — DT-007

Label berikut berasal dari pemilik produk, **konseptual, bukan enum database/transisi teknis final**. “Disahkan” berbeda dari “Memenuhi syarat/persyaratan”. Tidak mengganti keputusan field/ekonomi/produksi/NIB atau status kasus KB-08 dengan status agregasi.

| Komponen | Label konseptual yang ditetapkan | Arti dan batas |
| --- | --- | --- |
| Registrasi induk | Draf; Menunggu pemeriksaan; Disahkan; Perlu perbaikan | Keputusan registrasi oleh verifikator sah berbeda dari pembuat; bukan pengesahan NIB/seluruh field/produk/sektor |
| Field | Belum diisi; Menunggu verifikasi; Disahkan; Ditolak/perlu koreksi; Konflik | Status/keputusan melekat nilai atau versi yang dinilai; nilai efektif resmi dibedakan dari draf/usulan baru |
| Profil sektoral | Belum dimulai; Parsial; Memenuhi syarat verifikasi lingkup; Perlu perbaikan | Penilaian sektor/lingkup sendiri, tidak otomatis sah dari registrasi induk atau sektor lain |
| Agregasi | Memenuhi persyaratan yang berlaku; Belum memenuhi persyaratan; Belum dapat dinilai | Hasil penilaian objek, lingkup/tahap dan versi aturan tertentu, bukan keputusan pengesahan baru |

Agregasi adalah hasil penilaian pada lingkup dan versi aturan tertentu. **Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L)**. Katalog minimum sah/berversi/tanggal efektif menjadi prasyarat; tidak tersedia/daftar kosong tanpa aturan eksplisit menghasilkan Belum dapat dinilai. Field wajib yang diketahui belum sah menghalangi pemenuhan; field pilihan kosong sendiri tidak otomatis menghalangi.

| Metadata konseptual hasil | Keterangan |
| --- | --- |
| Objek internal/lingkup/tahap | Menentukan apa yang dinilai, bukan satu hasil global lintas semua sektor |
| Identitas/versi/tanggal efektif katalog dan dasar sah | Katalog yang dipakai harus dapat ditelusuri; minimum konseptual DT-003 A3/B1/C2 sudah dipilih; rincian katalog operasional/sektoral DT-003/009/033 belum final |
| Referensi field/record/versi efektif/keputusan | Tidak menyalin master; kandidat baru dan pengesahan versi lama berbeda |
| Dependensi/penghalang relevan | Konflik aktif, bukti/periode/kewenangan sesuai aturan sah; tidak membuat batas kedaluwarsa/persentase sendiri |
| Kesimpulan/alasan/waktu/konteks dan hasil sebelumnya | Jejak penilaian, bukan event pengesahan baru; hasil lama tidak ditulis ulang |
| Hak/klasifikasi alasan dan referensi audit | Ringkasan, alasan mentah, asal/bukti dan ekspor diperiksa berbeda menurut KB-11/KB-12 |

Nilai resmi yang masih efektif tetap rujukan bila hanya ada usulan/draf baru; usulan tidak otomatis membatalkan nilainya. Konflik aktif relevan tetap menahan kesimpulan positif. Perubahan versi efektif/katalog/bukti/periode memicu penilaian ulang lingkup terkait, tanpa pengesahan ganda atau mengesahkan nilai baru memakai keputusan lama.

Alih pemilik field sah menjaga riwayat keputusan/kewenangan; label field pada versi kandidat tidak menimpa status versi resmi lama. Katalog belum cukup menilai tidak dianggap gagal pasti ataupun lulus. Registrasi induk tetap perlu keputusan verifikator sah berbeda dari pembuat, tidak otomatis mengesahkan NIB/produk/sektor.

Field W/K/O/B pangan tetap sebagaimana sumber; W sektoral tidak otomatis minimum registrasi awal. Model DT-007 tidak menetapkan daftar minimum riil/OPD, enum/transisi, konversi/periode/bukti. DT-003 DISEPAKATI Model B A3+B1+C2; DT-005 kini DISEPAKATI C+F+H2 pada model, rincian OPD/mandat nyata MENUNGGU PENETAPAN; DT-006 MENUNGGU PENETAPAN, DT-011 C+D1+M1+E1 MODEL DIPILIH dengan catatan konsistensi/implementasi TERBUKA, DT-009 C+B2+V2+K2 kini DISEPAKATI pada model, standar bukti operasional masih MENUNGGU PENETAPAN; DT-033 DIUSULKAN dan DT-019 DITUNDA tetap. Rincian katalog operasional/bukti tetap perlu penetapan. Data ekonomi/produksi/NIB dan kewajibannya tidak diubah.

[Keputusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) memuat 28 RB/28 T dan 15 kasus batas; semua T rencana. Tidak membuat tabel/kolom/implementasi atau memakai data nyata. Hosting/kapasitas dan G0–G7 tetap status sebelumnya.

## Katalog minimum registrasi DT-003 A3+B1+C2

Pembaruan **6 November 2026**, berdasarkan [DT-003](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2). Minimum berikut mengikat draf registrasi baru, **bukan kewajiban semua field W sektor pada pendataan awal**. Nama teknis/tabel/enum final belum ditetapkan.

| Unsur/rujukan konseptual | Kewajiban tahap A3 | Hubungan dengan B1/C2 dan batas pemetaan |
| --- | --- | --- |
| PIHAK, jenis, HUBUNGAN_PIHAK_USAHA/peran | Minimal satu pihak berjenis jelas; peran dicatat, bukan otomatis pemilik | Identitas/peran/kepemilikan klaim berbeda; satu pihak banyak Unit dan satu Unit banyak pihak |
| LOKASI_USAHA | Minimal satu lokasi usaha yang dapat dibedakan | Alamat pemilik sumber historis tidak memenuhi secara otomatis; cabang mengikuti KB-01 |
| KEGIATAN_USAHA | Minimal satu kegiatan yang dikenali | Label Kuliner bukan otomatis pengolahan pangan; kode/referensi/versi tidak dikarang |
| Penanda UNIT_USAHA | Wajib untuk mengenali usaha pada draf | Bukan NIB/NIK sebagai ID internal, format rinci belum final |
| Sumber informasi | Wajib dan dapat ditelusuri | Sumber historis/versi/record bukan bukti pengesahan atau Unit unik |
| Petugas dan waktu pencatatan | Wajib | Petugas ditunjuk; tidak menebak petugas aplikasi dari nama pembuat Excel |
| NIB/status NIB | **Nomor NIB tidak wajib** pada draf, pengajuan maupun pengesahan induk | Pencatatan status tetap MVP; nomor pada Excel bukan bukti formal telah diperiksa |
| Bukti formal relevan | Tidak dijadikan prasyarat simpan draf A3 | Bukti utama B1 menurut objek/klaim; ketidakcukupan menghalangi pengesahan, standar rinci DT-009 belum final |
| Paket minimum induk/keputusan verifikator | Bukan pengesahan otomatis dari A3 | C2 perlu paket/katalog sah dan verifikator berbeda/mandat aktif; tidak mengesahkan seluruh field/sektor |

Kode W/K/O/B dan field sektor/ekonomi lama tetap. Draf yang belum lengkap untuk pengajuan/sektor tidak sama dengan draf registrasi baru tanpa A3. Jalur baru: petugas → A3 → draf → B1 → C2; historis melalui staging privat/pemetaan/validasi/kandidat lebih dahulu dan pelengkapan A3 sebelum jalur resmi. Staging tidak menjadi draf resmi/master kedua atau masuk statistik terverifikasi; belum A3 hanya ditampung sesuai dasar/izin/retensi sah.

DT-007 C tetap: induk/field/sektor/agregasi terpisah, katalog operasional wajib sah/berversi/efektif, bukan lulus dari daftar kosong. Field OPD lain tetap memerlukan pemilik sah KB-04. Rincian OPD/mandat aktual DT-005, DT-006/009/011/019/033 dan lingkup impor DT-032 tetap terbuka sesuai sumber; tidak ada penetapan resmi atau skema database dari tabel ini.

[Lampiran 11](11-audit-baseline-data-historis.md#pemetaan-field-yang-belum-pasti) mencatat pemetaan yang belum pasti: pihak vs Unit, alamat pihak vs lokasi usaha, peran/kegiatan, jenis izin, ekonomi/periode/satuan, versi/tahun serta asal/petugas. Semua pertanyaan, bukan template impor final. 30 RB/30 T DT-003 lengkap pada keputusan; T belum dijalankan, tidak ada data pribadi per orang atau Excel diproses.

## Dua lapisan katalog kewenangan — DT-005

**6 November 2026:** [DT-005 Model C+F+H2](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2) DISEPAKATI sebagai model bisnis. C berdasar fungsi/mandat, F per kode field/cakupan/waktu efektif, H2 perubahan melalui penetapan resmi. Nama OPD/mandat nyata dan matriks hak final MENUNGGU PENETAPAN.

### A — katalog definisi field

| Unsur | Definisi dan batas |
| --- | --- |
| Kode entitas | Objek bisnis tempat field didefinisikan, bukan nama tabel fisik |
| Kode field | Kode stabil yang dibedakan menurut objek; rujukan ENTITAS.FIELD |
| Definisi bisnis | Arti/klaim satu nilai, tidak berubah diam-diam |
| Jenis nilai | Teks/referensi/angka/tanggal sesuai arti; ekonomi moneter berbeda jumlah orang |
| Referensi sumber | Asal definisi/rujukan resmi; bukan bukti pemasok memiliki field |
| Sensitivitas | Label/konteks KB-11; kelas final belum ditetapkan |
| Kebutuhan bukti | Objek/klaim bukti; standar detail DT-009/033 belum final |
| Cakupan penggunaan | Objek/tujuan/lingkup pemakaian; bukan hak operasional otomatis |
| Status/versi definisi | Identitas versi dan status yang dapat ditelusuri |

### B — katalog penetapan pemilik

| Unsur | Definisi dan batas |
| --- | --- |
| Kode field | Rujukan kode/versi definisi yang sesuai |
| Fungsi pengampu | Fungsi calon atau yang sah menurut penetapan, dibedakan dari OPD |
| OPD pemilik resmi | MENUNGGU PENETAPAN; tidak diisi dari pemasok/pembuat Excel |
| Dasar mandat | MENUNGGU PENETAPAN; rujukan keputusan sah |
| Cakupan wilayah/sektor/entitas | Jika relevan dan sah; irisan cakupan wajib diperiksa |
| Tanggal efektif | Awal berlakunya keputusan organisasi, bukan tanggal konfigurasi |
| Masa berlaku | Rentang kewenangan menurut mandat sah, tanpa angka tebakan |
| Identitas versi penetapan | Versi/riwayat tidak ditimpa untuk mengubah sejarah |
| Status penetapan | Membedakan usulan dan penetapan yang sah/berlaku; enum teknis belum final |
| Fungsi pemberi mandat | MENUNGGU PENETAPAN, bukan otoritas admin otomatis |
| Referensi audit | Jejak keputusan/peralihan/eksekusi KB-12 |
| Prosedur peralihan | H2, hak lama/baru dan penanganan pengajuan tertunda |

Dua lapisan berhubungan lewat kode/versi definisi yang sesuai, bukan salinan nilai master per OPD. Satu kode dapat punya riwayat penetapan, tetapi **pada satu cakupan/waktu efektif hanya satu OPD aktif**. Cakupan umum dan khusus yang beririsan tidak boleh sama-sama mengesahkan nilai yang sama. Bukan cukup membedakan nama cakupan; pemetaan/mandat nyata perlu ditetapkan, tanpa prioritas tumpang tindih buatan pengembang.

Penugasan petugas terpisah dari penetapan OPD; masa tugas/tindakan/tujuan/cakupannya wajib cocok saat aksi. ID metadata otomatis dicatat sistem atas tindakan sah, bukan pemilik/pengesah bisnis baru. Katalog berubah tidak otomatis mengesahkan data atau memberi akses luas. Kebutuhan bukti dan kelas sensitivitas final tetap DT-009/011/033 sesuai konteks.

### Kode acuan bagi atribut yang sebelumnya ditulis dalam prosa

Kode berikut **calon penamaan konseptual** agar usulan per field dapat dibahas, bukan kolom/tabel fisik baru, tambahan kewajiban W atau fakta bahwa pemetaan historis telah dipastikan. Atribut yang sudah ber-backtick sebelumnya mempertahankan nama/arti; usulan fungsi/kode bukan penetapan organisasi.

| Kode acuan | Rujukan arti dalam kamus sebelumnya | Jenis/batas |
| --- | --- | --- |
| ORANG.identitas_resmi | Identitas resmi terlindungi | Hanya jika kebutuhan/dasar sah, tidak membuat NIK wajib universal |
| ORANG.kontak | Kontak pihak | Terlindungi, bukan ID internal |
| UNIT_USAHA.tahun_mulai | Tahun mulai | Ketelitian/validasi sumber belum final |
| UNIT_USAHA.uraian_usaha | Uraian usaha | Teks umum, bukan kode KBLI |
| HUBUNGAN_PIHAK_USAHA.mulai_berlaku | Tanggal mulai hubungan | Menjaga riwayat/peran pihak |
| HUBUNGAN_PIHAK_USAHA.akhir_berlaku | Tanggal akhir hubungan | Kondisional ketika diakhiri |
| HUBUNGAN_PIHAK_USAHA.referensi_bukti | Bukti hubungan | Referensi privat; standar DT-009 belum final |
| HUBUNGAN_PIHAK_USAHA.status_verifikasi | Status verifikasi hubungan | Tidak disamakan dengan status seluruh induk |
| LOKASI_USAHA.jenis_lokasi | Jenis lokasi | Cabang mengikuti KB-01 |
| LOKASI_USAHA.alamat_atau_area_operasi | Alamat/area operasional | Bukan otomatis alamat pemilik |
| LOKASI_USAHA.kode_wilayah | Referensi wilayah | Sumber sah/lingkup belum ditetapkan |
| LOKASI_USAHA.koordinat | Koordinat jika diperlukan | Tidak membuat koordinat wajib pada draf baru |
| LOKASI_USAHA.referensi_cabang | Bukti keterkaitan cabang | Tidak membuat Unit baru per lokasi |
| KEGIATAN_USAHA.uraian_kegiatan | Jenis/uraian kegiatan dasar | Dibedakan pemeriksaan kode/versi KBLI |
| PENCATATAN_NIB.subjek_rujukan | Subjek NIB | Bukan NIB sebagai ID Unit |
| PENCATATAN_NIB.tanggal_pemeriksaan | Tanggal pemeriksaan referensi | Tidak berarti izin telah diperiksa dari angka Excel |
| REGISTRASI_INDUK.status_registrasi | Status draf/pengajuan/pengesahan | Nama konsep proses yang telah ada, bukan master baru; enum belum final |
| REGISTRASI_INDUK.referensi_keputusan | Keputusan B1/C2 | Verifikator berbeda dari pembuat, mandat aktif |
| DATA_EKONOMI_BERPERIODE.aset | Aset pada laporan historis/mandat DT-005 | Konsep input terpisah dengan definisi/cakupan/periode/satuan; bukan modal otomatis |
| DATA_EKONOMI_BERPERIODE.tenaga_kerja | Tenaga kerja pada sumber/mandat DT-005 | Hitungan integer orang per definisi/periode; bukan nilai uang |

Dua nama objek proses/ekonomi pada tabel hanya kode konsep untuk kebutuhan matriks. Tidak membangun modul/tabel baru atau memperluas MVP. **Modal dan omzet/penjualan** tetap melalui jenis indikator dan nilai moneter pada PENGUKURAN_EKONOMI KB-10, dengan definisi/cakupan/periode/sumber/verifikasi. Aset tidak otomatis modal yang layak klasifikasi, tenaga kerja tidak dimasukkan ke nilai moneter. Kewajiban ekonomi/klasifikasi tetap menurut aktivasi DT-031, tidak menjadi syarat tambahan A3.

`kapasitas_produksi` dan `realisasi_produksi` adalah makna pengukuran melalui jenis/nilai, satu produk/satuan/periode/sumber/verifikasi per record, bukan kolom master permanen. Penugasan pada metadata/ID tidak memberi petugas hak mengedit jejak lama.

[Matriks 96 kode acuan](matriks-kewenangan-mvp-kb09.md#katalog-usulan-per-kode-field--dt-005) merinci usulan Registri UMKM/Perizinan/Perindustrian/Data Ekonomi UMKM/Klasifikasi. U/I/P lama tetap usulan ringkas; rujukan rinci memperjelas per field dan tidak menjadikan fungsi sebagai ID OPD di kode aplikasi. Referensi KBLI/katalog aturan tetap sumber/versi sah dan mandat pengelola belum ditetapkan.

A3+B1+C2 DT-003, DT-007 C, field W/K/O/B, KB-01–18 dan cakupan MVP tetap. Pengesahan C2 bukan semua field/sektor. DT-005 kini final pada model, penetapan aktual masih terbuka; DT-004/006/008/009/011/012/019/033 tidak ditutup. Tidak ada data historis/Excel diproses, perubahan hak operasional atau tabel/migrasi dibuat.

## Katalog bukti per kelompok klaim — DT-009

**6 November 2026:** Model DT-009 **C+B2+V2+K2 DISEPAKATI**, tetapi seluruh kategori bukti utama/pendukung berikut **USULAN/MENUNGGU PENETAPAN**. Tabel bukan daftar dokumen wajib resmi dan tidak mewajibkan setiap UMKM memiliki semua dokumen. BKT-01–BKT-16 hanya penanda baris katalog, bukan nomor KB/DT baru atau keputusan tambahan.

Katalog memakai dua tabel yang disambungkan melalui penanda BKT yang sama. Setiap kelompok harus dibaca bersama metadata umum dan metadata pengendali pada tabel kedua. Nama field merujuk [kamus/matriks DT-005](matriks-kewenangan-mvp-kb09.md#katalog-usulan-per-kode-field--dt-005); `DATA_EKONOMI_BERPERIODE` tetap kode konsep, bukan tabel baru.

### Objek, tujuan, kategori dan relevansi

| Penanda | Objek/kelompok klaim | Identitas field terkait | Tujuan pemeriksaan | Kategori utama — USULAN | Kategori pendukung — USULAN | Kriteria relevansi |
| --- | --- | --- | --- | --- | --- | --- |
| BKT-01 | Identitas Orang | ORANG.identitas_resmi; ORANG.nama_orang | Membuktikan subjek identitas yang dicatat | Dokumen formal identitas yang relevan — MENUNGGU PENETAPAN | Keterangan/rujukan lain yang sah — MENUNGGU PENETAPAN | Subjek, sumber, versi dan konteks sesuai; tidak otomatis hubungan usaha |
| BKT-02 | Identitas Badan Usaha | BADAN_USAHA.nama_badan_usaha; bentuk_badan_usaha | Membuktikan identitas/bentuk badan yang dicatat | Dokumen formal badan yang relevan — MENUNGGU PENETAPAN | Keterangan pengurus/rujukan sah — MENUNGGU PENETAPAN | Badan, versi dan klaim sesuai; pengurus tidak otomatis pemilik pribadi |
| BKT-03 | Hubungan pihak–Unit Usaha | HUBUNGAN_PIHAK_USAHA.peran; mulai_berlaku; akhir_berlaku; referensi_bukti | Membuktikan peran/masa hubungan pada Unit | Dokumen formal hubungan atau mandat yang relevan — MENUNGGU PENETAPAN | Keterangan pihak/rekam operasional yang sah — MENUNGGU PENETAPAN | Pihak, Unit, peran, periode dan cakupan sesuai; identitas sendiri tidak cukup |
| BKT-04 | Nama/identitas Unit Usaha | UNIT_USAHA.nama_usaha; unit_usaha_id | Membuktikan usaha yang dimaksud dalam kesatuan operasional | Dokumen formal relevan untuk klaim Unit — MENUNGGU PENETAPAN | Rekam kegiatan/penanda operasional sah — MENUNGGU PENETAPAN | ID internal, subjek usaha dan kesatuan operasional konsisten; nama sama bukan identitas sama |
| BKT-05 | Lokasi usaha | LOKASI_USAHA.alamat_atau_area_operasi; jenis_lokasi; referensi_cabang | Membuktikan lokasi operasional dan keterkaitan cabang | Bukti lokasi yang ditetapkan relevan menurut klaim — MENUNGGU PENETAPAN | Catatan pengamatan/keterangan operasional sah — MENUNGGU PENETAPAN | Tempat/area, hubungan Unit/cabang dan tanggal efektif sesuai; bukan otomatis alamat pemilik |
| BKT-06 | Kegiatan/klasifikasi | KEGIATAN_USAHA.uraian_kegiatan; RELASI_KEGIATAN_KBLI.kode_kbli; versi_kbli | Menilai kegiatan nyata dan kecocokan referensi | Bukti kegiatan dan rujukan klasifikasi resmi yang relevan — MENUNGGU PENETAPAN | Uraian/pengamatan proses menurut sumber sah — MENUNGGU PENETAPAN | Kegiatan/Unit, kode-versi/peran/periode tepat; label sektor bukan kode otomatis |
| BKT-07 | Referensi NIB/perizinan | PENCATATAN_NIB.nomor_nib; subjek_rujukan; status_verifikasi_nib | Menilai pencatatan referensi izin yang diterima sah | Dokumen formal/pernyataan referensi penerbit yang relevan — MENUNGGU PENETAPAN | Rujukan pemeriksaan sah dengan waktu/sumber — MENUNGGU PENETAPAN | Subjek/jenis izin/versi/cakupan dan hasil pemeriksaan cocok; angka Excel tidak cukup |
| BKT-08 | Produk/merek | PRODUK.nama_produk; merek_produk; kategori_produk | Membuktikan produk/merek yang dicatat pada profil | Catatan/dokumen produk relevan menurut standar yang kelak sah — MENUNGGU PENETAPAN | Keterangan/rekam produksi produk — MENUNGGU PENETAPAN | Produk/profil/Unit dan klaim merek tepat; bukan putusan hak merek atau Unit baru |
| BKT-09 | Bahan baku | BAHAN_BAKU_PRODUK.bahan_baku_utama; sumber_bahan_baku | Menilai bahan pada produk yang benar | Catatan/dokumen penggunaan atau sumber bahan yang relevan — MENUNGGU PENETAPAN | Keterangan/rekam proses sesuai izin — MENUNGGU PENETAPAN | Satu bahan per record terkait produk, sumber/versi/periode sesuai klaim |
| BKT-10 | Peralatan | PERALATAN_PROFIL.jenis_peralatan; tingkat_teknologi | Menilai jenis/teknologi alat pada profil | Catatan/dokumen atau pemeriksaan alat relevan — MENUNGGU PENETAPAN | Keterangan teknis/rekam operasional sah — MENUNGGU PENETAPAN | Alat/profil, kondisi/waktu dan klaim teknologi sesuai; referensi belum final |
| BKT-11 | Kapasitas produksi | PENGUKURAN_PRODUKSI.jenis_pengukuran; nilai_produksi; satuan_pengukuran; periode_mulai; periode_akhir | Menilai kapasitas untuk produk/periode/cakupan tertentu | Catatan/perhitungan kapasitas yang dapat ditelusuri — MENUNGGU PENETAPAN | Catatan alat/proses dan keterangan sah — MENUNGGU PENETAPAN | Produk, angka numerik, satuan, periode, sumber dan jenis kapasitas tepat; bukan realisasi |
| BKT-12 | Realisasi produksi | PENGUKURAN_PRODUKSI.jenis_pengukuran; nilai_produksi; satuan_pengukuran; sumber_data; tanggal_pengukuran | Menilai produksi aktual per produk/periode | Catatan produksi aktual yang dapat ditelusuri — MENUNGGU PENETAPAN | Rekam proses/keluaran relevan yang sah — MENUNGGU PENETAPAN | Produk/nilai/satuan/periode/sumber/status sesuai; tanggal observasi bukan pengganti periode |
| BKT-13 | Modal | PENGUKURAN_EKONOMI.jenis_indikator; nilai; cakupan_penilaian; periode_mulai | Menilai input modal menurut tujuan/posisi/cakupan | Dokumen/catatan modal yang relevan dan dapat ditelusuri — MENUNGGU PENETAPAN | Rincian sumber/komponen sesuai izin — MENUNGGU PENETAPAN | Arti modal KB-10, pengecualian tanah/bangunan dan periode/cakupan tepat; aset bukan modal otomatis |
| BKT-14 | Aset | DATA_EKONOMI_BERPERIODE.aset | Menilai aset menurut definisi/cakupan/periode | Dokumen/catatan aset relevan yang dapat ditelusuri — MENUNGGU PENETAPAN | Rincian komponen/keterangan sah — MENUNGGU PENETAPAN | Definisi/satuan/posisi/sumber jelas, tidak dijumlah atau disamakan modal/omzet |
| BKT-15 | Omzet | PENGUKURAN_EKONOMI.jenis_indikator; nilai; mata_uang; periode_mulai; periode_selesai | Menilai hasil penjualan menurut tujuan/periode/cakupan | Dokumen/catatan penjualan relevan yang dapat ditelusuri — MENUNGGU PENETAPAN | Rekam transaksi/ringkasan sumber sah sesuai izin — MENUNGGU PENETAPAN | Definisi penjualan/periode/mata uang/cakupan sesuai; parsial tidak dianualisasi otomatis |
| BKT-16 | Tenaga kerja | DATA_EKONOMI_BERPERIODE.tenaga_kerja | Menilai jumlah tenaga kerja sesuai cakupan/periode | Catatan tenaga kerja yang relevan dan sah — MENUNGGU PENETAPAN | Ringkasan/keterangan yang dapat ditelusuri — MENUNGGU PENETAPAN | Definisi hitungan orang/periode/Unit jelas; minimalkan identitas pekerja, bukan nilai moneter |

### Risiko, kewenangan, versi dan dampak per kelompok

| Penanda | Risiko/sensitivitas yang harus dinilai | Calon fungsi/pengesah DT-005 | Masa berlaku/versi katalog | Sumber serta versi bukti | Status penetapan standar | Dampak pada DT-007 |
| --- | --- | --- | --- | --- | --- | --- |
| BKT-01 | Salah subjek/identitas pribadi; sensitivitas final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status identitas/induk hanya dalam minimum sah; C2 tetap keputusan berbeda |
| BKT-02 | Salah badan/mandat; data pihak terkait dapat sensitif, final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status klaim badan; tidak mengesahkan semua unit atau pengurus |
| BKT-03 | Sengketa kepemilikan/perwakilan, data pihak ketiga; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status relasi/lingkup terdampak; sengketa relevan menahan hasil positif |
| BKT-04 | Salah Unit/duplikat; sensitivitas menurut konteks, final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status Unit/minimum induk sesuai katalog; tidak merge otomatis |
| BKT-05 | Alamat pribadi/operasional atau keterkaitan cabang; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status lokasi/lingkup terkait; pindah lokasi dinilai menurut periode |
| BKT-06 | Salah klasifikasi/tujuan; sensitivitas konteks, final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Registri UMKM untuk uraian; Klasifikasi untuk kode jika dimandatkan — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Nilai kegiatan/kode per field; tidak mengganti OSS atau semua sektor |
| BKT-07 | Pengenal/status legalitas/pihak terkait; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perizinan — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status referensi izin tersendiri; NIB tidak wajib induk, bukan penerbitan legalitas |
| BKT-08 | Kerahasiaan usaha/klaim merek; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perindustrian — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status klaim produk/sektor terkait; merek berbeda tidak menambah Unit |
| BKT-09 | Rantai pasok/rahasia usaha; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perindustrian — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status record bahan/lingkup sektor; tidak mengesahkan semua produk |
| BKT-10 | Aset/proses/rahasia usaha; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perindustrian — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status record peralatan/lingkup sektor sesuai katalog |
| BKT-11 | Potensi produksi/rahasia usaha; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perindustrian — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status pengukuran kapasitas saja; satuan berbeda tidak dijumlah tanpa konversi sah |
| BKT-12 | Kinerja/rahasia usaha; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Perindustrian — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status realisasi/periode terkait; koreksi tidak menimpa periode lain |
| BKT-13 | Keuangan/pihak terkait; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Data Ekonomi UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status input modal saja; bukan pengesahan skala atau syarat baru A3 |
| BKT-14 | Keuangan/aset pihak; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Data Ekonomi UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status input aset menurut katalog; kode konseptual DT-005, bukan modul baru |
| BKT-15 | Keuangan/mitra transaksi; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Data Ekonomi UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status input penjualan saja; kategori skala perlu keputusan tersendiri KB-10 |
| BKT-16 | Informasi pekerja/pihak ketiga; final DT-011; tingkat/ambang operasional MENUNGGU PENETAPAN | Data Ekonomi UMKM — USULAN; petugas pemilik field aktif setelah penetapan/mandat sah | Identitas versi, awal/akhir efektif sesuai keputusan sah; rincian MENUNGGU PENETAPAN, tanpa durasi tebakan | Referensi sumber/versi, waktu penerimaan, waktu/periode yang dibuktikan, hubungan klaim; belum ada bukti nyata diperiksa | USULAN/MENUNGGU PENETAPAN dokumen/standar kecukupan | Status input tenaga kerja menurut katalog; tidak menetapkan kelayakan program |

Fungsi adalah **calon pengampu**, bukan penunjukan OPD. Field dalam satu kelompok tidak otomatis mempunyai pemilik sama; masing-masing mengikuti kode/cakupan/waktu efektif dan mandat DT-005. Pemeriksa bukti memerlukan hak sesuai tugas; dapat merangkap pengesah bila mandatnya sah dan tidak melanggar pemisahan tugas. Tidak mewajibkan pemeriksa/pengesah kedua untuk seluruh field biasa.

Semua kelompok merujuk objek spesifik, klaim, kode field dan versi nilai yang dinilai, tujuan pemeriksaan, katalog/versi/masa berlaku sah, identitas sumber/versi bukti dan keputusan penilaian. Risiko dan sensitivitas dipertimbangkan per konteks, **bukan ambang angka baru**. Waktu diterima berbeda dari tanggal terbit/berlaku dan periode yang dibuktikan; bukti terlambat tidak diubah tanggal penerimaannya agar tampak sudah ada saat keputusan lama.

B1 DT-003 tetap memakai dokumen formal relevan sebagai bukti utama paket induk. NIB **tidak wajib** untuk draf, pengajuan atau pengesahan induk; bukti formal alternatif harus memenuhi standar sah, bukan cukup keterangan informal yang dianggap otomatis pengganti. Bukti identitas sendiri tidak membuktikan hubungan kepemilikan. Nomor NIB/izin pada Excel bukan bukti telah diperiksa. Usulan kategori sektoral/ekonomi bukan pelonggaran B1 atau kewajiban semua field A3.

### Hasil penilaian bukti konseptual

| Hasil | Arti dan batas |
| --- | --- |
| MEMADAI | Bukti memenuhi standar katalog sah untuk objek/klaim/periode tertentu; **belum pengesahan nilai** |
| PERLU PELENGKAPAN | Ada kekurangan sumber/referensi/unsur yang perlu dilengkapi menurut standar sah |
| TIDAK SESUAI | Tidak relevan terhadap objek/klaim/periode atau tidak memenuhi ketentuan yang berlaku |
| KONFLIK | Bukti/klaim saling bertentangan dan perlu pemeriksaan berwenang |
| BELUM DAPAT DINILAI | Katalog/prasyarat/kewenangan belum cukup sah untuk menilai, bukan lulus dari daftar kosong |

Kelima hasil bukan enum database final, bukan status registrasi/sektor atau status pengiriman audit. Sebuah bukti dapat mendukung beberapa klaim melalui rujukan yang sama; **kecukupan dan izin akses dinilai per klaim**, tidak mengesahkan semuanya atau menyalin file privat berkali-kali sebagai master baru.

Field W/K/O/B dan 96 kode acuan DT-005 tetap; katalog ini tidak mengaktifkan mesin skala DT-031, impor DT-019/032, program atau sektor tambahan. [Keputusan DT-009](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2) memuat 30 RB/30 T, jalur K1–K4/V2 dan kasus batas. Seluruh T belum dijalankan, tidak ada dokumen pribadi nyata atau katalog bukti yang telah dinyatakan sah.

## Metadata klaim, bukti, koreksi dan nilai efektif — DT-009

Semua unsur berikut **metadata konseptual**, bukan tabel/kolom fisik atau penambahan paket. Gunakan fungsi/rujukan yang sudah dirancang untuk sumber, bukti, usulan, versi, keputusan dan audit; jangan membuat salinan master per OPD. Perubahan nama/kode teknis kelak memerlukan rancangan terpisah.

| Kelompok | Unsur yang harus dapat ditelusuri | Batas |
| --- | --- | --- |
| Klaim/target | Identitas objek internal, kode field, versi nilai yang dinilai, kelompok klaim, tujuan dan cakupan | Klaim identitas berbeda kepemilikan; jangan menjadikan NIK sebagai ID internal |
| Bukti | Rujukan bukti privat, sumber/versi, waktu diterima, waktu terbit/berlaku bila ada, periode yang dibuktikan, hubungan ke klaim | Bukan file mentah di log; sumber/penerimaan bukan pengesahan |
| Standar penilaian | Identitas/versi katalog, dasar sah, masa efektif, relevansi/risk/sensitivitas yang dipakai | Jenis dokumen/masa berlaku/ambang operasional belum final; katalog tidak sah → BELUM DAPAT DINILAI |
| Hasil penilaian bukti | Hasil per klaim, alasan, pemeriksa/mandat, waktu serta rujukan bukti/katalog versi | Lima hasil konseptual bukan pengesahan nilai dan bukan enum database |
| Usulan koreksi | Objek/field/versi dasar, kandidat nilai, alasan, jalur K1–K4, status usulan/riwayat, tanggal/periode relevan | Draf/pengajuan/perbaikan bukan nilai resmi; konflik versi tidak otomatis K4 |
| Keputusan koreksi | Persetujuan/penolakan/pembatalan menurut hak, pelaku/mandat/cakupan/waktu, bukti/alasan/versi yang dipakai | Satu pengesah field biasa cukup; pembuat profil awal tetap berbeda dari pengesah C2 |
| Versi/nilai efektif | Rujukan nilai/versi lama dan baru, tanggal/periode fakta, awal/akhir efektif jika sah, waktu pencatatan/persetujuan | Tanggal fakta/efektif tidak diganti tanggal input; berlaku mendatang tidak dimajukan |
| Pembatasan V2 | Target nilai/versi, alasan/otoritas, cakupan penggunaan, rujukan keputusan, waktu/periode dan audit | Bukan hapus nilai; penolakan/pembatalan usulan bukan pemulihan otomatis nilai tidak sah |
| Dampak agregasi | Objek/lingkup/tahap/aturan/versi terkait, hasil/alasan penilaian ulang dan rujukan sebelumnya | DT-007 evaluasi, bukan pengesahan baru; penghalang relevan tetap menahan positif |
| Akses/retensi/audit | Tujuan/dasar, sensitivitas, hak baca/unduh/ekspor/koreksi, retensi/JRA/penahanan sah, referensi event KB-12 | Semua salinan bukti dibatasi KB-11, tanpa angka retensi atau otoritas hukum buatan |

Satu bukti dapat terkait beberapa klaim; simpan rujukan dan penilaian per hubungan klaim, bukan otomatis satu status MEMADAI untuk seluruh objek. Rujukan yang sama tidak memberi izin membuka seluruh isi kepada semua pembaca klaim. Penilaian/pengesahan dibedakan, tanpa mewajibkan dua petugas bagi seluruh koreksi.

Nilai lama hanya rujukan efektif selama masih sah/tidak dibatasi V2. Usulan baru tidak menimpa otomatis; penolakan tidak memulihkan nilai kedaluwarsa/dicabut. Pengukuran berperiode lama yang dibetulkan memakai K3 untuk periode tepat dan mempertahankan jejak asli. Perubahan versi/katalog/bukti/pembatasan dievaluasi pada lingkup terdampak DT-007 sesuai aturan sah, tidak menulis ulang audit lama.

B1 tetap dokumen formal relevan, NIB tidak wajib dan A3/C2 tidak dilonggarkan. K1–K4 adalah koreksi nilai, H2 pergantian OPD tetap DT-005. Field W/K/O/B, 96 kode DT-005, klasifikasi KB-10/aktivasi DT-031 dan MVP tetap. Tidak ada dokumen nyata, akses layanan eksternal, kode, skema, migrasi atau tes aplikasi.

## Metadata izin dan penugasan — DT-011

**C+D1+M1+E1 dipilih**, 6 November 2026, dengan status MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA. Semua unsur berikut konseptual, bukan tabel/migrasi/API/permission database atau data penugasan nyata.

| Kelompok | Metadata yang harus terlacak | Batas |
| --- | --- | --- |
| Pengguna/keterkaitan OPD | Identitas akun internal, status akun, OPD asal/keterkaitan sah, sumber/versi/masa penetapan | Akun berbeda dari Orang/pemilik usaha; tidak membuat akun pelaku |
| Katalog dasar D1 | Identitas/versi/status katalog, fungsi OPD, tindakan/cakupan/tujuan/sensitivitas yang sah, dasar dan tanggal efektif | Paket aktual MENUNGGU PENETAPAN; belum ada katalog bukan alasan mengarang hak, bukan D2 |
| Penugasan/mandat | Pengguna, peran, sumber mandat/dasar, OPD, cakupan, awal/akhir aktif dan pencabutan | Hanya sumber sah/aktif/belum dicabut masuk M1; bukan seluruh pegawai OPD otomatis pengesah |
| Izin asal | Tindakan, entitas/field/objek/wilayah/sektor, tujuan/dasar, sensitivitas/proyeksi, tanggal/masa dan sumber penugasan | Semua batas melekat; jangan menyilangkan atribut antarizin |
| Himpunan M1 | Seluruh izin aktif beserta rujukan/syarat/versi sumber dan bagian permintaan yang didukungnya | Bukan satu penugasan eksklusif sesi; beberapa bagian dapat memakai sumber sah berbeda |
| Larangan tugas | Pembuat/objek induk terkait, larangan eksplisit, pemisahan tugas/konflik peran | Gabungan tidak memberi pengesahan profil awal sendiri atau hak global |
| Kewenangan field | Kode/cakupan/waktu pemilik aktif/versi penetapan H2 dan mandat orang | Model DT-005 tetap; perubahan efektif tidak menulis ulang sejarah |
| Konteks tindakan | Identitas terautentikasi/status akun, tindakan, target/proyeksi, tujuan, waktu dan status konflik/pembatasan | Peran saja tidak cukup; syarat wajib tak tersedia tidak otomatis izin |
| Hubungan E1 | Rujukan baca asal/proyeksi/scope dan turunan unduh/ekspor menurut pilihan E1 | Dicatat otomatis, tetapi **konflik KB-11 TERBUKA/BLOKIR**; bukan metadata yang dianggap menyelesaikan kebijakan |
| Hasil tertunda/penerima | Waktu permintaan/pelaksanaan/penyerahan, penerima sah, versi izin dan status pencabutan pada tahap terkait | Hak pembaca bukan hak semua penerima; file selesai bukan izin menyerahkan |
| Audit keputusan akses | Sumber hak/versi/konteks minimum, hasil/alasan aman dan event relevan KB-12 | Penolakan tidak membocorkan nilai; audit tanpa NIK/token/isi dokumen mentah |
| Prasyarat/konflik | Status paket D1, validasi M1, konflik E1, dasar keputusan lanjutan dan dampak pada G1/G2 | Tidak menutup konflik tanpa keputusan pemilik produk; bukan izin data nyata |

19 label tindakan dan metadata per tindakan tersedia pada [matriks DT-011](matriks-kewenangan-mvp-kb09.md#katalog-19-tindakan--mandat-dan-sasaran). Kode hanya label konseptual. D1 dapat memberi fungsi dasar setelah katalog sah, M1 himpunan seluruh sumber aktif beserta cakupannya. D1 tidak otomatis NIK/sahkan, E1 bukan APPROVE_FIELD dari baca.

KB-11 pada metadata lama tetap memisahkan tindakan; [DT-011](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1) mencatat bahwa otomatis E1 berbenturan, bukan diam-diam mengubah aturan lama/baru. Kategori kelas final, paket dasar, batas ekspor dan mandat nyata belum ditetapkan. Ekspor massal/sensitif tidak dinyatakan siap; kebijakan terkait harus diputus dulu.

96 kode field DT-005, 16 kelompok bukti, V2/K1–K4 DT-009 dan semua W/K/O/B tetap. Tidak menambah field bisnis, nomor keputusan, fitur MVP atau masa retensi. Semua T-DT011 belum dijalankan; tidak ada data pribadi/akun/penugasan, konfigurasi akses, kode/skema/migrasi atau layanan baru.
