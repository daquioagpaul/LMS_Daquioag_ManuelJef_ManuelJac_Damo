<?php
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $isbn = $book->getISBN();
        if (isset($this->books[$isbn])) {
            return "Book with ISBN '{$isbn}' already exists in the library.";
        }
        $this->books[$isbn] = $book;
        return "Book '{$book->getTitle()}' has been added to the library.";
    }

    public function borrowBook($isbn) {
        if (!isset($this->books[$isbn])) {
            return "Book with ISBN '{$isbn}' not found in the library.";
        }
        return $this->books[$isbn]->borrow();
    }

    public function returnBook($isbn) {
        if (!isset($this->books[$isbn])) {
            return "Book with ISBN '{$isbn}' not found in the library.";
        }
        return $this->books[$isbn]->returnBook();
    }

    public function getAvailableBooks() {
        $availableBooks = [];
        foreach ($this->books as $book) {
            if ($book->isAvailable()) {
                $availableBooks[] = $book;
            }
        }
        return $availableBooks;
    }
}
?>