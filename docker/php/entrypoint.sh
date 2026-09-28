#!/bin/sh
set -eu

# The application is bind-mounted at runtime, so build-time permissions are
# hidden. Keep the host user as owner and grant PHP-FPM's group write access.
if [ -d /var/www ]; then
    umask 0002

    mkdir -p \
        /var/www/bootstrap/cache \
        /var/www/storage/framework/cache/data \
        /var/www/storage/framework/sessions \
        /var/www/storage/framework/views \
        /var/www/storage/logs

    chgrp -R www-data /var/www/storage /var/www/bootstrap/cache
    chmod -R g+rwX /var/www/storage /var/www/bootstrap/cache

    find /var/www/storage /var/www/bootstrap/cache \
        -type d -exec chmod g+s '{}' +
fi

exec docker-php-entrypoint "$@"
