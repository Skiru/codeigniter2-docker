FROM php:5.6-fpm

RUN apt-get update && apt-get install -y libpq-dev git unzip zlib1g-dev
RUN docker-php-ext-install pdo pdo_pgsql zip mbstring bcmath
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer