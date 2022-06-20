<?php
# Exercise #1

# Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

function twoIntegers($one, $two)
{
    if ($one == 15 || $two == 15 || $one - $two > 15 || $two - $one > 15 || $one + $two == 15) return "true";
    else return "false";
}

echo twoIntegers(1, 2);
echo "<br/>";
echo twoIntegers(1, 30);
echo "<br/>";
echo twoIntegers(15, 2);
echo "<br/>";
echo twoIntegers(10, 5);