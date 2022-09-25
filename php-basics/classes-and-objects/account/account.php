<html lang="en">
    <head>
        <link rel="stylesheet" href="/php-basics/classes-and-objects/account/style.css">
    </head>
    <body>
    </body>
</html>

<?php

class Account {

    public $name, $balance;

    function __construct($name, $balance) {
        $this->name = $name;
        $this->balance = $balance;
    }

    function withdraw($amount)
    {
        if (!$this->balance < $amount)
        {
            $this->balance -= $amount;
        }
    }

    function deposit($amount)
    {
        $this->balance += $amount;
    }

    function transfer(Account $from, Account $to, int $howMuch)
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }
}

$firstAcc = new Account("name1", 10);
$secondAcc = new Account("name2", 20);

$firstAcc->withdraw(5);
print_r($firstAcc);
echo "<br>";

$firstAcc->deposit(15);
print_r($firstAcc);
echo "<br>";

$firstAcc->transfer($firstAcc, $secondAcc, 10);
print_r($secondAcc);