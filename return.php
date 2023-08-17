<?php


function retornar_frase(){
    $numero_aleatorio = rand(1, 4);

    switch ($numero_aleatorio) {
        case 1:
            return 'Frase numero 1';

        case 2:
            return 'Frase numero 2';

        case 3:
            return 'Frase numero 3';

        case 4:
            return 'Frase numero 4';

        default:
            return 'Ninguna frase fue seleccionada.';

    }

}

$frase = retornar_frase();

echo "La frase seleccionada es: $frase \n";

echo "\n";