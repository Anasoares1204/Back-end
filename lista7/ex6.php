<?php

function calcularmedia($nota1, $nota2, $nota3) {
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    return "A média do aluno é: $resultado";
}

echo calcularMedia(2, 5, 5) . "<br>";
echo calcularMedia (10, 15, 12) . "<br>";
echo calcularMedia (5, 4, 9) . "<br>";

?>