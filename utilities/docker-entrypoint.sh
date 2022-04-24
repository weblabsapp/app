#!/usr/bin/env bash

# Copy PHP extensions INI files
cp -a php_extensions/. /usr/local/etc/php/conf.d/.

# Flush all cache
php artisan cache:clear && php artisan config:cache && php artisan view:cache

# Execute migrations
php artisan migrate --no-interaction

exec "$@"
