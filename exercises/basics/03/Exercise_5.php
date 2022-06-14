<?php

##### Exercise 5
##### Given array


$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

##### Program should display concatenated value of - John & Jane Doe`s

print_r(implode(' ', $items[0][1]));
echo "<br>";
print_r(implode(' ', $items[0][0]));

echo "<br>";

print_r($items[0][0]['age']);
echo " + ";
print_r($items[0][1]['age']);

echo " = " . $items[0][0]['age'] + $items[0][1]['age'];