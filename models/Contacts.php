<?php

class Contacts
{
    private $_name;
    private $_company_id;
    private $_email;
    private $_phone;
    private $_created_at;
    private $_company_name;

    public function __construct(array $data)
    {
        if (isset($data['name'], $data['company_id'], $data['email'], $data['phone'], $data['created_at'], $data['company_name'])) {
            $this->setName($data['name']);
            $this->setCompanyId($data['company_id']);
            $this->setEmail($data['email']);
            $this->setPhone($data['phone']);
            $this->setCreatedAt($data['created_at']);
            $this->setCompanyName($data['company_name']);
        } else {
            throw new InvalidArgumentException('Invalid data array.');
        }
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        } else {
            throw new InvalidArgumentException('Name must be a string value.');
        }
    }

    public function setCompanyId($company_id)
    {
        if (is_numeric($company_id)) {
            $this->_company_id = (int) $company_id;
        } else {
            throw new InvalidArgumentException('Company ID must be a numeric value.');
        }
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    public function setCreatedAt($created_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $created_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $created_at) {
            $this->_created_at = $date->format('d-m-Y'); 
        } else {
            throw new Exception("Invalid datetime format. The expected format is 'Y-m-d H:i:s'.");
        }
    }

    public function setCompanyName($company_name)
    {
        $this->_company_name = $company_name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getCompanyId()
    {
        return $this->_company_id;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getPhone()
    {
        return $this->_phone;
    }

    public function getCreatedAt()
    {
        return $this->_created_at;
    }

    public function getCompanyName()
    {
        return $this->_company_name;
    }
}




