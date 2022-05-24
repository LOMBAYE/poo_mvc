<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "<pre>";
    die();
}
function shownav(){
    return !isset($_SESSION['user-connect'])?"d-none":"";
}