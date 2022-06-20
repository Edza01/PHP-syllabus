<?php

##### Exercise 5

##### Create an associative array with objects of multiple persons.
##### Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every person personal data.


$array = array (
    "0" => Array( "name" => "name", "surname" => "surname", "age" => "age" ),
    "1" => Array( "name" => "name", "surname" => "surname", "age" => "age" ),
    "2" => Array( "name" => "name", "surname" => "surname", "age" => "age" )
);

foreach ($array as $val)
{
    ?>
        <pre>
        <?php
            print_r($val);
        ?>
        </pre>
    <?php
}
