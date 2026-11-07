# Manifest perubahan G1-B3.1 — autentikasi, otorisasi dan audit lokal

Tanggal **7 November 2026**. Paket perubahan terhadap baseline lokal G1-A/B1/B2. Memuat **50 file: 27 baru dan 23 diperbarui**. Tidak ada sumber dipindah atau dihapus. ZIP bukan installer mandiri.

ZIP: **SIJAI-UMKM-G1B31-autentikasi-audit-lokal-2026-11-07.zip**. Path relatif dipertahankan. Hanya sumber/tes/dokumen yang baru atau berubah; tidak memuat .env/.env.testing, kunci/kredensial, vendor/node_modules, build/runtime/log, binari/datadir/dump MySQL, metadata Git atau ZIP lama.

SHA-256 adalah sidik berkas untuk memeriksa bahwa isinya sama. Hash di bawah milik file sumber, bukan kata sandi/database. Hash manifest sendiri tidak dicantumkan di tabel agar tidak membentuk acuan melingkar; manifest tetap diperiksa byte/hash sebagai entri ZIP. Seluruh entri ZIP harus lulus CRC serta cocok dengan sumber final.

## Ringkasan perubahan

- Autentikasi: provider/guard Laravel lokal, sesi server/konfirmasi/logout, pembatasan percobaan, penolakan input kewenangan, proteksi respons dan audit keamanan.
- Registry: gateway sesi dengan profil baca-saja/proyeksi field, serta adaptor mutasi hanya untuk tes tanpa rute bisnis aplikasi.
- Demo: perintah CLI interaktif sintetis baca-saja, tanpa kata sandi bawaan, satu paket data dan masa uji teknis 24 jam; bukan akun/hak nyata.
- Pengujian: 40 kasus baru, 91 regresi MySQL dan 10 regresi tanpa DB; HTTP lokal melalui cookie/CSRF sebenarnya.
- Dokumentasi: kontrak, rancangan salinan audit tanpa koneksi baru, panduan, hasil, status arsitektur/baseline/backlog.

## Daftar file dan SHA-256

