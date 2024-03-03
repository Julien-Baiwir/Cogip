<?php

class DetailsCompanies
{
    private $_name;
    private $_country;
    private $_tva;
    private $_contact_name;
    private $_contact_email;
    private $_contact_phone;
    private $_invoice_ref;
    private $_invoice_created_at;
    private $_invoice_update_at;

    public function __construct(array $data)
    {
        if (isset($data['name'], $data['country'], $data['tva'], $data['contact_name'], $data['contact_email'], $data['contact_phone'], $data['invoice_ref'], $data['invoice_created_at'], $data['invoice_update_at'])) {
            $this->setName($data['name']);
            $this->setCountry($data['country']);
            $this->setTva($data['tva']);
            $this->setContactName($data['contact_name']);
            $this->setContactEmail($data['contact_email']);
            $this->setContactPhone($data['contact_phone']);
            $this->setInvoiceRef($data['invoice_ref']);
            $this->setInvoiceCreatedAt($data['invoice_created_at']);
            $this->setInvoiceUpdateAt($data['invoice_update_at']);
        } else {
            throw new InvalidArgumentException('Invalid data array.');
        }
    }

// SETTERS

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        } else {
            throw new InvalidArgumentException('Name must be a string value.');
        }
    }

    public function setCountry($country)
    {
        if (is_string($country)) {
            $this->_country = $country;
        } else {
            throw new InvalidArgumentException('Country must be a string value.');
        }
    }

    public function setTva($tva)
    {
        if (is_string($tva)) {
            $this->_tva = $tva;
        } else {
            throw new InvalidArgumentException('TVA must be a string value.');
        }
    }

    public function setContactName($contact_name)
    {
        if (is_string($contact_name)) {
            $this->_contact_name = $contact_name;
        } else {
            throw new InvalidArgumentException('Contact name must be a string value.');
        }
    }

    public function setContactEmail($contact_email)
    {
        $this->_contact_email = $contact_email;
    }

    public function setContactPhone($contact_phone)
    {
        $this->_contact_phone = $contact_phone;
    }

    public function setInvoiceRef($invoice_ref)
    {
        $this->_invoice_ref = $invoice_ref;
    }

    public function setInvoiceCreatedAt($invoice_created_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $invoice_created_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $invoice_created_at) {
            $this->_invoice_created_at = $date->format('d-m-Y H:i:s');
        } else {
            throw new Exception("Invalid datetime format for invoice creation date. The expected format is 'Y-m-d H:i:s'.");
        }
    }
    
    public function setInvoiceUpdateAt($invoice_update_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $invoice_update_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $invoice_update_at) {
            $this->_invoice_update_at = $date->format('d-m-Y H:i:s');
        } else {
            throw new Exception("Invalid datetime format for invoice update date. The expected format is 'Y-m-d H:i:s'.");
        }
    }
    

// GETTERS


    public function getName()
    {
        return $this->_name;
    }

    public function getCountry()
    {
        return $this->_country;
    }

    public function getTva()
    {
        return $this->_tva;
    }

    public function getContactName()
    {
        return $this->_contact_name;
    }

    public function getContactEmail()
    {
        return $this->_contact_email;
    }

    public function getContactPhone()
    {
        return $this->_contact_phone;
    }

    public function getInvoiceRef()
    {
        return $this->_invoice_ref;
    }

    public function getInvoiceCreatedAt()
    {
        return $this->_invoice_created_at;
    }

    public function getInvoiceUpdateAt()
    {
        return $this->_invoice_update_at;
    }
}
?>
