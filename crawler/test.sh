#!/bin/sh
/usr/bin/php /home/kfuruya/git/matome/crawler/curl.php
sleep 5s
cp /home/kfuruya/git/matome/crawler/moeimg /var/www/matome/htdocs/moeimg
