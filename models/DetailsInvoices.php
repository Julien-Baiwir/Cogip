<?php

class DetailsInvoices
{
    private $_ref;
    private $_createdAt;
    private $_updatedAt;

    public function __construct(array $data)
    {
        if (isset($data['invoice_ref'], $data['invoice_created_at'], $data['invoice_update_at'])) {
            $this->_ref = $data['invoice_ref'];
            $this->_createdAt = $data['invoice_created_at'];
            $this->_updatedAt = $data['invoice_update_at'];
        } else {
            throw new InvalidArgumentException('Error: Missing required data for Invoice.');
        }
    }

    
    public function getRef()
    {
        return $this->_ref;
    }

    public function getCreatedAt()
    {
        return $this->_createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->_updatedAt;
    }
}

?>