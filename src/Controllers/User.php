<?php

namespace App\Controllers;

use App\Models\UserManager;

class User
{
    public function getAllUser() {
        $model = new UserManager();
        var_dump($model);
        // $index = $model->manageUser();
        // var_dump($index);
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