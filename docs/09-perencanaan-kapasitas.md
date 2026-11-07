# Perencanaan kapasitas skala kabupaten — KB-18

Tanggal: **5 November 2026**. Keputusan pemilik produk: **KB-18 Model C — Perencanaan Kapasitas Skala Kabupaten Sejak Awal DISEPAKATI pada tingkat dokumentasi**. Acuan angka contoh: lampiran “FINALISASI DOKUMENTASI KB-18” dari pemilik produk pada tanggal tersebut. Angka contoh **bukan statistik resmi Kabupaten Sinjai, bukan ukuran PDN, bukan hasil uji, dan bukan rekomendasi kuota/pengadaan**.

**Hosting dan kapasitas final: BELUM DAPAT DINILAI.** Tidak tersedia statistik volume faktual, spesifikasi aktual/bukti kemampuan PDN atau hasil uji beban berizin dalam pekerjaan ini. Dokumen ini pusat model/perhitungan; [register/30 aturan/30 skenario](06-keputusan-bisnis.md), [arsitektur](02-arsitektur-awal.md), [hosting](07-checklist-hosting-cpanel.md) dan [audit konsistensi](08-audit-konsistensi-dokumentasi.md) merujuk model yang sama.

## Tujuan Model C dan enam cakupan yang berbeda

| Hal yang dibedakan | Makna dan status |
| --- | --- |
| Cakupan arsitektur skala kabupaten | Satu Registri Induk/ID/relasi/kewenangan lintas OPD dan sektor Kabupaten Sinjai, dipersiapkan sejak desain; bukan seluruh fitur aktif |
| Cakupan fungsional MVP pertama | KB-09: Registri Induk/Profil Umum + Industri Pengolahan Pangan beserta akses/verifikasi/koreksi/audit/pencarian/laporan dasar yang disepakati |
| Kapasitas infrastruktur awal | Sumber daya awal yang kelak disahkan berdasarkan kebutuhan MVP terverifikasi; belum dipilih/diukur/disediakan melalui tugas ini |
| Kapasitas target pertumbuhan | Kebutuhan dari parameter/pertumbuhan dan horizon yang dapat direvisi; proyeksi bukan kemampuan server |
| Kapasitas maksimum hasil pengujian | Batas terukur pada lingkungan, konfigurasi, profil dan kriteria uji berizin tertentu; **belum ada hasil pengujian** dan bukan maksimum universal |
| Kapasitas yang disediakan/disahkan | Alokasi nyata dan mandat/biaya layanan setelah bukti/keputusan; **BELUM DIKETAHUI**, tidak sama dengan kuota iklan/cPanel atau proyeksi |

Model C menyiapkan ID induk/relasi, batas modul dan pertumbuhan database tanpa mengganti prinsip SSOT ketika sektor bertambah. Tidak menjanjikan bahwa perangkat/server/query tidak pernah perlu disesuaikan. Penyimpanan dokumen, audit, salinan, staging, backup dan ruang proses dihitung terpisah; infrastruktur dapat ditingkatkan secara bertahap setelah keputusan sah. Program KB-16 tetap setelah MVP; semua OPD/sektor/modul tidak harus diaktifkan pada MVP pertama.

## Kategori nilai, sumber dan jejak asumsi

| Kategori nilai | Persyaratan dan penggunaan |
| --- | --- |
| FAKTUAL TERVERIFIKASI | Sumber, tanggal, definisi, cakupan, metode dan pihak verifikator tersedia. Tidak ada angka volume resmi Sinjai/fasilitas PDN yang dinyatakan faktual pada model ini |
| ASUMSI PERENCANAAN | Input simulasi dari pengguna, dapat diganti. Catat alasan/versi/ruang lingkup dan jangan dipublikasikan sebagai statistik |
| PROYEKSI | Hasil hitung dari input faktual/asumsi, rumus/parameter/horizon/versinya terlacak; bukan hasil ukur |
| HASIL PENGUJIAN | Pengukuran yang benar-benar dilakukan dengan izin, lingkungan/konfigurasi/profil/metode/tanggal/pelaksana jelas. **Belum tersedia** |
| BELUM DIKETAHUI | Input/bukti belum tersedia atau belum pasti. Jangan diisi nol, menghapus komponen, atau memberi status Layak |

Label kategori pada judul/kolom/row berlaku pada seluruh angka kapasitas dalam cakupan tabel tersebut. ID keputusan, nomor butir dan jumlah dokumen bukan statistik volume UMKM. Setiap revisi model harus menelusuri sumber/input, kategori, satuan, rumus, cakupan agregat, versi/tanggal/penyusun/pemeriksa dan status persetujuan. Koreksi asumsi tidak menulis ulang fakta bisnis atau data historis.

## Parameter model yang dapat diganti

Tidak ada formulir aplikasi atau skrip kapasitas dibuat. Parameter di tabel adalah rancangan input dokumen; perhitungan dapat diperbarui setelah keputusan/bukti baru. Titik/koma angka mengikuti penulisan Indonesia; satuan penyimpanan memakai desimal.

