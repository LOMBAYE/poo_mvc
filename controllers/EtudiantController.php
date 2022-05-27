<?php
namespace App\Controller;
use App\Model\Classe;
use App\Model\Etudiant;
use App\Core\Controller;
use App\Model\Inscription;

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
        $classes=Classe::findAll();
        $this->render('etudiant/ajouteretu',[
            "classes"=>$classes
        ]);
    }
    public function inscrireEtu(){
        if($this->request->isPost()){
        extract($_POST);
        // dd($_POST);
        $etu=new Etudiant();
        $etu->setnom_complet($nom_complet);
        $etu->setLogin($login);
        $etu->setPassword("password");
        $etu->setSexe($sexe);
        $etu->setAdresse($adresse);
       $id= $etu->insert();
    //    dd($id);
       if($id>=1){
           $inscrit=new Inscription();
           $inscrit->setEtudiant_id($id);
           $inscrit->setClasse_id($classe);
           $inscrit->insert();
           $matricule="MAT-".date("dmYhis");
           $etu->setMatricule($matricule);
           $etu->setId($id);
           $etu->update();

           $this->listerEtudiants();
       }else{
           die("no inscrit");
        }
     }
     $this->ajouterEtu();

    }
    public function details($id)
    {
      $etu=Etudiant::findById($id);
      $this->render('etudiant/details',["etu"=>$etu]); 
    }
}