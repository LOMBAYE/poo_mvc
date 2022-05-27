<?php

use App\Core\Router;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\UserController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

$router=new Router();
// chemin relatif faut associer un use
// chemin absolu nom de la classe App\Controller\SecurityController ou SecurityController::class
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);

$router->route('/personnes',[PersonneController::class,"lister"]);

$router->route("/profs", [ProfesseurController::class, "listerProfs"]);
$router->route("/newprof", [ProfesseurController::class, "ajouterProf"]);
$router->route("/newProf", [ProfesseurController::class, "inscrireProf"]);
$router->route("/professeur", [ProfesseurController::class, "details"]);

$router->route("/etudiants", [EtudiantController::class, "listerEtudiants"]);
$router->route("/newetu", [EtudiantController::class, "ajouterEtu"]);
$router->route("/newEtu", [EtudiantController::class, "inscrireEtu"]);
$router->route("/detailsetu", [EtudiantController::class, "details"]);

$router->route("/users", [UserController::class, "listerUsers"]);

$router->route("/rp", [RPController::class, "listerRP"]);
$router->route("/newrp", [RPController::class, "ajouterRp"]);
$router->route("/newRp", [RPController::class, "inscrireRp"]);

$router->route("/ac", [ACController::class, "listerAC"]);
$router->route("/newac", [ACController::class, "ajouterAc"]);
$router->route("/newAc", [ACController::class, "inscrireAc"]);

$router->route("/module", [ModuleController::class, "listerModule"]);
$router->route("/newmodule", [ModuleController::class, "ajouterModule"]);
$router->route("/newModule", [ModuleController::class, "insererModule"]);

$router->route("/classes", [ClasseController::class, "listerClasse"]);
$router->route("/newclass", [ClasseController::class, "creerClasse"]);
$router->route("/newClass", [ClasseController::class, "insererClasse"]);

$router->route("/demande", [DemandeController::class, "listerDemandes"]);


try{
    $router->resolve();
}catch(RouteNotFoundException $ex){
    // capture l exception et affiche la
    echo $ex->message;
}
