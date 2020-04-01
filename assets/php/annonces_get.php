<?php
try {
    $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../../database.db');
    $pdo->query(
        'CREATE TABLE IF NOT EXISTS annonces (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre TEXT NOT NULL,
            resume TEXT NOT NULL,
            contenu TEXT NOT NULL,
            image VARCHAR(150) NOT NULL
            )'
    );

    function get_annonces_by_id($id) {
        return $GLOBALS['pdo']->query(
            "SELECT * FROM annonces WHERE id LIKE $id ORDER BY id DESC"
        )->fetchAll();
    }

    function get_annonces_by_content($query) {
        return $GLOBALS['pdo']->query(
            "SELECT * FROM annonces WHERE contenu LIKE '%$query%' ORDER BY id DESC"
        )->fetchAll();
    }

    function get_annonces() {
        return $GLOBALS['pdo']->query(
            'SELECT * FROM annonces ORDER BY id DESC'
        )->fetchAll();
    }
} catch (PDOException $exception) {
    var_dump($exception);
}
