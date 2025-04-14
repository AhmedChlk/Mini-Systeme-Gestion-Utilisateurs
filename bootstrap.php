<?php
// bootstrap.php

// 1. Active les rapports d'erreur (utile en développement)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Démarre la session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 3. Charge l'autoloader pour les classes
require_once __DIR__ . '/vendor/autoload.php';

// 4. Charge les fichiers de configuration et de la base de données
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';

// 5. Initialisation de la connexion à la BDD
$pdo = getPDO();

?>

