<?php

# Arreglos Asociativos

/* $edades = array(
    "Carlos" => 20,
    "Mr.Michi" => 18,
    "Juan" => 40,
);

echo "La edad de Mr. Michi es: " . $edades['Mr.Michi']; */

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

// echo "El precio del cafe Americano es de {$cafes['Americano']}";

$personas = array(
    "Carlos" => array(
        "edad"=> 20,
        "apellido" => "Santana"
    ),
    "Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),
);

echo "La informacion de Mr. Michi es: Edad: " . $personas["Michi"]["edad"] . " Apellido: " . $personas["Michi"]["apellido"] ;

echo "\n";

?>