<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>21.php</title>
  </head>
  <body>
      <?php
          // Se inicializan los valores en la primera carga de página
          if (!isset($_POST['n'])) {
            $n = 0;
            $cuentaNumeros = 0;
            $sumaImpares = 0;
            $cuentaImpares = 0;
            $mayorPar = -PHP_INT_MAX;
          } else {
            $n = $_POST['n'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
            $sumaImpares = $_POST['sumaImpares'];
            $cuentaImpares = $_POST['cuentaImpares'];
            $mayorPar = $_POST['mayorPar'];
          }

          if ($n > 0) {
            $cuentaNumeros++;
            if ($n % 2 == 0) {
              if ($n > $mayorPar) {
                $mayorPar = $n;
              }
            } else {
                $cuentaImpares++;
                $sumaImpares += $n;
            }
          }

          // Muestra el formulario en la primera carga de página y mientras se introduzcan números positivos
          if (!isset($_POST['n']) || ($n > 0)) {
          ?>
            Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>
            <form action="21.php" method="post">
              <input type="number" name="n" autofocus=""><br>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
              <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
              <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }

          // Muestra el resultado
          if ($n < 0) {
            echo "Se han introducido $cuentaNumeros números <br>";
            if ($cuentaImpares != 0){
              echo "La media de los impares es ".($sumaImpares / $cuentaImpares);
            } else {
              echo "Habían 0 impares";
            }
            echo "<br>";
            if ($mayorPar == -PHP_INT_MAX){
              echo "No hay mayor par";
            } else {
              echo "El mayor de los pares es $mayorPar<br>";
            }
          }
        ?>
        <br><br>
        <a href="21.php">>> Volver</a>
  </body>
</html>
