<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>16.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n'])) {
          ?>
            Introduzca un número para saber si es primo o no.<br>
            <form action=16.php method="post">
              <input type="number" name="n" min="0" autofocus><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            // El 0 y el 1 no se consideran primos
            if (($n == 0) || ($n == 1)) {
              $esPrimo = false;
            } else {
              $esPrimo = true;
              for ($i = 2; $i <= $n/2; $i++) {
                if ($n % $i == 0) {
                  $esPrimo = false;
                }
            }
          }

            if ($esPrimo) {
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
        }
        ?>
        <br><br>
        <a href="16.php">>> Volver</a>
  </body>
</html>
