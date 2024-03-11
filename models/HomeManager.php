<?php
class HomeManager extends Model
{
    public function getFiveCompanies()
    {
        return $this->getCompaniesWithTypes('Companies', 5);
    }

    public function getFiveInvoices()
    {
        return $this->getInvoicesWithCompanies('Invoices', 5);

    }

    public function getFiveContacts()
    {
        return $this->getContactsWithCompanies('Contacts', 5);
    }

}






