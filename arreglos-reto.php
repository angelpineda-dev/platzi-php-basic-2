<?php

# Arreglos reto

/**
 * Por lo menos 3 michis
 * Colocar nombre, ocupacion, color, comidas
 * Las comidas deben ser comidas que les gusten y que no les gusten
 */

$michis = array(
    "aureliano" => array(
        "name" => "Aureliano",
        "ocupacion" => "Conductor de taxi",
        "color" => "gris",
        "comidas" => array(
            "gustan" => ["Wiskas", "Atun", "Agua", "Pollito"],
            "no_gustan" => ["Cafe", "Coca Cola", "Basura", "Manzana"]
        )
    ),
    "mauricio" => array(
        "name" => "Mauricio",
        "ocupacion" => "Profesor de media superior",
        "color" => "naranja",
        "comidas" => array(
            "gustan" => ["Wiskas", "Atun", "Agua", "Pollito"],
            "no_gustan" => ["Cafe", "Coca Cola", "Basura", "Manzana"]
        )
        ),
    "julian" => array(
        "name" => "Julian",
        "ocupacion" => "Alpinista",
        "color" => "blanco",
        "comidas" => array(
            "gustan" => ["Wiskas", "Atun", "Agua", "Pollito"],
            "no_gustan" => ["Cafe", "Coca Cola", "Basura", "Manzana"]
        )
    )
);

echo "Uno de los michis mas activos es " . $michis['julian']['name'] . ", quien se dedica a escalar montanias ya que su profesion es ser " . $michis['julian']['ocupacion'] . " es muy bueno en su profesion ya que el color de su pelo " . $michis['julian']['color'] . " le ayuda bastente en la nieve, ademas de alimentarse mucho con " . $michis['julian']['comidas']['gustan'][1] . " y evita tomar " . $michis['julian']['comidas']['no_gustan'][1] . '.';

//var_dump($michis);


echo "\n";

?>