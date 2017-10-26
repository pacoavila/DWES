<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-01-02.php</title>
  </head>
  <body>
        <?php
          $dia = $_POST['dia'];

          switch($dia) {
            case "lunes":
              echo "Desarrollo en Entorno Servidor";
              break;

            case "martes":

            case "miércoles":
              echo "Libre Configuración";
              break;

            case "jueves":
              echo "Despliegue de Aplicaciones";
              break;

            case "viernes":
              echo "Diseño de Interfaces Web";
              break;

            case "sábado":

            case "domingo":
              echo "¡Ese día no hay clase!";
              break;

            default:
              echo "El día introducido no es correcto.";
          }
        ?>
        <br><br>
        <a href="T2-01-01.php">>> Volver</a>
  </body>
</html>
