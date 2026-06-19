# Deployment Guide - Hostinger PHP 8.3

## Prerequisites
- Hostinger shared hosting with PHP 8.3
- MySQL database created via Hostinger hPanel
- SSH access (optional but recommended)

## Deployment Steps

### 1. Upload Files
Upload all project files to your Hostinger `public_html` directory via:
- **File Manager** in hPanel, or
- **SSH/SFTP** using provided credentials

The root `.htaccess` redirects all requests to `public/` folder automatically.

### 2. Set Up Environment
Copy `.env.example` to `.env` and update these values:

```env
APP_NAME="Aastha Capital Finance"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

### 3. Install Dependencies (via SSH)
```bash
cd ~/public_html
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. If No SSH Access
- Run `composer install` locally and upload the `vendor/` folder
- Generate the app key locally and paste it into `.env`
- Import the database schema manually via phpMyAdmin

### 5. Set Permissions
```bash
chmod -R 775 storage bootstrap/cache
```

### 6. Point Domain
In Hostinger hPanel, point your domain's document root to `public_html/public` if possible.
Otherwise, the root `.htaccess` handles the redirect to `public/`.

## Architecture Notes
- **No Node.js/npm required** - Frontend uses Bootstrap 5 via CDN
- **No build step needed** - All CSS/JS is served directly from `public/css/` and CDN
- **Admin panel** remains untouched (already uses Bootstrap)
- **Database**: Only the `loan_requests` table is needed for the public lead form

## File Structure
```
public_html/
├── .htaccess          (redirects to public/)
├── public/
│   ├── .htaccess      (Laravel front controller)
│   ├── index.php      (entry point)
│   ├── css/
│   │   └── theme.css  (custom glassmorphism theme)
│   └── images/        (logo, etc.)
├── app/
├── resources/views/
├── routes/web.php
├── .env
└── vendor/
```

## Troubleshooting
- **500 Error**: Check `storage/logs/laravel.log` and ensure permissions
- **CSRF Error**: Clear browser cookies or check `SESSION_DRIVER=file`
- **Assets not loading**: Ensure `APP_URL` matches your actual domain
