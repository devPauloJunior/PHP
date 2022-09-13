<?php

$peso = 73;
$altura = 1.70;
$imc = $peso/$altura ** 2;

echo "Seu IMC é de $imc . Você está com IMC "; 

if ($imc < 18) {
    echo "Abaixo";
} elseif ($imc < 25) {
    echo "Dentro do esperado";
} else {
    echo "Acima";
} 

echo " do recomendado";