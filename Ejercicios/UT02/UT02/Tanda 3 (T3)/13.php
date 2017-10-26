<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n'])) {
            $cuentaNumeros = 0;
            $positivos = 0;
          } else {
            $n = $_POST['n'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
            $positivos = $_POST['positivos'];
            $cuentaNumeros++;
            if ($n >= 0) {
              $positivos++;
            }
          }

          if ($cuentaNumeros == 0) {
            echo "Este programa lee una lista de diez números y determina cuántos son positivos, ";
            echo " y cuántos son negativos.<br>";
          } else {
            echo "<br>";
          }

          if ($cuentaNumeros < 10) {
          ?>
            <form action="13.php" method="post">
              Número <?php echo $cuentaNumeros+1; ?> <input type="number" name="n" autofocus>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
          if ($cuentaNumeros == 10) {
            echo "Se han introducido $positivos números positivos y ", (10 - $positivos), " números negativos.<br>";
          }
          ?>
        <br>
        <a href="13.php">>> Volver</a>
  </body>
</html>
