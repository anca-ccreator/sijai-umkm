# Fondasi proyek SIJAI UMKM

**Status terkini MVP Lokal Sintetis Terpadu — 7 November 2026:** seluruh modul cakupan MVP lokal sintetis (Registri Induk A3/B1/C2, Verifikasi Field Operasional + Kontrol Penggunaan V2, Alur Lengkap Koreksi K1–K4, Profil Industri Pengolahan Pangan + Riwayat Keputusan Sektoral, Dashboard & Monitoring Agregasi Cakupan DT-007 Model C, serta Administrasi Akun/Peran/Mandat/Katalog Field/Pemilik H2) telah selesai diintegrasikan. Baca [panduan & laporan MVP terpadu 46](46-panduan-dan-laporan-mvp-terpadu.md) dan [manifest penyerahan 47](47-manifest-penyerahan-mvp-terpadu.md). Fondasi G1-A sampai G1-B3.4 dipertahankan utuh tanpa *rewrite*. Ekspor E1, data nyata, sistem eksternal, dan deployment tetap ditutup.

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Hasil terkini setelah persetujuan G1-A — 6 November 2026:** [laporan fondasi](17-laporan-hasil-g1a.md), [pemasangan lokal](16-pemasangan-fondasi-lokal-g1a.md) dan [manifest perubahan](18-manifest-perubahan-g1a.md). Laravel/Livewire lokal tersedia, build berhasil, 10 tes/57 assertions dan HTTP sintetis berhasil tanpa DB. Visual browser belum diperiksa karena computer-use dihentikan pengaman. G1-B/data nyata/produksi belum diizinkan; E1 tetap konflik terbuka. Bagian persiapan terdahulu adalah riwayat sebelum izin G1-A.

**Persiapan lokal terkini — 6 November 2026:** tahap tetap perencanaan. [Kontrak MVP](12-kontrak-mvp-pra-coding.md), [backlog 19 item](13-backlog-mvp-terprioritas.md), [kontrak teknis/G1](14-kontrak-teknis-fondasi-lokal.md) dan [review paket/prototipe](15-review-paket-prototipe-dan-kesiapan-g1.md) menjadi rujukan persiapan. G1-A fondasi tanpa DB siap diajukan, **belum diizinkan**; G1-B/MySQL terpisah. Prototipe PHP sudah coding awal terpisah, aplikasi Laravel belum dibuat. 15 tes bawaan lulus dengan delapan temuan belum diperbaiki. E1/KB-11 tetap konflik terbuka, ekspor/unduh tertahan. Dokumen ini tidak memberi izin instalasi/migrasi/deployment.

**DT-011 terkini:** C+D1+M1+E1 MODEL DIPILIH — CATATAN KONSISTENSI/IMPLEMENTASI TERBUKA. **E1 otomatis baca→unduh/ekspor berbenturan dengan KB-11; KONFLIK KEBIJAKAN TERBUKA**, bagian unduh/ekspor terkait BLOKIR sampai keputusan pemilik produk. Bagian lama tetap sumber KB/DT sebelumnya, bukan penggantian E1 menjadi E2 atau konflik yang telah selesai.

Tanggal konsolidasi: **5 November 2026**; pembaruan DT-003/DT-005/DT-009/DT-011 **6 November 2026**. **Seluruh model KB-01–KB-18 DISEPAKATI sesuai tingkatnya; rincian/izin tetap terbuka.** Mulai dari [baseline induk](10-baseline-konsolidasi-kb01-kb18.md). Status baseline TERDOKUMENTASI; G0 SIAP DIAJUKAN UNTUK PENINJAUAN, bukan disetujui pemilik proyek. Coding belum diizinkan; hosting/kapasitas BELUM DAPAT DINILAI.

SIJAI UMKM adalah Sistem Informasi Pengembangan UMKM pemerintah daerah untuk melayani pelaku UMKM. Sesuai KB-06 Model A, aplikasi operasional digunakan petugas pemerintah; pelaku menerima layanan melalui petugas tanpa akun login. Dokumen ini menerjemahkan prinsip dan pilihan bisnis pengguna menjadi rancangan sebelum pembangunan dimulai.

## Isi dokumen

