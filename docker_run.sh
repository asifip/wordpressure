docker run -d \
  --name wordpress-container \
  -p 8080:80 \
  -v /workspaces/wordpressure/wwwroot:/var/www/html \
  --link wordpressure-mysql-1:mysql \
  -e WORDPRESS_DB_HOST=mysql:3306 \
  -e WORDPRESS_DB_USER=azure \
  -e WORDPRESS_DB_PASSWORD='6#vWHD_$' \
  -e WORDPRESS_DB_NAME=localdb \
  wordpress:latest
