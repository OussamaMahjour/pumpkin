<?php

use App\Middleware\OldFormMiddleware;
use App\Middleware\AuthenticateMiddleware;
use App\Middleware\StartSessionMiddleware;
use App\Middleware\ValidationErrorsMiddleware;
use App\Middleware\ValidationExceptionMiddleware;
use App\Middleware\NotFoundMiddleware;
use DI\Container;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\TwigMiddleware;
use Slim\Views\Twig;


require __DIR__ . '/vendor/autoload.php';
require __DIR__.'/configs/path_constants.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


//setup the PHP-DI container
$container = require( CONFIG_PATH.'/container.php');
$app = $container->get(App::class);
$app->add(AuthenticateMiddleware::class);
$app->add(TwigMiddleware::create($app, $container->get(Twig::class)));
$app->add(ValidationExceptionMiddleware::class);
$app->add(ValidationErrorsMiddleware::class);
$app->add(OldFormMiddleware::class);
$app->add(StartSessionMiddleware::class);
$app->add(NotFoundMiddleware::class);
return $app;