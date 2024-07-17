# Use the official PHP image with FPM
FROM php:8.3-fpm

# Install Nginx

RUN apt-get update && apt-get install -y nginx curl git zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql

RUN mkdir -p /var/lib/nginx/body && \
    chown -R www-data:www-data /var/lib/nginx



# Copy Nginx configuration files
COPY vhost.conf /etc/nginx/conf.d/default.conf

# Copy your application files
COPY nginx /var/www

# Expose port 80
EXPOSE 80
WORKDIR /var/www
# Start Nginx and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]

