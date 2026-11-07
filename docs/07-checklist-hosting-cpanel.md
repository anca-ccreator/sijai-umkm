# Checklist audit kesiapan hosting PDN/cPanel — KB-14

Tanggal penyusunan/rujukan dokumentasi: **5 November 2026**. **KB-14 Model B disepakati: audit kesiapan sebelum penetapan konfigurasi teknis dan deployment.**

**Hasil awal hosting: BELUM DAPAT DINILAI.** Bukti aktual PDN belum tersedia. Dokumen ini formulir audit dan rencana pembuktian, **bukan laporan pemeriksaan server**. Tidak ada login, pemindaian, koneksi hosting, pengujian URL PDN, file uji, perubahan server/DNS atau deployment.

## Batas penggunaan dan riwayat

Formulir ini memperbarui checklist pada berkas yang sama, dengan 55 pemeriksaan dalam sepuluh kelompok dan 13 kolom. Format status lama BELUM/LULUS/GAGAL/TIDAK BERLAKU diganti format KB-14; bukti yang belum ada tetap belum diketahui. Versi lama tersimpan di ZIP historis. [Kondisi awal lokal](01-kondisi-awal.md) tidak diubah dan **bukan bukti PHP/MySQL atau kapasitas PDN**.

Pengelola hosting/pihak berwenang dapat menyiapkan ringkasan tersanitasi melalui penugasan tersendiri. Dokumen ini tidak mengirim permintaan, menunjuk petugas, memberi mandat server kepada Codex atau mengizinkan uji langsung. **Jangan meminta, membaca atau menyimpan kredensial, connection string rahasia, dump, IP privat sensitif, data pribadi atau isi .env.**

## Baseline kandidat dan rujukan resmi

Laravel 13, Livewire 4, MySQL dan Tailwind/modular monolith tetap arah proyek; untuk penilaian deployment diperlakukan sebagai **baseline kandidat**, bukan konfigurasi final atau bukti kelayakan. MariaDB diperiksa sebagai produk berbeda jika dilaporkan tersedia; mengganti MySQL atau versi teknologi perlu keputusan terpisah.

