# Mini Système de Gestion des Utilisateurs

Un système simple de gestion d'utilisateurs en PHP 8 conçu comme un projet d'apprentissage pour maîtriser les concepts modernes de PHP.

## Objectif pédagogique

Ce projet a été créé spécifiquement pour l'apprentissage du PHP moderne. Il sert de support pratique pour:
- Comprendre les nouveautés de PHP 8
- Maîtriser les concepts avancés de la programmation orientée objet
- Apprendre les bonnes pratiques de développement
- S'exercer sur un cas concret et complet de développement backend

Idéal pour les débutants souhaitant approfondir leurs connaissances en PHP ou pour les développeurs expérimentés voulant se mettre à jour avec PHP 8.

## À propos du projet

Ce projet implémente un système de gestion d'utilisateurs qui:
- Utilise les nouveautés de PHP 8 (promotion des propriétés, types d'union)
- Applique des concepts orientés objet (héritage, interfaces, traits)
- Suit une structure de projet organisée avec autoloading via Composer

## Fonctionnalités

- Création et gestion de différents types d'utilisateurs (standards et administrateurs)
- Exportation des utilisateurs au format JSON
- Système de logging pour tracer les opérations importantes
- Sauvegarde des utilisateurs dans une base de données

## Prérequis

- PHP 8.0+
- Composer
- MySQL (ou autre SGBD compatible PDO)

## Installation

1. Cloner le dépôt
   ```
   git clone https://github.com/votre-nom/Mini-Systeme-Gestion-Utilisateurs.git
   cd Mini-Systeme-Gestion-Utilisateurs
   ```

2. Installer les dépendances
   ```
   composer install
   ```

3. Configurer la base de données
   - Éditer le fichier `./includes/config.php` si nécessaire
   - Importer le schéma SQL 
     ```
     mysql -u <utilisateur> -p < database/schema.sql
     ```

4. Lancer l'application
   - Mode console: `php index.php`
   - Mode web: déployer dans un serveur web compatible

## Structure du projet

```
Mini-Systeme-Gestion-Utilisateurs/
├── bootstrap.php              # Initialisation du projet
├── classes/                   # Classes du système
├── composer.json              # Configuration de l'autoload
├── database/                  # Schéma de la base de données
├── includes/                  # Fichiers de configuration
└── index.php                  # Point d'entrée
```

## Licence

Ce projet est distribué sous licence MIT.

## Auteur

Ahmed Choulak
