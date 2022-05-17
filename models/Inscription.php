<?php
namespace App\Model;
use App\Core\Model;

class Inscription extends Model {
    //Attributs d instance
    //attributs de classe
    //attributs navigationnels->issus des associations
 private int $id;
 public function __construct(){
    
 }
    //ManyToOne
    // recuperer le ac qui a fait l inscription
 public function ac():AC{
    $sql="select p.*from ".parent::table()." i,personne
     p where p.id=i.ac_id 
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


}