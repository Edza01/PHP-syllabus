<?php

$days = [ "logic", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ];

?>

<form action="exercise-4.php" method="post">
    1: <input type="number" name="first"><br>
    <input type="submit">
</form>

<?php

if (isset($_POST["first"]))
{
    if ($_POST["first"] >= 1 && $_POST["first"] <= 7)
    {
        for ($i = 1; $i <= 7; $i++)
        {
            if ($_POST["first"] == $i)
            {
                print_r($days[$i]);
            }
        }
    }
}
