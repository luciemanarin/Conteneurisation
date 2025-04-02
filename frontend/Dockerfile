# Utilisation d'une image légère nginx alpine
FROM nginx:alpine

# Installation de PHP et des extensions nécessaires
RUN apk add --no-cache php81 \
    php81-fpm \
    php81-pdo \
    php81-pdo_mysql

# Configuration de PHP-FPM
RUN mkdir -p /run/php && \
    sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php81/php.ini

# Copie des fichiers de l'application
COPY ./html /usr/share/nginx/html

# Copie de la configuration Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Exposition du port 80
EXPOSE 80