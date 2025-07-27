#!/usr/bin/env pwsh

# Vercel Deployment Script - Updated for PHP Runtime Detection
Write-Host "🚀 Starting Vercel deployment with PHP runtime detection fixes..." -ForegroundColor Green

# Check if vercel CLI is installed
if (-not (Get-Command vercel -ErrorAction SilentlyContinue)) {
    Write-Host "❌ Vercel CLI not found. Installing..." -ForegroundColor Red
    npm install -g vercel@latest
}

# Clean up any existing build artifacts
Write-Host "🧹 Cleaning up build artifacts..." -ForegroundColor Yellow
if (Test-Path "node_modules") { Remove-Item -Recurse -Force "node_modules" }
if (Test-Path "vendor") { Remove-Item -Recurse -Force "vendor" }
if (Test-Path "bootstrap/cache/*.php") { Remove-Item -Force "bootstrap/cache/*.php" }

# Fresh install dependencies
Write-Host "📦 Installing fresh dependencies..." -ForegroundColor Yellow
npm install
composer install --no-dev --optimize-autoloader

# Build assets
Write-Host "🏗️ Building assets..." -ForegroundColor Yellow
npm run build

# Run composer vercel-build script
Write-Host "⚙️ Running Vercel build optimizations..." -ForegroundColor Yellow
composer run vercel-build

# Verify critical files exist
Write-Host "✅ Verifying deployment files..." -ForegroundColor Yellow
$criticalFiles = @(
    "vercel.json",
    "api/index.php",
    "api/composer.json",
    "index.php",
    ".vercel/project.json",
    "composer.json",
    "package.json"
)

foreach ($file in $criticalFiles) {
    if (-not (Test-Path $file)) {
        Write-Host "❌ Critical file missing: $file" -ForegroundColor Red
        exit 1
    } else {
        Write-Host "✅ Found: $file" -ForegroundColor Green
    }
}

# Show current vercel.json configuration
Write-Host "`n📋 Current vercel.json configuration:" -ForegroundColor Cyan
Get-Content "vercel.json" | Write-Host

# Deploy to Vercel
Write-Host "`n🚀 Deploying to Vercel..." -ForegroundColor Green
vercel --prod

Write-Host "`n🎉 Deployment completed!" -ForegroundColor Green
Write-Host "📝 Don't forget to set environment variables in Vercel dashboard:" -ForegroundColor Yellow
Write-Host "   - APP_KEY (generate with: php artisan key:generate --show)" -ForegroundColor White
Write-Host "   - APP_ENV=production" -ForegroundColor White
Write-Host "   - APP_DEBUG=false" -ForegroundColor White
Write-Host "   - DATABASE_URL or DB_* variables" -ForegroundColor White
