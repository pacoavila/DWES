<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-07-02.php</title>
  </head>
  <body>
        <?php
          echo "La nota media es ";
          echo round(($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3, $precision = 2);
        ?>
        <br><br>
        <a href="T2-07-01.php">>> Volver</a>
  </body>
</html>
