<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/usuario', function (Request $request, Response $response) {
    $obj= new ControllerUser(new mysql);
    $rs=$obj->getAll();
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});
//----
$app->get('/api/usuario/{id}', function (Request $request, Response $response, array $args) {
    $obj= new ControllerUser(new mysql);
    $rs=$obj->getUsers();
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});