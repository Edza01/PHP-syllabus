<?php

###### Exercise 5

###### Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
###### Range should be stored within the 2 separated variables $y and $z.


function rangeCheck($value)
{
    $number_1 = 10;
    $number_2 = 20;

    return is_numeric($value) && $value > $number_1 && $value < $number_2 ? 'true' : 'false';
}

print_r(rangeCheck(2));