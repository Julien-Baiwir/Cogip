<?php

class CompaniesManager extends Model
{
    public function getCompanies();

    {

        return $this->getAll('companies, Companies ') 
        // 2 parmètres:    1) table de la base de données donc ici 'companies' 
        //                 2) c'est un objet qu'on va crér dans un php séparé Companies.php
    }

}