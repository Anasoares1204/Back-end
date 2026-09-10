<?php

$numeros = [1,2,3,4,5,6,7,8,9,10];
$maior = 0;

foreach ($numeros as $n){
    if ($n >= $maior){
        $maior = $n;
    }
}
  echo "O maior número é: $maior";
?> 