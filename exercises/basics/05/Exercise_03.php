<?php

##### Exercise 3

##### Create a person object with name, surname and age.
# Create a function that will determine if the person has reached 18 years of age.
# Print out if the person has reached age of 18 or not.


function IsAgeOver18($age)
{
    return $age > 18 ? "18" : "not18";
}

print_r(IsAgeOver18(17));
echo "<br>";
print_r(IsAgeOver18(27));
