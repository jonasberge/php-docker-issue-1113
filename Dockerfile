FROM php:8.0.1-apache

ENV PHP_ENV=development

COPY index.php /var/www/html/
