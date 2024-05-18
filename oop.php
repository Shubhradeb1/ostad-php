<?php

class Book
{
  // TODO: Add properties as Private
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies)
  {
    // TODO: Initialize properties
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }


  // TODO: Add getTitle method
  public function getTitle()
  {
    return $this->title;
  }






  // TODO: Add getAvailableCopies method
  public function getAvailableCopies()
  {
    return $this->availableCopies;
  }



  // TODO: Add borrowBook method
  public function borrowBook()
  {
    if ($this->availableCopies > 0) {
      $this->availableCopies--;
    } else {
      echo "Sorry, '{$this->title}' is not available.\n";
    }
  }



  // TODO: Add returnBook method
  public function returnBook()
  {
    $this->availableCopies++;
    echo "Book '{$this->title}' returned. Thank you!\n";
  }
}



class Member
{
  // TODO: Add properties as Private
  private $name;


  public function __construct($name)
  {
    // TODO: Initialize properties
    $this->name = $name;
  }



  // TODO: Add getName method
  public function getName()
  {
    return $this->name;
  }


  // TODO: Add borrowBook method
  public function borrowBook(Book $book)
  {
    return $book->borrowBook();
  }




  // TODO: Add returnBook method
  public function returnBook(Book $book)
  {
    $book->returnBook();
  }
}

$book1 = new Book("The Great Gatsby", 6);
$book2 = new Book("To Kill a Mockingbird", 4);

// Create 2 members
$member1 = new Member("John Doe");
$member1->borrowBook($book1);
$member2 = new Member("Jane Smith");
$member2->borrowBook($book2);

// Members borrow books
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";