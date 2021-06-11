FROM php:7.4-fpm-buster

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
       libfreetype6-dev \
       libjpeg-dev \
       libmagickwand-dev \
       libpng-dev && \
    pecl install imagick-3.4.4 && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install exif && \
    docker-php-ext-enable imagick