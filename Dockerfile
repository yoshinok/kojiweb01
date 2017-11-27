FROM php:apache
COPY post.php /var/www/html
COPY index.html /var/www/html
EXPOSE 80
