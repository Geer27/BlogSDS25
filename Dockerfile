FROM php:8.2-apache

# Extensiones PHP necesarias para PDO y MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite para routing
RUN a2enmod rewrite

# Configurar DocumentRoot a public/ y permisos para .htaccess
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && printf "<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n" \
> /etc/apache2/conf-available/z-override.conf \
&& a2enconf z-override

WORKDIR /var/www/html

EXPOSE 80
