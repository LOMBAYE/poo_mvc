<?php
namespace App\Core;

use App\Core\Session;
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
        $ctrl= new $ctrClass($this->request);
        //explication aly 
        // $free= ensemble des routes libres
        // pour que toutes les pages soient accesibles ajouter * dans le tableau

        $free=["SecurityController/authentification"];
        $freetest=explode("\\",$ctrl::class)[2]."/".$action;
        
        // dd($freetest);
            if(in_array("*",$free)|| in_array($freetest,$free)){
                call_user_func(array($ctrl,$action));
            }elseif(Session::isConnect()){//test si session existe
                call_user_func(array($ctrl,$action));
            }else{
                // throw new RouteNotFoundException();
                 header('location:login');
            }
        }else{
            // dd('okkk');
            throw new RouteNotFoundException();
        }
    }else{
            throw new RouteNotFoundException();
    }
}
}