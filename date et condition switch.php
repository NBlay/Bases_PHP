<html lang="en" dir="ltr">
  <body>
    <h1>TRYOUT</h1>
    <?php
    echo "Yopyop\n </br>";
    /* ceci est une saute
    de ligne*/
    //en php

    ?>
  </br>
  <?php
    echo date('j M Y H:i');
    ?>
  </br>
  <?php
    echo date ('j');
  ?>
  </br>
  <?php
    $mois=date('n');
    if ($mois=='4'){
      echo 'april';
    }
    ?>
  </br>
  <?php
    echo date ('Y');?>
  </br>

  <?php
  $mois=date('n');
    switch ($mois) {
      case 1 :
          echo "January";
          break;
      case 2:
          echo "February";
          break;
      case 3:
          echo "March";
          break;
      case 4:
          echo "April";
          break;
  }
  ?>
  </body>
</html>
