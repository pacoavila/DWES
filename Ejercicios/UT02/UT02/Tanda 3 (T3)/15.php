<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>15.php</title>
  </head>
  <body>
        <?php

          if (!isset($_POST['base'])) {
          ?>
            Este programa calcula una serie de potencias sucesivas a partir de la base y el exponente.<br>
            <form action="15.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponenteFinal"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $base = $_POST['base'];
            $exponenteFinal = $_POST['exponenteFinal'];

            for ($i = 0; $i <= $exponenteFinal; $i++) {
              $potencia = 1;
              $exponente = $i;

              for ($j = 0; $j < $exponente; $j++) {
                $potencia *= $base;
              }

              echo "$base<sup>$exponente</sup> = $potencia<br>";
            }
          }
          ?>
          <br><br>
          <a href="15.php">>> Volver</a>
  </body>
</html>
