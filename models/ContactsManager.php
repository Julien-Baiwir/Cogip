<?php

class ContactsManager extends Model
{
    public function getContacts()
    {
        return $this->getAll('contacts', 'Contacts');
    }

}