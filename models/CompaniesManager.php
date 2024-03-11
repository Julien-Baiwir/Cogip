<?php

class CompaniesManager extends Model
{
    
    public function getCompanies()
    {
        return $this->getCompaniesWithTypes('Companies');
    }
}


