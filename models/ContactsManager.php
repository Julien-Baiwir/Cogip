<?php

class ContactsManager extends Model
{
    public function getContacts()
    {
        return $this->getContactsWithCompanies('Contacts');
    }

}