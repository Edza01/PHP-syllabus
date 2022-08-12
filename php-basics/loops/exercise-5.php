<?php
    session_start();
?>


<form method="post" style="background-color: red;">
    <h1 style="font-size: 1.5rem">roll</h1>
    <input type="submit" value="Enter" name="SubmitButton"><br/><br/>
</form>


<?php




if(isset($_POST["SubmitButton"]))
{

    if (!isset($_SESSION["score"]))
    {
        $score = 0;
        $_SESSION["score"] = $score;
    }

    $randomNumber =  rand(1,10);

    if ($randomNumber == 1)
    {
        $score = 0;
        $_SESSION["score"] = $score;
    }
    else
    {
        $score = $_SESSION["score"];
        $score += $randomNumber;
        $_SESSION["score"] = $score;
    }
   
    print_r($score);
}
?>

