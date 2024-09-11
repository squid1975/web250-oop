<?php 

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName){
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
}

$robin = new Bird('Robin', 'Turdus migratorius');
$easternTowhee = new Bird ('Eastern Towhee', 'Pipilo erythrophthalmus');

?>