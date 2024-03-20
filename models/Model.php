<?php

abstract class Model
{
//CONNECT DB 
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:localhost;dbname=cogip2;charset=utf8', 'root', 'root');// identifiant et mot de passe 
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


// COMPANIES  -> CompaniesManager.php / HomeManager.php
protected function getCompaniesWithTypes($obj, $limit = null)
{
    $sql = "SELECT companies.*, types.name AS type_name 
             FROM companies
             INNER JOIN types ON companies.type_id = types.id 
             ORDER BY companies.created_at DESC";

    if ($limit !== null) {
        $sql .= " LIMIT :limit";
    }

    $var = [];
    $req = $this->getBdd()->prepare($sql);
    if ($limit !== null) {
        $req->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    }
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
    }

    return $var;
}



// INVOICES -> InvoicesManager.php / HomeManager.php
protected function getInvoicesWithCompanies($obj, $limit = null)
{
    $sql = "SELECT invoices.*, companies.name AS company_name
            FROM invoices
            JOIN companies ON invoices.id_company = companies.id
            ORDER BY invoices.created_at DESC";

    if ($limit !== null) {
        $sql .= " LIMIT :limit";
    }

    $var = [];
    $req = $this->getBdd()->prepare($sql);
    if ($limit !== null) {
        $req->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    }
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
    }

    return $var;
}


// CONTACTS -> ContactsManager.php / HomeManager.php
protected function getContactsWithCompanies($obj, $limit = null)
{
    $sql = "SELECT contacts.*, companies.name AS company_name
            FROM contacts
            JOIN companies ON contacts.company_id = companies.id
            ORDER BY contacts.created_at DESC";

    if ($limit !== null) {
        $sql .= " LIMIT :limit";
    }

    $var = [];
    $req = $this->getBdd()->prepare($sql);
    if ($limit !== null) {
        $req->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    }
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
    }

    return $var;
}



// COMPANY DETAIL -> DetailsCompaniesManager.php
protected function getCompanyDetailsById($companyId, $obj)
{
    $sql = "SELECT 
                companies.*, 
                types.name AS type_name
            FROM 
                companies
            LEFT JOIN 
                types ON companies.type_id = types.id
            WHERE 
                companies.id = :companyId";

    $companiesDetails = [];
    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':companyId', $companyId, PDO::PARAM_INT);
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $companiesDetails[] = new $obj($data);
    }

    return $companiesDetails;
}

// CONTACT DETAIL -> DetailsCompaniesManager.php 
protected function getCompanyContactsById($companyId, $obj)
{
    $sql = "SELECT 
                contacts.id AS id,
                contacts.name AS name,
                contacts.email AS email,
                contacts.phone AS phone,
                companies.name AS company_name
            FROM 
                companies
            LEFT JOIN 
                contacts ON companies.id = contacts.company_id
            WHERE 
                companies.id = :id";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $companyId, PDO::PARAM_INT);
    $req->execute();

    $companyContacts = [];

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $companyContacts[] = new $obj($data);
    }

    return $companyContacts;
}

// INVOICE DETAIL -> DetailsCompaniesManager.php
protected function getCompanyInvoicesById($companyId, $obj)
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
                companies.id = :id
            ORDER BY 
                invoices.update_at DESC
            LIMIT 5";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $companyId, PDO::PARAM_INT);
    $req->execute();

    $companyInvoices = [];

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $companyInvoices [] = new $obj($data);
    }
 
    return $companyInvoices;
}


// Profile -> ProfileManager.php
protected function getProfileById($profileId, $obj)
{
    $sql = "SELECT 
                contacts.id AS id,
                contacts.name AS name,
                contacts.email AS email,
                contacts.phone AS phone,
                companies.name AS company_name
            FROM 
                contacts
            LEFT JOIN 
                companies ON contacts.company_id = companies.id
            WHERE 
                contacts.id = :id";

    $req = $this->getBdd()->prepare($sql);
    $req->bindValue(':id', $profileId, PDO::PARAM_INT);
    $req->execute();

    $profileDetails = [];

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $profileDetails[] = new $obj($data);
    }

    return $profileDetails;
}

protected function getStatistics()
{
    $statistics = [];

    $sqlInvoices = "SELECT COUNT(*) AS total_invoices FROM invoices";
    $reqInvoices = $this->getBdd()->prepare($sqlInvoices);
    $reqInvoices->execute();
    $statistics['total_invoices'] = $reqInvoices->fetch(PDO::FETCH_ASSOC)['total_invoices'];

    $sqlContacts = "SELECT COUNT(*) AS total_contacts FROM contacts";
    $reqContacts = $this->getBdd()->prepare($sqlContacts);
    $reqContacts->execute();
    $statistics['total_contacts'] = $reqContacts->fetch(PDO::FETCH_ASSOC)['total_contacts'];

    $sqlCompanies = "SELECT COUNT(*) AS total_companies FROM companies";
    $reqCompanies = $this->getBdd()->prepare($sqlCompanies);
    $reqCompanies->execute();
    $statistics['total_companies'] = $reqCompanies->fetch(PDO::FETCH_ASSOC)['total_companies'];

    return $statistics;
}


}





