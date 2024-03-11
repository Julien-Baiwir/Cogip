<?php

class InvoicesManager extends Model
{
    
    public function getInvoices()
    {
        return $this->getInvoicesWithCompanies('Invoices');

    }
}