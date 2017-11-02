<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>18.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['n1'])){
            ?>
            Por favor, introduzca dos números enteros que no sean iguales.<br>
            <form action="18.php" method="post">
              <input type="number" name="n1" autofocus=""><br>
              <input type="number" name="n2"><br>
              <input type="submit" value="Aceptar">
            </form>
            <?php
            } else {
              $n1 = $_POST['n1'];
              $n2 = $_POST['n2'];
              if ($n1 != $n2) {
                  if ($n1 > $n2) {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                  }
                  for ($i = $n1; $i <= $n2; $i+=7) {
                    echo "$i  ";
                  }
                } else {
                 echo "Los números eran iguales, pruebe de nuevo";
              }
          }
        ?>
        <br><br>
        <a href="18.php">>> Volver</a>
  </body>
</html>
