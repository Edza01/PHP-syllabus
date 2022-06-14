<?php

##### Exercise 1
##### Create an array with integers (up to 10) and print them out using foreach loop.

$array = [1,2,2,2,2,2,2,2];



foreach ($array as $i)
{
    $array[] = $i;
    print_r($array[$i] . " ");
}

