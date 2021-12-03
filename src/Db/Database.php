<?php

namespace App\Db;

class PDOFactory
{
    private static string $host = 'mysql:host=db';
    private static string $username = 'root';
    private static string $password = 'root';
    const DB_NAME = 'db-php';

    public static function getMysqlConnection(): \PDO
    {
        try {
            $db = new \PDO(self::$host, self::$username, self::$password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
           echo $e;
        }

        return $db;
    }
}