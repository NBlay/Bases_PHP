<?php
echo "Quelle est la longueur du premier côté ? \n";
$cote1=(int)fread(STDIN,80);
echo "Quelle est la longueur du second côté ? \n";
$cote2=(int)fread(STDIN,80);

echo "Voici la longueur de l'hypothénuse: \n";
$carre1=$cote1*$cote1;
$carre2=$cote2*$cote2;
$somme=$carre1+$carre2;
$hypo=sqrt ($somme);

echo "$hypo \n"



 ?>
