<?php
return [
    'dsn' => 'mysql:host=localhost;dbname=mini_systeme_gestion_utilisateurs;charset=utf8mb4',
    'user' => 'root',
    'pass' => '',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];
