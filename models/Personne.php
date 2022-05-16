<?php
namespace App\Model;
use App\Core\Model;

abstract class Personne extends Model{
    //attributs d instance(specifique a chaque objet)
    protected int $id;
    protected string $nomComplet;
    protected static string $role;

    //attributs de classes ou statiques 
    protected static int $nbrePersonne;
//methode construct pas obligatoire 
//methode abstraite on ne connait pas sa definition(exemple:usecase)
//methode concrete on connait la definition
//classe finale(sterile) est une classe qui ne peut pas avoir de classe fille

    public function __construct(){
        // parent::$table='personne';
    }

   //Getters(permettent d obtenir la valeur d un attribut prive a l exterieur de la classe)
   //Setters(modifier la valeur de l attribut)
   public function getId():int{
       return $this->id;
   }
   public function getNomComplet():string{
       return $this->nomComplet;
 }
 
public static function getNbrePersonne():int{
return self::$nbrePersonne;
}

public function setId(int $id):self{
    $this->id=$id;
    return $this;
}
public function setNomComplet(string $nomComplet):void{
    $this->nomComplet=$nomComplet;
}
public static function setNbrePersonne(int $nbrePersonne):void{
     self::$nbrePersonne=$nbrePersonne;
    }
  
}