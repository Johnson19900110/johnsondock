FROM redis:latest

LABEL maintainer="Johnson <2534426042@qq.com>"

RUN mkdir -p /usr/local/etc/redis
COPY config/redis.conf /usr/local/etc/redis/redis.conf

VOLUME /data

# Install "ruby" and "redis"
RUN apt-get -y update && \
    apt-get install -y ruby && \
    gem install redis

EXPOSE 7000

CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]