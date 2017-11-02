<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "El área del triángulo es ";
      echo round(($_POST['ancho'] * $_POST['alto']) / 2, $precision = 2), " cm<sup>2</sup>";
    ?>
    <br><br>
    <a href="06-01.php">>> Volver</a>
  </body>
</html>
