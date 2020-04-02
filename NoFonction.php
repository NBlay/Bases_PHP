<?php
function affichageListe($table)
{
$i = 0;
  while ($i <= count($table)-1)
  {
    echo "<li>$table[$i]</li>";
    $i++;
  }
}
?>
