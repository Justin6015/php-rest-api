FROM php:8.3-apache

# MySQL extension installieren
RUN docker-php-ext-install pdo pdo_mysql

# Apache Rewrite aktivieren
RUN a2enmod rewrite

WORKDIR /var/www/html
