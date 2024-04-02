<?php



$app = require __DIR__."/../bootstrap.php";
$container = $app->getContainer();


$router = require( CONFIG_PATH.'/routes.php');
$router($app);





$app->run();