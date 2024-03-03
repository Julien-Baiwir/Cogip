<?php

class DetailsCompaniesManager extends Model
{
    public function getCompanyById($companyId)
    {
        return $this->getCompanyDetailsById($companyId);
    }
}



