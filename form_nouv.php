<?php
$titre = htmlspecialchars($_POST['titre']);
$resume = htmlspecialchars($_POST['resume']);
$annonce = htmlspecialchars( $_POST['annonce']);
$image = htmlspecialchars($_POST['image']);

try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Méthode query : permet d'écrire du SQL.
    $pdo->query(
        'CREATE TABLE IF NOT EXISTS annonce (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre TEXT NOT NULL,
            resume TEXT NOT NULL,
            annonce TEXT NOT NULL,
            image VARCHAR(150) NOT NULL
            )'
    );

    if ($titre && $resume && $annonce && $image) {
        // Méthode prepare : insérer des éléments dans une base de donnée ou faire un SELECT
        $statement = $pdo->prepare(
            'INSERT INTO annonce (titre, resume, annonce, image) VALUES (:titre, :resume, :annonce, :image)'
        );
        $statement->bindParam('titre', $titre, PDO::PARAM_STR);
        $statement->bindParam('resume', $resume, PDO::PARAM_STR);
        $statement->bindParam('annonce', $annonce, PDO::PARAM_STR);
        $statement->bindParam('image', $image, PDO::PARAM_STR);
        $statement->execute();
    }
} catch(PDOException $exception) {
    var_dump($exception);
}