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
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    build-essential=12.9 \
    libxml2-dev=2.9.10+dfsg-6.7 \
    libonig-dev=6.9.6-1.1 \
    mariadb-client=1:10.5.12-0+deb11u1 \
    openssh-server=1:8.4p1-5 \
    sshpass=1.09-1+b1 \
    rsync=3.2.3-4+deb11u1 \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# install php extensions
RUN docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    mbstring \
    pdo_mysql \
    xml

# add user for laravel application
RUN groupadd -g 1000 www \
    && useradd -u 1000 -ms /bin/bash -g www www

# copy existing application directory with modified permissions
COPY --chown=www:www --from=build /app /var/www

# entrypoint
COPY ./app-entrypoint.sh /usr/bin
ENTRYPOINT ["app-entrypoint.sh"]

# change user to www
USER www

# start php-fpm server
CMD ["php-fpm"]
