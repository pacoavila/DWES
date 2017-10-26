<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-016-02.php</title>
  </head>
  <body>
        <?php
            $n = $_POST['n'];
            echo "La última cifra de $n es ", $n % 10;
        ?>
        <br><br>
        <a href="T2-16-01.php">>> Volver</a>
  </body>
</html>
