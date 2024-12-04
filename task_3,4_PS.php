<?php

/// 1
// class Author {
//     private $name;
//     private $email;
//     private $gender;
//     function __construct($name,$gender,$email) {
//         $this->name=$name;
//         $this->gender=$gender;
//         $this->email=$email;
//     }

//     function getName(){
//         return $this->name;
//     }
//     function getgender(){
//         return $this->gender;
//     }

//     function getEmail(){
//         return $this->email;
//     }
    
//     function setEmail($author_email){
//         $this->email=$author_email;
//     }
    
//     function Tostring() {
//         echo "Name of author: ".$this->name."\n";
//         echo "gender of author: ".$this->gender."\n";
//         echo "Email of author: ".$this->email."\n";
//     }
// }
// $testAuthor= new Author("karas","male","karasa@example.com");
// $testAuthor->Tostring();



/// 2
// class Author {
//     private $name;
//     private $email;
//     private $gender;

//     function __construct($name, $gender, $email) {
//         $this->name = $name;
//         $this->gender = $gender;
//         $this->email = $email;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getGender() {
//         return $this->gender;
//     }

//     function getEmail() {
//         return $this->email;
//     }
// }

// class Book extends Author {
//     private $bookName;
//     private $price;
//     private $qty;

//     function __construct($name, $gender, $email, $bookName, $price, $qty) {
//         parent::__construct($name, $gender, $email);
//         $this->bookName = $bookName;
//         $this->price = $price;
//         $this->qty = $qty;
//     }

//     function getBookName() {
//         return $this->bookName;
//     }

//     function getPrice() {
//         return $this->price;
//     }

//     function setPrice($book_price) {
//         $this->price = $book_price;
//     }

//     function getQty() {
//         return $this->qty;
//     }

//     function setQty($book_qty) {
//         $this->qty = $book_qty;
//     }

//     function ToString() {
//         echo "Name of author: " . $this->getName() . "\n";
//         echo "E-mail of author: " . $this->getEmail() . "\n";
//         echo "Gender of author: " . $this->getGender() . "\n";
//         echo "Name of book: " . $this->bookName . "\n";
//         echo "Price of book: " . $this->price . "\n";
//         echo "Quantity of book: " . $this->qty . "\n";
//     }
// }

// $reusAuthor = new Book("The Blue Elephant", "Ahmed Morad", "Male", "ahmedmorad@example.com", "200 L.E", 70);
// $reusAuthor->ToString();
// $reusAuthor->setQty(30);
// echo "update Qty: ".$book->getQty();



/// 3
// class Author {
//     private $name;
//     private $email;
//     private $gender;

//     function __construct($name, $email, $gender) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->gender = $gender;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getGender() {
//         return $this->gender;
//     }

//     function getEmail() {
//         return $this->email;
//     }
// }

// class Book extends Author {
//     private $author1;
//     private $author2;
//     private $bookName;
//     private $price;
//     private $qty;

//     function __construct($author1, $author2, $name, $email, $gender, $bookName, $price, $qty) {
//         parent::__construct($name, $email, $gender);
//         $this->author1 = $author1;
//         $this->author2 = $author2;
//         $this->bookName = $bookName;
//         $this->price = $price;
//         $this->qty = $qty;
//     }

//     function getAuthor1() {
//         return $this->author1;
//     }

//     function getAuthor2() {
//         return $this->author2;
//     }

//     function getBookName() {
//         return $this->bookName;
//     }

//     function getPrice() {
//         return $this->price;
//     }

//     function setPrice($book_price) {
//         $this->price = $book_price;
//     }

//     function getQty() {
//         return $this->qty;
//     }

//     function setQty($book_qty) {
//         $this->qty = $book_qty;
//     }

//     function ToString() {
//         return "Name of author_1: " . $this->author1 . "\n" .
//                "Name of author_2: " . $this->author2 . "\n" .
//                "E-mail of author: " . $this->getEmail() . "\n" .
//                "Gender of author: " . $this->getGender() . "\n" .
//                "Name of book: " . $this->bookName . "\n" .
//                "Price of book: " . $this->price . "\n" .
//                "Quantity of book: " . $this->qty . "\n";
//     }
// }

// $reusAuthor = new Book("Neil Gaiman", "Terry Pratchett", "Good Omens", "TerryPratchett@example.com", "Male", "400 L.E", 70);
// $reusAuthor->ToString(); // why give me error...?



/// 4
// class Author {
//     private $name;
//     private $email;
//     function __construct($name,$email) {
//         $this->name=$name;
//         $this->email=$email;
//     }
//     function getName(){
//     return $this->name;
//     }

//     function getEmail(){
//         return $this->email;
//     }
    
//     function setEmail($author_email){
//         $this->email=$author_email;
//     }
    
