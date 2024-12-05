FROM richarvey/nginx-php-fpm:latest

# Copy project files
COPY . /var/www/html

# Set environment variables
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel configuration
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Update Nginx to bind to Render's port
RUN sed -i 's/listen 80;/listen ${PORT};/' /etc/nginx/sites-available/default.conf

# Expose the default port
EXPOSE 80

# Start the application
CMD ["/bin/bash", "-c", "/start.sh && tail -f /var/log/nginx/error.log /var/log/php7.4-fpm.log"]
