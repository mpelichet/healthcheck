FROM composer:1.6.5 as build
WORKDIR /app
COPY . /app
RUN composer install

FROM php:7.3-apache
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
RUN apt-get update
RUN apt install -y apt-transport-https gpgv gnupg
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/debian/8/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN apt-get update
RUN ACCEPT_EULA=Y apt-get -y install msodbcsql17
# optional: for unixODBC development headers
RUN  apt-get install -y unixodbc-dev
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-enable sqlsrv
RUN docker-php-ext-enable pdo_sqlsrv
COPY --from=build /app /app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app \
    && a2enmod rewrite