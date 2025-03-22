# Utilisation d'une image légère nginx alpine pour réduire la taille
# Impact : optimisation de la taille de l'image et des performances
FROM nginx:alpine

# Copie des fichiers dans le répertoire web de nginx
# Impact : seuls les fichiers nécessaires sont copiés
# Permet une meilleure gestion des ressources
COPY . /usr/share/nginx/html

# Configuration de nginx pour exposer les métriques
# Impact : permet la surveillance par Prometheus
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Exposition du port 80 pour accès HTTP
# Impact : sécurité - seul le port nécessaire est exposé
# Bonne pratique de sécurité Docker
EXPOSE 80
