<?php

class Profile
{
    private $_id;
    private $_name;
    private $_email;
    private $_phone;
    private $_company_name;

    public function __construct(array $data)
    {
        if (isset($data['id'],$data['name'],$data['email'],$data['phone'],$data['company_name'])) {
            $this->setId($data['id']);
            $this->setName($data['name']);
            $this->setEmail($data['email']);
            $this->setPhone($data['phone']);
            $this->setCompanyName($data['company_name']);
        } else {
            throw new InvalidArgumentException('Invalid data array.');
        }
    }
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        } else {
            throw new InvalidArgumentException('Name must be a string value.');
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

    public function setCompanyName($company_name)
    {
        $this->_company_name = $company_name;
    }


    // getters
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
        return $this->_company_name;
    }
}





