<?php
// les controleurs ont pour role d implementer les use cases
namespace App\Controller;

use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller{

    public function listerClasse(){
           $classes = Classe::findAll();
           $this->render('classe/liste', [
               "titre"=> "Liste des classes",
               "classes" => $classes
           ]);
    }
    public function creerClasse(){
        $this->render('classe/creerclasse');        
    }
    public function insererClasse(){
        if ($this->request->isPost()){
        extract($_POST);
        $cl=new Classe();
        if($libelle==""){
            $libelle=$niveau."-".$filiere;
        }
        $cl->setLibelle($libelle);
        $cl->setFiliere($filiere);
        $cl->setNiveau($niveau);
        $cl->insert();
      $this->listerClasse();
     }
     $this->creerClasse();
    }
}