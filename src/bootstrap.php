<?php

use Slim\Factory\AppFactory;
use Slim\Views\TwigMiddleware;
use Slim\Views\Twig;


require __DIR__ . '/vendor/autoload.php';
require __DIR__.'/configs/path_constants.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


//setup the PHP-DI container
$container = require( CONFIG_PATH.'/container.php');
AppFactory::setContainer($container);

 //create the main app 
$app = AppFactory::create();
$app->add(TwigMiddleware::create($app, $container->get(Twig::class)));

return $app;