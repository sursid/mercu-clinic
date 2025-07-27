<?php

require_once __DIR__ . '/../../vendor/autoload.php';

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
        // Set storage path to /tmp/storage for Vercel
        if ($this->app->environment(['production', 'local'])) {
            $this->app->useStoragePath('/tmp/storage');
        }

        // Override package manifest path early
        if (!defined('LARAVEL_PACKAGE_MANIFEST_PATH')) {
            define('LARAVEL_PACKAGE_MANIFEST_PATH', '/tmp/storage/bootstrap/cache');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Ensure writable directories in /tmp
        if ($this->app->environment(['production', 'local'])) {
            $tempDirs = [
                '/tmp/storage/framework/cache',
                '/tmp/storage/framework/sessions',
                '/tmp/storage/framework/views',
                '/tmp/storage/logs',
                '/tmp/storage/app',
                '/tmp/storage/framework',
                '/tmp/storage/bootstrap/cache', // Ensure this directory exists
            ];

            foreach ($tempDirs as $dir) {
                if (!is_dir($dir)) {
                    @mkdir($dir, 0755, true);
                }
            }
        }
    }
}