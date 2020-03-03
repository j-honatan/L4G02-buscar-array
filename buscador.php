<?php

  $Array1 =["ma","pa","ma","it"];
  $Array2 =["an","lu","ma","na"];
  $Array3 =["aq","to","ma","na","ro","we"];
  $Array4 =["an","to","im","na","ro","al"];
  $Array5 =["pa","to","im","ma","ro","al"];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>

<center>
-----------------------------DICCIONARIO DE PALABRAS--------------------------------<br><br>
    mama: <?= implode(',', $Array1) ?>
    <br> Array de salida: <?php  echo $Array1[0]?>,<?php  echo $Array1[2]?></br>

----------------------------------------------------<br>
    luna: <?= implode(',', $Array2) ?>
    <br> Array de salida: <?php  echo $Array2[1]?>,<?php  echo $Array2[3]?></br>
-----------------------------------------------------<br>
    toro: <?= implode(',', $Array3) ?>
    <br> Array de salida: <?php  echo $Array3[1]?>,<?php  echo $Array3[4]?></br>
 ----------------------------------------------------<br>
    animal: <?= implode(',', $Array4) ?>
    <br> Array de salida: <?php  echo $Array4[0]?>,<?php  echo $Array4[2]?>,<?php  echo $Array4[5]?></br>
-----------------------------------------------------<br>
    mapa: <?= implode(',', $Array5) ?>
    <br> Array de salida: <?php  echo $Array5[3]?>,<?php  echo $Array5[0]?></br>
</body>
</html>

