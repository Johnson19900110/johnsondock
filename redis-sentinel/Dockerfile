FROM redis:latest

LABEL maintainer="Johnson <2534426042@qq.com>"

#RUN mkdir -p /usr/local/etc/redis
#COPY master/redis-slave1.conf /usr/local/etc/redis/redis-slave1.conf

VOLUME /data

EXPOSE 26379

CMD ["redis-sentinel", "/usr/local/etc/redis/redis-sentinel.conf"]