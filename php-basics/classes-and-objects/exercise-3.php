<?php

class FuelGauge
{
    public $fuelInLiters;

    function __construct($fuelInLiters)
    {
        $this->fuelInLiters = $fuelInLiters;
    }

    function getCurrentAmountOfFuel()
    {
        return $this->fuelInLiters;
    }

    function incrementCurrentAmountOfFuel()
    {
        return $this->fuelInLiters+1;
    }

    function fillCurrentAmountOfFuel(): int
    {
        for ($i = $this->fuelInLiters; $i <= 70; $i++)
        {
            $this->fuelInLiters =+ $i;
        }

        return $this->fuelInLiters;
    }

    function decrementCurrentAmountOfFuel()
    {
        if (!$this->fuelInLiters <= 0)
        {
            return $this->fuelInLiters-=1;
        }
        else
        {
            print_r("out of gas");
        }
    }
}

class Odometer
{
    public $currentMillage;

    function __construct($currentMillage)
    {
        $this->currentMillage = $currentMillage;
    }

    function getCurrentMillage()
    {
        return $this->currentMillage;
    }

    function incrementCurrentMillage()
    {
        if ($this->currentMillage == 999999)
        {
            $this->currentMillage = 0;
        }

        return $this->currentMillage+=1;
    }
}


$fuelGauge = new FuelGauge(1);
$odometer = new Odometer(0);

print_r($fuelGauge->fillCurrentAmountOfFuel());

for ($i = 0; $i < 100; $i++)
{
    if ($fuelGauge->getCurrentAmountOfFuel() == 0)
    {
        print_r($fuelGauge->decrementCurrentAmountOfFuel());
        break;
    }

    $odometer->incrementCurrentMillage();
    $fuelGauge->decrementCurrentAmountOfFuel();
    echo "<br>";
    print_r($fuelGauge->getCurrentAmountOfFuel() . ' current fuel amount');
    echo "<br>";
    print_r($odometer->getCurrentMillage() . ' current millage');
    echo "<br>";
}

