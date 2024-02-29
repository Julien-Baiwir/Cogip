<?php
class HomeManager extends Model
{
    public function getFiveCompanies()
    {
        return $this->getAll('companies', 'Companies');
    }
}






