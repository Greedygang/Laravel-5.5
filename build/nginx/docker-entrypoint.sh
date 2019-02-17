#!bin/bash

# nginx日志文件
mkdir -p /data/logs/nginx/

# 添加www-data用户和用户组，如果nginx的用户为www-data且docker容器中没有www-data用户和用户组，则需要创建www-data用户
# /usr/sbin/groupadd -f www-data
# /usr/sbin/useradd -g www-data www-data

# 后台启动nginx
nginx -g "daemon off;"