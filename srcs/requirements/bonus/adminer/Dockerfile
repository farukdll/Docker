FROM debian:10

WORKDIR /var/www/html/adminer

RUN apt-get update -y

RUN apt-get -y install php7.3 php-mysqli php-fpm

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d

ADD https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php /var/www/html/adminer/index.php

RUN chown -R www-data:www-data /var/www/html/adminer/index.php
RUN chmod 755 /var/www/html/adminer/index.php

CMD ["php", "-S", "0.0.0.0:8090"]
