<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $modulos = array("PR" => "Programación", "BD" => "Bases de datos",
                       "DWES" => "Desarrollo web en entorno servidor");
      foreach ($modulos as $modulo) {
        print "Módulo: ".$modulo. "<br />";
      }
    ?>
    <br />
    <?php
      foreach ($modulos as $llave => $modulo) {
        print "Clave: ".$llave." Módulo: ".$modulo."<br />";
      }
    ?>
  </body>
</html>
