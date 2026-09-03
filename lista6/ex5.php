<?php

$opcao = 3;
echo '<h1 style="color: green;">Minecraft</h1><br>';
echo "1- Jogar <br>";
echo "2- Ver personagens <br>";
echo "3- Ver ranking <br>";
echo "4- Configurações <br>";
echo "5- Sair <br><br>";

switch($opcao) {
    case 1:
        echo "Iniando o jogo...";
        break;
    case 2:
        echo "Ecolha um personagem";
        echo "Estive, Alex e Creeper ";
        break;
    case 3:
        echo "Abrindo ranking... <br>";
        echo "1. Jogador1 - 100 pontos <br>";
        echo "2. Jogador2 - 75 pontos <br>";
        echo "3. Jogador3 - 67 pontos <br>";
        break;
    case 4:
        echo "Abrindo configurações...";
        break;
    case 5:
        echo "Saindo do jogo...";
        break;
    default:
        echo "Opção inválida!";
}   
?>