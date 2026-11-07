# Roadmap implementasi bertahap

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Status terbaru G1-A — 6 November 2026:** S0-03 fondasi lokal selesai setelah persetujuan terbatas pemilik produk; lihat [hasil dan usulan G1-B](17-laporan-hasil-g1a.md). Build/10 tes/57 assertions/HTTP lokal berhasil tanpa DB; visual browser belum diperiksa. Hentikan pada batas G1-A. Urutan usulan sebelumnya merupakan riwayat persiapan; G1-B/MySQL/migrasi/domain/data nyata/produksi belum diizinkan.

Status: **konsolidasi dokumentasi saja**, 5 November 2026. Seluruh model KB-01–KB-18 DISEPAKATI sesuai tingkatnya. [Baseline induk](10-baseline-konsolidasi-kb01-kb18.md) memuat batas MVP, sembilan epic, DT-001–036 dan G0–G7. G0 SIAP DIAJUKAN UNTUK PENINJAUAN; G1 coding lokal BELUM LULUS. Hosting/kapasitas BELUM DAPAT DINILAI.

## Cara memakai urutan dan gerbang

Tabel tahap adalah rancangan pekerjaan, bukan daftar semua fitur wajib sebelum MVP. KA-08 pada baseline memperjelas jalur merge historis/impor yang sebelumnya ditempatkan sebagai 6B/6C sebelum peluncuran; kini ditandai jalur tersendiri, tanpa membatalkan KB-13/KB-15. Lingkup mesin skala KB-10 menunggu DT-031, KBLI berversi tetap relevan. Program KB-16 tetap sesudah MVP.

Nomor EPIC-01–09 mengikuti kelompok permintaan pengguna, bukan urutan menunda akses/privasi/audit. Desain identitas dapat disiapkan awal pada pekerjaan yang diizinkan, tetapi penggunaan jalur bisnis harus memenuhi EPIC-03/07 dan koreksi/integritas relevan. Tidak semua DT harus final sebelum tiap pekerjaan lokal; P0 minimum yang memengaruhi hasil terkait harus cukup jelas dan G1 harus ada.

## Urutan dan gerbang keputusan

| Tahap | Pekerjaan dan hasil | Syarat mulai | Kriteria selesai |
| --- | --- | --- | --- |
| 0 — Fondasi dokumen | Pemeriksaan folder, arsitektur, model konseptual, panduan, roadmap, keputusan, checklist hosting | Permintaan perencanaan pengguna | Dokumen tersedia dan dapat ditinjau; aplikasi/database belum dibuat |
| 1 — Rincian bisnis, penetapan dan kelayakan | Lengkapi kasus cabang, kamus/matriks MVP pangan, referensi/konversi/periode, penetapan OPD/petugas/koordinator/wilayah, bukti/SOP dan kebijakan terkait; kumpulkan bukti hosting | KB-09 dan sektor sudah ditetapkan; pengguna meninjau rincian terbuka | Penetapan/rincian P0 yang relevan disahkan; usulan fungsi tidak dianggap OPD resmi; hosting PDN dinilai hanya pada pekerjaan terpisah yang diizinkan |
| 1A — Rincian perlindungan KB-11 | Tetapkan secara sah peran hukum, tujuan/dasar tiap layanan, kelas field dan matriks final, layanan hak/tenggat, ekspor, pemetaan JRA, insiden dan penilaian risiko/DPIA yang diperlukan | Model B sudah dipilih; sekarang dokumentasi saja, penetapan dilakukan pihak berwenang | Bukti gerbang tata kelola tersedia sebelum data nyata; SOP/retensi/pejabat tidak diasumsikan final dan tidak ada klaim DPIA selesai |
| 1B — Rincian audit KB-12 | Lengkapi taksonomi/atribut, cakupan kritis, kontrol salinan, pengiriman andal/rekonsiliasi, kapasitas, JRA, integritas, investigasi dan pemulihan | Model B dipilih; dokumentasi saja, bukti hosting/kapasitas/operasi menunggu KB-14/KB-17/KB-18 | Rincian/pengelola sah dan pilihan teknis ditinjau terpisah; dua file atau hash saja tidak cukup, tanpa jadwal/retensi/RPO/RTO tebakan |
| 1C — Rincian rekonsiliasi KB-13 | Aturan per jenis, bukti minimum, sepuluh prasyarat, inventaris dampak, mandat/hak, pemilihan kanonik, split/arsip/pulih | Model C dipilih, sekarang dokumentasi saja | Katalog/SOP/mandat dan kriteria keselamatan siap ditinjau; tidak menetapkan ambang atau mengaktifkan merge produksi |
| 1D — Dokumentasi audit KB-14 | Formulir 55 item/10 kelompok/13 kolom, baseline kandidat, status dan risiko serta kebutuhan bukti | Model B dipilih; sekarang dokumen saja, tanpa akses PDN | Semua aktual tetap BELUM DIKETAHUI sampai bukti sah tersedia; tidak mengarang spesifikasi, memilih konfigurasi atau memberi status Layak |
| 1E — Rincian tata kelola impor KB-15 | Sumber/dataset/tujuan/dasar, SOP/template, pemetaan/normalisasi berversi, bukti/akses/retensi, ukuran/frekuensi, pembalikan | Model B dipilih; dokumen saja tanpa berkas nyata/akses OPD | Rancangan siap ditinjau pihak berwenang; belum mengizinkan implementasi/impor nyata atau menganggap file OPD resmi otomatis |
| 1F — Rincian operasi KB-17 | Analisis dampak/ketergantungan, pengesahan tanggung jawab OPD/PDN, fasilitas/kontrol backup/kunci/audit, SOP/retensi/JRA, target dan monitoring/insiden/perubahan | Model B dipilih, sekarang dokumentasi tanpa akses/uji server; bukti KB-14 dan kapasitas KB-18 masih diperlukan | Rancangan siap ditinjau, target/jadwal yang belum sah tetap kosong; bukan izin backup/restore/produksi |
| 1G — Rincian kapasitas KB-18 | Model parameter/18 kelompok volume, tiga skenario ASUMSI, rumus pertumbuhan/penyimpanan/beban, rujukan hosting dan pemicu | Model C dipilih; dokumentasi tanpa data nyata/server/uji beban; fakta/fasilitas/target belum tersedia | Angka/komponen/versi/satuan dapat ditelusuri, tidak ada asumsi menjadi statistik atau kuota final; kapasitas masih belum dapat dinilai |
| 2 — Persiapan pengembangan | Setelah izin: inisialisasi Git lokal, perlindungan rahasia, lingkungan pengembangan terpisah, Laravel/Livewire/Tailwind dan koneksi MySQL uji | Izin implementasi tahap ini dan izin instalasi eksplisit, teknologi dan target lingkungan jelas | Versi terkunci dalam berkas lock, aplikasi dasar berjalan lokal, koneksi database uji berhasil, tidak ada rahasia masuk repository |
| 3 — Akses dan tata kelola dasar | Akun individual/penugasan, izin objek/field, audit operasional, transaksi kritis dan rancangan kirim/rekonsiliasi salinan terpisah KB-12; tanpa akun masyarakat | Tahap 2 serta izin implementasi; peran, akses, kepemilikan, audit/hosting/operasi relevan disetujui | Akses default ditolak; audit operasional kritis gagal membatalkan bisnis, gagal kirim pascacommit tertunda/retry tanpa membatalkan bisnis sah; kontrol salinan diperiksa |
| 4 — Master dan Profil Umum | Pihak-orang-badan usaha, unit kesatuan operasional dan keterkaitan cabang, hubungan M:N, kegiatan, ID internal terpisah, pendataan awal tanpa NIB, registrasi petugas dan pengesahan awal oleh verifikator berbeda | Tahap 3; rincian objek/cabang, kelengkapan tahap, bukti dan penugasan disahkan untuk cakupan ini | Cabang yang memenuhi KB-01 tetap satu profil induk; pemilik sama saja tidak memicu penggabungan; pendataan tanpa NIB berhasil; ID internal terpisah; pembuat tidak mengesahkan profil awal; penulisan berwenang dan diaudit |
| 4A — Deteksi dan pencegahan duplikat | Setelah izin kelak: kandidat saat registrasi/pemeriksaan berkala, bukti identik, pencegahan duplikat baru sesuai hak | Fondasi akses/audit dan registrasi, aturan/bukti/mandat relevan serta izin implementasi | Nama/pemilik/alamat/NIB/skor sama tidak cukup; identitas terbukti sama tidak dibuat ulang; profil baru tetap verifikator berbeda, tanpa NIB wajib awal |
| 5 — Koreksi dan konflik lintas OPD | Verifikasi per OPD dengan koordinasi pengelola utama; layanan pelaku melalui petugas; satu pengesah field; kasus/subkasus, enam status, bukti, keputusan korektif dan peninjauan kembali | Tahap 4; penugasan, standar bukti dan SOP terkait disepakati; model KB-01–KB-08 menjadi acuan | 18 kriteria KB-08 dan T08-01–T08-14 terbukti; koordinator tidak mengambil alih nilai; OPD lain tidak mengesahkan; versi/pengulangan aman; koreksi/status/audit atomik |
| 6 — Profil Industri Pengolahan Pangan dan laporan dasar | Hubungan profil-kegiatan, produk/bahan/peralatan/produksi terkait, field W/K/O/B, status verifikasi, rekap dasar tanpa duplikasi | Tahap 5; kamus/rincian referensi, penanggung jawab resmi dan bukti untuk lingkup ini siap; sektor tidak perlu dipilih ulang | T09-01–T09-26 terbukti pada implementasi kelak; produk/merek tidak menambah usaha, periode tetap, satuan tidak tercampur tanpa konversi, draf sektor tidak dihitung terverifikasi |
| 6A — Referensi KBLI dan rincian penilaian KB-10 | KBLI berversi relevan untuk kegiatan; rancangan mesin skala tetap Model B | Implementasi rujukan/fitur hanya setelah izin; aktivasi mesin skala sebagai fitur wajib MVP perlu DT-031 dan cakupan legal DT-010 | Rencana T10 sesuai scope kelak, tanpa menganggap seluruh mesin skala wajib dibangun karena model sudah dipilih |
| 7 — Uji pengguna dan kesiapan operasi | Pada tugas berizin kelak: staging terisolasi/sintetis, alur petugas, performa, verifikasi backup/restore lintas komponen dan audit, monitoring/insiden/pemulihan rilis KB-17 | Lingkup MVP selesai; target/kapasitas/mandat/SOP sah, bukti fasilitas KB-14/KB-18 dan izin uji terpisah | Kelak 30 T17, bukti integritas/referensi/hak/audit, selisih transaksi dan pembukaan; hasil RPO/RTO dibandingkan hanya target sah; penghambat kritis ditutup |
| 8 — Peluncuran terbatas | Rilis pada lingkup OPD/pengguna yang disepakati, pelatihan, pemantauan dan penanggung jawab dukungan | Persetujuan produksi yang spesifik, akses resmi dan rencana pemulihan tersedia | Layanan dipantau, tanggung jawab dukungan jelas, evaluasi percontohan dicatat |
| 9 — Fase lanjutan program KB-16 | Registri Program dan Riwayat Layanan: program/kegiatan/sesi/partisipasi/realisasi/tindak lanjut, indikator dan rekap lintas OPD | Setelah MVP KB-09 dievaluasi; rincian OPD/field/program/kode/sasaran/bukti/akses/JRA/operasi/kapasitas sah serta izin pengembangan tahap ini | Kelak 30 T16 diterima dengan data sintetis; empat hitungan terpisah, histori/privasi/audit terjaga, bukan pembayaran/seleksi otomatis/pengganti sistem resmi |
| Jalur lanjutan — merge/split/arsip historis KB-13 | Rancangan 6B terdahulu: inventaris/prasyarat/kanonik/alias/asal/keputusan/pulih | Bukan prasyarat seluruh modul MVP. DT-018, mandat/bukti/desain/uji/izin lingkup tersendiri; auto-merge berisiko tidak aktif | T13 bagian historis kelak sesuai izin; deteksi/pencegahan aman tetap dalam MVP |
| Jalur tersendiri — impor manual KB-15 | Rancangan 6C terdahulu: staging/pemetaan/validasi/pratinjau/pengesahan/pembalikan | Tidak wajib backlog inti MVP; DT-019/032 dan gerbang lingkup terkait, integrasi real-time tetap di luar MVP | T15 kelak sesuai izin; staging bukan resmi, tanpa menimpa perubahan sah terbaru |

