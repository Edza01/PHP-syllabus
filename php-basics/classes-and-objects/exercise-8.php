<?php

class SavingsAccount
{
    public $startingBalance;

    function __construct($startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }

    function withdrawal($amount)
    {
        return $this->startingBalance -= $amount;
    }

    function deposit($amount)
    {
        return $this->startingBalance += $amount;
    }

    function monthlyInterest($amount)
    {
       return $this->startingBalance += ($this->startingBalance *= ($amount / 12));
    }

}

$acc = new SavingsAccount(100);
print_r($acc->deposit(5) . '<br>');
print_r($acc->withdrawal(5). '<br>');
print_r($acc->monthlyInterest(15). '<br>');

