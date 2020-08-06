<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * RUTA DE ESTUDIANTES------------>>>> 
*/
$app->get('/api/estudiante', function (Request $request, Response $response) {
    $obj= new ControllerStudent(new mysql);
    $rs=$obj->getAll();
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});

$app->get('/api/estudiante/{id}', function (Request $request, Response $response,array $args) {
    $obj= new ControllerStudent(new mysql);
    $id=$args['id'];
    $rs=$obj->getStudent($id);
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});