Tahap 3–5 merupakan satu rangkaian fondasi keamanan dan integritas. Aturan KB-11 berlaku sejak desain akses tahap 3 dan melintasi seluruh tahap; bukan fitur keamanan yang ditunda sampai peluncuran. Jangan membuka fitur master untuk pemakaian nyata sebelum alur koreksi dan pemeriksaan aksesnya selesai. Kerangka dapat dibuat bertahap di lingkungan uji, tetapi tidak ada fase “semua orang boleh edit dahulu”.

## MVP yang disepakati melalui KB-09

Cakupan ditetapkan: registri PIHAK/ORANG/BADAN_USAHA/UNIT_USAHA, HUBUNGAN_PIHAK_USAHA, KEGIATAN_USAHA, LOKASI_USAHA/cabang, Profil Umum minimum/status NIB tanpa kewajiban NIB awal, Profil Industri Pengolahan Pangan, akun/penugasan petugas internal, kewenangan field, pengesahan awal oleh verifikator berbeda, koreksi/konflik, audit dan laporan dasar. Kamus W/K/O/B serta usulan fungsi pengampu terdapat pada [kamus data](kamus-data-mvp-kb09.md) dan [matriks](matriks-kewenangan-mvp-kb09.md). Jumlah/nama OPD, petugas, wilayah, bukti/SOP dan desain teknis yang belum disepakati tetap terbuka; persetujuan cakupan bukan izin implementasi.

Di luar MVP: transaksi program bantuan/pelatihan, integrasi eksternal, impor massal, marketplace/penjualan, stok bahan baku, akuntansi, aplikasi mobile terpisah dan analitik lanjutan. Tidak membuat menu untuk fitur di luar cakupan atau akun pelaku UMKM.

## Hasil penetapan tahap 1

