<?php

class Invoices
{

    private $_id;
    private $_ref;
    private $_created_at; 
    private $_update_at; 
    private $_id_company; 
    
    private $_company_name;


    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

// SETTERS

    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setRef($ref){

        if(is_string($ref)){
            $this->_ref = $ref;
        }
    }

    public function setCreated_at($created_at)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $created_at);
        $this->_created_at = $date->format('d-m-Y');
    }

    public function setUpdate_at($dateUpdate) {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $dateUpdate);
        $this->_update_at = $date->format('d-m-Y');
    }
    
    public function setId_Company($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id_company = $id; 
        }
    }

    public function setCompany_name($companyName) {
        if (is_string($companyName)) {
            $this->_company_name = $companyName;
        }
    }

       // GETTERS
   public function getId() {
    return $this->_id;
   }

   public function getRef() {
    return $this->_ref;
    }

    public function getCreated_at() {
    return $this->_created_at;
    }

    public function getUpdate_at() {
    return $this->_update_at;
    }

    public function getCompany_name() {
    return $this->_company_name;
    }
}
