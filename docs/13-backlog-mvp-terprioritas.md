# Backlog implementasi SIJAI UMKM — konsolidasi siap ditinjau

**Status terkini G1-B3.3 — 7 November 2026:** pemilik menerima baseline lokal sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen dan menyetujui pengesahan awal C2 lokal sintetis. Baca [kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md) dan [manifest 40](40-manifest-perubahan-g1b33.md). C2 hanya paket minimum induk, oleh pengesah bermandat berbeda dari pembuat; field/sektor tidak ikut sah. Satu migrasi maju menambah tiga tabel C2; tidak ada paket baru atau rewrite. Hentikan pada B3.3. Field operasional, K1–K4 penuh, pangan lengkap, E1, impor/integrasi, salinan audit eksternal, data nyata, G5/G7 dan deployment tetap tertutup. Model KB/DT dan konflik E1/KB-11 tetap. Pernyataan izin lama di bawah merupakan riwayat fase terkait.

**Riwayat izin G1-B3.2 — 7 November 2026:** pemilik menerima baseline lokal G1-A/B1/B2/B3.1 dengan catatan tes MySQL dan HTTP B3.1 belum diverifikasi ulang independen, lalu menyetujui antarmuka A3/pengajuan sintetis terbatas. Registri, formulir berulang, tinjau, pengajuan/pengembalian/revisi/pengajuan ulang memakai sesi server dan domain B2. Baca [kontrak 32](32-kontrak-antarmuka-registrasi-g1b32.md), [panduan 33](33-panduan-alur-registrasi-g1b32.md), [hasil 34](34-laporan-hasil-g1b32.md) dan [manifest 35](35-manifest-perubahan-g1b32.md). Tidak ada migrasi/paket baru. C2/field operasional, K1–K4 penuh, E1, data nyata, G5/G7, salinan audit eksternal dan deployment tetap tertutup. Hentikan pada B3.2. Model KB/DT tetap; konflik E1/KB-11 terbuka. Pernyataan izin/perencanaan terdahulu di bawah dibaca sebagai riwayat fase terkait, bukan batas izin terbaru atau izin lanjutan.

**Riwayat izin G1-B3.1 — 6 November 2026:** pemilik menerima baseline lokal G1-B2 dengan catatan tes MySQL belum diverifikasi independen, lalu menyetujui autentikasi/otorisasi/penguatan audit lokal sintetis. Login dan profil baca-saja terikat sesi server; mutasi bisnis/C2/field operasional/K1–K4/ekspor tetap ditutup. Baca [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md) dan [manifest 31](31-manifest-perubahan-g1b31.md). G1-B3.2/G5/G7/data nyata/produksi belum diizinkan. Model KB/DT tetap; E1/KB-11 terbuka. Status izin/autentikasi lama di bawah adalah riwayat, bukan mandat fase selanjutnya.

**Pembaruan setelah persetujuan G1-A — 6 November 2026:** pemilik produk telah menyetujui fondasi lokal secara terbatas; hasilnya tercatat pada [laporan G1-A](17-laporan-hasil-g1a.md) dan [panduan pemasangan](16-pemasangan-fondasi-lokal-g1a.md). Bagian persiapan di bawah yang menyebut belum diizinkan/Laravel belum dibuat adalah snapshot sebelum persetujuan, bukan status aplikasi saat ini. G1-B/data nyata/produksi tetap belum diizinkan, E1 tetap konflik terbuka.

Tanggal **6 November 2026**. Status **RANCANGAN BACKLOG, BUKAN IZIN ATAU HASIL APLIKASI SELESAI**. Semua 19 ID docs/13 sumber dipertahankan. Rincian diselaraskan [kontrak MVP](12-kontrak-mvp-pra-coding.md), [kontrak teknis](14-kontrak-teknis-fondasi-lokal.md) dan baseline KB/DT.

## Urutan kerja menurut prasyarat

