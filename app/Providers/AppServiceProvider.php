<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Standard provider
    }

    public function boot(): void
    {
        // Paksa skema HTTPS pada lingkungan Cloud (Railway / Reverse Proxy)
        if (request()->header('x-forwarded-proto') === 'https' || app()->environment('production') || str_contains(request()->getHttpHost(), 'railway.app')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        // Otomatis inisialisasi basis data jika tabel 'users' belum ada
        if (!$this->app->runningInConsole()) {
            try {
                $flagFile = storage_path('framework/db_initialized.flag');
                if (!file_exists($flagFile)) {
                    if (!Schema::hasTable('users')) {
                        @set_time_limit(300);
                        Artisan::call('sijai:init-db');
                    }
                    @touch($flagFile);
                }
            } catch (\Throwable $e) {
                Log::warning('Auto-init database skipped: ' . $e->getMessage());
            }
        }
    }
}
