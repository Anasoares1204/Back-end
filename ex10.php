<?php

$peso = 45;
$altura = 1.55;
$altura2 = ($altura * $altura);
$resultado = $altura2 / $peso;

if( $resultado < 19){
    echo "Você está abaixo do peso";
}
elseif($resultado >= 19 && $resultado <= 24){
    echo "Você está no peso ideal!";
}
elseif($resultado>= 25 && $resultado <=29){
    echo "Você está com sobrepeso!";
}
elseif($resultado >= 30 && $resultado <=34){
    echo "Você está com obesidade grau 1";
}
elseif($resultado >= 35 && $resultado <=39){
    echo "Você está com obesidade grau 2";
}
elseif($resultado >= 40){
    echo "Você está com obesidade grau 3";
}
?>