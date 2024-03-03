<?php
//CONNECT DB
abstract class Model
{
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:localhost;dbname=cogip;charset=utf8', 'root', 'root84$');// identifiant et mot de passe 
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

// COMPANIES
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
// INVOICES
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

// CONTACTS 
protected function getContactsWithCompanies($obj)
{
    $sql = "SELECT contacts.*, companies.name AS company_name
            FROM contacts
            JOIN companies ON contacts.company_id = companies.id
            ORDER BY contacts.created_at DESC";

    $var = [];
    $req = $this->getBdd()->prepare($sql);
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
    }

    return $var;
}

// protected function getCompaniesDetails($obj)
// {
//     $sql = "SELECT companies.*, invoices.*, types.name AS type_name, contacts.name AS contact_name 
//             FROM companies
//             INNER JOIN types ON companies.type_id = types.id
//             LEFT JOIN invoices ON companies.id = invoices.id_company
//             LEFT JOIN contacts ON companies.id = contacts.company_id";

//     $var = [];
//     $req = $this->getBdd()->prepare($sql);
//     $req->execute();

//     while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
//         $var[] = new $obj($data);
//     }

//     return $var;
// }



}


