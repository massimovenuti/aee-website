<?php


class Bdd
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    /**
     *
     */
    public function createTable():void
    {
        $this->pdo->query(
            'CREATE TABLE IF NOT EXISTS annonces (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titre TEXT NOT NULL,
            resume TEXT NOT NULL,
            contenu TEXT NOT NULL,
            image VARCHAR(150) NOT NULL
            )'
        );
    }

    /**
     *
     */
    public function connexion():void
    {
        $this->pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../../database.db');
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @param string $titre
     * @param string $resume
     * @param string $contenu
     * @param string $image
     * @return bool
     */
    public function insert(
        string $titre,
        string $resume,
        string $contenu,
        string $image
    ):bool
    {
        $statement = $this->pdo->prepare('INSERT INTO annonces (titre, resume, contenu, image) 
            VALUES (:titre, :resume, :contenu, :image)'
        );

        $statement->bindValue('titre', $titre, PDO::PARAM_STR);
        $statement->bindValue('resume', $resume, PDO::PARAM_STR);
        $statement->bindValue('contenu', $contenu, PDO::PARAM_STR);
        $statement->bindValue('image', $image, PDO::PARAM_STR);
        return $statement->execute();
    }

    /**
     * @param int $page
     * @return array
     */
    public function select(int $page = 1):array
    {
        return $this->pdo->query("SELECT * 
            FROM annonces 
            ORDER BY id 
            DESC LIMIT 4 OFFSET (($page-1)*4)")
                         ->fetchAll();
    }

    /**
     * @param string $query
     * @return array
     */
    public function selectFromQuery(string $query):array
    {
        return $this->pdo->query("SELECT * 
            FROM annonces 
            WHERE contenu LIKE '%$query%' 
            ORDER BY id DESC")
                         ->fetchAll();
    }

    /**
     * @return array
     */
    public function selectFromId(int $id):array
    {
        return $this->pdo->query("SELECT * 
            FROM annonces 
            WHERE id = $id")
                         ->fetchAll();
    }

    /**
     * @return PDO
     */
    public function getPdo():PDO
    {
        return $this->pdo;
    }
}