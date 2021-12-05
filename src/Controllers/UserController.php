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
        
        if(isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["password"])){
            $index = $managerUser->createUser($_POST["email"], $_POST["name"], $_POST["password"]);
        }else{
            return $this->render('Page D\'accueil', 
            [
            ],
             'frontend/inscription'); 
        }

    }

    public function updateUser() {
        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        
        if(isset($_PUT["isAdmin"])){
            $index = $managerUser->updateUser($_PUT["isAdmin"]);
        }else{
            return $this->render('Page D\'accueil', 
            [
            ],
             'frontend/admin'); 
        }
    }

    public function deleteUser(int $id) {
        $managerUser = new UserManager(PDOFactory::getMySqlConnection());
        
        $index = $managerUser->deleteUser($id);
        
        return $this->render('Page D\'accueil', 
        [
            'users' => $index,
        ],
         'frontend/deletePage');
    }

    public function connexion() {
        $managerUser = new UserManager(PDOFactory::getMySqlConnection());

        $index = $managerUser->connexion($_POST["email"], $_POST["password"]);
        if($index === true){
           $connect = true;
        }

        return $this->render('Page D\'accueil', 
        [
            'isConnect' => $connect,
        ],
         'frontend/connexion');
    }
}