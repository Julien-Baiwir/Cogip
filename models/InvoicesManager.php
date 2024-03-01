<?php

class InvoicesManager extends Model
{
    
    public function getInvoices()
    {
        return $this->getAll('invoices', 'Invoices');

    }
}