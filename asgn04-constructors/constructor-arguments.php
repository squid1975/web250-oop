<?php 

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($args=[]){
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }
}

$acadianFlycatcher = new Bird(['commonName'=>'Acadian Flycatcher', 'latinName' => 'Empidonax virescens']);

$carolinaWren = new Bird(['commonName'=>'Carolina Wren', 'latinName' => 'Thryothorus ludovicianus']);
?>