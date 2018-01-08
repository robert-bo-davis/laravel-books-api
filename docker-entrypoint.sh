#!/bin/bash

composer install --no-interaction

# We depend on the time composer takes to allow the mysql container to come
# up. This is not optimal, but it is good enough for a testing environment
php artisan migrate

exec "$@"