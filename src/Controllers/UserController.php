<?php

namespace App\Controllers;

use App\BaseClasses\BaseController;
use App\Models\UserManager;
use App\Db\PDOFactory;



class UserController extends BaseController
{

    public function getAllUser() {

        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        $index = $managerUser->getAllUser();
        
        return $this->render('Page D\'accueil', 
        [
            'users' => $index,
        ],
         'frontend/userlist');
    }

    public function getOneUser(int $id) {

        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        $index = $managerUser->getOneUser($id);
        
        return $this->render('Page D\'accueil', 
        [
            'users' => $index,
        ],
         'frontend/userlist');
    }

    public function createUser() {
        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        var_dump($_POST);
        
        if(isset($_POST["email"]) && isset($_POST["email"]) && isset($_POST["email"])){
            $index = $managerUser->createUser($_POST["email"], $_POST["name"], $_POST["password"]);
        }else{
            return $this->render('Page D\'accueil', 
            [
            ],
             'frontend/inscription'); 
        }

    }

    public function updateUser() {
        var_dump('update user');
    }

    public function deleteUser() {
        var_dump('delete user');
    }
}