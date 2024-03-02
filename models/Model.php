<?php

// class abstraite qui ne peut pas être instancié, c'est d'autres classes qui seront"extend" qui
//pourront être instanciées et prendre les propriétés de la class Model
// C'est model de base qui servira pour tous les autres models
abstract class Model
{
    private static $_bdd;

    //PARTIE 1 CONNEXION A LA BDD
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:localhost;dbname=cogip;charset=utf8', 'root', 'root84$');// identifiant et mot de passe à changer
        self::$_bdd->exec('USE cogip');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    }

    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
        }
        return self::$_bdd;
    }

     
    // protected function getAll($table, $obj)
    // {
    //     $var =[];
        
    //     $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY id desc');
    //     $req->execute();

    //     while($data = $req->fetch(PDO::FETCH_ASSOC))
    //     {
    //         $var[] = new $obj($data);
    //     }
    //     return $var;
    //     $req->closeCursor();
    // }

    protected function getCompaniesWithTypes($obj)
    {
        $sql = "SELECT companies.*, types.name AS type_name 
         FROM companies,types 
         WHERE companies.type_id = types.id 
         ORDER BY companies.id DESC";


        $var = [];
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }

        return $var;
    }

    protected function getInvoicesWithCompanies($obj)
    {
        $sql = "SELECT invoices.*, companies.name AS company_name
                FROM invoices
                JOIN companies ON invoices.id_company = companies.id
                ORDER BY invoices.created_at DESC";
    
        $var = [];
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
    
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
    
        return $var;
    }
    
    
}
