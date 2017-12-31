<?php

class User {
    protected $username;
    public function setUsername($name) 
    {
        $this->username = $name;
    }
    
    public function getUsername() 
    {
        return $this->username; }
    }

interface Author {
    public function setAuthorPrivileges($array);
    public function getAuthorPrivileges(); 
}

interface Editor {
    public function setEditorPrivileges($array); public function getEditorPrivileges();
}

class AuthorEditor extends User implements Author, Editor { 
    private $authorPrivilegesArray = array();
    private $editorPrivilegesArray = array();
    
    public function setAuthorPrivileges($array) 
    {
        $this->authorPrivilegesArray = $array;
    }

    public function getAuthorPrivileges() 
    {
        return $this->authorPrivilegesArray; 
    }

    public function setEditorPrivileges($array) 
    {
        $this->editorPrivilegesArray = $array;
    }

    public function getEditorPrivileges() 
    {
        return $this -> editorPrivilegesArray; 
    }
}

$user1 = new AuthorEditor(); $user1->setUsername("Balthazar");

$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1 -> setAuthorPrivileges(array("write text","add punctuation"));

$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1->setAuthorPrivileges(array("write text", "add punctuation")); $user1->setEditorPrivileges(array("edit text", "edit punctuation"));

$userName  = $user1->getUsername();
$userPrivileges = array_merge($user1->getAuthorPrivileges(),
    $user1->getEditorPrivileges());
echo $userName . " has the following privileges: "; 
foreach($userPrivileges as $privilege)
    {echo " {$privilege},"; }
echo ".";



