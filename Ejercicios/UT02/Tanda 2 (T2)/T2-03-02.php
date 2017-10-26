<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-03-02.php</title>
  </head>
  <body>
        <?php
          $n = $_POST['n'];

          switch($n) {
            case 1:
              $dia  = "lunes";
              break;
            case 2:
              $dia  = "martes";
              break;
            case 3:
              $dia  = "miércoles";
              break;
            case 4:
              $dia  = "jueves";
              break;
            case 5:
              $dia  = "viernes";
              break;
            case 6:
              $dia  = "sábado";
              break;
            case 7:
              $dia  = "domingo";
              break;
            default:
              $dia  = "Debe introducir un número del 1 al 7";
          }

          echo $dia;
        ?>
        <br><br>
        <a href="T2-03-01.php">>> Volver</a>
  </body>
</html>
