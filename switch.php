<?php
$michi = 5;

// Michi 1: 9
// Michi 2: 4
// Michi 3: 3
// Michi 4: 9
// Michi 5: 9

switch ($michi) {
    case 1:
        // la importancia del break
    case 4:
        echo "Su numero favorito es el 9";
        break;

    case 2:
        echo "Su numero favorito es el 4";
        break;

    case 3:
        echo "Su numero favorito es el 3";
        break;


    case 5:
        echo "Su numero favorito es el 1";
        break;
    
    default:
        echo "Ese michi no existe";
        break;
}

echo "\n";
?>