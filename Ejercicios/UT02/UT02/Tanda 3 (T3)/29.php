<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>29.php</title>
  </head>
  <body>
        <?php
          $numeroGrande = $_POST['numeroGrande'];
          $numeroPequeno = $_POST['numeroPequeno'];

          if (!isset($numeroGrande)){
          ?>
            <form action="29.php" method="post">
              Introduzca un número entero positivo (relativamente grande):
              <input type="number" name="numeroGrande" min="0" autofocus="" required=""><br>
              Introduzca otro número (relativamente pequeño):
              <input type="number" name="numeroPequeno" min="0" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
        <?php
          } else {
            $cuenta = 0;
            $suma = 0;

            echo "Los números enteros positivos menores que $numeroGrande";
            echo " que no son divisibles entre $numeroPequeno son los siguientes: <br>";

            for ($i = 1; $i < $numeroGrande; $i++) {
              if (($i % $numeroPequeno) != 0) {
                echo "$i ";
              }
            }
          }
        ?>
        <br><br>
        <a href="29.php">>> Volver</a>
  </body>
</html>
