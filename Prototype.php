<?php

class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // Clone method to allow copying of the object
    public function __clone() {
        // You can add additional logic here if needed when cloning
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}

// Usage of Prototype Pattern

// Create an original object
$originalBook = new Book("Design Patterns", "Erich Gamma");

// Clone the object
$clonedBook = clone $originalBook;

// Modify the cloned object
$clonedBook->setTitle("PHP Design Patterns");

echo "Original Book: " . $originalBook->getTitle() . " by " . $originalBook->getAuthor() . "\n";
echo "Cloned Book: " . $clonedBook->getTitle() . " by " . $clonedBook->getAuthor() . "\n";
