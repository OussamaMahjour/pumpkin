<?php

declare(strict_types=1);
namespace Configs;

use App\Controllers\authController;
use App\Controllers\GameController;
use App\Controllers\accountController;
use App\Controllers\adminController;
use App\Controllers\BasketController;
use App\Controllers\FavoriteController;
use App\Controllers\HomeController;
use App\Controllers\InboxController;
use App\Controllers\orderController;
use App\Controllers\ProductController;
use App\Controllers\SearchController;
use App\Entities\Basket;
use App\Entities\Favorite;
use App\Entities\Inbox;
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Middleware\ProductsMiddleware;
use Slim\App;


return function(App $app){

$app->get('/',[HomeController::class,'index'])->add(ProductsMiddleware::class);
$app->get('/login',[authController::class,'loginView'])->add(GuestMiddleware::class);
$app->post('/login',[authController::class,'login']);
$app->get('/signup',[authController::class,'signup'])->add(GuestMiddleware::class);
$app->post('/registre',[authController::class,'registre']);
$app->post('/verify',[authController::class,'verify']);
$app->post('/config',[authController::class,'config']);
$app->get('/verify',[authController::class,'verify']);
$app->get('/account',[accountController::class,'index'])->add(AuthMiddleware::class);
$app->get('/logOut',[authController::class,'logOut']);
$app->get('/search',[SearchController::class,'search']);
$app->get('/searchPage',[SearchController::class,'index'])->add(ProductsMiddleware::class);
$app->post('/addToBasket',[BasketController::class,'addToBasket']);
$app->get('/basket',[BasketController::class,'index'])->add(AuthMiddleware::class)->add(ProductsMiddleware::class);
$app->post('/rmBasket',[BasketController::class,'rmBasket'])->add(ProductsMiddleware::class);
$app->get("/accountInfo",[accountController::class,'accountInfo']);
$app->get("/product",[ProductController::class,'index'])->add(ProductsMiddleware::class);
$app->post('/favorite',[FavoriteController::class,'index'])->add(AuthMiddleware::class)->add(ProductsMiddleware::class);
$app->get('/favorite',[FavoriteController::class,'index'])->add(AuthMiddleware::class)->add(ProductsMiddleware::class);
$app->get('/inbox',[InboxController::class,'index']);
$app->get('/admin',[adminController::class,'index']);
$app->post('/order',[orderController::class,'index']);
$app->get('/order',[orderController::class,'orderView']);
$app->get('/adminLogin',[adminController::class,'loginView']);
$app->get('/pay',[orderController::class,'pay']);
$app->post('/adminLogin',[adminController::class,'login']);
$app->get('/adminLogOut',[adminController::class,'logOut']);
$app->post('/addProduct',[ProductController::class,'addProduct']);
$app->post('/removeProduct',[ProductController::class,'removeProduct']);
$app->post('/editProduct',[ProductController::class,'editProduct']);
$app->post('/editUser',[authController::class,'editUser']);
$app->post('/removeUser',[authController::class,'removeUser']);








};
