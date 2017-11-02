<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "El total de la factura es ";
      echo round($_POST['baseImponible'] * 1.21, $precision = 2), " euros.";
    ?>
    <br><br>
    <a href="07-01.php">>> Volver</a>
  </body>
</html>
