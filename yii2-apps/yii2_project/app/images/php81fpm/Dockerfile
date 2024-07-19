FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \ curl \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql



RUN curl -sS https://getcomposer.org/installer | php -- --installer-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

USER "1000:1000"

WORKDIR /var/www

ENTRYPOINT [ "php-fpm" ]