1. Sekarang S0-01/02: dokumentasi/review; 15 pemeriksaan prototipe lulus tetapi temuan belum diperbaiki.
2. Setelah persetujuan **G1-A**, S0-03 fondasi framework/dependensi/build/tes tanpa DB. Permintaan kontrak bukan persetujuan instalasi.
3. Setelah scope/desain/izin **G1-B**, rancang identitas, katalog hak dan audit bersama. **S3-01/02 dan S4-04 adalah prasyarat sebelum mutasi bisnis diaktifkan**, walau nomor audit lebih belakang.
4. S1 → S2, S4 sesuai dependensi → S5 pangan/laporan → S6-01 penerimaan scope terkait. Tidak harus membangun seluruh backlog sekaligus.
5. S3-03 ekspor/unduh dan S6-02 operasi nyata tetap BLOKIR. Mesin skala, impor historis dan program bukan tambahan otomatis.

P0 berarti prioritas pada pekerjaan terkait, bukan semua fitur harus masuk tahap pertama. “Siap diajukan” berarti dapat ditinjau untuk persetujuan, bukan sudah diizinkan. AC adalah rencana penerimaan teknis pada dokumen 14, bukan nomor KB/DT/RB/T baru atau hasil tes aplikasi.

## Backlog terprioritas

| ID sumber | Prioritas | Hasil/paket | Status kini | Hasil konkret | Penerimaan rencana | Prasyarat/batas |
| --- | --- | --- | --- | --- | --- | --- |
| S0-01 | P0 | Kontrak MVP/rekonsiliasi | TERDOKUMENTASI, menunggu review | docs/12, 14, 15 sesuai KB-01–18/DT terkait; konflik E1 terlihat | Review dokumentasi, bukan uji aplikasi | G0 peninjauan; tidak menutup DT |
| S0-02 | P0 | Review/perbaikan prototipe | 15/15 bawaan lulus; delapan temuan BELUM DIPERBAIKI | Prototipe tetap terpisah; P-01–08 diselesaikan sebelum perilaku dipakai sebagai acuan produksi | Tes negatif grant cocok, verifier kosong, A3 lengkap, temporal, audit | Izin kode perbaikan terpisah; tidak copy mentah |
| S0-03 | P0 | Fondasi Laravel/Livewire/Tailwind | G1-A selesai; regresi G1-B2 lulus | Fondasi sintetis dipertahankan, 10 tes/56 assertions tanpa DB | AC-F01–08 fondasi dan AC-X01/02 negatif pada laporan 17; QA UI B3.2 di laporan 34 | G1-B3.2 membuka antarmuka A3/pengajuan sintetis saja |
| S1-01 | P0 | Pihak/Orang/Badan/Unit dan M:N | G1-B2 domain sintetis teruji; bukan registri operasional nyata | ULID, Orang/Badan terpisah, hubungan M:N berperan/masa dan revisi | AC-I01–03; KB-01/03/09 | G1-B2; tidak menyunting identitas pihak bersama lewat draf Unit |
| S1-02 | P0 | Lokasi/cabang dan kegiatan | G1-B2 lokasi/kegiatan sintetis teruji; KBLI resmi belum diaktifkan | ID stabil lokasi/kegiatan, alamat pihak berbeda, cabang bukan Unit otomatis | AC-I04/05; KB-01/09/10 | S1-01; klaim cabang uji bukan penetapan hukum/KBLI |
| S2-01 | P0 | Draf A3 | G1-B3.2 domain + UI A3 sintetis teruji | A3 lengkap sebelum draf; NIB opsional; aktor/waktu server dan audit | AC-R01/02; DT-003 | Mandat/katalog sintetis dan gateway sesi; formulir penuh butuh baca/edit seluruh kelompok |
| S2-02 | P0 | Pengajuan B1 dan pengesahan C2 | SEBAGIAN G1-B3.3: C2 paket minimum lokal sintetis, di atas UI B3.2; bukan pengesahan field | Kelengkapan dihitung, bukti/kandidat uji; pengajuan bukan pengesahan | AC-R03–05; DT-003/005/007/009 | Standar nyata belum sah; katalog C2 uji terpisah, pembuat berbeda dan NIB opsional |
| S3-01 | P0 | Katalog field/pemilik dan H2 | SEBAGIAN G1-B1: katalog/irisan/masa sintetis teruji; H2/SOP nyata belum dibangun | Tepat satu pemilik kode/cakupan/waktu, irisan diperiksa, sejarah/antrean terjaga | AC-A01/02; DT-005 | Desain scope/versi/transaksi; mandat riil belum ditetapkan |
| S3-02 | P0 | Otorisasi C+D1+M1 | SEBAGIAN G1-B3.2: sesi/D1/M1 dan izin UI teruji; hak nyata belum aktif | Login server, proyeksi field, sensitivitas, scope/tujuan/waktu; admin bukan pengesah | AC-A03–06; DT-011/KB-11 | Katalog/mandat sintetis; hanya mutasi A3/pengajuan; E1 dan C2 tetap tertutup |
| S3-03 | P0/BLOKIR | Unduh/ekspor E1 | BLOKIR KEBIJAKAN | Tidak membuat endpoint/file ekspor; model E1 tetap dengan konflik KB-11 | AC-X01/02 hanya uji negatif ketiadaan jalur | Keputusan pemilik produk atas E1/RB-11.07/21/T11-14; bukan scope implementasi |
| S4-01 | P0 | Status dan agregasi lingkup | SEBAGIAN G1-B3.3: C2 induk terpisah dari field/sektor; agregasi penuh belum dibangun | C2 approved/rejected/returned; field unverified dan sektor not started tetap | AC-V01/02; DT-007/033 | DT-007/033 tetap; tidak membuat pengesah baru atau menganggap READY tersimpan |
| S4-02 | P0 | Bukti per klaim | SEBAGIAN G1-B3.2: UI penilaian metadata klaim sintetis versi draf; standar nyata belum sah | Objek/tujuan/jenis/waktu dan izin field klaim; revisi menahan pengajuan sampai dinilai ulang | AC-E01/02; DT-009/KB-11 | Katalog uji bukan dokumen wajib/SOP; tidak mengaktifkan unggah bisnis |
| S4-03 | P0 | Koreksi K1–K4/V2 | RANCANGAN | Usulan/versi/efektif/periode terpisah; K3 tidak menimpa kini; future tidak prematur | AC-C01–04; DT-009/005/007 | S3/S4-02/04; clock tes eksplisit, DT-034 tetap terbuka; H2 bukan K1 |
| S4-04 | P0 | Audit kritis/salinan | SEBAGIAN G1-B3.2: audit UI/versi/rollback/outbox teruji; salinan independen hanya rancangan | Audit wajib dan SQL kritis atomik; salinan/worker/koneksi eksternal belum aktif | AC-L01–03; KB-12 | KB-12, rancangan 28; implementasi sink/operasi butuh izin terpisah |
| S5-01 | P0 | Profil pangan/produk/bahan/peralatan | RANCANGAN | Record terkait, merek bukan Unit baru, draf tidak terverifikasi | AC-P01/02; KB-09 | Registri/kegiatan, akses/audit, skema berizin; DT-033 nyata terbuka |
| S5-02 | P0 | Pengukuran produksi | RANCANGAN | Produk/nilai/satuan/periode/sumber/verifikasi; kapasitas bukan realisasi; sejarah terjaga | AC-P03–05; KB-09/DT-009 | S5-01, satuan/konversi/masa uji jelas; bulanan bukan kebijakan wajib baru |
| S5-03 | P1 | Pencarian/laporan berizin | RANCANGAN; ekspor BLOKIR | Hitungan Unit/Orang/produk berbeda, proyeksi/lingkup baca sah | AC-Q01/02; KB-09/11/DT-007/011 | Akses/privasi/agregasi; bukan publikasi otomatis |
| S6-01 | P0 | Integrasi/keamanan sintetis | SEBAGIAN G1-B3.3: hasil regresi/C2/HTTP/visual pada laporan 39; bukan G3 lulus | Tes lama dan C2/katalog/mandat/CSRF/versi/replay/rollback/konkurensi | AC relevan pada docs/14, dipetakan ke T sumber | Tes Codex bukan verifikasi independen; C2 hanya sintetis; bukan izin field/G5/G7 |
| S6-02 | P0/BLOKIR | Operasi nyata/peluncuran | DI LUAR G1-A/B; BLOKIR | Mandat/hukum/JRA/hosting/audit/operasi/kapasitas dan izin terpisah | G5/G6/G7 dan checklist hosting pada tugas berizin | Staging uji aplikasi berbeda staging impor KB-15; tidak akses server/data historis sekarang |

