<?php
try {
    include 'connectBD.php';
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la table
    $pdo->query(
        'CREATE TABLE IF NOT EXISTS annonces (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre TEXT NOT NULL,
            resume TEXT NOT NULL,
            contenu TEXT NOT NULL,
            image VARCHAR(150) NOT NULL
            )'
    );

    // Insertion des éléments dans la table
    if (isset($_POST['titre']) && isset($_POST['resume']) && isset($_POST['contenu'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $resume = htmlspecialchars($_POST['resume']);
        $contenu = htmlspecialchars( $_POST['contenu']);
        $image = htmlspecialchars(basename($_FILES['image']['name']));
        if (move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . '/../img/' . $image)) {
            $statement = $pdo->prepare(
                'INSERT INTO annonces (titre, resume, contenu, image) VALUES (:titre, :resume, :contenu, :image)'
            );

            $statement->bindParam('titre', $titre, PDO::PARAM_STR);
            $statement->bindParam('resume', $resume, PDO::PARAM_STR);
            $statement->bindParam('contenu', $contenu, PDO::PARAM_STR);
            $statement->bindParam('image', $image, PDO::PARAM_STR);
            $statement->execute();
        }
    }

    // Redirection vers la page d'annonces
    header('Location: ../../annonces.php');
    exit();
} catch(PDOException $exception) {
    var_dump($exception);
}