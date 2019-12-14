<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      include 'index.php';//include class

      $area = new Rectangle();
      $area->setSize(5,5);
      echo $area->getArea();
      echo '<br>';
      echo $area->getPerimeter();
      echo '<br>';
      echo $area->getSquare();
       ?>


  </body>
</html>
