<?php

class Book {
    private $title;
    private $author;
    private $isbn;
    private $isAvailable;

    public function __construct($title, $author, $isbn, $isAvailable = true) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->isAvailable = $isAvailable;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function isAvailable() {
        return $this->isAvailable;
    }

    public function borrow() {
        if (!$this->isAvailable) {
            return "Book '{$this->title}' is not available for borrowing." . "<br>";
        }
        $this->isAvailable = false;
        return "Book '{$this->title}' has been borrowed." . "<br>";
    }

    public function returnBook() {
        if ($this->isAvailable) {
            return "Book '{$this->title}' is already available." . "<br>";
        }
        $this->isAvailable = true;
        return "Book '{$this->title}' has been returned." . "<br>";
    }
}

?>
