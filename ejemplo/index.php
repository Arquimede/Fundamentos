<?php
require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/clima', function (Request $request, Response $response, array $args) {

    $data = array('name' => 'Arquimedes', 'count' => 416014651);

    return $response->withJson($data);
});
$app->run();