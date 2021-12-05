<?php

namespace App\Controllers;

use App\BaseClasses\BaseController;
use App\Models\ArticleManager;
use App\Db\PDOFactory;



class ArticleController extends BaseController
{

    public function getAllArticle() {

        $managerArticle = new ArticleManager(PDOFactory::getMySqlConnection());
        $index = $managerArticle->getAllArticle();
        
        return $this->render('Page D\'accueil', 
        [
            'article' => $index,
        ],
         'frontend/home');
    }

    public function getOneArticle(int $id) {

        $managerArticle = new ArticleManager(PDOFactory::getMySqlConnection());
        $index = $managerArticle->getOneArticle($id);
        
        return $this->render('Page D\'accueil', 
        [
            'article' => $index,
        ],
         'frontend/home');
    }

    public function createArticle() {
        $managerArticle = new ArticleManager(PDOFactory::getMySqlConnection());
        var_dump($_POST);
        
        if(isset($_POST["author"]) && isset($_POST["title"]) && isset($_POST["date"]) && isset($_POST["imgUrl"]) && isset($_POST["content"])){
            $index = $managerArticle->createArticle($_POST["author"], $_POST["title"], $_POST["date"], $_POST["imgUrl"], $_POST["content"]);
        }else{
            return $this->render('Page D\'accueil', 
            [
            ],
             'frontend/createPost'); 
        }

    }

    public function updateArticle() {
        var_dump('update article');
    }

    public function deleteArticle() {
        var_dump('delete article');
    }
}