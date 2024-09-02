<?php 

class Device {
  public $portable = false;
  private $screenLength;
  private $screenWidth;
  public $operatingSystem;
  public $brand;
  public $model;


  public function setScreenLength($value){
    if($value <= 0){
      return "Screen length is undefined.";
    } else {
      $this->screenLength = $value;
    }
  }
  public function screenLength(){
    return $this->screenLength;
  }

  public function setScreenWidth($value){
    if($value <= 0){
      return "Screen width is undefined.";
    } else {
      $this->screenWidth = $value;
    }
  }

    public function screenWidth(){
      return $this->screenWidth;
    }
  

  public function describe(){
    $screenArea = round($this->screenLength * $this->screenWidth);
    $description = "The total screen area is $screenArea inches. The operating system for the device is  $this->operatingSystem and the brand model is the $this->brand $this->model.<br>" ;
    if($this->portable === true) {
    $description .= "This device is able to be carried anywhere.";
    } else {
    $description .= "This is a stationary device.";
    }
    return $description;
  }
}

class Phone extends Device {
  public $portable = true;
  public $cellNetwork;

  public function describe(){
    return  parent::describe() .  "This device is a a mobile phone, so it can be used on a cell network like  $this->cellNetwork. <br>";
  }

}

class Desktop extends Device {
  public $monitor;
  public $keyboard;
  public $mouse;
  public $tower;

   public function describe()
   {
       return parent::describe() . " This is the desktop setup: <br>
            $this->monitor  monitor <br>
            $this->keyboard  keyboard<br>
            $this->mouse  mouse <br>
            $this->tower tower. <br>";
   }
}

class Laptop extends Device {
  public $portable = true;
  private $carryWeightLbs;

  public function setCarryWeightLbs($value){
    if($value <= 0){
      return "Weight is undefined.";
    } else {
      $this->carryWeightLbs = $value;
    }
  }
  public function carryWeightLbs(){
    return $this->carryWeightLbs;
  }


  public function describe(){
    if ($this->carryWeightLbs < 5) {
      return  parent::describe() ."  This is a lightweight laptop at  $this->carryWeightLbs lbs, so it is easier to carry.";
    } else {
      return parent::describe() ."This is a heavier laptop at  $this->carryWeightLbs lbs , so you may need a laptop bag.";
    }
  }
}

/////////////////// Create instances 


/// Desktops 
$hpDesktop = new Desktop;
$hpDesktop->setScreenLength(19);
$hpDesktop->setScreenWidth(19);
$hpDesktop->operatingSystem = 'Windows';
$hpDesktop->brand = 'HP';
$hpDesktop->model = 'Elitedesk';
$hpDesktop->monitor = 'LCD';
$hpDesktop->keyboard = 'Basic black';
$hpDesktop->mouse = 'Basic black';
$hpDesktop->tower = 'Intel 2.13';

/// Laptops
$acerLaptop = new Laptop;
$acerLaptop->setScreenLength(15.6);
$acerLaptop->setScreenWidth(8);
$acerLaptop->operatingSystem = 'Windows';
$acerLaptop->brand = 'Acer';
$acerLaptop->model = 'Aspire';
$acerLaptop->setCarryWeightLbs(4.28);

/// Phone
$galaxyS23Ultra = new Phone;
$galaxyS23Ultra->setScreenLength(6.5);
$galaxyS23Ultra->setScreenWidth(3);
$galaxyS23Ultra->operatingSystem = 'Android';
$galaxyS23Ultra->brand = 'Samsung';
$galaxyS23Ultra->model = 'Galaxy S23 Ultra';
$galaxyS23Ultra->cellNetwork = 'Verizon';

// Output
echo "<h1>Devices</h1>";

echo "<h2>Desktops</h2>";

echo "<h3> $hpDesktop->brand desktop </h3>";
echo $hpDesktop->describe();

echo "<h2>Laptops</h2>";

echo "<h3> $acerLaptop->brand laptop </h3>";
echo $acerLaptop->describe();

echo "<h3> $galaxyS23Ultra->brand phone</h3>";
echo $galaxyS23Ultra->describe();
