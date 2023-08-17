<?php

/* function suma($a = 0, $b = 0) {
    echo "La suma de $a + $b es igual a: " . $a + $b . "\n";
} */


// suma();

// opeador: array unpacking (...$variable)

/* $arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];
$resultado = [...$arreglo1, ...$arreglo2];
var_dump($resultado); */

/* function suma($a, $b)
{
    echo "La suma de $a + $b es igual a: " . $a + $b . "\n";
}

$numeros = [1, 2];

suma(...$numeros); */

function suma_infinita(...$params){
    $suma = 0;

    foreach ($params as  $value) {
        $suma += $value;
    }

    echo "La sumatoria es: $suma \n";
}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);

echo "\n";