| Komponen | Baseline / pokok pemeriksaan | Rujukan resmi yang dibaca |
| --- | --- | --- |
| Laravel 13 / PHP | PHP minimal 8.3; Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer, XML; public sebagai root web dan hak tulis aman storage/bootstrap/cache | [Deployment Laravel 13](https://laravel.com/framework/docs/13.x/deployment) |
| Livewire 4 | Versi paket/dependensi dan aset/aksi diuji kelak pada lingkungan berizin; minimum proyek tetap mengikuti Laravel 13 | [Quickstart Livewire 4](https://livewire.laravel.com/docs/4.x/quickstart) |
| Database | Jenis/versi MySQL atau MariaDB, driver PDO yang tepat, transaksi dan dukungan dependensi dibuktikan; tidak memilih versi server dari asumsi | [Database Laravel 13](https://laravel.com/framework/docs/13.x/database) |
| Composer | Metode dependensi tersedia di server yang diizinkan atau build terpercaya yang cocok target; jangan menganggap Composer sudah disertakan cPanel | [Composer pada cPanel](https://docs.cpanel.net/knowledge-base/web-services/how-to-set-up-php-composer/) |
| Aset frontend | Build produksi dapat dilakukan terpisah lalu artefak/manifest diverifikasi; Node runtime permanen tidak otomatis dibutuhkan | [Vite Laravel](https://laravel.com/framework/docs/13.x/vite) |
| Cron/scheduler | Kemampuan penjadwalan, batas dan pencegahan tumpang tindih dibuktikan; penyedia dapat mengaktifkan/menonaktifkan fitur Cron Jobs | [Cron cPanel](https://docs.cpanel.net/cpanel/advanced/cron-jobs/), [Scheduler Laravel](https://laravel.com/framework/docs/13.x/scheduling) |
| Queue/background | Metode eksekusi/retry/pemantauan dibuktikan sesuai kebutuhan; tidak menetapkan Redis, Supervisor atau daemon sebagai syarat otomatis | [Queues Laravel](https://laravel.com/framework/docs/13.x/queues) |

URL resmi di atas tersedia saat rujukan dibaca. Dokumentasi cPanel Composer menjelaskan bahwa penggunaannya pada akun memerlukan SSH dan, pada versi cPanel tertentu, paket Composer tidak lagi disertakan. **Ini tidak membuktikan versi/fitur akun PDN.** Alternatif build/deployment oleh pihak berwenang harus dibuktikan, bukan dianggap pasti berhasil.

Tidak menyalin contoh konfigurasi, skrip uji atau perintah instalasi/deployment untuk dijalankan. PHP web dan CLI diperiksa terpisah; kesamaan angka versi belum menjamin ekstensi/konfigurasinya sama. Driver pdo_mysql diperiksa selain daftar ekstensi dasar framework.

## Cara mengisi formulir

- **Kondisi aktual:** selama belum ada bukti tulis **BELUM DIKETAHUI**, termasuk fitur yang disebut dokumentasi publik. Tidak ada kondisi aktual yang dinyatakan memenuhi sekarang.
- **Sumber bukti:** nomor/rujukan dokumen atau ringkasan tersanitasi, lingkup/lingkungan dan pemilik bukti. Jangan tempel output mentah, tangkapan layar yang belum disanitasi, rahasia atau data pribadi.
- **Tanggal/pemeriksa:** tanggal pemeriksaan aktual dan fungsi/jabatan berwenang setelah ditetapkan. Tanggal penulisan dokumen bukan tanggal server diuji; jangan mengarang petugas.
- **Status per item:** Memenuhi / Tidak Memenuhi / Belum Diketahui / Tidak Relevan. Tidak Relevan perlu alasan lingkup dan persetujuan sah; tidak boleh dipakai meniadakan kontrol kritis.
- **Kritikalitas:** Kritis / Tinggi / Menengah pada formulir adalah prioritas awal dari dampak potensial. Tingkat akhir mengikuti bukti/dampak aktual; tugas terjadwal yang menopang audit kritis bisa meningkat kritikalitasnya.
- **Mitigasi/tindak lanjut:** tulis rencana dan penanggung jawab setelah ditugaskan. Rencana atau janji tidak menutup kesenjangan; status penyelesaian berubah hanya setelah bukti mitigasi dan verifikasi tersedia.

### Ringkasan keadaan saat ini

| Unsur | Keadaan |
| --- | --- |
| Seluruh 55 kondisi aktual | BELUM DIKETAHUI |
| Seluruh 55 status item | Belum Diketahui |
| Bukti/tanggal pemeriksaan PDN/pemeriksa | Belum tersedia / belum diperiksa / belum ditetapkan |
| Penanggung jawab tindak lanjut | Belum ditetapkan |
| Kesenjangan aktual terkonfirmasi | Belum dapat ditetapkan; daftar risiko adalah potensi yang harus diperiksa |
| Hasil keseluruhan | BELUM DAPAT DINILAI |

## Formulir audit hosting

### 1. Identitas dan jenis layanan hosting

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-01 | Identitas layanan | Jenis/paket/pengelola PDN/cPanel dan batas layanan diidentifikasi tanpa alamat rahasia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Salah menganggap fitur/mandat tersedia | Minta ringkasan layanan dan dukungan tersanitasi | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-02 | Kewenangan infrastruktur | Mandat pengelola/server, hak administrator dan pemberi persetujuan jelas | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Akses atau perubahan tanpa wewenang | Minta dasar penugasan tanpa identitas pribadi/rahasia | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-03 | Dukungan dan perubahan layanan | Prosedur dukungan, pembaruan runtime, maintenance dan persetujuan perubahan tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Gangguan tidak tertangani | Minta kebijakan dukungan dan alur persetujuan | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-04 | Lingkungan uji terpisah | Staging/pengembangan terpisah dan hanya data sintetis, rencana rilis/pembatalan sah | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Uji menyentuh produksi/data nyata | Minta rancangan pemisahan dan bukti kelak oleh pihak berwenang | Belum ditetapkan | Terbuka — menunggu bukti |

### 2. PHP dan ekstensi

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-05 | PHP web | Laravel 13 kandidat memerlukan PHP minimal 8.3; versi tepat didukung paket yang dipilih | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Runtime aplikasi tidak kompatibel | Minta versi/runtime web dan bukti dukungan | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-06 | PHP CLI | Versi/binary/konfigurasi CLI untuk tugas dan Composer diperiksa terpisah dari web | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Web cocok tetapi tugas terjadwal gagal | Minta bukti web dan CLI terpisah, tanpa perintah Codex ke server | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-07 | Ekstensi PHP wajib | Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer, XML pada konteks yang digunakan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Aplikasi/dependensi tidak berjalan | Minta daftar ekstensi web/CLI tersanitasi | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-08 | Driver database PHP | Driver PDO MySQL/pdo_mysql sesuai database target dan PHP web/CLI yang memerlukannya | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Koneksi aplikasi/tugas gagal | Minta konfirmasi driver tanpa connection string | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-09 | Konfigurasi dan paket PHP | Batas/larangan fungsi serta ekstensi tambahan cocok dengan dependensi/lock yang kelak disetujui | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Paket terpasang tetapi operasi diblokir | Minta batas konfigurasi; kecocokan lock dibuktikan setelah izin instalasi | Belum ditetapkan | Terbuka — menunggu bukti |

### 3. Database

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-10 | Jenis dan versi server database | MySQL baseline kandidat; produk/versi aktual, dukungan framework/dependensi dan pembaruan dibuktikan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Produk/versi tidak kompatibel | Minta produk/versi tanpa kredensial; MariaDB perlu keputusan terpisah jika pengganti | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-11 | Transaksi dan integritas | Transaksi/foreign key InnoDB dan konsistensi perubahan kritis/audit dapat dipenuhi | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Nilai/relasi/audit tidak konsisten | Minta bukti kemampuan; uji sintetis kelak dengan izin tersendiri | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-12 | Konfigurasi teks/SQL | utf8mb4, collation dan mode SQL kompatibel serta konsisten antarlingkungan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Data berubah makna atau validasi berbeda | Minta ringkasan konfigurasi aman dan rencana keseragaman | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-13 | Akses database minimum | Akun aplikasi, migrasi, audit dan pengelola dibatasi sesuai tugas; transport aman bila melintas jaringan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Akun aplikasi menguasai seluruh data/administrasi | Minta matriks hak tersanitasi, tanpa akun/password nyata | Belum ditetapkan | Terbuka — menunggu bukti |

### 4. Composer dan asset build

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-14 | Metode Composer | Composer pada lingkungan yang diizinkan atau artefak dependensi dari build terpercaya tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Menengah (awal) | Dependensi tidak dapat disiapkan | Minta metode build yang dapat dibuktikan; jangan instal sekarang | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-15 | Kecocokan artefak dependensi | Versi terkunci, asal artefak dan syarat platform target dapat diverifikasi tanpa mengabaikan persyaratan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Vendor dari build berbeda gagal atau tidak terpercaya | Rancang bukti lock/artefak dan verifikasi platform oleh pihak sah | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-16 | Build frontend | Aset Tailwind/Vite dapat dibangun pada lingkungan terpisah terpercaya dan disajikan sebagai aset produksi | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Menengah (awal) | Aset/manifest tidak sesuai atau tak tersedia | Minta alur build/transfer aset; Node permanen tidak otomatis wajib | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-17 | Aset dan interaksi Livewire | JavaScript/CSS, routing dan aksi Livewire 4 berfungsi pada versi/HTTPS terpilih | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Login tampil tetapi formulir tidak bekerja | Rencanakan bukti uji staging kelak, bukan uji PDN sekarang | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-18 | SSH/Terminal atau alternatif aman | Metode penerapan/pemeliharaan terkontrol terbukti, tanpa endpoint web publik untuk perintah administrasi | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Menengah (awal) | Tidak ada cara rilis/pemeliharaan aman | Minta metode pengelola/artefak alternatif; tanpa memberi izin deployment | Belum ditetapkan | Terbuka — menunggu bukti |

### 5. Document root, direktori privat dan file permission

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-19 | Document root | Web hanya mengarah ke public Laravel, tidak akar proyek | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Kode/konfigurasi terbuka | Minta bukti pemetaan root yang disanitasi | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-20 | Dokumen identitas/bukti | Dokumen identitas dan bukti kepemilikan disimpan di luar akses web publik | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Kebocoran data pribadi | Minta rancangan storage privat dan bukti keamanan oleh pihak berwenang | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-21 | Konfigurasi/kode privat | File .env, kode aplikasi dan direktori dependensi tidak dilayani sebagai file publik | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Rahasia/implementasi terekspos | Minta bukti pembatasan tanpa isi konfigurasi nyata | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-22 | Backup privat | Backup/dump/arsip tidak dapat diambil lewat URL publik | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Kebocoran seluruh data | Minta kebijakan penyimpanan dan bukti sanitasi akses | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-23 | Direktori tulis | storage dan bootstrap/cache dapat ditulis proses yang sah dengan hak minimum | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Aplikasi gagal atau direktori terbuka | Minta matriks owner/permission aman; tidak memilih izin 777 | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-24 | Pemisahan akun/hak | Akun layanan/administrator dan akses darurat dibatasi serta tercatat | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Satu hak menguasai seluruh lapisan | Minta matriks kontrol dan persetujuan, tanpa nama akun sensitif | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-25 | Unduh terotorisasi | Akses dokumen privat/ID langsung tetap memerlukan otorisasi server KB-11 | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Tautan melewati pembatasan field/objek | Rancang bukti uji penolakan sintetis kelak oleh pihak sah | Belum ditetapkan | Terbuka — menunggu bukti |

### 6. HTTPS dan konfigurasi keamanan

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-26 | HTTPS/sertifikat | HTTPS produksi valid dan pembaruan/penanggung jawab sertifikat tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Data/sesi tidak terlindungi dalam pengiriman | Minta kebijakan dan bukti sertifikat tersanitasi | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-27 | Debug/sesi/cache | Debug produksi mati; sesi/cookie/CSRF dan cache tidak membuka data antarpetugas | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Data sensitif bocor melalui debug/cache | Minta standar konfigurasi dan uji terotorisasi kelak | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-28 | Routing/WAF/Livewire | Routing/POST/aset versi terpilih tidak diblokir atau dibagikan cache secara keliru | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Antarmuka gagal atau data tercampur | Minta batas WAF dan rencana bukti staging | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-29 | Unggahan/temporer | Bila unggahan digunakan, batas ukuran/jenis, area temporer privat dan pembersihan aman tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Berkas berbahaya atau sensitif terbuka | Tetapkan lingkup dan bukti; Tidak Relevan hanya dengan alasan sah | Belum ditetapkan | Terbuka — menunggu bukti |

### 7. Cron, queue dan proses background

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-30 | Scheduler andal | Metode pemanggilan scheduler sesuai kebutuhan nyata, PHP CLI benar, bukti keberhasilan/kegagalan tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Tugas wajib tidak berjalan | Minta batas fitur/jadwal yang diizinkan; jadwal proyek belum ditetapkan | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-31 | Queue/background | Metode antrean/proses aman dan terpantau sesuai durasi/kapasitas, tidak wajib daemon tertentu | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Pekerjaan tertinggal/berhenti tanpa diketahui | Minta bukti metode alternatif bila proses permanen dilarang | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-32 | Replikasi audit terjadwal | Pengiriman salinan KB-12 dapat dijalankan andal tanpa menghambat atomisitas audit operasional | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Event tidak tersalin | Minta rancangan eksekusi/monitoring; teknologi belum dipilih | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-33 | Pemeriksaan audit berkala | Verifikasi integritas/kelengkapan dan rekonsiliasi dapat dijadwalkan/ditelusuri | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Manipulasi/kehilangan tidak diketahui | Minta kemampuan penjadwalan serta pelaksana yang berwenang | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-34 | Deteksi duplikasi berkala | Pemeriksaan kandidat KB-13 dapat berjalan dalam mandat/batas sumber daya; merge berisiko tetap tidak aktif | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Deteksi tidak berjalan atau otomatisasi terlalu luas | Minta kemampuan proses, bukan mengaktifkan merge | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-35 | Backup/kesehatan berkala | Pemicu backup dan pemeriksaan kesehatan dapat berjalan andal/terpantau | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Kegagalan backup tidak diketahui | Minta alur penjadwalan dan laporan aman | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-36 | Retry/proses ganda | Kegagalan, retry, pencegahan proses tumpang tindih dan penerapan sekali dapat dibuktikan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Event/operasi ganda atau sumber daya habis | Minta rancangan kontrol dan bukti simulasi kelak | Belum ditetapkan | Terbuka — menunggu bukti |

### 8. Storage, inode, RAM, CPU, timeout dan koneksi database

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-37 | Storage | Kuota/alokasi untuk master, dokumen, audit, antrean, backup dan pertumbuhan diketahui | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Penyimpanan penuh menghentikan audit/layanan | Minta kuota/batas; ukuran kebutuhan menunggu KB-18 | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-38 | Inode | Batas jumlah file/inode diketahui dan cocok pola dokumen/log/build | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Ruang tampak ada tetapi file baru gagal | Minta kuota dan skenario pertumbuhan KB-18 | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-39 | CPU/RAM | Alokasi/batas penggunaan dan pengguna serentak dapat dinilai terhadap kebutuhan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Waktu respons buruk/proses dihentikan | Minta batas dan rencana ukur sintetis; jangan mengarang target | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-40 | Proses/timeout | Batas proses serentak, durasi web/CLI/worker/cron serta pembatasan penyedia diketahui | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Tugas terpotong dan antrean menumpuk | Minta batas/kebijakan serta metode sesuai kebutuhan | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-41 | Koneksi/batas database | Batas koneksi, query dan transfer relevan diketahui | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Aplikasi/audit kehabisan koneksi | Minta batas tersanitasi; penilaian kapasitas terkait KB-18 | Belum ditetapkan | Terbuka — menunggu bukti |

### 9. Audit operasional, salinan terpisah dan integritas

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-42 | Audit operasional atomik | Perubahan kritis dan event operasional dapat commit/batal bersama | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Perubahan sah tanpa jejak | Minta bukti kemampuan database/arsitektur; tes kode belum dilakukan | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-43 | Independensi kontrol salinan | Kontrol keamanan/administratif salinan terpisah dari aplikasi/database/server/backup | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Administrator yang sama dapat mengubah semua bukti | Minta matriks kontrol; dua tabel/folder/akun yang sama tidak cukup | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-44 | Pengiriman audit aman | Transport dan penerima/pengirim berwenang dapat disediakan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Audit hilang/bocor dalam transfer | Minta rancangan kontrol transfer tanpa token/kunci | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-45 | Retry/rekonsiliasi audit | ID event stabil, retry, pencegahan duplikasi dan pembandingan operasional–pengiriman–salinan tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Event hilang/ganda tanpa diketahui | Minta bukti rancangan dan rencana simulasi sesuai KB-12 | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-46 | Verifikasi integritas | Pemeriksaan isi/daftar event terhadap acuan terpercaya serta perlindungan ubah/hapus tersedia | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Hash lokal dianggap bukti independen | Minta kontrol acuan/pemeriksaan; metode/frekuensi belum final | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-47 | Monitoring keterlambatan | Status tertunda, kehilangan dan keterlambatan salinan dapat dipantau/dieskalasi | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Salinan lama dianggap lengkap | Minta kemampuan pemantauan; ambang belum final | Belum ditetapkan | Terbuka — menunggu bukti |

### 10. Backup, restore, monitoring dan dukungan operasional

| ID pemeriksaan | Komponen | Persyaratan minimum | Kondisi aktual | Sumber bukti | Tanggal pemeriksaan | Pihak yang memverifikasi | Status | Tingkat kritikalitas | Risiko | Mitigasi | Penanggung jawab tindak lanjut | Status penyelesaian |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| H14-48 | Cakupan backup | Database dan dokumen privat yang diperlukan ikut tercakup secara konsisten | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Pemulihan aplikasi/data tidak lengkap | Minta daftar komponen tanpa dump/data nyata | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-49 | Konfigurasi pemulihan | Konfigurasi/rahasia yang diperlukan dapat dipulihkan melalui tata kelola aman, tanpa disalin ke repository | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Data ada tetapi aplikasi tidak dapat dipulihkan | Minta prosedur/referensi pengelolaan, bukan isi rahasia | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-50 | Pemisahan backup | Lokasi/kontrol backup aman dan terpisah dari hosting utama sesuai risiko | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Kritis (awal) | Kerusakan/kompromi utama merusak semua cadangan | Minta rancangan pemisahan kontrol dan akses | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-51 | Enkripsi/akses backup | Mekanisme enkripsi, hak akses dan pengelolaan kunci pemulihan direncanakan sah | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Backup bocor atau kunci tak dapat dipulihkan | Minta kebijakan dan pembagian peran tanpa kunci | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-52 | Bukti restore | Restore diuji di lingkungan terpisah berizin, kelengkapan/integritas/hasil diverifikasi | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Backup ada tetapi tidak dapat digunakan | Minta laporan tersanitasi; uji aktual tidak dijalankan pada tugas ini | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-53 | Konsistensi retensi/audit | Cadangan konsisten dengan event/salinan, penyusutan/penahanan/JRA dan rencana pemulihan | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Audit/data tidak cocok atau arsip terhapus muncul lagi | Minta kebijakan dan rencana verifikasi; JRA/durasi belum final | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-54 | Monitoring/logging/insiden | Pemantauan kegagalan, kapasitas, log aman, dukungan dan eskalasi insiden memiliki alur/pelaksana | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Kegagalan tidak diketahui/ditangani | Minta standar dan bukti operasional aman, tanpa log mentah | Belum ditetapkan | Terbuka — menunggu bukti |
| H14-55 | Target operasi RPO/RTO | Batas kehilangan data dan lama pemulihan disepakati KB-17 serta dibuktikan sesuai kapasitas KB-18 | BELUM DIKETAHUI | Belum ada bukti aktual | Belum diperiksa | Belum ditetapkan | Belum Diketahui | Tinggi (awal) | Kesiapan pemulihan diklaim tanpa target/bukti | Tetapkan target melalui keputusan terpisah, tanpa angka tebakan | Belum ditetapkan | Terbuka — menunggu bukti |

## Persyaratan khusus dan bukti penutupan

**Penyimpanan privat:** bukti pemetaan web hanya ke public, dokumen identitas/bukti kepemilikan di luar web publik, akses unduh berotorisasi, serta konfigurasi/backup tak tersedia lewat URL. Permission dan akun mengikuti hak minimum. Uji negatif nantinya oleh pihak berwenang di lingkungan berizin dengan data sintetis; tidak ada permintaan URL atau file uji sekarang.

**Audit KB-12:** bukti kontrol aplikasi/database/server/backup/salinan, independensi hak administrator, transport, ID stabil/retry/rekonsiliasi, integritas dan perlindungan hapus, serta monitoring keterlambatan. Dua tabel/folder dalam satu akun atau hash dengan kontrol sama tidak cukup. Audit operasional gagal membatalkan bisnis kritis; gagal kirim salinan pascacommit berbeda penanganannya. Teknologi/lokasi/jadwal/pengelola tetap menunggu bukti/keputusan terkait.

**Penjadwalan KB-12/KB-13:** scheduler, antrean, deteksi kandidat berkala, replikasi/pemeriksaan audit, backup/kesehatan, retry dan pencegahan proses ganda harus mempunyai metode andal. Pilihan worker terbatas/terus-menerus atau alternatif lain memerlukan bukti durasi, keterlambatan, kuota dan pemantauan. Tidak mewajibkan produk tertentu; frekuensi/ambang belum ditetapkan. Auto-merge historis berisiko tetap tidak aktif.

**Backup/pulih:** cakupan database, dokumen privat, konfigurasi yang diperlukan, lokasi/kontrol terpisah, enkripsi/akses/kunci serta konsistensi audit harus dibuktikan. Bukti restore harus memuat lingkungan, cakupan, waktu, hasil verifikasi/kelengkapan dan fungsi pelaksana tanpa data/rahasia. Backup ada belum berarti dapat dipulihkan. RPO/RTO menunggu KB-17, volume/kapasitas KB-18; tidak membuat angka atau menyatakan uji telah selesai.

## Matriks prioritas risiko dan kesenjangan

| Prioritas awal | Potensi risiko yang diperiksa | Syarat penutupan / batas |
| --- | --- | --- |
| Kritis | Dokumen/konfigurasi bocor, runtime tidak kompatibel, HTTPS tidak tersedia, kontrol audit terpisah tidak dapat dipenuhi, pemulihan tidak mungkin | Bukti perbaikan/mitigasi sah dan verifikasi, bukan janji/halaman login. Jika tak dapat dipenuhi/dimitigasi sah: Tidak Layak |
| Tinggi | Cron/queue tidak andal, resource kurang, backup belum terbukti pulih, hak administrator tidak jelas | Bukti operasi/kuota/restore/matriks hak serta penilaian terhadap KB-17/KB-18; dapat meningkat kritis sesuai dampak |
| Menengah | Keterbatasan alat build, monitoring tambahan, kenyamanan deployment | Alternatif aman dibuktikan; jika ketiadaannya menggagalkan kebutuhan kritis, klasifikasi harus ditinjau, bukan otomatis minor |

Belum ada temuan aktual yang diklaim teratasi. Monitoring dasar/eskalasi wajib tidak boleh dianggap fitur tambahan nonkritis hanya karena monitoring tambahan dapat berprioritas menengah. Tidak ada nilai kuota, SLA, masa retensi atau target pemulihan yang diisi berdasarkan tebakan.

## Empat hasil kelayakan dan gerbang

| Hasil | Syarat keputusan |
| --- | --- |
| LAYAK | Seluruh syarat kritis terbukti terpenuhi, pengamanan serta pemulihan telah diverifikasi |
| LAYAK BERSYARAT | Syarat kritis terpenuhi; kesenjangan nonkritis memiliki mitigasi disetujui dan wajib dituntaskan sebelum produksi |
| TIDAK LAYAK | Ada persyaratan kritis yang tidak dapat dipenuhi atau dimitigasi secara sah |
| BELUM DAPAT DINILAI | Bukti belum cukup untuk membuat keputusan |

Status item berbeda dari hasil keseluruhan. Bukti tidak ada berarti Belum Diketahui, bukan otomatis Tidak Memenuhi; tidak boleh disimpulkan Layak/Layak Bersyarat ketika syarat kritis belum terbukti. Kesenjangan kritis tidak dapat disamarkan sebagai syarat minor. Bukti tak konsisten/kedaluwarsa/tidak sesuai lingkungan perlu klarifikasi/verifikasi, bukan dipilih yang paling menguntungkan.

Halaman login berhasil atau dokumen audit terisi tidak membuktikan kelayakan. LAYAK BERSYARAT bukan izin produksi; mitigasi nonkritis pun wajib selesai sebelum produksi. LAYAK juga bukan persetujuan deployment, data nyata atau perubahan server. Semua gerbang hukum/akses/privasi/audit, kelayakan dan keputusan pihak berwenang tetap harus terpenuhi.

**Hasil sekarang: BELUM DAPAT DINILAI.** Seluruh kondisi aktual PDN masih BELUM DIKETAHUI. Penetapan konfigurasi/deployment menunggu audit berwenang dan bukti, KB-17/KB-18, penetapan pengelola serta persetujuan terpisah.

## Tindak lanjut dan alternatif tanpa keputusan migrasi

Pengelola PDN yang ditugaskan menyediakan bukti sanitasi sesuai lingkup; pihak verifikator yang sah menilai dan mencatat kesenjangan, mitigasi/penanggung jawab lalu bukti penutupan. Dokumen ini tidak menghubungi pengelola, mengirim pesan atau meminta akses.

Jika syarat kritis tak terpenuhi/dimitigasi sah, catat opsi permohonan layanan/infrastruktur yang sesuai kepada pihak berwenang. Bandingkan kemampuan keamanan/operasi/kapasitas dan kebutuhan audit terpisah; jangan otomatis memilih vendor, memigrasikan hosting, mengganti MySQL, menurunkan Laravel atau mengubah DNS.

26 RB-14 dan 24 rencana T14 ada pada [keputusan bisnis](06-keputusan-bisnis.md#kb-14--audit-kesiapan-hosting-pdncpanel). Keputusan KB-01–KB-13 tetap; rincian KB-17 dan KB-18 serta rincian OPD/pengelola, SOP/JRA/DPIA/teknologi dan izin implementasi/data nyata/produksi masih terbuka. Tidak ada akses server atau implementasi pada tahap ini.

## Ketergantungan rancangan impor — KB-15

KB-15 Model B mendokumentasikan impor berkas melalui staging privat, validasi/pemetaan berversi, pemeriksaan dan pengesahan; bukan fitur aktif, izin file nyata atau integrasi langsung OSS/Dukcapil. Kebutuhan ukuran/format/antrean, storage/retensi sumber–staging–audit, timeout/kapasitas/frekuensi harus ditinjau dalam bukti hosting/KB-17/KB-18 setelah rinciannya disahkan.

Formulir tetap **55 item**, seluruh kondisi aktual **BELUM DIKETAHUI** dan hasil **BELUM DAPAT DINILAI**. Tidak ada kuota/ukuran/frekuensi baru, akses/pemeriksaan PDN atau perubahan konfigurasi. Status model impor yang disepakati tidak meluluskan audit hosting. Sumber/data pribadi nyata serta akses sistem OPD/OSS/Dukcapil tidak digunakan.

## Ketergantungan fase lanjutan program — KB-16

KB-16 Model B memilih Registri Program dan Riwayat Layanan **setelah MVP KB-09**, tanpa modul program atau impor program pada MVP pertama. Data sesi, partisipasi, realisasi, bukti privat, observasi, tindak lanjut dan audit kelak menambah kebutuhan penyimpanan, retensi, antrean, pelaporan dan pemulihan. Dampaknya perlu dihitung dari volume/frekuensi/cakupan nyata yang nanti sah, bukan kuota atau teknologi tebakan.

Formulir 55 item/10 kelompok/13 kolom **tetap utuh**; seluruh aktual **BELUM DIKETAHUI**, hasil **BELUM DAPAT DINILAI**. Tidak ada audit langsung, akses PDN/OPD, konfigurasi atau deployment. Model program yang dipilih tidak mengubah kelayakan hosting. OPD/pengelola, JRA/jadwal, operasi/backup KB-17, kapasitas KB-18 serta izin implementasi/data nyata tetap terbuka.

## Kebijakan operasi dan bukti yang belum tersedia — KB-17

KB-17 **Model B — Operasional Terkelola Berbasis Risiko** kini disepakati sebagai kebijakan/spesifikasi dokumentasi. Status model yang dipilih tidak membuktikan fasilitas hosting tersedia. Pembagian aplikasi/OPD/PDN, fasilitas backup dokumen/database/konfigurasi/artefak/status pekerjaan, konsistensi lintas komponen, enkripsi/kunci/pemisahan risiko, monitoring, isolasi dan uji restore kelak harus dinilai dari bukti sah.

RACI pada [matriks](matriks-kewenangan-mvp-kb09.md) seluruhnya usulan fungsi, bukan penugasan PDN tertentu. Target RPO/RTO pada [tata kelola](04-tata-kelola-data.md) kosong; frekuensi/retensi/jadwal/produk/lokasi/jumlah salinan/SLA/pengelola/zona waktu belum final. Angka dan bukti kapasitas KB-18 belum final. Salinan audit KB-12 tetap kontrol independen dan bukan backup penuh; job backup sukses bukan bukti restore berhasil.

Formulir KB-14 **tetap 55 item/sepuluh kelompok/13 kolom, seluruh aktual BELUM DIKETAHUI, hasil BELUM DAPAT DINILAI**. Tidak menambah status memenuhi/angka fasilitas atau melakukan pemeriksaan langsung. Kebutuhan bukti bukan perintah mengakses PDN/cPanel/database, membaca kredensial, membuat file/cadangan server, menjalankan backup/restore/uji atau mengubah cron/DNS/jaringan/hosting/deployment.

## Rujukan kapasitas kabupaten dan status bukti — KB-18

KB-18 **Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal** disepakati sebagai dokumentasi. Enam cakupan arsitektur/MVP/infrastruktur awal/pertumbuhan/maksimum hasil uji/alokasi sah dipisahkan. Kebutuhan fisik awal mengikuti MVP KB-09 yang terverifikasi, bukan seluruh OPD/sektor/modul aktif sekaligus.

[Model kapasitas terpusat](09-perencanaan-kapasitas.md) memuat **19 kebutuhan bukti** yang dipetakan ke ID formulir KB-14, termasuk CPU/RAM/I/O/bandwidth/proses/koneksi/ukuran database/unggah/cron/queue/dokumen/audit/backup/peningkatan. Setiap aktual belum terbukti berstatus **BELUM DIKETAHUI**. Pemetaan tambahan tidak mengubah 55 butir/sepuluh kelompok/13 kolom atau mengisi bukti server yang belum ada.

Skenario/rasio/ukuran contoh ialah ASUMSI dan hasil aritmetika PROYEKSI, bukan ukuran PDN/cPanel atau rekomendasi kuota. Model menghitung komponen/lingkungan berbeda, overhead/temporer/cadangan dan kompetisi proses tanpa menggandakan bagian agregat. RPS contoh bukan benchmark, pemakaian aktual atau jumlah worker.

Jika fasilitas tidak cukup, catat opsi pemisahan komponen/storage, peningkatan kuota, infrastruktur lebih sesuai atau audit/backup berkontrol terpisah untuk keputusan sah. Tidak memilih vendor/produk atau menerapkan perubahan. Salinan audit yang tidak terpisah tetap tidak memenuhi KB-12 walau ruang cukup; queue yang tidak tersedia dicatat kesenjangan, tanpa instalasi otomatis.

**Hosting dan kapasitas akhir BELUM DAPAT DINILAI** sampai fakta/target/fasilitas dan pengujian berizin tersedia. Tidak mengakses/login/memindai/menguji PDN/cPanel/database/jaringan, menjalankan pembebanan/pengukuran server, mengubah konfigurasi/kuota/cron, backup/restore, deployment atau pengadaan. Target/retensi/strategi KB-17 dan izin tetap belum final.
