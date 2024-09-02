<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details() {
    if($this->wheels == 1){
      return "It only has one wheel.";
    } else {
      return "It has $this->wheels wheels.";
    }
  }

  public function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->weight_kg = 1.0;

$cd = new Bicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->year = '2016';
$cd->weight_kg = 8.0;

echo $trek->name() . "<br />";
echo $cd->name() . "<br />";

echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";
// notice that one is property, one is a method

$trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";

?>
