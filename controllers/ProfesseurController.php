<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Personne;
use App\Model\Professeur;

class ProfesseurController extends Controller
{
    public function affecterClasse():int{
     return 0;   
    }
    public function listerProfs(){
        $this->render('professeurs/liste');

        // $profs = Professeur::findAll();
 
        // // $data = [
        // //     "titre"=> "Liste des professeurs",
        // //     "profs" => $profs,
        // // ];

        // $this->render('professeurs/liste', [
        //     "titre"=> "Liste des professeurs",
        //     "profs" => $profs,
        // ]);
    }

    
}
