<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>14.php</title>
  </head>
  <body>
        <?php

          if (!isset($_POST['base'])) {
          ?>
            Este programa calcula la potencia a partir de la base y el exponente.<br>
            <form action="14.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponente"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $potencia = 1;
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];

            if ($exponente == 0) {
              $potencia = 1;
            }

            if ($exponente > 0) {
              for ($i = 0; $i < $exponente; $i++) {
                $potencia *= $base;
              }
            }

            if ($exponente < 0) {
              for ($i = 0; $i < -$exponente; $i++) {
                $potencia *= $base;
              }

              $potencia = 1 / $potencia;
            }

            echo "$base<sup>$exponente</sup> = $potencia";
          }
        ?>
        <br><br>
        <a href="14.php">>> Volver</a>

    </body>
</html>
