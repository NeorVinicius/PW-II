<?php

$numeros=[-60, -50, -40, -30, -10, 20, 60, 70, 80, 90];
$negativos =0;
$positivos =0;

foreach ($numeros as $key => $numeros) {
      if($numeros < 0){
        $negativos++;
      } else if($negativos>0){
        $positivos++;
      }
};

echo 'Existem '. $positivos . ' números maiores que 0 <br>';
echo 'Existem '. $negativos . ' números menores que 0';

?>