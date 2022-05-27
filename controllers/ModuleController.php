<?php
namespace App\Controller;

use App\Model\Module;
use App\Core\Controller;
use App\Model\Professeur;

class ModuleController extends Controller{

    public function listerModule(){
          $modules = Module::findAll();
          $this->render('module/liste', [
              "titre"=> "Les Modules",
              "modules" => $modules
          ]);
    }
    public function ajouterModule(){
      $profs= Professeur::findAll();
      $this->render('module/ajoutermodule',[
        "profs" => $profs
      ]);
    
   }
   public function insererModule(){
    if($this->request->isPost()){
     extract($_POST);
    $mod=new Module();
    $mod->setLibelle($libelle);
    $mod->setProfesseur_id($prof);
    $mod->insert();
    $this->listerModule();
    }
    $this->ajouterModule();

 }

}
