<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solución Propuesta (V)</title>
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
          reset($_SERVER);
          while ($valor = each($_SERVER)) {
            print "<tr>";
            print "<td>".$valor[0]."</td>";
            print "<td>".$valor[1]."</td>";
            print "</tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
