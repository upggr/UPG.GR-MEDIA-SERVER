#!/bin/bash
#sudo apt-get update -y
sudo apt-get install build-essential nmap libpcre3 git libpcre3-dev libssl-dev unzip software-properties-common php5-common php5-cli php5-fpm lynx nmap -y
iptables -I INPUT -p tcp --dport 80 -j ACCEPT
iptables -I INPUT -p tcp --dport 1935 -j ACCEPT
mkdir /var/log/nginx/
touch /var/log/nginx/error.log
cd /etc/php5/cli
sudo mv php.ini php.ini.backup
sudo ln -s ../fpm/php.ini
sudo service php5-fpm start
sudo mkdir ~/working
cd ~/working
sudo wget http://nginx.org/download/nginx-1.8.0.tar.gz
git clone git://github.com/arut/nginx-rtmp-module.git
mv nginx-rtmp-module rtmp
sudo tar -zxvf nginx-1.8.0.tar.gz
cd nginx-1.8.0
./configure --with-http_ssl_module --add-module=../rtmp --with-debug
sudo make 
sudo make install
cd ~/
sudo rm -rf ~/working
sudo wget -O /etc/init.d/nginx http://tools.upg.gr/rtmpserver/conf/nginx.txt 
sudo chmod +x /etc/init.d/nginx
sudo /usr/sbin/update-rc.d -f nginx defaults
mkdir /usr/local/nginx/html/hls/
mkdir /usr/local/nginx/html/dash/
mkdir /usr/local/nginx/html/dash/tmp/
mkdir /usr/local/nginx/html/hls/tmp/
rm -f /usr/local/nginx/conf/nginx.conf.default
ln -s /usr/local/nginx/sbin/nginx nginx
sudo wget -O /usr/local/nginx/conf/nginx.conf http://tools.upg.gr/rtmpserver/conf/nginx.conf
sudo wget -O /etc/nginx/nginx.conf http://tools.upg.gr/rtmpserver/conf/nginx.conf
sudo wget -O /usr/local/nginx/html/index.php http://tools.upg.gr/rtmpserver/www/index.txt
sudo wget -O /usr/local/nginx/html/flashlsFlowPlayer.swf http://tools.upg.gr/rtmpserver/www/flashlsFlowPlayer.txt
sudo wget -O /usr/local/nginx/html/favicon.ico http://tools.upg.gr/rtmpserver/www/favicon.ico
sudo wget -O /usr/local/nginx/html/listview-grid.css http://tools.upg.gr/rtmpserver/www/listview-grid.css
sudo wget -O /usr/local/nginx/html/stream.xml http://tools.upg.gr/rtmpserver/www/stream.xml
sudo wget -O /usr/local/nginx/html/w.php http://tools.upg.gr/rtmpserver/www/w.txt
nmap -sT -O localhost
sudo service nginx start
nmap -sT -O localhost
