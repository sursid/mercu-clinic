# Laravel Deployment ke Vercel

## Persiapan Deployment

### 1. Install Vercel CLI
```bash
npm install -g vercel
```

### 2. Login ke Vercel
```bash
vercel login
```

### 3. Generate Application Key
```bash
php artisan key:generate --show
```
Simpan key ini untuk digunakan di environment variables Vercel.

## File Konfigurasi

File-file berikut telah disiapkan untuk deployment:

- `vercel.json` - Konfigurasi utama Vercel
- `api/index.php` - Entry point untuk serverless function
- `.vercelignore` - File yang diabaikan saat deployment
- `.env.production` - Template environment variables untuk production

## Cara Deploy

### Opsi 1: Manual Deploy
1. Jalankan `vercel` di terminal
2. Pilih project settings yang sesuai
3. Set environment variables di Vercel dashboard

### Opsi 2: Menggunakan Script
1. Jalankan `deploy.bat` (Windows) atau `deploy.sh` (Linux/Mac)
2. Script akan otomatis setup environment variables dan deploy

## Environment Variables yang Diperlukan

Set environment variables berikut di Vercel dashboard:

```
APP_NAME=Laravel Mercubuana
APP_ENV=production
APP_KEY=[generated key dari artisan key:generate]
APP_DEBUG=false
APP_URL=https://yourapp.vercel.app
DB_CONNECTION=sqlite
DB_DATABASE=/tmp/database.sqlite
CACHE_DRIVER=array
SESSION_DRIVER=cookie
LOG_CHANNEL=stderr
QUEUE_CONNECTION=sync
```

## Database

Karena Vercel adalah serverless platform, disarankan menggunakan:
- **SQLite** untuk development/testing (sudah dikonfigurasi)
- **PostgreSQL/MySQL hosted** untuk production (seperti PlanetScale, Supabase, atau Railway)

### Untuk menggunakan database eksternal:
1. Ganti `DB_CONNECTION` ke `mysql` atau `pgsql`
2. Set `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

## File Storage

Untuk file uploads, disarankan menggunakan:
- AWS S3
- Cloudinary
- Supabase Storage

Set environment variables:
```
FILESYSTEM_DISK=s3
AWS_ACCESS_KEY_ID=your-access-key
AWS_SECRET_ACCESS_KEY=your-secret-key
AWS_DEFAULT_REGION=your-region
AWS_BUCKET=your-bucket-name
```

## Troubleshooting

### Error "Class not found"
Pastikan autoloader sudah di-optimize:
```bash
composer install --optimize-autoloader --no-dev
```

### Error permissions
Vercel secara otomatis handle permissions untuk `/tmp` directory.

### Database migrations
Jalankan migrations setelah deployment:
```bash
vercel env pull .env.local
php artisan migrate --force
```

## Commands Berguna

```bash
# Deploy ke production
vercel --prod

# Check deployment logs
vercel logs

# Set environment variable
vercel env add VARIABLE_NAME value production

# Pull environment variables
vercel env pull .env.local
```

## Catatan Penting

1. Vercel memiliki time limit 10 detik untuk serverless functions pada free plan
2. File system bersifat read-only kecuali di `/tmp`
3. Setiap request adalah "cold start" kecuali ada request berturut-turut
4. Untuk aplikasi dengan traffic tinggi, pertimbangkan upgrade ke plan berbayar
