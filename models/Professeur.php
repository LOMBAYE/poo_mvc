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
    $db=parent::database();
    $db->connexionBD();
    $sql="select * from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
    $results=$db->executeSelect($sql);
    $db->closeConnexion();
    
    return $results;
}
public function insert():int{
// methode heritee faut mettre parent
  $db=parent::database();
  $db->connexionBD();
  $sql="INSERT INTO `personne` (`nom_complet`, `role`,`grade`) VALUES (?,?,?);";
  $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
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