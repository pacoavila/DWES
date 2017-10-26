<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-03-01.php</title>
  </head>
  <body>
        <?php
          $puntos = 0;

          foreach($_POST as $respuesta) {
            $puntos += $respuesta;
          }

          // Muestra el resultado del test

          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
          }

          if ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
          }

          if ( $puntos >= 22 ) {
            echo "Tu pareja tiene todos los ingredientes de estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües qué es lo que está pasando por su cabeza.";
          }

        ?>
        <br><br>
        <a href="T2-15-01.php">>> Volver</a>
  </body>
</html>
