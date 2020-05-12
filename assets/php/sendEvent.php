<?php
try {
    include 'Bdd.php';
    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();

    $titre = htmlspecialchars($_POST['titre']);
    $resume = htmlspecialchars($_POST['resume']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $image = htmlspecialchars(basename($_FILES['image']['name']));

    if ($titre && $resume && $contenu && $image) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . '/../img/' . $image)) {
            //if preg_match...
            $bdd->insert($titre, $resume, $contenu, $image);
        }
    }

    header('Location: ../../events.php');
    exit();

} catch(PDOException $exception) {
    var_dump($exception);
}