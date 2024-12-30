<?php


class Book {
            // TODO: Add properties as Private
        private $title, $availableCopies;
    
        public function __construct($title, $availableCopies) {
            // TODO: Initialize properties
            $this->title = $title;
            $this->availableCopies = $availableCopies;
        }
    
            // TODO: Add getTitle method
        public function getTitle(){
                return $this->title;
        }
            // TODO: Add getAvailableCopies method
        public function getAvailableCopies(){
            return $this->availableCopies;
        }
            
            // TODO: Add borrowBook method
        public function borrowBook(){
                $this->availableCopies --;
        }
        
            // TODO: Add returnBook method
        public function returnBook(){
                $this->availableCopies ++;
        }

   }




   class Member{

            // TODO: Add properties as Private
        private $name;
        
        public function __construct($name) {
            // TODO: Initialize properties
            $this->name = $name;
        }
        
            // TODO: Add getName method
        public function getName(){
            return $this->name;
        }
        
            // TODO: Add borrowBook method
        public function borrowBook($book){
            $book->borrowBook();
        }
           
            // TODO: Add returnBook method
        public function returnBook($book){
            $book->returnBook();
        }
    
   
   }




//Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

//Print Available Copies with their names
$book1_title = $book1->getTitle();
$book1_availableCopies = $book1->getAvailableCopies();
echo "Available Copies of '". $book1_title . "' : ". $book1_availableCopies."<br>";

$book2_title = $book2->getTitle();
$book2_availableCopies = $book2->getAvailableCopies();
echo "Available Copies of  '". $book2_title . "' : ". $book2_availableCopies."<br>";


?>