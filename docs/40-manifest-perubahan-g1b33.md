# Manifest perubahan G1-B3.3 — C2 lokal sintetis

Tanggal **7 November 2026**. ZIP **SIJAI-UMKM-G1B33-pengesahan-awal-c2-2026-11-07.zip**, terhadap baseline G1-A/B1/B2/B3.1/B3.2. Memuat **46 file: 19 baru, 27 diperbarui**. Tidak ada sumber dihapus/dipindah. Hanya perubahan sumber/tes/dokumen dan dua JPEG QA; bukan installer mandiri. Struktur relatif akar dipertahankan.

Migrasi baru: **2026_11_07_000010_add_initial_registration_decisions.php**; sembilan migrasi lama utuh. Tiga tabel/enam trigger C2 append-only, runtime hanya SELECT/INSERT lokal. Tidak ada dependensi baru, data nyata, field operasional, ekspor atau produksi. [Kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md), [matriks 37](37-matriks-kewenangan-c2-g1b33.md), [panduan 38](38-panduan-pengesahan-awal-g1b33.md), [hasil 39](39-laporan-hasil-g1b33.md).

Paket mengecualikan .env/kunci/kredensial/cookie, vendor/node_modules, build/runtime/log, MySQL binary/datadir/dump, Git dan ZIP lama. SHA-256 adalah sidik isi berkas; manifest tidak mencantumkan hash dirinya untuk menghindari acuan melingkar, tetapi tetap diverifikasi byte/hash sebagai entri ZIP. CRC, jumlah/path dan hash seluruh entri dibandingkan dengan sumber final.

