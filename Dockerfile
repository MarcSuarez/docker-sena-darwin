FROM php:8.2-apache

# Instala extensiones de PHP
RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Habilita mod_rewrite
RUN a2enmod rewrite

# Cambia propietario de la carpeta web (importante para uploads)
RUN chown -R www-data:www-data /var/www/html
