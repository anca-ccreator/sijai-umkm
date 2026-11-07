# Keputusan bisnis, hal yang belum final, dan risiko

Tanggal pembaruan: **6 November 2026**. **DT-011 C+D1+M1+E1: MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA. Konflik E1/KB-11 belum selesai dan menahan unduh/ekspor terdampak.** DT-009 serta standar operasionalnya tetap pada tingkat penetapan sebelumnya. DT-003 B A3+B1+C2, DT-005 C+F+H2 dan DT-007 C tetap; seluruh paket T adalah rencana. **KB-01–KB-17 dipertahankan. KB-18 Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal DISEPAKATI sebagai dokumentasi.** Desain satu Registri Induk mencakup Kabupaten Sinjai; MVP registri/pangan tetap, sumber daya awal berdasarkan kebutuhan terverifikasi.

Model seluruh **KB-01–KB-18 telah dipilih pada tingkat yang dinyatakan masing-masing**, bukan seluruh rincian resmi/teknis/izin final. Angka contoh KB-18 adalah ASUMSI, hasil hitung PROYEKSI; hosting dan kapasitas akhir **BELUM DAPAT DINILAI**. Kuota/target/biaya/OPD/PDN/SOP/retensi/RPO/RTO dan izin belum final.

Catatan riwayat: bagian lengkap KB-01–KB-17 dipertahankan sesuai waktu penyusunannya. Pernyataan lama KB-18 terbuka merujuk sebelum model dipilih; angka kapasitas, bukti dan rinciannya tetap belum final. Rujukan perhitungan terpusat pada [model kapasitas KB-18](09-perencanaan-kapasitas.md). Tidak ada perluasan MVP, akses server, implementasi atau uji beban.

Prioritas **P0** berarti model beserta rincian minimum untuk lingkup terkait harus siap sebelum implementasinya; model KB-01–KB-08 sudah dipilih, sedangkan penetapan dan rincian terbukanya tetap perlu diselesaikan. Cakupan awal dan izin instalasi harus jelas sebelum pemasangan proyek. **P1** berarti harus selesai sebelum fitur terkait dibangun atau sebelum uji pengguna. **P2** berarti dibahas hanya jika masuk cakupan tahap berikutnya.

## Pintu masuk konsolidasi terkini

[Baseline konsolidasi KB-01–KB-18](10-baseline-konsolidasi-kb01-kb18.md) adalah ringkasan terkini untuk keputusan, batas MVP, KA-01–KA-09, DT-001–036, sembilan epic dan G0–G7. Register dan seluruh rumusan KB/RB/T di bawah **dipertahankan**, bukan dipilih ulang atau disalin menjadi aturan baru. Rincian final/terbuka ditelusuri pada baseline dan sumbernya.

Frasa lama “belum diputuskan/terbuka” pada riwayat dan ringkasan penetapan terdahulu dibaca menurut tingkat rincian/waktu: seluruh model kini DISEPAKATI, tetapi organisasi/SOP/bukti/angka/izin belum otomatis final. Larangan merge umum lama dibaca bersama prasyarat/mandat KB-13, tanpa mengaktifkan historis berisiko. Pengesahan awal tidak memberi hak semua field. DT-007 Model C tetap DISEPAKATI. DT-003 kini DISEPAKATI Model B A3+B1+C2 pada 6 November 2026; rincian katalog operasional/bukti/mandat/enum/transisi DT-003/005/009/033 tetap belum final. Penyebutan DT-003 DIUSULKAN pada teks DT-007 terdahulu adalah riwayat; lihat [keputusan DT-003](#dt-003--registrasi-model-b-kombinasi-a3b1c2) untuk status terbaru. Lihat [keputusan DT-007](#dt-007--verifikasi-bertingkat-berbasis-cakupan).

**Riwayat pembaruan DT-005:** [Model C+F+H2](#dt-005--kepemilikan-field-model-cfh2) dipilih setelah dokumentasi DT-003 pada 6 November 2026. Rumusan KB/DT-003/DT-007 di bawah tetap; label DT-005 MENUNGGU PENETAPAN di sana kini menunjuk rincian OPD/mandat, bukan pilihan model yang belum dipilih. Ringkasan dua model/34 DT adalah riwayat sebelum DT-005; kini tiga model/33 DT lain belum final.

**Riwayat pembaruan DT-009:** [Model C+B2+V2+K2](#dt-009--bukti-dan-koreksi-model-cb2v2k2) dipilih setelah dokumentasi DT-005 pada 6 November 2026. Seluruh rumusan rinci KB/DT-003/005/007 tetap. DT-009 DIUSULKAN pada teks lama merujuk riwayat/rincian bukti yang belum ditetapkan, bukan pilihan model terbaru. Kini empat model DT-003/005/007/009 dipilih dan 32 DT lain belum final.

**Pembaruan terkini DT-011:** [C+D1+M1+E1](#dt-011--otorisasi-model-cd1m1e1) dipilih setelah dokumentasi DT-009. Seluruh rumusan rinci KB/DT-003/005/007/009 tetap utuh. E1 literal berbenturan dengan RB-11.07/21/T11-14, status KONFLIK KEBIJAKAN TERBUKA; tidak diganti E2 atau dinyatakan selesai. Ringkasan empat model/32 DT pada teks lama adalah riwayat; kini lima model dipilih/31 DT lain belum final, DT-011 sendiri belum tuntas konsistensi/operasional.

Inventaris sumber KB-08–KB-18: 307 RB/294 T dan 18 kriteria KB-08. KB-01–KB-07 tidak diberi paket kode RB/T mandiri baru melalui audit ini. Baseline TERDOKUMENTASI, G0 siap ditinjau dan G1 coding BELUM LULUS; belum ada pengujian aplikasi/server.

## Register keputusan

| ID / prioritas | Keputusan atau pokok bahasan | Status, ringkasan model dan rincian yang masih terbuka | Risiko yang perlu dikendalikan |
| --- | --- | --- | --- |
| KB-01 / P0 | Model C — unit usaha berbasis kesatuan operasional | DISEPAKATI PADA TINGKAT MODEL. Cabang tetap bagian usaha induk jika pemilik sama dan cabang teridentifikasi sebagai bagian usaha induk. Kesamaan pemilik saja tidak cukup untuk menyamakan semua usaha. Bukti keterkaitan, pemilik bersama/pergantian pemilik, dan kasus batas masih perlu dirinci | Lokasi/cabang dihitung sebagai unit baru atau usaha berbeda digabung hanya karena pemilik sama |
| KB-02 / P0 | Model B — verifikasi terdistribusi per OPD, pengelola utama sebagai koordinator | DISEPAKATI PADA TINGKAT MODEL. Setiap OPD memverifikasi data dalam kewenangannya; pengelola utama mengoordinasikan proses tanpa otomatis mengambil alih pengesahan nilai. Penunjukan pengelola, mandat, penugasan dan SOP koordinasi tetap terbuka | Koordinasi dianggap kewenangan mengesahkan semua field atau verifikasi dipusatkan pada satu OPD |
| KB-03 / P0 | Model B — registrasi bertahap dan identitas internal terpisah | DISEPAKATI PADA TINGKAT MODEL. NIB tidak wajib pada pendataan awal; identitas internal terpisah dari NIK/NIB. Kelengkapan minimum tiap tahap, pemetaan/keunikan identitas eksternal dan standar verifikasi masih perlu ditetapkan | Usaha tanpa NIB tidak dapat didata atau nomor eksternal dipakai sebagai identitas internal |
| KB-04 / P0 | Satu OPD penanggung jawab aktif per field, dengan hak usulan koreksi OPD lain | DISEPAKATI PADA TINGKAT MODEL. Pengesahan nilai mengikuti satu pemilik field yang sah; OPD lain dapat mengusulkan sesuai akses. Kamus field, penetapan OPD, masa penugasan dan cakupan petugas tetap terbuka tanpa membuat pemilik aktif ganda | OPD saling menimpa nilai resmi, field tanpa pemilik dapat disahkan, atau ada penanggung jawab aktif ganda |
| KB-05 / P0 | Registrasi awal oleh petugas pemerintah yang ditunjuk; verifikator awal berbeda | DISEPAKATI PADA TINGKAT MODEL. Hanya petugas yang ditunjuk membuat profil awal; pengesahan awal oleh verifikator berbeda dari pembuat. Draf bukan profil terverifikasi. Penunjukan, kelengkapan, standar bukti dan SOP tetap terbuka | Pendaftaran melewati kewenangan atau pembuat mengesahkan profil awalnya sendiri |
| KB-06 / P0 | Model A — akses pelaku UMKM melalui petugas | DISEPAKATI PADA TINGKAT MODEL. Pelaku UMKM tidak mempunyai akun aplikasi; pelayanan, permintaan koreksi dan hasil melalui petugas. Rincian saluran layanan, akses internal, penugasan dan verifikasi pemohon tetap terbuka | Hak layanan terabaikan atau akun/portal pelaku dibuat tanpa keputusan baru |
| KB-07 / P0 | Model C — satu petugas berwenang mengesahkan perubahan field | DISEPAKATI PADA TINGKAT MODEL. Satu petugas berwenang cukup dengan validasi dan audit. KB-05 tetap berlaku untuk pengesahan awal oleh verifikator berbeda. Konflik nilai mengikuti KB-08; penugasan, standar bukti dan SOP rinci tetap terbuka | Satu pengesah dianggap bebas dari validasi atau aturan perubahan field dipakai untuk melewati pengesahan awal |
| KB-08 / P0 | Model A — konflik nilai oleh OPD pemilik field | DISEPAKATI PADA TINGKAT MODEL. Konflik nilai diselesaikan pemilik field; sengketa kewenangan mengikuti mekanisme organisasi yang sah. RB-08.01–RB-08.23, kriteria dan skenario terdokumentasi di bawah; penetapan OPD dan SOP tidak dianggap final | Pengelola mengambil alih keputusan nilai, riwayat hilang, atau sengketa kewenangan diputus sepihak |
| KB-09 / P0 | Model B — Registri Induk UMKM + Satu Sektor Percontohan: INDUSTRI PENGOLAHAN PANGAN | DISEPAKATI PADA TINGKAT RUANG LINGKUP MVP. Registri pihak/orang/badan/unit, hubungan/kegiatan/lokasi, Profil Umum minimum/status NIB, profil pangan, akun petugas, kewenangan, pengesahan, koreksi/konflik, audit dan laporan dasar. Kamus, matriks dan T09-01–T09-26 di bawah. OPD resmi, petugas, wilayah, bukti/SOP, hosting PDN dan izin implementasi BELUM FINAL | Produk/cabang dihitung sebagai usaha baru, periode tertimpa, satuan dicampur atau usulan fungsi OPD dianggap penetapan resmi |
| KB-10 / P1 | Model B — usulan klasifikasi dihitung sistem, diverifikasi dan disahkan satu petugas berwenang | MODEL B DISEPAKATI — rincian kewenangan kelembagaan masih terbuka. Dasar modal/penjualan, tujuan, periode, cakupan dan versi aturan dipisah; KBLI 2025 dan riwayat 2020 terpisah dari skala. OPD/petugas, cakupan hukum multiunit, SOP bukti/tahun buku nonkalender belum final | Usulan dianggap resmi, data parsial/kosong dipaksa Mikro, modal/penjualan tertimpa, cakupan multiunit atau konversi KBLI mengubah fakta tanpa dasar |
| KB-11 / P0 | Model B — perlindungan bertingkat menurut sensitivitas dan kebutuhan tugas | MODEL B DISEPAKATI PADA TINGKAT DOKUMENTASI. Empat label akses internal, izin tindakan terpisah, tujuan/dasar sah, hak subjek tanpa akun, ekspor/publikasi terkendali, retensi/JRA, insiden dan gerbang risiko. Pengendali/Prosesor/fungsi PDP, pemetaan field final, JRA Sinjai, SOP, DPIA dan izin data nyata tetap terbuka | Hak pemilik field dianggap hak baca menyeluruh, tenggat hukum diperlonggar, data pihak ketiga terbuka, retensi dibuat sembarangan atau label internal dianggap kategori hukum |
| KB-12 / P0 | Model B — audit database aplikasi dengan salinan audit terlindungi terpisah | MODEL B DISEPAKATI pada tingkat model bisnis/prinsip arsitektur. Event kritis atomik dengan perubahan, salinan pascacommit andal, ID stabil, retry/rekonsiliasi serta kontrol keamanan/administratif terpisah. Teknologi, lokasi, jadwal, pengelola, JRA, RPO/RTO dan rincian belum final | Audit gagal tetapi bisnis dianggap sah, salinan dikelola kontrol sama, duplikasi/kehilangan event, rahasia masuk log atau klaim hash kebal administrator |
| KB-13 / P1 | Model C — rekonsiliasi otomatis identitas, merge, split dan arsip | MODEL C DISEPAKATI. Deteksi/pencegahan duplikat prioritas MVP; konsolidasi teknis otomatis hanya jika seluruh prasyarat terbukti dan mandat sah. Ambigu/konflik/keputusan substantif ditahan untuk petugas; split/arsip terstruktur, ID asal/kanonik/riwayat terjaga. SOP, bukti, aturan/ambang, OPD dan izin produksi belum final | Salah gabung, relasi/peristiwa hilang atau ganda, ID didaur ulang, skor dianggap bukti atau mesin melewati pengesahan/privasi/audit |
| KB-14 / P0 | Model B — audit kesiapan PDN/cPanel sebelum konfigurasi teknis dan deployment | MODEL B DISEPAKATI; hasil hosting BELUM DAPAT DINILAI, seluruh kondisi aktual belum diketahui. Audit berbukti atas runtime/privasi/scheduler/audit independen/backup/kapasitas; empat hasil kelayakan, 26 RB/24 T dan formulir di checklist. Konfigurasi/hosting final, KB-17/KB-18, pengelola dan izin implementasi/deployment belum final | Spesifikasi dikarang, dokumen dianggap bukti PDN, kesenjangan kritis dilabel bersyarat, audit kontrol sama dianggap independen atau deploy tanpa mandat |
| KB-15 / P2 | Model B — impor bertahap dan terverifikasi | MODEL B DISEPAKATI: sumber sah, staging privat, pemetaan/validasi berversi, pemeriksaan duplikasi/konflik, pratinjau dan pengesahan per pemilik field sebelum nilai resmi. Impor manual rancangan bersyarat, integrasi langsung OSS/Dukcapil bukan implementasi MVP. Dataset/SOP/OPD/format/ukuran/retensi/izin belum final | Staging dianggap resmi, file OPD menimpa SSOT, pengunggah mengesahkan semua field, efek ganda, pembalikan menimpa perubahan baru atau integrasi tanpa izin |
| KB-16 / P2 | Model B — Registri Program dan Riwayat Layanan Pembinaan UMKM | MODEL B DISEPAKATI, fase lanjutan setelah MVP KB-09. Program/kegiatan/sesi/partisipasi/realisasi/tindak lanjut, indikator dan rekap memakai ID induk, status serta hitungan terpisah. Bukan pembayaran/penyaluran dana/pengadaan/akuntansi/seleksi otomatis atau pengganti sistem resmi. OPD/kode/sasaran/indikator/SOP/retensi/izin belum final | UMKM terhitung ganda, terdaftar dianggap hadir/realisasi, outcome dianggap sebab-akibat, program masuk MVP atau catatan nominal dianggap otorisasi pembayaran |
| KB-17 / P1 | Model B — Operasional Terkelola Berbasis Risiko | MODEL B DISEPAKATI sebagai kebijakan/spesifikasi dokumentasi. Fungsi OPD/PDN, backup lintas komponen, audit terlindungi terpisah, enkripsi/kunci, verifikasi/restore terisolasi, RPO/RTO berbasis dampak, monitoring/insiden/perubahan. Penetapan resmi, jadwal/retensi/JRA, target, lokasi/teknologi/SLA belum final; hosting belum dinilai, KB-18 terbuka; bukan izin server | Backup job sukses dianggap pulih, lampiran/relasi/audit/transaksi sah hilang, hak teknis dianggap hak bisnis, rahasia terbuka atau target/jadwal dikarang |
| KB-18 / P0 | Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal | MODEL C DISEPAKATI sebagai dokumentasi: arsitektur satu SSOT lintas OPD/sektor untuk kabupaten, MVP KB-09 tetap, kapasitas fisik bertahap menurut kebutuhan terverifikasi. Model entitas/pertumbuhan/penyimpanan/beban/pemicu memakai asumsi/proyeksi terlabel; statistik resmi, kuota/target/biaya/hasil uji belum final. Hosting dan kapasitas akhir BELUM DAPAT DINILAI; bukan izin server/pengadaan | Asumsi dianggap statistik/benchmark, semua modul masuk MVP, produk/cabang/histori salah hitung, komponen ganda/terabaikan, audit/backup dikorbankan atau kuota dibeli tanpa bukti |

P0 bukan keharusan menyelesaikan seluruh administrasi daerah sekaligus. Untuk hal yang dapat diperluas seperti katalog field dan sektor, sahkan minimum yang masuk MVP dahulu. Namun tidak boleh membuat field resmi MVP tanpa pemilik atau merancang unit berdasarkan definisi yang belum disetujui.

## Keputusan yang paling mendesak

1. Rinci penerapan kesatuan operasional dan keterkaitan cabang, terutama pemilik bersama/pergantian pemilik, serta kelengkapan minimum pendataan bertahap (`KB-01`, `KB-03`); modelnya tidak perlu dipilih ulang.
2. Tetapkan secara sah pengelola utama sebagai koordinator, petugas dan kamus field beserta satu OPD pemilik aktif per field (`KB-02`, `KB-04`); dokumen ini tidak menetapkan nama instansinya.
3. Lengkapi penugasan, cakupan akses internal, bukti dan SOP untuk aturan inti yang sudah dipilih: registrasi petugas (`KB-05`), layanan pelaku melalui petugas (`KB-06`), satu pengesah berwenang (`KB-07`), dan penyelesaian konflik oleh pemilik field (`KB-08`).
4. Lengkapi rincian pilot KB-09 yang sudah dipilih: Industri Pengolahan Pangan, penetapan kewenangan, wilayah/petugas dan bukti verifikasi; kebijakan pribadi/audit pada KB-11/KB-12 tetap terbuka. Jangan memilih ulang sektor atau menganggap SOP final dari persetujuan MVP.
5. Konfirmasi kelayakan hosting dan kisaran kapasitas (`KB-14`, `KB-18`), lalu sepakati izin tahap implementasi dan instalasi.

## Register risiko awal

| Risiko | Dampak | Langkah pengurangan risiko | Penanggung jawab yang perlu ditunjuk |
| --- | --- | --- | --- |
| Definisi entitas berbeda antar-OPD | Master ganda dan laporan tidak sebanding | Lokakarya contoh kasus, kamus istilah, dan contoh sintetis bersama | Pemilik produk dan koordinator data |
| Penetapan pemilik field tertunda | Implementasi alur resmi tidak bisa disahkan | Tetapkan katalog MVP lebih dulu; tolak penulisan tanpa pemilik | Koordinator dan OPD terkait |
| Salah pemberian penugasan akun petugas | Petugas membaca atau mengubah data di luar mandat | Penugasan eksplisit, pembatasan cakupan, pencabutan, uji penolakan server; tidak ada akun pelaku | Pengelola identitas dan OPD berwenang |
| Persetujuan memakai data lama | Koreksi benar tertimpa koreksi lama | Versi dasar, transaksi, konflik, penerapan sekali | Pengembang; pemeriksa bisnis memvalidasi hasil |
| Data sensitif tersebar di lampiran/audit | Kebocoran di luar master | Klasifikasi, penyimpanan privat, minimisasi, akses dan retensi | Pengelola data dan operasi |
| Hosting hanya memenuhi label pemasaran | Aplikasi tidak dapat dijalankan dengan aman | Bukti teknis, document root aman, uji staging dan pemulihan | Penyedia/pengelola hosting |
| Audit dapat diubah langsung di database | Bukti perubahan kehilangan keandalan | Pembatasan akses, backup terpisah, keputusan salinan audit eksternal | Pengelola operasi dan auditor |
| Cakupan bertambah tanpa persetujuan | Waktu/biaya meningkat, fondasi tertunda | Setujui MVP dan lakukan peninjauan setiap tambahan | Pemilik produk |

## Cara mencatat hasil keputusan

Untuk setiap `KB-xx`, tambahkan: keputusan yang disahkan, instansi/orang dalam kapasitas jabatan yang menyetujui, tanggal, alasan, field atau alur yang terkena, dan dokumen yang harus diperbarui. Jangan mencantumkan nomor identitas pribadi, kontak rahasia, password, atau kredensial.

Status **DISEPAKATI** hanya berlaku pada pilihan/rumusan yang didukung sumber pengguna; rincian yang belum disahkan tetap **TERBUKA**. Dokumen ini tidak menetapkan dasar hukum, kewenangan instansi, atau aturan klasifikasi UMKM secara sepihak; rujukan kebijakan harus diberikan atau disahkan pemilik kewenangan sebelum aturan tersebut dibangun.

## Asal rumusan dan batas pembaruan

Riwayat finalisasi KB-09: berdasarkan instruksi langsung pengguna pada chat proyek, 5 November 2026, sektor Industri Pengolahan Pangan ditetapkan. Saat finalisasi itu, baris KB-01–KB-08 dan KB-10–KB-18 dipertahankan. Pembaruan sesudahnya adalah keputusan KB-10 di bagian akhir dokumen; riwayat sebelumnya tidak menggantikan status terbaru.

Pada audit model sebelumnya, pengguna memberikan delapan keputusan langsung pada chat proyek, 5 November 2026: KB-01 Model C, KB-02 Model B, KB-03 Model B, aturan KB-04/KB-05, KB-06 Model A, KB-07 Model C dan KB-08 Model A. Rincian di luar rumusan itu tetap memerlukan persetujuan tersendiri; tidak dibuat RB-01–RB-07 baru berdasarkan dugaan.

Sumber historis rumusan lengkap KB-08: chat [“Memulai Aplikasi UMKM”](https://chatgpt.com/c/6aebc0fd-2840-83ec-ab92-7aa7364481eb), 5 November 2026. Rumusan “KB-08 — Penyelesaian Konflik dan Koreksi Data” di bawah telah dimasukkan pada pembaruan sebelumnya. Audit ini mempertahankan isi aturan, kriteria dan skenario tersebut.

Sebanyak 23 aturan bisnis, 18 kriteria penerimaan, dan 14 skenario pengujian dipertahankan dari rumusan sumber. Judul bagian disesuaikan untuk susunan dokumen ini. Contoh orang pada skenario adalah tokoh fiktif. Rumusan tidak menetapkan instansi nyata sebagai pemilik suatu field.

Instruksi implementasi dalam rumusan adalah panduan untuk tahap mendatang, **bukan izin membuat kode, menginstal paket atau membuat database sekarang**. Entitas yang disebut adalah kebutuhan konseptual; belum ada tabel aplikasi. Nama entitas tidak mewajibkan tabel baru apabila fungsi yang sama sudah dirancang.

## Pemeriksaan konsistensi KB-01 sampai KB-08

| Rujukan | Hasil pemeriksaan dan tindak lanjut |
| --- | --- |
| KB-01 | Model C sudah disepakati. Definisi unit dan contoh diselaraskan dengan kesatuan operasional; cabang tetap bagian induk jika pemilik sama dan keterkaitannya teridentifikasi. Lokasi berbeda atau pemilik sama saja tidak otomatis menentukan unit baru/sama. Bukti dan kasus batas tetap terbuka. |
| KB-02 | Model B sudah disepakati. Verifikasi terdistribusi sesuai OPD pemilik field, dengan pengelola utama sebagai koordinator. Koordinasi dan pengawasan tidak otomatis memberi hak pengesahan field OPD lain; nama pengelola dan mandat rinci tetap terbuka. |
| KB-03 | Model B sudah disepakati. Pendataan awal tidak mewajibkan NIB; ID internal tidak menggunakan NIK/NIB. Identitas yang belum lengkap/legalitas belum terverifikasi tidak disamakan dengan kegagalan pendataan awal. Kelengkapan tiap tahap dan aturan nomor eksternal masih perlu ditetapkan. |
| KB-04 | Satu OPD penanggung jawab aktif per field dan hak usulan OPD lain sudah disepakati. Nama OPD dan katalog field belum ditetapkan. Cakupan wilayah petugas tidak boleh ditafsirkan sebagai penanggung jawab aktif ganda atas field yang sama. |
| KB-05 dan KB-07 | Sumber KB-05 memisahkan pembuat dan pengesah profil awal; KB-07 memilih satu pengesah. Rumusan KB-07 sendiri menyelaraskan keduanya: satu verifikator berbeda mengesahkan profil baru; satu petugas berwenang cukup untuk tindakan pengesahan field berikutnya. Tidak menambahkan pengesah berjenjang. |
| KB-06 | Dokumen lokal sebelumnya membuka kemungkinan akun pelaku; pilihan pengguna Model A menetapkan layanan melalui petugas tanpa login pelaku. RB-08.02 mengikuti jalur tersebut. Matriks dan rancangan akun diselaraskan, bukan menambahkan portal masyarakat. |
| KB-07 | Usulan lokal dua petugas untuk perubahan penting bertentangan dengan pilihan Model C. Diganti dengan satu pengesah berwenang, tetap dengan bukti, validasi, versi dan audit. Konflik yang belum terselesaikan tidak boleh dilewati lewat edit biasa. |
| Nomor KB-08 | Register awal memakai nomor ini untuk cakupan akses; keputusan terbaru memakai KB-08 untuk konflik/koreksi data. Isi akses lama dipertahankan sebagai rincian terbuka KB-06 di bawah, sehingga kebutuhan tidak hilang dan tidak ada nomor keputusan baru yang ditebak. |
| RB-08.10 dan pemisahan usulan | Usulan lokal memisahkan pengajuan per OPD. KB-08 memperjelas satu kasus induk lintas field dengan subkasus per OPD pemilik. Usulan koreksi dan transaksi penerapannya tetap terbatas pada kewenangan masing-masing; kasus induk bukan pengesahan bersama oleh pengelola. |
| Status dan konflik versi | Status kasus bisnis KB-08 berbeda dari status usulan koreksi. Konflik versi adalah penolakan atas data dasar usang, bukan keputusan bahwa sengketa bisnis selesai. Penerapan harus memakai versi sah dan menjaga keterkaitan riwayat. |

**Kesimpulan audit pada tingkat model:** KB-01–KB-08 mempunyai acuan pengguna yang eksplisit dan ringkasan dokumennya diselaraskan. Tidak ditemukan pertentangan yang mengharuskan pemilihan ulang kedelapan model setelah perbedaan proses registrasi, pengesahan field, koordinasi dan konflik dijelaskan. Kasus batas, risiko penafsiran dan keputusan turunan yang tetap terbuka tercantum pada [laporan audit](08-audit-konsistensi-dokumentasi.md); audit model bukan pengesahan seluruh SOP atau skema teknis.

### Rincian akses yang tetap terbuka di bawah KB-06

Cakupan baca/usul/tetapkan berdasarkan OPD, wilayah, objek dan field; akses pimpinan/auditor; pembacaan data sensitif; serta keluaran informasi kepada pemohon melalui petugas tetap memerlukan penetapan. Prinsip minimum akses dan pemeriksaan server dipertahankan. Tidak ada akun masyarakat atau profil publik yang diaktifkan oleh keputusan KB-08.

## KB-08 — Penyelesaian Konflik dan Koreksi Data

**Proyek:** SIJAI UMKM  
**Prioritas:** P0  
**Tanggal keputusan:** 5 November 2026  
**Status:** DISEPAKATI PADA TINGKAT MODEL — penetapan resmi dan SOP yang belum disahkan tetap terbuka  
**Model:** A — Penyelesaian oleh OPD Pemilik Field

### A. Keputusan Utama

Setiap konflik atas nilai data SIJAI UMKM ditangani dan diputuskan oleh OPD yang menjadi pemilik resmi field tersebut.

Satu petugas yang memiliki penugasan aktif dapat mengesahkan hasil koreksi sesuai KB-07.

Pengelola utama menjalankan fungsi pengawasan mutu, pemantauan dan administrasi sistem, tanpa otomatis mengambil alih kewenangan pengesahan OPD.

Konflik kewenangan antar-OPD diselesaikan melalui mekanisme penetapan kewenangan organisasi yang sah, bukan melalui keputusan sepihak OPD yang bersengketa.

Penyelesaian konflik tidak boleh menghilangkan riwayat, bukti, atau keputusan sebelumnya.

### B. Aturan Bisnis

**RB-08.01 — Pemilik penyelesaian**

Setiap laporan konflik dikaitkan dengan field atau jenis record, entitas terkait, dan OPD pemilik yang berlaku.

**RB-08.02 — Pihak pelapor**

Petugas OPD yang mempunyai kewenangan akses dapat melaporkan konflik. Permohonan masyarakat dicatat melalui petugas sesuai KB-06.

**RB-08.03 — Penerusan otomatis**

Laporan konflik diarahkan ke antrean kerja OPD pemilik field berdasarkan katalog kewenangan KB-04.

**RB-08.04 — Batas kewenangan**

Hanya petugas berwenang pada OPD pemilik yang dapat mengesahkan nilai koreksi. Hak akses diperiksa pada sisi server.

**RB-08.05 — Pemeriksaan bukti**

Keputusan didasarkan pada sumber, bukti, status verifikasi, dan riwayat yang relevan. Persyaratan bukti mengikuti jenis field.

**RB-08.06 — Perlindungan nilai resmi**

Laporan konflik tidak langsung mengubah nilai resmi. Nilai dan status yang berlaku dipertahankan sampai ada pengesahan koreksi, kecuali diberi penanda bahwa data sedang dipersoalkan.

**RB-08.07 — Penanganan duplikasi identitas**

Kemiripan identitas tidak boleh memicu penggabungan otomatis. Penentuan identitas yang sama harus melalui pemeriksaan berwenang.

**RB-08.08 — Sengketa kepemilikan**

Perubahan hubungan kepemilikan yang masih disengketakan harus ditangguhkan sampai tersedia dasar penyelesaian yang sah. SIJAI UMKM tidak menentukan hak kepemilikan secara hukum.

**RB-08.09 — Konflik lintas OPD**

OPD nonpemilik dapat melaporkan perbedaan dan memberikan bukti, tetapi tidak dapat mengesahkan perubahan pada field yang bukan kewenangannya.

**RB-08.10 — Konflik beberapa field**

Apabila satu masalah menyangkut field milik beberapa OPD, sistem membuat satu kasus induk dengan beberapa subkasus yang masing-masing ditangani OPD pemilik field terkait.

**RB-08.11 — Konflik kewenangan**

Apabila yang dipersoalkan adalah penetapan OPD pemilik field, kasus mengikuti mekanisme perubahan kewenangan yang sah sebagaimana KB-02, bukan mekanisme koreksi nilai biasa.

**RB-08.12 — Status konflik**

Sistem mendukung status Dilaporkan, Dalam Pemeriksaan, Menunggu Bukti, Ditangguhkan, Selesai Dikoreksi, dan Selesai Nilai Dipertahankan.

**RB-08.13 — Pengesahan koreksi**

Satu petugas OPD yang memiliki penugasan aktif dapat mengesahkan koreksi setelah seluruh prasyarat terpenuhi.

**RB-08.14 — Kesalahan pengesahan**

Pengesahan yang terbukti salah diperbaiki melalui keputusan korektif baru, bukan dengan menghapus nilai dan audit sebelumnya.

**RB-08.15 — Versi dan riwayat**

Koreksi mencatat versi data sebelumnya, versi baru, alasan, tanggal berlaku, dan referensi keputusan yang dikoreksi.

**RB-08.16 — Perubahan bersamaan**

Sistem wajib mencegah pembaruan berdasarkan versi data yang sudah tidak berlaku.

**RB-08.17 — Penolakan atau mempertahankan nilai**

OPD pemilik dapat mempertahankan nilai sebelumnya dengan memberikan alasan pemeriksaan yang tercatat.

**RB-08.18 — Data resmi eksternal**

Untuk NIB, sertifikasi, perizinan, dan identitas resmi lain, OPD hanya mengesahkan hasil pencatatan atau verifikasi dalam SIJAI UMKM sesuai sumber berwenang.

**RB-08.19 — Audit**

Setiap tindakan penting dicatat secara historis, termasuk pelapor, petugas pemeriksa, pengesah, bukti, waktu, keputusan dan alasan.

**RB-08.20 — Perlindungan informasi**

Bukti sensitif dan data identitas terlindungi tidak boleh terbuka melalui log, direktori publik atau hak akses yang tidak sah.

**RB-08.21 — Peninjauan kembali**

Kasus yang telah selesai dapat dibuka kembali jika ditemukan bukti baru, dengan menciptakan riwayat peninjauan. Keputusan lama tetap dapat ditelusuri.

**RB-08.22 — Pengawasan pengelola utama**

Pengelola utama dapat melihat statistik konflik, kasus tertunda, keterlambatan dan kualitas penyelesaian, tanpa otomatis mendapatkan hak mengubah nilai resmi.

**RB-08.23 — Konsistensi transaksi**

Pengesahan koreksi, perubahan nilai resmi, pembaruan status kasus, dan audit harus dilakukan secara konsisten. Kegagalan transaksi tidak boleh menghasilkan data parsial yang saling bertentangan.

### C. Entitas Data yang Dibutuhkan

- `KASUS_KONFLIK` — identitas kasus, objek, pengadu, alasan, dan status.
- `DETAIL_KONFLIK` — field yang dipersoalkan, nilai yang dilaporkan, dan referensi nilai resmi.
- `PENANGANAN_KONFLIK` — OPD pemilik, petugas, aktivitas pemeriksaan, dan hasilnya.
- `BUKTI_KONFLIK` — referensi dokumen atau informasi pendukung yang dilindungi.
- `KEPUTUSAN_KONFLIK` — hasil, dasar, waktu, pengesah, dan referensi revisi.
- `RIWAYAT_NILAI` — rekaman versi perubahan nilai.
- `AUDIT_LOG` — aktivitas dan perubahan penting.

Gunakan tabel yang sudah tersedia jika memenuhi fungsi tersebut. Jangan membuat dua struktur yang menyimpan informasi sama tanpa kebutuhan yang jelas.

### D. Instruksi Implementasi untuk Codex

1. Baca KB-01 sampai KB-07 sebelum mengimplementasikan KB-08.
2. Terapkan penyelesaian konflik oleh OPD pemilik field berdasarkan katalog kewenangan.
3. Jangan menanam nama OPD secara permanen ke logika program.
4. Gunakan Laravel Policies dan pemeriksaan hak akses pada service layer.
5. Simpan usulan konflik terpisah dari nilai resmi.
6. Bangun state machine untuk status konflik.
7. Terapkan pemeriksaan versi data dan transaksi database.
8. Jangan melakukan penggabungan profil otomatis.
9. Jangan menghapus pengesahan yang salah; gunakan revisi korektif.
10. Jangan mengubah dokumen legal resmi melalui SIJAI UMKM.
11. Batasi akses terhadap dokumen sensitif.
12. Catat audit dengan pengamanan integritas yang sesuai.
13. Gunakan data fiktif untuk pengujian.
14. Pisahkan masalah multi-field menjadi subkasus berdasarkan OPD pemilik.
15. Jangan memberi pengelola utama kewenangan edit seluruh field secara otomatis.
16. Jangan mengimplementasikan keputusan konflik kewenangan tanpa penetapan organisasi yang sah.

### E. Kriteria Penerimaan

KB-08 lulus apabila:

1. Petugas berwenang dapat melaporkan konflik.
2. Laporan konflik diarahkan ke OPD pemilik field.
3. OPD nonpemilik tidak dapat mengesahkan koreksi.
4. Pelaporan tidak langsung mengubah nilai resmi.
5. Konflik identitas tidak menyebabkan penggabungan otomatis.
6. Konflik kepemilikan yang belum terselesaikan tidak menghapus pemilik terverifikasi.
7. OPD pemilik dapat menyetujui koreksi berdasarkan bukti yang memadai.
8. OPD pemilik dapat mempertahankan nilai dengan alasan yang tercatat.
9. Satu kasus dapat melibatkan beberapa OPD melalui subkasus.
10. Sengketa kewenangan tidak diputuskan oleh OPD secara sepihak.
11. Perubahan yang menggunakan versi data lama ditolak atau ditahan.
12. Kesalahan pengesahan diperbaiki melalui revisi korektif.
13. Riwayat nilai, keputusan, dan petugas tetap dapat ditelusuri.
14. Kasus selesai dapat ditinjau kembali tanpa menghapus riwayat.
15. Transaksi gagal tidak mengubah nilai resmi secara parsial.
16. Dokumen bukti tidak terbuka kepada pengguna tanpa hak akses.
17. Pengelola utama dapat memantau kasus tanpa mengubah nilai bisnis secara otomatis.
18. Pengujian server menolak manipulasi permintaan di luar kewenangan.

### F. Hal yang Masih Terbuka

- OPD pemilik field final berdasarkan penetapan kelembagaan.
- Bukti minimal untuk menyelesaikan setiap jenis konflik.
- Target waktu penanganan konflik dan tindak lanjut keterlambatan.
- Prosedur pembuktian sengketa kepemilikan.
- Mekanisme peninjauan kembali oleh instansi yang berwenang.
- SOP konflik yang melibatkan perubahan kepemilikan OPD atau restrukturisasi organisasi.
- Kebijakan retensi, akses dan pengamanan dokumen bukti.

Butir tersebut tidak boleh diasumsikan telah disahkan oleh Codex.

### G. Matriks pengujian KB-08

| Kode | Skenario pengujian | Hasil yang diharapkan |
|--------|--------|--------|
| T08-01 | OPD lain melaporkan kesalahan alamat | Kasus masuk antrean OPD pemilik alamat |
| T08-02 | OPD nonpemilik mencoba mengesahkan koreksi | Ditolak oleh server |
| T08-03 | Dua profil orang diduga ganda | Ditandai, tidak digabung otomatis |
| T08-04 | Ahmad meminta penghapusan Budi dari kepemilikan bersama yang disengketakan | Perubahan ditangguhkan |
| T08-05 | OPD pemilik menerima koreksi yang didukung bukti | Nilai baru disahkan |
| T08-06 | OPD pemilik menolak koreksi | Nilai lama dipertahankan, alasan dicatat |
| T08-07 | Satu kasus melibatkan alamat dan produksi | Dibuat subkasus untuk OPD masing-masing |
| T08-08 | Dua OPD mempersoalkan kepemilikan field | Dialihkan ke prosedur penetapan kewenangan |
| T08-09 | Petugas membatalkan pengesahan yang salah | Revisi baru tercipta, keputusan lama tetap ada |
| T08-10 | Dua petugas mengubah versi data yang sama | Perubahan dengan versi usang ditahan |
| T08-11 | Transaksi koreksi gagal | Nilai resmi, status kasus dan audit tetap konsisten |
| T08-12 | Pengguna mencoba mengubah audit | Ditolak |
| T08-13 | Kasus selesai memiliki bukti baru | Dapat dibuka kembali dengan riwayat baru |
| T08-14 | Pengelola utama memantau seluruh konflik | Dapat melihat ringkasan sesuai akses, tanpa hak edit otomatis |


### H. Batas penafsiran untuk rancangan lanjutan

- Model A menentukan pihak yang memutus nilai rujukan di SIJAI UMKM; bukan kewenangan memutus hak hukum kepemilikan atau mengubah dokumen resmi dari instansi penerbit.
- Enam status pada RB-08.12 adalah status kasus konflik. “Selesai Dikoreksi” hanya tercapai jika nilai, versi, keputusan, status dan audit tersimpan konsisten. “Selesai Nilai Dipertahankan” memerlukan alasan dan tidak menciptakan perubahan nilai palsu.
- Bukti baru dapat membuka peninjauan kembali sesuai RB-08.21 tanpa menghapus keputusan lama. Matriks transisi rinci, peran peninjau, batas waktu dan SOP tetap harus disahkan; tidak ditetapkan diam-diam dalam dokumentasi teknis.
- Satu kasus induk dapat mengoordinasikan beberapa subkasus. Setiap pengesah hanya berwenang pada field milik OPD-nya. Tidak diasumsikan seluruh subkasus harus disahkan dalam satu transaksi lintas OPD; keputusan ini masih perlu dirinci jika ada perubahan yang saling bergantung.
- Koreksi terhadap pengesahan yang salah membuat keputusan dan versi baru yang merujuk keputusan lama; bukan menghapus sejarah atau menyalin nilai lama tanpa pemeriksaan versi.
- Penanda data dipersoalkan tidak membatalkan nilai resmi atau menghapus pihak pemilik terverifikasi secara otomatis. Sengketa yang belum mempunyai dasar penyelesaian sah tetap ditangguhkan.
- Kemampuan konsolidasi duplikat dalam contoh sumber hanya dapat dibangun setelah prosedur dan lingkupnya disepakati pada KB-13. Larangan penggabungan otomatis berlaku sejak rancangan ini.
- Seluruh kriteria dan skenario di atas adalah rencana pembuktian pada implementasi mendatang. **Belum ada tes aplikasi yang dijalankan**; penulisan dokumen tidak berarti kriteria tersebut telah lulus.

### I. Catatan perubahan

5 November 2026 — **Riwayat pembaruan sebelumnya:** berdasarkan permintaan pengguna dan sumber terkait, memasukkan KB-08 Model A, RB-08.01–RB-08.23, 18 kriteria penerimaan dan 14 skenario. Pada saat itu baris KB-01–KB-04 dipertahankan karena rumusannya belum diperoleh; catatan historis ini tidak lagi menggambarkan status model saat audit terbaru.

5 November 2026 — **Audit model KB-01–KB-08:** pengguna memberikan delapan keputusan secara langsung. Seluruhnya ditandai disepakati pada tingkat model. Ringkasan, aturan kesatuan operasional/cabang, registrasi bertahap tanpa kewajiban NIB awal, koordinasi verifikasi terdistribusi dan batas kewenangan diselaraskan. Register KB-09–KB-18 serta isi aturan/kriteria/skenario KB-08 dipertahankan. Rincian OPD resmi, SOP dan standar bukti tetap terbuka. Hasil serta temuan tercatat pada laporan audit; tidak ada perubahan kode aplikasi, database atau konfigurasi hosting.

## KB-09 — Finalisasi ruang lingkup MVP

**Proyek:** SIJAI UMKM  
**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P0  
**Status:** DISEPAKATI PADA TINGKAT RUANG LINGKUP MVP — penetapan resmi dan rincian yang belum disepakati tetap BELUM FINAL  
**Model:** B — Registri Induk UMKM + Satu Sektor Percontohan  
**Sektor ditetapkan:** **INDUSTRI PENGOLAHAN PANGAN**

### A. Keputusan dan sumber rumusan

Keputusan terbaru pengguna menetapkan model, sektor, lingkup MVP, field minimum, pola record berulang, calon fungsi pengampu serta tambahan pengujian. Ini memperbarui status sektor dari usulan menjadi disepakati. KB-01–KB-08 tetap berlaku tanpa perubahan substantif; KB-10–KB-18 tetap belum final.

Sumber pelengkap: chat [“Memulai Aplikasi UMKM”](https://chatgpt.com/c/6aebc0fd-2840-83ec-ab92-7aa7364481eb), rumusan “KB-09: Penetapan Ruang Lingkup MVP” dan “Finalisasi KB-09”, 5 November 2026. T09-01–T09-16 belum tersimpan dalam folder proyek sebelum pekerjaan ini; keenam belas baris diambil dari rumusan sumber dan dipertahankan isinya. T09-17–T09-26 ditambahkan sesuai instruksi terbaru. Rekomendasi sumber yang tidak disahkan, seperti jumlah data uji atau kewajiban periode bulanan, tidak dijadikan keputusan final.

### B. Ruang lingkup MVP yang disepakati

| Bagian | Cakupan MVP |
| --- | --- |
| Registri induk | PIHAK, ORANG, BADAN_USAHA, UNIT_USAHA; identitas internal terpisah dari NIK/NIB |
| Hubungan dan operasi | HUBUNGAN_PIHAK_USAHA banyak-ke-banyak, KEGIATAN_USAHA, LOKASI_USAHA/cabang; satu orang dapat terkait banyak usaha dan satu usaha beberapa pihak |
| Profil Umum minimum | Identitas/ringkasan pihak dan unit, peran, lokasi/area operasi, kegiatan, status operasional, status pencatatan NIB serta sumber/status verifikasi sesuai tahap |
| NIB | Pencatatan status dan hasil pemeriksaan; nomor/sumber ketika tersedia; NIB tidak wajib pada registrasi awal |
| Sektor percontohan | Profil Industri Pengolahan Pangan yang merujuk kegiatan dan unit yang sama; produk, bahan baku, peralatan serta pengukuran produksi terkait |
| Pengguna dan kewenangan | Akun individual petugas internal, penugasan/cakupan, katalog kewenangan field per OPD; tidak ada akun pelaku UMKM |
| Pengesahan | Profil awal oleh verifikator berbeda dari pembuat; perubahan field biasa oleh satu petugas berwenang dengan validasi dan audit |
| Koreksi dan konflik | Usulan tidak langsung mengubah nilai resmi; konflik nilai oleh OPD pemilik field, sengketa kewenangan melalui mekanisme organisasi yang sah |
| Audit dan laporan dasar | Riwayat nilai/keputusan, pencarian/daftar, rekap pihak/unit/lokasi/kegiatan, NIB/verifikasi, profil industri/produk dan ringkasan produksi yang tidak mencampur satuan/status/periode |

Cabang yang memenuhi KB-01 tetap bagian unit induk; produk atau merek berbeda tidak menjadi usaha baru. Laporan jumlah usaha memakai identitas unit unik, bukan jumlah pemilik, cabang, kegiatan, produk atau baris hasil penggabungan data.

### C. Aturan bisnis KB-09 untuk rancangan

Aturan ini menerjemahkan keputusan pengguna ke dokumen; tidak memulai pembangunan atau menetapkan SOP yang masih terbuka.

| Kode | Aturan |
| --- | --- |
| RB-09.01 | Satu aplikasi dan satu SSOT, dengan arsitektur pilihan yang sudah dicatat. Kelayakan hosting tetap harus dibuktikan dan izin implementasi tetap terpisah |
| RB-09.02 | Registri inti mencakup PIHAK, ORANG, BADAN_USAHA, UNIT_USAHA, HUBUNGAN_PIHAK_USAHA, KEGIATAN_USAHA dan LOKASI_USAHA |
| RB-09.03 | Identitas internal terpisah dari NIK/NIB. Rincian jenis pihak tetap dapat memakai pengenal pihak sesuai model yang ada, tanpa menduplikasi orang/badan usaha |
| RB-09.04 | Hubungan pihak-unit banyak-ke-banyak dengan peran dan masa berlaku; jangan membatasi satu pemilik per usaha |
| RB-09.05 | Cabang dalam kepemilikan induk yang memenuhi KB-01 tidak otomatis membuat unit usaha baru |
| RB-09.06 | Hanya petugas pemerintah yang ditunjuk membuat profil awal; pelaku dilayani melalui petugas tanpa akun aplikasi |
| RB-09.07 | Pendataan bertahap tanpa kewajiban NIB awal; status pencatatan, verifikasi dan legalitas dibedakan |
| RB-09.08 | Pembuat profil awal tidak boleh mengesahkan profilnya sendiri; satu verifikator berbeda melakukan pengesahan sesuai mandat |
| RB-09.09 | Setiap field bisnis resmi memiliki tepat satu OPD penanggung jawab aktif. Calon fungsi bukan penetapan OPD resmi |
| RB-09.10 | Satu petugas berwenang dapat mengesahkan perubahan field biasa sesuai KB-07, dengan validasi, pemeriksaan konflik dan audit |
| RB-09.11 | Profil sektor yang ditetapkan adalah Industri Pengolahan Pangan; rujukan kegiatan/unit sama dengan Profil Umum, tanpa master identitas tandingan |
| RB-09.12 | Produk, bahan baku, peralatan dan produksi berulang dicatat sebagai record terkait. Setiap produksi mempunyai produk, nilai numerik, satuan, periode, sumber serta status verifikasi |
| RB-09.13 | Pengukuran per periode disimpan terpisah; Februari tidak menimpa Januari. Bulan kalender adalah contoh/usulan uji, bukan frekuensi pelaporan final. Satuan berbeda tidak dijumlah otomatis tanpa konversi baku |
| RB-09.14 | OPD lain boleh mengusulkan koreksi sesuai akses; usulan tidak langsung mengganti nilai resmi |
| RB-09.15 | Konflik nilai oleh OPD pemilik field dengan riwayat dan bukti; sengketa kewenangan melalui mekanisme organisasi yang sah, bukan penunjukan sepihak |
| RB-09.16 | Registrasi, perubahan/pengesahan/penolakan, hak akses, koreksi dan penyelesaian konflik mempunyai audit yang terlindungi |
| RB-09.17 | Hak akses diperiksa pada server; bukti/data sensitif tidak tersedia melalui akses atau lokasi publik yang tidak sah |
| RB-09.18 | Laporan dasar memisahkan objek, status dan periode. Draf sektoral tidak dihitung sebagai profil terverifikasi; tidak menggandakan usaha dari pemilik/cabang/produk atau versi koreksi |
| RB-09.19 | Data pengembangan/pengujian kelak sepenuhnya sintetis; tidak menggunakan data pribadi nyata |
| RB-09.20 | Transaksi bantuan/pelatihan, marketplace/penjualan, stok bahan baku, akuntansi, impor massal, integrasi OSS/Dukcapil, aplikasi mobile terpisah dan analitik lanjutan di luar MVP |
| RB-09.21 | Penambahan sektor atau fitur di luar lingkup ini memerlukan keputusan cakupan baru; identitas OPD peserta/wilayah pilot tetap belum ditetapkan |
| RB-09.22 | Versi PHP/MySQL dan kelayakan hosting PDN belum final; tidak mengakses atau mengubah cPanel PDN untuk pekerjaan dokumentasi ini |
| RB-09.23 | Calon fungsi pengampu UMKM, perindustrian dan perizinan hanya usulan. Kewenangan dikonfigurasi menurut penetapan sah, bukan ditanam tetap menurut nama OPD |
| RB-09.24 | Persetujuan model/sektor/MVP tidak memberi izin instalasi, kode aplikasi/pengujian kode, database, migrasi, seeder, dependensi atau perubahan konfigurasi hosting |

### D. Kamus data dan kewenangan MVP

[Kamus data MVP](kamus-data-mvp-kb09.md) memuat Profil Umum minimum dan seluruh 20 field sektor yang diminta: `profil_industri_id`, `kegiatan_id`, `jenis_pengolahan`, `status_profil_sektoral`, `produk_id`, `nama_produk`, `kategori_produk`, `merek_produk`, `satuan_produk`, `bahan_baku_utama`, `sumber_bahan_baku`, `jenis_peralatan`, `tingkat_teknologi`, `kapasitas_produksi`, `realisasi_produksi`, `kendala_produksi`, `kebutuhan_pengembangan`, `sumber_data`, `tanggal_pengukuran`, dan `status_verifikasi`.

Kamus membedakan **Wajib, Kondisional, Opsional, Berkala**. Setiap pengukuran yang dibuat wajib lengkap unsur produksinya, walaupun pencatatannya bersifat berkala. Angka, satuan dan periode dipisah; data belum diketahui tidak dianggap nol. Status profil sektoral dan status verifikasi pengukuran adalah fakta berbeda.

[Matriks kewenangan MVP](matriks-kewenangan-mvp-kb09.md) mengusulkan fungsi pengampu UMKM untuk registri/Profil Umum, perindustrian untuk sektor dan produksi, serta perizinan untuk pencatatan NIB. Nama OPD, petugas dan mandat resmi tetap BELUM FINAL. Ketiga fungsi tidak menjadi tiga pemilik atas field yang sama.

Hubungan profil industri-kegiatan dirancang sebagai pengait record agar satu unit dapat mempunyai beberapa kegiatan tanpa menggandakan profil induk. Nama tabel, representasi status, referensi kode dan rincian penyimpanan adalah rancangan, bukan migrasi atau keputusan organisasi.

### E. Matriks penerimaan T09-01–T09-26

Seluruh skenario berikut adalah **rencana pengujian**, belum dijalankan dan bukan kode pengujian.

| Kode | Pengujian | Hasil diharapkan |
| --- | --- | --- |
| T09-01 | Satu orang mendaftarkan dua usaha melalui petugas | 1 pihak, 2 usaha |
| T09-02 | Dua orang memiliki satu usaha | 2 pihak, 1 usaha |
| T09-03 | Tambahkan cabang | Jumlah unit usaha tetap |
| T09-04 | Registrasi tanpa NIB | Berhasil sebagai data belum lengkap legalitas |
| T09-05 | Petugas mengesahkan profil buatannya sendiri | Ditolak |
| T09-06 | Verifikator lain mengesahkan profil | Berhasil |
| T09-07 | OPD industri memperbarui kapasitas | Berhasil sesuai penugasan |
| T09-08 | OPD lain mengubah kapasitas secara langsung | Ditolak |
| T09-09 | Input produk pangan tambahan | Tidak muncul ID usaha baru |
| T09-10 | Input produksi Januari dan Februari | Dua catatan periode tersimpan |
| T09-11 | Koreksi kapasitas diajukan | Nilai resmi belum berubah |
| T09-12 | OPD pemilik mengesahkan koreksi | Nilai berubah, audit tersimpan |
| T09-13 | Dua petugas mengubah data pada versi lama | Perubahan usang ditolak |
| T09-14 | Pengguna tanpa izin membuka data sensitif | Ditolak |
| T09-15 | Hitung usaha dengan banyak cabang dan pemilik | Tidak terhitung ganda |
| T09-16 | Akses melalui permintaan langsung ke backend | Otorisasi tetap berlaku |
| T09-17 | Satu usaha memproduksi tiga produk pangan | Satu unit usaha dengan tiga record produk yang terkait benar |
| T09-18 | Produk mempunyai merek berbeda | Merek dicatat pada produk; tidak menambah unit usaha |
| T09-19 | Satu produk mempunyai banyak bahan baku | Setiap bahan menjadi record terkait produk yang benar, bukan satu kolom daftar |
| T09-20 | Pengukuran produksi Januari dicatat | Produk, nilai numerik, satuan, periode Januari, sumber, tanggal pengukuran dan status verifikasi tersimpan |
| T09-21 | Pengukuran produksi Februari ditambahkan | Catatan Februari terpisah; pengukuran Januari tetap tersedia |
| T09-22 | Pengukuran memakai satuan kg dan kemasan | Tidak dijumlah otomatis tanpa aturan konversi baku; bila belum ada aturan, ditampilkan terpisah |
| T09-23 | Petugas fungsi pengampu perindustrian mengesahkan fieldnya | Diizinkan jika field dan penugasannya dikonfigurasi sah dalam cakupan; tidak menebak nama OPD resmi |
| T09-24 | Petugas OPD nonpemilik mencoba mengesahkan produksi melalui permintaan langsung | Ditolak backend; nilai resmi tetap |
| T09-25 | Pengukuran produksi resmi dikoreksi | Keputusan/versi korektif baru dan audit tersimpan; nilai serta keputusan lama dapat ditelusuri |
| T09-26 | Profil sektoral Industri Pengolahan Pangan masih draf | Tidak dihitung sebagai profil terverifikasi; laporan memisahkan statusnya |

**Prasyarat agar skenario lama konsisten:** dua usaha T09-01 adalah dua kesatuan operasional berbeda; cabang T09-03/T09-15 memenuhi KB-01 (pemilik sama dan keterkaitan induk teridentifikasi). Istilah “OPD industri” pada skenario adalah fungsi pengampu yang dikonfigurasi dalam data sintetis, bukan penetapan instansi. Bulan Januari/Februari memakai tahun dan periode jelas dalam data uji yang nanti dipilih. Pendataan tanpa NIB tidak dianggap pengesahan legalitas.

Pengujian kelak juga memeriksa unsur produksi yang hilang/tidak numerik, penugasan berakhir, kegagalan transaksi/audit, referensi lintas unit yang tidak sah, serta nilai draf yang belum disahkan. Detail kasus uji dan data sintetis disusun setelah implementasi diizinkan; tidak ada skrip atau pengujian kode pada tahap ini.

### F. Hal yang tetap BELUM FINAL

- Nama OPD resmi peserta/pemilik setiap field dan penetapan kewenangannya; calon fungsi pada matriks tetap usulan.
- Identitas/penugasan petugas, mandat verifikator awal dan wilayah pilot.
- SOP, prosedur dan standar bukti verifikasi, kelengkapan tahap yang belum ditetapkan serta mekanisme peninjauan kembali.
- Referensi kategori/jenis/status/satuan, frekuensi dan cakupan pengukuran, agregasi serta konversi baku.
- **KB-10–KB-18 seluruhnya**, termasuk klasifikasi UMKM, privasi/retensi, integritas audit, duplikasi, hosting, integrasi, program, operasi dan kapasitas.
- Versi PHP/MySQL dan kelayakan hosting PDN; hasil PHP lokal tidak membuktikan versi hosting.
- Jumlah/cakupan data sintetis, target performa dan izin mulai implementasi/instalasi.

### G. Konsistensi dan riwayat finalisasi

Model KB-09 melengkapi KB-01–KB-08 tanpa mengubahnya: SSOT dan relasi banyak-ke-banyak dipertahankan; cabang/produk/merek tidak otomatis menjadi unit baru; pelaku tanpa akun; registrasi petugas; verifikator awal berbeda; satu pengesah field; konflik nilai oleh pemilik dengan audit. Seluruh baris KB-01–KB-08 serta KB-10–KB-18 dipertahankan.

Potensi benturan yang ditangani: sektor yang sebelumnya usulan kini ditetapkan; daftar berulang tidak dijadikan kolom tumpukan; profil sektor dikaitkan ke kegiatan tanpa identitas unit tandingan; status draf tidak dianggap terverifikasi; produksi tidak ditimpa atau dijumlah lintas satuan; usulan fungsi tidak diubah menjadi OPD resmi. Kewajiban periode bulanan dan SOP belum diputuskan.

5 November 2026 — Finalisasi dokumentasi KB-09 Model B dengan sektor Industri Pengolahan Pangan berdasarkan instruksi langsung pengguna; kamus data dan matriks fungsi ditambahkan; T09-01–T09-16 dari sumber dipertahankan dan T09-17–T09-26 ditambahkan. Dokumen terkait diselaraskan. Tidak ada implementasi aplikasi atau pengujian kode dan tidak ada akses cPanel PDN.

## KB-10 — Usulan klasifikasi UMKM, pengesahan dan KBLI berversi

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P1 (nomor dan prioritas register dipertahankan)  
**Status:** **MODEL B DISEPAKATI — rincian kewenangan kelembagaan masih terbuka.**  
**Batas pekerjaan:** dokumentasi saja; tidak ada kode aplikasi/pengujian kode, skema, migrasi, seeder, dependensi, konfigurasi hosting atau deployment.

### A. Keputusan utama dan tiga dimensi yang berbeda

SIJAI UMKM menghitung **usulan** skala usaha dari input yang sesuai tujuan, indikator, periode, cakupan dan versi aturan. Hasil hitung belum menjadi klasifikasi terverifikasi sampai **satu petugas OPD berwenang** memeriksa prasyarat dan mengesahkannya. Sistem bukan pengesah bisnis.

| Dimensi | Nilai atau isi | Batas penafsiran |
| --- | --- | --- |
| Skala usaha | Mikro; Kecil; Menengah; Di Luar Batas UMKM; Belum Dapat Diklasifikasikan | Hasil selalu membawa dasar indikator, tujuan, periode dan cakupan. Di Luar Batas berlaku untuk penilaian/indikator terkait, bukan putusan otomatis atas seluruh usaha/pelaku |
| Kegiatan ekonomi | Kode dan versi KBLI, judul/uraian asli, peran utama/tambahan dan masa berlaku | Kegiatan pangan dan perdagangan dapat berada dalam satu unit; kode kegiatan tidak menentukan skala Mikro/Kecil/Menengah |
| Status klasifikasi | usulan; menunggu verifikasi; disahkan; ditolak; perlu koreksi | Status keputusan berbeda dari kategori. Kategori usulan tidak ditampilkan sebagai kategori disahkan; penolakan tidak otomatis mengubah legalitas |

Klasifikasi internal tidak sama dengan perizinan, perubahan data OSS atau keputusan berhak menerima bantuan. KB-01–KB-09, termasuk registrasi bertahap tanpa kewajiban NIB awal, tetap berlaku. Input modal/penjualan untuk klasifikasi tidak dijadikan syarat baru semua registrasi awal.

### B. Rujukan hukum dan ambang dasar

Tanggal pemeriksaan sumber: **5 November 2026**. Ambang menggunakan **PP Nomor 7 Tahun 2021 Pasal 35**. Modal untuk pendirian/pendaftaran kegiatan mengecualikan tanah dan bangunan tempat usaha; penjualan tahunan digunakan dalam konteks kemudahan, pelindungan dan pemberdayaan sesuai pasal tersebut. Tujuan wajib dicatat; jangan memilih indikator hanya karena memberi kategori lebih kecil. [Naskah resmi PP 7/2021, Pasal 35–36](https://peraturan.bpk.go.id/Download/154506/PP%20Nomor%207%20Tahun%202021.pdf).

| Kategori | Modal usaha, rupiah, tanpa tanah/bangunan tempat usaha | Hasil penjualan tahunan, rupiah |
| --- | --- | --- |
| Mikro | ≤ 1.000.000.000 | ≤ 2.000.000.000 |
| Kecil | > 1.000.000.000 dan ≤ 5.000.000.000 | > 2.000.000.000 dan ≤ 15.000.000.000 |
| Menengah | > 5.000.000.000 dan ≤ 10.000.000.000 | > 15.000.000.000 dan ≤ 50.000.000.000 |

Pasal 35 ayat (7) memungkinkan perubahan nominal. Pasal 36 mengatur penggunaan kriteria tambahan untuk kepentingan tertentu dan pertimbangan Menteri pada ayat (2); indikator sektoral tambahan tidak ditetapkan sepihak oleh proyek. [PP 7/2021](https://peraturan.bpk.go.id/Download/154506/PP%20Nomor%207%20Tahun%202021.pdf).

Metadata JDIH BPK mencatat PP berlaku **2 Februari 2021**. Versi aturan harus memuat dasar hukum, tanggal berlaku dan revisi; tanggal akhir tidak diisi dengan dugaan bahwa aturan sudah berakhir. Ini rujukan yang diperiksa, bukan janji ambang tidak akan berubah. [Metadata resmi PP 7/2021](https://peraturan.bpk.go.id/Details/161837/pp-no-7-tahun-2021).

Label “Di Luar Batas UMKM” dan “Belum Dapat Diklasifikasikan” merupakan label operasional penilaian SIJAI UMKM yang ditetapkan pengguna. Nilai melebihi batas atas tidak dipaksa Menengah. Nilai kosong, tidak lengkap, belum sesuai periode atau belum layak dipakai tidak otomatis diberi Mikro. Angka nol yang benar-benar dilaporkan tetap dibedakan dari kosong dan memerlukan pemeriksaan kelayakan sumber.

### C. Aturan bisnis RB-10.01–RB-10.24

| Kode | Aturan |
| --- | --- |
| RB-10.01 | Model B: sistem menghasilkan usulan; satu petugas berwenang memverifikasi lalu mengesahkan. Hasil hitung sendiri bukan klasifikasi terverifikasi |
| RB-10.02 | Skala usaha, KBLI kegiatan dan status klasifikasi dipisah. Kategori internal bukan keputusan legalitas atau kelayakan bantuan |
| RB-10.03 | Tujuan klasifikasi wajib; dasar modal dan penjualan tahunan dipilih menurut konteks aturan, bukan satu prioritas global yang ditebak |
| RB-10.04 | Input ekonomi mempunyai nilai, mata uang, periode, sumber, cakupan dan status verifikasi; input/versi yang dipakai hasil harus dapat ditelusuri |
| RB-10.05 | Indikator modal mengecualikan tanah dan bangunan tempat usaha. Jika pengecualian belum dipastikan, penilaian ditahan untuk koreksi/verifikasi |
| RB-10.06 | Nilai kosong berbeda dari nol. Data hilang tidak diisi nol untuk memicu batas Mikro; angka nol yang dilaporkan tidak otomatis menjadi data hilang |
| RB-10.07 | Data belum lengkap/tidak layak menghasilkan Belum Dapat Diklasifikasikan atau penahanan proses, bukan klasifikasi Mikro yang dipaksakan |
| RB-10.08 | Penjualan parsial tidak otomatis dianualisasi. Periode tiga bulan bukan penjualan tahunan penuh; standar tahun buku nonkalender tetap terbuka |
| RB-10.09 | Hasil berdasar modal dan berdasar penjualan disimpan terpisah menurut tujuan/indikator/periode/cakupan/versi aturan, meskipun kategorinya berbeda |
| RB-10.10 | Klasifikasi internal dapat ditautkan ke Unit Usaha, tetapi cakupan pelaku usaha menurut aturan harus diperiksa sebelum pengesahan administratif. Jangkar unit bukan keputusan cakupan hukum |
| RB-10.11 | Beberapa unit satu orang/badan tidak otomatis dijumlah maupun dipisahkan untuk penilaian legal. Daftar subjek/unit yang dicakup dan dasar penilaiannya harus jelas; cakupan hukum masih memerlukan penetapan |
| RB-10.12 | Cabang yang memenuhi KB-01 tidak membuat unit baru atau menggandakan input/hasil yang cakupannya sama; sumber konsolidasi tidak diulang pada setiap cabang |
| RB-10.13 | Penilaian berperiode serta perubahan/keputusan lamanya dipertahankan. Penilaian periode baru atau penghitungan ulang membuat record/versi baru, bukan menimpa hasil historis |
| RB-10.14 | Melebihi Rp10 miliar untuk modal atau Rp50 miliar untuk penjualan tahunan menghasilkan Di Luar Batas UMKM untuk indikator/aturan terkait; tidak dipaksa Menengah atau dianggap putusan legal menyeluruh |
| RB-10.15 | Pengesahan resmi internal memerlukan petugas dengan penugasan aktif, OPD pemilik field, cakupan dan izin yang sah; nonpemilik/admin teknis tidak otomatis berwenang |
| RB-10.16 | Koreksi mengikuti KB-07/KB-08 dengan keputusan/versi baru dan alasan. Usulan berbasis versi usang ditolak/ditahan; data konflik tidak dilewati lewat pengesahan biasa |
| RB-10.17 | Input, perhitungan, penolakan/pengesahan dan perubahan aturan mempunyai riwayat/audit. Hasil mengikat versi input/aturan dan tanggal acuan; pembaruan aturan tidak mengubah diam-diam hasil historis |
| RB-10.18 | Indikator sektoral tambahan memerlukan dasar hukum yang sah sesuai Pasal 36; proyek tidak mengarang indikator/pembobotan atau menganggap hasil sebagai persetujuan program |
| RB-10.19 | Katalog terbaru mengacu Peraturan BPS 7/2025: setiap kode disertai versi, judul dan uraian asli sumber resmi. Kode angka tidak diubah menjadi integer yang menghilangkan karakter aslinya |
| RB-10.20 | Satu unit dapat mempunyai beberapa kegiatan, termasuk pengolahan pangan dan perdagangan tambahan, tanpa otomatis membuat unit baru atau menambah sektor MVP |
| RB-10.21 | Peran kegiatan utama/tambahan memuat dasar dan periode berlaku. Pada satu unit tidak ada kegiatan utama aktif ganda pada saat yang sama tanpa kebijakan khusus yang sah; kebijakan pengecualian tidak diasumsikan ada |
| RB-10.22 | Kode KBLI 2020 dan penetapan kegiatan utama historis tidak dihapus. Perubahan kegiatan utama/kode membuat riwayat berlaku baru, bukan menimpa referensi lama |
| RB-10.23 | Pemetaan KBLI berdasar tabel BPS 22 April 2026 membedakan satu-ke-satu, satu-ke-banyak dan banyak-ke-satu. Hasil adalah kandidat; pemetaan ambigu memerlukan pemeriksaan petugas, bukan pemilihan kode pertama otomatis |
| RB-10.24 | Konversi katalog/kode internal tidak mengubah OSS, NIB atau dokumen perizinan resmi. Pengelolaan rujukan internal dan pencatatan sumber eksternal dibedakan dan diaudit |

### D. Periode, cakupan dan gerbang pengesahan

Pengukuran modal merupakan posisi pada tanggal/acuan yang dinyatakan; penjualan merupakan aliran selama periode. Jangan mengubah keduanya menjadi angka dengan arti periode yang sama. Setiap record tetap menyatakan periode mulai/selesai atau tanggal posisi yang direpresentasikan sebagai periode titik. Mata uang rupiah/IDR dipakai untuk membandingkan ambang di atas; mata uang lain tidak dikonversi memakai kurs tebakan.

Untuk penjualan, cakupan waktu dan kelengkapan tahun harus diketahui; periode parsial tidak dikali otomatis menjadi setahun. Penetapan tahun buku nonkalender, kurs bila diperlukan dan kelayakan cakupan angka belum final. Input yang belum memenuhi prasyarat dapat tetap dicatat menurut hak akses tanpa menjadi dasar hasil disahkan.

Cakupan penilaian menunjuk unit jangkar, pihak/subjek yang relevan, unit/cabang yang tercakup, indikator, periode, sumber dan dasar pemilihannya. Daftar cakupan mencegah nilai konsolidasi dihitung ulang; bukan rumus legal otomatis untuk satu pemilik. SOP penilaian kelompok unit/cabang/badan usaha masih terbuka. Hasil internal tidak dipromosikan menjadi pengesahan administratif tanpa pemeriksaan cakupan yang sah.

Alur rancangan: input diperiksa → aturan/versi dan tujuan dipilih → usulan dihitung → menunggu verifikasi → satu petugas berwenang memutus disahkan, ditolak atau perlu koreksi dengan alasan. Kategori disahkan terisi hanya pada keputusan sah; kategori usulan dan keputusan lama tetap terlacak. Kesalahan input/aturan/cakupan memerlukan revisi dan perhitungan baru, bukan penggantian kategori tanpa dasar. Nilai, hasil, status dan audit disimpan konsisten dalam transaksi pada implementasi kelak.

### E. KBLI 2025 dan konversi 2020–2025

Katalog mengacu **Peraturan BPS Nomor 7 Tahun 2025**. Pasal 7 menetapkan mulai berlaku saat diundangkan; metadata resmi mencatat pengundangan **18 Desember 2025**, berbeda dari tanggal penetapan 17 Desember. Gunakan tanggal dan versi dengan maknanya, bukan saling menggantikan. [Metadata Ditjen PP](https://peraturan.go.id/id/peraturan-bps-no-7-tahun-2025), [naskah resmi pada JDIH BKPM](https://jdih-storage.bkpm.go.id/jdih/jdih/peraturan-bps-no-7-tahun-2025-.pdf).

**Tabel Konversi KBLI 2020–KBLI 2025**, BPS, rilis **22 April 2026**, katalog 1302033, publikasi 03100.26007, menjadi sumber pemetaan. Hubungan kode dapat pecah atau bergabung; jangan menafsirkan semuanya sebagai ganti nama satu-ke-satu. [Publikasi resmi BPS](https://www.bps.go.id/id/publication/2026/04/22/909d503355d2b7664e43dea8/tabel-konversi-kbli-2020---kbli-2025.html).

Rancangan menyimpan pasangan kode/versi asal dan tujuan, jenis pemetaan, sumber serta status pemeriksaan. Satu-ke-satu menghasilkan kandidat untuk diperiksa/dipakai sesuai penugasan; satu-ke-banyak atau banyak-ke-satu tidak otomatis mengganti seluruh record. Pemilihan cakupan/uraian yang sesuai dicatat petugas. Katalog lama dipertahankan untuk referensi historis, bukan dinyatakan versi terbaru.

Pemilihan kegiatan utama mempunyai sumber/dasar dan masa berlaku. Beberapa kode historis untuk satu kegiatan tidak membuat beberapa kegiatan utama aktif; aturan utama diperiksa pada unit dan rentang waktu, bukan masing-masing versi KBLI secara terpisah. Perubahan kegiatan utama tidak menghapus kegiatan lama. Tidak ada kode pangan/perdagangan contoh yang dikarang; pasangan kode dan uraian untuk pengujian kelak diambil persis dari katalog/tabel resmi.

Metadata halaman JDIH BPS memuat ringkasan tanggal berlaku yang tidak seragam dengan tanggal pengundangannya; acuan rancangan memakai Pasal 7 naskah peraturan dan metadata pengundangan Ditjen PP. Halaman publikasi BPS langsung sempat membatasi akses (403); judul/tanggal rilis terbaca pada metadata resmi terindeks, dan PDF publikasi resmi BPS dapat dibaca. Tidak dilakukan impor katalog atau konversi kode usaha nyata pada pekerjaan ini.

### F. Kamus konseptual dan kewenangan

Struktur ekonomi, aturan, hasil, katalog KBLI, relasi kegiatan–KBLI dan pemetaan versi ditambahkan pada [kamus data yang sudah ada](kamus-data-mvp-kb09.md), tanpa membuat dokumen/tabel tandingan. Pengukuran ekonomi terpisah dari produksi fisik KB-09: rupiah penjualan/modal tidak disamakan dengan kg/kemasan produksi.

[Matriks kewenangan](matriks-kewenangan-mvp-kb09.md) memisahkan pengelola input ekonomi, aturan/katalog dan pengesah hasil. Semua fungsi masih usulan; **OPD resmi pemilik field klasifikasi dan penugasan verifikator belum ditetapkan**. Admin atau mesin hitung bukan OPD pemilik field tambahan. Hak server, satu pemilik field dan audit KB-01–KB-09 tetap berlaku.

### G. Kriteria penerimaan dan T10-01–T10-26

Seluruh skenario berikut adalah **rencana**, belum dijalankan. Pada uji ambang, asumsi datanya valid: IDR, tujuan/dasar/aturan yang sesuai, modal sudah mengecualikan tanah/bangunan, penjualan tahunan penuh untuk uji tahunan, serta cakupan yang dinyatakan. Hasil uji hitung adalah usulan, bukan pengesahan otomatis.

| Kode | Skenario | Hasil yang diharapkan |
| --- | --- | --- |
| T10-01 | Modal Rp1 miliar | Usulan Mikro pada dasar modal |
| T10-02 | Modal Rp1.000.000.001 | Usulan Kecil pada dasar modal |
| T10-03 | Modal Rp5 miliar | Tetap usulan Kecil |
| T10-04 | Modal lebih dari Rp10 miliar | Di Luar Batas UMKM untuk indikator modal; tidak dipaksa Menengah |
| T10-05 | Penjualan tahunan Rp2 miliar | Usulan Mikro pada dasar penjualan |
| T10-06 | Penjualan tahunan Rp2.000.000.001 | Usulan Kecil pada dasar penjualan |
| T10-07 | Penjualan tahunan Rp15 miliar | Tetap usulan Kecil |
| T10-08 | Penjualan tahunan lebih dari Rp50 miliar | Di Luar Batas UMKM untuk indikator penjualan |
| T10-09 | Hasil modal berbeda dari hasil penjualan | Keduanya tersimpan menurut dasarnya, tidak saling menimpa |
| T10-10 | Nilai ekonomi kosong | Belum Dapat Diklasifikasikan; tidak diubah menjadi nol/Mikro |
| T10-11 | Penjualan baru mencakup tiga bulan | Tidak dianggap tahunan penuh dan tidak dianualisasi otomatis |
| T10-12 | Modal belum mengecualikan tanah/bangunan tempat usaha | Ditahan untuk perbaikan/verifikasi sebelum klasifikasi yang sah |
| T10-13 | Satu pemilik mempunyai banyak unit usaha | Tidak dijumlah otomatis; cakupan hukum diperiksa |
| T10-14 | Usaha mempunyai cabang yang memenuhi KB-01 | Cabang tidak menggandakan unit/input/klasifikasi cakupan yang sama |
| T10-15 | Satu unit mempunyai pengolahan pangan dan perdagangan | Dua kegiatan pada unit yang sama; tidak menciptakan unit atau sektor MVP baru |
| T10-16 | Kegiatan utama diganti | Dasar/periode baru tercatat, riwayat lama terjaga dan tidak ada utama aktif ganda tanpa kebijakan sah |
| T10-17 | Ada kode KBLI 2020 historis | Kode/versi dan relasi historis tetap tersimpan |
| T10-18 | Tabel resmi memberi konversi satu-ke-satu | Kandidat pemetaan dengan versi/sumber tersimpan; bukan perubahan OSS |
| T10-19 | Konversi satu-ke-banyak | Memerlukan pemeriksaan, tidak memilih tujuan pertama otomatis; jenis banyak-ke-satu juga dibedakan dalam rancangan |
| T10-20 | Katalog internal dikonversi | Data OSS/NIB/dokumen perizinan tidak berubah oleh tindakan internal ini |
| T10-21 | OPD nonpemilik mencoba mengesahkan | Ditolak server; hasil disahkan tidak berubah |
| T10-22 | Petugas berwenang memeriksa dan mengesahkan usulan sah | Kategori disahkan, pengesah, waktu dan audit tercatat konsisten |
| T10-23 | Hasil yang sudah disahkan dikoreksi | Versi/keputusan korektif baru terhubung; hasil dan audit lama terjaga |
| T10-24 | Versi aturan berubah | Hasil historis tetap terikat aturan/input lamanya; penilaian baru tidak menimpa otomatis |
| T10-25 | Hasil masih usulan/menunggu verifikasi | Tidak dihitung sebagai hasil disahkan/terverifikasi dalam laporan |
| T10-26 | Pembaruan memakai versi usang | Ditolak/ditahan; tidak menimpa versi terbaru |

Kriteria penerimaan mencakup ketepatan batas, pemisahan indikator/kategori/status/KBLI, kelengkapan sumber/periode/cakupan, larangan agregasi atau konversi tanpa dasar, hak pengesah, riwayat dan konsistensi transaksi. Rancangan pemeriksaan tambahan juga perlu mencakup batas tepat Rp10 miliar/Rp50 miliar, nol yang benar-benar dilaporkan, mata uang tidak cocok, aturan belum berlaku dan penugasan berakhir; tidak ada skrip pengujian dibuat.

### H. Keputusan turunan yang tetap terbuka

- OPD resmi pemilik field input/aturan/kategori disahkan dan penugasan verifikator; usulan fungsi bukan mandat organisasi.
- Tata cara pemeriksaan modal/penjualan, SOP bukti, pengecualian tanah/bangunan dan legitimasi sumber.
- Cakupan hukum pelaku usaha untuk cabang atau badan dengan beberapa unit; aturan agregasi/pemisahan legal tidak disimpulkan dari relasi pemilik saja.
- Standar tahun buku nonkalender, kelengkapan penjualan parsial, tanggal acuan aturan untuk periode yang melintasi perubahan, dan konversi mata uang bila diperlukan.
- Prosedur adopsi/pembaruan aturan dan katalog oleh pihak berwenang; bukti penetapan kegiatan utama dan kebijakan khusus bila diperlukan.
- **KB-11–KB-18 tetap terbuka**, termasuk privasi KB-11, audit teknis KB-12, hosting KB-14 dan kapasitas KB-18.
- Persetujuan implementasi, instalasi dan produksi; pekerjaan saat ini tetap dokumentasi.

### I. Konsistensi, sumber dan catatan perubahan

Acuan bisnis adalah berkas instruksi pengguna “FINALISASI KEPUTUSAN BISNIS KB-10”, diterima pada 5 November 2026; rujukan hukum/katalog diperiksa pada sumber resmi di bagian B/E. Tidak ditemukan alasan mengubah KB-01–KB-09 secara substantif. Potensi benturan diselesaikan dengan membedakan: unit operasional vs cakupan hukum pelaku; data produksi fisik vs ekonomi; penghitungan usulan vs pengesahan; registrasi tanpa NIB vs kelengkapan klasifikasi; KBLI vs skala; katalog internal vs OSS. Rinciannya dicatat pada [addendum audit KB-10](08-audit-konsistensi-dokumentasi.md).

5 November 2026 — KB-10 Model B didokumentasikan dengan **24 aturan bisnis dan 26 skenario T10**. Kamus, relasi konseptual, matriks, arsitektur, tata kelola, roadmap, indeks dan panduan diselaraskan pada berkas yang sudah ada. Baris KB-01–KB-09 dan KB-11–KB-18 dipertahankan. Pengemasan ZIP terverifikasi dilakukan setelah seluruh perubahan dokumen selesai. Tidak ada kode aplikasi, skema database, migrasi, seeder, dependensi, hosting atau deployment yang dibuat/diubah.

## KB-11 — Perlindungan data bertingkat dan kebutuhan tugas

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P0, sesuai register  
**Status:** **MODEL B DISEPAKATI PADA TINGKAT DOKUMENTASI — rincian kelembagaan dan penerapan final masih terbuka.**  
**Model:** Perlindungan Data Bertingkat Berdasarkan Sensitivitas dan Kebutuhan Tugas  
**Acuan bisnis:** instruksi langsung pemilik produk dalam berkas “FINALISASI DOKUMENTASI KB-11”.

### A. Keputusan inti

SIJAI UMKM adalah aplikasi internal pemerintah daerah dengan satu SSOT lintas OPD. Pemrosesan harus mempunyai tujuan dan dasar sah; akses minimum dan penolakan default berlaku pada setiap jalur server. Keputusan akses mengevaluasi peran, OPD, wilayah, field/objek, tindakan, tujuan dan penugasan aktif.

Hak melihat, mengubah, mengusulkan, mengesahkan, mengunduh, mengekspor dan mengelola hak akses dipisah. Pemilik field operasional tidak otomatis menjadi **Pengendali Data Pribadi secara hukum**, dan tidak otomatis boleh membaca seluruh dokumen/data terkait. Admin teknis serta pengelola utama tidak memperoleh hak sensitif menyeluruh karena jabatannya.

KB-01–KB-10 tetap berlaku. Hubungan kepemilikan bukan izin login atau izin data pemilik lain; pelaku tetap tanpa akun. Pengesahan satu petugas, verifikator profil awal berbeda serta penyelesaian konflik nilai oleh pemilik field tetap diperiksa bersama batas privasi. Klasifikasi ekonomi KB-10 tidak memberi hak membaca semua angka ekonomi.

### B. Empat klasifikasi internal

Label di bawah adalah **rancangan kebijakan akses internal model B**, bukan kategori hukum yang dikutip langsung dari UU PDP. Contoh/pemetaan final per field, OPD, konteks dan keluaran masih perlu disahkan.

| Kelas internal | Contoh rancangan | Aturan akses minimum |
| --- | --- | --- |
| PUBLIK-TERVERIFIKASI | Statistik agregat yang telah diperiksa dan layak diumumkan | Memerlukan pemeriksaan/persetujuan publikasi dan risiko identifikasi ulang; tidak membuka seluruh profil usaha |
| INTERNAL | ID unit, nama dagang, kegiatan, status profil | Hanya petugas menurut tugas/tujuan/cakupan; tidak otomatis boleh ekspor |
| TERBATAS | Kontak pribadi, hubungan pemilik, modal/penjualan, alamat pribadi | Hak spesifik sesuai penugasan, tujuan dan objek; kebutuhan tugas harus terbukti |
| SANGAT TERBATAS | NIK lengkap, dokumen identitas, bukti sensitif | Hak khusus, pemeriksaan server dan pencatatan akses; penyimpanan privat/terlindungi |

Label satu field tidak otomatis berlaku untuk semua record/kombinasinya. Nama dagang/lokasi usaha yang sekaligus mengungkap identitas atau alamat rumah perlu dinilai konteksnya. Data turunan/laporan tidak boleh diturunkan kelasnya hanya karena dipindah ke layar/format lain. Pemilihan kelas final dan aturan penyamaran masih terbuka.

PUBLIK-TERVERIFIKASI tidak menambah portal/akun masyarakat atau mengizinkan publikasi sekarang. Publikasi, bila disetujui melalui kanal resmi, harus memeriksa risiko identifikasi ulang; ambang kelompok kecil tidak diisi dengan angka tebakan.

### C. Landasan hukum dan tenggat

Sumber resmi diperiksa **5 November 2026**: [UU 27/2022 pada JDIH Komdigi](https://jdih.komdigi.go.id/produk_hukum/view/id/832/t/crc32/).

| Rujukan UU PDP | Pokok yang dipakai dalam rancangan |
| --- | --- |
| Pasal 14 | Permohonan hak tercatat elektronik/nonelektronik |
| Pasal 16 | Prinsip pemrosesan dan pembatasan tujuan |
| Pasal 20 | Dasar pemrosesan sah |
| Pasal 30 | Pembaruan/perbaikan dan pemberitahuan hasil |
| Pasal 31 | Rekaman aktivitas pemrosesan |
| Pasal 32 | Akses data dan jejak pemrosesan subjek |
| Pasal 34 | Penilaian dampak untuk risiko tinggi |
| Pasal 35 dan terkait | Keamanan sesuai sifat/risiko pemrosesan |
| Pasal 42–45 | Pengakhiran, penghapusan/pemusnahan bersyarat dan pemberitahuan |
| Pasal 46 | Pemberitahuan kegagalan pelindungan |
| Pasal 53 | Penetapan fungsi pelindungan sesuai ketentuan |

| Konteks tenggat | Batas dan peristiwa relevan |
| --- | --- |
| Pasal 30 | 3 x 24 jam sejak Pengendali menerima permintaan pembaruan/perbaikan; hasil diberitahukan |
| Pasal 32 | 3 x 24 jam sejak Pengendali menerima permintaan akses |
| Pasal 46 | Pemberitahuan tertulis kegagalan pelindungan paling lambat 3 x 24 jam kepada subjek dan lembaga; konteks serta pengecualian sah diperiksa |

Hak/pengecualian mengikuti hukum dan penilaian pejabat berwenang; bukan dispensasi otomatis karena aplikasi pemerintah. Pasal 46 juga mengatur isi pemberitahuan dan kondisi pemberitahuan masyarakat. Rincian penerima/kanal resmi belum ditetapkan.

Catatan hukum terkini: **Putusan MK 151/PUU-XXII/2024, 30 Juli 2025**, memaknai kata “dan” pada Pasal 53 ayat (1) huruf b menjadi “dan/atau”. Pemeriksaan kebutuhan fungsi PDP tidak boleh memakai teks lama seolah semua kondisi harus terpenuhi bersama. Penunjukan orang/organisasinya tetap terbuka. [Amar resmi yang disampaikan MK](https://s.mkri.id/simpp/ds/6889cf732767b.pdf).

Kearsipan mengacu **UU 43/2009**, khususnya dasar JRA dan penyusutan yang sah, serta ketentuan ANRI. [UU Kearsipan](https://peraturan.bpk.go.id/Details/38788/uu-no-43-tahun-2009), [layanan JRA daerah ANRI](https://www.anri.go.id/layanan-publik/jra/daerah). **JRA Pemkab Sinjai yang berlaku dan pemetaan seri arsipnya belum terverifikasi/ditetapkan dalam pekerjaan ini**. Halaman layanan ANRI bukan pengganti JRA daerah, dan JRA instansi/daerah lain tidak dipakai sebagai angka retensi Sinjai.

### D. RB-11.01–RB-11.30

| Kode | Ketentuan pemilik produk | Penjelasan rancangan |
| --- | --- | --- |
| RB-11.01 | Model perlindungan bertingkat dan kebutuhan tugas. | Perlindungan mengikuti sensitivitas dan kebutuhan tugas; satu aplikasi/SSOT tidak berarti semua petugas dapat membaca seluruh isinya. |
| RB-11.02 | Setiap pemrosesan mempunyai tujuan dan dasar yang sah. | Tetapkan tujuan dan dasar pemrosesan per layanan/tindakan sebelum data diproses; tidak menganggap status instansi pemerintah atau persetujuan sebagai dasar otomatis semua layanan. |
| RB-11.03 | Empat tingkat klasifikasi akses internal. | Gunakan PUBLIK-TERVERIFIKASI, INTERNAL, TERBATAS dan SANGAT TERBATAS sebagai rancangan label internal; bukan penggolongan hukum langsung dari UU PDP. |
| RB-11.04 | Setiap field mempunyai tingkat sensitivitas. | Katalog setiap field memuat sensitivitas dan konteks; pemetaan contoh belum merupakan penetapan final per OPD. Field yang belum jelas tidak dibuka secara default. |
| RB-11.05 | Hak akses dievaluasi berdasarkan peran, OPD, wilayah, field, tindakan, tujuan, dan penugasan. | Periksa peran, OPD, wilayah, objek/field, tindakan, tujuan dan penugasan aktif secara bersamaan sesuai kebijakan sah; satu atribut yang cocok tidak cukup. |
| RB-11.06 | Akses ditolak secara default. | Jika izin, tujuan, cakupan atau penugasan tidak terbukti, server menolak. Kondisi tidak diketahui tidak diberi izin otomatis. |
| RB-11.07 | Izin baca, ubah, usul, sahkan, unduh, ekspor, dan administrasi akses dipisahkan. | Izin melihat, mengubah, mengusulkan, mengesahkan, mengunduh, mengekspor dan administrasi akses berbeda; izin satu tindakan tidak otomatis memberi tindakan lain. |
| RB-11.08 | Pemilik field tidak otomatis memiliki akses semua informasi terkait. | OPD pemilik field tidak otomatis membaca semua data/dokumen pada profil atau semua data pihak terkait; Pengendali secara hukum juga bukan label yang disimpulkan dari pemilik field. |
| RB-11.09 | NIK disimpan terlindungi, disamarkan, dan dibatasi. | NIK lengkap disimpan terlindungi; tampilan biasa menyamarkan dan hak khusus dibatasi tujuan/cakupan. Pencarian, respons dan log tidak membocorkan NIK atau keberadaan identitas tanpa izin. |
| RB-11.10 | Modal, omzet, dan informasi ekonomi dibatasi sesuai kebutuhan tugas. | Modal, hasil penjualan tahunan dan data ekonomi dibatasi sesuai tugas/cakupan; hak pengesah klasifikasi tidak otomatis membuka seluruh data ekonomi semua usaha. |
| RB-11.11 | Dokumen identitas disimpan privat dengan kontrol akses. | Dokumen identitas/bukti sensitif disimpan privat; akses file tetap diperiksa di server, tanpa tautan publik permanen. |
| RB-11.12 | Pemeriksaan akses berlaku juga untuk API, pencarian, dokumen, dan ekspor. | Aturan yang sama berlaku pada formulir/aksi, API, pencarian, URL dokumen, unduhan dan ekspor; bukan hanya pembatasan tombol. |
| RB-11.13 | Akses lintas OPD mengikuti lingkup tugas yang sah. | Akses lintas OPD memerlukan lingkup/tujuan penugasan yang sah, bukan otomatis ditolak semua atau dibuka semua. Hak usul OPD lain tetap dibedakan dari hak pengesahan. |
| RB-11.14 | Kepemilikan bersama tidak otomatis membuka data pribadi pihak lain. | Kepemilikan bersama dan hubungan pihak-usaha tidak memberi pemohon hak melihat NIK, kontak atau dokumen pribadi pihak lain; keluaran diperiksa/dibatasi. |
| RB-11.15 | Akun petugas wajib individual, bukan akun bersama. | Petugas memakai akun individual yang dapat ditelusuri; tidak menggunakan akun bersama untuk layanan atau pengesahan. |
| RB-11.16 | Pencabutan atau berakhirnya penugasan membatasi hak akses. | Pencabutan/berakhirnya penugasan berlaku pada pemeriksaan server berikutnya, termasuk pekerjaan ekspor/unduh yang tertunda; halaman yang sudah terbuka tidak mempertahankan hak lama. |
| RB-11.17 | Hak subjek data tetap dilayani tanpa akun masyarakat melalui petugas. | Pelaku tetap tanpa akun sesuai KB-06; hak subjek dilayani melalui permohonan tercatat elektronik/nonelektronik lewat petugas/saluran resmi. |
| RB-11.18 | Permohonan data sensitif memerlukan verifikasi identitas/kewenangan pemohon. | Sebelum mengungkap atau mengubah data sensitif atas permintaan, periksa identitas/kewenangan pemohon; bukti diperiksa secara privat dan tidak membuka data pihak ketiga. |
| RB-11.19 | Setiap permohonan mempunyai nomor layanan, status, petugas, waktu dan hasil. | Gunakan nomor layanan unik, jenis hak, objek, petugas, waktu penerimaan, tenggat, status, hasil dan riwayat; pakai PERMOHONAN_LAYANAN yang ada bila fungsinya sama. |
| RB-11.20 | Tenggat layanan mengikuti UU PDP dan pengecualian yang sah. | Tenggat mengikuti konteks UU PDP, termasuk 3 x 24 jam Pasal 30, 32 dan 46; alur internal tidak memperlonggar atau mengulang waktu mulai tanpa dasar hukum. Pengecualian harus sah dan tercatat. |
| RB-11.21 | Ekspor massal memerlukan izin tersendiri, tujuan, pembatasan cakupan dan audit. | Ekspor massal memerlukan hak/persetujuan tersendiri, tujuan serta batas field/OPD/wilayah/jumlah dan audit. Hak baca atau label INTERNAL bukan izin ekspor bebas. |
| RB-11.22 | Publikasi data memerlukan pemeriksaan risiko identifikasi ulang. | Publikasi/agregat ditinjau risiko identifikasi ulang, termasuk kombinasi kelompok kecil dan sumber lain; label PUBLIK-TERVERIFIKASI baru untuk keluaran yang telah diperiksa dan disetujui. |
| RB-11.23 | Retensi mengikuti Jadwal Retensi Arsip dan aturan hukum, tanpa menetapkan durasi sembarangan. | Retensi memetakan seri data/arsip ke JRA Pemkab Sinjai yang berlaku dan ketentuan hukum; tidak mengarang durasi atau memakai JRA instansi lain sebagai pengganti. |
| RB-11.24 | Penghapusan atau pemusnahan mengikuti prosedur yang sah dan tidak merusak arsip yang wajib dipertahankan. | Pengakhiran, penghapusan/pemusnahan/penyusutan mengikuti keputusan berwenang, syarat hukum/JRA dan penahanan sah; tidak menghapus otomatis atau menyimpan semua data pribadi selamanya demi audit. |
| RB-11.25 | Setiap indikasi insiden dicatat, dinilai, ditangani dan dieskalasi. | Setiap indikasi insiden mempunyai catatan waktu, data/cakupan terdampak, penilaian, pengamanan dan eskalasi; tidak menunggu seluruh investigasi selesai untuk mulai pencatatan. |
| RB-11.26 | Kegagalan pelindungan data ditangani dengan proses pemberitahuan sesuai Pasal 46 UU PDP. | Kegagalan pelindungan yang relevan memicu penilaian/pemberitahuan Pasal 46 oleh Pengendali/pejabat sah. Catat tenggat dan bukti penyampaian; dokumentasi ini tidak mengirim pemberitahuan nyata. |
| RB-11.27 | Rekaman pemrosesan dan audit dilindungi dari perubahan yang tidak sah. | Rekaman pemrosesan, akses sensitif dan keputusan dilindungi dari perubahan tidak sah; log tidak menyalin rahasia/dokumen utuh. Standar teknis dan retensinya tetap mengikuti penetapan KB-12/JRA. |
| RB-11.28 | Pengendali, Prosesor, dan petugas fungsi pelindungan data ditetapkan melalui keputusan kelembagaan. | Pengendali, Prosesor dan fungsi pelindungan data ditentukan melalui keputusan kelembagaan yang sah. Admin/koordinator/pemilik field tidak otomatis memegang peran hukum tersebut. |
| RB-11.29 | Penilaian risiko dan kebutuhan DPIA diperiksa sebelum data nyata digunakan. | Sebelum data nyata digunakan, periksa risiko dan kebutuhan DPIA; untuk pemrosesan berisiko tinggi, lakukan penilaian dampak sesuai Pasal 34 oleh fungsi berwenang. Belum ada DPIA yang dianggap selesai. |
| RB-11.30 | Keputusan KB-11 hanya mengesahkan dokumentasi, bukan implementasi kode atau produksi. | Keputusan ini hanya memperbarui dokumentasi; tidak mengizinkan kode, migrasi, seeder, dependensi, konfigurasi server, data nyata atau produksi. |

### E. Alur hak subjek data tanpa akun

1. Petugas/saluran resmi menerima dan mencatat permohonan, memberi nomor layanan serta waktu penerimaan; pemohon tidak dibuatkan akun.
2. Identifikasi jenis hak, data/objek yang diminta, tujuan/dasar permohonan serta kemungkinan beberapa kewajiban dengan tenggat berbeda.
3. Verifikasi identitas dan kewenangan pemohon atau wakil melalui prosedur aman; simpan referensi bukti terlindungi seperlunya.
4. Catat peristiwa awal dan tenggat relevan menurut hukum. Waktu verifikasi identitas, pengalihan antar-OPD atau status “menunggu” tidak otomatis mengulang/menunda batas hukum.
5. Arahkan ke pejabat/unit berwenang. Permohonan beberapa field dapat memakai satu layanan dengan tindak lanjut per pemilik field, tanpa menggandakan permohonan atau memberi hak baca lintas field secara otomatis.
6. Periksa data pihak ketiga, pembatasan pemrosesan, retensi/penahanan dan pengecualian yang benar-benar sah. Keputusan beralasan dirujukkan pada aturan/pejabatnya.
7. Proses sesuai hak: akses/salinan, koreksi atau tindakan lain yang sah. Koreksi nilai mengikuti KB-07/KB-08; keputusan hak subjek secara hukum tidak disimpulkan hanya dari jabatan pemilik field.
8. Sampaikan hasil melalui kanal aman yang disahkan, dengan keluaran minimum dan pembatasan/redaksi pihak lain.
9. Catat waktu penyelesaian, hasil/bukti penyampaian, keputusan serta audit.

Permohonan satu pemilik tidak membuka data pribadi pemilik bersama. Hak tetap dapat dilayani secara nonelektronik; email/akun digital bukan syarat universal. Nomor layanan dan status petugas tidak menjadi bukti hak pemohon atas semua data terkait.

Pemantauan tenggat memakai peristiwa penerimaan yang relevan; satu layanan dapat merujuk tenggat Pasal 30 dan 32 yang berbeda. Eskalasi dipicu cukup awal menurut kebijakan yang nanti ditetapkan, tanpa membuat SLA lebih longgar dari hukum. Untuk insiden, catat waktu indikasi/kejadian/diketahui dan penilaian kewajiban secepatnya; jangan menjadikan tanggal konfirmasi internal sebagai alasan memulai ulang tenggat Pasal 46. Rincian penafsiran dan pengecualian tetap harus ditetapkan fungsi berwenang.

### F. Ekspor, dokumen dan publikasi

Hak baca tidak mencakup ekspor/unduh secara otomatis. Ekspor massal memerlukan izin/persetujuan tersendiri dengan pemohon/pengesah yang berwenang, tujuan, daftar field, cakupan OPD/wilayah/objek, batas jumlah, masa berlaku bila ditetapkan, dan audit. Persetujuan ekspor bukan persetujuan pengesahan nilai atau pengelolaan seluruh hak.

Sebelum menghasilkan dan menyerahkan file, periksa ulang izin/penugasan, cakupan persetujuan dan sensitivitas; jangan menyisipkan NIK, data ekonomi atau dokumen tanpa hak eksplisit. File hasil, pekerjaan tertunda dan unduhan tetap tunduk pemeriksaan server. Tautan dokumen bukan URL publik permanen; masa berlaku/mekanisme teknis menunggu desain yang disahkan.

Laporan agregat diperiksa risiko identifikasi ulang dari kelompok kecil, kombinasi atribut dan sumber lain. Jangan otomatis menyatakan statistik aman karena nama/NIK dihapus. Keluaran berisiko ditahan untuk pemeriksaan; metode pengurangan risiko dan ambang publikasi masih terbuka. Tidak ada ekspor/publikasi/pengiriman data nyata dilakukan sekarang.

### G. Retensi dan kearsipan

Kebijakan per kategori/seri memetakan jenis data, referensi JRA dan versi, pemicu mulai retensi, dasar penyimpanan serta tindakan yang disahkan. **Tidak ada angka retensi baru ditetapkan**. Bedakan data aktif operasional, arsip dengan dasar penyimpanan, data sengketa/penahanan sah, data yang memenuhi syarat penyusutan, dan arsip yang harus dimusnahkan atau dipertahankan permanen menurut JRA.

Tanggal habis retensi memicu pemeriksaan kelayakan, bukan pemusnahan otomatis. Periksa larangan/penahanan, perkara, rekomendasi JRA dan keputusan pejabat; tindakan serta bukti dicatat. “Menjaga riwayat/audit” berarti mencegah penghapusan sewenang-wenang dalam koreksi, bukan izin menyimpan seluruh data pribadi tanpa batas. Penahanan pun memerlukan dasar dan tinjauan, bukan label abadi tanpa keputusan.

Retensi berlaku juga pada permohonan, bukti, hasil ekspor, log dan salinan yang relevan. Rincian backup, kunci, kriptografi dan penghapusan teknis tetap KB-12/keputusan operasi yang belum final. Tidak ada file/arsip nyata dihapus, dipindahkan atau dimusnahkan pada tahap dokumentasi.

### H. Respons insiden dan gerbang data nyata

Alur: menerima indikasi → mencatat waktu → menilai jenis data/cakupan/dampak → mengamankan serta membatasi dampak → eskalasi ke fungsi PDP/pejabat sah → menentukan kewajiban pemberitahuan → melaksanakan pemberitahuan sesuai hukum → pemulihan/evaluasi/perbaikan → menyimpan keputusan dan bukti secara terlindungi.

Bukti pemberitahuan perlu menelusuri penerima, waktu, kanal dan isi minimum yang diwajibkan, tanpa menyalin data bocor utuh ke log. Risiko tinggi memerlukan pemeriksaan dan DPIA sesuai Pasal 34; keberadaan pengesah manusia KB-10 tidak otomatis menghilangkan risiko pemrofilan/penggabungan data. Screening kebutuhan DPIA serta DPIA yang diperlukan harus selesai oleh pihak berwenang sebelum penggunaan data nyata.

Pengendali/Prosesor/fungsi PDP, dasar pemrosesan tiap layanan, akses final, JRA, penilaian risiko dan izin data nyata belum ditetapkan. Seluruh gerbang harus diperiksa; pekerjaan ini hanya memakai dokumen dan tidak mengirim notifikasi nyata atau menghubungi pihak luar.

### I. Kamus data, entitas dan matriks

Tambahan `tingkat_sensitivitas`, `tujuan_pemrosesan`, `dasar_pemrosesan`, `aturan_akses`, `status_penugasan`, `kategori_retensi`, `referensi_jra` dan `status_pembatasan_pemrosesan` dicatat pada [kamus yang sama](kamus-data-mvp-kb09.md). Rancangan memakai permohonan/riwayat layanan dan penugasan yang sudah ada, ditambah fungsi persetujuan ekspor, log akses sensitif, insiden serta kebijakan/tindakan penyusutan bila belum terpenuhi; tidak menggandakan master.

[Matriks yang sama](matriks-kewenangan-mvp-kb09.md) memuat contoh petugas registrasi, verifikator induk, industri, perizinan, pengelola utama, admin teknis dan pengawas. Semua contoh akses/pemetaan field masih rancangan, bukan penetapan OPD/jabatan atau penunjukan Pengendali/Prosesor secara hukum.

### J. T11-01–T11-26 dan kriteria penerimaan

Semua baris berikut adalah **rencana pengujian** dengan data sintetis, belum dijalankan. Kelayakan teknis dan hasil produksi tidak diklaim.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T11-01 | NIK lengkap ditolak untuk petugas tanpa izin khusus. | Server menolak permintaan NIK lengkap; tidak ada nilai sensitif pada respons/log. |
| T11-02 | NIK disamarkan pada tampilan biasa. | Tampilan biasa memperlihatkan bentuk tersamar sesuai hak, tanpa NIK utuh pada data halaman. |
| T11-03 | Pencarian NIK tidak membocorkan identitas. | Pencarian dan hasil/pesan tidak mengungkap identitas/keberadaan data di luar kewenangan. |
| T11-04 | Petugas industri melihat field yang diizinkan. | Hanya field, objek, wilayah dan tindakan dalam penugasan/tujuan yang diperbolehkan. |
| T11-05 | Data ekonomi tanpa kewenangan ditolak. | Data ekonomi ditolak bila izin/cakupan/tujuan tidak sesuai, termasuk lewat permintaan langsung. |
| T11-06 | URL dokumen langsung tetap memerlukan otorisasi. | URL file/unduhan memeriksa kewenangan terkini; tidak ada akses anonim melalui tautan permanen. |
| T11-07 | Admin teknis tidak otomatis dapat membaca dokumen identitas. | Hak teknis saja tidak membuka file identitas; hak khusus yang sah tetap diperlukan. |
| T11-08 | Akses wilayah di luar penugasan ditolak. | Permintaan di luar wilayah ditolak tanpa membocorkan data profil sasaran. |
| T11-09 | OPD nonpemilik dapat mengusulkan koreksi bila berwenang, bukan mengesahkan. | Usulan koreksi diterima jika berizin; pengesahan field nonmilik tetap ditolak. |
| T11-10 | Data pribadi pemilik bersama tidak terbuka kepada pihak lain. | Hasil layanan membatasi/redaksi data pihak lain; kepemilikan bersama bukan hak akses menyeluruh. |
| T11-11 | Koreksi lewat petugas menghasilkan permohonan tercatat. | Nomor layanan, waktu, petugas, field, alasan/status dan riwayat tercatat; master belum otomatis berubah. |
| T11-12 | Permintaan akses/salinan memerlukan verifikasi pemohon. | Identitas/kuasa pemohon diverifikasi sebelum salinan aman diberikan; keluaran diperiksa untuk data pihak ketiga. |
| T11-13 | Tenggat hak subjek data dapat dipantau dan dieskalasi. | Tenggat relevan tercatat dari peristiwa hukumnya, dapat dipantau/dieskalasi tanpa mengganti 3 x 24 jam dengan SLA lebih longgar. |
| T11-14 | Ekspor tanpa izin ditolak. | Server menolak ekspor meskipun pengguna dapat membaca sebagian data. |
| T11-15 | Ekspor berizin hanya berisi data dalam cakupan persetujuan. | Hanya field/OPD/wilayah/jumlah dan tujuan yang disetujui masuk keluaran; audit dan pemeriksaan unduh berlaku. |
| T11-16 | API tidak dapat digunakan untuk melewati hak akses. | API memakai keputusan izin yang sama; penggantian ID/field tidak memperluas akses. |
| T11-17 | Penugasan berakhir, akses terkait dicabut. | Aksi berikutnya serta unduh/ekspor tertunda memeriksa ulang dan menolak hak yang telah berakhir. |
| T11-18 | Statistik berisiko identifikasi ulang ditahan untuk diperiksa. | Keluaran ditahan untuk tinjauan; tidak otomatis dipublikasikan hanya karena berbentuk agregat. |
| T11-19 | Masa retensi selesai, tindakan mengikuti JRA. | Kelayakan/keputusan tindakan mengikuti referensi JRA sah; bukan penghapusan otomatis semata karena tanggal habis. |
| T11-20 | Arsip dengan dasar penahanan sah tidak dimusnahkan otomatis. | Penahanan dan dasar sah diperiksa; arsip tertahan tidak masuk pemusnahan otomatis. |
| T11-21 | Indikasi kebocoran menghasilkan catatan insiden. | Catatan insiden dan waktu awal tercipta, dengan akses terbatas tanpa menyalin data bocor utuh. |
| T11-22 | Insiden terkonfirmasi memicu alur eskalasi dan pemberitahuan. | Penilaian, eskalasi, tenggat/kewajiban Pasal 46 dan bukti pemberitahuan direncanakan; tidak ada kontak nyata pada tahap ini. |
| T11-23 | Audit tidak bisa diubah oleh pengguna biasa. | Perubahan/penghapusan audit oleh petugas biasa ditolak dan upaya dapat ditelusuri. |
| T11-24 | Informasi sensitif tidak bocor ke log. | NIK lengkap, token dan isi dokumen tidak tersalin pada log; gunakan referensi/metadata minimum. |
| T11-25 | Data nyata tidak digunakan sebelum gerbang tata kelola terpenuhi. | Penetapan peran/dasar, akses, JRA, risiko/DPIA yang diperlukan dan izin penggunaan data nyata diperiksa; gerbang belum lulus berarti data sintetis saja. |
| T11-26 | Pembatasan tetap berlaku pada seluruh jalur pencarian, ekspor dan API. | Semua jalur membaca aturan field/objek/tindakan/tujuan/penugasan yang sama, termasuk akses dokumen langsung. |

### K. Keputusan yang tetap terbuka

- Pengendali/Prosesor dalam struktur pemda, fungsi/pejabat PDP dan penugasan resminya.
- OPD pemilik field yang belum ditetapkan, dasar pemrosesan spesifik tiap layanan dan pemetaan kelas field final per OPD/konteks.
- JRA Pemkab Sinjai yang berlaku, pemetaan seri data, dasar penahanan dan keputusan penyusutan.
- SOP resmi penerimaan/verifikasi/pemenuhan hak subjek, pemeriksaan pengecualian, kanal hasil/notifikasi dan penanggung jawab tenggat.
- Screening risiko serta DPIA; tidak dianggap sudah dilakukan.
- Metode penyamaran/keamanan/kriptografi/kunci/backup/integritas audit teknis KB-12.
- Kebijakan publikasi/identifikasi ulang dan persetujuan ekspor rinci.
- **KB-12–KB-18**, termasuk hosting PDN KB-14, kapasitas KB-18 dan izin implementasi/data nyata/produksi.

### L. Konsistensi dan catatan perubahan

KB-11 mempertahankan KB-01–KB-10. Perlindungan akses melengkapi, bukan mengganti, satu pemilik field dan satu pengesah; tidak membuat akun pelaku, tidak memutus sengketa kepemilikan/hukum, tidak menyamakan penilaian skala dengan hak bantuan, dan tidak mengubah batas MVP pangan. Penjagaan riwayat/koreksi dibaca bersama retensi yang sah, bukan penyimpanan pribadi selamanya. Lihat [addendum audit KB-11](08-audit-konsistensi-dokumentasi.md).

5 November 2026 — KB-11 Model B didokumentasikan dengan **30 aturan RB-11 dan 26 skenario T11** sesuai instruksi pemilik produk. Kamus, matriks, model/arsitektur, tata kelola, roadmap, indeks dan panduan pada berkas yang sudah ada diselaraskan. Baris register KB-01–KB-10 dan KB-12–KB-18 dipertahankan. Tidak ada kode aplikasi, migrasi/seeder/database, dependensi, konfigurasi server atau deployment; ZIP perubahan dibuat setelah pemeriksaan dokumentasi.

## KB-12 — Audit operasional dan salinan audit terlindungi

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P0, sesuai register  
**Status:** **MODEL B DISEPAKATI — model bisnis dan prinsip arsitektur audit; teknologi, pengelolaan dan rincian operasi belum final.**  
**Model:** Audit Dalam Database Aplikasi dengan Salinan Audit Terlindungi Secara Terpisah  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-12”.

### A. Dua lapisan yang disepakati

| Lapisan | Peran | Batas dan bukti yang dibutuhkan kelak |
| --- | --- | --- |
| 1 — Audit operasional | Event pada database aplikasi untuk perubahan, pengesahan, akses, konflik dan administrasi; penelusuran terbatas | Event kritis satu transaksi dengan perubahan bisnis; pengguna biasa tidak dapat mengubah/menghapus event |
| 2 — Salinan audit terlindungi | Salinan event dengan ID yang sama, untuk pemeriksaan kehilangan/manipulasi dan membantu pemulihan | Kontrol keamanan/administratif dan kewenangan dipisah dari database aplikasi; lokasi, teknologi, jadwal dan pengelola belum final |

Pemisahan berarti kontrol/mandat keamanan berbeda, bukan sekadar dua file, folder, tabel, database atau lokasi. Tabel kedua dengan administrator/kontrol sama **belum memenuhi** lapisan terlindungi. Lokasi berbeda saja juga belum membuktikan pemisahan. Hak kirim, baca, administrasi, ubah/hapus dan pemulihan harus diperiksa terhadap ancaman administrator/database/server/backup, termasuk kemampuan akun berhak tinggi mengambil alih keduanya.

Salinan bukan SSOT UMKM tandingan, jalur koreksi nilai atau aplikasi baru bagi OPD. Model modular monolith dan satu registri tetap berlaku. Audit bukan backup penuh bisnis: pemulihan event tidak otomatis memulihkan semua master/lampiran, dan event yang belum pernah tersalin tidak boleh dianggap pasti dapat dipulihkan.

### B. RB-12.01–RB-12.30

| Kode | Ketentuan pemilik produk | Penjelasan rancangan |
| --- | --- | --- |
| RB-12.01 | Audit database aplikasi dan salinan terlindungi terpisah. | Dua lapisan memakai identitas event yang sama: audit operasional dalam database aplikasi dan salinan dengan kontrol keamanan/administratif terpisah. Salinan bukan master UMKM kedua. |
| RB-12.02 | Setiap peristiwa audit mempunyai ID unik yang stabil. | ID internal event dibuat sekali dan tetap sama pada pengiriman ulang, pemeriksaan dan pemulihan; bukan NIK atau ID yang diganti setiap retry. |
| RB-12.03 | Event mencatat pelaku, peran, OPD, tindakan, objek, waktu dan hasil. | Konteks pelaku/peran/OPD pada saat kejadian dipertahankan bersama aksi, objek, waktu dan hasil; penugasan kemudian berubah tidak menulis ulang sejarah. |
| RB-12.04 | Simpan alasan dan referensi bukti bila relevan. | Alasan terstruktur dan referensi bukti privat dicatat sesuai konteks; alasan bebas disanitasi dan tidak menyalin dokumen atau identitas lengkap. |
| RB-12.05 | Perubahan data menyimpan referensi versi lama dan baru. | Tautkan objek/field ke versi sebelum dan sesudah yang sah. Pembuatan boleh belum mempunyai versi sebelum; percobaan gagal tidak diberi versi sesudah fiktif. |
| RB-12.06 | Pengesahan dan penolakan perubahan harus diaudit. | Rekam keputusan pengesahan/penolakan, pengambil keputusan dan alasan. Berhasil mencatat penolakan bukan berarti perubahan nilainya berhasil. |
| RB-12.07 | Registrasi dan perubahan hubungan pihak–usaha diaudit. | Pembuatan/perubahan pihak, orang, badan, unit serta relasi kepemilikan/pengelolaan dapat ditelusuri; tidak mengubah aturan banyak-ke-banyak atau definisi cabang. |
| RB-12.08 | Pelaporan, pemeriksaan, eskalasi dan penyelesaian konflik diaudit. | Kasus induk/subkasus, pemeriksaan, bukti, eskalasi, keputusan korektif dan peninjauan kembali merujuk riwayat yang sama sesuai KB-08. |
| RB-12.09 | Akses terhadap NIK dan data pribadi sensitif diaudit. | Akses NIK lengkap dan data sensitif yang diwajibkan audit mencatat aktor, tujuan, objek internal serta hasil; hak akses tetap diperiksa menurut KB-11. |
| RB-12.10 | NIK lengkap, kata sandi, token autentikasi dan dokumen sensitif tidak disalin ke log. | Gunakan ID/referensi terlindungi, bukan NIK lengkap, kata sandi, token, cookie rahasia, kunci atau isi dokumen sensitif pada event, payload salinan, error maupun log debug. |
| RB-12.11 | Ekspor, unduhan dokumen sensitif dan akses data berisiko diaudit. | Catat permintaan/persetujuan/pelaksanaan/hasil/unduh, tujuan, cakupan dan jumlah bila relevan; jangan menyatakan file diterima hanya karena permintaan dibuat. |
| RB-12.12 | Pembuatan akun, perubahan peran, penugasan dan pencabutan hak diaudit. | Catat pembuatan akun individual, perubahan peran/cakupan/penugasan serta pencabutan dengan referensi keadaan lama/baru; tidak mencatat rahasia akun. |
| RB-12.13 | Perubahan kewenangan field dan katalog OPD diaudit. | Perubahan katalog OPD dan pemilik/izin field mengikat keputusan serta masa berlaku sah; audit tidak menjadi izin admin menentukan kewenangan organisasi. |
| RB-12.14 | Pengarsipan, penghapusan, pemusnahan dan tindakan retensi diaudit. | Pengarsipan, penahanan, peninjauan dan penyusutan memuat dasar JRA/keputusan, objek, pelaksana serta hasil; tidak menjadi hak hapus biasa. |
| RB-12.15 | Percobaan akses tidak sah yang relevan dicatat dengan pengamanan terhadap penyalahgunaan volume log. | Percobaan akses relevan dicatat dengan konteks aman. Kendalikan volume/ukuran dan pantau kehilangan log; batas/ringkasan teknis belum final dan tidak boleh menyembunyikan audit kritis. |
| RB-12.16 | Pembacaan audit sensitif dibatasi dan kegiatan aksesnya dicatat. | Baca/penelusuran audit sensitif perlu izin khusus dan event aksesnya sendiri, dengan konteks minimum; desain harus mencegah pencatatan rekursif tanpa batas. |
| RB-12.17 | Pengguna biasa tidak boleh mengubah atau menghapus event audit. | Pengguna biasa maupun admin aplikasi lewat alur biasa tidak boleh menulis ulang/menghapus event. Penyusutan sah merupakan proses berwenang, terpisah dan tercatat. |
| RB-12.18 | Pencatatan audit kritis konsisten dan atomik dengan perubahan bisnis terkait. | Untuk perubahan bisnis kritis, perubahan, versi/keputusan terkait dan event operasional berhasil bersama atau batal bersama. Jaminan ini bukan transaksi sinkron dengan penyimpanan salinan. |
| RB-12.19 | Jika penyimpanan audit kritis gagal, transaksi bisnis kritis tidak boleh dinyatakan berhasil. | Jika audit kritis gagal disimpan/commit, perubahan bisnis tidak sah/tidak dilaporkan berhasil. Kegagalan dicatat lewat jalur operasional aman yang tersedia tanpa keberhasilan palsu. |
| RB-12.20 | Pengiriman salinan audit mendukung retry, identitas event stabil dan pencegahan duplikasi. | Pengiriman setelah commit memakai niat pengiriman tahan gangguan, ID stabil, retry serta penerimaan idempoten: pengiriman ulang tidak menggandakan event yang diterima. |
| RB-12.21 | Salinan audit dilindungi oleh kontrol akses yang terpisah. | Pisahkan izin aplikasi, database, transfer, penyimpanan dan pengelolaan salinan. Dua tabel/file dengan administrator serta kontrol sama tidak membuktikan pemisahan. |
| RB-12.22 | Integritas dan kelengkapan audit operasional serta salinan diperiksa secara berkala. | Periksa kesesuaian isi dan daftar ID event yang semestinya, status pengiriman, duplikasi dan rentang/checkpoint yang sah. Frekuensi dan metode belum ditetapkan. |
| RB-12.23 | Ketidaksesuaian audit, kehilangan event atau manipulasi memicu peringatan serta penanganan insiden. | Selisih, event hilang, perubahan tidak sah atau keterlambatan memicu catatan/peringatan dan alur insiden KB-11 sesuai penilaian, tanpa notifikasi nyata sekarang. |
| RB-12.24 | Waktu kejadian dan pencatatan menggunakan standar waktu konsisten, dengan informasi zona waktu yang dapat ditelusuri. | Bedakan waktu kejadian dari waktu dicatat; simpan offset/zona/sumber waktu atau referensinya agar penyimpangan dapat ditelusuri. Jam browser bukan dasar waktu terpercaya. |
| RB-12.25 | Pengamanan audit mencakup akses database, server, backup dan administrator, bukan hanya UI aplikasi. | Kontrol meliputi akun layanan, hak database/server, administrator, transfer, backup dan pemulihan. Append-only aplikasi atau hash saja tidak menjamin kebal administrator. |
| RB-12.26 | Masa simpan dan penyusutan audit mengikuti jadwal retensi arsip serta dasar hukum yang sah. | Audit operasional, salinan, metadata pengiriman dan backup dipetakan ke kategori/JRA serta dasar simpan/penahanan sah; tidak ada angka retensi atau penyimpanan pribadi abadi. |
| RB-12.27 | Pemulihan audit diuji, hasilnya diverifikasi dan kegiatannya dicatat. | Uji pulih kelak memakai sumber sah di lingkungan terpisah, periksa ID/isi/keterkaitan/kelengkapan dan catat operasi serta hasil. Tidak mengasumsikan semua event pasti telah tersalin. |
| RB-12.28 | Akses baca dan ekspor audit sensitif memerlukan otorisasi tersendiri. | Izin baca audit dan ekspor audit terpisah, dibatasi sensitivitas, tujuan, objek/field, wilayah, OPD dan penugasan aktif; hak pemilik field atau admin tidak cukup otomatis. |
| RB-12.29 | Pemilihan teknologi, lokasi dan petugas pengelola salinan terpisah menunggu pemeriksaan hosting dan penetapan organisasi. | Teknologi/lokasi, akses pengelola, transport, jadwal, integritas dan kapasitas menunggu KB-14/KB-17/KB-18 serta penetapan sah; tidak memilih produk atau petugas sekarang. |
| RB-12.30 | Keputusan ini hanya mengesahkan dokumentasi KB-12; bukan izin implementasi ataupun produksi. | Model bisnis dan prinsip arsitektur audit saja yang disepakati. Tidak ada kode, skema/database, migrasi/seeder, pemasangan paket, konfigurasi server, data nyata atau produksi. |

### C. Kamus jenis peristiwa audit

Kode/label berikut adalah **taksonomi konseptual**, bukan enum, API atau daftar teknologi final. Satu keluarga dapat mempunyai beberapa event bertahap dengan ID berbeda dan korelasi yang sama. Seluruh keluarga menyimpan hasil sesuai kenyataan.

| Kode keluarga | Contoh jenis event | Cakupan minimum |
| --- | --- | --- |
| AE-12.01 | party.registered / party.changed | Registrasi/perubahan ORANG, BADAN_USAHA dan UNIT_USAHA; jenis pihak serta relasi mengacu master yang sama |
| AE-12.02 | party_unit_relationship.changed | Penambahan, perubahan atau pengakhiran hubungan kepemilikan/pengelolaan; tidak memakai satu owner_id |
| AE-12.03 | master_profile.created / master_profile.approval_decided | Pembuatan/pengesahan profil; pembuat dan verifikator awal berbeda |
| AE-12.04 | general_profile.changed | Pembaruan Profil Umum mengacu perubahan sumber resmi, bukan salinan master |
| AE-12.05 | food_industry_profile.changed | Profil pangan, produk/bahan/peralatan, pengukuran produksi serta verifikasi per record |
| AE-12.06 | change.approval_decided / decision.corrected | Pengesahan, penolakan, perlu koreksi serta keputusan korektif; keputusan dibedakan dari hasil eksekusi |
| AE-12.07 | business_scale.changed / activity_kbli.changed | Usulan/keputusan skala, input/aturan/versi dan relasi KBLI berversi KB-10 |
| AE-12.08 | conflict.reported / conflict.reviewed / conflict.decided / conflict.reopened | Laporan, pemeriksaan, eskalasi, keputusan, nilai dipertahankan dan peninjauan kembali sesuai KB-08 |
| AE-12.09 | sensitive_data.accessed | Pembacaan NIK lengkap/dokumen/data sensitif dalam kewenangan; referensi objek tanpa nilainya |
| AE-12.10 | access.denied | Percobaan pembacaan/aksi tanpa hak; actor dapat belum dikenali, tanpa mengarang identitas |
| AE-12.11 | export.requested / export.completed / document.downloaded | Permintaan/persetujuan/proses/hasil ekspor, unduhan dan akses berisiko; jumlah/cakupan aktual |
| AE-12.12 | account.created / assignment.changed / access.revoked | Akun individual, peran, penugasan, pemberian/pencabutan dan masa berlaku |
| AE-12.13 | field_authority.changed / sensitive_policy.changed | Katalog OPD, kewenangan field, konfigurasi dan kebijakan sensitif menurut penetapan sah |
| AE-12.14 | archive.action_recorded | Arsip, penahanan, penghapusan/pemusnahan/penyusutan dengan dasar/keputusan/hasil |
| AE-12.15 | audit.write_failed / audit.delivery_failed / audit.integrity_checked / audit.recovered | Kegagalan audit, pengiriman/retry, rekonsiliasi, integritas, pemulihan dan akses audit sensitif |

Selain keluarga di atas, rekaman hak subjek/insiden KB-11 dan pembacaan/ekspor audit sensitif menggunakan audit yang sama dengan jenis khusus yang dirinci kelak. Tidak membuat tabel log sensitif kedua jika fungsi audit_events sudah memenuhi. Peristiwa perubahan resmi tetap menautkan change_sets/field_changes serta keputusan yang sudah ada.

Bedakan hasil **berhasil, gagal, ditolak, masih diproses**. Status hasil audit bukan status registrasi, konflik, verifikasi sektor atau klasifikasi KB-10. Keputusan “ditolak” dapat berhasil dicatat, tetapi tidak berarti nilai resmi berubah; event harus menyatakan tindakan/hasilnya tanpa ambigu. Permintaan ekspor bukan ekspor selesai dan pengiriman salinan bukan pengesahan nilai.

Event yang sudah tercatat tidak ditulis ulang dari “masih diproses” menjadi “berhasil”; penyelesaian/kegagalan menambah event terkait. Status pekerjaan/pengiriman terkini boleh dibaca dari record proses terkait. Tidak membuat keberhasilan palsu bila transaksi batal.

### D. Kamus data dan relasi konseptual

[Kamus yang sama](kamus-data-mvp-kb09.md) memperluas audit_events dengan **21 atribut yang diminta**: audit_event_id, event_type, occurred_at, recorded_at, actor_user_id, actor_opd_id, actor_role_context, action_code, target_type, target_id, field_code, before_version, after_version, decision, result, reason_reference, request_id, correlation_id, sensitivity_level, replication_status dan integrity_reference.

Gunakan ID internal dan referensi, bukan NIK mentah atau dokumen. Atribut tidak selalu wajib bernilai: field_code hanya untuk peristiwa per field, versi sebelum dapat kosong pada pembuatan, identitas pelaku dapat belum diketahui pada akses ditolak. Jika aksi memakai akun sah, pelaku/konteks penugasannya wajib dapat ditelusuri; jangan mengarang OPD/petugas untuk proses sistem. Mesin mencatat identitas proses/mandat melalui metadata terkait tanpa menjadi pengesah bisnis.

Isi event stabil dibedakan dari status pengiriman mutable. **replication_status** adalah informasi status yang dirujuk dari pengiriman/riwayatnya, bukan izin mengedit event lama. **integrity_reference** menautkan bukti/manifest/hasil pemeriksaan terkontrol; metode hash/tanda tangan/kunci belum dipilih.

Relasi tambahan hanya jika belum terpenuhi: niat pengiriman tahan gangguan dan percobaan kirim, penerimaan salinan/konfirmasi, pemeriksaan integritas/rekonsiliasi, kegagalan/peringatan terkait insiden, serta operasi pemulihan. Gunakan kembali audit/insiden/retensi/penugasan yang sesuai, tanpa log master kedua atau migrasi. Detail ada pada [entitas](03-entitas-dan-relasi.md).

### E. Konsistensi transaksi dan pengiriman salinan

1. Pemeriksaan hak, versi, bukti dan konflik tetap dilakukan oleh layanan aplikasi di server. Satu petugas pemilik field yang sah cukup menurut KB-07; profil awal tetap oleh verifikator berbeda dari pembuat.
2. Pada perubahan kritis, data bisnis, keputusan/versi/riwayat terkait dan event audit operasional harus **commit bersama** (penyimpanan transaksi berhasil) atau seluruhnya batal. Gagal menyimpan/commit audit kritis berarti perubahan tidak sah dan tidak dinyatakan berhasil.
3. Niat pengiriman yang tahan gangguan harus terkait konsisten dengan event yang sudah commit, agar gangguan antara commit dan penjadwalan tidak menghilangkan event. **Transactional outbox** (catatan pengiriman dalam transaksi yang sama) adalah kandidat rancangan, **bukan pilihan implementasi final**.
4. Pengiriman ke salinan dapat dilakukan sesudah commit. Gangguan kirim mempertahankan event/niat kirim dengan status tertunda, catatan percobaan, retry dan eskalasi. Transaksi bisnis yang telah commit tidak dibatalkan diam-diam karena gangguan kirim.
5. Penerimaan memakai ID event stabil dan pencegahan duplikasi. Pengiriman/konfirmasi ulang tidak menambah event bisnis yang sama. ID sama dengan isi berbeda ditahan sebagai ketidaksesuaian; tidak menimpa salinan atau mengganti ID untuk menyembunyikan konflik.
6. Rekonsiliasi membandingkan audit operasional, niat/riwayat kirim dan salinan menggunakan daftar ID/rentang/checkpoint serta isi yang diharapkan. Konfirmasi kirim tidak otomatis berarti kelengkapan/integritas sudah diperiksa. Lacak sisa tertunda, hilang, ganda atau berbeda.
7. Bila transaksi bisnis batal, event keberhasilan dalam transaksi ikut batal. Percobaan/gagal dapat dicatat lewat jalur kegagalan yang tersedia, dengan korelasi aman, tanpa membuat event sukses. Bila database tidak tersedia, jangan mengklaim audit di database tetap tersimpan; rencana pencatatan insiden/operasi aman perlu ditetapkan.

Kategori perubahan kritis minimal meliputi pengesahan/perubahan nilai resmi dan relasi, keputusan korektif/konflik, perubahan kewenangan serta tindakan retensi yang mengubah data; rincian cakupan operasional diperiksa sebelum implementasi. Keputusan yang mempertahankan nilai tetap diaudit tanpa perubahan nilai fiktif.

Pembacaan/unduhan sensitif tidak dapat dibatalkan setelah data diberikan. Rancangan harus memeriksa izin dan memastikan pencatatan audit wajib sebelum pelepasan data; kegagalan audit tidak menjadi jalur pemberian data tanpa jejak. Penolakan akses tetap ditolak walau pencatatan percobaan mengalami gangguan. Penanganan log debug/nonkritis dan volume tidak boleh melonggarkan transaksi kritis.

### F. Integritas, keamanan dan waktu

Pengamanan meliputi aplikasi, hak akun layanan/database/server, administrator, transfer, backup dan salinan. Pengguna biasa serta admin aplikasi melalui alur biasa tidak dapat mengubah/hapus event; penyusutan sah bukan menu hapus bebas. Baca dan ekspor audit sensitif memerlukan otorisasi terpisah, tujuan/cakupan serta pencatatan akses sesuai KB-11.

Integritas memeriksa isi **dan kelengkapan**: daftar ID/rentang yang diharapkan, konfirmasi penerimaan, event hilang/ganda/berbeda dan bukti verifikasi yang dikelola terpisah. Jumlah total sama atau hash yang disimpan di bawah penguasa data yang sama tidak cukup. Append-only di aplikasi atau hash saja **tidak membuat audit kebal manipulasi administrator**; kemampuan deteksi bergantung kontrol, acuan terpercaya dan cakupan pemeriksaan. Algoritme, kunci, media tahan manipulasi dan frekuensi pemeriksaan belum final.

Transfer harus terlindungi dan penerima/pengirim berwenang; penyimpanan privat, minimisasi dan kontrol akses tetap KB-11. Validasi jenis/ukuran/format event serta sanitasi karakter kendali/pemisah mencegah **log injection** (teks berbahaya membentuk catatan palsu/merusak struktur). Data tidak valid ditangani dengan konteks aman, bukan memasukkan payload mentah. Metode/format teknis akhir belum ditetapkan.

Pisahkan event audit bisnis/keamanan dari log debug berumur sesuai kebijakan. Jangan salin NIK lengkap, kata sandi, token, cookie rahasia, kunci, dokumen sensitif atau seluruh isi permintaan ke kedua jenis log maupun salinan. Pencatatan alasan/referensi harus aman. Upaya membanjiri log dibatasi tanpa membuang diam-diam event kritis; metode, agregasi aman, kapasitas dan ambang menunggu keputusan. Hilangnya kemampuan audit harus terpantau.

occurred_at adalah waktu kejadian, recorded_at waktu pencatatan; keduanya menyimpan konteks offset/zona/sumber waktu. UTC sebagai kandidat standar konsisten mengikuti rancangan awal; zona tampilan resmi serta layanan sinkronisasi belum dipilih. Keterlambatan atau penyimpangan dicatat, bukan mengubah waktu asli agar tampak tepat. Jam pengguna bukan sumber tepercaya tunggal.

Pembacaan audit sensitif menghasilkan event akses dengan lingkup minimum; rancangan menghindari lingkaran pencatatan tanpa batas ketika audit mencatat dirinya sendiri. Pekerjaan sistem dan administrator tidak dikecualikan dari audit hanya karena dianggap tepercaya.

### G. Retensi, rekonsiliasi dan pemulihan

Kategorikan arsip event, pengiriman, pemeriksaan, pemulihan serta bukti terkait dan rujukkan ke **JRA Pemkab Sinjai yang berlaku** serta dasar hukum/penahanan. JRA/instrumen dan durasi audit belum ditetapkan/terverifikasi untuk proyek ini. Tidak mengarang masa simpan atau memakai JRA instansi lain.

Sebelum penyusutan, tinjau kategori/versi JRA, kewajiban simpan, sengketa/penahanan sah, lingkup lapisan operasional/salinan/backup, pengesah dan bukti tindakan. Catat keputusan serta hasilnya. Penyusutan sah harus dapat dibedakan dari penghapusan/manipulasi tidak sah saat rekonsiliasi; bukan menutupi event hilang sebagai “retensi”. Menjaga audit tidak membenarkan penyimpanan seluruh data pribadi selamanya.

Pemulihan: otorisasi pelaksana dan sumber → catat sumber/rentang/tujuan → lindungi bukti kerusakan tanpa menimpa sumber sah → pulihkan ke lingkungan terpisah → bandingkan ID, isi, keterkaitan versi dan cakupan terhadap rujukan terpercaya → rekonsiliasi pengiriman/salinan → nilai kekurangan dan izin pengaktifan → catat hasil/pelaksana/waktu serta tindak lanjut sebagai event baru.

ID event asli dipertahankan; operasi pulih memiliki ID event sendiri. Jangan menghidupkan lagi arsip yang sudah sah disusutkan tanpa pemeriksaan kebijakan, atau menyatakan event yang belum terkirim telah pulih. Jika sumber-sumber berbeda, pertahankan bukti dan tangani sebagai insiden, bukan otomatis memilih database atau salinan sebagai benar. Uji pulih mendatang memakai data sintetis.

**RPO** adalah sasaran batas kehilangan data yang dapat diterima; **RTO** adalah sasaran lama pemulihan layanan. Keduanya, jadwal retry/replikasi, ambang keterlambatan, frekuensi integritas serta teknologi backup/pemulihan masih terbuka melalui KB-14/KB-17/KB-18 dan pengelola berwenang.

### H. Usulan kewenangan dan klasifikasi akses

[Matriks yang sama](matriks-kewenangan-mvp-kb09.md) menambah tujuh fungsi contoh: registrasi, verifikator induk, OPD pemilik field, pengelola utama, admin teknis, pengawas ditunjuk dan pengelola salinan terlindungi. **Semua adalah usulan**, bukan nama jabatan/OPD/petugas resmi.

Pemilik field tidak otomatis pemilik seluruh audit, Pengendali Data Pribadi atau pengelola salinan. Hak teknis tidak memberi hak hapus/baca sensitif menyeluruh. Pemisahan kontrol salinan tidak mewajibkan dua pengesah bisnis pada perubahan field biasa. Isi audit mengikuti empat label KB-11; klasifikasi final per konteks tetap perlu disahkan, tanpa menganggap semua log INTERNAL atau PUBLIK-TERVERIFIKASI.

### I. T12-01–T12-28 — kriteria penerimaan mendatang

Seluruh skenario berikut **rencana pengujian dengan data sintetis**, belum dijalankan. Tidak ada tes aplikasi/kode atau pemulihan sistem nyata pada tahap ini.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T12-01 | Pembuatan profil Orang tercatat. | Event registrasi ORANG memakai ID internal sasaran, petugas/konteks, waktu dan hasil yang sesuai; tidak menyalin NIK. |
| T12-02 | Perubahan nama usaha menyimpan referensi versi. | Riwayat nama unit lama/baru dirujuk melalui objek/field dan versi; event tidak menggantikan master. |
| T12-03 | Pengesahan mencatat pengesah dan keputusan. | Petugas pengesah, penugasan/peran/OPD saat kejadian, keputusan serta rujukan versi tercatat; ketentuan verifikator awal berbeda tetap berlaku. |
| T12-04 | Penolakan menyimpan alasan. | Keputusan ditolak menyimpan alasan/referensi aman; nilai resmi tidak berubah dan bukan dicatat sebagai pengesahan. |
| T12-05 | Perubahan pemilik mempertahankan sejarah. | Penambahan/pengakhiran hubungan menyimpan versi/periode dan keputusan; pemilik bersama/riwayat tidak dihapus lewat penimpaan. |
| T12-06 | Penyelesaian konflik dapat ditelusuri. | Pelaporan sampai keputusan/peninjauan kembali terkait kasus/subkasus, petugas, bukti privat dan event yang dapat ditelusuri menurut akses. |
| T12-07 | Akses sah terhadap NIK tercatat tanpa NIK mentah. | Akses diizinkan hanya setelah pemeriksaan KB-11; event berisi ID objek, tujuan, pelaku dan hasil tanpa NIK lengkap di seluruh log/salinan. |
| T12-08 | Akses NIK tanpa izin ditolak dan dicatat. | Server tetap menolak; percobaan relevan dicatat secara aman tanpa nilai NIK atau bocoran keberadaan identitas di luar izin. |
| T12-09 | Unduhan dokumen identitas diaudit. | Permintaan/hasil unduh mencatat pelaku, referensi dokumen internal, tujuan dan hasil; isi dokumen tidak masuk log. |
| T12-10 | Ekspor data mencatat cakupan dan jumlah record. | Event mengikat persetujuan, tujuan, field/OPD/wilayah/objek dan jumlah aktual hasil; permintaan tertunda bukan keberhasilan ekspor. |
| T12-11 | Perubahan penugasan mencatat hak lama dan baru. | Hak/cakupan lama dan baru dapat ditelusuri melalui referensi/versi, pelaksana, dasar serta masa berlaku; rahasia akun tidak masuk log. |
| T12-12 | Admin tidak boleh menghapus audit melalui aplikasi. | Upaya hapus/ubah melalui aplikasi ditolak dan dapat ditelusuri; akses teknis bukan izin penghapusan audit. |
| T12-13 | Gagal menyimpan audit kritis membatalkan perubahan bisnis. | Simulasi kegagalan audit/commit membatalkan perubahan, versi dan keputusan terkait; tidak ada respons berhasil atau event keberhasilan tersisa. |
| T12-14 | Gagal mengirim salinan mempertahankan event untuk retry. | Event dan niat pengiriman tahan gangguan tetap tersedia sebagai tertunda/gagal-kirim untuk retry; transaksi bisnis yang sudah commit tidak diam-diam dibatalkan. |
| T12-15 | Pengiriman ulang tidak menggandakan event. | Pengiriman ulang ID sama diterima tanpa event ganda; ID sama dengan isi berbeda ditahan sebagai ketidaksesuaian, bukan menimpa salinan. |
| T12-16 | Manipulasi audit terdeteksi melalui pemeriksaan integritas. | Perubahan isi terhadap rujukan integritas yang dikelola terpisah memicu temuan/peringatan dan penanganan; uji tidak mengklaim hash lokal kebal administrator. |
| T12-17 | Event yang hilang di salinan terdeteksi rekonsiliasi. | Perbandingan daftar ID yang diharapkan, status antrean dan salinan menemukan event hilang, meskipun hitungan total tampak sama. |
| T12-18 | Admin aplikasi tidak otomatis berwenang mengubah salinan terlindungi. | Kontrol salinan menolak perubahan oleh admin aplikasi tanpa mandat terpisah; dua tabel dengan hak admin sama tidak memenuhi kriteria ini. |
| T12-19 | Ketidaksesuaian jam dapat ditelusuri. | occurred_at dan recorded_at beserta offset/zona/sumber waktu memungkinkan selisih ditandai; tidak mengoreksi sejarah dengan menimpa cap waktu asli. |
| T12-20 | Kebocoran data sensitif ke log terdeteksi. | Pemeriksaan log/event/salinan mendeteksi NIK/rahasia/isi dokumen yang tidak semestinya, menahan penyebaran dan memicu penanganan insiden aman. |
| T12-21 | Pembacaan audit oleh pengawas sesuai kewenangan. | Pengawas hanya membaca lingkup/tujuan/sensitivitas yang diizinkan dan aksesnya dicatat; ekspor tetap perlu izin terpisah. |
| T12-22 | Penyusutan audit mengikuti JRA. | Penyusutan mengikuti referensi JRA sah, tinjauan penahanan, keputusan serta bukti; tanpa angka retensi tebakan atau hak hapus biasa. |
| T12-23 | Audit yang dibutuhkan dalam sengketa sah dipertahankan. | Bukti yang masih ditahan secara sah tidak ikut dimusnahkan otomatis; dasar/lingkup dan peninjauan penahanan dapat ditelusuri. |
| T12-24 | Audit operasional dapat dipulihkan dari salinan sah. | Pemulihan dari salinan yang sah memverifikasi event/ID/isi dan rentang yang tersedia; kekurangan event yang belum tersalin dinyatakan, tidak dibuat-buat. |
| T12-25 | Pemulihan audit mempunyai catatan pelaksana dan hasil. | Operasi pulih mencatat pelaksana/mandat, sumber, cakupan, waktu, pemeriksaan, hasil dan kekurangan sebagai event baru dengan ID sendiri. |
| T12-26 | Permintaan langsung melalui API tidak melewati audit. | API bila kelak disepakati tetap melalui pemeriksaan akses dan layanan audit yang sama; ID/field langsung tidak melewati pencatatan. |
| T12-27 | Transaksi bisnis gagal tidak menghasilkan audit keberhasilan palsu. | Rollback membuang event sukses yang satu transaksi; percobaan/gagal dicatat lewat jalur kegagalan yang tersedia dengan korelasi aman. |
| T12-28 | Keterlambatan pengiriman salinan dapat dipantau dan dieskalasi. | Status tertunda, waktu/keterlambatan, retry dan hasil rekonsiliasi dapat dipantau/dieskalasi; angka ambang/jadwal belum ditetapkan. |

### J. Referensi normatif dan panduan teknis

Sumber resmi dibaca **5 November 2026**. Ketentuan hukum dan panduan teknis dibedakan.

| Rujukan | Relevansi pada rancangan | Kedudukan |
| --- | --- | --- |
| [UU 27/2022, terutama Pasal 16 dan 31](https://jdih.komdigi.go.id/produk_hukum/view/id/832/t/crc32/) | Prinsip pembatasan tujuan/pelindungan serta rekaman kegiatan pemrosesan; audit juga harus dilindungi | Peraturan perundang-undangan Indonesia; tidak menetapkan sendiri teknologi dua lapisan |
| [Kearsipan/JRA daerah, ANRI](https://www.anri.go.id/layanan-publik/jra/daerah) | JRA dan penetapan sah menjadi acuan penyusutan, termasuk audit/salinan; bukan durasi tebakan | Rujukan resmi kearsipan; laman layanan bukan JRA Pemkab Sinjai |
| [OWASP Logging Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Logging_Cheat_Sheet.html) | Pemilihan event/atribut, minimisasi, sanitasi, kontrol akses dan penanganan log | Panduan teknis, bukan peraturan Indonesia atau pilihan produk |
| [NIST SP 800-92, final September 2006](https://csrc.nist.gov/pubs/sp/800/92/final) | Tata kelola pengumpulan, perlindungan, analisis dan pemeliharaan log | Panduan teknis, bukan peraturan Indonesia atau bukti kepatuhan |

Catatan perbedaan konteks: panduan umum OWASP membahas agar kegagalan logging tidak merusak operasi lain. **Keputusan pengguna RB-12.18/19 tetap mewajibkan perubahan bisnis kritis batal jika audit kritis gagal.** Ini batas khusus SIJAI UMKM; gangguan pengiriman salinan diperlakukan berbeda dari gagal audit operasional. Tidak mengubah aturan atomisitas demi panduan umum atau menyamakan semua log debug dengan audit kritis.

### K. Risiko, ketergantungan dan keputusan terbuka

- Lokasi/media salinan, teknologi replikasi/tahan manipulasi, metode/kunci integritas, keamanan transfer dan format penyimpanan.
- Jadwal replikasi/retry, ambang keterlambatan, kapasitas/kuota, frekuensi dan pelaksana pemeriksaan integritas; target RPO/RTO.
- Jabatan/petugas pengelola salinan dengan kewenangan terpisah, hak administrator aplikasi/database/server/backup dan tata cara akses darurat.
- JRA serta durasi per kategori audit, penyusutan/penahanan dan perlakuan backup/salinan; tidak dianggap final oleh model ini.
- SOP investigasi, eskalasi, rekonsiliasi/pemulihan dan penetapan sumber/acuan terpercaya bila berbeda.
- Kelayakan hosting **KB-14**, operasi/pemeliharaan **KB-17** dan kapasitas **KB-18**, serta **seluruh KB-13–KB-18** tetap terbuka; nomor/isi barisnya tidak diubah.
- Rincian kelembagaan, tujuan/dasar, sensitivitas/akses, JRA dan risiko/DPIA KB-11 tetap belum final; izin implementasi/data nyata/produksi belum diberikan.

Risiko sisa: event belum tersalin saat kerusakan sumber, penguasaan kedua kontrol oleh administrator yang sama, log berlebihan/penyimpanan penuh, jam berbeda, salinan memuat data berlebihan, atau rekonsiliasi salah menganggap penyusutan sah sebagai manipulasi. Model ini mengarahkan pengendalian; belum membuktikan teknologi/hosting mampu menjalankannya.

### L. Konsistensi dan riwayat keputusan

KB-01–KB-11 dipertahankan: satu SSOT, hubungan pihak-usaha banyak-ke-banyak, cabang sesuai KB-01, satu pengesah field sah, verifikator awal berbeda, konflik nilai oleh pemilik field, tanpa akun masyarakat serta MVP pangan dan privasi bertingkat. Salinan audit bukan master usaha kedua atau hak edit baru. Rincian penanggung jawab field/petugas dan peran hukum PDP tidak ditetapkan oleh dokumen ini.

Pernyataan KB-12 masih terbuka pada bagian keputusan terdahulu adalah riwayat; bagian KB-12 menetapkan model terbaru tanpa menutup rincian teknologi/operasi. Lihat [addendum audit konsistensi](08-audit-konsistensi-dokumentasi.md).

5 November 2026 — pemilik produk menetapkan KB-12 Model B. Dokumentasi memuat **30 aturan RB-12 dan 28 skenario T12**, taksonomi 15 keluarga dan 21 atribut minimum, prinsip dua lapisan/atomisitas/retry/integritas/retensi/pemulihan serta usulan kewenangan. KB-01–KB-11 dan KB-13–KB-18 dipertahankan. Tidak ada implementasi, kode, database/migrasi/seeder, paket, konfigurasi server, data nyata atau deployment. ZIP perubahan disiapkan setelah pemeriksaan dokumentasi.

## KB-13 — Rekonsiliasi otomatis identitas, merge, split dan arsip

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P1, sesuai register  
**Status:** **MODEL C DISEPAKATI — pendekatan rekonsiliasi otomatis dengan prasyarat keselamatan dan penahanan kasus berisiko.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-13”.  
**Batas:** dokumentasi saja; bukan izin implementasi, penggunaan data nyata atau produksi.

### A. Makna Model C dan batas terhadap keputusan terdahulu

Model C mengutamakan otomatisasi yang dapat dibuktikan aman. **Kandidat** berarti dugaan duplikat, **kanonik** berarti satu identitas internal rujukan yang ditetapkan untuk entitas yang terbukti sama, **merge** berarti mengonsolidasikan record identitas, **split** berarti memisahkan identitas/referensi yang terbukti seharusnya berbeda, dan **arsip** berarti status/tindakan terkontrol yang berbeda dari hapus permanen.

| Kemampuan | Batas pendekatan yang disepakati |
| --- | --- |
| Deteksi otomatis | Menghasilkan kandidat saat registrasi dan pemeriksaan berkala; tidak mengubah identitas/nilai resmi |
| Pencegahan duplikat baru | Menggunakan identitas yang sudah terbukti sama sesuai hak; tidak menolak hanya karena nama/alamat/pemilik mirip |
| Penautan ulang referensi | Hanya bila terbukti menuju entitas yang sama, seluruh bukti/relasi/masa berlaku terjaga dan mandat sah |
| Konsolidasi teknis aman | Tidak mengubah makna bisnis/nilai resmi; seluruh sepuluh prasyarat wajib terpenuhi |
| Merge historis berisiko | Ditahan untuk evaluasi/keputusan petugas; belum boleh diaktifkan di produksi sebelum gerbang aturan/uji/mitigasi/mandat disahkan |
| Split | Bukti, keputusan petugas berwenang dan pembagian seluruh referensi diperlukan |
| Arsip | Dasar/keputusan sah, pemeriksaan konflik/relasi/retensi dan keterlacakan wajib; tidak otomatis dari usia/tidak aktif |

**Benturan redaksi yang dilaporkan:** AGENTS.md lama menyebut “jangan … menggabungkan identitas otomatis”, dan penjelasan historis KB-08 bagian H menyebut “Larangan penggabungan otomatis berlaku sejak rancangan ini.” KB-13 terbaru memberi batas yang lebih spesifik untuk konsolidasi teknis aman dengan mandat sah. Panduan aktif diselaraskan secara terbuka; teks keputusan KB-01–KB-12 dan seluruh RB/T terdahulu tetap dipertahankan sebagai sumber/riwayat.

**RB-08.07 tetap berlaku:** kemiripan tidak memicu penggabungan dan identitas sama memerlukan pemeriksaan berwenang. KB-13 tidak mengesahkan algoritme/bukti/mandat operasional yang belum ditetapkan. Jika perubahan memerlukan memilih nilai resmi, mengganti makna relasi, keputusan hukum atau pengesahan substantif, mesin **tidak** menggantikan satu petugas berwenang KB-07 maupun pemilik field KB-08. Persetujuan aturan/mandat bukan izin mengesahkan semua konflik lewat proses otomatis.

KB-05 tetap melarang pembuat mengesahkan profil awal sendiri; pencegahan identitas ganda tidak mengesahkan profil baru atau membuat akun pelaku. KB-03 tetap tanpa kewajiban NIB awal dan ID internal tidak berasal dari NIK/NIB. Tidak mengubah batas MVP pangan atau menambah modul program/impor/integrasi.

### B. RB-13.01–RB-13.30

| Kode | Ketentuan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-13.01 | Model C merupakan pendekatan utama rekonsiliasi data. | Model C mengutamakan otomatisasi yang terkendali, bukan merge semua kandidat. Deteksi/pencegahan diprioritaskan pada MVP; konsolidasi hanya setelah bukti, aturan, dampak dan mandat memenuhi seluruh syarat. |
| RB-13.02 | Deteksi kandidat berlangsung pada registrasi dan pemeriksaan berkala. | Periksa kandidat ketika registrasi dan pemeriksaan berkala; jadwal/frekuensi dan kemampuan hosting belum dipilih. Kandidat tidak langsung mengubah nilai resmi atau status verifikasi. |
| RB-13.03 | Aturan pencocokan dibedakan menurut jenis entitas. | Aturan ORANG, BADAN_USAHA, UNIT_USAHA, lokasi dan hubungan dibedakan menurut subjek serta sumber bukti; tidak mencocokkan badan dengan pengurus atau orang dengan unit. |
| RB-13.04 | Kesamaan nama, kontak, alamat atau pemilik tidak cukup untuk merge otomatis. | Nama, kontak, alamat atau pemilik yang sama hanya sinyal kandidat. Pemilik sama tidak membuktikan kesatuan operasional dan alamat sama tidak membuktikan identitas unit. |
| RB-13.05 | Pencocokan NIK melindungi nilai lengkap sesuai KB-11. | Pencarian/pencocokan NIK dijalankan dalam cakupan sah di server; NIK lengkap tidak bocor pada hasil kandidat, pesan, audit atau salinan. Metode teknis pencocokan terlindungi belum ditetapkan. |
| RB-13.06 | NIB bukan ID unik Unit Usaha. | NIB tetap identitas eksternal dengan subjek yang harus diperiksa, bukan ID unik unit atau setiap cabang. Pendataan awal tanpa NIB dan ID internal terpisah KB-03 tetap. |
| RB-13.07 | Status kandidat, identik terverifikasi, dan konflik dipisahkan. | Status pembuktian kandidat, identik terverifikasi dan konflik dibedakan dari status proses operasi, arsip, profil, legalitas maupun pengesahan field. |
| RB-13.08 | Skor kemiripan tidak boleh menjadi satu-satunya penentu merge. | Skor hanya bahan pemeriksaan, bukan pembuktian tunggal. Tidak menetapkan algoritme atau ambang numerik; auto-merge historis berisiko tidak boleh lolos hanya dari skor. |
| RB-13.09 | Duplikasi baru dapat dicegah otomatis jika identitas terbukti sama. | Bila identitas yang sama telah terbukti menurut aturan sah, cegah pembuatan identitas duplikat dan gunakan referensi yang sah sesuai akses. Tidak otomatis menolak nama mirip atau mengesahkan profil awal baru. |
| RB-13.10 | Merge historis memerlukan pemeriksaan dampak seluruh referensi. | Sebelum merge historis, inventaris seluruh referensi, versi, relasi/masa berlaku, kasus, ekonomi/klasifikasi dan sektor, termasuk kontrak program bila ada; referensi tak dikenal menahan proses. |
| RB-13.11 | Merge otomatis hanya boleh terjadi jika semua prasyarat aman terpenuhi. | Sepuluh prasyarat di bagian C wajib benar bersamaan dan diperiksa ulang saat eksekusi. Satu gagal atau belum diketahui berarti berhenti dan kasus petugas, bukan memilih nilai diam-diam. |
| RB-13.12 | Kasus ambigu dan berisiko ditahan untuk petugas berwenang. | Ambiguitas, sengketa, perubahan makna bisnis, bukti tidak cukup atau benturan nilai/relasi ditahan. Pemeriksaan/keputusan mengikuti pemilik field dan KB-08, bukan kewenangan baru mesin/admin. |
| RB-13.13 | Satu entitas kanonik ditetapkan tanpa penggunaan ulang ID lama. | Pilih satu entitas kanonik menurut dasar/aturan sah, bukan otomatis ID terkecil/terbaru. ID asal tetap terpakai sebagai jejak, tidak dialihkan untuk entitas lain atau didaur ulang. |
| RB-13.14 | ID asal dan alias historis tetap dapat ditelusuri. | Pertahankan peta asal–kanonik, alias, periode/versi dan keputusan, tanpa menghapus sejarah atau membocorkan identitas melalui pencarian ID lama; cegah siklus pemetaan. |
| RB-13.15 | Relasi kepemilikan, pengelolaan, dan masa berlaku tidak boleh hilang. | Kepemilikan/pengelolaan banyak-ke-banyak, pihak bersama, bukti dan masa berlaku tetap utuh. Hanya relasi yang benar-benar sama dapat dikonsolidasikan dengan jejak; periode/peran berbeda bukan duplikat otomatis. |
| RB-13.16 | Cabang mengikuti definisi KB-01. | Cabang dengan pemilik sama dan keterkaitan induk teridentifikasi tetap bagian unit induk. Pengolahan/perdagangan bisa satu atau dua unit sesuai bukti kesatuan operasional, bukan aturan gabung otomatis per pemilik/lokasi. |
| RB-13.17 | Produk, kegiatan, lokasi dan profil sektoral tetap konsisten setelah rekonsiliasi. | Profil pangan, pengait kegiatan, produk/bahan/peralatan dan pengukuran tetap merujuk unit/kegiatan sah; nama/merek mirip tidak menggabungkan produk dan periode/satuan/status tidak ditimpa. |
| RB-13.18 | Riwayat program, pelatihan dan bantuan dipertahankan tanpa menggandakan peristiwa. | Program/pelatihan/bantuan berbeda tetap peristiwa berbeda; peristiwa sama tidak digandakan oleh pengalihan identitas. Pada MVP ini kontrak referensial dan skenario masa depan saja, bukan modul baru. |
| RB-13.19 | Split memerlukan keputusan petugas berwenang berdasarkan bukti serta pembagian referensi. | Split memerlukan bukti, daftar pembagian setiap referensi dan keputusan petugas berwenang. Tidak otomatis dari skor, laporan, atau sekadar perbedaan lokasi; ID lama tidak didaur ulang. |
| RB-13.20 | Dampak pembalikan/pemulihan merge harus direncanakan sebelum pelaksanaan. | Rencana sebelum eksekusi memuat jejak/peta versi, dampak hilir, verifikasi dan cara pemulihan. Pembalikan bukan menghapus audit atau mengembalikan snapshot yang menimpa perubahan sah sesudah merge. |
| RB-13.21 | Arsip tidak identik dengan hapus permanen. | Arsip adalah status/tindakan terkontrol yang menjaga keterlacakan selama retensi sah; berbeda dari penonaktifan operasional dan pemusnahan permanen. |
| RB-13.22 | Tidak aktif atau tidak diperbarui bukan alasan cukup untuk pengarsipan otomatis. | Lama tidak diperbarui atau status tidak aktif hanya dapat menjadi bahan tinjauan, bukan dasar tunggal arsip otomatis atau penghapusan identitas. |
| RB-13.23 | Sengketa identitas atau kepemilikan mengikuti KB-08. | Sengketa identitas/nilai/kepemilikan diteruskan ke kasus/subkasus KB-08; konflik terbuka menghalangi merge otomatis, tanpa menghapus pemilik atau memutus hak hukum. |
| RB-13.24 | Hak akses rekonsiliasi mengikuti KB-04 dan KB-11. | Hak deteksi, baca bukti, rencana, keputusan, eksekusi, split, arsip dan pulih dibatasi menurut field/OPD/objek/tujuan/wilayah serta penugasan. Admin/koordinator tidak otomatis memiliki semua hak. |
| RB-13.25 | Proses otomatis mempunyai identitas, mandat dan batas kewenangan yang tercatat. | Proses otomatis memakai identitas proses, referensi mandat, aturan/versi dan lingkup tindakan; dapat dihentikan/dicabut, tidak menyamar sebagai petugas atau mendapat akses tak terbatas. |
| RB-13.26 | Merge, split, arsip, keputusan otomatis dan keputusan manual wajib diaudit sesuai KB-12. | Event merekam sumber/kanonik, aturan, proses/petugas, keputusan, dampak dan hasil tanpa NIK mentah. Event kritis atomik; salinan berkontrol terpisah mengikuti retry/rekonsiliasi KB-12. |
| RB-13.27 | Perubahan identitas serta relasi harus konsisten secara transaksional. | Perubahan identitas, relasi, versi, peta alias/kanonik, status/keputusan dan audit kritis yang terkait berhasil atau batal bersama; tidak menerapkan sebagian rencana berisiko. |
| RB-13.28 | Pemeriksaan versi dan idempotensi mencegah pemrosesan ganda. | Periksa versi rencana/aturan, sumber/target serta referensi terdampak pada eksekusi. ID operasi stabil dan penerapan sekali mencegah retry menggandakan merge atau memproses dua rencana serentak secara tidak konsisten. |
| RB-13.29 | Penggunaan produksi menunggu SOP, aturan pencocokan, pengujian, dan persetujuan. | Produksi menunggu SOP, aturan pencocokan/versi, bukti, mandat, uji dampak/pemulihan dan persetujuan eksplisit. Auto-merge historis tidak boleh aktif sebelum gerbang tersebut lulus. |
| RB-13.30 | Keputusan ini mengesahkan dokumentasi saja. | Dokumen fondasi saja: tidak ada kode/skema/migrasi/seeder, pemasangan paket, konfigurasi hosting, rekonsiliasi data nyata atau deployment. |

### C. Sepuluh prasyarat merge otomatis — wajib bersamaan

| Kode | Prasyarat | Pemeriksaan minimum |
| --- | --- | --- |
| S-13.01 | Jenis entitas sama | ORANG tidak digabung dengan BADAN_USAHA/UNIT_USAHA; rincian pihak tetap eksklusif |
| S-13.02 | Identitas telah diverifikasi melalui sumber memadai | Bukti/sumber dan status verifikasi merujuk aturan yang sah; nama/skor saja tidak cukup |
| S-13.03 | Tidak ada konflik identitas atau kepemilikan terbuka | Periksa kasus/subkasus dan status terbaru, termasuk pihak bersama |
| S-13.04 | Tidak berubah makna kepemilikan, kegiatan, lokasi atau status hukum | Jika perlu memilih fakta resmi berbeda atau mendefinisikan ulang unit, tahan untuk keputusan petugas |
| S-13.05 | Tidak ada risiko kehilangan/penggandaan catatan program | Periksa kontrak referensi jika ada; ketiadaan modul sekarang bukan klaim aman untuk integrasi masa depan |
| S-13.06 | Seluruh relasi dan referensi dapat dipertahankan | Inventaris lengkap, masa berlaku/bukti/versi serta rencana pengalihan tersedia; jenis referensi tak dikenal menahan |
| S-13.07 | Versi dan transaksi aman | Periksa sumber/target/referensi saat eksekusi, atomisitas dan penerapan sekali |
| S-13.08 | Aturan disahkan dan mempunyai versi | Cocok jenis tindakan/entitas, masa berlaku, batas otomatisasi dan otoritas sah |
| S-13.09 | Jejak audit, identitas asal dan mekanisme pemulihan tersedia | Peta ID/alias dan rencana dampak/pascaoperasi/pulih tervalidasi; audit kritis dan salinan KB-12 siap |
| S-13.10 | Mandat kewenangan sah | Proses memiliki identitas/mandat aktif serta cakupan sesuai KB-04/KB-11; bukan mesin mengambil alih pengesahan substantif |

**Satu syarat gagal, belum terbukti atau tidak diketahui: hentikan merge otomatis dan buat/tautkan kasus pemeriksaan petugas.** Skor tinggi bukan pengganti syarat. Status “identik terverifikasi” saja tidak menyatakan seluruh dampak aman. Sumber/target/referensi, aturan/versi, konflik dan mandat diperiksa lagi tepat sebelum perubahan.

Pada MVP, deteksi dan pencegahan duplikat saat registrasi diprioritaskan. Merge/split terstruktur didokumentasikan; tidak ada auto-merge historis yang diaktifkan sekarang. Penggunaan produksi memerlukan SOP, katalog aturan, bukti minimum, uji data sintetis/dampak/pemulihan, mitigasi dan mandat yang disahkan, lalu izin spesifik. Batas aman dan metode bukti belum final.

### D. Pencocokan menurut jenis entitas

| Jenis | Bukti/atribut yang boleh dipertimbangkan | Larangan dan batas |
| --- | --- | --- |
| ORANG | Identitas resmi terverifikasi, sumber/status serta atribut pendukung yang sah | Nama mirip bukan bukti; NIK diproses terlindungi di server dan tidak masuk hasil/log. Relasi berbeda memerlukan pemeriksaan dampak |
| BADAN_USAHA | Referensi resmi badan, perubahan nama dan sejarah status | Direktur/pemilik/pengurus sama tidak menyamakan badan; badan tidak digabung dengan orang pengurus |
| UNIT_USAHA | Identitas operasional, pihak, kegiatan, lokasi dan sumber; bukti kesatuan operasional KB-01 | Pemilik/NIB sama tidak cukup. Pengolahan dan perdagangan bisa satu atau dua unit menurut bukti, bukan algoritme yang menetapkan makna bisnis |
| CABANG / LOKASI | Keterkaitan induk teridentifikasi dan pemilik sama sesuai KB-01; beberapa lokasi dapat pada satu unit | Alamat sama tidak membuktikan unit sama; lokasi berbeda tidak otomatis unit baru |
| HUBUNGAN_PIHAK_USAHA | Identitas pihak/unit, peran, periode, status/bukti serta versi | Jangan menghapus kepemilikan bersama atau relasi berbeda periode/peran. Konflik pemilik menghentikan merge otomatis |
| PROGRAM / BANTUAN / PELATIHAN | Referensi peristiwa/transaksi asli dan hubungan peserta pada kontrak data masa depan | Peristiwa berbeda tetap berbeda; peristiwa benar-benar sama tidak digandakan. Belum menjadi modul MVP |
| PRODUK / PROFIL_SEKTORAL | Hubungan profil–kegiatan–unit, ID produk/pengukuran, sumber/versi/periode/satuan/status | Nama/merek mirip bukan identitas produk; kapasitas/realisasi atau Januari/Februari tidak ditimpa/digabung tanpa dasar |

Jika jenis atau bukti berbeda, buat kandidat/pemeriksaan yang sesuai tanpa memaksakan merge. Identitas eksternal yang sama tetapi bertentangan dengan sumber/status lainnya dianggap ketidaksesuaian, bukan bukti otomatis. Kelengkapan pendataan awal yang belum mempunyai NIK/NIB tetap diizinkan sesuai KB-03; tidak mengarang nomor atau nol untuk memudahkan pencocokan.

### E. Katalog aturan pencocokan

Katalog pada [kamus yang sama](kamus-data-mvp-kb09.md) memiliki sepuluh unsur: **ID/versi, jenis entitas, atribut yang boleh diperiksa, sumber bukti/status verifikasi, tingkat keyakinan, jenis keputusan yang boleh, batas otomatisasi, tanggal berlaku, otoritas penetap dan status aktif/nonaktif**.

Aturan berbasis sumber dan kewenangan yang sah, terkonfigurasi menurut jenis entitas/tindakan, tidak ditanam berdasarkan nama OPD. Simpan versi yang digunakan tiap pemeriksaan/keputusan; perubahan aturan tidak mengubah sejarah. Aturan dicabut/kedaluwarsa atau versi berubah menahan rencana terkait untuk pemeriksaan ulang.

Algoritme, skor, pembobotan, **ambang keyakinan**, jadwal dan teknologi belum disepakati; **tidak ada angka ambang yang ditetapkan**. Tingkat keyakinan menjelaskan bukti/ketidakpastian, bukan kewenangan atau keputusan final. Aturan skor saja tidak boleh mengaktifkan merge historis berisiko.

### F. Rancangan entitas dan referensi

Sebelas fungsi konseptual yang diminta adalah `KANDIDAT_DUPLIKAT`, `ATURAN_PENCOCOKAN`, `PEMERIKSAAN_REKONSILIASI`, `RENCANA_MERGE`, `DAMPAK_MERGE`, `RIWAYAT_IDENTITAS_KANONIK`, `ALIAS_IDENTITAS`, `RENCANA_SPLIT`, `KEPUTUSAN_REKONSILIASI`, `STATUS_ARSIP`, `RIWAYAT_PEMULIHAN_REKONSILIASI`. Pemetaan/atribut minimum ada pada [kamus](kamus-data-mvp-kb09.md) dan [relasi](03-entitas-dan-relasi.md). Gunakan kembali kasus/usulan/keputusan, riwayat nilai, status dan audit bila fungsinya sama; **bukan sebelas tabel baru yang diwajibkan**.

Setiap rencana/keputusan menautkan jenis entitas, ID asal/kanonik, aturan/versi, bukti/dasar, status, aktor atau proses/mandat serta event/versi yang relevan. Daftar sumber, tujuan dan dampak memakai record terkait, bukan satu kolom berisi kumpulan ID. ID kanonik dipilih dengan dasar sah yang belum dirinci; tidak otomatis ID tertua, terkecil atau bernilai eksternal tertentu.

ID sumber tidak dipakai ulang. Alias mempertahankan hubungan historis dan masa berlaku, tanpa siklus atau pemetaan aktif ambigu. Tautan ID lama tidak mengizinkan pembacaan profil di luar hak; sistem memeriksa objek tujuan dan sumber yang relevan tanpa membocorkan identitas. Konflik beberapa kandidat tidak diselesaikan hanya dengan transitivitas skor.

Relasi aktif yang boleh ditautkan ulang berbeda dari **event audit/keputusan historis**: audit lama mempertahankan target ID asli, dan penelusuran memakai peta identitas/keputusan baru. Jangan menulis ulang audit KB-12 untuk membuat seolah semua transaksi dahulu menggunakan ID kanonik. Kontrak peristiwa program mempertahankan ID peristiwa asli; tidak memindah/menghapus riwayat hanya demi statistik.

### G. Alur merge

1. Deteksi kandidat tanpa mengubah master.
2. Periksa jenis entitas, identitas/sumber dan status verifikasi.
3. Evaluasi aturan/versi, tanggal berlaku dan batas keputusan yang diizinkan.
4. Inventaris seluruh relasi/referensi beserta versi, masa berlaku dan status konflik.
5. Nilai dampak kepemilikan, program bila ada, kegiatan, lokasi, produk/produksi serta ekonomi/klasifikasi; siapkan rencana verifikasi/pemulihan.
6. Tentukan apakah konsolidasi teknis aman memenuhi **semua** prasyarat atau perlu keputusan petugas. Yang ambigu/berisiko ditahan; nilai berbeda mengikuti KB-08.
7. Setelah gerbang sah dan izin tahap terkait kelak, jalankan perubahan satu operasi transaksional dengan versi/mandat terkini dan penerapan sekali. Tidak menjalankan apa pun sekarang.
8. Catat kanonik, ID asal, alias/riwayat, keputusan dan aturan/versi serta audit kritis.
9. Verifikasi pascamerge atas keterkaitan, jumlah peristiwa/relasi, sektor/produksi dan hak akses; rekonsiliasi audit KB-12 serta jalankan prosedur pemulihan bila perlu melalui keputusan sah.

Jika banyak pemilik field harus memberi keputusan substantif, satu rencana dapat menautkan kasus induk/subkasus dan keputusan masing-masing pemilik. **Tidak** memberi satu petugas hak lintas field dan tidak menganggap seluruh sengketa lintas OPD selesai atomik. Eksekusi rencana yang bergantung pada seluruh keputusan ditahan sampai dasar, lingkup dan mandatnya lengkap; protokol rinci lintas OPD masih terbuka.

### H. Alur split

1. Terima laporan salah penggabungan atau batas unit melalui petugas; pemohon tidak dibuatkan akun.
2. Tentukan identitas/subjek dan unit yang perlu dipisah berdasarkan bukti, bukan hanya lokasi atau pemilik berbeda pada data yang belum diverifikasi.
3. Petugas berwenang memeriksa bukti, sejarah, konflik serta perubahan setelah merge.
4. Tetapkan pembagian **setiap** referensi pihak/peran/periode, lokasi, kegiatan, produk/produksi, ekonomi/klasifikasi, kontrak program dan riwayat. Referensi yang belum jelas tidak digandakan atau dihapus untuk memaksakan penyelesaian.
5. Pengesahan mengikuti KB-07/KB-08 dan masing-masing pemilik field; mekanisme rinci split belum final. Identitas baru yang memang perlu profil baru tetap tunduk KB-05.
6. Terapkan pembagian/versi/keputusan serta audit kritis secara konsisten, pertahankan jejak sumber dan verifikasi hasil.
7. Gunakan ID tujuan yang sah sesuai penetapan, tanpa mendaur ulang ID lama/alias yang telah menunjuk identitas lain. Prosedur identitas tujuan dan pemulihan masih terbuka.

Split bukan pembalikan buta semua penautan lama atau fitur auto-split berdasarkan skor. Rencana pemulihan harus memperhitungkan kejadian baru setelah merge; tidak menimpa perubahan sah yang lebih baru.

### I. Alur arsip

1. Tentukan dasar pengarsipan yang sah; usia profil/tidak diperbarui/tidak aktif saja tidak cukup.
2. Periksa konflik terbuka, hubungan aktif, kewajiban simpan/penahanan serta JRA.
3. Pihak berwenang melaksanakan keputusan sesuai mandat; aturan otomatis arsip belum ditetapkan.
4. Pertahankan status, ID asal/kanonik/alias, referensi dan audit agar dapat ditelusuri sesuai hak.
5. Terapkan pelindungan data, retensi dan penyusutan KB-11 pada profil, peta identitas, bukti dan salinan terkait.

Arsip tidak sama dengan hilang dari sejarah, tutup usaha, status konflik selesai atau hapus permanen. Larangan menghapus jejak sewenang-wenang tidak membenarkan penyimpanan seluruh data pribadi selamanya. Kebijakan arsip dan JRA Sinjai tetap belum final; tidak menetapkan masa simpan.

### J. Integritas, keamanan dan pemulihan

- Akses diperiksa di server pada deteksi/pencocokan, baca bukti, rencana, keputusan, eksekusi, ID alias, unduh/ekspor dan proses latar belakang yang kelak disepakati. NIK lengkap tidak masuk log/hasil kandidat atau salinan; pilihan metode keamanan pencocokan belum final.
- Proses otomatis merekam identitas proses, tujuan, mandat/masa berlaku, cakupan OPD/field/objek/wilayah, aturan/versi dan keputusan. Tidak menciptakan akun masyarakat atau menganggap mesin petugas pengesah; mandat berakhir/dicabut/ambigu menahan aksi.
- Perubahan multi-entitas kritis, keputusan/versi, peta identitas/relasi dan audit operasional commit/batal bersama. Satu kegagalan tidak meninggalkan merge/split parsial. Rencana usang atau aturan berubah diperiksa ulang, bukan ditimpa.
- ID operasi stabil dan pemeriksaan versi/idempotensi mencegah pengiriman ulang menerapkan dua kali; perubahan serentak pada sumber/target/referensi tidak boleh membuat peta bersiklus atau menggandakan relasi.
- Referensial diperiksa sebelum/sesudah, termasuk sumber/kanonik, alias historis, peran/masa berlaku, produk/pengukuran, klasifikasi dan peristiwa. Referensi tak dikenal menahan operasi; tidak menjanjikan migrasi/impor/program yang belum disetujui.
- Benturan keunikan profil unit–sektor, kegiatan utama aktif ganda atau referensi antarunit yang tidak lagi cocok harus diselesaikan dalam rencana yang sah. Jangan menghapus profil/produk, memilih satu status verifikasi atau kegiatan utama secara otomatis untuk memaksa merge; jika tidak dapat mempertahankan makna, tahan untuk petugas.
- Audit KB-12 menyimpan aturan/proses/mandat, keputusan/dampak dan hasil tanpa data pribadi mentah. Gagal audit kritis menggagalkan perubahan; gangguan kirim salinan sesudah commit mengikuti retry/eskalasi tanpa membatalkan bisnis sah diam-diam.
- Rencana pulih sebelum eksekusi memuat bukti/peta/versi, acuan, aktor berwenang dan pemeriksaan dampak setelah merge. Pemulihan menambah keputusan/event, tidak menghapus audit asli, tidak otomatis mereset database penuh atau menghidupkan ID pensiun sebagai identitas baru.
- Uji pemulihan mendatang harus memverifikasi relasi, versi, peristiwa, akses dan audit/salinan. RPO/RTO/teknologi dan kemampuan hosting tetap menunggu keputusan terkait; belum ada uji aplikasi atau pulih nyata.

### K. T13-01–T13-30 — kriteria penerimaan mendatang

Seluruh skenario adalah **rencana dengan data sintetis, belum dijalankan**. T13-12/T13-13 menguji kontrak referensial masa depan jika modul program kelak disepakati, bukan fitur program/bantuan MVP atau izin membuat data transaksi sekarang.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T13-01 | Orang yang sudah ada tidak dibuat ulang saat registrasi. | Identitas ORANG yang sudah terbukti sama memakai referensi internal sah, tanpa membuat duplikat; akun pemohon/NIK wajib awal tidak ditambahkan dan hasil pencarian tetap sesuai hak. |
| T13-02 | Nama sama dengan identitas berbeda tidak digabung. | Dua nama sama tetapi identitas berbeda dipertahankan terpisah; tidak merge atau menolak registrasi hanya dari nama. |
| T13-03 | Identitas terverifikasi yang sama terdeteksi dan diperiksa dampaknya. | Kecocokan terverifikasi tercatat dengan sumber/aturan dan pemeriksaan dampak; relasi berbeda/belum diperiksa tidak otomatis dipindah. |
| T13-04 | Badan dengan direktur sama tetap terpisah. | Dua badan dengan direktur sama tetap dua entitas; pengurus tidak menjadi kunci identitas badan. |
| T13-05 | Badan bernama mirip tidak otomatis digabung. | Nama badan mirip hanya kandidat; bukti/identitas resmi dan status historis diperiksa sebelum keputusan. |
| T13-06 | Dua usaha berbeda milik satu orang tidak digabung. | Dua kesatuan operasional berbeda milik orang sama tetap dua unit; tidak dihitung satu hanya karena kepemilikan. |
| T13-07 | Cabang sah tetap bagian unit induk. | Cabang dengan syarat KB-01 memakai unit induk; lokasi cabang tetap terlacak tanpa unit baru otomatis. |
| T13-08 | Alamat sama tidak otomatis berarti unit sama. | Alamat sama menghasilkan kandidat bila relevan, bukan bukti kesamaan atau merge otomatis. |
| T13-09 | Kepemilikan bersama tidak hilang. | Seluruh pihak pemilik bersama dan peran/masa berlakunya tetap; konflik salah satu pemilik menahan otomatisasi. |
| T13-10 | Relasi identik tidak terduplikasi. | Relasi yang benar-benar sama menurut pihak/unit/peran/periode/bukti tidak ditulis dua kali; jejak asal dan keputusan tetap tersimpan. |
| T13-11 | Riwayat hubungan berbeda periode dipertahankan. | Hubungan periode/peran berbeda tetap tercatat sebagai sejarah, tidak dihapus sebagai duplikat hanya karena pihak sama. |
| T13-12 | Riwayat pelatihan yang berbeda tetap ada. | Dua peristiwa pelatihan nyata berbeda tetap dua riwayat dengan ID asal. Ini kontrak uji modul masa depan, bukan pembangunan program MVP. |
| T13-13 | Transaksi bantuan yang identik tidak digandakan. | Peristiwa bantuan yang terbukti sama tidak diduplikasi oleh merge identitas; beda transaksi tetap berbeda. Skenario masa depan, tanpa modul bantuan sekarang. |
| T13-14 | Merge banyak relasi memerlukan pemeriksaan dampak. | Seluruh jenis/referensi dan dampak ditinjau; referensi tak dikenal, konflik atau versi usang menahan eksekusi. |
| T13-15 | Merge aman mencatat identitas kanonik dan asal. | Seluruh sepuluh prasyarat dan mandat sah dipenuhi; ID kanonik, asal, alias, aturan/versi, dampak serta event tercatat. Belum ada auto-merge produksi diaktifkan. |
| T13-16 | Konflik pemilik menahan merge otomatis. | Sengketa kepemilikan membuka/menautkan kasus KB-08, menghentikan otomatisasi dan mempertahankan hubungan resmi sampai keputusan sah. |
| T13-17 | Profil yang memuat dua usaha berbeda ditandai untuk split. | Profil yang mengandung dua unit berbeda menjadi kasus/rencana split untuk petugas; laporan tidak memisah otomatis. |
| T13-18 | Split yang disahkan mempertahankan pembagian referensi. | Keputusan split sah mengalokasikan referensi berdasarkan bukti, mempertahankan riwayat/versi dan memakai identitas tujuan yang sah tanpa daur ulang ID. |
| T13-19 | Profil lama tidak otomatis diarsipkan. | Usia profil atau lama tidak diperbarui tidak memicu arsip otomatis; status tetap sampai ada dasar/keputusan yang sah. |
| T13-20 | Arsip sah mempertahankan keterlacakan sesuai retensi. | Arsip mencatat dasar, keputusan/status, rujukan objek/alias serta audit; akses dan retensi/penahanan tetap berlaku, bukan hapus permanen. |
| T13-21 | Merge tanpa kewenangan ditolak. | Server menolak perintah/rencana/ID langsung di luar hak field/objek/tujuan/penugasan, tanpa perubahan master atau kebocoran bukti. |
| T13-22 | Proses otomatis dibatasi mandatnya. | Eksekusi otomatis merekam identitas proses, mandat dan aturan/versi, hanya di lingkup yang diizinkan; mandat berakhir/dicabut menghentikan aksi berikutnya. |
| T13-23 | Kegagalan transaksi tidak menghasilkan merge parsial. | Kegagalan salah satu perubahan relasi/peta/keputusan/audit membatalkan seluruh operasi kritis terkait; tidak ada referensi setengah pindah. |
| T13-24 | Retry tidak menghasilkan merge ganda. | ID operasi yang sama mengembalikan hasil tersimpan atau status aman, tanpa memindah relasi/membuat alias/keputusan sukses dua kali. |
| T13-25 | ID lama dapat ditelusuri ke ID kanonik sesuai hak akses. | Resolusi ID historis menuju kanonik dapat ditelusuri hanya sesuai izin; tanpa hak tidak mengungkap profil/pihak lain dan pemetaan tidak bersiklus. |
| T13-26 | Merge keliru dapat ditinjau dan dipulihkan dengan audit. | Petugas meninjau dasar/dampak, memeriksa perubahan setelah merge, lalu menjalankan keputusan korektif/pulih yang sah dengan event baru; audit asli tidak dihapus. |
| T13-27 | Produk dan profil industri tidak hilang atau digandakan. | Pengait kegiatan/profil, produk/bahan/peralatan dan pengukuran tetap konsisten; nama mirip tidak menyatukan produk dan periode/satuan/status tidak ditimpa/dihitung ganda. |
| T13-28 | Perbedaan nilai klasifikasi tidak ditimpa diam-diam. | Hasil modal/penjualan/periode/aturan dan kategori berbeda tetap tersimpan; konflik ditangani pemilik field, hitung ulang hanya usulan KB-10, tanpa pengesahan otomatis. |
| T13-29 | Perubahan bersamaan tidak menyebabkan inkonsistensi. | Perubahan versi sumber/target/aturan/referensi membuat rencana usang ditahan; pengesahan bersamaan tidak menghasilkan alias ganda/siklus/relasi hilang. |
| T13-30 | Audit mencatat aturan, proses, keputusan dan dampak rekonsiliasi. | Audit menautkan aturan/versi, identitas proses/petugas/mandat, ID asal/kanonik, dasar, dampak, keputusan dan hasil; tanpa NIK lengkap dan mengikuti salinan KB-12. |

### L. Batas MVP dan hal yang masih terbuka

MVP tetap Registri Induk + **Industri Pengolahan Pangan**. Prioritas awal rekonsiliasi adalah deteksi kandidat dan pencegahan duplikat saat registrasi; merge/split terstruktur merupakan rancangan. Tidak menambah modul bantuan/pelatihan, impor/integrasi, akun masyarakat, analitik atau teknologi tertentu. **Auto-merge historis tidak diaktifkan di produksi sebelum aturan, uji data, mitigasi risiko serta mandatnya disahkan.**

Tetap terbuka: OPD resmi penanggung jawab rekonsiliasi; otoritas pengesah katalog; bukti minimum identitas Orang/Badan Usaha; aturan/algoritme/skor/ambang; batas aman otomatisasi; pemilihan kanonik/identitas tujuan split; mekanisme pengesahan split dan koordinasi lintas pemilik; SOP sengketa; prosedur pembatalan/pulih; kebijakan arsip/JRA Sinjai; teknologi/kapasitas/jadwal/hosting dan standar keamanan; izin implementasi/data nyata/produksi.

KB-14–KB-18 tetap terbuka, khususnya kelayakan hosting, impor/integrasi, program, operasi dan kapasitas. Tidak menganggap mandat telah ada karena model dipilih. Rincian terdahulu KB-01–KB-12 yang belum disahkan tetap terbuka.

### M. Catatan konsistensi dan perubahan

KB-01–KB-12 tetap menjadi batas bisnis: kesatuan operasional/cabang, satu SSOT, ID terpisah, satu pemilik field, registrasi petugas/verifikator awal berbeda, tanpa akun masyarakat, satu pengesah field, konflik oleh pemilik, MVP pangan, skala tetap usulan–pengesahan, privasi dan audit dua lapisan. Rekonsiliasi teknis tidak boleh mengganti nilai ekonomi/klasifikasi berbeda dengan yang “terbaru” atau menjadikan hitung ulang otomatis sebagai pengesahan KB-10.

Benturan larangan umum penggabungan otomatis pada panduan/penjelasan historis KB-08 dilaporkan pada bagian A dan [addendum audit](08-audit-konsistensi-dokumentasi.md). Panduan aktif dipersempit mengikuti keputusan pengguna KB-13; rumusan RB-08.07, seluruh model/aturan/skenario KB-01–KB-12 dan baris KB-14–KB-18 tetap. Tidak ada kewenangan organisasi resmi yang ditetapkan.

5 November 2026 — pemilik produk menetapkan KB-13 Model C dengan **30 RB-13, 30 rencana T13, sepuluh prasyarat bersama dan sebelas fungsi konseptual**. Dokumen yang sama diselaraskan dan ZIP perubahan disiapkan setelah pemeriksaan. Tidak ada kode, skema/database/migrasi/seeder, dependensi, konfigurasi hosting, rekonsiliasi data nyata atau deployment.

## KB-14 — Audit kesiapan hosting PDN/cPanel

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P0, sesuai register  
**Status model:** **MODEL B DISEPAKATI — Audit Kesiapan Hosting PDN/cPanel Sebelum Penetapan Konfigurasi Teknis dan Deployment.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-14”.  
**Hasil hosting saat ini:** **BELUM DAPAT DINILAI** karena bukti aktual belum tersedia.  
**Batas:** dokumen audit, tanpa akses server atau implementasi.

### A. Tujuan, batas dan cara membaca status

Audit kelak menilai kompatibilitas aplikasi, keamanan data/identitas, keandalan otomatisasi, dokumen/storage, independensi audit, backup/pemulihan, kapasitas/operasi serta tata kelola infrastruktur. Keputusan memilih **cara menilai**, bukan mengesahkan konfigurasi final atau menyatakan PDN layak.

Dilarang pada tugas ini: mengakses/login/memindai/menguji server atau URL PDN/cPanel; menjalankan perintah terhubung hosting; meminta/membaca/menyimpan password, token, kunci SSH atau rahasia produksi; membuat file uji yang dipasang di hosting; mengubah kode/database/migrasi/seeder/dependensi/server/DNS; deployment. Pembacaan dokumentasi publik resmi diperbolehkan sebagai rujukan, bukan bukti kondisi hosting.

Kondisi aktual tiap item tetap **BELUM DIKETAHUI**. Versi alat lokal pada dokumen kondisi awal bukan versi server. Tidak ada spesifikasi, angka kuota, IP, domain, jadwal, pengelola atau kemampuan fitur PDN yang dikarang.

### B. Baseline kandidat

Laravel 13, Livewire 4 dan MySQL adalah **baseline kandidat penilaian deployment**, dengan Tailwind dan modular monolith sesuai arah proyek. Pemakaian di lingkungan target menunggu bukti; tidak mengganti teknologi diam-diam. MariaDB, jika dilaporkan pengelola, diperiksa sebagai produk berbeda dan bukan pengganti MySQL otomatis.

Laravel 13 membutuhkan PHP minimal **8.3**, serta ekstensi Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer dan XML. Periksa juga driver database sesuai target, antara lain pdo_mysql untuk MySQL. PHP web/CLI, ekstensi, konfigurasi dan dukungan paket diperiksa terpisah. [Rujukan resmi Laravel 13](https://laravel.com/framework/docs/13.x/deployment).

Metode Composer tersedia di lingkungan yang diizinkan atau melalui build terpercaya yang cocok target. Aset produksi dapat dibangun terpisah; Node runtime permanen tidak otomatis diperlukan untuk Laravel/Livewire. Document root harus public; storage/bootstrap/cache dapat ditulis secara aman; kode/.env/dokumen privat/backup tidak dilayani publik; produksi memakai HTTPS. Penjadwalan/queue/background harus punya metode andal, tanpa mengunci Redis/Supervisor/daemon atau jadwal sebelum kebutuhan dan hosting dibuktikan.

Baseline framework bukan batas kapasitas atau bukti semua dependensi cocok. Versi rilis/lock tepat diperiksa setelah instalasi diizinkan pada tugas tersendiri, bukan dipasang sekarang. MySQL 8.4 LTS pada usulan awal bukan fakta produk/versi PDN atau keputusan deployment final.

### C. RB-14.01–RB-14.26

| Kode | Ketentuan pemilik produk | Penjelasan rancangan |
| --- | --- | --- |
| RB-14.01 | Model B: audit dulu sebelum penetapan teknis. | Audit dan bukti kesiapan mendahului konfigurasi teknis final/rilis; model yang dipilih bukan hasil bahwa hosting sudah layak. |
| RB-14.02 | Audit dokumentasi tidak mengubah server. | Pekerjaan sekarang hanya formulir, persyaratan dan rancangan penilaian. Tidak login, memindai, menguji PDN, menghubungkan perintah, memasang file uji atau mengubah server/DNS. |
| RB-14.03 | Setiap penilaian harus mempunyai bukti yang dapat ditelusuri. | Setiap status mengikat rujukan bukti tersanitasi, lingkup/lingkungan, tanggal dan fungsi verifikator yang sah. Dokumentasi produk atau versi lokal bukan bukti server PDN. |
| RB-14.04 | Versi PHP harus kompatibel dengan framework yang dipilih. | Laravel 13 kandidat perlu PHP minimal 8.3 dan versi tepat yang cocok paket terpilih; versi aktual web/CLI masih belum diketahui. |
| RB-14.05 | Ekstensi dan konfigurasi PHP web/CLI harus diperiksa. | Daftar ekstensi dasar, driver, konfigurasi/batas dan kebutuhan paket diperiksa terpisah pada konteks web/CLI; angka versi sama belum berarti konfigurasi sama. |
| RB-14.06 | Database dan driver harus kompatibel. | Jenis/versi MySQL atau MariaDB, driver PDO, dukungan paket serta transaksi/integritas harus dibuktikan. MySQL tetap baseline; MariaDB bukan pengganti otomatis. |
| RB-14.07 | Document root tidak boleh mengekspos akar proyek. | Document root hanya public Laravel, bukan akar proyek. Jangan memindah entry point/seluruh kode ke web publik untuk mengakali hosting. |
| RB-14.08 | Konfigurasi dan data privat harus terlindungi. | Dokumen identitas/bukti, .env, kode, log privat dan backup tidak dilayani publik; akses unduh tetap melalui otorisasi server KB-11. |
| RB-14.09 | Harus tersedia metode build dependensi dan aset frontend. | Metode Composer dan artefak dependensi/aset terpercaya harus tersedia; build boleh terpisah, cocok target serta dapat diverifikasi. Node permanen tidak otomatis diperlukan. |
| RB-14.10 | SSH/Terminal dapat digantikan metode deployment aman yang terbukti. | Tanpa SSH milik akun dapat dinilai melalui metode pengelola/artefak aman yang terbukti, bukan asumsi atau endpoint web publik untuk perintah administrasi. |
| RB-14.11 | Harus tersedia scheduler yang andal. | Metode scheduler untuk tugas yang diperlukan harus andal, sesuai PHP CLI, batas penyedia, pemantauan serta pencegahan proses tumpang tindih; jadwal proyek belum dipilih. |
| RB-14.12 | Queue/background job harus dapat dijalankan dengan aman dan terpantau. | Antrean/background memiliki metode aman, retry, batas durasi, otorisasi dan pemantauan. Jangan mewajibkan Redis/Supervisor/daemon tanpa kebutuhan dan dukungan terbukti. |
| RB-14.13 | Batas proses, timeout dan sumber daya diperiksa. | Catat batas proses/timeout/memori/CPU/kuota serta dampak web/CLI/cron/worker. Belum ada angka kapasitas atau target yang diasumsikan. |
| RB-14.14 | HTTPS dan pengelolaan sertifikat harus tersedia. | Produksi memerlukan HTTPS dan pengelolaan sertifikat, perpanjangan serta penanggung jawab yang sah; belum ada sertifikat PDN yang diuji. |
| RB-14.15 | File permission dan akun mengikuti hak minimum. | storage/bootstrap/cache dapat ditulis hanya proses yang berwenang, akun/hak infrastruktur dibatasi; tidak membuka izin global atau menjadikan admin pemilik semua data. |
| RB-14.16 | Audit terpisah memenuhi prinsip independensi kontrol KB-12. | Salinan audit memiliki kontrol keamanan/administratif terpisah sesuai KB-12. Dua tabel/folder di satu akun atau penguasaan admin sama tanpa kontrol independen tidak cukup. |
| RB-14.17 | Replikasi audit mempunyai mekanisme retry dan rekonsiliasi. | Pengiriman memakai ID stabil, retry, pencegahan duplikasi, rekonsiliasi dan monitoring keterlambatan. Gagal kirim pascacommit berbeda dari gagal audit operasional kritis. |
| RB-14.18 | Backup mencakup komponen yang diperlukan untuk pemulihan. | Backup mencakup database, dokumen privat dan konfigurasi yang diperlukan, dengan lokasi/akses/kunci aman; isi rahasia tidak disalin ke dokumen/repository. |
| RB-14.19 | Restore harus diuji sebelum produksi. | Bukti restore berizin pada lingkungan terpisah wajib sebelum produksi, dengan verifikasi kelengkapan/integritas/hasil. Backup tersedia saja belum membuktikan pemulihan. |
| RB-14.20 | Monitoring, logging dan eskalasi insiden diperiksa. | Pemantauan log/kegagalan/kapasitas, sanitasi data, dukungan dan eskalasi insiden dibuktikan. Monitoring tambahan berbeda dari kontrol dasar wajib. |
| RB-14.21 | Kuota storage, inode, CPU, RAM dan koneksi database diperiksa. | Kuota storage/inode/CPU/RAM/koneksi serta batas proses/transfer diketahui dan dinilai terhadap volume KB-18; saat ini semua aktual BELUM DIKETAHUI. |
| RB-14.22 | Status kelayakan memakai Layak, Layak Bersyarat, Tidak Layak, dan Belum Dapat Dinilai. | Hasil keseluruhan tepat empat: Layak, Layak Bersyarat, Tidak Layak, Belum Dapat Dinilai. Bedakan dari empat status item; hasil awal BELUM DAPAT DINILAI. |
| RB-14.23 | Kesenjangan kritis tidak boleh ditutup tanpa bukti mitigasi. | Kesenjangan kritis tidak ditutup oleh janji, dokumentasi generik, halaman login atau label bersyarat; butuh bukti mitigasi sah dan verifikasi. |
| RB-14.24 | Jika cPanel tidak layak, usulkan infrastruktur alternatif melalui keputusan terpisah. | Jika persyaratan kritis tidak dapat dipenuhi/dimitigasi sah, usulkan permohonan infrastruktur sesuai melalui keputusan terpisah; tanpa migrasi/vendor/perubahan DNS otomatis. |
| RB-14.25 | Deployment membutuhkan persetujuan pihak berwenang setelah seluruh gerbang terpenuhi. | Deployment memerlukan keputusan pihak berwenang setelah gerbang keamanan/operasi/kelayakan/bisnis/hukum terpenuhi. Status layak atau izin dokumentasi bukan izin rilis. |
| RB-14.26 | KB-14 mengesahkan dokumentasi audit, bukan implementasi. | KB-14 hanya mengesahkan dokumen audit dan rencana pembuktian; tidak ada akses server, kode/database/migrasi/seeder/paket, konfigurasi/DNS, data nyata atau deployment. |

### D. Formulir audit yang berlaku

Gunakan [checklist hosting pada berkas yang sama](07-checklist-hosting-cpanel.md), sekarang memuat **55 pemeriksaan, sepuluh kelompok dan 13 kolom**: ID pemeriksaan, komponen, persyaratan minimum, kondisi aktual, sumber bukti, tanggal pemeriksaan, pihak yang memverifikasi, status, tingkat kritikalitas, risiko, mitigasi, penanggung jawab tindak lanjut dan status penyelesaian.

Kelompok: identitas/jenis layanan; PHP/ekstensi; database; Composer/asset build; root/direktori privat/permission; HTTPS/keamanan; cron/queue/background; storage/inode/RAM/CPU/timeout/koneksi; audit operasional/salinan/integritas; backup/restore/monitoring/dukungan.

Seluruh kondisi aktual 55 item = **BELUM DIKETAHUI**; status item **Belum Diketahui**, bukti aktual belum tersedia, tanggal belum diperiksa, verifikator/petugas tindak lanjut belum ditetapkan. Tingkat risiko diisi sebagai prioritas awal potensial, bukan temuan yang sudah terbukti. Tidak ada item Memenuhi atau Tidak Relevan yang diberikan berdasarkan asumsi.

Bukti harus tersanitasi, bertanggal/bersumber serta menandai lingkup/lingkungan dan pihak yang berwenang. Jangan masukkan kredensial, connection string rahasia, dump, IP privat sensitif, data pribadi atau isi .env. Bukti berupa ringkasan pengelola dapat digunakan tanpa memberi Codex akses server; paparan desain generik atau halaman login saja tidak membuktikan kondisi aktual.

### E. Persyaratan khusus SIJAI UMKM

**Privat sesuai KB-11:** hanya public dilayani web; identitas/bukti kepemilikan tetap privat; URL/unduhan memerlukan otorisasi server; .env, kode, log dan backup tidak publik; permission/akun minimum. Bukti uji negatif pada lingkungan berizin perlu kelak oleh pihak berwenang, tanpa uji URL PDN sekarang.

**Audit KB-12:** periksa salinan dengan kontrol keamanan/administratif terpisah, hak administrator termasuk database/server/backup, pengiriman event terlindungi, ID stabil/retry/pencegahan duplikasi, rekonsiliasi/integritas/perlindungan hapus serta pemantauan keterlambatan. Dua tabel/folder satu akun atau penguasaan kontrol sama bukan independen. Gagal audit operasional kritis membatalkan bisnis; gagal kirim salinan pascacommit mengikuti penundaan/retry/escalasi, bukan pembatalan diam-diam.

**Penjadwalan KB-12/KB-13:** kemampuan scheduler, antrean, deteksi kandidat berkala, replikasi/verifikasi audit, backup/kesehatan, retry dan pencegahan proses ganda wajib dinilai sesuai kebutuhan. Fitur Cron Jobs cPanel dapat dinonaktifkan penyedia; keberadaan panduan bukan bukti aktivasi. Opsi worker terbatas/terus-menerus atau metode alternatif belum dipilih; frekuensi/ambang/teknologi bergantung kebutuhan, bukti dan keputusan terkait. Model C KB-13 tidak mengaktifkan merge historis berisiko.

**Backup/pemulihan:** database, dokumen privat dan konfigurasi yang diperlukan tercakup; lokasi/kontrol terpisah, enkripsi/akses/kunci dikelola aman tanpa menyalin rahasia ke repository. Restore harus terbukti di lingkungan terpisah berizin dengan kelengkapan/integritas dan hasil tercatat; backup tersedia bukan jaminan pulih. Konsistensi dengan audit/retensi/penahanan KB-11/KB-12 diperiksa. RPO/RTO tetap KB-17 dan kapasitas KB-18 belum final.

### F. Status item dan empat hasil kelayakan

| Status per item | Arti |
| --- | --- |
| Memenuhi | Bukti aktual relevan diverifikasi sesuai persyaratan |
| Tidak Memenuhi | Bukti menunjukkan kesenjangan, dicatat dampak dan tindak lanjut |
| Belum Diketahui | Bukti belum ada/cukup atau belum diverifikasi |
| Tidak Relevan | Alasan lingkup dan persetujuan sah tercatat; bukan mengabaikan kontrol kritis |

| Hasil keseluruhan | Ketentuan model |
| --- | --- |
| LAYAK | Seluruh syarat kritis terbukti terpenuhi, pengamanan serta pemulihan terverifikasi |
| LAYAK BERSYARAT | Syarat kritis terpenuhi; ada kesenjangan nonkritis dengan mitigasi disetujui dan wajib dituntaskan sebelum produksi |
| TIDAK LAYAK | Ada persyaratan kritis yang tidak dapat dipenuhi atau dimitigasi secara sah |
| BELUM DAPAT DINILAI | Bukti belum cukup untuk membuat keputusan |

Bukti belum diketahui tidak otomatis Tidak Memenuhi, dan tidak boleh dianggap Memenuhi. Selama syarat kritis belum terbukti, tidak boleh disimpulkan Layak/Layak Bersyarat. Kesenjangan kritis yang sedang menunggu perbaikan tetap menahan produksi; rencana mitigasi bukan bukti penutupan. Jika kritis tidak dapat dipenuhi/dimitigasi sah, hasil Tidak Layak, meskipun sebagian lain belum diketahui.

Layak Bersyarat **bukan** jalur produksi dengan kesenjangan kritis. Mitigasi nonkritis pun wajib selesai sebelum produksi. Halaman login bisa tampil tidak membuktikan aplikasi, keamanan, audit atau pemulihan siap. Formulir lengkap tanpa bukti aktual terverifikasi tetap Belum Dapat Dinilai.

Status Layak sekalipun bukan izin deployment atau penggunaan data nyata. Gerbang bisnis/hukum/akses/privasi/audit, operasi/kapasitas, bukti kesiapan dan persetujuan pihak berwenang tetap terpisah. **Hasil sekarang hanya BELUM DAPAT DINILAI.**

### G. Prioritas risiko dan kesenjangan

| Prioritas awal | Potensi yang diperiksa | Penutupan / ketergantungan |
| --- | --- | --- |
| Kritis | Dokumen/config bocor, runtime tidak kompatibel, HTTPS tidak tersedia, audit terpisah tidak terpenuhi, pemulihan tidak mungkin | Mitigasi sah dan bukti verifikasi; tidak dapat dipenuhi berarti Tidak Layak |
| Tinggi | Cron/queue tidak andal, resource tidak cukup, backup belum terbukti pulih, hak administrator tidak jelas | Bukti metode/kuota/restore/kontrol; dampak bisa menaikkan kritikalitas |
| Menengah | Alat build terbatas, monitoring tambahan, kenyamanan deployment | Alternatif aman yang dibuktikan; kegagalan kontrol dasar wajib bukan otomatis minor |

Prioritas akhir mengikuti dampak/bukti aktual; belum ada risiko yang dinyatakan ditangani. Monitoring dasar/eskalasi tetap diperiksa, berbeda dari fitur tambahan monitoring. Tidak menetapkan kuota, jadwal, target pemulihan atau anggaran.

### H. T14-01–T14-24 — rencana penerimaan

Semua skenario adalah **rencana**, bukan hasil tes aplikasi atau pemeriksaan server. Tidak menjalankan koneksi, pemindaian, pengujian URL atau restore PDN pada tugas ini.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T14-01 | Versi PHP belum diketahui: belum dapat dinilai. | Item PHP berstatus Belum Diketahui dan hasil hosting BELUM DAPAT DINILAI; versi lokal/dokumentasi resmi tidak menggantikan bukti PDN. |
| T14-02 | PHP di bawah 8.3 untuk Laravel 13: tidak memenuhi baseline. | Bukti sah PHP web di bawah 8.3 membuat baseline Laravel 13 Tidak Memenuhi; tidak menurunkan Laravel diam-diam. Tindak lanjut/kelayakan berdasar mitigasi dan bukti. |
| T14-03 | Ekstensi wajib hilang: kesenjangan tercatat. | Ekstensi hilang dicatat Tidak Memenuhi beserta risiko/mitigasi/penanggung jawab; jika dampaknya kritis, tidak boleh ditutup sebagai minor. |
| T14-04 | PHP CLI dan web berbeda: diperiksa terpisah. | PHP web dan CLI mempunyai bukti/status masing-masing; perbedaan versi/konfigurasi dinilai terhadap paket/tugas, bukan otomatis dianggap setara atau pasti gagal. |
| T14-05 | Document root menuju akar proyek: gagal keamanan. | Root ke akar proyek dicatat kesenjangan kritis dan Tidak Memenuhi; rilis ditahan sampai perlindungan dibuktikan, tanpa mengubah root pada tugas ini. |
| T14-06 | Dokumen sensitif terbuka publik: tidak layak sebelum diperbaiki. | Paparan dokumen adalah kesenjangan kritis; tidak layak dipakai produksi sebelum perbaikan/mitigasi sah terbukti, tanpa diberi Layak/Layak Bersyarat dari janji. |
| T14-07 | SSH tidak tersedia tetapi deployment alternatif aman: dapat dinilai bersyarat. | Tidak ada SSH bukan kegagalan otomatis jika metode alternatif aman terbukti. Layak Bersyarat hanya jika seluruh kritis terpenuhi dan sisa nonkritis bermitigasi sah; bukan izin deploy. |
| T14-08 | Composer tidak tersedia di server: cek metode build alternatif. | Periksa bukti metode Composer/build terpercaya di lingkungan lain serta kecocokan platform/artefak. Tidak menginstal Composer atau menganggap ketiadaan di server pasti menutup alternatif. |
| T14-09 | Cron tidak andal: tidak memenuhi kebutuhan penjadwalan. | Ada kesenjangan penjadwalan untuk tugas yang memerlukannya; alternatif harus dibuktikan andal, tanpa menyatakan cron pasti aktif atau memasang jadwal sekarang. |
| T14-10 | Queue butuh proses permanen yang dilarang: perlu alternatif yang dibuktikan. | Rancangan meninjau alternatif eksekusi aman sesuai durasi/kebutuhan/hosting. Tanpa bukti alternatif, kebutuhan belum terpenuhi; tidak memaksa daemon/Redis. |
| T14-11 | Asset frontend gagal dilayani: belum lolos. | Aset/manifest/routing/interaksi yang gagal belum memenuhi; halaman login saja tidak meluluskan aplikasi. Bukti uji staging kelak diperlukan. |
| T14-12 | HTTPS tidak tersedia: tidak layak untuk produksi. | Tanpa HTTPS tidak layak untuk produksi; catat kesenjangan kritis dan mitigasi/bukti penutupan, tanpa mengubah sertifikat/DNS. |
| T14-13 | Salinan audit dikuasai admin aplikasi yang sama tanpa kontrol independen: tidak memenuhi KB-12. | Kontrol tersebut Tidak Memenuhi independensi KB-12; lokasi/folder/tabel kedua dan hash lokal tidak menjadi pengganti kontrol terpisah. |
| T14-14 | Pengiriman audit gagal: retry dan rekonsiliasi harus tersedia. | Bukti rancangan/simulasi kelak menunjukkan event tertunda, ID stabil, retry, rekonsiliasi dan eskalasi; bisnis commit tidak dibatalkan diam-diam karena gagal salinan. |
| T14-15 | Backup ada tetapi restore belum terbukti: belum siap produksi. | Restore belum terbukti berarti belum siap produksi; minta laporan terotorisasi tersanitasi, tidak mengklaim backup pasti dapat dipulihkan atau menjalankan restore sekarang. |
| T14-16 | Kuota penyimpanan belum diketahui: kapasitas belum dapat dinilai. | Item kuota Belum Diketahui; kapasitas/hasil belum dapat diputuskan positif tanpa bukti dan kebutuhan volume KB-18. |
| T14-17 | Monitoring/eskalasi insiden tidak ada: kesenjangan operasional. | Kesenjangan operasional dicatat dengan dampak dan mitigasi; monitoring dasar/eskalasi tidak dianggap fitur tambahan yang bebas diabaikan. |
| T14-18 | Semua syarat kritis terbukti terpenuhi: kandidat layak. | Menjadi kandidat Layak jika juga pengamanan/pemulihan terverifikasi dan penilaian berwenang lengkap; tidak otomatis izin data nyata/deployment. |
| T14-19 | Syarat kritis tidak dapat dipenuhi: tidak layak. | Persyaratan kritis yang tak dapat dipenuhi/dimitigasi sah menghasilkan TIDAK LAYAK dan usulan infrastruktur terpisah, tanpa migrasi otomatis. |
| T14-20 | Codex tidak memiliki mandat server: hanya dokumentasi. | Codex tetap dokumentasi, tanpa login/pindai/koneksi server, rahasia, file uji atau tindakan teknis. Tugas ini tidak memberi mandat server. |
| T14-21 | Bukti sanitasi dari pengelola: dapat digunakan dalam penilaian. | Bukti yang disanitasi dapat dipakai bila sumber, tanggal, lingkup/lingkungan dan verifikator dapat ditelusuri; tidak otomatis membuat semua item Memenuhi. |
| T14-22 | Kesenjangan minor: layak bersyarat jika mitigasi sah. | Layak Bersyarat hanya bila syarat kritis sudah terbukti, minor mempunyai mitigasi sah dan wajib selesai sebelum produksi. Kesenjangan kritis tidak dilabel minor. |
| T14-23 | Dokumen lengkap tetapi server belum diverifikasi: belum dapat dinilai. | Formulir lengkap tanpa verifikasi aktual yang sah tetap BELUM DAPAT DINILAI; jumlah dokumen bukan bukti kesiapan. Bukti pengelola berwenang dapat dinilai tanpa login Codex. |
| T14-24 | KB-14 saja tidak memberikan izin deployment. | Keputusan KB-14, checklist selesai atau status Layak tidak memberi izin deployment; perlu persetujuan terpisah setelah seluruh gerbang terpenuhi. |

### I. Referensi resmi dan batas pembuktiannya

Sumber publik resmi dibaca **5 November 2026**. URL berikut tersedia saat dibaca, tanpa mengakses PDN.

| Sumber | Relevansi |
| --- | --- |
| [Deployment Laravel 13](https://laravel.com/framework/docs/13.x/deployment) | Baseline PHP/ekstensi, root public dan direktori tulis |
| [Quickstart Livewire 4](https://livewire.laravel.com/docs/4.x/quickstart) | Antarmuka PHP/Blade serta dependensi/aset; kecocokan rilis tepat belum diuji |
| [Cron Jobs cPanel](https://docs.cpanel.net/cpanel/advanced/cron-jobs/) | Penjadwalan/risiko tumpang tindih, fitur dapat diatur penyedia |
| [Composer cPanel](https://docs.cpanel.net/knowledge-base/web-services/how-to-set-up-php-composer/) | Kebutuhan/metode Composer; tidak menganggap paket/SSH tersedia pada akun |
| [Database Laravel](https://laravel.com/framework/docs/13.x/database) | Produk/driver dan transaksi yang perlu dibandingkan dengan target |
| [Scheduler Laravel](https://laravel.com/framework/docs/13.x/scheduling), [Queues Laravel](https://laravel.com/framework/docs/13.x/queues) | Pilihan pelaksanaan tugas/antrean harus sesuai batas hosting |
| [Vite Laravel](https://laravel.com/framework/docs/13.x/vite) | Aset build produksi dapat dipisah dari proses server aplikasi |

Catatan sumber: cPanel mendokumentasikan penggunaan Composer pada akun dengan SSH dan tidak lagi menyertakan paket tertentu pada versi cPanel yang disebutnya. Tidak disimpulkan bahwa akun PDN memakai versi itu atau harus diberi SSH; metode alternatif aman oleh pengelola/build tetap perlu dibuktikan. Tidak menyalin/menjalankan contoh instalasi/konfigurasi pada sumber.

### J. Ketergantungan dan keputusan yang masih terbuka

- Pengelola hosting PDN yang sah menyediakan bukti tersanitasi, batas layanan/fitur dan dukungan melalui penugasan tersendiri. Dokumen ini tidak mengirim permintaan atau memberi mandat server kepada Codex.
- KB-17: tata kelola operasi, backup/restore, eskalasi, administrator, zona waktu serta target RPO/RTO.
- KB-18: volume/pengguna serentak, dokumen/event, pertumbuhan dan kapasitas/kuota.
- Penetapan OPD/pengelola sistem/pihak verifikator, pemberi persetujuan dan pembagian tanggung jawab.
- Rincian KB-11: dasar/kewajiban privasi, kelas/akses, JRA/DPIA; model tetap.
- Rincian KB-12: lokasi/teknologi/pengelola/control salinan, jadwal/frekuensi integritas dan metode andal; model tetap.
- KB-13 tetap terkendali: aturan/bukti/mandat dan merge historis berisiko belum aktif. Kelayakan scheduler bukan izin merge.
- **KB-15–KB-18** tetap terbuka, termasuk impor/integrasi/program; tidak mengubah nomor atau isi barisnya.
- Versi aktual PHP web/CLI/database, ekstensi, Composer/build, konfigurasi publik/privat, scheduler/queue, kuota, bukti restore/kontrol audit dan kelayakan final belum diketahui.
- Izin instalasi/implementasi, data nyata, konfigurasi/DNS dan deployment belum diberikan.

Jika persyaratan kritis tak dapat dipenuhi/dimitigasi sah, dokumentasikan opsi permohonan infrastruktur yang sesuai melalui keputusan terpisah. Tidak otomatis memigrasikan hosting, memilih vendor, mengubah DNS atau menurunkan/mengganti teknologi.

### K. Konsistensi dan catatan perubahan

KB-01–KB-13 tetap: SSOT dan entitas terpisah, banyak-ke-banyak/cabang bersyarat, registrasi tanpa NIB, satu pemilik field, petugas/verifikator awal berbeda, tanpa akun masyarakat, satu pengesah field, konflik oleh pemilik, MVP pangan, usulan/pengesahan skala, privasi, audit berkontrol terpisah dan rekonsiliasi identitas aman.

Pernyataan KB-14 masih terbuka pada bagian terdahulu adalah riwayat; model audit sekarang dipilih tetapi kondisi/konfigurasi/kelayakan PDN **belum dinilai**. Format status checklist lama diganti agar tidak bercampur dengan empat status item dan empat hasil KB-14. Tidak mengubah prinsip terdahulu untuk menyesuaikan keterbatasan cPanel; alternatif hanya keputusan terpisah. Lihat [addendum audit](08-audit-konsistensi-dokumentasi.md).

5 November 2026 — pemilik produk menetapkan KB-14 Model B. Dokumen memuat **26 RB-14, 24 rencana T14 dan formulir 55 item dalam sepuluh kelompok/13 kolom**. KB-01–KB-13 serta KB-15–KB-18 dipertahankan. Hosting BELUM DAPAT DINILAI; seluruh kondisi aktual BELUM DIKETAHUI. Tidak ada akses PDN/server, rahasia, kode/database/migrasi/seeder/dependensi, konfigurasi/DNS, file uji hosting atau deployment.

## KB-15 — Impor data bertahap dan terverifikasi

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P2, sesuai register  
**Status:** **MODEL B DISEPAKATI — impor melalui staging, validasi, pemetaan, pencocokan, penyelesaian konflik dan pengesahan sebelum memengaruhi nilai resmi.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-15”.  
**Batas:** dokumentasi saja, tanpa data pribadi nyata, akses sistem OPD/OSS/Dukcapil, kode atau deployment.

### A. Ruang lingkup dan batas MVP

| Jalur | Rancangan / batas |
| --- | --- |
| Impor historis satu kali | Berkas sumber sah melalui staging dan alur pemeriksaan/pengesahan |
| Pembaruan berkala berkas | Mekanisme staging yang sama, dengan asal/versi/periode/identitas record dan pengendalian pengulangan |
| Integrasi langsung API/layanan resmi | Fase berikutnya; dasar/mandat/otorisasi/spesifikasi tambahan, **bukan implementasi MVP** |

**Staging** adalah penampungan data sementara yang akses/statusnya dipisah dari registri resmi. Staging impor bukan otomatis server staging untuk uji aplikasi; cara isolasi fisik/logis belum dipilih. **Promosi** berarti penerapan perubahan yang telah memenuhi pemeriksaan dan keputusan sah ke data resmi. Berkas OPD adalah sumber usulan/bukti yang harus diperiksa, bukan kebenaran mutlak atau master resmi per OPD.

KB-09 tetap Registri Induk + **Industri Pengolahan Pangan**. Impor manual melalui staging kini didokumentasikan sebagai rancangan yang **dapat dikembangkan setelah gerbang tata kelola dan izin tahap terkait terpenuhi**, bukan perluasan otomatis fitur aktif MVP atau izin impor massal. Prioritas registri/sektoral dasar tetap. Tidak ada sinkronisasi real-time, akses OSS/Dukcapil/OPD, modul bantuan/program atau impor data pribadi nyata selama pengembangan.

Pernyataan “impor massal di luar MVP” pada keputusan terdahulu tetap; KB-15 memilih model pengendalian impor untuk rancangan selanjutnya, tanpa mengubah cakupan KB-09 diam-diam. Format/dataset/SOP/ukuran/frekuensi dan izin implementasi belum final.

### B. RB-15.01–RB-15.30

| Kode | Ketentuan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-15.01 | Model B: impor bertahap dan terverifikasi. | Impor historis/berkala melalui berkas hanya rancangan bertahap dengan staging, validasi, pemeriksaan, usulan dan pengesahan; tidak langsung menulis master. |
| RB-15.02 | Data staging tidak langsung menjadi nilai resmi. | Staging adalah data penampungan sementara dengan status terpisah. Laporan/statistik resmi membaca nilai/status yang sudah sah, bukan jumlah baris staging. |
| RB-15.03 | Sumber harus berasal dari pihak yang mempunyai kewenangan. | Catat pihak/OPD asal dan kewenangan dataset melalui penetapan sah. Berkas berkop OPD atau unggahan petugas bukan bukti semua nilai benar/semua field miliknya. |
| RB-15.04 | Tujuan dan dasar pemrosesan dicatat sebelum menggunakan data. | Tujuan, dasar pemrosesan serta lingkup dataset harus sah sebelum data digunakan. Dasar umum berbagi data tidak otomatis mengizinkan seluruh identitas/dataset. |
| RB-15.05 | Setiap impor memperoleh ID batch unik. | ID batch internal unik menelusuri sumber, berkas, pemetaan, record dan keputusan; bukan NIK/NIB atau nama berkas. |
| RB-15.06 | Metadata asal, waktu, pengirim dan versi sumber dicatat. | Metadata asal, waktu penerimaan, pengirim/penerima berwenang, versi/snapshot sumber dan referensi integritas dicatat minimum; rahasia tidak masuk metadata. |
| RB-15.07 | Staging mempunyai isolasi akses dan status tersendiri. | Hak baca/ubah/usul/sahkan/unduh/ekspor staging dipisah sesuai sensitivitas/cakupan. Isolasi logis bukan otomatis database/aplikasi baru per OPD. |
| RB-15.08 | Pemetaan field harus terdokumentasi dan berversi. | Pemetaan kolom–objek/field, arti/tipe, transformasi, referensi dan versi disahkan sesuai kewenangan; versi baru tidak mengubah sejarah. |
| RB-15.09 | Validasi tipe, nilai wajib, format, satuan, periode dan referensi. | Validasi menurut konteks objek/tahap: tipe, wajib, format, satuan/periode dan referensi/wilayah/KBLI. NIB atau NIK kosong tidak menjadi syarat wajib baru seluruh registrasi awal. |
| RB-15.10 | Kolom tidak dikenal tidak boleh otomatis dipromosikan menjadi field resmi. | Kolom tidak dikenal ditandai untuk pemeriksaan/karantina dan tidak otomatis membuat field, hak pemilik atau nilai resmi; bukti sumber tetap terlacak. |
| RB-15.11 | NIK dan data sensitif terlindungi dalam staging, log dan laporan kesalahan. | NIK/bukti sensitif disimpan privat/terlindungi seperlunya. Laporan umum, diagnostik dan audit memakai ID/referensi aman tanpa NIK lengkap atau salinan payload. |
| RB-15.12 | NIB bukan primary key Unit Usaha. | NIB identitas eksternal menurut subjek/cakupan sumber resmi, bukan primary key atau nomor unik satu unit/cabang; ID internal tetap independen. |
| RB-15.13 | Pencocokan identitas mengikuti KB-03 dan KB-13. | Kandidat/pencocokan memakai aturan berjenis dan berversi KB-13 serta ID internal KB-03; skor/nama/alamat/pemilik/NIB sama bukan bukti identik. |
| RB-15.14 | Pencocokan ambigu ditahan untuk pemeriksaan. | Ambiguitas atau konflik identitas/kepemilikan ditahan untuk petugas. Tidak melakukan merge historis berisiko sebagai efek unggahan. |
| RB-15.15 | Satu usaha yang sama dari beberapa sumber tidak membuat profil ganda. | Identitas usaha yang terbukti sama ditautkan ke registri yang sama sesuai hak; beberapa sumber tetap menyimpan asal-usul, tanpa master per OPD atau duplikasi baru. |
| RB-15.16 | Cabang dan kegiatan mengikuti KB-01. | Unit adalah kesatuan operasional; cabang dengan syarat KB-01 tetap induk, pengolahan/perdagangan dapat satu atau dua unit menurut bukti, bukan satu unit per baris/kolom. |
| RB-15.17 | Profil sektoral harus terhubung ke kegiatan dan unit usaha yang tepat. | Produk/profil industri dan pengukuran mengacu kegiatan serta unit yang tepat. Referensi belum jelas ditahan, bukan membuat profil induk fiktif. |
| RB-15.18 | Data ekonomi dan produksi mempertahankan periode, satuan, sumber dan verifikasi. | Produksi/ekonomi memelihara angka, satuan/mata uang, periode/cakupan, sumber/versi dan verifikasi; tidak menimpa periode lain, menyamakan kosong dengan nol, atau menjumlah satuan tanpa konversi sah. |
| RB-15.19 | Konflik nilai diselesaikan oleh OPD pemilik field. | Konflik nilai baru/lama tidak diselesaikan dengan file terbaru atau OPD pengirim. Usulan/kasus KB-08 diarahkan ke satu pemilik field aktif. |
| RB-15.20 | Pengesahan dilakukan oleh petugas yang memiliki kewenangan aktif sesuai KB-07. | Satu petugas pemilik field dengan penugasan aktif mengesahkan perubahan biasa setelah validasi/bukti/versi. Profil baru tetap verifikator berbeda dari pembuat KB-05. |
| RB-15.21 | Impor ulang batch/record sama tidak menyebabkan efek ganda. | Identitas batch/record sumber, versi dan operasi mengendalikan penerapan sekali. Fingerprint berkas saja bukan bukti entitas sama atau pengganti pemeriksaan replay. |
| RB-15.22 | Pengesahan menggunakan transaksi dan pemeriksaan versi. | Sebelum promosi, periksa ulang versi staging/pemetaan/sumber/objek, referensi dan hak. Perubahan terkait/keputusan/status/audit kritis commit atau batal bersama. |
| RB-15.23 | Rollback transaksi dan pembalikan hasil impor yang sudah disahkan merupakan prosedur berbeda. | Rollback membatalkan transaksi yang gagal sebelum sah; hasil yang sudah commit diperbaiki melalui keputusan korektif baru dengan dampak/jejak, bukan menghapus batch dari master. |
| RB-15.24 | Pembalikan tidak boleh menimpa perubahan sah yang terjadi kemudian. | Koreksi pascaimpor memeriksa keadaan/versi terbaru dan referensi hilir; perubahan petugas setelah impor tidak ditimpa snapshot lama otomatis. |
| RB-15.25 | Semua tahap penting impor dan pembalikan diaudit sesuai KB-12. | Audit batch/sumber/pemetaan/validasi/pencocokan/keputusan/promosi/pembalikan mengikat event KB-12. Gagal audit kritis membatalkan perubahan, salinan mengikuti retry terpisah. |
| RB-15.26 | Hak akses staging, sumber, dokumen dan ekspor mengikuti KB-11. | Hak staging/berkas/diagnostik/bukti/unduh/ekspor/permohonan tetap KB-11, termasuk cakupan/tujuan/penugasan. Memiliki batch bukan hak semua field atau isi sensitif. |
| RB-15.27 | Integrasi langsung OSS/Dukcapil tidak diaktifkan otomatis dalam MVP. | API/sinkronisasi real-time OSS/Dukcapil maupun OPD eksternal bukan implementasi MVP. Tidak ada endpoint, akses, panggilan percobaan atau kredensial dibuat. |
| RB-15.28 | Integrasi eksternal memerlukan dasar hukum, mandat, perjanjian jika diwajibkan, serta spesifikasi jalur resmi. | Integrasi masa depan memerlukan dasar hukum, mandat, persetujuan/perjanjian jika diwajibkan, spesifikasi/kanal resmi, pembatasan serta pengamanan/audit; tidak menganggap hak akses sudah ada. |
| RB-15.29 | Impor data nyata menunggu persetujuan, SOP dan penilaian keamanan. | Impor nyata menunggu penetapan sumber/dataset/tujuan/dasar, SOP, akses, retensi, penilaian risiko/keamanan dan izin eksplisit. Pengembangan/pengujian hanya data fiktif. |
| RB-15.30 | KB-15 mengesahkan dokumentasi saja, bukan implementasi. | Model B mengesahkan dokumen, bukan kode/database/migrasi/seeder/paket/hosting/deployment, akses OPD/OSS/Dukcapil, atau pengolahan data pribadi nyata. |

### C. Alur staging — enam belas tahap

1. Registrasikan sumber/dataset, pihak berwenang, tujuan, dasar pemrosesan dan lingkup sebelum data digunakan; belum ada sumber nyata yang diterima sekarang.
2. Petugas berwenang menerima berkas menurut SOP/penugasan yang kelak disahkan, tanpa akun pelaku atau akses langsung sistem OPD.
3. Catat metadata asal/waktu/pengirim/versi, ID batch unik dan referensi integritas berkas. Fingerprint adalah jejak kecocokan berkas, bukan bukti kebenaran isi, izin atau identitas usaha.
4. Simpan sumber privat, dengan akses/retensi sah. Nilai asli/snapshot sumber tidak ditimpa ketika versi normalisasi diperbaiki.
5. Periksa struktur, format, ukuran dan keamanan berkas. Jangan menjalankan rumus/makro/konten aktif sebagai instruksi; format/metode/batas keamanan belum dipilih.
6. Petakan kolom ke objek/kode field SIJAI memakai aturan/versi sah; kolom asing atau arti tidak jelas ditahan.
7. Normalisasi hanya jika tidak mengubah makna, dengan referensi sumber/versi dan jejak transformasi. Ambigu pada tanggal/desimal/kode/satuan tidak ditebak; nomor identitas tetap teks terlindungi.
8. Validasi wajib menurut konteks, tipe/format, satuan/periode/cakupan dan referensi termasuk wilayah/KBLI berversi. Data kosong tidak diisi nol untuk melewati aturan.
9. Periksa identitas, duplikasi, cabang dan relasi menurut KB-01/KB-03/KB-13. Kandidat/skor bukan merge otomatis dan konflik terbuka menahan.
10. Kelompokkan hasil per record/field: layak diajukan, perlu perbaikan, konflik, kandidat duplikat atau ditahan/ditolak sesuai alasan. Ini bukan status resmi profil.
11. Tampilkan pratinjau dampak terhadap objek/nilai/versi/relasi/status/rekap; tanpa menulis master atau statistik resmi.
12. Ajukan rencana perubahan kepada OPD pemilik aktif tiap kode field; gunakan usulan/kasus/keputusan yang sama bila sesuai.
13. Satu petugas berwenang mengesahkan perubahan biasa menurut KB-07, dengan hak/versi/bukti/konflik diperiksa ulang. Untuk profil baru, KB-05 tetap pembuat dan verifikator awal berbeda.
14. Tetapkan hasil per field/kelompok serta record dan ringkasan batch berdasarkan hasil nyata. Pengesahan sebagian tidak menaikkan semua profil/batch menjadi terverifikasi.
15. Catat sumber/batch/record, pemetaan/versi, keputusan dan perubahan pada audit KB-12; event kritis konsisten dalam transaksi.
16. Jika salah ditemukan, tinjau dampak dan lakukan pemulihan korektif berkeputusan baru, bukan pembatalan buta perubahan yang sudah sah.

Tahap adalah rancangan alur, bukan perintah menjalankan pekerjaan sekarang. Batch berisi banyak pemilik field tidak menjadi satu hak pengesahan lintas OPD. Record/relasi yang bergantung objek belum sah ditahan sampai referensi serta gerbang pengesahan terkait lengkap.

### D. Model konseptual dan asal-usul

Sebelas fungsi yang diminta: `SUMBER_DATA_IMPOR`, `BATCH_IMPOR`, `BERKAS_SUMBER`, `PEMETAAN_FIELD_IMPOR`, `RECORD_STAGING`, `HASIL_VALIDASI`, `KANDIDAT_PENCOCOKAN`, `RENCANA_PROMOSI`, `KEPUTUSAN_IMPOR`, `RIWAYAT_PEMBALIKAN_IMPOR`, `AUDIT_EVENT`. [Kamus](kamus-data-mvp-kb09.md) dan [model relasi](03-entitas-dan-relasi.md) memperinci atribut/hubungan. Ini kebutuhan konseptual, **bukan sebelas tabel baru**.

Gunakan sumber/bukti privat, usulan/kasus, keputusan/change_set/field_changes serta audit yang sudah ada jika fungsinya sama. KANDIDAT_PENCOCOKAN menautkan kandidat/pemeriksaan KB-13, dan AUDIT_EVENT dipenuhi audit_events KB-12; tidak membuat log/registri tandingan.

Provenance atau asal-usul menautkan sumber/dataset/versi, berkas/fingerprint, batch/ID baris sumber, pemetaan/transformasi/versi, hasil pemeriksaan, kandidat, rencana, keputusan dan nilai/versi yang diterapkan. Nilai mentah sensitif tidak diduplikasi ke diagnostik/rencana/audit; rujuk sumber privat bila perlu dan sah. ID baris sumber berbeda dari ID internal Orang/Unit/Event.

### E. Contoh pemetaan field — usulan

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

Contoh ini bukan template berkas atau dataset resmi yang disahkan. Dua nama kolom mirip tidak otomatis sama arti; nama orang/badan/unit, alamat rumah/usaha, kapasitas/realisasi, modal/penjualan dan periode harus dibedakan. Banyak produk/pihak/lokasi/periode memerlukan record terkait, bukan satu isian daftar atau satu pemilik tunggal.

Transformasi menyimpan asal dan arti. Jangan memotong nomor, menghilangkan nol awal, mengubah nama/kode demi kecocokan, menebak satuan/kurs/periode atau mengonversi kode KBLI ambigu otomatis. Aturan normalisasi/konversi dan masa berlaku belum final; perubahan pemetaan menghasilkan versi baru dengan pemeriksaan ulang, bukan menulis ulang hasil historis.

### F. Kualitas data, penolakan dan karantina

Periksa sekurang-kurangnya kelengkapan, validitas format, konsistensi tipe, satuan, periode/tanggal pengukuran, kode wilayah, KBLI/versi, keterkaitan Orang/Badan/Unit, duplikasi, konflik lintas OPD, bukti/verifikasi dan provenance.

| Keadaan nilai | Perilaku rancangan |
| --- | --- |
| Tidak ada data | Tetap kosong sesuai sumber; nilai wajib kontekstual yang hilang menahan bagian terkait |
| Nol | Nilai angka yang memang dinyatakan sumber, bukan pengganti kosong |
| Belum diketahui | Ketidakpastian dicatat, tidak diasumsikan nol/tidak berlaku |
| Tidak berlaku | Ada alasan konteks sah, bukan jalan melewati validasi wajib |
| Terisi belum diverifikasi | Nilai tersedia sebagai usulan, bukan nilai resmi/identitas terverifikasi |

NIK kosong berarti belum lengkap/belum tersedia sesuai kondisi; bukan alasan menolak seluruh registrasi awal atau membuat NIK fiktif. Validasi yang membutuhkan bukti identitas tetap belum lulus. NIB tidak wajib awal; status legalitas berbeda dari pendataan/pengesahan profil.

Struktur tidak aman/metadata sumber atau dasar tidak sah menahan penerimaan/pemrosesan terkait. Kolom asing, format/tipe ambigu, referensi/satuan/periode hilang atau bukti kurang masuk daftar perbaikan/karantina, tanpa perubahan resmi. Konflik dan kandidat duplikat masuk pemeriksaan yang sesuai. Kategori/enum/transisi rinci penolakan/karantina belum final.

Penolakan tidak menghapus bukti untuk menyembunyikan masalah, tetapi tidak membenarkan penyimpanan data yang tanpa dasar atau selamanya. Berkas yang tidak boleh diproses ditangani privat oleh pihak sah menurut kebijakan retensi/insiden; jangan menyalin isi ke error umum. Perbaikan membuat revisi record/pemetaan yang menautkan asal.

### G. Identitas, cabang dan data sektoral

NIK dipakai secara terlindungi hanya bila diperlukan/dasar sah; hasil kandidat/error/audit tidak mengungkap nilai lengkap. Gunakan ID internal dan alias yang sah; NIB bukan ID unik unit/cabang. Kesamaan nama/alamat/pemilik/nomor atau skor tidak cukup untuk merge. Kandidat/pemeriksaan serta konsolidasi teknis aman tetap seluruh syarat KB-13; **auto-merge historis berisiko tidak diaktifkan** karena impor.

Identitas/kepemilikan konflik ditahan mengikuti KB-08. Cabang sesuai KB-01 tidak menjadi unit baru otomatis; pengolahan/perdagangan dinilai menurut kesatuan operasional. Orang/badan/pihak/unit tetap entitas berbeda, hubungan M:N/peran/periode dan ID asal/kanonik terlacak.

Produk/profil pangan mengait kegiatan/unit yang tepat, bukan membuat kegiatan/profil fiktif agar baris lolos. Bahan/peralatan/pengukuran berulang tetap record terkait. Produksi wajib produk, nilai numerik, satuan, periode, sumber dan status; tanggal input tidak mengganti periode dan satuan berbeda tidak dijumlah tanpa konversi sah.

Ekonomi/klasifikasi KB-10 menjaga tujuan/indikator, periode/cakupan, mata uang, input/aturan/KBLI berversi, sumber dan verifikasi. Skala sumber bukan kategori disahkan otomatis; perhitungan ulang tetap usulan dengan keputusan petugas. Riwayat program/bantuan hanya ketergantungan referensial masa depan, tanpa modul baru atau penghapusan peristiwa saat penautan.

### H. Pengesahan lintas OPD dan statistik

| Kelompok usulan | Fungsi yang dibahas, belum resmi |
| --- | --- |
| Identitas/Profil Umum | OPD pemilik masing-masing field menurut katalog sah |
| Pencatatan NIB | Fungsi pemilik pencatatan legalitas, bukan penerbitan/mengubah dokumen OSS |
| Produk/bahan/produksi pangan | Fungsi pemilik data industri terkait |
| Skala usaha | Pemilik input/aturan/hasil sesuai KB-10, dengan usulan dan pengesahan terpisah |

Pengirim, penerima atau pemeriksa batch tidak otomatis pemilik seluruh field di berkas. Satu pemilik aktif per kode field dan satu petugas aktif sah mengesahkan perubahan biasa; verifikator profil baru berbeda dari pembuat. Nama OPD, petugas dan mandat rinci belum ditetapkan.

Satu baris dapat menjadi beberapa objek/kelompok field dengan keputusan berbeda. Rencana promosi menautkan unit/field/versi/keputusan; dependensi referensi harus sah sebelum promosi. Satu batch dapat memuat record ditahan/ditolak/diajukan/diterapkan sesuai hasil. Label status proses tersebut contoh rancangan; enum lengkap belum final.

Status batch/record, verifikasi tiap field/pengukuran, profil induk dan profil sektoral **tidak disamakan**. Ringkasan batch bersumber dari hasil tersimpan, tidak mengubah seluruh profil karena sebagian field disahkan. Staging belum masuk statistik resmi; hasil promosi yang sah dibaca sesuai status serta unit unik KB-09, tanpa menghitung baris berkas sebagai jumlah usaha.

### I. Idempotensi, versi dan transaksi

Idempotensi berarti penerapan sekali meskipun permintaan diulang. Simpan ID operasi/batch/record sumber dan versi pemetaan/sumber/persetujuan serta keterkaitannya ke perubahan resmi. Rancangan kunci deduplikasi final belum dipilih; fingerprint berkas saja tidak cukup. File yang sama dengan nama berbeda atau record yang muncul kembali harus diperiksa; perubahan versi sumber/pemetaan bukan alasan otomatis mengulang efek yang sudah disahkan.

Sebelum pengesahan, periksa hak/penugasan/pemilik field dan versi staging/rencana/pemetaan/target serta referensi. Versi usang menahan/memerlukan pemeriksaan ulang. Nilai/relasi/versi/keputusan/status yang terkait dan event audit kritis **commit atau batal bersama**. Tidak ada promosi sebagian di dalam satu unit perubahan yang saling bergantung atau referensi yatim.

Batch bukan otomatis satu transaksi seluruh file/lintas OPD. Hasil per record/kelompok field dapat berbeda, tetapi batas transaksi harus menjaga referensi dan makna. Bagian menunggu tidak dilabel sukses; transaksi gagal tidak menyimpan audit keberhasilan palsu. Pembagian unit promosi/ketergantungan rinci perlu ditetapkan sebelum implementasi.

Gagal kirim salinan audit setelah commit mengikuti KB-12 (tertunda, retry, rekonsiliasi dan eskalasi), tidak membatalkan bisnis sah diam-diam. Semua jalur termasuk pekerjaan tertunda dan unduh hasil tetap pemeriksaan akses terbaru KB-11.

### J. Rollback teknis dan pembalikan korektif

**Rollback teknis:** jika transaksi pengesahan gagal sebelum sah, seluruh perubahan terkait/versi/status/keputusan/event sukses dalam transaksi batal bersama. Batch dibatalkan sebelum ada pengesahan tidak mengubah master. Jika sebagian sudah sah, membatalkan sisa batch tidak otomatis membalik bagian tersebut.

**Pembalikan korektif:** setelah hasil commit ternyata salah, buat keputusan korektif baru yang menautkan batch/record/field/change_set/versi asal, alasan/bukti, dampak, pengesah dan event baru. Ikuti KB-07/KB-08 dan KB-13 jika identitas/relasi perlu ditinjau. Tidak menghapus batch dari master atau menjalankan restore database untuk menimpa semua hasil.

Periksa hubungan kepemilikan yang kemudian sah berubah, nilai terbaru oleh petugas, produk/kegiatan baru, hasil klasifikasi/input ekonomi, kontrak peristiwa program dan semua referensi ke ID induk. Perubahan terbaru tidak ditimpa nilai sebelum impor secara buta; konflik/versi baru memerlukan keputusan sah. Jangan menghapus massal unit/relasi/peristiwa hanya karena berasal dari satu file.

Rencana dampak/pemulihan sebelum promosi menyatakan referensi/versi dan ruang lingkup yang dapat dikoreksi, dengan prosedur uji sintetis mendatang. Audit sejarah/ID asal tetap, sedangkan koreksi memakai versi/event baru. Mekanisme rinci pembalikan dan aturan sumber/hasil yang harus dipertahankan belum final.

### K. Privasi, berkas dan audit

Berkas sumber/staging/bukti privat, minim data dan berstatus terpisah; hak petugas mengikuti objek/field/OPD/wilayah/tujuan/penugasan. Unduh/ekspor sumber, staging, pratinjau dan diagnostik memerlukan izin tersendiri. Menguasai sumber/batch bukan hak membaca semua data sensitif. Data pribadi tidak tampil pada error umum atau log, termasuk pada ekspor laporan yang dipakai memperbaiki kesalahan.

Normalisasi/validasi tidak mengeksekusi rumus/makro sebagai instruksi dan keluaran tidak boleh menjadi pembocoran/konten aktif berbahaya. Format/parser/metode keamanan/ukuran belum dipilih; ini persyaratan rancangan, bukan kode atau pemilihan paket.

Setiap tahap penting/perubahan status/pengajuan/keputusan/promosi/pembalikan diaudit dengan sumber/batch/pelaku, aturan/versi, alasan/hasil dan referensi perubahan tanpa NIK mentah. AUDIT_EVENT menggunakan audit KB-12 dan salinan berkontrol terpisah, bukan log impor kedua yang lebih longgar.

Retensi berkas, staging, hasil validasi, kandidat, rencana/keputusan dan audit/salinan mengikuti KB-11/JRA sah; tidak menetapkan durasi atau menyimpan seluruh sumber selamanya. Sebelum data nyata perlu dasar/dataset/mandat/SOP/akses/retensi serta penilaian keamanan/risiko/DPIA bila diperlukan dan izin eksplisit. Sekarang tidak menerima/mengolah data nyata atau menguji aplikasi.

### L. Integrasi langsung OSS/Dukcapil — fase berikutnya

Tidak ada integrasi aktif MVP, sinkronisasi real-time, endpoint baru/percobaan, akses sistem OPD atau kredensial yang dibuat/diminta. Pembacaan peraturan publik pada portal hukum resmi **berbeda dari akses layanan operasional**.

Integrasi mendatang memerlukan: dasar/tujuan pemrosesan sah; penetapan kewenangan; persetujuan/perjanjian jika diwajibkan untuk skema terkait; spesifikasi pertukaran/kanal resmi; klasifikasi/minimisasi/cakupan; keamanan akses/kredensial; audit pertukaran; rekonsiliasi dengan sumber resmi; dan penanganan gagal/perubahan data eksternal. Respons eksternal kelak pun tidak otomatis mengubah field resmi tanpa aturan pengesahan.

| Rujukan resmi dibaca 5 November 2026 | Relevansi / batas |
| --- | --- |
| [Perpres 39/2019 Satu Data Indonesia](https://peraturan.bpk.go.id/Details/108813/perpres-no-39-tahun-2019) | Standar, metadata, interoperabilitas dan kode referensi/data induk mendukung pemetaan/provenance; bukan pemberian akses semua dataset |
| [UU 27/2022 PDP](https://jdih.komdigi.go.id/produk_hukum/view/id/832/t/crc32/) | Tujuan/dasar sah, pembatasan, keamanan dan rekaman pemrosesan; OPD sumber bukan otomatis Pengendali hukum atau pemilik semua field |
| [Permendagri 102/2019](https://peraturan.bpk.go.id/Details/138595/permendagri-no-102-tahun-2019) dibaca bersama [perubahan 17/2023](https://peraturan.bpk.go.id/Details/280636/permendagri-no-17-tahun-2023) | Hak akses/pemanfaatan data kependudukan dan batas tujuan/keamanan harus melalui prosedur sah; bukan izin SIJAI mengakses Dukcapil |

Catatan penerapan: ketentuan akses antarinstansi pada **Portal Satu Data Indonesia** tidak ditafsirkan sebagai akses bebas ke layanan kependudukan. Jangan menyatakan semua skema selalu memerlukan perjanjian yang sama atau otomatis bebas perjanjian; skema/dataset/subjek hukum ditelaah pihak berwenang.

[Permendagri 17/2023](https://peraturan.bpk.go.id/Download/339460/Permendagri%20Nomor%2017%20Tahun%202023.pdf) memuat perubahan terkait tujuan akses, proses pemberian hak, keamanan termasuk Pasal 18A, serta data balikan. Kebutuhan standar/sertifikasi, perjanjian, kewajiban balikan dan lingkupnya harus ditelaah untuk rancangan integrasi kelak; **tidak ada klaim izin, perjanjian, sertifikasi, penunjukan atau pemenuhan yang sudah diperoleh**. Prosedur 2019 tidak dipakai seolah belum diubah. Tidak memilih endpoint atau menebak hak akses eksternal.

Untuk pemanfaatan Data Kependudukan yang termasuk lingkup Pasal 18A, penerapan standar keamanan beserta pembuktiannya melalui sertifikat adalah persyaratan hukum, bukan pilihan yang otomatis ditiadakan oleh model impor. Penilaian pemenuhan/skema konkretnya menunggu pihak berwenang; tidak menetapkan jenis sertifikasi teknis tertentu atau mengklaim SIJAI sudah memilikinya.

### M. T15-01–T15-30 — kriteria penerimaan mendatang

Semua skenario berikut **rencana dengan data fiktif, belum dijalankan**, bukan bukti pengujian aplikasi/berkas OPD/API. Tidak membuat file data contoh atau aplikasi pada tugas ini.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T15-01 | File OPD masuk staging, bukan data resmi. | File yang kelak diterima sah masuk area privat/staging; registri dan statistik resmi belum berubah. Tugas ini tidak menerima/membaca file OPD nyata. |
| T15-02 | Petugas impor tanpa kewenangan ditolak. | Server menolak penerimaan/pengelolaan/promosi di luar penugasan/lingkup; ID batch yang ditebak tidak membuka data. |
| T15-03 | Data tanpa metadata asal ditahan. | Tanpa sumber/tujuan/dasar/waktu/versi yang diwajibkan, record/batch ditahan untuk kelengkapan, bukan diterima sebagai resmi. |
| T15-04 | Kesalahan pemetaan field ditahan. | Pemetaan salah/ambigu/inaktif ditahan sebelum promosi; tidak memaksakan kolom mirip atau memperbaiki master otomatis. |
| T15-05 | Kolom tidak dikenal tidak otomatis dipromosikan. | Kolom diberi temuan/perlu pemetaan/karantina, tanpa field atau hak resmi baru; sumber tidak dihapus untuk menyembunyikan kolom. |
| T15-06 | NIK kosong ditangani sebagai data belum lengkap. | NIK kosong ditandai belum lengkap/belum diketahui sesuai keadaan; registrasi bertahap KB-03 tidak ditolak universal atau diberi NIK fiktif. Verifikasi identitas terkait tetap menunggu bukti. |
| T15-07 | NIK sama menghasilkan pemeriksaan kandidat. | NIK sama yang terlindungi memicu kandidat dan pemeriksaan sumber/verifikasi/dampak KB-13; tidak otomatis merge, membuka nilai lengkap atau menghubungi Dukcapil. |
| T15-08 | Laporan kesalahan tidak membuka NIK. | Laporan/diagnostik memakai kode kesalahan dan referensi baris internal, tanpa NIK utuh, dokumen atau salinan baris sensitif. |
| T15-09 | NIB sama tidak otomatis membuat unit baru. | NIB sama diperiksa subjek/cakupannya; bukan ID unik unit dan tidak memicu unit baru, penggabungan atau legalitas otomatis. |
| T15-10 | Usaha sama dari dua OPD tidak terduplikasi. | Usaha terbukti sama mengacu satu identitas induk; asal/versi kedua sumber tetap terlacak. Jika ambigu, tahan untuk pemeriksaan. |
| T15-11 | Konflik nama usaha diarahkan kepada pemilik field. | Perbedaan nama unit sumber dan resmi menjadi usulan/kasus KB-08 untuk OPD pemilik field, bukan file terbaru menang. |
| T15-12 | Dua usaha berbeda satu pemilik tetap terpisah. | Dua kesatuan operasional berbeda milik pihak sama tetap terpisah; hubungan banyak-ke-banyak tidak diubah oleh impor. |
| T15-13 | Cabang diperiksa sesuai KB-01. | Cabang dengan pemilik sama dan keterkaitan induk teridentifikasi tetap lokasi unit induk; bukti belum jelas ditahan. |
| T15-14 | Produk tanpa referensi kegiatan ditahan. | Produk tanpa pengait kegiatan/unit sah ditahan, tanpa produk yatim atau membuat kegiatan/profil fiktif. |
| T15-15 | Produksi tanpa satuan ditahan. | Catatan produksi tanpa satuan tidak layak dipromosikan; sumber/temuan tetap terlacak dan satuan tidak ditebak. |
| T15-16 | Produksi tanpa periode ditahan. | Catatan produksi tanpa periode tidak layak dipromosikan; tanggal input tidak otomatis menggantikan periode. |
| T15-17 | Modal/omzet berbeda periode tidak tertimpa. | Nilai ekonomi/periode/cakupan/versi lama tetap, termasuk modal/penjualan terpisah; record baru tidak menimpa sejarah atau membuat usulan menjadi disahkan. |
| T15-18 | OPD nonpemilik tidak bisa mengesahkan field. | OPD pengunggah/nonpemilik ditolak saat mengesahkan field lain, meskipun mempunyai hak menerima atau membaca batch. |
| T15-19 | Pengesahan sah memperbarui nilai dan audit. | Satu petugas berwenang mengesahkan nilai/versi/keputusan/status terkait dan audit kritis bersama; prasyarat profil awal berbeda tetap berlaku. |
| T15-20 | Impor ulang batch tidak menggandakan hasil. | Pengulangan operasi/batch/record yang telah diterapkan tidak menggandakan unit, hubungan, produk/pengukuran atau keputusan penerapan; hasil awal dapat ditelusuri. |
| T15-21 | Pembaruan bersamaan menggunakan kontrol versi. | Versi staging/pemetaan/objek/referensi yang berubah menahan usulan usang; tidak menimpa perubahan petugas lain. |
| T15-22 | Gagal transaksi tidak menghasilkan perubahan parsial. | Gagal satu bagian transaksi nilai/relasi/versi/status/keputusan/audit membatalkan seluruh unit promosi terkait, tanpa audit sukses palsu atau referensi parsial. |
| T15-23 | Batch campuran valid/tidak valid memiliki hasil per record. | Hasil per record dan per field/kelompok disimpan: layak/tahan/konflik/ditolak/diterapkan sesuai keputusan; tidak menyatakan seluruh batch/profil terverifikasi dari sebagian berhasil. |
| T15-24 | Batch dibatalkan sebelum pengesahan tidak mengubah data resmi. | Pembatalan sebelum pengesahan tidak mengubah master; berkas/status/jejak sesuai retensi tetap terlacak. Jika sudah ada promosi sah sebagian, tidak dianggap ikut batal otomatis. |
| T15-25 | Pembalikan impor sah memakai koreksi berjejak. | Keputusan korektif menautkan batch/record/field/perubahan asal, alasan/bukti, dampak, petugas dan event baru; jejak impor lama tidak dihapus. |
| T15-26 | Pembalikan tidak menimpa perubahan sah terbaru. | Pembalikan memeriksa versi/relasi terbaru; perubahan sah sesudah impor dipertahankan atau masuk keputusan konflik/koreksi baru, bukan overwrite buta. |
| T15-27 | Akses staging tanpa hak ditolak. | Server menolak baca/unduh/ekspor batch/sumber/diagnostik di luar hak, termasuk URL/ID langsung dan penugasan yang dicabut. |
| T15-28 | Data pribadi tanpa dasar pemrosesan sah tidak diimpor. | Sebelum penggunaan, sumber/tujuan/dasar dan izin diperiksa; tanpa dasar sah tidak diproses/impor ke staging atau registri. Dokumen ini memakai data fiktif saja. |
| T15-29 | Integrasi OSS/Dukcapil tanpa otorisasi tidak dijalankan. | Integrasi tetap rencana terpisah; tanpa otorisasi tidak ada endpoint/panggilan/token atau akses ke sistem OPD, OSS maupun Dukcapil. |
| T15-30 | Auditor dapat menelusuri asal, pemetaan dan keputusan batch. | Auditor berizin menelusuri asal/versi sumber, baris, pemetaan/transformasi, validasi, kandidat, keputusan dan perubahan/audit, tetap dengan pembatasan sensitivitas. |

### N. Hal yang masih terbuka dan gerbang

- OPD resmi pengelola impor/pemilik field, petugas/pengesah serta otoritas pemetaan/normalisasi.
- SOP penerimaan/keamanan berkas, template/format final, dataset yang boleh dibagipakaikan, tujuan/dasar hukum dan perjanjian yang diperlukan.
- Bukti minimum NIK/NIB/sumber, aturan normalisasi/konversi/versi serta pemetaan sah.
- Ukuran file/besaran batch, identitas record/replay, batas transaksi, frekuensi pembaruan dan penanganan batch campuran.
- Retensi staging/sumber/diagnostik dan JRA, penolakan/karantina/penghapusan sah.
- Prosedur pembalikan setelah pengesahan dan uji dampak/pemulihannya.
- Hak akses resmi OSS/Dukcapil/OPD, spesifikasi kanal/keamanan/perjanjian/sertifikasi atau data balikan jika relevan; belum diberikan.
- Kelayakan PDN/cPanel **KB-14 tetap BELUM DAPAT DINILAI**, seluruh kondisi aktual belum diketahui; kapasitas KB-18 dan operasi KB-17 belum final.
- Izin implementasi/instalasi, impor/penggunaan data nyata, akses server/sistem eksternal dan produksi/deployment belum diberikan.
- KB-16–KB-18 tetap terbuka; rincian terdahulu yang belum final tidak ditutup oleh KB-15.

### O. Konsistensi dan catatan perubahan

KB-01–KB-14 dipertahankan: unit/cabang, ID terpisah, satu SSOT dan pemilik field, petugas/verifikator awal berbeda, tanpa akun masyarakat, satu pengesah field biasa, konflik oleh pemilik, MVP pangan, ekonomi/KBLI berversi, privasi, audit dua lapisan, rekonsiliasi terkendali dan hosting belum dapat dinilai.

Potensi salah tafsir “impor menjadi fitur aktif MVP” atau “OPD pengunggah berwenang seluruh field” dicegah dengan batas di atas; rincian/promosi tetap belum final. Bagian keputusan lama yang menyebut KB-15 terbuka adalah riwayat, sedangkan model B kini dipilih; prosedur/dataset/hak/izin belum otomatis disahkan. Lihat [addendum audit konsistensi](08-audit-konsistensi-dokumentasi.md).

5 November 2026 — pemilik produk menetapkan KB-15 Model B. Dokumen memuat **30 RB-15, 30 rencana T15, enam belas tahap staging, sebelas fungsi konseptual dan sepuluh contoh pemetaan**. KB-01–KB-14 dan KB-16–KB-18 dipertahankan. Hanya dokumentasi, tanpa kode/database/migrasi/seeder/paket/hosting/deployment, akses sistem OPD/OSS/Dukcapil atau data pribadi nyata.

## KB-16 — Registri program dan riwayat layanan pembinaan UMKM

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P2, sesuai register  
**Status:** **MODEL B DISEPAKATI — Registri Program dan Riwayat Layanan Pembinaan UMKM, sebagai fase lanjutan setelah MVP KB-09.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-16”.  
**Batas:** dokumentasi saja, tanpa kode/tabel/data UMKM nyata/akses sistem OPD/deployment.

### A. Lingkup fase lanjutan

Modul kelak mencatat program lintas OPD, kegiatan/jenis layanan, pelaksanaan/sesi, peserta/penerima, pendaftaran/kehadiran, realisasi/bukti, riwayat, indikator output/hasil langsung/outcome teramati, tindak lanjut, rekap, koreksi dan audit yang terhubung Registri Induk. **Tidak masuk MVP pertama**.

Tidak termasuk pembayaran, penyaluran dana elektronik, pengadaan barang/jasa, pembukuan/akuntansi, seleksi atau kelayakan penerima otomatis, maupun pengganti sistem resmi perencanaan/penganggaran/pelaporan. Nominal bantuan historis jika sah hanya fakta catatan layanan, bukan kewenangan bayar, transfer, distribusi bantuan aktif atau ledger.

MVP 0.1 KB-09 tetap Registri Induk, Profil Umum, Industri Pengolahan Pangan, registrasi/kewenangan/verifikasi/koreksi/audit, pencarian dan laporan dasar. Rancangan dependensi program disiapkan agar fase lanjutan memakai ID induk yang sama; tidak menambahkan fitur program/impornya ke MVP.

### B. RB-16.01–RB-16.30

| Kode | Ketentuan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-16.01 | Model B: Registri Program dan Riwayat Layanan. | Model B merancang registri program dan riwayat layanan lintas OPD yang terhubung Registri Induk, bukan master penerima per OPD atau aplikasi terpisah. |
| RB-16.02 | Modul program berada di fase lanjutan, bukan MVP pertama KB-09. | Seluruh rancangan KB-16 berada pada fase setelah MVP Registri Induk/Profil Umum/Industri Pengolahan Pangan; tidak menambah fitur program ke MVP pertama. |
| RB-16.03 | Registri Induk menjadi sumber identitas Orang dan Unit Usaha. | Identitas peserta/penerima merujuk ID internal Orang/Pihak/Unit yang sudah sah; tidak menyalin master atau memakai NIK sebagai ID peserta. |
| RB-16.04 | Program, kegiatan, pelaksanaan dan partisipasi mempunyai identitas independen. | PROGRAM, KEGIATAN_PROGRAM, sesi, partisipasi, realisasi dan tindak lanjut mempunyai ID internal sendiri; nama/tahun/kode sumber bukan satu-satunya identitas. |
| RB-16.05 | Setiap program mempunyai satu OPD penanggung jawab record yang ditetapkan. | Setiap record program mempunyai tepat satu OPD penanggung jawab aktif menurut penetapan sah; penanggung jawab record bukan otomatis pemilik seluruh field atau Pengendali hukum. |
| RB-16.06 | Peran OPD penyelenggara, pelaksana dan pendukung dicatat. | Program/kegiatan dapat melibatkan beberapa OPD dengan peran/masa berlaku yang ditelusuri; menambah OPD tidak menggandakan program atau memberi semua hak pengesahan. |
| RB-16.07 | Hak akses dan pengesahan field mengikuti KB-04. | Satu pemilik aktif per kode field dan hak per objek/tindakan/lingkup tetap KB-04; OPD nonpemilik hanya mengusulkan jika berizin. |
| RB-16.08 | Peserta Orang dan penerima Unit Usaha dibedakan. | Peserta Orang berbeda dari unit penerima manfaat. Jika sasaran program Orang/Badan/Unit berbeda, rujukan subjek dibedakan tanpa membuat unit/badan fiktif. |
| RB-16.09 | Hubungan Orang sebagai wakil usaha diperiksa sesuai kebutuhan. | Perwakilan pemilik/pengelola/wakil diperiksa berdasarkan hubungan/mandat yang relevan pada waktu layanan; bukan menjadikan semua wakil pemilik tunggal atau pengguna login. |
| RB-16.10 | Satu usaha dapat mempunyai banyak riwayat layanan. | Satu unit dapat memiliki banyak layanan/sesi/program/OPD dengan peristiwa berbeda dan identitas yang sama, tanpa menggandakan profil induk. |
| RB-16.11 | Duplikasi partisipasi teknis dicegah. | Cegah pengulangan teknis pada orang, sesi, peran dan konteks penerima/layanan yang benar-benar sama; kunci rinci belum final dan nama/NIK mentah bukan kuncinya. |
| RB-16.12 | Partisipasi berulang yang sah tidak otomatis ditolak. | Orang/unit mengikuti sesi atau program lain tetap sah jika tidak dilarang aturan program; deduplikasi teknis tidak menghapus partisipasi nyata berbeda. |
| RB-16.13 | Aturan pembatasan penerima ditetapkan per program. | Pembatasan penerima berulang hanya menurut ketentuan program yang disahkan, dengan dasar/periode/cakupan/versi; bukan larangan global atau seleksi otomatis. |
| RB-16.14 | Pendaftaran, kehadiran dan realisasi merupakan catatan berbeda. | Pendaftaran, kehadiran dan realisasi disimpan/dilacak terpisah; daftar hadir atau program selesai tidak menjadi bukti semua layanan diterima. |
| RB-16.15 | Status program, partisipasi, realisasi, verifikasi dan tindak lanjut dipisahkan. | Status program, partisipasi, realisasi, verifikasi dan tindak lanjut berbeda. Nilai status yang sama namanya tidak menyamakan objek/prosesnya. |
| RB-16.16 | Realisasi mempunyai sumber, waktu, pelaksana dan bukti yang relevan. | Realisasi menautkan penerima/partisipasi, sumber, waktu/periode, pelaksana dan bukti relevan; kebutuhan bukti per layanan ditetapkan, tidak mengarang bukti. |
| RB-16.17 | Output, hasil langsung dan outcome teramati dibedakan. | Output, hasil langsung dan outcome teramati adalah tingkat pengukuran berbeda, bukan sinonim manfaat atau bukti dampak kausal. |
| RB-16.18 | Indikator memiliki definisi, satuan, periode, sumber dan status verifikasi. | Definisi indikator/versi, satuan, objek, periode, sumber/bukti, status verifikasi dan penanggung jawab pencatatan harus terlacak; target/frekuensi wajib belum dipilih. |
| RB-16.19 | Perubahan sebelum/sesudah tidak otomatis dinyatakan sebagai dampak kausal program. | Nilai sebelum/sesudah, kenaikan/penurunan atau sertifikasi tercatat dilaporkan menurut bukti, tanpa klaim bahwa program menyebabkan perubahan. |
| RB-16.20 | Data produksi dan ekonomi menggunakan referensi KB-09 serta KB-10, bukan salinan yang tidak sinkron. | Observasi produksi/ekonomi merujuk pengukuran/versi/sumber KB-09/KB-10 yang sama, bukan master angka program tandingan; periode dan satuan tetap. |
| RB-16.21 | Pengesahan oleh petugas OPD berwenang mengikuti KB-07. | Satu petugas dengan hak pemilik field/penugasan aktif mengesahkan perubahan biasa; registrasi induk baru tetap verifikator berbeda KB-05, tanpa persetujuan berjenjang otomatis. |
| RB-16.22 | Konflik nilai data mengikuti KB-08. | Konflik peserta/penerima/realisasi/observasi diarahkan ke OPD pemilik field dalam kasus/subkasus KB-08, bukan diputus koordinator program secara otomatis. |
| RB-16.23 | Kerahasiaan dan akses data mengikuti KB-11. | Akses peserta/bukti/NIK/ekonomi/unduh/ekspor menurut sensitivitas/tujuan/tugas KB-11; keterlibatan OPD/program tidak membuka semua data. |
| RB-16.24 | Registrasi, kehadiran, realisasi, koreksi, unduhan dan ekspor diaudit sesuai KB-12. | Catat event pendaftaran, kehadiran, status, realisasi, pengesahan, konflik/koreksi/pembatalan, unduh/ekspor dengan audit KB-12 yang sama dan tanpa data sensitif mentah. |
| RB-16.25 | Rekonsiliasi identitas mengikuti KB-13 dan tidak menghilangkan riwayat program. | Merge/split KB-13 menjaga ID peristiwa dan alokasi riwayat sah; peristiwa berbeda tidak disatukan atau yang sama digandakan akibat perubahan identitas. |
| RB-16.26 | Pembatalan dan pengarsipan tidak menghapus referensi historis yang wajib dipertahankan. | Pembatalan/arsip memakai dasar/keputusan/riwayat, bukan hapus berantai. Retensi/penahanan/JRA sah tetap berlaku, tanpa menyimpan semua data pribadi selamanya. |
| RB-16.27 | Rekap membedakan UMKM unik, Orang unik, partisipasi dan kejadian layanan. | Rekap memisahkan unit unik, Orang unik, partisipasi dan kejadian layanan dengan cakupan/periode/status/versi jelas; join banyak OPD/peserta tidak menjadi pengali. |
| RB-16.28 | Modul program tidak memberikan kewenangan transaksi pembayaran, bantuan finansial atau pengadaan. | Catatan nominal historis bila sah hanya fakta layanan, bukan pembayaran, penyaluran elektronik, pengadaan, akuntansi atau otorisasi transaksi bantuan finansial. |
| RB-16.29 | Persyaratan sasaran dan penerima program tetap mengikuti dasar administratif yang sah. | Sasaran/kelayakan administratif dan pembatasan mengikuti dasar program yang sah; kategori UMKM/daftar hadir/observasi bukan penetapan penerima otomatis. |
| RB-16.30 | Keputusan KB-16 hanya untuk dokumentasi. | KB-16 hanya dokumen fondasi fase lanjutan; tidak ada kode/database/migrasi/seeder/dependensi/hosting/deployment, data UMKM nyata atau akses sistem OPD. |

### C. Hierarki dan identitas

**PROGRAM → KEGIATAN/LAYANAN → PELAKSANAAN/SESI → PARTISIPASI/PENERIMAAN → REALISASI → TINDAK LANJUT.** Setiap tingkat punya ID internal sendiri. Satu program banyak kegiatan, satu kegiatan banyak sesi, satu sesi banyak partisipasi. Indikator/observasi mengait level/objek yang memang diukur; bukan jenjang pengesahan wajib baru.

KEGIATAN_PROGRAM adalah penyelenggaraan layanan, **bukan KEGIATAN_USAHA** yang mewakili aktivitas ekonomi/KBLI unit. Lokasi pelaksanaan layanan juga bukan otomatis lokasi/cabang usaha. Nama program, nama kegiatan atau tahun anggaran bukan satu-satunya identitas unik.

Kode/nomenklatur pemerintah jika tersedia hanya dari sumber sah dengan rujukan/versi, bukan kode rekening atau kewenangan yang dikarang. Satu program mempunyai satu OPD penanggung jawab record aktif menurut penetapan sah, tetapi boleh banyak OPD penyelenggara/pelaksana/pendukung dengan peran dan masa berlaku. Penanggung jawab record bukan otomatis pemilik semua field atau Pengendali hukum.

Sepuluh fungsi konseptual dan penggunaan kembali struktur ada pada [kamus](kamus-data-mvp-kb09.md) dan [relasi](03-entitas-dan-relasi.md). Semua nama adalah rancangan, bukan tabel/migrasi.

### D. Peserta, penerima dan perwakilan

Peserta kegiatan adalah Orang melalui pihak_id yang merujuk jenis ORANG sesuai konteks; penerima manfaat unit memakai unit_usaha_id, keduanya merujuk master yang sama. Hubungan pemilik/pengelola/wakil serta masa berlaku/bukti/mandat relevan diperiksa saat layanan. Tidak menambah NIK lengkap sebagai ID peserta dan tidak membuat akun masyarakat.

Jika sasaran program secara sah berupa Orang, Unit Usaha atau Badan Usaha, rujukan subjek/jenisnya harus jelas. Jangan membuat unit/badan fiktif untuk memenuhi relasi. Partisipasi Orang tidak disamakan dengan badan yang diwakili; penerima Badan tidak otomatis dihitung satu Unit Usaha tanpa hubungan/cakupan sah. Rincian sasaran dan referensi kondisional per program belum final.

Pendaftaran, kehadiran dan realisasi layanan berbeda. Layanan langsung ke penerima tanpa sesi kelas tidak memerlukan kehadiran/partisipasi Orang fiktif; penerima, peristiwa dan bukti realisasi harus tetap sah/terlacak. Semua jenis layanan yang pertama dipakai belum dipilih.

Contoh **fiktif** sesuai rumusan pengguna: Ahmad dan Budi mengikuti dua kegiatan berbeda sebagai wakil satu unit yang sama. Dalam cakupan contoh dengan layanan yang memenuhi definisi laporan:

- UMKM unik yang dilayani: **1**.
- Orang unik yang mengikuti kegiatan: **2**.
- Partisipasi layanan: **2**.

Ini metrik berbeda, bukan dua UMKM. Contoh tidak otomatis membuktikan seluruh realisasi Selesai atau menetapkan jumlah kejadian realisasi; buktinya tetap dinilai per layanan.

### E. Duplikasi teknis dan partisipasi berulang

Deduplikasi teknis memeriksa Orang/pihak, sesi, jenis peran, penerima serta konteks layanan yang **benar-benar sama**, dengan versi dan ID operasi untuk pengiriman ulang. Kunci/indeks final belum dipilih; nama program, nama peserta, NIK mentah atau tahun saja bukan kuncinya.

Orang sama pada kegiatan/sesi/program lain boleh mempunyai partisipasi berbeda yang sah. Satu unit dapat diwakili beberapa Orang dan menerima banyak layanan dari beberapa OPD. Peran/konteks berbeda tidak dihapus sebagai duplikat hanya karena Orang atau unit sama.

Larangan penerima berulang hanya jika resmi ditetapkan pada program terkait dengan dasar/periode/cakupan/versi. Tidak ada larangan global, pemeringkatan, seleksi atau kelayakan otomatis. Perubahan data ekonomi/skala KB-10 atau status hadir bukan keputusan administratif penerima.

### F. Model konseptual dan riwayat

| Fungsi konseptual | Informasi minimum | Hubungan / batas |
| --- | --- | --- |
| `PROGRAM_PEMBINAAN` | ID internal, nama, kode/nomenklatur sah jika ada dan referensi/versi, tahun/periode, satu OPD penanggung jawab record aktif, status/riwayat | Program 1:N kegiatan; nama/tahun/kode sumber bukan ID tunggal; penetapan OPD/kode belum final |
| `KEGIATAN_PROGRAM` | ID, program, jenis layanan, deskripsi/sasaran, sumber/rujukan dan status relevan | Program 1:N kegiatan; berbeda dari KEGIATAN_USAHA/KBLI ekonomi |
| `PELAKSANAAN_KEGIATAN` | ID sesi, kegiatan program, lokasi, tanggal/periode, OPD pelaksana, sumber/riwayat | Kegiatan 1:N sesi; sesi bisa banyak peserta dan OPD melalui peran sah |
| `PERAN_OPD_PROGRAM` | ID hubungan, program/kegiatan sesuai lingkup, OPD, jenis peran, mulai/akhir, dasar/mandat/riwayat | Gunakan penugasan/peran setara; banyak OPD tidak membuat banyak program atau pemilik field aktif ganda |
| `PARTISIPASI_LAYANAN` | ID partisipasi/sesi, pihak peserta Orang, unit penerima bila cakupan perlu, peran/konteks perwakilan, status pendaftaran dan kehadiran terpisah, bukti/versi | ID peserta dari master, bukan NIK; cegah duplikat teknis orang–sesi–peran–konteks, tanpa melarang sesi/program berbeda |
| `REALISASI_LAYANAN` | ID kejadian, partisipasi atau rujukan penerima yang sah, jenis/uraian realisasi, waktu/periode, pelaksana/sumber/bukti, status realisasi dan verifikasi/keputusan | Partisipasi dapat banyak realisasi; layanan langsung tanpa kelas tidak dipaksa kehadiran fiktif; penerima tetap bertipe Orang/Unit/Badan sesuai program |
| `INDIKATOR_PROGRAM` | ID/kode internal, definisi/versi, jenis output/hasil langsung/outcome teramati, satuan, objek/cara ukur, sumber/bukti yang diperlukan, penanggung jawab pencatatan | Program/kegiatan terkait indikator yang relevan; target/daftar indikator wajib/frekuensi belum final, bukan kode resmi yang dikarang |
| `OBSERVASI_HASIL` | ID, indikator/versi, objek bertipe/ID internal, nilai atau referensi pengukuran KB-09/KB-10/versi, periode awal/akhir bila relevan, sumber/bukti, verifikasi/pencatat | Indikator 1:N observasi; awal/akhir berbeda record/periode, sumber sama tidak disalin jadi master angka baru, belum diukur bukan capaian |
| `TINDAK_LANJUT_PROGRAM` | ID, penerima/layanan asal, jenis/kegiatan tindak lanjut, tanggal/periode, petugas/sumber, status/hasil/bukti relevan | Penerima/realisasi dapat banyak tindak lanjut; jangan menduplikasi master atau mengubah status layanan awal otomatis |
| `REFERENSI_BUKTI` | ID/referensi dokumen privat, asal/objek/keputusan terkait, pencatat/waktu, sensitivitas/hak/retensi | Gunakan bukti privat KB-08/KB-11 yang setara, bukan tabel salinan isi identitas; URL bukan publik permanen |

Gunakan pihak/Orang/badan/unit, penugasan/peran, sumber/bukti privat, keputusan/riwayat/change_set dan audit yang sudah ada jika setara; tidak menggandakan identitas, angka produksi/ekonomi atau log. Daftar OPD/peserta/penerima/bukti/observasi berulang memakai record terkait, bukan satu kolom daftar.

Satu kejadian realisasi bisa terkait penerima/partisipasi yang sah sesuai jenis layanan. Jika satu kejadian memiliki beberapa hubungan penerima, ID kejadian tidak diduplikasi hanya untuk memudahkan join. Definisi kejadian/objek/satuan dan cakupan layanan harus ditetapkan; tidak memaksakan semua layanan 1:1 dengan partisipasi.

### G. Lima kelompok status terpisah

| Kelompok | Kosakata status yang ditetapkan pengguna | Batas pembacaan |
| --- | --- | --- |
| Program | Rencana, Aktif, Selesai, Dibatalkan, Diarsipkan | Status record program, bukan bukti semua sesi/layanan diterima atau seluruh catatan disahkan |
| Partisipasi | Didaftarkan, Dikonfirmasi, Hadir, Tidak Hadir, Mengundurkan Diri | Kosakata alur yang diminta; pendaftaran dan kehadiran dipertahankan sebagai catatan/status berbeda, bukan satu kolom yang saling menimpa |
| Realisasi | Belum Dilaksanakan, Terlaksana, Selesai, Dibatalkan | Keadaan pelayanan nyata, berbeda dari hadir atau verifikasi catatan |
| Verifikasi catatan | Draf, Diajukan, Terverifikasi, Perlu Koreksi | Keputusan mutu/pengesahan record terkait, bukan status program atau realisasi |
| Tindak lanjut | Direncanakan, Dalam Pemantauan, Selesai | Status pemantauan/tindak lanjut sendiri; tidak menghapus layanan atau observasi sebelumnya |

**Penyelarasan istilah partisipasi:** daftar pengguna memuat tahapan pendaftaran sekaligus kehadiran. Agar konsisten dengan RB-16.14, Didaftarkan/Dikonfirmasi/Mengundurkan Diri ditelusuri dalam pendaftaran dan Hadir/Tidak Hadir dalam kehadiran yang terpisah. Seluruh kosakata di atas dipertahankan; ringkasan alur tidak boleh menimpa sejarah pendaftaran atau kehadiran. Kehadiran belum dicatat bukan otomatis Tidak Hadir, dan konfirmasi belum berarti hadir.

Program Selesai tidak otomatis membuat semua realisasi Selesai atau Terverifikasi. Terlaksana/Selesai berbeda dari verifikasi; hasil wajib punya sumber/bukti/keputusan sesuai jenisnya. Transisi rinci, kewenangan pembatalan/arsip dan SOP perubahan peserta belum final, tanpa membuat persetujuan berjenjang atau status tambahan yang diklaim telah disahkan.

### H. Output, hasil langsung dan outcome teramati

| Tingkat | Contoh rancangan yang diminta | Batas klaim |
| --- | --- | --- |
| Output | Peserta hadir, unit terlayani, sesi, pendampingan | Hitung objek/status/cakupan yang benar; bukan otomatis seluruh pendaftar atau semua OPD sebagai program baru |
| Hasil langsung | Pelatihan selesai, rencana tindakan dibuat, dokumen fasilitasi selesai | Bedakan kehadiran dari penyelesaian/hasil berbukti |
| Outcome teramati | Perbaikan kemasan, perubahan kapasitas/omzet, sertifikasi penerbit berwenang, akses pasar tercatat | Fakta teramati menurut bukti/periode, **bukan bukti program menyebabkan perubahan** |

Setiap indikator wajib definisi/versi, satuan, objek pengukuran, periode awal–akhir jika relevan, sumber/bukti, status verifikasi dan penanggung jawab pencatatan. Cara ukur/cakupan dipelihara; indikator wajib, target, ambang keberhasilan dan jadwal khusus program belum ditetapkan.

Observasi awal/akhir terpisah berperiode/sumber/versi. Kapasitas/realisasi produksi merujuk KB-09, modal/penjualan/skala serta aturan/KBLI berversi merujuk KB-10. Jangan menyalin angka menjadi master outcome program tandingan, menjumlah satuan berbeda tanpa konversi atau menghitung versi koreksi lama sebagai observasi baru.

Omzet turun tetap dilaporkan turun sesuai bukti, bukan diubah menjadi klaim sukses. Belum diukur tidak dianggap nol atau tercapai; catat ketidaktersediaan/status yang sesuai. Kenaikan/penurunan sebelum–sesudah **tidak membuktikan sebab-akibat**. Catatan sertifikasi merujuk penerbit, dokumen/status dan waktu yang sah; SIJAI mencatat, bukan menyatakan menerbitkan sertifikat resmi atau mengganti sistem penerbit.

### I. Rekap lintas OPD tanpa penghitungan ganda

| Metrik | Dasar perhitungan rancangan |
| --- | --- |
| UMKM unik terlayani | Unit usaha unik penerima dalam cakupan/periode/definisi layanan dan status yang disahkan; beberapa wakil/OPD/sesi/cabang sah tidak menggandakan unit |
| Orang unik | Orang unik peserta dalam cakupan yang jelas; bedakan laporan pendaftar dengan yang hadir, bukan identitas dari nama/NIK mentah |
| Partisipasi | Catatan partisipasi sah yang berbeda menurut sesi/peran/konteks; pengiriman ulang teknis tidak menambah jumlah |
| Kejadian layanan | Peristiwa/realisasi dengan ID dan definisi yang sah; banyak hubungan peserta/penerima/OPD tidak menggandakan event |

Metrik wajib menyebut periode, filter status/verifikasi, objek/cakupan dan sumber. UMKM dihitung sesuai kesatuan operasional KB-01, bukan per orang/lokasi/produk. Jika penerima hanya Orang/Badan tanpa unit sah yang relevan, jangan mengarang unit untuk menaikkan hitungan UMKM.

Satu partisipasi dapat mempunyai beberapa realisasi yang nyata; jangan menyamakan jumlah keduanya. Program/sesi/realisasi yang dibatalkan atau dikoreksi tetap historis dan dibedakan pada rekap sesuai aturan, bukan dihapus atau semua otomatis dihitung sukses. Rekap publik/ekspor tetap KB-11 dan perlu pemeriksaan identifikasi ulang.

### J. Kewenangan, pengesahan dan dasar program

Tujuh fungsi contoh pada [matriks](matriks-kewenangan-mvp-kb09.md): penanggung jawab record, penyelenggara, pelaksana kegiatan, pencatat peserta, pengesah realisasi, pemantau hasil dan pengawas. Semua **usulan**, bukan nama OPD/jabatan resmi. Peran lintas OPD tidak otomatis berarti persetujuan berjenjang.

Satu OPD pemilik aktif setiap kode field tetap KB-04. Satu petugas aktif berwenang cukup mengesahkan perubahan biasa KB-07 setelah validasi/bukti/versi; konflik nilai oleh pemilik field KB-08. Koordinator/penanggung jawab program tidak otomatis dapat mengesahkan semua field atau mengubah aturan sasaran.

Jika identitas induk baru diperlukan, registrasi tetap petugas ditunjuk dan verifikator awal berbeda KB-05, tanpa akun pelaku. Persyaratan sasaran/kelayakan/penerima dan pembatasan ulang mengikuti dasar administratif sah per program, belum ditetapkan oleh kategori UMKM atau contoh dokumen ini.

### K. Privasi, audit, koreksi dan rekonsiliasi

KB-11 berlaku pada master program, peserta/penerima, bukti, observasi/ekonomi, pencarian, dokumen, unduh dan ekspor: hak minimum, tujuan/cakupan/penugasan, sensitivitas/penyamaran dan pemeriksaan server. Akses lintas OPD bukan izin melihat seluruh NIK/bukti/ekonomi. Izin ekspor terpisah dan hasil harus tetap terbatas sesuai keputusan.

KB-12 mencatat pendaftaran/kehadiran/status/realisasi/pengesahan, peran OPD, konflik/koreksi/pembatalan/arsip, unduh/ekspor sensitif serta observasi/tindak lanjut penting. Audit memakai struktur yang sama, tanpa NIK/dokumen mentah, dengan salinan berkontrol terpisah. Perubahan kritis, versi/keputusan/status terkait dan audit operasional commit/batal bersama; gagal salinan pascacommit tetap retry/rekonsiliasi KB-12.

Versi/penerapan sekali mencegah aksi bersamaan/pengiriman ulang menggandakan catatan teknis. Koreksi layanan tersahkan membuat keputusan/version/event baru yang merujuk sejarah, bukan menulis ulang audit atau menghapus bukti. Riwayat penugasan/penerima/perwakilan saat kejadian tetap terlacak dan izin saat membaca menggunakan penugasan kini.

KB-13 merge/split identitas mempertahankan ID peristiwa dan partisipasi sah; split mengalokasikan riwayat berdasar bukti/keputusan. Dua pelatihan nyata tidak menjadi satu hanya karena identitas digabung; satu peristiwa tidak digandakan ke semua tujuan split. Referensi yang belum jelas ditahan, tanpa auto-merge historis berisiko.

Pembatalan/arsip program atau partisipasi tidak menghapus referensi yang wajib dipertahankan. Retensi/JRA/penahanan serta bukti/salinan mengikuti KB-11; tidak mengarang durasi atau menyimpan semua data pribadi selamanya. SOP pembatalan/perubahan penerima/pulih dan retensi layanan masih terbuka.

### L. Impor historis dan batas keuangan

Data program historis OPD jika kelak disahkan lingkupnya melalui sumber/batch/staging privat, pemetaan/validasi/kandidat, konflik, pratinjau dan pengesahan KB-15. Data lama bukan resmi langsung dan impor program **tidak dibangun pada MVP pertama**. Jangan mengakses sistem OPD atau berkas peserta nyata sekarang.

Nominal bantuan historis boleh dirancang sebagai atribut catatan layanan **hanya jika dasar pemrosesan, cakupan, sumber/periode/verifikasi sah**. Catatan nominal tidak membuat pembayaran/transfer/penyaluran dana, seleksi otomatis penerima, pengadaan atau akuntansi. Tidak ada integrasi sistem keuangan/perencanaan/penganggaran/pelaporan pemerintah atau OSS/Dukcapil yang diaktifkan. Permintaan di luar batas memerlukan keputusan baru terpisah, bukan dilaksanakan melalui “realisasi layanan”.

### M. T16-01–T16-30 — kriteria penerimaan fase lanjutan

Seluruh skenario **spesifikasi pengujian mendatang dengan data fiktif, belum dijalankan**. Tidak membuat kode pengujian, file data contoh, database, aplikasi atau modul program pada tahap ini.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T16-01 | Petugas membuat program dengan OPD penanggung jawab. | Rancangan pembuatan oleh petugas berizin memakai ID internal program dan satu OPD penanggung jawab sah; OPD nyata/petugas belum ditetapkan sekarang. |
| T16-02 | Dua OPD pada satu program tidak menggandakan program. | Dua relasi peran OPD merujuk program yang sama; jumlah program tetap satu dan hak field tidak otomatis dibagi/digandakan. |
| T16-03 | Satu program mempunyai tiga kegiatan. | Tiga KEGIATAN_PROGRAM ber-ID berbeda merujuk satu program; tidak diperlakukan sebagai kegiatan ekonomi/KBLI unit. |
| T16-04 | Satu kegiatan mempunyai dua angkatan/sesi. | Dua pelaksanaan/sesi ber-ID sendiri tetap pada kegiatan yang sama, dengan tanggal/periode/lokasi yang jelas. |
| T16-05 | Orang mengikuti dua kegiatan berbeda dan mendapat dua partisipasi sah. | Satu Orang pada dua kegiatan/sesi berbeda mempunyai dua partisipasi sah; Orang unik tetap satu menurut lingkup yang sama, tanpa larangan ulang global. |
| T16-06 | Pendaftaran berulang pada sesi sama tidak menghasilkan duplikasi teknis. | Pengiriman ulang pendaftaran dengan orang/sesi/peran/konteks penerima sama tidak menambah partisipasi teknis ganda; kunci/versi/operasi diperiksa. |
| T16-07 | Dua pemilik/wakil satu usaha tidak menggandakan jumlah UMKM unik. | Dua Orang yang mewakili satu unit tetap satu UMKM unik; Orang dan partisipasinya dilaporkan terpisah. |
| T16-08 | Satu usaha mempunyai layanan dari dua OPD. | Satu unit mempunyai dua riwayat layanan dari OPD berbeda tanpa profil induk rangkap; tiap kejadian/mandat/field tetap terlacak. |
| T16-09 | Peserta terdaftar yang tidak hadir tidak dihitung hadir. | Terdaftar tetapi Tidak Hadir tidak masuk hitungan hadir; kehadiran belum dicatat tidak dipalsukan sebagai Hadir atau Tidak Hadir. |
| T16-10 | Kehadiran tidak otomatis berarti realisasi selesai. | Hadir tetap catatan kehadiran, bukan otomatis realisasi Selesai/Terverifikasi; sumber/bukti dan pengesahan realisasi tetap diperlukan. |
| T16-11 | Program selesai tidak mengesahkan semua layanan otomatis. | Program Selesai tidak mengubah status realisasi/verifikasi semua anaknya. Hasil layanan mengikuti bukti dan keputusan masing-masing. |
| T16-12 | Program dibatalkan tetapi riwayat tetap ada. | Pembatalan program mempunyai alasan/pelaku/waktu/audit; partisipasi, realisasi dan observasi historis tidak dihapus berantai. |
| T16-13 | Bukti wajib tidak tersedia, pengesahan realisasi ditahan. | Jika bukti yang disyaratkan jenis layanan belum ada/layak, pengesahan realisasi ditahan, tanpa dokumen/sumber fiktif atau verifikasi otomatis. |
| T16-14 | OPD nonpemilik tidak dapat langsung mengesahkan field. | Server menolak pengesahan field nonmilik meskipun OPD ikut program atau menjadi penanggung jawab record; usulan hanya jika berizin. |
| T16-15 | Pengesahan oleh petugas berwenang diaudit. | Satu petugas aktif sah mengesahkan dengan validasi/versi, perubahan terkait/status/keputusan dan event audit kritis konsisten. |
| T16-16 | Konflik realisasi diarahkan ke pemilik field. | Konflik realisasi menautkan kasus/subkasus KB-08 ke pemilik field; koordinator tidak otomatis mengambil alih keputusan. |
| T16-17 | Merge Orang sah mempertahankan riwayat partisipasi. | Merge identitas yang sah menjaga seluruh partisipasi/peristiwa berbeda dan asal/alias/audit; hanya duplikasi teknis yang terbukti sama dikendalikan. |
| T16-18 | Split usaha mempertahankan pembagian riwayat yang benar. | Split yang disahkan membagi referensi layanan menurut bukti/keputusan dan mempertahankan ID peristiwa serta riwayat, bukan menyalin semuanya ke tiap unit. |
| T16-19 | Omzet menurun setelah pelatihan tidak boleh diubah menjadi klaim keberhasilan. | Omzet turun dicatat sesuai sumber/periode; tidak diubah agar tampak berhasil dan tidak disimpulkan program menyebabkan kenaikan/penurunan tanpa pembuktian kausal. |
| T16-20 | Outcome belum diukur tidak dianggap tercapai. | Outcome belum diukur tetap belum tersedia/belum terverifikasi, bukan angka nol atau capaian target fiktif. |
| T16-21 | Pengukuran sebelum/sesudah mempertahankan periode masing-masing. | Observasi awal/akhir mempunyai periode/sumber/versi masing-masing dan referensi pengukuran yang benar; nilai baru tidak menimpa observasi sebelumnya. |
| T16-22 | Akses lintas OPD hanya menampilkan field yang diizinkan. | Akses lintas OPD hanya objek/field/tujuan/cakupan yang ditugaskan, bukan seluruh peserta/bukti/ekonomi karena berada pada program sama. |
| T16-23 | NIK peserta tidak terbuka untuk petugas tanpa izin. | NIK lengkap tidak tersedia bagi petugas tanpa hak khusus, termasuk hasil pencarian, respons dan log; identitas peserta memakai ID internal. |
| T16-24 | Ekspor daftar penerima tanpa izin ditolak. | Ekspor tanpa izin tersendiri ditolak walau ada hak baca; ekspor berizin tetap dibatasi tujuan/field/lingkup dan diaudit. |
| T16-25 | Jumlah Orang unik, UMKM unik dan partisipasi tidak tercampur. | Rekap menghasilkan metrik terpisah dengan periode/cakupan/status terdefinisi; dua wakil satu unit tidak dihitung dua UMKM. |
| T16-26 | Koreksi layanan tersahkan mempertahankan riwayat. | Koreksi realisasi/layanan sah menambah keputusan/versi/event yang merujuk hasil salah; nilai dan keputusan historis tetap terlacak. |
| T16-27 | Impor program historis mengikuti staging KB-15. | Data program historis melalui sumber/batch/staging/pemetaan/validasi/pencocokan/keputusan KB-15, bukan nilai resmi langsung atau impor program MVP. |
| T16-28 | Catatan nominal bantuan historis tidak menjadi transaksi pembayaran. | Nominal bantuan historis yang boleh dicatat mempunyai sumber/periode/cakupan/status sah; tidak membuat transfer dana, kewenangan bayar atau ledger. |
| T16-29 | Permintaan transaksi bantuan ditolak sebagai di luar lingkup. | Permintaan pembayaran/penyaluran elektronik/pengadaan/akuntansi/seleksi otomatis ditandai di luar lingkup, tanpa fitur atau transaksi yang dijalankan. |
| T16-30 | Auditor dapat menelusuri program, pelaksanaan, penerima, realisasi dan tindak lanjut. | Auditor berizin menelusuri program–kegiatan–sesi–partisipasi/penerima–realisasi–observasi–tindak lanjut serta bukti/audit sesuai hak. |

### N. Keputusan terbuka dan gerbang fase lanjutan

Belum final: OPD penanggung jawab modul/record dan pemilik field; jenis program pertama; nomenklatur/kode resmi; persyaratan sasaran/penerima dan pembatasan ulang; hak pencatatan/pengesahan; indikator wajib/cara ukur/target program; jadwal/bukti tindak lanjut; SOP perubahan peserta/penerima/status/pembatalan/arsip/koreksi; retensi/JRA dokumen layanan; lingkup impor historis; penggunaan data nyata.

KB-17 operasi/backup/pemulihan dan KB-18 kapasitas tetap terbuka. Hosting KB-14 **BELUM DAPAT DINILAI**, seluruh kondisi aktual belum diketahui; pencatatan program/observasi/bukti menambah kebutuhan yang kelak dinilai, bukan meluluskan hosting sekarang.

Sesudah MVP dan izin lingkup fase lanjutan, rincian administratif, katalog field/peran, bukti/indikator, privasi/risiko/retensi, audit/rekonsiliasi/impor, kapasitas/operasi serta kriteria penerimaan harus siap menurut penetapan sah. Persetujuan dokumentasi bukan izin instalasi/implementasi, data nyata, akses server/OPD atau produksi/deployment.

### O. Konsistensi dan catatan perubahan

Model KB-01–KB-15 dipertahankan. Modul program adalah fase lanjutan; tidak mengubah MVP KB-09, identitas unit/cabang, field owner/pengesah, klasifikasi/ekonomi berversi, privasi, audit, rekonsiliasi, hosting belum dinilai atau impor bertahap. KB-17/KB-18 tidak diubah.

Pernyataan terdahulu “program hanya ketergantungan masa depan” tetap berlaku terhadap MVP, sedangkan KB-16 kini memperinci rancangan fase lanjutan itu. Penyelarasan istilah daftar status Partisipasi dengan pemisahan pendaftaran/kehadiran dijelaskan pada bagian G dan [addendum audit](08-audit-konsistensi-dokumentasi.md), tanpa menghapus kosakata yang diberikan pengguna atau menyamakan realisasi dengan hadir.

5 November 2026 — pemilik produk menetapkan KB-16 Model B. Dokumentasi memuat **30 RB-16, 30 rencana T16, hierarki enam tingkat, sepuluh fungsi konseptual, lima kelompok status, tiga tingkat indikator dan empat metrik rekap**. Teks keputusan KB-01–KB-15 serta KB-17/KB-18 dipertahankan. Tidak ada kode/database/migrasi/seeder/paket/hosting/deployment, data UMKM nyata atau akses sistem OPD.

## KB-17 — Operasional terkelola berbasis risiko

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P1, sesuai register  
**Status:** **MODEL B DISEPAKATI — Operasional Terkelola Berbasis Risiko, kebijakan dan spesifikasi dokumentasi saja.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-17”.  
**Batas:** tanpa kode/database/migrasi/seeder/dependensi, akses server/PDN/cPanel/OPD/kredensial/data nyata, backup/restore, perubahan konfigurasi atau deployment.

### A. Lingkup, empat fungsi dan pembagian mandat

Model B mencakup: (1) operasional aplikasi/akun; (2) hosting/database/penyimpanan/jaringan; (3) pengamanan data/backup/audit/pemulihan; (4) pengawasan/insiden/pengendalian perubahan. Pemisahan pengelola aplikasi dan infrastruktur PDN harus ditetapkan secara formal, bukan disimpulkan dari nama penyedia hosting.

Sepuluh fungsi konseptual: pemilik layanan, pengelola utama aplikasi, OPD pemilik field, administrator aplikasi, administrator database/infrastruktur, operator backup/pemulihan, pengelola salinan audit terlindungi, tim penanganan insiden, pengawas/auditor, serta fungsi pelindungan data dan kearsipan berwenang. Tidak menetapkan nama instansi/pejabat/akun. Matriks fungsi setara RACI untuk **21 kegiatan** ada pada [matriks kewenangan](matriks-kewenangan-mvp-kb09.md); peran/pelaksana/persetujuan di dalamnya **usulan sampai penetapan sah**.

Admin infrastruktur bukan pengesah data UMKM otomatis; pemilik field bukan pembaca semua backup; pengelola aplikasi tidak otomatis boleh menghapus salinan audit. Eksekusi teknis, otorisasi dan pemeriksaan dapat dipisah sesuai risiko/mandat. Persetujuan operasi produksi bukan pengesah bisnis kedua untuk setiap field; KB-07/KB-08 dan verifikator awal berbeda KB-05 tetap.

### B. RB-17.01–RB-17.30

| Kode | Ketentuan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-17.01 | Model B: operasional terkelola berbasis risiko. | Model kebijakan operasi berbasis risiko, dampak layanan dan kemampuan yang dibuktikan; empat fungsi operasi dijelaskan, bukan jaminan kesiapan produksi. |
| RB-17.02 | Fungsi operasional dan pengawasan harus ditetapkan. | Fungsi pengelolaan aplikasi/akun, infrastruktur, pengamanan/pemulihan, serta pengawasan/insiden/perubahan dipisah dan ditetapkan sah; peran dalam matriks masih usulan. |
| RB-17.03 | Hak teknis tidak otomatis menjadi hak pengesahan data bisnis. | Hak admin server/database/backup bukan hak mengesahkan field UMKM. Pengesahan KB-04/KB-07 dan profil awal KB-05 tetap; pemilik field bukan pembaca seluruh backup. |
| RB-17.04 | Pembagian tanggung jawab OPD dan PDN harus disahkan. | Pembagian formal pemilik layanan, pengelola aplikasi, OPD dan pengelola PDN perlu mandat/SOP/SLA sah; tidak menunjuk instansi/pejabat/akun nyata. |
| RB-17.05 | Backup mencakup database dan seluruh relasi kritis. | Backup mencakup master/relasi pihak-orang-badan-unit, kepemilikan berperiode, lokasi/kegiatan/produk/sektor, sumber/klasifikasi/versi, keputusan/koreksi dan audit operasional yang diperlukan. |
| RB-17.06 | Backup mencakup dokumen privat dan metadata referensinya. | Dokumen privat, metadata, versi dan kaitan database harus konsisten pada titik pemulihan; database saja tidak cukup dan lampiran tidak boleh menjadi publik. |
| RB-17.07 | Backup mencakup konfigurasi dan artefak pemulihan yang diperlukan. | Konfigurasi pemulihan, versi artefak aplikasi/dependensi serta status pekerjaan penting dicakup sesuai kebutuhan; rahasia/kunci bukan isi repository atau laporan. |
| RB-17.08 | Backup harus konsisten antar-komponen. | Catat himpunan komponen, versi dan titik/rentang konsistensi yang dapat diverifikasi. Semua komponen yang disyaratkan harus sesuai; bukan kumpulan file bertanggal sama tanpa bukti. |
| RB-17.09 | Salinan audit KB-12 terpisah secara fungsi dari backup. | Backup memulihkan sistem; salinan audit menjaga keterlacakan/integritas/rekonsiliasi KB-12. Keduanya bukan pengganti satu sama lain atau riwayat koreksi bisnis. |
| RB-17.10 | Backup memerlukan pemisahan akses dan perlindungan dari kegagalan bersama. | Akses/kontrol dipisah menurut risiko dan independensi KB-12, mencegah satu insiden/akun/penghapusan menghilangkan semua salinan; produk/lokasi/jumlah belum ditetapkan. |
| RB-17.11 | Backup sensitif dilindungi dengan enkripsi sesuai risiko. | Enkripsi data sensitif saat penyimpanan/pemindahan mengikuti klasifikasi/risiko KB-11. Produk/metode/algoritme/kebijakan kunci perlu keputusan dan bukti, bukan asumsi. |
| RB-17.12 | Kunci dan rahasia pemulihan dikelola secara aman dan terbatas. | Kunci/rahasia dikelola terbatas, terpisah dan dapat dipulihkan oleh mandat sah, tanpa bergantung satu akun pribadi. Dokumentasi hanya referensi kebijakan/versi/penanggung jawab, tanpa nilai rahasia. |
| RB-17.13 | Aktivitas backup dan restore dicatat serta diaudit. | Akses, pembuatan/verifikasi, unduh, perubahan hak, penggunaan/restore dan hasil dicatat aman sesuai KB-12. Operasi infrastruktur mempunyai jejak tersendiri, bukan klaim transaksi lintas sistem atomik. |
| RB-17.14 | Keberhasilan backup harus diverifikasi. | Periksa titik, kelengkapan, integritas, versi, keterbacaan serta status tiap komponen. Tugas backup berakhir sukses belum membuktikan data bisa dipulihkan. |
| RB-17.15 | Restore diuji berkala di lingkungan terisolasi. | Uji restore kelak berkala dengan jadwal sah di lingkungan terisolasi, tanpa mengganggu produksi. Tidak menjalankan backup/restore/uji teknis pada tugas ini. |
| RB-17.16 | Restore harus memverifikasi data, relasi, dokumen dan audit. | Validasi master/relasi/dokumen/versi/pengesahan, kanonik/alias, audit dan fungsi/hak; kekurangan tidak dilabel pulih sepenuhnya. Formulir dan 16 langkah ada pada tata kelola. |
| RB-17.17 | RPO/RTO ditetapkan berdasarkan dampak dan kemampuan aktual. | RPO adalah batas kehilangan data yang dapat diterima, RTO target durasi pulih fungsi. Delapan kelompok layanan memakai matriks target kosong sampai dampak/KB-14/KB-18/SLA dan persetujuan tersedia. |
| RB-17.18 | Frekuensi dan retensi backup mengikuti kebijakan yang sah. | Frekuensi backup/uji, retensi/penahanan/penyusutan mengikuti kebijakan/JRA sah dan risiko. Tidak memilih harian, durasi tertentu atau salinan tak terbatas tanpa penetapan. |
| RB-17.19 | Monitoring mencakup layanan, proses, backup, kapasitas dan audit. | Monitoring mencakup 13 area layanan/database/sumber daya/scheduler/queue/akses/backup/integritas/salinan audit/dokumen/impor-rekonsiliasi/kesalahan aplikasi; ambang/alat/kanal belum final. |
| RB-17.20 | Gangguan memiliki klasifikasi, penanggung jawab dan jalur eskalasi. | Tiap peringatan/insiden memiliki dampak, pemilik tindak lanjut, eskalasi, status, referensi insiden dan audit penyelesaian. Nama/kontak/SLA tidak dikarang. |
| RB-17.21 | Insiden data pribadi mengikuti KB-11 dan kewajiban hukum. | Indikasi dan waktu insiden dicatat serta dieskalasi ke fungsi berwenang; KB-11 dan kewajiban pemberitahuan hukum tetap, tidak menunggu pemulihan atau mereset tenggat saat konfirmasi internal. |
| RB-17.22 | Backup yang diduga terkompromi tidak langsung dipakai untuk pemulihan. | Backup yang diduga terkompromi ditahan/diisolasi untuk pemeriksaan sumber, integritas dan keamanan; hash cocok saja tidak membuktikan bebas kompromi, tidak langsung dipulihkan ke produksi. |
| RB-17.23 | Koreksi data bisnis dibedakan dari restore infrastruktur. | Koreksi nilai/pengesahan/merge/impor salah melalui keputusan korektif pemilik field KB-07/KB-08/KB-13/KB-15. Restore infrastruktur bukan jalan pintas membatalkan bisnis yang tidak disukai. |
| RB-17.24 | Restore tidak boleh menghilangkan transaksi sah tanpa penanganan. | Identifikasi transaksi/perubahan sah sesudah titik pulih dan selisih audit/dokumen. Petugas menilai penerapan kembali/rekonsiliasi sesuai versi/hak/bukti tanpa duplikasi; audit bukan backup nilai bisnis lengkap. |
| RB-17.25 | Perubahan produksi memerlukan kontrol dan audit. | Perubahan produksi kelak memerlukan permintaan, dampak, persetujuan sesuai mandat, rencana eksekusi/pemulihan, verifikasi dan audit; izin dokumentasi bukan izin deployment. |
| RB-17.26 | Perubahan darurat tetap mempunyai dokumentasi dan evaluasi. | Keadaan darurat mempunyai justifikasi, jalur mandat/SOP, catatan waktu/tindakan/dampak, evaluasi dan tindak lanjut; bukan hak admin melewati pengesahan data bisnis. |
| RB-17.27 | Hak administrator, backup dan restore mengikuti prinsip minimum. | Hak aplikasi/database/infrastruktur/backup/kunci/restore/pemeriksaan dipisahkan dan minimum; penonaktifan admin tidak mematikan jalur pemulihan sah, tanpa akun bersama atau kunci di dokumen. |
| RB-17.28 | Pengujian menggunakan data sintetis atau data yang disetujui secara sah. | Pada tahap ini tidak ada pengujian teknis atau data nyata. Uji kelak memakai sintetis; opsi data lain pada rumusan memerlukan dasar dan izin sah terpisah serta gerbang KB-11, bukan izin yang sudah diberikan. |
| RB-17.29 | Implementasi menunggu verifikasi KB-14, KB-18 dan penetapan kelembagaan. | Kebijakan Model B dipilih, tetapi implementasi operasi/produksi menunggu bukti KB-14, kapasitas KB-18 dan kelembagaan/risiko/SOP serta izin terpisah. Dokumentasi kebutuhan tidak menunggu bukti server. |
| RB-17.30 | KB-17 adalah keputusan dokumentasi, bukan izin operasi server. | Hanya dokumentasi fondasi. Tidak membuat/mengubah kode/skema/migrasi/seeder/dependensi, menjalankan backup/restore/database, mengakses PDN/OPD/kredensial/data nyata atau mengubah hosting/deploy. |

### C. Cakupan backup dan konsistensi

Sepuluh kelompok kebutuhan:

1. Database Registri Induk.
2. Hubungan Orang, Badan Usaha dan Unit Usaha, peran dan masa berlaku.
3. Lokasi, kegiatan, produk dan profil industri.
4. Riwayat pengesahan dan koreksi.
5. Klasifikasi, sumber, periode dan versi.
6. Dokumen privat beserta referensi/metadata/versi.
7. Audit operasional.
8. Status penting antrean dan pekerjaan otomatis yang diperlukan untuk melanjutkan proses aman.
9. Konfigurasi pemulihan yang diperlukan secara aman.
10. Artefak versi aplikasi/dependensi yang cocok untuk pemulihan.

Daftar rinci/verifikasi ada pada [arsitektur](02-arsitektur-awal.md). Basis pemulihan ialah himpunan komponen dengan sumber, titik konsistensi, versi, kelengkapan dan bukti pemeriksaan. Dokumen harus sesuai referensi/versi database pada titik yang dipilih. File bertanggal sama atau database saja bukan bukti cukup. **Tidak membuat cadangan atau file teknis server sekarang.**

Konfigurasi rahasia dan kunci kelak dikelola pada sarana aman yang ditetapkan, terpisah dari dokumen/repository dan akses biasa. Dokumentasi hanya referensi kebijakan/versi/mandat yang aman; jangan membaca, meminta atau menuliskan nilai rahasia produksi. Artefak/dependensi cadangan yang cocok bukan izin memasang paket pada tahap ini.

### D. Backup, audit dan koreksi mempunyai fungsi berbeda

| Fungsi | Tujuan | Batas |
| --- | --- | --- |
| Backup sistem | Memulihkan layanan/database/dokumen/konfigurasi/komponen sesuai titik sah | Tidak membuktikan pemulihan berhasil hanya dari job sukses; tidak otomatis berisi transaksi terbaru |
| Salinan audit terlindungi KB-12 | Menjaga keterlacakan, integritas, kelengkapan dan rekonsiliasi kejadian audit | Bukan backup penuh profil/lampiran atau sumber untuk mengarang nilai bisnis hilang; kontrol independen tetap |
| Riwayat koreksi bisnis | Memperbaiki kesalahan nilai/keputusan/relasi dengan versi dan pengesahan baru | Mengikuti pemilik field KB-07/KB-08, bukan restore seluruh database sebagai jalan pintas |

Pemulihan sistem tidak boleh menghapus/mengganti audit yang wajib dipertahankan agar “cocok” dengan backup lama. Bandingkan keadaan bisnis pulih, audit operasional dan salinan KB-12, termasuk event sesudah titik backup; dokumentasikan selisih/kehilangan. ID kejadian dan target audit asli tetap. Pemulihan mempunyai event baru tersendiri. Tidak semua event menyimpan nilai lengkap, dan salinan belum tentu memuat event yang belum terkirim.

Jika audit kritis gagal saat transaksi bisnis berjalan, transaksi batal menurut KB-12. Jika hanya pengiriman salinan pascacommit tertunda, bisnis sah tidak dibatalkan; pantau/retry/rekonsiliasi. **Kegagalan verifikasi audit saat pemulihan menghalangi klaim pulih sepenuhnya**, berbeda dari membatalkan semua transaksi yang pernah sah.

### E. Perlindungan backup dan kunci

Persyaratan kebijakan: akses minimum dan penugasan aktif; pemisahan kontrol dari akun produksi sesuai risiko; perlindungan hapus/ubah tak sah; enkripsi menurut sensitivitas/risiko; pengelolaan kunci pemulihan terpisah dan bertanggung jawab; saluran pemindahan terlindungi; audit akses/penggunaan; verifikasi integritas; retensi/penyusutan/penahanan sah; pencegahan satu kegagalan atau serangan sistem utama menghilangkan semua salinan.

Independensi kontrol salinan audit KB-12 tidak dilonggarkan oleh frasa “sesuai risiko” untuk backup. Dua folder/akun dengan kendali akhir yang sama bukan otomatis pemisahan risiko memadai. Tidak memilih vendor/produk, lokasi, jumlah salinan, algoritme kunci, jadwal atau retensi final sebelum bukti KB-14/KB-18 dan penetapan terkait.

Kunci tidak tersedia berarti pemulihan data terenkripsi belum terbukti, walaupun file utuh. Kunci dan jalur pemulihan sah tidak bergantung satu admin pribadi; pergantian/pencabutan akun tidak boleh menghidupkan hak lama atau menghapus seluruh akses pemulihan. Rincian mekanisme pengganti/pemulihan kunci harus ditetapkan dan diuji kelak, bukan menyimpan salinan kunci di ZIP/dokumen.

Backup yang diduga terkompromi diisolasi/ditahan dan diperiksa sebelum dipilih; hash/integritas file saja bukan bukti bebas kompromi. Amankan bukti dengan hak/dasar/retensi yang sah sebelum tindakan merusak. Frekuensi uji berkala dipilih setelah analisis risiko, bukan ditetapkan otomatis harian/bulanan.

### F. Rencana pemulihan dan formulir uji

[Tata kelola](04-tata-kelola-data.md) memuat **16 langkah konseptual** sesuai rumusan pemilik produk dan **formulir 14 isian** yang belum diisi hasil, tanggal uji atau target. Alurnya: nilai gangguan/dampak/mandat, amankan bukti, pilih sumber/titik aman, verifikasi kelengkapan, lingkungan terisolasi, pulihkan komponen terkait, validasi identitas/relasi/versi/dokumen, rekonsiliasi audit dan selisih transaksi, verifikasi hak/fungsi, catat hasil dan persetujuan pembukaan.

Restore berizin kelak mempertahankan ID internal, kanonik/alias KB-13, hubungan M:N dan masa berlaku, cabang KB-01, kegiatan/lokasi/produk, produksi berperiode/satuan, klasifikasi KB-10, pengesahan/koreksi/konflik dan audit. Jangan mendaur ulang ID, menulis ulang target audit atau membuat master per OPD.

Status pekerjaan/niat kirim/replay diperiksa sebelum scheduler/queue/impor/rekonsiliasi dilanjutkan agar tidak menerapkan perubahan dua kali. Hak akun harus diverifikasi terhadap pencabutan/penugasan terbaru dari catatan sah, bukan otomatis mengaktifkan kembali izin lama karena backup. Detail pengendalian/replay bergantung bukti, desain rinci dan mandat.

Transaksi sah sesudah titik pulih yang belum kembali tetap fakta yang harus diinventaris dan ditangani; jangan dianggap tidak pernah terjadi. Penilaian penerapan kembali memakai sumber sah, versi, konflik, hak dan audit/idempotensi; tidak melakukan replay semua event atau berkas mentah otomatis. Yang tidak dapat dipulihkan dinyatakan, bukan diganti nilai tebakan.

### G. RPO/RTO tanpa angka final

**RPO (Recovery Point Objective)**: batas maksimum kehilangan data yang dapat diterima berdasarkan titik pemulihan. **RTO (Recovery Time Objective)**: target durasi pemulihan fungsi setelah gangguan. Keduanya target yang harus disahkan, berbeda dari angka hasil ukur uji.

Analisis dampak bisnis belum dilakukan, fasilitas aktual KB-14 belum diverifikasi, kapasitas KB-18/SLA PDN belum pasti. Tidak menetapkan nilai numerik, urutan prioritas final, frekuensi backup, durasi retensi atau jadwal uji.

Matriks delapan kelompok pada [tata kelola](04-tata-kelola-data.md) berisi: Registri Induk/relasi, pengesahan/perubahan, dokumen privat, audit kritis, impor/rekonsiliasi, dashboard/laporan dapat dihitung ulang, proses terjadwal, serta program fase berikutnya. Kolom dampak, prioritas, RPO/RTO usulan, dasar, persetujuan dan bukti teknis disiapkan; target belum ditetapkan **dibiarkan kosong**. Tidak mengklaim “terpenuhi” tanpa target sah dan pengukuran yang relevan.

Zona waktu layanan, acuan waktu/penyelarasan jam dan perbandingan durasi juga masih perlu ditetapkan sesuai kebutuhan audit; zona waktu komputer kerja bukan keputusan layanan Sinjai. Ini menjaga pokok terbuka lama KB-17, tanpa mengarang konfigurasi.

### H. Monitoring, insiden dan pengendalian perubahan

[Tata kelola](04-tata-kelola-data.md) mencatat **13 area monitoring** dan enam atribut tindak lanjut per peringatan: tingkat dampak, pemilik tindak lanjut, eskalasi, status penanganan, referensi insiden dan audit penyelesaian. Alat, ambang, kanal/kontak, jam dukungan dan SLA belum final. Monitoring tidak diaktifkan sekarang.

Dugaan insiden pribadi mengikuti KB-11, pencatatan waktu indikasi/kejadian/diketahui dan penilaian kewajiban oleh fungsi berwenang; jangan menunggu restore/konfirmasi akhir untuk mulai mencatat/menilai atau mengulang tenggat. Kewajiban pemberitahuan kegagalan pelindungan pada Pasal 46 UU PDP tetap diperhatikan oleh fungsi sah. Tidak mengirim notifikasi atau menghubungi pihak luar pada tugas ini.

Perubahan aplikasi kelak memiliki permintaan, analisis dampak, persetujuan, rencana eksekusi dan pemulihan, verifikasi serta audit. Perubahan darurat punya justifikasi mendesak, jalur persetujuan sesuai SOP, catatan tindakan dan evaluasi. Pemulihan rilis/kode tidak otomatis mengembalikan perubahan data; analisis kecocokan versi dan transaksi tetap perlu.

Koreksi data bisnis oleh pemilik field mengikuti KB-07/KB-08; perbaikan rekonsiliasi/impor KB-13/KB-15 berkeputusan/versi baru. Operasi darurat tidak memberi admin teknis kewenangan memilih nilai resmi atau menghapus sejarah.

### I. T17-01–T17-30 — kriteria penerimaan mendatang

**Semua skenario spesifikasi pengujian mendatang, belum dijalankan.** Tidak membuat kode uji, file teknis server atau cadangan. Uji kelak memakai data sintetis di lingkungan berizin/terisolasi. Rumusan RB-17.28 tentang data yang disetujui sah tidak memberi izin data nyata sekarang dan tidak melonggarkan gerbang KB-11/aturan proyek.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T17-01 | OPD tanpa mandat teknis tidak boleh menjalankan backup. | Kelak permintaan backup oleh OPD/petugas tanpa mandat teknis ditolak pada sarana operasi yang sah dan dicatat; kepemilikan field tidak memberikan hak backup. |
| T17-02 | Admin infrastruktur tidak otomatis boleh mengesahkan data. | Admin infrastruktur tetap ditolak mengesahkan field bisnis tanpa penugasan yang sesuai; hak teknis dan pemilik field tidak disamakan. |
| T17-03 | Backup database dapat diverifikasi titik dan integritasnya. | Catatan backup menunjukkan sumber/titik konsistensi/versi dan bukti verifikasi integritas yang dapat ditelusuri; label job sukses saja tidak cukup. |
| T17-04 | Kegagalan backup dokumen privat terdeteksi. | Backup dokumen yang gagal menimbulkan temuan/peringatan dan status kelengkapan bermasalah, walaupun backup database sukses. |
| T17-05 | Restore tanpa dokumen terkait tidak dinyatakan lengkap. | Database pulih tanpa dokumen privat/referensi yang diperlukan tidak mendapat status pulih lengkap; kekurangan dan mitigasi dicatat. |
| T17-06 | Ketiadaan artefak aplikasi yang cocok terdeteksi. | Artefak rilis/dependensi/konfigurasi yang tidak tersedia atau tidak cocok versi terdeteksi; pulih fungsi belum dapat dinyatakan berhasil. |
| T17-07 | Gangguan salinan audit ditandai sebagai masalah pemulihan. | Gangguan/ketidaklengkapan salinan audit tercatat dan ditangani sebagai kesenjangan pemulihan; tidak menyatakan pemulihan menyeluruh sukses. |
| T17-08 | Backup tanpa pemisahan risiko dicatat sebagai kesenjangan. | Salinan dengan kendali/risiko kegagalan sama dinilai sebagai kesenjangan; dua folder/salinan bukan otomatis pemisahan risiko memadai. |
| T17-09 | Unduh backup tanpa hak ditolak dan diaudit. | Unduh backup oleh pihak tanpa hak ditolak dan peristiwa dicatat aman, tanpa membocorkan data/kunci atau menaruh salinan di repository. |
| T17-10 | Kunci enkripsi hilang menyebabkan pemulihan tidak dapat dinyatakan berhasil. | Kunci yang diperlukan tidak tersedia berarti komponen terenkripsi tidak terbukti pulih; dicatat gagal/kesenjangan dan jalur pemulihan kunci sah diperiksa. |
| T17-11 | Backup rusak terdeteksi verifikasi atau restore. | Kerusakan/ketidaklengkapan backup terdeteksi pada pemeriksaan integritas atau uji restore; sumber ditahan, bukan dilabel dapat dipakai karena job sukses. |
| T17-12 | Restore uji dilakukan tanpa mengganggu produksi. | Uji kelak hanya pada lingkungan terisolasi yang diizinkan dengan data sintetis, tanpa menulis/menjalankan pekerjaan ke produksi atau mengirim notifikasi nyata. |
| T17-13 | Hilangnya relasi kepemilikan menyebabkan uji integritas gagal. | Kepemilikan M:N/peran/masa berlaku yang hilang menyebabkan validasi referensial gagal dan pembukaan layanan ditahan sesuai dampak/mandat. |
| T17-14 | Hilangnya hubungan produk dan unit menyebabkan uji gagal. | Produk tanpa hubungan kegiatan/unit yang benar menyebabkan pemeriksaan gagal; jumlah produk/unit atau periode produksi tidak direka untuk melengkapi. |
| T17-15 | Kehilangan pengesahan terbaru dinilai terhadap RPO dan direkonsiliasi. | Pengesahan sesudah titik backup yang hilang diinventaris dengan sumber/audit/versi; bandingkan hanya terhadap target RPO sah dan rencanakan rekonsiliasi/penerapan sah. |
| T17-16 | RPO/RTO yang belum disahkan tidak boleh diklaim terpenuhi. | Jika target belum disahkan, hasil target tidak diisi atau diklaim terpenuhi. Pengukuran uji, bila ada pada fase berizin, dicatat terpisah dari target. |
| T17-17 | Gangguan scheduler/queue menimbulkan peringatan. | Scheduler/queue gagal/terlambat membentuk peringatan dengan dampak/pemilik/eskalasi/status/rujukan insiden/audit; tidak menetapkan interval sekarang. |
| T17-18 | Keterlambatan salinan audit terdeteksi. | Keterlambatan salinan terdeteksi menurut ambang yang kelak sah, ditandai tertunda dan ditindaklanjuti KB-12; bisnis sah pascacommit tidak dibatalkan diam-diam. |
| T17-19 | Kapasitas mendekati batas menghasilkan peringatan. | Kuota mendekati ambang yang kelak dibuktikan memicu peringatan/tindak lanjut; angka ambang, kapasitas dan SLA belum dipilih. |
| T17-20 | Insiden data pribadi mengikuti jalur resmi. | Dugaan insiden pribadi mengikuti pencatatan/eskalasi/penilaian pemberitahuan KB-11 oleh fungsi berwenang, tanpa kontak atau pemberitahuan nyata pada tugas ini. |
| T17-21 | Backup diduga terkompromi diperiksa sebelum dipakai. | Sumber diduga terkompromi diisolasi dan diperiksa terlebih dahulu; titik pemulihan dinilai aman/sah sebelum penggunaan, bukan restore otomatis. |
| T17-22 | Kesalahan pengesahan memakai koreksi bisnis berjejak. | Pengesahan keliru diperbaiki petugas pemilik field dengan keputusan/versi/alasan/bukti/audit baru KB-07/KB-08, bukan restore seluruh database. |
| T17-23 | Restore lama tidak mengabaikan transaksi terbaru yang hilang. | Restore titik lama mengidentifikasi dan merekonsiliasi transaksi sah terbaru yang belum kembali, termasuk gap audit/dokumen; kehilangan tetap dilaporkan. |
| T17-24 | Perubahan aplikasi gagal menggunakan prosedur pemulihan rilis. | Rilis gagal ditangani sesuai rencana pemulihan rilis berizin, kecocokan artefak/keadaan data dan verifikasi; rollback kode tidak diasumsikan memulihkan data. |
| T17-25 | Perubahan darurat mempunyai catatan dan evaluasi. | Perubahan darurat mempunyai alasan/mandat/persetujuan menurut SOP, tindakan dan waktu, evaluasi pascaubah serta audit; tidak melewati kewenangan bisnis. |
| T17-26 | Penonaktifan admin tidak menghilangkan mekanisme pemulihan sah. | Penonaktifan satu admin tidak menghilangkan kemampuan petugas pengganti berwenang memperoleh pemulihan sah; hak lama tetap dicabut tanpa akun bersama. |
| T17-27 | Perubahan hak akses backup tercatat. | Pemberian/pencabutan/perubahan hak backup menautkan pemohon/mandat/pelaksana/waktu/cakupan dan audit; akses yang dicabut tidak tetap berlaku. |
| T17-28 | Data pribadi nyata tidak digunakan dalam uji tanpa dasar dan izin. | Uji dengan data pribadi nyata tanpa dasar/izin ditolak; sekarang tidak ada data nyata atau uji. Uji mendatang memakai sintetis sampai gerbang sah dipenuhi. |
| T17-29 | Kegagalan verifikasi audit menghalangi status pulih sepenuhnya. | Verifikasi audit yang gagal atau selisih belum tertangani mencegah klaim pulih sepenuhnya, meskipun halaman login terbuka; temuan/keputusan ditelusuri. |
| T17-30 | Auditor dapat menelusuri backup, restore dan perubahan terkait. | Auditor yang berizin menelusuri permintaan/mandat, sumber/titik/komponen/versi, verifikasi, restore, selisih, tindakan/keputusan dan perubahan terkait tanpa hak semua isi backup. |

### J. Referensi dan kedudukannya

| Rujukan resmi publik | Kegunaan dan batas |
| --- | --- |
| [NIST SP 800-34 Rev. 1, laman publikasi](https://csrc.nist.gov/pubs/sp/800/34/r1/upd1/final), [PDF resmi yang dapat dibaca](https://nvlpubs.nist.gov/nistpubs/Legacy/SP/nistspecialpublication800-34r1.pdf) | Rujukan praktik perencanaan kontingensi, analisis dampak, target pemulihan, pengujian dan validasi fungsi. Bukan aturan yang otomatis mengikat Pemkab Sinjai atau sumber angka target SIJAI |
| [NIST SP 800-92](https://csrc.nist.gov/pubs/sp/800/92/final) | Rujukan tata kelola log, melengkapi KB-12; bukan backup penuh sistem atau sertifikasi kepatuhan |
| [UU 27/2022 tentang Pelindungan Data Pribadi, JDIH Kemkomdigi](https://jdih.komdigi.go.id/produk_hukum/view/id/832/t/crc32/) | Perlindungan data dan penanganan kewajiban hukum termasuk Pasal 46; baca bersama KB-11/penetapan fungsi sah. Tidak menetapkan Pengendali/pejabat melalui dokumen ini |
| [UU 43/2009 tentang Kearsipan](https://peraturan.bpk.go.id/Details/38788/uu-no-43-tahun-2009), [PP 28/2012 pada JDIH ANRI](https://jdih.anri.go.id/peraturan/peraturan-pemerintah-no-28-tahun-2012), [layanan persetujuan JRA daerah ANRI](https://www.anri.go.id/layanan-publik/jra/daerah) | Dasar kearsipan/penetapan JRA sah. Laman layanan bukan JRA Sinjai dan tidak menentukan durasi backup SIJAI; ketentuan daerah lain tidak dipakai |
| KB-11, KB-12 dan KB-14 pada dokumen ini | Privasi/retensi/insiden, dua lapisan audit dan gerbang bukti hosting tetap berlaku; KB-13/KB-15/KB-16 dipertahankan |

Rujukan publik ditinjau pada 5 November 2026. Laman metadata SP 800-34 memberi galat saat diakses; PDF pada domain resmi NIST dapat dibaca. Beberapa laman peraturan.go.id tidak dapat diambil; rujukan resmi alternatif di atas dipakai. Pembacaan referensi publik bukan akses sistem operasional OPD/PDN, bukti hosting atau audit kepatuhan. **JRA Pemkab Sinjai yang berlaku dan pemetaan seri arsip layanan/backup belum terverifikasi dalam pekerjaan ini.**

### K. Keputusan terbuka, risiko dan gerbang

Tetap terbuka: pemilik layanan/pengelola operasional/PDN dan pembagian formal tugas; fasilitas hosting/backup nyata; lokasi/media dan pemisahan kontrol; enkripsi/kunci/rahasia; frekuensi/retensi backup dan JRA Sinjai; target RPO/RTO/prioritas layanan; jadwal uji; SLA/dukungan/kanal insiden; SOP perubahan/darurat/persetujuan restore/pembukaan; lingkungan uji terisolasi; zona waktu/acuan waktu; hasil audit KB-14; analisis kapasitas KB-18; penilaian keamanan dan izin data nyata.

Risiko: backup tidak lengkap/terkompromi/kunci hilang, satu insiden memusnahkan seluruh salinan, hak backup membuka data pribadi, restore kehilangan transaksi atau mengaktifkan hak lama, audit tidak sesuai bisnis, proses latar belakang terulang, koreksi lewat restore buta, target/jadwal palsu dan dokumentasi dianggap izin server. Kendali konseptual ditautkan pada arsitektur/tata kelola/matriks/roadmap; bukan klaim mitigasi telah diterapkan.

KB-01–KB-16 dan KB-18 dipertahankan secara substantif. Registri/pangan tetap MVP KB-09; operasi yang aman menopang MVP, tidak menambah modul program KB-16 ke fase pertama. Staging KB-15 tetap bukan data resmi. Salinan audit tidak menjadi master kedua atau pengganti backup. Hosting tetap **BELUM DAPAT DINILAI**, 55 kondisi aktual belum diketahui. Implementasi operasi menunggu bukti KB-14/KB-18, kelembagaan/risiko/SOP dan izin tahap yang relevan, bukan instruksi otomatis dari roadmap.

### L. Catatan perubahan

5 November 2026 — pemilik produk menetapkan KB-17 Model B. Pembaruan mencatat **30 RB-17, 30 rencana T17, empat fungsi operasi, sepuluh fungsi tanggung jawab, matriks 21 kegiatan, sepuluh kelompok backup, 16 langkah pemulihan, formulir 14 isian, delapan kelompok RPO/RTO dan 13 area monitoring**. Semua target/hasil uji yang belum ada tetap kosong atau belum ditetapkan. Nomor/prioritas serta isi keputusan KB-01–KB-16 dan KB-18 dipertahankan; hasil konsistensi pada [audit](08-audit-konsistensi-dokumentasi.md).

Tidak ada kode, database/skema/migrasi/seeder, dependensi, akses database/server/PDN/cPanel/OPD/kredensial, backup/restore teknis, data pribadi nyata, perubahan hosting/cron/DNS/jaringan atau deployment yang dilakukan.

## KB-18 — Perencanaan kapasitas skala kabupaten sejak awal

**Tanggal keputusan:** 5 November 2026  
**Prioritas:** P0, sesuai register  
**Status:** **MODEL C DISEPAKATI — Perencanaan Kapasitas Skala Kabupaten Sejak Awal, dokumentasi saja.**  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI DOKUMENTASI KB-18”.  
**Hasil kapasitas/hosting saat ini:** **BELUM DAPAT DINILAI**.  
**Batas:** tanpa kode/database/migrasi/seeder/dependensi, data nyata/akses PDN/cPanel/server, load test/stress test/benchmark jaringan, skrip pembebanan, konfigurasi/kuota/cron, backup/restore, deployment atau pengadaan.

### A. Model C, SSOT dan batas MVP

SIJAI dirancang sejak awal dengan satu Registri Induk untuk seluruh cakupan Kabupaten Sinjai, lintas OPD/sektor, identitas/relasi/kewenangan yang dapat dipakai bersama. Infrastruktur awal tetap berdasarkan kebutuhan MVP yang terverifikasi; tidak membeli seluruh kapasitas fisik sekaligus, menambah master per OPD atau mengaktifkan semua modul pada MVP.

Enam hal dipisahkan: (1) cakupan arsitektur kabupaten, (2) cakupan fungsional MVP, (3) kapasitas infrastruktur awal, (4) target pertumbuhan, (5) kapasitas maksimum pada hasil uji tertentu, dan (6) kapasitas yang benar-benar disediakan/disahkan. Semuanya dijelaskan pada [model kapasitas](09-perencanaan-kapasitas.md), bukan diasumsikan setara.

MVP KB-09 tetap Registri Induk/Profil Umum + Industri Pengolahan Pangan beserta akses/verifikasi/koreksi/audit/pencarian/laporan dasar yang disepakati. Program KB-16 fase setelah MVP; impor KB-15 tetap melalui gerbang/izin, bukan aktif otomatis. Menambah sektor tidak mengganti ID induk/SSOT, tetapi penyesuaian teknis/kuota kelak tetap dapat diperlukan berdasarkan bukti.

### B. RB-18.01–RB-18.30

| Kode | Ketentuan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-18.01 | Arsitektur kapasitas mencakup skala kabupaten. | Arsitektur satu Registri Induk/ID/relasi/kewenangan disiapkan lintas OPD/sektor Kabupaten Sinjai; bukan seluruh kapasitas fisik/modul aktif sejak awal. |
| RB-18.02 | Implementasi MVP tetap mengikuti KB-09. | MVP KB-09 tetap Registri Induk/Profil Umum + Industri Pengolahan Pangan dan kendali terkait; program KB-16 tetap sesudah MVP. |
| RB-18.03 | Penyediaan sumber daya fisik mengikuti kebutuhan terverifikasi. | Sumber daya awal kelak dipilih berdasarkan kebutuhan MVP/bukti fasilitas/izin dan dapat ditingkatkan; tidak ada angka kuota/pengadaan diputus dari simulasi. |
| RB-18.04 | Fakta, asumsi, proyeksi dan hasil uji dibedakan. | Lima kategori nilai dipakai: FAKTUAL TERVERIFIKASI, ASUMSI PERENCANAAN, PROYEKSI, HASIL PENGUJIAN dan BELUM DIKETAHUI; contoh bukan fakta/benchmark. |
| RB-18.05 | Data faktual mempunyai sumber dan definisi jelas. | Setiap fakta kapasitas wajib sumber/tanggal/definisi/cakupan/metode/verifikator; angka resmi Sinjai/fasilitas PDN belum tersedia dalam pekerjaan ini. |
| RB-18.06 | Seluruh entitas induk dan relasi diperhitungkan. | Matriks 18 kelompok menghitung Orang, Badan, Unit, kegiatan/lokasi/hubungan/produk/industri/pengukuran/versi/akun/dokumen/riwayat/audit/impor/backup dan program sesuai fasenya. |
| RB-18.07 | Satu Orang tidak dihitung ulang untuk setiap Unit Usaha. | Orang unik dihitung dari identitas internal/kanonik, terpisah dari banyak relasi/peran ke Unit. Rasio contoh bukan aturan satu Orang per Unit. |
| RB-18.08 | Cabang mengikuti definisi KB-01. | Cabang berpemilik sama dan teridentifikasi bagian induk tetap bagian usaha induk; menambah record lokasi tidak otomatis menambah Unit. |
| RB-18.09 | Riwayat, versi, klasifikasi dan pengukuran sektoral dihitung. | Pengukuran/klasifikasi/periode/aturan/versi/koreksi/alias dan referensi historis menambah volume sesuai kewajiban simpan; tidak menimpa histori untuk menghemat. |
| RB-18.10 | Dokumen privat dihitung terpisah. | Byte dokumen/versi terpisah dari data terstruktur/metadatanya, dengan jumlah/ukuran rata-rata/maksimum/format/revisi/retensi/akses yang jelas. |
| RB-18.11 | Staging dihitung berdasarkan volume dan durasi. | Staging mempertimbangkan batch beririsan, record/berkas/validasi/temporer serta durasi/retensi dan puncak lintas OPD; staging KB-15 tetap bukan resmi. |
| RB-18.12 | Audit operasional dan salinan terlindungi dihitung terpisah. | Audit operasional dipisah dari salinan berkontrol independen dalam perhitungan. Aktivitas/ukuran/metadata/integritas/retensi masing-masing ditelusuri, bukan master kedua. |
| RB-18.13 | Backup berdasarkan strategi KB-17. | Full atau full+incremental, titik/salinan/retensi/kompresi yang terbukti/enkripsi/lokasi/ruang restore mengikuti strategi KB-17 yang belum numerik final. |
| RB-18.14 | Perhitungan menghindari penghitungan ganda. | Cakupan agregat, komponen rinci, indeks/overhead/temporer, salinan fisik dan lingkungan dicatat. Model rinci menggantikan bagian agregat yang setara, bukan dijumlah dua kali. |
| RB-18.15 | Pertumbuhan tahunan dan horizon dimodelkan. | N(t)=N(0)×(1+g)^t memakai g/horizon per jenis yang dapat diganti. Ilustrasi Unit 10% tahun 0–3 bukan proyeksi resmi semua jenis data. |
| RB-18.16 | Tersedia skenario rendah, dasar dan tinggi. | Tiga skenario rendah/dasar/tinggi dan rasio dari lampiran ditulis ASUMSI; hasil rumus PROYEKSI, bukan kuota minimum/maksimum atau jumlah faktual. |
| RB-18.17 | Pengguna terdaftar dipisah dari pengguna bersamaan. | Akun terdaftar, aktif harian, bersamaan, laju permintaan dan pekerjaan proses berbeda; akun contoh bukan jumlah OPD resmi atau pelaku login. |
| RB-18.18 | Beban normal dan beban puncak dibedakan. | Sembilan profil memisahkan normal, jam kerja, registrasi/pengesahan, cari/laporan, unggah, staging, duplikasi, audit+backup dan pemulihan. |
| RB-18.19 | Operasi berat dihitung dalam kebutuhan performa. | Ekspor/laporan lintas OPD, unggahan, impor, pencocokan dan pemulihan memerlukan model durasi/CPU/I/O/jaringan/ruang, tidak disetarakan permintaan ringan. |
| RB-18.20 | Scheduler, queue dan replikasi audit diperhitungkan. | Scheduler/queue/background, retry/anti-ganda, replikasi audit dan backup beririsan dihitung tanpa memilih daemon/produk atau mengurangi audit. |
| RB-18.21 | Overhead, indeks, file sementara dan ruang cadangan diperhitungkan. | Indeks/overhead fisik, temporer/ruang restore dan cadangan pertumbuhan yang belum masuk komponen dihitung; input belum diketahui tidak menjadi nol. |
| RB-18.22 | Kinerja harus dibuktikan dengan pengukuran. | RPS rata-rata contoh bukan bukti server mampu. Kinerja/batas terukur hanya dari pengukuran sah pada konfigurasi/profil/target/lingkungan yang jelas. |
| RB-18.23 | Batas sumber daya hosting diverifikasi. | Sembilan belas rujukan kapasitas terhubung formulir 55 item KB-14; aktual CPU/RAM/I/O/kuota/proses/koneksi/peningkatan tetap BELUM DIKETAHUI. |
| RB-18.24 | Keamanan KB-11 dan integritas KB-12 tetap berlaku. | Keamanan/hak server/NIK/dokumen/ekspor/retensi KB-11 dan transaksi/audit independen KB-12 tetap wajib; optimasi bukan jalan melewati kendali. |
| RB-18.25 | Ada pemicu dan prosedur peningkatan kapasitas. | Dua belas indikator pemicu memiliki sumber, calon pemilik, tindakan dan status; ambang kosong sampai bukti/persetujuan, alur eskalasi bukan perubahan kuota otomatis. |
| RB-18.26 | Kekurangan cPanel memerlukan opsi infrastruktur yang disahkan. | Jika fasilitas kurang, dokumentasikan opsi pemisahan/kuota/infrastruktur/salinan terpisah untuk keputusan sah; tidak memilih vendor, bermigrasi atau berbelanja sekarang. |
| RB-18.27 | Kapasitas modul program KB-16 disiapkan untuk fase lanjutan. | Volume program/layanan/partisipasi/observasi dirancang dapat ditambahkan pada ID induk yang sama setelah fase KB-16, tanpa mengaktifkan modul pada MVP pertama. |
| RB-18.28 | Data nyata dan uji beban memerlukan otorisasi yang sah. | Tugas sekarang tanpa data nyata/uji beban/server; kelak perlu otorisasi lingkungan/lingkup/data serta gerbang KB-11/KB-14/KB-17, dengan data sintetis untuk uji. |
| RB-18.29 | Angka kapasitas final menunggu fakta dan verifikasi hosting. | Jumlah/rasio/pertumbuhan/target/kapasitas aktual/biaya final menunggu fakta, fasilitas dan hasil uji berizin. Hasil hosting dan kapasitas akhir BELUM DAPAT DINILAI. |
| RB-18.30 | KB-18 hanya mengesahkan dokumentasi. | Hanya dokumentasi keputusan/model/asumsi/audit dan ZIP dokumen; tanpa kode/database/dependensi/server/load test/backup/restore/deployment atau pengadaan. |

### C. Sumber angka, model dan perhitungan terpusat

[09 — Perencanaan kapasitas](09-perencanaan-kapasitas.md) menjadi pusat parameter/rumus/perhitungan, agar angka tidak digandakan menjadi versi berbeda pada arsitektur/roadmap. Sumber contoh ialah pemilik produk/lampiran KB-18, 5 November 2026. **Bukan statistik Sinjai atau kapasitas faktual PDN.**

Lima kategori: **FAKTUAL TERVERIFIKASI, ASUMSI PERENCANAAN, PROYEKSI, HASIL PENGUJIAN, BELUM DIKETAHUI**. Fakta perlu sumber/tanggal/definisi/cakupan/metode/verifikator. Hasil uji perlu izin/metode/profil/lingkungan/tanggal/pelaksana; belum ada hasil uji. Input hilang tidak menjadi nol.

Model mencakup matriks **18 kelompok volume**, skenario rendah/dasar/tinggi yang diberikan pengguna, rasio agregat ilustratif, dan parameter terpisah untuk Badan/Kegiatan/hubungan/riwayat/dokumen/audit/staging/backup yang belum disepakati. Orang unik tidak dihitung ulang per Unit; cabang mengikuti KB-01, merek/produk bukan Unit baru, histori/kanonik/alias tetap mempunyai biaya.

Pertumbuhan **N(t)=N(0)×(1+g)^t** memakai ilustrasi g Unit **10% ASUMSI**, tahun relatif **0–3 ASUMSI**; hasil tahun berikutnya **PROYEKSI**. Pertumbuhan induk, histori, dokumen dan audit tidak otomatis sama. Satuan desimal KB/MB/GB dan pembulatan dinyatakan.

Rumus **S_operasional = S_database + S_dokumen + S_audit_operasional + S_staging + S_sistem**. Total lintas infrastruktur menambahkan salinan audit independen, backup/penyimpanan terpisah, indeks/overhead yang belum masuk, temporer/ruang pemulihan dan cadangan pertumbuhan tanpa hitung ganda. Database contoh mengeluarkan audit untuk akuntansi komponen, bukan membentuk database baru.

Contoh agregat terstruktur sudah mencakup relasi/produk; jangan menambahkan rincian yang sama lagi. Audit tahunan ialah aliran GB/tahun, bukan stok hari pertama atau kuota total. Full dan full+incremental merupakan alternatif model, bukan dua strategi yang otomatis dipilih. Jumlah salinan/titik/retensi/kompresi dan RPO/RTO mengikuti KB-17 dan belum numerik final.

### D. Beban, fasilitas dan pemicu peningkatan

Model pengguna membedakan akun terdaftar, aktif harian, bersamaan, permintaan/durasi/komposisi operasi, perubahan/pengesahan, unggah/unduh, ekspor/laporan dan background. Ilustrasi **50 pengguna / 15 detik ASUMSI ≈ 3,33 permintaan/detik PROYEKSI**, bukan bukti server mampu atau jumlah proses PHP tetap.

Sembilan profil beban mencakup normal/puncak jam kerja/registrasi-pengesahan/cari-laporan/unggah/staging/duplikasi/audit+backup/pemulihan. Kompetisi CPU/RAM/I/O/jaringan/koneksi/ruang harus dipertimbangkan tanpa memilih angka kapasitas dari rata-rata RPS.

Checklist **19 rujukan kapasitas** pada model mengait **55 item KB-14** yang tetap seluruh aktual **BELUM DIKETAHUI**. Tidak menganggap kuota/CPU/fitur cPanel sama dengan paket hosting komersial. Ketidakmampuan memisahkan salinan audit tetap tidak memenuhi KB-12, walau ruang tersedia.

Matriks **12 indikator pemicu** memuat kolom indikator/ambang peringatan/ambang tindakan/sumber/calon pemilik/tindakan/status. Semua ambang numerik sengaja kosong sampai bukti dan persetujuan pengelola. Alur validasi tren/dampak → eskalasi → proyeksi/opsi/biaya → persetujuan perubahan → penerapan/pemulihan/verifikasi/audit kelak mengikuti KB-17; tidak mengubah kuota atau menghapus data otomatis.

Opsi bila fasilitas tidak cukup: pemisahan komponen/penyimpanan, peningkatan paket/kuota yang disetujui, infrastruktur lebih sesuai, atau penempatan audit/backup dengan kontrol terpisah. Seluruhnya **opsi untuk keputusan terpisah**, bukan pemilihan vendor, arsitektur aplikasi lain, pengadaan atau migrasi/deployment yang diizinkan.

### E. T18-01–T18-30 — kriteria penerimaan mendatang

Semua skenario merupakan **spesifikasi mendatang, belum dijalankan**. Pemeriksaan aritmetika dokumen bukan pengujian kemampuan aplikasi/server. Tidak membuat skrip beban, melakukan load test/stress test/benchmark jaringan atau mengakses data nyata/server.

| Kode | Skenario pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T18-01 | Angka resmi UMKM tidak tersedia: asumsi diberi label. | Karena jumlah resmi tidak tersedia, semua angka contoh tetap ASUMSI PERENCANAAN; output hitung PROYEKSI. Tidak ada klaim statistik Sinjai, hasil final belum dapat dinilai. |
| T18-02 | Dua usaha milik satu Orang: Orang unik satu, Unit Usaha dua. | Dua Unit berbeda yang sah memakai satu Orang master dan hubungan masing-masing; jumlah Orang unik satu, Unit dua, biaya hubungan terhitung tersendiri. |
| T18-03 | Cabang induk tidak menggandakan Unit Usaha. | Cabang yang memenuhi KB-01 tetap bagian induk, tidak menambah Unit hanya karena lokasi; volume lokasi/relasi bertambah sesuai record sebenarnya. |
| T18-04 | Banyak lokasi pada satu unit dihitung secara benar. | Banyak lokasi dihitung sebagai lokasi yang berbeda sesuai kebutuhan data; Unit unik tidak dikalikan jumlah lokasi dan rasio contoh bukan kewajiban tiap usaha. |
| T18-05 | Banyak produk pada satu unit dihitung. | Produk/relasi/bahan/pengukuran menambah volume terkait tanpa menambah Unit/merek sebagai usaha baru; jangan tambah biaya produk lagi jika sudah masuk agregat contoh. |
| T18-06 | Badan Usaha tidak otomatis sama jumlahnya dengan Unit Usaha. | Jumlah Badan menjadi input tersendiri BELUM DIKETAHUI sampai bersumber; tidak diisi sama dengan Unit/Orang atau nol agar tabel lengkap. |
| T18-07 | Komponen agregat tidak dihitung dua kali. | Komponen yang sudah dicakup agregat tidak dijumlah ulang. Buku alokasi menunjukkan batas audit/indeks/overhead/salinan per lingkungan dan model alternatif yang dipakai. |
| T18-08 | Riwayat produksi berkala menambah volume penyimpanan. | Periode pengukuran/revisi tetap tersimpan menurut aturan sah sehingga volume histori bertambah; frekuensi/retensi tidak diasumsikan bulanan/selamanya. |
| T18-09 | Dokumen besar meningkatkan kebutuhan kapasitas. | Ukuran rata-rata/maksimum/revisi dokumen berubah pada model menghasilkan kebutuhan berbeda; contoh 1,5 MB bukan batas upload atau bukti file nyata. |
| T18-10 | Ukuran dokumen belum diketahui menggunakan asumsi berlabel. | Ukuran belum tersedia dicatat BELUM DIKETAHUI atau input ASUMSI berlabel/sumber/versi, output PROYEKSI; tidak diklaim hasil ukur. |
| T18-11 | Event audit bertambah mengikuti aktivitas. | Model aktivitas memasukkan baca/tulis/pengesahan/ekspor/admin/impor/gagal/retry sesuai event yang disimpan; aktivitas baru dapat menambah audit tanpa Unit baru. |
| T18-12 | Salinan audit terpisah mempunyai kapasitas sendiri. | Salinan audit mempunyai kebutuhan ruang/metadata/retensi/kontrol sendiri KB-12, tidak dianggap gratis atau sama dengan backup penuh. |
| T18-13 | Model full/incremental backup dibedakan. | Strategi full dan full+incremental dinyatakan alternatif dengan basis/rantai/perubahan/titik yang diperlukan, tidak dijumlah sebagai dua strategi terpilih. |
| T18-14 | Retensi backup belum final tidak diklaim sudah dihitung pasti. | Jumlah titik/retensi/faktor backup belum sah tetap BELUM DIKETAHUI; kapasitas total tidak diklaim pasti dari proksi atau angka contoh. |
| T18-15 | Batch staging bersamaan menghasilkan kebutuhan puncak. | Batch beririsan menjumlah sumber/record/validasi/temporer dalam rentang waktu yang sama; puncak lintas OPD dan durasi simpan ikut dinilai, staging tetap privat. |
| T18-16 | Perubahan pertumbuhan tahunan memperbarui proyeksi. | Mengganti g/horizon menghitung ulang N(t) dengan versi input; proyeksi lama tetap terlacak. g Unit tidak otomatis diterapkan ke histori/dokumen/audit. |
| T18-17 | Akun terdaftar berbeda dengan pengguna bersamaan. | Tabel memisahkan akun, pengguna harian/bersamaan dan laju/durasi proses; 50 pengguna tidak otomatis 50 proses PHP tetap. |
| T18-18 | Puncak login/pencarian masuk skenario beban. | Profil jam kerja/pencarian/laporan memuat login serentak dan operasi berat sesuai hak; rata-rata RPS tidak dianggap puncak/hasil benchmark. |
| T18-19 | Impor saat jam kerja masuk profil kompetisi sumber daya. | Impor saat jam kerja dimodelkan berkompetisi dengan validasi/pengesahan/dokumen/audit, tanpa mengaktifkan impor atau menetapkan jadwal dari dugaan. |
| T18-20 | Ekspor/laporan lintas OPD masuk beban puncak. | Ekspor/laporan lintas OPD masuk profil beban dengan data/field/cakupan yang diizinkan; hasil unit unik tidak berganda dan izin ekspor tidak dilewati. |
| T18-21 | Backup dan audit bersamaan diperhitungkan. | Backup dan replikasi audit yang beririsan ikut model CPU/I/O/jaringan/ruang dan keterlambatan, mempertahankan kontrol independen serta strategi KB-17. |
| T18-22 | Batas koneksi database tidak diketahui: belum dapat dinilai. | Batas koneksi yang belum dibuktikan berstatus BELUM DIKETAHUI; kesesuaian beban/hosting belum dapat dinilai, bukan ditebak dari paket komersial. |
| T18-23 | Inode mendekati batas: perlu pemicu tindakan. | Pemakaian inode mendekati ambang yang kelak disahkan memicu peringatan/tindakan/eskalasi; ambang kini kosong dan tidak ada penghapusan bukti otomatis. |
| T18-24 | Queue tidak didukung: kesenjangan KB-14 dicatat. | Ketiadaan dukungan queue dicatat sebagai kesenjangan KB-14; metode aman/opsi perlu bukti dan keputusan, bukan otomatis memasang paket/daemon. |
| T18-25 | Audit tidak dapat dipisahkan: tidak memenuhi KB-12. | Ketidakmampuan memisahkan kontrol audit dinilai tidak memenuhi prinsip KB-12; ruang cukup atau dua folder tidak mengubah kesenjangan kritis itu. |
| T18-26 | Pertumbuhan melewati ambang: eskalasi kapasitas. | Pertumbuhan melewati ambang yang nanti sah memicu validasi tren/proyeksi/eskalasi/opsi biaya, tanpa mengubah kuota/pengadaan otomatis. |
| T18-27 | Modul KB-16 tetap fase lanjutan. | Program/partisipasi/observasi tetap input kapasitas fase setelah MVP KB-16; desain referensi siap tanpa fitur program dalam MVP pangan. |
| T18-28 | Load test tanpa izin ke server produksi ditolak. | Permintaan load test produksi tanpa izin tidak dilaksanakan; saat ini tidak ada skrip beban/server/network benchmark, hasil pengujian tetap belum tersedia. |
| T18-29 | Kapasitas tidak cukup: alternatif infrastruktur diajukan. | Kekurangan kapasitas menghasilkan opsi infrastruktur beserta dampak/risiko/biaya untuk persetujuan; tidak memilih/menerapkan solusi sepihak. |
| T18-30 | Auditor dapat menelusuri semua asumsi, rumus dan sumber. | Auditor berizin dapat menelusuri kategori/sumber/tanggal/definisi/cakupan/metode/verifikator, parameter/rumus/satuan/versi/hasil/hal belum diketahui tanpa data pribadi. |

### F. Audit lintas KB-01–KB-18 dan rincian terbuka

[Audit final dokumentasi](08-audit-konsistensi-dokumentasi.md) memuat tabel kode benturan/dokumen/ketidaksesuaian/acuan/usulan penyelarasan/status, termasuk identitas/cabang, kewenangan/pengesahan, MVP/fase lanjut, privasi/audit, merge/split/staging, backup/audit dan asumsi/fakta/kapasitas hosting. Model terdahulu tidak diubah diam-diam.

Tetap belum final: jumlah resmi Unit/Orang/Badan/kegiatan/lokasi/produk; akun/pola bersamaan; transaksi/event audit; ukuran/retensi/format dokumen; volume/durasi impor/staging; pertumbuhan faktual; kuota/batas PDN; alokasi audit independen; lokasi/strategi backup/RPO/RTO; target kinerja/pemicu; biaya/persetujuan; pengelola/kelembagaan; hasil uji berizin; izin data nyata. Rincian terbuka KB-01–KB-17 tidak ditutup hanya karena register model selesai.

Hosting/kapasitas akhir **BELUM DAPAT DINILAI** sampai fakta, verifikasi fasilitas/target dan pengujian berizin tersedia. Tidak menyediakan semua sumber daya sekaligus; kapasitas awal perlu dibuktikan untuk MVP, pertumbuhan direncanakan dan ditinjau bertahap.

### G. Catatan perubahan

5 November 2026 — pemilik produk menetapkan KB-18 Model C. Nomor/prioritas tetap, **KB-01–KB-17 dipertahankan**, 30 RB-18/30 rencana T18, model asumsi/proyeksi/perhitungan dan audit konsistensi ditambahkan. Semua model KB-01–KB-18 dipilih pada tingkat masing-masing, bukan seluruh kebijakan/rincian/izin organisasi dan teknis final.

Tidak ada kode, database/skema/migrasi/seeder/dependensi, akses server/PDN/cPanel/database/data UMKM nyata, pembebanan/benchmark, konfigurasi/kuota/cron, backup/restore, deployment atau pengadaan. Perubahan hanya dokumen fondasi dan ZIP penyerahan terverifikasi.

## DT-007 — Verifikasi bertingkat berbasis cakupan

**Tanggal keputusan:** 5 November 2026.  
**Pemberi keputusan:** pemilik produk melalui instruksi “FINALISASI KEPUTUSAN TURUNAN DT-007”.  
**Keputusan:** **MODEL C DISEPAKATI — FINAL pada tingkat pemilihan model DT-007.**  
**Batas:** dokumentasi saja; tidak membuat KB-19, menomori ulang KB/DT/RB/T atau memulai coding.  
**Dependensi terbuka:** DT-003/005/033 dan DT-006/011; tidak ditutup oleh keputusan model ini.

### A. Empat komponen yang dipisahkan

Registrasi induk mempunyai keputusan/status sendiri; field mempunyai status/versi/pemilik sendiri; profil sektoral dinilai sendiri; ringkasan agregasi menyimpulkan pemenuhan persyaratan pada **objek, lingkup dan tahap tertentu**. Agregasi **bukan pengesahan baru**, tidak mengubah keputusan field dan tidak menciptakan pengesah/koordinator/admin superuser.

| Komponen | Label konseptual dari pemilik produk | Makna dan batas |
| --- | --- | --- |
| Registrasi induk | Draf; Menunggu pemeriksaan; Disahkan; Perlu perbaikan | Keputusan registrasi oleh verifikator sah berbeda dari pembuat; bukan pengesahan NIB/seluruh field/produk/sektor |
| Field | Belum diisi; Menunggu verifikasi; Disahkan; Ditolak/perlu koreksi; Konflik | Status/keputusan melekat nilai atau versi yang dinilai; nilai efektif resmi dibedakan dari draf/usulan baru |
| Profil sektoral | Belum dimulai; Parsial; Memenuhi syarat verifikasi lingkup; Perlu perbaikan | Penilaian sektor/lingkup sendiri, tidak otomatis sah dari registrasi induk atau sektor lain |
| Agregasi | Memenuhi persyaratan yang berlaku; Belum memenuhi persyaratan; Belum dapat dinilai | Hasil penilaian objek, lingkup/tahap dan versi aturan tertentu, bukan keputusan pengesahan baru |

Agregasi adalah **hasil penilaian pada lingkup dan versi aturan tertentu**. Label di atas konseptual, **bukan enum database final atau daftar transisi teknis**. “Disahkan” adalah keputusan petugas berwenang; “Memenuhi syarat/persyaratan” kesimpulan evaluasi. Sektor “Memenuhi syarat verifikasi lingkup” tidak otomatis menerima pengesahan field/produk/NIB/registrasi lain.

KB-02 tetap terdistribusi, KB-04 satu OPD pemilik aktif per field. KB-05 tetap verifikator awal berbeda dari pembuat; KB-07 satu pengesah berwenang cukup bagi field biasa. Konflik KB-08 tidak dilewati agregasi. Pencatatan awal KB-03 tidak mewajibkan NIB, dan MVP KB-09 tetap registri + Industri Pengolahan Pangan.

### B. RB-DT007.01–RB-DT007.28

Judul berikut mengikuti rumusan pemilik produk secara lengkap. Penjelasan menelusuri batas, tidak menetapkan daftar minimum, OPD resmi, persentase atau enum teknis final.

| Kode | Aturan pemilik produk | Penjelasan dan konsistensi |
| --- | --- | --- |
| RB-DT007.01 | Agregasi menggunakan Model C bertingkat berbasis cakupan. | Model C adalah verifikasi bertingkat berbasis cakupan; ringkasan mengacu objek/lingkup/tahap, bukan satu status seluruh aplikasi. |
| RB-DT007.02 | Status registrasi induk, field dan profil sektoral terpisah. | Registrasi induk, setiap nilai/versi field dan profil sektoral dinyatakan terpisah; ringkasan agregasi menjadi hasil evaluasi tersendiri. |
| RB-DT007.03 | Agregasi adalah hasil evaluasi, bukan tindakan pengesahan baru. | Hasil memenuhi bukan tindakan Disahkan; evaluasi tidak menambah pejabat/pengesah atau mengubah keputusan field. |
| RB-DT007.04 | Setiap agregasi menyebut objek, lingkup dan tahap. | Objek memakai ID internal yang benar, lingkup dan tahap eksplisit agar hasil tidak diterapkan pada sektor/tahap lain. |
| RB-DT007.05 | Agregasi menggunakan katalog minimum yang sah serta berversi. | Katalog persyaratan minimum harus disahkan pihak berwenang, mempunyai versi dan tanggal efektif/rujukan keputusan sesuai lingkup. |
| RB-DT007.06 | Pengembang tidak menetapkan daftar field minimum sepihak. | Daftar minimum belum ditetapkan tetap DT-003/DT-033; field minimum tidak diturunkan sepihak dari contoh, persentase kelengkapan atau daftar W sektoral untuk semua tahap. |
| RB-DT007.07 | Verifikator awal berbeda dari pembuat profil. | Keputusan registrasi awal hanya sah oleh petugas berwenang yang berbeda dari pembuat profil terkait; agregasi tidak menghapus pemisahan. |
| RB-DT007.08 | Pengesahan induk tidak mengesahkan seluruh field/sektor. | Pengesahan induk tidak mengesahkan otomatis NIB, seluruh field lintas OPD, produk pangan, pengukuran atau profil sektoral. |
| RB-DT007.09 | Field dievaluasi menurut kewenangan OPD pemilik aktif. | Nilai efektif resmi field ditelusuri ke versi/keputusan dan satu OPD pemilik aktif menurut mandat sah; penetapan DT-005 tetap terbuka. |
| RB-DT007.10 | OPD nonpemilik tidak dapat mengesahkan melalui agregasi. | Ringkasan/penghitungan ulang bukan jalur OPD nonpemilik, koordinator atau admin memilih/mengesahkan nilai field. |
| RB-DT007.11 | Perubahan field biasa cukup satu pengesah berwenang sesuai KB-07. | Satu pengesah field biasa dengan mandat aktif cukup setelah validasi/bukti/versi/konflik; tidak ada pengesah kedua wajib akibat Model C. |
| RB-DT007.12 | Field kosong, ditolak dan konflik merupakan keadaan berbeda. | Belum diisi, menunggu, ditolak/perlu koreksi dan konflik tidak disamakan. Keadaan kandidat baru dan versi resmi yang masih berlaku harus dapat ditelusuri. |
| RB-DT007.13 | Field pilihan yang kosong tidak otomatis menghalangi penilaian lingkup. | Pilihan yang kosong sendiri bukan penghalang otomatis. Penghalang lain hanya yang relevan menurut katalog/aturan sah, bukan kewajiban baru dari pengembang. |
| RB-DT007.14 | Field wajib belum sah menghalangi kesimpulan pemenuhan lingkup. | Field yang diwajibkan lingkup dan belum sah/tersedia membuat syarat field wajib tidak terpenuhi jika aturan/prasyarat penilaian sudah cukup jelas. |
| RB-DT007.15 | Konflik aktif relevan menghalangi kesimpulan positif. | Konflik aktif yang relevan terhadap lingkup menahan kesimpulan positif, tanpa menghapus nilai/keputusan resmi yang masih berlaku; konflik mengikuti KB-08. |
| RB-DT007.16 | Perubahan versi field memicu evaluasi ulang yang relevan. | Perubahan versi yang berdampak memicu penilaian ulang lingkup terkait; hasil lama tidak disajikan sebagai hasil terkini untuk versi data baru. |
| RB-DT007.17 | Pengesahan versi lama tidak otomatis berlaku pada nilai baru. | Pengesahan versi terdahulu tidak otomatis menyetujui nilai kandidat/versi baru. Draf tetap bukan nilai resmi, nilai efektif lama mengikuti keputusan yang masih berlaku. |
| RB-DT007.18 | Perubahan katalog minimum mengikuti versi/tanggal efektif sah. | Evaluasi baru memakai katalog versi/tanggal efektif sah pada konteks penilaian; hasil historis mempertahankan aturan/versi dan data yang dipakainya. |
| RB-DT007.19 | Riwayat agregasi menyimpan konteks aturan dan data saat penilaian. | Riwayat menautkan objek/lingkup/tahap, aturan/versi/waktu, referensi versi/keputusan field dan alasan/penghalang; bukan menyalin data pribadi mentah. |
| RB-DT007.20 | Status satu sektor tidak otomatis mengesahkan sektor lain. | Hasil satu sektor tidak mengesahkan sektor lain; beberapa profil sektoral tetap merujuk Unit yang sama, tanpa menambah sektor aktif ke MVP. |
| RB-DT007.21 | Ketiadaan NIB tidak otomatis menghalangi registrasi awal. | NIB tidak wajib pendataan awal KB-03; katalog tahap awal tidak boleh mengubahnya menjadi syarat universal, dan status NIB tetap terpisah. |
| RB-DT007.22 | Katalog belum sah tidak boleh menghasilkan kesimpulan lulus. | Katalog/prasyarat belum sah atau tidak cukup untuk menilai menghasilkan BELUM DAPAT DINILAI; daftar kosong tanpa aturan eksplisit tidak berarti lulus. |
| RB-DT007.23 | Hasil agregasi dapat ditelusuri dengan alasan dan referensi versi. | Pengguna berhak dapat menelusuri hasil/versi/alasan sesuai cakupannya; hak ringkasan bukan hak membaca semua nilai/bukti. |
| RB-DT007.24 | Alih pemilik field yang sah tidak menghapus sejarah pengesahan. | Pergantian pemilik yang sah dicatat berperiode/mandat dan tidak menghapus pengesahan historis; validitas nilai efektif pada penilaian mengikuti aturan sah, bukan dicabut massal otomatis. |
| RB-DT007.25 | Ringkasan dan alasan sensitif dibatasi sesuai KB-11. | KB-11 membatasi nilai/alasan/asal/bukti sensitif menurut tujuan/sensitivitas/tugas; izin ekspor berbeda dari baca, tanpa NIK lengkap dalam ringkasan umum. |
| RB-DT007.26 | Keputusan dan perubahan status relevan diaudit sesuai KB-12. | Pengesahan awal/field, koreksi/konflik, perubahan katalog dan penilaian ulang relevan ditelusuri melalui KB-12. Gagal audit kritis pengesahan membatalkan keberhasilan bisnis, salinan berkontrol terpisah tetap. |
| RB-DT007.27 | Evaluasi ulang konsisten, tidak menciptakan pengesahan ganda. | Masukan aturan/data/konteks yang sama memberi hasil konsisten; perhitungan ulang tidak membuat pengesahan field/induk palsu atau ganda. Detail teknis pencatatan mengikuti desain yang kelak diizinkan. |
| RB-DT007.28 | DT-007 final hanya untuk model; DT-003/005/033 tetap terbuka dan coding belum diizinkan. | Pemilihan Model C final; rincian minimum/transisi DT-003, pemilik/mandat DT-005 dan referensi/bukti DT-033 tetap terbuka, DT-006/011 belum ditutup, G1 belum memberi izin coding. |

### C. Logika agregasi berbasis cakupan

**Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L)**

L adalah lingkup/tahap untuk objek internal tertentu, bukan seluruh profil lintas sektor. Rumus konseptual ini dibaca bersama prasyarat penilaian, bukan logika teknis dua nilai yang otomatis mengubah ketidakpastian menjadi gagal/lulus.

- **ValidAturan(L):** katalog minimum dan kewenangan penerapannya sah, ruang lingkup/tahap serta versi/tanggal efektif jelas. Daftar belum sah atau kosong tanpa aturan eksplisit tidak dianggap katalog yang telah memenuhi semua syarat.
- **SeluruhFieldWajibSah(L):** periksa nilai efektif dari field yang benar-benar diwajibkan katalog berlaku, versi/keputusan/bukti/periode yang relevan dan kewenangan pemiliknya. Nilai draf/staging/usulan bukan nilai resmi. Field pilihan kosong sendiri tidak otomatis menghalangi.
- **TidakAdaPenghalangRelevan(L):** periksa konflik aktif dan penghalang relevan yang ditentukan aturan sah. Penghalang pada lingkup lain tidak otomatis menggagalkan seluruh sektor/registrasi.
- **Registrasi induk:** tetap membutuhkan keputusan verifikator awal yang sah dan berbeda dari pembuat. Kesimpulan Memenuhi bukan pelaksanaan pengesahan, penambahan pejabat atau pemindahan kewenangan field.

| Kondisi konseptual | Kesimpulan yang boleh dicatat |
| --- | --- |
| Katalog minimum/prasyarat kewenangan/bukti tidak cukup untuk menilai | **Belum dapat dinilai**; alasan prasyarat/rujukan aman dicatat |
| Aturan sah/cukup jelas, field wajib efektif belum diisi/belum sah/ditolak tanpa nilai efektif yang memenuhi, atau penghalang relevan diketahui | **Belum memenuhi persyaratan** atau kesimpulan positif ditahan sesuai kondisi; tidak menghapus keputusan resmi |
| Aturan sah/cukup jelas, seluruh field wajib efektif memenuhi dan tidak ada penghalang relevan | **Memenuhi persyaratan yang berlaku** pada L/versi tersebut; bukan pengesahan baru |

Ketiadaan bukti untuk **menentukan aturan/kewenangan/prasyarat penilaian** berbeda dari keadaan field wajib yang sudah diketahui belum memenuhi menurut katalog sah. Jangan memalsukan kesimpulan pasti ketika belum bisa menilai. Pembaca ringkasan yang tidak berhak atas alasan mentah tidak otomatis kehilangan hak melihat kesimpulan aman yang memang diizinkan; evaluasi dan akses hasil menggunakan kewenangan masing-masing.

Tidak memakai ambang persentase kelengkapan sebagai pengganti minimum sah. Tidak menganggap daftar kosong lulus otomatis; perlakuan katalog kosong yang diklaim sah memerlukan dasar eksplisit/penetapan rincian terkait, tidak ditentukan dari kosongnya data pada tugas ini.

### D. Nilai efektif, perubahan dan riwayat

Satu field dapat mempunyai nilai resmi versi sebelumnya yang masih efektif dan usulan/draf versi baru yang menunggu atau ditolak. **Usulan baru saja tidak otomatis membatalkan nilai resmi lama**. Status kandidat dan keputusan pada versi efektif harus dibedakan; penilaian memakai nilai yang sah/efektif untuk konteksnya. Jika terdapat konflik aktif relevan, kesimpulan positif tetap ditahan menurut KB-08 tanpa menghapus nilai/riwayat resmi.

Pengesahan versi lama bukan pengesahan nilai baru. Ketika versi baru sah dan efektif atau nilai efektif berubah/dihapus melalui koreksi sah, penilaian ulang lingkup terdampak diperlukan. Bukti/periode yang tidak lagi memenuhi syarat dinilai menurut aturan sah, bukan tanggal kedaluwarsa buatan. Bila prasyarat belum cukup, Belum dapat dinilai.

Katalog mempunyai versi/tanggal efektif/dasar keputusan. Evaluasi baru memakai versi yang berlaku pada konteks penilaiannya; hasil lama tetap merujuk aturan/data/waktu lama, tidak ditulis ulang. Bila satu field dipakai banyak lingkup, hubungan dependensi memungkinkan penilaian ulang lingkup terkait tanpa otomatis mengubah seluruh sektor.

Alih pemilik field yang sah menjaga masa berlaku/mandat dan sejarah pengesahan. Tidak menghapus sejarah atau mencabut seluruh nilai lama otomatis; aksi baru memakai kewenangan yang berlaku dan dampak kelayakan mengikuti aturan sah. Kewenangan yang belum ditetapkan tidak boleh diasumsikan.

Evaluasi ulang dengan masukan aturan/data/konteks sama konsisten dan tidak menciptakan pengesahan ganda. Hasil historis tidak ditampilkan sebagai hasil terkini bagi versi berbeda tanpa penjelasan. Bentuk penyimpanan, pemicu, transaksi lintas lingkup, penjadwalan dan mekanisme teknis belum ditetapkan melalui keputusan ini.

### E. Informasi konseptual untuk penelusuran

Gunakan struktur yang sudah setara untuk field/versi/keputusan/penugasan/kasus/bukti/audit. Fungsi berikut **bukan tabel fisik baru atau instruksi implementasi**.

| Fungsi konseptual | Informasi yang diperlukan | Batas |
| --- | --- | --- |
| Lingkup dan tahap penilaian | ID/rujukan objek internal, sektor bila relevan, tahap/tujuan, konteks waktu | Bukan satu status global Unit atau sektor tambahan yang otomatis aktif |
| Katalog persyaratan minimum berversi | Identitas katalog/versi, lingkup/tahap, dasar keputusan sah, tanggal efektif, rujukan persyaratan wajib/pilihan yang benar-benar ditetapkan | DT-003/033 belum menentukan daftar riil; data kosong bukan katalog sah |
| Rujukan field/versi/keputusan efektif | Field/record yang relevan, versi efektif/calon terpisah, keputusan pengesahan, mandat/pemilik dan periode yang berlaku | Pakai riwayat/keputusan yang ada; tidak menduplikasi master/nilai pribadi ke hasil |
| Penghalang dan dependensi lingkup | Konflik/bukti/periode/kewenangan relevan sesuai aturan, hubungan field–lingkup, alasan aman/rujukan bukti | Tidak menetapkan masa berlaku/ambang/transisi atau semua field jadi wajib |
| Hasil dan riwayat evaluasi | Rujukan hasil, objek/lingkup/tahap, aturan/versi, referensi versi data, konteks waktu, kesimpulan/alasan/penghalang dan hubungan evaluasi terdahulu | Hasil evaluasi bukan pengesahan; evaluasi ulang tidak menulis ulang hasil historis |
| Jejak akses/audit dan klasifikasi | Tujuan/cakupan/hak baca ringkasan/alasan, klasifikasi sensitif, rujukan audit/keputusan relevan | Gunakan KB-11/KB-12, tanpa NIK lengkap/kredensial atau bukti pribadi mentah |

KB-13 mempertahankan identitas kanonik/asal dan riwayat. Rekonsiliasi yang sah mengubah referensi melalui prosedur/keputusan berjejak, bukan menghapus evaluasi lama atau menerapkan hasil ke objek berbeda tanpa menilai konteks. Staging KB-15 belum resmi dan bukan sumber kelulusan. Beberapa sektor pada contoh hanya kontrak konseptual; program KB-16 tetap fase lanjut dan sektor MVP tidak bertambah.

### F. T-DT007.01–T-DT007.28 — kriteria penerimaan mendatang

Seluruh kasus **spesifikasi pengujian mendatang, belum dijalankan**. Tidak membuat kode uji, tabel, file data, API/UI atau mengakses aplikasi/server. Contoh mengandaikan katalog/mandat sintetis yang relevan dalam rencana uji berizin kelak; tidak menetapkan minimum/OPD riil.

Pada kasus field wajib kosong/ditolak, yang dinilai adalah versi/nilai efektif yang dibutuhkan lingkup. Penolakan draf baru tidak otomatis membatalkan nilai resmi lama yang tetap berlaku. Ini menjaga T-DT007.07 konsisten dengan prinsip nilai efektif dan usulan baru.

| Kode | Kasus pemilik produk | Hasil yang diharapkan |
| --- | --- | --- |
| T-DT007.01 | Semua syarat induk sah dan pengesah awal valid: induk dapat disahkan. | Bila katalog minimum lingkup sudah sah dan semua field efektif yang diwajibkan sah tanpa penghalang, registrasi dapat disahkan hanya melalui keputusan verifikator aktif yang berbeda dari pembuat; evaluasi tidak mengesahkan otomatis. |
| T-DT007.02 | Pembuat mengesahkan sendiri: ditolak. | Petugas pembuat ditolak mengesahkan registrasi profilnya sendiri meskipun ringkasan persyaratan positif; penolakan/keputusan mengikuti audit relevan. |
| T-DT007.03 | Induk sah, sektor pangan belum lengkap: sektor tetap parsial. | Registrasi induk Disahkan tidak mengubah status produk/sektor. Profil pangan yang belum lengkap tetap Parsial menurut lingkup/buktinya sendiri. |
| T-DT007.04 | Field wajib OPD lain menunggu: lingkup terkait belum terpenuhi. | Field wajib yang menjadi tanggung jawab OPD lain dan masih menunggu tidak dianggap sah oleh verifikator induk; lingkup terkait belum memenuhi, tanpa mengambil alih field. |
| T-DT007.05 | Field pilihan kosong: tidak otomatis menghalangi. | Field pilihan yang kosong sendiri tidak menggagalkan lingkup; persyaratan wajib/penghalang relevan lain tetap diperiksa menurut katalog sah. |
| T-DT007.06 | Field wajib kosong: lingkup belum memenuhi syarat. | Field yang diwajibkan katalog sah tetapi kosong membuat lingkup belum memenuhi persyaratan; tidak diisi nilai fiktif atau diturunkan dari persentase. |
| T-DT007.07 | Field wajib ditolak: lingkup belum memenuhi syarat. | Nilai wajib yang ditolak/perlu koreksi dan tidak mempunyai nilai efektif sah yang memenuhi syarat tidak dihitung sah; lingkup belum memenuhi. |
| T-DT007.08 | Konflik aktif pada field wajib: kesimpulan positif ditahan. | Konflik aktif relevan pada field wajib menahan hasil positif dan ditangani pemilik field KB-08; nilai/riwayat resmi tidak dihapus otomatis. |
| T-DT007.09 | OPD nonpemilik mencoba mengesahkan: ditolak. | OPD nonpemilik ditolak mengesahkan field melalui aksi biasa maupun agregasi, sekalipun berhak membaca ringkasannya. |
| T-DT007.10 | Koordinator tanpa mandat mencoba mengesahkan semua field: ditolak. | Koordinator tanpa mandat field ditolak mengesahkan semua nilai; fungsi koordinasi dan agregasi tidak memperluas hak. |
| T-DT007.11 | Pemilik field berwenang mengesahkan: berhasil dengan audit. | Satu petugas pemilik field berwenang dan aktif dapat mengesahkan setelah validasi/bukti/versi; perubahan/keputusan dan audit kritis konsisten, tanpa pengesah tambahan dari agregasi. |
| T-DT007.12 | NIB belum tersedia: registrasi awal tidak otomatis ditolak. | NIB belum tersedia tidak otomatis menolak registrasi awal. Bila katalog/tahap belum sah hasil evaluasi belum dapat dinilai, bukan menjadikan NIB syarat universal baru. |
| T-DT007.13 | Nilai draf baru belum disahkan: bukan nilai resmi. | Kandidat draf baru tidak dihitung nilai resmi; pengesahan versi lama tidak menyetujui draf. Jika nilai lama masih efektif, evaluasi dapat merujuknya sesuai aturan yang berlaku. |
| T-DT007.14 | Nilai baru disahkan: agregasi menggunakan versi efektif terbaru. | Ketika versi baru disahkan sah dan efektif, evaluasi relevan memakai versi tersebut dengan konteks aturan/waktu; hasil/data/keputusan versi sebelumnya tetap terlacak. |
| T-DT007.15 | Katalog minimum belum sah: Belum Dapat Dinilai. | Katalog minimum yang belum disahkan menghasilkan Belum dapat dinilai dan alasan prasyarat belum cukup, bukan kesimpulan lulus. |
| T-DT007.16 | Katalog kosong tanpa aturan eksplisit: tidak lulus otomatis. | Daftar minimum kosong tanpa aturan eksplisit yang sah tidak dianggap seluruh syarat terpenuhi secara otomatis; hasil ditahan sebagai Belum dapat dinilai. |
| T-DT007.17 | Katalog baru berlaku: evaluasi baru mengikuti versi berlaku, sejarah tetap. | Evaluasi baru memakai katalog baru sesuai tanggal efektif/konteks sah, sementara hasil historis tetap mengacu katalog/data sebelumnya. Tidak menulis ulang keputusan lama. |
| T-DT007.18 | Dua sektor, satu sah: status sektor terpisah. | Dua sektor pada Unit yang sama dinilai terpisah; hasil positif/sah satu sektor tidak menaikkan sektor lain. Contoh hanya kontrak masa depan, tidak menambah sektor MVP. |
| T-DT007.19 | Pemilik field berpindah sah: riwayat pengesahan tetap tersedia. | Alih pemilik field sah menjaga riwayat mandat/pengesahan versi lama; aksi berikutnya memakai kewenangan yang berlaku dan tidak menghapus sejarah. |
| T-DT007.20 | Petugas kehilangan mandat sebelum pengesahan: ditolak. | Petugas yang mandatnya berakhir/dicabut sebelum aksi pengesahan ditolak; ringkasan lama yang positif tidak menghidupkan kembali mandat. |
| T-DT007.21 | Alasan verifikasi sensitif diminta tanpa hak: ditolak atau disamarkan. | Alasan sensitif di luar hak pengguna ditolak atau disamarkan sesuai matriks sah; ringkasan tidak membocorkan nilai/bukti/NIK mentah. |
| T-DT007.22 | Ringkasan terbatas diminta petugas berhak: hanya cakupan berizin. | Petugas berhak hanya memperoleh hasil/lingkup/objek yang diizinkan; hak baca ringkasan tidak memberi akses seluruh field, asal data atau ekspor. |
| T-DT007.23 | Nilai efektif dihapus melalui koreksi sah: agregasi dinilai ulang. | Koreksi sah yang menghapus nilai efektif menurut kewenangan/retensi relevan memicu evaluasi ulang; field wajib yang tak lagi terpenuhi tidak memakai versi lama sebagai pengganti otomatis, sejarah tetap terlacak. |
| T-DT007.24 | Satu field digunakan banyak cakupan: penilaian ulang terbatas pada cakupan terkait. | Perubahan field yang dipakai beberapa lingkup memicu evaluasi ulang lingkup terkait; tidak mengubah status semua sektor/tahap yang tidak terkait atau mengesahkan ulang field. |
| T-DT007.25 | Agregasi dihitung ulang tanpa perubahan: hasil sama dan tanpa pengesahan ganda. | Evaluasi ulang atas aturan/data/konteks sama memberi hasil sama tanpa keputusan pengesahan baru/ganda; jejak penilaian yang diperlukan tetap dapat ditelusuri. |
| T-DT007.26 | Audit kritis pengesahan gagal: transaksi bisnis tidak dinyatakan berhasil. | Kegagalan audit operasional kritis saat pengesahan berarti transaksi bisnis tidak berhasil dan tidak dilaporkan Disahkan. Gangguan kirim salinan pascacommit mengikuti KB-12, kondisi berbeda. |
| T-DT007.27 | Laporan induk sah dan sektor sah: metrik tidak dicampur. | Laporan membedakan registrasi induk disahkan dari profil sektoral memenuhi syarat lingkup/verifikasi dan status tiap field; jumlah Unit unik tidak digandakan. |
| T-DT007.28 | DT-003/005/033 masih terbuka: tidak mengarang daftar minimum, OPD, status atau bukti final. | DT-003/005/033 tetap berstatus sumber yang belum final, tanpa daftar minimum/nama OPD/enum/transisi/bukti sektoral atau izin coding yang dibuat sepihak. |

### G. Lima belas kasus batas konseptual

Semua contoh hipotetis/fiktif, tanpa NIK/dokumen/OPD nyata. Penyebutan “field wajib” selalu **jika** katalog sah lingkup terkait mewajibkannya, bukan daftar minimum yang ditetapkan pengembang.

| Nomor | Kasus batas | Penanganan konseptual dan batas |
| --- | --- | --- |
| 1 | Induk sah; produk pangan belum sah | Status registrasi tidak berubah menjadi pengesahan produk/sektor; lingkup pangan dinilai sendiri menurut persyaratan/bukti sah. |
| 2 | Satu field wajib belum disahkan OPD pemilik | Lingkup yang mewajibkannya belum memenuhi; verifikator induk/koordinator tidak mengesahkan field tersebut sebagai jalan pintas. |
| 3 | Sebagian field wajib dan sebagian pilihan | Yang wajib ditentukan katalog sah, bukan contoh pengembang. Pilihan kosong sendiri tidak menghalangi; penghalang relevan tetap dinilai. |
| 4 | NIB belum tersedia | Bukan alasan otomatis menolak registrasi awal KB-03. Tidak menganggap NIB terverifikasi karena induk disahkan. |
| 5 | Pemilik field berubah sah | Riwayat keputusan/mandat lama tetap, kewenangan aksi baru mengikuti masa berlaku sah; dampak kelayakan menurut aturan, tanpa cabut massal otomatis. |
| 6 | Field diubah setelah disahkan | Draf/kandidat baru terpisah dari versi efektif. Setelah versi baru sah/efektif, lingkup terkait dievaluasi ulang, pengesahan lama bukan pengesahan versi baru. |
| 7 | Konflik aktif field wajib | Penghalang relevan menahan kesimpulan positif tanpa menghapus nilai resmi; kasus/subkasus KB-08 tetap pada pemilik field. |
| 8 | Usulan baru saat nilai resmi lama berlaku | Usulan sendiri tidak otomatis membatalkan nilai efektif; evaluasi memakai versi efektif yang sah. Jika muncul konflik aktif relevan, hasil positif ditahan. |
| 9 | Katalog minimum diperbarui | Versi/tanggal efektif/konteks keputusan ditelusuri. Evaluasi baru sesuai aturan berlaku, hasil historis tetap dengan referensi lamanya. |
| 10 | Satu Unit beberapa profil sektoral | Penilaian per sektor/lingkup, identitas Unit sama. Contoh hipotetis bukan izin sektor/program baru dalam MVP pangan. |
| 11 | Satu field untuk beberapa lingkup | Dependensi field–lingkup menargetkan penilaian ulang yang relevan; tidak otomatis menilai/mengubah semua sektor lain. |
| 12 | Bukti/periode sektoral tidak lagi memenuhi syarat | Aturan sah menentukan penghalang dan lingkup yang perlu dinilai ulang. Jika prasyarat aturan/kewenangan/bukti tak cukup untuk menilai, Belum dapat dinilai, tanpa menebak masa berlaku bukti. |
| 13 | Hanya hak ringkasan, bukan alasan sensitif | Tampilkan hasil/rujukan aman sesuai tujuan/cakupan; alasan/asal/bukti sensitif dibatasi, ekspor izin tersendiri. |
| 14 | Pembuat mencoba mengesahkan registrasi awal | Ditolak walaupun persyaratan tampak terpenuhi; satu verifikator berbeda/mandat sah tetap diperlukan. |
| 15 | Hasil agregasi lama diperiksa audit | Telusuri objek/lingkup/tahap, aturan/versi, waktu, referensi nilai/keputusan saat penilaian dan alasan berizin, tanpa menulis ulang sejarah. |

### H. Akses hasil dan audit

KB-11 berlaku pada hasil, alasan, sumber/asal, bukti dan ekspor: objek/lingkup/tujuan/sensitivitas/kebutuhan tugas diperiksa. Hak membaca ringkasan bukan akses ke seluruh field/alasan mentah atau izin ekspor. Tidak menampilkan NIK lengkap pada laporan status atau menyalin data sensitif mentah ke audit. Penyamaran bukan alasan membocorkan nilai lewat respons/log.

KB-12 tetap sumber keputusan audit operasional dan salinan terlindungi berkontrol terpisah, berikut gerbang infrastruktur. Pengesahan awal/field, koreksi/konflik, perubahan katalog dan penilaian ulang relevan mempunyai referensi keputusan/aturan/data/waktu/hasil yang dapat ditelusuri. Evaluasi tidak membuat event “pengesahan” palsu.

Jika audit operasional kritis pengesahan gagal, bisnis tidak dinyatakan berhasil. Jika kirim salinan pascacommit tertunda, penanganan KB-12 tetap retry/rekonsiliasi tanpa membatalkan keputusan sah diam-diam. Penilaian ulang/riwayat tidak menulis ulang keputusan lama. Lokasi/teknologi/pemicu/audit rinci tidak dipilih melalui dokumen DT-007.

### I. Dependensi, gerbang dan hal yang belum final

| Rujukan | Status dan rincian yang tetap terbuka |
| --- | --- |
| DT-003 | DIUSULKAN: kelengkapan minimum/transisi tiap tahap; tidak diisi daftar final karena Model C dipilih |
| DT-005 | MENUNGGU PENETAPAN: OPD pemilik field, mandat/masa berlaku; tidak mengarang nama instansi |
| DT-033 | DIUSULKAN sesuai register sumber: status/satuan/konversi/periode/bukti sektoral teknis belum final |
| DT-006 | MENUNGGU PENETAPAN: penunjukan pembuat/verifikator awal dan mandat |
| DT-011 | MENUNGGU PENETAPAN: matriks akses/tindakan/sensitivitas/cakupan |
| DT lain | Tidak berubah oleh pemilihan model DT-007; batas implementasi/data nyata/produksi tetap |

G0 tetap **SIAP DIAJUKAN UNTUK PENINJAUAN** setelah pemeriksaan perubahan dokumentasi, bukan persetujuan baseline pemilik proyek. G1/G5/G7 **BELUM LULUS**, G2/G3/G4/G6 **BELUM DINILAI** sesuai baseline. G1 izin coding belum diberikan; G2 membutuhkan katalog/mandat/hak yang cukup jelas untuk lingkup implementasi, G3 membutuhkan hasil 28 kasus yang belum ada; G5 data nyata perlu dasar/mandat/izin. Status PDN/cPanel dan kapasitas akhir tetap **BELUM DAPAT DINILAI**.

### J. Penetapan dan konsistensi

5 November 2026 — **pemilik produk menetapkan DT-007 Model C** melalui mandat pada chat/lampiran. [Register DT pada baseline](10-baseline-konsolidasi-kb01-kb18.md#register-keputusan-turunan) mencatat model ini DISEPAKATI dan sumber/tanggal penetapan model; hal tersebut **bukan dokumen penetapan OPD/SOP teknis**.

KA-02 diperbarui: kekosongan pemilihan model agregasi telah selesai pada tingkat model, sementara katalog/minimum/mandat/enum/transisi dan bukti operasional tetap bergantung DT-003/005/006/011/033. Dua alternatif model lama pada baseline kini riwayat dan digantikan Model C ini, tanpa mengubah KB-01–KB-18.

Sebanyak **28 RB-DT007 dan 28 T-DT007** ditambahkan pada ruang penomoran sendiri, seluruh KB/RB/T sebelumnya tetap. Tidak membuat KB-19 atau memperluas MVP. Hasil hanya Markdown dan ZIP dokumentasi terverifikasi, tanpa kode/test otomatis/database/skema/migrasi/seeder/API/UI/dependensi, akses data nyata/server/OPD/layanan eksternal, perubahan lingkungan/hak operasional, pengujian teknis atau deployment.

## DT-003 — Registrasi Model B kombinasi A3+B1+C2

**Penetapan pemilik produk: 6 November 2026. Status: DISEPAKATI pada tingkat model bisnis.** Model B — Registrasi bertahap dengan persyaratan minimum, kombinasi **A3 + B1 + C2**. NIB **tidak wajib untuk draf, pengajuan maupun pengesahan awal induk**. Seluruh KB-01–KB-18 serta DT-007 Model C dipertahankan.

### Sumber resmi dan batas penetapan

Mandat finalisasi DT-003 dan klarifikasi pemilik produk pada chat menetapkan penggunaan `DT-003_Rumusan_Resmi_30_RB_30_T.md` sebagai sumber lengkap. Sidik sumber SHA-256: `BA8F6C3BAFCC36FF1C60A5F94AE7392925619DF50D0DFE65AD39EB18461DEB33`. Sumber menjelaskan asal rumusan dari percakapan SIJAI UMKM sebelumnya. Dokumen ini mencatat seluruh **30 aturan RB-DT003.01–RB-DT003.30 dan 30 skenario T-DT003.01–T-DT003.30** di bawah tanpa mengubah kode, isi, skenario atau hasil yang diharapkan.

Rumusan lengkap semula tidak ditemukan dalam Markdown/TXT proyek maupun 15 ZIP historis; kekurangan tersebut telah teratasi setelah pengguna menyediakan sumber resmi. Laporan audit data awal tetap **bahan temuan/saran**, bukan mandat menjalankan pembersihan, impor atau verifikasi data nyata. [Lampiran audit historis](11-audit-baseline-data-historis.md) hanya memakai agregat laporan.

Semua T-DT003 adalah **rencana penerimaan, belum dijalankan**. Kata “ditolak”, “dapat disahkan” atau “belum dapat dinilai” pada tabel T menyebut hasil yang harus dipenuhi kelak, bukan hasil pengujian aplikasi atau pengesahan data yang telah terjadi. Penetapan model dan ketersediaan 30+30 tidak menutup standar bukti, rincian operasional, penugasan atau izin.

### Katalog minimum A3 untuk penyimpanan draf baru

Katalog berikut memuat minimum konseptual yang sudah dipilih pengguna dan diperinci oleh rumusan resmi. Ini bukan skema database, enum teknis atau penetapan nama OPD.

| Unsur A3 | Minimum yang dipilih | Batas penafsiran |
| --- | --- | --- |
| Pihak terkait | Minimal satu pihak dengan jenis pihak jelas dan perannya dicatat | PIHAK/ORANG/BADAN_USAHA berbeda dari UNIT_USAHA; pihak tidak otomatis pemilik; hubungan banyak-ke-banyak tetap |
| Lokasi usaha | Minimal satu lokasi usaha yang dapat dibedakan | Alamat pemilik tidak otomatis lokasi usaha; cabang mengikuti kesatuan operasional KB-01 |
| Kegiatan usaha | Minimal satu kegiatan usaha yang dapat dikenali | Label sektor bebas bukan otomatis kegiatan/KBLI/pangan yang sah |
| Penanda usaha | Penanda untuk mengenali usaha pada draf | Bukan kewajiban NIB atau penggunaan NIK/nama sebagai ID internal; format rinci belum ditetapkan |
| Sumber informasi | Sumber pencatatan dapat ditelusuri | Isian sumber bukan bukti semua klaim sudah sah atau pengirim memiliki semua field |
| Petugas dan waktu pencatatan | Petugas pencatat serta waktu tersedia | Pembuat harus petugas ditunjuk; identitas/mandat DT-006 serta kebijakan waktu DT-034 belum ditetapkan |

**Draf registrasi baru hanya boleh disimpan setelah A3 terpenuhi.** Kelengkapan A3 bukan pengesahan isi. Draf masih dapat belum memenuhi paket pengajuan B1/C2 atau kelengkapan sektoral, tanpa membolehkan draf di bawah A3. NIK bukan ID internal dan kebutuhannya mengikuti tujuan/dasar sah; jangan menciptakan kewajiban NIK universal dari istilah “identitas pihak”.

Satu pihak boleh terkait beberapa Unit, satu Unit boleh mempunyai beberapa pemilik/pengelola melalui hubungan terpisah. Dua pemilik tidak menghasilkan dua Unit. Cabang/lokasi tidak otomatis Unit baru, dan kesamaan pemilik tidak otomatis menggabungkan usaha berbeda. Nama sama menghasilkan kandidat pemeriksaan, bukan putusan duplikasi. ID internal masing-masing objek mengikuti KB-03.

### Pengajuan B1 dan pengesahan C2

**Pengajuan** membedakan draf dari permohonan pengesahan. Kelengkapan paket minimum induk dan kandidat duplikasi relevan harus diperiksa. Dokumen formal relevan merupakan **bukti utama B1**, dinilai menurut objek dan klaim; dokumen identitas pihak sendiri tidak otomatis membuktikan kepemilikan Unit. Dokumen yang tidak relevan atau kedaluwarsa menurut ketentuan yang benar-benar berlaku tidak dipakai sebagai dasar pengesahan. Jangan membuat masa berlaku baru.

Jenis dokumen yang diwajibkan, kecukupan tiap klaim, prosedur pemeriksaan, standar minimum operasional dan katalog versi/efektif memerlukan penetapan sah DT-009 dan rincian terkait. T-DT003.14 berlaku jika dokumen itu memang diwajibkan oleh standar yang sah; pengembang tidak menetapkan daftar wajib sendiri. Kekurangan bukti formal memadai menghalangi pengesahan, **bukan penyimpanan draf yang telah memenuhi A3**. Nomor NIB/izin dalam Excel tidak membuktikan B1. Bukti formal lain yang memenuhi standar sah dapat mendukung pengajuan/pengesahan tanpa NIB.

**C2** adalah pengesahan paket minimum induk oleh verifikator awal berwenang, mandat aktif dan **berbeda dari pembuat**. Paket/katalog minimum harus sah; katalog tidak tersedia/tidak berlaku menghasilkan Belum dapat dinilai, bukan lulus dari daftar kosong atau persentase. Kekurangan bukti, konflik relevan atau kandidat ambigu berisiko Unit ganda ditahan/dikoreksi dengan riwayat.

C2 tidak mengesahkan seluruh field OPD lain, NIB, produk, pengukuran atau profil pangan. Pengesahan field tetap satu OPD pemilik aktif dan satu petugas berwenang sesuai KB-04/KB-07; konflik nilai oleh pemilik field KB-08. Koordinator/admin/nonpemilik tidak mendapat hak pengesahan lintas OPD dari C2 atau agregasi.

### Dua jalur dan transisi konseptual

| Jalur | Urutan konseptual | Batas yang wajib dijaga |
| --- | --- | --- |
| Registrasi baru | Petugas ditunjuk → kelengkapan A3 → Draf → pengajuan dan bukti B1 → verifikator awal berbeda → pengesahan induk C2 | Tidak menyimpan draf registrasi baru di bawah A3; draf/pengajuan bukan induk terverifikasi |
| Data historis | Sumber → staging privat → pemetaan/validasi → kandidat rekonsiliasi → pelengkapan A3 → pemeriksaan B1 → pengesahan C2 berwenang | Staging bukan draf registrasi resmi, bukan Registri Induk/SSOT kedua dan tidak masuk hitungan terverifikasi |

Historis yang belum memenuhi A3 dapat tetap dalam staging **sesuai otorisasi dan retensi yang sah** pada fase yang kelak diizinkan; bukan simpan selamanya atau melonggarkan A3. Jalur historis adalah rancangan KB-15 yang memerlukan lingkup/fase/izin terpisah DT-019/032. Tidak otomatis memasukkan modul impor massal ke MVP registri/pangan. Tidak ada staging, impor atau merge dijalankan pada pekerjaan ini.

Draf, pengajuan dan pengesahan adalah tahap konseptual terpisah. Pengembalian untuk perbaikan mempertahankan riwayat pengajuan; penolakan mencatat alasan/keputusan. Perbaikan tidak menghapus pengajuan lama atau mengesahkan field belum sah. Koreksi nilai yang sudah disahkan mempertahankan nilai/versi/keputusan lama dengan keputusan koreksi baru oleh pihak berwenang. Tidak ada kewajiban pengesah kedua untuk seluruh perubahan field biasa.

Pengarsipan mengikuti keputusan/mandat/retensi sah KB-11/KB-13, bukan penghapusan otomatis karena data lama, pengajuan ditolak atau A3 belum lengkap. Arsip berbeda dari hapus permanen. Nama/kode status, seluruh transisi teknis, tenggat, prosedur penolakan/pengajuan ulang/arsip dan bukti rinci tetap DT-009/013/033 terkait; tidak dibuat enum final dari diagram ini.

### Aturan bisnis — 30 RB-DT003 dari sumber resmi

| Kode | Rumusan yang disepakati |
|---|---|
| RB-DT003.01 | DT-003 menggunakan Model B dengan kombinasi A3 + B1 + C2 |
| RB-DT003.02 | Registrasi dilakukan bertahap; draf, pengajuan dan pengesahan dibedakan |
| RB-DT003.03 | Draf hanya dapat disimpan setelah persyaratan identitas minimum A3 terpenuhi |
| RB-DT003.04 | Draf memerlukan penanda usaha, sumber informasi, petugas dan waktu pencatatan |
| RB-DT003.05 | Draf memerlukan minimal satu pihak terkait dengan jenis pihak yang jelas |
| RB-DT003.06 | Peran pihak terhadap usaha harus dicatat dan tidak otomatis diasumsikan sebagai pemilik |
| RB-DT003.07 | Draf memerlukan minimal satu lokasi usaha yang dapat dibedakan |
| RB-DT003.08 | Draf memerlukan minimal satu kegiatan usaha yang dapat dikenali |
| RB-DT003.09 | Identitas Orang, Badan Usaha, Unit Usaha, lokasi dan kegiatan menggunakan ID internal yang sesuai KB-03 |
| RB-DT003.10 | Satu Unit Usaha dapat mempunyai beberapa pemilik/pengelola dengan hubungan yang terpisah |
| RB-DT003.11 | Satu pihak dapat berhubungan dengan beberapa Unit Usaha yang berbeda |
| RB-DT003.12 | Lokasi atau cabang mengikuti definisi kesatuan operasional KB-01 |
| RB-DT003.13 | Data draf tidak otomatis menjadi data induk terverifikasi |
| RB-DT003.14 | Pengajuan mensyaratkan pemeriksaan kelengkapan paket minimum induk |
| RB-DT003.15 | Pengajuan mensyaratkan pemeriksaan kandidat duplikasi yang relevan |
| RB-DT003.16 | Dokumen formal relevan menjadi dasar bukti utama pengesahan awal B1 |
| RB-DT003.17 | Dokumen formal harus dinilai menurut objek dan klaim yang dibuktikan |
| RB-DT003.18 | Ketiadaan bukti formal yang memenuhi standar menghalangi pengesahan, bukan penyimpanan draf A3 |
| RB-DT003.19 | NIB tidak diwajibkan untuk draf, pengajuan maupun pengesahan awal |
| RB-DT003.20 | NIK bukan ID internal dan penggunaannya mengikuti kebutuhan serta dasar pemrosesan sah |
| RB-DT003.21 | Pengesah profil awal harus berbeda dari pembuat dan memiliki mandat aktif |
| RB-DT003.22 | Pengesahan induk terbatas pada paket minimum induk, bukan seluruh field/sektor |
| RB-DT003.23 | Field milik OPD lain tetap memerlukan pengesahan pemilik field sesuai KB-04 |
| RB-DT003.24 | Agregasi status mengikuti DT-007 Model C dan katalog persyaratan yang sah |
| RB-DT003.25 | Kekurangan bukti, konflik dan kandidat duplikasi ambigu ditangani melalui penahanan atau koreksi yang dapat ditelusuri |
| RB-DT003.26 | Koreksi setelah pengesahan tidak boleh menghapus sejarah atau memutihkan field yang belum sah |
| RB-DT003.27 | Status dan keputusan registrasi memiliki pelaku, waktu, alasan, bukti dan riwayat audit sesuai KB-12 |
| RB-DT003.28 | Akses terhadap identitas dan dokumen formal mengikuti klasifikasi serta kewenangan KB-11 |
| RB-DT003.29 | Jenis bukti, standar minimum operasional, OPD pemilik field, mandat dan referensi sektoral masih mengikuti keputusan turunan terkait |
| RB-DT003.30 | DT-003 final sebagai model bisnis; tidak mengizinkan coding, akses server, penggunaan data nyata maupun deployment |

### Kriteria penerimaan — 30 T-DT003 dari sumber resmi

**Seluruh skenario berikut belum dijalankan.** Prasyarat standar bukti, katalog, hak/mandat dan lingkungan uji berizin harus tersedia sebelum menyatakan skenario lulus. Kasus tanpa NIB tetap mengandaikan persyaratan A3/B1/C2 lain pada tahapnya terpenuhi; ketiadaan NIB tidak menghapus minimum atau bukti.

| Kode | Skenario | Hasil yang diharapkan |
|---|---|---|
| T-DT003.01 | Simpan draf dengan seluruh minimum A3 | Draf dapat dibuat |
| T-DT003.02 | Simpan draf tanpa pihak terkait | Tidak memenuhi A3 |
| T-DT003.03 | Simpan draf tanpa lokasi usaha | Tidak memenuhi A3 |
| T-DT003.04 | Simpan draf tanpa kegiatan usaha | Tidak memenuhi A3 |
| T-DT003.05 | Simpan draf tanpa sumber informasi | Ditolak sebagai draf registrasi |
| T-DT003.06 | Satu Unit Usaha memiliki dua pemilik | Satu unit dengan dua relasi |
| T-DT003.07 | Satu Orang mengelola dua usaha | Dua unit dengan pihak terkait yang sama |
| T-DT003.08 | Pengurus badan dicatat sebagai pemilik pribadi tanpa dasar | Peran harus diperbaiki |
| T-DT003.09 | Usaha memiliki dua lokasi operasional terkait | Tidak otomatis menjadi dua unit |
| T-DT003.10 | Nama usaha sama dengan profil lain | Diperiksa sebagai kandidat duplikasi |
| T-DT003.11 | Draf belum memiliki NIB | Tetap dapat disimpan |
| T-DT003.12 | Pengajuan tanpa NIB tetapi mempunyai bukti formal lain yang memenuhi standar | Dapat diajukan |
| T-DT003.13 | Pengesahan tanpa NIB dengan paket minimum formal sah | Dapat disahkan sesuai kewenangan |
| T-DT003.14 | Pengajuan tanpa dokumen formal yang diwajibkan | Belum memenuhi syarat pengajuan |
| T-DT003.15 | Dokumen formal hanya membuktikan identitas Orang | Tidak otomatis membuktikan kepemilikan Unit Usaha |
| T-DT003.16 | Dokumen formal tidak sesuai objek atau kedaluwarsa menurut ketentuan yang berlaku | Bukti tidak digunakan sebagai dasar pengesahan |
| T-DT003.17 | Pembuat mencoba mengesahkan profil sendiri | Ditolak |
| T-DT003.18 | Verifikator berbeda tetapi mandat tidak aktif | Ditolak |
| T-DT003.19 | Paket minimum induk sah, field pangan belum diverifikasi | Induk dapat disahkan; pangan masih menunggu |
| T-DT003.20 | Petugas OPD nonpemilik mengesahkan field pangan | Ditolak |
| T-DT003.21 | Field wajib tertentu sedang konflik | Hasil agregasi lingkup terkait tidak dinyatakan terpenuhi |
| T-DT003.22 | Kandidat duplikasi belum terselesaikan dan berisiko membuat unit ganda | Pengesahan ditahan |
| T-DT003.23 | Profil diminta sah tanpa katalog minimum berlaku | Belum dapat dinilai |
| T-DT003.24 | Draf dikembalikan untuk perbaikan | Riwayat pengajuan tetap ada |
| T-DT003.25 | Pengajuan ditolak karena bukti tidak cukup | Alasan dan keputusan tercatat |
| T-DT003.26 | Nilai yang pernah disahkan kemudian dikoreksi | Riwayat nilai lama dan koreksi dipertahankan |
| T-DT003.27 | Pengguna tanpa hak mencoba membaca bukti identitas | Akses ditolak |
| T-DT003.28 | Laporan registrasi menghitung draf sebagai induk disahkan | Draf tidak masuk hitungan terverifikasi |
| T-DT003.29 | Kegagalan audit pada pengesahan kritis | Transaksi bisnis tidak dinyatakan berhasil sesuai KB-12 |
| T-DT003.30 | Pemeriksaan konsistensi DT-003 terhadap DT-007/005/033 | Tidak ada pengesahan menyeluruh, penetapan OPD fiktif, atau penutupan keputusan turunan tanpa dasar |

### Hubungan DT-007, privasi dan audit

DT-007 **tetap Model C — Verifikasi Bertingkat Berbasis Cakupan**. Status induk, field, sektor dan hasil agregasi objek/lingkup/tahap tetap terpisah. Rumus dan seluruh 28 RB/28 T DT-007 tidak diubah: **Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L)**. Agregasi bukan pengesahan baru atau superuser.

A3/B1/C2 kini dipilih, tetapi rincian katalog operasional/versi/efektif, bukti tiap klaim, mandat, akses dan referensi sektoral belum otomatis final. Daftar A3 bukan minimum seluruh tahap/sektor atau katalog lengkap C2. Model DT-003 tidak menyatakan data historis memenuhi A3/B1/C2. Pernyataan DT-003 DIUSULKAN/daftar belum ditetapkan dalam bagian DT-007 bertanggal 5 November 2026 tetap teks historis **sebelum mandat DT-003 6 November**; tidak mengubah pilihan atau aturan DT-007. Untuk status DT-003 terkini gunakan bagian ini dan baseline.

KB-11 membatasi baca/bukti/usul/sahkan/ekspor menurut tugas, tujuan, objek, field, wilayah dan mandat di server; izin ringkasan bukan akses seluruh identitas/dokumen. Tidak menampilkan NIK atau dokumen mentah dalam audit/laporan. Pengesahan/perubahan kritis beserta keputusan/versi dan audit operasional KB-12 harus berhasil atau batal bersama; gagal audit kritis tidak menghasilkan transaksi bisnis berhasil. Gangguan salinan audit setelah commit mengikuti retry/rekonsiliasi KB-12, bukan diam-diam membatalkan transaksi sah. Riwayat terjaga tetap tunduk JRA/penahanan sah, bukan simpan seluruh data pribadi selamanya.

### Dependensi dan hal yang tetap terbuka

| Keputusan | Kedudukan setelah mandat DT-003 |
| --- | --- |
| DT-003 | **DISEPAKATI — Model B A3+B1+C2**; minimum konseptual dipilih, standar bukti dan detail operasional memerlukan penetapan |
| DT-007 | **DISEPAKATI — Model C**, rumusan/aturan tidak diubah |
| DT-005 | MENUNGGU PENETAPAN satu OPD pemilik aktif tiap field dan masa kewenangannya |
| DT-006 | MENUNGGU PENETAPAN petugas pembuat/verifikator berbeda dan mandat aktif/cakupannya |
| DT-009 | DIUSULKAN; SOP bukti/koreksi/verifikasi/transisi rinci masih terbuka |
| DT-011 | MENUNGGU PENETAPAN matriks akses final |
| DT-019 | DITUNDA; sumber/tujuan/dasar/izin impor tetap memerlukan otorisasi; penyerahan laporan bukan izin data nyata |
| DT-033 | DIUSULKAN; status/satuan/periode/referensi/konversi/bukti sektoral belum final |

Nama OPD/petugas, wilayah pilot, standar bukti, rincian cabang/pemilik bersama, katalog status dan izin implementasi/data nyata/produksi tetap memerlukan dasar yang sah. Tidak menomori ulang DT-001–036, membuat KB-19 atau mengubah keputusan KB-01–18.

### Konsistensi laporan historis dan gerbang

[Lampiran 11](11-audit-baseline-data-historis.md) memisahkan angka inspeksi file dari Unit unik/resmi. Angka 5.213 baris bernomor daftar NIB dan 42.730 baris DATA UKM tidak menjadi jumlah UMKM. Dua kelompok hitungan format pada laporan masing-masing berjumlah 5.218, selisih 5 dari acuan 5.213; catatan AH-01 meminta klarifikasi penyebut tanpa mengubah sumber atau membuka Excel. Lokasi pemilik tidak dipetakan otomatis ke lokasi usaha, Kuliner tidak otomatis pangan, nomor izin bukan dokumen formal tervalidasi, dan pencocokan pengenal bukan izin merge.

G0 tetap **SIAP DIAJUKAN UNTUK PENINJAUAN**, bukan disetujui pemilik proyek. G1 **BELUM LULUS; coding BELUM DIIZINKAN**. G2/G3/G4/G6 **BELUM DINILAI**, G5/G7 **BELUM LULUS**. Hosting/kapasitas **BELUM DAPAT DINILAI**. Ketersediaan 30 RB/30 T bukan hasil pengujian atau izin tahap pembangunan.

Hasil DT-003 hanya dokumentasi Markdown dan ZIP perubahan terverifikasi. Tidak ada kode/migrasi/database/dependensi/API/UI/test otomatis, akses server/PDN/cPanel/layanan eksternal, pembukaan/pengolahan Excel atau data pribadi per orang, impor/merge/backup/restore/deployment.

## DT-005 — Kepemilikan field Model C+F+H2

**Pemilik produk menetapkan Model C + F + H2 pada 6 November 2026, DISEPAKATI final pada tingkat MODEL BISNIS.** Nama OPD/pejabat penetap, dasar mandat riil, cakupan nyata dan penugasan petugas **MENUNGGU PENETAPAN**, tidak diputus melalui dokumen ini.

Sumber: mandat finalisasi DT-005 pemilik produk, berkas lampiran chat `Pasted text.txt`, sidik SHA-256 `D74C89608BFB43AEEA1CFE982CC288D9ADCA6C9761A63185F3C7B89235DDDCEF`. Seluruh 30 aturan dan 30 skenario di bawah berasal dari mandat ini. Skenario adalah spesifikasi penerimaan mendatang, **belum dijalankan**. Tidak membuat KB-19 atau mengubah nomor keputusan.

### Makna C, F dan H2

| Komponen final | Makna mengikat | Batas model |
| --- | --- | --- |
| C — fungsi dan mandat resmi | Pemilik ditentukan dari fungsi pengampu dan mandat sah | Pemasok, pembuat Excel, pencatat pertama, pengunggah atau pemilik akun bukan pemilik field otomatis |
| F — kode field | Tepat satu OPD pemilik aktif per kode field, cakupan dan waktu efektif | Satu entitas boleh mempunyai field berbeda dengan pemilik berbeda; bukan satu pemilik generik seluruh entitas |
| H2 — penetapan resmi | Alih pemilik memiliki dasar sah, tanggal efektif, transisi hak/antrean dan audit | Tidak melalui perubahan konfigurasi sepihak, tidak menghapus keputusan lama dan tidak mengesahkan antrean otomatis |

Model ini memperinci penerapan satu pemilik KB-04, **bukan memperbolehkan dua pemilik untuk nilai/objek/cakupan/waktu yang sama**. Dua cakupan yang namanya berbeda tetapi beririsan tetap berpotensi tumpang tindih; jangan otomatis memilih aturan “paling khusus”, OPD pertama, pemasok atau prioritas admin. Definisi dan pemetaan cakupan harus ditetapkan sah sebelum pengesahan terkait. Perbedaan cakupan tidak diasumsikan tersedia dari contoh wilayah/sektor di dokumen ini.

Untuk field tanpa pemilik sah atau klaim pemilik tumpang tindih, pengesahan resmi baru tidak diperbolehkan. Ketidakjelasan kewenangan tidak memberi admin/koordinator hak mengganti pemilik. Penanganan klaim nilai mengikuti KB-08, sedangkan sengketa siapa berwenang mengikuti mekanisme organisasi yang sah.

### Enam peran dan koordinator yang terpisah

| Peran/fungsi | Tanggung jawab | Batas yang wajib dipertahankan |
| --- | --- | --- |
| Pemilik Field | OPD bertanggung jawab resmi atas nilai kode field dalam cakupan/waktu efektif yang sah | Tidak diperoleh karena memasok data atau menguasai seluruh entitas; tidak otomatis Pengendali Data Pribadi secara hukum |
| Pemasok Data | Menyerahkan sumber, dokumen, informasi atau usulan sesuai izin | Bukan hak pengesahan atau izin membaca semua field sensitif; pelaku tetap dilayani petugas tanpa akun |
| Pembuat Profil | Petugas ditunjuk mencatat draf setelah A3 terpenuhi | Tidak boleh mengesahkan profil awal buatannya sendiri |
| Pengesah Awal | Petugas bermandat aktif berbeda dari pembuat, memeriksa B1/C2 | Mengesahkan paket minimum induk, bukan semua field lintas OPD/sektor |
| Pengesah Field | Petugas bermandat dari OPD pemilik field | Bertindak hanya menurut cakupan, tindakan, tujuan dan waktu penugasan aktif; satu pengesah biasa tetap cukup KB-07 |
| Admin Teknis | Mengelola teknis dan melaksanakan konfigurasi yang sudah disetujui sesuai mandat | Bukan penentu kebenaran bisnis, pemilih OPD atau pemindah pemilik sepihak |
| Koordinator Registri Induk | Fungsi koordinasi tersendiri atas proses/mutu sesuai mandat | Tidak otomatis pemilik/pengesah semua field, pemutus sengketa organisasi atau pemberi diri hak bisnis |

Satu pengguna boleh mempunyai beberapa penugasan **yang masing-masing sah**. Tindakan diperiksa menurut mandat aktif saat pelaksanaan, bukan gabungan hak global. Larangan pembuat mengesahkan profil awalnya sendiri dan konflik tugas tetap berlaku. Pengesah awal boleh mengesahkan field tertentu hanya jika mempunyai mandat field tersendiri; hal itu tidak melewati pemisahan tugas KB-05.

### Dua lapisan katalog konseptual

Katalog adalah daftar definisi dan penetapan bisnis, **bukan nama tabel fisik, skema database atau migrasi**. Gunakan fungsi setara yang sudah dirancang; tidak menggandakan master UMKM.

| Lapisan | Unsur wajib didokumentasikan |
| --- | --- |
| A — definisi field | Kode entitas; kode field; definisi bisnis; jenis nilai; referensi sumber; sensitivitas; kebutuhan bukti; cakupan penggunaan; status/versi definisi |
| B — penetapan pemilik | Kode field; fungsi pengampu; OPD pemilik resmi setelah penetapan; dasar mandat; cakupan wilayah/sektor/entitas jika relevan; tanggal efektif; masa berlaku; identitas versi penetapan; status penetapan; fungsi pemberi mandat; referensi audit; prosedur peralihan |

Lapisan B merujuk kode dan versi definisi yang sesuai pada A. Fungsi pengampu usulan bukan identitas OPD resmi; keduanya tidak boleh disamakan. Penetapan OPD dan penugasan pengguna juga berbeda: organisasi pemilik tidak otomatis membuat semua pegawainya pengesah atau pembaca.

Satu penetapan berlaku menurut mandat, cakupan dan interval efektifnya. Masa berlaku penugasan petugas harus cocok dengan kewenangan organisasi serta tindakan/tujuan terkait. Perubahan definisi katalog tidak otomatis memindah pemilik atau mengesahkan nilai. Versi dan rujukan keputusan lama tetap terlacak; jangan mendaur ulang kode menjadi makna berbeda tanpa riwayat/penetapan sah.

[Matriks per kode field](matriks-kewenangan-mvp-kb09.md#katalog-usulan-per-kode-field--dt-005) menurunkan fungsi usulan pada [kamus MVP](kamus-data-mvp-kb09.md#dua-lapisan-katalog-kewenangan--dt-005). Tabel tidak mengonfigurasi hak operasional.

### Kelompok fungsi usulan untuk peninjauan

| Fungsi calon pengampu | Isi yang diusulkan | Batas |
| --- | --- | --- |
| Registri UMKM | Identitas Orang/Badan yang dicatat, atribut umum Unit, hubungan/peran/masa berlaku, lokasi/cabang, uraian kegiatan dasar dan proses registrasi sesuai mandat khusus | Bukan kewenangan menerbitkan identitas, pemilik seluruh sektor, atau pengesahan awal oleh pembuat |
| Perizinan | Referensi NIB dan informasi/status izin yang diterima sah | Pencatatan internal bukan penerbitan/perubahan legalitas eksternal; NIB tidak wajib untuk draf/pengajuan/pengesahan induk |
| Perindustrian | Jenis pengolahan pangan, produk/merek, bahan, peralatan, kapasitas/realisasi bersatuan/berperiode dan field sektor terkait | Tidak mengesahkan identitas, seluruh ekonomi atau perizinan tanpa mandat field tersendiri |
| Data Ekonomi UMKM | Modal, aset, omzet, tenaga kerja dan data ekonomi sesuai definisi/cakupan/periode | Hak input ekonomi bukan otomatis hak pengesahan skala; aset/modal/penjualan tidak dijumlah sebagai satu indikator |
| Klasifikasi | Pemeriksaan referensi KBLI jika dimandatkan dan pengesahan skala menurut aturan sah | Mesin menghitung usulan; aktivasi skala KB-10 tetap DT-031, katalog/penugasan belum final |
| Agregasi DT-007 | Hasil evaluasi sistem berdasarkan objek/lingkup/aturan/versi sah | Bukan fungsi pemilik global, pengesah baru atau jalan melewati field belum sah |

Kelompok ini **USULAN**, bisa diampu OPD yang sama/berbeda setelah penetapan, tetapi satu nilai/kode/cakupan/waktu tidak mendapat pemilik aktif ganda. Nama OPD dan dasar mandat nyata selalu MENUNGGU PENETAPAN bila bukti belum ada. ID dan metadata otomatis tetap dicatat sistem atas aksi sah, bukan OPD pemilik tambahan atau pengesah manusia baru.

### Mekanisme H2 — perubahan kewenangan

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

Keputusan pengesahan/kepemilikan historis tidak dihapus atau ditulis ulang. Pemilik lama dengan mandat yang masih sah tetap berwenang sebelum pergantian efektif; jangan mencabut atau memberi hak hanya dari tanggal usulan/penyuntingan konfigurasi. Setelah mandat berakhir, semua jalur tindakan memeriksa hak aktif dan versi terkini. Perpindahan tidak otomatis menyalin akses bukti sensitif/ekspor seluruh riwayat kepada pihak baru; KB-11 tetap.

Rincian pejabat penetap, format bukti, penanganan antrean konkret, kriteria konflik tugas dan matriks hak memerlukan penetapan sesuai DT-004/006/008/009/011 terkait. Dokumen ini menetapkan alur H2, bukan mengubah konfigurasi nyata.

### Aturan bisnis — 30 RB-DT005

| Kode | Rumusan dari mandat pemilik produk |
| --- | --- |
| RB-DT005.01 | Model C + F + H2 menjadi dasar kewenangan field SIJAI UMKM. |
| RB-DT005.02 | Kewenangan ditentukan berdasarkan fungsi dan mandat resmi, bukan sumber data. |
| RB-DT005.03 | Tepat satu OPD pemilik aktif berlaku per kode field, cakupan, dan waktu. |
| RB-DT005.04 | Katalog definisi field dipisah dari penetapan pemilik. |
| RB-DT005.05 | Pemilik field adalah tanggung jawab OPD, pengesah field adalah petugas bermandat. |
| RB-DT005.06 | Pemasok data tidak otomatis memperoleh hak pengesahan. |
| RB-DT005.07 | Pembuat profil tidak otomatis memperoleh hak pengesahan. |
| RB-DT005.08 | Verifikator awal harus berbeda dari pembuat profil yang diperiksanya. |
| RB-DT005.09 | Verifikator awal C2 tidak otomatis mengesahkan seluruh field. |
| RB-DT005.10 | Pengesah field hanya boleh bertindak dalam kewenangan aktifnya. |
| RB-DT005.11 | Admin teknis tidak boleh menetapkan kebenaran bisnis atau pemilik field sepihak. |
| RB-DT005.12 | Koordinator Registri Induk tidak otomatis menjadi pemilik seluruh field. |
| RB-DT005.13 | Tindakan baca, usul, sahkan, koreksi, unduh, ekspor dan administrasi dibedakan. |
| RB-DT005.14 | Kewenangan mempertimbangkan entitas, field, wilayah, sektor, tindakan dan tujuan. |
| RB-DT005.15 | Katalog kewenangan mempunyai identitas dan versi yang dapat ditelusuri. |
| RB-DT005.16 | Penetapan pemilik mempunyai dasar mandat dan tanggal efektif. |
| RB-DT005.17 | Dua penetapan aktif yang saling tumpang tindih tidak boleh berlaku bersamaan. |
| RB-DT005.18 | Perubahan kepemilikan melalui H2, bukan konfigurasi sepihak administrator. |
| RB-DT005.19 | Pemilik lama tidak boleh lagi mengesahkan setelah mandat berakhir. |
| RB-DT005.20 | Riwayat pengesahan dan kepemilikan sebelumnya harus dipertahankan. |
| RB-DT005.21 | Usulan yang tertunda saat perpindahan kewenangan harus ditangani melalui prosedur transisi. |
| RB-DT005.22 | Sengketa kepemilikan field diselesaikan melalui mekanisme organisasi KB-08. |
| RB-DT005.23 | Field tanpa pemilik yang sah tidak boleh menghasilkan pengesahan resmi baru. |
| RB-DT005.24 | Identitas dan legalitas eksternal tidak otomatis menjadi kewenangan penerbitan SIJAI. |
| RB-DT005.25 | Data historis masuk sebagai sumber/usulan, bukan nilai resmi otomatis. |
| RB-DT005.26 | Satu entitas dapat mempunyai field dengan pemilik OPD berbeda. |
| RB-DT005.27 | Status induk, field dan sektor tetap terpisah sesuai DT-007. |
| RB-DT005.28 | Akses terhadap informasi sensitif mengikuti prinsip minimum KB-11. |
| RB-DT005.29 | Perubahan kewenangan, pengesahan dan keputusan relevan diaudit sesuai KB-12. |
| RB-DT005.30 | DT-005 final pada tingkat model; penetapan OPD aktual dan izin coding tetap terbuka. |

### Skenario penerimaan — 30 T-DT005

**Seluruh skenario belum dijalankan.** Hasil diharapkan merupakan persyaratan bagi pembangunan yang kelak diizinkan, bukan hasil uji aplikasi saat ini. “Diterima sebagai sumber/usulan” pada T-DT005.16 tetap memerlukan otorisasi sumber/tujuan/dasar dan lingkup KB-15; bukan izin menerima data nyata sekarang.

| Kode | Skenario | Hasil yang diharapkan |
| --- | --- | --- |
| T-DT005.01 | Pemasok data mencoba mengesahkan field tanpa mandat | ditolak. |
| T-DT005.02 | Pembuat profil mencoba mengesahkan registrasi buatannya sendiri | ditolak. |
| T-DT005.03 | Verifikator awal mengesahkan field sektor tanpa mandat | ditolak. |
| T-DT005.04 | Pengesah field mempunyai mandat sah dan aktif | boleh mengesahkan sesuai persyaratan. |
| T-DT005.05 | Admin teknis mencoba menetapkan pemilik sepihak | ditolak sebagai keputusan bisnis. |
| T-DT005.06 | Koordinator mencoba mengesahkan seluruh field tanpa mandat | ditolak. |
| T-DT005.07 | Dua OPD aktif untuk field/cakupan/waktu sama | tumpang tindih ditolak. |
| T-DT005.08 | Field tanpa pemilik sah | pengesahan baru tidak diperbolehkan. |
| T-DT005.09 | Field dengan pemilik sah dan masa berlaku | kewenangan menggunakan tanggal efektif. |
| T-DT005.10 | Perubahan pemilik tanpa dokumen mandat | tidak menjadi penetapan sah. |
| T-DT005.11 | Perubahan pemilik berlaku pada masa depan | pemilik lama tetap berwenang sampai berakhirnya mandat jika masih berlaku. |
| T-DT005.12 | Pengesah lama bertindak setelah mandat berakhir | ditolak. |
| T-DT005.13 | Penetapan pemilik baru efektif | hak mengikuti pemilik baru dan mandat petugas yang sah. |
| T-DT005.14 | Usulan tertunda pada masa transisi | ditangani terkontrol, tidak otomatis disahkan. |
| T-DT005.15 | Dua OPD memiliki field berbeda pada entitas sama | diperbolehkan. |
| T-DT005.16 | Data historis dipasok OPD nonpemilik | diterima sebagai sumber/usulan, bukan nilai sah otomatis. |
| T-DT005.17 | NIB tercantum di Excel tanpa verifikasi formal | tidak dianggap telah diverifikasi. |
| T-DT005.18 | Alamat pemilik diperlakukan sebagai alamat usaha | perlu validasi pemetaan, tidak otomatis sama. |
| T-DT005.19 | Label Kuliner dianggap Industri Pengolahan Pangan | memerlukan pemeriksaan kegiatan. |
| T-DT005.20 | Satu field dipakai beberapa lingkup agregasi | kepemilikan field tetap, penilaian masing-masing lingkup terpisah. |
| T-DT005.21 | Registrasi induk disahkan saat field pangan menunggu | kedua status tetap terpisah. |
| T-DT005.22 | Pengguna hanya punya hak baca | pengesahan ditolak. |
| T-DT005.23 | Pengguna boleh membaca tetapi tidak mengekspor | ekspor ditolak. |
| T-DT005.24 | Petugas memegang dua peran | tindakan diperiksa sesuai mandat dan larangan pemisahan tugas. |
| T-DT005.25 | Pemasok meminta field sensitif tanpa hak | akses ditolak. |
| T-DT005.26 | OPD berubah nama/struktur melalui keputusan sah | riwayat mandat tetap dapat ditelusuri. |
| T-DT005.27 | Nilai resmi dikoreksi setelah perubahan pemilik | pemilik aktif menangani koreksi, sejarah tetap. |
| T-DT005.28 | Sengketa pemilik field terjadi | mekanisme KB-08, bukan keputusan admin. |
| T-DT005.29 | Audit perubahan kewenangan kritis gagal | perubahan tidak dinyatakan berhasil menurut KB-12. |
| T-DT005.30 | Audit konsistensi | tidak mengubah KB-01–KB-18, DT-003 atau DT-007. |

### Lima belas kasus batas konseptual

Semua contoh memakai fungsi dan keadaan fiktif; tidak menunjuk OPD/petugas nyata.

| Kasus | Penanganan sesuai keputusan |
| --- | --- |
| Dua fungsi/OPD mengklaim field/cakupan sama | Tahan pengesahan baru pada kewenangan yang tidak jelas; penyelesaian organisasi KB-08/DT-008, bukan admin memilih salah satu |
| Field tanpa pemilik resmi | Tidak menghasilkan pengesahan baru; fungsi usulan bukan mandat |
| Pemilik baru efektif mendatang | Gunakan pemilik/mandat yang sah untuk waktu tindakan, bukan tanggal input konfigurasi |
| Mandat petugas lama berakhir | Tindakan berikutnya ditolak jika tidak punya mandat aktif lain yang sah, tanpa hak otomatis dari riwayat |
| Usulan dalam antrean saat transisi | Prosedur H2 mencatat versi/tujuan/penugasan; tidak otomatis disahkan, sejarah antrean dijaga |
| Nama/struktur OPD berubah sah | Pertahankan identitas/versi/rujukan mandat lama dan keputusan baru; nama sama/berubah bukan bukti pemindahan otomatis |
| Pengesah awal juga pengesah field | Perlu mandat terpisah yang sesuai; C2 bukan pengesahan seluruh field dan pembuat tetap tidak mengesahkan profilnya sendiri |
| Satu pengguna dua penugasan | Periksa tindakan, cakupan, waktu dan konflik tugas masing-masing, bukan superuser gabungan |
| Field sensitif dipasok nonpemilik | Bahan diterima/dibaca hanya sesuai izin; pemasok tidak memperoleh pengesahan atau akses menyeluruh KB-11 |
| Data historis berbeda dari resmi | Jadikan kandidat/usulan berizin dan proses koreksi KB-08/13/15, tidak menimpa nilai sah |
| Field dipakai beberapa profil | Kode/identitas nilai tetap; tiap lingkup agregasi dievaluasi sendiri DT-007, bukan pemilik berbeda dari nama layar |
| Referensi NIB | Pemeriksaan pencatatan sah tidak menerbitkan/mengubah legalitas eksternal |
| Data ekonomi vs klasifikasi | Pemilik input dan hasil ditetapkan per kode; input/hitung usulan bukan pengesahan skala |
| Baca tanpa ekspor | Baca tidak memberi izin ekspor/unduh/sahkan; periksa hak tiap tindakan |
| Katalog field berubah | Jaga versi/arti/rujukan; tidak mengesahkan nilai atau memindah pemilik otomatis |

### Data historis dan keputusan yang tetap berlaku

[Lampiran historis](11-audit-baseline-data-historis.md) tetap hanya agregat laporan. Baris bukan Unit unik terverifikasi; nama pemilik bukan bukti hubungan sah, alamat pemilik bukan lokasi usaha, NIB dalam Excel bukan bukti formal diperiksa, dan irisan NIK bukan bukti Unit sama. Kuliner tidak otomatis pengolahan pangan; modal/aset/omzet/tenaga kerja memerlukan definisi/cakupan/periode berbeda. **OPD pemasok Excel tidak otomatis memiliki seluruh field.** Angka sumber dan catatan AH-01 penyebut 5.213/5.218 tidak diperbaiki melalui keputusan kewenangan.

KB-02/04 menjaga distribusi per OPD/kode field; KB-05 dan DT-003 B A3+B1+C2 menjaga A3 sebelum draf serta pengesah awal berbeda. KB-07 tetap satu pengesah field biasa. KB-08 menjaga konflik nilai/pemutus organisasi yang sah. KB-11 membedakan baca/usul/sahkan/koreksi/unduh/ekspor/administrasi serta hak minimum berdasarkan entitas/field/wilayah/sektor/tindakan/tujuan. Pemilik field tidak otomatis Pengendali/Prosesor hukum atau pembaca seluruh data.

KB-12 mewajibkan perubahan kewenangan/pengesahan kritis dan event operasional berhasil atau batal bersama; gagal audit kritis berarti perubahan tidak dinyatakan berhasil. Gangguan salinan audit pascacommit ditangani retry/rekonsiliasi, bukan membatalkan bisnis sah diam-diam. Riwayat tidak ditulis ulang; penyimpanan/penyusutan tetap dasar/JRA sah, bukan semua data pribadi disimpan selamanya.

DT-007 **tetap Model C**: induk/field/sektor terpisah dari agregasi objek/lingkup/tahap dengan katalog sah berfungsi. Alih pemilik tidak otomatis membatalkan keputusan historis yang sah atau mengesahkan nilai baru. Kebutuhan penilaian ulang lingkup mengikuti versi/aturan sah DT-007. Semua KB-01–18 serta rumusan DT-003/007 tetap utuh; MVP tidak diperluas.

### Register turunan dan gerbang

| Keputusan | Status setelah mandat DT-005 |
| --- | --- |
| DT-004 | MENUNGGU PENETAPAN pengelola utama dan mandat koordinasi |
| DT-005 | **DISEPAKATI Model C+F+H2**, final model bisnis; OPD/dokumen mandat/penugasan riil MENUNGGU PENETAPAN |
| DT-006 | MENUNGGU PENETAPAN pembuat/verifikator aktual |
| DT-008 | MENUNGGU PENETAPAN jalur pemutus sengketa kewenangan |
| DT-009 | DIUSULKAN; standar bukti/koreksi/prosedur rinci belum final |
| DT-011 | MENUNGGU PENETAPAN matriks hak operasional final |
| DT-012 | MENUNGGU PENETAPAN Pengendali/Prosesor/fungsi PDP hukum |
| DT-019 | DITUNDA; otorisasi sumber/staging/dasar/retensi belum diberikan |
| DT-033 | DIUSULKAN; status/satuan/periode/referensi sektoral belum final |
| DT-003 dan DT-007 | Model B A3+B1+C2 dan Model C tetap DISEPAKATI; rincian/izin tidak otomatis final |

Register tetap DT-001–DT-036: **tiga model DT-003/005/007 dipilih, 33 DT lain belum final**. Ini bukan penutupan rincian penetapan OPD DT-005.

G0: keputusan dapat masuk konsolidasi **SIAP DIAJUKAN UNTUK PENINJAUAN**, belum disetujui. G1: **BELUM LULUS, izin coding lokal BELUM DIBERIKAN**. G2: **BELUM DINILAI**, rincian desain/katalog perlu cukup jelas. G3: **BELUM DINILAI**, semua T belum dijalankan. G4/G6: **BELUM DINILAI**. G5: **BELUM LULUS**, mandat/dasar/akses/izin data nyata belum ada. G7: **BELUM LULUS**, produksi belum disetujui. Hosting/kapasitas **BELUM DAPAT DINILAI**.

Hasil hanya Markdown dan ZIP terverifikasi. Tidak ada kode/API/UI/backend/frontend/test otomatis/migrasi/seeder/tabel/skema/database/dependensi, query/Excel/staging nyata/rekonsiliasi/merge/data pribadi, konfigurasi kewenangan operasional, akses server/OPD/OSS/Dukcapil, deploy/backup/restore/load test.

## DT-009 — Bukti dan koreksi Model C+B2+V2+K2

**6 November 2026 — pemilik produk menetapkan DT-009 Model C + B2 + V2 + K2, FINAL pada tingkat MODEL BISNIS.** Ini bukan penetapan daftar dokumen resmi, nama OPD, ambang risiko, masa retensi atau izin implementasi. Seluruh KB-01–KB-18 dan model DT-003 B A3+B1+C2, DT-005 C+F+H2 serta DT-007 C dipertahankan.

Sumber: mandat pemilik produk pada lampiran chat finalisasi DT-009, sidik SHA-256 `EF5E3B52D0EE0BB5DD2D7835D04A3F074417A8727B30F308D0806455C303157E`. Semua 30 RB dan 30 T di bawah memakai rumusan mandat, tanpa perubahan substansi; seluruh T **spesifikasi penerimaan mendatang, belum dijalankan**. Nomor KB/DT lama tidak diubah dan tidak membuat keputusan turunan baru yang dianggap disetujui.

### Komponen model dan batasnya

| Komponen | Keputusan model | Batas yang harus dijaga |
| --- | --- | --- |
| C | Bukti proporsional, berversi dan koreksi berjejak | Pengujian kecukupan butuh katalog sah, bukan penilaian bebas tanpa sumber |
| B2 | Standar per kelompok klaim/field, objek, risiko dan sensitivitas | Jenis dokumen, kecukupan dan masa berlaku operasional MENUNGGU PENETAPAN, bukan semua UMKM wajib semua dokumen |
| V2 | Nilai resmi lama berlaku selama masih sah; pembatasan karena konflik/pencabutan/kedaluwarsa/risiko material memerlukan dasar/alasan sah | Usulan baru bukan penimpa/pencabut otomatis; penolakan tidak menghidupkan kembali nilai tidak sah |
| K2 — komponen model | Empat jalur K1 administratif, K2 perubahan fakta, K3 historis, K4 konflik/risiko tinggi | **Komponen K2 berarti paket empat jalur**, berbeda dari nama jalur K2 saja. Pergantian pemilik OPD tetap H2 DT-005 |

### B2 — katalog bukti dan keputusan penilaian

[Katalog 16 kelompok klaim pada kamus](kamus-data-mvp-kb09.md#katalog-bukti-per-kelompok-klaim--dt-009) mencakup identitas Orang, Badan Usaha, hubungan pihak–Unit, nama/identitas Unit, lokasi, kegiatan/klasifikasi, referensi NIB/izin, produk/merek, bahan, peralatan, kapasitas, realisasi, modal, aset, omzet dan tenaga kerja.

Setiap kelompok memuat objek/klaim, identitas field, tujuan, kategori utama/pendukung **USULAN**, relevansi, risiko/sensitivitas, fungsi/pengesah DT-005, versi/masa katalog, sumber/versi bukti, status penetapan dan dampak DT-007. Semua kategori yang belum resmi berlabel **USULAN/MENUNGGU PENETAPAN**. Penanda BKT hanya baris katalog, bukan keputusan baru atau dokumen wajib tambahan.

Bukti harus terkait objek/klaim/field serta versi yang tepat, sumber/referensi, waktu dan periode yang dibuktikan. Waktu penerimaan, terbit/berlaku, periode fakta dan waktu keputusan berbeda. Kedaluwarsa/relevansi dinilai terhadap objek/klaim/periode menurut ketentuan sah; jangan mengarang masa berlaku atau menganggap tanggal hari ini menentukan semua bukti sejarah.

Hasil penilaian konseptual: **MEMADAI, PERLU PELENGKAPAN, TIDAK SESUAI, KONFLIK, BELUM DAPAT DINILAI**. Tidak ada katalog sah → BELUM DAPAT DINILAI, bukan lulus otomatis. MEMADAI untuk satu klaim bukan pengesahan nilai atau klaim lain. Pemeriksaan bukti dan pengesahan nilai berbeda keputusan; boleh dijalankan petugas yang sama jika mandat sah dan pemisahan tugas dipenuhi, **bukan kewajiban dua pengesah baru**.

B1 DT-003 tetap dokumen formal relevan sebagai bukti utama pengesahan induk. NIB tidak wajib untuk draf/pengajuan/pengesahan induk; bukti formal alternatif harus memenuhi standar sah B1/C2, tanpa pelonggaran ke bukti sembarang. Draf minimum A3 tetap; paket C2 oleh verifikator berbeda dari pembuat, tidak mengesahkan seluruh field/sektor. Nomor NIB di Excel bukan bukti terverifikasi dan dokumen identitas sendiri bukan bukti kepemilikan Unit.

### Empat jalur koreksi data

| Jalur | Makna dan contoh sintetis | Syarat/batas |
| --- | --- | --- |
| K1 — Administratif | Salah tulis/format yang terbukti tidak mengubah substansi fakta | Periksa objek/klaim/versi dan dampak. Perubahan makna identitas/kepemilikan tidak boleh disamarkan sebagai K1 |
| K2 — Perubahan fakta | Perpindahan lokasi, perubahan hubungan pengelola atau kegiatan | Tanggal/periode efektif, klaim/bukti relevan, rujukan nilai/relasi lama tetap |
| K3 — Koreksi historis | Omzet periode lampau terbukti keliru | Koreksi merujuk periode/versi yang tepat; nilai semula/keputusan/audit tetap terlacak, tanpa menimpa periode lain |
| K4 — Konflik/risiko tinggi | Pertentangan bukti/identitas atau sengketa pemilik/pengelola usaha | Pemeriksaan/penyelesaian sesuai risiko dan kewenangan. Sengketa substansi ke pemilik field, kewenangan organisasi ke jalur KB-08; tidak memberi admin hak putus |

Koreksi selalu menarget objek/field/nilai/versi dasar dan menyatakan alasan, sumber/bukti serta tanggal/periode yang relevan. K1–K3 **tidak otomatis memerlukan dua pengesah**; satu petugas pemilik field dengan mandat aktif cukup untuk perubahan biasa KB-07 setelah prasyarat dipenuhi. K4 juga **bukan otomatis dua tanda tangan**; prosedur/otoritas disesuaikan jenis sengketa, risiko dan mandat sah yang rinciannya masih terbuka.

Pengusul yang juga punya mandat pengesahan field dapat bertindak hanya dalam hak sahnya; status pemasok/pembuat/admin saja tidak cukup. Larangan pembuat mengesahkan profil awal sendiri KB-05 tetap. Pengesah kehilangan mandat tidak boleh memberi keputusan baru. Sengketa substansi pihak/usaha berbeda dari sengketa **siapa OPD pemilik field**; yang terakhir mengikuti jalur organisasi KB-08 dan perubahan melalui H2 DT-005, bukan K1–K4.

### V2 — aturan nilai efektif dan penggunaan

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

Pembatasan penggunaan V2 berbeda dari status usulan koreksi atau penghapusan status historis. Konflik aktif relevan tetap penghalang kesimpulan positif agregasi DT-007, **meskipun nilai lama masih tersimpan dan belum ditimpa**. Jangan menunggu keputusan pembatasan untuk menyatakan konflik relevan seolah tidak ada pada agregasi, atau menganggap penahanan agregat sama dengan menghapus nilai resmi.

Perubahan fakta K2 dan pembetulan periode K3 dibedakan: tanggal/periode efektif fakta tidak diganti dengan waktu input/persetujuan. Koreksi historis dapat memengaruhi penilaian lingkup/periode yang relevan, dengan rujukan hasil baru dan jejak hasil/keputusan sebelumnya tetap, tanpa menulis ulang audit lama.

### Status usulan koreksi dan transisi

Kontrak status konseptual: **DRAF, DIAJUKAN, DALAM PEMERIKSAAN, PERLU PERBAIKAN, DALAM SENGKETA, DISETUJUI, DITOLAK, DIBATALKAN**. Ini bukan enum database final dan bukan status registrasi, field, sektor atau hasil agregasi DT-007. Enam status kasus konflik KB-08 dan status permohonan layanan lama juga tetap proses berbeda.

[Tata kelola transisi DT-009](04-tata-kelola-data.md#transisi-usulan-koreksi--dt-009) memuat rancangan 14 transisi, masing-masing asal/tujuan, aktor/kewenangan, bukti minimum konseptual, pemblokir, tindakan terhadap nilai efektif, alasan dan audit/versi. Rincian hak pembatalan/penanganan kasus/prosedur pelaksanaan tetap menunggu penetapan; tabel bukan izin operasional.

DISETUJUI berarti keputusan dan penerapan versi/efektif yang relevan berhasil konsisten dengan audit, bukan nilai berlaku lebih awal dari tanggal efektif. DITOLAK/DIBATALKAN tidak menghapus sejarah atau otomatis memulihkan nilai yang tidak sah. Pembatalan usulan tidak otomatis menutup kasus sengketa/pembatasan independen. Revisi keputusan yang telah sah mengikuti keputusan korektif baru KB-08, bukan mengubah jejak keputusan sebelumnya.

### Aturan bisnis — 30 RB-DT009

| Kode | Rumusan dari mandat pemilik produk |
| --- | --- |
| RB-DT009.01 | DT-009 menggunakan Model C+B2+V2+K2. |
| RB-DT009.02 | Bukti selalu dikaitkan dengan objek dan klaim tertentu. |
| RB-DT009.03 | Standar bukti ditentukan menurut kelompok klaim/field, objek, risiko, dan sensitivitas. |
| RB-DT009.04 | Katalog bukti harus mempunyai versi dan masa berlaku yang dapat ditelusuri. |
| RB-DT009.05 | Jenis dokumen wajib resmi tidak boleh ditetapkan tanpa dasar yang sah. |
| RB-DT009.06 | Pemeriksaan bukti dan pengesahan nilai merupakan keputusan berbeda. |
| RB-DT009.07 | Bukti harus mempunyai sumber, waktu, referensi dan hubungan ke klaim yang diperiksa. |
| RB-DT009.08 | Kecukupan bukti harus diuji terhadap katalog yang berlaku. |
| RB-DT009.09 | Tidak adanya katalog sah menghasilkan belum dapat dinilai, bukan lulus otomatis. |
| RB-DT009.10 | NIB bukan syarat wajib pengesahan induk; bukti formal lain yang sah dapat memenuhi B1. |
| RB-DT009.11 | Nomor referensi dalam Excel tidak otomatis menjadi bukti formal yang terverifikasi. |
| RB-DT009.12 | Bukti identitas pihak tidak otomatis membuktikan hubungan kepemilikan usaha. |
| RB-DT009.13 | Koreksi selalu ditujukan pada nilai/field, objek, dan versi yang jelas. |
| RB-DT009.14 | Koreksi dikelompokkan menjadi K1, K2, K3 dan K4. |
| RB-DT009.15 | K1 menangani kesalahan administratif tanpa perubahan substansi fakta. |
| RB-DT009.16 | K2 menangani perubahan fakta dan tanggal/periode efektifnya. |
| RB-DT009.17 | K3 menangani koreksi historis tanpa menghapus riwayat semula. |
| RB-DT009.18 | K4 menangani konflik atau risiko tinggi melalui otoritas yang sesuai. |
| RB-DT009.19 | Perubahan field biasa cukup satu pengesah berwenang sesuai KB-07. |
| RB-DT009.20 | Pemasok data, pembuat profil dan admin teknis tidak otomatis menjadi pengesah field. |
| RB-DT009.21 | Nilai resmi lama tetap berlaku selama masih sah dan tidak dibatasi menurut V2. |
| RB-DT009.22 | Konflik, pencabutan, kedaluwarsa, atau risiko material dapat membatasi penggunaan nilai lama secara beralasan. |
| RB-DT009.23 | Usulan koreksi tidak otomatis menimpa nilai resmi yang berlaku. |
| RB-DT009.24 | Persetujuan koreksi membentuk nilai efektif sesuai tanggal/periode yang sah. |
| RB-DT009.25 | Usulan yang didasarkan pada versi kedaluwarsa harus diperiksa ulang sebelum diputuskan. |
| RB-DT009.26 | Sengketa substansi field diselesaikan pemilik field; sengketa kepemilikan field melalui jalur organisasi KB-08. |
| RB-DT009.27 | Perubahan OPD pemilik field mengikuti H2 DT-005, bukan jalur koreksi data K1–K4. |
| RB-DT009.28 | Akses bukti sensitif dan salinannya harus dibatasi menurut KB-11. |
| RB-DT009.29 | Keputusan, alasan, bukti, versi, tanggal dan pelaku harus terlacak sesuai KB-12. |
| RB-DT009.30 | Keputusan model DT-009 tidak mengizinkan coding, pemrosesan data nyata atau deployment. |

### Skenario penerimaan — 30 T-DT009

**Seluruh skenario belum dijalankan.** “Dapat diproses/disahkan” pada hasil mengandaikan persyaratan katalog/kewenangan/bukti/versi/efektif yang sah, bukan izin data nyata atau pelonggaran B1.

| Kode | Skenario | Hasil yang diharapkan |
| --- | --- | --- |
| T-DT009.01 | Bukti relevan dengan objek dan klaim, katalog berlaku lengkap | dapat dinilai kecukupannya. |
| T-DT009.02 | Bukti merujuk objek berbeda | tidak boleh dipakai mengesahkan klaim. |
| T-DT009.03 | Bukti tidak mempunyai sumber atau referensi minimum | perlu pelengkapan. |
| T-DT009.04 | Katalog bukti untuk klaim belum disahkan | belum dapat dinilai. |
| T-DT009.05 | NIB tidak ada, bukti formal alternatif memenuhi standar induk | registrasi induk tetap dapat diproses. |
| T-DT009.06 | Nomor NIB hanya tercantum dalam Excel historis | belum dianggap terverifikasi. |
| T-DT009.07 | Dokumen identitas Orang tersedia tanpa bukti hubungan usaha | hubungan usaha tidak otomatis disahkan. |
| T-DT009.08 | Bukti untuk dua klaim berbeda | kecukupan dinilai per klaim. |
| T-DT009.09 | Bukti tidak berlaku untuk periode yang diklaim | tidak dianggap memadai bagi periode tersebut. |
| T-DT009.10 | Bukti resmi dan sumber lain saling bertentangan | memerlukan pemeriksaan konflik. |
| T-DT009.11 | Salah ketik tanpa perubahan substansi | menggunakan jalur K1. |
| T-DT009.12 | Usaha berpindah lokasi | menggunakan jalur K2 dan tanggal efektif. |
| T-DT009.13 | Omzet periode lalu terbukti keliru | menggunakan jalur K3 pada periode bersangkutan. |
| T-DT009.14 | Dua pihak bersengketa soal kepemilikan usaha | menggunakan jalur K4. |
| T-DT009.15 | Koreksi biasa diajukan dan disahkan satu pengesah berwenang | dapat disahkan jika syarat terpenuhi. |
| T-DT009.16 | Pengusul tidak memiliki hak pengesahan | tidak boleh mengesahkan usulannya. |
| T-DT009.17 | Admin teknis mencoba mengesahkan nilai bisnis | ditolak. |
| T-DT009.18 | Nilai lama sah, usulan baru sedang diperiksa | nilai lama tetap efektif. |
| T-DT009.19 | Nilai lama memiliki konflik material yang sah dicatat | pemakaian pada lingkup terdampak dapat dibatasi. |
| T-DT009.20 | Usulan koreksi ditolak dan nilai lama masih sah | nilai lama tetap efektif; penolakan tercatat. |
| T-DT009.21 | Usulan disetujui dengan tanggal efektif mendatang | nilai baru tidak diberlakukan lebih awal. |
| T-DT009.22 | Koreksi historis disetujui | riwayat lama tetap ditelusuri. |
| T-DT009.23 | Dua usulan menyasar versi resmi sama, salah satunya sudah disahkan | usulan lain memerlukan pemeriksaan ulang versi. |
| T-DT009.24 | Pengesah kehilangan mandat saat pemeriksaan | tidak dapat memberi keputusan baru. |
| T-DT009.25 | Pemilik field berubah melalui H2 saat usulan tertunda | penanganan mengikuti transisi mandat. |
| T-DT009.26 | Sengketa pemilik OPD diselesaikan sebagai koreksi K1 | tidak diperbolehkan; gunakan KB-08/H2. |
| T-DT009.27 | Pengguna tanpa hak membuka dokumen identitas | akses ditolak. |
| T-DT009.28 | Audit pengesahan/koreksi kritis gagal | perubahan tidak dinyatakan berhasil sesuai KB-12. |
| T-DT009.29 | Koreksi data memengaruhi status sektoral/agregasi | evaluasi DT-007 diperbarui sesuai lingkup, bukan otomatis disahkan. |
| T-DT009.30 | Pemeriksaan konsistensi keputusan | KB-07/08/11/12 dan DT-003/005/007 tetap terjaga. |

### Dua puluh dua kasus batas

Contoh di bawah sintetis pada tingkat keadaan bisnis, tanpa nama/nomor/alamat pribadi nyata.

| No. | Kasus | Perlakuan dan batas |
| --- | --- | --- |
| 1 | UMKM tanpa NIB | Bukti formal alternatif wajib memenuhi B1/katalog sah untuk C2; tidak membuat NIB wajib atau mengesahkan seluruh field |
| 2 | Nomor NIB dalam sumber historis | Nomor/format bukan hasil pemeriksaan formal atau bukti legalitas terverifikasi |
| 3 | Identitas tanpa bukti hubungan usaha | Nilai identitas dan relasi dinilai per klaim; tidak mengesahkan kepemilikan dari bukti identitas saja |
| 4 | Dua sumber bertentangan | Periksa konflik substansi melalui pemilik field/K4; sumber berlabel resmi tidak otomatis memenangkan klaim di luar cakupannya |
| 5 | Bukti kedaluwarsa | Uji relevansi pada klaim/periode dan standar sah; tidak dianggap memadai untuk periode yang tidak dicakup, tanpa durasi buatan |
| 6 | Koreksi nama tanpa substansi | K1 jika terbukti hanya administratif; pengalihan subjek/arti nama bukan otomatis salah ketik |
| 7 | Perpindahan lokasi | K2 dengan tanggal efektif dan riwayat lokasi lama; alamat pemilik tetap bukan lokasi otomatis |
| 8 | Pembetulan omzet periode lama | K3 untuk periode/definisi/versi tepat; nilai asli/keputusan tetap dapat ditelusuri |
| 9 | Sengketa pemilik/pengelola usaha | K4 pada klaim substansi; pemilik field bertindak sesuai mandat, bukan admin atau putusan hukum eksternal oleh aplikasi |
| 10 | Pemasok mengoreksi field OPD lain | Usul hanya jika berhak, pengesahan mengikuti pemilik/mandat aktif DT-005 |
| 11 | Admin teknis mencoba mengesahkan | Ditolak sebagai hak teknis; tidak mendapat pengesahan bisnis dari akses administrasi |
| 12 | Nilai lama sah saat koreksi menunggu | Tetap efektif jika sah dan tanpa pembatasan; kandidat tidak otomatis menimpa |
| 13 | Nilai lama bersengketa material | Penghalang relevan DT-007 menahan kesimpulan positif; pembatasan V2 harus beralasan/berwenang/berlingkup/audit |
| 14 | Usulan ditolak, nilai lama tidak berlaku | Tidak otomatis memulihkan nilai lama atau menghapus pembatasan |
| 15 | Pengesah kehilangan mandat | Tidak boleh memberi keputusan baru; ganti petugas sesuai mandat sah dan riwayat tetap |
| 16 | Pemilik berubah melalui H2 | Alih organisasi bukan K1–K4; antrean ditangani prosedur transisi DT-005, tidak otomatis disahkan |
| 17 | Dua usulan memakai versi dasar sama | Setelah satu sah, yang lain diperiksa ulang terhadap versi terbaru; bukan ditimpa otomatis atau dianggap langsung sengketa K4 |
| 18 | Bukti sensitif/akses terbatas | Baca/unduh/ekspor/penilaian dibatasi tugas/tujuan/objek/izin; nilai/URL/log tidak membocorkan bukti mentah |
| 19 | Katalog belum disahkan | BELUM DAPAT DINILAI, bukan lulus dari kosong atau memilih dokumen wajib sendiri |
| 20 | Koreksi memengaruhi agregasi | Evaluasi ulang lingkup/aturan/versi DT-007, simpan hasil/alasan; bukan pengesahan profil otomatis |
| 21 | Bukti datang setelah pengajuan | Catat sumber/versi/waktu diterima sebenarnya dan penilaian baru; jangan memundurkan waktu atau mengubah audit keputusan lama |
| 22 | Satu bukti untuk beberapa klaim | Rujuk bukti yang sama, nilai kecukupan/izin setiap klaim; satu MEMADAI tidak mengesahkan klaim lain |

### Akses, audit dan hubungan keputusan lama

DT-005 C+F+H2 mengikat pemilik field/cakupan/waktu efektif dan penugasan petugas; pemasok/pencatat pertama/koordinator/admin bukan pengesah global. Dua penetapan beririsan tidak memberi hak ganda. H2 saat usulan tertunda memerlukan pemeriksaan mandat/versi/transisi, bukan pengesahan otomatis.

KB-11 membatasi bukti sensitif dan salinannya menurut tugas/tujuan/objek/hak, memisahkan baca/unduh/ekspor/koreksi/sahkan/administrasi. Rujukan bukti tidak membocorkan isi/file/tautan privat atau memberi akses karena dipakai beberapa klaim. Tidak menyimpan NIK/kredensial/dokumen mentah dalam audit/error. Retensi/penahanan/penyusutan mengikuti dasar/JRA sah; tidak menetapkan durasi atau menyimpan semua data pribadi selamanya.

Perubahan kritis nilai/versi/keputusan/metadata penilaian/pembatasan yang relevan dan audit operasional KB-12 harus berhasil atau batal bersama. Audit kritis gagal → perubahan tidak dinyatakan berhasil; rollback bukan keberhasilan palsu. Pengiriman salinan terlindungi pascacommit tetap retry/rekonsiliasi KB-12, bukan membatalkan bisnis sah diam-diam. Teknis penyimpanan file/kriptografi/retensi/operasi tidak diputus lewat katalog ini.

DT-007 C tetap memakai katalog sah/versi/efektif dan penghalang relevan untuk status induk/field/sektor/agregasi terpisah. Penilaian bukti bukan pengesahan, pengesahan sebagian bukan seluruh profil dan evaluasi ulang bukan pengesah baru.

### Hal terbuka, status sumber lama dan gerbang

DT-009 **final model C+B2+V2+K2**; dokumen formal yang diterima per klaim, standar kecukupan/masa berlaku, klasifikasi/ambang risiko operasional, otoritas/prosedur K4 nyata, retensi/akses dokumen dan nama OPD/penugasan nyata **MENUNGGU PENETAPAN**. DT-006/008/011/012/019/033 tetap status sumber; DT-004, rincian penetapan DT-005 serta DT-013 terkait JRA juga tidak ditutup.

Penyebutan DT-009 DIUSULKAN/bukti belum final pada bagian KB/DT-003/005/007 dan audit terdahulu dibaca sebagai riwayat atau rincian operasional, bukan pilihan model terbaru. Rumusan rinci sebelumnya tetap utuh. Register tetap DT-001–DT-036: **empat model DT-003/005/007/009 dipilih, 32 DT lain belum final**; tidak membuat keputusan turunan baru yang dianggap disetujui. MVP registri/pangan serta lingkup aktivasi skala/impor DT-031/032 tidak diperluas dari katalog bukti.

G0 keputusan model dapat masuk konsolidasi **SIAP DIAJUKAN UNTUK PENINJAUAN**, belum persetujuan baseline. G1 **BELUM LULUS, izin coding lokal BELUM DIBERIKAN**. G2 **BELUM DINILAI**, katalog/kewenangan/kontrak nilai berversi perlu rincian cukup. G3 **BELUM DINILAI**, semua T-DT009 belum dijalankan. G4/G6 **BELUM DINILAI**. G5 **BELUM LULUS**, data nyata memerlukan dasar/mandat/akses/bukti/izin. G7 **BELUM LULUS**, produksi BELUM DISETUJUI. Hosting/kapasitas **BELUM DAPAT DINILAI**.

Hanya Markdown dan ZIP. Tidak ada kode/API/frontend/backend/ORM/test aplikasi/migrasi/tabel/database/seeder/dependensi, akses/query database/PDN/cPanel/OPD/OSS/Dukcapil/layanan eksternal, pengolahan/impor data pribadi/Excel/staging/merge/sinkronisasi, deploy/backup/restore/load test atau perubahan konfigurasi operasional.

## DT-011 — Otorisasi Model C+D1+M1+E1

**6 November 2026 — MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA.** Pemilik produk memilih tepat **C+D1+M1+E1**, bukan D2/M2/E2. Sumber: mandat lampiran chat dokumentasi DT-011, SHA-256 `864585E349B1655B6580D989692897B1E096E5A5CA2CEF3C691875C6FAE87A79`. Katalog hak dasar OPD, batas ekspor, hak sensitivitas dan mandat aktual belum ditetapkan secara operasional.

**KONFLIK KEBIJAKAN TERBUKA:** E1 literal otomatis memberi unduh/ekspor dari baca, sedangkan KB-11 RB-11.07 memisahkan izin tindakan dan RB-11.21/T11-14 mensyaratkan izin tersendiri/menolak ekspor tanpa izin. Konflik ini menghalangi persetujuan implementasi unduh/ekspor terdampak. Codex tidak menyelesaikannya dengan menghapus KB-11 atau mengubah E1 diam-diam. Seluruh KB-01–18 dan DT-003/005/007/009 tetap.

### Makna C, D1, M1 dan E1

| Pilihan | Makna yang dicatat | Batas yang tidak dihapus |
| --- | --- | --- |
| C | RBAC + ABAC + mandat aktif | RBAC = hak berdasarkan peran; ABAC = atribut/konteks seperti pengguna, field, wilayah, tujuan, sensitivitas dan waktu. Peran saja tidak cukup |
| D1 | Akun memperoleh hak dasar berdasarkan keterkaitan OPD | Keterkaitan sah/diaudit dan katalog dasar ditetapkan. Bukan otomatis sensitif/pengesahan/administrasi bisnis |
| M1 | Izin efektif berasal dari gabungan seluruh penugasan aktif | Hanya yang sah/belum dicabut, cakupan asal tetap melekat dan larangan eksplisit tetap |
| E1 | **Hak baca secara otomatis mencakup hak unduh dan ekspor** | Hanya objek/proyeksi yang boleh dibaca, bukan seluruh database; konflik KB-11 belum diputus |

### Model evaluasi otorisasi konseptual

Nilai identitas pengguna yang telah diautentikasi dan status akun, peran relevan, OPD asal/keterkaitan/penugasan, mandat aktif, kode entitas/field, pemilik field, wilayah/sektor/objek, tindakan, tujuan/dasar, sensitivitas, tanggal/masa berlaku, larangan pemisahan tugas serta konflik/pencabutan/pembatasan. Syarat kewenangan wajib yang tidak tersedia **tidak boleh otomatis diizinkan**.

D1 memungkinkan akun baru terkait OPD mendapat fungsi dasar non-sensitif yang kelak diizinkan katalog sah. Katalog aktual belum ada; jangan mengarang paket atau mengatakan semua akun selamanya tanpa hak dasar. Untuk fungsi dasar yang katalog sahnya tidak mensyaratkan mandat tambahan per orang, jangan menciptakan kewajiban itu sehingga D1 berubah menjadi D2. Tindakan yang memerlukan mandat khusus tetap wajib bermandat. Keterkaitan OPD bukan cukup isian dari formulir.

M1 menghimpun seluruh izin aktif/sah/belum dicabut **beserta cakupan dan syarat asalnya**, bukan memilih satu penugasan eksklusif sepanjang sesi. Hak field pertama di wilayah pertama dan field kedua di wilayah kedua tidak menciptakan hak silang field pertama di wilayah kedua. Satu permintaan dapat memakai beberapa sumber sah untuk bagian yang masing-masing dicakup; setiap tindakan/objek/field harus didukung konteks hak utuh, bukan gabungan potongan atribut yang tidak pernah diberikan bersama.

Larangan pembuat mengesahkan profil awal buatannya sendiri tetap walau gabungan peran mencakup pembuat/pengesah. Pengesah awal bukan pengesah semua field; baca bukan pengesahan. Pemasok/admin/koordinator bukan hak global. Penugasan berakhir/dicabut dikeluarkan dari hak efektif, termasuk saat proses dan penyerahan file tertunda. Konflik tugas tidak diselesaikan dengan memilih gabungan izin yang lebih tinggi.

### Enam peran dan koordinator

Pemilik Field adalah **OPD** penanggung jawab kode/cakupan/waktu, Pengesah Field adalah **orang** bermandat aktif. Bedakan pemasok, pembuat A3, pengesah awal B1/C2 berbeda pembuat, pengesah field dan admin teknis. Koordinator fungsi koordinasi tambahan, bukan pengesah global. OPD/petugas nyata belum ditetapkan.

[Matriks DT-011](matriks-kewenangan-mvp-kb09.md#model-hak-cd1m1e1--dt-011) memuat 19 tindakan dan enam kelompok pelaksana (pemasok, pembuat, awal, field, koordinator, admin); pemilik OPD bukan akun superuser. Pemasok luar/pelaku dapat tanpa akun, tindakan melalui petugas internal KB-06. Tidak membuat akun masyarakat baru.

### E1 dan ruang keputusan yang belum selesai

E1 tetap **otomatis baca → unduh/ekspor**, bukan izin terpisah yang diganti namanya E1. Namun E1 literal tidak dapat dinyatakan memenuhi RB-11.07 dan RB-11.21/T11-14. Menambahkan persetujuan ekspor tersendiri sebagai solusi adalah **KEBUTUHAN KEPUTUSAN LANJUTAN**, bukan pilihan pengganti yang dianggap sudah disetujui. Ketiadaan keputusan bukan alasan melemahkan salah satu kebijakan.

[Delapan konteks dan sepuluh dimensi E1](04-tata-kelola-data.md#dampak-e1--dt-011) membedakan baca record, field tersamar, bukti, unduh bukti terlihat, ekspor sejumlah record, ekspor sensitif, ekspor agregat dan penyerahan file. E1 tidak memperluas baris/field/objek/wilayah/proyeksi yang boleh dibaca. Field tersembunyi tidak dibuka lewat bukti/status/file; hak baca profil bukan hak semua bukti. Hak pembaca bukan hak setiap penerima file/tautan, baca agregat internal bukan izin publikasi atau identifikasi ulang.

Tujuan, sensitivitas, penerima, masa/pencabutan mandat, audit dan pengambilan massal perlu keputusan operasional sah. Tidak mengarang batas volume, paket OPD atau hak data pribadi. **Jangan mengimplementasikan ekspor/unduh terdampak sampai konflik diputus pemilik produk.** Tidak menyatakan data sensitif/ekspor massal siap dilaksanakan.

### Katalog tindakan

19 label konseptual, bukan API/policy/middleware/permission database final: `VIEW_AGGREGATE`, `VIEW_RECORD`, `VIEW_SENSITIVE`, `VIEW_EVIDENCE`, `CREATE_DRAFT`, `EDIT_DRAFT`, `SUBMIT`, `PROPOSE_CHANGE`, `REVIEW_EVIDENCE`, `APPROVE_INITIAL`, `APPROVE_FIELD`, `DECIDE_CORRECTION`, `HANDLE_CONFLICT`, `DOWNLOAD_EVIDENCE`, `EXPORT_DATA`, `MANAGE_ASSIGNMENT`, `APPLY_AUTHORITY_CHANGE`, `VIEW_AUDIT`, `MANAGE_TECHNICAL`.

[Dua tabel katalog tindakan](matriks-kewenangan-mvp-kb09.md#katalog-19-tindakan--mandat-dan-sasaran) memuat per tindakan: peran pengusul, syarat mandat, entitas/field, pemilik bila perlu, scope wilayah/sektor/objek, sensitivitas, tujuan, tanggal/masa, larangan tugas, event audit dan penolakan. [Metadata kamus](kamus-data-mvp-kb09.md#metadata-izin-dan-penugasan--dt-011) mencatat sumber D1/M1/cakupan/versi dan E1 yang masih konflik; tidak menciptakan izin nyata.

### Aturan bisnis — 30 RB-DT011

| Kode | Rumusan mandat pemilik produk |
| --- | --- |
| RB-DT011.01 | DT-011 menggunakan Model C+D1+M1+E1. |
| RB-DT011.02 | Otorisasi menggabungkan peran, atribut, mandat aktif dan konteks tindakan. |
| RB-DT011.03 | Kewenangan harus dievaluasi menurut pengguna, tindakan, objek, field, cakupan, tujuan, sensitivitas dan waktu. |
| RB-DT011.04 | D1 memberikan hak dasar berdasarkan keterkaitan OPD yang sah dan katalog izin yang ditetapkan. |
| RB-DT011.05 | Hak dasar D1 tidak otomatis menjadi hak pengesahan, hak membaca data sensitif, atau hak administrasi bisnis. |
| RB-DT011.06 | Paket hak dasar setiap fungsi OPD harus ditetapkan sebelum digunakan secara nyata. |
| RB-DT011.07 | M1 menghimpun izin dari seluruh penugasan yang masih aktif dan sah. |
| RB-DT011.08 | Setiap izin yang digabung melalui M1 tetap tunduk pada cakupan asalnya. |
| RB-DT011.09 | Izin kedaluwarsa, dicabut, atau di luar mandat tidak boleh ikut dalam hak efektif. |
| RB-DT011.10 | Penggabungan izin tidak boleh melanggar pemisahan tugas atau larangan eksplisit. |
| RB-DT011.11 | Pembuat profil tidak boleh mengesahkan registrasi awal yang dibuatnya sendiri. |
| RB-DT011.12 | Pengesah awal tidak otomatis boleh mengesahkan seluruh field atau sektor. |
| RB-DT011.13 | Pengesahan field harus sesuai pemilik aktif dan mandat DT-005. |
| RB-DT011.14 | Pemasok data tidak otomatis memperoleh hak baca menyeluruh atau hak pengesahan. |
| RB-DT011.15 | Admin teknis tidak otomatis menjadi pengesah bisnis ataupun pemilik field. |
| RB-DT011.16 | Koordinator Registri Induk tidak otomatis mempunyai hak bisnis global. |
| RB-DT011.17 | Pengusulan perubahan, pemeriksaan bukti, pengesahan dan koreksi merupakan tindakan berbeda. |
| RB-DT011.18 | Hak atas bukti sensitif mengikuti klasifikasi dan tujuan sah sesuai KB-11. |
| RB-DT011.19 | E1 mengaitkan hak baca dengan kemampuan unduh dan ekspor menurut objek yang dapat dibaca. |
| RB-DT011.20 | E1 tidak boleh ditafsirkan sebagai hak otomatis atas field, objek atau wilayah yang tidak boleh dibaca. |
| RB-DT011.21 | Risiko E1 terhadap ekspor massal, sensitivitas dan tujuan penggunaan harus dicatat sebagai keputusan implementasi yang masih perlu penyelesaian. |
| RB-DT011.22 | Akses terhadap profil tidak otomatis membolehkan pembukaan nilai tersembunyi melalui bukti, status atau hasil ekspor. |
| RB-DT011.23 | Akses yang memerlukan mandat sah ditolak apabila mandat tidak tersedia atau sudah berakhir. |
| RB-DT011.24 | Perubahan pemilik field H2 harus memengaruhi hak yang relevan sesuai tanggal efektifnya. |
| RB-DT011.25 | Penanganan koreksi K1–K4 mengikuti kewenangan dan aturan DT-009. |
| RB-DT011.26 | Status induk, field dan sektor DT-007 tidak menjadi celah pengungkapan data sensitif. |
| RB-DT011.27 | Tindakan administratif dan aktivitas akses/ekspor yang relevan harus dapat diaudit sesuai KB-12. |
| RB-DT011.28 | Penolakan akses tidak boleh mengungkap informasi sensitif yang tidak berhak diketahui. |
| RB-DT011.29 | Jika pilihan D1/M1/E1 bertentangan dengan kontrol KB-11, konflik wajib dicatat dan tidak boleh dianggap selesai tanpa keputusan sah. |
| RB-DT011.30 | Keputusan model DT-011 tidak memberi izin coding, penggunaan data nyata, akses server atau deployment. |

### Skenario penerimaan — 30 T-DT011

**Seluruh T belum dijalankan.** Hasil “mendapat hak/dapat dilakukan” bergantung katalog/mandat/konteks sah pada skenario, bukan bukti E1 sudah konsisten. T-DT011.19/29 menahan fungsi terkait yang kebijakannya belum selesai.

| Kode | Skenario | Hasil yang diharapkan |
| --- | --- | --- |
| T-DT011.01 | Akun baru terhubung ke OPD dengan katalog hak dasar sah | mendapat hak dasar D1 sesuai katalog. |
| T-DT011.02 | Akun baru tanpa katalog hak dasar sah | hak dasar bisnis yang belum ditetapkan tidak diberikan. |
| T-DT011.03 | Pengguna mempunyai dua penugasan aktif | izin M1 dihimpun tanpa menghilangkan batas masing-masing. |
| T-DT011.04 | Satu penugasan kedaluwarsa | izin dari penugasan tersebut tidak ikut digunakan. |
| T-DT011.05 | Mandat satu wilayah digunakan untuk objek wilayah lain | tindakan ditolak. |
| T-DT011.06 | Hak atas field sektor digunakan untuk mengesahkan field identitas | ditolak. |
| T-DT011.07 | Pembuat profil mencoba mengesahkan registrasi buatannya | ditolak meskipun mempunyai dua peran. |
| T-DT011.08 | Pengesah awal tanpa mandat field mencoba mengesahkan field sektor | ditolak. |
| T-DT011.09 | Pengesah field bermandat aktif memutus perubahan biasa | dapat dilakukan jika persyaratan lain terpenuhi. |
| T-DT011.10 | Pemasok data mengklaim hak pengesahan hanya karena memberikan Excel | ditolak. |
| T-DT011.11 | Admin teknis mencoba mengesahkan nilai | ditolak. |
| T-DT011.12 | Koordinator mencoba mengesahkan semua field tanpa mandat | ditolak. |
| T-DT011.13 | Pengguna mengusulkan koreksi field di luar kepemilikannya dengan hak usul sah | usulan dapat diterima, bukan langsung disahkan. |
| T-DT011.14 | Pengguna boleh melihat profil umum tetapi bukan NIK | NIK tetap tidak ditampilkan. |
| T-DT011.15 | Pengguna membuka dokumen bukti tanpa hak sensitif yang diperlukan | ditolak. |
| T-DT011.16 | Hak baca atas record terbatas digunakan untuk meminta ekspor seluruh registri | tidak boleh melampaui cakupan baca. |
| T-DT011.17 | Hak baca hanya atas field yang disamarkan | hasil unduh/ekspor tidak boleh memunculkan nilai tersembunyi. |
| T-DT011.18 | Pengguna mempunyai hak baca atas agregat internal | penggunaan dan ekspornya tetap tunduk pada aturan publikasi dan perlindungan pengungkapan. |
| T-DT011.19 | Pengguna meminta ekspor data massal yang berisiko tanpa kebijakan E1 operasional yang disahkan | konflik dicatat dan ekspor tidak diaktifkan. |
| T-DT011.20 | Hak akses dicabut ketika permintaan ekspor diproses | file tidak boleh diberikan berdasarkan mandat yang sudah tidak berlaku. |
| T-DT011.21 | Pengguna boleh melihat satu bukti tetapi meminta seluruh kumpulan bukti | tidak otomatis diperbolehkan. |
| T-DT011.22 | Admin teknis mencoba membaca isi bukti sensitif tanpa mandat khusus | ditolak. |
| T-DT011.23 | OPD pemilik field berubah melalui H2 | hak pengesahan mengikuti tanggal efektif dan penugasan sah. |
| T-DT011.24 | Pengesah lama mencoba memutus koreksi setelah kewenangan berakhir | ditolak. |
| T-DT011.25 | Usulan K4 ditangani petugas tanpa otoritas sengketa yang diperlukan | ditolak. |
| T-DT011.26 | Status agregasi mengandung alasan terkait dokumen identitas yang sensitif | detail disembunyikan dari pengguna tanpa hak. |
| T-DT011.27 | Penolakan akses terhadap record sensitif | respons tidak membocorkan isi field atau bukti. |
| T-DT011.28 | Audit kegiatan sensitif atau ekspor yang diwajibkan tidak dapat dipenuhi | tindakan tidak dinyatakan berhasil sesuai kontrol KB-12. |
| T-DT011.29 | Katalog D1 atau aturan E1 belum lengkap | keputusan implementasi terkait ditandai TERBUKA/BLOKIR, bukan dianggap otomatis aman. |
| T-DT011.30 | Audit konsistensi | tidak mengubah KB-01–KB-18 atau DT-003/005/007/009, dan tidak menganggap G1 disetujui. |

### Dua puluh empat kasus batas

Kasus sintetis tanpa data pribadi nyata.

| No. | Kasus | Perlakuan dan batas |
| --- | --- | --- |
| 1 | Akun baru memperoleh D1 | Jika keterkaitan/katalog OPD sah, hak dasar sesuai katalog, bukan sensitif/pengesahan otomatis |
| 2 | Akun baru tanpa katalog D1 | Hak dasar bisnis belum ditetapkan tidak diberikan; bukan akun permanen tanpa hak dasar |
| 3 | Beberapa mandat aktif | M1 menghimpun semuanya tanpa membuang batas asal atau memilih satu sesi eksklusif |
| 4 | Mandat dicabut | Izin sumber tersebut tidak ikut hak efektif; periksa lagi proses/hasil tertunda |
| 5 | M1 lintas sektor | Tidak menyilangkan atribut field/wilayah/sektor yang tidak pernah diberi bersama |
| 6 | Pembuat juga pengesah awal | Profil awal buatannya sendiri tetap ditolak walau punya dua peran |
| 7 | Awal juga pengesah field | Mandat field tersendiri harus sah; C2 tidak memberi semua field |
| 8 | Pemasok meminta baca luas | Memberi data bukan mandat baca seluruh registri; pemasok luar tetap melalui petugas |
| 9 | Admin meminta data sensitif | Hak teknis bukan isi bukti/NIK; mandat/dasar khusus tetap diperlukan |
| 10 | Koordinator meminta sahkan global | Koordinasi bukan pemilik semua nilai; penugasan bisnis lain tetap terbatas |
| 11 | Baca field umum | Nilai tersembunyi tidak muncul lewat file/bukti/status; E1 tidak memperluas proyeksi |
| 12 | Baca satu wilayah | Tidak meluas ke wilayah lain tanpa sumber izin sah yang mencakup bagian itu |
| 13 | Profil tanpa hak bukti | VIEW_RECORD bukan VIEW_EVIDENCE; tautan/ID bukan bukti izin |
| 14 | Ekspor field tersembunyi | Tidak diizinkan; E1 hanya dari proyeksi baca dan konflik operasional belum selesai |
| 15 | Ekspor massal | Konflik E1/KB-11 dicatat, fungsi tidak diaktifkan tanpa keputusan, tanpa ambang buatan |
| 16 | Ekspor agregat berisiko | Baca internal bukan publikasi; pengungkapan/tujuan/penerima perlu keputusan |
| 17 | Hak dicabut saat proses | File tidak diberikan berdasarkan mandat lama meski permintaan/pembuatan telah berjalan |
| 18 | Tautan bukti diteruskan | Penerima/hak/cakupan/waktu diperiksa; bukan tautan publik permanen atau izin otomatis |
| 19 | OPD berubah H2 | Hak relevan mengikuti efektif dan mandat sah saat aksi; pengesah lama setelah habis ditolak |
| 20 | Sengketa/koreksi K4 | Otoritas sengketa/field/risiko diperlukan; admin/koordinator bukan pengganti, H2 bukan K4 |
| 21 | Status DT-007 bocor | Detail alasan/bukti sensitif disembunyikan dari pembaca tanpa hak |
| 22 | Audit wajib gagal | Tindakan tidak dinyatakan berhasil; gangguan salinan pascacommit mengikuti KB-12 |
| 23 | Historis belum disahkan | Sumber/usulan bukan nilai resmi; baca registri bukan izin sumber/ekspor mentah |
| 24 | Tujuan berubah | Evaluasi ulang tujuan/dasar/scope/mandat; hak lama tidak otomatis untuk tujuan baru |

### Konflik dan Prasyarat DT-011 untuk G1

| Hubungan | Benturan/prasyarat | Status | Dampak | Keputusan/bukti yang diperlukan |
| --- | --- | --- | --- | --- |
| E1 ↔ RB-11.07/T11-14 | Baca otomatis memberi unduh/ekspor vs izin tindakan terpisah dan ekspor tanpa izin ditolak | KONFLIK KEBIJAKAN TERBUKA | Implementasi unduh/ekspor terdampak BLOKIR; bukan mengganti E1 | Keputusan pemilik produk tentang hubungan otomatis E1 dan KB-11 |
| E1 massal ↔ RB-11.21/T11-15 | Baca dalam scope bukan hak/persetujuan tersendiri ekspor massal | KONFLIK KEBIJAKAN TERBUKA | Massal tidak diaktifkan, tidak mengarang ambang atau menyatakan aman | Tujuan/volume/penerima/persetujuan dan konsistensi E1 |
| E1 agregat ↔ RB-11.22/T11-18 | Agregat internal tetap berisiko identifikasi ulang; bukan izin publikasi | KEBUTUHAN KEPUTUSAN LANJUTAN | Tidak mengizinkan publikasi/penyerahan otomatis | Kontrol pengungkapan/tujuan/penerima dan kaitan E1 |
| D1 ↔ KB-11 RB-11.04/05/06 | Paket dasar dari OPD sah mungkin ada, katalog aktual belum tersedia | PRASYARAT TERBUKA | Hak tak diketahui tidak diberikan, bukan mengganti D1 dengan D2 | Katalog dasar/afiliansi/cakupan/tujuan yang ditetapkan |
| M1 ↔ KB-05/11 dan DT-005 | Gabungan izin tidak boleh silang scope atau mengalahkan pemisahan tugas | PRASYARAT TERBUKA | Validasi izin utuh per tindakan; bukan M2 sesi eksklusif | Kontrak cakupan/masa/pencabutan/larangan dan validasi |
| D1/M1/E1 ↔ KB-12 | Model akses tidak menghapus audit transaksi/salinan terlindungi | KONTROL WAJIB TETAP, BELUM DIBUKTIKAN | Audit wajib gagal bukan berhasil; salinan pascacommit tetap KB-12 | Event/otoritas/kontrol dan bukti kemampuan, bukan konflik baru yang diputus Codex |
| D1/M1 ↔ DT-003 | Pembuat tidak mengesahkan induk sendiri, C2 bukan semua field | KENDALI LAMA TETAP | Dua peran tidak melewati larangan; D1 bukan mandat sahkan | Petugas/mandat aktual DT-006, katalog sah |
| D1/M1 ↔ DT-005 | Pemilik OPD berbeda pengesah orang, scope/efektif H2 tetap | KENDALI LAMA TETAP | Alih pemilik memengaruhi izin/antrean menurut efektif, sejarah terjaga | OPD/mandat nyata dan transisi penugasan |
| E1 ↔ DT-007 | Status/alasan agregasi dapat mengungkap identitas/bukti | PRASYARAT DAN KONFLIK TURUNAN TERBUKA | Status induk/field/sektor bukan hak semua isi; alasan sensitif dibatasi | Izin proyeksi/status/alasan dan turunan keluaran |
| C+D1+M1+E1 ↔ DT-009 | Bukti/penilaian/koreksi tidak memberi hak karena label proses | KENDALI LAMA TETAP; E1 BUKTI TERBUKA | B2/V2/K1–K4 dan otoritas K4 tetap, H2 berbeda | Katalog bukti/risiko/otoritas/akses nyata |

1. **D1:** paket dasar tiap fungsi OPD dan keterkaitan sah belum ditetapkan; paket tidak dikarang.
2. **M1:** penjagaan scope asal/masa/pencabutan/pemisahan tugas perlu validasi; bukan diganti sesi eksklusif.
3. **E1:** hubungan otomatis dengan pemeriksaan massal/bukti sensitif/publikasi/tujuan/penerima serta izin terpisah KB-11 perlu keputusan pemilik produk.
4. Nama OPD/pejabat/petugas/mandat aktual belum ada.
5. Dasar/tujuan/akses/peran hukum/retensi/risiko serta izin data pribadi nyata tetap memerlukan penetapan sah.
6. Kontradiksi E1/RB-11.07/21/T11-14 menghalangi persetujuan implementasi bagian terkait, tidak ditutup hanya dengan metadata/audit.
7. Penyelesaian bukan wewenang Codex. Pembatasan tambahan yang mengubah arti E1 atau pilihan D2/M2/E2 tidak diasumsikan disetujui.

D1/M1 dalam batas mandat tidak memerlukan penggantian pilihan, tetapi katalog/validasi operasional masih terbuka. **E1 mempunyai konflik nyata**, bukan sekadar rincian yang boleh dipilih pengembang. Isu dicatat pada KA-05 baseline tanpa membuat nomor KB/DT baru atau keputusan yang diklaim disetujui.

### Hubungan keputusan lama, audit dan gerbang

KB-11 tetap kebutuhan akses/kelas/peran/OPD/field/tindakan/tujuan/cakupan; E1 tidak menghapusnya. KB-12 tetap audit kritis dan salinan terlindungi terpisah dari backup. Audit wajib yang gagal tidak menghasilkan tindakan berhasil; gangguan salinan pascacommit tetap retry/rekonsiliasi, bukan membatalkan bisnis sah diam-diam. Log penolakan/akses/ekspor relevan memuat konteks minimum, tanpa NIK/kredensial/dokumen mentah atau kebocoran lewat respons.

DT-003 B A3+B1+C2, DT-005 C+F+H2, DT-007 C dan DT-009 C+B2+V2+K2 tetap utuh: pembuat/awal berbeda, satu pengesah biasa KB-07, pemilik aktif/efektif H2, status tidak membuka detail sensitif dan B2/V2/K1–K4/bukti/audit tetap. E1 bukan hak sahkan. Data historis bukan nilai resmi, baca registri bukan akses sumber mentah/Excel. MVP tidak diperluas.

Status DT-011 tepat **MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA**; katalog D1, batas ekspor, sensitivitas dan mandat aktual belum ditetapkan. DT-006/008/012/019/033, rincian penetapan DT-005/009 dan JRA tetap status sumber. Register 36 DT: **lima model DT-003/005/007/009/011 dipilih, 31 DT lain belum final; DT-011 sendiri belum tuntas konsistensi/operasional**.

G0 **SIAP DIAJUKAN UNTUK PENINJAUAN** dengan konflik D1/M1/E1 terlihat, bukan persetujuan baseline. G1 **BELUM LULUS; coding lokal BELUM DIBERIKAN**, prasyarat/konflik menahan bagian terdampak. G2 **BELUM DINILAI**, kontrak otorisasi harus disetujui sebelum dibangun. G3 **BELUM DINILAI**, skenario belum dieksekusi. G4/G6 **BELUM DINILAI**. G5 **BELUM LULUS**, data nyata belum diizinkan. G7 **BELUM LULUS**, produksi belum diizinkan. Hosting/kapasitas **BELUM DAPAT DINILAI**.

Hanya Markdown/ZIP. Tidak membuat kode/API/backend/frontend/middleware/policy/otorisasi/database/skema/migrasi/seed/test, akun/penugasan nyata, konfigurasi hak, unduh/ekspor, data pribadi/Excel/impor/merge, akses server/PDN/cPanel/OSS/Dukcapil/OPD atau deploy/backup/restore/load test.
