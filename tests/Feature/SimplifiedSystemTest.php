<?php

namespace Tests\Feature;

use App\Models\ActivityLog;
use App\Models\Owner;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SimplifiedSystemTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Seed database
        \Illuminate\Support\Facades\Artisan::call('sijai:seed', ['--fresh' => true]);
    }

    public function test_guest_is_redirected_to_login(): void
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_user_can_login_with_valid_credentials(): void
    {
        $response = $this->post('/login', [
            'username' => 'operator',
            'password' => 'operator123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
    }

    public function test_dashboard_renders_metrics_and_summary(): void
    {
        $user = User::where('username', 'operator')->first();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Ringkasan Eksekutif Data UMKM Sinjai');
        $response->assertSee('Unduh Laporan Excel (CSV)');
        $response->assertSee('Pusat Kurasi Produk Industri Pangan', false);
        $response->assertSee('Meja Verifikasi', false);
        $response->assertSee('Profil Industri Pangan', false);
    }

    public function test_excel_export_streams_proper_csv(): void
    {
        $user = User::where('username', 'pimpinan')->first();

        $response = $this->actingAs($user)->get('/dashboard/ekspor-excel');
        $response->assertStatus(200);
        $this->assertTrue(str_contains($response->headers->get('content-type'), 'text/csv'));
    }

    public function test_umkm_index_and_search(): void
    {
        $user = User::where('username', 'operator')->first();

        $response = $this->actingAs($user)->get('/umkm?search=Manipi');
        $response->assertStatus(200);
        $response->assertSee('Kopi Robusta Manipi Borong');
    }

    public function test_api_detects_duplicate_nik_and_name(): void
    {
        $user = User::where('username', 'operator')->first();

        $response = $this->actingAs($user)->getJson('/api/umkm/check-duplicate?nik=7307011203850001');
        $response->assertStatus(200);
        $response->assertJson([
            'has_nik_match' => true,
        ]);
    }

    public function test_operator_can_create_new_umkm(): void
    {
        $user = User::where('username', 'operator')->first();

        $response = $this->actingAs($user)->post('/umkm', [
            'nama_pemilik' => 'Ibu Suriati',
            'nik' => '7307014402900088',
            'no_hp' => '081299001122',
            'alamat_ktp' => 'Dusun Sanjai',
            'nama_usaha' => 'Bolu Cukke Tradisional Sinjai',
            'alamat_usaha' => 'Pasar Sentral Sinjai Blok A-02',
            'kelurahan_desa' => 'Bongki',
            'kecamatan' => 'Sinjai Utara',
            'sektor' => 'Kuliner / Pengolahan Pangan',
            'omset_bulanan' => 6500000,
        ]);

        $this->assertDatabaseHas('umkm', [
            'nama_usaha' => 'Bolu Cukke Tradisional Sinjai',
            'status' => 'DRAFT',
        ]);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'TAMBAH_UMKM',
        ]);
    }

    public function test_user_can_edit_umkm_and_activity_is_logged(): void
    {
        $user = User::where('username', 'operator')->first();
        $umkm = Umkm::first();

        $response = $this->actingAs($user)->put('/umkm/' . $umkm->id, [
            'nama_pemilik' => $umkm->owner->nama_lengkap,
            'nik' => $umkm->owner->nik,
            'no_hp' => '089999999999', // Updated phone
            'alamat_ktp' => $umkm->owner->alamat_ktp,
            'nama_usaha' => $umkm->nama_usaha . ' (Revisi)',
            'alamat_usaha' => $umkm->alamat_usaha,
            'kecamatan' => $umkm->kecamatan,
            'sektor' => $umkm->sektor,
            'catatan_perubahan' => 'Pembaruan nomor kontak pemilik',
        ]);

        $response->assertRedirect('/umkm/' . $umkm->id);
        $this->assertDatabaseHas('activity_logs', [
            'action' => 'EDIT_DATA',
            'umkm_id' => $umkm->id,
        ]);
    }

    public function test_verifikator_can_approve_umkm_in_single_door(): void
    {
        $verifikator = User::where('username', 'verifikator')->first();
        $umkm = Umkm::where('status', 'DRAFT')->first();

        $response = $this->actingAs($verifikator)->post('/umkm/' . $umkm->id . '/verifikasi', [
            'decision' => 'RESMI',
            'catatan' => 'Semua data dan lokasi fisik telah dikonfirmasi valid.',
        ]);

        $response->assertRedirect('/umkm/' . $umkm->id);
        $this->assertEquals('RESMI', $umkm->fresh()->status);
        $this->assertNotNull($umkm->fresh()->verified_at);
        $this->assertEquals($verifikator->id, $umkm->fresh()->verified_by);
    }

    public function test_pembersihan_data_shows_diagnosis_and_supports_batch_approval(): void
    {
        $verifikator = User::where('username', 'verifikator')->first();

        // 1. Visit diagnosis page
        $response = $this->actingAs($verifikator)->get('/pembersihan');
        $response->assertStatus(200);
        $response->assertSee('Diagnosis');
        $response->assertSee('Pembersihan Data Lama');
        $response->assertSee('SIAP DISAHKAN MASAL');

        // 2. Perform Batch Approval
        $cleanCountBefore = Umkm::where('is_clean', true)->where('status', 'DRAFT')->count();
        $this->assertGreaterThan(0, $cleanCountBefore);

        $responseBatch = $this->actingAs($verifikator)->post('/pembersihan/sahkan-masal');
        $responseBatch->assertRedirect('/pembersihan');

        // Verify that clean drafts are now RESMI
        $cleanCountAfter = Umkm::where('is_clean', true)->where('status', 'DRAFT')->count();
        $this->assertEquals(0, $cleanCountAfter);
    }

    public function test_download_worksheet_per_kecamatan(): void
    {
        $user = User::where('username', 'verifikator')->first();

        $response = $this->actingAs($user)->get('/pembersihan/unduh-masalah-kecamatan?kecamatan=Sinjai+Utara');
        $response->assertStatus(200);
        $this->assertTrue(str_contains($response->headers->get('content-type'), 'text/csv'));
    }
}
