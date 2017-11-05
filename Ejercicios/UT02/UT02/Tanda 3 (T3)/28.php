<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>17.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n'])){
          ?>
            <h2>Factorial</h2>
            Introduzca un número entero positivo:
            <form action="28.php" method="post">
              <input type="number" name="n" min="0" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $n = $_POST['n'];
            $factorial = $n;

            if ($n == 0) {
              echo "El factorial del 0 es 1.";
            } else {
              for ($i = 1; $i < $n; $i++) {
                $factorial *= $i;
              }

              echo "El factorial del $n es $factorial.";
            }
          }
        ?>
        <br><br>
        <a href="28.php">>> Volver</a>
    </body>
</html>
