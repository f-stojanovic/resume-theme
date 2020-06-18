FROM php:7.3-apache

COPY config/php.ini /usr/local/etc/php/

COPY ./scripts/* /usr/bin/

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip && \
    curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get install -y libmcrypt-dev zlib1g-dev libzip-dev && \
    pecl install zip && \
    docker-php-ext-install zip || true && \
    docker-php-ext-install mysql || true && \
    docker-php-ext-install mysqli || true && \
    docker-php-ext-install pdo pdo_mysql || true && \
    apt-get install -y libpng-dev && docker-php-ext-install gd || true && \
    a2enmod rewrite || true

WORKDIR /var/www/html/

CMD /usr/bin/wait-for-it.sh -t 60 resume_mysql:3306 && sh /usr/bin/web-init.sh && apache2-foreground
