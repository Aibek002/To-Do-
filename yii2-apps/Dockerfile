FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy the project files into the container
COPY . /var/www/html

# Install project dependencies
RUN composer install

# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html


# Start Nginx and PHP-FPM
CMD ["sh", "-c", "/usr/local/sbin/php-fpm && service nginx start"]

