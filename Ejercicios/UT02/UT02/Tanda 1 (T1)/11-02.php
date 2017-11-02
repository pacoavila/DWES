<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
      <?php
        echo $_POST['kb'], " Kb son ", round($_POST['kb'] / 1024, $precision = 2), " Mb.";
      ?>
      <br><br>
      <a href="11-01.php">>> Volver</a>
  </body>
</html>
