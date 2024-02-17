# HistoryMaker

Projet Universitaire : Dans le cadre du marathon Web, nous avons formé une équipe de 4 informaticiens et 4 MMI, un site internet pour lire mais aussi créer des histoires vous-même. Le marathon web a duré au total 36h non-stop! Le but était de créer de zéro un site internet sur un thème donné. Beaucoup de travail était demandé mais nous n'avons rien lâché et nous avons fini d'implémenter toutes les fonctionnalités de base. Sur History Maker, vous avez la possibilité de lire des histoires (triées ou non par choix de l'utilisateur), créer votre propre histoire, créer un compte ou vous connecter, visiter le profil des utilisateurs, mettre en favoris des histoires.

## Histoires dont vous êtes le héros

## Version initiale

Pour lancer avec succès le site web, il faut exécuter les
commandes suivantes sur votre machine :

```shell
# A partir de la racine de votre projet

# installation des dépendances
composer install 

# installation des outils pour la construction du front
npm install 
# Modification du front en cours de développement
npm run dev
# Construction du front pour la version exploitation
npm run build

# liaison avec le SGBD et la base de données utilisée
cp .env.example .env


#########################################################
#
# Ici il faut modifier en particulier les variables suivantes
#
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=marathon_22
# DB_USERNAME=root
# DB_PASSWORD=
#
#
#########################################################

# Génération de la clé initiale

php artisan key:generate

# génération des tables dans votre base de données

php artisan migrate

# ou pour ré-initialiser

php artisan migrate:fresh

# Initialisation des données de départ

cp -r resources/images storage/app/public

# Création du lien physique en storage/app/public et public/storage

php artisan storage:link

# Ajout de données aléatoire dans les tables de la base de données

php artisan db:seed

# Lancement de l'application web pour le développement

php artisan serve
```

Si toutes les commandes précédentes ont été exécutées, votre application doit être accessible à
l'adresse [http://localhost:8000](http://localhost:8000)

# Outils utilisés :
  - PHP
  - Laravel
  - SQL

# Diagramme de classes :

![image.png](./resources/doc/images/diagramme.png)
(Diagramme de classes)

### Travail réalisé :

* Création de vue en rapport avec l'utilisateur connecté
* Création du controller chapitreController
* Création du controller userController
* Création de methode dans le controller histoireController
* Création de la page profil
* Possibilité de modifier le profil
* Création de la vue chapitres.show
* Possibilité de creer des chapitres pour une histoire creer plus tôt
* Possibilité de lier des chapitres d'une même histoire entre eux
* Possibilité de créé une nouvelle histoire 
* CRUD de l'utilisateur
* J'ai fais des requêtes ,insertions et mise a jour sur la base de donnée donné.
* Le routage pour le CRUD des utilisateurs
* Le routage pour le CRUD des chapitres
* Le routage pour le CRUD des histoires
* Le routage pour lier le premier chapitre a son histoire
* Le routage pour relier les chapitres entre eux
* Le routage pour accéder aux informations d'un utilisateur.

