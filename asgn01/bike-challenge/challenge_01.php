<?php 
class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  //take brand, model, and year. Put into simple string to output combination name for the bicycle
  function name(){
    return $this->brand . " " . $this->model . " " . $this->year .""; 
  }

  // convert kilograms to pounds
  function weight_lbs(){
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

// create instances
$bicycle1 = new Bicycle;
$bicycle1->brand = 'Mongoose';
$bicycle1->model = 'Tervane';
$bicycle1->year = '2024';
$bicycle1->description ='Lightweight mountain bike';
$bicycle1->weight_kg = 5;

$bicycle2 = new Bicycle;
$bicycle2->brand = 'Aventon';
$bicycle2->model = 'Aventure';
$bicycle2->year = '2024';
$bicycle2->description ='Fat tire electric bicycle';
$bicycle2->weight_kg = 25;

echo "Bike 1 Name: " . $bicycle1->name() . "<br>";
echo "Bike 2 Name: " . $bicycle2->name() . "<br>";

echo "Bike 1 Weight (kg): " . $bicycle1->weight_kg . "<br>";
echo "Bike 1 Weight (approx. lbs): " . round($bicycle1->weight_lbs()) . "<br>";

echo "Bike 2 Weight (kg): ". $bicycle2->weight_kg ."<br>";
echo "Bike 2 Weight (approx. lbs): ". round($bicycle2->weight_lbs()) . "<br>";

$bicycle1->set_weight_lbs(2);
$bicycle2->set_weight_lbs(4);
echo $bicycle1->weight_kg . "<br>";
echo $bicycle2->weight_kg . "<br>";
?>