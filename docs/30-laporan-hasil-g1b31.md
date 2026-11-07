# Laporan hasil autentikasi, otorisasi dan audit lokal G1-B3.1

Disusun **6 November 2026**, difinalisasi **7 November 2026**. **G1-B3.1 selesai pada batas lokal/sintetis:** login/logout/konfirmasi sesi, aktor server, profil baca-saja, penguatan audit dan rancangan salinan independen. Bukan penerimaan seluruh MVP atau kesiapan produksi. **G1-B3.2, G5 dan G7 belum diizinkan.**

Pemilik menerima G1-B2 dengan catatan tes MySQL belum diverifikasi independen. Regresi dan pemeriksaan HTTP pada laporan ini dilakukan kembali oleh Codex; **bukan verifikasi independen pihak lain**. Catatan pemilik tetap terbuka.

## Kondisi awal dan perubahan

Seluruh **135 sumber** cocok dengan arsip versi terdahulu yang berlaku; 35 entri ZIP G1-B2 cocok sumber dan CRC lulus. Tidak ada perubahan tidak terdokumentasi yang ditemukan sebelum pekerjaan. Tidak ada repository Git yang diinisialisasi, commit atau push.

Sebelum kode diubah, **91 tes MySQL/425 assertions** G1-B1/B2 dan **10 tes tanpa DB/56 assertions** lulus. Laravel 13.40.0, Livewire 4.4.8, PHP 8.3.31 dan MySQL 8.4.13 yang sudah ada dipertahankan. Tidak memasang paket, mengganti framework atau mengubah lock dependensi.

Perubahan utama:

- Login Laravel untuk akun aktif/sintetis, logout POST, konfirmasi ulang, pembatasan percobaan, rotasi ID/token dan pengendalian idle/batas sesi. Provider memeriksa batas database sebelum query akun; remember-me/akun publik/reset email tidak diaktifkan.
- SessionActor dan SessionRegistryGateway mengikat layanan ke sesi server. Input aktor/OPD/mandat/peran/tujuan/waktu dari browser ditolak, termasuk input bertingkat dan header terkait. Tujuan/katalog berasal dari objek tersimpan, waktu dari server.
- Ruang kerja dan profil baca-saja berizin. Tidak ada formulir mutasi/pengajuan/pengesahan atau endpoint ekspor. Field yang ditolak tidak dikirim sebagai nilai tersembunyi; field sensitif perlu izin khusus yang cocok. Katalog tidak sah/berulang tidak memperluas hak.
- Audit login/penolakan/konfirmasi/logout/sesi/forgery/pembacaan dan jejak domain ditambah. Audit/outbox gagal menahan hasil, transaksi terkait rollback. Rehash kata sandi, event rehash dan audit login berada dalam transaksi SQL yang sama.
- Perintah demo CLI interaktif untuk satu akun pembaca/profil sintetis, tanpa kata sandi bawaan atau pencetakan rahasia. Pembangun dinonaktifkan; hak demo baca-saja selama masa uji 24 jam, bukan penetapan OPD nyata.
- [Rancangan salinan audit independen](28-rancangan-salinan-audit-independen.md) disusun tanpa memasang worker/sink/koneksi baru.

## Daftar migrasi dan batas database

**Tidak ada migrasi baru atau perubahan sembilan migrasi B1/B2.** Tidak ada tabel sesi/token/password-reset baru, pemasangan database atau privilege tambahan. Sesi memakai file terenkripsi/JSON. Instance tetap 127.0.0.1:33070 dan hanya sijai_umkm_g1b1_dev/test dengan runtime/migrator terpisah dan pemeriksaan UUID. Bukan MariaDB/SQLite.

Fresh/rollback/rebuild hanya pada test khusus. Dev tidak di-reset. Demo pada pengujian dibuat sementara di test lalu dibersihkan; akun/izin/profil demo tidak ditinggalkan pada dev/test saat penyerahan. Command demo tidak berjalan otomatis; pengguna dapat menjalankannya sesuai [panduan 29](29-operasi-autentikasi-lokal-g1b31.md).

Pemeriksaan akhir dev/test masing-masing: 39 tabel termasuk migrations, sembilan catatan migrasi, 29 trigger dan **nol baris bisnis/akun/dokumen/audit**. MySQL khusus tetap berjalan hanya di 127.0.0.1:33070; port server HTTP sementara 8311 sudah ditutup. local_infile=0, secure_file_priv=NULL dan event_scheduler=OFF tetap.

## Bukti uji akhir

Assertions berarti pemeriksaan hasil di dalam tes, bukan jumlah fitur atau seluruh RB/T yang selesai.

