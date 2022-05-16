<?php
namespace App\Model;


class Professeur extends Personne{
    public function __construct() {
        $this->role="ROLE_PROFESSEUR";
    }
//Fonctions navigationnelles
  //ManyToMany
public function classes():array {
return [];
  }
  public static function findAll():array{
    $sql="select * from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
    echo $sql;
    return [];
}
}