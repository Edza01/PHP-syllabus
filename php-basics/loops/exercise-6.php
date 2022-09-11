<?php


function pyramid($length)
{
    $pyramidSides = 0;
    $pyramidCentre = 0;

    for ($i = 2; $i <= $length; $i++)
    {
        $pyramidSides += 4;
    }

    for ($v = 0; $v <= $length; $v++)
    {
        if ($pyramidSides >= 0)
        {
            print_r(str_repeat('0', $pyramidSides));
        }

        if ($v != $length)
        {
            print_r(str_repeat('*', $pyramidCentre));
        }

        if ($pyramidSides >= 0)
        {
            print_r(str_repeat('0', $pyramidSides));
        }
        echo  '<br>';

        $pyramidSides -= 4;
        $pyramidCentre += 8;
    }
}

pyramid(5);


echo "<body style='background-color: #9b6565;'>";

