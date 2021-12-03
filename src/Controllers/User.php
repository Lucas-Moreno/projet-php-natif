<?php

namespace App\Controllers;

use App\Models\UserManager;
use App\Db\PDOFactory;

class User
{

    public function getAllUser() {
        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        var_dump($managerUser);
    }

    public function createUser() {
        var_dump('create user');
    }

    public function updateUser() {
        var_dump('update user');
    }

    public function deleteUser() {
        var_dump('delete user');
    }
}