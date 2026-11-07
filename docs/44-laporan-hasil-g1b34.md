# Laporan hasil G1-B3.4 — verifikasi field lokal/sintetis

Tanggal: 7 November 2026. Status: **SELESAI PADA BATAS G1-B3.4 LOKAL**. Ini bukan kesiapan produksi atau penetapan organisasi.

## Yang ditambahkan

Migrasi ke-11 menambahkan aliran field, katalog bukti, usulan nilai, penilaian bukti, keputusan nilai, pembatasan penggunaan, dan perintah idempoten. Enam tabel riwayat bersifat append-only melalui trigger MySQL. Nilai resmi berada pada keputusan field, bukan menimpa Registri A3 atau keputusan C2.

Layanan domain memeriksa pemilik tunggal aktif, mandat pengesah milik organisasi pemilik, definisi/katalog efektif, bukti sintetis, versi, cakupan, sensitivitas, tujuan, masa dan audit/outbox dalam satu transaksi. Pembacaan juga diaudit dan menolak tanpa hak baca. Gateway sesi dan dua rute lokal tidak menerima aktor, OPD, mandat, keputusan atau waktu dari browser.

## Pemeriksaan ulang 7 November 2026

- Baseline sebelum perubahan: `composer test:mysql` lulus **217 tes / 1.512 assertion**; `composer test` lulus **10 / 56**.
- Ditemukan dan diperbaiki hak minimum akun runtime test untuk tujuh tabel baru. Hak tetap per-tabel pada database test khusus; tidak ada DDL/DELETE/GRANT bagi runtime.
- Setelah menghentikan rangkaian paralel, `migrate:fresh` hanya dijalankan pada `sijai_umkm_g1b1_test` melalui koneksi migrator. Host `127.0.0.1`, port `33070`, database test khusus dan pemisahan akun runtime/migrator diperiksa dari konfigurasi terlindungi.
- Regresi MySQL penuh berjalan satu proses dan lulus **225 tes / 1.533 assertion / 0 gagal** dalam 5 menit 12 detik. Ini mencakup regresi G1-A–B3.3 dan delapan tes field baru (21 assertion): penolakan nonpemilik/mandat kedaluwarsa, katalog ambigu, pemisahan usulan-nilai resmi, efektif mendatang, pembatasan aktif, versi usang, sensitivitas, serta pemisahan C2/sektor.
- `composer test` lulus **10 tes / 56 assertion**, pemeriksaan sintaks lulus, dan `npm run build` berhasil.

## Temuan dan batas terbuka

Tidak ada OPD/petugas/dokumen nyata. Katalog dan bukti masih sintetis. E1 tetap diblokir karena konflik dengan KB-11. Aturan bukti, risiko, retensi, SOP, H2 operasional, K1–K4, penetapan kewenangan dan audit independen masih membutuhkan keputusan/izin terpisah. QA browser belum dilakukan karena paket belum menyediakan bootstrap demo field yang aman tanpa kata sandi/akun eksplisit; karenanya QA browser **tidak diklaim lulus**.

## Rekomendasi sesudah G1-B3.4

Tambahkan bootstrap demo field eksplisit dengan kredensial yang dimasukkan pemilik saat menjalankan perintah, lakukan QA browser lokal dengan screenshot, lalu minta izin terpisah untuk tahap berikutnya. Jangan membuka ekspor, koreksi penuh, data nyata atau deployment.
