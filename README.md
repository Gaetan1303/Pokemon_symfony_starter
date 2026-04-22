# Pokémon Symfony Starter

Bienvenue sur le projet **Pokémon Symfony Starter** ! Ce projet est une base d’application web développée avec le framework Symfony, permettant de gérer un pokédex personnalisé.

## Fonctionnalités

- Ajout, affichage et gestion de pokémons
- Interface moderne avec Tailwind CSS
- Architecture MVC Symfony
- Utilisation de Doctrine ORM et migrations

## Prérequis

- PHP >= 8.4
- Composer

## Installation

1. Clonez le dépôt :
	```bash
	git clone <url-du-repo>
	cd Pokemon_symfony_starter
	```
2. Installez les dépendances PHP :
	```bash
	composer install
	```
3. Copiez le fichier d’environnement :
	```bash
     créez un .env adapté à votre environnement
	```
4. Créez la base de données et lancez les migrations :
	```bash
	symfony console doctrine:database:create 
	symfony console doctrine:migrations:migrate 
	```
5. Générez le CSS Tailwind :
	```bash
	symfony console tailwind:build
	```
6. Lancez le serveur Symfony :
	```bash
	symfony server:start
	# ou
	php -S localhost:8000 -t public
	```

## Structure du projet

- `src/` : Code source PHP (contrôleurs, entités, formulaires, repositories)
- `templates/` : Vues Twig
- `assets/` : Fichiers front (JS, CSS)
- `public/` : Racine web
- `migrations/` : Fichiers de migration Doctrine
- `config/` : Configuration Symfony

## Tests

Pour lancer les tests :
```bash
symfony php bin/phpunit
```

## Contribution

Les contributions sont les bienvenues ! Merci de forker le projet et de proposer vos améliorations via des pull requests.

## Licence

Projet sous licence de El Miminette !
