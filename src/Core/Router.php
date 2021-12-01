<?php

namespace App\Core;

class Router
{
    // function who returns url and call controller associated with the url
    public function routing() {
        var_dump($_GET);die();
        isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

        switch($path){
            case "getAllUser":
                $controller = new \App\Controllers\User();
                $controller->getAllUser();
                break;
            case "createUser":
                $controller = new \App\Controllers\User();
                $controller->createUser();
                break;
            case "updateUser":
                $controller = new \App\Controllers\User();
                $controller->updateUser();
                break;
            case "deleteUser":
                $controller = new \App\Controllers\User();
                $controller->deleteUser();
                break;
                default:
                break;

        }
    }
}