<?php

require_once __DIR__.'/vendor/autoload.php';

require './Db/Database.php';

$app = new App\Core\Application();

$app->router->routing();
