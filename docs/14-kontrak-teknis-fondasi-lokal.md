# Kontrak teknis fondasi lokal dan usulan batas G1 SIJAI UMKM

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Pembaruan setelah persetujuan G1-A — 6 November 2026:** pemilik produk telah menyetujui fondasi lokal secara terbatas; hasilnya tercatat pada [laporan G1-A](17-laporan-hasil-g1a.md) dan [panduan pemasangan](16-pemasangan-fondasi-lokal-g1a.md). Bagian persiapan di bawah yang menyebut belum diizinkan/Laravel belum dibuat adalah snapshot sebelum persetujuan, bukan status aplikasi saat ini. G1-B/data nyata/produksi tetap belum diizinkan, E1 tetap konflik terbuka.

Tanggal **6 November 2026**. **USULAN KONTRAK TEKNIS — G1-A SIAP DIAJUKAN, BELUM DIIZINKAN.** Tahap tetap perencanaan. Target fondasi MVP Laravel/Livewire/MySQL lokal yang teruji, bukan deployment. Dokumen ini menyiapkan tindakan berikutnya, tidak memerintahkan menjalankannya sekarang.

Istilah: **scaffold** kerangka awal; **dependensi** paket pendukung; **lock file** daftar versi paket pasti; **build** penyiapan aset antarmuka; **smoke test** pemeriksaan dasar kerangka berjalan; **migrasi** perubahan struktur database; **fixture/fake** bahan/pengganti fiktif untuk tes; **allowlist** daftar yang diizinkan; **clock uji** sumber waktu terkontrol; **loopback** alamat komputer sendiri.

## Dasar kontrak

[Kontrak MVP](12-kontrak-mvp-pra-coding.md), [backlog 19 item](13-backlog-mvp-terprioritas.md), baseline KB-01–18 dan DT-003/005/007/009/011 tetap sumber model. [Review prototipe](15-review-paket-prototipe-dan-kesiapan-g1.md) bukan aplikasi Laravel yang telah selesai. Tidak memindahkan Domain.php mentah ke aplikasi.

## Kemampuan lokal yang diperiksa

| Komponen | Bukti lokal | Batas kesimpulan |
| --- | --- | --- |
| OS/shell | Windows x64, PowerShell 7.6.9 | Bukan lingkungan PDN |
| PHP CLI aktif | 8.3.31 ZTS x64 melalui WinGet/PATH | Runtime CLI tersedia, web/aplikasi belum diuji |
| Ekstensi PHP | ctype/curl/dom/fileinfo/filter/hash/mbstring/openssl/pcre/PDO/session/tokenizer/xml; pdo_mysql tersedia | Prasyarat teramati, bukan semua paket sudah terintegrasi |
| PDO | Driver mysql dan sqlite | Driver bukan server; SQLite tidak mengganti penerimaan integrasi MySQL |
| Composer | 2.10.2 memakai PHP 8.3.31 | Belum install/resolve proyek |
| Node/npm | 24.13.1 / 11.8.0 melalui npm.cmd | Belum install/build proyek |
| Git | 2.53.0.windows.1; proyek belum .git | Tidak menjalankan init/commit/push sekarang |
| MySQL pada PATH | mysql/mariadb tidak ditemukan | MySQL proyek belum terbukti siap, bukan klaim seluruh mesin kosong |
| Laragon | Folder mysql-8.4.3-winx64/PHP 8.3.30 ada; bin mysql.exe/mysqld.exe/php.exe yang diperiksa tidak ada | Nama folder bukan bukti versi/runtime siap |
| XAMPP | mysql.exe Distrib 10.4.32-MariaDB dan mysqld.exe 10.4.32-MariaDB | **MariaDB bukan MySQL**, tidak diganti otomatis |
| Layanan/proses DB | Tidak terdeteksi nama layanan/proses mysql/mariadb/mysqld dalam pemeriksaan terbatas | Tidak query/koneksi/pindai port atau memulai service; instance lain tidak disangkal |
| Docker/Podman | Tidak ditemukan pada PATH | Tidak diasumsikan tersedia atau dipasang |
| Proyek | Belum Laravel/vendor/node_modules/composer/package manifest aplikasi | Tidak mengklaim stack sudah terintegrasi |
| PDN/cPanel | Tidak diakses | **BELUM DAPAT DINILAI** |

