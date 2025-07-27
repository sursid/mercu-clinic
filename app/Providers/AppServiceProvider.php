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
        if ($this->app->environment(['production', 'local'])) {
            $this->app->useStoragePath('/tmp/storage');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        if ($this->app->environment(['production', 'local'])) {
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
            if (!defined('LARAVEL_PACKAGE_MANIFEST_PATH')) {
                define('LARAVEL_PACKAGE_MANIFEST_PATH', '/tmp/bootstrap/cache');
            }
            if (!is_dir('/tmp/bootstrap/cache')) {
                @mkdir('/tmp/bootstrap/cache', 0755, true);
            }
            $bootstrapCache = $this->app->basePath('bootstrap/cache');
            $tmpBootstrapCache = '/tmp/bootstrap/cache';
            if (!is_link($bootstrapCache)) {
                if (file_exists($bootstrapCache) && !is_link($bootstrapCache)) {
                    if (is_dir($bootstrapCache)) {
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
