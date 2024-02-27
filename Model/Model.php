<?php

abstract class Model
{
    private static $_bdd;

    //INSTANCE LA CONNEXION A LA BDD
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host;dbname=cogip;charset=utf8', 'root', 'root');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    }
    // RECUPERE LA CONNEXION A LA BD
    protected function getBdd()
    {
        if(self::$_bdd == null)
        $this->setBdd();
    return self::$_bdd;
    }

    protected function getAll($table, $obj)
    {
        var =[];
        $req = self::$_bdd->prepare('SELECT' * .table. 'ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}