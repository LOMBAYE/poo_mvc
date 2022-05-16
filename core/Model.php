<?php
namespace App\Core;

class Model implements IModel{
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
        $sql="delete * from ". self::table()." where id=$id";
        echo $sql;
        return 0;
    }
    public static function findAll():array{
        $sql="select * from ".self::table()."";
       echo $sql;
        return [];
    }
    public static function findById(int $id):object|null{
        $sql="select * from ".self::table()." where id=$id";
        echo $sql;
        return null;
    }
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
        return null;
    }  
}