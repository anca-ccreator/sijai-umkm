# Matriks kewenangan pengesahan awal sintetis G1-B3.3

Tanggal **7 November 2026**. Matriks ini konfigurasi dan kontrak uji lokal, **bukan penetapan OPD/petugas/mandat pemerintah daerah**. [Kontrak 36](36-kontrak-pengesahan-awal-c2-g1b33.md) mengatur status/prasyarat. DT-005 C+F+H2 dan DT-011 C+D1+M1+E1 tetap.

| Tindakan | Izin server minimum | Batas |
| --- | --- | --- |
| Catat A3 | CREATE_DRAFT pada seluruh kelompok pencatatan | Konteks katalog/tujuan/lingkup server; petugas sintetis ditunjuk dalam fixture |
| Revisi draf/perbaikan | EDIT_DRAFT dan baca kelompok formulir | Tidak mengubah identitas pihak bersama atau keputusan final |
| Ajukan/ajukan ulang | SUBMIT_REGISTRATION + baca paket | A3/B1/kandidat dinilai ulang; bukan C2 |
| Mulai periksa/kembalikan B2 | REVIEW_REGISTRATION + baca paket | Jejak B2, tidak memberi C2 otomatis |
| Nilai klaim formal uji | REVIEW_EVIDENCE + VIEW_EVIDENCE pada field klaim | Objek/katalog/klaim/revisi/tujuan/masa sesuai; bukan pengesahan field |
| Lihat halaman pemeriksaan C2 | APPROVE_INITIAL + VIEW_RECORD seluruh kelompok + VIEW_EVIDENCE field klaim | VIEW_SENSITIVE tambahan sesuai kelas; pembuat ditolak |
| Keputusan APPROVED/REJECTED/RETURNED C2 | APPROVE_INITIAL pada field alur, baca/sensitivitas/bukti yang diperlukan | Akun/role/mandat/organisasi/objek/wilayah/sektor/tujuan/masa aktif; APPROVED hanya paket READY |
| Pengesahan field operasional | Belum dibuka | C2 tidak memberi APPROVE_FIELD; perlu satu pemilik aktif dan pengesah field bermandat sesuai DT-005 |
| Unduh/ekspor | Tidak dibuka | Konflik E1/KB-11 tetap terbuka |

APPROVE_INITIAL pada subset lokal berarti kewenangan mencatat keputusan atas paket induk, termasuk hasil negatif beralasan. Jenis keputusan ditetapkan rute server, bukan status bebas dari browser. Satu pengesah awal berwenang yang berbeda dari pembuat cukup. Satu orang boleh menilai klaim dan menjadi pengesah awal jika masing-masing mandatnya sah; tidak mewajibkan tiga petugas sebagai kebijakan resmi.

D1 hanya katalog hak dasar organisasi sintetis yang telah ditetapkan untuk uji; tidak memberi hak pengesahan/sensitif otomatis. M1 memeriksa seluruh penugasan aktif beserta batas asal. Tidak menggabungkan field dari izin A dan wilayah dari izin B agar menciptakan izin yang tidak pernah diberikan. Label admin/koordinator atau dua peran tidak mengatasi larangan self-approval.

Demo eksplisit `sijai:initial-demo` membuat tiga akun **baru** dalam satu transaksi: pencatat A3, pemeriksa klaim/pengajuan dan pengesah awal. Ini pemisahan peran demonstrasi, bukan identitas/struktur resmi. Demo menolak bila demo registrasi/akun terkait sudah ada; tidak menambah hak diam-diam pada akun lama. Pencatat/pemeriksa B3.2 tetap tanpa hak C2. Akun pengesah tidak mendapat edit/submit/pengesahan field/ekspor.

## Kesiapan pengesahan field DT-005/DT-007

Fondasi pemeriksaan field/lingkup/masa, satu pemilik aktif, audit dan pemisahan tugas B1 tetap tersedia dan diregresi. Namun **pengesahan field operasional belum siap dinyatakan selesai atau diaktifkan** dari hasil C2. Yang masih diperlukan:

- Penetapan OPD/fungsi pemilik per kode field/cakupan/masa, mandat petugas, katalog/kelas akses/bukti yang sah serta transisi H2.
- Kontrak perubahan nilai resmi, bukti/validasi/konflik dan koreksi berjejak yang sesuai DT-009; batas izin pembangunan tersendiri.
- Katalog minimum field/sektor dan evaluasi agregasi DT-007 per objek/lingkup/tahap. C2 bukan agregasi seluruh profil; field/sektor yang belum sah tidak dianggap terpenuhi.
- Pengujian lintas pemilik, masa/versi/konkurensi/audit/sensitivitas dan peninjauan independen, serta prasyarat hukum/operasi sebelum data nyata.

Tidak memilih OPD nyata, standar wajib atau kebijakan pengganti E1. G5/G7 dan produksi tetap belum diizinkan.
