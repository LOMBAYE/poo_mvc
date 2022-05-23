<?php
namespace App\Core;

interface IModel{
    //methode abstraite n a pas d corps
//    methodes d instance
public function update():int;
public function insert():int;

// static
public static function delete(int $id):int;
public static function findAll():array;
public static function findById(int $id):object|null;
public static function searchAll($attributes,$column,$search):array;

public static function findBy(string $sql,array $data=null,$single=false):object|null|array;
//attribut singulier pour connaire le nombre de valeurs k retourne la methode true et 
//false(si ca retourne plusieurs valeurs)
}

// Methodes static(d objets) 
// classe::methode()
// et methode d instance(de classe)
// etat de l objet(valeurs des attributs)
// obj=new Classe()