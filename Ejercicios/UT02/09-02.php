<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "El volumen del cono es ";
      $v = (1 / 3) * Math.pi() * $_POST['r'] * $_POST['r'] * $_POST['h'];
      echo round($v, $precision = 2), " cm<sup>2</sup>.";
    ?>
    <br><br>
    <a href="09-01.php">>> Volver</a>
  </body>
</html>
