<?php

function fizzBuzz()
{
    for ($i = 1; $i <= 100; $i++) {
        $Fizz = (0 === $i % 3);
        $Buzz = (0 === $i % 5);

        if (!$Fizz && !$Buzz) {
            echo $i . PHP_EOL;

            continue;
        }

        if ($Fizz) {
            echo 'Fizz';
        }

        if ($Buzz) {
            echo 'Buzz';
        }

        echo PHP_EOL;
    }
}
