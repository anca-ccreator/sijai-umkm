<?php

namespace Tests\Feature;

use App\Models\ActivityLog;
use App\Models\FoodProduct;
use App\Models\Umkm;
use App\Models\User;
use Tests\TestCase;

class ProfilPanganTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Illuminate\Support\Facades\Artisan::call('sijai:seed', ['--fresh' => true]);
    }

    public function test_user_can_view_food_sector_catalog_and_kpis(): void
    {
        $operator = User::where('username', 'operator')->first();

        $response = $this->actingAs($operator)->get('/pangan');
        $response->assertStatus(200);
        $response->assertSee('Pusat Kurasi Produk Unggulan', false);
        $response->assertSee('Total Produk', false);
        $response->assertSee('Sertifikat Halal', false);
        $response->assertSee('Izin P-IRT Dinkes', false);
    }

    public function test_operator_can_register_new_food_product_with_audit(): void
    {
        $operator = User::where('username', 'operator')->first();
        $umkm = Umkm::first();

        $response = $this->actingAs($operator)->post('/pangan', [
            'umkm_id' => $umkm->id,
            'nama_produk' => 'Keripik Sukun Gurih Lappa',
            'kategori_produk' => 'Makanan Ringan & Keripik',
            'merek_produk' => 'Sukun Lappa Juara',
            'satuan_produk' => 'Kemasan 200gr',
            'bahan_baku_utama' => 'Buah Sukun Tua Segar',
            'sumber_bahan_baku' => 'Kecamatan Sinjai Utara',
            'kapasitas_produksi_bulanan' => 1200,
            'realisasi_produksi_bulanan' => 950,
            'satuan_produksi' => 'Kemasan',
            'legalitas_halal' => 'ID730700099988811',
            'legalitas_pirt' => 'P-IRT 2157307019999-28',
            'status_higiene' => 'LAYAK_HIGIENE',
            'catatan_sanitasi' => 'Tempat produksi bersih dan higienis',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('food_products', [
            'umkm_id' => $umkm->id,
            'nama_produk' => 'Keripik Sukun Gurih Lappa',
            'kategori_produk' => 'Makanan Ringan & Keripik',
            'legalitas_halal' => 'ID730700099988811',
            'legalitas_pirt' => 'P-IRT 2157307019999-28',
        ]);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'TAMBAH_PRODUK_PANGAN',
            'umkm_id' => $umkm->id,
        ]);
    }

    public function test_user_can_update_food_product_specifications(): void
    {
        $operator = User::where('username', 'operator')->first();
        $product = FoodProduct::first();

        $response = $this->actingAs($operator)->put("/pangan/{$product->id}", [
            'nama_produk' => $product->nama_produk . ' (Edisi Premium)',
            'kategori_produk' => $product->kategori_produk,
            'merek_produk' => $product->merek_produk,
            'satuan_produk' => 'Pouch Foil 250gr',
            'bahan_baku_utama' => $product->bahan_baku_utama,
            'sumber_bahan_baku' => $product->sumber_bahan_baku,
            'kapasitas_produksi_bulanan' => 2000,
            'realisasi_produksi_bulanan' => 1800,
            'satuan_produksi' => 'Pouch',
            'legalitas_pirt' => $product->legalitas_pirt,
            'legalitas_halal' => $product->legalitas_halal,
            'legalitas_bpom' => 'BPOM MD 252128999999',
            'status_higiene' => 'LAYAK_HIGIENE',
            'catatan_sanitasi' => 'Upgrade kemasan dengan teknologi zipper foil',
        ]);

        $response->assertSessionHas('success');
        $this->assertEquals('Pouch Foil 250gr', $product->fresh()->satuan_produk);
        $this->assertEquals(2000, (float) $product->fresh()->kapasitas_produksi_bulanan);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'EDIT_PRODUK_PANGAN',
            'umkm_id' => $product->umkm_id,
        ]);
    }

    public function test_verifikator_can_verify_food_product_and_hygiene(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first();
        $product = FoodProduct::where('status_verifikasi', 'DRAFT')->first() ?? FoodProduct::first();

        $response = $this->actingAs($verifikator)->post("/pangan/{$product->id}/verifikasi", [
            'status_verifikasi' => 'TERVERIFIKASI',
            'status_higiene' => 'LAYAK_HIGIENE',
            'catatan_sanitasi' => 'Hasil inspeksi lapangan membuktikan seluruh alat steril dan sertifikasi halal sah.',
            'petugas_opd' => 'Dinas Kesehatan Sinjai',
        ]);

        $response->assertSessionHas('success');
        $this->assertEquals('TERVERIFIKASI', $product->fresh()->status_verifikasi);
        $this->assertEquals('LAYAK_HIGIENE', $product->fresh()->status_higiene);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'VERIFIKASI_SEKTORAL_PANGAN',
            'umkm_id' => $product->umkm_id,
        ]);
    }

    public function test_user_can_export_food_products_csv(): void
    {
        $operator = User::where('username', 'operator')->first();

        $response = $this->actingAs($operator)->get('/pangan/ekspor');
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/csv; charset=UTF-8');
    }

    public function test_user_can_view_printable_food_curation_sheet(): void
    {
        $operator = User::where('username', 'operator')->first();

        $response = $this->actingAs($operator)->get('/pangan/cetak-kurasi');
        $response->assertStatus(200);
        $response->assertSee('DAFTAR KURASI KOMODITAS PANGAN OLAHAN DAERAH', false);
        $response->assertSee('Dinas Kesehatan Kabupaten Sinjai', false);
        $response->assertSee('Dinas Perindustrian', false);
    }

    public function test_umkm_detail_displays_associated_food_products(): void
    {
        $operator = User::where('username', 'operator')->first();
        $product = FoodProduct::first();
        $umkm = $product->umkm;

        $response = $this->actingAs($operator)->get("/umkm/{$umkm->id}");
        $response->assertStatus(200);
        $response->assertSee('Katalog Produk Industri Pengolahan Pangan');
        $response->assertSee($product->nama_produk);
    }
}
