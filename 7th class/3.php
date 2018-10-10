<?php
class person
{
    const AVG_LIFE_SPAN = 80;
    
    public $firstName = "alex";
    public $lastName = "samuel";
    public $yearBorn = 1990;

    public function getFirstName()
    {
            return $this->firstName;
    }
    public function setFirstName($tempname)
    {   
            $this->firstName = $tempname;
    }

}
$newPerson = new person();
$newPerson->setFirstName("sam");
echo $newPerson->getFirstName();
// echo $newPerson->firstName;

?>