<?php

namespace App\Db;

class PDOFactory
{

    public static function getMysqlConnection(): \PDO
    {
        try {
            $db = new \PDO('mysql:host=db;dbname=db-php', 'root', 'root');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
           echo $e;
        }

        return $db;
    }
}