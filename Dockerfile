# Utilise l'image officielle WordPress comme base
FROM wordpress:latest

# Installer git pour cloner le repo
RUN apt-get update && apt-get install -y git && rm -rf /var/lib/apt/lists/*

# Supprimer les fichiers WordPress par défaut
RUN rm -rf /var/www/html/*
# Cloner le repo directement dans le dossier WordPress
RUN git clone https://github.com/haneneChtourou/monSite /var/www/html/

# Donner les bons droits à WordPress
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80
