<?php
include "form_nouv.php";

$annonces = $pdo->query(
    'SELECT * FROM annonces ORDER BY id DESC'
)->fetchAll();

$query = htmlspecialchars($_GET['query']);
if ($query) {
    $annonces = $pdo->query(
        "SELECT * FROM annonces WHERE contenu LIKE '%$query%' ORDER BY id DESC"
    )->fetchAll();
}