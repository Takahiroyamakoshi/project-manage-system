ARG DEBIAN_VERSION=bullseye

FROM debian:$DEBIAN_VERSION-slim

ARG DEBIAN_VERSION

RUN apt update && \
    apt upgrade -y && \
    apt install -y \
        curl \
        default-mysql-client \
        git \
        gnupg2 \
        init \
        lsb-release \
        tzdata \
        vim \
        wget \
        unzip

RUN rm /etc/localtime && \
    echo Asia/Tokyo > /etc/timezone && \
    dpkg-reconfigure -f noninteractive tzdata

RUN echo >> ~/.bashrc && \
    echo "export LESSCHARSET=utf-8" >> ~/.bashrc && \
    echo "alias ls='ls --color=auto'" >> ~/.bashrc && \
    echo "alias ll='ls -la'" >> ~/.bashrc

# PHP
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
RUN apt update && \
    apt install -y \
        php8.0 \
        php8.0-bcmath \
        php8.0-cli \
        php8.0-common \
        php8.0-curl \
        php8.0-fpm \
        php8.0-mbstring \
        php8.0-mysql \
        php8.0-xml

# php-fpm
RUN sed -i -e "s/^user =.*/user = nginx/g" /etc/php/8.0/fpm/pool.d/www.conf
RUN sed -i -e "s/^group =.*/group = nginx/g" /etc/php/8.0/fpm/pool.d/www.conf
RUN sed -i -e "s/^listen =.*/listen = \/var\/run\/php-fpm\/php-fpm.sock/g" /etc/php/8.0/fpm/pool.d/www.conf
RUN sed -i -e "s/^listen.owner =.*/listen.owner = nginx/g" /etc/php/8.0/fpm/pool.d/www.conf
RUN sed -i -e "s/^listen.group =.*/listen.group = nginx/g" /etc/php/8.0/fpm/pool.d/www.conf
RUN echo "d /var/run/php-fpm 0755 nginx nginx" >> /etc/tmpfiles.d/php-fpm.conf

# Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs

# nginx
RUN wget http://nginx.org/keys/nginx_signing.key
RUN apt-key add nginx_signing.key
RUN echo "deb http://nginx.org/packages/debian/ $DEBIAN_VERSION nginx" >> /etc/apt/sources.list
RUN echo "deb-src http://nginx.org/packages/debian/ $DEBIAN_VERSION nginx" >> /etc/apt/sources.list
RUN apt update && apt install -y nginx