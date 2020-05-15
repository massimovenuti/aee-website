<?php


class Bdd
{
    /**
     * PHP Data Object.
     *
     * @var PDO
     */
    private PDO $pdo;

    /**
     * Connexion to database.
     */
    public function connexion(): void
    {
        $this->pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../../database.db');
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Creation of the table.
     */
    public function createTable(): void
    {
        $this->pdo->query(
            'CREATE TABLE IF NOT EXISTS events (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            summary TEXT NOT NULL,
            content TEXT NOT NULL,
            image VARCHAR(150) NOT NULL
            )'
        );
    }

    /**
     * Insertion of an event in the table.
     *
     * @param string $title Title of the new event.
     * @param string $summary Summary of the new event.
     * @param string $content Content of the new event.
     * @param string $image Name of the new event's image. Must contain the extension of the file.
     * @return bool True if successful, false if not.
     */
    public function insert(
        string $title,
        string $summary,
        string $content,
        string $image
    ): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO events (title, summary, content, image) 
            VALUES (:title, :summary, :content, :image)'
        );

        $statement->bindValue('title', $title, PDO::PARAM_STR);
        $statement->bindValue('summary', $summary, PDO::PARAM_STR);
        $statement->bindValue('content', $content, PDO::PARAM_STR);
        $statement->bindValue('image', $image, PDO::PARAM_STR);
        return $statement->execute();
    }

    /**
     * Selection of events in the table.
     * Possibility to specify the number of elements to return and to make a system of paging.
     *
     * @param int $limit Number of events to return.
     * @param int $page Page of events to return.
     * @return array Events of the table selected.
     */
    public function select(int $limit = 4, int $page = 1): array
    {
        return $this->pdo->query(
            "SELECT * 
            FROM events 
            ORDER BY id 
            DESC LIMIT $limit OFFSET (($page-1)*$limit)")
            ->fetchAll();
    }

    /**
     * Selection of events in the table from a query.
     * Looks up for events that contains the string $query in their content.
     *
     * @param string $query String to look for in the table events.
     * @return array Events of the table corresponding to the query.
     */
    public function selectFromQuery(string $query): array
    {
        return $this->pdo->query(
            "SELECT * 
            FROM events 
            WHERE content LIKE '%$query%' 
            ORDER BY id DESC")
            ->fetchAll();
    }

    /**
     * Selection of events in the table from an id.
     *
     * @param int $id Id of the event to look for.
     * @return array Array composed of the event corresponding to the id.
     */
    public function selectFromId(int $id): array
    {
        return $this->pdo->query(
            "SELECT * 
            FROM events 
            WHERE id = $id")
            ->fetchAll();
    }
}