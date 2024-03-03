<?php
class DetailsCompaniesManager extends Model
{
    public function getDetailsCompany($companyId)
    {
        return $this->getCompanyDetailsById($companyId);
  
    }

    public function getDetailsContacts($companyId)
    {
        return $this->getCompanyContactsById($companyId);

    }

    public function getDetailsInvoices($companyId)
    {
        return $this->getCompanyInvoicesById($companyId);
    }
}





// class DetailsCompaniesManager extends Model
// {
//     public function getDetails($companyId)
//     {
//         return $this->getCompanyDetailsById($companyId,'DetailsCompanies' );
//     }
// }