<?php

class Points {
    public $point1, $point2;

    function __construct($point1, $point2) {
        $this->point1 = $point1;
        $this->point2 = $point2;
    }

    function swapPoints()
    {
        $tempVal = $this->point1;
        $this->point1 = '';
        $this->point1 = $this->point2;
        $this->point2 = $tempVal;

        return "$this->point1 . $this->point2";
    }
}

$points = new Points(1, 2);

print_r($points->swapPoints());