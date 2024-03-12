<?php
class DashboardContactsManager extends Model
{
    public function getFiveContacts()
    {
        return $this->getContactsWithCompanies('Contacts', 5);
    }
}