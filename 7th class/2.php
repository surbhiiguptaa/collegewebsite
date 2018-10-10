<?php
class person
{
    const AVG_LIFE_SPAN = 80;
    
    public $firstName = "alex";
    public $lastName = "samuel";
    public $yearBorn = 1990;

}
$newPerson = new person();
echo $newPerson::AVG_LIFE_SPAN;

?>