FROM php:8.3-fpm-alpine

# Install Dependencies
RUN docker-php-ext-install pdo_mysql mysqli bcmath

# Set Working Directory
WORKDIR /var/www/html

#expose port 9000
EXPOSE 9000