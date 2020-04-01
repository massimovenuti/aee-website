<?php
$titre = htmlspecialchars($_POST['titre']);
$resume = htmlspecialchars($_POST['resume']);
$contenu = htmlspecialchars( $_POST['contenu']);
$image = htmlspecialchars($_POST['image']);

try {
    // Connexion à la base de données
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../../database.db');
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
    if ($titre && $resume && $contenu && $image) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../' . basename($_FILES['image']['name']));
        $statement = $pdo->prepare(
            'INSERT INTO annonces (titre, resume, contenu, image) VALUES (:titre, :resume, :contenu, :image)'
        );

        $statement->bindParam('titre', $titre, PDO::PARAM_STR);
        $statement->bindParam('resume', $resume, PDO::PARAM_STR);
        $statement->bindParam('contenu', $contenu, PDO::PARAM_STR);
        $statement->bindParam('image', $image, PDO::PARAM_STR);
        $statement->execute();
        ?>

        <div class="alert alert-success" role="alert">
            Annonce publiée !
        </div>
        <?php
    }
} catch(PDOException $exception) {
    var_dump($exception);
}
?>