<?php
namespace App\Model;
use App\Core\Model;

class Module extends Model {
    private string $libelle;
    private int $professeur_id;

  
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    public static function findAll():array{
        $db=parent::database();
        $db->connexionBD();
        $sql="select m.libelle,p.nom_complet from module m,personne p where m.professeur_id=p.id and role like ?";
        $result=$db->executeSelect($sql,['ROLE_PROFESSEUR']);
        $db->closeConnexion();
        return $result;
    }
    public function insert():int{
        $db=parent::database();
        $db->connexionBD();
        $sql="INSERT INTO module (libelle,professeur_id) VALUES (?,?);";
        $result=$db->executeUpdate($sql,[$this->libelle,$this->professeur_id]);
        $db->closeConnexion();  
        return $result;
  }
    // public function insert():int{
    //     // methode heritee faut mettre parent
    //       $db=parent::database();
    //       $db->connexionBD();
    //       $sql="INSERT INTO `personne` (`libelle`) VALUES ?;";
    //       $result=$db->executeUpdate($sql,[$this->libelle]);
    //       $db->closeConnexion();
         
    //       return $result;
    //     }

 
    public function getProfesseur_id()
    {
        return $this->professeur_id;
    }

    public function setProfesseur_id($professeur_id)
    {
        $this->professeur_id = $professeur_id;

        return $this;
    }
}