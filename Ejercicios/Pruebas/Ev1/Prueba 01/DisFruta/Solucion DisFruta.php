<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DisFruta con PHP</title>
  </head>
  <body>
    <center><h1>DisFruta con PHP</h1></center>
    <?php
        $numFrutas = rand(7,20);
        echo "<h2>$numFrutas frutas</h2>";
        echo '<p style="font-size: 7rem">';
        for ($i = 127815; $i < 127827; $i++){
          $contadores[$i] = 0;
        }
        for ($f = 0; $f < $numFrutas; $f++) {
          $fruta = rand(127815, 127827);
          echo "&#$fruta";
          $contadores[$fruta]++;
        }
        echo "<br>";
        for ($fruta = 127815; $fruta < 127827; $fruta++){
          if($contadores[$fruta]>0){
            echo '<p>La fruta <span style="font-size: 2rem">';
            echo "&#$fruta;</span> está ";
            echo "<strong>".$contadores[$fruta]."<strong>";
            echo "($$contadores[$fruta] === 1 ? "vez" : "veces")" e          } else {
              echo "</strong> veces en la lista.</p>";
            }

          }
        }

    ?>
    <br>
          <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>
        <br>

  </body>
</html>

<!--
<body>
    <?php
        $fruits = [];

    for ($i = 0; $i < rand(7, 20); $i++) {
        array_push($fruits, rand(127815, 127827));
    }
    ?>
    <h1>DisFruta con PHP</h1>
    <h2><?php echo count($fruits) . " frutas";?></h2>
    <p style="font-size: 7rem">
        <?php
        foreach ($fruits as $fruit) {
            echo "&#$fruit";
        }
        ?>
    </p>
    <h2>Resultados</h2>
    <?php
    for ($i = 127815; $i <= 127827; $i++) {
        $count = 0;

        for ($j = 0; $j < count($fruits); $j++) {
            if ($fruits[$j] === $i) {
                $count++;
            }
        }

        if ($count > 0) {
            echo "<p>La fruta <span style='font-size: 2rem'>&#$i</span> está <strong>$count</strong> " . ($count === 1 ? "vez" : "veces") . " en la lista.</p>";
        }
    }
    ?>
    <br>
        <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>
    <br>
</body>
</html>
--!>
