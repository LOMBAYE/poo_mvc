<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $niveau;
    private string $filiere;

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
public static function findAll():array{
    $db=self::database();
    $db->connexionBD();
    $sql="select * from classe";
  $result=$db->executeSelect($sql);
  $db->closeConnexion();
    return $result;
}

public function insert():int{
    $db=parent::database();
    $db->connexionBD();
    $sql="INSERT INTO classe (niveau,filiere,libelle) VALUES (?,?,?);";
    $result=$db->executeUpdate($sql,[$this->niveau,$this->filiere,$this->libelle]);
    $db->closeConnexion();
    return $result;
  }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getFiliere()
    {
        return $this->filiere;
    }

    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}