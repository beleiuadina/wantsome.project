FROM ubuntu

RUN apt update && apt upgrade -y 
RUN apt install mariadb-server -y
RUN systemctl start mariadb
RUN mysql -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
RUN mysql -e "CREATE USER 'wpadmin'@'%' IDENTIFIED WITH mysql_native_password BY 'password';"
RUN mysql -e "GRANT ALL ON wordpress.* TO 'wpadmin'@'%';"
RUN mysql -e "FLUSH PRIVILEGES;"


RUN sed 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mysql.conf.d/mysqld.cnf > /tmp/mysqld.cnf && mv /tmp/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf



CMD ["systemctl", "start", "mariadb"]
