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
        //    donnee sous format objet
        //    if true
            $result = $query->fetch(\PDO::FETCH_OBJ);
            if($query->rowCount()==0) return NULL ;
       }else{
        //fetch_assoc recupere le nom des colonnes
          $result=$query->fetchAll(\PDO::FETCH_OBJ);
       }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        //lors de l execut° d une methode insert=>retourner le dernier id genere
        return $this->pdo->lastInsertId();
    }
} 