- Rincian penerapan model kesatuan operasional/cabang: bukti keterkaitan, cara menilai pemilik sama pada pemilik bersama/pergantian pemilik, kasus batas, serta kelengkapan dan status registrasi tiap tahap.
- Penetapan pengelola utama sebagai koordinator, pembagian verifikasi per OPD, serta batas mandat verifikator awal tanpa mengambil alih kewenangan field.
- Kamus field awal: objek, arti, tipe, wajib/tidak, sensitivitas, aturan validasi, satu OPD pemilik, izin baca/usul/tetapkan, dan kebutuhan bukti.
- Matriks petugas-peran-cakupan serta prosedur pemberian/pencabutan penugasan; prosedur verifikasi pemohon layanan tanpa akun masyarakat.
- SOP pengesahan awal dengan pembuat/pengesah berbeda; satu pengesah field sesuai KB-07; konflik nilai menurut KB-08, pemindahan pemilik field dan peninjauan kembali.
- Rincian pelaksanaan cakupan MVP yang sudah ditetapkan serta skenario T09-01–T09-26; tidak menetapkan periode bulanan, jumlah data uji atau nama OPD berdasarkan dugaan.
- Rincian KB-10: penugasan pengesah/pemilik input/aturan, SOP bukti modal-penjualan, cakupan hukum pelaku/cabang/multiunit, tahun buku nonkalender dan adopsi aturan/KBLI. Jangkar unit tidak menentukan agregasi legal otomatis.
- Bukti hosting dan pilihan metode build/penerapan; rencana pengembangan dan staging memakai data sintetis.
- Rincian KB-11 sebelum data nyata: Pengendali/Prosesor/fungsi PDP, tujuan/dasar tiap layanan, klasifikasi field/matriks final, SOP hak subjek dan tenggat, ekspor/identifikasi ulang, JRA/penahanan/penyusutan, insiden serta risiko/DPIA yang diperlukan. Seluruhnya memerlukan penetapan sah; model KB-12 sudah dipilih, rincian teknologinya belum final.

Setiap keputusan mencantumkan pihak yang menyetujui dan tanggal. Keputusan yang belum relevan boleh tetap terbuka bila fiturnya tidak masuk lingkup; keputusan mendasar tidak boleh digantikan asumsi diam-diam.

## Pemeriksaan yang direncanakan

| Bagian | Bukti penerimaan yang bermakna |
| --- | --- |
| Identitas dan relasi | Satu orang dapat terkait dua unit, satu unit dapat terkait orang dan badan usaha, dan peran memiliki masa berlaku |
| Unit dan cabang | Cabang dengan pemilik sama dan keterkaitan induk yang teridentifikasi tetap bagian satu profil induk; pemilik sama saja tidak otomatis menggabungkan usaha berbeda |
| Registrasi bertahap | Pendataan awal tanpa NIB dapat dicatat; ID internal tidak memakai NIK/NIB; status pendataan, verifikasi dan legalitas dibedakan |
| Verifikasi terdistribusi | OPD memverifikasi sesuai field; koordinator dapat menindaklanjuti proses sesuai mandat tanpa hak pengesahan nilai otomatis |
| Sektor pangan dan produksi | Satu usaha tiga produk; tiap produk dapat banyak bahan. Produksi lengkap angka/satuan/periode/sumber/status; Januari tetap setelah Februari, koreksi berjejak, satuan berbeda tidak dijumlah tanpa konversi baku |
| Laporan dasar | Jumlah unit tidak berganda oleh produk/merek/pemilik/cabang/kegiatan; draf sektoral terpisah dari profil terverifikasi; ringkasan produksi dibedakan satuan/periode/status |
| Penilaian KB-10 | Usulan terpisah dari disahkan; hasil modal/penjualan terpisah, data kosong/parsial tidak dipaksa, ambang tepat, cakupan tidak diagregasi otomatis dan aturan/input historis terlacak |
| KBLI berversi | Pengolahan dan perdagangan dapat satu unit; satu kegiatan utama aktif tanpa kebijakan khusus, perubahan menjaga riwayat; pemetaan ambigu diperiksa dan tidak mengubah OSS |
| SSOT | Nama unit yang diperbarui resmi tampil sama pada Profil Umum dan profil sektoral; data orang bersama tidak disalin |
| Kepemilikan field | Tidak ada field bisnis yang dapat ditulis tanpa tepat satu OPD penanggung jawab aktif |
| Hak server | Permintaan lintas unit/OPD, penggantian ID/field, dan akses setelah izin dicabut ditolak; tidak ada login masyarakat |
| Koreksi dan konflik | Pelaporan tidak mengubah master; satu petugas pemilik yang sah memutus; konflik terbuka tidak dilewati; subkasus per OPD, revisi korektif dan peninjauan kembali menjaga riwayat |
| Transaksi | Usulan ganda, versi lama, kegagalan audit, dan pengiriman ulang tidak menghasilkan data atau riwayat yang salah |
| Perlindungan KB-11 | Rencana T11-01–T11-26: NIK/dokumen/ekonomi dibatasi, tujuh hak terpisah, pemohon/pemilik bersama terlindungi, penugasan dicabut, ekspor/API/pencarian tidak melewati izin, tenggat/retensi/insiden/audit dan gerbang data nyata; belum dijalankan |
| Audit dua lapisan KB-12 | 28 rencana T12: ID/versi/aktor, penolakan, atomisitas/gagal audit, gagal kirim/retry/duplikasi, manipulasi/hilang, hak kontrol terpisah, waktu/privasi, JRA, pulih, API dan tiadanya sukses palsu; belum dijalankan |
| Rekonsiliasi KB-13 | T13-01–T13-30: identitas berbeda tetap terpisah, identik dibuktikan, cabang/pemilik/relasi/periode terjaga, versi/transaksi/retry/hak aman, arsip sah dan pemulihan berjejak; T13-12/T13-13 kontrak masa depan, tanpa modul program MVP |
| Impor KB-15 | 30 rencana T15: sumber/staging/pemetaan/kualitas, NIK/NIB/identitas/cabang, referensi pangan/produksi/ekonomi, hak pemilik field, replay/versi/transaksi, hasil campuran, pembalikan/privasi dan tiadanya integrasi tanpa otorisasi |
| Hosting KB-14 | 24 rencana T14, bukti runtime/privat/HTTPS/scheduler/antrean/audit independen/restore/kapasitas; bukan hanya halaman login. Seluruhnya rencana, tidak ada pemeriksaan server saat ini |
| Operasi | Backup dapat dipulihkan ke lingkungan terpisah; prosedur rollback kode dan data terbukti dengan data sintetis |

Perubahan skema dan data nantinya memerlukan rencana pemulihan. Mengembalikan kode saja tidak selalu membatalkan migrasi atau koreksi data; jangan mengandalkan penghapusan tabel sebagai rollback produksi.

## Gerbang wajib sebelum data nyata atau produksi

Tahap pengembangan/uji tetap memakai data sintetis sampai bukti penetapan hukum/organisasi, tujuan/dasar pemrosesan, akses final, JRA/penyusutan, penilaian risiko dan DPIA yang diperlukan tersedia serta penggunaan data nyata diizinkan secara eksplisit. Persetujuan implementasi kode, bila kelak diberikan, tidak otomatis mengizinkan data nyata. Sebelum peluncuran tetap perlu persetujuan produksi, kapasitas/hosting yang terbukti dan rencana operasi/pemulihan. Tidak ada uji lapangan dengan data nyata untuk menggantikan gerbang ini.

## Kesiapan audit sebelum penggunaan nyata

Rancangan KB-12 dikerjakan pada fondasi tahap 3 dan diterapkan konsisten pada setiap modul kelak; bukan menambahkan jejak audit setelah data nyata masuk. Sebelum penggunaan nyata/produksi perlu bukti kontrol salinan yang terpisah, pengiriman/rekonsiliasi yang andal, otorisasi audit, sanitasi/kapasitas, JRA/penahanan, SOP insiden serta uji pemulihan/integritas yang relevan. Kelayakan teknologi dan angka operasi menunggu KB-14/KB-17/KB-18. Semua gerbang hukum/privasi dan izin eksplisit KB-11 tetap berlaku.

