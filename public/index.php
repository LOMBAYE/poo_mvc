<?php
require("../vendor/autoload.php");


use App\Model\Professeur;
// require("../models/Professeur.php")


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

Professeur::findAll();

// Namespace=>package (conteneur ou repertoire virtuel qui permet de ranger
// des classes qui sont du mm domaine ) 




