# ManageYourTweet Application

## Description

Ce projet est une application Laravel utilisant Inertia.js et Vue 3 pour construire une interface utilisateur moderne et réactive. Pour l'instant, l'application permet aux utilisateurs de se connecter via l'API de Twitter en utilisant Laravel Socialite. Cette fonctionnalité est la première étape pour implémenter l'authentification sociale et des fonctionnalités supplémentaires seront ajoutées par la suite.

## Fonctionnalités

- **Connexion via Twitter** : Les utilisateurs peuvent se connecter en utilisant leur compte Twitter grâce à l'intégration de Laravel Socialite.

## Installation

Pour installer et exécuter ce projet localement, suivez les étapes ci-dessous.

### Prérequis

- PHP >= 8.0
- Composer
- Node.js et npm
- Serveur MySQL ou SQLite
- Clé API Twitter pour utiliser l'authentification sociale (Twitter API v2)

### Étapes d'installation

1. **Cloner le dépôt :**

   ```bash
   git clone https://github.com/username/my-laravel-inertia-app.git
   cd my-laravel-inertia-app
   ```

2. **Configurer le fichier .env :**

   Créez un fichier `.env` en copiant le contenu du fichier `.env.example`. Ajoutez les informations de connexion à votre base de données et les clés API Twitter.

3. **Installer les dépendances et lancer le projet :**

   ```bash
   composer install
   npm install
   php artisan key:generate
   php artisan migrate
   php artisan serve
   npm run dev
   ```

## Technologies utilisées

Backend : Laravel 9
Frontend : Inertia.js, Vue 3
Authentification sociale : Laravel Socialite
