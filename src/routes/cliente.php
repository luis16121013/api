<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


/** 
 * INICIO DE LA APIREST
*/
$app->get('/api', function (Request $request, Response $response) {
    echo 'hola';
    return $response;
});

require_once('routeUser.php');

require_once('routeAdmin.php');

require_once('routeTeacher.php');

require_once('routeStudent.php');