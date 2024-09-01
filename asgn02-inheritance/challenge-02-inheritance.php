<?php 

class Device {
  var $portable = false;
  var $screenLength;
  var $screenHeight;
  var $operatingSystem;
  var $brand;

  function describe(){
    $screenArea = round($this->screenLength * $this->screenHeight);
    $description = "The screen area is $screenArea inches. The operating system for the device is  $this->operatingSystem and the brand is  $this->brand.<br>" ;
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
  var $cpu;

   function describe()
   {
       return parent::describe() . " This is the desktop setup: <br>
            $this->monitor .<br>
            $this->keyboard . <br>
            $this->mouse . <br>
            $this->cpu. <br>";
   }
}

class Laptop extends Device {
  var $portable = true;
  var $hasTrackPad = true;
  var $weightLbs;

  function describe(){
    if ($this->weightLbs < 5) {
      return  parent::describe() ."  This is a lightweight laptop at ' .  $this->weightLbs . 'lbs , so it is easier to carry.";
    } else {
      return parent::describe() ."This is a heavier laptop at ' .  $this->weightLbs . 'lbs , so you may need a laptop bag.";
    }
  }
}

/////////////////// Create instances 

/// Desktops 
$hpDesktop = new Desktop;
$hpDesktop->screenLength = 19;
$hpDesktop->screenHeight = 19;
$hpDesktop->operatingSystem = 'Windows';
$hpDesktop->brand = 'HP';
$hpDesktop->monitor = 'LCD Monitor';
$hpDesktop->keyboard = 'Basic keyboard';
$hpDesktop->mouse = 'Basic mouse';
$hpDesktop->cpu = 'Intel 2.13 Processor';
echo $hpDesktop->describe();
/// Laptops

/// Phones