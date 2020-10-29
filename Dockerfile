FROM docker-registry.wikimedia.org/dev/stretch-php72-fpm-apache2:0.4.0

RUN apt update
RUN apt install -y strace lsof siege 

RUN echo 'php_admin_flag[log_errors] = on'  >> /etc/php/7.2/fpm/pool.d/www.conf

COPY 99-T236104.ini /etc/php/7.2/fpm/conf.d/99-T236104.ini
