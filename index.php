<?php
require_once 'bootstrap.php';
$user = new User(
    "Doe",
    "Jane",
    "jane@example.com",
    "secret",
    new DateTime(),
    101
);

$admin = new Admin(
    "Smith",
    "John",
    "john@admin.com",
    "adminpass",
    new DateTime(),
    1
);


