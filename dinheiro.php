<?php
$dinheiro = 2501;

if ($dinheiro <= 1) {
    echo "Voce é POBRE!";
} elseif ($dinheiro <= 100) {
    echo "Voce é da CLASSE MEDIA!";
} elseif ($dinheiro <= 1000) {
    echo "Voce é RIQUINHO!";
} elseif ($dinheiro <= 2500) {
    echo "Voce é RICASSO!";
} else {
    echo "Voce é o ELON MUSK MINHA NOSSA";
}
