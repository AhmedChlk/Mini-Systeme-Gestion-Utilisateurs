# Mini Système de Gestion des Utilisateurs

Ce projet est un exercice complet et approfondi en PHP 8 visant à implémenter un mini système de gestion des utilisateurs. L'application gère une liste d'utilisateurs en utilisant des concepts avancés tels que l'héritage, les interfaces, les traits et les nouveautés de PHP 8 (promotion des propriétés, types union).

## Table des Matières

- [Description](#description)
- [Énoncé de l'exercice](#énoncé-de-lexercice)
- [Structure du Projet](#structure-du-projet)
- [Prérequis](#prérequis)
- [Installation et Exécution](#installation-et-exécution)
- [Fonctionnalités](#fonctionnalités)
- [Utilisation](#utilisation)
- [Contribuer](#contribuer)
- [Licence](#licence)
- [Auteur](#auteur)

## À propos du projet

Ce projet implémente un système de gestion d'utilisateurs comportant :

- Une classe de base `Personne` définissant des propriétés communes (nom, email).
- Deux classes dérivées :
  - `Administrateur` : avec des droits supplémentaires (ex. : niveau d'accès).
  - `UtilisateurStandard`.
- Une interface `Exportable` qui déclare la méthode `exporter()` pour fournir une représentation JSON des objets.
- Un trait `Logger` permettant l'affichage de messages de log à chaque étape importante (création d'utilisateurs, exportation, etc.).
- L'utilisation de la promotion de propriétés et des types union introduits en PHP 8 pour une syntaxe plus concise et typée.

## Énoncé de l'exercice

### Exercice Complet et Approfondi : Création d'un Mini Système de Gestion des Utilisateurs

#### Objectif

Vous allez créer une application console (ou web) qui :

- Gère une liste d'utilisateurs avec différentes propriétés.
- Implémente l'héritage pour définir des types d'utilisateurs (par exemple, Administrateur et Utilisateur Standard).
- Utilise des interfaces pour définir des comportements communs, comme l'exportation des données.
- Utilise des traits pour ajouter des fonctionnalités transversales (comme le logging).
- Intègre des nouveautés de PHP 8 (property promotion, types d'union).

#### Spécifications du Projet

1. **Classes de Base et Héritage** :
   - Créez une classe Personne avec des propriétés communes (nom, email).
   - Créez deux classes qui héritent de Personne : Administrateur et UtilisateurStandard.
   - L'Administrateur peut avoir des droits supplémentaires (par exemple, un niveau d'accès).

2. **Interface et Exportation** :
   - Définissez une interface Exportable avec une méthode exporter() qui doit renvoyer une représentation JSON de l'utilisateur.
   - Faites en sorte que vos classes héritées implémentent cette interface.

3. **Utilisation d'un Trait pour le Logging** :
   - Créez un trait Logger qui fournit une méthode log($message) pour afficher des messages de log.
   - Intégrez ce trait dans la classe Personne ou dans les classes dérivées.

4. **Fonctionnalités Avancées** :
   - Utilisez la property promotion pour déclarer les propriétés dans les constructeurs.
   - Intégrez un type d'union dans une méthode si nécessaire (par exemple, pour gérer différentes formes d'identifiants).

#### Consignes de l'Exercice

- Structurez votre projet en créant un fichier principal, par exemple gestion_utilisateurs.php.
- Écrivez les classes, interfaces et traits dans ce même fichier ou répartissez-les en plusieurs fichiers, puis incluez-les.
- Créez quelques instances de vos classes et affichez leurs informations exportées sous forme de JSON.
- Utilisez le trait Logger pour tracer l'exécution du script et afficher des messages à chaque étape (création d'un utilisateur, exportation des données, etc.).

## Structure du Projet

```plaintext
mini-systeme-gestion-utilisateurs/
│
├── README.md                # Ce fichier
├── gestion_utilisateurs.php # Script principal de l'application
```

## Prérequis

- PHP 8.0 ou supérieur
- Extension JSON activée

## Installation et Exécution

1. Clonez ce dépôt :
   ```
   git clone https://github.com/votre-nom/mini-systeme-gestion-utilisateurs.git
   ```

2. Accédez au répertoire du projet :
   ```
   cd mini-systeme-gestion-utilisateurs
   ```

3. Exécutez le script principal :
   ```
   php gestion_utilisateurs.php
   ```

## Fonctionnalités

- Création et gestion d'utilisateurs (standard et administrateurs)
- Exportation des données utilisateurs au format JSON
- Journalisation des actions effectuées
- Gestion des préférences pour les utilisateurs standards
- Niveaux d'accès pour les administrateurs

## Utilisation

Le script principal `gestion_utilisateurs.php` démontre l'utilisation des différentes classes et fonctionnalités. Il crée des utilisateurs, les ajoute au gestionnaire, et exporte leurs données en JSON.

## Contribuer

Les contributions sont les bienvenues ! N'hésitez pas à soumettre une pull request.

## Licence

Ce projet est sous licence MIT.

## Auteur

Ahmed Choulak
