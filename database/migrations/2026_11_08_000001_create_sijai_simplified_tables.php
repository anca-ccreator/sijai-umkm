<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Users (Operator, Verifikator, Pimpinan, Admin)
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->enum('role', ['operator', 'verifikator', 'pimpinan', 'admin'])->default('operator');
            $table->string('dinas')->default('Dinas Koperasi & UMKM');
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        // 2. Owners / Pemilik Usaha (1 Orang bisa punya banyak Usaha)
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->nullable()->index();
            $table->string('nama_lengkap');
            $table->string('no_hp', 25)->nullable();
            $table->text('alamat_ktp')->nullable();
            $table->string('rt_rw', 20)->nullable();
            $table->string('kelurahan_desa', 100)->nullable();
            $table->string('kecamatan', 100)->nullable()->index();
            $table->string('kabupaten', 100)->default('Sinjai');
            $table->timestamps();
        });

        // 3. UMKM / Unit Usaha
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->nullable()->constrained('owners')->nullOnDelete();
            $table->string('nama_usaha')->index();
            $table->string('nib', 30)->nullable()->index();
            $table->text('alamat_usaha')->nullable(); // Lokasi fisik usaha/toko/kios
            $table->string('rt_rw', 20)->nullable();
            $table->string('kelurahan_desa', 100)->nullable();
            $table->string('kecamatan', 100)->nullable()->index();
            $table->string('kabupaten', 100)->default('Sinjai');
            $table->string('sektor')->default('Kuliner / Pengolahan Pangan')->index();
            $table->string('kbli', 10)->nullable();
            $table->text('deskripsi_produk')->nullable();
            $table->decimal('omset_bulanan', 15, 2)->nullable();
            $table->decimal('modal_usaha', 15, 2)->nullable();
            $table->integer('jumlah_karyawan')->default(1);
            
            // Legalitas & Izin
            $table->string('legalitas_halal', 50)->nullable();
            $table->string('legalitas_pirt', 50)->nullable();
            $table->string('legalitas_bpom', 50)->nullable();
            $table->string('foto_usaha')->nullable();

            // Status Verifikasi (1 Pintu)
            $table->enum('status', ['DRAFT', 'RESMI', 'PERBAIKAN', 'DITOLAK', 'TUTUP'])->default('DRAFT')->index();
            $table->text('catatan_verifikasi')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();

            // Kualitas Data Historis & Diagnosis Masalah
            $table->boolean('is_clean')->default(false)->index();
            $table->json('issue_flags')->nullable();
            $table->string('source_origin')->default('PENDAFTARAN_BARU')->index();

            $table->softDeletes();
            $table->timestamps();
        });

        // 4. Activity Logs (Audit Trail Otomatis: Siapa, Kapan, Apa yang Diubah)
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('user_name')->nullable();
            $table->string('user_role')->nullable();
            $table->string('action'); // TAMBAH, EDIT, VERIFIKASI_SAHKAN, MINTA_PERBAIKAN, TOLAK, SAHKAN_MASAL, TUTUP
            $table->foreignId('umkm_id')->nullable()->constrained('umkm')->nullOnDelete();
            $table->text('deskripsi');
            $table->json('data_lama')->nullable();
            $table->json('data_baru')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        // 5. Sessions table (if session driver is database)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // 6. Cache table
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cache_locks');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('activity_logs');
        Schema::dropIfExists('umkm');
        Schema::dropIfExists('owners');
        Schema::dropIfExists('users');
    }
};
