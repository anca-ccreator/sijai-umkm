# Manifest Penyerahan Paket Proyek Lengkap MVP Lokal SIJAI UMKM (Edisi Sederhana Praktis)

- **Nomor Versi Internal Baseline**: **`v1.1.0-simplified-sinjai`**
- **Tanggal Pembuatan Paket**: **8 November 2026**
- **Nama Arsip Utama**: `sijai-umkm-mvp-lengkap-2026-11-07.zip`
- **Jenis Paket**: **SIJAI UMKM — Edisi Sederhana Praktis Pemerintah Daerah (Laravel 11 / Tailwind CSS / MySQL Standard)**

## 1. Cakupan dan Kepatuhan Keamanan Paket

- **Arsitektur Sederhana**: Sistem dirampingkan menjadi 3 Menu Utama (Dashboard Laporan, Data UMKM Harian, dan Pembersihan Data Lama) dengan verifikasi satu pintu dan pencatatan audit otomatis.
- **Bebas Rahasia & Kredensial**: Berkas .env, .env.testing, sesi aktif di storage/framework/sessions, log runtime di storage/logs, cache pengujian .phpunit.result.cache, serta direktori endor, 
ode_modules, dan .git tidak dimasukkan ke dalam ZIP.
- **Standar Penuh Laravel**: Seluruh batasan kaku (Server UUID, pemisahan akun migrator/app paksa, dan trigger MySQL mentah) telah dihapuskan. Aplikasi dapat berjalan normal di laptop lokal, LAN kantor dinas, maupun hosting/VPS cPanel biasa.

## 2. Daftar Berkas dan Sidik SHA-256 (148 berkas terverifikasi + berkas manifest ini)

