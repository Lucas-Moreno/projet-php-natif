<?php

namespace App\Core;

class Router
{
    // function who returns url and call controller associated with the url
    public function routing() {
        isset($_GET['path']) ? $path = $_GET['path'] : $path = null;
        $link = explode('/', $_GET['path']);
        $path = $link[0];
        $params = $link[1];

        switch($path){
            case "userlist":
                $controller = new \App\Controllers\UserController();
                if($params){
                    $controller->getOneUser($params);
                }else{
                    $controller->getAllUser();
                }
                break;
            case "createUser":
                $controller = new \App\Controllers\UserController();
                $controller->createUser();
                break;
            case "updateUser":
                $controller = new \App\Controllers\UserController();
                $controller->updateUser();
                break;
            case "deleteUser":
                $controller = new \App\Controllers\UserController();
                $controller->deleteUser();
                break;
                default:
                break;

        }
    }
}