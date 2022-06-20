<?php

##### Exercise 4
##### Create a non-associative array with integers and print out only integers that divides by 3 without any left.

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

for ($i = 0; $i < count($numbers); $i++)
{
    if ($numbers[$i] % 3 == 0) print_r($numbers[$i]);
    print_r(" ");
}