//     function Tostring() {
//         echo "Name of author: ".$this->name."\n";
//         echo "Email of author: ".$this->email."\n";
//     }
// }
// class Book extends Author{
//     private $isbn;
//     private $name;
//     private $author;
//     private $price;
//     private $qty;
//     function __construct($isbn,$name,$author,$price,$qty) {
//         parent::__construct($name,$author,$price,$qty);
//         $this->isbn=$isbn;
//         $this->name=$name;
//         $this->author=$author;
//         $this->price=$price;
//         $this->qty=$qty;
//     }
//     function getIsbn(){
//         return $this->isbn;
//     }
//     function getName(){
//         return $this->name;
//     }
//     function getAuthor(){
//         return $this->author;
//     }

//     function getPrice(){
//         return $this->price;
//     }
    
//     function setPrice($book_price){
//         $this->price=$book_price;
//     }

//     function getQty(){
//         return $this->qty;
//     }
    
//     function setQty($book_qty){
//         $this->price=$book_qty;
//     }
    
//     function Tostring() {
//         echo "ISBN of book: ".$this->isbn."\n";
//         echo "Name of book: ".$this->name."\n";
//         echo "Author of book: ".$this->author."\n";
//         echo "Price of book: ".$this->price."\n";
//         echo "Qty of book: ".$this->qty."\n";
//     }
// }

// $Author= new Author("Ahmed morad","ahmedmorad@example.com");
// $reusAuthor= new book("978-074753","the blue elephant","Ahmed morad","200 L.E",70);
// $Author->Tostring();
// print("*******************"."\n");
// $reusAuthor->Tostring();



/// 5
// class Circle {
//     private $radius;
//     private $color;
//     const pi=3.14;
//     function __construct($radius,$color) {
//         $this->radius = $radius;
//         $this->color = $color;
//     }

//     function getRadius() {
//         return $this->radius;
//     }

//     function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function getArea() {
//         return self::pi * $this->radius * $this->radius;
//     }
// }

// class Cylinder extends Circle {
//     private $radius;
//     private $color;
//     private $height;

//     function __construct($radius, $color, $height) {
//         $this->radius = $radius;
//         $this->color = $color;
//         $this->height = $height;
//     }

//     function getHeight() {
//         return $this->height;
//     }

//     function setHeight($height) {
//         $this->height = $height;
//     }

//     function getVolume(){
//         return self::pi * $this->radius * $this->radius * $this->height;
//     }
// }

// $circle = new Circle(5, "blue");
// echo "Circle Area: " . $circle->getArea() . "\n";

// $cylinder = new Cylinder(5, "green", 10);
// echo "Cylinder Volume: " . $cylinder->getVolume() . "\n";



////////task 4
//// 6 
// abstract class Person {
//     private $name;
//     private $address;

//     function __construct($name, $address) {
//         $this->name = $name;
//         $this->address = $address;
//     }
//     function getName() {
//         return $this->name;
//     }
//     function getAddress() {
//         return $this->address;
//     }
//     function setAddress($p_address){
//         $this->address=$p_address;
//     }
//     abstract function toString();
// }

// class Student extends Person {
//     private $program;
//     private $year;
//     private $fee;

//     function __construct($name, $address, $program, $year, $fee) {
//         parent::__construct($name, $address);
//         $this->program = $program;
//         $this->year = $year;
//         $this->fee = $fee;
//     }
//     function setProgram($program) {
//         $this->program = $program;
//     }

//     function getProgram() {
//         return $this->program;
//     }

//     function setYear($year) {
//         $this->year = $year;
//     }

//     function getYear() {
//         return $this->year;
//     }

//     function setFee($fee) {
//         $this->fee = $fee;
//     }

//     function getFee() {
//         return $this->fee;
//     }

//     function toString() {
//         return "Student[name=" . $this->getName() . ", address=" . $this->getAddress() .
//                ", program=" . $this->program . ", year=" . $this->year . ", fee=" . $this->fee . "]";
//     }
// }

// class Staff extends Person {
//     private $school;
//     private $pay;

//     function __construct($name, $address, $school, $pay) {
//         parent::__construct($name, $address);
//         $this->school = $school;
//         $this->pay = $pay;
//     }
//     function setSchool($school) {
//         $this->school = $school;
//     }

//     function getSchool() {
//         return $this->school;
//     }

//     function setPay($pay) {
//         $this->pay = $pay;
//     }

//     function getPay() {
//         return $this->pay;
//     }

//     function toString() {
//         return "Staff[name=" . $this->getName() . ", address=" . $this->getAddress() .
//                ", school=" . $this->school . ", pay=" . $this->pay . "]";
//     }
// }

// $student = new Student("Kevin", "E40", "CS", 2023, 20000);
// echo $student->toString(). "\n";

// $staff = new Staff("Oscar", "P45", "IT Department", 50000);
// echo $staff->toString();



/// 7
// why give me error
// interface Shape {
//     function getColor();
//     function setColor($color);
//     function setFilled($filled);
// }

// class Circle implements Shape {
//     private $radius;
//     private $color;
//     private $filled;
//     const PI = 3.14;

//     function __construct($radius, $color, $filled) {
//         $this->radius = $radius;
//         $this->color = $color;
//         $this->filled = $filled;
//     }

//     function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function setFilled($filled) {
//         $this->filled = $filled;
//     }

//     function getRadius() {
//         return $this->radius;
//     }

