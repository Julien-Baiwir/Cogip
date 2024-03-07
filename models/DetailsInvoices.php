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
            $this->setCreatedAt($data['invoice_created_at']);
            $this->setUpdatedAt($data['invoice_update_at']);
        } else {
            throw new InvalidArgumentException('Error: Missing required data for Invoice.');
        }
    }

    public function setCreatedAt($createdAt)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $createdAt);
        if ($date !== false) {
            $this->_createdAt = $date->format('d-m-Y');
        } else {
            throw new InvalidArgumentException('Invalid date format for created_at.');
        }
    }

    public function setUpdatedAt($updatedAt)
    {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $updatedAt);
        if ($date !== false) {
            $this->_updatedAt = $date->format('d-m-Y');
        } else {
            throw new InvalidArgumentException('Invalid date format for updated_at.');
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


