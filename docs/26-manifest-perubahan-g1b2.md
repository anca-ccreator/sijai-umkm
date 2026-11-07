# Manifest perubahan G1-B2 — Registri Induk dan registrasi A3

Tanggal **6 November 2026**. Paket perubahan terhadap sumber baseline G1-A/G1-B1 yang sudah tersedia. Memuat **35 file: 16 baru dan 19 diperbarui**. Tidak ada sumber dihapus atau dipindah. Paket bukan installer/aplikasi mandiri dan tidak membawa file privat atau dependensi.

ZIP: **SIJAI-UMKM-G1B2-registri-a3-2026-11-06.zip**. Path relatif dipertahankan. Isi hanya sumber, tes dan dokumentasi baru/berubah. .env/.env.testing, kunci, kredensial, vendor/node_modules, build/runtime/log, MySQL binary/datadir/dump, metadata Git dan ZIP terdahulu tidak disertakan.

Bukti: [hasil 25](25-laporan-hasil-g1b2.md), [kontrak 23](23-kontrak-registrasi-lokal-g1b2.md), [model/migrasi 24](24-model-dan-alur-registrasi-g1b2.md). Seluruh entri ZIP diperiksa CRC dan dibandingkan byte/hash dengan sumber final. SHA-256 di bawah adalah hash berkas sumber, bukan password atau hash database. Hash ZIP diserahkan sesudah pengemasan; hash manifest sendiri tidak dimasukkan ke tabel untuk menghindari acuan melingkar. Manifest tetap ikut pemeriksaan seluruh entri ZIP.

## Ringkasan kelompok perubahan

- Registry: validasi A3, versi/relasi/status, klaim sintetis, kandidat nama, alur pengajuan/perbaikan dan transaksi audit; model lokasi/kegiatan/hubungan.
- IdentityAccess: tindakan draf/pengajuan/pemeriksaan dan pemeriksaan penciptaan yang tidak dapat dipakai untuk sahkan.
- Migrasi 007–009: 16 tabel, perlindungan riwayat dan urutan penilaian berjenjang versi. Enam migrasi B1 tidak diubah.
- Tes: 46 kasus registrasi dan dua konkurensi baru; suite B1 tetap 43 kasus, penyesuaian jumlah migrasi; 10 tes fondasi tetap.
- Dokumentasi: kontrak/model/hasil ini; status panduan, arsitektur, baseline, backlog dan roadmap. Hanya baris izin DT-028/G1 yang berubah pada register baseline; keputusan sumber 06 tidak berubah.

## Daftar file dan SHA-256

