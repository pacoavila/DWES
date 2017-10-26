<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>08-02.php</title>
  </head>
  <body>
        <table>
          <?php
            $n = $_POST['n'];

            echo "Tabla del $n<br><br>";
            for ($i = 0; $i < 11; $i++) {
              echo "<tr><td>$n x $i = ".$n*$i."</tr></td>";
            }
          ?>
        </table>
        <br><br>
        <a href="08-01.php">>> Volver</a>
  </body>
</html>
