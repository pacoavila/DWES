<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-02-02.php</title>
  </head>
  <body>
        <?php
          $hora = $_POST['hora'];

          if (($hora >= 6) && ($hora <= 11)) {
            echo "Buenos días";
          }

          if (($hora >= 12) && ($hora <= 20)) {
            echo "Buenas tardes";
          }

          if ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
            echo "Buenas noches";
          }

          if (($hora >= 24) || ($hora < 0)) {
            echo "La hora introducida no es correcta.";
          }
        ?>
        <br><br>
        <a href="T2-02-01.php">>> Volver</a>
  </body>
</html>
