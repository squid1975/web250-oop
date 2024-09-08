<?php

class Bird {
    public $name;
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public $flightAbility = true;

    protected static $instanceCount = 0;

    public function returnFlightAbility() {
        if ($this->flightAbility) {
            $flightedString = "can fly";
        } else {
            $flightedString = "is stuck on the ground";
        }
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
