<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>17.php</title>
  </head>
  <body>
      <?php
        if (!isset($_POST['n'])) {
        ?>
          Por favor, introduzca un número entero positivo.<br>
          <form action="17.php" method="post">
            <input type="number" name="n" min="0" autofocus=""><br>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $suma = 0;
          $n = $_POST['n'];
          for ($i = $n + 1; $i < $n + 101; $i++) {
            $suma += $i;
          }

          echo "La suma de los 100 números enteros siguientes a $n es $suma";
          }
        ?>
        <br><br>
        <a href="17.php">>> Volver</a>
  </body>
</html>
