FROM php:8.1-fpm

RUN apt update
RUN apt upgrade -y
RUN apt install libpq-dev -y
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo_pgsql