<?php

use App\Core\Request;
// namespace App\Core;

require("../vendor/autoload.php");
require_once("../core/fonctions.php");

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$request=new Request();
$request->getUri();
dd($request->isPost());
// $request->isGet();


