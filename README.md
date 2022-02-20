# Nom du projet: Immobilier CRUD

## Description du projet
C'est un CRUD simple utilisant le framework PHP Laravel, pour le frontend j'ai utiliser le framework CSS Bootstrap, car m'ayant parlé que vous utilisé Bootstrap pour l'admin de votre application.

## Installation
1ère étape: Créer une base de données MySQL

2ème étape: Créer un fichier .env et faite un copier coller du contenu fichier .env.example pour ensuite vous relier à votre base de   
            données puis dans la partie du fichier lié à la base de donnée, DB_DATABASE doit être égal au nom de la bade de données 
            qu vous avez créer au prélable.

3ème étape: Dans le terminal saisir la commande `composer install & npm install`

4ème étape: Tojours dans le terminal, saisir la commande `php artisan migrate`

## Les étapes (que j'ai fait pour le créer le projet)
1ère étape: Créarion du projet avec la commande `laravel new immobilier_crud & cd immobilier_crud`

2ème étape: Création de ma base de données `immobilier_crud`

3ème étape: Configuration du fichier .env

4ème étape : Création des models Ad et Agent, des tables create_ads_table et create_agents_table et des 5
              controllers AdController et AgentController pour pour effectuer des opérations du CRUD. et création de ma base de données
              configuration du fichier .env pour ma base de données afin d'y mettre à l'avenir mes données.

            Création d'un model: `php artisan make:model nom_du_model`
            Création d'une table: `php artisan make:migration create_nomDeLaTableAuPluriel_table`
            Creation des controller: `php artisan make:controller NomController`

5ème étape: Création des champs dans les 2 fichiers create_ads_table et create_agents_table ainsi qu'une
            clé étrangère agent->foreignId() dans create_ads_table permettant de faire référence à l'id de agent.

6ème étape: Mise en relation ManyToOne (belongsTo) dans le fichier App\Models\Ad.php
            Via une fonction agent() retournant une relation ManyToOne(belongsTo) vers le model Agent

7ème étape: Afin d'appliquer toutes nos migrations j'ai utiliser la commande php artisan migrate

8ème étape: J'ai créé 2 utilisateurs dans le fichier DatabaseSeeder.php (répertoire: database/seeders/) ainsi que 2 annonces pour avoir
            de base 2 annonces qui sont reliés chacune à un agent mait permettra lors de la création d'autre annonces de pouvoir choisir entre ces 2 agents.

            Pour ajouter les 2 agents ainsi que les 2 annonces en base de données j'ai exécuter la commande `php artisan db:seed` permettant d'ajouter en base de données mes données renseigner dans le fichier databaseSeeder.php

9ème étape: Création des routes pour les annonces, dans le fichier web.php en utilisant cette ligne `Route::resource('annonces', AdController::class);`, ce qui permet grâce à `resource` de définir toutes les routes pour chaque action possible pour l'url commençant par `annonces`, j'indique également que j'utilise le controleur `AdController`

10ème étape: Création des méthodes index(), create(), store(), show(), edit(), update(), destroy() pour que je puisse effectuer        
mes opérations du CRUD dans mon panneau d'administration pour mes annonces.

11ème étape: Création des fichiers .blade.php contenant les différentes actions du CRUD, pour les nom        
            des fichiers j'ai jouer la sécurité en les nommants comme les noms des différentes méthodes.

## Les Technologies

Backend:
    * Langage: PHP
    * Framework: Laravel
    * Base de données: MySQL

Frontend:
    * Lanages:
    + Langage de balises: HTML
    + Langage de style: CSS
    + Langage de script: Javascript
    + Framework: Bootstrap