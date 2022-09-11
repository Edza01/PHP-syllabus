<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

multiply(7);

function multiply($numb): void
{
    $result = 0;

    for ($i = 0; $i <= $numb; $i++)
    {
        $result = $i * $i;
    }

    if (isset($result))
    {
        print_r($result);
    }
}