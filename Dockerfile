FROM docker-registry.wikimedia.org/dev/stretch-php72-fpm-apache2:0.4.0

RUN printf 'opcache.enable=1\nopcache.validate_timestamps=1\nopcache.revalidate_freq=10\nopcache.memory_consumption=32\nopcache.max_accelerated_files=200' > /etc/php/7.2/fpm/conf.d/99-T236104.ini
