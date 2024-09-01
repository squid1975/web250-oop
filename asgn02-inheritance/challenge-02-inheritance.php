<?php 

class Device {
  var $portable = false;
  var $screenLength;
  var $screenHeight;
  var $operatingSystem;
  var $brand;

  function screenArea(){
    return "The screen area in inches is ' . round($this->screenLength * $this->screenHeight).' ." ;
  }
}

class Phone extends Device {
  var $portable = true;
  var $cellNumber;
  var $usesCellularNetwork;

  function makeCall(){
    return "
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
  var $builtInWebcam;

}