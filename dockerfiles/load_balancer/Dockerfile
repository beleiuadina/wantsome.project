FROM ubuntu

RUN apt update && apt upgrade -y 
RUN apt install nginx -y


COPY default /etc/nginx/sites-available
CMD ["nginx", "-g", "daemon off;"]
