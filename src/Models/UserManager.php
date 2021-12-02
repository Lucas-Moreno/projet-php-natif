<?php

namespace App\Models;

use App\Db\PDOFactory;

class UserManager{
    public function manageUser() {
        $db = new PDOFactory();
        var_dump($db);
        // $query = $db->prepare('SELECT * FROM user');
        // $query->execute();
        // var_dump($query);
    }
}

?>