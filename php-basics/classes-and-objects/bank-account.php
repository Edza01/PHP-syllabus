<?php

class BankAccount {

    public $accName, $accOwnerName, $balance;

    function __construct($accName, $accOwnerName, $balance) {
        $this->accName = $accName;
        $this->accOwnerName = $accOwnerName;
        $this->balance = $balance;
    }

    function show_user_name_and_balance($array, $accName, $balance) {



    }

}

$firstAccount = new BankAccount("Jo", "Joe", 1);

print_r($firstAccount);