| Parameter | Definisi | Nilai contoh/status | Satuan/cakupan | Kategori | Sumber atau batas |
| --- | --- | --- | --- | --- | --- |
| U₀ | Unit Usaha awal | 10000; 30000; 60000 | record Unit unik | ASUMSI PERENCANAAN | Pemilik produk, lampiran KB-18, 5 November 2026; tiga skenario, bukan statistik |
| O₀ | Orang terkait unik awal | 13000; 39000; 78000 | record Orang unik | ASUMSI PERENCANAAN | Contoh agregat 1,3 Orang per Unit; bukan satu record Orang per hubungan |
| L₀ | Lokasi awal | 15000; 45000; 90000 | record lokasi | ASUMSI PERENCANAAN | Contoh agregat 1,5 lokasi per Unit; cabang tetap mengikuti KB-01 |
| P₀ | Produk awal | 40000; 120000; 240000 | record produk | ASUMSI PERENCANAAN | Contoh agregat 4 produk per Unit; bukan aturan minimum/maksimum produk |
| A₀ | Akun OPD terdaftar | 60; 150; 300 | akun internal | ASUMSI PERENCANAAN | Bukan jumlah OPD resmi/petugas ditetapkan atau pengguna aktif |
| C₀ | Pengguna bersamaan | 15; 50; 120 | pengguna | ASUMSI PERENCANAAN | Beban contoh per skenario; bukan hasil pengukuran atau jumlah proses PHP |
| g_U | Pertumbuhan Unit tahunan | 10% | per tahun | ASUMSI PERENCANAAN | Ilustrasi dari pengguna, bukan hasil tren Sinjai; dapat diganti |
| h | Horizon ilustrasi | 0–3 | tahun | ASUMSI PERENCANAAN | Tahun relatif, bukan tanggal peluncuran atau masa kontrak; dapat diganti |
| b_agregat | Data terstruktur agregat | 20 KB | per Unit pada model sederhana | ASUMSI PERENCANAAN | Termasuk relasi/produk sederhana; bukan ukuran baris Unit saja atau hasil ukur fisik |
| d | Dokumen rata-rata | 3 | dokumen per Unit | ASUMSI PERENCANAAN | Hanya contoh; jumlah per Orang/Badan/lainnya input tersendiri agar tidak ganda |
| m_doc | Ukuran dokumen rata-rata | 1,5 MB | per dokumen | ASUMSI PERENCANAAN | Rata-rata contoh, bukan batas unggah/maksimum atau format final |
| e_proksi | Proksi audit | 50 | event per Unit per tahun | ASUMSI PERENCANAAN | Bukan batas maksimum/retensi; alternatif berbasis aktivitas wajib dimodelkan |
| b_event | Ukuran event audit | 1,2 KB | per event | ASUMSI PERENCANAAN | Bukan ukuran pasti fisik/indeks/enkripsi/salinan; perlu ukur kelak |
| τ | Jeda rata-rata ilustrasi transaksi | 15 | detik per permintaan per pengguna | ASUMSI PERENCANAAN | Contoh RPS untuk C=50, bukan waktu respons atau SLA |
| B₀, K₀, H₀ | Badan, kegiatan, hubungan pemilik/pengelola | BELUM DIKETAHUI | record per jenis | BELUM DIKETAHUI | Input terpisah; tidak menebak rasio/sama dengan Unit |
| g_O, g_B, g_K, g_H | Pertumbuhan jenis induk/relasi lain | BELUM DIKETAHUI | per tahun per jenis | BELUM DIKETAHUI | Tidak otomatis sama dengan g_U; hubungan baru tidak selalu Orang baru |
| p_ukur, v_versi | Frekuensi pengukuran/klasifikasi/revisi | BELUM DIKETAHUI | record per periode/versi | BELUM DIKETAHUI | Tidak memaksakan pelaporan bulanan atau menimpa histori |
| g_doc, rev_doc, max_doc, fmt_doc | Pertumbuhan/revisi/maksimum/format dokumen | BELUM DIKETAHUI | sesuai definisi tiap parameter | BELUM DIKETAHUI | Belum ada kebijakan unggah/retensi/rasio duplikasi sah |
| E_a, e_a, g_audit | Aktivitas, event per aktivitas dan pertumbuhan audit | BELUM DIKETAHUI | aktivitas/event per periode | BELUM DIKETAHUI | Termasuk baca sensitif/admin/ekspor/gagal/retry, bukan hanya per Unit |
| B_serentak, R_batch, F_asal, V_validasi, T_tmp | Input staging | BELUM DIKETAHUI | batch/record/byte/durasi | BELUM DIKETAHUI | Ukuran puncak/durasi/retensi ditetapkan per dataset/lingkup impor |
| n_full, Δ_inc, n_titik, r_retensi | Strategi backup/titik/retensi | BELUM DIKETAHUI | byte/titik/periode | BELUM DIKETAHUI | Mengikuti KB-17; tidak menetapkan jumlah salinan/jadwal/retensi sekarang |
| S_sistem, I_tambahan, O_riil, W_tmp, H_cadangan | Artefak/indeks/overhead/ruang proses/cadangan | BELUM DIKETAHUI | byte per lingkungan/komponen | BELUM DIKETAHUI | Pastikan tidak sudah masuk ukuran agregat; cadangan bukan penggunaan saat ini |
| N_program, f_program | Volume program/layanan/observasi | BELUM DIKETAHUI | record/aktivitas/periode | BELUM DIKETAHUI | Hanya fase lanjut KB-16; tidak dimasukkan sebagai fitur MVP |
| CPU, RAM, disk, inode, koneksi, timeout | Fasilitas aktual PDN dan batas lain | BELUM DIKETAHUI | sesuai batas penyedia | BELUM DIKETAHUI | Tidak diperiksa; bukti KB-14 dan persetujuan pengelola diperlukan |
| RPO, RTO, target_kinerja, ambang | Target layanan/pemicu kapasitas | BELUM DIKETAHUI | sesuai indikator | BELUM DIKETAHUI | Belum disahkan; sel target/ambang tetap kosong pada matriks terkait |

Input kosong/BELUM DIKETAHUI tidak menjadi nol. Akun/pengguna harian, Badan/Kegiatan/hubungan, bahan/peralatan/pengukuran/versi, laju audit riil, dokumen per objek lain, staging/backup/indeks/ruang cadangan diberi parameter sendiri. Jangan memakai satu rasio untuk semua entitas atau menjadikan input contoh aturan bisnis.

## Tiga skenario awal — ASUMSI PERENCANAAN

**Semua angka tabel ini ASUMSI PERENCANAAN dari pemilik produk, bukan data resmi.**

| Parameter | Rendah | Dasar | Tinggi |
| --- | ---: | ---: | ---: |
| Unit Usaha | 10.000 | 30.000 | 60.000 |
| Orang terkait unik | 13.000 | 39.000 | 78.000 |
| Lokasi usaha | 15.000 | 45.000 | 90.000 |
| Produk | 40.000 | 120.000 | 240.000 |
| Akun OPD terdaftar | 60 | 150 | 300 |
| Pengguna bersamaan | 15 | 50 | 120 |

Rasio contoh **ASUMSI**: Orang terkait/Unit = **1,3**, lokasi/Unit = **1,5**, produk/Unit = **4**. Ini rasio agregat alat simulasi, bukan jumlah wajib tiap usaha. Satu Orang yang terkait beberapa Unit tetap satu record Orang unik, sementara hubungan/perannya dihitung tersendiri. Badan Usaha tidak diasumsikan sebanyak Unit. Lokasi/cabang menambah volume lokasi tanpa otomatis menambah Unit KB-01.

## Pertumbuhan multi-tahun — PROYEKSI dari asumsi

Rumus: **N(t) = N(0) × (1 + g)^t**. N(0) jumlah awal, g pertumbuhan tahunan per jenis, t tahun relatif. Horizon dan persentase dapat diganti; perubahan input harus menghitung ulang hasil dengan versi model baru.

Ilustrasi untuk **Unit Usaha**: g_U = **10% ASUMSI**, horizon **tahun 0 sampai 3 ASUMSI**. Tahun 0 memakai input asumsi; kolom berikutnya **PROYEKSI**, bukan registrasi atau pengukuran nyata.

| Skenario | Tahun 0 — ASUMSI | Tahun 1 — PROYEKSI | Tahun 2 — PROYEKSI | Tahun 3 — PROYEKSI |
| --- | ---: | ---: | ---: | ---: |
| Rendah | 10.000 | 11.000 | 12.100 | 13.310 |
| Dasar | 30.000 | 33.000 | 36.300 | 39.930 |
| Tinggi | 60.000 | 66.000 | 72.600 | 79.860 |

