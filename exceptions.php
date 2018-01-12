<?php 

class FuelEconomy{

    public function calculate($distance, $gas)
    {
        if ($gas <= 0) {
            throw new Exception ("The gas consumption cannot be less than
            or equal to zero. You better drink coffee or take a break.");
        }
        return $distance/$gas;
    }
}

$dataFromCars = array(
    array(50,10),
    array(50,0),
    array(30,-3),
    array(30,5)
);

foreach($dataFromCars as $data => $value)
{
    try 
    {
        $fuelEconomy = new FuelEconomy;
        echo $fuelEconomy->calculate($value[0],$value[1]) . "<br />";
    }
    catch (Exception $e)
    {
        echo "Message: " . $e->getMessage() . "<br/>";
                // Output the path to the file
        echo "File: " . $e -> getFile() . "<br />";
        // Output the line in the code
        echo "Line: " . $e -> getLine() . "<br />"; echo "<hr />";

        // Write the error into a log file
        error_log($e->getMessage());
        error_log($e->getFile());
        error_log($e->getLine());
    }
}

class User {
    private $name;
    private $age;

    public function setName($name) 
    {
        $name = trim($name);

        if (strlen($name) < 3 ){
            throw new Exception ("The name should be at least 3 characters long."); 
        }
        $this->name = $name;
    }

    public function setAge($age) 
    {
        $age = (int)$age;
        if($age < 1) {
            throw new Exception("The age cannot be zero or less."); }
        
        $this -> age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$dataForUsers = array(
    array("Benaa",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5),
);

foreach($dataForUsers as $data => $value) {

    try {
    $user = new User();
    $user -> setName($value[0]);
    $user -> setAge($value[1]);
    echo $user -> getName() . " is " . $user -> getAge() . " years old. <br \>";
    }

    catch (Exception $e) {
        echo "Error: " . $e -> getMessage() . " in the file: " . $e -> getFile() . " on line: " . $e -> getLine() . "<hr />";
    }
}