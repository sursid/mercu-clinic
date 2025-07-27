<?php

namespace App\Providers;

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
        if (app()->environment(['production', 'local'])) {
            $this->app->useStoragePath('/tmp/storage');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS di production
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        // Pastikan direktori storage di /tmp tersedia di production atau local
        if (app()->environment(['production', 'local'])) {
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
            // Symlink /tmp/bootstrap/cache to bootstrap/cache if not exists
            $bootstrapCache = base_path('bootstrap/cache');
            $tmpBootstrapCache = '/tmp/bootstrap/cache';
            if (!is_link($bootstrapCache)) {
                // Remove file or directory if it exists and is not a symlink
                if (file_exists($bootstrapCache) && !is_link($bootstrapCache)) {
                    if (is_dir($bootstrapCache)) {
                        // Remove all files in the directory
                        $files = glob($bootstrapCache . '/*');
                        foreach ($files as $file) {
                            if (is_file($file)) {
                                @unlink($file);
                            }
                        }
                        @rmdir($bootstrapCache);
                    } else {
                        @unlink($bootstrapCache);
                    }
                }
                @symlink($tmpBootstrapCache, $bootstrapCache);
            }
        }
    }
}
