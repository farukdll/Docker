FROM debian:10

RUN apt-get update && \
    apt-get install -y curl

RUN curl -fsSL -o /usr/local/bin/minio \
    https://dl.min.io/server/minio/release/linux-amd64/minio

RUN chmod +x /usr/local/bin/minio

VOLUME /data

EXPOSE 9000

CMD ["minio", "server", "--console-address", "0.0.0.0:9001", "/data"]
