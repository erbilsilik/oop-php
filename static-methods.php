<?php

class Utilis {
    static public $numCars = 0;
    static public function addToNumCars($int) 
    {
        $int = (int)$int;
        self::$numCars += $int;
    }
}

echo Utilis::$numCars; 
echo "<br />";
Utilis::addToNumCars(3);
echo Utilis::$numCars;
echo "<br />";
Utilis::addToNumCars(-1); 
echo Utilis::$numCars;
    
