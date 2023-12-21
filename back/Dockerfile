# FROM php:8.1-fpm
# RUN apt update && apt install -y \
# 	apt install libpq \
# 	docker-php-ext-install pgsql \
# 	docker-php-ext-install pdo_pgsql \
# 	&& docker-php-ext-configure pgsql --with-freetype --with-jpeg \
# 	&& docker-php-ext-install -j$(nproc) pgsql

FROM php:8.1-fpm

RUN apt update
RUN apt upgrade -y
RUN apt install libpq-dev -y
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install pdo_pgsql