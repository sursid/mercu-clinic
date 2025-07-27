#!/bin/bash

# Laravel to Netlify Build Script
echo "Starting Laravel build for Netlify deployment..."

# Install NPM dependencies
echo "Installing NPM dependencies..."
npm install

# Install Composer dependencies for production
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Clear Laravel caches
echo "Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Generate optimized files for production
echo "Generating optimized files..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets with Vite
echo "Building assets with Vite..."
npm run build

# Copy necessary Laravel files to dist directory
echo "Preparing files for Netlify..."
if [ -d "dist" ]; then
    # Copy public directory contents (except index.php which is handled by functions)
    find public -type f ! -name "index.php" -exec cp {} dist/ \;
    
    # Copy other necessary directories
    mkdir -p dist/app && cp -r app/* dist/app/
    mkdir -p dist/bootstrap && cp -r bootstrap/* dist/bootstrap/
    mkdir -p dist/config && cp -r config/* dist/config/
    mkdir -p dist/database && cp -r database/* dist/database/
    mkdir -p dist/routes && cp -r routes/* dist/routes/
    mkdir -p dist/storage && cp -r storage/* dist/storage/
    mkdir -p dist/vendor && cp -r vendor/* dist/vendor/
    
    # Copy essential files
    cp artisan dist/
    cp composer.json dist/
    cp composer.lock dist/
fi

echo "Build completed successfully!"
echo "Files are ready in the 'dist' directory for Netlify deployment."
