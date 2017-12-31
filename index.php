<?php

class User {
    public $firstName;
    public $lastName;

    public function hello () 
    {
        return 'Heloo' . " ". $this->firstName . " " . $this->lastName;
    }
    public function register() 
    {
        echo "registered ";
        return $this;
    }
    public function mail() 
    {
        echo " emailed ";
        return $this;
    }
}

$user = new User();

$user->firstName = 'John';
$user->lastName = 'Doe';

echo $user->firstName;
echo "<br />";
echo $user->lastName;
echo "<br />";
echo $user->hello();
echo "<br />";

$user2 = new User();
$user2->firstName = "Jane";
$user2->lastName = "Roe";
echo $user2
    ->register()
    ->mail()
    ->hello();
echo "<br />";


class Bill {
    public $dinner = 20;   // example: cost of dinner in a hotel for a each person.
    public $desserts = 5;  //          desserts cost
    public $coldDrink = 3;  //          drink cost 
    public $bill;           //  total price
    
    // calculate the price 

    public function dinner ($person) 
    {
        $this->bill += $this->dinner * $person;
        return $this;   
        /*
        return $this returns the current object, so you can write code like this:
        $object
            ->function1()
            ->function2()
            ->function3()
            ;
            instead of:
            $object->function1();
            $object->function2();
            $object->function3();
        */ 
    }

    public function dessert ($person) 
    {
        $this->bill += $this->desserts * $person;
        return $this;
    }

    public function drink ($person) 
    {
        $this->bill += $this->coldDrink * $person;
        return $this;
    }
     
}

$bill = new Bill();

echo $bill
    ->dinner(2)
    ->dessert(1)
    ->drink(1)
    ->bill;

/*
How to access a private property?
// Getters and Setters (Properties values can be controlled easily 
via help of getters and setters)
*/

class Human {
    private $education;

    public function setEducation($education) 
    {
        $this->education = $education;        
    }
    
    public function getEducation() {
        if ($this->education === 'master ') {
            return $this->education;
        } else {
          return 'egitim gir';      
        }
        // return $this->education;      
    }
}

$erbil = new Human();
$erbil->setEducation('master');
echo $erbil->getEducation();
echo "<br />";
$isimsiz = new Human();
$isimsiz->setEducation(3);
echo $isimsiz->getEducation();

class Employee {
    private $firstName;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }   
}

$ali = new Employee();

$ali->setFirstName('ali');
echo "<br />";
echo $ali->getFirstName();
echo "<br />";

class Manager {
    private $id;

    public function __construct($id = null) {
        $this->id = $id;
    }     
    
    public function getId() {
        return $this->id;
    }
}

$john = new Manager('71717817'); 
// We pass the value of the variable // once we create the object
echo $john->getId();

class Owner {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }

    public function getFullName() 
    {
        return $this->firstName . " " . $this->lastName;
    }
}
echo "<br />";
$owner = new Owner('erbil', 'silik');
echo $owner->getFullName();
echo "<br />";