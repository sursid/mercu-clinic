@echo off
echo Starting Laravel deployment to Vercel...

echo Installing Vercel CLI...
npm install -g vercel

echo Generating application key...
php artisan key:generate --show > temp_key.txt
set /p APP_KEY=<temp_key.txt
del temp_key.txt

echo Setting up environment variables...
vercel env add APP_KEY %APP_KEY% production
vercel env add APP_ENV production production
vercel env add APP_DEBUG false production
vercel env add APP_URL https://yourapp.vercel.app production

echo Deploying to Vercel...
vercel --prod

echo Deployment completed!
echo Don't forget to:
echo 1. Update APP_URL in Vercel dashboard with your actual domain
echo 2. Set up your database connection in Vercel environment variables
echo 3. Run migrations if needed

pause
