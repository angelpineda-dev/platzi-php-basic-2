<?php

$precios_de_cafes = [12, 34, 17, 94, 3, 45, 78, 43, 78];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump($precios_de_cafes);