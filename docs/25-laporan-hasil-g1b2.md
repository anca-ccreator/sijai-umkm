# Laporan hasil Registri Induk dan registrasi A3 G1-B2

Tanggal **6 November 2026**. **G1-B2 selesai pada batas layanan domain dan tes lokal/sintetis yang diizinkan.** Belum ada antarmuka bisnis, autentikasi petugas, pengesahan induk/field operasional atau aplikasi produksi. G1-B3, G5 dan G7 tetap memerlukan mandat terpisah.

## Hasil utama

Baseline G1-A/B1 dipertahankan. Sebelum perubahan, 60 entri ZIP B1 cocok dengan sumber, CRC arsip lulus dan tidak ada perubahan pada 119 sumber yang diinventarisasi. Regresi awal: **43 tes MySQL/168 assertions** dan **10 tes tanpa DB/56 assertions** lulus. Folder tidak mempunyai metadata Git; tidak menginisialisasi Git, commit atau push.

Layanan registrasi kini dapat menyimpan A3 lengkap, pihak Orang/Badan terpisah, pemilik bersama, satu pihak beberapa Unit, beberapa lokasi/cabang/kegiatan, sumber, aktor sah serta waktu server. NIB boleh kosong, tetap referensi belum terverifikasi dan bukan primary key. Pengajuan/pemeriksaan/pengembalian/revisi/pengajuan ulang menjaga riwayat. READY dihitung; pengajuan tidak mengesahkan induk/field/sektor.

**Autentikasi sesi belum tersedia.** Sesuai mandat, tidak membuat rute, API, formulir atau komponen Livewire bisnis; pengujian memanggil layanan domain dari server tepercaya. Halaman dan komponen sintetis G1-A tetap berfungsi. Tidak menerima aktor/hak/waktu/status dari payload data. Ini batas yang disengaja dalam izin, bukan klaim bahwa antarmuka registrasi sudah tersedia.

## Migrasi dan keamanan lokal

MySQL Community **8.4.13**, instance B1 pada 127.0.0.1:33070 dan dua database khusus tetap dipakai. Tidak memasang database/dependensi baru atau mengganti MariaDB/SQLite. Tiga migrasi baru (007–009) menambah 16 tabel; total **sembilan migrasi dan 39 tabel termasuk migrations** pada dev/test. [Daftar entitas, migrasi dan hak](24-model-dan-alur-registrasi-g1b2.md) menjelaskan rinciannya.

Database dev hanya menerima migrasi maju; fresh/rollback/rebuild dilakukan pada test khusus. Runtime tetap tidak mendapat DDL/GRANT/DELETE. Hak tambahan hanya per tabel baru pada database masing-masing. Katalog/revisi/riwayat/penilaian dilindungi dari perubahan/penghapusan, termasuk 22 trigger baru. Batas host/akun/database/UUID/lingkungan B1 tetap, tanpa menyentuh aplikasi lain.

Pemeriksaan akhir menemukan dev/test masing-masing sembilan catatan migrasi, 39 tabel dan 29 trigger; **nol baris bisnis/pengguna/dokumen/audit** tersisa. MySQL khusus tetap berjalan hanya pada loopback. local_infile=0, secure_file_priv=NULL dan event_scheduler=OFF tetap. Tidak menjalankan preview HTTP baru atau server aplikasi produksi.

Seluruh mutasi registrasi memeriksa akun/keanggotaan/peran/field/cakupan/tujuan/sensitivitas/masa mandat, dan menyimpan jejak sumber izin serta definisi yang dipakai. Membaca atau membuat draf bukan izin mengajukan/memeriksa. Penilaian bukti memeriksa field klaim dari katalog server. Penggunaan pihak lama memerlukan hak baca; draf Unit tidak dapat menimpa identitas pihak bersama. Tidak menetapkan pemilik field, OPD, petugas atau hak nyata.

Transaksi menyatukan perubahan data/versi/relasi, riwayat, command idempotensi, jejak mandat, audit dan outbox. Penolakan otorisasi dicatat terpisah setelah rollback bisnis. Nomor versi menolak permintaan usang; penguncian permintaan/nama/baris dan retry deadlock mencegah transisi ganda. Jejak tidak memuat nilai bisnis atau dokumen mentah. Outbox masih pending lokal; salinan independen KB-12/retry/operasi belum selesai dan tidak diklaim lulus.

## Hasil pengujian aktual

