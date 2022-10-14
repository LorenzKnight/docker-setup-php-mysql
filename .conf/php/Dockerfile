FROM php:7.4-fpm

# RUN apt-get update \
#   && apt-get install -y nano \
#   && docker-php-ext-install pdo pdo_mysql mysql mysqli

# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug
###################################################################
RUN apk add --no-cache \
      freetype \
      libjpeg-turbo \
      libpng \
      freetype-dev \
      libjpeg-turbo-dev \
      libpng-dev \
    && docker-php-ext-configure gd \
      --with-freetype=/usr/include/ \
      --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd \
    && apk del --no-cache \
      freetype-dev \
      libjpeg-turbo-dev \
      libpng-dev \
    && rm -rf /tmp/*

RUN apk add libzip-dev

RUN docker-php-ext-install pdo pdo_mysql mysqli zip bcmath
###################################################################
# FROM php:7.3-fpm

# RUN apt-get update && \
#     apt-get install -y \
#     libfreetype6-dev \
#     libjpeg62-turbo-dev \
#     libmcrypt-dev \
#     libicu-dev \
#     libxml2-dev \
#     libmagickwand-dev \
#     libpq-dev \
#     libedit-dev \
#     libgmp-dev \
#     libssh2-1-dev \
#     libbz2-dev \
#     libzip-dev \
#     zlib1g-dev \
#     postgresql-client \
#     graphviz \
#     wget \
#     gettext-base \
#     bash-completion \
#     nano \
#     git \
#     zip \
#     procps \
#     rsyslog \
#     && apt-get clean \
#     && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# RUN pecl install -o -f redis \
#     &&  rm -rf /tmp/pear \
#     && docker-php-ext-enable redis

# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug

# RUN apt-get update \
#   && apt-get install -y nano \
#   && docker-php-ext-install pdo pdo_mysql mysql mysqli
# ENV TZ=Europe/Stockholm
# RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
# RUN echo "php_admin_flag[log_errors] = on">>/usr/local/etc/php-fpm.d/www.conf
# RUN sed -i '/imklog/s/^/#/' /etc/rsyslog.conf

# COPY startup.sh /usr/local/bin/startup.sh


# WORKDIR /var/www/site

# RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
# RUN ["chmod", "+x", "/usr/local/bin/startup.sh"]
# ENTRYPOINT ["/usr/local/bin/startup.sh"]