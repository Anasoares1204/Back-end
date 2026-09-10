<?php

$musicas = ["Cadeira cativa", "Te esperando", "Bem querer/Primavera", "Foi por Conveniência", "Mística sublime", "Quem Ensinou Fui Eu" ];
$soma = 0;

foreach ($musicas as $musicas){
    echo "$musicas <br>";
    $soma = $soma + 1;
}
echo "Total de músicas: $soma";
?> 