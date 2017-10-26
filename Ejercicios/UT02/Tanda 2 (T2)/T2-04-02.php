<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>T2-04-02.php</title>
  </head>
  <body>
        <?php
          $horasTrabajadas  = $_POST['horasTrabajadas'];

          if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas ;
          } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
          }

          echo "El sueldo semanal que le corresponde es de $sueldoSemanal euros";
        ?>
        <br><br>
        <a href="T2-04-01.php">>> Volver</a>
  </body>
</html>
