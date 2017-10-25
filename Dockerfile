FROM php:7.0-apache
COPY . /var/www/html/
RUN mkdir -p /etc/httpd
RUN echo Attendee:gFcsZEglO83Z2 >> /etc/httpd/.htpasswd
RUN echo Attendee:gFcsZEglO83Z2 >> /etc/httpd/.adm.htpasswd
RUN docker-php-ext-install mysqli