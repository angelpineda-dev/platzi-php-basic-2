<?php
date_default_timezone_set("America/Mexico_City");


function get_time(){
    $date = getdate();
    
    return $date["hours"] . ":" . $date["minutes"] . ":" . $date["seconds"];
}

echo "Hola! Me podrias dar la hora? \n";

echo "Claro, la hora es: " . get_time() . "\n";

echo "\n";