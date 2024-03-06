<?php
class ProfileManager extends Model
{ 
    public function getProfile($profileId)
    {
        return $this->getProfileById($profileId,'Profile'); // autoloader charge Profile.php
    } 

   
}