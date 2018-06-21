# Associer des utilisateurs avec des autorisations et des rôles.

* [Installation](#installation)
* [Usage](#usage)

## Installation

- [Mise à jour des composants](#Composants)
- [Création de la base de données MYSQL](#BDD)
- [Création du fichier (.env)](#ENV)
- [Edition du fichier .env](#Environnement)
- [Génération de la clé de sécurité](#Clé)
- [Creation des tables et données primaires](#Données)
- [Demarrage de l'application](#Démarrage)
- [Connexion](#Connexion)

### Composants

Ce paquet peut être utilisé dans Laravel 5.6 ou supérieur.

Après avoir importé le paquet dans votre dossier, il va falloir le mettre à jour.

Vous pouvez le mettre à jour le paquet via composer(ligne de commande : dossier importé):

``` bash
composer update
```

### BDD

Créer une base de données MYSQL.

### ENV

Renommer le fichier `.env.example` en `.env`

### Environnement

Editer le fichier `.env` pou y ajouter les parametres de connexion à la base de données.
```
DB_CONNECTION=mysql
DB_HOST=0.0.0.0
DB_PORT=3306
DB_DATABASE=ma_base_de_donnees
DB_USERNAME=username
DB_PASSWORD=password
```
### Clé
Génerer un cle de securité.
``` bash
php artisan key:generate
```
### Données

Creation des tables et insertion des données de base.
``` bash
php artisan db:seed
```
`yes`
`yes`
`Admin,User`

Les identifiants administrateur vous sera communiqué à la fin des commandes (email, mot de passe) comme ceci.
```
Ci-dessous les détails de connexion de Admin :
bobby72@example.net
Le mot de passe est "secret"
Roles Admin,User Ajouté avec succes

Process finished with exit code 0 at 10:45:35.
Execution time: 17 896 ms.
```



### Démarrage

### Connexion
