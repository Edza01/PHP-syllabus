<?php

##### Exercise 2
##### Create an array with integers (up to 10) and print them out using for loop.

$array = [];
$count = 10;

for ($i = 0; $i < $count; $i++)
{
    $array[] = $i;
    print_r($array[$i]);
}