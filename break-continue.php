<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

/* foreach ($tiendita_de_cafes as $cafe => $precio) {
    echo "Actualemente encontre el cafe $cafe \n";

    if ($cafe == "Latte") {
        echo "Encontramos a Latte!";
        break;
    }
} */

foreach ($tiendita_de_cafes as $cafe => $precio) {
    if ($cafe == "Latte") 
        continue;

    echo "El cafe $cafe es muy rico \n";
}

?>