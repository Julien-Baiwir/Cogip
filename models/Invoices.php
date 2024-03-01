<?php

class Invoices
{

    private $_id;
    private $_ref;
    private $created_at;
    private $update_at;
    private $id_company;

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

    // Setters === ===

    //set id
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    //set ref
    public function setRef($ref){

        if(is_string($ref)){
            $this->_ref = $ref;
        }
    }

    //set created_at
    public function setCreated_at($dateCreated){

        $this->created_at = $dateCreated;
    }

    //set update_at
    public function setUpdate_at($dateUptade){

        $this->update_at = $dateUptade;
    }

    //set id_company
    public function setId_Company($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->id_company = $id; // Utilisez la propriété id_company ici
        }
    }

    // getters === ===

    //get id
    public function getId(){

        $id = $this->_id;
        return $id;
    }

    //get ref
    public function getRef(){

        $ref = $this->_ref;
        return $ref;
    }

    //get created_at
    public function getCreated_at(){

        $dateCreated = $this->created_at;
        return $dateCreated;
    }
    
    //get update_at
    public function getUpdate_at(){

        $dateUptade = $this->update_at;
        return $dateUptade;
    }

}