<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model{

   public function __construct(){
      
   } 
    //Fonctions navigationnelles
    //ManyToMany avec Profs
//     public function professeurs():array{
// return [];
//     }
    //onetoone un objet un objet des deux cotes
public function professeurs():array|null{
    $sql="sel...";
    return parent::findBy($sql,[$this->id]);
}
   
}