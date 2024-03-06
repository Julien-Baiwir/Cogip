<?php
require_once ('views/includes/View.php');

class ControllerInvoices{

    private $_invoicesManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && is_array($url) && count($url) > 1 ){
            throw new Exception('Page introuvable');
        }else{
            $this->_invoicesManager = new InvoicesManager;
            $this->invoices();
        }      
    }

    private function invoices(){

        $invoices = $this->_invoicesManager->getInvoices();

        $this->_view = new View('Invoices');
        $this->_view->generate(array('invoices' => $invoices ));

        // require ('Views/viewInvoices.php');
    }
}