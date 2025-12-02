#!/bin/bash

# ToursTravel Kenya - Railway Deployment Script
# This script handles the deployment process for Railway

echo "🚀 Starting ToursTravel Kenya deployment..."

# Set production environment
export APP_ENV=production
export APP_DEBUG=false

echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --verbose

echo "🏗️  Building frontend assets..."
npm ci --only=production
npm run production

echo "⚙️  Optimizing Laravel..."
php artisan config:cache
php artisan route:cache  
php artisan view:cache

echo "🗄️  Setting up database..."
php artisan migrate --force

# Only seed on first deployment (check if admin user exists)
if php artisan tinker --execute="echo App\\User::where('email', 'samadmin@gmail.com')->exists() ? 'exists' : 'missing';" | grep -q "missing"; then
    echo "🌱 Seeding initial data..."
    php artisan db:seed --force
else
    echo "ℹ️  Database already seeded, skipping..."
fi

echo "🔧 Final optimizations..."
php artisan storage:link
php artisan optimize

echo "✅ Deployment complete! Starting application..."
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000}