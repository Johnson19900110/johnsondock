#!/bin/sh

source ~/.zshrc

/var/www/sf-odp-2.0/webserver/loadnginx.sh start
/var/www/sf-odp-2.0/php/sbin/php-fpm start