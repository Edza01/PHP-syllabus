<?php

//Write a program that asks the user to enter two words. The program then prints out both words on one line.
//The words will be separated by enough dots so that the total line length is 30:
//
//```
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153

?>

<form method="post">

    Enter value1 :<input type="text" name="str1"><br/>
    Enter value2 :<input type="text" name="str2"><br/>
    <input type="submit" value="Enter" name="SubmitButton"><br/><br/>
</form>
    <?php

    if(isset($_POST["SubmitButton"]))
    {
       if (isset($_POST['str1']) && isset($_POST['str2']))
       {
           $totalSize = 30;
           $totalSize -= (strlen($_POST['str1']) + strlen($_POST['str2']));

           print_r($_POST['str1'] . str_repeat('.', $totalSize) . $_POST['str2']);
       }
    }
    ?>
