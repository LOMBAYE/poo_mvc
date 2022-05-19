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
       $route= $this->routes[$uri];
    //    operat° de destruct°
    // [$ctrClass,$action]<=>$ctrClass=$route[0] et $action=$route[1]
       [$ctrClass,$action]=$route;
       if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
        $ctrl= new $ctrClass($this->request);//$crtl=new SecurityController()
        //$ctrl->authentification() 
        call_user_func(array($ctrl,$action));
       }else{
            throw new RouteNotFoundException();
       }
    }else{
            throw new RouteNotFoundException();
    }
}
}