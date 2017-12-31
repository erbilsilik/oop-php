<?php

function calcNumMilesOnFullTank(array $models)
{
    foreach($models as $item)
    {
        echo $carModel = $item[0];
        echo " : ";
        echo $numberOfMiles = $item[1] * $item[2]; 
        echo "<br />";
    }
}

$models = array(array('Toyota', 12, 44), array('BMW', 13, 41));

calcNumMilesOnFullTank($models);

class Car {
    protected $driver;
        // The constructor can only get Driver objects as arguments.
    public function __construct(Driver $driver) 
    {
        $this->driver = $driver;
    }
}

class Driver{}

$driver1 = new Driver();
$car1 = new Car($driver1);

class car {
    protected $model;
    protected $hasSunRoof; 
    protected $numberOfDoors; 
    protected $price;

    public function setModel(string $model) 
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setHasSunRoof(bool $hasSunRoof)
    {
        $this->hasSunRoof = $hasSunRoof;
    }

    public function getHasSunRoof()
    {
        return $this->hasSunRoof;
    }

    public function setNumberOfDoors(int $numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}