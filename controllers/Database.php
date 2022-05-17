<?php
namespace App\Core;
//namespace racine \:
class Database{
    private \PDO|null $pdo=null;

    public function connexionBD():void{
        $this->pdo=new \PDO("mysql:dbname=poo_odc;host=localhost:3307","root","");
    }
    public function closeConnexion():void{
        $this->pdo=null;
    }
    public function executeSelect(string $sql,array $data=[],$single=false):object|array|null{
       $query=$this->pdo->prepare($sql);
       $query->execute($data);
       if($single){
        //    if true
            $result = $query->fetch();
       }else{
          $result=$query->fetchAll();
       }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        //lors de l execut° d une methode insert=>retourner le dernier id genere
        return $query->rowCount();
    }
} 