| File relatif | Perubahan | SHA-256 |
| --- | --- | --- |
| AGENTS.md | Diperbarui | A75263CED6DAD5575085AED84FE7539922E1EA26C90F127BDE0A14036D57075E |
| README.md | Diperbarui | 41287304BC9703838F992B00731F258E46FA87917C912C562CC54CA450E453FB |
| app/Console/Commands/CreateLocalDemo.php | Baru | A0D57C9E1297E1883D41C71CB33C71D3BCF7A9083BD8404C6A0ABE22F6F0F27A |
| app/Http/Controllers/LocalSessionController.php | Baru | D777FF00BADDA6BD587E9893EBCD6C210C5A1AEE08A41B8927F0CEE173740B2C |
| app/Http/Controllers/LocalWorkspaceController.php | Baru | 29F981407B4F57EC3C9B133BE56692ACC1D5ECD8903A0BBC48E0E5C4071158ED |
| app/Http/Middleware/ActiveLocalSession.php | Baru | AB4584CF0E4013D3AB3083C2D2C2169C6AC11845099537480BE0F759BD3ECB93 |
| app/Http/Middleware/LocalAccessOnly.php | Baru | 3FDD4C24F71FC093D787A7D0F5506F4944DB635A5C6B009749EA0E12FE3CC9D7 |
| app/Http/Middleware/LocalNoStore.php | Baru | F948DEC443F35971A7994225FF2A1868F79763E3635D9C538213AE3B50894B80 |
| app/Http/Middleware/RecentLocalConfirmation.php | Baru | 586916C707ECD12240D187CE6EC9ED2F890B32FCD98D86F716E3E4A2D08B6DC5 |
| app/Http/Middleware/RejectClientAuthority.php | Baru | 79A64BBFBE9D75A5BD1884B2A5716677B3D81AF1287F317F920F9E989646F2C3 |
| app/Modules/Audit/README.md | Diperbarui | 5F77FA0AFB31B7F4AC87A0E7ACAA64B6682D10E7E69ECA8FC49015FAAE873555 |
| app/Modules/IdentityAccess/LocalDemoBootstrapper.php | Baru | D058515F6E555FA6ABE580B74FBFE7F77A9AA782D5C37130A91FB3ED46695E4C |
| app/Modules/IdentityAccess/LocalSecurityUnavailable.php | Baru | F5672E3C8B6F37BBB3731F7515570A0765F6E685FD607B0ACC967398F10F59CB |
| app/Modules/IdentityAccess/LocalSessionService.php | Baru | A588021A5926B8CAAA95FC49890D6F53486161B1862E86608E97BFDAD6210EB7 |
| app/Modules/IdentityAccess/LocalUserProvider.php | Baru | 981A05D30BEB8183081F226088F7B9BB3DA89E02FD6E41A43988A0BA89C6AA90 |
| app/Modules/IdentityAccess/README.md | Diperbarui | CF2621038ECECEBC2D6E788A98BEFA767ABA27471ECD65607C015D07B369E3C4 |
| app/Modules/IdentityAccess/SecurityAudit.php | Baru | 8F50A2926B8F4D90DD76120876D0F221FC84E617058EC3F23EF629AA19C6640F |
| app/Modules/IdentityAccess/SessionActor.php | Baru | 6B069F55D2FA68F2D45A87806AC7EF75F08825E4EACEA0E1D0A607CCD0BCC1DD |
| app/Modules/Registry/README.md | Diperbarui | C58CE7861DD9489F134F192151A496CDAC7C14156424BEDA79C8563FF8977098 |
| app/Modules/Registry/SessionRegistryGateway.php | Baru | 27D99AE4C9E13DC7FD035DF2BEAB288332101E5476343135F0C58818041B6AD0 |
| app/Providers/AppServiceProvider.php | Diperbarui | 76646EDC8D2165A0F89E9F5EA56BF7BFA236A4EF7E2CD228D2395891A868CA17 |
| bootstrap/app.php | Diperbarui | 88DD2EB8605BE1ED6163B0D4530CCB59775ACB5F37967A29332942D541B7D6C6 |
| config/auth.php | Diperbarui | 4162AC269309EA3C5DAA64D5F795B69BE8E73F7BB74EE0271D1AA6603783C9F5 |
| config/local_access.php | Baru | A3FA34284602365DD176BD71887DDFDEB57969AF955474C123AF9D8EBC7F3B00 |
| config/session.php | Diperbarui | A48D7DFC16B9EA55CE1AAD6F345381778FE253AD31E4301EB68CFA14E57A7800 |
| docs/02-arsitektur-awal.md | Diperbarui | F822FCA455C72669ECC5D81EB92BAF9F1B28E7C58B8160C82856E0ACF87AA171 |
| docs/03-entitas-dan-relasi.md | Diperbarui | 67413758FB8477D7B195B9378FB6D7F05D255932C48FDC04E4ABF059191F83AE |
| docs/04-tata-kelola-data.md | Diperbarui | C39940E9C437EC1B4224A3F913383219862498B58160620A44830E9D636855B8 |
| docs/05-roadmap.md | Diperbarui | 6394ECE84639BD202B24053F0A0747A18DF9793DC620A49DBCA343BDEE8FFCD1 |
| docs/08-audit-konsistensi-dokumentasi.md | Diperbarui | C8D008635881178DCFEDD4B40342ABFC9C2D5A8E35E7B50283AA6444440B0756 |
| docs/10-baseline-konsolidasi-kb01-kb18.md | Diperbarui | 7B978B27826A342F0008E6A7A9E96B95FF31781B1717099A52CFC6AC39B3E4C1 |
| docs/12-kontrak-mvp-pra-coding.md | Diperbarui | B56DED3B4732D81EF08FC72CD4D932E30DE97F6D7C6EDABD852B2D00D53DDA32 |
| docs/13-backlog-mvp-terprioritas.md | Diperbarui | DFCDC2E0507DA0068C1653572417BB13C2F098F0E6CE3BAE4AC3793E5A0BFBC0 |
| docs/14-kontrak-teknis-fondasi-lokal.md | Diperbarui | 170C83DC18994CB589B0BA68921D067D2A992A628474E9CD656D29468FF9865C |
| docs/15-review-paket-prototipe-dan-kesiapan-g1.md | Diperbarui | C714981B736AADC91A61BC90A9AD2738D0523383A7DCA7800611399909E7A866 |
| docs/20-operasi-mysql-lokal-g1b1.md | Diperbarui | 077D499E1B745940516C268797D3E35B3DE4CDE4B70737F38F1F4544CBE01E10 |
| docs/27-kontrak-autentikasi-audit-lokal-g1b31.md | Baru | 3E38D26BCDA48958FBB1BB066736D71C136992A4202C6F0F5D4D3852688C87E0 |
| docs/28-rancangan-salinan-audit-independen.md | Baru | 75C0D77ABD539296F8C935D720404372AFD23C3D4496F12AB6D20E49043B2843 |
| docs/29-operasi-autentikasi-lokal-g1b31.md | Baru | 64F4CEF5C4787A245E46C6F86FA94A70A6707B014CA3657EC32512801AE83491 |
| docs/30-laporan-hasil-g1b31.md | Baru | 0FD7D3D66CDC03775A1AC4BD42BDF26681161E1F451B6DD99FFF821BD561FFF0 |
| docs/README.md | Diperbarui | FDE986D4BD5F84B033DEDF6A11313315967AAD2C4133310C1DF4244D14C7AF88 |
| resources/views/components/layouts/local.blade.php | Baru | C633C760F50C346D6A5DACC6C8A56436F9B7139F9A4C7FC5BEDD49F3C2DB2605 |
| resources/views/foundation.blade.php | Diperbarui | 49450AA16C5F7C5AAA9A3CE18CAAF4B103443D2367B550F4B8638F6E06784164 |
| resources/views/local/confirm.blade.php | Baru | E7232F44E0A3D29D6466B520994458412ED87572FF8A724360DE473C8F18CF39 |
| resources/views/local/login.blade.php | Baru | 77CD4930CD583EFB1EAA256A38CEEC386248F4CEBC9F05FEB57307A30F8E7B85 |
| resources/views/local/profile.blade.php | Baru | 1AE20FE96631FA040854D177EC470BD528CA3A391EEE079366AF2089D4F391F6 |
| resources/views/local/workspace.blade.php | Baru | 5F758925CAD2E7BDC9A2F8A22CAF9A18C848A51A4833EA167DB299611ED7055E |
| routes/web.php | Diperbarui | 4B9D7B123F26C6AC59F3026048848156DE786E2CE7F066145C84139622B16FD3 |
| tests/MySql/LocalAccessTest.php | Baru | 77EE99A05BEEB2157A0527CD5EB1307ECDB0103099D58A9CFD81E86E8FA5F61D |
| docs/31-manifest-perubahan-g1b31.md | Baru; manifest ini | Tidak mencantumkan hash sendiri; diverifikasi dalam ZIP |

