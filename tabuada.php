<?php

$numeros = array(4, 7, 12879.5);

foreach ($numeros as $numero) {

    echo "Tabuada do $numero \n";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }

    echo "\n";
}
