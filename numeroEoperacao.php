<?php

$numero1 = 10;
$numero2 = 15;
echo "Escolha uma opção(1,2,3,4): ";
$operacao = readline(); //serve para ler dados digitados

if ($operacao == 1) {
    return $numero1 + $numero2;
} elseif ($operacao == 2) {
    return $numero1 - $numero2;
} elseif ($operacao == 3) {
    return $numero1 * $numero2;
} elseif ($operacao == 4) {
    return $numero1 / $numero2;
} else {
    echo "Opção invalida";
}
