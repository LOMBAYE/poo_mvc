<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


require("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");



// $router->resolve();
// dd(Professeur::findAll());

// $etudiants = Etudiant::findAll();
// dd(RP::findAll());
// $etudiant=new Etudiant();
// $etudiant->setMatricule("000001");
// $etudiant->setSexe('M');
// $etudiant->setnom_complet("Bigmo");
// $etudiant->setAdresse("Gwye");
// $etudiant->insert();
