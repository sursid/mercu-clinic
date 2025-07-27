#!/bin/bash

echo "Starting Laravel deployment to Vercel..."

# Check if Vercel CLI is installed
if ! command -v vercel &> /dev/null; then
    echo "Installing Vercel CLI..."
    npm install -g vercel
fi

# Generate application key
echo "Generating application key..."
APP_KEY=$(php artisan key:generate --show)

echo "Setting up environment variables..."
vercel env add APP_KEY "$APP_KEY" production
vercel env add APP_ENV production production
vercel env add APP_DEBUG false production
vercel env add APP_URL https://yourapp.vercel.app production
vercel env add CACHE_DRIVER array production
vercel env add SESSION_DRIVER cookie production
vercel env add LOG_CHANNEL stderr production
vercel env add QUEUE_CONNECTION sync production
vercel env add DB_CONNECTION sqlite production
vercel env add DB_DATABASE /tmp/database.sqlite production

echo "Deploying to Vercel..."
vercel --prod

echo "Deployment completed!"
echo "Don't forget to:"
echo "1. Update APP_URL in Vercel dashboard with your actual domain"
echo "2. Set up your database connection if using external database"
echo "3. Run migrations if needed: vercel env pull .env.local && php artisan migrate --force"

read -p "Press enter to continue..."
