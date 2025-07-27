# Test Local Deployment Configuration
Write-Host "🧪 Testing Laravel Vercel Configuration Locally" -ForegroundColor Cyan
Write-Host "=============================================" -ForegroundColor Cyan

$testsPassed = 0
$testsFailed = 0

function Test-Requirement {
    param($Name, $Test, $SuccessMessage, $FailMessage)
    
    Write-Host "`n🔍 Testing: $Name" -ForegroundColor Yellow
    
    try {
        $result = Invoke-Expression $Test
        if ($LASTEXITCODE -eq 0 -and $result) {
            Write-Host "  ✅ $SuccessMessage" -ForegroundColor Green
            $script:testsPassed++
            return $true
        } else {
            Write-Host "  ❌ $FailMessage" -ForegroundColor Red
            $script:testsFailed++
            return $false
        }
    } catch {
        Write-Host "  ❌ $FailMessage" -ForegroundColor Red
        $script:testsFailed++
        return $false
    }
}

# Test PHP
Test-Requirement "PHP Installation" "php --version" "PHP is installed and working" "PHP not found or not working"

# Test Composer
Test-Requirement "Composer Installation" "composer --version" "Composer is installed and working" "Composer not found or not working"

# Test Laravel
Test-Requirement "Laravel Artisan" "php artisan --version" "Laravel is properly installed" "Laravel not working properly"

# Test required files
$requiredFiles = @(
    "vercel.json",
    "api/index.php", 
    ".vercelignore",
    ".env.production",
    "composer.json"
)

Write-Host "`n📁 Testing Required Files:" -ForegroundColor Yellow
foreach ($file in $requiredFiles) {
    if (Test-Path $file) {
        Write-Host "  ✅ $file exists" -ForegroundColor Green
        $testsPassed++
    } else {
        Write-Host "  ❌ $file missing" -ForegroundColor Red
        $testsFailed++
    }
}

# Test vercel.json syntax
Write-Host "`n🔧 Testing vercel.json syntax:" -ForegroundColor Yellow
try {
    $vercelConfig = Get-Content "vercel.json" | ConvertFrom-Json
    Write-Host "  ✅ vercel.json is valid JSON" -ForegroundColor Green
    $testsPassed++
    
    # Check required fields
    if ($vercelConfig.version -eq 2) {
        Write-Host "  ✅ Correct Vercel version (2)" -ForegroundColor Green
        $testsPassed++
    } else {
        Write-Host "  ❌ Incorrect Vercel version" -ForegroundColor Red
        $testsFailed++
    }
    
    if ($vercelConfig.builds) {
        Write-Host "  ✅ Builds configuration present" -ForegroundColor Green
        $testsPassed++
    } else {
        Write-Host "  ❌ Missing builds configuration" -ForegroundColor Red
        $testsFailed++
    }
    
} catch {
    Write-Host "  ❌ vercel.json has syntax errors" -ForegroundColor Red
    $testsFailed++
}

# Test custom artisan command
Write-Host "`n⚙️ Testing Custom Commands:" -ForegroundColor Yellow
try {
    $commands = php artisan list | Select-String "vercel"
    if ($commands) {
        Write-Host "  ✅ vercel:publish-assets command available" -ForegroundColor Green
        $testsPassed++
    } else {
        Write-Host "  ❌ vercel commands not found" -ForegroundColor Red
        $testsFailed++
    }
} catch {
    Write-Host "  ❌ Error checking artisan commands" -ForegroundColor Red
    $testsFailed++
}

# Test Node.js (for Vercel CLI)
Test-Requirement "Node.js" "node --version" "Node.js is installed" "Node.js not found"

# Test npm
Test-Requirement "npm" "npm --version" "npm is available" "npm not found"

# Test dependencies
Write-Host "`n📦 Testing Dependencies:" -ForegroundColor Yellow
if (Test-Path "vendor") {
    Write-Host "  ✅ Composer dependencies installed" -ForegroundColor Green
    $testsPassed++
} else {
    Write-Host "  ⚠️  Run 'composer install' first" -ForegroundColor Yellow
    $testsFailed++
}

# Test environment
Write-Host "`n🔧 Testing Environment:" -ForegroundColor Yellow
if (Test-Path ".env") {
    Write-Host "  ✅ .env file exists" -ForegroundColor Green
    $testsPassed++
} else {
    Write-Host "  ⚠️  .env file not found (will use .env.production)" -ForegroundColor Yellow
}

if (Test-Path ".env.production") {
    Write-Host "  ✅ .env.production exists" -ForegroundColor Green
    $testsPassed++
} else {
    Write-Host "  ❌ .env.production missing" -ForegroundColor Red
    $testsFailed++
}

# Summary
Write-Host "`n===============================================" -ForegroundColor Cyan
Write-Host "📊 TEST SUMMARY" -ForegroundColor Cyan
Write-Host "===============================================" -ForegroundColor Cyan

Write-Host "`n✅ Tests Passed: $testsPassed" -ForegroundColor Green
Write-Host "❌ Tests Failed: $testsFailed" -ForegroundColor Red

if ($testsFailed -eq 0) {
    Write-Host "`n🎉 ALL TESTS PASSED!" -ForegroundColor Green
    Write-Host "Your Laravel application is ready for Vercel deployment!" -ForegroundColor Green
    Write-Host "`n🚀 Ready to deploy? Run: .\deploy.ps1" -ForegroundColor Cyan
} elseif ($testsFailed -le 2) {
    Write-Host "`n⚠️  MINOR ISSUES FOUND" -ForegroundColor Yellow
    Write-Host "You can probably deploy, but fix the issues above for best results." -ForegroundColor Yellow
    Write-Host "`n🚀 Deploy anyway? Run: .\deploy.ps1 -Force" -ForegroundColor Cyan
} else {
    Write-Host "`n❌ MAJOR ISSUES FOUND" -ForegroundColor Red
    Write-Host "Please fix the errors above before deploying." -ForegroundColor Red
    Write-Host "`n📖 Check VERCEL_DEPLOYMENT.md for troubleshooting help." -ForegroundColor Cyan
}

Write-Host "`n📚 Documentation:" -ForegroundColor Cyan
Write-Host "• Quick Start: QUICK_START.md" -ForegroundColor White
Write-Host "• Detailed Guide: VERCEL_DEPLOYMENT.md" -ForegroundColor White
Write-Host "• Main README: README_VERCEL.md" -ForegroundColor White
