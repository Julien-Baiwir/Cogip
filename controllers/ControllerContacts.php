<?php
// require_once ('views/View.php');

class ControllerContacts
{
    private $_ContactsManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1) {
            throw new Exception('Page introuvable');
        } else {
            $this->contacts();
        }
    }

    private function contacts()
    {
        $this->_ContactsManager = new ContactsManager();
        $contacts = $this->_ContactsManager->getContacts();

        require_once('views/viewContacts.php');
    }
}