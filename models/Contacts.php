<?php

class Contacts
{

    private $_id;
    private $_name;
    private $_company_id;
    private $_email;
    private $_phone;
    private $_created_at;
    private $_update_at;

    // Constructor
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Setters

    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0)
            $this->_id = $id;
    }

    public function setName($name)
    {
        if (is_string($name))
            $this->_name = $name;
    }

    public function setCompanyId($company_id)
    {
        if (is_numeric($company_id)) {
            $this->_company_id = (int) $company_id;
        } else {
            throw new Exception('Invalid company id.');
        }
    }

    public function setEmail($email)
    {
        if (is_string($email))
            $this->_email = $email;
    }

    public function setPhone($phone)
    {
        if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $phone))
            $this->_phone = $phone;
    }
   
    public function setCreated_at($created_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $created_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $created_at) {
            $this->_created_at = $date->format('d-m-Y'); // Modifier le format de sortie ici
        } else {
            throw new Exception("Invalid datetime format. The expected format is 'Y-m-d H:i:s'.");
        }
    }

    public function setUpdate_At($update_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $update_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $update_at) {
            $this->_update_at = $update_at;
        } else {
            throw new Exception("Invalid datetime format. The expected format is 'Y-m-d H:i:s'.");
        }
    }


    // Getters  
    public function getId()
    {
        return $this->_id;
    }                 // Getter for `$_id`

    public function getName()
    {
        return $this->_name;
    }             // Getter for `$_name`

    public function getCompanyId()
    {
        return $this->_company_id;
    }   // Getter for `$_company_id`

    public function getEmail()
    {
        return $this->_email;
    }           // Getter for `$_email`

    public function getPhone()
    {
        return $this->_phone;
    }           // Getter for `$_phone`

    public function getCreated_at()
    {
        return $this->_created_at;
    }   // Getter for `$_created_at`

    public function getUpdateAt()
    {
        return $this->_update_at;
    }     // Getter for `$_update_at`

}