<?php 


class Bicycle {

  public static $instanceCount = 0;

  public $brand;
  public $model;
  public $year;
  public $category; //each instance will have its own category
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected static $wheels = 2;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public static function create(){
    $className = get_called_class();
    $newInstance = new $className;
    self::$instanceCount++;
    return $newInstance;
  }

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details() {
    $wheel_string = static::$wheels == 1 ? "1 Wheel" : static::$wheels . "wheels";
    return "It has " . $wheel_string . ".";
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }
  
  public function weight_kg(){
    return $this->weight_kg . 'kg';
  }
  
  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  
  public function weight_lbs() {
    $weight_lbs = $this->weight_kg * 2.2046226218;
    return $weight_lbs . ' lbs';
  }
  
}

class Unicycle extends Bicycle {
    protected static $wheels = 1;
  }

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

echo 'Bicycle count: ' . Bicycle::$instanceCount . '<br>';
echo 'Unicycle count: ' . Unicycle::$instanceCount . '<br>';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . Bicycle::$instanceCount . '<br>';
echo 'Unicycle count: ' . Unicycle::$instanceCount . '<br>';

echo"<hr>";
echo 'Categories: ' . implode(',', Bicycle::CATEGORIES) . '<br>';
$trek->category = Bicycle::CATEGORIES[0];  // assign value at index 0 to $trek instance 'category'
echo 'Category: ' . $trek->category . '<br>';

echo "<hr>";
echo "Bicycle: " . $trek->wheel_details() . "<br>";
echo "Unicycle: " . $uni->wheel_details() . "<br>";
echo "<hr>";

echo "Bicycle Set weight using kg<br>";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Bicycle set weight using lbs<br>";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br>";
echo $trek->weight_lbs() . "<br>";
echo "<hr>";

echo "Set weight for Unicycle<br>";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br>";
echo $uni->weight_lbs() . "<br>";


?>