Model salinan tidak memberi izin membangun sekarang atau mengakses cPanel untuk membuktikannya. RPO/RTO, jadwal kirim/retry, ambang tertunda dan frekuensi pemeriksaan belum dipilih; diperlukan bukti dan keputusan pihak berwenang.

## Gerbang rekonsiliasi KB-13

Deteksi/pencegahan duplikat baru diprioritaskan; merge/split terstruktur dan arsip didokumentasikan tanpa menjalankan operasi. Sebelum merge historis produksi, aturan berversi/bukti, sepuluh syarat kumulatif, dampak seluruh referensi, batas aman/mandat sah, uji data sintetis/pascaoperasi/pemulihan dan mitigasi harus disahkan serta produksi diizinkan. Skor/algoritme/ambang belum dipilih dan tidak menggantikan bukti.

Petugas tetap memutus perubahan substantif/konflik; otomatisasi tidak melewati KB-04/KB-05/KB-07/KB-08. Uji pulih harus memperhitungkan perubahan setelah merge dan menjaga audit/salinan KB-12. Gerbang data nyata, JRA/privasi dan audit tetap berlaku. Program/bantuan/pelatihan hanya kontrak referensial masa depan; tidak mewajibkan modul baru pada MVP pangan.

## Urutan pembuktian dan gerbang hosting KB-14

1. **Sekarang:** perbarui formulir, rujukan resmi, risiko dan ketergantungan saja. Tidak login, memindai, menguji URL/server, menjalankan koneksi, meminta/membaca rahasia atau memasang file uji PDN.
2. **Bukti fasilitas oleh pihak berwenang:** setelah penugasan tersendiri, kumpulkan ringkasan tersanitasi versi web/CLI/database, fitur/batas, root/privat/HTTPS, kontrol audit/backup serta dukungan. Formulir mengikat bukti/tanggal/pemeriksa; dokumentasi publik dan alat lokal bukan bukti PDN.
3. **Implementasi/uji kelak dengan izin terpisah:** kecocokan paket/aset/Livewire, kontrol negatif, scheduler/queue, audit dan restore dibuktikan pada lingkungan berizin dengan data sintetis. Tidak ada izin dari roadmap ini. Lingkungan pengembangan dinilai sesuai lingkupnya; bukti parsial belum hasil kelayakan produksi.
4. **Konfigurasi teknis final:** tinjau audit serta kebutuhan KB-17/KB-18, penetapan pengelola dan kesenjangan. Tidak memilih produk/versi/metode deploy atau lokasi audit dari asumsi.
5. **Produksi:** syarat kritis terbukti, pengamanan/pemulihan terverifikasi, semua mitigasi nonkritis selesai dan persetujuan pihak sah tersedia. Layak Bersyarat bukan izin produksi; Layak pun tidak otomatis mengizinkan deployment/data nyata.

Empat hasil: Layak / Layak Bersyarat / Tidak Layak / Belum Dapat Dinilai. Hasil sekarang **BELUM DAPAT DINILAI**. Jika kritis tidak dapat dipenuhi/dimitigasi sah, susun opsi permohonan infrastruktur melalui keputusan terpisah, tanpa migrasi atau DNS otomatis.

Prioritas bukti: kebocoran/root/privat, runtime, HTTPS, independensi audit dan kemampuan pemulihan; lalu keandalan proses/kuota/akses admin. Tingkat akhir sesuai dampak dan bukti. Teknologi Redis/Supervisor/Node permanen/daemon tidak otomatis wajib; alternatif Composer/build/SSH/proses memerlukan bukti aman.

## Gerbang impor dan integrasi KB-15

Impor manual melalui staging hanya rancangan yang dapat dikembangkan setelah prioritas registri/pangan dan gerbang tata kelola/izin lingkup terpenuhi. Pernyataan impor massal di luar MVP tetap; KB-15 bukan perintah menambah fitur aktif KB-09 atau mengimpor dataset OPD sekarang.

Sebelum implementasi terkait kelak, sahkan sumber/dataset/tujuan/dasar/mandat, pemilik field/petugas, SOP/template/keamanan, pemetaan/konversi/bukti, ukuran/frekuensi/kapasitas serta retensi/pembalikan. Gunakan data fiktif untuk uji per record/field/batch, kasus lintas OPD, replay/versi/audit dan koreksi pascacommit. Izin implementasi tidak otomatis izin data nyata.

Sebelum data nyata, seluruh gerbang KB-11/KB-12/KB-13 dan kebijakan/risiko/keamanan, izin berbagi/penggunaan serta bukti hosting/operasi terkait harus terpenuhi. KB-14 tetap BELUM DAPAT DINILAI, kapasitas KB-18/operasi KB-17 belum final. Tidak ada angka ukuran batch, file atau frekuensi diisi sekarang.

API/real-time OSS/Dukcapil/OPD memerlukan keputusan fase berikutnya, dasar/otorisasi/perjanjian jika diwajibkan dan spesifikasi kanal resmi. Tidak membuat/mencoba endpoint atau kredensial. Program/bantuan dalam data lama cukup ketergantungan referensial, bukan modul MVP baru.

## Tanggung jawab menurut model dan penetapan lanjutan

Fungsi pengelola utama sebagai koordinator dan verifikasi per OPD sudah disepakati pada tingkat model; identitas instansi/petugas dan mandat rinci belum ditetapkan. Pembagian kerja pengembangan berikut tetap memerlukan penugasan.

- **Pemilik produk/pengguna:** mengesahkan definisi bisnis, cakupan, prioritas, dan penerimaan hasil.
- **Pengelola utama sebagai koordinator:** mengoordinasikan proses verifikasi terdistribusi, mutu dan tindak lanjut. Konflik nilai tetap oleh OPD pemilik; sengketa kewenangan melalui mekanisme organisasi yang sah. Instansi, petugas dan mandat rinci belum ditetapkan.
- **OPD penanggung jawab:** mengesahkan kamus field dan proses verifikasi untuk data tanggung jawabnya.
- **Penyedia/pengelola hosting:** memberi bukti kemampuan hosting dan menjalankan perubahan infrastruktur yang disetujui.
- **Codex/pengembang:** menjelaskan pilihan, melaksanakan tahap yang diizinkan, memeriksa hasil, dan menjaga dokumentasi.

Hasil dokumentasi terbaru mencakup KB-18 Model C, 30 RB-18/30 rencana T18, model asumsi/proyeksi kapasitas dan audit lintas KB-01–KB-18. KB-01–KB-17 dipertahankan. Hosting/kapasitas akhir BELUM DAPAT DINILAI; tanpa uji teknis, server, backup/restore atau data nyata. ZIP dokumen dibuat setelah pemeriksaan, bukan izin kode/database/paket/hosting/deployment/pengadaan.

## Fase lanjutan yang dipilih — KB-16 Model B

Pengguna menetapkan model pada 5 November 2026. Dokumentasi sekarang boleh merancang referensi program sejak fondasi, **tanpa memasukkan program ke tahap implementasi MVP 0.1**. ID Registri Induk tetap stabil sehingga tidak perlu menggantinya untuk layanan masa depan. Tahap 9 sesudah MVP/evaluasi tidak menjadi perintah otomatis membangun; tidak menetapkan tanggal, anggaran, program pertama, OPD atau jumlah pengguna.

