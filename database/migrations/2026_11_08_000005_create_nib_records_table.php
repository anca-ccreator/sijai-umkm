<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nib_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('no_urut')->nullable();
            $table->string('nama_lengkap', 150);
            $table->string('nik', 50)->index();
            $table->string('nib', 50)->index();
            $table->string('telepon', 30)->nullable();
            $table->string('jenis_kelamin', 5)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kecamatan', 100)->nullable()->index();
            $table->string('skala_usaha', 50)->nullable();
            $table->decimal('modal_usaha', 18, 2)->default(0);
            $table->decimal('omset_tahunan', 18, 2)->default(0);
            
            // Status Rekonsiliasi & Audit Irisan
            $table->enum('reconciliation_status', [
                'POTENTIAL_MATCH',  // NIK sama & nama mirip (Kandidat Klop)
                'CONFLICTING_INFO', // NIK sama tetapi nama berbeda drastis (Konflik Identitas)
                'NO_MATCH',         // Belum ada di data UKM Koperasi (NIB Mandiri)
                'LINKED',           // Sudah ditautkan ke profil UMKM Koperasi
                'SEPARATED',        // Ditetapkan sebagai unit usaha mandiri/cabang berbeda
                'REJECTED'          // Ditolak / Dibatalkan
            ])->default('NO_MATCH')->index();

            $table->unsignedBigInteger('matched_umkm_id')->nullable()->index();
            $table->decimal('similarity_score', 5, 2)->default(0.00);
            $table->text('match_notes')->nullable();
            $table->unsignedBigInteger('reconciled_by')->nullable();
            $table->timestamp('reconciled_at')->nullable();
            $table->timestamps();

            $table->foreign('matched_umkm_id')
                ->references('id')
                ->on('umkm')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nib_records');
    }
};
