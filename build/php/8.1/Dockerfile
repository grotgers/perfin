FROM php:8.1-fpm-alpine

# Set ENV variables
ENV FFMPEG_VERSION 4.0.1
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php

# ADD Edge Testing repository
RUN echo http://dl-cdn.alpinelinux.org/alpine/edge/testing >> /etc/apk/repositories

# Upgrade Alpine
RUN apk --update upgrade

# Install dependencies
RUN apk --no-cache --update add openssh-client
RUN apk --no-cache --update add git
RUN apk --no-cache --update add autoconf
RUN apk --no-cache --update add automake
RUN apk --no-cache --update add make
RUN apk --no-cache --update add gcc
RUN apk --no-cache --update add g++
RUN apk --no-cache --update add libxml2-dev
RUN apk --no-cache --update add sqlite-dev
RUN apk --no-cache --update add curl-dev
RUN apk --no-cache --update add libpng-dev
RUN apk --no-cache --update add libjpeg-turbo-dev
RUN apk --no-cache --update add freetype-dev
RUN apk --no-cache --update add pcre-dev
RUN apk --no-cache --update add imap-dev
RUN apk --no-cache --update add coreutils
RUN apk --no-cache --update add libltdl
RUN apk --no-cache --update add libmcrypt-dev
RUN apk --no-cache --update add unzip
RUN apk add --virtual build-dependencies build-base gcc wget git
RUN apk --no-cache --update add binutils
RUN apk --no-cache --update add build-base
RUN apk --no-cache --update add libgcc
RUN apk --no-cache --update add pkgconf
RUN apk --no-cache --update add pkgconfig
RUN apk --no-cache --update add openssl
RUN apk --no-cache --update add rtmpdump-dev
RUN apk --no-cache --update add ca-certificates
RUN apk --no-cache --update add pcre
RUN apk --no-cache --update add musl-dev
RUN apk --no-cache --update add libc-dev
RUN apk --no-cache --update add zlib-dev
RUN apk --no-cache --update add icu-dev
RUN apk --no-cache --update add nasm
RUN apk --no-cache --update add yasm-dev
RUN apk --no-cache --update add lame-dev
RUN apk --no-cache --update add libogg-dev
RUN apk --no-cache --update add x264-dev
RUN apk --no-cache --update add libvpx-dev
RUN apk --no-cache --update add libvorbis-dev
RUN apk --no-cache --update add x265-dev
RUN apk --no-cache --update add freetype-dev
RUN apk --no-cache --update add libass-dev
RUN apk --no-cache --update add libwebp-dev
RUN apk --no-cache --update add rtmpdump-dev
RUN apk --no-cache --update add libtheora-dev
RUN apk --no-cache --update add opus-dev
RUN apk --no-cache --update add fdk-aac-dev
RUN apk --no-cache --update add autoconf
RUN apk --no-cache --update add g++
RUN apk --no-cache --update add imagemagick-dev
RUN apk --no-cache --update add libtool
RUN apk --no-cache --update add make
RUN apk --no-cache --update add libzip-dev
RUN apk --no-cache --update add oniguruma-dev

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions json
RUN install-php-extensions session
RUN install-php-extensions ctype
RUN install-php-extensions tokenizer
RUN install-php-extensions simplexml
RUN install-php-extensions dom
RUN install-php-extensions mbstring
RUN install-php-extensions zip
RUN install-php-extensions pdo
RUN install-php-extensions pdo_sqlite
RUN install-php-extensions pdo_mysql
RUN install-php-extensions curl
RUN install-php-extensions iconv
RUN install-php-extensions xml
RUN install-php-extensions bcmath
RUN install-php-extensions pcntl
RUN install-php-extensions intl
RUN install-php-extensions sockets
RUN install-php-extensions redis

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

RUN rm -rf /tmp/*
RUN rm -rf /var/cache/apk/*
