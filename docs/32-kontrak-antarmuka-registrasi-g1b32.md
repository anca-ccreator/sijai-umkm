# Kontrak antarmuka registrasi lokal G1-B3.2

Tanggal **7 November 2026**. Dasar: persetujuan terbatas pemilik produk G1-B3.2 pada chat proyek. Pemilik menerima baseline G1-A/B1/B2/B3.1 dengan catatan pengujian MySQL dan HTTP B3.1 belum diverifikasi ulang secara independen. Kontrak ini menjalankan izin tersebut, bukan izin tahap berikutnya.

## Batas hasil

Antarmuka Laravel/Livewire memakai layanan domain G1-B2 dan autentikasi G1-B3.1 yang sudah ada. Tidak mengganti fondasi. Draf A3 lengkap → tinjau prasyarat → pengajuan → pemeriksaan → pengembalian → revisi → penilaian ulang → pengajuan ulang hanya menggunakan data dan mandat sintetis. Pengajuan tidak mengesahkan induk, NIB, field maupun sektor.

KB-01–KB-18 dan DT-003 A3+B1+C2, DT-005 C+F+H2, DT-007 C, DT-009 C+B2+V2+K2 serta DT-011 C+D1+M1+E1 tetap. E1 masih berbenturan dengan KB-11; tidak ada unduh/ekspor bisnis. Pengesahan C2/field operasional, koreksi penuh K1–K4, impor, integrasi, salinan audit eksternal, data nyata dan deployment tidak dibuka.

## Pembagian tanggung jawab

| Bagian | Peran pada tahap ini |
| --- | --- |
| Identitas dan sesi | Auth Laravel/SessionActor tetap menjadi sumber aktor; keaktifan, konfirmasi kata sandi dan masa sesi diperiksa ulang |
| RegistryWorkspace | Menyusun daftar/proyeksi yang boleh dilihat, konteks pembuatan dari katalog server dan pilihan referensi pihak yang diizinkan |
| RegistryFormInput | Validasi bentuk dan isi per field; memisahkan peran hubungan usaha dari peran akses aplikasi |
| RegistryDraftForm | Komponen Livewire formulir A3 berulang, versi/request terkunci, pemeriksaan ulang sebelum render dan tindakan |
| SessionRegistryGateway | Mengikat semua panggilan web ke sesi server; tidak menerima aktor/mandat/tujuan/waktu dari browser |
| RegistrationService B2 | Tetap melaksanakan create/edit/assess/submit/startReview/return/reviewClaim/reviewDuplicates; revisi, versi, transaksi, audit dan outbox |
| Audit | Catatan SQL dan antrean salinan lokal (outbox) wajib berhasil bersama transaksi terkait; salinan independen tetap rancangan dokumen 28 |

Tidak ada migrasi atau dependensi baru. Sembilan migrasi, MySQL Community 8.4.13 lokal khusus dev/test dan pembatasan akun database sebelumnya dipertahankan. Tidak memakai SQLite/MariaDB atau database aplikasi lain.

## Data dan kewenangan

Sebelum menyimpan, wajib ada penanda Unit, pihak berjenis Orang/Badan dengan peran hubungan, lokasi operasional yang dapat dibedakan, kegiatan dan sumber. Identitas internal baru dibuat server. NIB boleh kosong. Domisili pihak tidak disalin menjadi lokasi usaha. Beberapa pihak dapat terkait satu Unit; pihak yang sudah tercatat dapat dipakai beberapa Unit tanpa menimpa identitas bersama. Cabang yang terkait induk dicatat sebagai lokasi, bukan otomatis Unit baru.

Konteks pembuatan adalah token terbatas sesi/aktor dengan masa teknis 900 detik, menunjuk katalog, wilayah, sektor dan tujuan yang disiapkan server. Browser memilih token yang sudah ditawarkan, bukan menetapkan OPD/mandat/wilayah/tujuan. Katalog belum sesuai tidak memberi izin. Parameter ini hanya konfigurasi uji lokal, bukan SOP resmi.

D1 memakai katalog organisasi sintetis yang sudah tersedia. M1 memeriksa masing-masing sumber izin beserta batas asal, tidak menyilangkan field/wilayah/sektor/tujuan antarizin. Admin teknis tidak mendapat hak bisnis baru. Halaman tinjau dan formulir revisi membutuhkan izin baca semua kelompoknya; revisi membutuhkan izin edit seluruh kelompok data yang dikirim formulir. Izin sebagian tidak diperluas otomatis. Profil baca-saja B3.1 tetap dapat memproyeksikan sebagian field.

