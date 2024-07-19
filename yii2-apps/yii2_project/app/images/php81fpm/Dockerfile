FROM php:fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && php -r "unlink('composer-setup.php');"

RUN curl -sS https://getcomposer.org/installer | php -- --installer-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

USER "1000:1000"

WORKDIR /var/www

ENTRYPOINT [ "php-fpm" ]