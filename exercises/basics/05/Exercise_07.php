<?php

##### Exercise 7**

##### Imagine you own a gun store. Only certain guns can be purchased with license types.
# Create an object (person) that will be the requester to purchase a gun (object) Person object has a name,
# valid licenses (multiple) & cash. Guns are objects stored within an array. Each gun has license letter, price & name.
# Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

class Person
{
    private $first_name;
    private $last_name;
    private $age;
    private $license;
    private $cash;

    public function __construct($first_name, $last_name, $age, $license, $cash)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->license = $license;
        $this->cash = $cash;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function getCash()
    {
        return $this->cash;
    }
}

$objPerson1 = new Person('Bob', 'Smith', 30, 123, 500);
$objPerson2 = new Person('Bill', 'Hill', 50, 1232, 5002);

class Gun
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getGunName()
    {
        return $this->name;
    }

    public function getGunPRice()
    {
        return $this->price;
    }
}

$objGun1 = new Gun('gun123', 10);


$cart = array();
$cart[] = $objPerson1;
$cart[] = $objPerson2;

function canPersonBuyGun($PersonArray, $gun)
{
    foreach ($PersonArray as $person)
    {
        if ($person->getAge() >= 18 && strlen($person->getLicense()) > 0 && $person->getCash() >= $gun->getGunPRice())
        {
            print_r($person->getFirstName(). " can buy " . $gun->getGunName());
            echo "<br>";
        }
    }
}

print_r(canPersonBuyGun($cart, $objGun1));