Contoh hitung **PROYEKSI** skenario dasar: **30.000 × (1 + 0,10)^3 = 39.930 Unit**. Angka tidak menentukan jumlah resmi, wilayah pilot atau jadwal peluncuran.

Pisahkan pertumbuhan:
- **Induk/relasi:** setiap jenis punya N(0)/g sendiri bila sesuai; pertumbuhan Unit tidak selalu menambah Orang/Badan pada rasio tetap.
- **Histori:** akumulasi pengukuran/versi/keputusan/alias yang wajib disimpan, bukan sekadar g_U. Contoh rumus konseptual: histori tersimpan = histori awal + penambahan per periode/revisi − penyusutan yang sah.
- **Dokumen:** objek/dokumen baru, ukuran, revisi dan salinan serta retensi; rasio dokumen tidak harus tetap.
- **Audit:** aktivitas/event/metadata/retensi; pengguna/ekspor/impor bertambah bisa mengubah laju tanpa Unit baru.

g untuk kelompok lain **BELUM DIKETAHUI**, bukan otomatis 10%. Pertumbuhan negatif/perubahan cakupan juga harus dapat dijelaskan jika kelak relevan. Jumlah record yang diproyeksikan pecahan tidak dibulatkan diam-diam menjadi fakta; kebijakan pembulatan estimasi dicatat terpisah. Ilustrasi di atas menghasilkan jumlah bulat.

## Matriks entitas, relasi dan volume

Seluruh volume contoh dalam matriks adalah **ASUMSI** sesuai skenario; input lain **BELUM DIKETAHUI**. Nama konseptual memakai entitas yang sudah setara pada [model data](03-entitas-dan-relasi.md), bukan instruksi membuat tabel baru.

| Kelompok volume | Dasar hitung/input | Batas identitas dan biaya yang harus dihitung | Status rincian |
| --- | --- | --- | --- |
| ORANG | O₀ unik; contoh 13000/39000/78000 berlabel ASUMSI | Orang unik tidak dibuat ulang tiap hubungan Unit; perubahan/alias/riwayat tetap punya biaya | Jumlah/ukuran riil dan pertumbuhan independen BELUM DIKETAHUI |
| BADAN_USAHA | B₀ input tersendiri, BELUM DIKETAHUI | Tidak disamakan dengan Unit atau Orang, peran Badan pada banyak Unit dicatat terpisah | Rasio/bukti/ukuran/pertumbuhan Badan belum final |
| UNIT_USAHA | U₀ contoh 10000/30000/60000, ASUMSI | Unit unik kesatuan operasional KB-01, ID internal stabil, SSOT lintas OPD | Jumlah resmi Sinjai dan ukuran fisik BELUM DIKETAHUI |
| KEGIATAN_USAHA | K₀ input tersendiri, BELUM DIKETAHUI | Satu Unit bisa multiaktivitas; berbeda dari kegiatan program KB-16 | Jumlah kegiatan/rata-rata per Unit tidak diasumsikan final |
| LOKASI_USAHA | L₀ contoh 15000/45000/90000, ASUMSI | Cabang teridentifikasi dan pemilik sama tetap bagian induk; lokasi menambah record lokasi, bukan otomatis Unit | Distribusi/riwayat lokasi dan ukuran aktual belum diketahui |
| HUBUNGAN_KEPEMILIKAN/PENGELOLAAN | H₀ input tersendiri, BELUM DIKETAHUI | Pakai HUBUNGAN_PIHAK_USAHA setara, M:N/peran/masa berlaku; satu Orang dua Unit = satu Orang dan dua hubungan relevan | Jumlah hubungan, versi/pergantian/pemilik bersama belum diketahui |
| PRODUK | P₀ contoh 40000/120000/240000, ASUMSI | Banyak produk/merek pada satu Unit melalui kegiatan/profil; tidak menambah Unit | Ukuran/revisi/sebaran produk belum diketahui |
| BAHAN_BAKU dan kebutuhan industri lain | Input bahan, hubungan produk-bahan, sumber, peralatan, kebutuhan lain | Record induk/bahan dan hubungan berulang berbeda; satu produk banyak bahan, jangan satu kolom daftar | Jumlah/rasio/ukuran/perubahan BELUM DIKETAHUI |
| PENGUKURAN_PRODUKSI dan pengukuran periodik | Σ objek × pengukuran per periode × periode tersimpan + revisi yang wajib | Tiap record menjaga produk/nilai/satuan/periode/sumber/verifikasi; Januari tidak ditimpa Februari | Frekuensi/retensi/ukuran/rasio revisi belum final, bukan otomatis bulanan |
| KLASIFIKASI_SKALA_USAHA dan KBLI berversi | Input hasil/input ekonomi/aturan/KBLI/relasi/versi per periode | KB-10 menyimpan usulan/disahkan, cakupan dan histori; volume bukan satu status terkini per Unit saja | Jumlah versi/penilaian/periode/ukuran BELUM DIKETAHUI |
| DOKUMEN_PRIVAT dan metadata | Σ jenis objek × dokumen × ukuran; contoh sederhana 3 × 1,5 MB per Unit | Byte berkas terpisah dari metadata terstruktur; versi/revisi/duplikat/temporer dan akses dipertimbangkan | Format/maksimum/retensi/dedup riil BELUM DIKETAHUI |
| PENGGUNA_OPD, peran dan penugasan | A₀ contoh 60/150/300 akun internal; peran/penugasan input tersendiri | Akun ≠ Orang pelaku, ≠ jumlah OPD, ≠ pengguna harian/bersamaan; masa berlaku/histori terhitung | Jumlah resmi akun/OPD/penugasan/aktivitas BELUM DIKETAHUI |
| KONFLIK, koreksi, pengesahan dan riwayat | Kasus/subkasus/keputusan/change_set/versi/bukti per proses | KB-04/KB-05/KB-07/KB-08 tetap, revisi salah tidak menghapus jejak | Volume/kebutuhan bukti/ukuran/retensi belum final |
| AUDIT_OPERASIONAL | Proksi 50 event/Unit/tahun × 1,2 KB, atau model aktivitas | Komponen akuntansi terpisah meski secara fisik ada di database aplikasi; ID/event/versi/retensi terlacak | Laju/ukuran/metadata/indeks fisik/retensi belum terukur |
| SALINAN_AUDIT_TERLINDUNGI | Volume event tersalin + metadata integritas/proses/retensi | Kapasitas per lingkungan/penguasaan kontrol terpisah KB-12, bukan master bisnis kedua | Lokasi/ukuran/overhead/fasilitas independen BELUM DIKETAHUI |
| BATCH_IMPOR dan RECORD_STAGING | Batch bersamaan × record/byte sumber/validasi/temporer × durasi simpan sah | Privat, bukan resmi sebelum pengesahan KB-15; puncak lintas OPD dan replay dipertimbangkan | Ukuran/frekuensi/durasi/retensi/scope impor belum disahkan |
| BACKUP dan artefak pemulihan | Full/incremental/titik/sumber/artefak/ruang restore per lingkungan | KB-17 konsisten database–dokumen–audit/versi; backup berbeda fungsi dari salinan audit | Strategi/lokasi/jumlah/titik/retensi/kompresi/RPO/RTO BELUM DIKETAHUI |
| PROGRAM, KEGIATAN, PARTISIPASI dan OBSERVASI_HASIL | Input fase lanjut untuk program/kegiatan/sesi/partisipasi/realisasi/indikator/observasi/tindak lanjut | KB-16 setelah MVP, peserta Orang vs penerima Unit/Badan; empat metrik layanan tidak disamakan | Volume/pertumbuhan/retensi/fase pertama program belum final, tidak menambah fitur MVP |

