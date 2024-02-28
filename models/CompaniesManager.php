<?php

class CompaniesManager extends Model
{
    public function getCompanies()
    {
        return $this->getAll('companies', 'Companies');
        // Parameters: 1) database table name (here 'companies')
        //             2) class name of the object to create (here 'Companies')
    }
}
