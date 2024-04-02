FROM php:8.3-fpm



WORKDIR /var/www
RUN apt-get update && apt-get install -y\
   git\
   curl\
   zip\
   unzip\
   libicu-dev



RUN curl -sL https://deb.nodesource.com/setup_20.x | bash \
    && apt-get install nodejs -y

RUN curl -sS https://getcomposer.org/installer |php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql
RUN composer require --dev phpunit/phpunit ^11

RUN docker-php-ext-configure intl

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY php/xdebug/xdebug.ini "${PHP_INI_DIR}/conf.d"