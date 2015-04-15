#!/bin/sh
apt-get update && apt-get dist-upgrade
apt-get install apache2 php5 libapache2-mod-php5 git
apt-get install mysql-server mysql-client php5-mysql phpmyadmin
apt-get install unzip
rm -fr /var/www
git clone https://github.com/mmuni/data_tool.git /var/www
a2enmod rewrite
service apache2 restart
