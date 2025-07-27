#!/bin/bash

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Clear and cache configurations for production
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Cache configurations for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Laravel build completed successfully!"
