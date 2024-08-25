<?php

// Create Bird class
class Bird {

  var $commonName;
  var $food = "bugs";
  var $nestPlacement = "tree";
  var $conservationLevel;

  function song($birdSong){
   echo "This birds' song sounds like: ".  $birdSong . "<br>";
  }

  function canFly($flighted) {
    if ($flighted === true){
      echo "This bird can fly." . "<br>";
    } else {
      echo "This bird cannot fly." . "<br>";
    }
  }

   function displayDetails(){
    echo "Bird Details:<br>";
    echo "Common Name: " . $this->commonName . "<br>";
    echo "Food: " . $this->food . "<br>";
    echo "Nest Placement: " . $this->nestPlacement . "<br>";
    echo "Conservation Level: " . $this->conservationLevel . "<br>";
  }
}

//Create Instances 
$bird1 = new Bird;
$bird2 = new Bird;

//Bird 1 
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->conservationLevel = 'Low';

//Bird 2
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadsides and railroad rights-of-fields and on the edges';
$bird2->conservationLevel = 'Low';

// Display bird info 
echo "<h1>Bird Information </h1>";

// Display bird 1 info
echo "<h2>Bird 1 </h2>";
$bird1->displayDetails();
$bird1->song('drink-your-tea!');
$bird1->canFly(true);

// Display bird 2 info 
echo "<h2>Bird 2 </h2>";
$bird2->displayDetails();
$bird2->song('whatwhat!');
$bird2->canFly(true);


?>