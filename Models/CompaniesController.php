<?php

class CompaniesController extends Model
{
    public function getArticles();
    {
        $this->getBdd();
        return $this->getAll('? ,? ')
    }

}