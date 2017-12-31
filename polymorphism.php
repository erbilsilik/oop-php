<?php

abstract class User {
    private $scores = 0; 
    private $numberOfArticles = 0;

    public function setNumberOfArticles($int) 
    {
        $numberOfArticles = (int)$int;
        $this->numberOfArticles = $numberOfArticles;
    }

    public function getNumberOfArticles()
    {
        return $this->$numberOfArticles;
    }

    abstract public function calcScores();
 }

 class Author extends User {
     
    public function calcScores() 
     {
         return $this->scores = $this->numberOfArticles * 10 + 20;
     }
 }

 class Editor extends User {
    
    public function calcScores() 
    {
        return $this->scores = $this->numberOfArticles * 6 + 15;
    }
}

$author1 = new Author();
$author1->setNumberOfArticles(8); 
echo $author1->calcScores();

$editor1 = new Editor();
$editor1 -> setNumberOfArticles(15); echo $editor1 -> calcScores();
