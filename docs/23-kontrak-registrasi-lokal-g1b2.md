# Kontrak pelaksanaan registrasi lokal G1-B2

Tanggal **6 November 2026**. Dasar: persetujuan terbatas pemilik produk berjudul **PERSETUJUAN CODING G1-B2 — SIJAI UMKM**. G1-A dan G1-B1 diterima sebagai baseline; pekerjaan ini menambah registrasi A3 tanpa membangun ulang fondasi. Hasil aktual ada pada [laporan 25](25-laporan-hasil-g1b2.md).

## Ruang lingkup dan batas

Diizinkan: migrasi domain pada dua database MySQL lokal khusus, identitas internal dan relasi pihak/usaha/lokasi/kegiatan, draf A3, evaluasi pengajuan, pengajuan/pemeriksaan/pengembalian/pengajuan ulang, kandidat duplikasi, mandat server, audit dan pengujian sintetis. Tidak memasang paket baru.

Autentikasi sesi petugas belum tersedia pada baseline. Sesuai alternatif yang dinyatakan pemilik, implementasi **hanya layanan domain dan tes otomatis**. Tidak membuat login, rute/API/formulir/komponen Livewire bisnis. Parameter aktor pada layanan adalah identitas dari pemanggil server tepercaya di tes, bukan input browser. Sebelum antarmuka diaktifkan, harus ada autentikasi serta pengikatan aktor server, pengujian pemalsuan identitas dan izin tahap terkait.

Tetap dilarang: pengesahan induk C2/field operasional, koreksi penuh K1–K4, impor/merge, data pribadi atau historis nyata, server PDN/cPanel/produksi, OSS/Dukcapil, ekspor/unduh E1, program/bantuan/marketplace/pembayaran dan deployment. G1-B3, G5 dan G7 belum diizinkan. Izin B2 tidak menetapkan petugas, OPD, dokumen wajib, wilayah pilot atau hak nyata.

## Keputusan yang dipertahankan

KB-01–KB-18 dan lima model DT tetap: DT-003 B A3+B1+C2; DT-005 C+F+H2; DT-007 C; DT-009 C+B2+V2+K2; DT-011 C+D1+M1+E1. Rumusan sumber pada dokumen 06 tidak diubah. E1 tetap dipilih dan tetap berbenturan dengan pemisahan izin KB-11; tidak menggantinya dengan E2 atau menganggap konflik selesai.

Cabang yang dinyatakan bagian induk disimpan sebagai lokasi Unit yang sama, dengan referensi klaim keterkaitan sintetis. Tidak otomatis membuat Unit per cabang, merek atau pemilik. Satu pihak dapat terkait beberapa Unit; satu Unit dapat terkait beberapa pihak melalui peran dan masa hubungan. NIK/NIB bukan kunci utama dan NIB tidak wajib.

## Batas A3 dan pengajuan B1

Draf baru wajib memiliki penanda/nama, minimal satu pihak berjenis jelas dan peran tercatat, minimal satu lokasi yang dapat dibedakan, minimal satu kegiatan dikenali, sumber, pembuat berwenang serta waktu server. Alamat domisili pihak tidak mengisi lokasi usaha. ID internal dibuat server; data draf yang tidak memenuhi A3 tidak disimpan sebagian.

Kelengkapan pengajuan dihitung, bukan status tersimpan “Siap Diajukan”. Standar pengajuan nyata belum ditetapkan. Tes menggunakan katalog sintetis yang eksplisit, berversi, berlaku dan disetujui untuk simulasi. Katalog ini memetakan kelompok field, peran hubungan serta klaim/bukti uji. Tidak menjadi SOP/dokumen wajib resmi.

Katalog aturan pengajuan yang belum disetujui, kosong, tidak lengkap atau mencoba mewajibkan NIB menghasilkan **UNKNOWN / BELUM DAPAT DINILAI**; tidak lulus dari daftar kosong. Konfigurasi kewenangan pencatatan yang tidak sah/tidak lengkap menolak pencatatan. Draf A3 boleh disimpan bila konfigurasi kewenangan sah meskipun standar pengajuan belum sah.

