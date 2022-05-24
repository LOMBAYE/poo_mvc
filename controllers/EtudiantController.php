<?php
namespace App\Controller;
use App\Model\Etudiant;
use App\Core\Controller;

class EtudiantController extends Controller{
    public function listerEtudiants(){
        // $this->render('etudiant/liste');
        $etudiants = Etudiant::findAll();
        // dd($etudiants);
        $this->render('etudiant/liste', [
            "titre"=> "Liste des etudiants",
            "etudiants" => $etudiants
        ]);

    }
    public function ajouterEtu(){
        $this->render('etudiant/ajouteretu');
    }
    public function inscrireEtu(){
        extract($_POST);
        $etu=new Etudiant();
        $etu->setnom_complet($_POST['nom_complet']);
        $etu->setLogin($_POST['login']);
        $etu->setPassword($_POST['password']);
        $etu->setSexe($_POST['sexe']);
        $etu->setMatricule($_POST['matricule']);
        $etu->setAdresse($_POST['adresse']);
        $etu->insert();
      $this->listerEtudiants();
     }
}