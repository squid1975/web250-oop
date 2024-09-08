<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
  <hr>
<h1>Inheritance Examples</h1>

    <?php 
        include 'Bird.php';
        
        $bird = new Bird;
        echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

        $flyCatcher = new YellowBelliedFlyCatcher;
        echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

        $kiwi = new Kiwi;
        $kiwi->flightAbility = false;
        echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->returnFlightAbility() . ".</p>";
        echo "<p>The " . $kiwi->name . " " . $kiwi->returnFlightAbility() . ".</p>";    
    ?>
<hr>
<h2>Static Examples</h2>
  <h3>Before using the create method</h3>


  <h3>After using the create method</h3>

    </body>
</html>

