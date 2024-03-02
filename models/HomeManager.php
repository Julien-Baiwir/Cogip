<?php
class HomeManager extends Model
{
    public function getFiveCompanies()
    {
        return $this->getCompaniesWithTypes('Companies');
    }

    public function getFiveInvoices()
    {
        return $this->getInvoicesWithCompanies('Invoices');

    }

}