## Berkas dan keputusan yang dipertahankan

Tidak ada migrasi baru atau perubahan sembilan migrasi B1/B2. Tidak ada perubahan composer.json/lock, package.json/lock, .env.example, konfigurasi batas MySQL, layanan domain A3/otorisasi/audit B1/B2 atau test B1/B2 yang sudah diterima. Dokumen 06 tetap identik: SHA-256 **8FDDE0C7A059A80A88BF1CC685808B89A233EE65C83934BB17F5927E5762C7F5**. Model KB/DT dipertahankan.

Baris izin DT-028/G1 saja diselaraskan ke mandat G1-B3.1; 35 DT dan tujuh gerbang lain tetap. 19 ID backlog dipertahankan. E1/KB-11 masih konflik terbuka, ekspor/pengesahan bisnis tidak diaktifkan. G1-B3.2/G5/G7/data nyata/produksi belum diizinkan.

Rujukan: [kontrak 27](27-kontrak-autentikasi-audit-lokal-g1b31.md), [rancangan audit 28](28-rancangan-salinan-audit-independen.md), [panduan 29](29-operasi-autentikasi-lokal-g1b31.md), [hasil 30](30-laporan-hasil-g1b31.md). Pengujian Codex bukan verifikasi independen. Rancangan salinan audit belum menjadi worker/sink berjalan.
