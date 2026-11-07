<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->unsignedSmallInteger('tahun_berdiri')->nullable()->after('kbli')->index();
            $table->string('izin_usaha', 255)->nullable()->after('nib');
            $table->string('jenis_izin', 50)->default('BELUM_BERIZIN')->after('izin_usaha')->index();
        });
    }

    public function down(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->dropColumn(['tahun_berdiri', 'izin_usaha', 'jenis_izin']);
        });
    }
};
