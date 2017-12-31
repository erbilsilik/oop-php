<?php

interface User {
}

class Author implements User {
    use Writing;
    
    public function writeContent() 
    {
        return "Author, please start typing an article...";
    }
}

class Commentator implements User {
    use Writing;

    public function writeContent() 
    {
        return "Commentator, please start typing an article..."; 
    }
}

class Viewer implements User {
    
}

trait Writing {

    abstract public function writeContent();
}

$author1 = new Author();
echo $author1 -> writeContent();

$commentator1 = new Commentator();
echo $commentator1 -> writeContent();