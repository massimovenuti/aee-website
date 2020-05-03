<?php
include 'connectBD.php';

if (isset($_GET['query']) && $_GET['query'] != "") {
    $query = htmlspecialchars($_GET['query']);
    $annonces = $pdo->query(
        "SELECT * FROM annonces WHERE contenu LIKE '%$query%' ORDER BY id DESC"
    )->fetchAll();
} else {
    $annonces = $pdo->query(
        'SELECT * FROM annonces ORDER BY id DESC LIMIT 4'
    )->fetchAll();
}
