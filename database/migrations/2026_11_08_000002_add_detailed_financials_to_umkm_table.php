<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->decimal('modal_awal', 15, 2)->nullable()->after('modal_usaha');
            $table->decimal('modal_sekarang', 15, 2)->nullable()->after('modal_awal');
            $table->decimal('aset', 15, 2)->nullable()->after('modal_sekarang');
            $table->decimal('omset_tahunan', 15, 2)->nullable()->after('omset_bulanan');
        });
    }

    public function down(): void
    {
        Schema::table('umkm', function (Blueprint $table) {
            $table->dropColumn(['modal_awal', 'modal_sekarang', 'aset', 'omset_tahunan']);
        });
    }
};
