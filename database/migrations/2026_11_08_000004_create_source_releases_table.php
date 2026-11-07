<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('source_releases')) {
            Schema::create('source_releases', function (Blueprint $table) {
                $table->id('release_id');
                $table->string('version', 50)->default('1.1.0');
                $table->string('release_name', 150)->default('Fondasi Adaptif SIJAI UMKM');
                $table->string('manifest_sha256', 64)->nullable();
                $table->string('package_sha256', 64)->nullable();
                $table->unsignedInteger('file_count')->default(0);
                $table->enum('status', ['success', 'failed', 'pending'])->default('success');
                $table->text('summary')->nullable();
                $table->string('deployed_by', 100)->nullable();
                $table->timestamp('deployed_at')->useCurrent();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('source_releases');
    }
};
