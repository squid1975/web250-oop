<?php 
class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  //take brand, model, and year. Put into simple string to output combination name for the bicycle
  function name(){
    return $this->brand . " " . $this->model . " { " . $this->year ."}"; 
  }

  // convert kilograms to pounds
  function weight_lbs(){
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

$bicycle1->brand = 'Mongoose';
$bicycle1->model = 'Tervane';
$bicycle1->year = '2024';
$bicycle1->description ='Lightweight mountain bike';
$bicycle1->weight_kg = 5;

$bicycle2->brand = 'Aventon';
$bicycle2->model = 'Aventure';
$bicycle2->year = '2024';
$bicycle2->description ='Fat tire electric bicycle';
$bicycle2->weight_kg = 25;
?>