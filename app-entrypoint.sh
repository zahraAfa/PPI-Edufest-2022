#!/usr/bin/env bash

set -e

php artisan key:generate

mysqladmin ping -h $DB_HOST -u $DB_USERNAME -p$DB_PASSWORD \
    && if [[ -z $(mysqlcheck -h $DB_HOST -c $DB_DATABASE -u $DB_USERNAME -p$DB_PASSWORD) ]]; then \
    echo "Database tables does not exist, performing initial migration." \
    && php artisan migrate:fresh \
    && echo "Migration succeded, performing database seeding." \
    && php artisan db:seed
else
    echo "Database tables exists, skipping migration and seeding."
fi

exec docker-php-entrypoint "$@"
