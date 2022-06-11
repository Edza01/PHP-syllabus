<?php
###### Exercise 1
###### Given variables (int) 10, string "10" determine if they both are the same.

$int_num = 10;
$string_num = "10";

function compareVariables($int, $str): string
{
    return $int == (int)$str ? 'true' : 'false';
}

print_r(compareVariables($int_num, $string_num));