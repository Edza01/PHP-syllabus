<?php

##### Exercise 4

##### Create a array of objects that uses the function
# of exercise 3 but in loop printing out if the person has reached age of 18.

function IsAgeOver18($age)
{
    return $age > 18 ? "18" : "not18";
}

class ageCheck
{
    public $name;
    public $age;
}

$person_1 = new ageCheck();
$person_1->name = 'adasdasd';
$person_1->age = 17;
$person_2 = new ageCheck();
$person_2->name = 'adasdasd';
$person_2->age = 100;
$_person = array($person_1, $person_2);

foreach ($_person as $val)
{
    ?>
    <pre>
        <?php
            print_r(IsAgeOver18($val -> age));
        ?>
    </pre>
    <?php
}