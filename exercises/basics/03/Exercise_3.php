<?php

###### Exercise 3
##### Given object


$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;


##### Using dump method, dump out all 3 values.

$data = array(
    "person data" => $person
);

$object = (object) $data;

foreach($object as $obj => $person){
    echo $obj. " => Name: ". $person->name . " | surname:" .  $person->surname . " | age:" .  $person->age ;
    echo "<br>";
}