<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

/* foreach ($tiendita_de_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $$price USD \n";
}
 */

foreach ($tiendita_de_cafes as $cafe => $price)
    echo "El cafe $cafe cuesta $$price USD \n";


?>