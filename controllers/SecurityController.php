<?php
namespace App\Controller;

use App\Core\Request;
use App\Core\Controller;

class SecurityController extends Controller{

        public function authentication(){
         // affichage du formulaire de connexion=>GET
                if($this->request->isGet()){
                        $this->render('securite/login');
                };
                // 
        }
        public function deconnexion(){
                $this->redirectRoute("login");
                // dd("je suis dans le for d dec");
        }
}