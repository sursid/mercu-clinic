# Laravel to Netlify Build Script
Write-Host "Starting Laravel build for Netlify deployment..." -ForegroundColor Green

# Install NPM dependencies
Write-Host "Installing NPM dependencies..." -ForegroundColor Yellow
npm install

# Install Composer dependencies for production
Write-Host "Installing Composer dependencies..." -ForegroundColor Yellow
composer install --no-dev --optimize-autoloader

# Clear Laravel caches
Write-Host "Clearing Laravel caches..." -ForegroundColor Yellow
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Generate optimized files for production
Write-Host "Generating optimized files..." -ForegroundColor Yellow
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build assets with Vite
Write-Host "Building assets with Vite..." -ForegroundColor Yellow
npm run build

# Copy necessary Laravel files to dist directory
Write-Host "Preparing files for Netlify..." -ForegroundColor Yellow
if (Test-Path "dist") {
    # Copy public directory contents (except index.php which is handled by functions)
    Copy-Item "public\*" "dist\" -Recurse -Force -Exclude "index.php"
    
    # Copy other necessary directories
    New-Item -Path "dist\app" -ItemType Directory -Force
    Copy-Item "app\*" "dist\app\" -Recurse -Force
    
    New-Item -Path "dist\bootstrap" -ItemType Directory -Force
    Copy-Item "bootstrap\*" "dist\bootstrap\" -Recurse -Force
    
    New-Item -Path "dist\config" -ItemType Directory -Force
    Copy-Item "config\*" "dist\config\" -Recurse -Force
    
    New-Item -Path "dist\database" -ItemType Directory -Force
    Copy-Item "database\*" "dist\database\" -Recurse -Force
    
    New-Item -Path "dist\routes" -ItemType Directory -Force
    Copy-Item "routes\*" "dist\routes\" -Recurse -Force
    
    New-Item -Path "dist\storage" -ItemType Directory -Force
    Copy-Item "storage\*" "dist\storage\" -Recurse -Force
    
    New-Item -Path "dist\vendor" -ItemType Directory -Force
    Copy-Item "vendor\*" "dist\vendor\" -Recurse -Force
    
    # Copy essential files
    Copy-Item "artisan" "dist\" -Force
    Copy-Item "composer.json" "dist\" -Force
    Copy-Item "composer.lock" "dist\" -Force
}

Write-Host "Build completed successfully!" -ForegroundColor Green
Write-Host "Files are ready in the 'dist' directory for Netlify deployment." -ForegroundColor Cyan
