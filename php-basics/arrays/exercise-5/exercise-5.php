<?php
session_start();
?>
<div class="textContainer">
    <p class="turnStyle"> </p>
    <p class="winStyle"> </p>
</div>
<?php

if (!isset($_SESSION["gameTable"]) || isset($_POST['reset']))
{
    $gameTable = [
        ['-', '-' , '-'],
        ['-', '-' , '-'],
        ['-', '-' , '-']
    ];

    $_SESSION["gameTable"] = $gameTable;
}

function stringifiedArray()
{
    $gameTable = $_SESSION["gameTable"];

    foreach ($gameTable as $sub) {
        $tmpArr[] = implode(' ', $sub);
    }

    return implode(' ', $tmpArr);
}

function player_X_CountInTable()
{
    $array = stringifiedArray();
    return substr_count($array, 'X');
}

function player_O_CountInTable()
{
    $array = stringifiedArray();
    return substr_count($array, 'O');
}

function getTurn(): string
{
    $countO = player_O_CountInTable();
    $countX = player_X_CountInTable();

    return $countX == $countO ? 'X' : 'O';
}

function changeCellContent_OnClick($cell) {

    $gameTable = $_SESSION["gameTable"];

    if ($gameTable[$cell[0]][$cell[1]] == '-')
    {
        $gameTable[$cell[0]][$cell[1]] = getTurn();
    }
    else
    {
        ?>
            <script>
                document.getElementsByClassName("turnStyle")[0].textContent = "You can't move there";
            </script>
        <?php
    }
    $_SESSION["gameTable"] = $gameTable;
}

function getWinner()
{
    $gameTable = $_SESSION["gameTable"];
    $gameWon = false;

     for ($i = 0; $i < 2; $i++)
     {
         if ($gameTable[$i][0] != '-')
         {
             if ($gameTable[$i][0] == $gameTable[$i][1] && $gameTable[$i][1] == $gameTable[$i][2]) {
                 $gameWon = true;

                 print_r(10);
             }
         }
         if ($gameTable[0][$i] != '-')
         {
             if ($gameTable[0][$i] == $gameTable[1][$i] && $gameTable[1][$i] == $gameTable[2][$i])
             {
                 $gameWon = true;
                 print_r(11);
             }
         }
     }

    if ($gameTable[0][0] != '-')
    {
        if ($gameTable[0][0] == $gameTable[1][1] && $gameTable[1][1] == $gameTable[2][2])
        {
            $gameWon = true;
        }
    }
    if ($gameTable[0][2] != '-')
    {
        if ($gameTable[0][2] == $gameTable[1][1] && $gameTable[1][1] == $gameTable[2][0])
        {
            $gameWon = true;
        }
    }

    if ($gameWon)
    {
        ?>
        <script>
            document.getElementsByClassName("winStyle")[0].textContent = "You win!";
        </script>
        <?php
    }

    $countO = player_O_CountInTable();
    $countX = player_X_CountInTable();
    if (!$gameWon && $countO + $countX == 9)
    {
        ?>
        <script>
            document.getElementsByClassName("winStyle")[0].textContent = "tie";
        </script>
        <?php
    }
}

if (isset($_GET['move']))
{
    $move = $_GET['move'];
    changeCellContent_OnClick($move);
    getWinner();
}

$gameTable = $_SESSION["gameTable"];
?>

<!DOCTYPE html>
<html>

<head>

    <link href="ticTacToeStyle.css" rel="stylesheet">

</head>

<body>

   <div class="table">

       <a class="cell" href='?move=00'>
           <div class="cell-00">
                <?php echo $gameTable[0][0] ?>
           </div>
       </a>

       <a class="cell" href='?move=01'>
           <div class="cell-01">
               <?php echo $gameTable[0][1] ?>
           </div>
       </a>

       <a class="cell" href='?move=02'>
           <div class="cell-02">
               <?php echo $gameTable[0][2] ?>
           </div>
       </a>

       <a class="cell" href='?move=10'>
           <div class="cell-10">
               <?php echo $gameTable[1][0] ?>
           </div>
       </a>

       <a class="cell" href='?move=11'>
           <div class="cell-11">
               <?php echo $gameTable[1][1] ?>
           </div>
       </a>

       <a class="cell" href='?move=12'>
           <div class="cell-12">
               <?php echo $gameTable[1][2] ?>
           </div>
       </a>

       <a class="cell" href='?move=20'>
           <div class="cell-20">
               <?php echo $gameTable[2][0] ?>
           </div>
       </a>

       <a class="cell" href='?move=21'>
           <div class="cell-21">
               <?php echo $gameTable[2][1] ?>
           </div>
       </a>

       <a class="cell" href='?move=22'>
           <div class="cell-22">
               <?php echo $gameTable[2][2] ?>
           </div>
       </a>

   </div>

    <form action = "exercise-5.php" method = "post">
        <input class="button-24" type = "submit" name = "reset" value = "Reset">
    </form>

</body>
</html>