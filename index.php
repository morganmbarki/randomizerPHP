<?php
$list = array(
  '0' => 'Morgan',
  '1' => 'Marie-Helene',
  '2' => 'Audrey',
  '3' => 'Emilie',
  '4' => 'Louis',
  '5' => 'Lucas',
  '6' => 'Azzedine',
  '7' => 'Raphael',
  '8' => 'Jordan',
  '9' => 'Severine',
  '10' => 'Marie',
  '11' => 'Pauline',
  '12' => 'Mélanie');
  function randomizer(){
    $key = array_rand($list);
    return $list[$key];
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      <div>
        <!-- <label for="firstname"></label>
        <input type="text" name="firstname" disabled /> -->
      </div>
      <div>
        <input type="submit" value="RANDOMIZE" id="submit"/>
      </div>
        <?php
        if(isset($_POST['submit'])){

        echo randomizer();
      }
        ?>
    </form>
  </body>
</html>
