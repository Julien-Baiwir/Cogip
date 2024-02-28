<?php

// class abstraite qui ne peut pas être instancié, c'est d'autres classes qui seront"extend" qui
//pourront être instanciées et prendre les propriétés de la class Model
// C'est en bref un model de base qui servira pour tous les autres models
abstract class Model
{
    private static $_bdd;

    //INSTANCE LA CONNEXION A LA BDD
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host;dbname=cogip;charset=utf8', 'root', 'root84$');// identifiant et mot de passe à changer
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    }
    // RECUPERE LA CONNEXION A LA BD
    protected function getBdd()
    {
        if(self::$_bdd == null)
        self::setBddsetBdd();
        return self::$_bdd;
    }

    protected function getAll($table, $obj)
    {
        $var =[];
        
        $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY id desc');
        $req->execute();

        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}