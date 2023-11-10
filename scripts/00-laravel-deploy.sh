#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Optimize..."
php artisan optimize

echo "Link Created..."
php artisan storage:link

# echo "Starting Schedule..."
# php artisan schedule:work

# echo "Running migrations..."
# php artisan migrate --force

# echo "Publishing cloudinary provider..."
# php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config"
