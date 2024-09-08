<?php

class Bird {
    public $name;
    public $habitat;
    public $diet;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public $flightAbility = true;

    protected static $instanceCount = 0;
    protected static $eggNum = 0;

    public static function create(){

    }

    public function returnFlightAbility() {
        $flightedString = $this->flightAbility === true ? "can fly" : $this->flightAbility . "is stuck on the ground";
        return  $flightedString ;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
}

class Kiwi extends Bird {
    public $name = "kiwi";
    public $diet = "omnivorous";
    public $flightAbility = false;
}