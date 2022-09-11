<?php

class Fruit {
    public $name;
    public $startPrice;
    public $amount;

    function __construct($name, $startPrice, $amount) {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    function get_name() {
        return $this->name;
    }

    function get_startPrice() {
        return $this->startPrice;
    }

    function get_amount() {
        return $this->amount;
    }
}

$apple = new Fruit("Apple", 12, 1);
echo $apple->get_name();
echo "<br>";
echo $apple->get_startPrice();
echo "<br>";
echo $apple->get_amount();