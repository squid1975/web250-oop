<?php include('autoload.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Autoload.php</title>
  </head>
  
  <body>
    <?php 
    $acadianFlycatcher = new Bird;
    $acadianFlycatcher->commonName = 'Acadian Flycatcher';
    
    echo "Common Name:" . $acadianFlycatcher->commonName . "<br>";
    ?>
  </body>
</html>

