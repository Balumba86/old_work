FROM php:7.4-fpm-alpine

RUN apk add --no-cache autoconf g++ libmcrypt supervisor make libmcrypt-dev mosquitto-dev nginx tzdata 

ADD ./conf/php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN chown laravel:laravel /var/www/html

WORKDIR /var/www/html

RUN pecl install mcrypt-1.0.3 \
    && pecl install xdebug-2.8.1 \
    && pecl install Mosquitto-0.4.0 \
    && docker-php-ext-enable mcrypt xdebug mosquitto 

RUN apk add libpq postgresql-dev ldb-dev libldap openldap-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql ldap

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

COPY ./conf/php/nginx.conf /etc/nginx/
COPY ./conf/php/default.conf /etc/nginx/conf.d/

RUN cp /usr/share/zoneinfo/Europe/Moscow /etc/localtime && \
    echo "Europe/Moscow" >  /etc/timezone

COPY ./conf/php/cronjobs /etc/crontabs/root
RUN crontab /etc/crontabs/root

COPY ./conf/php/supervisord.conf /etc/supervisord.conf

ADD src /var/www/html/
WORKDIR /var/www/html

RUN composer install

RUN mkdir -p /var/log/cron/

ADD ./conf/php/uploads.ini /usr/local/etc/php/conf.d/

### Фронт
RUN apk add --no-cache nodejs npm yarn
RUN yarn \
&&  yarn dev \
#&&  rm -rf node_modules \
#&&  rm -rf package-lock.json \
&&  npm install
###

EXPOSE 9000
EXPOSE 80
EXPOSE 443

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
