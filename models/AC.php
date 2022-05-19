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
    $db=parent::database();
    $db->connexionBD();
    $sql="select id,`nom_complet`,`role`,`login`,`password` from ".parent::table()." where role like 'ROLE_AC'";
    $results=$db->executeSelect($sql);
    $db->closeConnexion();
    
    return $results;
}
public function insert():int{
    // methode heritee faut mettre parent
      $db=parent::database();
      $db->connexionBD();
      $sql="INSERT INTO `personne` (`nom_complet`, `role`,`login`,`password`) VALUES (?,?,?,?);";
      $result=$db->executeUpdate($sql,[$this->nom_complet,parent::$role,$this->login,$this->password]);
      $db->closeConnexion();
     
      return $result;
    }
}