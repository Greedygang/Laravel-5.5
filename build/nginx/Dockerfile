FROM nginx:1.10.3

MAINTAINER yuanwangang@360.cn

COPY ./nginx.conf /etc/nginx/
COPY ./conf/vhost.conf /etc/nginx/conf.d/
COPY ./docker-entrypoint.sh /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]

