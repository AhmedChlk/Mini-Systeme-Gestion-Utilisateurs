<?php
function getPDO(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $config = require __DIR__ . '/config.php';
        try {
            $pdo = new PDO($config['dsn'], $config['user'], $config['pass'], $config['options']);
       //echo "connexion a la BDD réussis avec succés\n";
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    return $pdo;
}
