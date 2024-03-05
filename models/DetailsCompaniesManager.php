<?php
class DetailsCompaniesManager extends Model
{
    public function getDetailsCompany($companyId)
    {
        return $this->getCompanyDetailsById($companyId,'DetailsCompanies');
    } 
    
    public function getDetailsContacts($companyId)
    {
        return $this->getCompanyContactsById($companyId,'DetailsContacts');
    } 

    public function getDetailsInvoices($companyId)
    {
        return $this->getCompanyInvoicesById($companyId,'DetailsInvoices');
    } 
}