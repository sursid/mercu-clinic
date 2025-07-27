# Laravel to Vercel Deployment Script
param(
    [switch]$SkipEnvSetup,
    [switch]$Force,
    [string]$Domain = ""
)

Write-Host "🚀 Laravel to Vercel Deployment" -ForegroundColor Green
Write-Host "================================" -ForegroundColor Green

# Check if Node.js is installed
try {
    $nodeVersion = node --version
    Write-Host "✅ Node.js: $nodeVersion" -ForegroundColor Green
} catch {
    Write-Host "❌ Node.js is not installed. Please install Node.js first." -ForegroundColor Red
    Write-Host "Download from: https://nodejs.org/" -ForegroundColor Cyan
    exit 1
}

# Check if PHP is installed
try {
    $phpVersion = php --version | Select-Object -First 1
    Write-Host "✅ PHP: $phpVersion" -ForegroundColor Green
} catch {
    Write-Host "❌ PHP is not installed. Please install PHP first." -ForegroundColor Red
    exit 1
}

# Install Vercel CLI if not already installed
try {
    $vercelVersion = vercel --version
    Write-Host "✅ Vercel CLI: $vercelVersion" -ForegroundColor Green
} catch {
    Write-Host "📦 Installing Vercel CLI..." -ForegroundColor Yellow
    npm install -g vercel
    if ($LASTEXITCODE -ne 0) {
        Write-Host "❌ Failed to install Vercel CLI" -ForegroundColor Red
        exit 1
    }
}

# Login to Vercel (if not already logged in)
Write-Host "`n🔐 Checking Vercel authentication..." -ForegroundColor Yellow
$whoami = vercel whoami 2>$null
if ($LASTEXITCODE -ne 0) {
    Write-Host "Please login to Vercel:" -ForegroundColor Cyan
    vercel login
    if ($LASTEXITCODE -ne 0) {
        Write-Host "❌ Vercel login failed" -ForegroundColor Red
        exit 1
    }
} else {
    Write-Host "✅ Logged in as: $whoami" -ForegroundColor Green
}

# Generate application key
Write-Host "`n🔑 Generating application key..." -ForegroundColor Yellow
$appKey = php artisan key:generate --show
if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Failed to generate application key" -ForegroundColor Red
    exit 1
}
Write-Host "✅ Generated APP_KEY" -ForegroundColor Green

# Set up environment variables (unless skipped)
if (-not $SkipEnvSetup) {
    Write-Host "`n🔧 Setting up environment variables..." -ForegroundColor Yellow
    $env:APP_KEY = $appKey
    if ($Domain) {
        $env:APP_URL = "https://$Domain"
    }
    .\setup-env.ps1
}

# Deploy to Vercel
Write-Host "`n🚀 Deploying to Vercel..." -ForegroundColor Yellow

$deployArgs = @("--prod")
if ($Force) {
    $deployArgs += "--force"
}

vercel @deployArgs
$deployExitCode = $LASTEXITCODE

if ($deployExitCode -eq 0) {
    Write-Host "`n🎉 Deployment completed successfully!" -ForegroundColor Green
    
    # Get deployment URL
    $deploymentInfo = vercel ls --scope $(vercel whoami) | Select-Object -First 5
    Write-Host "`n📋 Deployment Information:" -ForegroundColor Cyan
    Write-Host $deploymentInfo
    
    Write-Host "`n📝 Next Steps:" -ForegroundColor Cyan
    Write-Host "1. Visit your deployment URL to verify it's working" -ForegroundColor White
    Write-Host "2. Update APP_URL in Vercel dashboard with your actual domain" -ForegroundColor White
    Write-Host "3. Run database migrations: visit /api/migrate.php" -ForegroundColor White
    Write-Host "4. Access admin panel at: /admin" -ForegroundColor White
    
    Write-Host "`n🛠️ Useful Commands:" -ForegroundColor Cyan
    Write-Host "• View logs: vercel logs" -ForegroundColor White
    Write-Host "• Check status: vercel ls" -ForegroundColor White
    Write-Host "• Set custom domain: vercel domains add yourdomain.com" -ForegroundColor White
    
} else {
    Write-Host "`n❌ Deployment failed!" -ForegroundColor Red
    Write-Host "Check the error messages above and try again." -ForegroundColor Red
    Write-Host "You can also check logs with: vercel logs" -ForegroundColor Yellow
    exit $deployExitCode
}

Read-Host "`nPress Enter to continue..."
