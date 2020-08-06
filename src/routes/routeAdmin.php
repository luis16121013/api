<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/administrador', function (Request $request, Response $response) {
    $obj= new ControllerAdmin(new mysql);
    $rs=$obj->getAll();
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});

$app->get('/api/administrador/{id}', function (Request $request, Response $response,array $args) {
    $obj= new ControllerAdmin(new mysql);
    $id=$args['id'];
    $rs=$obj->getAdmin($id);
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});