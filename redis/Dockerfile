FROM redis:latest

LABEL maintainer="Johnson <2534426042@qq.com>"

#RUN mkdir -p /usr/local/etc/redis
#COPY master/redis-slave1.conf /usr/local/etc/redis/redis-slave1.conf

VOLUME /data

EXPOSE 6379

CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]