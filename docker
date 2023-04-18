FROM php:8.0-apache
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html/storage
EXPOSE 80