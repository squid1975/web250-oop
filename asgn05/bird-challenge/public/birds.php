<?php 
  require_once('../private/initialize.php');
  $page_title = 'Sightings';
  include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

/* 
  Create a table. The header should reflect the headings in the wnc-birds.csv class.
  Use a table border of 1 to make the display easier to read.
*/

<table>
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation ID</th>
        <th>Backyard Tips</th>
      </tr>

    <?php 
    $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
    $bird_array = $parser->parse();
    ?>
     <?php foreach($bird_array as $arguments) { ?>
      <?php $bird = new Bird($arguments); ?>
      <tr>
        <td><?php echo h($bird->commonName);?></td>
        <td><?php echo h($bird->habitat);?></td>
        <td><?php echo h($bird->food);?></td>
        <td><?php echo h($bird->nestPlacement);?></td>
        <td><?php echo h($bird->behavior);?></td>
        <td><?php echo h($bird->backyardTips);?></td>
        <td><?php echo h($bird->conservationID);?></td>
      </tr>
    <?php } ?>

    </table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
