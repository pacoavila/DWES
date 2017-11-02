
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      echo $_POST['pesetas'], " pesetas son ";
      echo round($_POST['pesetas'] / 166.386, $precision = 2), " euros.";
    ?>
  </body>
</html>
