<?php

$telefone = ["14999055201", "14998307471", "14997379447", "14999482032", "14996929658"];
$soma = 0;

foreach ($telefone as $numero){
    echo "$numero <br>";
    $soma = $soma + 1;
}
echo "total de contatos: $soma";
?> 