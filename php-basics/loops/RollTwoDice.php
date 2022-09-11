<?php
session_start();

?>

<form name="form" action="" method="get">
    Desired Sum: <input type="text" name="sum" id="subject">
</form>

<?php

if (isset($_GET['sum']))
{
    do {

        $firstDice = rand(1,6);
        $secondDice = rand(1,6);
        print_r($firstDice . ' and ' . $secondDice . ' = ' . $firstDice + $secondDice);
        echo '<br>';
        $diceSum = $firstDice + $secondDice;

    } while ($_GET['sum'] != $diceSum);
}

?>