| Pemeriksaan | Hasil |
| --- | --- |
| Regresi sebelum perubahan | 43 tes MySQL/168 assertions; 10 tes tanpa DB/56 assertions, lulus |
| composer test:mysql setelah perubahan | **91 tes / 425 assertions, lulus**, sekitar 108 detik; mencakup 43 regresi B1, 46 kasus registrasi dan dua kasus konkurensi registrasi |
| composer test | **10 tes / 56 assertions, lulus**; koneksi DB dilarang pada suite ini |
| Total akhir | **101 tes / 481 pemeriksaan hasil**; bukan seluruh RB/T KB/DT atau penerimaan seluruh MVP |
| Konkurensi nyata B2 | Dua proses PHP/MySQL terpisah: request berbeda satu submitted/satu rejected; request sama dua balasan submitted dengan satu transisi/event/outbox |
| Regresi konkurensi B1 | Dua proses penetapan pemilik beririsan tetap satu created/satu rejected |
| Audit wajib gagal | Gagal sebelum audit, setelah event/outbox dan kegagalan INSERT audit MySQL sungguhan menyebabkan rollback; tidak ada hasil berhasil sebagian |
| Migrasi | Maju dev/test berhasil; ulang no-op; rollback sembilan langkah/fresh/rebuild test lulus; larangan destruktif dev tetap lulus |
| Frontend | npm run build berhasil; Vite 7.3.7, CSS 18,04 kB; template/Livewire/lock tidak diubah |
| Sintaks PHP | 63 file sumber diperiksa, tidak ada kesalahan sintaks |
| composer validate --strict | Lulus; tidak memasang paket atau mengubah dependensi |
| Formatter tambahan | Laravel Pint tidak tersedia pada dependensi lokal; tidak dipasang dan tidak diklaim lulus. Sintaks dan tes di atas tetap lulus |

Tidak menjalankan pemeriksaan visual browser baru atau uji beban. Uji HTTP/Livewire ada dalam suite fondasi, tanpa rute bisnis. Hasil ini bukan audit penetrasi, bukti hosting PDN/cPanel atau keamanan produksi. Data sintetis dibersihkan oleh rollback/fresh test; tidak ada seeder bisnis yang dijalankan.

## Pemetaan 20 kriteria persetujuan

Nama tes merujuk RegistrationTest, RegistrationConcurrencyTest, MigrationAndConcurrencyTest, GovernanceTest dan FoundationTest pada sumber paket.

| No. | Kriteria | Bukti/hasil |
| --- | --- | --- |
| 1 | A3 lengkap tersimpan | complete_a3_uses_server_identity_time_internal_ids_and_optional_nib; record terkait/aktor/waktu/audit diperiksa |
| 2 | Tanpa pihak ditolak | incomplete_a3_never_persists_as_draft, dataset parties; tidak ada draf parsial |
| 3 | Tanpa lokasi ditolak | Dataset locations dan owner_domicile_does_not_fill_missing_business_location_and_branch_is_same_unit |
| 4 | Tanpa kegiatan ditolak | Dataset activities |
| 5 | Tanpa sumber ditolak | Dataset source |
| 6 | Pembuat tidak sah ditolak | unknown_or_inactive_creator_is_rejected_and_denial_audited; pemalsuan payload juga ditolak |
| 7 | Beberapa pemilik | multiple_owners_person_and_legal_entity_remain_distinct |
| 8 | Pihak beberapa usaha | one_party_can_belong_to_multiple_units_without_overwriting_identity |
| 9 | NIB kosong boleh | Tes A3 dan pengajuan lengkap memakai NIB null; tanpa syarat nomor eksternal |
| 10 | Nama sama bukan kepastian duplikat | same_normalized_name_only_creates_candidates_and_authorized_distinct_review_allows_submission; dua Unit dipertahankan |
| 11 | Pengajuan bukan pengesahan | ready_is_computed_submission_never_approves_initial_profile_fields_or_sector |
| 12 | Pengajuan kurang lengkap tertahan | submission_needs_reviewed_claims_nib_metadata_is_not_b1 dan unknown_submission_standard_or_empty_claim_list_does_not_pass |
| 13 | Pengembalian berjejak | correction_and_resubmission_preserve_data_relationships_review_and_state_history |
| 14 | Tanpa mandat tidak mengubah | unmandated_user_and_wrong_field_cannot_change_or_reuse_party_reference; izin mengajukan/memeriksa diuji tersendiri |
| 15 | Di luar cakupan ditolak | change_requires_active_field_scope_purpose_and_time_mandate, delapan dataset; regresi M1/D1 tetap |
| 16 | Audit gagal rollback | critical_audit_failure_rolls_back_creation_and_all_children; actual_sql_audit_failure_rolls_back_submission_and_history; audit_and_outbox_insertion_then_failure_rolls_back_everything |
| 17 | Serentak tidak menggandakan | Dua dataset RegistrationConcurrencyTest, proses PHP independen; satu riwayat/audit pengajuan |
| 18 | Migrasi ulang/rollback aman | migration test sembilan migrasi dan guard database dev/produksi |
| 19 | Regresi B1 lulus | Seluruh 43 tes awal tetap masuk suite akhir; hanya jumlah migrasi/step pada test diperbarui sesuai tambahan domain |
| 20 | Data sintetis, tanpa ekspor/produksi | Batas koneksi/lingkungan dan penolakan E1 tetap diuji; rute bisnis/unduh/unggah/storage tetap tertutup; pemeriksaan sumber/paket dan instance lokal |

