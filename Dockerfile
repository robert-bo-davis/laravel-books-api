FROM alpine:3.7

RUN apk add --update --no-cache \
        bash \
        curl \
        wget \
        php7 \
        php7-curl \
        php7-openssl \
        php7-json \
        php7-phar \
        php7-zlib \
        php7-iconv \
        php7-mbstring \
        php7-dom \
        php7-xml \
        php7-tokenizer \
        php7-pdo \
        php7-session \
        php7-ctype \
        php7-pdo_mysql \
        php7-simplexml \
        php7-xmlwriter \
        && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apk add --update --no-cache \
        php7-simplexml

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

WORKDIR /app

EXPOSE 8000

ENTRYPOINT [ "docker-entrypoint.sh" ]

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
