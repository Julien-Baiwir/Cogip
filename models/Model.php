<?php

abstract class Model
{
//CONNECT DB
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:localhost;dbname=cogip2;charset=utf8', 'root', 'root84$');// identifiant et mot de passe 
        self::$_bdd->exec('USE cogip2');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    }

    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
        }
        return self::$_bdd;
    }


// COMPANIES  -> CompaniesManager.php
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
// INVOICES -> InvoicesManager.php
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


// juste company
protected function getCompanyDetailsById($companyId)
{
    $sql = "SELECT 
        companies.*, 
        types.name AS type_name
    FROM 
        companies
    LEFT JOIN 
        types ON companies.type_id = types.id
    WHERE 
        companies.id = :id";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $companyId, PDO::PARAM_INT);
    $req->execute();

    // On récupère le résultat dans une variable
    $companyDetails = $req->fetch(PDO::FETCH_ASSOC);

    var_dump($companyDetails);
    return $companyDetails;
}

// juste contacts
protected function getCompanyContactsById($companyId)
{
    $sql = "SELECT 
                contacts.name AS contact_name,
                contacts.email AS contact_email,
                contacts.phone AS contact_phone
            FROM 
                companies
            LEFT JOIN 
                contacts ON companies.id = contacts.company_id
            WHERE 
                companies.id = :id";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $companyId, PDO::PARAM_INT);
    $req->execute();

    $companyDetails = [];

    while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
        $companyDetails[] = $row;
    }

    var_dump($companyDetails);
    return $companyDetails;
}

// invoices
protected function getCompanyInvoicesById($companyId)
{
    $sql = "SELECT 
                invoices.ref AS invoice_ref,
                invoices.created_at AS invoice_created_at,
                invoices.update_at AS invoice_update_at
            FROM 
                companies
            LEFT JOIN 
                invoices ON companies.id = invoices.id_company
            WHERE 
                companies.id = :id";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $companyId, PDO::PARAM_INT);
    $req->execute();

    $companyDetails = [];

    while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
        $companyDetails[] = $row;
    }

    var_dump($companyDetails);
    return $companyDetails;
}
}



////////AVEC OBJET//////////////////////////////////////////////
// protected function getCompanyDetailsById($companyId, $obj)
// {
//     $sql = "SELECT 
//         companies.*, 
//         types.name AS type_name,
//         contacts.name AS contact_name,
//         contacts.email AS contact_email,
//         contacts.phone AS contact_phone,
//         invoices.ref AS invoice_ref,
//         invoices.created_at AS invoice_created_at,
//         invoices.update_at AS invoice_update_at
//     FROM 
//         companies
//     LEFT JOIN 
//         types ON companies.type_id = types.id
//     LEFT JOIN 
//         contacts ON companies.id = contacts.company_id
//     LEFT JOIN 
//         invoices ON companies.id = invoices.id_company
//     WHERE 
//         companies.id = :id";

//     $companyDetails = [];
//     $req = $this->getBdd()->prepare($sql);
//     $req->bindValue(':id', $companyId, PDO::PARAM_INT);
//     $req->execute();

//     while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      
//         $companyDetails[] = new $obj($data);
//     }
//     var_dump($companyDetails);
//     return $companyDetails;
// }



// ancience fonction trop grosse
// protected function getCompanyDetailsById($companyId)
// {
//     $sql = "SELECT 
//         companies.*, 
//         types.name AS type_name,
//         contacts.name AS contact_name,
//         contacts.email AS contact_email,
//         contacts.phone AS contact_phone,
//         invoices.ref AS invoice_ref,
//         invoices.created_at AS invoice_created_at,
//         invoices.update_at AS invoice_update_at
//     FROM 
//         companies
//     LEFT JOIN 
//         types ON companies.type_id = types.id
//     LEFT JOIN 
//         contacts ON companies.id = contacts.company_id
//     LEFT JOIN 
//         invoices ON companies.id = invoices.id_company
//     WHERE 
//         companies.id = :id";

//     $req = $this->getBdd()->prepare($sql);
//     $req->bindValue(':id', $companyId, PDO::PARAM_INT);
//     $req->execute();

 
//     $companyDetails = $req->fetch(PDO::FETCH_ASSOC);

//     var_dump($companyDetails);
//     return $companyDetails;
// }

