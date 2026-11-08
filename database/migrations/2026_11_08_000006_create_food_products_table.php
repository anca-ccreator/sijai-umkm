<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Sektor Percontohan MVP: Industri Pengolahan Pangan (KB-09 Model B)
     */
    public function up(): void
    {
        Schema::create('food_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id')->constrained('umkm')->cascadeOnDelete();
            
            // Spesifikasi Produk Pangan
            $table->string('nama_produk')->index();
            $table->string('kategori_produk', 100)->index();
            $table->string('merek_produk', 150)->nullable();
            $table->string('satuan_produk', 50)->default('Kemasan');
            $table->string('bahan_baku_utama', 255)->nullable();
            $table->string('sumber_bahan_baku', 150)->nullable();
            
            // Kapasitas & Realisasi Produksi (KB-09)
            $table->decimal('kapasitas_produksi_bulanan', 14, 2)->default(0);
            $table->decimal('realisasi_produksi_bulanan', 14, 2)->default(0);
            $table->string('satuan_produksi', 50)->default('Bungkus');
            
            // Sertifikasi & Legalitas Khusus Pangan
            $table->string('legalitas_halal', 60)->nullable()->index();
            $table->date('tgl_halal_berlaku')->nullable();
            $table->string('legalitas_pirt', 60)->nullable()->index();
            $table->date('tgl_pirt_berlaku')->nullable();
            $table->string('legalitas_bpom', 60)->nullable()->index();
            
            // Kelaikan Higiene, Sanitasi & Tempat Pengolahan (Dinkes)
            $table->enum('status_higiene', [
                'LAYAK_HIGIENE',
                'PERLU_PEMBINAAN',
                'BELUM_INSPEKSI'
            ])->default('BELUM_INSPEKSI')->index();
            $table->text('catatan_sanitasi')->nullable();
            
            // Status Verifikasi Sektoral Khusus Pangan
            $table->enum('status_verifikasi', [
                'DRAFT',
                'TERVERIFIKASI',
                'PERLU_PERBAIKAN'
            ])->default('DRAFT')->index();
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_products');
    }
};
