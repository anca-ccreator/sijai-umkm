<?php

namespace Database\Seeders;

use App\Models\FoodProduct;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Database\Seeder;

class FoodProductSeeder extends Seeder
{
    /**
     * Seed Profil Industri Pengolahan Pangan Khas Sinjai (KB-09 Model B)
     */
    public function run(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first() ?? User::first();
        $verifikatorId = $verifikator?->id;

        $samples = [
            [
                'nama_produk' => 'Kopi Robusta Manipi Borong',
                'kategori_produk' => 'Kopi & Minuman Olahan',
                'merek_produk' => 'Kopi Manipi Borong',
                'satuan_produk' => 'Bungkus 250gr',
                'bahan_baku_utama' => 'Biji Kopi Robusta Petik Merah Lereng Lompobattang',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Borong',
                'kapasitas_produksi_bulanan' => 1500,
                'realisasi_produksi_bulanan' => 1150,
                'satuan_produksi' => 'Bungkus',
                'legalitas_halal' => 'ID73070001298450123',
                'tgl_halal_berlaku' => '2028-06-15',
                'legalitas_pirt' => 'P-IRT 5107307010234-28',
                'tgl_pirt_berlaku' => '2029-01-10',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Pemeriksaan tempat pemanggangan dan penggilingan higienis memenuhi standar Dinkes Sinjai.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Borong',
            ],
            [
                'nama_produk' => 'Abon Ikan Tongkol Lappa',
                'kategori_produk' => 'Olahan Ikan & Hasil Laut',
                'merek_produk' => 'Abon Lappa Mandiri',
                'satuan_produk' => 'Pouch 150gr',
                'bahan_baku_utama' => 'Ikan Tongkol Segar Tangkapan Nelayan TPI Lappa',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Utara',
                'kapasitas_produksi_bulanan' => 800,
                'realisasi_produksi_bulanan' => 650,
                'satuan_produksi' => 'Pouch',
                'legalitas_halal' => 'ID73070002145890224',
                'tgl_halal_berlaku' => '2028-08-20',
                'legalitas_pirt' => 'P-IRT 2027307010345-27',
                'tgl_pirt_berlaku' => '2028-11-05',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Pengolahan dan pengeringan bebas debu, mesin spinner minyak bersertifikasi pangan.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Utara',
            ],
            [
                'nama_produk' => 'Sirup Markisa Segar Manipi',
                'kategori_produk' => 'Manisan & Sirup Buah',
                'merek_produk' => 'Markisa Manipi Sari',
                'satuan_produk' => 'Botol 500ml',
                'bahan_baku_utama' => 'Buah Markisa Kuning Dataran Tinggi Manipi',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Barat',
                'kapasitas_produksi_bulanan' => 1200,
                'realisasi_produksi_bulanan' => 950,
                'satuan_produksi' => 'Botol',
                'legalitas_halal' => 'ID73070003451290324',
                'tgl_halal_berlaku' => '2028-09-12',
                'legalitas_pirt' => 'P-IRT 2137307010456-29',
                'tgl_pirt_berlaku' => '2029-05-18',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Air ekstraksi berstandar baku air minum, proses pasteurisasi terkontrol.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Barat',
            ],
            [
                'nama_produk' => 'Gula Semut Aren Organik Sinjai Barat',
                'kategori_produk' => 'Gula Semut & Olahan Aren',
                'merek_produk' => 'Aren Mutiara Sinjai',
                'satuan_produk' => 'Kemasan 250gr',
                'bahan_baku_utama' => 'Nira Aren Segar Petani Hutan Lindung Sinjai Barat',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Barat',
                'kapasitas_produksi_bulanan' => 2500,
                'realisasi_produksi_bulanan' => 2100,
                'satuan_produksi' => 'Kemasan',
                'legalitas_halal' => 'ID73070004567890424',
                'tgl_halal_berlaku' => '2029-01-25',
                'legalitas_pirt' => 'P-IRT 2097307010567-28',
                'tgl_pirt_berlaku' => '2029-02-14',
                'legalitas_bpom' => 'BPOM MD 252128001099',
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Ruang kristalisasi berlantai keramik, oven pengering suhu konstan higienis.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Barat',
            ],
            [
                'nama_produk' => 'Ikan Cakalang Asap Fufu Sinjai',
                'kategori_produk' => 'Olahan Ikan & Hasil Laut',
                'merek_produk' => 'Cakalang Asap Panaikang',
                'satuan_produk' => 'Ekor Vakum',
                'bahan_baku_utama' => 'Ikan Cakalang Segar Pesisir Panaikang',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Timur',
                'kapasitas_produksi_bulanan' => 1000,
                'realisasi_produksi_bulanan' => 850,
                'satuan_produksi' => 'Ekor',
                'legalitas_halal' => 'ID73070005678900524',
                'tgl_halal_berlaku' => '2028-10-01',
                'legalitas_pirt' => 'P-IRT 2027307010678-29',
                'tgl_pirt_berlaku' => '2029-07-22',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Ruang pengasapan cerobong tertutup, pengemasan vakum hampa udara.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Timur',
            ],
            [
                'nama_produk' => 'Keripik Pisang Tanduk Salohe',
                'kategori_produk' => 'Makanan Ringan & Keripik',
                'merek_produk' => 'Salohe Renyah',
                'satuan_produk' => 'Bungkus 200gr',
                'bahan_baku_utama' => 'Pisang Tanduk Organik Petani Desa Salohe',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Timur',
                'kapasitas_produksi_bulanan' => 2000,
                'realisasi_produksi_bulanan' => 1600,
                'satuan_produksi' => 'Bungkus',
                'legalitas_halal' => 'ID73070006789010624',
                'tgl_halal_berlaku' => '2028-11-15',
                'legalitas_pirt' => 'P-IRT 2157307010789-28',
                'tgl_pirt_berlaku' => '2029-03-30',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Minyak goreng terstandar sekali pakai, penirisan mesin sentrifugal.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Timur',
            ],
            [
                'nama_produk' => 'Terasi Udang Rebon Pulau Sembilan',
                'kategori_produk' => 'Olahan Ikan & Hasil Laut',
                'merek_produk' => 'Terasi Pulau Harapan',
                'satuan_produk' => 'Bungkus 100gr',
                'bahan_baku_utama' => 'Udang Rebon Halus Pesisir Pulau Sembilan',
                'sumber_bahan_baku' => 'Kecamatan Pulau Sembilan',
                'kapasitas_produksi_bulanan' => 500,
                'realisasi_produksi_bulanan' => 380,
                'satuan_produksi' => 'Bungkus',
                'legalitas_halal' => null,
                'tgl_halal_berlaku' => null,
                'legalitas_pirt' => 'P-IRT 2027307010890-27',
                'tgl_pirt_berlaku' => '2028-12-19',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Penjemuran memakai para-para bertutup jaring pelindung lalat dan debu.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Pulau Sembilan',
            ],
            [
                'nama_produk' => 'Madu Hutan Liar Bulupoddo',
                'kategori_produk' => 'Kopi & Minuman Olahan',
                'merek_produk' => 'Madu Murni Lamatti',
                'satuan_produk' => 'Botol 350ml',
                'bahan_baku_utama' => 'Madu Alami Lebah Hutan Desa Lamatti Riattang',
                'sumber_bahan_baku' => 'Kecamatan Bulupoddo',
                'kapasitas_produksi_bulanan' => 600,
                'realisasi_produksi_bulanan' => 450,
                'satuan_produksi' => 'Botol',
                'legalitas_halal' => 'ID73070007890120724',
                'tgl_halal_berlaku' => '2029-03-10',
                'legalitas_pirt' => 'P-IRT 2097307010901-29',
                'tgl_pirt_berlaku' => '2029-08-15',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Penyaringan kain mikron higienis, sterilisasi botol kaca dengan uap panas.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Bulupoddo',
            ],
            [
                'nama_produk' => 'Kue Kering Baruasa Tradisional Sinjai',
                'kategori_produk' => 'Kue Tradisional & Roti',
                'merek_produk' => 'Baruasa Biringere Khas',
                'satuan_produk' => 'Toples 300gr',
                'bahan_baku_utama' => 'Tepung Beras Pilihan, Kelapa Parut Sangrai, Telur Segar',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Selatan',
                'kapasitas_produksi_bulanan' => 1500,
                'realisasi_produksi_bulanan' => 1200,
                'satuan_produksi' => 'Toples',
                'legalitas_halal' => 'ID73070008901230824',
                'tgl_halal_berlaku' => '2028-12-05',
                'legalitas_pirt' => 'P-IRT 2067307011012-28',
                'tgl_pirt_berlaku' => '2029-04-11',
                'legalitas_bpom' => null,
                'status_higiene' => 'LAYAK_HIGIENE',
                'catatan_sanitasi' => 'Peralatan oven dan loyang bahan stainless steel standar makanan.',
                'status_verifikasi' => 'TERVERIFIKASI',
                'kecamatan_target' => 'Sinjai Selatan',
            ],
            [
                'nama_produk' => 'Sambal Cakalang Asap Pedas Sinjai',
                'kategori_produk' => 'Bumbu Masak & Sambal',
                'merek_produk' => 'Sambal Juara Sinjai',
                'satuan_produk' => 'Jar 200gr',
                'bahan_baku_utama' => 'Cabai Rawit Petani Sinjai Tengah & Cakalang Asap Suwir',
                'sumber_bahan_baku' => 'Kecamatan Sinjai Tengah',
                'kapasitas_produksi_bulanan' => 800,
                'realisasi_produksi_bulanan' => 500,
                'satuan_produksi' => 'Jar',
                'legalitas_halal' => null,
                'tgl_halal_berlaku' => null,
                'legalitas_pirt' => 'P-IRT 2117307011123-29',
                'tgl_pirt_berlaku' => '2028-10-30',
                'legalitas_bpom' => null,
                'status_higiene' => 'PERLU_PEMBINAAN',
                'catatan_sanitasi' => 'Perlu penambahan alat segel induksi alumunium foil untuk memperpanjang daya simpan.',
                'status_verifikasi' => 'DRAFT',
                'kecamatan_target' => 'Sinjai Tengah',
            ],
        ];

        foreach ($samples as $data) {
            $kecamatan = $data['kecamatan_target'];
            unset($data['kecamatan_target']);

            // Cari UMKM yang cocok di kecamatan target
            $umkm = Umkm::where('kecamatan', $kecamatan)
                ->where(function ($q) {
                    $q->where('sektor', 'like', '%Pangan%')
                      ->orWhere('sektor', 'like', '%Kuliner%');
                })
                ->first();

            if (!$umkm) {
                $umkm = Umkm::where('kecamatan', $kecamatan)->first();
            }

            if ($umkm) {
                $data['umkm_id'] = $umkm->id;
                $data['verified_by'] = $verifikatorId;
                $data['verified_at'] = $data['status_verifikasi'] === 'TERVERIFIKASI' ? now() : null;

                FoodProduct::updateOrCreate(
                    [
                        'umkm_id' => $umkm->id,
                        'nama_produk' => $data['nama_produk']
                    ],
                    $data
                );

                // Sinkronkan ke UMKM jika legalitas belum ada
                if (!empty($data['legalitas_halal']) && empty($umkm->legalitas_halal)) {
                    $umkm->legalitas_halal = $data['legalitas_halal'];
                }
                if (!empty($data['legalitas_pirt']) && empty($umkm->legalitas_pirt)) {
                    $umkm->legalitas_pirt = $data['legalitas_pirt'];
                }
                if (!empty($data['legalitas_bpom']) && empty($umkm->legalitas_bpom)) {
                    $umkm->legalitas_bpom = $data['legalitas_bpom'];
                }
                $umkm->save();
            }
        }
    }
}
