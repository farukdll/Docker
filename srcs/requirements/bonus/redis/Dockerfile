FROM debian:10

RUN	apt-get update -y && apt-get install redis -y

RUN mkdir /var/run/redis

COPY conf/redis.conf /etc/redis/redis.conf

EXPOSE 6379

CMD [ "/usr/bin/redis-server", "/etc/redis/redis.conf"]
