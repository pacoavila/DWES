<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba conexión MySQL</title>
  </head>
  <body>
    <?php
      $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123');
      $version = $dwes->getAttribute(PDO::ATTR_SERVER_VERSION);
      print "Versión: $version";

     ?>
  </body>
</html>