| Dokumen | Isi dan kegunaannya |
| --- | --- |
| [49 — Laporan Profiling & Kualitas Data Historis](49-laporan-profiling-dan-kualitas-data-historis.md) | Hasil profiling berkas mentah DATA UKM & 5.213 NIB, pemetaan kolom, metrik kualitas, dan temuan audit |
| [50 — Katalog Aturan Pembersihan & Pencocokan](50-katalog-aturan-pembersihan-dan-pencocokan.md) | Spesifikasi 9 aturan pembersihan (CLN-01–09), evaluasi ambang A3, dan 6 aturan pencocokan kandidat anti-auto-merge (MCH-01–06) |
| [51 — Daftar Masalah & Pelengkapan Lapangan](51-daftar-masalah-dan-pelengkapan-lapangan.md) | Register 10 masalah kualitas data, prosedur pemisahan domisili vs lokasi usaha, verifikasi kuliner vs pangan, dan SOP surveyor |
| [52 — Panduan Operasional Persiapan Impor](52-panduan-operasional-persiapan-impor.md) | Panduan langkah demi langkah 7 layar UI persiapan historis, matriks RACI, SOP penanganan duplikasi, dan promosi ke draf resmi |
| [46 — Panduan & Laporan MVP Terpadu](46-panduan-dan-laporan-mvp-terpadu.md) | Ringkasan integrasi seluruh modul MVP lokal sintetis, panduan demo `sijai:mvp-demo`, dan batas penetapan terbuka |
| [47 — Manifest Penyerahan MVP Terpadu](47-manifest-penyerahan-mvp-terpadu.md) | Daftar lengkap berkas penyerahan MVP beserta hash SHA-256 |
| [36 — Kontrak C2 G1-B3.3](36-kontrak-pengesahan-awal-c2-g1b33.md) | Status/prasyarat, katalog B1/C2, transaksi dan migrasi |
| [37 — Matriks C2](37-matriks-kewenangan-c2-g1b33.md) | Mandat pengesah awal dan batas kesiapan field DT-005/007 |
| [38 — Panduan C2](38-panduan-pengesahan-awal-g1b33.md) | Demo eksplisit, login/periksa/putuskan, migrasi dan tes |
| [39 — Hasil G1-B3.3](39-laporan-hasil-g1b33.md) | Kriteria penerimaan, hasil tes/QA dan masalah terbuka |
| [40 — Manifest G1-B3.3](40-manifest-perubahan-g1b33.md) | File/migrasi baru/berubah dan SHA-256 |
| [32 — Kontrak G1-B3.2](32-kontrak-antarmuka-registrasi-g1b32.md) | UI A3/pengajuan sintetis, konteks server, CSP dan batas izin |
| [33 — Panduan alur](33-panduan-alur-registrasi-g1b32.md) | Demo pencatat/pemeriksa, draf/tinjau/pengajuan/perbaikan |
| [34 — Hasil G1-B3.2](34-laporan-hasil-g1b32.md) | Kriteria penerimaan, tes/HTTP/QA visual dan masalah terbuka |
| [35 — Manifest G1-B3.2](35-manifest-perubahan-g1b32.md) | File baru/berubah dan SHA-256, tanpa migrasi baru |
| [27 — Kontrak G1-B3.1](27-kontrak-autentikasi-audit-lokal-g1b31.md) | Login/sesi/aktor server, profil baca-saja, D1/M1, batas audit |
| [28 — Rancangan salinan audit](28-rancangan-salinan-audit-independen.md) | Usulan worker/sink/receipt/rekonsiliasi; tidak ada koneksi atau implementasi baru |
| [29 — Menggunakan demo lokal](29-operasi-autentikasi-lokal-g1b31.md) | CLI interaktif sintetis, login/profil/logout, batas sesi dan tes |
| [30 — Hasil G1-B3.1](30-laporan-hasil-g1b31.md) | Bukti 10 kriteria, 141 tes/839 assertions, HTTP lokal dan rekomendasi B3.2 |
| [31 — Manifest G1-B3.1](31-manifest-perubahan-g1b31.md) | Daftar sumber/dokumen baru/berubah dan SHA-256 |
| [23 — Kontrak G1-B2](23-kontrak-registrasi-lokal-g1b2.md) | Mandat registrasi A3 lokal, domain/tes tanpa UI bisnis, batas bukti/duplikasi/izin |
| [24 — Model/alur G1-B2](24-model-dan-alur-registrasi-g1b2.md) | Entitas/revisi, status terpisah, tiga migrasi baru dan hak per tabel lokal |
| [25 — Hasil G1-B2](25-laporan-hasil-g1b2.md) | 101 tes/481 assertions, 20 kriteria, keterbatasan dan prasyarat B3 |
| [26 — Manifest G1-B2](26-manifest-perubahan-g1b2.md) | Daftar sumber/dokumen baru atau berubah beserta SHA-256 |
| [10 — Baseline konsolidasi KB-01–KB-18](10-baseline-konsolidasi-kb01-kb18.md) | **Pintu utama:** 18 KB, scope MVP, KA-01–KA-09, sembilan epic, 36 DT dan G0–G7; sumber rinci tetap berlaku |
| [01 — Kondisi awal](01-kondisi-awal.md) | Isi folder, alat lokal yang ditemukan, dan batas pemeriksaan |
| [02 — Arsitektur awal](02-arsitektur-awal.md) | Susunan aplikasi, batas modul, SSOT, dan keamanan |
| [03 — Entitas dan relasi](03-entitas-dan-relasi.md) | Arti setiap entitas, hubungan data, dan aturan integritas |
| [04 — Tata kelola data](04-tata-kelola-data.md) | Penanggung jawab field/koreksi/akses/audit; KB-17 dengan 16 langkah, formulir restore, RPO/RTO kosong dan monitoring |
| [05 — Roadmap](05-roadmap.md) | Urutan implementasi, ketergantungan, dan kriteria selesai |
| [06 — Keputusan bisnis](06-keputusan-bisnis.md) | KB/DT-003/005/007 tetap; DT-009 C+B2+V2+K2 lengkap 30 RB/30 T, standar operasional menunggu |
| [07 — Checklist hosting](07-checklist-hosting-cpanel.md) | Formulir KB-14: 55 item/10 kelompok/13 kolom, seluruh aktual belum diketahui dan hosting belum dapat dinilai |
| [08 — Audit konsistensi dokumentasi](08-audit-konsistensi-dokumentasi.md) | Riwayat dan audit final lintas KB-01–KB-18; tabel kode benturan/dokumen/acuan/usulan/status serta rincian terbuka |
| [09 — Perencanaan kapasitas](09-perencanaan-kapasitas.md) | Pusat parameter/rumus/skenario ASUMSI; angka historis tidak mengganti jumlah Unit unik/kuota |
| [11 — Audit baseline data historis](11-audit-baseline-data-historis.md) | Agregat laporan sumber, dua jalur registrasi, pemetaan belum pasti dan klarifikasi penyebut; bukan inspeksi ulang Excel |
| [Kamus data konseptual MVP](kamus-data-mvp-kb09.md) | Field terdahulu tetap; metadata kategori/sumber/rumus/cakupan angka kapasitas tanpa skema baru |
| [Matriks usulan kewenangan MVP](matriks-kewenangan-mvp-kb09.md) | DT-005: 96 kode acuan, enam peran/koordinator; fungsi usulan bukan mandat OPD, hak/RACI tetap |
| [AGENTS.md](../AGENTS.md) | Panduan tetap untuk Codex dan pengembang berikutnya |

## Cara membaca status

