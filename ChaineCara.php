<?php
echo "Combien de fois y'a t'il la lettre t dans Toto ? \n";
$name=array('t','o','t','o');
$compte=0;
foreach ($name as $value)
{
  if ($value=="t")
  {
    $compte=$compte+1;
  }
  else
  {
    $compte=$compte+0;
  }
}

echo $compte;


 ?>
