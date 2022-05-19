<?php
namespace App\Model;

class RP extends User{

    public function __construct() {
        self::$role="ROLE_RP";
    }
 
    public static function findAll():array{
        $sql="select `nom_complet`,`role` from ".parent::table()." where role like ?";
        return parent::findBy($sql,['ROLE_RP']);    
    }
    public function insert():int{
          $db=parent::database();
          $db->connexionBD();
          $sql="INSERT INTO `personne` (`nom_complet`, `role`) VALUES (?,?);";
          $result=$db->executeUpdate($sql,[$this->nom_complet,parent::$role]);
          $db->closeConnexion();
          return $result;
        }
}