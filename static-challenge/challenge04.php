<?php 


class Bicycle {

  public static $instanceCount = 0;

  public $brand;
  public $model;
  public $year;
  public $category; //each instance will have its own category
  public $description = 'Used bicycle';
  private $weightKg = 0.0;
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

  public function wheelDetails() {
    $wheelString = static::$wheels == 1 ? "1 Wheel" : static::$wheels . "wheels";
    return "It has " . $wheelString . ".";
  }

  public function setWeightKg($value) {
    $this->weightKg = floatval($value);
  }
  
  public function weightKg(){
    return $this->weightKg . 'kg';
  }
  
  public function setWeightLbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }

  
  public function weightLbs() {
    $weightLbs = $this->weightKg * 2.2046226218;
    return $weightLbs . ' lbs';
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
echo "Bicycle: " . $trek->wheelDetails() . "<br>";
echo "Unicycle: " . $uni->wheelDetails() . "<br>";
echo "<hr>";

echo "Bicycle Set weight using kg<br>";
$trek->setWeightKg(1);
echo $trek->weightKg() . "<br>";
echo $trek->weightLbs() . "<br>";
echo "<hr>";

echo "Bicycle set weight using lbs<br>";
$trek->setWeightLbs(2);
echo $trek->weightKg() . "<br>";
echo $trek->weightLbs() . "<br>";
echo "<hr>";

echo "Set weight for Unicycle<br>";
$uni->setWeightKg(1);
echo $uni->weightKg() . "<br>";
echo $uni->weightLbs() . "<br>";


?>