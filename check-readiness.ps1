# Deployment Checklist

Write-Host "🔍 Checking Laravel Vercel deployment readiness..." -ForegroundColor Cyan

$errors = @()
$warnings = @()

# Check required files
$requiredFiles = @(
    "vercel.json",
    "api/index.php",
    ".vercelignore",
    ".env.production",
    "composer.json"
)

Write-Host "`n📁 Checking required files..." -ForegroundColor Yellow
foreach ($file in $requiredFiles) {
    if (Test-Path $file) {
        Write-Host "  ✅ $file" -ForegroundColor Green
    } else {
        Write-Host "  ❌ $file" -ForegroundColor Red
        $errors += "Missing file: $file"
    }
}

# Check PHP version
Write-Host "`n🐘 Checking PHP..." -ForegroundColor Yellow
try {
    $phpVersion = php --version
    Write-Host "  ✅ PHP installed: $($phpVersion.Split("`n")[0])" -ForegroundColor Green
} catch {
    Write-Host "  ❌ PHP not found" -ForegroundColor Red
    $errors += "PHP is not installed or not in PATH"
}

# Check Composer
Write-Host "`n📦 Checking Composer..." -ForegroundColor Yellow
try {
    $composerVersion = composer --version
    Write-Host "  ✅ Composer installed: $($composerVersion.Split("`n")[0])" -ForegroundColor Green
} catch {
    Write-Host "  ❌ Composer not found" -ForegroundColor Red
    $errors += "Composer is not installed or not in PATH"
}

# Check Laravel installation
Write-Host "`n🎯 Checking Laravel..." -ForegroundColor Yellow
if (Test-Path "artisan") {
    try {
        $laravelVersion = php artisan --version
        Write-Host "  ✅ Laravel installed: $laravelVersion" -ForegroundColor Green
    } catch {
        Write-Host "  ⚠️  Laravel found but artisan not working" -ForegroundColor Yellow
        $warnings += "Artisan command not working properly"
    }
} else {
    Write-Host "  ❌ Laravel not found (missing artisan)" -ForegroundColor Red
    $errors += "Laravel is not properly installed"
}

# Check .env file
Write-Host "`n🔧 Checking environment..." -ForegroundColor Yellow
if (Test-Path ".env") {
    Write-Host "  ✅ .env file exists" -ForegroundColor Green
} else {
    Write-Host "  ⚠️  .env file not found" -ForegroundColor Yellow
    $warnings += ".env file not found - will use .env.production in deployment"
}

# Check Node.js (for Vercel CLI)
Write-Host "`n🟢 Checking Node.js..." -ForegroundColor Yellow
try {
    $nodeVersion = node --version
    Write-Host "  ✅ Node.js installed: $nodeVersion" -ForegroundColor Green
} catch {
    Write-Host "  ❌ Node.js not found" -ForegroundColor Red
    $errors += "Node.js is required for Vercel CLI"
}

# Check Vercel CLI
Write-Host "`n☁️  Checking Vercel CLI..." -ForegroundColor Yellow
try {
    $vercelVersion = vercel --version
    Write-Host "  ✅ Vercel CLI installed: $vercelVersion" -ForegroundColor Green
} catch {
    Write-Host "  ⚠️  Vercel CLI not found" -ForegroundColor Yellow
    $warnings += "Vercel CLI not installed - will be installed during deployment"
}

# Check vendor directory
Write-Host "`n📚 Checking dependencies..." -ForegroundColor Yellow
if (Test-Path "vendor") {
    Write-Host "  ✅ Vendor directory exists" -ForegroundColor Green
} else {
    Write-Host "  ⚠️  Vendor directory not found" -ForegroundColor Yellow
    $warnings += "Run 'composer install' before deployment"
}

# Results
Write-Host "`n" -NoNewline
Write-Host "="*50 -ForegroundColor Cyan
Write-Host "🎯 DEPLOYMENT READINESS REPORT" -ForegroundColor Cyan
Write-Host "="*50 -ForegroundColor Cyan

if ($errors.Count -eq 0) {
    Write-Host "`n✅ NO CRITICAL ERRORS FOUND!" -ForegroundColor Green
    Write-Host "Your Laravel project is ready for Vercel deployment." -ForegroundColor Green
    
    if ($warnings.Count -gt 0) {
        Write-Host "`n⚠️  WARNINGS:" -ForegroundColor Yellow
        foreach ($warning in $warnings) {
            Write-Host "  • $warning" -ForegroundColor Yellow
        }
    }
    
    Write-Host "`n🚀 Ready to deploy! Run: .\deploy.ps1" -ForegroundColor Green
} else {
    Write-Host "`n❌ CRITICAL ERRORS FOUND:" -ForegroundColor Red
    foreach ($error in $errors) {
        Write-Host "  • $error" -ForegroundColor Red
    }
    
    if ($warnings.Count -gt 0) {
        Write-Host "`n⚠️  WARNINGS:" -ForegroundColor Yellow
        foreach ($warning in $warnings) {
            Write-Host "  • $warning" -ForegroundColor Yellow
        }
    }
    
    Write-Host "`n🛠️  Please fix the errors above before deployment." -ForegroundColor Red
}

Write-Host "`n📖 For detailed instructions, see QUICK_START.md" -ForegroundColor Cyan
