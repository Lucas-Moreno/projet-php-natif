<?php

define('HOST','db');
define('DB_NAME','db-php');
define('USER','root');
define('PASS','root');


try{
    $db = new PDO("mysql:host=" . HOST .";dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo $e;
}

?>