<?php
namespace App\Exception;

class RouteNotFoundException extends \Exception {
    
    public $message="Page introuvable,erreur 404";
}