| Urutan khusus fase lanjutan | Hasil yang direncanakan | Gerbang |
| --- | --- | --- |
| Rincian organisasi/program | Satu penanggung jawab record, satu pemilik aktif tiap field, tujuh fungsi/penugasan, kode/nomenklatur sah bila ada, sasaran dan hak | Semua penetapan resmi masih terbuka, koordinator bukan pengesah universal |
| Desain referensi dan pencatatan | Enam tingkat ber-ID mandiri, sepuluh fungsi konseptual, Orang peserta vs Unit/Badan penerima sesuai sasaran, perwakilan/masa berlaku | Master/privasi/koreksi/audit/rekonsiliasi KB-01–KB-13 siap, tidak menggandakan induk atau mengarang entitas |
| Status dan bukti layanan | Pendaftaran/kehadiran/realisasi/verifikasi/tindak lanjut terpisah; lima kelompok kosakata KB-16 | SOP transisi/bukti/pembatalan/perubahan peserta belum final; program Selesai bukan semua layanan sah |
| Indikator dan laporan | Output/hasil langsung/outcome teramati, pengukuran berperiode, empat ukuran rekap berbeda | Definisi/satuan/objek/sumber/bukti/verifikasi/penanggung jawab sah; KB-09/KB-10 dirujuk tanpa master baru, bukan klaim kausal |
| Impor program historis bila diizinkan | Sumber/staging/pemetaan/validasi/pengesahan KB-15 dan koreksi berjejak | Izin dataset/tujuan/dasar/SOP/akses/JRA tersendiri; bukan integrasi langsung atau impor program MVP |
| Implementasi dan penerimaan kelak | 30 rencana T16-01–T16-30 pada keputusan, termasuk hak server, hitungan, merge/split dan audit | Izin implementasi/paket terpisah; pengujian sintetis; hosting KB-14, operasi/backup KB-17 dan kapasitas KB-18 harus terbukti untuk lingkupnya |

Rekap membedakan UMKM unik, Orang unik, partisipasi dan kejadian layanan. Duplikasi orang–sesi–peran–konteks sama dicegah tanpa menghalangi sesi/program berbeda yang sah. Contoh fiktif dua wakil satu unit di dua kegiatan tetap satu UMKM unik, dua Orang, dua partisipasi. Tidak menghitung peserta daftar sebagai hadir atau layanan selesai, dan banyak OPD/penerima tidak menggandakan kejadian yang sama.

Risiko utama fase lanjut ialah perluasan MVP diam-diam, kewenangan field tumpang tindih, ekspor pribadi tanpa izin, salah hitung lintas OPD, riwayat hilang saat merge/split, dan klaim outcome/keberhasilan tanpa pengukuran. Kendalinya memakai aturan KB-04/KB-07/KB-08/KB-11–KB-15 serta 30 RB-16, bukan daftar fitur keuangan.

Pembayaran, penyaluran elektronik, pengadaan, akuntansi, seleksi/kelayakan otomatis dan penggantian sistem pemerintah dikecualikan. Nominal bantuan historis dengan dasar sah hanya fakta layanan. Sertifikasi tetap diterbitkan instansi berwenang. OPD/program pertama/kode/penerima/hak/indikator wajib/jadwal/bukti/SOP/retensi belum final. Hosting BELUM DAPAT DINILAI, rincian KB-17, kapasitas KB-18 serta izin implementasi/data nyata/produksi terbuka. Tidak ada T16 dijalankan pada tahap dokumentasi ini.

## Gerbang operasional dan pemulihan — KB-17 Model B

Keputusan pengguna 5 November 2026 mengesahkan kebijakan/dokumentasi, bukan frekuensi backup, angka RPO/RTO atau izin operasi. Kebutuhan operasi aman melekat pada kesiapan MVP registri/pangan, **tanpa menambah modul program KB-16 atau impor program ke MVP pertama**.

Urutan pembuktian yang direncanakan:

1. Analisis dampak bisnis dan ketergantungan delapan kelompok layanan, termasuk dampak kehilangan data/fungsi. Prioritas/target tidak ditentukan dari dugaan.
2. Penetapan fungsi/pemisahan mandat aplikasi–OPD–PDN, hak minimum/pengganti/pemeriksaan, SOP restore/perubahan/darurat/insiden dan pembukaan.
3. Bukti fasilitas/kuota/isolasi/enkripsi/kunci/pemisahan kendali/backup/pemulihan KB-14 dan kapasitas KB-18 melalui pekerjaan yang diizinkan terpisah, tanpa kredensial dalam dokumen.
4. Pengesahan sumber/lokasi/media/jumlah, frekuensi/retensi/JRA/penahanan, jadwal uji, target RPO/RTO/SLA/kanal/zona waktu dan kebijakan terkait berdasarkan bukti, bukan otomatis karena Model B dipilih.
5. Setelah izin implementasi/paket dan lingkungan terkait: bangun kendali sesuai ruang lingkup yang disetujui, siapkan monitoring 13 area dan jejak operasi yang sah; tidak dieksekusi sekarang.
6. Setelah izin pengujian kelak: verifikasi backup dan uji restore terisolasi/sintetis mengikuti 16 langkah/formulir, periksa identitas/relasi/dokumen/versi/audit/hak, serta selisih transaksi/replay. **30 T17-01–T17-30** masih rencana.
7. Tinjau hasil/temuan, kesesuaian target sah dan risiko tersisa. Kegagalan verifikasi audit/integritas/referensi tidak menjadi klaim pulih sepenuhnya atau diloloskan sebagai kondisi kritis.
8. Pembukaan/produksi perlu persetujuan spesifik dan bukti kesiapan lengkap. Izin dokumentasi/pengembangan/uji tidak otomatis memberi izin data nyata atau deployment.

Bukti backup sukses berbeda dari bukti bisa restore, salinan audit KB-12 berbeda dari backup penuh sistem. Koreksi nilai/merge/impor salah tetap KB-07/KB-08/KB-13/KB-15 dengan versi/audit baru; bukan restore buta. Transaksi sah sesudah titik backup tidak diabaikan. Pengiriman audit tertunda pascacommit tidak membatalkan bisnis sah; selisih pemulihan tetap dilaporkan.

Rincian organisasi/PDN/fasilitas, enkripsi/kunci, frekuensi/retensi/JRA, RPO/RTO/jadwal uji, SLA/kontak, SOP/perizinan, isolasi/zona waktu dan keamanan data nyata belum final. Hosting tetap BELUM DAPAT DINILAI, angka dan bukti kapasitas KB-18 belum final. Tidak menginisialisasi aplikasi/database atau menjalankan uji/backup/restore/server pada tahap dokumentasi.

## Gerbang kapasitas awal dan pertumbuhan — KB-18 Model C

Arah arsitektur kabupaten disiapkan sejak desain, kapasitas fisik awal mengikuti kebutuhan MVP terverifikasi dan dapat ditingkatkan bertahap. **Tidak memperluas MVP KB-09 atau memajukan program KB-16 ke fase pertama.** Seluruh model KB-01–KB-18 dipilih sesuai tingkat masing-masing, sedangkan rincian/fakta/izin tetap terbuka.

