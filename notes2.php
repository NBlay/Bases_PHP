<?php

echo "Bonjour, combien y-a-t'il d'élèves dans la classe ? \n";
$nombreEleves=(int)fread(STDIN, 80);
$tableaunotes[0]=0;

for ($num=1; $num<=$nombreEleves; $num++) {
  echo "Quelle est la note ?\n";
  $note = (int)fread(STDIN,80);
  $tableaunotes[$num-1]=$note;
  }

print_r($tableaunotes);

echo "Voulez vous plus d'infos ? 1=oui\n";
$reponse = (int)fread(STDIN,80);
if ($reponse==1)
{
$somme=0;
  foreach ($tableaunotes as $value)
  {
    $somme=(int)$somme+(int)$value;
  }
  echo "Voici la moyenne des notes \n";

  $moyenne=(int)$somme/(int)$nombreEleves;

  echo "$moyenne \n";
}

  echo "Voici la note minimale: \n";
  $Mini=20;
  foreach ($tableaunotes as $value)
  {
    if ($value<$Mini)
      {
        $Mini=$value;
      }

  }
  echo "$Mini \n";
    // on cherche ici a comparer chaque note à la meilleure note possible, puis on change cette meilleure note en la derniere vérifiée.

 echo "Voici la note maximale: \n";
 $maxi=0;
 foreach ($tableaunotes as $value)
 {
   if ($value>$maxi)
   {
     $maxi=$value;
   }
 }
echo "$maxi \n";
?>
