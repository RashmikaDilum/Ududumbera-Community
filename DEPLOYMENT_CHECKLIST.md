# Deployment Checklist for Ududumbara Community

## Issues Fixed ✅

### 1. Missing `getCartItemCount` Function
- ✅ Added function to `app/helpers.php`
- ✅ Registered helpers in `AppServiceProvider`

### 2. Session Configuration
- ✅ Sessions table migration exists
- ✅ Database session driver configured

## Production Deployment Steps

### 1. Environment Configuration
Create `.env` file with these essential settings:

```env
APP_NAME="Ududumbara Community"
APP_ENV=production
APP_KEY=base64:your_generated_key
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=your_db_host
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=lax

# Google OAuth (if using)
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=https://your-domain.com/auth/google/callback
```

### 2. Database Setup
```bash
# Run migrations
php artisan migrate

# Run seeders (if needed)
php artisan db:seed
```

### 3. Application Setup
```bash
# Generate application key
php artisan key:generate

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. File Permissions
```bash
# Set proper permissions
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chown -R www-data:www-data storage/
chown -R www-data:www-data bootstrap/cache/
```

### 5. Web Server Configuration

#### For Apache (.htaccess should be in public/):
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

#### For Nginx:
```nginx
server {
    listen 80;
    server_name your-domain.com;
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

### 6. Common Hosting Issues & Solutions

#### Issue: Sessions not working
**Solution:**
- Ensure sessions table exists: `php artisan migrate`
- Check session driver in `.env`: `SESSION_DRIVER=database`
- Verify database connection

#### Issue: Cart functionality broken
**Solution:**
- ✅ Fixed: Added `getCartItemCount()` function
- Ensure Cart model exists and is properly configured
- Check database connection

#### Issue: Login not working
**Solution:**
- Verify User model and authentication configuration
- Check database connection
- Ensure password hashing is working
- Verify session configuration

#### Issue: Google OAuth not working
**Solution:**
- Install Socialite: `composer require laravel/socialite`
- Configure Google OAuth credentials in `.env`
- Update Google Console redirect URI to production domain
- Clear config cache: `php artisan config:clear`

### 7. Testing Checklist

After deployment, test these features:

- [ ] User registration
- [ ] User login/logout
- [ ] Cart functionality (add/remove items)
- [ ] Session persistence
- [ ] Google OAuth (if enabled)
- [ ] Product pages
- [ ] Checkout process

### 8. Monitoring

Monitor these files for errors:
- `storage/logs/laravel.log`
- Web server error logs
- Database connection logs

### 9. Performance Optimization

```bash
# Install and compile assets
npm install
npm run build

# Optimize Composer autoloader
composer install --optimize-autoloader --no-dev

# Cache routes and config
php artisan route:cache
php artisan config:cache
```

## Troubleshooting Commands

```bash
# Check application status
php artisan about

# Test database connection
php artisan tinker
DB::connection()->getPdo();

# Check routes
php artisan route:list

# Clear all caches
php artisan optimize:clear
```

## Security Checklist

- [ ] APP_DEBUG=false in production
- [ ] Strong APP_KEY generated
- [ ] Database credentials secured
- [ ] HTTPS enabled
- [ ] File permissions set correctly
- [ ] .env file not accessible via web
- [ ] Storage and cache directories secured

