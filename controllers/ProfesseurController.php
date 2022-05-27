<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;
use App\Core\Model;

class ProfesseurController extends Controller
{
    public function affecterClasse():int{
     return 0;   
    }
    public function listerProfs(){
        $profs = Professeur::findAll();
        // $profs = Professeur::searchAll();

        // dd($profs);
        $this->render('professeurs/liste', [
            "titre"=> "Les Professeurs",
            "profs" => $profs
        ]);      
    }
    public function ajouterProf(){
        $this->render('professeurs/ajouterprof');
    }
    public function inscrireProf(){
        if($this->request->isPost()){
         extract($_POST);
        $prof=new Professeur();
        $prof->setnom_complet($_POST['nom_complet']);
        $prof->setGrade($_POST['grade']);
        $prof->insert();
        $this->listerProfs();
        }
        $this->ajouterProf();

     }
     public function details($id)
     {
       $prof=Professeur::findById($id);
    //    dd($prof);
       $this->render('professeurs/details',["prof"=>$prof]);
       
     }
  
}