[Model kapasitas](09-perencanaan-kapasitas.md) menjadi pusat input/rumus/hasil: lima kategori nilai, enam cakupan kapasitas, 18 kelompok volume, tiga skenario contoh, pertumbuhan multi-tahun, penyimpanan lintas komponen, sembilan profil beban, 19 rujukan fasilitas dan 12 indikator pemicu. Angka contoh ASUMSI, hasil hitung PROYEKSI; belum ada data resmi/hasil benchmark dalam tugas ini.

Urutan tahap berikutnya yang direncanakan:

1. Tinjau definisi/cakupan/versi model dan input yang belum diketahui, termasuk volume Unit unik/Orang/Badan/hubungan/histori/dokumen/audit/staging/backup.
2. Tetapkan sumber/metode/verifikator dan izin memperoleh fakta, target kinerja/cakupan tahap serta calon pengelola secara sah. Pengumpulan data nyata tidak diizinkan melalui dokumen ini.
3. Pada tugas berizin tersendiri, verifikasi fasilitas KB-14 untuk lingkup MVP dan jalur pertumbuhan, operasi/pemisahan kontrol/backup KB-17. Bukti awal fasilitas dapat dikumpulkan sebelum aplikasi, tetapi bukan pengukuran kinerja aplikasi.
4. Tinjau proyeksi/ketidakpastian/biaya/opsi alokasi awal dan pemicu pertumbuhan. Jangan menyediakan seluruh kebutuhan kabupaten sekaligus atau menjadikan skenario tinggi kuota wajib.
5. Setelah izin implementasi/lingkungan/paket dan target/profil uji jelas, siapkan aplikasi/uji dengan data sintetis pada pekerjaan terpisah. Tidak membuatnya sekarang.
6. Setelah otorisasi uji teknis, ukur pada konfigurasi/profil/data/lingkungan yang sesuai; catat metode/kriteria/hasil dan batas keberlakuannya. **30 T18** masih spesifikasi, tanpa load/stress test/benchmark pada tahap ini.
7. Bandingkan bukti dengan target dan syarat kritis, perbarui model/risiko/opsi. Kekurangan CPU/queue/ruang/kontrol audit dicatat; tidak diluluskan dari asumsi.
8. Sahkan alokasi/perubahan/biaya/produksi dan pemantauan sesuai mandat. Peningkatan kuota/infrastruktur, pemisahan storage/audit/backup dan pengadaan tidak otomatis diizinkan.

Puncak unggah/ekspor/pencarian/impor/duplikasi/audit+backup/restore perlu diperhitungkan; rata-rata RPS bukan kemampuan server. Target RPO/RTO, jumlah titik/retensi/salinan, ambang dan kuota tetap belum final. Seluruh keamanan/hak server/audit/riwayat/konflik tetap, tanpa dikurangi demi performa.

Status sekarang: **hosting dan kapasitas akhir BELUM DAPAT DINILAI**. Tidak ada kode, database/migrasi/dependensi, akses data/server, skrip pembebanan/jaringan, perubahan kuota/cron/hosting, backup/restore, deployment atau pengadaan.

## Rekomendasi persiapan implementasi dari baseline

1. Tinjau G0 dan putuskan DT prioritas sesuai scope: definisi/cabang/tahap/field/penugasan/agregasi status/bukti/akses (DT-001–011/033).
2. Tegaskan batas aktivasi yang belum rinci (DT-031/032), terima backlog/kriteria penerimaan yang relevan dan ajukan mandat coding lokal DT-028/G1 pada tahap terpisah.
3. Setelah izin yang sesuai, verifikasi kandidat teknologi/desain G2 dan kerjakan fondasi dengan data sintetis; akses/privasi/audit tidak ditunda.
4. Uji fungsi G3 pada lingkungan berizin; persiapkan/verifikasi fasilitas G4 untuk pengujian yang memerlukan lingkungan tersebut. Ini bukan izin server dari roadmap.
5. Sebelum data nyata penuhi G5; buktikan operasi/backup/restore/kontrol audit/kapasitas G6 sesuai mandat; produksi hanya setelah G7. G5/G6 bukan hasil yang otomatis lulus dari kode lokal.
6. Fitur impor/integrasi/merge historis/program mengikuti scope/DT/gerbang tersendiri. Tidak ada estimasi waktu/biaya/kuota/petugas ditetapkan melalui urutan ini.

Status aktual: G0 siap diajukan peninjauan, G1/G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Seluruhnya dokumentasi, tanpa implementasi/test otomatis/akses data nyata/server/backup/restore/deployment.

## Dependensi proses agregasi setelah DT-007 dipilih

**DT-007 Model C — Verifikasi Bertingkat Berbasis Cakupan DISEPAKATI pada tingkat model**, bukan izin membangun fitur baru. Pemisahan status registrasi induk, field, sektor dan ringkasan per lingkup memperinci registrasi/verifikasi pada EPIC-04, laporan EPIC-08 serta privasi/audit EPIC-03/07 dalam MVP yang sama.

Sebelum mengembangkan proses agregasi yang relevan, perlu katalog minimum sah/berversi dan tahap/transisi cukup jelas (DT-003/033), satu pemilik/mandat/masa berlaku field sah (DT-005), penunjukan pembuat/verifikator berbeda (DT-006), serta matriks akses hasil/alasan/tindakan (DT-011). DT-003 B A3+B1+C2 kini dipilih; minimum konseptual A3 mengikat sebelum draf, rincian katalog/bukti tetap belum final. Pengembang tidak menambah minimum/OPD/enum/bukti atau mengambilnya dari persentase kelengkapan.

| Rancangan pekerjaan mendatang | Dependensi yang tetap terbuka | Penerimaan yang direncanakan |
| --- | --- | --- |
| Menelusuri aturan/katalog/lingkup/versi | DT-003/005/033 dan dasar penetapan sah | Katalog belum sah/kosong tanpa dasar tidak lulus otomatis, hasil Belum dapat dinilai |
| Registrasi awal dan pengesahan field | DT-005/006/011 dan minimum/transisi relevan | Verifikator awal berbeda, nonpemilik ditolak, satu pengesah field biasa tetap |
| Penilaian/penilaian ulang | Katalog/field efektif/bukti/periode/penghalang dan dependensi lingkup | Draf bukan resmi, usulan sendiri tidak membatalkan nilai lama, konflik relevan menahan positif, versi berubah dinilai ulang |
| Ringkasan/riwayat/laporan berizin | DT-011, klasifikasi hasil/alasan, jejak aturan/data/keputusan | Metrik induk/sektor terpisah, alasan terlindungi dan hasil historis terlacak tanpa pengesahan ganda |

[28 T-DT007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) adalah rencana penerimaan, belum dijalankan dan tidak dibuat kode uji. Tidak memperluas sektor/program/impor atau menambah izin implementasi.

Status seluruh G0–G7 tetap: G0 SIAP DIAJUKAN UNTUK PENINJAUAN sesudah pemeriksaan dokumen, G1/G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. G1 coding belum diberikan; G2 memerlukan katalog/mandat/hak cukup jelas; G3 perlu hasil 28 kasus berizin kelak; G5 data nyata memerlukan dasar/mandat/izin. Hosting/kapasitas tetap BELUM DAPAT DINILAI.

## Tindak lanjut dokumentasi DT-003 — bukan izin implementasi

**6 November 2026:** DT-003 Model B A3+B1+C2 DISEPAKATI. [Register](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2) memuat 30 RB dan 30 rencana T dari sumber resmi, belum dijalankan. DT-007 Model C, sembilan epic dan MVP registri/pangan tetap.

