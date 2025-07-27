<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\VercelPublishAssets;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Register Vercel commands
Artisan::command('vercel:publish-assets', function () {
    $this->info('Publishing assets for Vercel deployment...');

    // Publish Filament assets
    $this->call('vendor:publish', [
        '--tag' => 'filament-assets',
        '--force' => true
    ]);

    // Clear and cache configurations
    $this->call('config:clear');
    $this->call('route:clear');
    $this->call('view:clear');

    // Optimize for production
    if (app()->environment('production')) {
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');
    }

    $this->info('Assets published successfully!');
})->purpose('Publish assets for Vercel deployment');