Kapasitas dihitung dari record fisik/rujukan/versi yang masih wajib dipertahankan, sedangkan laporan jumlah UMKM memakai definisi Unit unik. Merge/split tidak berarti semua record lama hilang atau semua salinan menjadi UMKM baru. Kanonik/alias/ID audit asli tetap punya biaya. Banyak pemilik/lokasi/produk/OPD bukan pengali jumlah Unit, tetapi menambah relasi/volume yang relevan.

## Data terstruktur, histori dan pencegahan hitung ganda

Dua pendekatan adalah **alternatif**:
- **Agregat sederhana:** S_database = U × b_agregat. Contoh b_agregat **20 KB/Unit ASUMSI** sudah mencakup relasi dan produk dalam model sederhana.
- **Rinci kelak:** S_database = Σ jumlah record tiap kelompok × ukuran representatif terverifikasi + bagian fisik yang belum masuk, menurut cakupan yang dinyatakan.

Jangan menambahkan ukuran Orang/produk/relasi lagi ke agregat yang sudah memuatnya. Model rinci **menggantikan atau memecah** bagian agregat, bukan otomatis ditambahkan. Pengukuran fisik database kelak harus menyebut apakah sudah termasuk audit, indeks dan overhead; komponen yang sudah tercakup tidak dihitung dua kali.

Ukuran agregat contoh bukan bukti semua histori/versi/alias/pengukuran telah terwakili. Inventaris harus menyatakan apa yang masuk/keluar; histori/indeks/overhead yang belum tercakup tetap komponen tambahan BELUM DIKETAHUI. Nilai proyeksi tidak digunakan menimpa status klasifikasi/ekonomi KB-10, menjumlah satuan produksi berbeda, menghapus koreksi atau mengubah keputusan field.

## Satuan dan model penyimpanan keseluruhan

**Konvensi satuan desimal:** 1 KB = 1.000 byte; 1 MB = 1.000.000 byte; 1 GB = 1.000.000.000 byte. Angka konversi ini definisi model, bukan klaim kapasitas server. Tidak menamai GB sebagai GiB atau mencampur satuan biner tanpa konversi eksplisit.

Rumus akuntansi kebutuhan:
**S_operasional = S_database + S_dokumen + S_audit_operasional + S_staging + S_sistem.**

Definisi untuk mencegah hitung ganda:
- S_database pada rumus ini khusus data terstruktur bisnis/relasi/histori yang dicakup; **mengeluarkan audit operasional** yang sudah ada sebagai komponen tersendiri, meskipun fisiknya berada di database aplikasi yang sama. Ini pemisahan perhitungan, bukan database baru.
- S_dokumen berisi byte dokumen/versi yang diwajibkan, metadata database hanya dihitung sekali.
- S_staging mencakup data sumber/record/validasi/temporer yang dialokasikan di sana; jangan memasukkan temporer yang sama lagi sebagai W_tmp.
- S_sistem mencakup artefak/dependensi/konfigurasi aman/log teknis lain yang belum masuk komponen sebelumnya.

**S_total_infrastruktur = S_operasional + S_salinan_audit_terpisah + S_backup_seluruh_lingkungan + I_tambahan + O_tambahan + W_tmp_belum_tercakup + H_cadangan.**

I_tambahan/O_tambahan hanya indeks/overhead yang **belum** masuk ukuran komponen. W_tmp mencakup ruang proses/restore yang belum dihitung sebelumnya. H_cadangan ialah ruang tersedia untuk pertumbuhan/ketidakpastian sesuai kebijakan kelak, bukan data terpakai saat ini. Jangan menghitung cadangan yang sama pada setiap komponen dan kembali pada total.

Buat buku rincian alokasi konseptual: komponen, lingkungan/lokasi kendali, sumber ukuran, kategori, apakah sudah termasuk indeks/overhead/revisi/temporer, referensi komponen induk, dan nilai belum diketahui. Setiap byte fisik dimasukkan sekali pada lokasinya. Backup yang menyimpan salinan data/audit adalah penggunaan fisik tambahan yang sah; jangan mengurangi salinan nyata dengan alasan isinya sama.

Total lintas lingkungan **bukan kuota satu akun cPanel**: pisahkan kebutuhan produksi, salinan audit berkontrol independen, backup terpisah dan ruang pemulihan/lingkungan uji. Metode/produk/lokasi belum dipilih; nilai total **BELUM DAPAT DINILAI** bila komponen wajib belum diketahui, tidak diisi nol.

## Contoh hitung tahun awal — PROYEKSI dari ASUMSI

Input seluruhnya **ASUMSI dari pengguna**: agregat terstruktur **20 KB/Unit**, **3 dokumen/Unit**, rata-rata **1,5 MB/dokumen**, **50 event/Unit/tahun**, ukuran **1,2 KB/event**. Output berikut **PROYEKSI**, bukan pemakaian/hasil uji.

| Skenario | Database agregat — GB | Dokumen — GB | Aliran audit per tahun — GB/tahun |
| --- | ---: | ---: | ---: |
| Rendah | 0,20 | 45,00 | 0,60 |
| Dasar | 0,60 | 135,00 | 1,80 |
| Tinggi | 1,20 | 270,00 | 3,60 |

Contoh dasar yang dapat dihitung ulang:
- Database: **30.000 × 20.000 byte = 600.000.000 byte = 0,60 GB**.
- Dokumen: **30.000 × 3 × 1.500.000 byte = 135.000.000.000 byte = 135 GB**.
- Audit tahunan: **30.000 × 50 × 1.200 byte = 1.800.000.000 byte/tahun = 1,80 GB/tahun**.

