<?php
//  In this example we have a SimpleBook class that has a getAuthor() and getTitle() methods.
//  The client, expects a getAuthorAndTitle() method. To "adapt" SimpleBook for testAdapter we have an adapter class,
//   BookAdapter, which takes in an instance of SimpleBook,
//    and uses the SimpleBook getAuthor() and getTitle() methods in it's own getAuthorAndTitle() method. 


class SimpleBook
{
    private $author;
    private $title;
    function __construct($author, $title) {
        $this->author = $author;
        $this->title  = $title;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}

class BookAdapter 
{
    private $book;
    function __construct(SimpleBook $book) {
        $this->book = $book;
    }
    function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();  //adapted for my requirement
    }
}




echo'BEGIN TESTING ADAPTER PATTERN ' ,PHP_EOL;


$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();
echo PHP_EOL;

echo 'END TESTING ADAPTER PATTERN';

