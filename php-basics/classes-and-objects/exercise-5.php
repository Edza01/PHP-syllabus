<?php

class Date
{
    public $month, $day, $year;

    public function __construct($month, $day, $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

     function DisplayDate()
     {
         return "$this->day/$this->month/$this->year";
     }
}

$date = new Date(12, 12, 1000);

print_r($date->DisplayDate());