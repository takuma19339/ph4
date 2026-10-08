FROM php:8.1-fpm-bookworm

COPY php.ini /usr/local/etc/php/
ADD setup/xdebug.ini /tmp/xdebug.ini

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
     libzip-dev zlib1g-dev unzip libpq-dev libpng-dev libjpeg-dev vim git \
  && docker-php-ext-configure gd --with-jpeg \
  && docker-php-ext-install zip sockets pdo_pgsql gd \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/composer
ENV PATH=$PATH:/composer/vendor/bin

WORKDIR /work/web
