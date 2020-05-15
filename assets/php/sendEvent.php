<?php
try {
    include 'Bdd.php';

    $bdd = new Bdd();
    $bdd->connexion();
    $bdd->createTable();

    $title = htmlspecialchars($_POST['title']);
    $summary = htmlspecialchars($_POST['summary']);
    $content = htmlspecialchars($_POST['content']);
    $image = htmlspecialchars(basename($_FILES['image']['name']));

    var_dump($title);
    var_dump($content);
    var_dump($summary);
    var_dump($image);


    if ($title && $summary && $content && $image) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . '/../img/' . $image))
             $bdd->insert($title, $summary, $content, $image);
    }

    header('Location: ../../events.php');
    exit();
} catch (PDOException $exception) {
    var_dump($exception);
}