Database/dokumen tabel merupakan estimasi keadaan awal; audit adalah **aliran tahunan**, bukan stok audit yang sudah tersimpan pada hari pertama. Tidak menjumlah ketiganya menjadi “kuota total tahun awal” tanpa horizon/retensi dan asumsi waktu yang jelas. Stok audit tersimpan memerlukan akumulasi event selama rentang simpan yang sah. Pada ilustrasi audit tahunan, U memakai N(0) sebagai proksi paparan sepanjang tahun; bukan kurva aktivitas riil atau integral pertumbuhan intra-tahun.

Contoh belum mencakup backup, salinan audit terpisah, staging, sistem, indeks tambahan, overhead fisik, temporer/restore dan ruang cadangan, serta histori yang belum terwakili. **Bukan rekomendasi kuota server final** dan bukan alasan cukup menyediakan tiga komponen ini saja.

## Dokumen privat, revisi dan retensi

Rumus konseptual: **S_dokumen = Σ objek relevan × dokumen per objek × ukuran representatif + revisi/salinan yang benar-benar disimpan − penyusutan sah**; setiap komponen harus jelas cakupannya agar file yang sama tidak dihitung ulang dari dua hubungan. Maksimum dokumen/ukuran puncak, format dan pola unggahan simultan diberi parameter sendiri. Rata-rata **1,5 MB ASUMSI** bukan batas unggah maksimum.

Hitung dokumen untuk Orang/Badan/Unit/pengesahan/program sesuai lingkup yang sah, tanpa menganggap semuanya sudah masuk proksi 3/Unit. Referensi ganda ke file yang sama berbeda dari dua salinan fisik. Deduplikasi/kompresi tidak diberi penghematan sebelum terbukti aman dan sah; hak/retensi/bukti akses masing-masing tetap berlaku. Rujukan dokumen tidak menjadi tautan publik.

Revisi/pertumbuhan, berkas gagal/temporer, metadata, retensi/JRA/penahanan/penyusutan dan risiko data sensitif KB-11 harus diperhitungkan. Tidak menyimpan selamanya atau menghapus bukti wajib untuk mengurangi kuota. JRA/format/maksimum/volume faktual belum final.

## Audit operasional dan salinan terlindungi

Proksi sederhana: **E_tahun = U × 50 ASUMSI** dan **S_audit_tahun = E_tahun × 1,2 KB ASUMSI**. Ini hanya ilustrasi, bukan batas logging atau retensi.

Alternatif berbasis aktivitas: **E_periode = Σ_a (A_a × e_a)**, dengan A_a jumlah aktivitas kategori a pada periode dan e_a event per aktivitas. **S_audit_aliran = Σ_a (A_a × e_a × b_a) + metadata proses yang belum terhitung.** Input A_a/e_a/b_a belum diketahui dan dapat berbeda tiap jenis.

Kategori aktivitas mencakup perubahan/pengesahan, pembacaan sensitif, akses/unduh/ekspor, administrasi akun/hak/konfigurasi, impor/rekonsiliasi, penolakan/kegagalan, pengiriman ulang serta proses pemulihan. Definisikan kategori kejadian agar aktivitas/event sama tidak masuk beberapa penjumlahan. Model aktivitas **alternatif** dari proksi per Unit; jangan menjumlah keduanya untuk periode/event yang sama.

Retry pengiriman event ber-ID stabil bukan event bisnis baru; upaya kirim/metadata percobaan yang benar-benar disimpan dan beban CPU/I/O/jaringan tetap diperhitungkan tersendiri tanpa menyalin ulang isi event tak perlu. Event asli/target historis tidak diubah demi efisiensi.

**Stok audit operasional** = event yang masih wajib disimpan × ukuran representatif + metadata/indeks/overhead yang belum masuk. Retensi/penahanan dan laju masing-masing periode diperlukan; pertumbuhan audit tidak harus 10% seperti contoh Unit.

**Salinan terlindungi** mempunyai alokasi/volume/metadata integritas/retensi dan overhead tersendiri sesuai KB-12, dengan kontrol keamanan/administratif terpisah. Tidak berasumsi ukurannya tepat sama atau faktor salinan tertentu tanpa strategi/bukti. Kapasitas tidak cukup atau fasilitas tidak terpisah merupakan kesenjangan, bukan alasan mematikan audit atau menerima dua folder satu kendali.

## Staging impor dan ruang proses

Rumus konseptual puncak: **S_staging_puncak = Σ batch yang waktunya beririsan (S_berkas_asal + R_record × b_record + S_validasi + S_temporer + metadata yang belum masuk)**. Durasi simpan dan frekuensi memengaruhi banyak batch yang tertahan; bukan hanya ukuran satu berkas terbesar.

Input: jumlah batch bersamaan, record/batch, ukuran/format sumber, hasil/diagnostik validasi, file sementara, peninjauan/konflik yang tertunda, retensi sumber/record serta puncak lintas OPD. Semua selain contoh lain yang terlabel **BELUM DIKETAHUI**. W_tmp pada total hanya temporer di luar cakupan staging ini.

Staging KB-15 tetap privat dan bukan data resmi/statistik sebelum pengesahan. Jadwal saat jam kerja dapat berkompetisi dengan pencarian/pengesahan/audit/backup; tidak menetapkan kuota/durasi/frekuensi atau mengaktifkan impor sekarang. Program historis hanya fase lanjut KB-16.

## Backup, artefak dan ruang pemulihan

Modelkan dua strategi **alternatif untuk dibandingkan**, belum dipilih:
- **Full:** kebutuhan salinan penuh yang disimpan = Σ ukuran backup penuh pada titik sah yang wajib dipertahankan + metadata/artefak yang belum masuk.
- **Full + incremental:** Σ basis full tersimpan + Σ perubahan incremental yang diperlukan untuk titik pulih + metadata/rantai/artefak yang belum masuk.

Jangan menjumlah dua alternatif sebagai satu strategi terpilih. Jumlah titik/salinan, frekuensi, retensi/penahanan, perubahan per periode, kompresi/dedup jika terbukti, overhead enkripsi/kunci, lokasi/kontrol terpisah dan ruang restore terisolasi adalah input belum final KB-17. Incremental yang lebih kecil tidak dianggap pasti tersedia/cukup atau dapat direstore tanpa rantai basis yang valid.

Hitung backup database/dokumen/metadata/audit operasional/status pekerjaan/konfigurasi/artefak secara konsisten, serta salinan yang benar-benar disimpan di lingkungan terpisah. Jika backup juga mencakup salinan audit atau artefak yang sudah ada, pisahkan pemakaian fisik salinan backup dengan salinan sumber dan jangan mendata byte yang sama dua kali pada lokasi yang sama. Ruang pemulihan/validasi sementara yang belum masuk ditambahkan sebagai kebutuhan proses, bukan cadangan abadi.

Backup sistem berbeda dari salinan audit KB-12. Target RPO/RTO, jadwal uji, retensi/JRA, kunci/lokasi/pengelola belum disahkan; tidak menetapkan faktor backup atau target operasional numerik dari contoh kapasitas. Tidak menjalankan backup/restore sekarang.