| Jalur/prioritas peninjauan | Hasil yang harus tersedia sebelum pekerjaan terkait diizinkan |
| --- | --- |
| Registrasi baru, EPIC-04 | A3 sebelum draf: pihak/jenis/peran, lokasi usaha, kegiatan, penanda, sumber, petugas/waktu. Pengajuan B1 dan paket C2/verifikator berbeda; NIB tidak wajib sampai pengesahan |
| Standar pengajuan/pengesahan | Katalog minimum operasional sah berversi/efektif dan standar dokumen/objek/klaim; DT-009/033 tetap terbuka, bukan membuat daftar wajib dari Excel |
| Kewenangan/privasi/audit sejak awal | DT-005/006/011: pemilik field/mandat aktif/pemisahan pembuat-verifikator/hak; akses KB-11 dan audit kritis atomik KB-12 sebelum jalur bisnis |
| Peninjauan temuan historis | Klarifikasi agregat/penyebut AH-01 dan pemetaan lokasi/peran/kegiatan/izin/sektor dalam lampiran 11, tanpa membuka Excel pada tugas ini |
| Jalur historis KB-15, fase terpisah | Otorisasi sumber/tujuan/dasar/retensi DT-019 dan lingkup aktivasi DT-032; staging privat → validasi/kandidat → pelengkapan A3 → B1 → C2. Staging bukan draf resmi dan A3 tidak dilonggarkan |
| Rencana penerimaan | Pertahankan T-DT003.01–30, T-DT007.01–28 dan sumber KB; jalankan kelak hanya pada lingkungan/scope/izin sesuai G1–G5, tidak mengklaim hasil sekarang |

[Audit historis](11-audit-baseline-data-historis.md) hanya agregat sumber; baris bukan Unit unik/terverifikasi dan laporan bukan izin impor. Tidak menambahkan modul staging/impor massal, mesin skala, program atau merge historis ke seluruh epic MVP.

G0 siap diajukan peninjauan dan belum disetujui; G1 BELUM LULUS/coding **BELUM DIIZINKAN**, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting/kapasitas BELUM DAPAT DINILAI. Rekomendasi peninjauan bukan perintah instalasi/kode/server/database/data nyata/uji teknis/deployment.

## Prasyarat aktivasi kewenangan DT-005 — 6 November 2026

Model **C+F+H2 DISEPAKATI**, 30 RB/30 T lengkap pada [keputusan](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2), seluruh T belum dijalankan. EPIC-03/04 dan jalur pengesahan lain tidak boleh diaktifkan hanya dari fungsi usulan di matriks.

Sebelum pekerjaan pengesahan terkait kelak diizinkan, perlu penetapan OPD per kode/cakupan/waktu efektif, dua katalog berversi, mandat petugas/akses cukup jelas, standar bukti sesuai klaim dan prosedur H2 untuk transisi hak/antrean. DT-004/006/008/009/011/012/019/033 tetap status sumber; penetapan aktual DT-005 belum tersedia. Pengembang tidak mengisi OPD/pejabat/dasar dokumen dari nama pemasok data.

H2 mengikuti sepuluh langkah tata kelola dan pemeriksaan tumpang tindih. Riwayat lama tidak dihapus, tanggal konfigurasi bukan efektif, mandat berakhir ditolak dan antrean tidak otomatis disahkan. KB-11/12 serta pemisahan pembuat/verifikator awal tetap prasyarat sejak awal. T-DT005.01–30 merencanakan penolakan pemasok/admin/koordinator tanpa mandat, perubahan efektif, antrean, hak sensitif/ekspor serta audit kritis gagal.

Sembilan epic/MVP registri-pangan, KB-01–18, DT-003 B A3+B1+C2 dan DT-007 C tetap. Matriks ekonomi/klasifikasi bukan izin aktivasi mesin skala DT-031, data historis bukan izin modul staging/impor DT-019/032. G0 hanya siap diajukan peninjauan; G1 coding BELUM DIBERIKAN, G1/G5/G7 belum lulus, G2/G3/G4/G6 belum dinilai, hosting BELUM DAPAT DINILAI. Tidak mulai implementasi.

## Prasyarat bukti dan koreksi DT-009 — 6 November 2026

**C+B2+V2+K2 final model bisnis**, 30 RB/30 T lengkap pada [keputusan](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2), semua T belum dijalankan. EPIC-04/06/07 dan jalur bisnis terkait memerlukan katalog bukti/versi/masa efektif sah, kewenangan DT-005 dan kontrak nilai/versi/efektif yang cukup jelas sebelum pengesahan nyata. Audit/privasi tetap fondasi sejak awal, bukan menunggu seluruh fitur selesai.

| Peninjauan sebelum aktivasi terkait | Yang harus jelas dan belum diputus dari dokumen ini |
| --- | --- |
| Katalog B2 | Dokumen formal yang diterima tiap klaim, standar kecukupan/masa berlaku, sumber/versi, risiko/sensitivitas; 16 kelompok saat ini USULAN/MENUNGGU PENETAPAN |
| Pengesah/pemeriksa/kewenangan | OPD/petugas/mandat aktif DT-005/006, akses final DT-011, otoritas K4/organisasi DT-008. Penilaian bukti bukan pengesahan dan bukan dua pengesah otomatis |
| Jalur koreksi | K1 administratif, K2 fakta/efektif, K3 historis/periode, K4 konflik/risiko; H2 alih pemilik tetap terpisah |
| Nilai V2 | Versi dasar terkini, nilai lama sah/tidak dibatasi, pembatasan beralasan/berwenang/audit, penolakan tidak memulihkan nilai tidak sah dan jadwal efektif tidak dimajukan |
| Transisi konseptual | Delapan status usulan koreksi terpisah registrasi/field/sektor/kasus; rincian hak/prosedur pelaksanaan perlu penetapan |
| Privasi/audit/dampak | Dokumen/salinan privat, retensi/JRA sah tanpa angka tebakan, perubahan kritis/audit KB-12 atomik dan evaluasi DT-007 lingkup terdampak |
| Penerimaan mendatang | T-DT009.01–30 bersama T-DT003/005/007 dan skenario KB relevan pada scope/lingkungan/izin yang kelak disetujui; sekarang tidak membuat/menjalankan tes aplikasi |

DT-009 model dipilih tidak menyatakan standar dokumen telah berlaku atau data historis sudah terverifikasi. DT-006/008/011/012/019/033 tetap status sumber, dasar pemrosesan/retensi/OPD/bukti operasional belum final. B1 tidak dilonggarkan dan NIB tidak diwajibkan. Semua KB, DT-003/005/007, sembilan epic/MVP serta aktivasi terpisah skala/impor/program tetap.

G0 siap diajukan peninjauan, belum disetujui; G1 coding BELUM DIBERIKAN/BELUM LULUS, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting BELUM DAPAT DINILAI. Tidak ada implementasi, tes aplikasi, database, server, data pribadi atau operasi.

## Konflik dan prasyarat DT-011 sebelum bagian implementasi terdampak

**6 November 2026:** C+D1+M1+E1 MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA. [Rumusan](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1) lengkap 30 RB/30 T dan 24 kasus batas; seluruh T belum dijalankan.

