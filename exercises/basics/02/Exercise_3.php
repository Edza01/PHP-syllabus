<?php

###### Exercise 3

###### Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

function determineIfVariable_is_hello($word): string
{
    return strtolower($word) == 'hello' ? 'true' : 'false';
}

print_r(determineIfVariable_is_hello("HeLlo"));