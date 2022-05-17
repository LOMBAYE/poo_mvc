<?php

use App\Controller\SecurityController;
use App\Core\Router;
use App\Core\Request;
use App\Exception\RouteNotFoundException;

// namespace App\Core;

require("../vendor/autoload.php");
require_once("../core/fonctions.php");

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$router=new Router();
$router->route('/login',[SecurityController::class,"authentication"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);

try{
    $router->resolve();
}catch(RouteNotFoundException $ex){
    // capture l exception et affiche la
    echo $ex->message;
}
// $router->resolve();
