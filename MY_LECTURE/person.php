<?php

class person{
    public $firstname;
    public $surname;
    public $age;

}
$person = new person();
$person->$firstname='Johnson';
$person->$surname='Roland';
$person->$age=28;

?>