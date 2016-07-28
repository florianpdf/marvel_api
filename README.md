Project Marvel API

Objectif:

Mise en place de l'API Marvel dans une application symfony, avec et sans service Lien vers la doc: http://developer.marvel.com/

Pré-requis:

composer ==> Install Composer

Initialisation du projet

Avec ssh: git clone git@github.com:florianpdf/marvel_api_project.git
Sans ssh: git clone git@github.com:florianpdf/marvel_api_project.git
cd marvel_api_project
composer install
php app/console doctrine:database:create
php app/console asset:install
Contenu des branches:

Sur la branche "master" ==> Projet avec l'appel à l'API fonctionnel
Sur la branche "no_api" ==> Projet sans l'appel à l'API
Sur la branche "service_api" ==> Projet avec l'appel à l'API dans un service
