<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-12-02.php</title>
  </head>
  <body>
        <?php
          $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'];
          echo "Ha obtenido $puntos puntos.";
        ?>
        <br><br>
        <a href="T2-12-01.php">>> Volver</a>
  </body>
</html>
