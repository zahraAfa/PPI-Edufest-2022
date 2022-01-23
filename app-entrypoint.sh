#!/usr/bin/env bash

set -e

SSH_KEY_PATH=$HOME/.ssh/id_rsa

if [[ ! -f "$SSH_KEY_PATH" ]]; then
    ssh-keygen -t rsa -b 2048 -f "$SSH_KEY_PATH" -q -N ""
fi

php artisan key:generate

if [[ "$DB_HOST" ]]; then
    until mysqladmin ping -h "$DB_HOST" -u "$DB_USERNAME" -p"$DB_PASSWORD"
    do
        sleep 1
    done
    if [[ -z $(mysqlcheck -h "$DB_HOST" -c "$DB_DATABASE" -u "$DB_USERNAME" -p"$DB_PASSWORD") ]]; then \
        echo "Database tables does not exist, performing initial migration." \
        && php artisan migrate:fresh \
        && echo "Migration succeded, performing database seeding." \
        && php artisan db:seed
    else
        echo "Database tables exists, skipping migration and seeding."
    fi
fi

until sshpass -p password ssh-copy-id -o "StrictHostKeyChecking no" root@webserver
do
    sleep 1
done

echo "Copying app files to webserver container." \
    && rsync -aqrvz -e "ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null" --exclude "public/storage" . root@webserver:/var/www/ \
    && echo "Copy succeded."

exec docker-php-entrypoint "$@"
