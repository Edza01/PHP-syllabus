<?php

//Min? 1
//Max? 5
//12345
//23451
//34512
//45123
//51234

?>

<form name="form" action="" method="get">
    Desired Sum: <input type="text" name="value" id="subject">
</form>

<?php


if (isset($_GET['value']))
{
    $inputInt = (int)$_GET['value'];

    for ($i = 1; $i <= $inputInt; $i++)
    {
        for ($y = $i; $y <= $inputInt; $y++)
        {
            print_r($y);
        }

        for ($s = 1; $s < $i; $s++)
        {
            print_r($s);
        }

        echo '<br>';
    }
}

