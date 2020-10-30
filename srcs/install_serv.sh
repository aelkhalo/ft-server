#install nginx
apt-get update && apt-get install -y nginx
service nginx start
apt-get install wget unzip gnupg -y
apt install gdebi-core -y

#install mysql
wget https://repo.mysql.com//mysql-apt-config_0.8.15-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
gdebi -n mysql-apt-config_0.8.15-1_all.deb
apt-get update
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start
apt-get install php7.3-fpm php7.3-mbstring -y
apt-get install php-mysql -y

#install phpmyadmin
cd var/www/html/
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip
unzip phpMyAdmin-5.0.4-all-languages.zip
mv phpMyAdmin-5.0.4-all-languages phpmyadmin
rm *.zip
service php7.3-fpm start
cd /etc/nginx/sites-available/
rm -f default
cp /default /etc/nginx/sites-available/
service nginx restart
service php7.3-fpm restart

#conf db
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'aelkhalo'@'localhost' IDENTIFIED BY 'aelkhalo';";
mysql --password=aelkhalo --user=aelkhalo -e "FLUSH PRIVILEGES;";
mysql --password=aelkhalo --user=aelkhalo -e "CREATE DATABASE wordpress;";
mysql --password=aelkhalo --user=aelkhalo wordpress < /wordpress.sql

#install wordpress
cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip latest.zip
rm latest.zip
cd wordpress/
rm -f wp-config-sample.php
cp /wp-config.php /var/www/html/wordpress/
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
rm -f /var/www/html/phpmyadmin/config.sample.inc.php
cp -f /config.inc.php /var/www/html/phpmyadmin/

#install supervisor
# cd /
# apt-get -y install supervisor;
# mkdir -p /var/log/supervisor;
# mkdir -p /etc/supervisor/conf.d;
# mv /supervisord.conf /etc/supervisor/conf.d/;