| File relatif | Perubahan | SHA-256 |
| --- | --- | --- |
| AGENTS.md | Diperbarui | 98261EFF8EA9A8254857A7D5A284B87E43C3FAE6D6119CD52E5D50D36D13D4D0 |
| README.md | Diperbarui | 39A13E6249514ABA3B2059379F32413D3184917FBAD811488A096CE97ED5C486 |
| app/Modules/IdentityAccess/AuthorizationService.php | Diperbarui | 1CB22F5A53D041D3BB613AA4120F893C10CF0A603E7E2DE35AAE599F1FBA3DD6 |
| app/Modules/Registry/Models/BusinessActivity.php | Baru | 4CC8A881E208999916FBFF73E650854C8B4FEEFF9B92817FE637D9585AD07FB4 |
| app/Modules/Registry/Models/BusinessLocation.php | Baru | D7E157540AC9AF2C73ABD820C6EE62FA726FCCB087A2D3C3504345390FB38AF5 |
| app/Modules/Registry/Models/BusinessUnit.php | Diperbarui | 2B47485EB4E9BF2818F91DB67A69A28DA6B2C00B9DC117DE03652CCB8A54FCF7 |
| app/Modules/Registry/Models/PartyUnitLink.php | Baru | 05F303713FA32570A830335ADE86B8291EAA7405787BA7FF3D835BA8481459F5 |
| app/Modules/Registry/README.md | Diperbarui | 6DE03A437B8877C0278D569784E5AC503CED01C638861CE564071ADBCB185142 |
| app/Modules/Registry/RegistrationDenied.php | Baru | F6C1DD73407DB20D92B927C0EA5493FFF68A86744FFF179664A818E51123F930 |
| app/Modules/Registry/RegistrationService.php | Baru | 7D4921A09E28ED26879DCCA447DC4EF69C1C6E81A9FBC9216AEFA1BDF3B7C523 |
| database/migrations/2026_11_06_000007_create_a3_registration.php | Baru | C963728E4B8B82BE67A8455C3EF4D056BD0A51DD7AE11265697B02865C5243A9 |
| database/migrations/2026_11_06_000008_protect_registration_history.php | Baru | 0BA2A63E2D9CD2F1AEA1B7AD2458AE3CA17BC9E658289CD4EACEF80110222FC5 |
| database/migrations/2026_11_06_000009_order_registration_reviews_by_version.php | Baru | 54B95D1311B91BCFF5E72D12C43CC4DE2CD848A774B4BB2102EAEFA544B04ED1 |
| docs/02-arsitektur-awal.md | Diperbarui | 7E87059DBA1E45D2C368C683326CC14B9CF16B416B7CDDE573A6106772B89D76 |
| docs/03-entitas-dan-relasi.md | Diperbarui | DA661C552A37E2E1B1418EBF2CE2CF2EA819B16FDCF8E1B704B533680DEA1E56 |
| docs/04-tata-kelola-data.md | Diperbarui | BFCB825408D137B34A914BF515A99D4239AB6ED1DAF376D84F46A07111052D4A |
| docs/05-roadmap.md | Diperbarui | FBEF6F9B9300151FB1123E16F2A9107C624A5A034B8BD9F8A8179AC1C795BADB |
| docs/08-audit-konsistensi-dokumentasi.md | Diperbarui | B84E913F98419A23F8550DC628E28BD349D252DEC594446EAAC787FE6B07B2AD |
| docs/10-baseline-konsolidasi-kb01-kb18.md | Diperbarui | FA8C4E56627D6CE56ADFA9791933FE2D417921B8FC36F9D65CCCD9B67E4A7A24 |
| docs/12-kontrak-mvp-pra-coding.md | Diperbarui | C97A9831EF34F43EC46DC9836A4D71283D83B007C3D04674DF478B8BB2EBE6EF |
| docs/13-backlog-mvp-terprioritas.md | Diperbarui | 5E2602586D06BC31BA56EA3352CE969E7AB1BC3712EFAE2C8C6D7A7A588A31C8 |
| docs/14-kontrak-teknis-fondasi-lokal.md | Diperbarui | 4EC488AD5DE4A22498AB0E4825D179216287CF05AC05334EA6E07B1DD4A44E06 |
| docs/15-review-paket-prototipe-dan-kesiapan-g1.md | Diperbarui | 107336D6A4E1C05BDA21EC0D98ED4439214F6CADC38250C4B085A603C249B268 |
| docs/20-operasi-mysql-lokal-g1b1.md | Diperbarui | 5A4441359FADC22F00D07C777F560A0557D98EDDC669EB8E5A24FFD884398CD4 |
| docs/23-kontrak-registrasi-lokal-g1b2.md | Baru | 83FF266A98BFA99DB50B484E1EC9E927B5517820C70FBEB9504C699E56D6008E |
| docs/24-model-dan-alur-registrasi-g1b2.md | Baru | C48D567300AF9CAB04C7C2EBD76E323E6D380DAC09459CFEC5BD5B7D3BAB69D1 |
| docs/25-laporan-hasil-g1b2.md | Baru | E573487D26F0B06215131C1EB6A807097EEB54D4DF96C7C845B785DA5AEE5E09 |
| docs/README.md | Diperbarui | B067288D172C907DAE3DB6741A7929DB19CC5CFDCAFFB884CE672DC9227A6444 |
| phpunit.mysql.xml | Diperbarui | D311ABC73CD7A9DD7224140F1E2D2090E8C42F099903CA3AF5BDFEEE3B69B63B |
| tests/MySql/MigrationAndConcurrencyTest.php | Diperbarui | DF91180514B5A7043AAA9309BF08C3FEBB88A0BC4C7793CC8F4A7E13C4160009 |
| tests/MySql/RegistrationConcurrencyTest.php | Baru | BF7927B2578DB0EC484E3E9F5B355C3282993CD2D98AED2D94C5BCB844AC236E |
| tests/MySql/RegistrationTest.php | Baru | 107BE4A9F8D25FC1AC88B445AFFDFDC344653DCDDD0E2D4A696903995D59E78C |
| tests/Support/RegistrationFixture.php | Baru | EA4FE1B207FEF9B613E9692CB6A6768DC0FC7138F8F241450FAA912977231E60 |
| tests/Support/registration-worker.php | Baru | F77A0D8CF4D83FE8088C79397FED414DE0189C26739B4EEC5812613A6493A66B |
| docs/26-manifest-perubahan-g1b2.md | Baru; manifest ini | Tidak mencantumkan hash sendiri; diverifikasi sebagai entri ZIP |

## Berkas yang sengaja dipertahankan

Dokumen 06/rumusan KB-01–KB-18 dan DT, kamus/matriks keputusan, enam migrasi B1, composer.json/lock, package.json/lock, .env.example, konfigurasi batas database, routes, middleware transfer, template/CSS/komponen sintetis dan skrip MySQL awal tidak diubah. SHA-256 dokumen 06: **8FDDE0C7A059A80A88BF1CC685808B89A233EE65C83934BB17F5927E5762C7F5**.

Kondisi akhir: 91 tes MySQL/425 assertions + 10 tes tanpa DB/56 assertions lulus. Dev/test masing-masing 39 tabel, sembilan migrasi dan nol baris bisnis; E1, C2/field operasional, G1-B3/G5/G7/data nyata/produksi tetap tidak aktif/belum diizinkan sesuai batas.
