<?php
class CompaniesController.php extends Model
{
    public function getArticles();
    {
        $this->getBdd();
        return $this->getAll('? ,? ')
    }

}