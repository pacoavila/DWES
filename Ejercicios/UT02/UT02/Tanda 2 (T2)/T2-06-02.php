<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-06-02.php</title>
  </head>
  <body>
        <?php
          $h = $_POST['h'];
          $g = 9.81;
          $s = sqrt(2 * $h / $g);

          echo "El objeto tarda " . round($s, $precision = 2) . " segundos en caer.";
        ?>
        <br><br>
        <a href="T2-06-01.php">>> Volver</a>
  </body>
</html>
