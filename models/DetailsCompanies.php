<?php

// private $_name;
// private $_country;
// private $_tva;
// private $_contact_name;
// private $_contact_email;
// private $_contact_phone;
// private $_invoice_ref;
// private $_invoice_created_at;
// private $_invoice_update_at;

class DetailsCompanies
{
    private $_contact_name;
    private $_name;

    public function __construct(array $data)
    {
        if (isset($data['contact_name'], $data['name'])) {
            $this->_contact_name = $data['contact_name'];
            $this->_name = $data['name'];

        } else {
            throw new InvalidArgumentException('Error');
        }
    }

    // GETTERS

    public function getContactName()
    {
        return $this->_contact_name;
    }

    public function getName()
    {
        return $this->_name;
    }
}



?>

