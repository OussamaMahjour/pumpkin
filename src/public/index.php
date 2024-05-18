<?php

use Slim\Exception\HttpNotFoundException;
use Slim\Views\Twig;

$app = require __DIR__."/../bootstrap.php";
$container = $app->getContainer();


$router = require( CONFIG_PATH.'/routes.php');
$router($app);




try{
$app->run();
}
catch(HttpNotFoundException $e){
        echo "error 404";
}