## Perbedaan penting terhadap paket sumber

| Isi sumber | Rekonsiliasi |
| --- | --- |
| “Izin/G1 prototipe terbatas” | Prototipe sudah ada dan direview; tidak memberi G1 Laravel atau izin instalasi/migrasi |
| A3 minimal | Lengkap DT-003, termasuk jenis/peran pihak dan petugas/waktu; NIB tidak wajib sampai C2 |
| B1/C2 boolean | Bukan sumber verifikasi server; perlukan resolver aktor/mandat/katalog/bukti per klaim |
| M1 | Himpun seluruh mandat aktif dengan batas asal, bukan satu mandat eksklusif sesi atau silang scope |
| Ekspor ditolak | Fitur tertahan, bukan E2. Tes negatif harus memakai grant cocok dan label tindakan baku |
| Koreksi berjejak | Perlu temporal/versi/periode/konkurensi/audit MySQL; array bukan audit KB-12 |
| Audit/privasi | Prasyarat jalur bisnis sejak awal, bukan ditunda sampai selesai modul bisnis |
| “148 skenario RB/T” | 148 RB-DT dan 148 T-DT terpisah; 15 tes bawaan tidak menggantikan keduanya |
| Staging | Bedakan lingkungan uji aplikasi dari staging impor KB-15; S6-02 bukan izin impor/produksi |

## Hal yang masih terbuka

Nama OPD, identitas/mandat petugas, wilayah pilot, katalog D1, standar dokumen/kecukupan bukti/masa/risiko, katalog sektor/status/satuan/konversi/periode, hukum/JRA/retensi dan kebijakan waktu layanan tetap memerlukan penetapan. Tes boleh memakai katalog/OPD/mandat sintetis berlabel fiktif; tidak mengesahkan rincian operasional nyata.

Model DT-011 **C+D1+M1+E1** tetap dipilih. Konflik E1 literal terhadap RB-11.07/21/T11-14 tetap **TERBUKA**; tidak membangun atau mengaktifkan unduh/ekspor. Model DT-003/005/007/009 dan KB-01–18 dipertahankan.

## Status gerbang

G1/DT-028 **DISETUJUI TERBATAS sampai G1-B3.3**, sesuai mandat masing-masing tahap. Pemilik menerima baseline sampai B3.2 dengan catatan MySQL/HTTP/browser belum diverifikasi independen. Hasil C2 lokal pada [laporan 39](39-laporan-hasil-g1b33.md). Hentikan pada B3.3; field operasional, koreksi penuh, pangan lengkap, E1, sink audit, data nyata dan produksi bukan izin tersirat.

G2/G3/G4/G6 lingkup lebih luas belum dinyatakan lulus, G5/G7 belum lulus dan hosting BELUM DAPAT DINILAI. Seluruh fitur/tes sumber KB/DT/MVP tidak otomatis selesai. Sembilan belas ID backlog sumber tetap dipertahankan.