| File relatif | Perubahan | SHA-256 |
| --- | --- | --- |
| AGENTS.md | Diperbarui | D6801158C238E0BB756883C8371C429E349FFCE3073911AB9FF8A98FF801D36B |
| README.md | Diperbarui | E2301FCAF93FD656A40E213A4D30558E8D57D35B211442DA23881A971462BB14 |
| app/Console/Commands/CreateInitialApprovalDemo.php | Baru | 4833D51F63184D699472B026229942EE2CA8FD067BC1F4BA80D5B1A7DC8012F2 |
| app/Http/Controllers/InitialRegistrationController.php | Baru | E1676F739959ED9EC24E33AF7481DE283B896538C4E5227F55F3272AFD747F13 |
| app/Http/Controllers/LocalSessionController.php | Diperbarui | B49C0B64F648782BC566E137638C217CE9DB4B7D0D4818E6124DCF1077393AEF |
| app/Modules/Audit/README.md | Diperbarui | 6268580253B8766EB45C2B14933E61166152EAED3D5EF43C3A21F974A93F85FC |
| app/Modules/IdentityAccess/InitialApprovalDemoBootstrapper.php | Baru | EEDD9AD8F67665385A59036F3DCFEC5E28C724EDF7653E699BFFC1699A9460C8 |
| app/Modules/IdentityAccess/README.md | Diperbarui | 2B53933D7F6383EE7C12BD19B5875EDBB10DFAB4DEFD41FAF2D2282354BE3232 |
| app/Modules/Registry/InitialApprovalRules.php | Baru | FEF1FB0D1B9E62A27539B1C800F5D85177AB83CB1476C93B1E3C7DC1972E9DC3 |
| app/Modules/Registry/README.md | Diperbarui | 89D816A176B83FD99975F91275D3E9A6014AA0459718672BB689AC1AC03570B9 |
| app/Modules/Registry/RegistrationService.php | Diperbarui | 8A335C1B79F5C8CE2DE2C877EE97C9D9EF75E791F9DA11011E35770E4D430BFE |
| app/Modules/Registry/RegistryWorkspace.php | Diperbarui | 0A9E73B71E530A043ADCAE808255017F444463A62B91A9894902C8D7133A49FB |
| app/Modules/Registry/SessionRegistryGateway.php | Diperbarui | 2C5AE6A96BB5F5620D85341E6C0CE7BA5874973E2A2D67596C9F9036BB0C185A |
| database/migrations/2026_11_07_000010_add_initial_registration_decisions.php | Baru | 3470C8531207E7ECCF5A6AB5284B13D6A6D0BBC2A6BFCEFB3DD3B9809EC80732 |
| docs/02-arsitektur-awal.md | Diperbarui | 0DDE8717E3BC91F7E65FD83DA5B90756116C3C446F2D3A0DDA7D49698CD67D8C |
| docs/03-entitas-dan-relasi.md | Diperbarui | 74B23A1FEA5A7D39D10B7136142E0638477EB9A68FDFFA9BA6E1B587F9727667 |
| docs/04-tata-kelola-data.md | Diperbarui | 12B791EF4959C491D93DD39ED2414427A2B5737067F133FC41B0A5D7F3A36CFB |
| docs/05-roadmap.md | Diperbarui | A5D9C3AA0FA0305D36E69FA12C1DF53048361491A161CDD96946B8EBDE4118BA |
| docs/08-audit-konsistensi-dokumentasi.md | Diperbarui | DB4040CEA732057513C2E02A456C3F35D2B8E54AD52CBEA81C30957DE4A4B14C |
| docs/10-baseline-konsolidasi-kb01-kb18.md | Diperbarui | A7367CAB71D2CEDAC1D067283547A2D711616DE4E2055BE4B39ECCE96C279976 |
| docs/12-kontrak-mvp-pra-coding.md | Diperbarui | 48DA75E95AB9FC3ACCB6305D2488FC93FCA0BFBB8359A72E7B85253973E18D5F |
| docs/13-backlog-mvp-terprioritas.md | Diperbarui | 889B1579D30C578413DCD793B48154A80778B4FA5FCF87FCF169B9DA526C5926 |
| docs/14-kontrak-teknis-fondasi-lokal.md | Diperbarui | 474B86D9F011FF9E97BC0230B589E93962D4607DA446CB7791300E6C74F173C2 |
| docs/15-review-paket-prototipe-dan-kesiapan-g1.md | Diperbarui | 826E182165C9B93A2ACA3EA5D28AF3AE99CDAE9F952108D5E97240C01EAF29C3 |
| docs/20-operasi-mysql-lokal-g1b1.md | Diperbarui | B4AD73FDCC779A087AFF83753FEB9096540D444F6E323BBA53391A7422979FCF |
| docs/36-kontrak-pengesahan-awal-c2-g1b33.md | Baru | 63F8D2BC3423C90C6A9856C9B04AF6C4244F9A81A08490A301E20FF80FCCE592 |
| docs/37-matriks-kewenangan-c2-g1b33.md | Baru | 954123A893C4A54D2944FDC9959CF5AFE67DD63010B0E027CA0028FBDCB26F3D |
| docs/38-panduan-pengesahan-awal-g1b33.md | Baru | C6150A3FB50C044D9277CA9FA643BB70E2C45441F7E17CFD97B3CD8BC2D32645 |
| docs/39-laporan-hasil-g1b33.md | Baru | AB593956FEA187A55E439DA5EB42291405655EE3794BF5715FE57C7F4AA83547 |
| docs/README.md | Diperbarui | B0CAD3152ADE0556823FCDDB3EA090BAD0DFF261FFB620805C57F3330C7DF48E |
| docs/bukti-g1b33/01-pemeriksaan-c2.jpg | Baru | E52686C2B6FE518E0EDE13CC747EE42976C32B11C28E5A7B593D543B50F03A12 |
| docs/bukti-g1b33/02-induk-disahkan.jpg | Baru | 02CE0440D668FEEDB7CC779D81C965C186E2DD3E1CF04519588A2337ADDE0314 |
| docs/kamus-data-mvp-kb09.md | Diperbarui | 0A2C98C1994627EDE0984197BAEE7DC2455C5AF1FC89D9BB360595E6874DA26A |
| docs/matriks-kewenangan-mvp-kb09.md | Diperbarui | F65D3BC2136FCEDCF4D7D8EE7C90BFE3BA47E4E29167A07090E251288CDABDD4 |
| resources/views/local/profile.blade.php | Diperbarui | 7295DD2BB1202972991C49F43FBF2B85DA9F8DDC5A2D9A7D2835EC82E71DE46B |
| resources/views/registry/initial.blade.php | Baru | 2E2CA0C36E862188C6D23012B750280E0183ABB873F768ABE1C446AFF92700F2 |
| resources/views/registry/review.blade.php | Diperbarui | 0A0B7824EE702A9391A874C621DB9F50B58AF2ADEF627799AC845B2D1653322C |
| routes/web.php | Diperbarui | BA5348F4CB513CEBB1DA740F4BB58E44456BAED7BA704BEFCCD5963D6385FABA |
| tests/MySql/InitialApprovalConcurrencyTest.php | Baru | 5D83C713ED6ED644F64542EBA40FA15A2ECC5BF14AE920ECE1E4B24CC521FDB8 |
| tests/MySql/InitialApprovalDemoTest.php | Baru | E5554F550832A41B6E035C9BD083029622C6E288F2694B66E49FDAD514A30695 |
| tests/MySql/InitialApprovalHttpTest.php | Baru | 8CFC0CFD8FE6D46599CCECEEAB1FEE496BA4BE71E3E75B084CADA1520D17E7E9 |
| tests/MySql/InitialApprovalTest.php | Baru | 55F11488DCB6B5787DCD6C0FBACE48879344CCD4B395203A084A43BAF0024E95 |
| tests/MySql/MigrationAndConcurrencyTest.php | Diperbarui | 0B0B60590D118B8FF0F6E97E1392BE90BF0099E45728AD3688F7C4033F406CFD |
| tests/Support/InitialApprovalFixture.php | Baru | 7BC8EECA2D9109200F3A434158E5F635B162D4D31F850DEBE551959209CC1C0D |
| tests/Support/initial-session-worker.php | Baru | 897DE85D59951B371E93B27732746581357E3AD93D41A186DEA3E5ADCB3264B3 |
