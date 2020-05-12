FROM php:7-fpm

RUN  sed -i s@/archive.ubuntu.com/@/mirrors.aliyun.com/@g /etc/apt/sources.list

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

#RUN docker-php-ext-install mysqli pdo pdo_mysql curl bz2 op
RUN docker-php-ext-install pdo pdo_mysql   mysqli
CMD ["php-fpm"]

EXPOSE 9000