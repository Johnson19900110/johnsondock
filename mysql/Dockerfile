ARG MYSQL_VERSION=latest

FROM mysql:${MYSQL_VERSION}

LABEL maintainer="Johnson <2534426042@qq.com>"

COPY my.cnf /etc/mysql/conf.d/my.cnf

CMD ["mysqld"]

EXPOSE 3306