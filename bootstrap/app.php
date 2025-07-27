<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Ensure writable paths for Vercel serverless environment
if (in_array(env('APP_ENV', 'production'), ['production', 'local'])) {
    // Override package manifest path to use /tmp
    if (!defined('LARAVEL_PACKAGE_MANIFEST_PATH')) {
        define('LARAVEL_PACKAGE_MANIFEST_PATH', '/tmp/storage/bootstrap/cache');
    }

    // Create required directories in /tmp
    $tempDirs = [
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/views',
        '/tmp/storage/logs',
        '/tmp/storage/app',
        '/tmp/storage/framework',
        '/tmp/storage/bootstrap/cache',
    ];

    foreach ($tempDirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
    }
}

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create()
    ->useStoragePath('/tmp/storage'); // Set storage path to /tmp/storage