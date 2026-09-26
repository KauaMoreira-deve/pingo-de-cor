FROM php:8.4-fpm

RUN apt-get update \
    && apt-get install -y libxml2-dev libzip-dev unzip libicu-dev \
    && docker-php-ext-install pdo pdo_mysql dom xml zip intl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer