<?php

declare(strict_types=1);
namespace Configs;

use App\Controllers\GameController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use Slim\App;


return function(App $app){

$app->get('/',[HomeController::class,'index']);
$app->get('/invoice',[InvoiceController::class,'index']);
$app->get('/game',[GameController::class,'index']);

};
