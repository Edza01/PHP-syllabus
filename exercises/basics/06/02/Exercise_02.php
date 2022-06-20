<?php

##### Exercise 2

##### Create a file that stores 2 functions created by your choice.
##### Create file that includes this file and executes the functions and displays output.

include dirname(__FILE__)."/Exercise_02.1.php";

print_r(fizzBuzz());

for ($i = 0; $i < 10; $i++) echo "<br>";

print_r(acronym("hello world a b c"));