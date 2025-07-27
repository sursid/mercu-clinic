<?php

// Vercel API entry point for Laravel
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// Set the correct path to the Laravel application
define('LARAVEL_START', microtime(true));

// Set proper server variables for Vercel
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Ensure REQUEST_URI is set
if (!isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = '/';
}

// Set environment for production
putenv('APP_ENV=production');

// Change to the Laravel root directory
chdir(__DIR__ . '/..');

// Ensure the autoloader is available
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

// Bootstrap Laravel application
if (file_exists(__DIR__ . '/../bootstrap/app.php')) {
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    $request = Illuminate\Http\Request::capture();
    
    $response = $kernel->handle($request);
    
    $response->send();
    
    $kernel->terminate($request, $response);
} else {
    // Fallback to the public index.php
    require_once __DIR__ . '/../public/index.php';
}