Nama, versi, pilihan relasi, klaim dan metadata bukti dari browser tetap diperiksa di server. Actor, role akses, organisasi, mandat, status resmi dan waktu keputusan tidak menjadi isian bebas. Pemalsuan snapshot/properti terkunci ditolak dengan respons umum dan audit; input NIK/NPWP/kredensial/isi dokumen tidak didukung dan tidak dipantulkan dalam pesan kesalahan.

## Prasyarat B1 dan kandidat

Katalog dan metadata bukti hanya sintetis. Pemeriksa yang mempunyai izin melihat metadata bukti dan menilai klaim dapat menilai metadata yang **sudah disiapkan server untuk objek/klaim/tujuan yang sesuai**. Tidak ada unggah, isi dokumen, unduh atau pembuatan bukti dari formulir. Draf baru tanpa bukti tetap tertahan. Demo CLI menyiapkan satu contoh draf beserta metadata belum dinilai, bukan otomatis bukti memadai. Revisi memerlukan penilaian atas versi baru.

Kandidat kemiripan nama adalah petunjuk pemeriksaan, bukan duplikasi pasti. Tidak ada auto-merge. Kandidat yang tidak dapat dibaca secara cukup menghasilkan belum dapat dinilai, tanpa membocorkan identitas/fieldnya atau mengizinkan pengajuan dari ketidaktahuan tersebut. Tidak adanya kandidat nama bukan bukti tidak ada seluruh jenis duplikasi.

## Keamanan dan transaksi

Rute bisnis memakai local-only, sesi aktif, autentikasi, konfirmasi baru, CSRF dan penolakan input kewenangan. Middleware yang relevan juga diperiksa pada permintaan Livewire berikutnya. CSRF adalah pemeriksaan token agar situs lain tidak dapat mengirim tindakan memakai sesi petugas.

Livewire menggunakan `csp_safe=true`, sesuai [panduan CSP Livewire 4](https://livewire.laravel.com/docs/4.x/csp), tanpa `unsafe-eval`. Hanya halaman formulir interaktif memakai skrip dengan nonce acak per respons; halaman login/profil/tinjau tetap menolak skrip. Nonce adalah penanda sekali respons untuk skrip yang diizinkan. [Persistent middleware Livewire](https://livewire.laravel.com/docs/4.x/security) ditambah pemeriksaan gateway/hydrate mencegah izin lama dipakai terus oleh komponen terbuka.

Proyeksi baca lengkap disusun dalam transaksi dengan pemeriksaan kewenangan terkunci. Pembacaan satu registrasi mengikuti urutan penguncian registrasi sebelum Unit agar tidak saling menunggu akibat peningkatan kunci baca. Layanan domain tetap memeriksa izin dan versi ketika mutasi benar-benar dilakukan. Versi optimistis menolak simpan berdasarkan versi lama; ID permintaan mencegah tindakan ulang yang sama menghasilkan perubahan ganda. Kegagalan audit/outbox wajib membatalkan transaksi atau menahan hasil. Penolakan yang wajib diaudit tidak dinyatakan berhasil bila audit gagal.

## Rute lokal

| Metode/path | Fungsi |
| --- | --- |
| GET /registri | Daftar yang berizin dan konteks pembuatan |
| GET /registri/baru/{context} | Formulir A3 baru |
| GET /registri/{registration}/edit | Revisi draf/perbaikan |
| GET /registri/{registration}/tinjau | Kelengkapan, kandidat, aksi yang diizinkan dan riwayat |
| POST /registri/{registration}/ajukan | Pengajuan/pengajuan ulang |
| POST /registri/{registration}/periksa | Mulai pemeriksaan |
| POST /registri/{registration}/kembalikan | Pengembalian beralasan sintetis |
| POST /registri/{registration}/kandidat | Catat penilaian kandidat; tidak menggabungkan Unit |
| POST /registri/{registration}/bukti | Penilaian klaim metadata sintetis yang sudah diizinkan |

## Keterbatasan yang harus terlihat

Daftar lokal mengambil paling banyak 100 katalog/registrasi awal, pilihan referensi dari 200 relasi awal dan 50 isian per kelompok. Ini batas teknis prototipe lokal, bukan janji pencarian lengkap/kapasitas kabupaten. Formulir penuh belum editor per-field bagi petugas berizin sebagian. Bukti baru tidak dapat diunggah melalui UI. Katalog/masa/akun fiktif bukan penetapan OPD atau standar bukti resmi.

Nama OPD/petugas nyata, hak operasional, standar bukti/SOP, pilot, dasar hukum/JRA, hosting PDN/cPanel serta kesiapan produksi tetap memerlukan penetapan/bukti tersendiri. Hasil tes Codex bukan verifikasi independen, uji penetrasi atau bukti kapasitas. Lihat [panduan](33-panduan-alur-registrasi-g1b32.md), [hasil](34-laporan-hasil-g1b32.md) dan [manifest](35-manifest-perubahan-g1b32.md).
