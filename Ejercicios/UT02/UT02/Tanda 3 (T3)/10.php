<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>10.php</title>
  </head>
  <body>
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        <?php
        if (!isset($_POST['n'])) {
          $n = 0;
          $total = 0;
          $cuentaNumeros = 0;
        } else {
          $n = $_POST['n'];
          $total = $_POST['total'];
          $cuentaNumeros = $_POST['cuentaNumeros'];
        }
        if ($n >= 0) {
            $total += $n;
            $cuentaNumeros++;
            ?>
            <form action="10.php" method="post">
              <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
          ?>
            <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
            <br><br>
            <a href="10.php">>> Volver</a>
          <?php
          }
        ?>
    </body>
</html>
