# Use the official PHP image with FPM
FROM php:8.3-fpm

# Install Nginx
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y nginx


# Copy Nginx configuration files
COPY vhost.conf /etc/nginx/conf.d/default.conf

# Copy your application files
COPY nginx /usr/share/nginx/html

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]

