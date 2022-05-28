# wantsome.project

Docker commands
Application
    docker build -t adinabeleiu/application .
    docker run --name application_1 --link database -d -t adinabeleiu/application
    docker run --name application_2 --link database -d -t adinabeleiu/application

Load balancer
    docker build -t adinabeleiu/load_balancer .
    docker run --name load_balancer -p 80:80 --link application_1 --link application_2 -d -t adinabeleiu/load_balancer

Database
     docker run --env MARIADB_RANDOM_ROOT_PASSWORD=1 --env MARIADB_PASSWORD=Ad6KsvYEPCaG4fe8 --env MARIADB_USER=wpadmin --env MARIADB_DATABASE=wordpress_db --name database --volume /$(pwd)/database_data:/var/lib/mysql -d mariadb:10.8.3-jammy
