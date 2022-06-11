<?php

###### Exercise 6

###### Create a variable $plateNumber that stores your car plate number.
###### Create a switch statement that prints out that its your car in case of your number.

$plateNumber = '$abcd';

switch ($plateNumber) {
    case '$abcd':
        echo "it's your car";
        break;
    case '$abc':
        echo "not your car";
        break;
    case '$abcdef':
        echo "not your car again";
        break;
    default:
        throw new \Exception('Unexpected value');
}