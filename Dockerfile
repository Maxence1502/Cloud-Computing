# Récupère l'image d'Ubuntu depuis le Docker HUB : https://hub.docker.com/_/ubuntu
FROM ubuntu:jammy

# Définit la variable d'environnement DEBIAN_FRONTEND sur noninteractive, pour éviter les questions lors de l'installation
ENV DEBIAN_FRONTEND=noninteractive

# Mise à jour des packages apt
RUN apt-get update

# Installe les extensions du fichier packages.txt (apache2 & php)
COPY packages.txt .
RUN apt-get install -y $(cat packages.txt)

# Map le port 80 du conteneur pour les requêtes HTTP
EXPOSE 80

# Lance apache2 en background
CMD ["apache2ctl", "-D", "FOREGROUND"]
