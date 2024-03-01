<?php
require_once ('views/View.php');

class ControllerContacts
{
    private $_ContactsManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1) {
            throw new Exception('Page introuvable');
        } else {
            $this->_ContactsManager = new ContactsManager();
            $this->contacts();
        }
    }

    private function contacts()
    {

        $contacts = $this->_ContactsManager->getContacts();

        $this->_view = new View('Contacts');
        $this->_view->generate(array('contacts' => $contacts ));


    }
}