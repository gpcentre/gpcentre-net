FROM richarvey/nginx-php-fpm:1.6.6

ENV LETSENCRYPT_EMAIL gp@gpcentre.net
ENV WEBROOT /var/www/html/public

EXPOSE 80 443

ADD . /var/www/html
