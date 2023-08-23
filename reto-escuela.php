<?php

/* 
    Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.
    Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.
    Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.
    Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.
*/

$years = (int) readline("Cuantos anios tienes? \n");

if ($years < 5 &&  $years > 1) {
    echo "El estudiante con $years años tendrá sus juguetes en la parte inferior de la bodega. \n";
} else if ($years <= 7 && $years >= 5) {
    echo "El estudiante con $years años tendrá sus juguetes en la parte media de la bodega. \n";
} else if ($years > 7) {
    echo "El estudiante con $years años tendrá sus juguetes en la parte alta de la bodega. \n";
} else if($years == 0){
    echo "El estudiante sin registro de edad tendra sus juguetes en el almacenamiento en la bodega de al lado. \n";
}

?>