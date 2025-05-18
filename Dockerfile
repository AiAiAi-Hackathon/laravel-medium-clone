# syntax=docker/dockerfile:1
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Clone to a temp folder, then copy
RUN git clone https://github.com/AiAiAi-Hackathon/laravel-medium-clone.git /tmp/app \
    && cp -r /tmp/app/. /var/www \
    && rm -rf /tmp/app

# Now composer.json should be present
RUN composer install --optimize-autoloader

RUN npm install

RUN npm run build

RUN touch database/database.sqlite

RUN php artisan migrate --force

RUN php artisan db:seed --force

# Install JS dependencies
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www

CMD ["php-fpm"]
