<?php
class DashboardContactsManager extends Model
{
    public function getFiveContacts()
    {
        return $this->getContactsWithCompanies('Contacts', 5);
    }

        // public function addNewContact()
        // {
        // return $this->insertNewContact();
        // }


}
