# Mini Système de Gestion des Utilisateurs

Ce projet est un exercice complet et approfondi en PHP 8 visant à implémenter un mini système de gestion des utilisateurs. L'application gère une liste d'utilisateurs en utilisant des concepts avancés tels que l'héritage, les interfaces, les traits et les nouveautés de PHP 8 (promotion des propriétés, types union).

## Table des Matières

- [Description](#description)
- [Structure du Projet](#structure-du-projet)
- [Prérequis](#prérequis)
- [Installation et Exécution](#installation-et-exécution)
- [Fonctionnalités](#fonctionnalités)
- [Utilisation](#utilisation)
- [Contribuer](#contribuer)
- [Licence](#licence)
- [Auteur](#auteur)

## Description

Ce projet implémente un système de gestion d'utilisateurs comportant :

- Une classe de base `Personne` définissant des propriétés communes (nom, email).
- Deux classes dérivées :
  - `Administrateur` : avec des droits supplémentaires (ex. : niveau d'accès).
  - `UtilisateurStandard`.
- Une interface `Exportable` qui déclare la méthode `exporter()` pour fournir une représentation JSON des objets.
- Un trait `Logger` permettant l’affichage de messages de log à chaque étape importante (création d'utilisateurs, exportation, etc.).
- L'utilisation de la promotion de propriétés et des types union introduits en PHP 8 pour une syntaxe plus concise et typée.

## Structure du Projet

```plaintext
mini-systeme-gestion-utilisateurs/
│
├── README.md                # Ce fichier
├── gestion_utilisateurs.php # Script principal de l'application (peut être étendu ou découpé en plusieurs fichiers)
└── (éventuellement d'autres fichiers/classes selon votre organisation)
