<?php

class DetailsContacts
{
    private $_id;
    private $_name;
    private $_email;
    private $_phone;
    private $_companyName;

    public function __construct(array $data)
    {
        
        if (isset($data['id'], $data['name'], $data['email'], $data['phone'], $data['company_name'])) {
            $this->_id = $data['id'];
            $this->_name = $data['name'];
            $this->_email = $data['email'];
            $this->_phone = $data['phone'];
            $this->_companyName = $data['company_name'];
        } else {
            throw new InvalidArgumentException('Erreur : Données requises manquantes pour le contact.');
        }
    }

    // Getters pour les propriétés du contact

    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getPhone()
    {
        return $this->_phone;
    }

    public function getCompanyName()
    {
        return $this->_companyName;
    }
}

?>

           