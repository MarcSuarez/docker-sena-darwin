FROM php:8.2-apache

# Instalar mysqli y PDO MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar código
COPY ./src/ /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer puerto
EXPOSE 80

CMD ["apache2-foreground"]
