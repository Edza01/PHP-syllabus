<?php

##### Exercise 4**

##### Using PHP in-built functions create a program that accepts 1 argument - filename.
##### Create a file with the filename of your choice and store information with comma separated (example. John, Doe, 10)
##### Using PHP in-built functions read information from this file and create an object based on information from the file.
##### Output the name, surname and age of the person in the output.

function getFile_ReturnArray($fileName)
{
    $personArray_dirty = file($fileName);
    $personsString = implode(' ', $personArray_dirty);
    return explode(' ',$personsString);
}

function cleanArray($arr)
{
    return preg_replace("/[^a-zA-Z 0-9]+/", "", $arr );
}

class User
{
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
}

$file = '/Users/edgars/Desktop/PHP-syllabus/exercises/basics/06/04/text';

$person_dirty = getFile_ReturnArray($file);
$person_clean = cleanArray($person_dirty);

$user = new User($person_clean[0], $person_clean[1], $person_clean[2]);

print_r($user->name);
echo "<br>";
print_r($user->surname);
echo "<br>";
print_r($user->age);







