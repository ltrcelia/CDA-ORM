FROM php:8.2-apache

# Installer les extensions nécessaires pour PDO et MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Installer les outils nécessaires (git, unzip, zip)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer depuis l'image officielle Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier les fichiers PHP de l'application
COPY ./php /var/www/html

# Configurer le répertoire racine d'Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
