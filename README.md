Project Marvel API
==============
####Objectif:
Mise en place de l'API Marvel dans une application symfony, avec et sans service
Lien vers la doc: http://developer.marvel.com/

####Pré-requis: 
composer ==> [Install Composer](https://getcomposer.org/doc/00-intro.md)

#### Initialisation du projet
1. **Avec ssh**: git clone git@github.com:florianpdf/marvel_api_project.git 
2. **Sans ssh**: git clone git@github.com:florianpdf/marvel_api_project.git
3. cd marvel_api_project
4. composer install
5. php app/console doctrine:database:create
6. php app/console asset:install

#### Contenu des branches:
1. **Sur la branche "master"** ==> Projet avec l'appel à l'API fonctionnel
2. **Sur la branche "no_api"** ==> Projet sans l'appel à l'API
3. **Sur la branche "service_api"** ==> Projet avec l'appel à l'API dans un service 
