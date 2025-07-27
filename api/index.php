<?php

// Vercel serverless function for Laravel
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check if the application is already registered
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request
$app = require_once __DIR__.'/../bootstrap/app.php';

// Set up storage path for Vercel
if (app()->environment('production')) {
    // Ensure temp directories exist
    $tempDirs = ['/tmp/storage', '/tmp/storage/framework', '/tmp/storage/framework/cache', '/tmp/storage/framework/sessions', '/tmp/storage/framework/views', '/tmp/storage/logs'];
    foreach ($tempDirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
    }
    
    // Override storage path
    $app->useStoragePath('/tmp/storage');
}

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
