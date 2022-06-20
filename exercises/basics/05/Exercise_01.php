<?php

##### Exercise 1
##### Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.




function elongateStringWithPhrase($string, $phrase)
{
    if (is_string($string) && is_string($phrase)) return $string . " " . $phrase;
    else return $phrase;
}

$name = "name";
$company = "codelex";

print_r(elongateStringWithPhrase($name, $company));