<?php

namespace Tests\Feature;

use App\Models\ActivityLog;
use App\Models\NibRecord;
use App\Models\Owner;
use App\Models\Umkm;
use App\Models\User;
use Tests\TestCase;

class VerifikasiDanResolusiKonflikTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Illuminate\Support\Facades\Artisan::call('sijai:seed', ['--fresh' => true]);
    }

    public function test_verifikator_can_view_verification_queue(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first();

        $response = $this->actingAs($verifikator)->get('/verifikasi');
        $response->assertStatus(200);
        $response->assertSee('Meja Verifikasi Multi-OPD');
        $response->assertSee('Antrean Masuk');
    }

    public function test_creator_cannot_verify_own_record_separation_of_duty(): void
    {
        // KB-05 / DT-003 C2: Petugas pencatat dilarang mengesahkan berkas buatannya sendiri
        $operator = User::where('username', 'operator')->first();
        $this->actingAs($operator);

        $owner = Owner::create([
            'nama_lengkap' => 'Pelaku Uji Integritas',
            'nik' => '7307010101900099',
            'kecamatan' => 'Sinjai Utara',
        ]);

        $umkm = Umkm::create([
            'owner_id' => $owner->id,
            'nama_usaha' => 'Usaha Uji Integritas Sendiri',
            'kecamatan' => 'Sinjai Utara',
            'sektor' => 'Perdagangan / Toko Kelontong',
            'status' => 'DRAFT',
        ]);

        ActivityLog::record(
            'TAMBAH_UMKM',
            "Pendaftaran baru UMKM oleh operator",
            $umkm,
            null,
            $umkm->toArray()
        );

        // Operator mencoba mengesahkan buatannya sendiri
        $response = $this->post("/verifikasi/{$umkm->id}/putuskan", [
            'decision' => 'RESMI',
            'catatan' => 'Mencoba mengesahkan data sendiri',
            'opd_pemeriksa' => 'Dinas Koperasi & UKM',
        ]);

        // Harus diblokir sistem
        $response->assertSessionHas('error');
        $this->assertEquals('DRAFT', $umkm->fresh()->status);
    }

    public function test_verifikator_can_approve_record_with_audit_trail(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first();
        $umkm = Umkm::where('status', 'DRAFT')->first();

        $response = $this->actingAs($verifikator)->post("/verifikasi/{$umkm->id}/putuskan", [
            'decision' => 'RESMI',
            'catatan' => 'Semua berkas dan izin fisik telah tervalidasi lapangan',
            'opd_pemeriksa' => 'DPMPTSP Kabupaten Sinjai',
        ]);

        $response->assertSessionHas('success');
        $this->assertEquals('RESMI', $umkm->fresh()->status);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'VERIFIKASI_RESMI',
            'umkm_id' => $umkm->id,
        ]);
    }

    public function test_bulk_verification_approves_clean_records(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first();

        $response = $this->actingAs($verifikator)->post('/verifikasi/putuskan-masal', [
            'limit' => 10,
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('activity_logs', [
            'action' => 'VERIFIKASI_MASAL_RESMI',
        ]);
    }

    public function test_officer_can_resolve_nib_conflict_k4_with_berita_acara_and_audit(): void
    {
        $verifikator = User::where('role', 'VERIFIKATOR')->first();
        $umkm = Umkm::first();

        $conflictRecord = NibRecord::create([
            'nib' => '9999888877771',
            'nik' => '7307011122334455',
            'nama_lengkap' => 'Nama Sesuai KTP OSS',
            'nama_usaha' => 'Usaha Berkonflik OSS',
            'kecamatan' => 'Sinjai Utara',
            'reconciliation_status' => 'CONFLICTING_INFO',
            'matched_umkm_id' => $umkm->id,
            'similarity_score' => 45.00,
        ]);

        $nomorBa = 'BA.518/TEST-01/DKUKMTK-DPMPTSP/2026';
        $response = $this->actingAs($verifikator)->post("/rekonsiliasi/{$conflictRecord->id}/selesaikan-konflik", [
            'keputusan' => 'HAK_MILIK_KOPERASI',
            'nomor_ba' => $nomorBa,
            'tanggal_ba' => date('Y-m-d'),
            'tim_pemeriksa' => 'Tim Terpadu 3 Pihak Sinjai',
            'catatan_hasil' => 'Pemeriksaan fisik KTP dan Surat Keterangan Usaha Desa mengonfirmasi hak sah.',
        ]);

        $response->assertSessionHas('success');

        $refreshed = $conflictRecord->fresh();
        $this->assertEquals('LINKED', $refreshed->reconciliation_status);
        $this->assertStringContainsString($nomorBa, $refreshed->match_notes);

        $this->assertDatabaseHas('activity_logs', [
            'action' => 'RESOLUSI_KONFLIK_K4',
            'umkm_id' => $umkm->id,
        ]);
    }
}