Gunakan arti status pada [baseline](10-baseline-konsolidasi-kb01-kb18.md#tujuan-dan-status-baseline): DISEPAKATI untuk model, TERDOKUMENTASI untuk persyaratan tertulis, DIUSULKAN/MENUNGGU PENETAPAN/MENUNGGU BUKTI/DITUNDA untuk rincian/fase. LULUS memerlukan bukti; TIDAK LULUS memerlukan bukti gagal; BELUM DAPAT DINILAI berarti bukti belum cukup. TERDOKUMENTASI bukan LULUS dan model dipilih bukan SIAP PRODUKSI.

Label “terverifikasi lokal” pada kondisi awal hanya fakta komputer historis, bukan bukti PDN atau kompatibilitas sekarang. Rujukan lama yang menyebut model “terbuka” dibaca bersama keputusan terbaru; sejarah tidak dihapus. Pemetaan OPD/petugas/SOP/bukti/peran hukum/retensi/kuota/target belum final.

## Arah yang sudah disepakati

Satu aplikasi menggunakan satu profil induk bersama. Orang, badan usaha, unit usaha, dan kegiatan usaha dibedakan. Satu pihak dapat berhubungan dengan banyak unit usaha dan satu unit dapat berhubungan dengan banyak pihak. Setiap field memiliki satu OPD penanggung jawab; OPD lain dapat mengusulkan koreksi. Profil sektoral merujuk identitas unit yang sama, perubahan penting dicatat, dan kewenangan selalu diperiksa di server.

Pilihan teknologi: Laravel 13 jika syaratnya terpenuhi, Livewire 4, MySQL, Tailwind CSS, serta modular monolith dalam satu repository. Kelayakan lengkap masih menunggu pemeriksaan hosting dan penyelesaian dependensi setelah izin instalasi diberikan.

Model yang disepakati:

| Keputusan | Ringkasan |
| --- | --- |
| KB-01 — Model C | Unit berbasis kesatuan operasional; cabang tetap bagian induk jika pemilik sama dan keterkaitannya dengan induk teridentifikasi |
| KB-02 — Model B | Verifikasi terdistribusi per OPD, pengelola utama sebagai koordinator |
| KB-03 — Model B | Registrasi bertahap; NIB tidak wajib pada pendataan awal; ID internal terpisah dari NIK/NIB |
| KB-04 | Satu OPD penanggung jawab aktif per field; OPD lain dapat mengusulkan koreksi |
| KB-05 | Profil awal hanya oleh petugas pemerintah yang ditunjuk; verifikator pengesahan awal berbeda dari pembuat |
| KB-06 — Model A | Pelaku tidak mempunyai akun aplikasi; pelayanan melalui petugas |
| KB-07 — Model C | Satu petugas berwenang mengesahkan perubahan field, dengan validasi dan audit |
| KB-08 — Model A | Konflik nilai oleh pemilik field; sengketa kewenangan melalui mekanisme organisasi yang sah |
| KB-09 — Model B | Registri Induk UMKM + satu sektor percontohan yang ditetapkan: INDUSTRI PENGOLAHAN PANGAN |
| KB-10 — Model B | Sistem menghitung usulan skala usaha; satu petugas berwenang memverifikasi dan mengesahkan. Rincian kelembagaan masih terbuka |
| KB-11 — Model B | Perlindungan bertingkat menurut sensitivitas/kebutuhan tugas, akses minimum dan pemeriksaan server; peran hukum, kebijakan rinci serta izin data nyata belum ditetapkan |
| KB-12 — Model B | Audit database aplikasi dan salinan dengan kontrol keamanan/administratif terpisah; prinsip dipilih, teknologi/lokasi/jadwal/pengelola belum final |
| KB-13 — Model C | Rekonsiliasi otomatis: deteksi/pencegahan utama; konsolidasi teknis hanya terbukti aman/bermandat, ambigu/substantif tetap petugas; split/arsip/pulih terstruktur |
| KB-14 — Model B | Audit kesiapan sebelum konfigurasi teknis/deployment; hasil hosting BELUM DAPAT DINILAI, seluruh aktual belum diketahui |
| KB-15 — Model B | Impor historis/berkala berkas melalui staging privat, pemetaan/validasi/pencocokan dan pengesahan sebelum nilai resmi; integrasi langsung fase berikutnya |
| KB-16 — Model B | Registri Program dan Riwayat Layanan Pembinaan UMKM sesudah MVP: identitas/riwayat/indikator/rekap lintas OPD, bukan pembayaran atau seleksi otomatis |
| KB-17 — Model B | Operasional terkelola berbasis risiko: mandat, backup konsisten, audit terlindungi, verifikasi/restore, RPO/RTO berbasis dampak, monitoring/insiden/perubahan; rincian belum final |
| KB-18 — Model C | Arsitektur kabupaten sejak awal dengan satu SSOT; MVP tetap, sumber daya awal terverifikasi dan pertumbuhan bertahap, contoh ASUMSI/PROYEKSI bukan kuota final |

Lihat sumber, ringkasan dan hal terbuka pada [dokumen keputusan](06-keputusan-bisnis.md), serta hasil pemeriksaan pada [laporan audit](08-audit-konsistensi-dokumentasi.md).

## Cakupan MVP yang ditetapkan

Registri PIHAK/ORANG/BADAN_USAHA/UNIT_USAHA, hubungan pihak-usaha, kegiatan dan lokasi/cabang; Profil Umum minimum/status NIB tanpa kewajiban NIB awal; profil pangan; akun petugas dan kewenangan field; pengesahan awal oleh verifikator berbeda; koreksi/konflik oleh pemilik field, audit serta laporan dasar. Pelaku UMKM tetap tanpa akun.

Produk/merek berbeda tidak menambah usaha. Produk, bahan baku, peralatan dan pengukuran berulang memakai record terkait. Setiap pengukuran produksi mempunyai produk, angka, satuan, periode, sumber dan status verifikasi; periode baru tidak menimpa periode sebelumnya. Satuan berbeda tidak dijumlah otomatis tanpa konversi baku. Profil sektoral draf tidak dihitung terverifikasi.

Pengampu UMKM, perindustrian dan perizinan adalah **fungsi OPD yang diusulkan**; nama OPD resmi dan penetapan kewenangannya belum final. Katalog kewenangan harus dapat dikonfigurasi. Program bantuan/penjualan, marketplace, stok, akuntansi, integrasi eksternal, impor massal, aplikasi mobile terpisah dan analitik lanjutan di luar MVP.

## Tambahan KB-10 yang disepakati

Penilaian memakai tujuan, indikator modal/penjualan, nilai moneter, periode, sumber, cakupan dan versi aturan. Modal mengecualikan tanah/bangunan tempat usaha; kosong bukan nol dan penjualan parsial tidak dianualisasi otomatis. Hasil di luar batas atau belum dapat diklasifikasikan tidak dipaksa menjadi UMKM tertentu. Usulan tetap terpisah dari hasil disahkan; hasil internal bukan putusan legalitas/bantuan.

KBLI memakai acuan Peraturan BPS 7/2025 dan tabel konversi BPS rilis 22 April 2026, dengan kode 2020 historis tetap tersimpan. Satu unit dapat mempunyai kegiatan pengolahan dan perdagangan; kegiatan utama dipilih beralasan dan berperiode, tanpa utama aktif ganda kecuali ada kebijakan sah. Pemetaan ambigu diperiksa dan tidak mengubah OSS. Ambang, sumber resmi dan 26 skenario T10 ada pada [dokumen keputusan](06-keputusan-bisnis.md).

## Tambahan KB-11 yang disepakati

Empat label rancangan internal: PUBLIK-TERVERIFIKASI, INTERNAL, TERBATAS dan SANGAT TERBATAS. Contohnya bukan klasifikasi hukum UU PDP atau keputusan final per field/OPD. Hak melihat, mengubah, mengusulkan, mengesahkan, mengunduh, mengekspor dan administrasi akses diperiksa terpisah menurut peran, OPD, wilayah, field/objek, tindakan, tujuan/dasar dan penugasan aktif; tanpa izin ditolak.

OPD pemilik field tidak otomatis menjadi Pengendali Data Pribadi secara hukum. Admin teknis, pengelola utama serta pemilik bersama tidak otomatis dapat membaca seluruh data pribadi. Pelaku tetap tanpa akun; hak subjek dilayani petugas dengan nomor layanan, verifikasi pemohon, tenggat hukum dan hasil aman. Ekspor memerlukan izin/tujuan/cakupan tersendiri, dan agregat diperiksa risiko identifikasi ulang.

30 RB-11 dan 26 rencana T11 tercatat pada [keputusan](06-keputusan-bisnis.md). [Kamus](kamus-data-mvp-kb09.md) menambah delapan atribut metadata dan tujuh fungsi konseptual dengan memakai kembali layanan/audit/penugasan yang sesuai; [matriks](matriks-kewenangan-mvp-kb09.md) memuat tujuh contoh peran, bukan penetapan resmi. Retensi mengikuti JRA yang sah tanpa angka tebakan atau penyimpanan pribadi selamanya. Sebelum data nyata wajib ada gerbang kelembagaan, dasar layanan, akses, JRA, risiko/DPIA yang diperlukan dan izin eksplisit.

## Tambahan KB-12 yang disepakati

Lapisan pertama merekam jejak operasional dalam database aplikasi. Lapisan kedua menyimpan salinan dengan kontrol keamanan dan kewenangan administratif terpisah, untuk membantu mendeteksi kehilangan/manipulasi dan pemulihan. Dua tabel atau lokasi dengan administrator/kontrol sama belum memenuhi pemisahan. Salinan tidak menjadi master UMKM kedua.

Audit operasional kritis dan perubahan bisnis harus berhasil atau batal bersama. Pengiriman salinan boleh sesudah transaksi berhasil; gangguan kirim ditangani dengan status tertunda, retry, ID stabil dan rekonsiliasi, tanpa membatalkan bisnis sah diam-diam. Isi event lama tidak diedit untuk mengganti status kirim; hak baca/ekspor audit tetap terbatas dan data sensitif tidak disalin mentah ke log.

[Keputusan KB-12](06-keputusan-bisnis.md) memuat **30 RB-12, 28 rencana T12, 15 keluarga event dan 21 atribut minimum**. [Kamus](kamus-data-mvp-kb09.md) dan [matriks](matriks-kewenangan-mvp-kb09.md) yang sama diperluas tanpa dokumen duplikat. Teknologi/lokasi/kunci, jadwal/ambang, kapasitas, pengelola/hak admin, JRA/durasi, frekuensi integritas dan target pemulihan belum final; menunggu KB-14/KB-17/KB-18 serta penetapan sah. Tidak ada klaim hash atau append-only saja kebal administrator.

## Tambahan KB-13 yang disepakati

Deteksi kandidat dan pencegahan identitas ganda diprioritaskan saat registrasi. Nama, alamat, pemilik, NIB atau skor kemiripan sama tidak membuktikan identitas. Konsolidasi teknis otomatis memerlukan seluruh **sepuluh prasyarat**; satu gagal/belum jelas berarti ditahan untuk petugas. Merge berarti konsolidasi identitas, split berarti pemisahan dengan bukti dan pembagian referensi, sedangkan arsip berbeda dari hapus permanen.

Satu identitas kanonik menjadi rujukan dengan ID asal/alias tetap terlacak dan tidak didaur ulang. Pemilik bersama/masa berlaku, kegiatan/lokasi, sektor/produk/produksi, klasifikasi dan audit tidak boleh hilang, tertimpa atau ganda. NIK/bukti tetap terlindungi; audit historis tidak ditulis ulang. Program/bantuan hanya kontrak masa depan, tanpa modul baru.

[Keputusan KB-13](06-keputusan-bisnis.md) memuat **30 RB-13 dan 30 rencana T13**; [kamus](kamus-data-mvp-kb09.md) memuat sebelas fungsi konseptual/katalog aturan dan [matriks](matriks-kewenangan-mvp-kb09.md) mengatur usulan hak/mandat. Aturan/ambang/OPD/SOP/bukti, metode split/pulih/arsip/JRA dan hosting belum final; auto-merge historis tidak aktif sebelum gerbang aturan/uji/mitigasi/mandat dan persetujuan produksi terpenuhi.

Benturan dengan larangan umum otomatis pada panduan/penjelasan historis KB-08 dilaporkan dalam [audit](08-audit-konsistensi-dokumentasi.md). Panduan aktif diperinci sesuai KB-13; larangan merge dari kemiripan, pemilik field, pengesahan substantif petugas dan seluruh keputusan sebelumnya tetap berlaku.

## Tambahan KB-14 yang disepakati

Audit berbukti dilakukan sebelum konfigurasi teknis final dan deployment. Laravel 13, Livewire 4 dan MySQL menjadi baseline kandidat target; versi/fitur/kuota aktual PDN tidak diasumsikan. [Checklist yang sama](07-checklist-hosting-cpanel.md) kini memuat **55 pemeriksaan dalam sepuluh kelompok dan 13 kolom**, termasuk sumber bukti, pemeriksa, risiko, mitigasi serta tindak lanjut. Seluruh kondisi aktual **BELUM DIKETAHUI**.

[Keputusan KB-14](06-keputusan-bisnis.md) memuat **26 aturan RB-14 dan 24 rencana T14**. Empat hasil audit ialah Layak, Layak Bersyarat, Tidak Layak dan Belum Dapat Dinilai. Hasil sekarang **BELUM DAPAT DINILAI**; bukti belum tersedia. Layak Bersyarat hanya untuk sisa nonkritis setelah syarat kritis terbukti, dan mitigasi wajib selesai sebelum produksi. Status Layak sekalipun bukan izin deployment.

Risiko kritis yang harus diperiksa: dokumen/config terbuka, runtime tidak cocok, HTTPS tidak tersedia, audit tanpa kontrol independen, serta pemulihan tidak mungkin. Dua tabel/folder satu akun bukan audit terpisah. Bukti PDN, pengelola resmi, operasi/RPO/RTO KB-17 dan kapasitas KB-18 masih dibutuhkan. Jika kritis tak dapat dipenuhi, opsi infrastruktur diajukan lewat keputusan terpisah tanpa migrasi otomatis.

Tidak mengakses/login/memindai/menguji server, meminta/membaca rahasia, membuat file uji hosting atau mengubah DNS. Rujukan dokumentasi publik bukan pemeriksaan PDN; daftar bukti adalah rancangan, bukan permintaan yang sudah dikirim.

## Tambahan KB-15 yang disepakati

Berkas historis/berkala OPD masuk staging, yaitu penampungan sementara privat dengan metadata sumber/batch, pemetaan berversi, normalisasi aman, validasi, pemeriksaan identitas/duplikasi/konflik dan pratinjau. Data baru memengaruhi registri/statistik resmi setelah pengesahan yang sah. Berkas OPD bukan kebenaran mutlak atau hak pengunggah atas seluruh field.

[Keputusan KB-15](06-keputusan-bisnis.md) memuat **30 aturan, 30 rencana T15 dan alur 16 tahap**. [Kamus](kamus-data-mvp-kb09.md) menambah sebelas fungsi konseptual/sepuluh contoh pemetaan dengan memakai ulang kandidat, usulan, keputusan dan audit yang sesuai. [Matriks](matriks-kewenangan-mvp-kb09.md) membatasi hak sumber/staging/pengesahan. Sebagian field disahkan tidak otomatis membuat seluruh profil terverifikasi.

Rollback membatalkan transaksi yang gagal sebelum sah. Hasil yang sudah sah diperbaiki lewat keputusan korektif baru, setelah menilai dampak/versi terbaru, agar tidak menimpa perubahan petugas sesudah impor. NIK/NIB bukan ID unit, cabang/pemilik bersama tetap, produksi/ekonomi menjaga periode/satuan/sumber/verifikasi dan NIK tidak masuk error/audit mentah.

Impor manual staging masih rancangan yang dapat dikembangkan setelah tata kelola serta izin lingkup terkait, **bukan perluasan otomatis MVP atau izin impor massal data pribadi**. API/real-time OSS/Dukcapil/OPD tidak aktif; program/bantuan hanya ketergantungan masa depan. Dataset/OPD/SOP/format/bukti/konversi/ukuran/frekuensi/retensi/pembalikan dan izin nyata belum final. Hosting tetap BELUM DAPAT DINILAI.

## Tambahan KB-16 yang disepakati — fase setelah MVP

Program memakai satu Registri Induk dan hierarki: PROGRAM → KEGIATAN/LAYANAN → PELAKSANAAN/SESI → PARTISIPASI/PENERIMAAN → REALISASI → TINDAK LANJUT. Tiap tingkat ber-ID internal sendiri. Kegiatan layanan pemerintah berbeda dari kegiatan ekonomi usaha; nama/tahun bukan satu-satunya identitas, kode resmi hanya dari sumber sah.

Orang yang hadir dan Unit Usaha penerima dibedakan, dengan peran perwakilan yang relevan. Ahmad dan Budi (fiktif) mewakili satu unit pada dua kegiatan berarti **1 UMKM unik, 2 Orang unik, 2 partisipasi**. Kejadian layanan dihitung tersendiri dari catatannya. Cegah duplikasi teknis sesi/peran/konteks sama, tanpa melarang partisipasi sah pada sesi/program lain; batas penerima harus ditetapkan per program.

Pendaftaran, kehadiran, realisasi, verifikasi dan tindak lanjut dipisahkan. Daftar kosakata partisipasi mencakup pendaftaran dan kehadiran, tetapi dua catatan tersebut tidak saling menimpa. Terdaftar bukan otomatis hadir, hadir bukan realisasi selesai, dan program Selesai bukan seluruh layanan terverifikasi.

Output, hasil langsung dan outcome teramati dibedakan. Pengukuran produksi/ekonomi merujuk KB-09/KB-10 beserta versi/periode, tanpa master angka tandingan. Sebelum/sesudah bukan bukti sebab-akibat program; omzet turun tetap turun, belum diukur bukan tercapai/nol. SIJAI mencatat sertifikasi dari penerbit sah.

[Keputusan](06-keputusan-bisnis.md) memuat **30 RB-16 dan 30 rencana T16**; [kamus](kamus-data-mvp-kb09.md) menambah **sepuluh fungsi konseptual/lima kelompok status**, dan [matriks](matriks-kewenangan-mvp-kb09.md) menambah **tujuh fungsi usulan**. Satu penanggung jawab record program tidak otomatis memiliki semua field atau menjadi Pengendali secara hukum. Satu pengesah berwenang tetap cukup untuk field biasa; profil awal tetap verifikator berbeda dari pembuat. Privasi/audit/rekonsiliasi/impor memakai KB-11–KB-15, dengan riwayat dan kontrol akses terjaga.

**Tetap di luar MVP pertama.** Tidak ada pembayaran, penyaluran dana elektronik, pengadaan, akuntansi, seleksi/kelayakan otomatis atau penggantian sistem resmi pemerintah. Nominal historis sah hanya catatan layanan, bukan otorisasi membayar. OPD/program pertama/kode/penerima/hak/indikator wajib/jadwal/bukti/SOP/retensi dan izin nyata belum final. Rincian operasi KB-17 belum final, angka dan bukti kapasitas KB-18 belum final, hosting BELUM DAPAT DINILAI.

## Tambahan KB-17 yang disepakati — kebijakan operasi

Operasi meliputi aplikasi/akun, infrastruktur PDN, pengamanan/backup/audit/pemulihan, serta pengawasan/insiden/perubahan. [Matriks](matriks-kewenangan-mvp-kb09.md) mencatat **sepuluh fungsi konseptual dan 21 kegiatan RACI** sebagai usulan. OPD/pejabat/pengelola PDN belum ditunjuk. Hak teknis bukan hak mengesahkan UMKM; pemilik field bukan pembaca seluruh backup; pengelola aplikasi bukan penghapus salinan audit.

**Backup sistem, salinan audit KB-12 dan koreksi bisnis berbeda fungsi.** Backup mencakup database beserta relasi/versi/keputusan, dokumen privat/metadata, audit operasional, status pekerjaan penting, konfigurasi aman dan artefak rilis yang diperlukan. Semuanya perlu konsisten pada titik pulih; backup database saja atau job sukses belum membuktikan keseluruhan layanan bisa dipulihkan. Akses/enkripsi/kunci/pemisahan risiko/retensi harus ditetapkan sah, tanpa rahasia dalam repository.

[Tata kelola](04-tata-kelola-data.md) memuat **16 langkah konseptual, formulir 14 isian kosong, delapan kelompok RPO/RTO tanpa angka dan 13 area monitoring**. RPO ialah batas kehilangan data yang diterima, RTO target durasi pemulihan fungsi; target belum disahkan dan belum ada hasil uji. Keadaan bisnis, dokumen, relasi, kanonik/alias serta kedua lapisan audit perlu diperiksa. Transaksi sah setelah titik backup tidak boleh diabaikan; hak lama dan pekerjaan yang sudah diterapkan tidak diaktifkan/diulang otomatis.

Tiap peringatan memerlukan dampak, pemilik tindak lanjut, eskalasi, status, referensi insiden dan audit penyelesaian. Insiden pribadi mengikuti KB-11/ketentuan hukum, tanpa kontak/SLA tebakan. Perubahan aplikasi memerlukan dampak/persetujuan/rencana pemulihan/verifikasi/audit; perubahan darurat tetap beralasan/bermandat/dicatat/dievaluasi. Koreksi bisnis tetap pemilik field KB-07/KB-08, bukan restore buta.

[Keputusan](06-keputusan-bisnis.md) memuat **30 RB-17 dan 30 rencana T17**, belum dijalankan. [Arsitektur](02-arsitektur-awal.md) menambah kebutuhan operasi/keandalan. **KB-01–KB-17 tetap berlaku; tambahan kapasitas dibaca bersama KB-18 terbaru**; MVP registri/pangan tetap dan program sesudah MVP. Hosting tetap BELUM DAPAT DINILAI.

Pemilik layanan/pengelola/PDN, fasilitas/lokasi/kendali backup, enkripsi/kunci, frekuensi/retensi/JRA Sinjai, target RPO/RTO/prioritas/jadwal uji, SLA/kanal, SOP/isolasi/zona waktu serta izin nyata belum final. Tidak menjalankan akses server/database, backup/restore/uji teknis atau deployment.

## Tambahan KB-18 yang disepakati — kapasitas kabupaten

Model C menyiapkan satu Registri Induk/ID/relasi untuk cakupan Kabupaten Sinjai lintas OPD dan sektor. **MVP pertama tetap Registri Induk + Industri Pengolahan Pangan.** Infrastruktur awal kelak mengikuti kebutuhan MVP yang terbukti, bukan seluruh kapasitas fisik disediakan sekaligus. Program KB-16 tetap fase lanjutan.

[Dokumen kapasitas](09-perencanaan-kapasitas.md) memisahkan arsitektur kabupaten, fitur MVP, infrastruktur awal, target pertumbuhan, maksimum hasil uji tertentu dan alokasi yang disahkan. Tiga skenario dari pengguna berlabel ASUMSI; perhitungan berlabel PROYEKSI, bukan statistik Sinjai/kuota PDN. Fakta dan hasil pengujian belum tersedia.

Model mencakup 18 kelompok volume, pertumbuhan induk/histori/dokumen/audit secara berbeda, penyimpanan lintas komponen, pengguna/beban/operasi berat, 19 kebutuhan bukti hosting dan 12 indikator pemicu berambang kosong. Rasio agregat bukan aturan bisnis. Produk/relasi yang sudah masuk ukuran agregat tidak dihitung lagi; aliran audit tahunan berbeda dari stok audit tersimpan. Backup dan salinan audit tetap berbeda fungsi/kontrol.

[Keputusan](06-keputusan-bisnis.md) memuat **30 RB-18 dan 30 rencana T18**, belum dijalankan. [Audit akhir](08-audit-konsistensi-dokumentasi.md) menilai konsistensi seluruh KB-01–KB-18 dan mencatat potensi salah tafsir serta rincian terbuka.

Jumlah resmi/rasio/ukuran/retensi/pertumbuhan/pola beban, batas PDN, fasilitas audit/backup, RPO/RTO/target/ambang/biaya dan pengelola/izin belum final. Opsi peningkatan butuh keputusan terpisah. **Hosting dan kapasitas akhir BELUM DAPAT DINILAI**; tidak ada pengujian beban, akses server, perubahan kuota atau pengadaan.

## DT-007 Model C yang telah ditetapkan

**Verifikasi Bertingkat Berbasis Cakupan** final pada pemilihan model: status registrasi induk, field dan sektor dipisahkan dari ringkasan agregasi objek/lingkup/tahap. Agregasi bukan pengesahan baru atau hak seluruh field. Verifikator awal tetap berbeda dari pembuat; pengesah field biasa satu petugas berwenang.

**Memenuhi(L) = ValidAturan(L) AND SeluruhFieldWajibSah(L) AND TidakAdaPenghalangRelevan(L).** Katalog minimum wajib sah/berversi. Prasyarat belum cukup atau daftar kosong tanpa aturan eksplisit menghasilkan Belum dapat dinilai, bukan lulus otomatis/persentase. Usulan baru sendiri tidak membatalkan nilai resmi efektif; konflik aktif relevan menahan kesimpulan positif. Perubahan versi dinilai ulang pada lingkup terkait dengan riwayat/alasan yang terlindungi.

[Rumusan DT-007](06-keputusan-bisnis.md#dt-007--verifikasi-bertingkat-berbasis-cakupan) memuat **28 aturan, 28 kasus penerimaan dan 15 kasus batas**. [Baseline](10-baseline-konsolidasi-kb01-kb18.md) memperbarui baris DT-007 dan KA-02: model DT-007 tetap, DT-003 kini B A3+B1+C2; rincian katalog/bukti/mandat DT-003/005/006/009/011/033 belum final. Tidak ada OPD/minimum/enum/transisi teknis yang ditetapkan sepihak.

Semua KB-01–KB-18 dan batas MVP tetap. G0 siap diajukan peninjauan; G1/G5/G7 belum lulus, G2/G3/G4/G6 belum dinilai. Tidak ada izin coding/server/data nyata atau pengujian teknis; hosting/kapasitas BELUM DAPAT DINILAI.

## Batas tahap ini

Pekerjaan hanya berupa pemeriksaan baca-saja dan penulisan dokumen. Tidak ada instalasi, inisialisasi aplikasi, database, migrasi, konfigurasi produksi, pemakaian data pribadi nyata, atau penyimpanan kredensial. Repository Git juga belum diinisialisasi.

Paket terbaru DT-011 berisi **12 Markdown diperbarui**, tanpa dokumen Markdown baru. **Delapan belas ZIP lama**, dokumen kondisi awal, checklist hosting dan model kapasitas tetap utuh. Angka laporan historis dan rumus simulasi tidak diubah. ZIP hanya berisi file berubah dengan jalur relatif; jumlah/jalur dan SHA-256 setiap isi diperiksa terhadap sumber final.

**Aturan tetap penyerahan:** setiap perubahan arsitektur atau dokumen fondasi terkait disertai satu ZIP berisi file baru/yang diperbarui, dengan pemeriksaan kecocokan isi terhadap sumber dan tautan unduh pada jawaban akhir. Rincian aturan ada pada [AGENTS.md](../AGENTS.md).

## Hasil konsolidasi dan langkah yang menunggu persetujuan

Baseline memuat 18 KB, 307 RB/294 T KB yang tetap, sembilan epic, sembilan KA dan 36 DT stabil. **DT-003 B A3+B1+C2, DT-005 C+F+H2, DT-007 C dan DT-009 C+B2+V2+K2 tetap DISEPAKATI; DT-011 C+D1+M1+E1 MODEL DIPILIH dengan catatan konsistensi/implementasi TERBUKA.** Lima model dipilih, 31 DT lain belum final; DT-011 sendiri belum tuntas. DT-007 menambah 28 RB/28 T pada ruang penomoran sendiri; seluruh T rencana, bukan hasil uji. DT-003/005/009 masing-masing mempunyai 30 RB/30 T dari mandat; T belum dijalankan. Minimum konseptual A3 dipilih, rincian katalog/transisi/bukti DT-003/009/033, pemilik/mandat DT-005, pembuat/verifikator DT-006 dan akses DT-011 tetap terbuka; cakupan legal/aktivasi skala DT-010/031 dan impor manual DT-032 juga belum final.

**MVP tetap registri/Profil Umum + Industri Pengolahan Pangan dan kendali akses/verifikasi/koreksi/audit/duplikat aman/laporan dasar.** Program/integrasi/merge historis berisiko bukan kewajiban epic MVP; kapasitas kabupaten bukan semua fitur aktif atau sumber daya dibeli sekaligus.

G0 siap diajukan peninjauan; G1/G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Rekomendasi: tinjau baseline/DT prioritas → setujui scope/backlog/aturan minimum relevan → persetujuan coding lokal pada tahap terpisah. Penggunaan data nyata, akses lingkungan dan produksi memiliki izin/gerbang terpisah.

Tidak ada kode/database/migrasi/seeder/test otomatis/dependensi, inisialisasi Git/framework, akses server/OPD/OSS/Dukcapil/data nyata, backup/restore/load test atau deployment pada konsolidasi ini.

## Urutan peninjauan yang disarankan

1. Baca arsitektur dan contoh pemisahan entitas.
2. Lengkapi rincian penerapan model yang sudah dipilih: kasus cabang/pemilik bersama, kelengkapan registrasi, penetapan OPD/petugas, SOP dan bukti minimum pada lingkup P0.
3. Minta penyedia hosting mengisi checklist tanpa memberikan password di chat atau repository.
4. Sepakati ruang lingkup implementasi tahap pertama dan izin instalasi secara terpisah.

## Istilah singkat

| Istilah | Arti sederhana |
| --- | --- |
| OPD | Organisasi Perangkat Daerah |
| SSOT | Satu sumber data resmi yang dipakai bersama |
| Entitas | Jenis objek yang dicatat secara terpisah, misalnya orang atau unit usaha |
| Field | Satu isian data, misalnya nama unit usaha |
| Relasi | Hubungan antarobjek |
| Modular monolith | Satu aplikasi yang dibagi menjadi bagian dengan tanggung jawab jelas |
| Transaksi | Sekumpulan penyimpanan yang semuanya berhasil atau semuanya dibatalkan |
| Audit trail | Jejak siapa melakukan apa, kapan, dan atas dasar apa |
| Staging | Perlu konteks: staging impor adalah penampungan sementara sumber privat; lingkungan staging aplikasi adalah tempat uji sebelum produksi. Keduanya bukan Registri Induk |
| MVP | Cakupan awal terkecil yang disepakati dan dapat dipakai dengan aman |
| Pengendali Data Pribadi | Pihak yang menentukan tujuan dan mengendalikan pemrosesan menurut hukum; belum ditetapkan organisasi resminya |
| Prosesor Data Pribadi | Pihak yang memproses atas nama Pengendali menurut ketentuan hukum |
| JRA | Jadwal Retensi Arsip, acuan sah masa simpan dan nasib akhir arsip |
| DPIA | Penilaian dampak pelindungan data untuk pemrosesan yang berpotensi berisiko tinggi |
| Retry | Mengulangi pengiriman yang tertunda/gagal dengan identitas event yang tetap |
| Rekonsiliasi audit | Membandingkan event operasional, catatan pengiriman dan salinan untuk menemukan selisih |
| RPO / RTO | Sasaran batas kehilangan data / lama pemulihan; nilainya belum ditetapkan |
| Identitas kanonik / alias | Identitas internal rujukan untuk entitas yang terbukti sama / penautan ID historis yang tetap dibatasi hak |
| Merge / split | Konsolidasi identitas / pemisahan berdasar bukti dan pembagian referensi |
| Document root | Folder yang boleh dilayani web; untuk Laravel hanya public |
| Scheduler / queue | Pengatur tugas terjadwal / antrean pekerjaan; metode final menunggu bukti |
| Inode | Batas jumlah objek file/folder pada penyimpanan; perlu bukti kuota aktual |
| Staging impor / promosi | Penampungan sementara data berkas / penerapan perubahan yang sudah disahkan ke data resmi |
| Provenance | Asal-usul dari sumber/baris/pemetaan sampai keputusan dan perubahan resmi |
| Rollback / pembalikan korektif | Pembatalan transaksi gagal / keputusan koreksi baru atas hasil yang sudah sah |

## DT-003 Model B A3+B1+C2 dan audit historis

Pemilik produk menetapkan DT-003 pada **6 November 2026**. A3 mewajibkan minimum sebelum menyimpan draf baru: pihak berjenis jelas/peran, lokasi usaha, kegiatan, penanda usaha, sumber, petugas/waktu. B1 memakai dokumen formal relevan sesuai objek/klaim. C2 memakai paket minimum induk dan verifikator berwenang yang berbeda dari pembuat. **NIB tidak wajib pada draf, pengajuan maupun pengesahan induk.** Standar bukti dan rincian operasional tetap memerlukan penetapan.

[Rumusan resmi DT-003](06-keputusan-bisnis.md#dt-003--registrasi-model-b-kombinasi-a3b1c2) memuat lengkap **30/30 aturan dan 30/30 skenario**, dengan kode dan isi dari sumber pengguna; seluruh skenario rencana, belum diuji. DT-007 C serta KB-01–18 tetap, tidak ada pengesahan otomatis seluruh field/sektor.

Registrasi baru: petugas → A3 → draf → B1 → verifikator berbeda/C2. Historis: sumber → staging privat → pemetaan/validasi → kandidat → pelengkapan A3 → B1 → C2. Staging bukan draf resmi atau SSOT; data belum A3 hanya ditampung sesuai dasar/izin/retensi sah pada fase tersendiri. A3 tidak dilonggarkan dan MVP tidak diperluas dengan impor massal.

[Lampiran baru 11](11-audit-baseline-data-historis.md) memakai laporan agregat: 5.213 baris bernomor daftar NIB dan 42.730 baris DATA UKM, **HASIL INSPEKSI FILE, BUKAN JUMLAH UMKM UNIK RESMI**. Laporan menyimpan ketidakselarasan penyebut: dua kelompok format masing-masing berjumlah 5.218, bukan 5.213; perlu klarifikasi. Alamat pemilik bukan lokasi usaha, nomor izin bukan bukti B1 tervalidasi, Kuliner bukan otomatis pengolahan pangan dan kecocokan pengenal bukan izin merge.

DT-005/006/009/011/033 tetap memerlukan penetapan; DT-019 otorisasi sumber/dasar impor dan DT-032 lingkup/fase tetap terbuka sesuai status sumber. G0 siap diajukan peninjauan, belum disetujui; G1 coding **BELUM DIIZINKAN** (BELUM LULUS), G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting/kapasitas BELUM DAPAT DINILAI.

[Audit konsistensi](08-audit-konsistensi-dokumentasi.md#addendum-dt-003-dan-baseline-historis--6-november-2026) mencatat pemeriksaan dan daftar file. Tidak ada kode/migrasi/database/paket/server/Excel/data per orang/impor/merge/backup/restore/deployment; hasil hanya Markdown dan ZIP perubahan terverifikasi.

## DT-005 Model C+F+H2 — model dipilih, OPD belum ditetapkan

**6 November 2026:** C menetapkan kewenangan dari fungsi/mandat sah; F pada kode field/cakupan/waktu efektif dengan satu OPD aktif; H2 mewajibkan penetapan resmi untuk perubahan pemilik. [Rumusan DT-005](06-keputusan-bisnis.md#dt-005--kepemilikan-field-model-cfh2) memuat lengkap **30 aturan dan 30 skenario penerimaan**, seluruh skenario belum dijalankan. KB-01–18, DT-003 B A3+B1+C2 dan DT-007 C tetap.

[Matriks 96 kode acuan](matriks-kewenangan-mvp-kb09.md#katalog-usulan-per-kode-field--dt-005) memakai calon fungsi Registri UMKM, Perizinan, Perindustrian, Data Ekonomi UMKM dan Klasifikasi. Nama OPD/petugas/dokumen mandat/kelas akses final MENUNGGU PENETAPAN. [Kamus](kamus-data-mvp-kb09.md#dua-lapisan-katalog-kewenangan--dt-005) membedakan katalog definisi field dari penetapan pemilik, tanpa tabel fisik. Matriks ekonomi bukan aktivasi mesin skala atau perluasan MVP.

Pemilik Field, Pemasok Data, Pembuat Profil, Pengesah Awal, Pengesah Field dan Admin Teknis adalah enam peran berbeda; koordinator fungsi terpisah. Pemasok/pencatat pertama tidak mendapat pengesahan otomatis, admin/koordinator bukan superuser bisnis dan pembuat tetap tidak boleh mengesahkan profil awalnya sendiri.

[Sepuluh tahap H2](04-tata-kelola-data.md#peralihan-kewenangan-h2--dt-005) mengatur mandat/tanggal efektif, tidak tumpang tindih, pergantian petugas/hak dan antrean, konfigurasi atas keputusan sah serta audit. Tanggal konfigurasi bukan tanggal efektif, riwayat lama tetap dan perpindahan tidak otomatis mengesahkan pengajuan tertunda.

[Audit terbaru](08-audit-konsistensi-dokumentasi.md#addendum-dt-005-cfh2--6-november-2026) membahas potensi salah tafsir cakupan dan usulan fungsi lama. Tidak ditemukan kebutuhan mengubah pilihan KB/DT-003/DT-007. DT-004/006/008/009/011/012/019/033 dan rincian aktual DT-005 tetap terbuka. Pemasok Excel bukan pemilik seluruh field; angka laporan/pemetaan historis tidak dinyatakan sah.

G0 siap diajukan peninjauan, belum disetujui; G1 coding BELUM DIBERIKAN/BELUM LULUS, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting BELUM DAPAT DINILAI. Hanya Markdown/ZIP terverifikasi, tanpa kode/database/migrasi/dependensi/konfigurasi hak nyata/server/data pribadi/impor/deployment.

## DT-009 C+B2+V2+K2 — bukti dan koreksi

Pemilik produk menetapkan model bisnis ini pada **6 November 2026**. [Keputusan DT-009](06-keputusan-bisnis.md#dt-009--bukti-dan-koreksi-model-cb2v2k2) memuat lengkap **30 aturan dan 30 skenario penerimaan**, seluruh skenario belum dijalankan. KB-01–18, DT-003 B A3+B1+C2, DT-005 C+F+H2 dan DT-007 C tetap.

B2 memakai [katalog 16 kelompok klaim](kamus-data-mvp-kb09.md#katalog-bukti-per-kelompok-klaim--dt-009) dengan kategori bukti **USULAN/MENUNGGU PENETAPAN**; bukan daftar dokumen resmi wajib semua UMKM. Penilaian bukti MEMADAI tidak otomatis mengesahkan nilai. Katalog belum sah berarti BELUM DAPAT DINILAI; B1 tetap formal relevan dan NIB tidak wajib induk.

Empat jalur koreksi: **K1 administratif, K2 perubahan fakta, K3 pembetulan historis, K4 konflik/risiko tinggi**. Komponen model K2 menunjuk paket empat jalur, bukan semua koreksi K2. Satu pengesah field biasa cukup sesuai KB-07; K4 bukan otomatis dua tanda tangan. Alih pemilik OPD tetap H2, bukan K1–K4.

V2 menjaga nilai lama hanya jika masih sah/tidak dibatasi. Kandidat tidak menimpa otomatis, penolakan tidak memulihkan nilai tidak sah dan persetujuan bertanggal efektif mendatang tidak berlaku lebih awal. Konflik relevan tetap menghalangi positif agregasi DT-007, dengan riwayat dipertahankan. [Tata kelola](04-tata-kelola-data.md#transisi-usulan-koreksi--dt-009) memuat rancangan 14 transisi delapan status usulan terpisah dari status induk/field/sektor dan kasus konflik.

[Audit konsistensi terbaru](08-audit-konsistensi-dokumentasi.md#addendum-dt-009-cb2v2k2--6-november-2026) mencatat potensi salah tafsir bukti/pengesahan, nilai lama, K2/H2 dan status. Tidak ditemukan kebutuhan mengganti keputusan sebelumnya. Dokumen/kecukupan/masa berlaku bukti, risiko/K4, retensi/akses dan OPD/mandat nyata belum final; DT-006/008/011/012/019/033 tidak ditutup. Angka historis/AH-01 tidak diubah dan tidak menjadi bukti pengesahan dari Excel.

G0 siap diajukan peninjauan, belum disetujui. G1 coding BELUM DIBERIKAN/BELUM LULUS, G5/G7 BELUM LULUS, G2/G3/G4/G6 BELUM DINILAI. Hosting BELUM DAPAT DINILAI. Hanya Markdown/ZIP, tanpa kode/tes aplikasi/database/migrasi/dependensi/server/layanan eksternal/data pribadi/impor/merge/deployment.

## DT-011 C+D1+M1+E1 — pilihan tetap, konflik terlihat

[Keputusan DT-011](06-keputusan-bisnis.md#dt-011--otorisasi-model-cd1m1e1) memuat lengkap **30 aturan/30 skenario** dari mandat dan 24 kasus batas. Semua skenario rencana belum dijalankan. Tidak mengganti D1/M1/E1 dengan D2/M2/E2; semua KB/DT-003/005/007/009 dan MVP tetap.

D1 memungkinkan hak dasar dari OPD yang keterkaitan/katalognya sah; paket nyata belum ditetapkan, bukan otomatis NIK/pengesahan. M1 gabungan seluruh penugasan sah/aktif dengan batas asal, bukan satu penugasan eksklusif sesi. Larangan pembuat mengesahkan induk buatannya sendiri tetap.

E1 tetap **hak baca otomatis mencakup unduh/ekspor**, hanya objek/proyeksi yang boleh dibaca. Namun RB-11.07/21/T11-14 mensyaratkan tindakan terpisah dan izin/persetujuan massal tersendiri. **Ini konflik kebijakan nyata yang belum diputus**, bukan selesai karena desain menambahkan batas. Keputusan penyelesaian memerlukan pemilik produk; unduh/ekspor terdampak tidak diimplementasikan.

[Matriks 19 tindakan/enam kelompok pelaksana](matriks-kewenangan-mvp-kb09.md#model-hak-cd1m1e1--dt-011), [8 konteks/10 dimensi E1](04-tata-kelola-data.md#dampak-e1--dt-011), [metadata izin](kamus-data-mvp-kb09.md#metadata-izin-dan-penugasan--dt-011) dan [audit konflik](08-audit-konsistensi-dokumentasi.md#addendum-dt-011-cd1m1e1--6-november-2026) membedakan peran/mandat, field/objek/wilayah/tujuan/sensitivitas/waktu, penerima/pencabutan/audit. Pemilik OPD bukan akun global dan pengesah field orang bermandat.

Katalog D1, validasi M1, hubungan E1 dengan massal/bukti sensitif/publikasi/tujuan/penerima serta OPD/penugasan aktual belum final. Data pribadi nyata belum diizinkan; sumber historis tidak menjadi ekspor mentah dari hak baca registri. G0 siap ditinjau dengan konflik terlihat, belum disetujui. G1 BELUM LULUS/coding BELUM DIBERIKAN; G2/G3/G4/G6 BELUM DINILAI; G5/G7 BELUM LULUS, hosting BELUM DAPAT DINILAI. Hasil hanya Markdown/ZIP tanpa kode/database/akun/hak nyata/server/data pribadi/ekspor/deployment.
