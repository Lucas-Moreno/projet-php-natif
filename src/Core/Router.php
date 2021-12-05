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
            case "home":
                $controller = new \App\Controllers\ArticleController();
                $controller->getAllArticle();
                break;
            case "article":
                $controller = new \App\Controllers\ArticleController();
                $controller->getOneArticle($params);
            case "userlist":
                $controller = new \App\Controllers\UserController();
                if($params){
                    $controller->getOneUser($params);
                    $controller->deleteUser($params);
                }else{
                    $controller->getAllUser();
                }
                break;
            case "":
                $controller = new \App\Controllers\UserController();
                $controller->createUser();
                break;
            case "isAdmin":
                $controller = new \App\Controllers\UserController();
                $controller->updateUser();
                break;
            case "connexion":
                $controller = new \App\Controllers\UserController();
                $controller->connexion();
            case "deleteUser":
                $controller = new \App\Controllers\UserController();
                if($params){
                    $controller->deleteUser($params);
                }
                break;
                default:
                break;
        }
    }
}