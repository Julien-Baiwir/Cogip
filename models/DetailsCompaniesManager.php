<?php

class DetailsCompaniesManager extends Model
{
    public function getCompanyById($companyId)
    {
        $sql = "SELECT * FROM companies WHERE id = :id";
        $req = $this->getBdd()->prepare($sql);
        $req->bindValue(':id', $companyId, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        var_dump($data);
        if ($data) {
            return new DetailsCompanies($data);
        } else {
            return null; 
        }
    }
}

