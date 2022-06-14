<?php

###### Exercise 4
###### Given array


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

###### Program should display concatenated value of - Jane Doe 41

print_r(implode(' ', $items[0][1]));

