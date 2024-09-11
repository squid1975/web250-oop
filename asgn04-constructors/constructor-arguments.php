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

echo "Common Name: " . $acadianFlycatcher->commonName ."<br>";
echo "Latin Name: " . $acadianFlycatcher->latinName ."<br>";
echo "<hr>";
echo "Common Name: " . $carolinaWren->commonName ."<br>";
echo "Latin Name: " . $carolinaWren->latinName ."<br>";

?>