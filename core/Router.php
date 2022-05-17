<?php
namespace App\Core;

use App\Exception\RouteNotFoundException;

class Router{
    private Request $request;
    public function __construct(){
        $this->request= new Request;
    }
    private  array $routes=[];
    //toutes les routes de l app uri , controleur et action a executer
// 
public function route(string $uri,array $action){
    $this->routes[$uri]=$action;
}
// resolve pour recuperer l uri et tester si l uri est enregistre dans le table
// le cas echeant executer l action correspondante
public function resolve(){
    $uri="/".$this->request->getUri()[0];
    if(isset($this->routes[$uri])){
        dd("route existe");
    }else{
        throw new RouteNotFoundException();
    }
}
}