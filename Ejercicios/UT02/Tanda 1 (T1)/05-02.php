<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo "El área del rectángulo es ";
      echo round($_POST['ancho'] * $_POST['alto'], $precision = 2), " cm<sup>2</sup>";
    ?>
  </body>
</html>
