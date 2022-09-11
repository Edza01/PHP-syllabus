<?php

class Dog
{
    public $name, $sex ,$mom, $dad;

    public function __construct($name, $sex, $mom, $dad)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mom = $mom;
        $this->dad = $dad;
    }

    function dadName()
    {
        if (!$this->dad == null)
        {
            return $this->dad;
        }
        else
        {
            return 'Unknown';
        }
    }

    function hasSameMotherAsDog(Dog $otherDog)
    {
        if ($this->mom == $otherDog->mom)
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }
}

class DogTest
{
    public $name, $sex;

    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    function createDog()
    {
        return "$this->name, $this->sex";
    }
}

$dogTest1 = new DogTest("max", "male");
$dog1 = new Dog($dogTest1->name, $dogTest1->sex, 'lady', 'rocky');

$dogTest2 = new DogTest("max", "male");
$dog2 = new Dog($dogTest2->name, $dogTest2->sex, 'lady', 'rocky');

print_r($dog1->hasSameMotherAsDog($dog2));
