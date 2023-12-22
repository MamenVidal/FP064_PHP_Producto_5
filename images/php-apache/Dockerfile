# Establecer la imagen base
FROM php:8.1-apache

# Instalar dependencias y extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql mysqli zip exif pcntl bcmath opcache intl

# Activar mod_rewrite para Apache
RUN a2enmod rewrite headers
