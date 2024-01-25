<?php
use Slim\App;
use app\controllers\HomeController;
use app\controllers\UserController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
return function(App $app){
$app->get('/', [HomeController::class, 'index']);
$app->get('/user/create', [UserController::class,'index']);
$app->post('/user/store', [UserController::class,'store']);
};