<?php
class DashboardCompaniesManager extends Model
{
    public function getFiveCompanies()
    {
        return $this->getCompaniesWithTypes('Companies', 5);
    }

        public function addNewCompany($name, $tva, $country, $type_id)
        {
        return $this->insertNewCompany($name, $tva, $country, $type_id);
        }
  

}
