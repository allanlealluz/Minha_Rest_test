<?php
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, array $args) {
    VAR_DUMP('HOME');
    return $response;
});

$app->run();