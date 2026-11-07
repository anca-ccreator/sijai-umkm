# Manifest perubahan G1-B3.2 — antarmuka A3 dan pengajuan

Tanggal **7 November 2026**. Paket terhadap baseline lokal G1-A/B1/B2/B3.1 yang diterima pemilik. Memuat **50 file: 26 baru dan 24 diperbarui**. Tidak ada sumber dihapus, dipindah atau diganti nama. ZIP perubahan bukan installer mandiri.

ZIP: **SIJAI-UMKM-G1B32-antarmuka-a3-pengajuan-2026-11-07.zip**. Struktur relatif akar proyek dipertahankan. Hanya sumber, pengujian, dokumentasi dan enam JPEG bukti QA baru/berubah. Tidak memuat .env/.env.testing, kata sandi/kunci/cookie/kredensial, vendor/node_modules, build/runtime/log, binari/datadir/dump MySQL, Git atau ZIP lama.

**Migrasi baru/berubah: 0.** Sembilan migrasi B1/B2 dipertahankan. Dependensi/lock, .env.example, register keputusan 06, RegistrationService dan AuthorizationService tidak berubah.

SHA-256 adalah sidik isi berkas. Manifest sendiri dikecualikan dari tabel hash untuk menghindari acuan melingkar; isinya tetap dibandingkan byte/hash sebagai entri ZIP terhadap sumber final. Setiap entri ZIP diperiksa CRC, path, keunikan dan hash. Daftar isi dan jumlah harus tepat sesuai manifest ini.

## Ringkasan kelompok

Formulir/validasi A3 berulang, workspace/proyeksi berizin, gateway sesi, controller/rute pengajuan, CSP/middleware Livewire, demo CLI sintetis, tes UI/HTTP/konkurensi, dokumen status/hasil/panduan dan evidensi browser. Tidak ada C2/pengesahan field, K1–K4 penuh, ekspor/unduh, impor, data nyata, layanan eksternal atau deployment. Konflik E1/KB-11 tetap terbuka. Lihat [hasil 34](34-laporan-hasil-g1b32.md).

## File dan SHA-256

