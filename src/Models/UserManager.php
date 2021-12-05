<?php

namespace App\Models;

class UserManager
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo=$pdo;
    }


    public function getAllUser() {
        $query = 'SELECT * FROM `user`';
        $response = $this->pdo->query($query);
        return $response->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\User');
    }

    public function getOneUser(int $id) {

        $sth = $this->pdo->prepare('SELECT * FROM `user` WHERE id = ?');
        $sth->execute(array($id));
        return $sth->fetchAll(\PDO::FETCH_CLASS, 'App\Entity\User');
    }

    public function createUser($name, $password, $email) {

        $query = $this->pdo->prepare('INSERT INTO user (name, password, email) VALUES (:name, :password, :email)');

        $query->bindParam(':name', $name);
        $query->bindParam(':password', $password);
        $query->bindParam(':email', $email);

        return $query->execute();
    }

    public function updateUser($isAdmin) {

        if($isAdmin){
            $query = $this->pdo->prepare('UPDATE user SET isAdmin = ?');
        }

        $query->bindParam(':isAdmin', $isAdmin);

        return $query->execute();
    }

    public function deleteUser(int $id) {

        $sth = $this->pdo->prepare('DELETE FROM `user` WHERE id = ?');
        $sth->execute(array($id));
        return $sth->execute();
    }

    public function connexion($email, $password) {


        $query = 'SELECT email, password FROM `user` WHERE email = ? AND password = ?';
        $response = $this->pdo->prepare($query);
        $response->execute(array($email, $password));
        return $response->execute();
    }
}

?>