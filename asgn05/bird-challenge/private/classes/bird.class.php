<?php

class Bird {
// common_name|habitat|food|nest_placement|behavior|conservation_id|backyard_tips
/*
Use the wnc-birds.csv file to create the properties
Make all of the properties public.
*/
  public $commonName;
  public $habitat;
  public $food;
  public $nestPlacement;
  public $behavior;
  public $conservationID;
  public $backyardTips;
  /*
  Create a protected constant array called CONSERVATION_OPTIONS using the following scale.
  Use the CONDITION_OPTIONS from the bicycle.class.php file
  1 = Low concern
  2 = Moderate concern
  3 = Extreme concern
  4 = Extinct
  */
  protected const CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ]; 

 /*
   - Create a public __contruct that accepts a list of $args[]
   - Use the Null coalescing operator
   - Create a default value of 1 for conservation_id
 */
  public function __construct($arguments=[]){
    $this->commonName = $arguments['commonName'] ?? NULL;
    $this->habitat = $arguments['habitat'] ?? NULL;
    $this->food = $arguments['food'] ?? NULL;
    $this->nestPlacement = $arguments['nestPlacement'] ?? NULL;
    $this->behavior = $arguments['behavior'] ?? NULL;
    $this->conservationID = $arguments['conservationID'] ?? 1;
    $this->backyardTips = $arguments['backyardTips'] ?? NULL;
  }


/*
  Create a public method called conservation(). This method should mimic the
    public function condition() from the bicycle.class.php file


*/


}

?>
