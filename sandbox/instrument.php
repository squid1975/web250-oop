<?php

class Instrument {
  // Properties (describe something inside of your class / descriptors)
  var $name;
  var $type;
  var $brand;
  var $price;

  // Constructor: code that is triggered the moment we access this class
  //  public function __construct($name, $type, $brand, $price)
   // {
     // $this->name = $name;
     // $this->type = $type;
     // $this->brand = $brand;
     // $this->price = $price; 
   // }

  // Methods 
  // Kevin uses var
  public function displayDetails()
  {
    echo "Instrument details<br>";
    echo "Name: " . $this->name . "<br>";
    echo "Type: " . $this->type . "<br>";
    echo "Brand: " . $this->brand . "<br>";
    echo "Price: " . $this->price . "<br>";
  }

}

// Instantiate a new instance 
// Create an object 
// $guitar1 = new Instrument("Guitar", "Electric", "Gibson", 400.00);
// $guitar1->displayDetails();
// echo "<br>";
// $guitar2 = new Instrument("Guitar", "Acoustic", "Taylor", 1400.00);
// $guitar2->displayDetails();

$guitar = new Instrument; 

$guitar->name = "Guitar";
$guitar->type = "Acoustic";
$guitar->brand = "Taylor";
$guitar->price = 1400.00;
echo "<br>";
$guitar->displayDetails();

$guitar2 = new Instrument; 

$guitar2->name = "Guitar";
$guitar2->type = "Electric";
$guitar2->brand = "Gibson";
$guitar2->price = 1400.00;
echo "<br>";
$guitar2->displayDetails();