<?php
namespace App\Core;
class Model implements IModel{

// Dependance 
protected static function database():Database{
    return new Database();
}

public  static function table(){
    $table=get_called_class();
    $table=str_replace("App\\Model\\","",$table);
    $table=($table=="User" or $table=="RP" or $table=="AC" or $table="Professeur")?"personne":strtolower($table);
    return $table;
}
    //classe d implementation
    //redefinir les methodes
       public function insert():int{
        return 0;
    }
    public function update():int{
        return 0;
    }
    public  static function delete(int $id):int{
        $db=self::database();
        $db->connexionBD();
        $sql="delete from ". self::table()." where id=$id";
        $result=$db->executeUpdate($sql);
        $db->closeConnexion();
        // echo $sql;
        return $result;
    }
    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
    //   requete non preparee=requete dont la variable est 
    // injectee lors de l ecriture de la requete(c est pas bon)
        $sql="select * from ".self::table()."";
      $result=$db->executeSelect($sql);
      $db->closeConnexion();
      // echo $sql;
        return $result;
    }
    public static function searchAll($attributes="*",$column=[],$search=""):array{
        $db=self::database();
        $db->connexionBD();
        if($column!="" && $search!=""){
            $sql="select $attributes from ".self::table()." where $column like '$search'";
        }else{
            $sql="select $attributes from ". self::table();
        }
      $result=$db->executeSelect($sql);
      $db->closeConnexion();
      return $result;

    } 
    public static function findById(int $id):object|null{
        $db=self::database();
        $db->connexionBD();
    //requete preparee=requete dont la variable est 
    // injectee lors de l execution de la requete
    // ?=>joker
    //?=>0,?=>1  position des joker a respecter
        $sql="select * from ".self::table()." where id=?";
     $result=$db->executeSelect($sql,[$id],true);
        $db->closeConnexion();
        // echo $sql;
        return $result;
    }
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
        $db=self::database();
        $db->connexionBD();
     $result=$db->executeSelect($sql,$data,$single);
     $db->closeConnexion();
        return $result;
    }  
}