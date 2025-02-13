# Projet Symfony API

## Essayer

Si mon serveur est allumé actuellement, vous pouvez essayez l'API ici : https://planete-api.velvet-room.tech/api ou ici http://planete-api.velvet-room.tech/api

## Installation

1. **Cloner le projet**
   ```sh
   git clone https://github.com/ton-utilisateur/ton-repo.git
   cd ton-repo

2. **Installer les dépendances PHP**
   ```sh
   composer install

3. **Démarrer la base de données avec Docker**
   ```sh
   docker compose -f compose.yaml -f compose.override.yaml up -d

4. **Charger les fixtures**
   ```sh
   php bin/console doctrine:fixtures:load

5. **Configurer l'application si nécessaire**

Copier le fichier .env en .env.local et ajuster les variables si nécessaire.

Ne pas modifier le port Symfony
Le port défini dans .symfony.local.yaml doit être respecté.

6. **Lancer le serveur Symfony**
    ```sh
   symfony server:start

Fait par Antony Cilleros GA1
