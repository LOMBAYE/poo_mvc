<?php
namespace App\Controller;

use App\Model\User;
use App\Core\Request;
use App\Core\Controller;

class SecurityController extends Controller{

        public function authentification(){
         // affichage du formulaire de connexion=>GET
        //  dd('jjj');
                if($this->request->isGet()){
                        $this->render('securite/login');
                }else{
                        extract($_POST);
                        $user=User::findUserByLoginAndPassword($login,$password);
                        // dd($_POST);
                        if($user){
                                $_SESSION['user-connect']=$user;
                                $this->redirectRoute("profs");
                        }else{
                                $this->redirectRoute("login");
                        }
                }
                ;
                // 
        }
        public function login(){
                if($this->request->isPost()){
                        extract($_POST);
                }
        }
        public function deconnexion(){
                // dd($_SESSION['user-connect']);
                unset($_SESSION['user-connect']);
                $this->redirectRoute("login");
                // dd("je suis dans le for d dec");
        }
}