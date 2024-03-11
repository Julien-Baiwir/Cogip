<?php
class DashboardCompaniesManager extends Model
{
    public function getFiveCompanies()
    {
        return $this->getCompaniesWithTypes('Companies', 5);
    }

}
