<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";

print("<pre>".print_r($numbers,true)."</pre>");

//todo
echo "Sorted numeric array: ";
asort($numbers);

foreach ($numbers as $key => $val) {
    print("<pre>".print_r($key = $val,true)."</pre>");
}




$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
print("<pre>".print_r($words,true)."</pre>");


//todo
echo "Sorted string array: ";

asort($words);

foreach ($words as $key => $val) {
    print("<pre>".print_r($key = $val,true)."</pre>");
}