<?php
class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse;



public function __construct() {
    self::$role="ROLE_ETUDIANT";
}


    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

  
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public static function findAll():array{
        $sql="select *from ".parent::table()."where role like 'ROLE_ETUDIANT'";
        echo $sql;
        return [];
    }
}