<?php

namespace App\Models;

class ArticleManager
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo=$pdo;
    }


    public function getAllArticle() {
        $query = 'SELECT * FROM `article`';
        $response = $this->pdo->query($query);
        return $response->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\Article');
    }

    public function getOneUser(int $id) {

        $sth = $this->pdo->prepare('SELECT * FROM `article` WHERE id = ?');
        $sth->execute(array($id));
        return $sth->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\Article');
    }

    public function createArticle($author, $title, $content, $date, $imgUrl) {

        $query = $this->pdo->prepare('INSERT INTO article (author, title, content, date, imgUrl) VALUES (:author, :title, :content, :date, :imgUrl)');

        $query->bindParam(':author', $author);
        $query->bindParam(':title', $title);
        $query->bindParam(':content', $content);
        $query->bindParam(':date', $date);
        $query->bindParam(':imgUrl', $imgUrl);

        return $query->execute();
    }
}

?>