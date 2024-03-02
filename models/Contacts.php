<?php

class Contacts
{
    private $_name;
    private $_company_id;

    // Constructor
    public function __construct(array $data)
    {
        // Vérifier si le tableau contient les clés nécessaires
        if (isset($data['name']) && isset($data['company_id'])) {
            // Appeler les méthodes correspondantes pour définir les propriétés
            $this->setName($data['name']);
            $this->setCompanyId($data['company_id']);
        } else {
            throw new InvalidArgumentException('Invalid data array. "name" and "company_id" keys are required.');
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

    // Getter for name
    public function getName()
    {
        return $this->_name;
    }

    // Getter for company_id
    public function getCompanyId()
    {
        return $this->_company_id;
    }
}





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

    private $_company_name; 

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

    public function setCompanyName($company_name)
    {
        if (is_string($company_name))
            $this->_company_name = $company_name;
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

    public function setUpdate_at($update_at)
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

    public function getCreated_at()
    {
        return $this->_created_at;
    }   

    public function getUpdate_at()
    {
        return $this->_update_at;
    }   
    
    public function getCompanyName()
    {
        return $this->_company_name;
    }

}
