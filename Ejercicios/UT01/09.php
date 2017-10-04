<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable.
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>EjercicioUT0109</title>
  </head>
  <body>
    <?php
      $pesetas = 1000;
      $euros = round($pesetas / 166.386, 2);
      echo $pesetas, " pesetas son ", $euros, " euros";
     ?>
  </body>
</html>
