FROM php:7.4-fpm

RUN apt-get update && apt-get install -y git unzip msmtp tzdata

RUN curl -Lo /usr/local/bin/install-php-extensions https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions \
    && chmod +x /usr/local/bin/install-php-extensions \
    && /usr/local/bin/install-php-extensions \
        bcmath \
        gd \
        intl \
        pdo_mysql \
        redis \
        soap \
        xsl \
        yaml \
        pcntl \
        exif \
        imagick \
        sockets \
        mysqli \
        zip

WORKDIR /var/www