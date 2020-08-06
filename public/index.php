<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__. '/../vendor/autoload.php';
require __DIR__.'/../src/config/database.php'; 

$app = AppFactory::create();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

require __DIR__.'/../src/controller/ControllerUser.php';
require __DIR__.'/../src/controller/ControllerAdmin.php';
require __DIR__.'/../src/controller/ControllerTeacher.php';
require __DIR__.'/../src/controller/ControllerStudent.php';

require __DIR__.'/../src/routes/cliente.php';

$app->run();

