<?php

# Exercise #2

# Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
# or “Even Number” otherwise. The program shall always print “bye!” before exiting.


function CheckOddEven($num)
{
    if ($num % 2 == 0) print_r('Even Number');
    else if ($num % 2 != 0)  print_r('Odd Number');


}

for ($i = 0; $i <= 100; $i++)
{
    print_r(CheckOddEven($i) . ' = '. $i);
    echo "<br/>";
    if ($i == 100) print_r('bye!');
}