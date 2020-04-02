<?php

echo "Bonjour, combien y-a-t'il d'élèves dans la classe ? \n";
$nombreEleves=fread(STDIN, 80);
$tableauNotes[0]=0;

for ($num=1; $num<=$nombreEleves; $num++) {
  echo "Quelle est la note ?\n";
  $note = fread(STDIN,80);
  $tableaunotes[$num-1]=$note;
  }

print_r($tableaunotes);

echo "Voulez vous plus d'infos ? 1=oui\n";
$reponse = fread(STDIN,80);
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


  echo "Voici la note minimale: \n";
  $Mini=20;
  foreach ($tableauNotes as $value)
  {
    if ($value<$Mini)
      {
        $Mini=$value;
      }

  }
  echo "$Mini \n";
    // on cherche ici a comparer chaque note à la meilleure note possible, puis on change cette meilleure note en la derniere vérifiée.
 
