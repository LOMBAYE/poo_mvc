<?php
namespace App\Controller;
use App\Model\RP;
use App\Core\Controller;

class RPController extends Controller{
    public function listerRP(){
        $rp=  RP::findAll();
        // dd($rp);
        $this->render("RP/liste",[
           "rp" =>$rp,
           "titre"=>"Liste des responsables pédagogiques"
        ]);
    }
}