## Pengguna, permintaan dan transaksi

Pisahkan parameter akun terdaftar, pengguna aktif harian, pengguna bersamaan, permintaan per pengguna, durasi/komposisi operasi ringan–berat, perubahan/pengesahan, unggah/unduh dokumen, ekspor/laporan dan pekerjaan background. Pelaku tetap tanpa akun KB-06. Akun contoh bukan jumlah OPD resmi atau personel yang ditetapkan.

Ilustrasi **ASUMSI**: pengguna bersamaan **50**, satu permintaan rata-rata tiap **15 detik**. **RPS = C / τ = 50 / 15 ≈ 3,33 permintaan/detik — PROYEKSI.** Pembulatan tampilan dua desimal, bukan batas throughput. Jeda permintaan bukan waktu respons dan permintaan web tidak otomatis satu transaksi bisnis/pengesahan/event audit.

Satu pengguna bersamaan tidak diasumsikan satu proses PHP tetap. Kebutuhan proses/koneksi/CPU/RAM bergantung laju kedatangan, lama proses, komposisi operasi, unggahan dan pekerjaan lain; data durasi/fasilitas aktual belum ada. RPS rata-rata bukan puncak atau bukti server mampu.

## Sembilan profil beban dan kompetisi sumber daya

| Profil rancangan, bukan hasil uji | Beban yang perlu dimodelkan | Batas |
| --- | --- | --- |
| Penggunaan normal | Komposisi permintaan baca/tulis/validasi sesuai tugas | Laju/ukuran/durasi nyata belum diukur |
| Puncak jam kerja | Login bersamaan, aktivitas lintas OPD dan kompetisi proses | Akun/aktif harian/bersamaan berbeda, pola belum diketahui |
| Puncak registrasi dan pengesahan | Master/relasi/field/validasi/bukti/konflik/audit transaksional | Verifikator awal berbeda dan satu pengesah field biasa tetap |
| Puncak pencarian dan laporan | Filter lintas OPD, relasi, dedup/kanonik, agregasi/ekspor yang diizinkan | Jangan menggandakan hasil, membuka NIK atau melewati izin demi cepat |
| Puncak unggahan dokumen | Ukuran rata-rata/maksimum, simultan, ruang temporer dan akses privat | Format/maksimum belum final, contoh rata-rata bukan batas unggah |
| Puncak staging/import batch | Batch lintas OPD bersamaan, parsing/validasi/pratinjau/keputusan | Lingkup KB-15 perlu izin, staging bukan resmi atau fitur baru otomatis |
| Puncak pemeriksaan duplikasi | Kandidat/riwayat/referensi/versi, terjadwal atau saat registrasi | KB-13 tidak mengaktifkan auto-merge historis berisiko |
| Replikasi audit dan backup beririsan | CPU/I/O/jaringan/ruang audit operasional, salinan, backup dan proses utama | Kontrol independen KB-12/strategi KB-17 tetap, jadwal belum dipilih |
| Pemulihan dan verifikasi pascagangguan | Ruang restore terisolasi, relasi/dokumen/audit, selisih transaksi/replay aman | Uji/restore berizin belum dilakukan, RPO/RTO tidak dikarang |

Masukkan login serentak, pencarian/ekspor lintas OPD, dokumen besar, impor saat jam kerja, pemeriksaan kandidat serta backup/replikasi beririsan. Rinci laju/durasi/jumlah/byte tiap operasi dan kondisi puncak sebelum memilih sumber daya. Target respons/throughput/tingkat gagal, periode pengamatan, lingkungan representatif dan izin uji masih perlu disahkan. Tidak menebak CPU/RAM/worker/koneksi dari jumlah akun atau rata-rata RPS.

## Checklist batas hosting — 19 rujukan tambahan KB-14

Matriks ini memperinci kebutuhan bukti kapasitas dan merujuk formulir KB-14, **bukan mengubah 55 butir/status aktualnya**. Pemetaan mengarahkan pengumpulan bukti; item luas tetap perlu rincian CPU/I/O/jaringan/kuota terpisah sesuai fasilitas nyata.

| Kebutuhan kapasitas | Rujukan formulir yang relevan | Bukti yang diperlukan | Kondisi aktual |
| --- | --- | --- | --- |
| PHP runtime dan kompatibilitas Laravel/Livewire | H14-05–H14-09, H14-15, H14-17 | Bukti versi/konteks web–CLI/dependensi target; tanpa mengganti teknologi diam-diam | BELUM DIKETAHUI |
| CPU | H14-39 | Alokasi/batas/kompetisi dan bukti terhadap profil beban, bukan paket komersial tebakan | BELUM DIKETAHUI |
| RAM | H14-39 | Kuota/per proses/total dan batas yang dapat dipastikan | BELUM DIKETAHUI |
| Kuota penyimpanan | H14-37 | Alokasi per lingkungan/komponen dan ruang cadangan yang dapat disahkan | BELUM DIKETAHUI |
| Inode | H14-38 | Batas file/inode dan pola dokumen/versi/log/build | BELUM DIKETAHUI |
| I/O disk | H14-37, H14-39–H14-40 | Bukti batas I/O/latensi/throughput yang relevan, belum hasil benchmark | BELUM DIKETAHUI |
| Bandwidth dan batas jaringan | H14-01, H14-03, H14-41, H14-44 | Kuota/transfer/pembatasan kanal termasuk dokumen, audit dan backup; fakta belum ada | BELUM DIKETAHUI |
| Batas proses bersamaan | H14-40 | Batas web/CLI/worker/cron dan durasi permintaan; pengguna bukan proses PHP tetap | BELUM DIKETAHUI |
| Batas koneksi database | H14-41 | Koneksi per akun/total/proses dan batas penyedia yang sah | BELUM DIKETAHUI |
| Ukuran database | H14-10–H14-11, H14-37, H14-41 | Kuota/pertumbuhan/tabel/indeks/riwayat/audit fisik tanpa hitung ganda | BELUM DIKETAHUI |
| Timeout permintaan | H14-40 | Batas web/CLI/worker/proxy yang benar-benar terbukti | BELUM DIKETAHUI |
| Batas unggahan | H14-09, H14-29, H14-40 | Batas PHP/web/aplikasi/temporer dan format sah, bukan rata-rata 1,5 MB sebagai maksimum | BELUM DIKETAHUI |
| Penjadwalan cron | H14-30, H14-35–H14-36 | Jadwal/metode/kuota/durasi/anti-tumpang tindih yang diizinkan | BELUM DIKETAHUI |
| Queue/background job | H14-31, H14-36, H14-40 | Metode eksekusi/keterlambatan/retry/kapasitas, tanpa mewajibkan daemon tertentu | BELUM DIKETAHUI |
| Penyimpanan dokumen privat | H14-20, H14-23, H14-25, H14-29 | Isolasi akses, versi/retensi/kapasitas dan unduh server | BELUM DIKETAHUI |
| Salinan audit dengan kontrol terpisah | H14-32–H14-33, H14-43–H14-47 | Kontrol independen, ukuran/keterlambatan/rekonsiliasi bukan dua folder satu kendali | BELUM DIKETAHUI |
| Penyimpanan backup terpisah | H14-48–H14-53 | Strategi/kapasitas/pemisahan risiko/kunci/restore berizin KB-17 | BELUM DIKETAHUI |
| Monitoring dan notifikasi | H14-47, H14-54 | Sumber/pemilik/eskalasi/ambang/notifikasi yang nanti sah | BELUM DIKETAHUI |
| Kemampuan peningkatan kapasitas | H14-01, H14-03, H14-37–H14-41, H14-54–H14-55 | Batas/proses/biaya/persetujuan perubahan; tanpa pengadaan/migrasi otomatis | BELUM DIKETAHUI |

