<?php
// Connexion à la base de données
try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../../database.db');
} catch (PDOException $exception) {
    var_dump($exception);
}
