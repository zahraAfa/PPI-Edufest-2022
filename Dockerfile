# separate project build environemnt with app environment to save space
FROM composer:2.1 AS build
WORKDIR /app
COPY . /app

# don't install dev-dependencies
RUN composer install --ignore-platform-reqs

# production image
FROM php:8.1-fpm

# set working directory
WORKDIR /var/www

# install dependencies
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    build-essential \
    libxml2-dev \
    libonig-dev \
    mariadb-client \
    openssh-server \
    sshpass \
    rsync \
    zlib1g-dev \
    libpng-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# install php extensions
RUN docker-php-ext-install \
    bcmath \
    ctype \
    fileinfo \
    gd \
    mbstring \
    pdo_mysql \
    xml

# RUN curl -sSLf \
#         -o /usr/local/bin/install-php-extensions \
#         https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
#     chmod +x /usr/local/bin/install-php-extensions && \
#     IPE_GD_WITHOUTAVIF=1 install-php-extensions \
#     bcmath \
#     ctype \
#     fileinfo \
#     gd \
#     mbstring \
#     pdo_mysql \
#     xml

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
