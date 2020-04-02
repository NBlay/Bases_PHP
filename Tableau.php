<!DOCTYPE html>
<html>
  <body>
    <h1>yopyop2</h1>
    <ul>
      <li>Cyril</li>
      <li>Sofiane</li>
      <li>Nico</li>
    </ul>
    <ul>
    <?php
    $tableau = array ('Cyril', 'Sofiane','Nico');
    foreach ($tableau as $element) {
      echo "<li>$element</li>";
    }
    ?>
  </ul>
  <ul>
  <?php
  $tableau = array ('Cyril', 'Sofiane','Nico');
  for ($num=0;$num<3;$num++){
    //on peut remplacer ici $num<3 par $num<$tableau
    echo "<li>$tableau=[$num]</li>"
  }
  ?>
  </ul>
  <ul>
    //fonction while
    <?p
$tableau = array ('Cyril', 'Sofiane','Nico');
$i = 0;
while ($i <= 2) {
  echo "<li>$tableau=[$i]</li>" ;
  ?>
/* La valeur affichée est $i avant l'incrémentation
                   (post-incrémentation)
  </ul>
  </body>
</html>
