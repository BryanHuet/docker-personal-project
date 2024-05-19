FROM php:latest

# Install system dependencies
RUN apt-get update -y
RUN apt-get install -y \
    git \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
    unzip 

RUN docker-php-ext-install \
    intl \
    pdo_mysql \
    zip

# Install composer
COPY docker/ /var/script
RUN /var/script/composer-installer.sh
ARG COMPOSER_ALLOW_SUPERUSER=1
