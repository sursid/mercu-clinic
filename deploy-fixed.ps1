# Laravel to Vercel Deployment Script
Write-Host "🚀 Starting Laravel deployment to Vercel..." -ForegroundColor Green

# Check if Node.js is installed
try {
    $nodeVersion = node --version
    Write-Host "✅ Node.js version: $nodeVersion" -ForegroundColor Yellow
} catch {
    Write-Host "❌ Node.js is not installed. Please install Node.js first." -ForegroundColor Red
    exit 1
}

# Install Vercel CLI if not already installed
try {
    $vercelVersion = vercel --version
    Write-Host "✅ Vercel CLI version: $vercelVersion" -ForegroundColor Yellow
} catch {
    Write-Host "📦 Installing Vercel CLI..." -ForegroundColor Yellow
    npm install -g vercel
}

# Check if PHP is available
try {
    $phpVersion = php --version
    Write-Host "✅ PHP version: $($phpVersion.Split("`n")[0])" -ForegroundColor Yellow
} catch {
    Write-Host "❌ PHP is not installed. Please install PHP first." -ForegroundColor Red
    exit 1
}

# Generate application key
Write-Host "🔑 Generating application key..." -ForegroundColor Yellow
try {
    $appKey = php artisan key:generate --show
    Write-Host "✅ Generated APP_KEY" -ForegroundColor Green
} catch {
    Write-Host "❌ Failed to generate application key. Make sure Laravel is properly installed." -ForegroundColor Red
    exit 1
}

# Login to Vercel (if not already logged in)
Write-Host "🔐 Checking Vercel authentication..." -ForegroundColor Yellow
$whoami = vercel whoami 2>$null
if ($LASTEXITCODE -ne 0) {
    Write-Host "📋 Please login to Vercel:"
    vercel login
}

# Set environment variables
Write-Host "⚙️  Setting up environment variables..." -ForegroundColor Yellow
Write-Host "Setting APP_KEY..." -ForegroundColor Gray
vercel env add APP_KEY $appKey production --yes 2>$null
Write-Host "Setting APP_ENV..." -ForegroundColor Gray
vercel env add APP_ENV production production --yes 2>$null
Write-Host "Setting APP_DEBUG..." -ForegroundColor Gray
vercel env add APP_DEBUG false production --yes 2>$null
Write-Host "Setting APP_URL..." -ForegroundColor Gray
vercel env add APP_URL https://yourapp.vercel.app production --yes 2>$null
Write-Host "Setting Cache settings..." -ForegroundColor Gray
vercel env add CACHE_DRIVER array production --yes 2>$null
vercel env add SESSION_DRIVER cookie production --yes 2>$null
vercel env add LOG_CHANNEL stderr production --yes 2>$null
vercel env add QUEUE_CONNECTION sync production --yes 2>$null
Write-Host "Setting Database..." -ForegroundColor Gray
vercel env add DB_CONNECTION sqlite production --yes 2>$null
vercel env add DB_DATABASE /tmp/database.sqlite production --yes 2>$null

# Test our artisan command
Write-Host "🔧 Testing Vercel publish assets command..." -ForegroundColor Yellow
try {
    php artisan vercel:publish-assets
    Write-Host "✅ Assets command works!" -ForegroundColor Green
} catch {
    Write-Host "⚠️  Assets command failed, but continuing..." -ForegroundColor Yellow
}

# Deploy to Vercel
Write-Host "🚀 Deploying to Vercel..." -ForegroundColor Yellow
vercel --prod

if ($LASTEXITCODE -eq 0) {
    Write-Host ""
    Write-Host "🎉 DEPLOYMENT SUCCESSFUL!" -ForegroundColor Green
    Write-Host ""
    Write-Host "📋 Next steps:" -ForegroundColor Cyan
    Write-Host "1. Update APP_URL in Vercel dashboard with your actual domain" -ForegroundColor White
    Write-Host "2. Test your application" -ForegroundColor White
    Write-Host "3. Access admin panel at /admin" -ForegroundColor White
    Write-Host "4. Visit /api/migrate.php to run migrations" -ForegroundColor White
    Write-Host ""
    Write-Host "🌐 Your Laravel app is now live on Vercel!" -ForegroundColor Green
} else {
    Write-Host ""
    Write-Host "❌ DEPLOYMENT FAILED!" -ForegroundColor Red
    Write-Host "Please check the error messages above." -ForegroundColor Red
    Write-Host "You can also check logs with: vercel logs" -ForegroundColor Yellow
}

Write-Host ""
Read-Host "Press Enter to continue..."
