<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class VercelPublishAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vercel:publish-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish assets for Vercel deployment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
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
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');

        $this->info('Assets published successfully!');
    }
}
