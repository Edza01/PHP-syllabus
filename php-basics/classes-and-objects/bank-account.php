<?php

class BankAccount {

    public $accName, $accOwnerName, $balance;

    function __construct($accName, $accOwnerName, $balance) {
        $this->accName = $accName;
        $this->accOwnerName = $accOwnerName;
        $this->balance = $balance;
    }

    function show_user_name_and_balance($array) {
        $filtered_arr = array_filter(
                $array,function($arr){
                return $arr->accName == $this->accName;
            }
        );

        foreach ($filtered_arr as $obj) {
            $balance = number_format((float)$obj ->balance, 2, '.', '');
            if ($balance < 0) return null;
            return $obj->accOwnerName . " $" . $balance;
        }
    }
}

$firstAccount = new BankAccount("Jo", "Joe", 1);
$firstAccount2 = new BankAccount("Jddo", "Jadoe", 12);

$array = [];
$array[] = $firstAccount;
$array[] = $firstAccount2;

print_r($firstAccount2->show_user_name_and_balance($array));