FROM debian:10

RUN	apt-get update -y && apt-get install vsftpd -y

COPY ./conf/vsftpd.conf /var/www/vsftpd.conf
COPY ./tools/configure.sh /var/www/configure.sh

CMD ["bash", "/var/www/configure.sh"]
