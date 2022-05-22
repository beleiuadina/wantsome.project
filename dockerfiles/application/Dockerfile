FROM ubuntu

# Instaleaza php7.4 si alte programe
RUN apt-get update
RUN apt-get install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update && apt-get upgrade -y 
RUN DEBIAN_FRONTEND=noninteractive apt-get install nginx wget php7.4-cli php7.4-fpm php7.4-mysql php7.4-json php7.4-opcache php7.4-mbstring php7.4-xml php7.4-gd php7.4-curl -y
RUN mkdir -p /run/php/

# Instaleaza wordpress
RUN wget "https://wordpress.org/latest.tar.gz" --directory-prefix=/tmp
RUN tar xf /tmp/latest.tar.gz --directory=/var/www/html
COPY wp-config.php /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN chmod -R 755 /var/www/html/wordpress

# Copiaza config nginx pt wordpress
COPY default /etc/nginx/sites-available

COPY entrypoint.sh /etc/entrypoint.sh
CMD ["/etc/entrypoint.sh"]
