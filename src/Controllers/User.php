<?php

namespace App\Controllers;

use App\BaseClasses\BaseController;
use App\Models\UserManager;
use App\Db\PDOFactory;


// extends BaseController

class User extends BaseController
{

    public function getAllUser() {

        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        $index = $managerUser->manageUser();
        
        return $this->render('Page D\'accueil', 
        [
            'users' => $index,
            'Foo' => 'Bar'
        ],
         'frontend/home');
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