<?php
namespace App\Model;

abstract class User extends Personne{
    protected string $login;
    protected string $password;

    


    public function getLogin()
    {
        return $this->login;
    }

  
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

  
    public function getPassword()
    {
        return $this->password;
    }

 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

 
    public function getRole():string
    {
        return $this->role;
    }

  
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public static function findUserByLoginAndPassword(string $login,string $password):object|null{
         return parent::findBy("select * from personne where login=? and password=?",[$login,$password],true);
    }
    public static function findAll():array{
        // $db=parent::database();
        // $db->connexionBD();
        // $sql="select *from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
        // $results=$db->executeSelect($sql);
        $sql="select *from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
        
        // $db->closeConnexion();
        return parent::findBy($sql);  
    }

}