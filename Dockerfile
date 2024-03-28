FROM php:8.1-apache
RUN docker-php-ext-install pdo
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

# включить rewrite модуль апаче
RUN a2enmod rewrite 
 

