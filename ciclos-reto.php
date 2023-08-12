<?php

$tienda = readline("Indica el numero de tienda a la que deseas ir: ");

$anterior = 0;
$actual = 1;

for ($i=2; $i <= $tienda ; $i++) { 
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

}

echo $actual;
echo "\n";

?>