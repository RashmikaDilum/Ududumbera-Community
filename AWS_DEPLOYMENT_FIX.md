# AWS EC2 Deployment Fix Guide

## 🚨 Issues Identified and Fixed

### 1. **Main Issue: Missing getCartItemCount() Function**
**Error:** `Call to undefined function getCartItemCount()`

**Root Cause:** The `app/helpers.php` file was not being autoloaded by Composer.

**Solution Applied:**
- Added `app/helpers.php` to the `composer.json` autoload files section
- The function exists and is properly defined in `app/helpers.php`

### 2. **Secondary Issue: Missing Validation (Already Fixed)**
The `first_name` validation was already present in the AuthController.

## 🛠️ Steps to Fix on Your AWS EC2 Server

### Step 1: Update Composer Autoload
```bash
# SSH into your EC2 server
ssh -i your-key.pem ubuntu@your-server-ip

# Navigate to your project directory
cd /path/to/your/laravel/project

# Update composer autoload
composer dump-autoload --optimize

# Clear all caches
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# If using queue workers, restart them
php artisan queue:restart
```

### Step 2: Verify File Permissions
```bash
# Set proper permissions
sudo chown -R www-data:www-data /path/to/your/project
sudo chmod -R 755 /path/to/your/project
sudo chmod -R 775 /path/to/your/project/storage
sudo chmod -R 775 /path/to/your/project/bootstrap/cache
```

### Step 3: Environment Configuration
Create/verify your `.env` file on the server:
```bash
# Copy from example if needed
cp .env.example .env

# Generate application key if needed
php artisan key:generate

# Make sure these settings are correct:
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.knucklesproducts.com

# Database settings
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Google OAuth (if using)
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=https://www.knucklesproducts.com/auth/google/callback
```

### Step 4: Database Migration
```bash
# Run migrations
php artisan migrate --force

# Seed database if needed
php artisan db:seed --force
```

### Step 5: Web Server Configuration

#### For Apache (.htaccess in public folder):
```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

#### For Nginx:
```nginx
server {
    listen 80;
    listen 443 ssl;
    server_name www.knucklesproducts.com knucklesproducts.com;
    root /path/to/your/project/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## 🔍 Testing Steps

1. **Test the helpers function:**
```bash
php artisan tinker
>>> getCartItemCount()
```

2. **Test registration page:**
- Visit: `https://www.knucklesproducts.com/register`
- Should load without 500 error

3. **Test login page:**
- Visit: `https://www.knucklesproducts.com/login`
- Should load without 500 error

## 🚀 Final Production Commands

After making all changes, run these commands in sequence:

```bash
# 1. Update dependencies
composer install --no-dev --optimize-autoloader

# 2. Clear and optimize caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 3. Restart web server
sudo systemctl restart apache2
# OR for Nginx:
# sudo systemctl restart nginx

# 4. Restart PHP-FPM (if using)
sudo systemctl restart php8.2-fpm
```

## 📋 Verification Checklist

- [ ] `composer dump-autoload` completed successfully
- [ ] All Laravel caches cleared
- [ ] File permissions set correctly
- [ ] `.env` file configured for production
- [ ] Database migrations run
- [ ] Web server configuration updated
- [ ] SSL certificate working
- [ ] Registration page loads without error
- [ ] Login page loads without error
- [ ] Cart functionality works

## 🆘 If Still Having Issues

1. **Check Laravel logs:**
```bash
tail -f /path/to/your/project/storage/logs/laravel.log
```

2. **Check web server logs:**
```bash
# Apache
sudo tail -f /var/log/apache2/error.log

# Nginx
sudo tail -f /var/log/nginx/error.log
```

3. **Verify PHP version:**
```bash
php -v
# Should be PHP 8.2 or higher
```

4. **Test in artisan serve (temporary):**
```bash
php artisan serve --host=0.0.0.0 --port=8000
```

## 📝 Summary

The main issue was that the `getCartItemCount()` function defined in `app/helpers.php` wasn't being autoloaded. By adding it to the Composer autoload files and running `composer dump-autoload`, this should resolve the 500 server errors on your registration and login pages.

The changes made to your local codebase are:
1. ✅ Added `app/helpers.php` to `composer.json` autoload files
2. ✅ Verified AuthController validation is correct
3. ✅ Verified routes are properly defined

Deploy these changes to your server and follow the steps above to fix the production environment.