| File relatif | Perubahan | SHA-256 |
| --- | --- | --- |
| AGENTS.md | Diperbarui | 818E5F8F31614AF1D7A0EDB08490C35666584C30B28C6FC723D43467CDAA9310 |
| README.md | Diperbarui | B586638D9EB6991D15FC1177AB1E0615F904D2F9A2F06226DD904F3EF6E77B98 |
| app/Console/Commands/CreateRegistryDemo.php | Baru | BA2C810BA21A8D5175CFC0838A7FA0C1F54E3A5BCD419E4658F80BEDB62E2CE1 |
| app/Http/Controllers/LocalSessionController.php | Diperbarui | 7BCF4F2F281B8ACFE2E615A3AC1270A14674D30E3DA62E068A6E93FE2DB10CE6 |
| app/Http/Controllers/RegistryController.php | Baru | EDBF1EF453FD635BCCC7C99568DF70F55E0D05F22AE45FC8F408DDD4865708F8 |
| app/Http/Middleware/LocalNoStore.php | Diperbarui | E2C13BFBB37279B0EB988E5AD98A0211E219A3E505572408AA66778662A81B46 |
| app/Http/Middleware/RegistryCsp.php | Baru | 34BE1558E4750293DEC282D2C59AD9B8360FC34F6D5FB57BC691F1F0C285D0B8 |
| app/Livewire/RegistryDraftForm.php | Baru | E17BFDD8FA8740E7772CE8F225ABD68DBCFAE9155E3EF98FAE286790350E8217 |
| app/Modules/Audit/README.md | Diperbarui | 25B8F15C2A2812C179DBBDF2E33D8AC9D4681791A816A80394E233A57FF07F7A |
| app/Modules/IdentityAccess/README.md | Diperbarui | 53306A677EDDA84A88D458FA40AB794293BF516546EB43AFBF5033C2DA672DD5 |
| app/Modules/IdentityAccess/RegistryDemoBootstrapper.php | Baru | 8D5E0D38CD462AD2A8C45BE6C9178CC9E5F207B9F2139E9AC145B9557804BAAF |
| app/Modules/Registry/README.md | Diperbarui | D04EDE5CD00589775DCCCD971A4E136B09555ABAED80CE5DD5CFF8EDFF859C4D |
| app/Modules/Registry/RegistryFormInput.php | Baru | 7F33D5F597BAC113B2EFAB9F45D8E49625E3A133E7C492A44E0622210B8B42D5 |
| app/Modules/Registry/RegistryWorkspace.php | Baru | 9EB42629E8914C71118B76F0D1981AD978A6E1B1C60C812160BD8B05BB5C235B |
| app/Modules/Registry/SessionRegistryGateway.php | Diperbarui | 5CEA74800875B05FA17C06F575468D1B0CDE4E310FF30D39BB914B69D02FEDD1 |
| app/Providers/AppServiceProvider.php | Diperbarui | A6473A8D741AF8D4CAD4BFE34875FA7A0B201FE27F65D051C373663DD4568167 |
| bootstrap/app.php | Diperbarui | 3A5669252AF651D6B4BE1B0699686889F137162B60BC51CB95C31E2A1509C477 |
| config/livewire.php | Baru | 44C1432F035958615684CBE529A70440F1557B4B75D2EA111D1ACE7535859535 |
| docs/02-arsitektur-awal.md | Diperbarui | BA0C6CC5AEDFBDA7C4EECE4B25CFCD5FFD8B2D7F378493626392196FF28DAF3E |
| docs/03-entitas-dan-relasi.md | Diperbarui | 58312F9494A26D17E9506BC97224A9DE4A4A51E64D0014E9F3F031B849C4B542 |
| docs/04-tata-kelola-data.md | Diperbarui | B7F32503CC4EEB00708E4ECAF19BA92E7CD718FF0BC8B9ED974C42576960C83B |
| docs/05-roadmap.md | Diperbarui | 8561E457334C463069754098FD0F4C7DD1B770CC2890CF857E2D99FFF13C7FE9 |
| docs/08-audit-konsistensi-dokumentasi.md | Diperbarui | 8AC3CF152867EEA2669D2AEE8319321B1F3BF3CDF21F28AAC1AE0CB1151DC36C |
| docs/10-baseline-konsolidasi-kb01-kb18.md | Diperbarui | 1C1DBDC5F6E8AF3D4A39C0B62C10506F6030E42EFB59BEA135F23157AA4D8F61 |
| docs/12-kontrak-mvp-pra-coding.md | Diperbarui | 155A23FB71424EB66C7B66BE1706486E92B0ECBB3009FD698557244EA1E30474 |
| docs/13-backlog-mvp-terprioritas.md | Diperbarui | C6457EE3715C34FD37E5B111E6737176BB965ABDC295F320F06DFDD5CB20FAB6 |
| docs/14-kontrak-teknis-fondasi-lokal.md | Diperbarui | C362DCA710340DEFEA2D4FEED2655B3CF9B110571EA649D4F43D822E72752134 |
| docs/15-review-paket-prototipe-dan-kesiapan-g1.md | Diperbarui | CE80858F18A7E58EE3596176AC54295F76F2DD1E1C9E3E2169D98FCD7C32B631 |
| docs/32-kontrak-antarmuka-registrasi-g1b32.md | Baru | F9714452B861316E418D2DFFC5EF4244B6017B2F2BEC9F4645BE59AFA7D933AB |
| docs/33-panduan-alur-registrasi-g1b32.md | Baru | 2ACA908DE166F7F2913EB9F505037CBB4FF964AA63AB425AEE07B8CCFB077C10 |
| docs/34-laporan-hasil-g1b32.md | Baru | 67792F16D198E2805EC3ED669545373044F5A62EC03D09DF01CC5031DAEF7F3C |
| docs/README.md | Diperbarui | E3DA1E14E5C19DD51F73ADCAA284EE81B4F808E6C0162CA60A7A6ACAAE898C90 |
| docs/bukti-g1b32/01-daftar-registri.jpg | Baru | 21CD46D2CD7E45886BC445B6C7013F0F82F4905D8DA33C5449F58469F805B9BB |
| docs/bukti-g1b32/02-formulir-desktop.jpg | Baru | 5328EB3FC835B20730A53B9038ADDCCDA67F0F6AAF7E677121C6DF314961F144 |
| docs/bukti-g1b32/03-formulir-mobile.jpg | Baru | 56C866678A56F6154CE0D1CCA3EF009EC2A5F660E6AE404543CFD85EEC2B7C1E |
| docs/bukti-g1b32/04-draf-tersimpan.jpg | Baru | 1D3B88D3BAF9C8412A190F2A28176A4A98B006ACA45CB8E6932D12000683A892 |
| docs/bukti-g1b32/05-pengajuan-ulang.jpg | Baru | 1EFA74A8244AC7C1BA853E44E9C4EBE8E02A90AAD22D892982D5C6663432FEDA |
| docs/bukti-g1b32/06-validasi-pihak.jpg | Baru | B028B22630976881002C24F0A584449B14E8C8905BAF638A798D9F1B7E1922C1 |
| resources/views/components/layouts/local.blade.php | Diperbarui | D7075A8CEA7443C50FC09ECD7F5C6C42702B219267411D7054D4A4CCA952C256 |
| resources/views/livewire/registry-draft-form.blade.php | Baru | 6088ADD3C8A1B9AAAEB356B0319FB5A8ACA559D51EBCA7ABE8B9EE9C8DC948D2 |
| resources/views/local/workspace.blade.php | Diperbarui | 7B5492CE7B20DC8A06393C83D6CE486C399C6FE41D37783E3609DB2FAE188998 |
| resources/views/registry/form.blade.php | Baru | BAF0E2472EC8B4645C33B32B078712050EEFE6EBAEFBC92D91BFB07D13304AC5 |
| resources/views/registry/index.blade.php | Baru | F809B9F3BCD2E6D1EBF996E95621E88BED3BEC9526AF284614013B9362F70B1B |
| resources/views/registry/request-fields.blade.php | Baru | 7833A74F2D3F7D73A3B7DDE4C51CE47ECAC3F1235BF2ACB9422651BB3AA9C8CE |
| resources/views/registry/review.blade.php | Baru | 441CB305243A4252224A7AFC519C26E2E217A6F02D8D7C6EE0C46BE4EAD4C68F |
| routes/web.php | Diperbarui | F7F40CDAF468A43AD666AE6C0BA767E583ED4CE76C32189F1DB85DC511E27D07 |
| tests/MySql/RegistryGatewayConcurrencyTest.php | Baru | A7768BEFD584A4FD7D1AFED652D4628474E6AEEF1661D115F8FA6E2F599F6D86 |
| tests/MySql/RegistryUiTest.php | Baru | 745F5D01CC41BB071EA71824E6AD7F304107AA4FBD74E46787B8F497A926CA0C |
| tests/Support/registry-session-worker.php | Baru | 80D2507C0FE99AD6BC96330D2818E06D3C30C767D97B35609A7EA67E25D2592F |

Manifest ini juga file baru dalam paket; hash dirinya diperiksa saat pengemasan. Tidak ada file sumber lain yang harus dihapus ketika menerapkan paket pada baseline.
