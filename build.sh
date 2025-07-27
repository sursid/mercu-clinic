#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Copy production environment
cp .env.production .env

# Publish Filament assets and optimize for production
php artisan vercel:publish-assets

# Create storage directories if they don't exist
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Set proper permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Build completed successfully!"
