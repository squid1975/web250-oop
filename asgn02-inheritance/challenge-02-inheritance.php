<?php 

class Device {
  var $portable = false;
  var $screenLength;
  var $screenWidth;
  var $operatingSystem;
  var $brand;
  var $model;

  function describe(){
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
  var $portable = true;
  var $cellNetwork;

  function describe(){
    return  parent::describe() .  "This device is a a mobile phone, so it can be used on a cell network like ' . $this->cellNetwork. '<br>";
  }

}

class Desktop extends Device {
  var $monitor;
  var $keyboard;
  var $mouse;
  var $tower;

   function describe()
   {
       return parent::describe() . " This is the desktop setup: <br>
            $this->monitor  monitor <br>
            $this->keyboard  keyboard<br>
            $this->mouse  mouse <br>
            $this->tower tower. <br>";
   }
}

class Laptop extends Device {
  var $portable = true;
  var $carryWeightLbs;

  function describe(){
    if ($this->carryWeightLbs < 5) {
      return  parent::describe() ."  This is a lightweight laptop at  $this->carryWeightLbs lbs , so it is easier to carry.";
    } else {
      return parent::describe() ."This is a heavier laptop at  $this->carryWeightLbs lbs , so you may need a laptop bag.";
    }
  }
}

/////////////////// Create instances 

echo "<h1>Devices</h1>";
/// Desktops 
$hpDesktop = new Desktop;
$hpDesktop->screenLength = 19;
$hpDesktop->screenWidth = 19;
$hpDesktop->operatingSystem = 'Windows';
$hpDesktop->brand = 'HP';
$hpDesktop->model = 'Elitedesk';
$hpDesktop->monitor = 'LCD';
$hpDesktop->keyboard = 'Basic black';
$hpDesktop->mouse = 'Basic black';
$hpDesktop->tower = 'Intel 2.13';


echo "<h2>Desktops</h2>";

echo "<h3> $hpDesktop->brand desktop </h3>";
echo $hpDesktop->describe();


/// Laptops
$acerLaptop = new Laptop;
$acerLaptop->screenLength = 15.6;
$acerLaptop->screenWidth = 8;
$acerLaptop->operatingSystem = 'Windows';
$acerLaptop->brand = 'Acer';
$acerLaptop->model = 'Aspire';
$acerLaptop->carryWeightLbs = 4.28;

echo "<h2>Laptops</h2>";

echo "<h3> $acerLaptop->brand laptop </h3>";
echo $acerLaptop->describe();

/// Phones
$galaxyS23Ultra = new Phone;
$galaxyS23Ultra->screenLength = 6.5;
$galaxyS23Ultra->screenWidth = 3;
$galaxyS23Ultra->operatingSystem = 'Android';
$galaxyS23Ultra->brand = 'Samsung Galaxy';
