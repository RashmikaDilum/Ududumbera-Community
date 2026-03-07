#!/bin/bash
# =====================================================
# KnucklesProducts - Auto Deployment Script
# =====================================================
# This script runs on the EC2 server when triggered
# by GitHub Actions on push to the main branch.
# =====================================================

set -e  # Exit on any error

APP_DIR="/var/www/knucklesproducts"
BRANCH="main"

echo "🚀 Starting deployment..."
echo "📅 $(date)"

# Navigate to project directory
cd $APP_DIR

# Enable maintenance mode
echo "🔧 Enabling maintenance mode..."
php artisan down --retry=60 || true

# Pull latest changes from Git
echo "📥 Pulling latest changes from $BRANCH..."
git fetch origin $BRANCH
git reset --hard origin/$BRANCH

# Install/update PHP dependencies (production only)
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Run database migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# Clear old caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Rebuild caches for production
echo "⚡ Caching for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build frontend assets (if Node.js is installed)
if command -v npm &> /dev/null; then
    echo "🎨 Building frontend assets..."
    npm ci --production=false
    npm run build
fi

# Set correct permissions
echo "🔒 Setting permissions..."
sudo chown -R ubuntu:www-data $APP_DIR
sudo chmod -R 775 $APP_DIR/storage
sudo chmod -R 775 $APP_DIR/bootstrap/cache

# Restart queue workers (if using)
echo "🔄 Restarting queue workers..."
php artisan queue:restart || true

# Disable maintenance mode
echo "✅ Disabling maintenance mode..."
php artisan up

# Generate new sitemap for production
echo "🗺️ Generating fresh sitemap..."
php artisan sitemap:generate || true

echo "🎉 Deployment completed successfully!"
echo "📅 $(date)"
