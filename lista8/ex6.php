<?php
$contador = 0; 
for ($i = 1; $i <= 50; $i++){
    if ($i % 3 == 0){
        echo "$i é múltiplo de 3<br>";
        $contador++;
    }
}
echo "<br>";
echo "Quantidade de múltiplo de 3: $contador";
?> 