<?php

// Migration handler for Vercel deployment
// Run this endpoint after deployment to setup database

define('LARAVEL_START', microtime(true));

require_once __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

// Set up storage path for Vercel
if (app()->environment('production')) {
    $tempDirs = ['/tmp/storage', '/tmp/storage/framework', '/tmp/storage/framework/cache', '/tmp/storage/framework/sessions', '/tmp/storage/framework/views', '/tmp/storage/logs'];
    foreach ($tempDirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
    }
    $app->useStoragePath('/tmp/storage');
}

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

echo "Setting up database for Vercel...\n";

// Check if database exists, if not create it
$dbPath = env('DB_DATABASE', '/tmp/database.sqlite');
if (!file_exists($dbPath)) {
    touch($dbPath);
    chmod($dbPath, 0666);
    echo "Created SQLite database at: $dbPath\n";
}

try {
    // Run migrations
    echo "Running migrations...\n";
    $kernel->call('migrate', ['--force' => true]);
    echo "Migrations completed successfully!\n";

    // Run seeders if in development or if explicitly requested
    if (isset($_GET['seed']) && $_GET['seed'] === 'true') {
        echo "Running seeders...\n";
        $kernel->call('db:seed', ['--force' => true]);
        echo "Seeders completed successfully!\n";
    }

    echo "\n✅ Database setup completed successfully!\n";
    echo "Access your application at: " . env('APP_URL', 'https://yourapp.vercel.app') . "\n";
    echo "Access admin panel at: " . env('APP_URL', 'https://yourapp.vercel.app') . "/admin\n";

} catch (Exception $e) {
    echo "❌ Error during database setup: " . $e->getMessage() . "\n";
    http_response_code(500);
}

echo "\nDatabase setup process completed.\n";
