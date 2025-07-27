# Set Environment Variables for Vercel
Write-Host "🔧 Setting up Vercel environment variables..." -ForegroundColor Cyan

# Generate APP_KEY if not provided
$appKey = $env:APP_KEY
if (-not $appKey) {
    Write-Host "Generating new APP_KEY..." -ForegroundColor Yellow
    $appKey = php artisan key:generate --show
    if ($LASTEXITCODE -ne 0) {
        Write-Host "❌ Failed to generate APP_KEY" -ForegroundColor Red
        exit 1
    }
}

# Required environment variables
$envVars = @{
    "APP_KEY" = $appKey
    "APP_ENV" = "production"
    "APP_DEBUG" = "false"
    "APP_URL" = "https://yourapp.vercel.app"
    "APP_NAME" = "Laravel Mercubuana"
    "DB_CONNECTION" = "sqlite"
    "DB_DATABASE" = "/tmp/database.sqlite"
    "CACHE_DRIVER" = "array"
    "SESSION_DRIVER" = "cookie"
    "LOG_CHANNEL" = "stderr"
    "QUEUE_CONNECTION" = "sync"
    "FILESYSTEM_DISK" = "local"
    "VIEW_COMPILED_PATH" = "/tmp/views"
    "APP_CONFIG_CACHE" = "/tmp/config.php"
    "APP_EVENTS_CACHE" = "/tmp/events.php"
    "APP_PACKAGES_CACHE" = "/tmp/packages.php"
    "APP_ROUTES_CACHE" = "/tmp/routes.php"
    "APP_SERVICES_CACHE" = "/tmp/services.php"
}

Write-Host "`nSetting environment variables on Vercel..." -ForegroundColor Yellow

foreach ($key in $envVars.Keys) {
    $value = $envVars[$key]
    Write-Host "Setting $key..." -ForegroundColor Gray
    
    try {
        vercel env add $key $value production --yes 2>$null
        if ($LASTEXITCODE -eq 0) {
            Write-Host "  ✅ $key" -ForegroundColor Green
        } else {
            # Variable might already exist, try to update
            vercel env rm $key production --yes 2>$null
            vercel env add $key $value production --yes 2>$null
            if ($LASTEXITCODE -eq 0) {
                Write-Host "  ✅ $key (updated)" -ForegroundColor Green
            } else {
                Write-Host "  ⚠️  $key (manual setup required)" -ForegroundColor Yellow
            }
        }
    } catch {
        Write-Host "  ⚠️  $key (manual setup required)" -ForegroundColor Yellow
    }
}

Write-Host "`n✅ Environment variables setup completed!" -ForegroundColor Green
Write-Host "`n📝 Don't forget to:" -ForegroundColor Cyan
Write-Host "1. Update APP_URL with your actual Vercel domain" -ForegroundColor White
Write-Host "2. Run migrations after deployment: visit /api/migrate.php" -ForegroundColor White
Write-Host "3. Check your deployment at: https://yourapp.vercel.app" -ForegroundColor White
