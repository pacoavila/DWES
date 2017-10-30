<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
        <?php
          $n = $_POST['n'];

          if (($n % 2) == 0) {
            echo "El número introducido es par";
          } else {
            echo "El número introducido es impar";
          }

          if (($n % 5) == 0) {
            echo " y divisible entre 5.";
          } else {
            echo " y no es divisible entre 5.";
          }
        ?>
        <br><br>
        <a href="T2-14-01.php">>> Volver</a>
  </body>
</html>
