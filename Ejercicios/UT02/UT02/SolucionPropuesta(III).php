<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solución Propuesta (III)</title>
    <style type="text/css">
         td, th {border: 1px solid grey; padding: 4px;}
         th {text-align:center;}
         table {border: 1px solid black;}
    </style>
  </head>
  <body>
    <table>
      <tbody>
         <tr>
              <th>Variable</th>
              <th>Valor</th>
         </tr>
         <?php
            foreach ($_SERVER as $variable => $valor) {
              print "<tr>";
              print "<td>".$variable."</td>";
              print "<td>".$valor."</td>";
              print "</tr>";
            }
          ?>
      </tbody>
    </table>
  </body>
</html>
