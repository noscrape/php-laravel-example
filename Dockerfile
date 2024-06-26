FROM php:8.3

RUN apt-get update -y && apt-get install -y openssl zip unzip git libonig-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin

RUN apt-cache depends php-mbstring

RUN docker-php-ext-install bcmath mbstring

WORKDIR /app

COPY . /app

CMD php artisan serve --host=0.0.0.0 --port=8181

EXPOSE 8181
