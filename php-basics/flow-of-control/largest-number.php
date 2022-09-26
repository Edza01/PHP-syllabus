<?php

echo "Input the 1st number: ";

echo "Input the 2nd number: ";

echo "Input the 3rd number: ";

//todo print the largest number

?>

<form action="largest-number.php" method="post">
    1: <input type="number" name="first"><br>
    2: <input type="number" name="second"><br>
    3: <input type="number" name="third"><br>
    <input type="submit">
</form>

<?php
$array = [];
if (isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["third"]))
{
    foreach($_POST as $key =>$value){
        $array[] = $value;
    }

    print_r(max($array));
}