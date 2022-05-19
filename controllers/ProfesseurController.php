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
        $this->render('professeurs/liste', [
            "titre"=> "Liste des professeurs",
            "profs" => $profs
        ]);      
    }
  
}
