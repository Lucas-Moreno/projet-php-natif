<?php

namespace App\Models;

class UserManager
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo=$pdo;
    }


    public function manageUser() {
        $query = 'SELECT * FROM `user`';
        $response = $this->pdo->query($query);
        return $response->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\User');
    }
}

?>