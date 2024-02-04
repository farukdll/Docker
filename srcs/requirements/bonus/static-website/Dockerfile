FROM debian:10

RUN apt-get update -y && apt-get upgrade -y && apt-get install -y nginx

COPY ./conf/default /etc/nginx/sites-available/default

COPY ./tools/ /var/www/html/

RUN chmod 755 /var/www/html/

EXPOSE 8085

CMD ["nginx", "-g", "daemon off;"]
