<?php

use App\Model\RP;
use App\Model\Etudiant;
use App\Model\Professeur;

require("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


// $router->resolve();
// dd(Professeur::findAll());

// $etudiants = Etudiant::findAll();
// dd(RP::findAll());
// $etudiant=new RP();
// $etudiant->setMatricule("0000re");
// $etudiant->setSexe('F');
// $etudiant->setnom_complet("El Hadj");
// $etudiant->setAdresse("Gwye");
// $etudiant->insert();
