FROM alpine:3.18.4

RUN apk update  \
    && apk upgrade  \
    && apk add --no-cache \
    nano bash nginx php82-fpm

COPY ./config/default.conf /etc/nginx/http.d/default.conf

EXPOSE 80

CMD php-fpm82 -D; nginx -g 'daemon off;'
