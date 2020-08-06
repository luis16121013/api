<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/docente', function (Request $request, Response $response) {
    $obj= new ControllerTeacher(new mysql);
    $rs=$obj->getAll();
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});
$app->get('/api/docente/{id}', function (Request $request, Response $response, array $args) {
    $obj= new ControllerTeacher(new mysql);
		$id=$args['id'];
    $rs=$obj->getTeacher($id);
    $response->getBody()->write(json_encode($rs));
    $rs=null;
    $obj=null;
    return $response
        ->withHeader('Content-Type','application/json')
        ->withStatus(200);
});