| Prasyarat | Dampak pada epic/gerbang, bukan izin menjalankan |
| --- | --- |
| D1 paket dasar tiap fungsi OPD | EPIC-03 perlu katalog/keterkaitan sah; hak dasar belum ditetapkan tidak dikarang, tidak mengganti D1 |
| M1 cakupan/masa/pencabutan/larangan | EPIC-03/04/06 perlu validasi seluruh izin aktif tanpa silang scope atau self-approval; bukan sesi satu mandat |
| E1 vs RB-11.07/21/T11-14 | **KONFLIK KEBIJAKAN TERBUKA**, menghalangi persetujuan bagian unduh/ekspor EPIC-07/08 dan jalur terkait. Pemilik produk perlu keputusan, Codex tidak memilih pengganti |
| Sensitif/agregat/massal/penerima | Tujuan, risiko pengungkapan, proyeksi, volume dan penyerahan perlu penetapan; baca bukan seluruh database/publikasi |
| OPD/petugas/mandat nyata | DT-005/006 dan rincian hak belum ditetapkan, H2 efektif dan K4 otoritas tetap |
| Audit/kontrak otorisasi | KB-12 tetap; G2 kontrak harus disetujui sebelum dibangun, model bukan bukti kesiapan |
| Rencana penerimaan | T-DT011.01–30 kelak sesuai izin; T19/29 menahan fungsi yang kebijakan/katalognya belum selesai |

Tidak mengimplementasikan ekspor/unduh terdampak sebelum konflik diputus. Ini tidak otomatis mengganti E1 menjadi E2; setiap batas tambahan yang mengubah otomatis adalah kebutuhan keputusan lanjutan. Persetujuan coding bagian lain pun tetap memerlukan mandat terpisah DT-028, tidak diberikan dari roadmap ini.

Semua KB/DT-003/005/007/009, sembilan epic/MVP, aktivasi skala/impor/program tetap. G0 dapat ditinjau dengan konflik terlihat, belum disetujui; G1 BELUM LULUS/coding BELUM DIBERIKAN, G2/G3/G4/G6 BELUM DINILAI, G5/G7 BELUM LULUS, data nyata/produksi belum diizinkan, hosting BELUM DAPAT DINILAI. Tidak ada kode/tes aplikasi/server/data nyata/ekspor.

## Urutan persiapan G1 lokal — 6 November 2026

[Kontrak MVP](12-kontrak-mvp-pra-coding.md), [backlog 19 ID](13-backlog-mvp-terprioritas.md), [kontrak teknis](14-kontrak-teknis-fondasi-lokal.md) dan [review paket](15-review-paket-prototipe-dan-kesiapan-g1.md) memperinci prasyarat, bukan mengganti sembilan epic atau izin seluruh roadmap.

1. Tinjau dokumen/temuan dan ajukan **G1-A** konkret: kerangka/dependensi/build/tes fondasi tanpa DB. Belum diizinkan.
2. Hanya setelah A disetujui, lindungi dokumen/arsip, tinjau hook dan cegah SQLite/migrasi otomatis; buktikan stack lokal. Tidak copy prototipe mentah.
3. Laporkan A, tentukan MySQL lokal/desain/scope dan izin **G1-B** terpisah sebelum instalasi DB/migrasi/domain/persistensi.
4. Rancang akses/audit bersama identitas; jangan aktifkan mutasi bisnis sebelum kewenangan/privasi/audit memadai. Uji temporal/konkurensi/katalog sesuai scope sintetis.
5. Lanjut registrasi/pangan/laporan berizin menurut dependensi; ekspor/unduh E1 dan operasi nyata tetap tertahan.

15 tes prototipe bukan penerimaan G3; semua 44 AC dan T sumber tetap rencana aplikasi. OPD/petugas/bukti/hak nyata belum ditetapkan. Konflik E1 tetap, tidak mengganti E2. Skala/impor/program tidak otomatis masuk tahap lokal. G1 belum lulus, hosting BELUM DAPAT DINILAI. Tidak ada instalasi/migrasi/deployment pada persiapan.

## Hasil tahap G1-B2 dan batas berikutnya

G1-B2 domain/tes lokal selesai: A3 dan relasi, pengajuan/pemeriksaan/perbaikan, versi, kandidat nama dan audit teruji. [Laporan 25](25-laporan-hasil-g1b2.md) memuat 101 tes/481 assertions dan keterbatasan. Belum ada UI bisnis karena autentikasi sesi belum tersedia. Ini bukan seluruh S2/C2/DT-007/K1–K4/pangan selesai.

Tahap berikutnya harus ditinjau lewat kontrak G1-B3 tersendiri: pilih lingkup, prasyarat autentikasi, katalog/bukti sintetis, kontrol kewenangan/audit dan penerimaan. Tidak menjalankan tahap itu dari roadmap. OPD/mandat/SOP nyata, konflik E1/KB-11, bukti hosting, G5/G7 dan izin data nyata/produksi tetap terbuka.

## Hasil G1-B3.1 dan usulan B3.2

Autentikasi, aktor sesi, profil baca-saja dan audit lokal diselesaikan sesuai [hasil 30](30-laporan-hasil-g1b31.md). Seluruh tes lama dipertahankan; pengulangan Codex tidak menggantikan verifikasi independen MySQL yang dicatat pemilik. Tidak ada migrasi/paket atau operasi produksi baru.

Rekomendasi B3.2 untuk ditinjau: antarmuka draf A3/revisi/pengajuan sintetis melalui gateway sesi, dengan katalog/tujuan server, cakupan per field, kandidat, versi dan audit. Perlu mandat terpisah yang merinci rute/tindakan/prasyarat/tes. C2/field operasional, K1–K4, E1, data nyata, sink audit eksternal dan deployment bukan izin tersirat dari roadmap. Jangan menjalankan B3.2 sekarang.

## Hasil G1-B3.2 dan batas setelahnya — 7 November 2026

Mandat terbaru menggantikan usulan/larangan memulai B3.2 pada riwayat di atas. Antarmuka A3/tinjau/pengajuan/pengembalian/revisi/pengajuan ulang sintetis dilaksanakan melalui fondasi yang sudah diterima. [Laporan 34](34-laporan-hasil-g1b32.md) memuat tes, QA browser dan keterbatasan; [manifest 35](35-manifest-perubahan-g1b32.md) memuat perubahan.

Hentikan pada B3.2. Rekomendasi berikutnya: verifikasi independen MySQL/HTTP dan peninjauan keamanan, kemudian pemilik menentukan scope lokal berikutnya beserta prasyarat/tes. Editor berizin sebagian, pencarian/paginasi lengkap, bukti operasional, C2/field, pangan lanjutan, koreksi penuh, sink audit, data nyata/produksi tidak dijalankan dari rekomendasi ini. G5/G7/hosting dan konflik E1 tetap terbuka.

## Hasil dan batas G1-B3.3

Mandat C2 lokal/sintetis menggantikan batas lama C2 belum diizinkan pada riwayat fase sebelumnya. Paket minimum, verifikator berbeda, keputusan/riwayat/versi/audit dan UI berizin dijalankan sesuai [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md); bukti aktual pada [laporan 39](39-laporan-hasil-g1b33.md).

Hentikan pada B3.3. Sebelum izin berikutnya, rekomendasikan verifikasi independen MySQL/HTTP/browser/otorisasi dan peninjauan paket. Pengesahan field memerlukan katalog pemilik/mandat/bukti/transisi resmi dan scope teknis terpisah; C2 tidak membuatnya selesai. Koreksi penuh, pangan lengkap, E1, data nyata, sink audit, G5/G7 dan deployment tidak dijalankan dari roadmap ini.
