<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

//todo check if an array contains a value user entered

?>

<form name="form" action="" method="get">
    <input type="text" name="value" id="subject">
</form>

<?php

if (isset($_GET['value']))
{
    if( in_array( $_GET['value'] ,$numbers ) ) echo "yes";
    else echo 'no';
}
