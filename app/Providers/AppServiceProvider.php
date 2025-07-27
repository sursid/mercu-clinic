<?php

require_once __DIR__ . '/../../vendor/autoload.php';

namespace App\Providers;

use Illuminate\Support\Facades\App as FacadeApp;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Gunakan storage path /tmp/storage di production (Vercel) atau local (for serverless)
        if ($this->app && method_exists($this->app, 'environment') && $this->app->environment(['production', 'local'])) {
            $this->app->useStoragePath('/tmp/storage');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS di production
        if ($this->app && method_exists($this->app, 'environment') && $this->app->environment('production')) {
            URL::forceScheme('https');
        }
        // Pastikan direktori storage di /tmp tersedia di production atau local
        if ($this->app && method_exists($this->app, 'environment') && $this->app->environment(['production', 'local'])) {
            // Override semua cache Laravel ke /tmp agar selalu writable di Vercel
            if (!defined('LARAVEL_PACKAGE_MANIFEST_PATH')) {
                define('LARAVEL_PACKAGE_MANIFEST_PATH', '/tmp/bootstrap/cache');
            }
            // Buat semua direktori yang dibutuhkan di /tmp
            $tempDirs = [
                '/tmp/storage/framework/cache',
                '/tmp/storage/framework/sessions',
                '/tmp/storage/framework/views',
                '/tmp/storage/logs',
                '/tmp/storage/app',
                '/tmp/storage/framework',
                '/tmp/bootstrap/cache',
            ];
            foreach ($tempDirs as $dir) {
                if (!is_dir($dir)) {
                    @mkdir($dir, 0755, true);
                }
            }
            // Tidak perlu symlink bootstrap/cache, cukup pastikan semua cache Laravel diarahkan ke /tmp
        }
    }
}
