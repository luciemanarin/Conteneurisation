# Image de base PHP-FPM alpine pour optimiser la taille
# Impact : réduction significative de la taille de l'image
FROM php:8.2-fpm-alpine

# Installation des extensions PHP et nettoyage en une seule couche
# Impact : réduction du nombre de layers et optimisation
RUN docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/*

# Définition du répertoire de travail
# Impact : organisation claire des fichiers  
WORKDIR /var/www/html

# Copie des fichiers dans le répertoire de travail
# Impact : seuls les fichiers nécessaires sont copiés
COPY ./frontend /var/www/html

# Correction des permissions
# Impact : sécurité et bon fonctionnement
RUN chown -R www-data:www-data /var/www/html

# Exposition du port 9000 pour accès PHP-FPM
# Impact : sécurité - seul le port nécessaire est exposé
EXPOSE 9000 