| Path Relatif | Ukuran (Byte) | SHA-256 |
|---|---:|---|
| `.editorconfig` | 252 | `f78cc5a2ef8ba61ad956d0f5db453748a981270f6a1b9f4a5a00df8690e7946d` |
| `.env.example` | 739 | `d7c790698880b6f8e013a307b89356d9d420bca5d09f107d66cbf3f0e2675e12` |
| `.gitattributes` | 186 | `a40eb27ee0b545ca5b5542daaf99fec51f84f23b3766a6353864ef2a115bc51c` |
| `.gitignore` | 353 | `3f5989d6d2b7a9963dfeba19f9e8851dc8f45605a6cb812a6a7a3d086fc85f00` |
| `AGENTS.md` | 65830 | `20d34b617bcd40c2dbc222949fde011d7fe4c006d8ad86e4e58ef5fec2b9c5e4` |
| `app/Console/Commands/SeedSimpleData.php` | 20595 | `a5419e9022f98cd760585698920c958aa1479b021a4d13c6cea97f50f00575b0` |
| `app/Http/Controllers/AuthController.php` | 1970 | `89fe416656fa71d5486629b783975da7f3614b84d5efa9e60d1f99bd3d55828f` |
| `app/Http/Controllers/Controller.php` | 77 | `25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1` |
| `app/Http/Controllers/DashboardController.php` | 5156 | `f3339008f1605f1f4fcc47ee5503ecd398f42a89cc80bdf510be9d0babd8a9b3` |
| `app/Http/Controllers/PembersihanDataController.php` | 6160 | `a17c6923a104b832fee3e02246a1bba3f0d11d8387ef8a257ed9a6d3390e1b80` |
| `app/Http/Controllers/PenggunaController.php` | 1880 | `e873811f236696fc0031afd7b262cfc38b6ca36e2adf90c47f809de3ff1ff9c8` |
| `app/Http/Controllers/UmkmController.php` | 12681 | `2ea0163c9367765631f3b2b9620ec7243b25d31e496ba130f4da4710d69fa6af` |
| `app/Models/ActivityLog.php` | 1395 | `abcbcd2a34e5f000f5372231211b4b7df028b98e840aaf7d4c77aa5579755f2e` |
| `app/Models/Owner.php` | 477 | `e5ece7ae38cea54f29f00104ec7900b22f2308463fad95795df93517064d1580` |
| `app/Models/Umkm.php` | 2054 | `834a674f38029cb5bf055322c2938a157126f23b656198ca435ccaabbe82d6c6` |
| `app/Models/User.php` | 1171 | `b1f80191b25c5ed0e1bebe21121c9f37b34b363fb52544befeb0f41597722799` |
| `app/Providers/AppServiceProvider.php` | 276 | `0de21571947ca2a08bfdcb45b6f15edb48ac85d687c8d636f97b71aed64a8f0f` |
| `artisan` | 425 | `f91a517c0c5d3a904c3f390933964a5e08ec1fc68146882730daac4aca4ffcec` |
| `bootstrap/app.php` | 674 | `d2f4d68aabb29da04afcee214c5bf48ad1ac5265d162b6a34ce85350279e01d9` |
| `bootstrap/cache/.gitignore` | 14 | `240a3e0d37d2e86b614063f5347eb02d4f99ca6c254de6b82871ff8d95532a7d` |
| `bootstrap/cache/packages.php` | 786 | `f8c17f8ba13c57ec8ba76b828811072748845921efc0fecbeb1589f394110aee` |
| `bootstrap/cache/services.php` | 22497 | `add460123bb33e35cfc697a32698529a9d5d757c3503000443e318d80ea2ce90` |
| `bootstrap/providers.php` | 89 | `f720e185207a343d4c19fc99dbb317a4187efbcd7d38a303a695bbdd77ffb943` |
| `composer.json` | 1576 | `a0b67af2a35cfa7283c356f44d87c7bba10639f7ae84aba624af1f8639a226c0` |
| `composer.lock` | 309089 | `f1c2f6225bafcb339e6ae8882429ea2ff8b6dddbe04d13a2e3554706f4e56f0f` |
| `config/app.php` | 4313 | `9ee5e7358f2a685d54073fd2ee8b7c9788cf6866c079adb065ce9ac11884d56e` |
| `config/auth.php` | 3970 | `6d8565d96be071a6d6ef2ab3a823fd6bbe516ee1c4873e16176241e10de8d22e` |
| `config/cache.php` | 4151 | `4497c0f6f3b20a1d49b600d2c4dcf65123676e3ecc205e64579601eeec2aeca5` |
| `config/database.php` | 795 | `235a7a02e844b5cc8f612dfe8220c0af7a8c0f8a620dbe27f9c6973efc043f40` |
| `config/filesystems.php` | 2533 | `167dd51e6b13f1b338b703f8cb2b49828b98289306208915ec9dac347471c64d` |
| `config/livewire.php` | 36 | `44c1432f035958615684cbe529a70440f1557b4b75d2ea111d1ace7535859535` |
| `config/local_access.php` | 261 | `a3fa34284602365dd176bd71887ddfdeb57969af955474c123af9d8ebc7f3b00` |
| `config/logging.php` | 4340 | `299ec1ba5b5a803c8e20f666ae7628e442e856cc2ff7ac9e2adb17b97e8ad63b` |
| `config/mail.php` | 3631 | `c43ff49a31c5f32ce21eb7159f2a4b3cd2f4074eaed5838d265646dbfedd3474` |
| `config/queue.php` | 4117 | `034864c20f04d629fe2720a40ba03997ea91935587818550840f40923bebb3f5` |
| `config/services.php` | 1039 | `8258c4487eb1d73a97e569eb0e411e3f25368044812df4cba807860432be1d92` |
| `config/session.php` | 8187 | `a48d7dfc16b9ea55ce1aad6f345381778fe253ad31e4301eb68cfa14e57a7800` |
| `config/sijai.php` | 311 | `ea174937d9f6706ae7e80bbf5d2781ac8b9acd95f243874068838895a21beb13` |
| `database/migrations/2026_11_08_000001_create_sijai_simplified_tables.php` | 5590 | `30ff49b485d17428181ace1068608e3c5f91f880e30614a326a26eea1fcaebcf` |
| `database/README.md` | 433 | `16a8be60dd9bb524f49b602b855bc283e412754a586b70606334ec366a2085d0` |
| `database/seeders/DatabaseSeeder.php` | 19586 | `cd033443de7d1361d9977d3e7d84677727dbf6e6eb51768a3045932bc9e0535a` |
| `docs/01-kondisi-awal.md` | 3817 | `d9e948be7d152ec227af966c137637e7581256644661c86d1bfbcb0c7f653921` |
| `docs/02-arsitektur-awal.md` | 66528 | `0dde8717e3bc91f7e65fd83da5b90756116c3c446f2d3a0dda7d49698cd67d8c` |
| `docs/03-entitas-dan-relasi.md` | 70448 | `74b23a1fea5a7d39d10b7136142e0638477eb9a68fdffa9ba6e1b587f9727667` |
| `docs/04-tata-kelola-data.md` | 108801 | `12b791ef4959c491d93dd39ed2414427a2b5737067f133fc41b0a5d7f3a36cfb` |
| `docs/05-roadmap.md` | 51446 | `a5d9c3aa0fa0305d36e69fa12c1df53048361491a161cdd96946b8ebde4118ba` |
| `docs/06-keputusan-bisnis.md` | 413954 | `8fdde0c7a059a80a88bf1cc685808b89a233ee65c83934bb17f5927e5762c7f5` |
| `docs/07-checklist-hosting-cpanel.md` | 40501 | `67e0e8fbc32afa61c1803e7a405d522e90772e05cebfc1edbdd6501c59615cc1` |
| `docs/08-audit-konsistensi-dokumentasi.md` | 215004 | `db4040cea732057513c2e02a456c3f35d2b8e54ad52cbea81c30957de4a4b14c` |
| `docs/09-perencanaan-kapasitas.md` | 43275 | `983c8b13160ab76037dea06f7347b845e4e138a18e3182397421ab7f0a32be18` |
| `docs/10-baseline-konsolidasi-kb01-kb18.md` | 90888 | `a7367cab71d2cedac1d067283547a2d711616de4e2055be4b39ecce96c279976` |
| `docs/11-audit-baseline-data-historis.md` | 21075 | `acb17809f735ac18703f52801e719f8aa348cde292b17fafb13d4fd6574dccbe` |
| `docs/12-kontrak-mvp-pra-coding.md` | 12274 | `48da75e95ab9fc3accb6305d2488fc93fca0bfbb8359a72e7b85253973e18d5f` |
| `docs/13-backlog-mvp-terprioritas.md` | 12171 | `889b1579d30c578413dcd793b48154a80778b4fa5fcf87fcf169b9da526c5926` |
| `docs/14-kontrak-teknis-fondasi-lokal.md` | 25416 | `474b86d9f011ff9e97bc0230b589e93962d4607da446cb7791300e6c74f173c2` |
| `docs/15-review-paket-prototipe-dan-kesiapan-g1.md` | 14059 | `826e182165c9b93a2aca3ea5d28af3ae99cdae9f952108d5e97240c01eaf29c3` |
| `docs/16-pemasangan-fondasi-lokal-g1a.md` | 4761 | `522199197f4283413a9891e2d82ff8c0c84f40c29b8ba03d45643120af07ad87` |
| `docs/17-laporan-hasil-g1a.md` | 10747 | `0221c8db470c5971e779553610627b9b7430e03050118001a5b79b8b678a244a` |
| `docs/18-manifest-perubahan-g1a.md` | 8787 | `fa96d7d60d6ae33ccea40fbbee0f0f25c93a5f7bedc75ecd3438c7eb5dfe45f8` |
| `docs/19-kontrak-fondasi-g1b1.md` | 6016 | `2130e9aa5bbda9e0e65ecaa3366727845efc490774a904a917920ca74385cb37` |
| `docs/20-operasi-mysql-lokal-g1b1.md` | 7609 | `f71890e970172c95280c2b191c65fa0dc148f5403415fffbcf9d04aac890ee25` |
| `docs/21-laporan-hasil-g1b1.md` | 11174 | `4d7a704895cc585509950fef6ac85c93c9a109abdb045336ebd222ecf6ec162f` |
| `docs/22-manifest-perubahan-g1b1.md` | 8175 | `cd0e8bc70601fac3500b40cb7c26ab4a51185543c808b85fb0a29579788e5bae` |
| `docs/23-kontrak-registrasi-lokal-g1b2.md` | 6348 | `83ff266a98bfa99db50b484e1ec9e927b5517820c70fbeb9504c699e56d6008e` |
| `docs/24-model-dan-alur-registrasi-g1b2.md` | 7345 | `c48d567300af9cab04c7c2ebd76e323e6d380dac09459cfec5bd5b7d3bab69d1` |
| `docs/25-laporan-hasil-g1b2.md` | 10868 | `e573487d26f0b06215131c1eb6a807097eeb54d4df96c7c845b785da5aee5e09` |
| `docs/26-manifest-perubahan-g1b2.md` | 6884 | `fe864c72c4926159f2b64f49063397386c1f2285d93a219be81b45869c2b28ac` |
| `docs/27-kontrak-autentikasi-audit-lokal-g1b31.md` | 7298 | `3e38d26bcda48958fbb1bb066736d71c136992a4202c6f0f5d4d3852688c87e0` |
| `docs/28-rancangan-salinan-audit-independen.md` | 6291 | `75c0d77abd539296f8c935d720404372afd23c3d4496f12ab6d20e49043b2843` |
| `docs/29-operasi-autentikasi-lokal-g1b31.md` | 5753 | `64f4cef5c4787a245e46c6f86fa94a70a6707b014ca3657ec32512801ae83491` |
| `docs/30-laporan-hasil-g1b31.md` | 12223 | `0fd7d3d66cdc03775a1ac4bd42bdf26681161e1f451b6dd99fff821bd561fff0` |
| `docs/31-manifest-perubahan-g1b31.md` | 8614 | `a28712f0c6543dcec5ac7cd6ee5ecdd1cb8bdadf495254e8ecf423cc9409ae3d` |
| `docs/32-kontrak-antarmuka-registrasi-g1b32.md` | 7858 | `f9714452b861316e418d2dffc5ef4244b6017b2f2bec9f4645be59afa7d933ab` |
| `docs/33-panduan-alur-registrasi-g1b32.md` | 4800 | `2aca908de166f7f2913eb9f505037cbb4ff964aa63ab425aee07b8ccfb077c10` |
| `docs/34-laporan-hasil-g1b32.md` | 11295 | `67792f16d198e2805ec3ed669545373044f5a62ec03d09df01cc5031daef7f3c` |
| `docs/35-manifest-perubahan-g1b32.md` | 7640 | `fe426c796298757bb792993dd067699e6d410ddecb304327537a26bc077aab95` |
| `docs/36-kontrak-pengesahan-awal-c2-g1b33.md` | 9369 | `63f8d2bc3423c90c6a9856c9b04af6c4244f9a81a08490a301e20ff80fcce592` |
| `docs/37-matriks-kewenangan-c2-g1b33.md` | 3784 | `954123a893c4a54d2944fdc9959cf5afe67dd63010b0e027ca0028fbdcb26f3d` |
| `docs/38-panduan-pengesahan-awal-g1b33.md` | 4734 | `c6150a3fb50c044d9277ca9fa643bb70e2c45441f7e17cfd97b3cd8bc2d32645` |
| `docs/39-laporan-hasil-g1b33.md` | 8824 | `ab593956fea187a55e439da5eb42291405655ee3794bf5715fe57c7f4aa83547` |
| `docs/40-manifest-perubahan-g1b33.md` | 6704 | `d01b2eef8d1799a5563449508d368a2e2e994fce13e3c8107bfb80ffe2b9a96c` |
| `docs/41-kontrak-verifikasi-field-g1b34.md` | 4541 | `4a4d587676d93beee1e8968b72569a2557fe379cd0fdae09d2e77068f583b92e` |
| `docs/42-matriks-kewenangan-field-g1b34.md` | 2673 | `d3e7e45397a6cc79f380655ae91e6935fa0a7a422f3abf28c05c763bf395524d` |
| `docs/43-panduan-verifikasi-field-g1b34.md` | 1155 | `5989175115fd5c3fcbefdb4374cd65a31e69ad0f1be0679415748092ce1500d9` |
| `docs/44-laporan-hasil-g1b34.md` | 2710 | `5b404a323ed903c6061a51b53ed06b8e2b26c3396a1b397af963f110841b46bb` |
| `docs/45-manifest-perubahan-g1b34.md` | 2006 | `e564628d8662b9cddd5dacac26b0b6f58a4561a5ed5eaef6dacc7e29cd643422` |
| `docs/46-panduan-dan-laporan-mvp-terpadu.md` | 12970 | `1b47c2c853a93264abf3bba18849b3e016efc0ada91124648aad309267981393` |
| `docs/48-dokumen-evaluasi-pengguna-mvp.md` | 15209 | `4f4a005311ae68acbbeeda91f5e1b1e90bb9adf046f67233b48e9527c9828259` |
| `docs/49-laporan-profiling-dan-kualitas-data-historis.md` | 11662 | `4d84159a3460b7dde3fe0f2809693074d80a7a1bcae0335ecde5c211b43143c9` |
| `docs/50-katalog-aturan-pembersihan-dan-pencocokan.md` | 19286 | `fb2339eb36167f5086382cea11ad4967cd6fab904e3f5d730380960208c7d6e5` |
| `docs/51-daftar-masalah-dan-pelengkapan-lapangan.md` | 12711 | `ef97f87a2dc3a4d890d798e1c715d5ebdfe7948003f06e243f0a4b0c996e7761` |
| `docs/52-panduan-operasional-persiapan-impor.md` | 8838 | `7c01e428817dc56cc980c1e125cded8cc4a71afb9b665052a53304cf1fdd34d4` |
| `docs/53-laporan-perbaikan-fasilitas-impor-historis.md` | 9312 | `f8188be48b50b9221838a3ad03d9fcb4cba59432069a7a9743313d858087ba21` |
| `docs/bukti-g1b32/01-daftar-registri.jpg` | 46166 | `21cd46d2cd7e45886bc445b6c7013f0f82f4905d8da33c5449f58469f805b9bb` |
| `docs/bukti-g1b32/02-formulir-desktop.jpg` | 176632 | `5328eb3fc835b20730a53b9038addccda67f0f6aaf7e677121c6df314961f144` |
| `docs/bukti-g1b32/03-formulir-mobile.jpg` | 145449 | `56c866678a56f6154ce0d1cca3ef009ec2a5f660e6ae404543cfd85eec2b7c1e` |
| `docs/bukti-g1b32/04-draf-tersimpan.jpg` | 97949 | `1d3b88d3baf9c8412a190f2a28176a4a98b006aca45cb8e6932d12000683a892` |
| `docs/bukti-g1b32/05-pengajuan-ulang.jpg` | 129205 | `1efa74a8244ac7c1ba853e44e9c4ebe8e02a90aad22d892982d5c6663432feda` |
| `docs/bukti-g1b32/06-validasi-pihak.jpg` | 138258 | `b028b22630976881002c24f0a584449b14e8c8905baf638a798d9f1b7e1922c1` |
| `docs/bukti-g1b33/01-pemeriksaan-c2.jpg` | 122362 | `e52686c2b6fe518e0ede13cc747ee42976c32b11c28e5a7b593d543b50f03a12` |
| `docs/bukti-g1b33/02-induk-disahkan.jpg` | 107985 | `02ce0440d668feedb7cc779d81c965c186e2dd3e1cf04519588a2337adde0314` |
| `docs/kamus-data-mvp-kb09.md` | 128014 | `0a2c98c1994627ede0984197baee7dc2455c5af1fc89d9bb360595e6874da26a` |
| `docs/matriks-kewenangan-mvp-kb09.md` | 117116 | `f65d3bc2136fcedcf4d7d8ee7c90bfe3ba47e4e29167a07090e251288cdabdd4` |
| `docs/README.md` | 47465 | `14de55db51b42ab26ad59b82564c1aae04234f89288b738f48c539a8215c7451` |
| `docs/screenshots/00-ruang-kerja-dan-panduan-peran.png` | 111652 | `439d125b4de56575081f3e40b48d6a71bf140b11ee719a5a2cdbdd82154c40cf` |
| `docs/screenshots/01-registri-draf-a3.png` | 46135 | `9353ef0da30eaba6eaf7f9946b9b14f3b318090d804580a5d7d8e8f7cefb194a` |
| `docs/screenshots/02-tinjau-bukti-b1-dan-ajukan.png` | 88838 | `d665edeb66b98ecdfb14154245d49a0e5a4a38b176801083d7f299b8155e7da1` |
| `docs/screenshots/03-pengesahan-awal-c2.png` | 83641 | `8e882b876e3afe83a71988c523e24a0eb4abafff5d7572b79924f219552f2eda` |
| `docs/screenshots/04-verifikasi-field-efektif.png` | 210014 | `fb9fb50e3a3bfd66bf9830880ee2dcd4d5cc56f0befe40aa1f7e0b4e10fff91b` |
| `docs/screenshots/05-koreksi-k2-dan-penahanan-k4.png` | 245889 | `cbedf7eb2c70f01fbe5a9251f338b451a8eee95d7cdbf7688e50bd500eb0bda6` |
| `docs/screenshots/06-profil-industri-pangan-terverifikasi.png` | 123838 | `87ec1b4addfe2583a8ffddbbdfaf13cec3b9b28af4de712f50274dd2614e6c21` |
| `docs/screenshots/07-dashboard-dan-monitoring-dt007.png` | 255299 | `71ca8bf3ccfe3b27782cc40db9a2177d1f357efd9430c303ed1a1cffb2e3b32c` |
| `docs/screenshots/08-administrasi-tata-kelola.png` | 352095 | `a8306b8e8cc73f4375e52afbdaf567252e202660fa5c987a6f0075e9b549c913` |
| `lang/id/validation.php` | 3723 | `9beb4bea314adf3ab222ec96ee0b6ca196e29bc879394273f76840cc3d38808e` |
| `package-lock.json` | 71793 | `7031fb3458c2830a32f032228cee038401b731691137d0cebc7a32968fd763b6` |
| `package.json` | 347 | `eef32216de3a080ff96141748bd67e359b58dc9180f7377a1b4d980cd57c89a9` |
| `phpunit.xml` | 1123 | `9adb8b6f60d9667ac3618eed57f24d7b19b4c0e40802ac3e2c9217665ab02736` |
| `public/.htaccess` | 740 | `b7e379c77639fd56144947dbae84c84eb466d9c686ea81f2f013ae85421da923` |
| `public/build/assets/app-QO3kY-PP.css` | 26621 | `038aea4a89794df92231894ffa0e496858c699cf9c749549c783244a1619529b` |
| `public/build/manifest.json` | 188 | `67c8bc035488b4c45fb4395172a7465e9ba787f1b689fdfff85de2cfa052d206` |
| `public/favicon.ico` | 0 | `e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855` |
| `public/index.php` | 543 | `eba77cba39695b6bd091fe5211d481f7ebb2ce2d8d26230b5a609465d0a4aff9` |
| `public/robots.txt` | 24 | `e5c4b84484ee4216e9373be99380320c25dd94805f99f0a805846f087636553f` |
| `README.md` | 9764 | `eec1e5c90fb23aaee2cd2f677c38e7951383c85102af2f3dc238927ee31ae49a` |
| `resources/css/app.css` | 356 | `2e8405fd7c43a0f7b0adcd2a7e3e89f94f8811b3647a75f63d7e58cc1a897661` |
| `resources/views/auth/login.blade.php` | 6143 | `ef777f92f2500cb7dc9904ed90b3955aa9c47fa50a4518db4e492c0eb83b2dca` |
| `resources/views/dashboard/index.blade.php` | 12896 | `6c25543e5e4c4094c565e52a3737ce266bc3a89fa1f5557accb59f57373d1685` |
| `resources/views/layouts/app.blade.php` | 8555 | `3db06f8126a34c143f7b8e8f7d76315fc57bef1f12120a93cf8f8589e4b4ebff` |
| `resources/views/pembersihan/index.blade.php` | 13511 | `96f743775701301971b5c0b0ea334ca3db957d1eab2422c3a8e21c9fa8c376ee` |
| `resources/views/pengguna/index.blade.php` | 8108 | `4df8e62cd451436889dc5acb5a2b922d425d5290a8ec78ff12dc45e1ab235886` |
| `resources/views/umkm/create.blade.php` | 15221 | `504c6a21bd37ae69cf431eae7a0ec923134b13232dec93639d65d7b82c7b870e` |
| `resources/views/umkm/edit.blade.php` | 10620 | `a27f8c1215751a521f113a25dbe265f76c89c0681cafb42240a467ed21c11327` |
| `resources/views/umkm/index.blade.php` | 10947 | `a77c0c73df1a4d9e688771e75bf4949ac97c46716ff85437091aabbd00341db9` |
| `resources/views/umkm/show.blade.php` | 14842 | `227f6bb1feab72b03b54012ce9a9aa89c9321ec5dc56dbc90aa66094bfc31828` |
| `routes/console.php` | 210 | `9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa` |
| `routes/web.php` | 2675 | `cba68dfc4806d3e0211e6cd85f4a48ee39535ee442f2a038f9c9ee7463c433a1` |
| `storage/app/.gitignore` | 33 | `993b9e3709d7b5189da331725d1169d79e561a509db2490b722b525073d2d976` |
| `storage/app/private/.gitignore` | 14 | `240a3e0d37d2e86b614063f5347eb02d4f99ca6c254de6b82871ff8d95532a7d` |
| `storage/app/public/.gitignore` | 14 | `240a3e0d37d2e86b614063f5347eb02d4f99ca6c254de6b82871ff8d95532a7d` |
| `storage/framework/.gitignore` | 119 | `2d452d65596636197757afa17df52331c84da7bb74ee0f3462fd5be4eb6afdc6` |
| `storage/framework/testing/.gitignore` | 14 | `240a3e0d37d2e86b614063f5347eb02d4f99ca6c254de6b82871ff8d95532a7d` |
| `tests/Feature/SimplifiedSystemTest.php` | 6263 | `f05706882bb00759b82d5b48378062d0a782c6296bfc77414f6d826262e36c8e` |
| `tests/TestCase.php` | 142 | `c7c209f5579c42647c1f7b2a79ac828e8b54ac62a98442045a6e94fa2c0d0ebc` |
| `tools/build-mvp-zip.ps1` | 2145 | `8d3d12190ee7b3837ed8ceb42fd468cbfa805b478dfd19ec902d205e9483ab88` |
| `tools/lihat-atau-atur-sandi-uat.ps1` | 2406 | `4d043c12c83f2f9aba03ca83df29e804bbdf0725e3ecd96eb5aa17b980972570` |
| `tools/start-local-mysql.ps1` | 2696 | `0149bdd8c33de69f08c2c669a0fc48d6d2cdd5b2105455ba96a97a0756a1b3b8` |
| `tools/stop-local-mysql.ps1` | 1207 | `c7ab7258ef86fe24726dd7677fd962f820d4bf562197a05df5c41ca9f4e10f13` |
| `vite.config.js` | 413 | `d286deb10f38a05480a7198687df8c22d336c45d7a4f1bdf6e2d2e3241774e8a` |
