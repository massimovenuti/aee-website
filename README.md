# Programmation Web 2 - L2S4 - 2020

## Utilisation du projet

* Faire un "fork" du projet dans votre Gitlab universitaire ;
* Ajouter votre formateur TP aux "Developer" de votre projet (settings>Members>Project Members) ;
* Faire un `clone` de votre projet dans :
    * Si vous êtes sur votre machine :
        * `/var/www/html/` si vous êtes sur Linux
        * Dans votre répertoire WAMP (Windows) ou XAMP (Mac) dans le dossier `www`
    * Si vous êtes sur une machine de la fac : `/var/www/html/<dossier à votre nom>/`
* Faire un `chmod -R 777` sur le dossier copier (pour l'utilisation de la base de données).
* Ne travailler que dans le dossier indiqué ci-dessus !

## Rappel des consignes pour les TP

* Il vous sera demandé d'utiliser les langages suivants :
    * HTML pour la structure
    * CSS pour le style
    * Javascript en langage de front
    * PHP en langage serveur
    * N.B. : il est **obligatoire** d'utiliser **tous** les langages dans votre projet !
* Pour la gestion de GIT :
    * Faire **obligatoirement** un `commit` le jour du TP ;
    * Faire un `commit` la veille du TP suivant (attention, les aléas de certains emploi du temps font que vous n'avez pas toujours une semaine complète entre deux TP !) ;
    * Ne pas oublier de `push` le projet après chaque `commit` !
    * N.B. : Pour ceux qui ont l'habitudes de faire des `commit` atomiques (plein de petits `commit`), mettre un moyen visuel pour nous, pour que nous puissions repérer chaque "`commit` de fin" = `commit` demandés ci-dessus. 
* Le projet est **personnel**.
* L'utilisation d'un CMS (Wordpress, Webflow, Joomla, Drupal...) est **interdite** !
* L'utilisation d'un framework est tolérée (il doit obligatoirement être basé sur PHP). N.B. :
    * Même si vous utilisez un framework, les consignes de notations seront identiques !
    * La logique de développement sera du coup parfois très différente de ce qu'on fait habituellement avec un framework !
    * L'utilisation de certaines librairies ou bundles sera parfois interdite, elle le sera également dans les frameworks !
* Pour la gestion des données, utilisation obligatoire de `SQLite` avec comme fichier de base de données `database.db` 

## Structure du projet

* Dossier `assets` : y mettre les fichiers `*.js`, `*.css`, `*.php` et toutes les images, dans dossiers consacrés.
* Dossier `templates` : y mettre tous les fichiers communs à toutes les pages (navbar, footer...).
* Page d'accueil = `index.php`
* Pour les autres pages, les organiser en fonction des urls voulues.

## Rappels GIT

* `clone` : `git clone <url du repository>`
* `commit` : `git add . && git commit -m "<message de commit>"`
* `push`: `git push origin <nom de la branche>`
