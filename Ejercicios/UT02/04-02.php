<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $x = $_POST['x'];
      $y = $_POST['y'];
      echo $x, " + ", $y, " = ", $x+$y, "<br>";
      echo $x, " - ", $y, " = ", $x-$y, "<br>";
      echo $x, " * ", $y, " = ", $x*$y, "<br>";
      echo $x, " / ", $y, " = ", round($x/$y, $precision = 2);
    ?>
  </body>
</html>
