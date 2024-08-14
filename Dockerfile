FROM php:8.2-fpm

# Installer des dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip exif pcntl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer Node.js et npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Configurer le répertoire de travail
WORKDIR /var/www

# Copier les fichiers de l'application dans le conteneur
COPY . .

# Configurer les permissions avant d'installer les dépendances
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

# Installer les dépendances PHP avec Composer
RUN composer install --optimize-autoloader --no-dev --no-scripts --prefer-dist --no-interaction

# Installer les dépendances NPM et compiler les assets
RUN npm install && npm run build

# Configurer les permissions après installation
RUN chown -R www-data:www-data /var/www

# Exposer le port 9000 et démarrer PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