Penilaian bukti sintetis memerlukan mandat REVIEW_EVIDENCE untuk field klaim yang dipilih katalog server. Metadata dokumen harus sesuai Unit, tujuan, jenis bukti uji, checksum dan waktu; hasil penilaian dicatat per klaim dan versi draf. NIB yang dicatat tidak dianggap bukti formal. Revisi data memerlukan penilaian klaim versi baru; riwayat lama tetap ada. Ini simulasi kesiapan pengajuan, bukan pengesahan nilai atau pemeriksaan dokumen nyata.

## Kewenangan, transaksi dan duplikasi

Kelompok field teknis registrasi Unit: nama, sumber, NIB, pihak/hubungan, lokasi, kegiatan dan status alur. ID field serta definisi/sensitivitas/mandat dimuat dari konfigurasi, tanpa nama OPD yang ditanam dalam kode. Kelompok ini **bukan katalog field operasional final**, dan tidak memberi hak mengubah identitas pihak yang sudah dipakai bersama. Penambahan pihak baru berbeda dari penggunaan kembali referensi pihak yang harus mempunyai hak baca dari Unit terkait.

CREATE_DRAFT, EDIT_DRAFT, SUBMIT_REGISTRATION dan REVIEW_REGISTRATION adalah kode tindakan teknis fase ini; VIEW_RECORD dan REVIEW_EVIDENCE memakai pemeriksaan yang sama. Kode bukan hak nyata atau perubahan 19 tindakan konseptual DT-011. Pemanggil tidak dapat memilih field klaim lewat payload. Pengubahan draf memeriksa setiap kelompok yang diubah; satu izin tidak dipakai untuk kelompok lain. Persetujuan field/C2 tetap tidak tersedia pada alur ini.

Seluruh mutasi kritis memakai transaksi MySQL: versi/revisi/relasi, riwayat, jejak mandat, event audit dan outbox berhasil bersama atau batal bersama. Penolakan otorisasi dicatat setelah transaksi bisnis dibatalkan. Event tidak berisi nilai bisnis mentah, isi dokumen atau kredensial. Outbox tetap lokal/pending; salinan audit independen belum dibangun.

Kandidat tahap ini berdasarkan **nama yang dinormalisasi**: perbedaan huruf besar, spasi dan tanda baca. Ini pencarian kandidat awal, bukan kepastian duplikat atau deteksi menyeluruh. Tidak mencocokkan identitas eksternal, menebak kesamaan orang, menggabungkan atau menghapus otomatis. Kandidat terlihat hanya bila hak baca kelompok relevan mencakup Unit kandidat; bila tidak, hasil umum BELUM DAPAT DINILAI tanpa ID/jumlah tersembunyi. Petugas bermandat dapat mencatat hasil pemeriksaan DISTINCT atau UNRESOLVED beserta kode alasan sintetis. Kandidat baru atau revisi terkait membatalkan kecukupan pemeriksaan lama melalui fingerprint, tanpa menghapusnya.

Kunci transaksi per permintaan dan per nama, penguncian baris serta nomor versi melindungi dari pengajuan ganda. ID permintaan yang sama hanya diputar ulang untuk konteks identik dengan pemeriksaan hak terkini; konteks berbeda ditolak. Versi usang ditolak dan harus dibaca ulang. Batas ini tidak diklaim sebagai uji beban skala kabupaten.

## Syarat penyerahan

Seluruh 20 kriteria persetujuan dipetakan ke bukti pada laporan 25. Regresi B1 diperiksa sebelum perubahan, kemudian diuji kembali bersama B2. Migrasi destruktif hanya database test, bukan dev. Sumber baru/berubah, dokumen dan manifest SHA-256 dikemas dalam satu ZIP terverifikasi, tanpa rahasia/dependensi/data MySQL/runtime/arsip lama.
