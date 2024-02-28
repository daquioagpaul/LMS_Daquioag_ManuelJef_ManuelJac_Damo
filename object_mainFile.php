<?php
// Example usage:
$library = new Library();

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "9781234567890");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", "9780987654321");
$book3 = new Book("1984", "George Orwell", "9780451524935");

echo $library->addBook($book1) . "\n";
echo $library->addBook($book2) . "\n";
echo $library->addBook($book3) . "\n";

echo $library->borrowBook("9781234567890") . "\n";
echo $library->borrowBook("9781234567890") . "\n"; // Trying to borrow the same book again
echo $library->returnBook("9781234567890") . "\n";

$availableBooks = $library->getAvailableBooks();
echo "Available books:\n";
foreach ($availableBooks as $book) {
    echo $book->getTitle() . "\n";
}
?>