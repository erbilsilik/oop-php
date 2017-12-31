<?php

class User {
    protected $username;

    public function setUserName($username) 
    {
        $this->username = $username;
    }

}

class Admin extends User {
    public function expressYourRole ()
    {
        return strtolower(__CLASS__);
    }
    public function sayHello() 
    {
        return "Hello, admin" . " " . $this->username;
    }
}

$admin1 = new Admin(); 

$admin1->setUserName("Balthazar");
echo $admin1->sayHello();