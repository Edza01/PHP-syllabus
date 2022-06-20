<?php

# Exercise 5

# Create a 2D associative array in 2nd dimension with fruits and their weight.
# Create a function that determines if fruit has weight over 10kg.
# Create a secondary array with shipping costs per weight.
# Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
# Using foreach loop print out the values of the fruits and how much it would cost to ship this product.


$fruits = array(
    array(
        "name" => "banana",
        "weight" => 12,
    ),
    array(
        "name" => "orange",
        "weight" => 2,
    )
);

for ($i = 0; $i < sizeof($fruits); $i++)
{
    if ($fruits[$i]["weight"] > 10) print_r($i . ' ' . 'heavy');
    else print_r($i . ' ' . 'not heavy');

    echo "<br>";
}