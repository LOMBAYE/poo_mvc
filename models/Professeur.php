<?php
namespace App\Model;


class Professeur extends Personne{
  private string $grade;
    public function __construct() {
        parent::$role="ROLE_PROFESSEUR";
    }
//Fonctions navigationnelles
  //ManyToMany
public function classes():array {
return [];
  }
  public static function findAll():array{
    $sql="select `role`,`nom_complet`,`grade` from ".parent::table()." where role like ?";

    return parent::findBy($sql,['ROLE_PROFESSEUR']);
}
public function insert():int{
// methode heritee faut mettre parent
  $db=parent::database();
  $db->connexionBD();
  $sql="INSERT INTO `personne` (`nom_complet`, `role`,`grade`) VALUES (?,?,?);";
  $result=$db->executeUpdate($sql,[$this->nom_complet,parent::$role,$this->grade]);
  $db->closeConnexion();
 
  return $result;
}


  public function getGrade()
  {
    return $this->grade;
  }

  
  public function setGrade($grade)
  {
    $this->grade = $grade;

    return $this;
  }
}