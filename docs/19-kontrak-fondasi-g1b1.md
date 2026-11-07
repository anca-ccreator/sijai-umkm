# Kontrak pelaksanaan fondasi database dan domain G1-B1

**Rincian implementasi akhir:** enam migrasi, termasuk trigger MySQL penolak irisan pemilik dan pelindung riwayat append-only. D1 menggunakan katalog organisasi, bukan grant per akun. Lihat [hasil G1-B1](21-laporan-hasil-g1b1.md) untuk bukti/keterbatasan; kontrak ini tidak mengaktifkan hak organisasi nyata.

Tanggal 6 November 2026. Pemilik produk menyetujui G1-B1 secara eksplisit dan menerima G1-A sebagai baseline. Hanya fondasi lokal/sintetis; G1-B2/B3, G5/G7 dan produksi belum diizinkan. Model KB-01–18 dan DT-003/005/007/009/011 tetap. E1/KB-11 terbuka; ekspor/unduh tidak diaktifkan.

## Kondisi awal dan pilihan teknis

Seluruh 73 entri ZIP G1-A cocok dengan sumber; tidak ditemukan tambahan sumber aplikasi di luar manifest. Laravel/Livewire/Tailwind dipertahankan. Tidak membuat ulang aplikasi atau memasang dependensi PHP/npm baru.

MySQL lokal belum tersedia; XAMPP adalah MariaDB. Dalam izin fondasi database ini digunakan distribusi ZIP resmi MySQL 8.4 LTS pada direktori khusus pengguna, tanpa mengganti XAMPP/Laragon, memasang service global atau mengubah PATH. Instance hanya loopback pada port khusus, dengan dua database bernama khusus SIJAI UMKM untuk pengembangan dan pengujian. Versi/bin/hash aktual serta pengaman dicatat dalam laporan hasil, bukan diasumsikan dari nama folder.

Kredensial acak hanya disimpan lokal di luar sumber atau pada .env/.env.testing yang diabaikan. Akun migrator dan runtime terpisah, dibatasi database masing-masing; runtime tidak memperoleh hak DROP, GRANT atau ubah/hapus audit. Tidak memakai akun root dari aplikasi. Konfigurasi aplikasi menolak host nonloopback, database di luar daftar khusus, URL koneksi, lingkungan produksi, MariaDB/SQLite dan aktivasi tanpa flag lokal eksplisit.

## Batas skema fondasi

Migrasi membentuk identitas akun internal/organisasi sintetis, keterkaitan akun–organisasi/peran, PIHAK/ORANG/BADAN_USAHA/UNIT_USAHA dan hubungan M:N minimum, katalog field stabil dengan definisi berversi, cakupan terkonfigurasi, penetapan pemilik, mandat/D1/larangan, metadata dokumen sintetis, catatan keputusan uji fondasi, event audit dan niat kirim salinan.

Identitas internal memakai ULID, yaitu ID aplikasi yang tidak mengandung NIK/NIB/nama. Akun berbeda Orang dan Unit. Semua referensi pengujian fiktif. Tidak membuat NIK/NIB wajib, akun pelaku, A3/B1/C2 operasional, profil pangan, mesin skala, impor atau program. Catatan keputusan fondasi bukan pengesahan registri/field bisnis nyata dan tidak mengubah status resmi UMKM.

## Cakupan, waktu dan pemilik

Cakupan wilayah/sektor berupa simpul hierarki fiktif dan hubungan leluhur yang dikonfigurasi. Ini representasi teknis, bukan penetapan kode wilayah/sektor resmi. Perbandingan memakai hubungan terdaftar, bukan kemiripan nama/prefix. Entitas harus sesuai katalog; objek berupa ID internal atau tanda semua objek yang diberikan eksplisit pada mandat.

Rentang teknis menggunakan awal inklusif dan akhir eksklusif, [awal, akhir), UTC dengan ketelitian mikrodetik untuk uji. Akhir kosong berarti belum ada batas akhir, bukan hak permanen yang mengabaikan pencabutan. Konvensi uji tidak menutup kebijakan waktu layanan DT-034.

Penetapan pemilik memakai kunci katalog field stabil, bukan versi definisi yang dapat menghasilkan dua pemilik. Seluruh penulisan penetapan melalui layanan yang mengunci baris katalog field dengan transaksi InnoDB lalu membaca penetapan secara locking read. Irisan waktu/wilayah/sektor/objek ditolak, termasuk cakupan umum dengan anak. Tidak memilih pemilik “paling khusus” atau admin sebagai pemutus. Pembaca kewenangan tetap menolak bila data tidak konsisten memiliki lebih dari satu pemilik. Akses SQL administratif di luar layanan bukan jalur bisnis yang disetujui; fondasi ini tidak diklaim kebal administrator database.

## Otorisasi dan audit

Server mengambil konteks pengguna/akun, keterkaitan OPD, objek/field/sensitivitas, peran dan seluruh mandat aktif dari database. Peran/tindakan yang tidak tercatat ditolak. Semua syarat satu izin harus cocok; M1 tidak menyilangkan field/wilayah/tujuan antarizin. D1 hanya dari katalog dasar sah sintetis dan tidak memberi pengesahan/sensitif otomatis. Larangan eksplisit dan pembuat mengesahkan awal sendiri mengalahkan gabungan izin. Field biasa tetap satu pengesah berwenang, dengan OPD pemilik aktif.

Layanan keputusan sintetis internal tidak mempunyai rute bisnis/login/UI/API baru. Pengesahan awal hanya menguji pemisahan pembuat/verifikator; tidak menyatakan paket B1 atau seluruh sektor sah. Standar bukti belum final; metadata dokumen uji bukan dokumen wajib resmi.

Keputusan uji dan audit operasional beserta niat kirim salinan commit atau rollback bersama. Gagal audit/outbox berarti tidak ada keputusan berhasil. Event memuat ID stabil, aktor/organisasi/peran/mandat pada kejadian, objek/field/waktu/hasil/alasan terstruktur/referensi dokumen, tanpa isi pribadi atau kredensial. Retry memakai ID stabil dan hasil terikat permintaan yang sama; hak tetap diperiksa ulang. Outbox masih tertunda, tanpa pengiriman atau klaim salinan independen KB-12 sudah tersedia. Tidak menyamakan log teknis Laravel dengan audit bisnis.

## Pengujian dan batas penerimaan

Tes G1-A tetap dapat berjalan tanpa DB. Suite MySQL terpisah memakai database uji yang diizinkan; perintah destruktif hanya untuk database uji khusus, bukan dev atau database lain. Tes mencakup migrate ulang/no-op/rollback, M:N, tanpa mandat/peran, tujuan/field/cakupan salah, masa berlaku/pencabutan, D1/M1, pembuat=pengesah awal, irisan pemilik termasuk dua proses serentak, pemilik lama/baru, larangan eksplisit, audit append-only dan rollback saat penulis audit atau INSERT audit gagal.

Hasil tes dilaporkan apa adanya; tidak meluluskan seluruh KB/DT/MVP atau memberi izin data nyata/produksi. Seluruh sumber/dokumentasi baru atau berubah dikemas bersama manifest dan verifikasi hash, tanpa .env/kredensial, binari MySQL/datadir, dump, dependensi/runtime atau ZIP lama.
