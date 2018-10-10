<?php
class person
{
    public $firstName = "alex";
    public $lastName = "samuel";
    public $yearBorn = 1990;

}
$newPerson = new person();
// echo $newPerson->firstName."\n";
$newPerson->firstName = "sam";
echo $newPerson->firstName;
// echo::firstName;
?>