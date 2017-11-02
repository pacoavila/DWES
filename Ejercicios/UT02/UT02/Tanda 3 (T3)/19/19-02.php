<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>19-02.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['alturaIntroducida'])){
          ?>
          <h2>Pirámide</h2>
          <form action="19-02.php" method="post">
            Altura: <input type="number" name="alturaIntroducida" min="1" max="10" autofocus=""><br>
            Figura base:
            <select name="figura">
                <option value="bolita"
                      style="background-image: url(bolita.png);
                      background-repeat: no-repeat;
                      background-size: 15px;
                      background-position: 1px;
                      padding-left:20px;
                      ">Bolita</option>
                <option value="ladrillo"
                      style="background-image: url(ladrillo.png);
                      background-repeat: no-repeat;
                      background-size: 15px;
                      background-position: 1px;
                      padding-left:20px;
                      ">Ladrillo</option>
                <option value="pinguino"
                      style="background-image: url(pinguino.png);
                      background-repeat: no-repeat;
                      background-size: 15px;
                      background-position: 1px;
                      padding-left:20px;
                      ">Pingüino</option>
                <option value="pina"
                      style="background-image: url(pina.png);
                      background-repeat: no-repeat;
                      background-size: 15px;
                      background-position: 1px;
                      padding-left:20px;
                      ">Piña</option>
                <option value="sol"
                      style="background-image: url(sol.png);
                      background-repeat: no-repeat;
                      background-size: 15px;
                      background-position: 1px;
                      padding-left:20px;
                      ">Sol</option>
            </select>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else { // pinta la pirámide //////////////////////////////
            $alturaIntroducida = $_POST['alturaIntroducida'];
            $figura = $_POST['figura'];
            $altura = 1;
            $espacios = $alturaIntroducida - 1;

            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "<img src=\"blanco.png\" width=\"36\">";
              }

              // pinta la línea
              for ($i = 1; $i < $altura * 2; $i++) {
                echo "<img src=\"$figura.png\" width=\"36\">";
              }

              echo "<br>";

              $altura++;
              $espacios--;
            }
          }
          ?>
          <br><br>
          <a href="19-02.php">>> Volver</a>
  </body>
</html>
