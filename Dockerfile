# separate project build environemnt with app environment to save space
FROM composer:2.1 AS build
WORKDIR /app
COPY . /app

# don't install dev-dependencies
RUN composer install

# production image
FROM php:8.1-fpm

# set working directory
WORKDIR /var/www

# install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libxml2-dev \
    libonig-dev \
    mariadb-client

# clear cache
RUN apt-cache clean && rm -rf /var/lib/apt/lists/*

# install php extensions
RUN docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    mbstring \
    pdo_mysql \
    xml

# add user for laravel application
RUN groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

# copy existing application directory with modified permissions
COPY --chown=www:www --from=build /app /var/www

# entrypoint
COPY ./app-entrypoint.sh /usr/bin
ENTRYPOINT ["app-entrypoint.sh"]

# change user to www
USER www

# start php-fpm server
CMD ["php-fpm"]
