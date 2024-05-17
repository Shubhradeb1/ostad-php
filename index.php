<?php
class Book
{
  private $title;
  private $availableCopies;

  public function __construct($title, $initialCopies)
  {
    $this->title = $title;
    $this->availableCopies = $initialCopies;
  }

  public function borrowBook()
  {
    if ($this->availableCopies > 0) {
      $this->availableCopies--;
      echo "Book '{$this->title}' borrowed successfully.\n";
    } else {
      echo "Sorry, '{$this->title}' is not available for borrowing.\n";
    }
  }

  public function returnBook()
  {
    $this->availableCopies++;
    echo "Book '{$this->title}' returned. Thank you!\n";
  }
}

class Member
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

// Example usage
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

//$member = new Member("John Doe");

// $book1->borrowBook();
// $book1->returnBook();

// $book2->borrowBook();
// $book2->borrowBook();
// $book2->returnBook();

// echo "Member name: " . $member->getName() . "\n";
?>