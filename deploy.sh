#!/bin/bash
mv .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
sail up -d
sail artisan cache:clear
sail artisan config:cache
sail composer dumpautoload
sail artisan migrate:fresh
sail artisan db:seed --class=UserSeeder

sail npm install
sail npm run build

sail down