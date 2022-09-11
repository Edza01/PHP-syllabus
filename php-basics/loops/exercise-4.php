<?php

for ($i = 1; $i <= 100; $i++)
{
    if ($i % 3 == 0 && $i % 5 == 0)
    {
        print_r('FizzBuzz');
    }
    elseif ($i % 3 == 0)
    {
        print_r('Fizz');
    }
    elseif ($i % 5 == 0)
    {
        print_r('Buzz');
    }
    else
    {
        print_r($i);
    }
    print_r(' ');
    if ($i % 20 == 0 && $i != 0)
    {
        echo '<br>';
    }
}