Tidak menyamakan PDN/cPanel dengan paket hosting komersial atau mengarang spesifikasi. Pilihan Laravel/Livewire/MySQL bersyarat tetap; tidak menambah spesifikasi versi baru melalui model angka. Jika queue tidak didukung, catat kesenjangan KB-14 dan tinjau metode sah; jangan otomatis memilih Redis/Supervisor/daemon. Jika salinan audit tidak dapat dipisahkan, syarat KB-12 tidak terpenuhi, tanpa status lulus palsu.

## Pemicu peningkatan kapasitas — 12 indikator

Batas peringatan/tindakan **sengaja kosong**, belum ada angka final. Sumber di bawah rancangan pengukuran kelak, bukan bukti akses server. Kode peran merujuk [matriks usulan KB-17](matriks-kewenangan-mvp-kb09.md): PGU pengelola utama, FOP pemilik field, ADB admin database/infrastruktur, AAP admin aplikasi, GAT pengelola salinan audit, OBP operator backup, PKA fungsi PDP/kearsipan. Semuanya belum penetapan OPD/petugas.

| Indikator | Batas peringatan usulan | Batas tindakan usulan | Sumber pengukuran yang diperlukan | Calon penanggung jawab | Tindakan korektif yang ditinjau | Status persetujuan |
| --- | --- | --- | --- | --- | --- | --- |
| Pertumbuhan Unit Usaha |  |  | Definisi Unit unik/kanonik dan riwayat jumlah per periode, kelak | PGU/FOP, usulan | Tinjau proyeksi/cakupan/kuota; bukan membuat Unit baru dari cabang | BELUM DISETUJUI |
| Pertumbuhan produk/data sektoral |  |  | Jumlah produk/relasi/pengukuran/versi dan ukuran yang relevan, kelak | PGU/FOP, usulan | Tinjau volume/indeks/arsip sah tanpa menghapus riwayat wajib | BELUM DISETUJUI |
| Jumlah dokumen dan byte |  |  | Inventaris dokumen/versi/ukuran/retensi privat, kelak | ADB/PGU/PKA, usulan | Tinjau unggahan/retensi/kapasitas sesuai kewenangan | BELUM DISETUJUI |
| Pertumbuhan audit |  |  | Event unik, metadata proses, ukuran dan retensi kedua lapisan, kelak | GAT/PGU, usulan | Nilai kapasitas/keterlambatan; tidak mematikan audit kritis | BELUM DISETUJUI |
| Kuota disk/inode |  |  | Bukti pemakaian/batas penyedia yang diverifikasi, kelak | ADB, usulan | Tinjau ruang proses/cadangan/peningkatan sah, bukan hapus bukti sembarang | BELUM DISETUJUI |
| Beban CPU/RAM |  |  | Metrik berizin per proses/total dan durasi, kelak | ADB/PGU, usulan | Analisis kompetisi/profil; opsi kapasitas setelah persetujuan | BELUM DISETUJUI |
| Koneksi database |  |  | Penggunaan/puncak/batas koneksi terverifikasi, kelak | ADB, usulan | Tinjau proses/query/koneksi sesuai izin dan bukti | BELUM DISETUJUI |
| Waktu respons operasi penting |  |  | Pengukuran berizin per operasi/profil dan target sah, kelak | PGU/FOP/ADB, usulan | Tinjau penyebab/dampak; jangan mengurangi validasi/hak/audit | BELUM DISETUJUI |
| Panjang antrean/keterlambatan |  |  | Status/umur pekerjaan/niat kirim dan metrik berizin, kelak | AAP/ADB/GAT sesuai proses, usulan | Tinjau jadwal/batas/metode/retry/penerapan sekali | BELUM DISETUJUI |
| Durasi/kegagalan impor |  |  | Metadata batch/record/validasi/operasi dalam scope berizin, kelak | PGU/FOP/ADB, usulan | Tinjau ukuran/jadwal/staging/kompetisi, bukan promosi otomatis | BELUM DISETUJUI |
| Keterlambatan replikasi audit |  |  | Sumber/niat kirim/penerima/kelengkapan dan waktu, kelak | GAT/PGU, usulan | Retry/rekonsiliasi/eskalasi KB-12 tanpa membatalkan bisnis sah diam-diam | BELUM DISETUJUI |
| Durasi backup dan restore |  |  | Bukti uji berizin, komponen/titik/hasil/target KB-17, kelak | OBP/ADB/PGU, usulan | Tinjau strategi/ruang/risiko dan RPO/RTO sah, bukan menebak waktu | BELUM DISETUJUI |

Alur rancangan: deteksi/validasi bukti → nilai dampak/tren dan ketergantungan → eskalasi kepada pengelola sah → perbarui proyeksi/opsi/biaya/risiko → persetujuan perubahan → rencana penerapan/pemulihan → verifikasi/audit/evaluasi sesuai KB-17. Tidak mengubah kuota, menghapus audit, menambah akun atau membeli infrastruktur otomatis saat ambang terlampaui. Kontak/SLA/angka target belum dipilih.

## Opsi peningkatan tanpa pemilihan infrastruktur

Bila bukti menunjukkan kesenjangan, dokumentasikan opsi sesuai permintaan pengguna: pemisahan komponen/penyimpanan, peningkatan paket/kuota yang disetujui, infrastruktur aplikasi yang lebih sesuai, atau penempatan salinan audit/backup dengan kontrol terpisah. Semua **opsi untuk keputusan terpisah**, bukan rekomendasi vendor/produk terpilih, pengadaan, migrasi atau deployment yang sudah diizinkan.