Tidak membaca .env/kredensial/my.ini/dump/database/data pribadi atau phpinfo. Binary DB hanya diperiksa dengan **--no-defaults --version**, bukan menjalankan server/koneksi.

## Rujukan resmi dan dependensi yang diajukan

Rujukan publik diperiksa pada 6 November 2026. [Laravel deployment](https://laravel.com/framework/docs/deployment) mensyaratkan PHP 8.3+ beserta ekstensi tersebut. [Manifest skeleton Laravel 13](https://raw.githubusercontent.com/laravel/laravel/13.x/composer.json) yang diperiksa memakai PHP ^8.3, framework ^13.17, tinker ^3.0 dan PHPUnit ^12.5.12. Branch dapat berubah; versi pasti baru dikunci melalui resolusi setelah izin.

[Manifest Livewire 4](https://raw.githubusercontent.com/livewire/livewire/4.x/composer.json) mendukung komponen Illuminate 10–13; target tetap Laravel 13/Livewire 4. [Instalasi Livewire](https://livewire.laravel.com/docs/4.x/installation) menyertakan Alpine, sehingga jangan memuat ganda. [Vite](https://vite.dev/guide/) mensyaratkan Node 20.19+/22.12+; Node 24.13.1 teramati, seluruh rantai dependensi belum diuji. [Tailwind/Laravel](https://tailwindcss.com/docs/installation/framework-guides/laravel/vite) menyediakan integrasi plugin Vite. Ini pemeriksaan prasyarat, bukan G2 lulus.

| Kebutuhan | Kandidat allowlist langsung | Ketentuan |
| --- | --- | --- |
| Framework | laravel/framework ^13.17, PHP ^8.3 pada runtime aktif 8.3.31; laravel/tinker ^3.0 | Skeleton resmi ditinjau ulang, tanpa ignore-platform-reqs; versi exact dari resolusi berizin |
| UI | livewire/livewire major 4, Blade | Tanpa starter kit akun publik/paket UI berbayar |
| CSS/build | tailwindcss major 4, @tailwindcss/vite, Vite, laravel-vite-plugin kompatibel | Versi exact lewat lock/build; jangan tambah paket global |
| Tes | phpunit/phpunit ^12.5.12, mockery/mockery ^1.6, fakerphp/faker ^1.23, nunomaduro/collision ^8.6 | Kandidat dev minimal, data sintetis; Pest tidak ditambahkan otomatis |
| Paket opsional skeleton | Pail/Pao/Pint dan alat tambahan tidak diperlukan smoke pertama | Tinjau manifest sebelum install; tidak memasang opsional/global/alat AI tambahan diam-diam |
| Database | MySQL lokal, versi/bin/service harus ditetapkan pada G1-B | Tidak mengganti MariaDB/SQLite atau memasang server pada G1-A |
| Modul/hak/audit | Struktur/layanan internal, tanpa paket modul/RBAC/audit tambahan dahulu | Redis/Supervisor bukan syarat otomatis |

Allowlist mencakup dependensi transitif yang diperlukan paket langsung tersebut setelah manifest/hook ditinjau; versi persis dicatat pada lock. Jika diperlukan paket langsung/alat baru atau perubahan platform di luar scope, laporkan untuk keputusan scope berikutnya. Tidak menurunkan Laravel/mengganti DB/mengabaikan requirement diam-diam.

## Risiko inisialisasi dan perlindungan proyek

Proyek tidak kosong: dokumentasi/arsip harus dipertahankan. Setelah izin, scaffold dibuat di folder sementara baru, lalu dipromosi memakai daftar file yang ditinjau; jangan menimpa AGENTS/docs/README/ZIP pengguna. Git init lokal hanya jika termasuk persetujuan, tanpa commit/push/remote otomatis. .gitignore mendahului .env/key dan mengecualikan rahasia/cache/vendor/node_modules/arsip/temp.

Manifest skeleton yang diperiksa mempunyai hook pembuatan key, SQLite dan migrasi; setup juga dapat menjalankan migrasi. **G1-A tidak mengizinkan pembuatan database/migrasi**: nonaktifkan auto-script awal, tinjau hook lalu jalankan manual hanya tindakan dalam izin. Jangan menjalankan create-project/setup/dev script secara buta. Tidak membuat database.sqlite atau migrate/seed pada A.

File migrasi default dapat muncul sebagai artefak scaffold, tetapi tidak dijalankan atau dianggap skema bisnis disetujui. Penulisan migrasi domain/fixture DB hanya setelah G1-B. APP_KEY lokal bila perlu tidak dilacak/dicetak; .env.example hanya placeholder aman. Session/cache/test fondasi harus memakai driver tanpa DB; tidak mengubahnya menjadi SQLite agar smoke lulus.

## Struktur modul usulan

Satu repository/aplikasi/SSOT. Modular monolith berarti satu aplikasi dengan batas tanggung jawab jelas, tanpa paket modular tambahan.

| Modul/jalur kelak | Tanggung jawab | Batas |
| --- | --- | --- |
| app/Modules/Shared/ | ID internal, clock uji, rujukan versi/hasil kesalahan aman | Bukan master/hak global |
| app/Modules/IdentityAccess/ | Akun internal, keterkaitan OPD, katalog D1, M1/penugasan dan pemeriksaan server | Tidak menentukan OPD pemilik atau mengaktifkan E1 |
| app/Modules/Registry/ | Pihak/Orang/Badan/Unit, M:N, lokasi/kegiatan, A3/B1/C2, kandidat duplikasi | Bukan master OPD/akun masyarakat/merge historis otomatis |
| app/Modules/Governance/ | Katalog field/pemilik H2, klaim/bukti, koreksi K1–K4/V2, konflik, agregasi DT-007 | Bukan penetapan OPD/bukti resmi atau penggantian E1 |
| app/Modules/FoodIndustry/ | Profil pangan/produk/bahan/peralatan/pengukuran berperiode | Tidak menggandakan Unit atau meratakan record berulang |
| app/Modules/Audit/ | Event kritis, kontrak pengiriman/retry/rekonsiliasi salinan | Fake/salinan lokal bukan bukti kontrol independen produksi |
| app/Modules/Reporting/ | Pencarian/rekap proyeksi berizin | Tanpa endpoint/file ekspor/unduh E1 atau publikasi |

app/Livewire dan Blade hanya adapter antarmuka. Logika domain/layanan aplikasi dipakai semua jalur server; Eloquent/komponen bukan satu-satunya tempat otorisasi. Hindari lapisan kosong berlebihan.

## Kontrak lintas modul

- ID internal stabil, calon ULID masih usulan desain fisik. Orang/Badan/Unit/kegiatan/akun terpisah; M:N/peran/masa tetap, bukan owner_id tunggal.
- Pemilik field DT-005 terpisah penugasan pengguna. Tepat satu pemilik aktif pada kode/cakupan/waktu; irisan umum/subcakupan tidak diselesaikan otomatis dengan “paling khusus”. Constraint unik persis saja tidak cukup; pemeriksaan irisan dan serialisasi/transaksi perlu desain serta tes MySQL sebelum aktivasi.
- D1 katalog sah, M1 seluruh mandat aktif dengan scope asal, pembatasan/larangan tugas tetap. Cek akun/OPD/field/objek/tindakan/tujuan/sensitivitas/waktu di server pada aksi terkait. Boolean dari klien bukan mandat/bukti sah.
- A3 lengkap sebelum draf termasuk jenis/peran pihak, sumber/petugas/waktu. NIB tidak wajib sampai C2; verifier awal beridentitas aktif berbeda pembuat. Field biasa satu pengesah sah, induk bukan seluruh sektor.
- Nilai resmi/usulan/versi/periode/efektif/keputusan dipisah. Dua usulan serentak tidak overwrite; versi dasar usang diperiksa ulang. K3 membetulkan periode tepat, future tidak prematur; gunakan clock uji tetap tanpa menutup DT-034.
- Mutasi kritis/versi/keputusan/event operasional atomik pada MySQL. Pengiriman salinan pascacommit tahan gangguan/retry/ID stabil/rekonsiliasi. Transactional outbox kandidat, bukan teknologi final; fake port lokal bukan bukti salinan produksi independen.
- Bukti/asal/alasan sensitif privat/minimum, respons Livewire/log tidak berisi NIK lengkap atau rahasia. Fixture/akun/OPD/katalog tes fiktif, bukan penetapan nyata. Kelas final/JRA/mandat tetap terbuka.
- DT-011 tetap **C+D1+M1+E1**, konflik terhadap RB-11.07/21/T11-14 **TERBUKA**. Tidak membangun/mengaktifkan unduh/ekspor bisnis/bukti sensitif. Guard fitur tertahan bukan E2 atau konflik selesai; variasi label tindakan tidak boleh membuka jalur.

## Rencana perubahan file kelak

| File/jalur | Rencana | Tahap/batas |
| --- | --- | --- |
| .gitignore; .env.example | Pengabaian lebih dahulu, contoh aman | G1-A; .env/key tidak dilacak/dicetak |
| composer.json; composer.lock | Framework/UI/dev dependencies disetujui dan versi terkunci | G1-A; hook/allowlist ditinjau sebelum install |
| package.json; package-lock.json; vite.config.*; resources/css/app.css | Vite/Tailwind/build | G1-A, Alpine tidak ganda |
| artisan; bootstrap/*; public/index.php; routes/*; config/* | Kerangka/health/smoke lokal aman | G1-A; tanpa rute bisnis/ekspor atau script DB otomatis |
| app/Livewire/*; resources/views/* | Komponen sintetis pembuktian stack | A smoke saja; bisnis B sesuai scope |
| app/Modules/* | Tujuh batas domain/layanan/persistensi usulan | Domain/persistensi G1-B, bukan copy Domain.php |
| database/migrations/*; database/factories/*; database/seeders/* | Default generator ditinjau pada A; domain/fixtures pada B | Tidak menjalankan default pada A; tidak seed OPD nyata |
| tests/Unit/*; tests/Feature/*; tests/Fixtures/*; phpunit.xml | Fondasi tanpa DB pada A; domain/Livewire/MySQL/negatif B | Data sintetis dan clock terkontrol |
| storage/app/private/*; storage/logs/*; bootstrap/cache/* | Runtime lokal privat/minimum | Tidak dilacak kecuali placeholder; tanpa dokumen pribadi |
| AGENTS.md; docs/* | Status/kontrak/bukti sesuai izin aktual | Tidak mengubah keputusan atau mengklaim hasil belum diuji |

Daftar ini belum menjadi file aplikasi. Penulisan kode menunggu izin scope terkait.

## Urutan kelompok migrasi konseptual

**Tidak membuat SQL/file migrasi sekarang.** M00–M09 hanya urutan teknis usulan, bukan nomor KB/DT atau skema fisik final. Foreign key/index/versi dan potensi siklus ditinjau pada G1-B; sebagian kelompok boleh digabung bila desain membenarkan.

| Urutan | Kebutuhan konseptual | Dependensi/kendali |
| --- | --- | --- |
| M00 | Pengguna internal/rujukan organisasi/penugasan fiktif minimum | Akun berbeda Orang; default generator ditinjau, tidak dieksekusi A |
| M01 | Audit operasional minimum/niat kirim tahan gangguan | Aktor dasar; sebelum mutasi bisnis; outbox kandidat |
| M02 | Definisi field/versi, cakupan/pemilik, katalog/mandat izin | Rujukan organisasi/pengguna konsisten; kendali irisan/efektif |
| M03 | PIHAK, ORANG/BADAN_USAHA, UNIT_USAHA | ID internal, tidak NIK/NIB primary key |
| M04 | M:N pihak–Unit/peran/masa, lokasi/cabang, kegiatan/KBLI versi | Master siap, alamat pihak bukan lokasi; merek bukan Unit |
| M05 | Registrasi/pengajuan, minimum/bukti/klaim/metadata privat/keputusan awal | Akses/audit/master sebelum aktivasi; A3/B1/C2 tetap |
| M06 | Versi nilai/efektif, koreksi/K1–K4/V2, kasus/subkasus/pembatasan/evaluasi | Rujukan klaim/mandat/keputusan/audit; sejarah tidak ditulis ulang |
| M07 | Profil sektoral/industri, kegiatan, produk/bahan/peralatan/kendala/kebutuhan | Unit/kegiatan dan hak siap; record terkait |
| M08 | Pengukuran produksi/versi/produk/satuan/periode/sumber/verifikasi | Produk/aturan/audit siap; tidak otomatis mesin skala DT-031 |
| M09 | Indeks/proyeksi pencarian/rekap jika perlu | Data/agregasi/hak siap; bukan master kedua/ekspor atau bukti benchmark |

Default cache/jobs/session dari generator tidak otomatis harus memakai tabel. Tidak mengaktifkan impor, merge historis berisiko, program KB-16 atau mesin skala dari daftar ini.

## Penerimaan lokal yang direncanakan

**44 AC usulan, belum dijalankan pada aplikasi.** Bukan KB/DT/RB/T baru yang dianggap disepakati. Peta sumber mempertahankan substansi, seluruh bahan/mandat/katalog tes harus fiktif.

| ID rencana | Tahap | Hasil yang harus dibuktikan | Jejak backlog/sumber |
| --- | --- | --- | --- |
| AC-F01 | G1-A | PHP/Composer/Node/npm dan versi lock cocok tanpa mengabaikan requirement | S0-03; KB-14 |
| AC-F02 | G1-A | Git hanya bila disetujui; .gitignore lebih dahulu; rahasia/arsip/temp tidak dilacak | S0-03; KB-11 |
| AC-F03 | G1-A | Kerangka Laravel dan komponen Livewire sintetis dirender lokal tanpa DB | S0-03 |
| AC-F04 | G1-A | Build Tailwind/Vite dari paket terkunci berhasil, Alpine tidak ganda | S0-03 |
| AC-F05 | G1-A | Tidak ada database.sqlite, migrate/seed, koneksi DB atau service DB dari hook setup | Batas G1-A |
| AC-F06 | G1-A | Tidak ada rute/fitur unduh/ekspor bisnis atau bukti sensitif | S3-03; DT-011 |
| AC-F07 | G1-A | Dokumen/AGENTS/arsip terlindungi saat promosi scaffold dengan daftar file | S0-03 |
| AC-F08 | G1-A | Tanpa akun nyata/fitur di luar fondasi; bukti hasil terpisah dari G3/G5/G7 | S0-03 |
| AC-I01 | G1-B | Satu pihak dua Unit tetap dua, tidak auto-merge hanya karena pemilik/nama sama | S1-01; KB-01/03 |
| AC-I02 | G1-B | Dua pihak pada satu Unit memakai M:N/peran/masa, tanpa owner tunggal | S1-01; KB-09 |
| AC-I03 | G1-B | Orang/Badan/Unit/akun terpisah, ID internal bukan NIK/NIB/nama | S1-01; KB-03 |
| AC-I04 | G1-B | Cabang dalam kasus sintetis yang memenuhi KB-01 tidak otomatis Unit baru | S1-02; KB-01 |
| AC-I05 | G1-B | Alamat pihak/kegiatan/merek tidak otomatis menjadi lokasi/Unit/KBLI baru | S1-02; KB-09/10 |
| AC-R01 | G1-B | Setiap unsur A3 hilang ditolak, termasuk jenis/peran pihak dan petugas/waktu | S2-01; DT-003 |
| AC-R02 | G1-B | Tanpa NIB boleh draf/pengajuan/pengesahan jika syarat lain sah pada katalog uji | S2-01/02; T-DT003.11–13 |
| AC-R03 | G1-B | Boolean klien tidak cukup untuk bukti/mandat; verifier kosong/tak aktif ditolak | S2-02; DT-003/005/009 |
| AC-R04 | G1-B | Pembuat ditolak mengesahkan profil sendiri walau memiliki dua peran | S2-02; T-DT003.17/T-DT011.07 |
| AC-R05 | G1-B | Katalog belum sah → belum dapat dinilai; induk sah bukan seluruh field/sektor | S2-02; T-DT003.19/23; DT-007 |
| AC-A01 | G1-B | Pemilik tunggal per field/scope/efektif, termasuk irisan dan dua transaksi serentak | S3-01; DT-005 |
| AC-A02 | G1-B | H2 tidak memajukan hak; histori/antrean tetap, mandat lama habis ditolak | S3-01; DT-005 |
| AC-A03 | G1-B | D1 katalog sah memberi dasar yang ditetapkan, bukan NIK/sahkan otomatis | S3-02; T-DT011.01/02 |
| AC-A04 | G1-B | Dua mandat aktif dihimpun M1 tanpa silang field/wilayah/tujuan | S3-02; T-DT011.03/05/06 |
| AC-A05 | G1-B | Mandat/akun dicabut tidak dipakai; pemasok/admin/koordinator bukan global | S3-02; T-DT011.04/10–12/24 |
| AC-A06 | G1-B | Livewire/permintaan langsung memeriksa server; penolakan dan respons tidak bocor | S3-02; T-DT011.14/15/26/27 |
| AC-X01 | A/B negatif | Tidak ada jalur ekspor/unduh bisnis; EXPORT_DATA/DOWNLOAD_EVIDENCE tidak aktif | S3-03; T-DT011.19/29 |
| AC-X02 | A/B negatif | Grant sintetis cocok pun tidak mengaktifkan fitur tertahan; bukan lulus dari grant absen | S3-03; P-01 |
| AC-V01 | G1-B | Agregasi tidak lulus dari katalog kosong/tidak sah atau field wajib belum sah | S4-01; DT-007 |
| AC-V02 | G1-B | Konflik relevan menahan positif, alasan sensitif tidak bocor di ringkasan | S4-01; DT-007/011 |
| AC-E01 | G1-B | Identitas bukan bukti relasi, nomor izin Excel bukan verifikasi, bukti dinilai per klaim | S4-02; DT-009 |
| AC-E02 | G1-B | Waktu diterima/berlaku/periode/versi berbeda; MEMADAI bukan pengesahan | S4-02; DT-009 |
| AC-C01 | G1-B | Usulan sungguhan tidak menimpa resmi; penolakan tidak memulihkan lama tak sah | S4-03; DT-009 V2 |
| AC-C02 | G1-B | Dua usulan versi sama: yang kedua diperiksa ulang, tidak lost update | S4-03; DT-009 |
| AC-C03 | G1-B | K3 membetulkan lingkup/periode lampau tepat, tidak menimpa kini berbeda makna | S4-03; DT-009; P-04 |
| AC-C04 | G1-B | Tanggal invalid ditolak, future tidak prematur, clock uji tetap | S4-03; DT-009; P-05 |
| AC-L01 | G1-B | Gagal audit kritis membatalkan bisnis/versi/keputusan bersama dalam transaksi MySQL | S4-04; KB-12 |
| AC-L02 | G1-B | Gagal kirim salinan pascacommit → tertunda/retry, bisnis sah tidak diam-diam batal | S4-04; KB-12 |
| AC-L03 | G1-B | ID stabil/retry tidak mengganda; ID sama isi beda ditandai; event lama tetap | S4-04; KB-12 |
| AC-P01 | G1-B | Satu Unit tiga produk/merek tetap satu Unit dengan record produk terpisah | S5-01; T09-17/18 |
| AC-P02 | G1-B | Satu produk banyak bahan/peralatan terkait; draf sektor bukan terverifikasi | S5-01; T09-19/26 |
| AC-P03 | G1-B | Januari/Februari tersimpan terpisah; kapasitas berbeda realisasi | S5-02; T09-20/21 |
| AC-P04 | G1-B | Satuan berbeda tidak dijumlah otomatis tanpa konversi baku sah | S5-02; T09-22 |
| AC-P05 | G1-B | Koreksi produksi menjaga sejarah; pemilik/nonpemilik diuji pada server | S5-02; T09-23–25 |
| AC-Q01 | G1-B | Hitungan Unit/Orang/produk tidak ganda dari M:N atau banyak record sektor | S5-03; KB-09 |
| AC-Q02 | G1-B | Pencarian/rekap hanya proyeksi/scope baca, tanpa ekspor/publikasi | S5-03; KB-11; DT-007/011 |

G1-A hanya AC fondasi/negatif tanpa DB atau bisnis. G1-B per scope, bukan otomatis semua backlog sekaligus. Transaksi/index/locking harus diuji pada MySQL terpilih, bukan mengganti SQLite. **148 T-DT dan 294 T-KB tetap rencana sesuai lingkup masing-masing**; 15 tes prototipe tidak menggantikannya.

## Batas persetujuan yang diajukan

**G1-A/B adalah tahap persetujuan di dalam G1, bukan gerbang baru atau pernyataan G1 lulus.**

| Butir | G1-A siap diajukan sekarang | G1-B terpisah |
| --- | --- | --- |
| Tujuan | Fondasi Laravel 13/Livewire 4/Tailwind tanpa DB | MySQL lokal/domain/persistensi scope tertentu |
| Lokasi | D:\SIJAI UMKM; scaffold folder sementara baru, promosi daftar file tanpa menimpa dokumen/arsip | Lingkungan lokal sintetis terisolasi yang ditetapkan |
| Tindakan | Install dependensi Composer/npm allowlist, lock/build, Git init lokal bila disetujui, key lokal untracked, smoke/unit/Livewire tanpa DB | Pilih/instal server MySQL bila perlu, DB/akun uji, migrasi/domain/fixtures/tes MySQL setelah rincian dan izin cukup |
| Jaringan | Unduhan paket publik disetujui; preview bila perlu hanya loopback | Hanya DB lokal ditetapkan; bukan produksi/layanan resmi |
| Database | **Tidak install/start/koneksi DB, membuat DB/SQLite, migrate/seed atau menulis migrasi domain** | Izin khusus versi/lokasi/pengelolaan kredensial; tidak MariaDB XAMPP diam-diam |
| Data | Sintetis, tanpa akun/dokumen nyata | Fixture/katalog/OPD/mandat fiktif, bukan penetapan resmi |
| Ekspor/unduh | Tidak dibuat/diaktifkan | Tetap BLOKIR konflik E1, bukan tes ekspor berhasil |
| Bukti selesai | Lock/build/tes fondasi, no SQLite/migrasi otomatis, dokumen utuh, daftar perubahan/batas | Integrasi/rollback/audit/hak/konkurensi per scope, bukan hosting/produksi siap |
| Status kini | **SIAP DIAJUKAN; BELUM DIIZINKAN** | **BELUM DIIZINKAN; MySQL/desain/scope belum final** |

Persetujuan terpisah diperlukan oleh instruksi pengguna poin 10 dan DT-028: instalasi/migrasi/deployment setelah G1 tahap terkait disetujui. Setelah A selesai, hasilnya menjadi bahan B; A tidak memberi izin B/data nyata/produksi atau menyelesaikan DT-011.

G0 siap ditinjau, belum disetujui baseline; G1/G5/G7 BELUM LULUS; G2/G3/G4/G6 BELUM DINILAI. Hosting BELUM DAPAT DINILAI. Tidak ada instalasi/migrasi/deployment dalam pekerjaan persiapan ini.

## Kontrak tambahan G1-B3.2

[Dokumen 32](32-kontrak-antarmuka-registrasi-g1b32.md) menjadi kontrak antarmuka A3/pengajuan sintetis berdasarkan persetujuan terbaru. Stack/lock/sembilan migrasi tetap; tidak ada paket baru. Formulir Livewire CSP safe dan sesi/gateway server menambah lapisan UI, tanpa mengganti domain B2. [Panduan 33](33-panduan-alur-registrasi-g1b32.md) menjelaskan demo terpisah dari demo baca-saja B3.1. [Hasil 34](34-laporan-hasil-g1b32.md) membatasi bukti tes/HTTP/visual pada lingkungan lokal. Hosting PDN/cPanel belum terbukti; bukan izin instalasi/deployment selanjutnya.

## Tambahan teknis G1-B3.3

[Kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md) menambah C2 lokal/sintetis pada layanan/gateway yang ada. Tidak ada dependensi atau rewrite. Satu migrasi maju 010 menambah katalog/keputusan/rujukan bukti append-only; dev/test SIJAI lokal saja, runtime hanya SELECT/INSERT untuk tambahan tersebut. Fresh/rollback hanya test. Aktor/tujuan/waktu dari server, versi/sidik katalog/idempotensi dan audit wajib tetap. [Hasil 39](39-laporan-hasil-g1b33.md) bukan bukti hosting/produksi atau verifikasi independen.
