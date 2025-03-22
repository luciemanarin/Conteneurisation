# Image de base PHP-FPM alpine pour optimiser la taille
FROM php:8.2-fpm-alpine

# Installation des extensions PHP et nettoyage en une seule couche
# Impact : réduction de la taille de l'image en combinant les commandes
RUN docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/*

# Définition du répertoire de travail
# Impact : organisation claire des fichiers
WORKDIR /var/www/html

# Copie des fichiers sources
# Impact : seuls les fichiers nécessaires sont inclus
COPY . .

# Exposition du port pour PHP-FPM
# Impact : sécurité - seul le port nécessaire est exposé
EXPOSE 9000
