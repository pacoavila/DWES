<!DOCTYPE html>
<!--
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP para familiarizarte con éste último.
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>EjercicioUT0104</title>
  </head>
  <body>
    <table>
        <tr>
          <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
        </tr>
        <?php
          echo "<tr><td>DWES</td><td>María</td><td>María</td>";
          echo "<td>María</td><td>María</td></tr>";
        ?>
        <tr><td>DWES</td><td>María</td><td>María</td><td>María</td><td>María</td></tr>
        <tr><td>María</td><td>María</td><td>María</td><td>María</td><td>María</td></tr>
        <tr><td colspan="5"><center>R E C R E O</center></td></tr>
        <tr><td>María</td><td>DWES</td><td>María</td><td>DWES</td><td>María</td></tr>
        <tr><td>María</td><td>DWES</td><td>María</td><td>DWES</td><td>María</td></tr>
        <tr><td>María</td><td>DWES</td><td>María</td><td>DWES</td><td>María</td></tr>
    </table>
  </body>
</html>
