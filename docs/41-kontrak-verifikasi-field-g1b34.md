# Kontrak verifikasi field lokal G1-B3.4

Tanggal **7 November 2026**. Dasar: persetujuan terbatas pemilik G1-B3.4 pada lampiran chat. Baseline sampai B3.3 diterima dengan catatan MySQL/HTTP/browser belum diverifikasi independen. Pekerjaan memakai ulang autentikasi Laravel, SessionActor, AuthorizationService, penetapan pemilik B1, Registri Induk/C2 dan audit/outbox. Tidak mengganti fondasi atau keputusan KB/DT.

## Batas subset lokal

Verifikasi nilai biasa pada kode field sintetis yang disiapkan server, untuk Unit yang sama pada SSOT. Jenis nilai tahap ini teks sintetis terbatas, bukan editor bebas semua atribut/record A3 atau seluruh profil pangan. Nilai field yang disahkan tidak menulis ulang snapshot registrasi maupun keputusan C2 final. Status induk, field dan sektor tetap terpisah. NIB tidak diwajibkan sebagai syarat universal field.

Pemasok memberikan informasi, pengusul mempunyai PROPOSE_CHANGE, pemeriksa bukti mempunyai REVIEW_EVIDENCE/VIEW_EVIDENCE, sedangkan pengesah field mempunyai APPROVE_FIELD dari organisasi pemilik aktif. Pembuat/pemasok tidak otomatis pengesah. Satu orang boleh menjalankan penilaian dan pengesahan bila masing-masing mandatnya sah; tidak mewajibkan dua tanda tangan untuk perubahan biasa.

Setiap kode field/cakupan/objek/waktu harus mempunyai tepat satu pemilik aktif dan definisi field berlaku. Penetapan irisan memakai OwnershipRegistry serta trigger B1, tanpa prioritas otomatis admin atau cakupan paling khusus. Pengesahan memeriksa ulang organisasi pemilik, definisi, mandat, lingkup wilayah/sektor/objek, tujuan, sensitivitas dan masa. D1 bukan hak sahkan; M1 tidak menyilangkan batas asal izin.

## Usulan, bukti dan keputusan

Konteks field/Unit/tujuan disiapkan server; browser tidak memilih aktor, OPD, mandat atau waktu keputusan. Pengajuan nilai membuat usulan beridentitas dan versi, bukan langsung menimpa nilai resmi. Katalog bukti sintetis per definisi field/tujuan berversi/efektif harus tepat satu yang sah. Tidak tersedia/kosong/ambigu berarti **BELUM DAPAT DINILAI**, bukan lulus.

Bukti hanya metadata sintetis yang sudah ada, diperiksa atas Unit, tujuan, jenis, klaim, versi usulan/katalog dan masa. Tidak ada unggahan/isi dokumen nyata. Penilaian bukti bukan keputusan nilai. Nilai baru baru menjadi calon nilai resmi setelah satu pengesah field pemilik memutus dengan alasan terstruktur. Penolakan dan versi lama tetap dapat ditelusuri.

## Waktu dan V2

Waktu keputusan berasal dari server. Tanggal efektif nilai adalah atribut bisnis yang diperiksa server, berbeda dari tanggal keputusan. Tanpa tanggal efektif khusus, gunakan waktu keputusan; tanggal mendatang tidak dimajukan. Pembetulan historis/backdating dan seluruh K1–K4 tidak dibangun pada tahap ini.

Pembacaan nilai resmi memilih keputusan versi terbaru yang telah efektif, bukan usulan atau keputusan yang masih mendatang. Nilai yang sudah kedaluwarsa tidak memulihkan nilai lama yang telah tergantikan. Usulan baru tidak otomatis membatalkan nilai resmi yang masih sah. Riwayat keputusan/efektif dipertahankan.

Sengketa, pencabutan atau risiko material memakai pembatasan berjejak oleh pemilik berwenang. Pembacaan ditahan selama pembatasan aktif; nilai lama tidak selalu boleh dipakai hanya karena masih tersimpan. Pembukaan pembatasan bukan pengesahan ulang atau pemulihan nilai yang kedaluwarsa. Ini kontrol lokal menahan penggunaan, bukan modul sengketa/koreksi historis K1–K4 penuh atau penetapan SOP risiko resmi.

## Akses, versi dan audit

Setiap operasi memeriksa izin di server melalui sesi Laravel; nilai/riwayat/status sensitif tidak diproyeksikan jika hak baca/sensitivitas tidak cukup. Halaman tidak membawa isi/checksum dokumen atau identitas mandat tersembunyi. Tidak ada unduh/ekspor E1; konflik E1–KB-11 tetap terbuka.

Versi usulan dan versi aliran field diperiksa sebelum keputusan. Dua usulan berdasarkan versi resmi yang sama tidak boleh menghasilkan keputusan bertentangan lewat balapan proses. ID permintaan memberi idempotensi; isi berbeda dengan ID sama ditolak. Keputusan, rujukan mandat/pemilik/bukti, versi, riwayat dan audit/outbox wajib atomik. Audit wajib gagal berarti rollback atau hasil ditahan, bukan sukses tanpa jejak.

Katalog/OPD/akun/masa demo sepenuhnya fiktif, bukan standar dokumen atau penetapan pemerintah daerah. Katalog/hukum/JRA/retensi/pilot/mandat nyata, hosting dan verifikasi independen tetap terbuka. Tidak ada Excel historis, OSS/Dukcapil, PDN/cPanel/produksi, audit eksternal, pangan lengkap, ekspor atau deployment. Hentikan pada B3.4.