## Konsistensi, masalah terbuka dan batas berikutnya

Tidak ditemukan kebutuhan mengubah model KB-01–KB-18 atau DT-003/005/007/009/011. Dokumen 06 dipertahankan identik. Baris izin DT-028/G1 pada baseline diperbarui sesuai mandat B2; tidak menutup 35 DT lain atau mengubah tujuh gerbang lainnya. Dokumen lama yang menyatakan belum ada izin coding/B2 dibaca sebagai riwayat dengan acuan status terbaru di bagian awal.

**Konflik substantif yang tetap terbuka: E1 otomatis baca→unduh/ekspor vs pemisahan izin KB-11.** Tidak memilih kebijakan pengganti; endpoint dan berkas ekspor bisnis tidak dibuat.

Hal yang belum selesai/final:

- Autentikasi petugas dan pengikatan aktor server ke sesi; tanpa itu antarmuka bisnis tetap ditutup.
- OPD/petugas/mandat/wilayah nyata, katalog field rinci dan standar bukti/SOP/risiko/retensi/JRA/PDP. Semua konfigurasi tes fiktif, bukan penetapan organisasi.
- Katalog kelompok registrasi Unit adalah batas teknis B2, belum implementasi seluruh kamus field resmi. Pengubahan identitas pihak bersama, otorisasi granular seluruh atribut dan riwayat lintas modul memerlukan rancangan/izin terkait.
- Kandidat hanya pencarian nama dinormalisasi; belum pencocokan menyeluruh atau konsolidasi KB-13. Revisi atau kandidat baru dapat meminta pemeriksaan ulang; tidak ada auto-merge.
- Katalog standar kosong menghasilkan BELUM DAPAT DINILAI. Bukti sintetis yang dinilai bukan dokumen formal nyata atau penetapan daftar wajib; NIB tetap opsional.
- C2, pengesahan field operasional, agregasi penuh DT-007, profil pangan, koreksi penuh K1–K4 dan salinan audit independen belum diaktifkan pada B2.
- Hosting/kapasitas/operasional/produksi tetap BELUM DAPAT DINILAI; G5/G7 tidak lulus dari tes lokal ini.

**Kesiapan menuju G1-B3:** fondasi domain dan regresi lokal tersedia untuk ditinjau. Kontrak B3 harus memilih lingkup berikutnya beserta prasyarat, standar/katalog sintetis, batas autentikasi, audit dan penerimaan; jangan mengaktifkan pengesahan atau antarmuka hanya karena tes B2 lulus. Pekerjaan dihentikan pada B2, tanpa mengajukan izin untuk kebijakan yang belum dirumuskan konkret.

## Penyerahan

[Manifest 26](26-manifest-perubahan-g1b2.md) mencatat semua sumber/dokumen baru atau berubah serta SHA-256. ZIP hanya paket perubahan dari baseline B1; tidak memuat .env/kunci/kredensial, vendor/node_modules, build/runtime/log, binari/datadir/dump MySQL, ZIP lama atau metadata Git. Tidak ada penghapusan/pemindahan sumber. Perubahan database lokal adalah tiga migrasi dan tambahan privilege per tabel yang dijelaskan; bukan izin migrasi/deployment produksi.

Tidak memakai data nyata/Excel historis, tidak mengakses PDN/cPanel/OSS/Dukcapil/produksi, tidak membuka ekspor/unduh bisnis dan tidak melakukan deployment.
