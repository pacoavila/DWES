<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T2-17-02.php</title>
  </head>
  <body>
      <div id="content">
        <?php
          $n = $_POST['n'];

          // si el número
          if ($n<0){
            $n = -$n;
          }

          if ( $n < 10 ) {
            $primera = n;
          }

          if (( $n >= 10 ) && ( $n < 100 )) {
            $primera = $n / 10;
          }

          if (( $n >= 100 ) && ( $n < 1000 )) {
            $primera = $n / 100;
          }

          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $primera = $n / 1000;
          }

          if ( $n >= 10000 ) {
            $primera = $n / 10000;
          }

          echo "La primera cifra del número introducido es ", floor($primera);
        ?>
        <br><br>
        <a href="T2-17-01.php">>> Volver</a>
  </body>
</html>
