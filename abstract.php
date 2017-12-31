<?php 

abstract class User {
    protected $username;
    abstract public function stateYourRole();

    public function setUsername($username) 
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

class Admin extends User {
    public function stateYourRole() 
    {
        return strtolower(__CLASS__);
    }
}

class Viewer extends User {
    public function stateYourRole() 
    {
        return strtolower(__CLASS__); }
    }

$admin = new Admin();
$admin->setUsername('Balthazar');
echo $admin->stateYourRole();