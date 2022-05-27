<?php

use App\Core\Role;

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
    die();
}
function shownav(){
    return !isset($_SESSION['user-connect'])?"d-none":"";
}
function hide(array $tabs){
    foreach($tabs as $tab){
        return Role::getRole()==$tab?"d-none":"";
    }
}