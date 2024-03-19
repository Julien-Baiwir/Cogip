<?php
class DashboardContactsManager extends Model
{
    public function getFiveContacts()
    {
        return $this->getContactsWithCompanies('Contacts', 5);
    }

    public function getContacts()
    {
        return $this->getContactsWithCompanies('Contacts');
    }

    public function addNewContact($name, $email, $phone, $company_id) 
    {
    return $this->insertNewContact($name, $email, $phone, $company_id); 
    }
}

