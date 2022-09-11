<?php
session_start();

$input = array("letters", "choose", "already", "they", "run");

if (!isset($_SESSION["rand_keys"]))
{
    $_SESSION["rand_keys"] =  array_rand($input, 2);;
}

$rand_keys = $_SESSION["rand_keys"];
$randomWord = $input[$rand_keys[0]];

$randomWordCharArr = str_split($randomWord);

if (!isset($_SESSION["hiddenWord"]))
{
    $_SESSION["hiddenWord"] =  str_repeat('_', count($randomWordCharArr));
}
$hiddenWord =  $_SESSION["hiddenWord"];

if (!isset($_SESSION["wrongLetters"]))
{
    $_SESSION["wrongLetters"] =  "-";
}

?>

<form name="form" action="" method="get">
    <input type="text" name="letter" id="letter" maxlength="1">
</form>

<?php

print_r('Guess word');

    if (isset($_GET['letter']))
    {
        if(in_array( $_GET['letter'], $randomWordCharArr))
        {
            $found = array_keys($randomWordCharArr, $_GET['letter']);

            foreach ($found as $val)
            {
                $hiddenWord[$val] = $_GET['letter'];
            }

            $_SESSION["hiddenWord"] = $hiddenWord;
        }
    }
?>

<p style="letter-spacing: 13px;"> <?php echo $hiddenWord ?> </p>





