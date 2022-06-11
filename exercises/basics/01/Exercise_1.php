<?php
###### Exercise 1

###### Create variable that prints out an integer 10, float 10.10, string "hello world"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$integer = 10;
$float = 10.10;
$string = 'hello world';

$variableArray = array($integer, $float, $string);

foreach ($variableArray as $var) {
    if (is_float($var)) {
        print_r(number_format((float)$var, 2, '.', ''));
    } else {
        print_r($var);
    }
    print_r('<br>');
}

?>
</body>
</html>



