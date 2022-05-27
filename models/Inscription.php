<?php
namespace App\Model;
use App\Core\Model;

class Inscription extends Model {
   private int $id;
   private int $ac_id;
   private int $annee_id;
   private int $classe_id;
   private int $etudiant_id;

    //Attributs d instance
    //attributs de classe
    //attributs navigationnels->issus des associations

 public function __construct(){
   //  parent::table();
 }
    //ManyToOne
    // recuperer le ac qui a fait l inscription
 public function ac():AC|null{
    $sql="select p* from inscription i,personne p
     where p.id=i.ac_id 
     and p.role like 'ROLE_AC'
     and i.id=?";
    return parent::findBy($sql,[$this->id]);
 }
 //ManyToOne avec AnneeScolaire
 public function anneeScolaire():AnneeScolaire{
    $sql="select a.*from annee_scolaire a,".parent::table()." i
     where a.id=i.annee_id
     and i.id=?";
     return parent::findBy($sql,[$this->id]);
 }


   public function getEtudiant_id()
   {
      return $this->etudiant_id;
   }

   public function setEtudiant_id($etudiant_id)
   {
      $this->etudiant_id = $etudiant_id;

      return $this;
   }

   public function getClasse_id()
   {
      return $this->classe_id;
   }

   public function setClasse_id($classe_id)
   {
      $this->classe_id = $classe_id;

      return $this;
   }

   public function getAnnee_id()
   {
      return $this->annee_id;
   }

   public function setAnnee_id($annee_id)
   {
      $this->annee_id = $annee_id;

      return $this;
   }

   public function getAc_id()
   {
      return $this->ac_id;
   }

  
   public function setAc_id($ac_id)
   {
      $this->ac_id = $ac_id;

      return $this;
   }
   public function insert():int{
      $db=parent::database();
      $db->connexionBD();
      $sql="INSERT INTO inscription (ac_id,etudiant_id,classe_id,annee_id) VALUES (?,?,?,?);";
      $result=$db->executeUpdate($sql,[$_SESSION['user-connect']->id ,$this->etudiant_id,$this->classe_id,1]);
      $db->closeConnexion();  
      return $result;
}
}