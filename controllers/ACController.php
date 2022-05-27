<?php
namespace App\Controller;
use App\Model\AC;
use App\Core\Controller;

class ACController extends Controller{
    public function listerAC(){
        $ac=AC::findAll();
        // $this->render('AC/listerAc');
        $this->render("AC/listerAc",[
            "ac" =>$ac,
            "titre"=>"Les Attaches"
         ]);
       
    }
    public function ajouterAc(){
        $this->render('AC/ajouterac');
    }
    public function inscrireAc(){
        if($this->request->isPost()){
       extract($_POST);
       $ac=new AC();
       $ac->setnom_complet($nom_complet);
       $ac->setLogin($login);
       $ac->setPassword($password);
       $ac->insert();
     $this->listerAC();
    }
    $this->ajouterAc();
}
}