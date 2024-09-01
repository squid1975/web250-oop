<?php 

class Device {
  var $portable = false;
  var $screenLength;
  var $screenHeight;
  var $operatingSystem;
  var $brand;
  var $name;

  function screenArea(){
    return "The screen area in inches is ' . round($this->screenLength * $this->screenHeight).' ." ;
  }
}

class Phone extends Device {
  var $portable = true;
  var $cellNetwork;

  function networkAvailability(){
    return "This device is a a mobile phone, so it can be used on a cell network like ' . $this->cellNetwork. '<br>";
  }

}

class Desktop extends Device {
  var $monitor;
  var $keyboard;
  var $mouse;
  var $tower;
  function setup() {
    return "This is the setup: <br>
            $this->monitor .<br>
            $this->keyboard . <br>
            $this->mouse . <br>
            $this->tower. <br>";
  }
}

class Laptop extends Device {
  var $portable = true;
  var $hasTrackPad = true;
  var $weightLbs;

  function describeWeight(){
    if ($this->weightLbs < 5) {
      return "This is a lightweight laptop.";
    } else {
      return "This is a heavier laptop.";
    }
  }
}