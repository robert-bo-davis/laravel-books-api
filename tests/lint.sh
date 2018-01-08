#!/usr/bin/env bash

echo "performing syntax test..."

output=$(find -L `pwd` -type d \( -name vendor -o \) -prune -o -name '*.php' -print0 | xargs -0 -n 1 php -l)

if [ $? != 0 ]; then
    exit 1
else
    echo "OK"
fi

echo "performing PSR2 test... "

output=$(./vendor/bin/phpcs -n --extensions=php --standard=phpcs.xml `pwd`)

if [ $? != 0 ]; then
    echo "${output}"
    exit 1
else
    echo "OK"
fi
