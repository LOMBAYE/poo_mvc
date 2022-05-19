<?php
namespace App\Controller;

use App\Core\Controller;

class UserController extends Controller{
    public function listerUsers(){
        $this->render('user/liste');
    }
}