<?php

###### Exercise 4

###### By your choice, create condition with 3 checks.
###### For example, if value is greater than X, less than Y and is an even number.

function threeChecks($value)
{
    return is_numeric($value) && $value > 1 && $value < 10 ? 'true' : 'false';
}

print_r(threeChecks(2));