//     function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     function getArea() {
//         return self::PI * $this->radius * $this->radius;
//     }

//     function getPerimeter() {
//         return 2 * self::PI * $this->radius;
//     }

//     function toString() {
//         echo "color of Circle: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//         echo "radius: ".$this->radius;
//     }
// }

// class Rectangle implements Shape {
//     protected $width;
//     protected $length;
//     private $color;
//     private $filled;

//     function __construct($width, $length, $color, $filled) {
//         $this->width = $width;
//         $this->length = $length;
//         $this->color = $color;
//         $this->filled = $filled;
//     }

//     function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function setFilled($filled) {
//         $this->filled = $filled;
//     }

//     function getWidth() {
//         return $this->width;
//     }

//     function setWidth($width) {
//         $this->width = $width;
//     }

//     function getLength() {
//         return $this->length;
//     }

//     function setLength($length) {
//         $this->length = $length;
//     }

//     function getArea() {
//         return $this->width * $this->length;
//     }

//     function getPerimeter() {
//         return 2 * ($this->width + $this->length);
//     }

//     function toString() {
//         echo "color of rectangle: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//         echo "Width: ".$this->width;
//         echo "Length: ".$this->length;
//     }
// }

// class Square extends Rectangle {

//     function __construct($side, $color, $filled) {
//         parent::__construct($side, $side, $color, $filled);
//     }

//     function getSide() {
//         return $this->width;
//     }

//     function setSide($side) {
//         $this->width = $side;
//         $this->length = $side;
//     }

//     function toString() {
//                 echo "color of square: ".$this->color."\n";
//                 echo "Filled: ".$this->filled ."\n";
//                 echo "Side: ".$this->width;
//             }
// }
// $s = new Square(8, "green", "true");
// $s->toString();



/// 8
// interface Animal{
//     function printName();
//     function printSound();
// }
// interface Mammal{
//     function type();  
// }

// class Dog implements Animal {
    
//     function printName(){
//         echo "dog";
//     }

//     function printSound() {
//         echo "woof";
//     }
// }
// class Cat implements Animal {
    
//     function printName(){
//         echo "cat";
//     }

//     function printSound() {
//         echo "Meow";
//     }
// }

// $t= new Cat();
// echo $t->printName()."\n";
// echo $t->printSound()."\n";

// $t= new Dog();
// echo $t->printName()."\n";
// echo $t->printSound();



/// 9
// abstract class Shape {
//     private $color;
//     private $filled;

//     function __construct($color, $filled) {
//         $this->color = $color;
//         $this->filled = $filled;
//     }

//     function getColor() {
//         return $this->color;
//     }

//     function setColor($color) {
//         $this->color = $color;
//     }

//     function isFilled() {
//         return $this->filled;
//     }

//     function setFilled($filled) {
//         $this->filled = $filled;
//     }

//     abstract function getArea();
//     abstract function getPerimeter();
    
//     function toString() {
//         echo "color of shape: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//     }
// }

// class Circle extends Shape {
//     private $radius;
//     const PI = 3.14;

//     function __construct($radius, $color, $filled) {
//         parent::__construct($color, $filled);
//         $this->radius = $radius;
//     }

//     function getRadius() {
//         return $this->radius;
//     }

//     function setRadius($radius) {
//         $this->radius = $radius;
//     }

//     function getArea() {
//         return self::PI * $this->radius * $this->radius;
//     }

//     function getPerimeter() {
//         return 2 * self::PI * $this->radius;
//     }

//     function toString() {
//         echo "color of circle: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//         echo "radius: ".$this->radius."\n";
//     }
// }

// class Rectangle extends Shape {
//     private $width;
//     private $length;

//     function __construct($width, $length, $color, $filled) {
//         parent::__construct($color, $filled);
//         $this->width = $width;
//         $this->length = $length;
//     }

//     function getWidth() {
//         return $this->width;
//     }

//     function setWidth($width) {
//         $this->width = $width;
//     }

//     function getLength() {
//         return $this->length;
//     }

//     function setLength($length) {
//         $this->length = $length;
//     }

//     function getArea() {
//         return $this->width * $this->length;
//     }

//     function getPerimeter() {
//         return 2 * ($this->width + $this->length);
//     }

//     function toString() {
//         echo "color of rectangle: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//         echo "width: ".$this->width."\n";
//         echo "length: ".$this->length."\n";
//     }
// }

// class Square extends Rectangle {

//     function __construct($side, $color, $filled) {
//         parent::__construct($side, $side, $color, $filled);
//     }

//     function getSide() {
//         return $this->side;
//     }

//     function setSide($side) {
//         $this->width = $side;
//         $this->length = $side;
//     }

//     function toString() {
//         echo "color of square: ".$this->color."\n";
//         echo "Filled: ".$this->filled ."\n";
//         echo "Side: ".$this->width;
//     }
// }

// $s = new Square(8, "green", "true");
// $s->toString();
// print("\n"."**********************"."\n");

// $r = new Rectangle(13,10, "blue", "false");
// $r->toString();
// print("**********************"."\n");

// $c = new Circle(4, "white", "true");
// $c->toString();

?>