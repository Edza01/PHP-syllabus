<?php

# Exercise #5

//Write a program that picks a random number from 1-100. Give the user a chance to guess it.
//If they get it right, tell them so. If their guess is higher than the number, say "Too high."
//If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
//
//```
//I'm thinking of a number between 1-100.  Try to guess it.
//> 13
//
//Sorry, you are too low.  I was thinking of 34.
//```
//
//```
//I'm thinking of a number between 1-100.  Try to guess it.
//> 79
//
//Sorry, you are too high.  I was thinking of 51.
//```
//
//```
//I'm thinking of a number between 1-100.  Try to guess it.
//> 42
//
//You guessed it!  What are the odds?!?
//```

$randomNumber = rand(1,100);

$numberError = '';
$number = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["number"])) $nameErr = "Input is required";
    else {
        $number = $_POST["number"];
        if (preg_match("/^[a-zA-Z-' ]*$/",$number)) $numberError = "Only numbers allowed";
    }
}

?>

    <h2>Guess number:</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Name: <input type="text" name="number" value="<?php echo $number;?>">
        <span class="error">* <?php echo $numberError;?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

<?php

echo "<h2>Your Input:</h2>";

if (is_numeric($number))
{
    if ($number < $randomNumber) print_r('Sorry, you are too low.  I was thinking of ' . $randomNumber);
    else if ($number > $randomNumber) print_r('Sorry, you are too high.  I was thinking of ' . $randomNumber);
    else print_r('You guessed it!  What are the odds?!?');
}
else print_r('Numbers only');