| Pemeriksaan | Hasil |
| --- | --- |
| Regresi sebelum perubahan | 91 MySQL/425 assertions + 10 tanpa DB/56 assertions, lulus |
| composer test:mysql akhir | **131 tes / 783 assertions, lulus**: 91 kasus lama dan 40 kasus autentikasi/audit baru |
| composer test akhir | **10 tes / 56 assertions, lulus**, koneksi DB tetap dilarang pada suite ini |
| Total akhir | **141 tes / 839 pemeriksaan hasil**; bukan seluruh KB/DT/MVP atau G3/produksi lulus |
| HTTP nyata loopback | Login GET 200/POST 302, ruang kerja/profil 200, CSRF tanpa token 419, input aktor palsu 422, ekspor 404, logout 302 dan akses profil setelah logout 302 ke login |
| Cookie/respons HTTP | Cookie sesi HttpOnly/SameSite Strict; halaman profil no-store; cookie/token/kata sandi tidak dicetak |
| Transaksi gagal | Gagal audit sebelum/sesudah event/outbox, kegagalan FK outbox SQL sungguhan, audit baca/penolakan dan rollback mutasi sesi; rehash ikut rollback jika audit login gagal |
| Regresi fondasi | A3/M:N/lokasi/kegiatan/pengajuan/perbaikan, duplikasi, irisan pemilik, dua proses konkurensi dan sembilan migrasi tetap lulus |
| npm run build | Berhasil, Vite 7.3.7; CSS sekitar 19,98 kB setelah halaman lokal ditambahkan |
| composer validate --strict | Lulus, tidak ada perubahan versi/lock atau instalasi paket |
| Sintaks PHP | 81 file sumber termasuk public/index.php diperiksa, tanpa kesalahan sintaks |

Uji HTTP menjalankan server PHP sementara hanya pada 127.0.0.1:8311 dengan database test khusus. Pemeriksaan cookie memakai atribut tanpa membocorkan nilainya; pembacaan awal alat uji terhadap kapitalisasi nama atribut diperbaiki, kemudian seluruh alur HTTP diuji ulang dan lulus. Server telah dihentikan, test dibangun ulang, lalu suite akhir dijalankan. Tidak ada server deployment atau layanan audit baru yang ditinggalkan.

Tes CSRF baru secara eksplisit menonaktifkan pengecualian CSRF yang biasanya diberikan Laravel pada tes unit; token salah/hilang benar-benar melewati pemeriksaan framework. Penolakan 419 dipetakan ke audit setelah Laravel membungkus exception token menjadi HTTP exception. Tidak melonggarkan CSRF aplikasi untuk membuat tes lulus.

Tidak melakukan QA visual browser, uji beban, audit penetrasi atau verifikasi hosting/backup/restore produksi. Pengujian HTTP/HTML dan build bukan bukti kesiapan produksi. Formatter tambahan tidak dipasang.

Pada kelanjutan sesi tanggal 7 November, instance MySQL lokal ditemukan berhenti sehingga percobaan tes menolak koneksi. Skrip start khusus menyalakan kembali instance yang sama pada loopback; suite kemudian diulang dengan hasil akhir di atas. Tidak melewati pemeriksaan UUID/akun/schema atau mengganti database agar tes berjalan.

## Pemetaan 10 kriteria persetujuan

Tes baru ada pada LocalAccessTest; regresi GovernanceTest/RegistrationTest/RegistrationConcurrencyTest/MigrationAndConcurrencyTest/FoundationTest dipertahankan.

| No. | Kriteria | Bukti |
| --- | --- | --- |
| 1 | Login/logout sintetis | login_regenerates_session_and_csrf_then_logout_invalidates_both dan uji HTTP nyata; sesi/token berubah dan tamu setelah logout |
| 2 | Tamu ditolak | guest_cannot_reach_profile_or_session_gateway; redirect login atau JSON 401 tanpa profil |
| 3 | Pemalsuan aktor/mandat ditolak | Tujuh dataset browser_authority_inputs_are_rejected_recursively_without_changing_actor, header/login hint dan mutation gateway; aktor audit tetap dari sesi |
| 4 | Mandat kedaluwarsa/dicabut | Dua dataset logged_in_session_cannot_use_expired_or_revoked_mandate; revokasi akun/keanggotaan dan perubahan password berlaku pada permintaan berikutnya |
| 5 | D1/M1 tidak menyilang field/cakupan | d1_organization_catalog_can_allow_internal_read_but_not_mutation; m1_does_not_cross_field_and_region_boundaries; sensitivitas dan katalog alias diuji |
| 6 | Admin bukan pengesah otomatis | technical_admin_has_no_implicit_business_or_approval_permission; creator_cannot_approve_own_initial_profile_with_combined_roles; rute pengesahan tetap tidak tersedia |
| 7 | Perubahan/penolakan berjejak | session_gateway_uses_session_actor_for_audited_mutation, PROFILE_ACCESS_CHECK/VIEW_PROFILE, login/forgery/CSRF/sesi/konfirmasi; pembacaan tidak menciptakan versi data palsu |
| 8 | Audit gagal rollback | failed_session_bound_mutation_audit_rolls_back_data_history_and_outbox; actual_outbox_foreign_key_failure_rolls_back_session_bound_mutation; login/rehash/profil/bootstrap juga diuji |
| 9 | Regresi B1/B2 tetap lulus | Seluruh 91 tes lama tetap masuk suite akhir; kode/test sumber B1/B2 tidak dihapus untuk menutupi kegagalan |
| 10 | Tanpa ekspor/data nyata/produksi | Ketiadaan rute ekspor/C2/mutasi bisnis, batas host/lingkungan/MySQL B1, fixture/demo fiktif, pemeriksaan paket dan kondisi akhir |

