#!/usr/bin/env bash

# Copy PHP extensions INI files
cp -a php_extensions/. /usr/local/etc/php/conf.d/.

# Execute migrations
php artisan migrate --no-interaction

exec "$@"
