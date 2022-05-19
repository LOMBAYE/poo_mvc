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
}