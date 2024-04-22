FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

COPY src .

RUN apk add --no-cache --update --virtual buildDeps autoconf g++ make linux-headers\ 
 && pecl install xdebug \
 && docker-php-ext-enable xdebug \
 && pecl install -o -f redis \
 && docker-php-ext-enable redis \
 && docker-php-ext-install pdo pdo_mysql \
 && rm -rf /tmp/pear \
 && apk del buildDeps

 # install composer
ADD https://getcomposer.org/installer ./composer-setup.php
RUN php ./composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm ./composer-setup.php

RUN addgroup -g 1000 dev && adduser -G dev -g dev -s /bin/sh -D dev

USER dev