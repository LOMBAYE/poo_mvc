<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller
{
    public function affecterClasse():int{
     return 0;   
    }
    public function listerProfs(){
        $profs = Professeur::findAll();
        // dd($profs);
        $this->render('professeurs/liste', [
            "titre"=> "Les Professeurs",
            "profs" => $profs
        ]);      
    }
    public function ajouterProf(){
        $this->render('professeurs/ajouterprof');
    }
  
}
