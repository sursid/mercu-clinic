<?php

// Vercel serverless function for Laravel
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// Start timing
define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Set up storage path for Vercel serverless environment
if (app()->environment('production')) {
    // Create temp storage directories
    $tempDirs = [
        '/tmp/storage',
        '/tmp/storage/framework',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/views',
        '/tmp/storage/logs',
        '/tmp/storage/app',
        '/tmp/storage/app/public'
    ];
    
    foreach ($tempDirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
    }
    
    // Override storage path for serverless environment
    $app->useStoragePath('/tmp/storage');
}

// Handle the request
$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

// Send the response
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
