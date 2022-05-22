FROM mariadb:latest 

RUN mysql -e "CREATE DATABASE wordpress_db DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
RUN mysql -e "CREATE USER 'wpadmin'@'%' IDENTIFIED WITH mysql_native_password BY 'Ad6KsvYEPCaG4fe8';"
RUN mysql -e "GRANT ALL ON wordpress_db.* TO 'wpadmin'@'%';"
RUN mysql -e "FLUSH PRIVILEGES;"


RUN sed 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mysql.conf.d/mysqld.cnf > /tmp/mysqld.cnf && mv /tmp/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

