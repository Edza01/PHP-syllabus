<?php

###### Exercise 5**

//Create a .csv file that stores (ID, name, surname, age) of multiple persons.
//Create a program that accepts 1 argument (id of the user) and displays the user information if the user has been found.
//If the user has not been found, output that in the console.





if (($open = fopen("/Users/edgars/Desktop/PHP-syllabus/exercises/basics/06/05/persons.csv", "r")) !== FALSE)
{
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) $array[] = $data;

    fclose($open);
}

function getSinglePerson($array, $index)
{
    foreach ($array as $value)
    {
        if ($value[0] == $index) return $array[$index];
        else print_r('person not found');
    }

    return $array[$index];
}

?>
<pre>
    <?php
        print_r(getSinglePerson($array, 1));
    ?>
</pre>





