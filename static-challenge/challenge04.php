<?php 


class Bicycle {

  public static $instanceCount = 0;

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

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
    // $wheel_string = $this-wheels == 1 ? "1 wheel" : "{$this->wheels} wheels"; return "It has " . $wheel_string .".";
    if($this->wheels == 1){
      return "It only has one wheel.";
    } else {
      return "It has $this->wheels wheels.";
    }
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
    protected $wheels = 1;
  }

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new Unicycle;

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