<?php
class Book {
 // TODO: Add properties as Private
 private $title;
 private $availableCopies;
 
 public function __construct($title, $availableCopies) {

  // TODO: Initialize properties
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }


// TODO: Add getTitle method
 public function getTitle($book){
   $title = $this->title;
   //$availableCopies = $this->getAvailableCopies();
  return "{$book} - Name :'{$title}',".$this->getAvailableCopies();
  
 }
 // TODO: Add getAvailableCopies method
 public function getAvailableCopies(){
    return "Available copies of '{$this->title}' :".$this->availableCopies."\n";
 }



 // TODO: Add borrowBook method
 public function borrowBook(Book $book,$n){
     $title =   $book->title;
     $availableCopies=$book->availableCopies - $n;
     $book->availableCopies=$availableCopies;
    echo "Available copies of '{$title}' : {$availableCopies}"."\n";
 }

 // TODO: Add returnBook method
 public function returnBook(Book $book,$n){
   $title = $book->title;
   $availableCopies = $book->availableCopies +$n;
   $book->availableCopies=$availableCopies;
   return  "Available copies of '{$title}' : {$availableCopies}"."\n";
 }
 
}


class Member extends Book {
 // TODO: Add properties as Private
 private $name;
 public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
     }
 // TODO: Add borrowBook method
  public function borrowBook(Book $book,$n){
   Parent::borrowBook($book,$n);
  }
  // TODO: Add getName method
 public function getName(){
   return $this->name;
}
  }
// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
// TODO: Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book1 = new Book("The Great Gatsby",5);
$book2 = new Book("To Kill a Mockingbird",3);
echo $book1->getTitle('Book 1').' ';
echo $book2->getTitle('Book 2').' ';

$member1 = new Member("John Doe");
$member2 = new Member("Jame Doe");


echo "available copy after borrow....\n";
// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1,1);
$member1->borrowBook($book2,1);

/*echo "available copy after return...\n";
$member1->returnBook($book1,1);
$member1->returnBook($book2,1);
echo $book1->getAvailableCopies();
echo $book2->getAvailableCopies();*/
// TODO: Print Available Copies with their names:


?>


<!-- Output must look like this:
Available Copies of 'The Great Gatsby': 4
Available Copies of 'To Kill a Mockingbird': 2 -->