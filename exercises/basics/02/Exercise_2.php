<?php
###### Exercise 2

###### Given variable (int) 50, determine if its in the range of 1 and 100.


function determineIfVariable_Between_1_and_100($num): string
{
    return $num > 1 && $num < 100 ? 'true' : 'false';
}

print_r(determineIfVariable_Between_1_and_100(50));