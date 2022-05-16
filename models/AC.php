<?php
namespace App\Model;
class AC extends User{

//OneToMany=>Inscriptions(1ere approche:representat° a travers les attributs) un ac plusieurs inscrits
private array $inscriptions;
//2eme approche(relations traduites a travers des fonctions)
public function inscriptions():array{
    return [];
}
public function __construct() {
   
    parent::$role="ROLE_AC";
$this->inscriptions=[];
// echo($this->role);
}
public static function findAll():array{
    $sql="select *from ".parent::table()."where role like 'ROLE_AC'";
    echo $sql;
    return [];
}
  
}