Ada pengecualian keamanan yang dijelaskan eksplisit: bila audit logout tidak tersedia, **sesi tetap dimusnahkan**, respons 503, bukan menghidupkan kembali sesi demi rollback. Itu penghentian akses file/sesi; mutasi bisnis SQL tetap wajib rollback. Tidak menganggap audit yang gagal sebagai event berhasil.

## Konsistensi dan hal terbuka

Dokumen 06/KB-01–KB-18 dan lima DT pilihan tidak diubah. Satu SSOT, NIB opsional, hubungan M:N, cabang bukan Unit baru otomatis, tanpa akun masyarakat, satu pemilik aktif, pemisahan pembuat/pengesah awal dan satu pengesah field biasa tetap. Auth tidak memberi pengesahan, hak OPD atau akses bukti massal otomatis.

Status izin DT-028/G1 pada baseline diselaraskan hanya untuk G1-B3.1. G0/global baseline, 35 DT lain dan tujuh gerbang lain tidak dinyatakan lulus dari tes lokal. Pernyataan “belum ada autentikasi/B3 belum diizinkan” pada snapshot lama adalah riwayat; B3.2 tetap belum diizinkan.

**Konflik kebijakan yang tetap terbuka:** E1 otomatis baca→unduh/ekspor bertentangan dengan pemisahan tindakan KB-11. Kedua sumber dipertahankan; tidak mengubah E1 menjadi E2. Tidak ditemukan kebutuhan memilih model bisnis pengganti dari pekerjaan ini.

Masih memerlukan keputusan/bukti/pekerjaan berizin:

- Verifikasi MySQL independen, peninjauan keamanan dan penerimaan hasil oleh pemilik.
- OPD/petugas/mandat/field/cakupan nyata, SOP/bukti/risiko/retensi/JRA/PDP, wilayah pilot dan kebijakan sesi operasional. Seluruh konfigurasi demo tetap fiktif; angka lokal 15 menit/8 jam/10 menit/5 per menit/24 jam bukan penetapan organisasi.
- Pengelolaan akun/mandat operasional, pemulihan kredensial, pembuktian cakupan hukum dan otorisasi granular seluruh atribut lintas modul. Katalog kelompok Unit B2 belum seluruh kamus resmi.
- Autentikasi ini lokal dengan akun individual; bukan SSO/OSS/Dukcapil/MFA produksi atau sertifikasi hukum/keamanan.
- Salinan independen KB-12: rancangan ada, worker/retry/sink/receipt/rekonsiliasi belum berjalan; outbox tetap pending lokal. Tidak menganggapnya backup atau salinan audit yang selesai.
- C2, field operasional, K1–K4 penuh, pangan/agregasi lanjutan, ekspor E1 dan produksi tidak diaktifkan. Hosting/kapasitas/operasi tetap belum dapat dinilai.

## Rekomendasi G1-B3.2

Usulan untuk ditinjau pemilik: antarmuka **pencatatan/revisi draf A3 dan pengajuan sintetis** menggunakan gateway sesi yang sama, dengan pemilihan objek/konteks server, validasi per field, pemeriksaan kandidat dan versi, bukti uji serta audit. Prioritaskan peninjauan independen regresi MySQL dan kontrak katalog/tujuan sebelum membuka jalur mutasi tersebut. Standar bukti uji harus tetap ditandai sintetis, bukan dokumen wajib resmi.

Kontrak B3.2 perlu menetapkan tepat rute/tindakan/field yang akan dibuka, prasyarat, tes negatif/konkurensi/audit serta hasil penyerahan. Usulan ini **tidak mencakup C2/pengesahan field, koreksi penuh, ekspor, data nyata, deployment atau koneksi salinan audit eksternal**. Implementasi salinan audit memerlukan izin tersendiri yang merinci komponen/batasnya. Tidak menjalankan B3.2 dari rekomendasi ini.

## Penyerahan

[Manifest 31](31-manifest-perubahan-g1b31.md) memuat daftar lengkap file baru/berubah dan SHA-256. ZIP hanya perubahan sumber/dokumen dari baseline G1-B2; tidak membawa .env/key/kredensial, dependensi, build/runtime/log, data/binari/dump MySQL, ZIP lama atau metadata Git. Tidak ada penghapusan/pemindahan sumber, perubahan schema atau koneksi eksternal baru.

Tidak menggunakan dataset historis/NIK/alamat/telepon/identitas nyata, tidak mengakses server PDN/cPanel/OSS/Dukcapil/produksi, tidak mengaktifkan unduh/ekspor/pengesahan bisnis atau melakukan deployment.
