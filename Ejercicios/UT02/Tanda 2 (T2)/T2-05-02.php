<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-05-02.php</title>
  </head>
  <body>
        <?php
          $a = $_POST['a'];
          $b = $_POST['b'];

          if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
          } else {
            echo "x = ", (-$b / $a);
          }
        ?>
        <br><br>
        <a href="T2-05-01.php">>> Volver</a>
  </body>
</html>
