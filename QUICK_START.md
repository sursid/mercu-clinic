# Quick Start - Laravel to Vercel Deployment

## 🚀 Deployment dalam 3 Langkah

### 1. Install Vercel CLI
```powershell
npm install -g vercel
```

### 2. Login ke Vercel
```powershell
vercel login
```

### 3. Deploy!
**Pilih salah satu:**

#### Opsi A: Gunakan PowerShell Script (Recommended untuk Windows)
```powershell
.\deploy.ps1
```

#### Opsi B: Manual Deploy
```powershell
# Generate app key
$appKey = php artisan key:generate --show

# Deploy
vercel --prod

# Set environment variables di Vercel dashboard:
# APP_KEY=$appKey
# APP_ENV=production
# APP_DEBUG=false
# Dan variables lainnya dari .env.production
```

## ✅ Yang Sudah Dikonfigurasi

- ✅ `vercel.json` - Konfigurasi Vercel optimized untuk Laravel + Filament
- ✅ `api/index.php` - Serverless function entry point
- ✅ `.vercelignore` - File yang diabaikan saat deploy
- ✅ `composer.json` - Build scripts untuk Vercel
- ✅ Environment variables template
- ✅ Storage path optimization untuk serverless
- ✅ Asset routing untuk Filament
- ✅ Database SQLite setup
- ✅ Cache optimization

## 🔧 Environment Variables yang Diperlukan

Set di Vercel Dashboard:
```
APP_KEY=[dari php artisan key:generate --show]
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourapp.vercel.app
```

## 📁 File Structure Created

```
project/
├── vercel.json              # Vercel configuration
├── api/
│   ├── index.php           # Laravel entry point
│   └── migrate.php         # Database migration helper
├── .vercelignore           # Ignore patterns
├── .env.production         # Production environment template
├── deploy.ps1              # PowerShell deployment script
├── deploy.bat              # Batch deployment script
├── deploy.sh               # Bash deployment script
└── VERCEL_DEPLOYMENT.md    # Detailed documentation
```

## 🛠️ Troubleshooting

### Database tidak bisa diakses
```powershell
# Pull environment variables
vercel env pull .env.local

# Run migrations
php artisan migrate --force
```

### Filament assets tidak muncul
```powershell
php artisan vendor:publish --tag=filament-assets --force
```

### Error permissions
Vercel otomatis handle `/tmp` directory permissions.

## 📚 Documentation

Lihat `VERCEL_DEPLOYMENT.md` untuk dokumentasi lengkap.

---
**Ready to deploy! 🚀**
