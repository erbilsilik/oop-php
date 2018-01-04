<?php 
/*
When class A cannot do its job without class B, we say that class A is dependent on class B.
In order to perform this dependency, many programmers create the object from class B in the constructor 
of class A. 
*/

class HumanDriver {
    public function sayYourName($name) 
    {
        return $name;
    }
}

class RobotDriver {
    public function sayYourName($name) 
    {
        return $name; 
    }
}
    
class Car {
    protected $driver;

    // public function __construct()
    public function __construct($driver)
    {
        // $this->driver = new HumanDriver(); tight coupling, violates single responsibility principle
        $this->driver = $driver;
    }

    public function getDriver() 
    {
        return $this->driver;
    }
}

$humanDriver = new HumanDriver();
$car = new Car($humanDriver);
echo $car -> getDriver() -> sayYourName("Bob");
echo "<br />";
$robotDriver = new RobotDriver();
$car = new Car($robotDriver);
echo $car -> getDriver() -> sayYourName("R2-D2");


class Article {
    protected $title;
    protected $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

class Author {
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
echo "<br />";

$author1 = new Author();
$author1->setName('Joe');
$title = "To PHP and Beyond";
$article1 = new Article($title, $author1);

echo $article1->getTitle() . ' by ' . $article1->getAuthor()->getName();