Pemisahan teknis komponen tidak membentuk SSOT/registri master per OPD atau memaksa perubahan modular monolith menjadi aplikasi terpisah. Tinjau akses/keamanan/retensi, biaya, operasi, backup/pemulihan, RPO/RTO, ketergantungan dan bukti pengujian sebelum keputusan. Jika syarat kritis tidak dapat dipenuhi, jangan meluluskan hosting/kapasitas karena proyeksi “cukup ruang”.

## Risiko, dependensi dan keputusan terbuka

| Risiko | Ketergantungan atau rincian terbuka | Kendali dokumentasi/gerbang |
| --- | --- | --- |
| Asumsi disebut statistik resmi/hasil benchmark | Jumlah resmi Unit/Orang/Badan/OPD/pengguna belum terverifikasi | Lima kategori nilai, sumber/versi dan status hasil belum dapat dinilai |
| Kapasitas kabupaten dianggap semua modul/OPD aktif atau belanja server sekaligus | Cakupan tahap/anggaran/penetapan belum final | Enam cakupan dipisah; MVP KB-09 tetap, program KB-16 sesudahnya |
| Unit/Orang/Badan/cabang/produk terhitung salah | Definisi/rasio kegiatan/relasi/data sektoral riil belum diketahui | ID induk dan KB-01/KB-03/KB-09, matriks entitas dan jejak kanonik |
| Riwayat/versi/alias diabaikan demi kuota | Frekuensi pengukuran/revisi/retensi/JRA/merge-split belum rinci | KB-10/KB-11/KB-13, biaya histori dihitung tanpa menghapus sahnya jejak |
| Agregat + rincian, audit atau overhead dihitung dua kali | Cakupan ukuran fisik/logis belum terukur | Buku alokasi, alternatif model dan definisi komponen eksplisit |
| Aliran audit tahunan dianggap stok hari pertama | Laju/aktivitas/retensi belum diketahui | GB/tahun berbeda dari GB, stok dihitung dari periode simpan sah |
| Dokumen/temporer/staging/backup mendominasi di luar estimasi | Ukuran/format/maksimum/revisi/retensi/batch/strategi belum final | Komponen terpisah, nilai tidak diketahui bukan nol |
| Kuota cPanel dianggap kemampuan throughput/kontrol independen | Batas runtime/CPU/RAM/I/O/jaringan/proses/koneksi/peningkatan belum ada bukti | KB-14, 19 rujukan dan 55 item aktual tetap belum diketahui |
| Beban normal dianggap cukup untuk puncak | Pola pengguna/transaksi/operasi berat/kompetisi belum diukur | Profil beban dan uji berizin kelak, RPS contoh bukan benchmark |
| Penyusutan/kompresi/dedup atau audit dimatikan agar muat | Hak/risiko/JRA/salinan KB-11/KB-12/KB-17 | Jangan melonggarkan keamanan/integritas; efisiensi harus terbukti/sah |
| Target/trigger/RPO/RTO dianggap disahkan oleh simulasi | Target kinerja, ambang, strategi/lokasi backup dan RPO/RTO belum final | Sel target kosong dan persetujuan/pengukuran terpisah |
| Kekurangan infrastruktur dianggap izin otomatis perubahan/pengadaan | Biaya/penetapan pengelola/opsi/izin belum ada | Usulan opsi/gerbang keputusan dan pengendalian perubahan KB-17 |

Tetap BELUM FINAL: jumlah resmi Unit unik/Orang/Badan; rata-rata kegiatan/lokasi/produk; akun OPD menurut kewenangan/pola serentak; volume transaksi/event; ukuran/retensi dokumen; batch/staging; pertumbuhan faktual; kuota/batas PDN; kapasitas audit independen; lokasi/strategi backup; RPO/RTO/target kinerja/ambang; biaya/persetujuan infrastruktur; penetapan pengelola; hasil uji berizin; penggunaan data nyata.

Sumber faktual perlu definisi/cakupan/metode/verifikator, dan persetujuan akses tersendiri. Tidak mengakses data UMKM/sistem OPD untuk melengkapi angka pada tugas ini.

## Status keputusan dan gerbang pekerjaan berikutnya

**Model KB-01–KB-18 telah dipilih pada tingkat yang masing-masing dinyatakan dalam register; rincian organisasi/bukti/SOP/teknis/kapasitas/izin tetap belum final.** Ini bukan pernyataan semua keputusan turunan atau seluruh desain rinci telah disahkan.

Urutan kelak: tinjau model/asumsi → sahkan definisi/sumber/input/target untuk lingkup terkait → kumpulkan bukti KB-14 melalui tugas berizin → tinjau rancangan/biaya/operasi KB-17 → setelah izin implementasi/uji, ukur dengan data sintetis pada lingkungan yang sesuai → perbarui kapasitas/opsi berdasarkan bukti → persetujuan alokasi/perubahan/produksi secara spesifik. Tidak menetapkan tanggal, kuota, vendor atau target uji otomatis dari roadmap.

**Kapasitas final dan hosting: BELUM DAPAT DINILAI** sampai fakta, verifikasi fasilitas, target dan pengujian berizin tersedia. Perhitungan aritmetika dokumen hanya memeriksa hasil rumus yang ditulis, bukan load test/benchmark atau bukti kemampuan server.

Dokumentasi saja: tidak ada kode/skema/migrasi/seeder/dependensi, akses database/data pribadi/PDN/cPanel, skrip beban/pengukuran jaringan, konfigurasi/kuota/cron, backup/restore, deployment atau pengadaan. ZIP penyerahan hanya memuat dokumen yang berubah.

## Catatan sumber historis sesudah DT-003 — 6 November 2026

[Lampiran 11](11-audit-baseline-data-historis.md) mengutip laporan audit data awal: 42.730 baris DATA UKM dan 5.213 baris bernomor daftar NIB, berlabel **HASIL INSPEKSI FILE, BUKAN JUMLAH UMKM UNIK RESMI**. Lembar pembanding tidak dijumlahkan. Dua kelompok hitungan format daftar NIB masing-masing berjumlah 5.218; cakupan/penyebut perlu klarifikasi AH-01.

Angka tersebut adalah konteks volume sumber historis, **bukan pengganti jumlah induk awal, statistik Unit unik, hasil uji atau kuota PDN**. Tabel parameter/angka simulasi/rumus kapasitas terdahulu tetap ASUMSI/PROYEKSI, tidak diubah menjadi fakta dari laporan. DT-026 tentang volume faktual dan bukti kapasitas belum ditutup.

DT-003 B A3+B1+C2 tidak mengizinkan impor atau mengaktifkan staging. Jika jalur historis kelak diizinkan, penilaian kebutuhan sumber/staging/versi/retensi/beban dan pengesahan memerlukan lingkup/otorisasi DT-019/032 serta bukti tersendiri. Tidak menurunkan kebutuhan per Unit dari jumlah baris atau menjumlah lembar menjadi jumlah UMKM; hosting/kapasitas akhir BELUM DAPAT DINILAI.
