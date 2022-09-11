<?php

class Drinks
{
    public $surveyed, $purchased_energy_drinks, $prefer_citrus_drinks;

    public function __construct($surveyed, $purchased_energy_drinks, $prefer_citrus_drinks)
    {
        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    function calculate_energy_drinkers()
    {
        return $this->surveyed * $this->purchased_energy_drinks;
    }

    function calculate_prefer_citrus()
    {
        return $this->surveyed * $this->prefer_citrus_drinks;
    }
}

$drinks = new Drinks(12467, 0.14,0.64);

print_r($drinks->calculate_energy_drinkers());
echo '<br>';
print_r($drinks->calculate_prefer_citrus());

/*
fixme
echo "Total number of people surveyed " . $surveyed;
echo "Approximately " . ? . " bought at least one energy drink";
echo ? . " of those " . "prefer citrus flavored energy drinks.";
*/