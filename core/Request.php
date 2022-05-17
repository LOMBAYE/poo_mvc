<?php
namespace App\Core;
class Request{
    public function getUri(){
    //    url =le tout
        //uri uniform ressource indicator=>indique au routeur l action a executer
    $url=explode("/",$_SERVER['REQUEST_URI']) ;
    unset($url[0]);
    // array_values pour reinitialiser l index
    return array_values($url);
    }
    public function isGet():bool{
        return $_SERVER['REQUEST_METHOD']=="GET";
    }
    public function isPost():bool{
        return $_SERVER['REQUEST_METHOD']=="POST";
    }
}