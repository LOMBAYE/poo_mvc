<?php

use App\Core\Router;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\UserController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

$router=new Router();
// chemin relatif faut associer un use
// chemin absolu nom de la classe App\Controller\SecurityController ou SecurityController::class
$router->route('/login',[SecurityController::class,"authentication"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route("/profs", [ProfesseurController::class, "listerProfs"]);
$router->route("/etudiants", [EtudiantController::class, "listerEtudiants"]);
$router->route("/users", [UserController::class, "listerUsers"]);
$router->route("/rp", [RPController::class, "listerRP"]);
$router->route("/ac", [ACController::class, "listerAC"]);






try{
    $router->resolve();
}catch(RouteNotFoundException $ex){
    // capture l exception et affiche la
    echo $ex->message;
}
