<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>01.php</title>
  </head>
  <body>
        <?php
          $n = $_POST['n'];

          $numeroIntroducido = $n;
          $numeroDeDigitos = 1;

          while ($n > 9) {
            $n = floor($n / 10);
            $numeroDeDigitos++;
          }

          echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
        ?>
        <br><br>
        <a href="09-01.php">>> Volver</a>
  </body>
</html>
