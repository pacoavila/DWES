<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-11-02.php</title>
  </head>
  <body>
        <?php
          $hora = $_POST['hora'];
          $minuto = $_POST['minuto'];

          $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
          $segundosHastaMedianoche = (24 * 3600) - $segundosTranscurridos;

          echo "Desde las $hora:$minuto hasta la medianoche faltan ";
          echo "$segundosHastaMedianoche segundos.";
        ?>
        <br><br>
        <a href="T2-11-01.php">>> Volver</a>
  </body>
</html>
